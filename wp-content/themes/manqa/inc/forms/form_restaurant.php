<?php $errors = [];
$missing = [];
if (isset($_POST['send'])) {
  $expected = ['nombre', 'company', 'email', 'phone', 'comments'];
  $required = ['nombre', 'email', 'comments'];

  /* arguments for mail function */
  $to = 'Rony Ortiz <ronyortizop@gmail.com>';
  $subject = 'Feedback from online form';
  $headers = [];
  $headers[] = 'From: webmaster@example.com';
  $headers[] = 'Cc: ronyortizop@yahoo.com';
  $headers[] = 'Content-type: text/plain; charset=utf-8';
  $authorized = 'null';
  require(get_template_directory() . '/inc/processMail.php');
  if ($mailSent) :
    $successMessage = '<h1 class="form__mailSentConfirmation">Su mensaje se envió con éxito. Nos pondremos en contacto en breve.</h1>';
  endif;
}
?>


<div class="formContainer">
  <form method="post" action="<?php site_url('/restaurant'); ?>" class="form form__restaurant">
    <?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
      <p class="warning">Lo sentimos, su mensaje no pudo ser enviado.</p>
    <?php elseif ($errors || $missing) : ?>
      <p class="warning">Por favor corrija los elementos indicados</p>
    <?php endif; ?>



    <div class="contact__form-box--field">
      <?php if ($missing && in_array('nombre', $missing)) : ?>
        <p class="warning warning-field">Ingrese su nombre y apellido</p>
      <?php endif; ?>
      <input type="text" name="nombre" id="nombre" placeholder="Nombre y apellido *" <?php if ($errors || $missing) { echo 'value="' . stripslashes(htmlentities($nombre)) . '"'; } ?>>
    </div>

    <div class="contact__form-box--field">
      <?php if ($missing && in_array('company', $missing)) : ?>
        <p class="warning warning-field">Ingrese la empresa</p>
      <?php endif; ?>
      <input type="text" name="company" id="company" placeholder="Empresa" <?php if ($errors || $missing) {echo 'value="' . stripslashes(htmlentities($company)) . '"'; } ?>>
    </div>

    <div class="contact__form-box--field">
      <?php if ($missing && in_array('email', $missing)) : ?>
        <p class="warning warning-field">Ingrese su email</p>
      <?php elseif(isset($errors['email'])) : ?>
        <p class="warning warning-field">El email no tiene el formato correcto</p>
      <?php endif; ?>
      <input type="text" name="email" id="email" placeholder="Correo electrónico *" <?php if ($errors || $missing) { echo 'value="' . stripslashes(htmlentities($email)) . '"'; } ?>>
    </div>

    <div class="contact__form-box--field">
      <?php if ($missing && in_array('phone', $missing)) : ?>
        <p class="warning warning-field">Ingrese su teléfono</p>
      <?php endif; ?>
      <input type="text" name="phone" id="phone" placeholder="Teléfono" <?php if ($errors || $missing) { echo 'value="' . stripslashes(htmlentities($phone)) . '"'; } ?>>
    </div>

    <div class="contact__form-box--field">
      <?php if ($missing && in_array('message', $missing)) : ?>
        <p class="warning warning-field">Ingrese sus comentarios</p>
      <?php endif; ?>
      <textarea name="comments" id="comments" placeholder="¿Cómo lo podemos ayudar? *" cols="30" rows="10"><?php if ($errors || $missing) { echo stripslashes(htmlentities($comments)); } ?></textarea>
    </div>

    <div class="contact__form-box--field">
      <input type="submit" name="send" id="send" value="Enviar">
    </div>
    <?php
      if($mailSent) {
        echo $successMessage;
      }
    ?>

  </form>
</div><!-- class="formContainer" -->

