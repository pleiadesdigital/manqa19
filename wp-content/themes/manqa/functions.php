<?php
/* EN RED FUNCTIONS AND DEFINITIONS */

if (!function_exists('enred_setup')) :
  function enred_setup() {
		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');
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
		// Custom logo.
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	} //enred_setup()
endif;
add_action('after_setup_theme', 'enred_setup');

/* REGISTER WIDGET AREA */
function enred_widgets_init() {
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'enred'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'enred'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'enred_widgets_init');

/* ENQUEUE STYLES AND SCRIPTS */
function enred_scripts() {
	// main styles
	wp_enqueue_style( 'enred-style',get_stylesheet_uri());
  // main scripts
  wp_enqueue_script('enred-bundle-scripts', get_template_directory_uri() . '/scripts/App.js', array(), '20151215', true);
	// google fonts
	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600');

	wp_enqueue_script('enred-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

	wp_enqueue_script('enred-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'enred_scripts');


/* Custom template tags */
require get_template_directory() . '/inc/template-tags.php';

/* Template additional functions */
require get_template_directory() . '/inc/template-functions.php';

/* Customizer additions */
require get_template_directory() . '/inc/customizer.php';


