<?php
/**
 * BYT3LAB Theme - Administration Page & Hub
 * Page d'administration dédiée pour gérer l'écosystème institutionnel BYT3LAB.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'byt3lab_register_admin_hub_menu');

function byt3lab_register_admin_hub_menu() {
    // Menu Principal
    add_menu_page(
        __('BYT3LAB Contenu', 'byt3lab_wordpress_theme'),
        __('BYT3LAB Contenu', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'byt3lab-content-hub',
        'byt3lab_render_admin_hub_page',
        'dashicons-networking',
        25
    );

    // 1. Vue d'ensemble
    add_submenu_page(
        'byt3lab-content-hub',
        __('Vue d\'ensemble', 'byt3lab_wordpress_theme'),
        __('Vue d\'ensemble', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'byt3lab-content-hub',
        'byt3lab_render_admin_hub_page'
    );

    // 2. Divisions Technologiques (Les 5 axes stratégiques)
    add_submenu_page(
        'byt3lab-content-hub',
        __('Divisions Technologiques', 'byt3lab_wordpress_theme'),
        __('Divisions Tech (5)', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_division'
    );

    // 3. Produits & Offres (MELODI, SUKU, BWS)
    add_submenu_page(
        'byt3lab-content-hub',
        __('Produits & Offres', 'byt3lab_wordpress_theme'),
        __('Produits & Offres', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_solution'
    );

    // 4. Projets Réalisés
    add_submenu_page(
        'byt3lab-content-hub',
        __('Projets Réalisés', 'byt3lab_wordpress_theme'),
        __('Projets Réalisés', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_project'
    );

    // 5. Partenaires
    add_submenu_page(
        'byt3lab-content-hub',
        __('Partenaires', 'byt3lab_wordpress_theme'),
        __('Partenaires', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_partner'
    );

    // 6. NGRAFIX Portfolio
    add_submenu_page(
        'byt3lab-content-hub',
        __('Réalisations NGRAFIX', 'byt3lab_wordpress_theme'),
        __('Studio NGRAFIX', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=ngrafix_work'
    );

    // 7. Services & Ingénierie
    add_submenu_page(
        'byt3lab-content-hub',
        __('Services & Ingénierie', 'byt3lab_wordpress_theme'),
        __('Services & Offres', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_service'
    );

    // 8. Membres de l'Équipe
    add_submenu_page(
        'byt3lab-content-hub',
        __('Membres de l\'Équipe', 'byt3lab_wordpress_theme'),
        __('Membres de l\'Équipe', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_team'
    );

    // 9. Offres d'Emploi / Carrières
    add_submenu_page(
        'byt3lab-content-hub',
        __('Offres d\'Emploi & Recrutement', 'byt3lab_wordpress_theme'),
        __('Offres d\'Emploi', 'byt3lab_wordpress_theme'),
        'edit_posts',
        'edit.php?post_type=byt3lab_job'
    );

    // 10. Messages reçus
    $new_messages_count = count(get_posts([
        'post_type'      => 'byt3lab_message',
        'meta_key'       => '_byt3lab_msg_status',
        'meta_value'     => 'new',
        'posts_per_page' => -1,
        'fields'         => 'ids',
    ]));

    $badge_html = $new_messages_count > 0 
        ? ' <span class="update-plugins count-' . $new_messages_count . '" style="background:#10b981; color:#fff; border-radius:10px; padding:1px 6px; font-size:10px; font-weight:700;"><span class="plugin-count">' . $new_messages_count . '</span></span>' 
        : '';

    add_submenu_page(
        'byt3lab-content-hub',
        __('Messages Reçus', 'byt3lab_wordpress_theme'),
        __('Messages Reçus', 'byt3lab_wordpress_theme') . $badge_html,
        'edit_posts',
        'edit.php?post_type=byt3lab_message'
    );
}

function byt3lab_render_admin_hub_page() {
    $count_divisions = wp_count_posts('byt3lab_division')->publish ?? 0;
    $count_solutions = wp_count_posts('byt3lab_solution')->publish ?? 0;
    $count_projects  = wp_count_posts('byt3lab_project')->publish ?? 0;
    $count_partners  = wp_count_posts('byt3lab_partner')->publish ?? 0;
    $count_ngrafix   = wp_count_posts('ngrafix_work')->publish ?? 0;
    $count_services  = wp_count_posts('byt3lab_service')->publish ?? 0;
    $count_team      = wp_count_posts('byt3lab_team')->publish ?? 0;
    $count_jobs      = wp_count_posts('byt3lab_job')->publish ?? 0;
    $count_messages  = wp_count_posts('byt3lab_message')->publish ?? 0;
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('BYT3LAB — Hub de Gestion de Contenu', 'byt3lab_wordpress_theme'); ?></h1>
        <p class="description">
            <?php esc_html_e('Pilotez l\'architecture institutionnelle du groupe Byt3Lab, ses 5 divisions technologiques, ses produits et marques.', 'byt3lab_wordpress_theme'); ?>
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 15px; margin: 25px 0;">
            <div style="background: #fff; border: 1px solid #cbd5e1; border-top: 4px solid #002A4E; border-radius: 6px; padding: 16px;">
                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b;">Divisions Tech</div>
                <div style="font-size: 28px; font-weight: 700; color: #002A4E; margin: 4px 0;"><?php echo (int) $count_divisions; ?></div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_division')); ?>" style="font-size: 12px; font-weight: 600;">Gérer les divisions &rarr;</a>
            </div>

            <div style="background: #fff; border: 1px solid #cbd5e1; border-top: 4px solid #1D7FD8; border-radius: 6px; padding: 16px;">
                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b;">Produits & Offres (MELODI, BWS)</div>
                <div style="font-size: 28px; font-weight: 700; color: #1D7FD8; margin: 4px 0;"><?php echo (int) $count_solutions; ?></div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_solution')); ?>" style="font-size: 12px; font-weight: 600;">Gérer les produits &rarr;</a>
            </div>

            <div style="background: #fff; border: 1px solid #cbd5e1; border-top: 4px solid #1E9E6A; border-radius: 6px; padding: 16px;">
                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b;">Projets Réels</div>
                <div style="font-size: 28px; font-weight: 700; color: #1E9E6A; margin: 4px 0;"><?php echo (int) $count_projects; ?></div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_project')); ?>" style="font-size: 12px; font-weight: 600;">Gérer le portfolio &rarr;</a>
            </div>

            <div style="background: #fff; border: 1px solid #cbd5e1; border-top: 4px solid #F7861E; border-radius: 6px; padding: 16px;">
                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b;">Studio NGRAFIX</div>
                <div style="font-size: 28px; font-weight: 700; color: #F7861E; margin: 4px 0;"><?php echo (int) $count_ngrafix; ?></div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=ngrafix_work')); ?>" style="font-size: 12px; font-weight: 600;">Gérer NGRAFIX &rarr;</a>
            </div>

            <div style="background: #fff; border: 1px solid #cbd5e1; border-top: 4px solid #0284c7; border-radius: 6px; padding: 16px;">
                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b;">Partenaires</div>
                <div style="font-size: 28px; font-weight: 700; color: #0284c7; margin: 4px 0;"><?php echo (int) $count_partners; ?></div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_partner')); ?>" style="font-size: 12px; font-weight: 600;">Gérer les partenaires &rarr;</a>
            </div>

            <div style="background: #fff; border: 1px solid #cbd5e1; border-top: 4px solid #64748b; border-radius: 6px; padding: 16px;">
                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b;">Messages & Demandes</div>
                <div style="font-size: 28px; font-weight: 700; color: #64748b; margin: 4px 0;"><?php echo (int) $count_messages; ?></div>
                <a href="<?php echo esc_url(admin_url('edit.php?post_type=byt3lab_message')); ?>" style="font-size: 12px; font-weight: 600;">Consulter la boîte &rarr;</a>
            </div>
        </div>

        <div style="background: #eff6ff; border: 1px solid #bfdbfe; border-radius: 6px; padding: 16px 20px; margin-top: 20px;">
            <h3 style="margin-top: 0; color: #1e3a8a;"><?php esc_html_e('Raccourcis rapides & Réglages', 'byt3lab_wordpress_theme'); ?></h3>
            <p style="margin-bottom: 12px; color: #1e40af;"><?php esc_html_e('Pour modifier les slogans, titres de sections de l\'accueil, coordonnées de contact ou les liens de réseaux sociaux :', 'byt3lab_wordpress_theme'); ?></p>
            <a href="<?php echo esc_url(admin_url('admin.php?page=byt3lab-site-settings')); ?>" class="button button-primary">
                <?php esc_html_e('Ouvrir les Réglages du Site & Textes', 'byt3lab_wordpress_theme'); ?>
            </a>
            <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank" class="button" style="margin-left: 10px;">
                <?php esc_html_e('Voir le site en direct', 'byt3lab_wordpress_theme'); ?> &nearr;
            </a>
        </div>
    </div>
    <?php
}
