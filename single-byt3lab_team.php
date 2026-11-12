<?php
/**
 * Single Template: Membre de l'Équipe BYT3LAB
 * Style : Design System Institutionnel BYT3LAB
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
get_template_part('components/header/header');

$role         = get_post_meta(get_the_ID(), '_byt3lab_team_role', true) ?: 'Ingénieur';
$dept         = get_post_meta(get_the_ID(), '_byt3lab_team_department', true) ?: 'Direction';
$bio_short    = get_post_meta(get_the_ID(), '_byt3lab_team_bio_short', true);
$linkedin     = get_post_meta(get_the_ID(), '_byt3lab_team_linkedin', true);
$github       = get_post_meta(get_the_ID(), '_byt3lab_team_github', true);
$custom_photo = get_post_meta(get_the_ID(), '_byt3lab_team_photo', true);
$avatar_url   = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : (!empty($custom_photo) ? $custom_photo : '');
?>

<main id="primary" class="site-main b-team-single-page">

    <!-- Hero Membre Équipe -->
    <section class="b-hero">
        <div class="b-hero__pattern" aria-hidden="true"></div>
        <div class="b-container">
            <div style="max-width: 820px;">
                <div style="display: flex; align-items: center; gap: 12px; margin-bottom: 20px;">
                    <a href="<?php echo esc_url(home_url('/equipe/')); ?>" class="b-eyebrow b-eyebrow--white" style="margin-bottom: 0;">
                        &larr; Organisation &amp; Équipe
                    </a>
                </div>

                <div style="display: flex; gap: 8px; align-items: center; margin-bottom: 12px;">
                    <span class="b-badge b-badge--dark"><?php echo esc_html($dept); ?></span>
                </div>

                <h1 class="b-hero__title" style="margin-bottom: 8px;">
                    <?php the_title(); ?>
                </h1>

                <p class="b-hero__subtitle" style="color: var(--c-cyan-400); font-family: var(--font-heading); font-size: 1.25rem;">
                    <?php echo esc_html($role); ?>
                </p>
            </div>
        </div>
    </section>

    <!-- Détails du Profil -->
    <section class="b-section">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: 1fr; gap: 40px; align-items: start;">
                <style>
                    @media (min-width: 900px) {
                        .b-team-single-layout {
                            display: grid !important;
                            grid-template-columns: 320px minmax(0, 1fr) !important;
                            gap: 48px !important;
                        }
                    }
                </style>
                <div class="b-team-single-layout" style="display: flex; flex-direction: column; gap: 32px;">
                    
                    <!-- Sidebar Profil -->
                    <div class="b-card" style="padding: 36px 28px; text-align: center;">
                        <?php if (!empty($avatar_url)) : ?>
                            <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php the_title_attribute(); ?>" style="width: 140px; height: 140px; border-radius: 50%; object-fit: cover; margin: 0 auto 20px; border: 3px solid var(--c-blue-500); box-shadow: var(--shadow-card);" />
                        <?php else : ?>
                            <div style="width: 120px; height: 120px; border-radius: 50%; background: var(--c-gray-100); color: var(--c-navy-900); display: flex; align-items: center; justify-content: center; margin: 0 auto 20px; border: 2px dashed var(--c-gray-300);">
                                <?php echo byt3lab_icon('target', 48); ?>
                            </div>
                        <?php endif; ?>

                        <span class="b-badge b-badge--light" style="margin-bottom: 8px;"><?php echo esc_html($dept); ?></span>
                        <h2 style="font-size: 1.35rem; color: var(--c-navy-950); margin: 0 0 4px;"><?php the_title(); ?></h2>
                        <div style="font-size: 14px; color: var(--c-blue-500); font-weight: 600; margin-bottom: 20px;"><?php echo esc_html($role); ?></div>

                        <?php if (!empty($linkedin) || !empty($github)) : ?>
                            <div style="display: flex; justify-content: center; gap: 12px; border-top: 1px solid var(--c-gray-200); padding-top: 20px;">
                                <?php if (!empty($linkedin)) : ?>
                                    <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--sm b-btn--secondary">
                                        <?php echo byt3lab_icon('linkedin', 15); ?>
                                        <span>LinkedIn</span>
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($github)) : ?>
                                    <a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--sm b-btn--secondary">
                                        <?php echo byt3lab_icon('code', 15); ?>
                                        <span>GitHub</span>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    <!-- Biographie & Responsabilités -->
                    <div class="b-card" style="padding: 40px;">
                        <span class="b-eyebrow">Parcours &amp; Responsabilités</span>
                        <h2 class="b-title" style="font-size: 1.6rem; margin-bottom: 24px;">
                            Contribution au sein du Groupe BYT3LAB
                        </h2>

                        <?php if (!empty($bio_short)) : ?>
                            <p style="font-size: 1.125rem; color: var(--c-blue-500); font-weight: 500; line-height: 1.7; margin-bottom: 24px; padding-left: 16px; border-left: 3px solid var(--c-blue-500);">
                                <?php echo esc_html($bio_short); ?>
                            </p>
                        <?php endif; ?>

                        <div style="font-size: 16px; line-height: 1.8; color: var(--c-gray-700);">
                            <?php 
                            $content = get_the_content();
                            if (!empty(trim($content))) {
                                the_content();
                            } else {
                                echo '<p>Collaborateur engagé au sein des initiatives technologiques et des programmes de déploiement du groupe BYT3LAB.</p>';
                            }
                            ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- CTA Final -->
    <section class="b-section b-section--tight">
        <div class="b-container">
            <div class="b-cta-band">
                <h2 class="b-title">Rejoignez nos équipes d'ingénieurs</h2>
                <p>Byt3Lab recrute des profils engagés pour construire les technologies de demain en Afrique.</p>
                <div class="b-cta-band__actions">
                    <a href="<?php echo esc_url(home_url('/carriere/')); ?>" class="b-btn b-btn--lg b-btn--on-dark">
                        <span>Voir les postes ouverts</span>
                        <?php echo byt3lab_icon('arrow-right', 18); ?>
                    </a>
                    <a href="<?php echo esc_url(home_url('/equipe/')); ?>" class="b-btn b-btn--lg b-btn--outline-dark">
                        <span>Organisation du groupe</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_template_part('components/footer/footer');
get_footer();
