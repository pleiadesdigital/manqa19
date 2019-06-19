<?php  /* FOOTER */ ?>

</div><!-- #content -->

<footer id="colophon" class="site-footer" role="contentinfo">

	<div class="wrapper">
		<div class="site-footer__top">
			<div class="site-footer__top--logo">
				<a href="<?php site_url('bloginfo'); ?>">
					<img class="logo-footer" src="<?php echo get_theme_file_uri('images/branding/logo-manqa-w.svg'); ?>" alt="Manqa - catering - restaurant - turismo">
				</a>
			</div>
			<div class="site-footer__top--servicios">
				<h3>Servicios</h3>
				<ul>
						<li <?php if(is_page('catering')) { echo 'class="current-menu-item"'; } ?>><a href="<?php echo site_url('/servicios/catering'); ?>">Catering</a></li>
						<li <?php if(is_page('restaurant') || wp_get_post_parent_id(0) == 24) { echo 'class="current-menu-item"'; } ?>><a href="<?php echo site_url('/servicios/restaurant'); ?>">Restaurant</a></li>
						<li <?php if(is_page('turismo')) { echo 'class="current-menu-item"'; } ?>><a href="<?php echo site_url('/servicios/turismo'); ?>">Turismo</a></li>
				</ul>
			</div>
			<div class="site-footer__top--noticias">
				<h3>Últimas Noticias</h3>
				<?php
					$args = array(
						'posts_per_page'				=> 4,
						'post_type'							=> 'post',
						'category_name'					=> 'noticias',
						'order'									=> 'DESC'
					);
					$query = new WP_Query($args);
				?>
				<ul>
					<?php while($query->have_posts()) : $query->the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></li>
					<?php endwhile; ?>
				</ul>
				<?php wp_reset_postdata(); ?>

			</div>
			<div class="site-footer__top--contacto">
				<h3>Contacto</h3>
				<ul>
					<li>La Paz - Bolivia: <br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;(591) 75238893 – 70617359</li>
					<li>Sucre - Bolivia: <br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;(+591) 68635636</li>
					<li>Bogotá - Colombia: <br><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;(+57) 1 – 3002832</li>

					<!-- <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@manqa.org">&nbsp;&nbsp;info@manqa.org</a></li> -->
				</ul>
			</div>
		</div>
	</div>

	<div class="site-footer__bottom">
		<div class="wrapper">
			<nav class="site-footer__bottom--nav" role="navigation" aria-label="Footer Social Links Menu">
				<?php
					wp_nav_menu(array(
						'theme_location'	=> 'social',
						'menu_class'			=> 'social-links-menu',
						'depth'						=> 1,
						'link_before'			=> '<span class="screen-reader-text">',
						'link_after'			=> '</span>' . manqa_get_svg(array('icon' => 'reddit-alien')),
					));
				?>
			</nav>
			<div class="site-footer__bottom--info"><p> &copy; Manq'a <?php echo date('Y'); ?> - Todos los derechos reservados</p></div>
		</div>
	</div><!-- .site-info -->

</footer><!-- #colophon -->


</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
