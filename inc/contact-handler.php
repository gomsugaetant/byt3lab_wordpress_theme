<?php
/**
 * BYT3LAB Theme - Contact & Partner Request Handler
 * Traitement sécurisé des soumissions de formulaires (Contact & Partenariat).
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('wp_ajax_byt3lab_submit_contact', 'byt3lab_handle_contact_submission');
add_action('wp_ajax_nopriv_byt3lab_submit_contact', 'byt3lab_handle_contact_submission');

/**
 * Traitement principal de la soumission
 */
function byt3lab_process_contact_submission($data) {
    // 1. Protection Honeypot
    if (!empty($data['byt3lab_hp'])) {
        return [
            'success' => false,
            'message' => 'Soumission bloquée (détection automatisée).',
        ];
    }

    // 2. Vérification du nonce CSRF
    $nonce = $data['byt3lab_nonce'] ?? ($data['nonce'] ?? ($data['_wpnonce'] ?? ''));
    if (!wp_verify_nonce($nonce, 'byt3lab_contact_nonce')) {
        return [
            'success' => false,
            'message' => 'Session expirée ou requête invalide. Veuillez rafraîchir la page et réessayer.',
        ];
    }

    // 3. Time-trap anti-bot (minimum 2 secondes entre chargement et envoi)
    $timestamp = isset($data['byt3lab_ts']) ? intval($data['byt3lab_ts']) : 0;
    if ($timestamp > 0 && (time() - $timestamp) < 2) {
        return [
            'success' => false,
            'message' => 'Envoi trop rapide. Veuillez patienter quelques secondes.',
        ];
    }

    // 4. Limitation de débit par adresse IP (max 5 soumissions par 10 minutes)
    $ip = sanitize_text_field($_SERVER['REMOTE_ADDR'] ?? '');
    $ip_hash = md5($ip . 'byt3lab_salt_sec');
    $transient_key = 'byt3lab_rate_' . $ip_hash;
    $attempts = (int) get_transient($transient_key);
    if ($attempts >= 5) {
        return [
            'success' => false,
            'message' => 'Trop de requêtes récentes. Veuillez réessayer dans quelques minutes.',
        ];
    }
    set_transient($transient_key, $attempts + 1, 10 * MINUTE_IN_SECONDS);

    // 5. Extraction et nettoyage des champs
    $form_type = sanitize_key($data['form_type'] ?? 'contact');
    if (!in_array($form_type, ['contact', 'partner'])) {
        $form_type = 'contact';
    }

    $name    = sanitize_text_field($data['name'] ?? ($data['contact_name'] ?? ''));
    $org     = sanitize_text_field($data['org'] ?? ($data['contact_org'] ?? ''));
    $email   = sanitize_email($data['email'] ?? ($data['contact_email'] ?? ''));
    $phone   = sanitize_text_field($data['phone'] ?? ($data['contact_phone'] ?? ''));
    $subject = sanitize_text_field($data['subject'] ?? ($data['contact_subject'] ?? ($form_type === 'partner' ? 'Demande de partenariat' : 'Prise de contact')));
    $message = sanitize_textarea_field($data['message'] ?? ($data['contact_message'] ?? ''));

    // Champs spécifiques au partenariat
    $partner_type = sanitize_text_field($data['partner_type'] ?? '');
    $domain       = sanitize_text_field($data['domain'] ?? '');
    $website      = esc_url_raw($data['website'] ?? '');

    // 6. Validation des champs obligatoires
    if (empty($name) || empty($email) || empty($message)) {
        return [
            'success' => false,
            'message' => 'Veuillez renseigner votre nom, votre e-mail et le détail de votre message.',
        ];
    }

    if ($form_type === 'partner' && empty($org)) {
        return [
            'success' => false,
            'message' => 'Veuillez renseigner le nom de votre organisation ou entreprise pour une demande de partenariat.',
        ];
    }

    if (!is_email($email)) {
        return [
            'success' => false,
            'message' => 'Veuillez saisir une adresse e-mail valide (ex: contact@entreprise.cm).',
        ];
    }

    // 7. Titre du post dans le CPT byt3lab_message
    $tag = ($form_type === 'partner') ? '[PARTENARIAT]' : '[CONTACT]';
    $post_title = $tag . ' ' . $subject . ' — ' . $name . (!empty($org) ? ' (' . $org . ')' : '');

    // 8. Insertion en base
    $post_id = wp_insert_post([
        'post_title'   => $post_title,
        'post_content' => $message,
        'post_status'  => 'publish',
        'post_type'    => 'byt3lab_message',
    ]);

    if (!$post_id || is_wp_error($post_id)) {
        return [
            'success' => false,
            'message' => 'Une erreur est survenue lors de l\'enregistrement de votre message.',
        ];
    }

    // 9. Sauvegarde des métadonnées
    update_post_meta($post_id, '_byt3lab_msg_type', $form_type);
    update_post_meta($post_id, '_byt3lab_msg_name', $name);
    update_post_meta($post_id, '_byt3lab_msg_org', $org);
    update_post_meta($post_id, '_byt3lab_msg_email', $email);
    update_post_meta($post_id, '_byt3lab_msg_phone', $phone);
    update_post_meta($post_id, '_byt3lab_msg_subject', $subject);
    update_post_meta($post_id, '_byt3lab_msg_partner_type', $partner_type);
    update_post_meta($post_id, '_byt3lab_msg_domain', $domain);
    update_post_meta($post_id, '_byt3lab_msg_website', $website);
    update_post_meta($post_id, '_byt3lab_msg_status', 'new');
    update_post_meta($post_id, '_byt3lab_msg_date', current_time('mysql'));
    update_post_meta($post_id, '_byt3lab_msg_ip', $ip);

    // 10. Notification par e-mail
    $admin_email = ($form_type === 'partner') ? byt3lab_opt('contact.email_partners', get_option('admin_email')) : get_option('admin_email');
    if (!empty($admin_email)) {
        $site_name = get_bloginfo('name');
        $email_subj = '[' . $site_name . ' ' . ($form_type === 'partner' ? 'Partenariat' : 'Contact') . '] ' . $subject . ' - ' . $name;
        $admin_edit_url = admin_url('post.php?post=' . $post_id . '&action=edit');

        $email_body  = "Bonjour,\n\n";
        $email_body .= "Une nouvelle demande a été soumise sur le site " . $site_name . " :\n\n";
        $email_body .= "--------------------------------------------------\n";
        $email_body .= "• Type         : " . ($form_type === 'partner' ? 'Demande de partenariat' : 'Prise de contact institutionnel') . "\n";
        $email_body .= "• Nom & Prénom : " . $name . "\n";
        $email_body .= "• Organisation : " . (!empty($org) ? $org : 'Non renseigné') . "\n";
        $email_body .= "• Email        : " . $email . "\n";
        $email_body .= "• Téléphone    : " . (!empty($phone) ? $phone : 'Non renseigné') . "\n";
        if ($form_type === 'partner') {
            $email_body .= "• Type part.   : " . (!empty($partner_type) ? $partner_type : 'Général') . "\n";
            $email_body .= "• Domaine tech : " . (!empty($domain) ? $domain : 'Tous domaines') . "\n";
            $email_body .= "• Site Web     : " . (!empty($website) ? $website : 'Non renseigné') . "\n";
        }
        $email_body .= "• Date         : " . current_time('d/m/Y à H:i') . "\n";
        $email_body .= "--------------------------------------------------\n\n";
        $email_body .= "Message :\n" . $message . "\n\n";
        $email_body .= "--------------------------------------------------\n";
        $email_body .= "Consulter la fiche dans l'administration :\n" . $admin_edit_url . "\n";

        $host = wp_parse_url(home_url(), PHP_URL_HOST);
        $headers = [
            'From: ' . $site_name . ' <no-reply@' . $host . '>',
            'Reply-To: ' . $name . ' <' . $email . '>',
        ];

        @wp_mail($admin_email, $email_subj, $email_body, $headers);
    }

    // 11. Lien WhatsApp
    $wa_phone = byt3lab_opt('contact.whatsapp', '237696879475');
    $wa_text = "Bonjour BYT3LAB,\nJe viens de soumettre une demande sur votre site (" . ($form_type === 'partner' ? 'Partenariat' : 'Contact') . ") :\n• Objet : " . $subject . "\n• De : " . $name . (!empty($org) ? " (" . $org . ")" : "");
    $whatsapp_url = 'https://wa.me/' . preg_replace('/[^0-9]/', '', $wa_phone) . '?text=' . rawurlencode($wa_text);

    return [
        'success'      => true,
        'message'      => ($form_type === 'partner')
            ? 'Votre proposition de partenariat a été transmise à notre direction. Nous étudierons votre demande avec attention et vous recontacterons rapidement.'
            : 'Votre message a été transmis avec succès à l\'équipe BYT3LAB. Nous vous répondrons dans les plus brefs délais.',
        'post_id'      => $post_id,
        'whatsapp_url' => $whatsapp_url,
    ];
}

