<?php
/**
 * BYT3LAB Theme - Administration Page & Executive Hub
 * Console de gestion institutionnelle pour piloter l'écosystème BYT3LAB :
 * - Les 5 Divisions Technologiques
 * - Les Produits & Solutions (MELODI ERP, SUKU, BWS)
 * - Le Studio Créatif Spécialisé NGRAFIX
 * - Les Services Commerciaux
 * - Les Partenaires & Alliances
 * - Les Projets & Études de Cas
 * - Le Capital Humain & Recrutement
 * - Les Messages & Demandes Reçues
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'byt3lab_register_admin_hub_menu');
add_action('admin_enqueue_scripts', 'byt3lab_enqueue_admin_hub_styles');

/**
 * Styles légers pour la console d'administration
 */
function byt3lab_enqueue_admin_hub_styles($hook) {
    if (strpos($hook, 'byt3lab') !== false) {
        wp_add_inline_style('wp-admin', '
            .byt3lab-badge { display: inline-flex; align-items: center; gap: 5px; font-size: 11px; font-weight: 700; padding: 2px 8px; border-radius: 4px; text-transform: uppercase; letter-spacing: 0.04em; }
            .byt3lab-badge--active { background: rgba(30, 158, 106, 0.12); color: #0E7048; border: 1px solid rgba(30, 158, 106, 0.3); }
            .byt3lab-badge--dev { background: rgba(199, 134, 10, 0.12); color: #965B00; border: 1px solid rgba(199, 134, 10, 0.3); }
            .byt3lab-badge--strat { background: rgba(90, 110, 140, 0.12); color: #37475F; border: 1px solid rgba(90, 110, 140, 0.3); }
            .byt3lab-badge--partner { background: rgba(29, 127, 216, 0.12); color: #1565C0; border: 1px solid rgba(29, 127, 216, 0.3); }
            .byt3lab-badge--contact { background: rgba(100, 116, 139, 0.12); color: #475569; border: 1px solid rgba(100, 116, 139, 0.3); }
            .byt3lab-badge--new { background: #10B981; color: #FFFFFF; font-weight: 800; border-radius: 10px; padding: 1px 7px; }
            .byt3lab-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px; box-shadow: 0 2px 6px rgba(0,0,0,0.03); display: flex; flex-direction: column; justify-content: space-between; transition: all 0.2s ease; }
            .byt3lab-card:hover { transform: translateY(-2px); box-shadow: 0 6px 16px rgba(0,0,0,0.06); border-color: #cbd5e1; }
        ');
    }
}

/**
 * Enregistrement du menu principal et des sous-menus complets
 */
function byt3lab_register_admin_hub_menu() {
    // Calcul des messages non lus
    $new_messages_count = count(get_posts([
        'post_type'      => 'byt3lab_message',
        'meta_key'       => '_byt3lab_msg_status',
        'meta_value'     => 'new',
        'posts_per_page' => -1,
        'fields'         => 'ids',
    ]));

    $msg_badge = $new_messages_count > 0 
        ? ' <span class="update-plugins count-' . $new_messages_count . '" style="background:#10b981; color:#fff; border-radius:10px; padding:1px 6px; font-size:10px; font-weight:700;"><span class="plugin-count">' . $new_messages_count . '</span></span>' 
        : '';

    // Menu Principal
    add_menu_page(
        __('BYT3LAB Contenu', 'byt3lab_wordpress_theme'),
        __('BYT3LAB Contenu', 'byt3lab_wordpress_theme') . $msg_badge,
        'edit_posts',
        'byt3lab-content-hub',
        'byt3lab_render_admin_hub_page',
        'dashicons-networking',
        25
    );

    // 0. Tableau de bord
    add_submenu_page(
        'byt3lab-content-hub',
        __('Tableau de bord', 'byt3lab_wordpress_theme'),
        __('Vue d\'ensemble', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'byt3lab-content-hub',
        'byt3lab_render_admin_hub_page'
    );

    // 1. Divisions Technologiques (Les 5 axes structurants du groupe)
    add_submenu_page(
        'byt3lab-content-hub',
        __('Divisions Technologiques', 'byt3lab_wordpress_theme'),
        __('1. Divisions Tech (5)', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_division'
    );

    // 2. Produits & Solutions (MELODI ERP, SUKU, BWS)
    add_submenu_page(
        'byt3lab-content-hub',
        __('Produits & Solutions', 'byt3lab_wordpress_theme'),
        __('2. Produits & Solutions', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_solution'
    );

    // 3. Services & Ingénierie
    add_submenu_page(
        'byt3lab-content-hub',
        __('Services & Offres Commerciales', 'byt3lab_wordpress_theme'),
        __('3. Services & Offres', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_service'
    );

    // 4. Studio Créatif NGRAFIX
    add_submenu_page(
        'byt3lab-content-hub',
        __('Studio Créatif NGRAFIX', 'byt3lab_wordpress_theme'),
        __('4. Studio NGRAFIX', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=ngrafix_work'
    );

    // Sous-menu Disciplines NGRAFIX
    add_submenu_page(
        'byt3lab-content-hub',
        __('Disciplines NGRAFIX', 'byt3lab_wordpress_theme'),
        __('— Disciplines Studio', 'byt3lab_wordpress_theme'),
        'manage_categories',
        'edit-tags.php?taxonomy=ngrafix_discipline&post_type=ngrafix_work'
    );

    // 5. Partenaires Institutionnels & Technologiques
    add_submenu_page(
        'byt3lab-content-hub',
        __('Partenaires & Alliances', 'byt3lab_wordpress_theme'),
        __('5. Partenaires', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_partner'
    );

    // 6. Projets Réalisés & Études de Cas (portfolio réel sans faux chiffres)
    add_submenu_page(
        'byt3lab-content-hub',
        __('Projets & Références', 'byt3lab_wordpress_theme'),
        __('6. Projets Réalisés', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_project'
    );

    // 7. Capital Humain & Équipe
    add_submenu_page(
        'byt3lab-content-hub',
        __('Équipe & Gouvernance', 'byt3lab_wordpress_theme'),
        __('7. Équipe du Groupe', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_team'
    );

    // 8. Carrières & Postes Ouverts
    add_submenu_page(
        'byt3lab-content-hub',
        __('Offres d\'Emploi & Recrutement', 'byt3lab_wordpress_theme'),
        __('8. Offres d\'Emploi', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_job'
    );

    // 9. Messages, Devis & Partenariats Reçus
    add_submenu_page(
        'byt3lab-content-hub',
        __('Demandes & Messages Reçus', 'byt3lab_wordpress_theme'),
        __('9. Boîte de Réception', 'byt3lab_wordpress_theme') . $msg_badge,
        'edit_posts',
        'edit.php?post_type=byt3lab_message'
    );

    // 10. Réglages Généraux du Site
    add_submenu_page(
        'byt3lab-content-hub',
        __('Réglages du Site', 'byt3lab_wordpress_theme'),
        __('⚙️ Réglages du Site', 'byt3lab_wordpress_theme'),
        'manage_options',
        'byt3lab-site-settings',
        'byt3lab_render_settings_page'
    );
}

/**
 * Rendu du Tableau de Bord Principal (Executive Dashboard)
 */
function byt3lab_render_admin_hub_page() {
    $count_divisions = wp_count_posts('byt3lab_division')->publish ?? 0;
    $count_solutions = wp_count_posts('byt3lab_solution')->publish ?? 0;
    $count_services  = wp_count_posts('byt3lab_service')->publish ?? 0;
    $count_ngrafix   = wp_count_posts('ngrafix_work')->publish ?? 0;
    $count_partners  = wp_count_posts('byt3lab_partner')->publish ?? 0;
    $count_projects  = wp_count_posts('byt3lab_project')->publish ?? 0;
    $count_team      = wp_count_posts('byt3lab_team')->publish ?? 0;
    $count_jobs      = wp_count_posts('byt3lab_job')->publish ?? 0;
    $count_messages  = wp_count_posts('byt3lab_message')->publish ?? 0;

    $new_messages_count = count(get_posts([
        'post_type'      => 'byt3lab_message',
        'meta_key'       => '_byt3lab_msg_status',
        'meta_value'     => 'new',
        'posts_per_page' => -1,
        'fields'         => 'ids',
    ]));

    // Récupération des divisions enregistrées
    $divisions = get_posts([
        'post_type'      => 'byt3lab_division',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order date',
        'order'          => 'ASC',
        'post_status'    => ['publish', 'draft'],
    ]);

    // Récupération des solutions / produits
    $solutions = get_posts([
        'post_type'      => 'byt3lab_solution',
        'posts_per_page' => -1,
        'orderby'        => 'menu_order date',
        'order'          => 'ASC',
        'post_status'    => ['publish', 'draft'],
    ]);

    // Derniers messages reçus
    $recent_messages = get_posts([
        'post_type'      => 'byt3lab_message',
        'posts_per_page' => 6,
        'post_status'    => 'publish',
    ]);

    // Derniers recrutements
    $recent_jobs = get_posts([
        'post_type'      => 'byt3lab_job',
        'posts_per_page' => 4,
        'post_status'    => 'publish',
    ]);
    ?>
    <div class="wrap" style="max-width: 1280px; margin-top: 20px;">
        
        <!-- Header Banner Institutionnel -->
        <div style="background: linear-gradient(135deg, #00172B 0%, #002A4E 65%, #053761 100%); color: #ffffff; padding: 32px; border-radius: 12px; border-left: 6px solid #4FD3F5; box-shadow: 0 12px 32px rgba(0, 23, 43, 0.2); margin-bottom: 25px;">
            <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
                <div>
                    <span style="font-size: 11px; text-transform: uppercase; letter-spacing: 2px; font-weight: 800; color: #4FD3F5; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                        <span>BYT3LAB</span>
                        <span style="opacity: 0.5;">//</span>
                        <span>TECHNOLOGY &amp; INNOVATION GROUP</span>
                    </span>
                    <h1 style="color: #ffffff; margin: 0; font-size: 28px; font-weight: 800; letter-spacing: -0.5px; line-height: 1.2;">
                        Console de Gestion Institutionnelle
                    </h1>
                    <p style="color: #94A3B8; margin: 8px 0 0 0; font-size: 14px; max-width: 760px; line-height: 1.5;">
                        Supervision de l'écosystème : les 5 Divisions technologiques, les Produits (MELODI ERP, SUKU, BWS), le Studio Créatif NGRAFIX, les Services, les Partenariats et les Flux de candidatures &amp; demandes.
                    </p>
                </div>
                <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" class="button button-large" style="background: rgba(255,255,255,0.1); border-color: rgba(255,255,255,0.25); color: #fff; font-weight: 600;">
                        Voir le site en direct ↗
                    </a>
                    <a href="<?php echo esc_url(admin_url('admin.php?page=byt3lab-site-settings')); ?>" class="button button-primary button-large" style="background: #1D7FD8; border-color: #1D7FD8; font-weight: 600;">
                        ⚙️ Réglages du Site
                    </a>
                </div>
            </div>
        </div>

        <!-- Grille de Métriques Clés (9 Cartes Métiers) -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 18px; margin-bottom: 28px;">
            
            <!-- 1. Divisions Technologiques -->
            <div class="byt3lab-card" style="border-top: 3px solid #1D7FD8;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(29, 127, 216, 0.1); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #1D7FD8;">🏛️</span>
                        <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_divisions); ?></span>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Divisions Technologiques</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Les 5 piliers stratégiques : Software, Cloud, Hardware, Industrie &amp; Énergie.
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_division')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #1D7FD8; border-color: #1D7FD8;">Gérer les 5 Divisions</a>
                    <a href="<?php echo esc_url(home_url('/technologies/')); ?>" target="_blank" class="button" title="Voir la page technologies">👀</a>
                </div>
            </div>

            <!-- 2. Produits & Solutions -->
            <div class="byt3lab-card" style="border-top: 3px solid #4FD3F5;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(79, 211, 245, 0.15); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #0284C7;">📦</span>
                        <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_solutions); ?></span>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Produits &amp; Offres</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Progiciels et offres : MELODI ERP, SUKU (EdTech), BWS (En développement).
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_solution')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #0284C7; border-color: #0284C7;">Catalogue Produits</a>
                    <a href="<?php echo esc_url(home_url('/produits/')); ?>" target="_blank" class="button" title="Voir la page produits">👀</a>
                </div>
            </div>

            <!-- 3. Studio NGRAFIX -->
            <div class="byt3lab-card" style="border-top: 3px solid #F7861E;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(247, 134, 30, 0.12); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #F7861E;">🎨</span>
                        <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_ngrafix); ?></span>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Studio Créatif NGRAFIX</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Brand Identity, Design Graphique, Communication &amp; Production Média.
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=ngrafix_work')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #D96A0A; border-color: #D96A0A;">Réalisations Studio</a>
                    <a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" target="_blank" class="button" title="Voir le studio NGRAFIX">👀</a>
                </div>
            </div>

            <!-- 4. Services Commerciaux -->
            <div class="byt3lab-card" style="border-top: 3px solid #10B981;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(16, 185, 129, 0.1); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #059669;">🛠️</span>
                        <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_services); ?></span>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Services Commerciaux</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Ingénierie logicielle, intégration, infogérance cloud et conseil technique.
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_service')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #059669; border-color: #059669;">Liste des Services</a>
                    <a href="<?php echo esc_url(home_url('/services/')); ?>" target="_blank" class="button" title="Voir la page services">👀</a>
                </div>
            </div>

            <!-- 5. Partenariats -->
            <div class="byt3lab-card" style="border-top: 3px solid #6366F1;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(99, 102, 241, 0.1); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #4F46E5;">🤝</span>
                        <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_partners); ?></span>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Partenaires &amp; Alliances</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Partenaires technologiques, institutionnels, académiques et distributeurs.
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_partner')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #4F46E5; border-color: #4F46E5;">Gérer Partenaires</a>
                    <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" target="_blank" class="button" title="Voir l'espace partenaires">👀</a>
                </div>
            </div>

            <!-- 6. Boîte de Réception & Demandes -->
            <div class="byt3lab-card" style="border-top: 3px solid <?php echo $new_messages_count > 0 ? '#10B981' : '#002A4E'; ?>; background: <?php echo $new_messages_count > 0 ? '#F0FDF4' : '#ffffff'; ?>;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(0, 42, 78, 0.08); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #002A4E;">📥</span>
                        <div style="text-align: right;">
                            <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_messages); ?></span>
                            <?php if ($new_messages_count > 0) : ?>
                                <span class="byt3lab-badge byt3lab-badge--new" style="display: block; margin-top: 2px;">
                                    <?php echo esc_html($new_messages_count); ?> Nouveau(x)
                                </span>
                            <?php endif; ?>
                        </div>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Demandes &amp; Messages</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Soumissions reçues des formulaires de contact et de partenariat.
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid <?php echo $new_messages_count > 0 ? '#DCFCE7' : '#F1F5F9'; ?>; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_message')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #002A4E; border-color: #002A4E; font-weight: 600;">
                        Voir la Boîte de Réception (<?php echo esc_html($count_messages); ?>)
                    </a>
                </div>
            </div>

            <!-- 7. Carrières -->
            <div class="byt3lab-card" style="border-top: 3px solid #0EA5E9;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(14, 165, 233, 0.1); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #0284C7;">💼</span>
                        <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_jobs); ?></span>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Carrières &amp; Emplois</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Postes ouverts, profils d'ingénieurs recherchés et candidatures.
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_job')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #0284C7; border-color: #0284C7;">Gérer les Postes</a>
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" target="_blank" class="button" title="Voir carrières">👀</a>
                </div>
            </div>

            <!-- 8. Projets Réalisés -->
            <div class="byt3lab-card" style="border-top: 3px solid #8B5CF6;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(139, 92, 246, 0.1); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #7C3AED;">📁</span>
                        <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_projects); ?></span>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Projets Réalisés</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Portfolio réel &amp; études de cas (gouvernance sans chiffres inventés).
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_project')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #7C3AED; border-color: #7C3AED;">Études de Cas</a>
                    <a href="<?php echo esc_url(home_url('/realisations/')); ?>" target="_blank" class="button" title="Voir réalisations">👀</a>
                </div>
            </div>

            <!-- 9. Équipe du Groupe -->
            <div class="byt3lab-card" style="border-top: 3px solid #EC4899;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <span style="font-size: 22px; background: rgba(236, 72, 153, 0.1); width: 42px; height: 42px; display: inline-flex; align-items: center; justify-content: center; border-radius: 8px; color: #DB2777;">👥</span>
                        <span style="font-size: 30px; font-weight: 800; color: #0F172A;"><?php echo esc_html($count_team); ?></span>
                    </div>
                    <h2 style="font-size: 17px; margin: 0 0 6px 0; color: #0F172A; font-weight: 700;">Équipe &amp; Gouvernance</h2>
                    <p style="color: #64748B; font-size: 13px; margin: 0 0 16px 0; line-height: 1.45;">
                        Profils des ingénieurs, architectes et responsables de pôles.
                    </p>
                </div>
                <div style="display: flex; gap: 8px; border-top: 1px solid #F1F5F9; padding-top: 14px;">
                    <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_team')); ?>" class="button button-primary" style="flex: 1; text-align: center; background: #DB2777; border-color: #DB2777;">Annuaire Équipe</a>
                    <a href="<?php echo esc_url(home_url('/equipe/')); ?>" target="_blank" class="button" title="Voir équipe">👀</a>
                </div>
            </div>

        </div>

        <!-- Section 1 : Matrice de Maturité des 5 Divisions Technologiques -->
        <div style="background: #ffffff; border: 1px solid #E2E8F0; border-radius: 12px; padding: 24px; margin-bottom: 25px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; flex-wrap: wrap; gap: 10px;">
                <div>
                    <span style="font-size: 11px; font-weight: 700; color: #1D7FD8; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 4px;">AXES STRATÉGIQUES</span>
                    <h2 style="margin: 0; font-size: 18px; font-weight: 800; color: #0F172A;">Les 5 Divisions Technologiques du Groupe</h2>
                </div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_division')); ?>" class="button" style="font-weight: 600;">
                    Gérer les divisions &rarr;
                </a>
            </div>

            <table class="widefat striped" style="border: 1px solid #E2E8F0; border-radius: 8px; overflow: hidden;">
                <thead>
                    <tr style="background: #F8FAFC;">
                        <th style="padding: 12px 14px;">Division</th>
                        <th style="padding: 12px 14px;">Statut de Maturité</th>
                        <th style="padding: 12px 14px;">Produits / Activités Liées</th>
                        <th style="padding: 12px 14px; text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($divisions)) : foreach ($divisions as $d) : 
                        $status   = get_post_meta($d->ID, '_byt3lab_division_status', true) ?: 'active';
                        $products = get_post_meta($d->ID, '_byt3lab_division_products', true) ?: '—';
                    ?>
                        <tr>
                            <td style="padding: 12px 14px;">
                                <strong style="font-size: 14px; color: #002A4E;"><?php echo esc_html($d->post_title); ?></strong>
                                <div style="color: #64748B; font-size: 12px; margin-top: 2px;">
                                    Permalien : <code>/technologies/<?php echo esc_html($d->post_name); ?>/</code>
                                </div>
                            </td>
                            <td style="padding: 12px 14px;">
                                <?php echo byt3lab_status_badge($status); ?>
                            </td>
                            <td style="padding: 12px 14px; font-size: 13px; color: #334155;">
                                <?php echo esc_html($products); ?>
                            </td>
                            <td style="padding: 12px 14px; text-align: right;">
                                <a href="<?php echo esc_url(get_edit_post_link($d->ID)); ?>" class="button button-small" style="font-weight: 600;">
                                    Modifier
                                </a>
                                <a href="<?php echo esc_url(get_permalink($d->ID)); ?>" target="_blank" class="button button-small" title="Voir la page de division">
                                    Voir ↗
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else : ?>
                        <tr>
                            <td colspan="4" style="text-align: center; padding: 20px; color: #64748B;">
                                Aucune division configurée. Utilisez la migration automatique ou ajoutez une division.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Section 2 : Produits & Solutions -->
        <div style="background: #ffffff; border: 1px solid #E2E8F0; border-radius: 12px; padding: 24px; margin-bottom: 25px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; flex-wrap: wrap; gap: 10px;">
                <div>
                    <span style="font-size: 11px; font-weight: 700; color: #0284C7; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 4px;">CATALOGUE LOGICIEL &amp; INFRASTRUCTURE</span>
                    <h2 style="margin: 0; font-size: 18px; font-weight: 800; color: #0F172A;">Produits Développés &amp; Exploités</h2>
                </div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_solution')); ?>" class="button" style="font-weight: 600;">
                    Gérer les produits &rarr;
                </a>
            </div>

            <table class="widefat striped" style="border: 1px solid #E2E8F0; border-radius: 8px; overflow: hidden;">
                <thead>
                    <tr style="background: #F8FAFC;">
                        <th style="padding: 12px 14px;">Produit / Solution</th>
                        <th style="padding: 12px 14px;">Statut</th>
                        <th style="padding: 12px 14px;">Division Parente</th>
                        <th style="padding: 12px 14px;">Accès / URL</th>
                        <th style="padding: 12px 14px; text-align: right;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($solutions)) : foreach ($solutions as $sol) : 
                        $s_status = get_post_meta($sol->ID, '_byt3lab_solution_status', true) ?: 'active';
                        $s_div    = get_post_meta($sol->ID, '_byt3lab_solution_division', true) ?: 'Software & Digital';
                        $s_url    = get_post_meta($sol->ID, '_byt3lab_solution_url', true) ?: '';
                    ?>
                        <tr>
                            <td style="padding: 12px 14px;">
                                <strong style="font-size: 14px; color: #002A4E;"><?php echo esc_html($sol->post_title); ?></strong>
                                <div style="color: #64748B; font-size: 12px; margin-top: 2px;">
                                    Permalien : <code>/produits/<?php echo esc_html($sol->post_name); ?>/</code>
                                </div>
                            </td>
                            <td style="padding: 12px 14px;">
                                <?php echo byt3lab_status_badge($s_status); ?>
                            </td>
                            <td style="padding: 12px 14px; font-size: 13px; color: #334155;">
                                <?php echo esc_html($s_div); ?>
                            </td>
                            <td style="padding: 12px 14px; font-size: 12px;">
                                <?php if (!empty($s_url)) : ?>
                                    <a href="<?php echo esc_url($s_url); ?>" target="_blank" style="color: #1D7FD8; text-decoration: none; font-weight: 600;">
                                        <?php echo esc_html($s_url); ?> ↗
                                    </a>
                                <?php else : ?>
                                    <span style="color: #94A3B8;">Intégré au site</span>
                                <?php endif; ?>
                            </td>
                            <td style="padding: 12px 14px; text-align: right;">
                                <a href="<?php echo esc_url(get_edit_post_link($sol->ID)); ?>" class="button button-small" style="font-weight: 600;">
                                    Modifier
                                </a>
                                <a href="<?php echo esc_url(get_permalink($sol->ID)); ?>" target="_blank" class="button button-small">
                                    Voir ↗
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; else : ?>
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 20px; color: #64748B;">
                                Aucun produit enregistré pour le moment.
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

        <!-- Section 3 : Dernières Demandes Entrantes (Messages & Partenariats) -->
        <div style="background: #ffffff; border: 1.5px solid <?php echo $new_messages_count > 0 ? '#10B981' : '#E2E8F0'; ?>; border-radius: 12px; padding: 24px; margin-bottom: 25px; box-shadow: 0 2px 8px rgba(0,0,0,0.03);">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 18px; flex-wrap: wrap; gap: 10px;">
                <div>
                    <span style="font-size: 11px; font-weight: 700; color: #059669; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 4px;">BOÎTE DE RÉCEPTION INSTITUTIONNELLE</span>
                    <h2 style="margin: 0; font-size: 18px; font-weight: 800; color: #0F172A;">Dernières Prises de Contact &amp; Demandes de Partenariat</h2>
                </div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_message')); ?>" class="button button-primary" style="background: #002A4E; border-color: #002A4E; font-weight: 600;">
                    Boîte de Réception complète &rarr;
                </a>
            </div>

            <?php if (!empty($recent_messages)) : ?>
                <table class="widefat striped" style="border: 1px solid #E2E8F0; border-radius: 8px; overflow: hidden;">
                    <thead>
                        <tr style="background: #F8FAFC;">
                            <th style="padding: 12px 14px;">Type</th>
                            <th style="padding: 12px 14px;">Expéditeur / Entreprise</th>
                            <th style="padding: 12px 14px;">Objet / Domaine</th>
                            <th style="padding: 12px 14px;">Statut</th>
                            <th style="padding: 12px 14px; text-align: right;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($recent_messages as $m) : 
                            $m_type    = get_post_meta($m->ID, '_byt3lab_msg_type', true) ?: 'contact';
                            $m_name    = get_post_meta($m->ID, '_byt3lab_msg_name', true) ?: $m->post_title;
                            $m_org     = get_post_meta($m->ID, '_byt3lab_msg_org', true);
                            $m_email   = get_post_meta($m->ID, '_byt3lab_msg_email', true);
                            $m_subject = get_post_meta($m->ID, '_byt3lab_msg_subject', true) ?: 'Contact';
                            $m_status  = get_post_meta($m->ID, '_byt3lab_msg_status', true) ?: 'new';
                        ?>
                            <tr>
                                <td style="padding: 12px 14px;">
                                    <?php if ($m_type === 'partner') : ?>
                                        <span class="byt3lab-badge byt3lab-badge--partner">Partenariat</span>
                                    <?php else : ?>
                                        <span class="byt3lab-badge byt3lab-badge--contact">Contact</span>
                                    <?php endif; ?>
                                </td>
                                <td style="padding: 12px 14px;">
                                    <strong style="color: #0F172A; font-size: 13.5px;"><?php echo esc_html($m_name); ?></strong>
                                    <?php if (!empty($m_org)) : ?>
                                        <span style="color: #64748B; font-size: 12px;">(<?php echo esc_html($m_org); ?>)</span>
                                    <?php endif; ?>
                                    <div style="color: #94A3B8; font-size: 12px; margin-top: 2px;">
                                        <?php echo esc_html($m_email); ?>
                                    </div>
                                </td>
                                <td style="padding: 12px 14px; font-size: 13px; color: #334155;">
                                    <?php echo esc_html($m_subject); ?>
                                </td>
                                <td style="padding: 12px 14px;">
                                    <?php if ($m_status === 'new') : ?>
                                        <span class="byt3lab-badge byt3lab-badge--new">NOUVEAU</span>
                                    <?php else : ?>
                                        <span style="font-size: 11px; background: #F1F5F9; color: #64748B; padding: 2px 7px; border-radius: 4px;">LU / TRAITÉ</span>
                                    <?php endif; ?>
                                </td>
                                <td style="padding: 12px 14px; text-align: right;">
                                    <a href="<?php echo esc_url(get_edit_post_link($m->ID)); ?>" class="button button-small" style="font-weight: 600;">
                                        Consulter
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else : ?>
                <div style="padding: 24px; text-align: center; color: #94A3B8; background: #F8FAFC; border-radius: 8px;">
                    <em>Aucune demande reçue pour le moment. Les formulaires de contact et de partenariat alimenteront cet espace.</em>
                </div>
            <?php endif; ?>
        </div>

    </div>
    <?php
}

/**
 * ═════════════════════════════════════════════════════════════════════════
 * COLONNES PERSONNALISÉES POUR LES LISTES DE L'ADMINISTRATION
 * ═════════════════════════════════════════════════════════════════════════
 */

// 1. Colonnes Divisions Technologiques
add_filter('manage_byt3lab_division_posts_columns', function ($columns) {
    return [
        'cb'           => $columns['cb'],
        'title'        => __('Division Technologique', 'byt3lab_wordpress_theme'),
        'div_status'   => __('Statut de Maturité', 'byt3lab_wordpress_theme'),
        'div_products' => __('Produits / Activités Liées', 'byt3lab_wordpress_theme'),
        'div_order'    => __('Ordre', 'byt3lab_wordpress_theme'),
        'date'         => __('Date', 'byt3lab_wordpress_theme'),
    ];
});

add_action('manage_byt3lab_division_posts_custom_column', function ($column, $post_id) {
    if ($column === 'div_status') {
        $st = get_post_meta($post_id, '_byt3lab_division_status', true) ?: 'active';
        echo byt3lab_status_badge($st);
    } elseif ($column === 'div_products') {
        $p = get_post_meta($post_id, '_byt3lab_division_products', true);
        echo !empty($p) ? esc_html($p) : '<span style="color:#94a3b8;">—</span>';
    } elseif ($column === 'div_order') {
        $post = get_post($post_id);
        echo esc_html($post->menu_order);
    }
}, 10, 2);

// 2. Colonnes Produits & Solutions
add_filter('manage_byt3lab_solution_posts_columns', function ($columns) {
    return [
        'cb'           => $columns['cb'],
        'title'        => __('Produit / Solution', 'byt3lab_wordpress_theme'),
        'sol_status'   => __('Statut', 'byt3lab_wordpress_theme'),
        'sol_division' => __('Division Parente', 'byt3lab_wordpress_theme'),
        'sol_url'      => __('Portail / URL', 'byt3lab_wordpress_theme'),
        'date'         => __('Date', 'byt3lab_wordpress_theme'),
    ];
});

add_action('manage_byt3lab_solution_posts_custom_column', function ($column, $post_id) {
    if ($column === 'sol_status') {
        $st = get_post_meta($post_id, '_byt3lab_solution_status', true) ?: 'active';
        echo byt3lab_status_badge($st);
    } elseif ($column === 'sol_division') {
        $div = get_post_meta($post_id, '_byt3lab_solution_division', true);
        echo !empty($div) ? esc_html($div) : '<span style="color:#94a3b8;">Software & Digital</span>';
    } elseif ($column === 'sol_url') {
        $url = get_post_meta($post_id, '_byt3lab_solution_url', true);
        if (!empty($url)) {
            echo '<a href="' . esc_url($url) . '" target="_blank">' . esc_html($url) . ' ↗</a>';
        } else {
            echo '<span style="color:#94a3b8;">Intégré au site</span>';
        }
    }
}, 10, 2);

// 3. Colonnes Messages & Demandes Reçues
add_filter('manage_byt3lab_message_posts_columns', function ($columns) {
    return [
        'cb'          => $columns['cb'],
        'title'       => __('Objet / Titre', 'byt3lab_wordpress_theme'),
        'msg_type'    => __('Type', 'byt3lab_wordpress_theme'),
        'msg_sender'  => __('Expéditeur & Société', 'byt3lab_wordpress_theme'),
        'msg_email'   => __('E-mail / Contact', 'byt3lab_wordpress_theme'),
        'msg_status'  => __('Statut', 'byt3lab_wordpress_theme'),
        'date'        => __('Date de Réception', 'byt3lab_wordpress_theme'),
    ];
});

add_action('manage_byt3lab_message_posts_custom_column', function ($column, $post_id) {
    if ($column === 'msg_type') {
        $type = get_post_meta($post_id, '_byt3lab_msg_type', true);
        if ($type === 'partner') {
            echo '<span class="byt3lab-badge byt3lab-badge--partner">Partenariat</span>';
        } else {
            echo '<span class="byt3lab-badge byt3lab-badge--contact">Contact</span>';
        }
    } elseif ($column === 'msg_sender') {
        $name = get_post_meta($post_id, '_byt3lab_msg_name', true);
        $org  = get_post_meta($post_id, '_byt3lab_msg_org', true);
        echo '<strong>' . esc_html($name) . '</strong>';
        if (!empty($org)) {
            echo ' <span style="color:#64748b;">(' . esc_html($org) . ')</span>';
        }
    } elseif ($column === 'msg_email') {
        $email = get_post_meta($post_id, '_byt3lab_msg_email', true);
        $phone = get_post_meta($post_id, '_byt3lab_msg_phone', true);
        if (!empty($email)) {
            echo '<a href="mailto:' . esc_attr($email) . '">' . esc_html($email) . '</a>';
        }
        if (!empty($phone)) {
            echo '<br><small style="color:#64748b;">' . esc_html($phone) . '</small>';
        }
    } elseif ($column === 'msg_status') {
        $st = get_post_meta($post_id, '_byt3lab_msg_status', true) ?: 'new';
        if ($st === 'new') {
            echo '<span class="byt3lab-badge byt3lab-badge--new">NOUVEAU</span>';
        } else {
            echo '<span style="font-size:11px; background:#f1f5f9; color:#64748b; padding:2px 6px; border-radius:4px;">LU</span>';
        }
    }
}, 10, 2);

// 4. Colonnes Offres d'Emploi
add_filter('manage_byt3lab_job_posts_columns', function ($columns) {
    return [
        'cb'           => $columns['cb'],
        'title'        => __('Intitulé du Poste', 'byt3lab_wordpress_theme'),
        'job_dept'     => __('Département / Pôle', 'byt3lab_wordpress_theme'),
        'job_contract' => __('Contrat', 'byt3lab_wordpress_theme'),
        'job_loc'      => __('Lieu', 'byt3lab_wordpress_theme'),
        'job_status'   => __('Statut', 'byt3lab_wordpress_theme'),
        'date'         => __('Date de Publication', 'byt3lab_wordpress_theme'),
    ];
});

add_action('manage_byt3lab_job_posts_custom_column', function ($column, $post_id) {
    if ($column === 'job_dept') {
        echo esc_html(get_post_meta($post_id, '_byt3lab_job_department', true) ?: 'Software & Digital');
    } elseif ($column === 'job_contract') {
        echo esc_html(get_post_meta($post_id, '_byt3lab_job_contract', true) ?: 'CDI');
    } elseif ($column === 'job_loc') {
        echo esc_html(get_post_meta($post_id, '_byt3lab_job_location', true) ?: 'Douala / Hybride');
    } elseif ($column === 'job_status') {
        $st = get_post_meta($post_id, '_byt3lab_job_status', true) ?: 'active';
        if ($st === 'urgent') {
            echo '<span style="font-size:11px; background:#fee2e2; color:#b91c1c; padding:2px 6px; border-radius:4px; font-weight:700;">URGENT</span>';
        } elseif ($st === 'closed') {
            echo '<span style="font-size:11px; background:#f1f5f9; color:#94a3b8; padding:2px 6px; border-radius:4px;">CLÔTURÉ</span>';
        } else {
            echo '<span style="font-size:11px; background:#dcfce7; color:#15803d; padding:2px 6px; border-radius:4px; font-weight:700;">OUVERT</span>';
        }
    }
}, 10, 2);

// 5. Colonnes Partenaires
add_filter('manage_byt3lab_partner_posts_columns', function ($columns) {
    return [
        'cb'           => $columns['cb'],
        'title'        => __('Partenaire', 'byt3lab_wordpress_theme'),
        'part_type'    => __('Type d\'Alliance', 'byt3lab_wordpress_theme'),
        'part_url'     => __('Site Web', 'byt3lab_wordpress_theme'),
        'date'         => __('Date', 'byt3lab_wordpress_theme'),
    ];
});

add_action('manage_byt3lab_partner_posts_custom_column', function ($column, $post_id) {
    if ($column === 'part_type') {
        $t = get_post_meta($post_id, '_byt3lab_partner_type', true) ?: 'technology';
        $labels = [
            'technology'    => 'Technologique',
            'business'      => 'Commercial / Distributeur',
            'academic'      => 'Académique & Recherche',
            'institutional' => 'Institutionnel',
        ];
        echo esc_html($labels[$t] ?? ucfirst($t));
    } elseif ($column === 'part_url') {
        $url = get_post_meta($post_id, '_byt3lab_partner_url', true);
        if (!empty($url)) {
            echo '<a href="' . esc_url($url) . '" target="_blank">' . esc_html($url) . ' ↗</a>';
        } else {
            echo '<span style="color:#94a3b8;">—</span>';
        }
    }
}, 10, 2);

// 6. Colonnes Réalisations NGRAFIX
add_filter('manage_ngrafix_work_posts_columns', function ($columns) {
    return [
        'cb'           => $columns['cb'],
        'title'        => __('Titre de la Réalisation', 'byt3lab_wordpress_theme'),
        'ngx_client'   => __('Client / Projet', 'byt3lab_wordpress_theme'),
        'ngx_year'     => __('Année', 'byt3lab_wordpress_theme'),
        'date'         => __('Date', 'byt3lab_wordpress_theme'),
    ];
});

add_action('manage_ngrafix_work_posts_custom_column', function ($column, $post_id) {
    if ($column === 'ngx_client') {
        echo esc_html(get_post_meta($post_id, '_ngrafix_work_client', true) ?: '—');
    } elseif ($column === 'ngx_year') {
        echo esc_html(get_post_meta($post_id, '_ngrafix_work_year', true) ?: date('Y'));
    }
}, 10, 2);
