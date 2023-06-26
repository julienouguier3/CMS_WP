<?php
function filter()
{
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-header');
}

function title_separator($sep)
{
    return '|';
}

function document_title_parts($title)
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
//Insertion des services en bo
function register_post_types() {

    // CPT Services
    $labels = array(
        'name' => 'Services',
        'all_items' => 'Tous les services',  // affiché dans le sous menu
        'singular_name' => 'Service',
        'add_new_item' => 'Ajouter un service',
        'edit_item' => 'Modifier le service',
        'menu_name' => 'Services'
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor','thumbnail' ),
        'menu_position' => 5,
        'menu_icon' => 'dashicons-admin-customizer',
    );

    register_post_type( 'services', $args );
}




//add_action('init', 'montheme_init');
add_action( 'after_setup_theme', 'filter' );
add_action('wp_enqueue_scripts', 'wpbootstrap_styles_scripts');
add_action( 'wp_enqueue_scripts', 'register_assets' );
add_action( 'after_setup_theme', 'register_my_menu' );
add_filter('document_title_separator','title_separator');
add_filter('document_title_parts','document_title_parts');
add_action('widgets_init', 'register_my_sidebars');
add_action( 'init', 'register_post_types' ); // Le hook init lance la fonction