<?php /* Functions which enhance the theme by hooking into WordPress */


function manqa_body_classes($classes) {
	// Adds a class of hfeed to non-singular pages.
	if (!is_singular()) {
		$classes[] = 'hfeed';
	}
	// Adds a class of no-sidebar when there is no sidebar present.
	if (!is_active_sidebar('sidebar-1')) {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter('body_class', 'manqa_body_classes');

/* Page Banner function */
function pageBanner($args = NULL) {
	if (!$args['title']) {
		$args['title'] = get_the_title();
	}
	if (!$args['subtitle']) {
		$args['subtitle'] = get_field('page_subtitle');
	}
	if (!$args['photo']) {
		if (get_field('banner_image')) {
			$args['photo'] = get_field('banner_image')['sizes']['pageBanner'];
		} else {
			$args['photo'] = get_theme_file_uri('/images/banners/banner-default.jpg');
		}
	}
?>
	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php
			echo $args['photo'];
		?>);"></div>
		<div class="page-banner__content wrapper wrapper--medium">
			<header class="entry-header">
				<h1 class="page-banner__title"><?php echo $args['title']; ?></h1>
				<?php if ($args['subtitle']) : ?>
				<div class="page-banner__intro">
					<p><?php echo $args['subtitle']; ?></p>
				</div>
				<?php endif; ?>
			</header>
		</div>
	</div><!-- class="page-banner" -->
	<!-- LINEA ADORNO DE COLORES     -->
	<?php if (	is_page('restaurante')) : ?>
		<div class="large-hero__bottom-crafts">
			<img src="<?php echo get_theme_file_uri('/images/branding/manqa-colors-rest1.png'); ?>" alt="bottom-crafts">
		</div>
	<?php else : ?>
		<div class="large-hero__bottom-line">
			<span class="large-hero__bottom-line--col1"></span>
			<span class="large-hero__bottom-line--col2"></span>
			<span class="large-hero__bottom-line--col3"></span>
			<span class="large-hero__bottom-line--col4"></span>
			<span class="large-hero__bottom-line--col5"></span>
		</div>
	<?php endif; ?>

<?php }

