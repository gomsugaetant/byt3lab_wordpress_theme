<?php
/**
 * Template Name: Produits & Solutions Overview
 * Page d'ensemble présentant le catalogue des produits et solutions Byt3Lab.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');
?>

<main id="primary" class="site-main">

    <!-- Hero Produits -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 800px;">
                <div class="b-hero__signature">
                    Solutions Concrètes
                </div>
                <h1 class="b-hero__title">
                    Des Technologies Conçues pour Résoudre des Problèmes Réels
                </h1>
                <p class="b-hero__subtitle">
                    Byt3Lab conçoit et édite des produits logiciels modulaires pour les organisations, et opère une activité dédiée aux services d'infrastructure et d'hébergement managé.
                </p>
                <div class="b-hero__actions">
                    <a href="#catalogue" class="b-btn b-btn--lg b-btn--primary">
                        <span>Explorer le catalogue</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Demander une démo</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Catalogue des Solutions -->
    <section class="b-section" id="catalogue">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Catalogue Groupe</span>
                <h2 class="b-title">Produits Logiciels &amp; Services d'Infrastructure</h2>
                <p class="b-lead">Chaque solution répond à des besoins métiers ciblés avec une exigence de fiabilité absolue.</p>
            </div>

            <?php
            $solutions_query = new WP_Query([
                'post_type'      => 'byt3lab_solution',
                'posts_per_page' => -1,
                'orderby'        => 'menu_order',
                'order'          => 'ASC',
            ]);
            ?>

            <div class="b-grid b-grid--3">
                <?php if ($solutions_query->have_posts()) : while ($solutions_query->have_posts()) : $solutions_query->the_post(); 
                    $s_id = get_the_ID();
                    $badge = get_post_meta($s_id, '_byt3lab_solution_badge', true);
                    $tagline = get_post_meta($s_id, '_byt3lab_offer_tagline', true);
                    $accent = get_post_meta($s_id, '_byt3lab_offer_accent', true) ?: '#1D7FD8';
                    $status = get_post_meta($s_id, '_byt3lab_status', true) ?: 'active';
                    $features = byt3lab_meta_lines($s_id, '_byt3lab_solution_features');
                    $url = get_post_meta($s_id, '_byt3lab_solution_url', true);
                    $btn_text = get_post_meta($s_id, '_byt3lab_solution_button_text', true) ?: 'Découvrir';
                ?>
                    <article class="b-product-card" style="--card-accent: <?php echo esc_attr($accent); ?>;">
                        <div class="b-product-card__top">
                            <div style="display: flex; justify-content: space-between; align-items: center; gap: 8px; margin-bottom: 8px;">
                                <span class="b-product-card__badge" style="margin-bottom: 0;"><?php echo esc_html($badge); ?></span>
                                <?php echo byt3lab_status_badge($status); ?>
                            </div>
                            <h3 class="b-product-card__title"><?php the_title(); ?></h3>
                            <?php if ($tagline) : ?>
                                <p class="b-product-card__tagline"><?php echo esc_html($tagline); ?></p>
                            <?php endif; ?>
                        </div>

                        <div class="b-product-card__body">
                            <p style="font-size: 14px; color: var(--c-gray-600); line-height: 1.6; margin-bottom: 20px;">
                                <?php echo esc_html(get_the_excerpt()); ?>
                            </p>

                            <?php if (!empty($features)) : ?>
                                <ul class="b-checklist">
                                    <?php foreach (array_slice($features, 0, 4) as $feat) : ?>
                                        <li>
                                            <?php echo byt3lab_icon('check', 16); ?>
                                            <span><?php echo esc_html($feat); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>

                            <div class="b-product-card__actions">
                                <a href="<?php the_permalink(); ?>" class="b-btn b-btn--sm b-btn--secondary">
                                    <span>Fiche détaillée</span>
                                </a>
                                <?php if ($url) : ?>
                                    <a href="<?php echo esc_url($url); ?>" class="b-btn b-btn--sm b-btn--primary" target="_blank" rel="noopener noreferrer">
                                        <span><?php echo esc_html($btn_text); ?></span>
                                        <?php echo byt3lab_icon('arrow-up-right', 14); ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
        </div>
    </section>

    <!-- Pourquoi Byt3Lab -->
    <section class="b-section b-section--alt">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Les Avantages Byt3Lab</span>
                <h2 class="b-title">Pourquoi Choisir Nos Solutions ?</h2>
            </div>

            <div class="b-grid b-grid--3">
                <div class="b-card" style="padding: 32px;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 16px;"><?php echo byt3lab_icon('shield', 22); ?></div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 10px;">Souveraineté des données</h3>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">Vos données d'entreprise restent votre propriété exclusive. Vous choisissez le mode de déploiement (cloud souverain ou serveurs sur site).</p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 16px;"><?php echo byt3lab_icon('workflow', 22); ?></div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 10px;">Conception modulaire</h3>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">Inutile de payer pour des fonctionnalités inutilisées. Nos progiciels s'adaptent et s'étendent au fur et à mesure de votre croissance.</p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div class="b-card__icon-wrap" style="margin-bottom: 16px;"><?php echo byt3lab_icon('handshake', 22); ?></div>
                    <h3 style="font-size: 1.2rem; margin-bottom: 10px;">Support direct éditeur</h3>
                    <p style="font-size: 14px; color: var(--c-gray-600); margin: 0;">Un interlocuteur technique direct basé au Cameroun (Douala et Yaoundé), réactif et intervenant sans intermédiaire.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="b-section b-section--tight">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Vous avez un projet de déploiement logiciel ?</h2>
                <p>Nos équipes d'ingénierie étudient votre cahier des charges et vous proposent une démonstration personnalisée.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <span>Demander une démonstration</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();

