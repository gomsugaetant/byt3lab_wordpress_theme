<?php
/**
 * BYT3LAB WordPress Theme - Functions & Core Setup
 * Groupe Technologique & Industriel BYT3LAB.
 */

if (!defined('ABSPATH')) {
    exit;
}

// 1. Chargement des modules internes
require_once get_template_directory() . '/inc/helpers.php';
require_once get_template_directory() . '/inc/status.php';
require_once get_template_directory() . '/inc/content-defaults.php';
require_once get_template_directory() . '/inc/settings.php';
require_once get_template_directory() . '/inc/redirects.php';
require_once get_template_directory() . '/inc/seo.php';
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/meta-boxes.php';
require_once get_template_directory() . '/inc/admin-page.php';
require_once get_template_directory() . '/inc/contact-handler.php';

// 2. Supports du thème
add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script']);
});

// 3. Enqueue des assets globaux du Design System
add_action('wp_enqueue_scripts', function () {
    // Style de base du thème (métadonnées style.css)
    wp_enqueue_style('byt3lab_wordpress_theme-style', get_stylesheet_uri(), [], '2.0.0');

    // Design System Tokens & Base Components
    wp_enqueue_style('byt3lab-tokens', get_stylesheet_directory_uri() . '/assets/css/tokens.css', ['byt3lab_wordpress_theme-style'], '2.0.0');
    wp_enqueue_style('byt3lab-system', get_stylesheet_directory_uri() . '/assets/css/system.css', ['byt3lab-tokens'], '2.0.0');

    // Composants globaux : header & footer (présents sur toutes les pages)
    $global_components = ['header', 'footer'];
    foreach ($global_components as $gc) {
        $gc_css = get_stylesheet_directory() . '/components/' . $gc . '/' . $gc . '.css';
        if (file_exists($gc_css)) {
            wp_enqueue_style(
                'byt3lab-comp-' . $gc,
                get_stylesheet_directory_uri() . '/components/' . $gc . '/' . $gc . '.css',
                ['byt3lab-system'],
                '2.0.0'
            );
        }
    }

    // Scripts globaux du site
    wp_enqueue_script('byt3lab-site', get_stylesheet_directory_uri() . '/assets/js/site.js', [], '2.0.0', true);

    // Données AJAX sécurisées disponibles pour tous les scripts du front-end
    wp_localize_script('byt3lab-site', 'byt3lab_vars', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('byt3lab_contact_nonce'),
    ]);
});

// 4. BYT3LAB Builder — Enqueue spécifique basé sur les fichiers JSON de pages
add_action('wp_enqueue_scripts', function () {
    global $post;

    $slug = '';
    if (is_front_page() || is_home()) {
        $configPath = get_stylesheet_directory() . '/config.json';
        if (file_exists($configPath)) {
            $globalCfg = json_decode(file_get_contents($configPath), true);
            if (!empty($globalCfg['special_pages']['front_page'])) {
                $slug = $globalCfg['special_pages']['front_page'];
            }
        }
        if (empty($slug)) {
            $slug = 'accueil';
        }
    } elseif (is_singular('byt3lab_division')) {
        $slug = 'technologies';
    } elseif (is_singular('byt3lab_solution')) {
        $slug = 'produits';
    } elseif (is_singular('byt3lab_job')) {
        $slug = 'carriere';
    } elseif (is_singular('byt3lab_team')) {
        $slug = 'equipe';
    } elseif (is_singular('byt3lab_service')) {
        $slug = 'services';
    } elseif (is_singular('byt3lab_project')) {
        $slug = 'realisations';
    } elseif (is_single()) {
        $slug = 'blog';
    } elseif (is_404()) {
        $slug = 'notfound';
    } else {
        $queried = get_queried_object();
        if ($queried instanceof WP_Post && !empty($queried->post_name)) {
            $slug = $queried->post_name;
        } elseif (!empty($post->post_name)) {
            $slug = $post->post_name;
        }
    }

    if (empty($slug)) {
        return;
    }

    $jsonPath = get_stylesheet_directory() . '/pages/page-' . $slug . '.json';
    if (!file_exists($jsonPath)) {
        return;
    }

    $cfg = json_decode(file_get_contents($jsonPath), true);
    if (!is_array($cfg)) {
        return;
    }

    // CSS déclarés au niveau de la page
    $cssList = $cfg['css_files'] ?? ($cfg['css'] ?? []);
    if (is_array($cssList)) {
        foreach ($cssList as $i => $asset) {
            $asset = ltrim($asset, '/');
            $src = (preg_match('#^https?://#i', $asset) || strpos($asset, '//') === 0)
                ? $asset
                : get_stylesheet_directory_uri() . '/' . $asset;
            $handle = 'byt3lab-page-css-' . $slug . '-' . $i;
            wp_enqueue_style($handle, $src, ['byt3lab-system'], null);
        }
    }

    // JS déclarés au niveau de la page
    $jsList = $cfg['js_files'] ?? ($cfg['js'] ?? []);
    if (is_array($jsList)) {
        foreach ($jsList as $i => $asset) {
            $asset = ltrim($asset, '/');
            $src = (preg_match('#^https?://#i', $asset) || strpos($asset, '//') === 0)
                ? $asset
                : get_stylesheet_directory_uri() . '/' . $asset;
            $handle = 'byt3lab-page-js-' . $slug . '-' . $i;
            wp_enqueue_script($handle, $src, ['byt3lab-site'], null, true);
        }
    }

    // Composants déclarés sur la page : chargement automatique de leur CSS et JS
    if (!empty($cfg['components']) && is_array($cfg['components'])) {
        foreach ($cfg['components'] as $comp) {
            $compSlug = sanitize_file_name($comp);
            $compDir  = get_stylesheet_directory() . '/components/' . $compSlug;

            $compCss = $compDir . '/' . $compSlug . '.css';
            if (file_exists($compCss)) {
                wp_enqueue_style(
                    'byt3lab-comp-' . $compSlug,
                    get_stylesheet_directory_uri() . '/components/' . $compSlug . '/' . $compSlug . '.css',
                    ['byt3lab-system'],
                    null
                );
            }

            $compJs = $compDir . '/' . $compSlug . '.js';
            if (file_exists($compJs)) {
                wp_enqueue_script(
                    'byt3lab-comp-js-' . $compSlug,
                    get_stylesheet_directory_uri() . '/components/' . $compSlug . '/' . $compSlug . '.js',
                    ['byt3lab-site'],
                    null,
                    true
                );
            }
        }
    }
}, 20);