function byt3lab_handle_contact_submission() {
    $result = byt3lab_process_contact_submission($_POST);
    if (!empty($result['success'])) {
        wp_send_json_success($result);
    } else {
        wp_send_json_error($result);
    }
}

/**
 * Meta Box dans l'admin pour visualiser le message
 */
add_action('add_meta_boxes', 'byt3lab_register_message_meta_box');

function byt3lab_register_message_meta_box() {
    add_meta_box(
        'byt3lab_message_detail_box',
        __('Détails du Message / Demande', 'byt3lab_wordpress_theme'),
        'byt3lab_render_message_meta_box',
        'byt3lab_message',
        'normal',
        'high'
    );
}

function byt3lab_render_message_meta_box($post) {
    wp_nonce_field('byt3lab_save_message_meta', 'byt3lab_message_nonce');

    $form_type    = get_post_meta($post->ID, '_byt3lab_msg_type', true) ?: 'contact';
    $name         = get_post_meta($post->ID, '_byt3lab_msg_name', true);
    $org          = get_post_meta($post->ID, '_byt3lab_msg_org', true);
    $email        = get_post_meta($post->ID, '_byt3lab_msg_email', true);
    $phone        = get_post_meta($post->ID, '_byt3lab_msg_phone', true);
    $subject      = get_post_meta($post->ID, '_byt3lab_msg_subject', true);
    $partner_type = get_post_meta($post->ID, '_byt3lab_msg_partner_type', true);
    $domain       = get_post_meta($post->ID, '_byt3lab_msg_domain', true);
    $website      = get_post_meta($post->ID, '_byt3lab_msg_website', true);
    $status       = get_post_meta($post->ID, '_byt3lab_msg_status', true) ?: 'new';
    $date         = get_post_meta($post->ID, '_byt3lab_msg_date', true);
    $ip           = get_post_meta($post->ID, '_byt3lab_msg_ip', true);
    ?>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px; margin-bottom: 20px;">
        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 12px 16px;">
            <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 4px;"><?php esc_html_e('Type de demande', 'byt3lab_wordpress_theme'); ?></div>
            <div style="font-size: 14px; font-weight: 500;">
                <?php if ($form_type === 'partner') : ?>
                    <span style="background: #0284c7; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-weight: 600;">Partenariat</span>
                <?php else : ?>
                    <span style="background: #64748b; color: #fff; padding: 2px 8px; border-radius: 4px; font-size: 12px; font-weight: 600;">Contact Institutionnel</span>
                <?php endif; ?>
            </div>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 12px 16px;">
            <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 4px;"><?php esc_html_e('Date de réception', 'byt3lab_wordpress_theme'); ?></div>
            <div style="font-size: 14px; font-weight: 500;"><?php echo esc_html($date ? date_i18n('d/m/Y à H:i', strtotime($date)) : 'Non daté'); ?> (IP: <?php echo esc_html($ip ?: '-'); ?>)</div>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 12px 16px;">
            <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 4px;"><?php esc_html_e('Expéditeur & Organisation', 'byt3lab_wordpress_theme'); ?></div>
            <div style="font-size: 14px; font-weight: 500;"><strong><?php echo esc_html($name ?: '-'); ?></strong> <?php if ($org) echo '— ' . esc_html($org); ?></div>
        </div>

        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 12px 16px;">
            <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 4px;"><?php esc_html_e('Coordonnées', 'byt3lab_wordpress_theme'); ?></div>
            <div style="font-size: 14px; font-weight: 500;">
                <a href="mailto:<?php echo esc_attr($email); ?>"><?php echo esc_html($email); ?></a>
                <?php if ($phone) : ?>
                    · <a href="tel:<?php echo esc_attr($phone); ?>"><?php echo esc_html($phone); ?></a>
                <?php endif; ?>
            </div>
        </div>

        <?php if ($form_type === 'partner') : ?>
            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 12px 16px;">
                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 4px;"><?php esc_html_e('Type de partenariat & Domaine', 'byt3lab_wordpress_theme'); ?></div>
                <div style="font-size: 14px; font-weight: 500;"><?php echo esc_html($partner_type ?: 'Non spécifié'); ?> — <?php echo esc_html($domain ?: 'Général'); ?></div>
            </div>

            <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 12px 16px;">
                <div style="font-size: 11px; font-weight: 700; text-transform: uppercase; color: #64748b; margin-bottom: 4px;"><?php esc_html_e('Site Web du partenaire', 'byt3lab_wordpress_theme'); ?></div>
                <div style="font-size: 14px; font-weight: 500;">
                    <?php if ($website) : ?>
                        <a href="<?php echo esc_url($website); ?>" target="_blank" rel="noopener noreferrer"><?php echo esc_html($website); ?></a>
                    <?php else : ?>
                        —
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <div style="font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748b; margin-top: 15px; margin-bottom: 6px;"><?php esc_html_e('Message :', 'byt3lab_wordpress_theme'); ?></div>
    <div style="background: #fff; border: 1px solid #cbd5e1; border-radius: 6px; padding: 16px; line-height: 1.6;">
        <?php echo nl2br(esc_html($post->post_content)); ?>
    </div>

    <div style="margin-top: 20px; display: flex; align-items: center; gap: 15px; background: #e0f2fe; padding: 12px 16px; border-radius: 6px;">
        <label for="byt3lab_msg_status" style="font-weight: 600; color: #0369a1;"><?php esc_html_e('Statut du traitement :', 'byt3lab_wordpress_theme'); ?></label>
        <select name="byt3lab_msg_status" id="byt3lab_msg_status">
            <option value="new" <?php selected($status, 'new'); ?>><?php esc_html_e('Nouveau / Non lu', 'byt3lab_wordpress_theme'); ?></option>
            <option value="read" <?php selected($status, 'read'); ?>><?php esc_html_e('Lu / En cours', 'byt3lab_wordpress_theme'); ?></option>
            <option value="replied" <?php selected($status, 'replied'); ?>><?php esc_html_e('Répondu / Traité', 'byt3lab_wordpress_theme'); ?></option>
            <option value="archived" <?php selected($status, 'archived'); ?>><?php esc_html_e('Archivé', 'byt3lab_wordpress_theme'); ?></option>
        </select>
        <span class="description"><?php esc_html_e('Changez le statut et cliquez sur "Mettre à jour" à droite.', 'byt3lab_wordpress_theme'); ?></span>
    </div>
    <?php
}

add_action('save_post', 'byt3lab_save_message_status');

function byt3lab_save_message_status($post_id) {
    if (!isset($_POST['byt3lab_message_nonce']) || !wp_verify_nonce($_POST['byt3lab_message_nonce'], 'byt3lab_save_message_meta')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    if (isset($_POST['byt3lab_msg_status'])) {
        update_post_meta($post_id, '_byt3lab_msg_status', sanitize_key($_POST['byt3lab_msg_status']));
    }
}
