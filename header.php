<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(''); ?></title>
    <?php wp_head(); ?>
<body>
<!---->
<!--<header id="header">-->
<!--    <h1>--><?php //echo bloginfo('name'); ?><!--</h1>-->
<!--    <nav id="navigation">-->
<!--        --><?php //wp_nav_menu(array('theme_location' => 'main')); ?>
<!--    </nav>-->

    <header class="blog-header py-3">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-12 text-center">
                <a class="blog-header-logo text-dark" href="<?php bloginfo('url'); ?>"><?php bloginfo('name') ?></a>
            </div>
        </div>
<!--    </header>-->
</header>
<nav class="navbar navbar-expand-md navbar-light" role="navigation">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu" aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu(array(
            'theme_location'    => 'header_menu',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'header-menu',
            'menu_class'        => 'nav navbar-nav',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ));
        ?>
    </div>
</nav>