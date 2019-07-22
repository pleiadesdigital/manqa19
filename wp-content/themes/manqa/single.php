<?php /* The template for displaying all single posts */ ?>
<?php get_header(); ?>

<!-- PAGE BANNER -->
	<?php pageBanner(array(
		'photo'				=> get_the_post_thumbnail_url($post_id, 'pageBanner', array('class' => 'singlePageBanner'))
	)); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="wrapper wrapper--medium page-section">

				<!-- METABOX -->
				<?php
					$theParent = wp_get_post_parent_id(get_the_ID());
					if(is_single()) :
				?>
				<div class="metabox metabox--single-post metabox--with-home-link">
					<p><a class="metabox__blog-home-link" href="<?php echo site_url('noticias'); ?>"><i class="fa fa-newspaper-o" aria-hidden="true"></i>&nbsp; Volver a Noticias</a> <span class="metabox__main"><?php the_title(); ?></span></p>
				</div>
				<?php endif; ?>

				<!-- MAIN CONTENT -->
				<div class="generic-content-container">
				<?php while (have_posts()) : the_post(); ?>
					<div class="entry-content">
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
				<?php endwhile;	?>
				</div>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->


<?php get_footer(); ?>
