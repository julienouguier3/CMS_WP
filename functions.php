<?php

function register_my_menu()
{
    register_nav_menu('main-menu', 'Menu principal');
}

add_action('after_setup_theme', 'register_my_menu');
function register_my_sidebars()
{
    register_sidebar(
        array(
            'name' => "Sidebar principale",
            'id' => 'main-sidebar',
            'description' => "La sidebar principale",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );

    register_sidebar(
        array(
            'name' => "Sidebar du footer",
            'id' => 'footer-sidebar',
            'description' => "La sidebar principale",
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h2 class="widget-title">',
            'after_title' => '</h2>'
        )
    );
    add_action('widgets_init', 'register_my_sidebars');
}

function wpbootstrap_styles_scripts(){
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
}
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');

function wpbootstrap_after_setup_theme() {
    // On ajoute un menu
    register_nav_menu('header_menu', "Menu du header");
    // On ajoute une classe php permettant de gérer les menus Bootstrap
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'wpbootstrap_after_setup_theme');

