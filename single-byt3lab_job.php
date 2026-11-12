<?php
/**
 * Single Template: Offre d'Emploi BYT3LAB
 * Style : Design System Institutionnel BYT3LAB
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');

$current_id   = get_the_ID();
$title        = get_the_title();
$dept         = get_post_meta($current_id, '_byt3lab_job_department', true) ?: 'Software & Digital';
$contract     = get_post_meta($current_id, '_byt3lab_job_contract', true) ?: 'CDI - Temps Plein';
$location     = get_post_meta($current_id, '_byt3lab_job_location', true) ?: 'Douala / Yaoundé, Cameroun (Hybride)';
$experience   = get_post_meta($current_id, '_byt3lab_job_experience', true) ?: 'Confirmé (3+ ans)';
$salary       = get_post_meta($current_id, '_byt3lab_job_salary', true) ?: 'Selon profil & grille de compétences';
$status       = get_post_meta($current_id, '_byt3lab_job_status', true) ?: 'active';
$deadline     = get_post_meta($current_id, '_byt3lab_job_deadline', true) ?: 'Recrutement continu';
$apply_link   = get_post_meta($current_id, '_byt3lab_job_apply_link', true);
$missions_raw = get_post_meta($current_id, '_byt3lab_job_missions', true);
$reqs_raw     = get_post_meta($current_id, '_byt3lab_job_requirements', true);

if (empty($apply_link)) {
    $apply_link = 'mailto:carrieres@byt3lab.com?subject=' . rawurlencode('Candidature : ' . $title);
}

$missions_list = [];
if (!empty($missions_raw)) {
    $lines = explode("\n", str_replace("\r", "", $missions_raw));
    foreach ($lines as $line) {
        $line = trim($line);
        if (!empty($line)) {
            $missions_list[] = $line;
        }
    }
}

$reqs_list = [];
if (!empty($reqs_raw)) {
    $lines = explode("\n", str_replace("\r", "", $reqs_raw));
    foreach ($lines as $line) {
        $line = trim($line);
        if (!empty($line)) {
            $reqs_list[] = $line;
        }
    }
}

$other_jobs = new WP_Query([
    'post_type'      => 'byt3lab_job',
    'post__not_in'   => [$current_id],
    'posts_per_page' => 3,
    'orderby'        => 'rand',
]);

$whatsapp_msg = 'Bonjour l\'équipe RH BYT3LAB, je souhaite échanger au sujet de l\'offre : ' . $title;
$whatsapp_url = 'https://wa.me/237696879475?text=' . rawurlencode($whatsapp_msg);
?>

<main id="primary" class="site-main b-job-page">

    <!-- Hero Offre d'Emploi -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 860px;">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px; flex-wrap: wrap;">
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-eyebrow b-eyebrow--white" style="margin-bottom: 0;">
                        &larr; Toutes les Opportunités
                    </a>
                    <?php echo byt3lab_status_badge('active'); ?>
                </div>

                <div style="display: flex; align-items: center; gap: 10px; margin-bottom: 12px; flex-wrap: wrap;">
                    <span class="b-badge b-badge--dark"><?php echo esc_html($dept); ?></span>
                    <span class="b-badge b-badge--cyan"><?php echo esc_html($contract); ?></span>
                </div>

                <h1 class="b-hero__title" style="font-size: clamp(2rem, 4vw, 3.25rem); margin-bottom: 20px;">
                    <?php the_title(); ?>
                </h1>

                <!-- Fiche rapide métadonnées dans le Hero -->
                <div style="display: flex; flex-wrap: wrap; gap: 20px 32px; font-size: 14px; color: var(--c-gray-300); margin-bottom: 32px; padding: 16px 20px; background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: var(--radius-md);">
                    <div style="display: inline-flex; align-items: center; gap: 8px;">
                        <?php echo byt3lab_icon('map-pin', 16); ?>
                        <span>Lieu : <strong style="color: #fff;"><?php echo esc_html($location); ?></strong></span>
                    </div>
                    <div style="display: inline-flex; align-items: center; gap: 8px;">
                        <?php echo byt3lab_icon('target', 16); ?>
                        <span>Expérience : <strong style="color: #fff;"><?php echo esc_html($experience); ?></strong></span>
                    </div>
                    <div style="display: inline-flex; align-items: center; gap: 8px;">
                        <?php echo byt3lab_icon('layers', 16); ?>
                        <span>Échéance : <strong style="color: #fff;"><?php echo esc_html($deadline); ?></strong></span>
                    </div>
                </div>

                <div class="b-hero__actions">
                    <a href="#postuler" class="b-btn b-btn--lg b-btn--primary">
                        <span>Postuler à ce poste</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--lg b-btn--outline-dark">
                        <?php echo byt3lab_icon('whatsapp', 18); ?>
                        <span>Échanger avec les RH</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Détails du Poste & Candidature -->
    <section class="b-section">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: 1fr; gap: 40px; align-items: start;">
                <style>
                    @media (min-width: 992px) {
                        .b-job-layout {
                            display: grid !important;
                            grid-template-columns: minmax(0, 1fr) 360px !important;
                            gap: 48px !important;
                        }
                    }
                </style>
                <div class="b-job-layout" style="display: flex; flex-direction: column; gap: 32px;">
                    
                    <!-- Colonne Gauche : Contenu du Poste -->
                    <div style="display: flex; flex-direction: column; gap: 32px;">
                        
                        <!-- 1. Description & Contexte -->
                        <div class="b-card" style="padding: 36px;">
                            <span class="b-eyebrow">Contexte &amp; Enjeux</span>
                            <h2 class="b-title" style="font-size: 1.55rem; margin-bottom: 20px;">
                                Description du Poste
                            </h2>
                            <div style="font-size: 16px; color: var(--c-gray-700); line-height: 1.8;">
                                <?php 
                                $content = get_the_content();
                                if (!empty(trim($content))) {
                                    the_content();
                                } else {
                                    echo '<p>Rejoignez les équipes d\'ingénierie du groupe BYT3LAB pour concevoir, intégrer et exploiter des technologies fiables au service des entreprises et infrastructures de demain.</p>';
                                }
                                ?>
                            </div>
                        </div>

                        <!-- 2. Missions & Responsabilités Clés -->
                        <?php if (!empty($missions_list)) : ?>
                            <div class="b-card" style="padding: 36px;">
                                <span class="b-eyebrow">Missions Opérationnelles</span>
                                <h2 class="b-title" style="font-size: 1.55rem; margin-bottom: 20px;">
                                    Responsabilités Clés
                                </h2>
                                <ul class="b-checklist" style="display: flex; flex-direction: column; gap: 14px;">
                                    <?php foreach ($missions_list as $mission) : ?>
                                        <li style="font-size: 15px; line-height: 1.6; color: var(--c-gray-700);">
                                            <?php echo byt3lab_icon('check', 18); ?>
                                            <span><?php echo esc_html($mission); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <!-- 3. Profil Recherché & Compétences -->
                        <?php if (!empty($reqs_list)) : ?>
                            <div class="b-card" style="padding: 36px;">
                                <span class="b-eyebrow">Compétences Requises</span>
                                <h2 class="b-title" style="font-size: 1.55rem; margin-bottom: 20px;">
                                    Profil Recherché
                                </h2>
                                <ul class="b-checklist" style="display: flex; flex-direction: column; gap: 14px;">
                                    <?php foreach ($reqs_list as $req) : ?>
                                        <li style="font-size: 15px; line-height: 1.6; color: var(--c-gray-700);">
                                            <?php echo byt3lab_icon('target', 18); ?>
                                            <span><?php echo esc_html($req); ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <!-- 4. Pourquoi Rejoindre BYT3LAB ? -->
                        <div class="b-card" style="padding: 36px;">
                            <span class="b-eyebrow">Environnement de Travail</span>
                            <h2 class="b-title" style="font-size: 1.55rem; margin-bottom: 20px;">
                                Ce que Nous Vous Offrons
                            </h2>
                            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px;">
                                <div style="padding: 20px; background: var(--c-gray-50); border: 1px solid var(--c-gray-200); border-radius: var(--radius-md);">
                                    <div style="color: var(--c-blue-500); margin-bottom: 8px;">
                                        <?php echo byt3lab_icon('server', 22); ?>
                                    </div>
                                    <strong style="color: var(--c-navy-950); display: block; margin-bottom: 6px; font-size: 15px;">Équipements &amp; Outils</strong>
                                    <p style="color: var(--c-gray-600); font-size: 13.5px; line-height: 1.5; margin: 0;">Postes performants, accès cloud haut débit et licences professionnelles.</p>
                                </div>
                                <div style="padding: 20px; background: var(--c-gray-50); border: 1px solid var(--c-gray-200); border-radius: var(--radius-md);">
                                    <div style="color: var(--c-blue-500); margin-bottom: 8px;">
                                        <?php echo byt3lab_icon('workflow', 22); ?>
                                    </div>
                                    <strong style="color: var(--c-navy-950); display: block; margin-bottom: 6px; font-size: 15px;">Rigueur &amp; Méthode</strong>
                                    <p style="color: var(--c-gray-600); font-size: 13.5px; line-height: 1.5; margin: 0;">Revues de code systématiques, CI/CD, documentation et tests.</p>
                                </div>
                                <div style="padding: 20px; background: var(--c-gray-50); border: 1px solid var(--c-gray-200); border-radius: var(--radius-md);">
                                    <div style="color: var(--c-blue-500); margin-bottom: 8px;">
                                        <?php echo byt3lab_icon('compass', 22); ?>
                                    </div>
                                    <strong style="color: var(--c-navy-950); display: block; margin-bottom: 6px; font-size: 15px;">Impact Africain</strong>
                                    <p style="color: var(--c-gray-600); font-size: 13.5px; line-height: 1.5; margin: 0;">Progiciels et infrastructures critiques déployés pour des organisations réelles.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- Colonne Droite : Sticky Sidebar de Candidature -->
                    <div>
                        <div style="position: sticky; top: 96px;">
                            <div class="b-card" id="postuler" style="padding: 32px; border: 2px solid var(--c-blue-500); box-shadow: var(--shadow-card);">
                                <span class="b-badge b-badge--dark" style="margin-bottom: 12px; align-self: flex-start;">Postuler</span>
                                <h3 style="font-size: 1.35rem; color: var(--c-navy-950); margin: 0 0 8px;">
                                    Rejoindre cette division
                                </h3>
                                <p style="font-size: 13.5px; color: var(--c-gray-600); line-height: 1.6; margin-bottom: 24px;">
                                    Transmettez-nous votre curriculum vitae et les liens vers vos réalisations techniques (projets GitHub, code, démos).
                                </p>

                                <div style="display: flex; flex-direction: column; gap: 12px; margin-bottom: 24px;">
                                    <a href="<?php echo esc_url($apply_link); ?>" class="b-btn b-btn--primary" style="justify-content: center; width: 100%;">
                                        <?php echo byt3lab_icon('mail', 18); ?>
                                        <span>Postuler par e-mail</span>
                                    </a>
                                    <a href="<?php echo esc_url($whatsapp_url); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--secondary" style="justify-content: center; width: 100%;">
                                        <?php echo byt3lab_icon('whatsapp', 18); ?>
                                        <span>Contact RH via WhatsApp</span>
                                    </a>
                                </div>

                                <div style="border-top: 1px solid var(--c-gray-200); padding-top: 20px; font-size: 13px; display: flex; flex-direction: column; gap: 10px; color: var(--c-gray-600);">
                                    <div style="display: flex; justify-content: space-between;">
                                        <span>Pôle :</span>
                                        <strong style="color: var(--c-navy-950);"><?php echo esc_html($dept); ?></strong>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;">
                                        <span>Contrat :</span>
                                        <strong style="color: var(--c-navy-950);"><?php echo esc_html($contract); ?></strong>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;">
                                        <span>Lieu :</span>
                                        <strong style="color: var(--c-navy-950);"><?php echo esc_html($location); ?></strong>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;">
                                        <span>Rémunération :</span>
                                        <strong style="color: var(--c-navy-950); text-align: right;"><?php echo esc_html($salary); ?></strong>
                                    </div>
                                    <div style="display: flex; justify-content: space-between;">
                                        <span>Réponse RH :</span>
                                        <strong style="color: var(--c-status-active-text);">Sous 48h ouvrées</strong>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Autres Opportunités -->
    <?php if ($other_jobs->have_posts()) : ?>
        <section class="b-section b-section--alt">
            <div class="b-container">
                <div class="b-section-head b-section-head--center">
                    <span class="b-eyebrow">Autres Postes</span>
                    <h2 class="b-title">Autres Opportunités au Sein du Groupe</h2>
                    <p class="b-lead">Nos divisions recrutent également sur d'autres expertises complémentaires.</p>
                </div>

                <div class="b-grid b-grid--3">
                    <?php while ($other_jobs->have_posts()) : $other_jobs->the_post(); 
                        $o_dept     = get_post_meta(get_the_ID(), '_byt3lab_job_department', true) ?: 'Software & Digital';
                        $o_contract = get_post_meta(get_the_ID(), '_byt3lab_job_contract', true) ?: 'CDI';
                        $o_loc      = get_post_meta(get_the_ID(), '_byt3lab_job_location', true) ?: 'Douala / Yaoundé';
                    ?>
                        <article class="b-job-card">
                            <div class="b-job-card__head">
                                <span class="b-badge b-badge--dark"><?php echo esc_html($o_dept); ?></span>
                                <span class="b-badge b-badge--light"><?php echo esc_html($o_contract); ?></span>
                            </div>
                            <h3 class="b-job-card__title">
                                <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="b-job-card__meta">
                                <span class="b-job-card__meta-item">
                                    <?php echo byt3lab_icon('map-pin', 14); ?>
                                    <span><?php echo esc_html($o_loc); ?></span>
                                </span>
                                <span style="margin-left: auto;">
                                    <a href="<?php the_permalink(); ?>" class="b-btn b-btn--sm b-btn--primary">
                                        <span>Voir le poste &rarr;</span>
                                    </a>
                                </span>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <!-- CTA Final -->
    <section class="b-section b-section--tight">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Vous souhaitez explorer d'autres perspectives ?</h2>
                <p>Découvrez notre vision de l'ingénierie technologique et la structure de nos divisions.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <span>Toutes les opportunités</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/a-propos/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Découvrir le groupe BYT3LAB</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();
