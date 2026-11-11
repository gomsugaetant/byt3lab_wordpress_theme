<?php
/**
 * BYT3LAB Template - Single Division Technologique
 * Présentation complète des 10 volets d'une division technologique.
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');

if (have_posts()) : while (have_posts()) : the_post();
    $div_id       = get_the_ID();
    $status       = get_post_meta($div_id, '_byt3lab_status', true) ?: 'active';
    $icon_id      = get_post_meta($div_id, '_byt3lab_icon', true) ?: 'code';
    $vision       = get_post_meta($div_id, '_byt3lab_division_vision', true);
    $expertise    = byt3lab_meta_lines($div_id, '_byt3lab_division_expertise');
    $technologies = byt3lab_meta_lines($div_id, '_byt3lab_division_technologies');
    $services     = byt3lab_meta_lines($div_id, '_byt3lab_division_services');
    $industries   = byt3lab_meta_lines($div_id, '_byt3lab_division_industries');
    $maturity     = get_post_meta($div_id, '_byt3lab_division_maturity', true);
    $related      = array_filter(array_map('trim', explode(',', (string) get_post_meta($div_id, '_byt3lab_division_related', true))));
?>

<main id="primary" class="site-main b-division-page">

    <!-- 1. Hero Spécifique de la Division -->
    <section class="b-hero b-hero--division">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 840px;">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                    <a href="<?php echo esc_url(home_url('/technologies/')); ?>" class="b-eyebrow b-eyebrow--white" style="margin-bottom: 0;">
                        &larr; Technologies &amp; Divisions
                    </a>
                    <?php echo byt3lab_status_badge($status); ?>
                </div>

                <div style="display: flex; align-items: center; gap: 20px; margin-bottom: 20px;">
                    <div style="width: 56px; height: 56px; border-radius: var(--radius-md); background: rgba(255,255,255,0.1); color: var(--c-cyan-400); display: flex; align-items: center; justify-content: center; flex-shrink: 0; border: 1px solid rgba(255,255,255,0.2);">
                        <?php echo byt3lab_icon($icon_id, 32); ?>
                    </div>
                    <h1 class="b-hero__title" style="margin-bottom: 0; font-size: clamp(2.2rem, 4vw, 3.5rem);">
                        <?php the_title(); ?>
                    </h1>
                </div>

                <p class="b-hero__subtitle" style="margin-bottom: 28px;">
                    <?php echo esc_html(get_the_excerpt()); ?>
                </p>

                <div class="b-hero__actions">
                    <a href="#expertise" class="b-btn b-btn--primary">
                        <span>Domaines d'expertise</span>
                        <?php echo byt3lab_icon('arrow-right', 16); ?>
                    </a>
                    <a href="#contact-division" class="b-btn b-btn--outline-dark">
                        <span>Échanger avec nos ingénieurs</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 2 & 3. Présentation & Vision -->
    <section class="b-section" id="presentation">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: 1fr; gap: 40px; align-items: start;">
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 40px;">
                    
                    <!-- Présentation -->
                    <div class="b-card" style="padding: 36px;">
                        <span class="b-eyebrow">01 · Présentation</span>
                        <h2 class="b-title" style="font-size: 1.6rem;">Le rôle de la division au sein du groupe</h2>
                        <div style="color: var(--c-gray-700); font-size: 15px; line-height: 1.7;">
                            <?php the_content(); ?>
                        </div>
                    </div>

                    <!-- Vision -->
                    <div class="b-card" style="padding: 36px; background: var(--c-navy-950); color: var(--c-white); border-color: transparent;">
                        <span class="b-eyebrow b-eyebrow--white">02 · Vision &amp; Ambition</span>
                        <h2 class="b-title" style="color: #fff; font-size: 1.6rem;">Notre perspective technologique</h2>
                        <p style="color: var(--c-gray-300); font-size: 15.5px; line-height: 1.7; margin-bottom: 24px;">
                            <?php echo esc_html($vision); ?>
                        </p>
                        <div style="margin-top: auto; padding-top: 16px; border-top: 1px solid rgba(255,255,255,0.1); font-family: var(--font-heading); font-size: 11px; letter-spacing: 0.1em; text-transform: uppercase; color: var(--c-cyan-400);">
                            ENGINEERING THE TECHNOLOGIES OF TOMORROW.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- 4 & 5. Domaines d'expertise & Technologies concernées -->
    <section class="b-section b-section--alt" id="expertise">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">03 &amp; 04 · Savoir-faire technique</span>
                <h2 class="b-title">Expertise technique &amp; Technologies</h2>
                <p class="b-lead">Les disciplines maîtrisées et les socles technologiques déployés par la division.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px;">
                
                <!-- Domaines d'expertise -->
                <div class="b-card" style="padding: 36px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('target', 20); ?>
                        </div>
                        <h3 style="font-size: 1.25rem; margin: 0;">Domaines d'expertise</h3>
                    </div>
                    <?php if (!empty($expertise)) : ?>
                        <ul class="b-checklist">
                            <?php foreach ($expertise as $item) : ?>
                                <li>
                                    <?php echo byt3lab_icon('check', 16); ?>
                                    <span><?php echo esc_html($item); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <!-- Technologies concernées -->
                <div class="b-card" style="padding: 36px;">
                    <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('cpu', 20); ?>
                        </div>
                        <h3 style="font-size: 1.25rem; margin: 0;">Technologies &amp; Architectures</h3>
                    </div>
                    <?php if (!empty($technologies)) : ?>
                        <ul class="b-checklist">
                            <?php foreach ($technologies as $tech) : ?>
                                <li>
                                    <?php echo byt3lab_icon('workflow', 16); ?>
                                    <span><?php echo esc_html($tech); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <!-- 6 & 7. Services/Solutions & Industries concernées -->
    <section class="b-section" id="services-industries">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 32px;">
                
                <!-- Services & Offres -->
                <div class="b-card" style="padding: 36px;">
                    <span class="b-eyebrow">05 · Services &amp; Solutions</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 20px;">Prestations de la division</h3>
                    <?php if (!empty($services)) : ?>
                        <ul class="b-checklist">
                            <?php foreach ($services as $srv) : ?>
                                <li>
                                    <?php echo byt3lab_icon('arrow-right', 16); ?>
                                    <span><?php echo esc_html($srv); ?></span>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>

                <!-- Industries cibles -->
                <div class="b-card" style="padding: 36px;">
                    <span class="b-eyebrow">06 · Secteurs d'application</span>
                    <h3 style="font-size: 1.35rem; margin-bottom: 20px;">Industries concernées</h3>
                    <?php if (!empty($industries)) : ?>
                        <div style="display: flex; flex-wrap: wrap; gap: 8px;">
                            <?php foreach ($industries as $ind) : ?>
                                <span class="b-tag" style="padding: 8px 14px; font-size: 13px;">
                                    <?php echo esc_html($ind); ?>
                                </span>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. Produits & Offres associés -->
    <?php if (!empty($related)) : 
        $rel_query = new WP_Query([
            'post_type'      => 'byt3lab_solution',
            'post_name__in'  => $related,
            'posts_per_page' => -1,
        ]);
        if ($rel_query->have_posts()) :
    ?>
    <section class="b-section b-section--alt" id="produits-lies">
        <div class="b-container">
            <div class="b-section-head">
                <span class="b-eyebrow">07 · Produits &amp; Déploiements</span>
                <h2 class="b-title">Solutions portées par la division</h2>
                <p class="b-lead">Produits logiciels et activités d'infrastructure concrètement développés ou exploités.</p>
            </div>

            <div class="b-grid b-grid--3">
                <?php while ($rel_query->have_posts()) : $rel_query->the_post(); 
                    $rel_id = get_the_ID();
                    $rel_badge = get_post_meta($rel_id, '_byt3lab_solution_badge', true);
                    $rel_accent = get_post_meta($rel_id, '_byt3lab_offer_accent', true) ?: '#1D7FD8';
                    $rel_status = get_post_meta($rel_id, '_byt3lab_status', true) ?: 'active';
                ?>
                    <article class="b-product-card" style="--card-accent: <?php echo esc_attr($rel_accent); ?>;">
                        <div class="b-product-card__top">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 8px;">
                                <span class="b-product-card__badge" style="margin-bottom: 0;"><?php echo esc_html($rel_badge); ?></span>
                                <?php echo byt3lab_status_badge($rel_status); ?>
                            </div>
                            <h3 class="b-product-card__title"><?php the_title(); ?></h3>
                        </div>
                        <div class="b-product-card__body">
                            <p style="font-size: 14px; color: var(--c-gray-600); margin-bottom: 20px;">
                                <?php echo esc_html(get_the_excerpt()); ?>
                            </p>
                            <div class="b-product-card__actions">
                                <a href="<?php the_permalink(); ?>" class="b-btn b-btn--sm b-btn--primary">
                                    <span>Découvrir la solution &rarr;</span>
                                </a>
                            </div>
                        </div>
                    </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        </div>
    </section>
    <?php endif; endif; ?>

    <!-- 9. Statut réel & Cadre de transparence -->
    <section class="b-section" id="maturite">
        <div class="b-container b-container--narrow">
            <div class="b-card" style="padding: 40px; border-left: 5px solid var(--c-blue-500); background: var(--c-gray-50);">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 16px;">
                    <span class="b-eyebrow" style="margin-bottom: 0;">08 · Transparence opérationnelle</span>
                    <?php echo byt3lab_status_badge($status); ?>
                </div>
                <h3 style="font-size: 1.4rem; margin-bottom: 12px;">Où en sommes-nous aujourd'hui ?</h3>
                <p style="font-size: 15px; color: var(--c-gray-700); line-height: 1.7; margin: 0;">
                    <?php echo esc_html($maturity ?: 'Cette division est pilotée selon la feuille de route stratégique du groupe BYT3LAB.'); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- 10. CTA de contact / collaboration -->
    <section class="b-section b-section--tight" id="contact-division">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Collaborer avec la division <?php the_title(); ?></h2>
                <p>
                    Vous avez un projet d'intégration, un besoin de logiciel ou une opportunité de partenariat technologique ?
                </p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <?php echo byt3lab_icon('mail', 18); ?>
                        <span>Échanger avec l'équipe</span>
                    </a>
                    <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <?php echo byt3lab_icon('handshake', 18); ?>
                        <span>Devenir partenaire de la division</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
endwhile; endif;

get_template_part('components/footer/footer');
get_footer();

