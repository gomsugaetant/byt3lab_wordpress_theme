<?php
/**
 * BYT3LAB Theme - Redirections 301 & Préservation SEO
 * Gestionnaire de redirections permanentes pour les anciennes routes et alias.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('template_redirect', 'byt3lab_handle_redirects', 1);

function byt3lab_handle_redirects() {
    if (is_admin() || (defined('DOING_AJAX') && DOING_AJAX)) {
        return;
    }

    $uri = $_SERVER['REQUEST_URI'] ?? '/';
    $path = trim(wp_parse_url($uri, PHP_URL_PATH) ?? '/', '/');

    // Retirer 'index.php/' si la structure de permalien le contient
    if (strpos($path, 'index.php/') === 0) {
        $path = trim(substr($path, 10), '/');
    }

    // 1. Redirections exactes
    $exact_redirects = [
        'accueil'     => '/',
        'home'        => '/',
        'melodi'      => '/produits/melodi-erp/',
        'ngrafik'     => '/ngrafix/',
        'about'       => '/a-propos/',
        'a-propos-2'  => '/a-propos/',
        'solutions'   => '/produits/',
        'carrieres'   => '/carriere/',
        'realisation' => '/realisations/',
    ];

    if (isset($exact_redirects[$path])) {
        wp_safe_redirect(home_url($exact_redirects[$path]), 301);
        exit;
    }

    // 2. Redirections avec capture (ex: solutions/xxx -> produits/xxx)
    if (preg_match('#^solutions/([^/]+)$#', $path, $matches)) {
        $slug = $matches[1];
        if ($slug === 'melodi-erp' || $slug === 'suku') {
            wp_safe_redirect(home_url('/produits/' . $slug . '/'), 301);
            exit;
        } elseif ($slug === 'byt3-cloud') {
            wp_safe_redirect(home_url('/services/bws/'), 301);
            exit;
        } else {
            wp_safe_redirect(home_url('/produits/'), 301);
            exit;
        }
    }
}
