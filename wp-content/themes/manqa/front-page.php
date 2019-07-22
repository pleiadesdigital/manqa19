<?php get_header(); ?>

<!-- LARGE HERO -->
<div class="large-hero">
    <picture class="large-hero__image">
        <source srcset="<?php echo get_theme_file_uri('images/fp-hero/hero--large.jpg'); ?> 1920w, <?php echo get_theme_file_uri('images/fp-hero/hero--large-hi-dpi.jpg'); ?> 3840w" media="(min-width: 1380px)">
        <source srcset="<?php echo get_theme_file_uri('images/fp-hero/hero--medium.jpg'); ?> 1380w, <?php echo get_theme_file_uri('images/fp-hero/hero--medium-hi-dpi.jpg'); ?> 2760w" media="(min-width: 990px)">
        <source srcset="<?php echo get_theme_file_uri('images/fp-hero/hero--small.jpg'); ?> 990w, <?php echo get_theme_file_uri('images/fp-hero/hero--small-hi-dpi.jpg'); ?>, 1980w" media="(min-width: 640px)">
        <img srcset="<?php echo get_theme_file_uri('images/fp-hero/hero--tiny.jpg'); ?> 640w, <?php echo get_theme_file_uri('images/fp-hero/hero--tiny-hi-dpi.jpg'); ?> 1280w" alt="RO Web Developer Cover Photo">
    </picture>
    <!-- LINEA ADORNO DE COLORES     -->
    <div class="large-hero__bottom-line">
        <span class="large-hero__bottom-line--col1"></span>
        <span class="large-hero__bottom-line--col2"></span>
        <span class="large-hero__bottom-line--col3"></span>
        <span class="large-hero__bottom-line--col4"></span>
        <span class="large-hero__bottom-line--col5"></span>
    </div>
</div><!-- class="large-hero" -->

<!-- PROJECTS -->
<div id="projects" class="projects page-section page-section--midsilver">
    <div class="wrapper">
        <div class="projects__title-text">
            <p>Manq ́a quiere decir “comida” en lengua aymara. Es un modelo de formación gastronómica orientado a la generación de mejores oportunidades de vida para jóvenes de escasos recursos en Bolivia y víctimas del conflicto armado en Colombia.</p>
        </div>

        <!-- MAIN PROJECTS -->
		<div class="projects__cards generic-content-container">

      <div class="projects__card">
        <div class="projects__card--square1"></div>
				<figure>
					<img src="<?php echo get_theme_file_uri('images/about/services1.jpg'); ?>" alt="Proyecto 2">
					<figcaption class="figcaption figcaption--1">
						<h2>Escuelas</h2>
						<p>Visita nuestras escuelas en Bolivia y Colombia</p>
						<a href="<?php echo site_url("/escuelas"); ?>" class="btn btn--small btn--gradient-orange btn--delay">Leer más</a>
					</figcaption>
				</figure>
			</div>

			<div class="projects__card">
				<figure>
					<img src="<?php echo get_theme_file_uri('images/about/services2.jpg'); ?>" alt="Proyecto 2">
					<figcaption class="figcaption figcaption--2">
						<h2>Modelos</h2>
						<p>Educativo <br>Inserción Laboral <br>Emprendimientos <br>Mentoría</p>
						<a href="<?php echo site_url("/modelos"); ?>" class="btn btn--small btn--gradient-purple btn--delay">Leer más</a>
					</figcaption>
				</figure>
			</div>

			<div class="projects__card">
					<div class="projects__card--square2"></div>
					<figure>
							<img src="<?php echo get_theme_file_uri('images/about/services3.jpg'); ?>" alt="Proyecto 3">
							<figcaption class="figcaption figcaption--3">
									<h2>Servicios</h2>
									<p>Catering <br> Restaurant <br> Turismo</p>
									<a href="<?php echo site_url("/servicios"); ?>" class="btn btn--small btn--gradient-green btn--delay">Leer más</a>
							</figcaption>
					</figure>
			</div>
		</div>

        <div class="projects__title-text m-top-larger">
            <p>Buscamos que la formación gastronómica no sea un fin en sí mismo, sino un medio que nos permita tener un impacto mayor en la vida de los pequeños productores rurales, la de los consumidores finales, la de los jóvenes en situación vulnerable y sus familias.</p>
        </div>

    </div> <!-- wrapper -->
</div> <!-- class="projects -->

<!-- IMG SECTION -->
<div id="imgsec" class="imgsec">
    <div class="imgsec__backimg" style="background-image: url(<?php echo get_theme_file_uri('images/fp-hero/manqa-campesino2.jpg'); ?>)"></div>
    <!-- LINEA ADORNO DE COLORES     -->
    <div class="large-hero__bottom-line">
        <span class="large-hero__bottom-line--col1"></span>
        <span class="large-hero__bottom-line--col2"></span>
        <span class="large-hero__bottom-line--col3"></span>
        <span class="large-hero__bottom-line--col4"></span>
        <span class="large-hero__bottom-line--col5"></span>
    </div>
</div>

<!-- STATS -->
<div id="stats" class="stats page-section">
    <div class="wrapper">
        <!-- MAIN PROJECTS -->
        <div class="stats__cards generic-content-container">

            <div class="stats__card stats__card--1">
							<h2>3155</h2>
							<p class="text-center">JÓVENES GRADUADOS</p>
            </div>
            <div class="stats__card stats__card--2">
							<h2>3155</h2>
							<p class="text-center">JÓVENES GRADUADOS</p>
            </div>
            <div class="stats__card stats__card--3">
							<h2>3155</h2>
							<p class="text-center">JÓVENES GRADUADOS</p>
            </div>
            <div class="stats__card stats__card--4">
							<h2>3155</h2>
							<p class="text-center">JÓVENES GRADUADOS</p>
            </div>
            <div class="stats__card stats__card--5">
							<div class="stats__card--square2"></div>
							<h2>3155</h2>
							<p class="text-center">JÓVENES GRADUADOS</p>
            </div>
        </div>
    </div> <!-- wrapper -->
</div> <!-- class="projects -->

<!-- NOTICIAS -->
<?php
  $args = array(
    'posts_per_page'        => 3,
    'post_type'             => 'post',
    'category_name'         => 'noticias',
    'order'                 => 'DESC'
  );
  $query = new WP_Query($args);
?>
<div id="noticiasfp" class="noticiasfp page-section">
  <div class="wrapper wrapper--medium">

    <h2 class="section-title"><a href="<?php echo site_url('noticias'); ?>">Noticias</a></h2>

    <?php while($query->have_posts()) : $query->the_post(); ?>
    <div class="noticiasfp__item">

      <div class="noticiasfp__item--figure">
        <span class="noticiasfp__item--figure-square"></span>
        <?php the_post_thumbnail(); ?>
      </div>

      <div class="noticiasfp__item--text">
        <div class="noticiasfp__item--text-content">
          <div class="noticiasfp__item--text-titlemeta">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <span class="metadata--date"><?php echo the_time('M j, Y'); ?></span>
          </div>
          <p><?php if (has_excerpt()) { echo get_the_excerpt(); } else { echo wp_trim_words(get_the_content(), 30); } ?></p>
        </div>
        <div class="noticiasfp__item--text-cta">
          <span class="cta"><a href="<?php the_permalink(); ?>" class="btn btn--blog">Leer más</a></span>
        </div>


      </div>
    </div><!-- class="noticias__item" -->
    <?php endwhile; ?>
  </div>
</div><!-- class="noticias -->

<?php wp_reset_postdata(); ?>



<?php get_footer(); ?>
