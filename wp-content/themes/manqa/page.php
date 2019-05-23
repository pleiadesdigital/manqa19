<?php /* The template for displaying all pages */ ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<!-- PAGE BANNER -->
	<div class="page-banner">
		<div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/banners/banner-escuelas.jpg'); ?>);"></div>

		<div class="page-banner__content wrapper wrapper--medium">
			<header class="entry-header">
				<h1 class="page-banner__title"><?php the_title(); ?></h1>
				<div class="page-banner__intro">
					<p>Escuelas en Bolivia y Colombia</p>
				</div>
			</header>
		</div>

	</div><!-- class="page-banner" -->

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


				<!-- PAGE LINKS -->
				<?php
					$testArray = get_pages(array(
						'child_of'		=> get_the_id()
					));
				?>
				<?php if ($theParent || $testArray || is_page('55')) : ?>
					<div class="page-links">
					<h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
					<ul class="min-list">
						<?php
							if ($theParent) {
								$findChildrenOf = $theParent;
							} else {
								$findChildrenOf = get_the_id();
							}
							wp_list_pages(array(
								'title_li'			=> NULL,
								'child_of'			=> $findChildrenOf,
								'sort_column'		=> 'menu_order'
							));
						?>
					</ul>
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
