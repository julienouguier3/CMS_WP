<?php

//
function filter()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
}

function montheme_title_separator()
{
    return '|';
}

function montheme_document_title_parts($title)
{
    $title['wp'] = '🌊';
    $title = array_reverse($title);
    return $title;
}

//Permet d'ajouter un menu
function wpbootstrap_menu()
{
    register_nav_menu('header_menu', "Menu du header");
    register_nav_menu('footer_menu', "Menu du footer");
    // On ajoute une classe php permettant de gérer les menus Bootstrap
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    // On ajoute le support du html5 pour les listes de commentaires
    add_theme_support('html5', array('comment-list'));
}

function register_my_sidebars()
{
    register_sidebar([
        'name' => "Sidebar principale",
        'id' => 'main-sidebar',
        'description' => "La sidebar principale",
        'before_widget' => '<div id="%1$s" class="widget %2$s p-4">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title font-italic">',
        'after_title' => '</h4>',
    ]);

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
}

function wpbootstrap_styles_scripts()
{
    //(met dans la file)
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('boostrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css', [], 1, true);
}


function wpbootstrap_after_setup_theme()
{
    // On ajoute un menu (met en attente)
    register_nav_menu('header_menu', "Menu du header");
    // On ajoute une classe php permettant de gérer les menus Bootstrap
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

add_action('after_setup_theme', 'filter');
add_action('document_title_separator', 'montheme_title_separator');
add_action('document_title_parts','montheme_document_title_parts');
add_action('after_setup_theme', 'wpbootstrap_menu');
add_action('widgets_init', 'register_my_sidebars');
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
add_action('after_setup_theme', 'wpbootstrap_after_setup_theme');

