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
			'menu-1' 	=> esc_html__('Primary', 'enred'),
			'social'	=> esc_html('Social Menu', 'zero17'),
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
		add_image_size('pageBanner', 2200, 1238, false);
		add_image_size('blog', 600, 300, true);
	} //manqa_setup()
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
	// fontawesome
	wp_enqueue_script('manqa-fontawesome', 'https://use.fontawesome.com/b1403a6995.js', array(), '20170109', true);
	/* keyboard accessibility */
	wp_enqueue_script('manqa-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);
}
add_action('wp_enqueue_scripts', 'enred_scripts');

/* Custom template tags */
require get_template_directory() . '/inc/template-tags.php';
/* Template additional functions */
require get_template_directory() . '/inc/template-functions.php';
/* Customizer additions */
require get_template_directory() . '/inc/customizer.php';
/* SVG icon functions and filters */
require get_parent_theme_file_path('/inc/icon-functions.php');

/* MODIFYING DEFAULT QUERIES */
/* modify main blog query for noticias */
function blog_adjust_query($query) {
	if (!is_admin() && $query->is_main_query()) {
		$query->set('category_name', 'noticias');
		$query->set('posts_per_page', 9);
	}
}
add_action('pre_get_posts', 'blog_adjust_query');
