<?php
  // Template Name: Escuelas Template
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
					<p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-university" aria-hidden="true"></i>&nbsp; Volver a <?php echo get_the_title($theParent); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
				</div>
				<?php endif; ?>

				<!-- MAIN CONTENT -->
				<div class="generic-content-container escuelas">
					<div class="entry-content escuelas__main-content">
						<?php the_content(); ?>

						<?php if (!$theParent) : ?>

						<div class="landing_cpt">
							<p class="text-center">Elige un país para obtener información sobre nuestras escuelas:</p>
							<a href="<?php echo site_url('escuelas-bolivia'); ?>" class="btn btn--large btn--gradient-green-bol">BOLIVIA</a>
							<a href="<?php echo site_url('escuelas-colombia'); ?>" class="btn btn--large btn--gradient-yellow-col">COLOMBIA</a>
						</div> <!-- class="landing_cpt" -->

						<?php endif; ?>

					</div>
				</div>

			</div>


			<?php if (get_field("page_internal_image")) : ?>

			<div class="page-section__photo-separator-container">
				<div class="page-section__photo-separator-image" style="background-image: url('<?php echo get_field('page_internal_image')['sizes']['pageBanner']; ?>');"></div>
			</div>

			<?php endif; ?>

			<!-- MAIN CONTENT -->
			<div class="generic-content-container escuelas">
				<div class="entry-content escuelas__main-content escuelas__main-content--second">
					<?php echo get_field("second_content"); ?>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile;	?>

<?php get_footer(); ?>
