<?php /* MANQA - FUNCTIONS AND DEFINITIONS */

/* MANQA SETUP */
if (!function_exists('manqa_setup')) :
  function manqa_setup() {
		// Title Tag
		add_theme_support('title-tag');
		// Post Thumbnails in posts and pages
		add_theme_support('post-thumbnails');
		// Menus: wp_nav_menu()
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'enred'),
		));
		// Valid HTML5 markup
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));
		// Image Sizes
		add_image_size('pageBanner', 1500, 350, true);

	} //enred_setup()
endif;
add_action('after_setup_theme', 'manqa_setup');

/* ENQUEUE STYLES AND SCRIPTS */
function enred_scripts() {
	// main styles
	wp_enqueue_style('manqa-style',get_stylesheet_uri());
  // main scripts
  wp_enqueue_script('manqa-bundle-scripts', get_template_directory_uri() . '/scripts/App.js', array(), '20151215', true);
	// google fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600');
	// Fontawesome
	wp_enqueue_script('manqa-fontawesome', 'https://use.fontawesome.com/b1403a6995.js', array(), '20170109', true);
	/* Keyboard Accesibility */
	wp_enqueue_script('manqa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'enred_scripts');


/* Custom template tags */
require get_template_directory() . '/inc/template-tags.php';

/* Template additional functions */
require get_template_directory() . '/inc/template-functions.php';

/* Customizer additions */
require get_template_directory() . '/inc/customizer.php';


