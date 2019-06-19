<?php
$mailSent = false;
// assumes the input contains nothing suspect
$suspect = false;
// regular expression to search for suspect phrases
$pattern = '/Content-type:|Bcc:|Cc:/i';

// recursive function that checks for suspect phrases
// third argument is passed by reference
function isSuspect($value, $pattern, &$suspect) {
  if (is_array($value)) {
    foreach ($value as $item) {
      isSuspect($item, $pattern, $suspect);
    }
  } else {
    if (preg_match($pattern, $value)) {
      $suspect = true;
    }
  }
}

// check the $_POST array for suspect phrases
isSuspect($_POST, $pattern, $suspect);

// process form only if no suspect phrases are found
if (!$suspect) :

  // check that required fields have been filled in
  //reassign expected elements to simple variables
  foreach ($_POST as $key => $value) {
    $value =  is_array($value) ? $value : trim($value);
    if (empty($value) && in_array($key, $required)) {
      $missing[] = $key;
      $$key = '';
    } elseif (in_array($key, $expected)) {
      $$key = $value;
    }
  }
  // validate user's email
  if (!$missing && !empty($email)) :
    $validEmail = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
      if ($validEmail) {
        $headers[] = "Replay-to: $validEmail";
      } else {
        $errors['email'] = true;
      }

  endif;

  // if no errors, create the headers and message body
  if (!$errors && !$missing) :
    $headers = implode("\r\n", $headers);
    // initialize message
    $message = '';
    foreach ($expected as $field) :
      if (isset($$field) && !empty($$field)) {
        $val = $$field;
      } else {
        $val = 'Not selected';
      }
      // if an array, expand to a comma-separared string
      if (is_array($val)) {
        $val = implode(", ", $val);
      }
      // replace underscores in the field names with spaces
      $field = str_replace('_', ' ', $field);
      $message .= ucfirst($field) . ": $val\r\n\r\n";
    endforeach;
    $message = wordwrap($message, 70);
    $mailSent = mail($to, $subject, $message, $headers, $authorized);
    if (!$mailSent) {
      $errors['mailfail'] = true;
    }
  endif;

endif;

?>
