<?php
// Charger le CSS du thème
function mon_theme_charger_scripts() {
    wp_enqueue_style('mon-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mon_theme_charger_scripts');

// Déclarer un menu
function mon_theme_register_menus() {
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'mon-theme')
    ));
}
add_action('after_setup_theme', 'mon_theme_register_menus');
