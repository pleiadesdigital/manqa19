<?php /* The template for displaying all single posts */ ?>
<?php get_header(); ?>

<!-- PAGE BANNER -->
	<?php pageBanner(array(
		'photo'				=> get_theme_file_uri('images/banners/banner-noticias.jpg')
	)); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="wrapper wrapper--medium page-section">
				<!-- MAIN CONTENT -->
				<div class="generic-content-container">
				<?php while (have_posts()) : the_post(); ?>
					<div class="entry-content">
						<h3>This is the SINGLE NOTICIAS template</h3>
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
				<?php endwhile;	?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
