<?php /* template for displaying blog home */ ?>
<?php get_header(); ?>

<!-- PAGE BANNER -->
	<?php pageBanner(array(
		'photo'				=> get_theme_file_uri('images/banners/banner-noticias.jpg'),
		'title'				=> 'Noticias'
	)); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="wrapper wrapper--medium page-section">
				<!-- MAIN CONTENT -->
				<div class="generic-content-container noticias">

				<?php while (have_posts()) : the_post(); ?>
					<div class="entry-content noticias__block">
						<h2 class="noticias__block--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

						<div class="noticias__block--figure">
							<span class="noticias__block--figure-square"></span>
							<?php the_post_thumbnail('blog'); ?>
						</div>

						<p><?php if (has_excerpt()) { echo get_the_excerpt(); } else { echo wp_trim_words(get_the_content(), 60); } ?></p>
						<div class="noticiasfp__item--text-cta">
							<span class="cta"><a href="<?php the_permalink(); ?>" class="btn btn--blog">Leer más</a></span>
						</div>
					</div><!-- noticias__block -->
				<?php endwhile;	?>

				</div><!-- noticias -->
				<!-- PAGINATION -->
				<div class="noticias__pagination">
					<?php
						echo paginate_links(array(
							'prev_text'			=> __('<< Previo'),
							'next_text'			=> __('Siguiente>>'),
							'type'					=> 'plain'
						));
					?>
				</div><!-- noticias__pagination -->
			</div> <!-- wrapper -->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
