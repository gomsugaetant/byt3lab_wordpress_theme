<?php
function byt3lab_supports(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    add_theme_support('widgets');
    add_theme_support('custom-logo');
    add_theme_support('custom-background');
    add_theme_support('custom-header');
    add_theme_support('custom-header');

    register_nav_menus(array(
        'menu-principal' => 'Menu Principal',
        'menu-footer' => 'Menu Footer'
    ));
}

function byt3lab_register_assets() {
    wp_register_style('byt3lab-main-style', get_stylesheet_directory_uri() . '/assets/css/global.css');
    wp_register_script('byt3lab-main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
    wp_enqueue_style('byt3lab-main-style');
    wp_enqueue_script('byt3lab-main-script');
}


function byt3lab_menu_admin() {
    function page_admin_byt3lab() {
        echo '<h1>Page Byt3lab</h1>';
    }
    
    add_menu_page(
        'Byt3lab',      // Titre de la page
        'Byt3lab',                  // Texte du menu
        'manage_options',           // Permission nécessaire
        'byt3lab',          // Slug unique
        'page_admin_byt3lab',             // Fonction qui affiche la page
        'dashicons-groups',         // Icône
        25                          // Position dans le menu
    );
}

add_action('admin_menu', 'byt3lab_menu_admin');
add_action('after_setup_theme', 'byt3lab_supports');
add_action('wp_enqueue_scripts', 'byt3lab_register_assets');