<?php
/**
 * Single Template: Offre d'Emploi BYT3LAB
 * Style : Design System Institutionnel BYT3LAB
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

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
?>

<main id="primary" class="site-main">
    <?php get_template_part('components/header/header'); ?>

    <!-- Hero Header -->
    <section class="b-section b-section--navy" style="padding: calc(var(--space-2xl) * 1.2) 0 var(--space-xl);">
        <div class="b-container">
            <div style="margin-bottom: var(--space-md);">
                <a href="<?php echo esc_url(home_url('/carriere/')); ?>" style="color: var(--color-cyan); font-family: var(--font-mono); font-size: var(--text-xs); text-decoration: none; display: inline-flex; align-items: center; gap: var(--space-xs);">
                    &larr; Retour à l'ensemble des opportunités
                </a>
            </div>

            <div style="display: flex; flex-wrap: wrap; gap: var(--space-xs); align-items: center; margin-bottom: var(--space-sm);">
                <span class="b-badge b-badge--dark"><?php echo esc_html($dept); ?></span>
                <span class="b-badge b-badge--light"><?php echo esc_html($contract); ?></span>
                <span class="b-status b-status--active">
                    <span class="b-status__dot"></span>
                    Poste ouvert
                </span>
            </div>

            <h1 style="color: var(--color-white); font-size: clamp(2rem, 4vw, 3rem); margin: var(--space-xs) 0 var(--space-md); letter-spacing: -0.02em;">
                <?php the_title(); ?>
            </h1>

            <div style="display: flex; flex-wrap: wrap; gap: var(--space-lg); font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-slate-light);">
                <span>📍 Lieu : <strong style="color: #fff;"><?php echo esc_html($location); ?></strong></span>
                <span>🎯 Expérience : <strong style="color: #fff;"><?php echo esc_html($experience); ?></strong></span>
                <span>📅 Échéance : <strong style="color: #fff;"><?php echo esc_html($deadline); ?></strong></span>
            </div>
        </div>
    </section>

    <!-- Main Content Layout -->
    <section class="b-section b-section--light" style="padding: var(--space-2xl) 0;">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: var(--space-2xl);">
                
                <!-- Left Column -->
                <div>
                    <!-- Job Description -->
                    <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg); margin-bottom: var(--space-xl);">
                        <h2 style="font-size: var(--text-xl); color: var(--color-navy); margin-top: 0; margin-bottom: var(--space-md);">
                            Description du poste &amp; Contexte
                        </h2>
                        <div style="font-size: var(--text-md); line-height: 1.8; color: var(--color-slate-dark);">
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

                    <!-- Missions -->
                    <?php if (!empty($missions_list)) : ?>
                        <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg); margin-bottom: var(--space-xl);">
                            <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin-top: 0; margin-bottom: var(--space-md); display: flex; align-items: center; gap: var(--space-xs);">
                                <span>🚀</span> Missions &amp; Responsabilités Clés
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: var(--space-sm);">
                                <?php foreach ($missions_list as $mission) : ?>
                                    <li style="display: flex; align-items: flex-start; gap: var(--space-sm); font-size: var(--text-sm); line-height: 1.6; color: var(--color-slate-dark);">
                                        <span style="color: var(--color-blue); font-weight: bold;">&rarr;</span>
                                        <span><?php echo esc_html($mission); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- Requirements -->
                    <?php if (!empty($reqs_list)) : ?>
                        <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg); margin-bottom: var(--space-xl);">
                            <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin-top: 0; margin-bottom: var(--space-md); display: flex; align-items: center; gap: var(--space-xs);">
                                <span>🎯</span> Profil Recherché &amp; Compétences
                            </h3>
                            <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: var(--space-sm);">
                                <?php foreach ($reqs_list as $req) : ?>
                                    <li style="display: flex; align-items: flex-start; gap: var(--space-sm); font-size: var(--text-sm); line-height: 1.6; color: var(--color-slate-dark);">
                                        <span style="color: var(--color-green); font-weight: bold;">✓</span>
                                        <span><?php echo esc_html($req); ?></span>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <!-- Values -->
                    <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                        <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin-top: 0; margin-bottom: var(--space-md);">
                            Pourquoi rejoindre le groupe BYT3LAB ?
                        </h3>
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: var(--space-md);">
                            <div style="padding: var(--space-md); background: var(--color-slate-lightest); border-radius: var(--radius-md);">
                                <strong style="color: var(--color-navy); display: block; margin-bottom: 4px;">Équipement d'ingénierie</strong>
                                <small style="color: var(--color-slate-medium);">Postes de travail performants, accès aux meilleures plateformes cloud et licences professionnelles.</small>
                            </div>
                            <div style="padding: var(--space-md); background: var(--color-slate-lightest); border-radius: var(--radius-md);">
                                <strong style="color: var(--color-navy); display: block; margin-bottom: 4px;">Rigueur &amp; Méthodologie</strong>
                                <small style="color: var(--color-slate-medium);">Revue de code systématique, CI/CD, documentation rigoureuse et culture d'excellence.</small>
                            </div>
                            <div style="padding: var(--space-md); background: var(--color-slate-lightest); border-radius: var(--radius-md);">
                                <strong style="color: var(--color-navy); display: block; margin-bottom: 4px;">Impact &amp; Ambition</strong>
                                <small style="color: var(--color-slate-medium);">Participez à la construction d'infrastructures et de progiciels stratégiques pour le continent africain.</small>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Sticky Sidebar -->
                <div>
                    <div style="position: sticky; top: 100px;">
                        <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 2px solid var(--color-blue); border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
                            <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-sm);">POSTULER AU POSTE</span>
                            <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: 0 0 var(--space-xs);">
                                Transmettre votre candidature
                            </h3>
                            <p style="font-size: var(--text-xs); color: var(--color-slate-medium); line-height: 1.6; margin-bottom: var(--space-md);">
                                Transmettez-nous votre curriculum vitae et une synthèse de vos réalisations techniques.
                            </p>

                            <div style="display: flex; flex-direction: column; gap: var(--space-sm); margin-bottom: var(--space-lg);">
                                <a href="<?php echo esc_url($apply_link); ?>" class="b-btn b-btn--primary" style="justify-content: center; width: 100%;">
                                    Envoyer mon dossier &rarr;
                                </a>
                                <a href="https://wa.me/237696879475?text=<?php echo rawurlencode('Bonjour l\'équipe BYT3LAB, je souhaite des précisions sur le poste : ' . $title); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--outline" style="justify-content: center; width: 100%; border-color: var(--color-green); color: var(--color-green);">
                                    Contact RH via WhatsApp
                                </a>
                            </div>

                            <div style="border-top: 1px solid var(--color-border); padding-top: var(--space-md); font-family: var(--font-mono); font-size: var(--text-xs); display: flex; flex-direction: column; gap: var(--space-xs); color: var(--color-slate-medium);">
                                <div>Division : <strong style="color: var(--color-navy);"><?php echo esc_html($dept); ?></strong></div>
                                <div>Type de contrat : <strong style="color: var(--color-navy);"><?php echo esc_html($contract); ?></strong></div>
                                <div>Lieu : <strong style="color: var(--color-navy);"><?php echo esc_html($location); ?></strong></div>
                                <div>Rémunération : <strong style="color: var(--color-navy);"><?php echo esc_html($salary); ?></strong></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Other jobs -->
            <?php if ($other_jobs->have_posts()) : ?>
                <div style="margin-top: var(--space-2xl); padding-top: var(--space-xl); border-top: 1px solid var(--color-border);">
                    <h3 style="font-size: var(--text-xl); color: var(--color-navy); margin-bottom: var(--space-lg);">
                        Autres opportunités au sein du groupe
                    </h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: var(--space-md);">
                        <?php while ($other_jobs->have_posts()) : $other_jobs->the_post(); 
                            $o_dept     = get_post_meta(get_the_ID(), '_byt3lab_job_department', true) ?: 'Software & Digital';
                            $o_contract = get_post_meta(get_the_ID(), '_byt3lab_job_contract', true) ?: 'CDI';
                            $o_loc      = get_post_meta(get_the_ID(), '_byt3lab_job_location', true) ?: 'Douala / Yaoundé';
                        ?>
                            <div class="b-card" style="background: #ffffff; padding: var(--space-md); border: 1px solid var(--color-border); border-radius: var(--radius-md);">
                                <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);"><?php echo esc_html($o_dept); ?></span>
                                <h4 style="font-size: var(--text-md); margin: var(--space-xs) 0;">
                                    <a href="<?php the_permalink(); ?>" style="color: var(--color-navy); text-decoration: none;">
                                        <?php the_title(); ?>
                                    </a>
                                </h4>
                                <div style="font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-slate-medium); margin-bottom: var(--space-sm);">
                                    <?php echo esc_html($o_contract); ?> &bull; <?php echo esc_html($o_loc); ?>
                                </div>
                                <a href="<?php the_permalink(); ?>" style="font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-blue); text-decoration: none; font-weight: bold;">
                                    Consulter le poste &rarr;
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
