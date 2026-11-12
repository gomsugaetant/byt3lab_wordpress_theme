<?php
/**
 * Template Name: Équipe
 * Description: Organisation, gouvernance et ingénieurs du groupe BYT3LAB
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');

$team_query = new WP_Query([
    'post_type'      => 'byt3lab_team',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => ['menu_order' => 'ASC', 'date' => 'ASC'],
]);
?>

<main id="primary" class="site-main">

    <!-- Hero Équipe -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 820px;">
                <div class="b-hero__signature">
                    Capital Humain &amp; Organisation
                </div>
                <h1 class="b-hero__title">
                    L'Excellence Technique Portée par des Talents Engagés
                </h1>
                <p class="b-hero__subtitle">
                    Byt3Lab rassemble des ingénieurs logiciels, des architectes cloud, des intégrateurs systèmes et des designers animés par la culture de la rigueur et l'ambition de bâtir des technologies durables depuis l'Afrique.
                </p>
                <div class="b-hero__actions">
                    <a href="#poles" class="b-btn b-btn--lg b-btn--primary">
                        <span>Pôles d'ingénierie</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Rejoindre nos équipes</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Pôles Opérationnels & Divisions -->
    <section class="b-section" id="poles">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Structure Opérationnelle</span>
                <h2 class="b-title">Organisation des Équipes &amp; Domaines d'Expertise</h2>
                <p class="b-lead">
                    Nos collaborateurs interviennent sur des chaînes de valeur complémentaires, de la conception architecturale à l'exploitation critique.
                </p>
            </div>

            <div class="b-grid b-grid--3">
                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('code', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Software</span>
                    </div>
                    <h3 class="b-card__title">Ingénierie Logicielle &amp; ERP</h3>
                    <p class="b-card__text">
                        Architectes logiciels, ingénieurs backend et frontend, spécialistes des bases de données et concepteurs de la suite de gestion modulaire MELODI.
                    </p>
                    <div class="b-card__footer">
                        <a href="<?php echo esc_url(home_url('/technologies/logiciel-numerique/')); ?>" class="b-link">
                            <span>Division Logiciel &amp; Numérique &rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('cloud', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Cloud &amp; DevOps</span>
                    </div>
                    <h3 class="b-card__title">Cloud, Réseaux &amp; BWS</h3>
                    <p class="b-card__text">
                        Ingénieurs systèmes, administrateurs réseau et spécialistes de la haute disponibilité pilotant les services d'hébergement managé BWS et l'infrastructure du groupe.
                    </p>
                    <div class="b-card__footer">
                        <a href="<?php echo esc_url(home_url('/technologies/infrastructure-cloud/')); ?>" class="b-link">
                            <span>Division Infrastructure &amp; Cloud &rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('palette', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Studio NGRAFIX</span>
                    </div>
                    <h3 class="b-card__title">Design &amp; Marque Digitale</h3>
                    <p class="b-card__text">
                        Directeurs artistiques, designers UI/UX et spécialistes en communication visuelle concevant les identités et interfaces de marque du groupe.
                    </p>
                    <div class="b-card__footer">
                        <a href="<?php echo esc_url(home_url('/ngrafix/')); ?>" class="b-link">
                            <span>Découvrir le Studio NGRAFIX &rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('cpu', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Matériel &amp; IoT</span>
                    </div>
                    <h3 class="b-card__title">Systèmes Connectés &amp; Réseaux</h3>
                    <p class="b-card__text">
                        Ingénieurs en systèmes embarqués, techniciens télécoms et spécialistes matériels assurant l'interconnexion physique des entreprises.
                    </p>
                    <div class="b-card__footer">
                        <a href="<?php echo esc_url(home_url('/technologies/materiel-reseaux/')); ?>" class="b-link">
                            <span>Division Matériel &amp; Réseaux &rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('zap', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Industrie &amp; Énergie</span>
                    </div>
                    <h3 class="b-card__title">Technologies Industrielles &amp; Énergie</h3>
                    <p class="b-card__text">
                        Consultants et chercheurs travaillant sur les solutions de résilience énergétique solaire, le stockage et les capteurs pour l'industrie.
                    </p>
                    <div class="b-card__footer">
                        <a href="<?php echo esc_url(home_url('/technologies/technologies-energetiques/')); ?>" class="b-link">
                            <span>Division Énergie &amp; Industrie &rarr;</span>
                        </a>
                    </div>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('shield', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Gouvernance</span>
                    </div>
                    <h3 class="b-card__title">Qualité, Méthodes &amp; Sécurité</h3>
                    <p class="b-card__text">
                        Référents techniques garantissant la conformité des architectures logicielles, les processus de revue de code et la sécurité opérationnelle.
                    </p>
                    <div class="b-card__footer">
                        <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="b-link">
                            <span>Gouvernance &amp; Principes &rarr;</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture & Principes d'Ingénierie -->
    <section class="b-section b-section--alt">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Culture Partagée</span>
                <h2 class="b-title">Ce qui Unit Nos Ingénieurs au Quotidien</h2>
                <p class="b-lead">
                    Une culture d'ingénierie rigoureuse, guidée par la recherche permanente de qualité, de clarté et de pérennité.
                </p>
            </div>

            <div class="b-grid b-grid--3">
                <div class="b-card" style="padding: 32px;">
                    <div class="b-step-card__num">01</div>
                    <h3 class="b-step-card__title">Rigueur d'Architecture</h3>
                    <p class="b-step-card__text">
                        Architecture documentée, revues de code systématiques, typage strict et tests automatisés. Nous privilégions la qualité pérenne aux raccourcis éphémères.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div class="b-step-card__num">02</div>
                    <h3 class="b-step-card__title">Autonomie &amp; Responsabilité</h3>
                    <p class="b-step-card__text">
                        Chaque collaborateur pilote ses chantiers avec un haut niveau d'autonomie et de transparence, dans un modèle favorisant la concentration et la responsabilité.
                    </p>
                </div>

                <div class="b-card" style="padding: 32px;">
                    <div class="b-step-card__num">03</div>
                    <h3 class="b-step-card__title">Impact Africain Concret</h3>
                    <p class="b-step-card__text">
                        Nous bâtissons des technologies souveraines qui résolvent des problématiques concrètes d'entreprises, d'industries et d'institutions à travers l'Afrique.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Membres de l'Équipe & Gouvernance -->
    <section class="b-section" id="gouvernance">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Direction &amp; Référents</span>
                <h2 class="b-title">Gouvernance &amp; Équipes Opérationnelles</h2>
                <p class="b-lead">
                    Les femmes et les hommes qui pilotent la stratégie technologique et accompagnent nos partenaires.
                </p>
            </div>

            <?php if ($team_query->have_posts()) : ?>
                <div class="b-grid b-grid--3">
                    <?php while ($team_query->have_posts()) : $team_query->the_post();
                        $role         = get_post_meta(get_the_ID(), '_byt3lab_team_role', true) ?: 'Ingénieur';
                        $dept         = get_post_meta(get_the_ID(), '_byt3lab_team_department', true) ?: 'Direction';
                        $bio          = get_post_meta(get_the_ID(), '_byt3lab_team_bio_short', true);
                        $linkedin     = get_post_meta(get_the_ID(), '_byt3lab_team_linkedin', true);
                        $github       = get_post_meta(get_the_ID(), '_byt3lab_team_github', true);
                        $custom_photo = get_post_meta(get_the_ID(), '_byt3lab_team_photo', true);
                        $avatar_url   = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : (!empty($custom_photo) ? $custom_photo : '');
                    ?>
                        <article class="b-team-card">
                            <?php if (!empty($avatar_url)) : ?>
                                <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php the_title_attribute(); ?>" class="b-team-card__avatar" />
                            <?php else : ?>
                                <div class="b-team-card__placeholder">
                                    <?php echo byt3lab_icon('target', 36); ?>
                                </div>
                            <?php endif; ?>

                            <span class="b-badge b-badge--light" style="margin-bottom: 10px;"><?php echo esc_html($dept); ?></span>
                            <h3 class="b-team-card__name"><?php the_title(); ?></h3>
                            <div class="b-team-card__role"><?php echo esc_html($role); ?></div>

                            <?php if (!empty($bio)) : ?>
                                <p class="b-team-card__bio"><?php echo esc_html($bio); ?></p>
                            <?php endif; ?>

                            <?php if (!empty($linkedin) || !empty($github)) : ?>
                                <div class="b-team-card__links">
                                    <?php if (!empty($linkedin)) : ?>
                                        <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--sm b-btn--secondary" aria-label="LinkedIn">
                                            <?php echo byt3lab_icon('linkedin', 14); ?>
                                            <span>LinkedIn</span>
                                        </a>
                                    <?php endif; ?>
                                    <?php if (!empty($github)) : ?>
                                        <a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--sm b-btn--secondary" aria-label="GitHub">
                                            <?php echo byt3lab_icon('code', 14); ?>
                                            <span>GitHub</span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <div class="b-card" style="padding: 48px; text-align: center; max-width: 860px; margin: 0 auto; background: var(--c-gray-25);">
                    <div style="width: 64px; height: 64px; border-radius: var(--radius-md); background: var(--c-gray-100); color: var(--c-blue-500); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px;">
                        <?php echo byt3lab_icon('building', 32); ?>
                    </div>
                    <span class="b-badge b-badge--dark" style="margin-bottom: 12px;">Organisation Institutionnelle</span>
                    <h3 style="font-size: 1.5rem; color: var(--c-navy-950); margin: 0 0 12px;">Comité de Direction &amp; Référents d'Ingénierie</h3>
                    <p style="font-size: 15px; color: var(--c-gray-600); line-height: 1.7; max-width: 680px; margin: 0 auto 28px;">
                        Le groupe BYT3LAB s'appuie sur une gouvernance collégiale associant la Direction Générale, les chefs de divisions technologiques et les directeurs de projets. La publication des fiches individuelles détaillées est en cours d'actualisation suite à l'extension des pôles d'activités.
                    </p>
                    <div style="display: flex; gap: 16px; justify-content: center; flex-wrap: wrap;">
                        <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-btn b-btn--primary">
                            <span>Rejoindre nos équipes &rarr;</span>
                        </a>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--secondary">
                            <span>Prendre contact avec la direction</span>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- CTA Final Équipe -->
    <section class="b-section b-section--tight">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Prenez part aux défis technologiques du continent</h2>
                <p>Nous recrutons continuellement des profils rigoureux en ingénierie logicielle, infrastructures distribuées et design numérique.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <span>Consulter les postes ouverts</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Découvrir notre vision &amp; histoire</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();
