<?php  /* MAIN HEADER */?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">

		<!-- HEADER -->
		<header id="masthead" class="site-header">
			<div class="wrapper">
				<div class="site-header__container">
					<!-- SITE BRANDING -->
					<div class="site-header__site-branding">
						<a href="<?php echo site_url(); ?>">
							<picture>
								<source class="site-header__site-branding--main-logo" srcset="<?php echo get_theme_file_uri('images/branding/logo-manqa.svg'); ?>" media="(min-width: 800px)">
								<img class="site-header__site-branding--main-logo" src="<?php echo get_theme_file_uri('images/branding/logo-manqa-w.svg'); ?>" alt="En Red Logo">
							</picture>
						</a>
						<?php if (is_front_page() && is_home()) : ?>
						<h1 class="site-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</h1>
						<?php else : ?>
						<p class="site-title">
								<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
						</p>
						<?php endif; ?>
					</div><!-- .site-branding -->

					<div class="site-header__menu-icon">
						<div class="site-header__menu-icon__middle"></div>
					</div>
					<!-- NAVIGATION -->
					<nav id="site-navigation" class="site-header__main-navigation">
						<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php  ?></button> -->
						<ul>
							<li <?php if (is_page("nosotros")) { echo 'class="current-page"'; } ?>><a href="<?php echo site_url('/nosotros'); ?>">Nosotros</a></li>
							<li <?php if (is_page("escuelas")) { echo 'class="current-page"'; } ?>><a href="<?php echo site_url('/escuelas'); ?>">Escuelas</a>
								<ul class="site-header__main-navigation--submenu">
									<li <?php if (is_page("escuelas-bolivia")) { echo 'class="current-page"'; } ?>><a href="<?php echo site_url('/escuelas-bolivia'); ?>">Escuelas Bolivia</a>
									<li <?php if (is_page("escuelas-colombia")) { echo 'class="current-page"'; } ?>><a href="<?php echo site_url('/escuelas-colombia'); ?>">Escuelas Colombia</a>
								</ul>
							</li>
							<li <?php if (is_page("modelos")) { echo 'class="current-page"'; } ?>><a href="<?php echo site_url('/modelos'); ?>">Modelos</a></li>
							<li <?php if (is_page("servicios")) { echo 'class="current-page"'; } ?>><a href="<?php echo site_url('/servicios'); ?>">Servicios</a></li>
							<li <?php if (is_page("eventos")) { echo 'class="current-page"'; } ?>><a href="<?php echo site_url('/eventos'); ?>">Eventos</a></li>
							<li <?php if (is_page("contacto")) { echo 'class="current-page"'; } ?>><a href="<?php echo site_url('/contacto'); ?>">Contacto</a></li>
						</ul>
					</nav><!-- #site-navigation .site-header -->

					</div>
				</div><!-- class="site-header__container" -->
		</header><!-- #masthead -->

		<div id="content" class="site-content">
