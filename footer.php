</div>

<footer class="blog-footer">
    <!-- Menu footer -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <?php
            wp_nav_menu(array(
                'theme_location'    => 'footer_menu',
                'depth'             => 2,
                "id" => "footer",
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'footer-menu',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                'walker'            => new WP_Bootstrap_Navwalker()
            ));
            ?>
        </div>
    </nav>
    <p>Thème <a href="https://getbootstrap.com/">Bootstrap</a> pour WordPress par <a href="https://www.tutowp.fr/tutowp">TutoWP.fr</a>.</p>
    <p>
        <a href="#">Retour en haut</a>
    </p>
</footer>
<?php wp_footer(); ?>
</body>
</html>