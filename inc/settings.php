<?php
/**
 * BYT3LAB Theme - Réglages du site
 * Interface d'administration pour personnaliser les textes, sections, coordonnées et options d'affichage.
 */

if (!defined('ABSPATH')) {
    exit;
}

add_action('admin_menu', 'byt3lab_register_settings_menu', 20);
add_action('admin_init', 'byt3lab_register_settings');

function byt3lab_register_settings_menu() {
    add_submenu_page(
        'byt3lab-content-hub',
        __('Réglages du Site', 'byt3lab_wordpress_theme'),
        __('Réglages du Site', 'byt3lab_wordpress_theme'),
        'manage_options',
        'byt3lab-site-settings',
        'byt3lab_render_settings_page'
    );
}

function byt3lab_register_settings() {
    register_setting('byt3lab_settings_group', 'byt3lab_settings', [
        'type'              => 'array',
        'sanitize_callback' => 'byt3lab_sanitize_settings',
        'default'           => [],
    ]);
}

function byt3lab_sanitize_settings($input) {
    if (!is_array($input)) {
        return [];
    }
    $sanitized = [];
    $schema = byt3lab_settings_schema();

    foreach ($schema as $group) {
        foreach ($group['fields'] as $key => $field) {
            $val = $input[$key] ?? '';
            $type = $field['type'] ?? 'text';

            if ($type === 'checkbox') {
                $sanitized[$key] = !empty($val) ? '1' : '0';
            } elseif ($type === 'url') {
                $sanitized[$key] = esc_url_raw(trim($val));
            } elseif ($type === 'textarea') {
                $sanitized[$key] = sanitize_textarea_field(trim($val));
            } else {
                $sanitized[$key] = sanitize_text_field(trim($val));
            }
        }
    }
    return $sanitized;
}

function byt3lab_render_settings_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    $schema = byt3lab_settings_schema();
    $active_tab = isset($_GET['tab']) ? sanitize_key($_GET['tab']) : 'home';
    if (!isset($schema[$active_tab])) {
        $active_tab = array_key_first($schema);
    }
    ?>
    <div class="wrap">
        <h1><?php esc_html_e('BYT3LAB — Réglages Institutionnels & Textes du Site', 'byt3lab_wordpress_theme'); ?></h1>
        <p class="description">
            <?php esc_html_e('Modifiez ici les textes clés, sections de la page d\'accueil, coordonnées et liens sans modifier le code source.', 'byt3lab_wordpress_theme'); ?>
        </p>

        <?php settings_errors(); ?>

        <nav class="nav-tab-wrapper" style="margin-bottom: 20px;">
            <?php foreach ($schema as $tab_key => $group) : ?>
                <a href="<?php echo esc_url(admin_url('admin.php?page=byt3lab-site-settings&tab=' . $tab_key)); ?>" 
                   class="nav-tab <?php echo $active_tab === $tab_key ? 'nav-tab-active' : ''; ?>">
                    <?php echo esc_html($group['title']); ?>
                </a>
            <?php endforeach; ?>
        </nav>

        <form method="post" action="options.php">
            <?php
            settings_fields('byt3lab_settings_group');
            $current_settings = get_option('byt3lab_settings', []);
            if (!is_array($current_settings)) {
                $current_settings = [];
            }
            ?>

            <!-- Hidden fields for other tabs so saving one tab preserves others -->
            <?php foreach ($schema as $tab_key => $group) : ?>
                <?php if ($tab_key !== $active_tab) : ?>
                    <?php foreach ($group['fields'] as $f_key => $field) : ?>
                        <?php 
                        $val = $current_settings[$f_key] ?? ($field['default'] ?? ''); 
                        ?>
                        <input type="hidden" name="byt3lab_settings[<?php echo esc_attr($f_key); ?>]" value="<?php echo esc_attr($val); ?>" />
                    <?php endforeach; ?>
                <?php endif; ?>
            <?php endforeach; ?>

            <!-- Active tab fields -->
            <table class="form-table" role="presentation">
                <tbody>
                <?php foreach ($schema[$active_tab]['fields'] as $f_key => $field) : 
                    $val = $current_settings[$f_key] ?? ($field['default'] ?? '');
                    $type = $field['type'] ?? 'text';
                    $label = $field['label'] ?? $f_key;
                ?>
                    <tr>
                        <th scope="row">
                            <label for="<?php echo esc_attr($f_key); ?>">
                                <?php echo esc_html($label); ?>
                            </label>
                        </th>
                        <td>
                            <?php if ($type === 'checkbox') : ?>
                                <label>
                                    <input type="checkbox" 
                                           id="<?php echo esc_attr($f_key); ?>" 
                                           name="byt3lab_settings[<?php echo esc_attr($f_key); ?>]" 
                                           value="1" 
                                           <?php checked($val, '1'); ?> />
                                    <?php esc_html_e('Activer cette option / afficher cette section', 'byt3lab_wordpress_theme'); ?>
                                </label>
                            <?php elseif ($type === 'textarea') : ?>
                                <textarea id="<?php echo esc_attr($f_key); ?>" 
                                          name="byt3lab_settings[<?php echo esc_attr($f_key); ?>]" 
                                          rows="4" 
                                          class="large-text code"><?php echo esc_textarea($val); ?></textarea>
                            <?php else : ?>
                                <input type="<?php echo esc_attr($type); ?>" 
                                       id="<?php echo esc_attr($f_key); ?>" 
                                       name="byt3lab_settings[<?php echo esc_attr($f_key); ?>]" 
                                       value="<?php echo esc_attr($val); ?>" 
                                       class="regular-text" style="width: 100%; max-width: 600px;" />
                            <?php endif; ?>
                            <?php if (!empty($field['default'])) : ?>
                                <p class="description" style="margin-top: 4px; font-size: 11px; opacity: 0.8;">
                                    <?php esc_html_e('Par défaut :', 'byt3lab_wordpress_theme'); ?> 
                                    <code><?php echo esc_html(wp_trim_words($field['default'], 15)); ?></code>
                                </p>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>

            <?php submit_button(__('Enregistrer les modifications', 'byt3lab_wordpress_theme')); ?>
        </form>
    </div>
    <?php
}
