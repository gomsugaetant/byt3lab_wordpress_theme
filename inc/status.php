<?php
/**
 * BYT3LAB Theme - Statuts de maturité
 * Statuts centralisés pour les divisions, produits, offres et axes d'innovation.
 * La valeur est stockée dans la méta `_byt3lab_status` et modifiable depuis l'administration.
 */

if (!defined('ABSPATH')) {
    exit;
}

function byt3lab_statuses() {
    return apply_filters('byt3lab_statuses', [
        'active' => [
            'label' => __('Opérationnel', 'byt3lab_wordpress_theme'),
            'description' => __('Activité ouverte, avec des offres disponibles dès aujourd\'hui.', 'byt3lab_wordpress_theme'),
        ],
        'in_development' => [
            'label' => __('En développement', 'byt3lab_wordpress_theme'),
            'description' => __('Activité en cours de structuration : premières offres et partenariats en construction.', 'byt3lab_wordpress_theme'),
        ],
        'strategic' => [
            'label' => __('Orientation stratégique', 'byt3lab_wordpress_theme'),
            'description' => __('Axe de développement à moyen et long terme du groupe.', 'byt3lab_wordpress_theme'),
        ],
    ]);
}

function byt3lab_get_status($post_id) {
    $key = get_post_meta($post_id, '_byt3lab_status', true);
    return array_key_exists($key, byt3lab_statuses()) ? $key : '';
}

function byt3lab_status_badge($post_id_or_key, $with_dot = true) {
    $statuses = byt3lab_statuses();
    $key = is_numeric($post_id_or_key) ? byt3lab_get_status((int) $post_id_or_key) : $post_id_or_key;
    if (!$key || !isset($statuses[$key])) {
        return '';
    }
    return sprintf(
        '<span class="b-status b-status--%1$s">%2$s%3$s</span>',
        esc_attr(str_replace('_', '-', $key)),
        $with_dot ? '<span class="b-status__dot" aria-hidden="true"></span>' : '',
        esc_html($statuses[$key]['label'])
    );
}

/** Champ <select> de statut, réutilisé dans les meta boxes. */
function byt3lab_status_select($name, $current) {
    $html = '<select name="' . esc_attr($name) . '" id="' . esc_attr($name) . '">';
    $html .= '<option value="">' . esc_html__('— Aucun statut affiché —', 'byt3lab_wordpress_theme') . '</option>';
    foreach (byt3lab_statuses() as $key => $s) {
        $html .= sprintf('<option value="%s" %s>%s</option>', esc_attr($key), selected($current, $key, false), esc_html($s['label']));
    }
    return $html . '</select>';
}

