<?php /* The template for displaying NOSOTROS page */ ?>
<?php get_header(); ?>

<?php while (have_posts()) : the_post(); ?>

	<!-- PAGE BANNER -->
	<?php pageBanner(array(
		'photo'				=> get_theme_file_uri('images/banners/banner-nosotros.jpg')
	)); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


			<div class="wrapper wrapper--medium page-section nosotros">

				<!-- MAIN CONTENT -->
				<div class="generic-content-container">
					<div class="entry-content nosotros__main-content">
						<?php the_content(); ?>
					</div>
				</div>

			</div><!-- class="wrapper wrapper--medium page-section nosotros" -->

			<?php if (get_field("page_internal_image")) : ?>

			<div class="page-section__photo-separator-container">
				<div class="page-section__photo-separator-image" style="background-image: url('<?php echo get_field('page_internal_image')['sizes']['pageBanner']; ?>');"></div>
			</div>

			<?php endif; ?>


			<div class="nosotros">
				<div class="wrapper wrapper-medium nosotros__aliados">

					<div class="nosotros__aliados--text">
						<h2>Aliados</h2>
						<p>La sostenibilidad social y económica de Manq’a se basa en la vinculación con organizaciones de productores, restaurantes, juntas de vecinos, ministerios, ONGs, redes, sector público y privado y donantes.
						</p>
						<p>Gracias al apoyo de nuestros aliados Manq’a es un modelo que ha logrado capacitar a la fecha a más de 3155 jóvenes.</p>
					</div><!-- nosotros__aliados--text -->

					<div class="nosotros__aliados--text">
						<h4>Manq'a es un programa de:</h4>
						<ul class="nosotros__aliados--ul">
							<li class=" nosotros__aliados--li nosotros__aliados--li-u">
									<img src="<?php echo get_theme_file_uri('/images/aliados/icco-logo.png'); ?>" alt="Icco Cooperación">
							</li>
							<li class="nosotros__aliados--li nosotros__aliados--li-u">
								<img src="<?php echo get_theme_file_uri('/images/aliados/melting-pot-logo.png'); ?>" alt="Melting Pot Bolivia" width=200>
							</li>
						</ul>
						<h4>Con el apoyo de:</h4>
					</div>

					<ul class="nosotros__aliados--ul">

						<li class="nosotros__aliados--li">
								<img src="<?php echo get_theme_file_uri('/images/aliados/loteria-logo.png'); ?>" alt="Nationale Postcode Loterij">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/kerk-in-actie-logo.png'); ?>" alt="Kerk In Actie">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/union-europea-logo.png'); ?>" alt="Unión Europea">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/fida-logo.png'); ?>" alt="FIDA">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/reino-paises-bajos-logo.png'); ?>" alt="Reino de los Paises Bajos">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/fomin-positivo-logo.png'); ?>" alt="Fondo Multilateral de Inversiones">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/ybi-logo.png'); ?>" alt="Youth Business International">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/yep-logo.png'); ?>" alt="Youth Entrepreneurship Program">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/alianza-compromiso-logo.png'); ?>" alt="Alianza Compromiso">
						</li>
						<li class="nosotros__aliados--li">
							<img src="<?php echo get_theme_file_uri('/images/aliados/edukans-logo.png'); ?>" alt="Edukans">
						</li>
					</ul>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php endwhile;	?>

<?php get_footer(); ?>
