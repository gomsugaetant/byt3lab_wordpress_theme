<?php
/**
 * BYT3LAB Theme - Meta Boxes
 * Boîtes de métadonnées pour Divisions, Produits & Offres, Projets réels,
 * Partenaires, Réalisations NGRAFIX, Membres de l'équipe, Services et Carrières.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('add_meta_boxes', 'byt3lab_register_meta_boxes');
add_action('save_post', 'byt3lab_save_meta_boxes');
add_action('admin_enqueue_scripts', 'byt3lab_enqueue_admin_media_scripts');

function byt3lab_enqueue_admin_media_scripts($hook) {
    global $post_type;
    $types = ['byt3lab_division', 'byt3lab_solution', 'byt3lab_project', 'byt3lab_partner', 'ngrafix_work', 'byt3lab_team', 'byt3lab_service', 'byt3lab_job'];
    if (in_array($post_type, $types)) {
        wp_enqueue_media();
    }
}

function byt3lab_register_meta_boxes() {
    // 1. Division Technologique
    add_meta_box(
        'byt3lab_division_details',
        __('Configuration de la Division Technologique', 'byt3lab_wordpress_theme'),
        'byt3lab_render_division_meta_box',
        'byt3lab_division',
        'normal',
        'high'
    );

    // 2. Produits & Offres
    add_meta_box(
        'byt3lab_solution_details',
        __('Caractéristiques du Produit ou de l\'Offre', 'byt3lab_wordpress_theme'),
        'byt3lab_render_solution_meta_box',
        'byt3lab_solution',
        'normal',
        'high'
    );

    // 3. Projets Réalisés
    add_meta_box(
        'byt3lab_project_details',
        __('Détails du Projet Réalisé', 'byt3lab_wordpress_theme'),
        'byt3lab_render_project_meta_box',
        'byt3lab_project',
        'normal',
        'high'
    );

    // 4. Partenaire
    add_meta_box(
        'byt3lab_partner_details',
        __('Détails du Partenaire', 'byt3lab_wordpress_theme'),
        'byt3lab_render_partner_meta_box',
        'byt3lab_partner',
        'normal',
        'high'
    );

    // 5. Réalisation NGRAFIX
    add_meta_box(
        'ngrafix_work_details',
        __('Détails de la Réalisation NGRAFIX', 'byt3lab_wordpress_theme'),
        'byt3lab_render_ngrafix_meta_box',
        'ngrafix_work',
        'normal',
        'high'
    );

    // 6. Membres de l'équipe
    add_meta_box(
        'byt3lab_team_details',
        __('Informations du Membre de l\'Équipe', 'byt3lab_wordpress_theme'),
        'byt3lab_render_team_meta_box',
        'byt3lab_team',
        'normal',
        'high'
    );

    // 7. Services & Ingénierie
    add_meta_box(
        'byt3lab_service_details',
        __('Configuration du Service & Offre', 'byt3lab_wordpress_theme'),
        'byt3lab_render_service_meta_box',
        'byt3lab_service',
        'normal',
        'high'
    );

    // 8. Carrières
    add_meta_box(
        'byt3lab_job_details',
        __('Configuration de l\'Offre d\'Emploi', 'byt3lab_wordpress_theme'),
        'byt3lab_render_job_meta_box',
        'byt3lab_job',
        'normal',
        'high'
    );
}

/**
 * 1. Rendu Division Meta Box
 */
