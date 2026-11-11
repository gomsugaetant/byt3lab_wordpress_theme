<?php
/**
 * Component: carriere-body
 * Recrutement & Talents BYT3LAB
 */
if (!defined('ABSPATH')) {
    exit;
}

$jobs_query = new WP_Query([
    'post_type'      => 'byt3lab_job',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => ['menu_order' => 'ASC', 'date' => 'DESC'],
]);
?>

<div class="component-carriere-body">
    <!-- Hero Header -->
    <section class="b-section b-section--navy">
        <div class="b-container">
            <span class="b-badge b-badge--dark">RECRUTEMENT &amp; TALENTS</span>
            <h1 class="b-section__title" style="margin-top: var(--space-xs);">
                Construire les technologies de demain avec nous.
            </h1>
            <p class="b-section__subtitle">
                Rejoignez un groupe technologique qui valorise l'excellence technique, l'ingénierie rigoureuse, l'autonomie et l'ambition africaine.
            </p>

            <div style="display: flex; gap: var(--space-md); flex-wrap: wrap; margin-top: var(--space-lg);">
                <a href="#postes-ouverts" class="b-btn b-btn--primary">
                    Consulter les postes ouverts (<?php echo esc_html($jobs_query->found_posts); ?>) &darr;
                </a>
                <a href="#candidature-spontanee" class="b-btn b-btn--outline">
                    Candidature spontanée
                </a>
            </div>
        </div>
    </section>

    <!-- Nos Principes d'Ingénierie -->
    <section class="b-section b-section--light">
        <div class="b-container">
            <div class="b-section__header text-center">
                <span class="b-badge b-badge--dark">CULTURE D'ENTREPRISE</span>
                <h2 class="b-section__title">Ce qui définit le travail chez BYT3LAB</h2>
                <p class="b-section__subtitle">
                    Nos équipes conçoivent des plateformes critiques où la fiabilité, la sécurité et la maintenabilité ne sont pas négociables.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: var(--space-lg); margin-top: var(--space-xl);">
                <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <div style="font-size: 2rem; margin-bottom: var(--space-xs);">📐</div>
                    <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: 0 0 var(--space-xs);">Rigueur d'Ingénierie</h3>
                    <p style="font-size: var(--text-sm); color: var(--color-slate-medium); line-height: 1.6; margin: 0;">
                        Architecture documentée, revues de code systématiques, typage strict et tests automatisés. Nous privilégions la qualité pérenne aux raccourcis éphémères.
                    </p>
                </div>

                <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <div style="font-size: 2rem; margin-bottom: var(--space-xs);">⚡</div>
                    <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: 0 0 var(--space-xs);">Autonomie &amp; Responsabilité</h3>
                    <p style="font-size: var(--text-sm); color: var(--color-slate-medium); line-height: 1.6; margin: 0;">
                        Chaque collaborateur pilote ses chantiers avec un niveau élevé d'autonomie et de transparence, dans un modèle hybride favorisant la concentration.
                    </p>
                </div>

                <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <div style="font-size: 2rem; margin-bottom: var(--space-xs);">🌍</div>
                    <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: 0 0 var(--space-xs);">Impact Africain Réel</h3>
                    <p style="font-size: var(--text-sm); color: var(--color-slate-medium); line-height: 1.6; margin: 0;">
                        Nous bâtissons des technologies souveraines qui résolvent des problématiques concrètes d'entreprises, d'industries et d'écoles à travers l'Afrique.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Postes Ouverts -->
    <section id="postes-ouverts" class="b-section b-section--dark">
        <div class="b-container">
            <div class="b-section__header text-center">
                <span class="b-badge b-badge--dark">OPPORTUNITÉS ACTUELLES</span>
                <h2 class="b-section__title" style="color: var(--color-white);">Postes Ouverts au Recrutement</h2>
                <p class="b-section__subtitle" style="color: var(--color-slate-light);">
                    Découvrez nos opportunités au sein des divisions technologiques et du studio créatif NGRAFIX.
                </p>
            </div>

            <?php if ($jobs_query->have_posts()) : ?>
                <div style="display: flex; flex-direction: column; gap: var(--space-md); margin-top: var(--space-xl); max-width: 900px; margin-left: auto; margin-right: auto;">
                    <?php while ($jobs_query->have_posts()) : $jobs_query->the_post();
                        $dept       = get_post_meta(get_the_ID(), '_byt3lab_job_department', true) ?: 'Software & Digital';
                        $contract   = get_post_meta(get_the_ID(), '_byt3lab_job_contract', true) ?: 'CDI';
                        $location   = get_post_meta(get_the_ID(), '_byt3lab_job_location', true) ?: 'Douala / Hybride';
                        $experience = get_post_meta(get_the_ID(), '_byt3lab_job_experience', true) ?: 'Confirmé';
                    ?>
                        <article class="b-card" style="background: var(--color-navy); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: var(--radius-lg); padding: var(--space-lg); display: flex; flex-direction: column; gap: var(--space-sm);">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: var(--space-md); flex-wrap: wrap;">
                                <div>
                                    <div style="display: flex; gap: var(--space-xs); align-items: center; margin-bottom: var(--space-xs); flex-wrap: wrap;">
                                        <span class="b-badge b-badge--dark"><?php echo esc_html($dept); ?></span>
                                        <span class="b-badge b-badge--light"><?php echo esc_html($contract); ?></span>
                                        <span style="font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-slate-light);">
                                            📍 <?php echo esc_html($location); ?>
                                        </span>
                                    </div>
                                    <h3 style="font-size: var(--text-xl); margin: 0; color: var(--color-white);">
                                        <a href="<?php the_permalink(); ?>" style="color: var(--color-white); text-decoration: none;">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>
                                <a href="<?php the_permalink(); ?>" class="b-btn b-btn--primary" style="flex-shrink: 0;">
                                    Voir la fiche &rarr;
                                </a>
                            </div>
                            <div style="font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-cyan); margin-top: var(--space-xs);">
                                Niveau requis : <?php echo esc_html($experience); ?>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <div class="b-empty-state" style="margin-top: var(--space-xl);">
                    <div class="b-empty-state__icon">💼</div>
                    <h3 class="b-empty-state__title">Aucune offre ouverte actuellement</h3>
                    <p class="b-empty-state__text">
                        Toutes nos positions actives sont actuellement pourvues. Vous pouvez toutefois nous adresser une candidature spontanée.
                    </p>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Candidature Spontanée -->
    <section id="candidature-spontanee" class="b-section b-section--light">
        <div class="b-container">
            <div class="b-card" style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: clamp(2rem, 5vw, 3.5rem); max-width: 820px; margin: 0 auto; text-align: center;">
                <span class="b-badge b-badge--dark">CANDIDATURE SPONTANÉE</span>
                <h2 style="font-size: clamp(1.75rem, 3vw, 2.25rem); color: var(--color-navy); margin: var(--space-xs) 0 var(--space-sm);">
                    Vous êtes ingénieur, architecte ou designer d'exception ?
                </h2>
                <p style="font-size: var(--text-md); color: var(--color-slate-medium); line-height: 1.7; margin-bottom: var(--space-xl);">
                    Même si votre profil ne correspond pas aux offres ouvertes, nous étudions volontiers les candidatures spontanées d'experts passionnés par les systèmes distribués, le cloud souverain, l'ingénierie logicielle et le design de marque.
                </p>

                <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                    <a href="mailto:carrieres@byt3lab.com?subject=<?php echo rawurlencode('Candidature Spontanée — BYT3LAB'); ?>" class="b-btn b-btn--primary">
                        Envoyer ma candidature spontanée &rarr;
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--outline">
                        Contacter la direction des talents
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
