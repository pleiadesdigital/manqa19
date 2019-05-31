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
                <figure>
                    <img src="<?php echo get_theme_file_uri('images/about/services1.jpg'); ?>" alt="Proyecto 1">
                    <figcaption class="figcaption figcaption--1">
                        <h2>Provident ut nulla</h2>
                        <p>Lorem ipsum dolor sit amet, consequat odio ipsum dolor aenean ac aliquam</p>
                        <a href="#" class="btn btn--small btn--gradient-orange">Leer más</a>
                    </figcaption>
                </figure>

            </div>

            <div class="projects__card">
                <figure>
                    <img src="<?php echo get_theme_file_uri('images/about/services2.jpg'); ?>" alt="Proyecto 2">
                    <figcaption class="figcaption figcaption--2">
                        <h2>Magna neque sollicitudin</h2>
                        <p>Lorem ipsum dolor sit amet, consequat odio ipsum dolor aenean ac aliquam</p>
                        <a href="#" class="btn btn--small btn--gradient-purple">Leer más</a>
                    </figcaption>
                </figure>
            </div>

            <div class="projects__card">
                <figure>
                    <img src="<?php echo get_theme_file_uri('images/about/services3.jpg'); ?>" alt="Proyecto 3">
                    <figcaption class="figcaption figcaption--3">
                        <h2>Amet tellus etiam</h2>
                        <p>Lorem ipsum dolor sit amet, consequat odio ipsum dolor aenean ac aliquam</p>
                        <a href="#" class="btn btn--small btn--gradient-green">Leer más</a>
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
                <p>JÓVENES GRADUADOS</p>
            </div>
            <div class="stats__card stats__card--2">
                <h2>3155</h2>
                <p>JÓVENES GRADUADOS</p>
            </div>
            <div class="stats__card stats__card--3">
                <h2>3155</h2>
                <p>JÓVENES GRADUADOS</p>
            </div>
            <div class="stats__card stats__card--4">
                <h2>3155</h2>
                <p>JÓVENES GRADUADOS</p>
            </div>
            <div class="stats__card stats__card--5">
                <h2>3155</h2>
                <p>JÓVENES GRADUADOS</p>
            </div>
        </div>
    </div> <!-- wrapper -->
</div> <!-- class="projects -->

<!-- NOTICIAS -->
<div id="noticias" class="noticias page-section">
  <div class="wrapper wrapper--medium">

    <div class="noticias__item">
      <figure class="noticias__item--figure">
        <img src="<?php echo get_theme_file_uri("images/fpblog/fpblog-img1"); ?>" alt="noticias">
      </figure>
      <div class="noticias__item--text">
        <h2>ESCUELAS ABREN</h2>
        <p>Buscamos que la formación gastronómica no sea un fin en sí mismo, sino un medio que nos permita tener un impacto mayor en la vida de los pequeños productores rurales, la de los consumidores finales, la de los jóvenes en situación vulnerable y sus familias.</p>
      </div>
    </div>

    <div class="noticias__item">
      <figure class="noticias__item--figure">
        <img src="<?php echo get_theme_file_uri("images/fpblog/fpblog-img1"); ?>" alt="noticias">
      </figure>
      <div class="noticias__item--text">
        <h2>ESCUELAS ABREN</h2>
        <p>Buscamos que la formación gastronómica no sea un fin en sí mismo, sino un medio que nos permita tener un impacto mayor en la vida de los pequeños productores rurales, la de los consumidores finales, la de los jóvenes en situación vulnerable y sus familias.</p>
      </div>
    </div>
    <div class="noticias__item">
      <figure class="noticias__item--figure">
        <img src="<?php echo get_theme_file_uri("images/fpblog/fpblog-img1"); ?>" alt="noticias">
      </figure>
      <div class="noticias__item--text">
        <h2>ESCUELAS ABREN</h2>
        <p>Buscamos que la formación gastronómica no sea un fin en sí mismo, sino un medio que nos permita tener un impacto mayor en la vida de los pequeños productores rurales, la de los consumidores finales, la de los jóvenes en situación vulnerable y sus familias.</p>
      </div>
    </div>


  </div>
</div><!-- class="noticias -->



<?php get_footer(); ?>
