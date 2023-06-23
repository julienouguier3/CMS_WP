<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<header class="blog-header">
    <div>
        <!-- Header -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#header-menu"
                        aria-controls="#header-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'header_menu',
                    'depth' => 2,
                    "id" => "main",
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'header-menu',
                    'menu_class' => 'nav navbar-nav',
                    'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                    'walker' => new WP_Bootstrap_Navwalker()
                ));
                ?>
                <?= get_search_form() ?>
            </div>

        </nav>
        <!-- Fin du header -->
</header>
<!-- Menu header -->

<!--        <div class="row flex-nowrap justify-content-between align-items-center">-->
<!---->
<!--            <div class="col-12 text-center">-->
<!--                <a class="blog-header-logo text-dark" href="--><?php //bloginfo('url'); ?><!--">-->
<?php //bloginfo('name') ?><!--</a>-->
<!---->
<!--            </div>-->
<!--        </div>-->


