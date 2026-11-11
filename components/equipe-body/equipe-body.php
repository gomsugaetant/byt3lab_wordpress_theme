<?php
/**
 * Component: equipe-body
 * Organisation & Capital Humain BYT3LAB
 */
if (!defined('ABSPATH')) {
    exit;
}

$team_query = new WP_Query([
    'post_type'      => 'byt3lab_team',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => ['menu_order' => 'ASC', 'date' => 'ASC'],
]);
?>

<div class="component-equipe-body">
    <!-- Hero Header -->
    <section class="b-section b-section--navy">
        <div class="b-container">
            <span class="b-badge b-badge--dark">ORGANISATION &amp; TALENTS</span>
            <h1 class="b-section__title" style="margin-top: var(--space-xs);">
                Le capital humain au cœur de l'ingénierie.
            </h1>
            <p class="b-section__subtitle">
                Des équipes multidisciplinaires réparties entre nos 5 divisions technologiques et notre studio créatif spécialisé NGRAFIX, animées par la culture de l'excellence et de la rigueur.
            </p>
        </div>
    </section>

    <!-- Pôles de Compétences -->
    <section class="b-section b-section--light">
        <div class="b-container">
            <div class="b-section__header text-center">
                <span class="b-badge b-badge--dark">STRUCTURE OPÉRATIONNELLE</span>
                <h2 class="b-section__title">Organisation des Équipes &amp; Domaines d'Expertise</h2>
                <p class="b-section__subtitle">
                    Nos collaborateurs interviennent sur des chaînes de valeur complémentaires de la conception architecturale au maintien en conditions opérationnelles.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-lg); margin-top: var(--space-xl);">
                <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);">SOFTWARE &amp; DIGITAL</span>
                    <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: var(--space-xs) 0;">Ingénierie Logicielle &amp; ERP</h3>
                    <p style="font-size: var(--text-sm); color: var(--color-slate-medium); line-height: 1.6; margin: 0;">
                        Architectes logiciels, développeurs backend &amp; frontend, spécialistes des bases relationnelles et concepteurs de la suite modulaire MELODI.
                    </p>
                </div>

                <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);">INFRASTRUCTURE &amp; CLOUD</span>
                    <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: var(--space-xs) 0;">Cloud, DevOps &amp; BWS</h3>
                    <p style="font-size: var(--text-sm); color: var(--color-slate-medium); line-height: 1.6; margin: 0;">
                        Ingénieurs systèmes, administrateurs réseau et spécialistes de la haute disponibilité pilotant les services managés et les déploiements continus.
                    </p>
                </div>

                <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);">TECHNOLOGIES AVANCÉES</span>
                    <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: var(--space-xs) 0;">IoT, Équipements &amp; Énergie</h3>
                    <p style="font-size: var(--text-sm); color: var(--color-slate-medium); line-height: 1.6; margin: 0;">
                        Ingénieurs en systèmes embarqués, intégrateurs réseaux et consultants énergies préparant les pilotes industriels du groupe.
                    </p>
                </div>

                <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);">NGRAFIX STUDIO</span>
                    <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: var(--space-xs) 0;">Design &amp; Expérience de Marque</h3>
                    <p style="font-size: var(--text-sm); color: var(--color-slate-medium); line-height: 1.6; margin: 0;">
                        Directeurs artistiques, designers UI/UX, motion designers et stratèges de marque concevant les identités et produits numériques du studio.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Membres de l'Équipe -->
    <section class="b-section b-section--dark">
        <div class="b-container">
            <div class="b-section__header text-center">
                <span class="b-badge b-badge--dark">COLLABORATEURS DU GROUPE</span>
                <h2 class="b-section__title" style="color: var(--color-white);">Direction &amp; Référents d'Ingénierie</h2>
            </div>

            <?php if ($team_query->have_posts()) : ?>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-lg); margin-top: var(--space-xl);">
                    <?php while ($team_query->have_posts()) : $team_query->the_post();
                        $role         = get_post_meta(get_the_ID(), '_byt3lab_team_role', true) ?: 'Ingénieur';
                        $dept         = get_post_meta(get_the_ID(), '_byt3lab_team_department', true) ?: 'Direction';
                        $bio          = get_post_meta(get_the_ID(), '_byt3lab_team_bio_short', true);
                        $linkedin     = get_post_meta(get_the_ID(), '_byt3lab_team_linkedin', true);
                        $github       = get_post_meta(get_the_ID(), '_byt3lab_team_github', true);
                        $custom_photo = get_post_meta(get_the_ID(), '_byt3lab_team_photo', true);
                        $avatar_url   = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : (!empty($custom_photo) ? $custom_photo : '');
                    ?>
                        <article class="b-card" style="background: var(--color-navy); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: var(--radius-lg); padding: var(--space-xl); text-align: center;">
                            <?php if (!empty($avatar_url)) : ?>
                                <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php the_title_attribute(); ?>" style="width: 110px; height: 110px; border-radius: 50%; object-fit: cover; margin: 0 auto var(--space-md); border: 2px solid var(--color-cyan);" />
                            <?php else : ?>
                                <div style="width: 90px; height: 90px; border-radius: 50%; background: rgba(79, 211, 245, 0.1); color: var(--color-cyan); display: flex; align-items: center; justify-content: center; font-size: 2rem; margin: 0 auto var(--space-md); border: 1px solid var(--color-cyan);">
                                    👤
                                </div>
                            <?php endif; ?>

                            <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);"><?php echo esc_html($dept); ?></span>
                            <h3 style="font-size: var(--text-lg); color: var(--color-white); margin: var(--space-xs) 0 4px;">
                                <a href="<?php the_permalink(); ?>" style="color: var(--color-white); text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div style="font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-cyan); margin-bottom: var(--space-sm);">
                                <?php echo esc_html($role); ?>
                            </div>

                            <?php if (!empty($bio)) : ?>
                                <p style="font-size: var(--text-xs); color: var(--color-slate-light); line-height: 1.6; margin: 0 0 var(--space-md);">
                                    <?php echo esc_html($bio); ?>
                                </p>
                            <?php endif; ?>

                            <?php if (!empty($linkedin) || !empty($github)) : ?>
                                <div style="display: flex; justify-content: center; gap: var(--space-sm); border-top: 1px solid rgba(255, 255, 255, 0.08); padding-top: var(--space-sm);">
                                    <?php if (!empty($linkedin)) : ?>
                                        <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" style="color: var(--color-slate-light); font-size: var(--text-xs); text-decoration: none;">
                                            LinkedIn ↗
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($github)) : ?>
                                        <a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener noreferrer" style="color: var(--color-slate-light); font-size: var(--text-xs); text-decoration: none;">
                                            GitHub ↗
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <div class="b-empty-state" style="margin-top: var(--space-xl); max-width: 720px; margin-left: auto; margin-right: auto;">
                    <div class="b-empty-state__icon">👥</div>
                    <h3 class="b-empty-state__title" style="color: var(--color-white);">Publication des profils en cours</h3>
                    <p class="b-empty-state__text" style="color: var(--color-slate-light);">
                        La documentation détaillée des fiches individuelles de l'équipe est actuellement en cours de mise à jour dans le cadre de la restructuration du groupe.
                    </p>
                    <div style="margin-top: var(--space-lg); display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                        <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-btn b-btn--primary">
                            Rejoindre nos équipes &rarr;
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--outline">
                            Contacter la direction
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Join Us CTA -->
    <section class="b-section b-section--light">
        <div class="b-container">
            <div class="b-card" style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: clamp(2rem, 5vw, 3.5rem); text-align: center; max-width: 820px; margin: 0 auto;">
                <span class="b-badge b-badge--dark">REJOINDRE LE GROUPE</span>
                <h2 style="font-size: clamp(1.75rem, 3vw, 2.25rem); color: var(--color-navy); margin: var(--space-xs) 0 var(--space-sm);">
                    Prenez part aux défis technologiques du continent.
                </h2>
                <p style="font-size: var(--text-md); color: var(--color-slate-medium); line-height: 1.7; margin-bottom: var(--space-xl);">
                    Nous recrutons continuellement des profils rigoureux en ingénierie logicielle, infrastructures distribuées et design numérique.
                </p>
                <div style="display: flex; gap: var(--space-md); justify-content: center; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-btn b-btn--primary">
                        Consulter les postes ouverts &rarr;
                    </a>
                    <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="b-btn b-btn--outline">
                        Découvrir notre vision &amp; histoire
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
