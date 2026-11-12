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
    <!-- Postes Ouverts -->
    <section class="b-section" id="postes-ouverts" style="padding-top: 0;">
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
            <?php endif; ?>
        </div>
    </section>
</div>
