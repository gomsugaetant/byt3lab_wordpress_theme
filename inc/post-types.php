<?php
/**
 * BYT3LAB Theme - Custom Post Types & Taxonomies
 * Enregistrement des types de contenu : Divisions technologiques, Produits & Offres,
 * Projets réels, Partenaires, Réalisations NGRAFIX, Services, Carrières, Équipe et Messages.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('init', 'byt3lab_register_custom_post_types');

function byt3lab_register_custom_post_types() {

    // 1. Divisions Technologiques (Les 5 axes stratégiques du groupe)
    register_post_type('byt3lab_division', [
        'labels' => [
            'name'               => _x('Divisions Technologiques', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name'      => _x('Division Technologique', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'menu_name'          => __('Divisions Tech', 'byt3lab_wordpress_theme'),
            'all_items'          => __('Toutes les Divisions', 'byt3lab_wordpress_theme'),
            'add_new_item'       => __('Ajouter une Division', 'byt3lab_wordpress_theme'),
            'edit_item'          => __('Modifier la Division', 'byt3lab_wordpress_theme'),
            'view_item'          => __('Voir la Division', 'byt3lab_wordpress_theme'),
        ],
        'description'         => __('Les cinq divisions technologiques structurant le groupe Byt3Lab', 'byt3lab_wordpress_theme'),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => false, // Accessible via le Hub Contenu
        'menu_icon'           => 'dashicons-networking',
        'has_archive'         => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'technologies', 'with_front' => true],
        'show_in_rest'        => true,
    ]);

    // 2. Produits & Offres (MELODI ERP, SUKU, BWS...)
    register_post_type('byt3lab_solution', [
        'labels' => [
            'name'               => _x('Produits & Offres', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name'      => _x('Produit ou Offre', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'menu_name'          => __('Produits & Offres', 'byt3lab_wordpress_theme'),
            'all_items'          => __('Tous les Produits & Offres', 'byt3lab_wordpress_theme'),
            'add_new_item'       => __('Ajouter un Produit / Offre', 'byt3lab_wordpress_theme'),
            'edit_item'          => __('Modifier le Produit / Offre', 'byt3lab_wordpress_theme'),
            'view_item'          => __('Voir le Produit / Offre', 'byt3lab_wordpress_theme'),
        ],
        'description'         => __('Produits logiciels (MELODI, SUKU) et offres d\'infrastructure (BWS)', 'byt3lab_wordpress_theme'),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => false,
        'menu_icon'           => 'dashicons-products',
        'has_archive'         => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'produits', 'with_front' => true],
        'show_in_rest'        => true,
    ]);

    // 3. Projets Réalisés (Portfolio réel uniquement — aucun chiffre inventé)
    register_post_type('byt3lab_project', [
        'labels' => [
            'name'               => _x('Projets Réalisés', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name'      => _x('Projet Réalisé', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'menu_name'          => __('Projets Réalisés', 'byt3lab_wordpress_theme'),
            'all_items'          => __('Tous les Projets', 'byt3lab_wordpress_theme'),
            'add_new_item'       => __('Ajouter un Projet Réel', 'byt3lab_wordpress_theme'),
            'edit_item'          => __('Modifier le Projet', 'byt3lab_wordpress_theme'),
            'view_item'          => __('Voir le Projet', 'byt3lab_wordpress_theme'),
        ],
        'description'         => __('Portfolio des réalisations réelles de BYT3lab', 'byt3lab_wordpress_theme'),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => false,
        'menu_icon'           => 'dashicons-portfolio',
        'has_archive'         => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'realisations', 'with_front' => true],
        'show_in_rest'        => true,
    ]);

    // 4. Partenaires Institutionnels & Technologiques
    register_post_type('byt3lab_partner', [
        'labels' => [
            'name'               => _x('Partenaires', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name'      => _x('Partenaire', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'menu_name'          => __('Partenaires', 'byt3lab_wordpress_theme'),
            'all_items'          => __('Tous les Partenaires', 'byt3lab_wordpress_theme'),
            'add_new_item'       => __('Ajouter un Partenaire', 'byt3lab_wordpress_theme'),
            'edit_item'          => __('Modifier le Partenaire', 'byt3lab_wordpress_theme'),
        ],
        'description'         => __('Partenaires technologiques, académiques et industriels réels', 'byt3lab_wordpress_theme'),
        'supports'            => ['title', 'thumbnail', 'page-attributes'],
        'hierarchical'        => false,
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => false,
        'menu_icon'           => 'dashicons-groups',
        'has_archive'         => false,
        'publicly_queryable'  => false,
    ]);

    // 5. Réalisations NGRAFIX — Creative & Brand Experience Studio
    register_post_type('ngrafix_work', [
        'labels' => [
            'name'               => _x('Réalisations NGRAFIX', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name'      => _x('Réalisation NGRAFIX', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'menu_name'          => __('Réalisations NGRAFIX', 'byt3lab_wordpress_theme'),
            'all_items'          => __('Toutes les Réalisations', 'byt3lab_wordpress_theme'),
            'add_new_item'       => __('Ajouter une Réalisation', 'byt3lab_wordpress_theme'),
            'edit_item'          => __('Modifier la Réalisation', 'byt3lab_wordpress_theme'),
        ],
        'description'         => __('Portfolio du studio créatif NGRAFIX', 'byt3lab_wordpress_theme'),
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => false,
        'menu_icon'           => 'dashicons-art',
        'has_archive'         => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'ngrafix/portfolio', 'with_front' => true],
        'show_in_rest'        => true,
    ]);

    register_taxonomy('ngrafix_discipline', ['ngrafix_work'], [
        'labels' => [
            'name'              => _x('Disciplines NGRAFIX', 'taxonomy general name', 'byt3lab_wordpress_theme'),
            'singular_name'     => _x('Discipline', 'taxonomy singular name', 'byt3lab_wordpress_theme'),
            'all_items'         => __('Toutes les Disciplines', 'byt3lab_wordpress_theme'),
            'edit_item'         => __('Modifier la Discipline', 'byt3lab_wordpress_theme'),
            'add_new_item'      => __('Ajouter une Discipline', 'byt3lab_wordpress_theme'),
        ],
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_in_menu'      => false,
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => ['slug' => 'ngrafix/discipline'],
    ]);

    // 6. Membres de l'équipe
    register_post_type('byt3lab_team', [
        'labels' => [
            'name'          => _x('Membres de l\'Équipe', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name' => _x('Membre de l\'Équipe', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'all_items'     => __('Tous les Membres', 'byt3lab_wordpress_theme'),
            'add_new_item'  => __('Ajouter un Membre', 'byt3lab_wordpress_theme'),
        ],
        'supports'            => ['title', 'editor', 'thumbnail', 'page-attributes'],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => false,
        'menu_icon'           => 'dashicons-admin-users',
        'has_archive'         => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'equipe/membre', 'with_front' => true],
    ]);

    // 7. Services & Ingénierie
    register_post_type('byt3lab_service', [
        'labels' => [
            'name'          => _x('Services & Ingénierie', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name' => _x('Service', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'all_items'     => __('Tous les Services', 'byt3lab_wordpress_theme'),
            'add_new_item'  => __('Ajouter un Service', 'byt3lab_wordpress_theme'),
        ],
        'supports'            => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => false,
        'menu_icon'           => 'dashicons-admin-tools',
        'has_archive'         => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'services', 'with_front' => true],
    ]);

    register_taxonomy('byt3lab_service_branch', ['byt3lab_service'], [
        'labels' => [
            'name'          => _x('Filiales & Départements', 'taxonomy general name', 'byt3lab_wordpress_theme'),
            'singular_name' => _x('Filiale / Département', 'taxonomy singular name', 'byt3lab_wordpress_theme'),
        ],
        'hierarchical'      => true,
        'public'            => true,
        'show_ui'           => true,
        'show_in_menu'      => false,
        'show_admin_column' => true,
        'rewrite'           => ['slug' => 'departements'],
    ]);

    // 8. Offres d'emploi & Carrières
    register_post_type('byt3lab_job', [
        'labels' => [
            'name'          => _x('Offres d\'Emploi', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name' => _x('Offre d\'Emploi', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'all_items'     => __('Toutes les Offres', 'byt3lab_wordpress_theme'),
            'add_new_item'  => __('Ajouter une Offre', 'byt3lab_wordpress_theme'),
        ],
        'supports'            => ['title', 'editor', 'excerpt', 'page-attributes'],
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => false,
        'menu_icon'           => 'dashicons-businessman',
        'has_archive'         => false,
        'publicly_queryable'  => true,
        'query_var'           => true,
        'rewrite'             => ['slug' => 'carriere', 'with_front' => true],
    ]);

    // 9. Messages reçus (Contact & Partenariat)
    register_post_type('byt3lab_message', [
        'labels' => [
            'name'          => _x('Messages Reçus', 'Post Type General Name', 'byt3lab_wordpress_theme'),
            'singular_name' => _x('Message Reçu', 'Post Type Singular Name', 'byt3lab_wordpress_theme'),
            'all_items'     => __('Tous les Messages', 'byt3lab_wordpress_theme'),
        ],
        'supports'            => ['title', 'editor'],
        'public'              => false,
        'show_ui'             => true,
        'show_in_menu'        => false,
        'menu_icon'           => 'dashicons-email-alt',
        'has_archive'         => false,
        'publicly_queryable'  => false,
        'exclude_from_search' => true,
    ]);

    // Règles de réécriture explicites
    add_rewrite_rule('^technologies/([^/]+)/?$', 'index.php?byt3lab_division=$matches[1]', 'top');
    add_rewrite_rule('^index\.php/technologies/([^/]+)/?$', 'index.php?byt3lab_division=$matches[1]', 'top');

    add_rewrite_rule('^produits/([^/]+)/?$', 'index.php?byt3lab_solution=$matches[1]', 'top');
    add_rewrite_rule('^index\.php/produits/([^/]+)/?$', 'index.php?byt3lab_solution=$matches[1]', 'top');

    add_rewrite_rule('^services/bws/?$', 'index.php?byt3lab_solution=bws', 'top');
    add_rewrite_rule('^index\.php/services/bws/?$', 'index.php?byt3lab_solution=bws', 'top');

    add_rewrite_rule('^realisations/([^/]+)/?$', 'index.php?byt3lab_project=$matches[1]', 'top');
    add_rewrite_rule('^carriere/([^/]+)/?$', 'index.php?byt3lab_job=$matches[1]', 'top');
}

/**
 * Migration v2 : amorçage des divisions, des offres et des pages clés,
 * et suppression des seeds fictifs (+15,000 étudiants, 250M FCFA...).
 */
