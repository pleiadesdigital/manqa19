<?php
  // Template Name: Servicios Template
  // Template Type: post, page
?>


<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<?php pageBanner(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="wrapper wrapper--medium page-section">
				<!-- METABOX -->

				<?php
					$theParent = wp_get_post_parent_id(get_the_ID());
					if($theParent) :
				?>
				<div class="metabox metabox--position-up metabox--with-home-link">
					<p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-cogs" aria-hidden="true"></i>&nbsp; Volver a <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
				</div>
				<?php endif; ?>

				<!-- MAIN CONTENT -->
				<div class="generic-content-container servicios">
					<div class="entry-content escuelas__main-content">
						<?php the_content(); ?>

						<?php if (!$theParent) : ?>

						<div class="landing_cpt">
							<p>Elige un servicio para obtener más información:</p>
							<a href="<?php echo site_url("restaurante"); ?>" class="btn btn--gradient-grey">RESTAURANTE</a>
							<a href="<?php echo site_url("catering"); ?>" class="btn btn--large btn--gradient-pink">CATERING</a>
							<a href="<?php echo site_url("turismo-gastronomico"); ?>" class="btn btn--large btn--gradient-green-bol">TURISMO GASTRONÓMICO</a>
						</div> <!-- class="landing_cpt" -->

						<?php endif; ?>
					</div>
				</div>

			</div> <!-- class="wrapper wrapper--medium page-section" -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile;	?>

<?php get_footer(); ?>
