<?php /* Page for RESTAURANTE */ ?>

<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<?php pageBanner(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

			<div class="wrapper wrapper--medium page-section">
				<!-- MAIN CONTENT -->
				<div class="generic-content-container servicios">
					<div class="entry-content escuelas__main-content">
						<?php the_content(); ?>
					</div>
				</div>
			</div> <!-- class="wrapper wrapper--medium page-section" -->
      <div class="servicios__craft-bottom">
        <img src="<?php echo get_theme_file_uri('/images/branding/manqa-colors-rest2.png'); ?>" alt="Restaurante craft bottom">
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile;	?>

<?php get_footer(); ?>