add_action('init', 'byt3lab_run_migration_v2', 30);

function byt3lab_run_migration_v2() {
    $migration_flag = get_option('byt3lab_migration_v2_applied');
    if ($migration_flag === 'done') {
        return;
    }

    // 1. Suppression des projets de test ou contenant des métriques fictives
    $fake_slugs = ['suku', 'njangui', 'audit-hardening-reseau-bancaire-regional', 'melodi-erp-deploiement-industriel', 'dfdfd', 'ecom-projet'];
    foreach ($fake_slugs as $slug) {
        $p = get_page_by_path($slug, OBJECT, 'byt3lab_project');
        if ($p) {
            wp_delete_post($p->ID, true);
        }
    }

    // Nettoyer aussi les solutions obsolètes du v1 si présentes
    $old_solutions = ['byt3-cloud', 'melodi-pos'];
    foreach ($old_solutions as $slug) {
        $sol = get_page_by_path($slug, OBJECT, 'byt3lab_solution');
        if ($sol) {
            wp_delete_post($sol->ID, true);
        }
    }

    // 2. Amorçage des 5 Divisions Technologiques
    if (function_exists('byt3lab_default_divisions')) {
        $divisions = byt3lab_default_divisions();
        foreach ($divisions as $div) {
            $existing = get_page_by_path($div['slug'], OBJECT, 'byt3lab_division');
            $post_data = [
                'post_title'   => $div['title'],
                'post_name'    => $div['slug'],
                'post_content' => $div['content'],
                'post_excerpt' => $div['excerpt'],
                'post_status'  => 'publish',
                'post_type'    => 'byt3lab_division',
                'menu_order'   => $div['order'],
            ];

            if ($existing) {
                $div_id = $existing->ID;
                $post_data['ID'] = $div_id;
                wp_update_post($post_data);
            } else {
                $div_id = wp_insert_post($post_data);
            }

            if ($div_id && !is_wp_error($div_id)) {
                update_post_meta($div_id, '_byt3lab_status', $div['status']);
                update_post_meta($div_id, '_byt3lab_icon', $div['icon']);
                update_post_meta($div_id, '_byt3lab_division_vision', $div['vision']);
                update_post_meta($div_id, '_byt3lab_division_expertise', $div['expertise']);
                update_post_meta($div_id, '_byt3lab_division_technologies', $div['technologies']);
                update_post_meta($div_id, '_byt3lab_division_services', $div['services']);
                update_post_meta($div_id, '_byt3lab_division_industries', $div['industries']);
                update_post_meta($div_id, '_byt3lab_division_maturity', $div['maturity']);
                update_post_meta($div_id, '_byt3lab_division_related', implode(',', $div['related']));
            }
        }
    }

    // 3. Amorçage des Produits & Offres (MELODI ERP, SUKU, BWS)
    if (function_exists('byt3lab_default_offers')) {
        $offers = byt3lab_default_offers();
        foreach ($offers as $off) {
            $existing = get_page_by_path($off['slug'], OBJECT, 'byt3lab_solution');
            $post_data = [
                'post_title'   => $off['title'],
                'post_name'    => $off['slug'],
                'post_content' => $off['content'],
                'post_excerpt' => $off['excerpt'],
                'post_status'  => 'publish',
                'post_type'    => 'byt3lab_solution',
                'menu_order'   => $off['order'],
            ];

            if ($existing) {
                $off_id = $existing->ID;
                $post_data['ID'] = $off_id;
                wp_update_post($post_data);
            } else {
                $off_id = wp_insert_post($post_data);
            }

            if ($off_id && !is_wp_error($off_id)) {
                update_post_meta($off_id, '_byt3lab_status', $off['status']);
                update_post_meta($off_id, '_byt3lab_offer_type', $off['type']);
                update_post_meta($off_id, '_byt3lab_offer_division', $off['division']);
                update_post_meta($off_id, '_byt3lab_solution_badge', $off['badge']);
                update_post_meta($off_id, '_byt3lab_offer_tagline', $off['tagline']);
                update_post_meta($off_id, '_byt3lab_offer_accent', $off['accent']);
                update_post_meta($off_id, '_byt3lab_solution_features', $off['features']);
                update_post_meta($off_id, '_byt3lab_offer_problems', $off['problems']);
                update_post_meta($off_id, '_byt3lab_offer_benefits', $off['benefits']);
                update_post_meta($off_id, '_byt3lab_solution_url', $off['url']);
                update_post_meta($off_id, '_byt3lab_solution_button_text', $off['button']);
            }
        }
    }

    // 4. Disciplines par défaut pour NGRAFIX
    $default_disciplines = [
        'Brand Identity'        => 'Stratégie de marque, identité visuelle, logos et chartes 360°',
        'Creative Design'       => 'Design graphique, packaging, éditorial, supports marketing et UI/UX',
        'Digital Communication' => 'Marketing digital, réseaux sociaux, stratégie de contenu et campagnes',
        'Media Production'      => 'Photographie, production vidéo, motion design et création audiovisuelle',
    ];
    foreach ($default_disciplines as $d_name => $d_desc) {
        if (!term_exists($d_name, 'ngrafix_discipline')) {
            wp_insert_term($d_name, 'ngrafix_discipline', ['description' => $d_desc]);
        }
    }

    // 5. Création des pages statiques indispensables si absentes
    $pages_to_ensure = [
        'technologies'          => ['title' => 'Technologies', 'template' => 'page-technologies.php'],
        'produits'              => ['title' => 'Produits & Solutions', 'template' => 'page-produits.php'],
        'services'              => ['title' => 'Services & Ingénierie', 'template' => 'page-services.php'],
        'ngrafix'               => ['title' => 'Studio Créatif NGRAFIX', 'template' => 'page-ngrafix.php'],
        'recherche-innovation'  => ['title' => 'Recherche & Innovation', 'template' => 'page-recherche-innovation.php'],
        'a-propos'              => ['title' => 'À Propos', 'template' => 'page-a-propos.php'],
        'partenaires'           => ['title' => 'Partenaires', 'template' => 'page-partenaires.php'],
        'contact'               => ['title' => 'Contact', 'template' => 'page-contact.php'],
        'carriere'              => ['title' => 'Carrières', 'template' => 'page-carriere.php'],
        'equipe'                => ['title' => 'Équipe', 'template' => 'page-equipe.php'],
        'realisations'          => ['title' => 'Réalisations', 'template' => 'page-realisations.php'],
        'blog'                  => ['title' => 'Actualités', 'template' => 'page-blog.php'],
    ];

    foreach ($pages_to_ensure as $slug => $info) {
        $p = get_page_by_path($slug);
        if (!$p) {
            $pid = wp_insert_post([
                'post_title'     => $info['title'],
                'post_name'      => $slug,
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'comment_status' => 'closed',
                'ping_status'    => 'closed',
                'post_content'   => '',
            ]);
            if ($pid && !is_wp_error($pid) && !empty($info['template'])) {
                update_post_meta($pid, '_wp_page_template', 'pages/' . $info['template']);
            }
        }
    }

    // Configurer la page d'accueil statique sur 'accueil' ou configurer front-page
    $accueil_page = get_page_by_path('accueil');
    if ($accueil_page) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', $accueil_page->ID);
    }

    // Flush unique des rewrites
    flush_rewrite_rules(false);
    update_option('byt3lab_migration_v2_applied', 'done');
}

