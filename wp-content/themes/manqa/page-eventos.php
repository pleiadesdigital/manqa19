<?php /* The template for displaying EVENTOS page */ ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<!-- PAGE BANNER -->
	<?php pageBanner(array(
		'photo'				=> get_theme_file_uri('images/banners/banner-eventos.jpg')
	)); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="wrapper wrapper--medium page-section">

				<!-- MAIN CONTENT -->
				<div class="generic-content-container eventos">
					<div class="entry-content escuelas__main-content">

						<?php the_content(); ?>

					</div>
				</div>

			</div> <!-- class="wrapper wrapper--medium page-section" -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile;	?>

<?php get_footer(); ?>
