<?php  /* FOOTER */ ?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">

    <div class="wrapper">
        <div class="site-footer__info">

            <div class="site-footer__info--logo">
                <a href="<?php site_url('bloginfo'); ?>">
                    <img class="logo-footer" src="<?php echo get_theme_file_uri('images/branding/logo-manqa-w.svg'); ?>" alt="Manqa - Cafeterías y Escuelas de Cocina">
                    <p>Cafeterías y Escuelas de Cocina</p>
                </a>
            </div>

            <div class="site-footer__info--text">
                <p>Hablar algo sobre la creación de comunidades y ecosistemas profesionales donde se invite a contactarnos, consultarnos, etc.</p>
            </div>

            <div class="site-footer__info--contacto">
                <h3>contáctanos.</h3>
                <div class="site-footer__info--contacto--ep">
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> info@futuralab.net</p>
                    <p><i class="fa fa-phone" aria-hidden="true"></i> +591.69750000</p>
                </div>

            </div>

            <div class="site-footer__info--redes">
                <ul class="site-footer__info--redes-ul">
                    <li><a href="#"><i class="fab fa-facebook-square"></i></a></li>
                    <li><a href="#"><i class="fab fa-facebook-messenger"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>



        </div>
    </div>


    <div class="site-footer__credits">
        <p> &copy; Manqa <?php echo date('Y'); ?> - Todos los derechos reservados</p>
    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
