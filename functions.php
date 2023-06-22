<?php
function filter()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
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
function wpbootstrap_styles_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
    wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
}

function register_assets()
{
    // Déclarer le JS
    wp_enqueue_script(
        'script',
        get_template_directory_uri() . '/js/script.js',
        array('jquery'),
        '1.0',
        true
    );

    // Déclarer le fichier style.css à la racine du thème
    wp_enqueue_style(
        'style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // Déclarer le fichier CSS à un autre emplacement
    wp_enqueue_style(
        'style',
        get_template_directory_uri() . '/css/main.css',
        array(),
        '1.0'
    );
}

function register_my_menu()
{
    register_nav_menu('header_menu', 'Menu principal');
    register_nav_menu('footer_menu', 'Menu footer');

    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}


add_action( 'after_setup_theme', 'filter' );
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
add_action( 'wp_enqueue_scripts', 'register_assets' );
add_action( 'after_setup_theme', 'register_my_menu' );
add_filter('document_title_separator','montheme_title_separator');
add_filter('document_title_parts','montheme_document_title_parts');