/**
 * Failsafe : si 404 sur une route connue, rediriger ou charger le template propre
 */
add_action('template_redirect', 'byt3lab_cpt_404_recovery', 5);

function byt3lab_cpt_404_recovery() {
    if (!is_404()) {
        return;
    }

    $uri = $_SERVER['REQUEST_URI'] ?? '';
    $path = trim(wp_parse_url($uri, PHP_URL_PATH) ?? '', '/');
    if (strpos($path, 'index.php/') === 0) {
        $path = trim(substr($path, 10), '/');
    }

    // 1. Division technologique : /technologies/[slug]
    if (preg_match('#^technologies/([^/?]+)#', $path, $matches)) {
        $slug = sanitize_title($matches[1]);
        $post = get_page_by_path($slug, OBJECT, 'byt3lab_division');
        if ($post) {
            global $wp_query;
            $wp_query = new WP_Query(['post_type' => 'byt3lab_division', 'p' => $post->ID, 'posts_per_page' => 1]);
            if ($wp_query->have_posts()) {
                $wp_query->the_post();
                status_header(200);
                $wp_query->is_404 = false;
                $wp_query->is_single = true;
                $wp_query->is_singular = true;
                $tpl = get_template_directory() . '/single-byt3lab_division.php';
                if (file_exists($tpl)) {
                    include $tpl;
                    exit;
                }
            }
        }
    }

    // 2. Produit ou offre : /produits/[slug]
    if (preg_match('#^produits/([^/?]+)#', $path, $matches)) {
        $slug = sanitize_title($matches[1]);
        $post = get_page_by_path($slug, OBJECT, 'byt3lab_solution');
        if ($post) {
            global $wp_query;
            $wp_query = new WP_Query(['post_type' => 'byt3lab_solution', 'p' => $post->ID, 'posts_per_page' => 1]);
            if ($wp_query->have_posts()) {
                $wp_query->the_post();
                status_header(200);
                $wp_query->is_404 = false;
                $wp_query->is_single = true;
                $wp_query->is_singular = true;
                $tpl = get_template_directory() . '/single-byt3lab_solution.php';
                if (file_exists($tpl)) {
                    include $tpl;
                    exit;
                }
            }
        }
    }

    // 3. Pages connues avec fallback direct
    $fallbacks = [
        'technologies'         => 'page-technologies.php',
        'produits'             => 'page-produits.php',
        'services'             => 'page-services.php',
        'ngrafix'              => 'page-ngrafix.php',
        'recherche-innovation' => 'page-recherche-innovation.php',
        'a-propos'             => 'page-a-propos.php',
        'partenaires'          => 'page-partenaires.php',
        'contact'              => 'page-contact.php',
        'carriere'             => 'page-carriere.php',
        'equipe'               => 'page-equipe.php',
        'realisations'         => 'page-realisations.php',
    ];

    if (isset($fallbacks[$path])) {
        $file = $fallbacks[$path];
        $template = get_template_directory() . '/' . $file;
        if (!file_exists($template)) {
            $template = get_template_directory() . '/pages/' . $file;
        }
        if (file_exists($template)) {
            status_header(200);
            global $wp_query;
            $wp_query->is_404 = false;
            $wp_query->is_page = true;
            include $template;
            exit;
        }
    }
}
