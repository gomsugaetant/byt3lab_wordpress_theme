<?php
/**
 * Component: realisations-body
 * Projets Réalisés & Déploiements BYT3LAB
 */
if (!defined('ABSPATH')) {
    exit;
}

$projects_query = new WP_Query([
    'post_type'      => 'byt3lab_project',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => ['menu_order' => 'ASC', 'date' => 'DESC'],
]);
?>

<div class="component-realisations-body">
    <!-- Hero Header -->
    <section class="b-section b-section--navy">
        <div class="b-container">
            <span class="b-badge b-badge--dark">PROJETS &amp; DÉPLOIEMENTS</span>
            <h1 class="b-section__title" style="margin-top: var(--space-xs);">
                L'ingénierie éprouvée sur le terrain.
            </h1>
            <p class="b-section__subtitle">
                Études de cas, intégrations de plateformes métiers et architectures cloud déployées au service des organisations et entreprises partenaires.
            </p>
        </div>
    </section>

    <!-- Projects Grid or Institutional Empty State -->
    <section class="b-section b-section--light">
        <div class="b-container">
            <?php if ($projects_query->have_posts()) : ?>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: var(--space-xl);">
                    <?php while ($projects_query->have_posts()) : $projects_query->the_post();
                        $category    = get_post_meta(get_the_ID(), '_byt3lab_project_category', true) ?: 'INGÉNIERIE';
                        $stack       = get_post_meta(get_the_ID(), '_byt3lab_project_stack', true);
                        $impact      = get_post_meta(get_the_ID(), '_byt3lab_project_impact', true);
                        $img_url     = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : '';
                        $stack_items = !empty($stack) ? array_map('trim', explode('/', $stack)) : [];
                    ?>
                        <article class="b-card" style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); overflow: hidden; display: flex; flex-direction: column;">
                            <?php if (!empty($img_url)) : ?>
                                <div style="height: 220px; overflow: hidden; background: var(--color-slate-lightest);">
                                    <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;" />
                                </div>
                            <?php endif; ?>

                            <div style="padding: var(--space-xl); flex-grow: 1; display: flex; flex-direction: column;">
                                <div style="display: flex; gap: var(--space-xs); flex-wrap: wrap; margin-bottom: var(--space-xs);">
                                    <span class="b-badge b-badge--dark"><?php echo esc_html($category); ?></span>
                                    <?php foreach ($stack_items as $tech) : if (!empty($tech)) : ?>
                                        <span class="b-badge b-badge--light"><?php echo esc_html($tech); ?></span>
                                    <?php endif; endforeach; ?>
                                </div>

                                <h3 style="font-size: var(--text-xl); color: var(--color-navy); margin: var(--space-xs) 0 var(--space-sm);">
                                    <a href="<?php the_permalink(); ?>" style="color: var(--color-navy); text-decoration: none;">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <div style="font-size: var(--text-sm); line-height: 1.6; color: var(--color-slate-medium); margin-bottom: var(--space-md); flex-grow: 1;">
                                    <?php the_excerpt(); ?>
                                </div>

                                <?php if (!empty($impact)) : ?>
                                    <div style="padding: var(--space-sm); background: var(--color-slate-lightest); border-left: 3px solid var(--color-cyan); border-radius: var(--radius-sm); font-size: var(--text-xs); color: var(--color-slate-dark); margin-bottom: var(--space-md);">
                                        <strong>Impact :</strong> <?php echo esc_html($impact); ?>
                                    </div>
                                <?php endif; ?>

                                <a href="<?php the_permalink(); ?>" class="b-btn b-btn--outline" style="align-self: flex-start;">
                                    Détails du projet &rarr;
                                </a>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <div class="b-empty-state" style="max-width: 820px; margin: 0 auto; background: #ffffff; padding: clamp(2.5rem, 5vw, 4rem); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <div class="b-empty-state__icon">📁</div>
                    <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);">GOUVERNANCE &amp; TRANSPARENCE</span>
                    <h2 class="b-empty-state__title" style="color: var(--color-navy); font-size: clamp(1.75rem, 3vw, 2.25rem); margin: var(--space-xs) 0 var(--space-sm);">
                        Études de cas &amp; Déploiements en cours de documentation
                    </h2>
                    <p class="b-empty-state__text" style="color: var(--color-slate-medium); font-size: var(--text-md); line-height: 1.7; margin-bottom: var(--space-xl);">
                        Dans le cadre de la nouvelle gouvernance du groupe BYT3LAB et du repositionnement autour de nos 5 divisions technologiques, nos retours d'expérience et synthèses d'ingénierie font l'objet d'un processus de validation technique et de conformité avant publication publique.
                        <br><br>
                        Pour toute demande de références qualifiées ou d'échanges d'architecture approfondis dans le cadre d'un appel d'offres ou d'un projet d'entreprise, nos directions de divisions sont à votre disposition.
                    </p>

                    <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--primary">
                            Solliciter un échange technique &rarr;
                        </a>
                        <a href="<?php echo esc_url(home_url('/technologies/')); ?>" class="b-btn b-btn--outline">
                            Explorer les 5 divisions technologiques
                        </a>
                        <a href="<?php echo esc_url(home_url('/partenaires/')); ?>" class="b-btn b-btn--outline">
                            Espace Partenaires
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Engagements CTA -->
    <section class="b-section b-section--dark">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-xl); align-items: center;">
                <div>
                    <span class="b-badge b-badge--dark">APPROCHE MÉTHODOLOGIQUE</span>
                    <h2 style="color: var(--color-white); font-size: var(--text-2xl); margin: var(--space-xs) 0 var(--space-sm);">
                        Chaque déploiement suit des normes d'ingénierie strictes
                    </h2>
                    <p style="color: var(--color-slate-light); font-size: var(--text-sm); line-height: 1.7; margin: 0;">
                        De la phase de cadrage des besoins à l'exploitation en production, BYT3LAB applique des principes rigoureux : modularité, sécurité by-design, documentation exhaustive et transfert de compétences aux équipes locales.
                    </p>
                </div>
                <div style="display: flex; flex-direction: column; gap: var(--space-sm);">
                    <div style="display: flex; align-items: center; gap: var(--space-sm); color: var(--color-white); font-size: var(--text-sm);">
                        <span style="color: var(--color-cyan); font-weight: bold;">01</span>
                        <span>Cadrage fonctionnel, architectural &amp; cartographie des flux</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: var(--space-sm); color: var(--color-white); font-size: var(--text-sm);">
                        <span style="color: var(--color-cyan); font-weight: bold;">02</span>
                        <span>Développement itératif, CI/CD et revues de conformité</span>
                    </div>
                    <div style="display: flex; align-items: center; gap: var(--space-sm); color: var(--color-white); font-size: var(--text-sm);">
                        <span style="color: var(--color-cyan); font-weight: bold;">03</span>
                        <span>Déploiement managé, monitoring continu &amp; support réactif</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