function byt3lab_render_division_meta_box($post) {
    wp_nonce_field('byt3lab_save_division_meta', 'byt3lab_division_nonce');

    $status       = get_post_meta($post->ID, '_byt3lab_status', true) ?: 'active';
    $icon         = get_post_meta($post->ID, '_byt3lab_icon', true) ?: 'code';
    $vision       = get_post_meta($post->ID, '_byt3lab_division_vision', true);
    $expertise    = get_post_meta($post->ID, '_byt3lab_division_expertise', true);
    $technologies = get_post_meta($post->ID, '_byt3lab_division_technologies', true);
    $services     = get_post_meta($post->ID, '_byt3lab_division_services', true);
    $industries   = get_post_meta($post->ID, '_byt3lab_division_industries', true);
    $maturity     = get_post_meta($post->ID, '_byt3lab_division_maturity', true);
    $related      = get_post_meta($post->ID, '_byt3lab_division_related', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="byt3lab_status"><strong><?php esc_html_e('Statut de Maturité Réelle *', 'byt3lab_wordpress_theme'); ?></strong></label></th>
            <td>
                <?php echo byt3lab_status_select('byt3lab_status', $status); ?>
                <p class="description"><?php esc_html_e('Définit si la division est Opérationnelle, En développement ou une Orientation stratégique.', 'byt3lab_wordpress_theme'); ?></p>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_icon"><?php esc_html_e('Identifiant d\'icône', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <input type="text" name="byt3lab_icon" id="byt3lab_icon" value="<?php echo esc_attr($icon); ?>" class="regular-text" />
                <p class="description"><?php esc_html_e('Exemples : code, cloud, network, factory, sun, cpu, zap, server...', 'byt3lab_wordpress_theme'); ?></p>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_division_vision"><?php esc_html_e('Vision de la division', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <textarea name="byt3lab_division_vision" id="byt3lab_division_vision" rows="3" class="large-text"><?php echo esc_textarea($vision); ?></textarea>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_division_expertise"><?php esc_html_e('Domaines d\'expertise (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <textarea name="byt3lab_division_expertise" id="byt3lab_division_expertise" rows="6" class="large-text"><?php echo esc_textarea($expertise); ?></textarea>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_division_technologies"><?php esc_html_e('Technologies concernées (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <textarea name="byt3lab_division_technologies" id="byt3lab_division_technologies" rows="4" class="large-text"><?php echo esc_textarea($technologies); ?></textarea>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_division_services"><?php esc_html_e('Services ou solutions associés (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <textarea name="byt3lab_division_services" id="byt3lab_division_services" rows="4" class="large-text"><?php echo esc_textarea($services); ?></textarea>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_division_industries"><?php esc_html_e('Industries / Secteurs cibles (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <textarea name="byt3lab_division_industries" id="byt3lab_division_industries" rows="4" class="large-text"><?php echo esc_textarea($industries); ?></textarea>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_division_maturity"><?php esc_html_e('Précision sur la maturité (texte explicatif transparent)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <textarea name="byt3lab_division_maturity" id="byt3lab_division_maturity" rows="3" class="large-text"><?php echo esc_textarea($maturity); ?></textarea>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_division_related"><?php esc_html_e('Slugs des produits/offres rattachés', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <input type="text" name="byt3lab_division_related" id="byt3lab_division_related" value="<?php echo esc_attr($related); ?>" class="large-text" />
                <p class="description"><?php esc_html_e('Séparés par des virgules (ex: melodi-erp, suku ou bws).', 'byt3lab_wordpress_theme'); ?></p>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * 2. Rendu Produits & Offres Meta Box
 */
function byt3lab_render_solution_meta_box($post) {
    wp_nonce_field('byt3lab_save_solution_meta', 'byt3lab_solution_nonce');

    $type         = get_post_meta($post->ID, '_byt3lab_offer_type', true) ?: 'product';
    $status       = get_post_meta($post->ID, '_byt3lab_status', true) ?: 'active';
    $division     = get_post_meta($post->ID, '_byt3lab_offer_division', true);
    $badge        = get_post_meta($post->ID, '_byt3lab_solution_badge', true);
    $tagline      = get_post_meta($post->ID, '_byt3lab_offer_tagline', true);
    $accent       = get_post_meta($post->ID, '_byt3lab_offer_accent', true) ?: '#1D7FD8';
    $features     = get_post_meta($post->ID, '_byt3lab_solution_features', true);
    $problems     = get_post_meta($post->ID, '_byt3lab_offer_problems', true);
    $benefits     = get_post_meta($post->ID, '_byt3lab_offer_benefits', true);
    $url          = get_post_meta($post->ID, '_byt3lab_solution_url', true);
    $btn_text     = get_post_meta($post->ID, '_byt3lab_solution_button_text', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="byt3lab_offer_type"><strong><?php esc_html_e('Type d\'offre *', 'byt3lab_wordpress_theme'); ?></strong></label></th>
            <td>
                <select name="byt3lab_offer_type" id="byt3lab_offer_type">
                    <option value="product" <?php selected($type, 'product'); ?>><?php esc_html_e('Produit Logiciel Propriétaire (ex: MELODI ERP, SUKU)', 'byt3lab_wordpress_theme'); ?></option>
                    <option value="service_activity" <?php selected($type, 'service_activity'); ?>><?php esc_html_e('Activité de Services d\'Infrastructure (ex: BWS)', 'byt3lab_wordpress_theme'); ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_status"><strong><?php esc_html_e('Statut de disponibilité', 'byt3lab_wordpress_theme'); ?></strong></label></th>
            <td><?php echo byt3lab_status_select('byt3lab_status', $status); ?></td>
        </tr>
        <tr>
            <th><label for="byt3lab_offer_division"><?php esc_html_e('Division de rattachement', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <input type="text" name="byt3lab_offer_division" id="byt3lab_offer_division" value="<?php echo esc_attr($division); ?>" class="regular-text" />
                <p class="description"><?php esc_html_e('Slug de la division (ex: logiciel-numerique, infrastructure-cloud)', 'byt3lab_wordpress_theme'); ?></p>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_solution_badge"><?php esc_html_e('Badge / Sur-titre', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_solution_badge" id="byt3lab_solution_badge" value="<?php echo esc_attr($badge); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_offer_tagline"><?php esc_html_e('Accroche courte (Tagline)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_offer_tagline" id="byt3lab_offer_tagline" value="<?php echo esc_attr($tagline); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_offer_accent"><?php esc_html_e('Couleur d\'accent (Hex)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="color" name="byt3lab_offer_accent" id="byt3lab_offer_accent" value="<?php echo esc_attr($accent); ?>" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_solution_features"><?php esc_html_e('Modules & Fonctionnalités réelles (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <textarea name="byt3lab_solution_features" id="byt3lab_solution_features" rows="6" class="large-text"><?php echo esc_textarea($features); ?></textarea>
                <p class="description"><?php esc_html_e('Règle éditoriale stricte : n\'indiquez que des fonctionnalités confirmées et réelles.', 'byt3lab_wordpress_theme'); ?></p>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_offer_problems"><?php esc_html_e('Problèmes résolus (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><textarea name="byt3lab_offer_problems" id="byt3lab_offer_problems" rows="4" class="large-text"><?php echo esc_textarea($problems); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="byt3lab_offer_benefits"><?php esc_html_e('Bénéfices & Avantages clés (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><textarea name="byt3lab_offer_benefits" id="byt3lab_offer_benefits" rows="4" class="large-text"><?php echo esc_textarea($benefits); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="byt3lab_solution_url"><?php esc_html_e('Lien externe vers la solution', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="url" name="byt3lab_solution_url" id="byt3lab_solution_url" value="<?php echo esc_attr($url); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_solution_button_text"><?php esc_html_e('Libellé du bouton', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_solution_button_text" id="byt3lab_solution_button_text" value="<?php echo esc_attr($btn_text); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * 3. Rendu Projets Réalisés Meta Box
 */
function byt3lab_render_project_meta_box($post) {
    wp_nonce_field('byt3lab_save_project_meta', 'byt3lab_project_nonce');
    $category = get_post_meta($post->ID, '_byt3lab_project_category', true);
    $stack    = get_post_meta($post->ID, '_byt3lab_project_stack', true);
    $client   = get_post_meta($post->ID, '_byt3lab_project_client', true);
    $year     = get_post_meta($post->ID, '_byt3lab_project_year', true);
    $url      = get_post_meta($post->ID, '_byt3lab_project_url', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="byt3lab_project_category"><?php esc_html_e('Catégorie / Domaine', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_project_category" id="byt3lab_project_category" value="<?php echo esc_attr($category); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_project_stack"><?php esc_html_e('Technologies utilisées (Stack)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_project_stack" id="byt3lab_project_stack" value="<?php echo esc_attr($stack); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_project_client"><?php esc_html_e('Client ou Organisation (uniquement si réel et autorisé)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_project_client" id="byt3lab_project_client" value="<?php echo esc_attr($client); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_project_year"><?php esc_html_e('Année de réalisation', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_project_year" id="byt3lab_project_year" value="<?php echo esc_attr($year); ?>" class="small-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_project_url"><?php esc_html_e('Lien vers le projet (optionnel)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="url" name="byt3lab_project_url" id="byt3lab_project_url" value="<?php echo esc_attr($url); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * 4. Rendu Partenaire Meta Box
 */
function byt3lab_render_partner_meta_box($post) {
    wp_nonce_field('byt3lab_save_partner_meta', 'byt3lab_partner_nonce');
    $type = get_post_meta($post->ID, '_byt3lab_partner_type', true);
    $url  = get_post_meta($post->ID, '_byt3lab_partner_url', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="byt3lab_partner_type"><?php esc_html_e('Type de Partenaire', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <select name="byt3lab_partner_type" id="byt3lab_partner_type">
                    <option value="tech" <?php selected($type, 'tech'); ?>><?php esc_html_e('Partenaire Technologique', 'byt3lab_wordpress_theme'); ?></option>
                    <option value="cloud" <?php selected($type, 'cloud'); ?>><?php esc_html_e('Fournisseur d\'Infrastructure & Cloud', 'byt3lab_wordpress_theme'); ?></option>
                    <option value="hardware" <?php selected($type, 'hardware'); ?>><?php esc_html_e('Fabricant / Constructeur Matériel', 'byt3lab_wordpress_theme'); ?></option>
                    <option value="academic" <?php selected($type, 'academic'); ?>><?php esc_html_e('Institution de Recherche / Académique', 'byt3lab_wordpress_theme'); ?></option>
                    <option value="business" <?php selected($type, 'business'); ?>><?php esc_html_e('Partenaire Commercial / Industriel', 'byt3lab_wordpress_theme'); ?></option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_partner_url"><?php esc_html_e('Site Web du partenaire', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="url" name="byt3lab_partner_url" id="byt3lab_partner_url" value="<?php echo esc_attr($url); ?>" class="large-text" /></td>
        </tr>
    </table>
    <p class="description"><?php esc_html_e('Définissez le logo du partenaire dans la boîte "Image mise en avant" à droite.', 'byt3lab_wordpress_theme'); ?></p>
    <?php
}

/**
 * 5. Rendu Réalisation NGRAFIX Meta Box
 */
function byt3lab_render_ngrafix_meta_box($post) {
    wp_nonce_field('ngrafix_save_work_meta', 'ngrafix_work_nonce');
    $client = get_post_meta($post->ID, '_ngrafix_client', true);
    $year   = get_post_meta($post->ID, '_ngrafix_year', true);
    $url    = get_post_meta($post->ID, '_ngrafix_url', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="ngrafix_client"><?php esc_html_e('Client / Marque', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="ngrafix_client" id="ngrafix_client" value="<?php echo esc_attr($client); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="ngrafix_year"><?php esc_html_e('Année', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="ngrafix_year" id="ngrafix_year" value="<?php echo esc_attr($year); ?>" class="small-text" /></td>
        </tr>
        <tr>
            <th><label for="ngrafix_url"><?php esc_html_e('Lien externe vers le projet', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="url" name="ngrafix_url" id="ngrafix_url" value="<?php echo esc_attr($url); ?>" class="large-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * 6. Rendu Membre Équipe Meta Box
 */
function byt3lab_render_team_meta_box($post) {
    wp_nonce_field('byt3lab_save_team_meta', 'byt3lab_team_nonce');
    $role     = get_post_meta($post->ID, '_byt3lab_team_role', true);
    $linkedin = get_post_meta($post->ID, '_byt3lab_team_linkedin', true);
    $email    = get_post_meta($post->ID, '_byt3lab_team_email', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="byt3lab_team_role"><?php esc_html_e('Fonction / Rôle', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_team_role" id="byt3lab_team_role" value="<?php echo esc_attr($role); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_team_linkedin"><?php esc_html_e('Profil LinkedIn', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="url" name="byt3lab_team_linkedin" id="byt3lab_team_linkedin" value="<?php echo esc_attr($linkedin); ?>" class="large-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_team_email"><?php esc_html_e('Adresse E-mail', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="email" name="byt3lab_team_email" id="byt3lab_team_email" value="<?php echo esc_attr($email); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * 7. Rendu Services & Ingénierie Meta Box
 */
function byt3lab_render_service_meta_box($post) {
    wp_nonce_field('byt3lab_save_service_meta', 'byt3lab_service_nonce');
    $badge       = get_post_meta($post->ID, '_byt3lab_service_badge', true);
    $features    = get_post_meta($post->ID, '_byt3lab_service_features', true);
    $deliverables= get_post_meta($post->ID, '_byt3lab_service_deliverables', true);
    ?>
    <table class="form-table">
        <tr>
            <th><label for="byt3lab_service_badge"><?php esc_html_e('Badge / Accroche', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_service_badge" id="byt3lab_service_badge" value="<?php echo esc_attr($badge); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_service_features"><?php esc_html_e('Prestations & Activités (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><textarea name="byt3lab_service_features" id="byt3lab_service_features" rows="5" class="large-text"><?php echo esc_textarea($features); ?></textarea></td>
        </tr>
        <tr>
            <th><label for="byt3lab_service_deliverables"><?php esc_html_e('Livrables / Résultats (1 par ligne)', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><textarea name="byt3lab_service_deliverables" id="byt3lab_service_deliverables" rows="4" class="large-text"><?php echo esc_textarea($deliverables); ?></textarea></td>
        </tr>
    </table>
    <?php
}

/**
 * 8. Rendu Offres d'emploi Meta Box
 */
function byt3lab_render_job_meta_box($post) {
    wp_nonce_field('byt3lab_save_job_meta', 'byt3lab_job_nonce');
    $type     = get_post_meta($post->ID, '_byt3lab_job_type', true) ?: 'CDI';
    $location = get_post_meta($post->ID, '_byt3lab_job_location', true) ?: 'Douala / Yaoundé';
    $email    = get_post_meta($post->ID, '_byt3lab_job_email', true) ?: 'carrieres@byt3lab.com';
    ?>
    <table class="form-table">
        <tr>
            <th><label for="byt3lab_job_type"><?php esc_html_e('Type de contrat', 'byt3lab_wordpress_theme'); ?></label></th>
            <td>
                <select name="byt3lab_job_type" id="byt3lab_job_type">
                    <option value="CDI" <?php selected($type, 'CDI'); ?>>CDI</option>
                    <option value="CDD" <?php selected($type, 'CDD'); ?>>CDD</option>
                    <option value="Stage" <?php selected($type, 'Stage'); ?>>Stage</option>
                    <option value="Freelance" <?php selected($type, 'Freelance'); ?>>Freelance</option>
                </select>
            </td>
        </tr>
        <tr>
            <th><label for="byt3lab_job_location"><?php esc_html_e('Localisation', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="text" name="byt3lab_job_location" id="byt3lab_job_location" value="<?php echo esc_attr($location); ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="byt3lab_job_email"><?php esc_html_e('E-mail pour postuler', 'byt3lab_wordpress_theme'); ?></label></th>
            <td><input type="email" name="byt3lab_job_email" id="byt3lab_job_email" value="<?php echo esc_attr($email); ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Enregistrement sécurisé des Meta Boxes
 */
function byt3lab_save_meta_boxes($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // 1. Division
    if (isset($_POST['byt3lab_division_nonce']) && wp_verify_nonce($_POST['byt3lab_division_nonce'], 'byt3lab_save_division_meta')) {
        $keys = [
            '_byt3lab_status'                => 'sanitize_key',
            '_byt3lab_icon'                  => 'sanitize_key',
            '_byt3lab_division_vision'       => 'sanitize_textarea_field',
            '_byt3lab_division_expertise'    => 'sanitize_textarea_field',
            '_byt3lab_division_technologies' => 'sanitize_textarea_field',
            '_byt3lab_division_services'     => 'sanitize_textarea_field',
            '_byt3lab_division_industries'   => 'sanitize_textarea_field',
            '_byt3lab_division_maturity'     => 'sanitize_textarea_field',
            '_byt3lab_division_related'      => 'sanitize_text_field',
        ];
        foreach ($keys as $meta_key => $sanitizer) {
            $post_field = ltrim($meta_key, '_');
            if (isset($_POST[$post_field])) {
                update_post_meta($post_id, $meta_key, $sanitizer($_POST[$post_field]));
            }
        }
    }

    // 2. Solution / Offre
    if (isset($_POST['byt3lab_solution_nonce']) && wp_verify_nonce($_POST['byt3lab_solution_nonce'], 'byt3lab_save_solution_meta')) {
        $keys = [
            '_byt3lab_offer_type'          => 'sanitize_key',
            '_byt3lab_status'              => 'sanitize_key',
            '_byt3lab_offer_division'      => 'sanitize_key',
            '_byt3lab_solution_badge'      => 'sanitize_text_field',
            '_byt3lab_offer_tagline'       => 'sanitize_text_field',
            '_byt3lab_offer_accent'        => 'sanitize_hex_color',
            '_byt3lab_solution_features'   => 'sanitize_textarea_field',
            '_byt3lab_offer_problems'      => 'sanitize_textarea_field',
            '_byt3lab_offer_benefits'      => 'sanitize_textarea_field',
            '_byt3lab_solution_url'        => 'esc_url_raw',
            '_byt3lab_solution_button_text'=> 'sanitize_text_field',
        ];
        foreach ($keys as $meta_key => $sanitizer) {
            $post_field = ltrim($meta_key, '_');
            if (isset($_POST[$post_field])) {
                update_post_meta($post_id, $meta_key, $sanitizer($_POST[$post_field]));
            }
        }
    }

    // 3. Projet
    if (isset($_POST['byt3lab_project_nonce']) && wp_verify_nonce($_POST['byt3lab_project_nonce'], 'byt3lab_save_project_meta')) {
        if (isset($_POST['byt3lab_project_category'])) {
            update_post_meta($post_id, '_byt3lab_project_category', sanitize_text_field($_POST['byt3lab_project_category']));
        }
        if (isset($_POST['byt3lab_project_stack'])) {
            update_post_meta($post_id, '_byt3lab_project_stack', sanitize_text_field($_POST['byt3lab_project_stack']));
        }
        if (isset($_POST['byt3lab_project_client'])) {
            update_post_meta($post_id, '_byt3lab_project_client', sanitize_text_field($_POST['byt3lab_project_client']));
        }
        if (isset($_POST['byt3lab_project_year'])) {
            update_post_meta($post_id, '_byt3lab_project_year', sanitize_text_field($_POST['byt3lab_project_year']));
        }
        if (isset($_POST['byt3lab_project_url'])) {
            update_post_meta($post_id, '_byt3lab_project_url', esc_url_raw($_POST['byt3lab_project_url']));
        }
    }

    // 4. Partenaire
    if (isset($_POST['byt3lab_partner_nonce']) && wp_verify_nonce($_POST['byt3lab_partner_nonce'], 'byt3lab_save_partner_meta')) {
        if (isset($_POST['byt3lab_partner_type'])) {
            update_post_meta($post_id, '_byt3lab_partner_type', sanitize_key($_POST['byt3lab_partner_type']));
        }
        if (isset($_POST['byt3lab_partner_url'])) {
            update_post_meta($post_id, '_byt3lab_partner_url', esc_url_raw($_POST['byt3lab_partner_url']));
        }
    }

    // 5. Réalisation NGRAFIX
    if (isset($_POST['ngrafix_work_nonce']) && wp_verify_nonce($_POST['ngrafix_work_nonce'], 'ngrafix_save_work_meta')) {
        if (isset($_POST['ngrafix_client'])) {
            update_post_meta($post_id, '_ngrafix_client', sanitize_text_field($_POST['ngrafix_client']));
        }
        if (isset($_POST['ngrafix_year'])) {
            update_post_meta($post_id, '_ngrafix_year', sanitize_text_field($_POST['ngrafix_year']));
        }
        if (isset($_POST['ngrafix_url'])) {
            update_post_meta($post_id, '_ngrafix_url', esc_url_raw($_POST['ngrafix_url']));
        }
    }

    // 6. Équipe
    if (isset($_POST['byt3lab_team_nonce']) && wp_verify_nonce($_POST['byt3lab_team_nonce'], 'byt3lab_save_team_meta')) {
        if (isset($_POST['byt3lab_team_role'])) {
            update_post_meta($post_id, '_byt3lab_team_role', sanitize_text_field($_POST['byt3lab_team_role']));
        }
        if (isset($_POST['byt3lab_team_linkedin'])) {
            update_post_meta($post_id, '_byt3lab_team_linkedin', esc_url_raw($_POST['byt3lab_team_linkedin']));
        }
        if (isset($_POST['byt3lab_team_email'])) {
            update_post_meta($post_id, '_byt3lab_team_email', sanitize_email($_POST['byt3lab_team_email']));
        }
    }

    // 7. Service
    if (isset($_POST['byt3lab_service_nonce']) && wp_verify_nonce($_POST['byt3lab_service_nonce'], 'byt3lab_save_service_meta')) {
        if (isset($_POST['byt3lab_service_badge'])) {
            update_post_meta($post_id, '_byt3lab_service_badge', sanitize_text_field($_POST['byt3lab_service_badge']));
        }
        if (isset($_POST['byt3lab_service_features'])) {
            update_post_meta($post_id, '_byt3lab_service_features', sanitize_textarea_field($_POST['byt3lab_service_features']));
        }
        if (isset($_POST['byt3lab_service_deliverables'])) {
            update_post_meta($post_id, '_byt3lab_service_deliverables', sanitize_textarea_field($_POST['byt3lab_service_deliverables']));
        }
    }

    // 8. Emploi
    if (isset($_POST['byt3lab_job_nonce']) && wp_verify_nonce($_POST['byt3lab_job_nonce'], 'byt3lab_save_job_meta')) {
        if (isset($_POST['byt3lab_job_type'])) {
            update_post_meta($post_id, '_byt3lab_job_type', sanitize_text_field($_POST['byt3lab_job_type']));
        }
        if (isset($_POST['byt3lab_job_location'])) {
            update_post_meta($post_id, '_byt3lab_job_location', sanitize_text_field($_POST['byt3lab_job_location']));
        }
        if (isset($_POST['byt3lab_job_email'])) {
            update_post_meta($post_id, '_byt3lab_job_email', sanitize_email($_POST['byt3lab_job_email']));
        }
    }
}
