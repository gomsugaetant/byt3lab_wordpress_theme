<?php
/**
 * Template Name: Carrières & Recrutement
 * Description: Page de recrutement et des offres d'emploi BYT3LAB
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');

$jobs_query = new WP_Query([
    'post_type'      => 'byt3lab_job',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => ['menu_order' => 'ASC', 'date' => 'DESC'],
]);

$jobs_count = $jobs_query->found_posts;
?>

<main id="primary" class="site-main">

    <!-- Hero Carrières -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 820px;">
                <div class="b-hero__signature">
                    Carrières &amp; Opportunités
                </div>
                <h1 class="b-hero__title">
                    Construire les Technologies de Demain avec Nous
                </h1>
                <p class="b-hero__subtitle">
                    Rejoignez un collectif technologique panafricain qui valorise l'excellence technique, l'ingénierie rigoureuse, l'autonomie et l'ambition africaine.
                </p>
                <div class="b-hero__actions">
                    <a href="#postes-ouverts" class="b-btn b-btn--lg b-btn--primary">
                        <span>Postes ouverts (<?php echo esc_html($jobs_count); ?>)</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="#candidature-spontanee" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Candidature spontanée</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Culture & Environnement de Travail -->
    <section class="b-section">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Culture d'Entreprise</span>
                <h2 class="b-title">Ce qui Définit le Travail chez BYT3LAB</h2>
                <p class="b-lead">
                    Nos équipes conçoivent des plateformes critiques où la fiabilité, la sécurité et la maintenabilité ne sont pas négociables.
                </p>
            </div>

            <div class="b-grid b-grid--3">
                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('cpu', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Excellence</span>
                    </div>
                    <h3 class="b-card__title">Rigueur d'Ingénierie</h3>
                    <p class="b-card__text">
                        Architecture documentée, revues de code systématiques, typage strict et tests automatisés. Nous privilégions la qualité pérenne aux raccourcis éphémères.
                    </p>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('workflow', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Organisation</span>
                    </div>
                    <h3 class="b-card__title">Autonomie &amp; Hybridation</h3>
                    <p class="b-card__text">
                        Chaque collaborateur pilote ses chantiers avec un haut niveau d'autonomie et de transparence, dans un modèle hybride pensé pour la concentration et le bien-être.
                    </p>
                </div>

                <div class="b-card">
                    <div class="b-card__header">
                        <div class="b-card__icon-wrap">
                            <?php echo byt3lab_icon('compass', 24); ?>
                        </div>
                        <span class="b-badge b-badge--dark">Vision</span>
                    </div>
                    <h3 class="b-card__title">Impact Africain Réel</h3>
                    <p class="b-card__text">
                        Nous bâtissons des technologies souveraines qui résolvent des problématiques concrètes d'entreprises, d'industries et d'écoles à travers l'Afrique.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Postes Ouverts -->
    <section class="b-section b-section--alt" id="postes-ouverts">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Opportunités Actuelles</span>
                <h2 class="b-title">Postes Ouverts au Recrutement</h2>
                <p class="b-lead">
                    Découvrez nos opportunités au sein des divisions technologiques et du studio créatif NGRAFIX.
                </p>
            </div>

            <?php if ($jobs_query->have_posts()) : ?>
                <div style="display: flex; flex-direction: column; gap: 20px; max-width: 980px; margin: 0 auto;">
                    <?php while ($jobs_query->have_posts()) : $jobs_query->the_post();
                        $job_id     = get_the_ID();
                        $dept       = get_post_meta($job_id, '_byt3lab_job_department', true) ?: 'Software & Digital';
                        $contract   = get_post_meta($job_id, '_byt3lab_job_contract', true) ?: 'CDI';
                        $location   = get_post_meta($job_id, '_byt3lab_job_location', true) ?: 'Douala / Yaoundé / Hybride';
                        $experience = get_post_meta($job_id, '_byt3lab_job_experience', true) ?: 'Confirmé';
                        $deadline   = get_post_meta($job_id, '_byt3lab_job_deadline', true) ?: 'Recrutement continu';
                    ?>
                        <article class="b-job-card">
                            <div class="b-job-card__head">
                                <div style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
                                    <span class="b-badge b-badge--dark"><?php echo esc_html($dept); ?></span>
                                    <span class="b-badge b-badge--light"><?php echo esc_html($contract); ?></span>
                                </div>
                                <span class="b-status b-status--active">
                                    <span class="b-status__dot" aria-hidden="true"></span>
                                    Poste ouvert
                                </span>
                            </div>

                            <div>
                                <h3 class="b-job-card__title">
                                    <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
                                <p class="b-job-card__desc" style="margin-top: 8px;">
                                    <?php echo esc_html(wp_trim_words(get_the_excerpt(), 28, '...')); ?>
                                </p>
                            </div>

                            <div class="b-job-card__meta">
                                <span class="b-job-card__meta-item">
                                    <?php echo byt3lab_icon('map-pin', 15); ?>
                                    <span><?php echo esc_html($location); ?></span>
                                </span>
                                <span class="b-job-card__meta-item">
                                    <?php echo byt3lab_icon('target', 15); ?>
                                    <span><?php echo esc_html($experience); ?></span>
                                </span>
                                <span class="b-job-card__meta-item">
                                    <?php echo byt3lab_icon('layers', 15); ?>
                                    <span><?php echo esc_html($deadline); ?></span>
                                </span>
                                <span style="margin-left: auto;">
                                    <a href="<?php the_permalink(); ?>" class="b-btn b-btn--sm b-btn--primary">
                                        <span>Consulter l'offre &rarr;</span>
                                    </a>
                                </span>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            <?php else : ?>
                <div class="b-card" style="padding: 48px; text-align: center; max-width: 720px; margin: 0 auto;">
                    <div style="width: 56px; height: 56px; border-radius: var(--radius-md); background: var(--c-gray-100); color: var(--c-blue-500); display: flex; align-items: center; justify-content: center; margin: 0 auto 16px;">
                        <?php echo byt3lab_icon('briefcase', 28); ?>
                    </div>
                    <h3 style="font-size: 1.4rem; color: var(--c-navy-950); margin: 0 0 10px;">Aucun poste ouvert pour le moment</h3>
                    <p style="font-size: 15px; color: var(--c-gray-600); line-height: 1.6; margin-bottom: 24px;">
                        Toutes nos offres actuelles sont pourvues. Vous pouvez toutefois déposer une candidature spontanée pour être recontacté lors de nos prochaines ouvertures.
                    </p>
                    <a href="#candidature-spontanee" class="b-btn b-btn--primary">
                        <span>Déposer une candidature spontanée &rarr;</span>
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Processus de Recrutement -->
    <section class="b-section">
        <div class="b-container">
            <div class="b-section-head b-section-head--center">
                <span class="b-eyebrow">Parcours Candidat</span>
                <h2 class="b-title">Notre Processus de Sélection en 4 Étapes</h2>
                <p class="b-lead">
                    Une méthode transparente, respectueuse de votre temps et centrée sur vos compétences pratiques.
                </p>
            </div>

            <div class="b-grid b-grid--4">
                <div class="b-step-card">
                    <div class="b-step-card__num">01</div>
                    <h3 class="b-step-card__title">Examen du Dossier</h3>
                    <p class="b-step-card__text">
                        Revue de votre CV et de vos réalisations (projets GitHub, code, portfolios de design) sous 48h ouvrées.
                    </p>
                </div>

                <div class="b-step-card">
                    <div class="b-step-card__num">02</div>
                    <h3 class="b-step-card__title">Échange de Cadrage</h3>
                    <p class="b-step-card__text">
                        Entretien de 30 minutes en visioconférence pour échanger sur vos aspirations professionnelles et nos projets.
                    </p>
                </div>

                <div class="b-step-card">
                    <div class="b-step-card__num">03</div>
                    <h3 class="b-step-card__title">Étude de Cas Technique</h3>
                    <p class="b-step-card__text">
                        Exercice pratique représentatif de nos chantiers réels, sans pièges théoriques, suivi d'un débriefing collaboratif.
                    </p>
                </div>

                <div class="b-step-card">
                    <div class="b-step-card__num">04</div>
                    <h3 class="b-step-card__title">Offre &amp; Onboarding</h3>
                    <p class="b-step-card__text">
                        Proposition contractuelle claire et plan d'intégration structuré pour démarrer sereinement dans l'équipe.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Candidature Spontanée & Contact RH -->
    <section class="b-section b-section--tight" id="candidature-spontanee">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Vous ne trouvez pas l'offre correspondant à votre profil ?</h2>
                <p>
                    Byt3Lab étudie avec attention toute candidature spontanée d'ingénieur logiciel, d'administrateur DevOps, de consultant ou de designer talentueux.
                </p>
                <div class="b-cta-band__actions">
                    <a href="mailto:carrieres@byt3lab.com?subject=<?php echo rawurlencode('Candidature Spontanée — BYT3LAB'); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <?php echo byt3lab_icon('mail', 18); ?>
                        <span>Transmettre mon CV par e-mail</span>
                    </a>
                    <a href="https://wa.me/237696879475?text=<?php echo rawurlencode('Bonjour l\'équipe RH BYT3LAB, je souhaite soumettre une candidature spontanée.'); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--lg b-btn--outline-dark">
                        <?php echo byt3lab_icon('whatsapp', 18); ?>
                        <span>Contacter les RH sur WhatsApp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();
