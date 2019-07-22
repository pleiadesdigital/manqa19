<?php /* The template for displaying CONTACTO page */ ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<!-- PAGE BANNER -->
	<?php pageBanner(array(
		'title'				=> 'Contáctanos',
		'photo'				=> get_theme_file_uri('images/banners/banner-contacto.jpg')
	)); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="wrapper wrapper--medium page-section">

				<!-- MAIN CONTENT -->
				<div class="generic-content-container contacto">
					<div class="entry-content contacto__main-content">

						<?php the_content(); ?>

					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile; ?>

<?php get_footer(); ?>
