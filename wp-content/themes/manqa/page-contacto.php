<?php /* The template for displaying CONTACTO page */ ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<!-- PAGE BANNER -->
	<?php pageBanner(array(
		'photo'				=> get_theme_file_uri('images/banners/banner-contacto.jpg')
	)); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="wrapper wrapper--medium page-section">

				<!-- METABOX -->

				<?php
					$theParent = wp_get_post_parent_id(get_the_ID());
					if($theParent) :
				?>
				<div class="metabox metabox--position-up metabox--with-home-link">
					<p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Volver a <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
				</div>
				<?php endif; ?>


				<!-- MAIN CONTENT -->
				<div class="generic-content-container">
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile;	?>

<?php get_footer(); ?>
