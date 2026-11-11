<?php
/**
 * Single Template: Service & Ingénierie BYT3LAB
 * Style : Design System Institutionnel BYT3LAB
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$current_id   = get_the_ID();
$icon         = get_post_meta($current_id, '_byt3lab_service_icon', true) ?: '🛠️';
$branch       = get_post_meta($current_id, '_byt3lab_service_branch', true);
$short_desc   = get_post_meta($current_id, '_byt3lab_service_short_desc', true);
$deliverables_raw = get_post_meta($current_id, '_byt3lab_service_deliverables', true);
$cta_text     = get_post_meta($current_id, '_byt3lab_service_cta_text', true) ?: 'Demander un devis & cadrage';
$cta_url      = get_post_meta($current_id, '_byt3lab_service_cta_url', true) ?: home_url('/contact/');
$img_url      = has_post_thumbnail($current_id) ? get_the_post_thumbnail_url($current_id, 'large') : get_post_meta($current_id, '_byt3lab_service_image', true);

if (empty($branch)) {
    $terms = wp_get_post_terms($current_id, 'byt3lab_service_branch');
    if (!empty($terms) && !is_wp_error($terms)) {
        $branch = $terms[0]->name;
    } else {
        $branch = 'Byt3lab Tech';
    }
}

$deliverables_list = [];
if (!empty($deliverables_raw)) {
    $lines = explode("\n", str_replace("\r", "", $deliverables_raw));
    foreach ($lines as $line) {
        $line = trim($line);
        if (!empty($line)) {
            $deliverables_list[] = $line;
        }
    }
}

$other_services = new WP_Query([
    'post_type'      => 'byt3lab_service',
    'post__not_in'   => [$current_id],
    'posts_per_page' => 3,
    'orderby'        => 'rand',
]);
?>

<main id="primary" class="site-main">
    <?php get_template_part('components/header/header'); ?>

    <!-- Hero Header -->
    <section class="b-section b-section--navy" style="padding: calc(var(--space-2xl) * 1.2) 0 var(--space-xl);">
        <div class="b-container">
            <div style="margin-bottom: var(--space-md);">
                <a href="<?php echo esc_url(home_url('/services/')); ?>" style="color: var(--color-cyan); font-family: var(--font-mono); font-size: var(--text-xs); text-decoration: none; display: inline-flex; align-items: center; gap: var(--space-xs);">
                    &larr; Retour aux Services Commerciaux
                </a>
            </div>

            <div style="display: flex; gap: var(--space-xs); align-items: center; margin-bottom: var(--space-xs);">
                <span class="b-badge b-badge--dark"><?php echo esc_html($branch); ?></span>
            </div>

            <h1 style="color: var(--color-white); font-size: clamp(2rem, 4vw, 3rem); margin: var(--space-xs) 0 var(--space-sm); letter-spacing: -0.02em;">
                <?php the_title(); ?>
            </h1>

            <?php if (!empty($short_desc)) : ?>
                <p style="color: var(--color-slate-light); font-size: var(--text-lg); max-width: 820px; line-height: 1.6; margin: 0;">
                    <?php echo esc_html($short_desc); ?>
                </p>
            <?php endif; ?>
        </div>
    </section>

    <!-- Main Content Layout -->
    <section class="b-section b-section--light" style="padding: var(--space-2xl) 0;">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: var(--space-2xl);">
                
                <!-- Left Column -->
                <div>
                    <?php if (!empty($img_url)) : ?>
                        <div style="margin-bottom: var(--space-xl); border-radius: var(--radius-lg); overflow: hidden; max-height: 400px; background: var(--color-navy);">
                            <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;" />
                        </div>
                    <?php endif; ?>

                    <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg); margin-bottom: var(--space-xl);">
                        <h2 style="font-size: var(--text-xl); color: var(--color-navy); margin-top: 0; margin-bottom: var(--space-md);">
                            Présentation &amp; Périmètre de l'Offre
                        </h2>
                        <div style="font-size: var(--text-md); line-height: 1.8; color: var(--color-slate-dark);">
                            <?php 
                            $content = get_the_content();
                            if (!empty(trim($content))) {
                                the_content();
                            } else {
                                echo '<p>' . esc_html($short_desc ?: 'Prestation d\'ingénierie et de services informatiques managés délivrée par les équipes spécialisées du groupe BYT3LAB.') . '</p>';
                            }
                            ?>
                        </div>
                    </div>

                    <?php if (!empty($deliverables_list)) : ?>
                        <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg); margin-bottom: var(--space-xl);">
                            <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin-top: 0; margin-bottom: var(--space-md); display: flex; align-items: center; gap: var(--space-xs);">
                                <span>📦</span> Livrables &amp; Engagements Opérationnels
                            </h3>
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: var(--space-sm);">
                                <?php foreach ($deliverables_list as $item) : ?>
                                    <div style="display: flex; align-items: flex-start; gap: var(--space-xs); font-size: var(--text-sm); color: var(--color-slate-dark);">
                                        <span style="color: var(--color-green); font-weight: bold;">✓</span>
                                        <span><?php echo esc_html($item); ?></span>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Methodology -->
                    <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                        <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin-top: 0; margin-bottom: var(--space-md);">
                            Méthodologie &amp; Cycle d'Exécution BYT3LAB
                        </h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: var(--space-md);">
                            <div style="padding: var(--space-md); background: var(--color-slate-lightest); border-radius: var(--radius-md);">
                                <strong style="color: var(--color-navy); display: block; margin-bottom: 4px; font-family: var(--font-mono); font-size: var(--text-xs);">01 // AUDIT &amp; CADRAGE</strong>
                                <small style="color: var(--color-slate-medium);">Analyse d'impact, architecture cible et spécifications techniques détaillées.</small>
                            </div>
                            <div style="padding: var(--space-md); background: var(--color-slate-lightest); border-radius: var(--radius-md);">
                                <strong style="color: var(--color-navy); display: block; margin-bottom: 4px; font-family: var(--font-mono); font-size: var(--text-xs);">02 // DÉPLOIEMENT &amp; CI/CD</strong>
                                <small style="color: var(--color-slate-medium);">Intégration continue, jalons itératifs et revues de sécurité régulières.</small>
                            </div>
                            <div style="padding: var(--space-md); background: var(--color-slate-lightest); border-radius: var(--radius-md);">
                                <strong style="color: var(--color-navy); display: block; margin-bottom: 4px; font-family: var(--font-mono); font-size: var(--text-xs);">03 // EXPLOITATION &amp; SLA</strong>
                                <small style="color: var(--color-slate-medium);">Monitoring actif, astreinte technique, sauvegardes et contrat de service.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Sidebar CTA -->
                <div>
                    <div style="position: sticky; top: 100px;">
                        <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 2px solid var(--color-blue); border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                            <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-sm);">ENGAGEMENT DE SERVICE</span>
                            <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: 0 0 var(--space-xs);">
                                Initier une consultation technique
                            </h3>
                            <p style="font-size: var(--text-xs); color: var(--color-slate-medium); line-height: 1.6; margin-bottom: var(--space-md);">
                                Nos ingénieurs vous accompagnent pour formaliser votre cahier des charges et évaluer le dimensionnement de votre projet.
                            </p>

                            <div style="display: flex; flex-direction: column; gap: var(--space-sm);">
                                <a href="<?php echo esc_url($cta_url); ?>" class="b-btn b-btn--primary" style="justify-content: center; width: 100%;">
                                    <?php echo esc_html($cta_text); ?> &rarr;
                                </a>
                                <a href="https://wa.me/237696879475?text=<?php echo rawurlencode('Bonjour l\'équipe BYT3LAB, je souhaite des informations sur le service : ' . get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--outline" style="justify-content: center; width: 100%; border-color: var(--color-green); color: var(--color-green);">
                                    Échanger via WhatsApp
                                </a>
                            </div>

                            <div style="border-top: 1px solid var(--color-border); padding-top: var(--space-md); margin-top: var(--space-lg); font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-slate-medium); display: flex; flex-direction: column; gap: var(--space-xs);">
                                <div>Pôle : <strong style="color: var(--color-navy);"><?php echo esc_html($branch); ?></strong></div>
                                <div>Réponse : <strong style="color: var(--color-navy);">Sous 48h ouvrées</strong></div>
                                <div>Zone : <strong style="color: var(--color-navy);">Afrique &amp; International</strong></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Other Services -->
            <?php if ($other_services->have_posts()) : ?>
                <div style="margin-top: var(--space-2xl); padding-top: var(--space-xl); border-top: 1px solid var(--color-border);">
                    <h3 style="font-size: var(--text-xl); color: var(--color-navy); margin-bottom: var(--space-lg);">
                        Autres pôles de services BYT3LAB
                    </h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: var(--space-md);">
                        <?php while ($other_services->have_posts()) : $other_services->the_post(); 
                            $o_branch = get_post_meta(get_the_ID(), '_byt3lab_service_branch', true) ?: 'Byt3lab Tech';
                        ?>
                            <div class="b-card" style="background: #ffffff; padding: var(--space-md); border: 1px solid var(--color-border); border-radius: var(--radius-md);">
                                <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);"><?php echo esc_html($o_branch); ?></span>
                                <h4 style="font-size: var(--text-md); margin: var(--space-xs) 0;">
                                    <a href="<?php the_permalink(); ?>" style="color: var(--color-navy); text-decoration: none;">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <a href="<?php the_permalink(); ?>" style="font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-blue); text-decoration: none; font-weight: bold;">
                                    Découvrir le service &rarr;
                                </a>
                            </div>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <?php get_template_part('components/footer/footer'); ?>
</main>

<?php get_footer(); ?>
