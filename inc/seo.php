<?php
/**
 * BYT3LAB Theme - SEO & Données structurées (Schema.org / JSON-LD)
 * Génère des métadonnées propres, canoniques, Open Graph et JSON-LD sans dépendre d'un plugin tiers.
 * Se désactive automatiquement si Yoast SEO, Rank Math ou SEOPress est actif.
 */

if (!defined('ABSPATH')) {
    exit;
}

function byt3lab_has_seo_plugin() {
    return defined('WPSEO_VERSION') || defined('RANK_MATH_VERSION') || function_exists('seopress_init');
}

add_action('wp_head', 'byt3lab_render_seo_meta', 1);

function byt3lab_render_seo_meta() {
    if (byt3lab_has_seo_plugin() || is_admin()) {
        return;
    }

    $site_name = get_bloginfo('name') ?: 'Byt3Lab';
    $title     = wp_get_document_title();
    $desc      = byt3lab_opt('legal.footer_text', 'Byt3Lab est un groupe technologique camerounais à vocation africaine. Nous concevons, développons, intégrons et exploitons des technologies pour les entreprises, les industries et les infrastructures.');
    $url       = esc_url(home_url(add_query_arg([], $GLOBALS['wp']->request ?? '')));
    $logo_url  = esc_url(get_stylesheet_directory_uri() . '/assets/media/byt3lab_sng.png');
    $image     = $logo_url;

    if (is_singular()) {
        global $post;
        if (!empty($post->post_excerpt)) {
            $desc = wp_strip_all_tags($post->post_excerpt);
        } else {
            $desc = wp_trim_words(wp_strip_all_tags($post->post_content), 25);
        }
        if (has_post_thumbnail($post->ID)) {
            $img = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
            if ($img) {
                $image = $img[0];
            }
        }
    }

    echo "\n<!-- BYT3LAB SEO & Meta -->\n";
    echo '<meta name="description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<link rel="canonical" href="' . esc_url($url) . '">' . "\n";

    // Open Graph
    echo '<meta property="og:locale" content="fr_FR">' . "\n";
    echo '<meta property="og:type" content="' . (is_singular() ? 'article' : 'website') . '">' . "\n";
    echo '<meta property="og:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta property="og:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta property="og:url" content="' . esc_url($url) . '">' . "\n";
    echo '<meta property="og:site_name" content="' . esc_attr($site_name) . '">' . "\n";
    echo '<meta property="og:image" content="' . esc_url($image) . '">' . "\n";

    // Twitter
    echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
    echo '<meta name="twitter:title" content="' . esc_attr($title) . '">' . "\n";
    echo '<meta name="twitter:description" content="' . esc_attr($desc) . '">' . "\n";
    echo '<meta name="twitter:image" content="' . esc_url($image) . '">' . "\n";

    // Schema.org JSON-LD
    $schema = [
        '@context' => 'https://schema.org',
        '@graph'   => [
            [
                '@type'        => 'Organization',
                '@id'          => home_url('/#organization'),
                'name'         => 'Byt3Lab',
                'url'          => home_url('/'),
                'logo'         => $logo_url,
                'description'  => $desc,
                'email'        => byt3lab_opt('contact.email', 'contact@byt3lab.com'),
                'telephone'    => byt3lab_opt('contact.phone', '+237 696 87 94 75'),
                'sameAs'       => array_values(array_filter([
                    byt3lab_opt('social.linkedin'),
                    byt3lab_opt('social.facebook'),
                    byt3lab_opt('social.youtube'),
                    byt3lab_opt('social.ngrafix'),
                ])),
            ],
            [
                '@type'        => 'WebSite',
                '@id'          => home_url('/#website'),
                'url'          => home_url('/'),
                'name'         => 'Byt3Lab',
                'publisher'    => ['@id' => home_url('/#organization')],
                'inLanguage'   => 'fr-FR',
            ],
        ],
    ];

    echo '<script type="application/ld+json">' . json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
    echo "<!-- /BYT3LAB SEO -->\n";
}

// Exclure les types internes (messages de contact) du sitemap natif WordPress
add_filter('wp_sitemaps_post_types', function ($post_types) {
    unset($post_types['byt3lab_message']);
    return $post_types;
});

// Optimiser le robots.txt par défaut
add_filter('robots_txt', function ($output, $public) {
    if ('1' !== (string) $public) {
        return $output;
    }
    return "User-agent: *\nDisallow: /wp-admin/\nAllow: /wp-admin/admin-ajax.php\n\nSitemap: " . esc_url(home_url('/wp-sitemap.xml')) . "\n";
}, 10, 2);

