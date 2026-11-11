<?php
/**
 * Single Template: Membre de l'Équipe BYT3LAB
 * Style : Design System Institutionnel BYT3LAB
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$role         = get_post_meta(get_the_ID(), '_byt3lab_team_role', true) ?: 'Ingénieur';
$dept         = get_post_meta(get_the_ID(), '_byt3lab_team_department', true) ?: 'Direction';
$bio_short    = get_post_meta(get_the_ID(), '_byt3lab_team_bio_short', true);
$linkedin     = get_post_meta(get_the_ID(), '_byt3lab_team_linkedin', true);
$github       = get_post_meta(get_the_ID(), '_byt3lab_team_github', true);
$custom_photo = get_post_meta(get_the_ID(), '_byt3lab_team_photo', true);
$avatar_url   = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : (!empty($custom_photo) ? $custom_photo : '');
?>

<main id="primary" class="site-main">
    <?php get_template_part('components/header/header'); ?>

    <section class="b-section b-section--navy" style="padding: calc(var(--space-2xl) * 1.2) 0 var(--space-xl);">
        <div class="b-container">
            <div style="margin-bottom: var(--space-md);">
                <a href="<?php echo esc_url(home_url('/equipe/')); ?>" style="color: var(--color-cyan); font-family: var(--font-mono); font-size: var(--text-xs); text-decoration: none; display: inline-flex; align-items: center; gap: var(--space-xs);">
                    &larr; Retour à l'équipe
                </a>
            </div>

            <div style="display: flex; gap: var(--space-xs); align-items: center; margin-bottom: var(--space-xs);">
                <span class="b-badge b-badge--dark"><?php echo esc_html($dept); ?></span>
            </div>

            <h1 style="color: var(--color-white); font-size: clamp(2rem, 4vw, 3rem); margin: var(--space-xs) 0 var(--space-xs); letter-spacing: -0.02em;">
                <?php the_title(); ?>
            </h1>

            <div style="font-family: var(--font-mono); font-size: var(--text-sm); color: var(--color-cyan);">
                <?php echo esc_html($role); ?>
            </div>
        </div>
    </section>

    <section class="b-section b-section--light" style="padding: var(--space-2xl) 0;">
        <div class="b-container">
            <div style="display: grid; grid-template-columns: 300px 1fr; gap: var(--space-2xl); align-items: start;">
                
                <!-- Sidebar Photo & Links -->
                <div class="b-card" style="background: #ffffff; padding: var(--space-xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg); text-align: center;">
                    <?php if (!empty($avatar_url)) : ?>
                        <img src="<?php echo esc_url($avatar_url); ?>" alt="<?php the_title_attribute(); ?>" style="width: 160px; height: 160px; border-radius: 50%; object-fit: cover; margin: 0 auto var(--space-md); border: 3px solid var(--color-blue);" />
                    <?php else : ?>
                        <div style="width: 120px; height: 120px; border-radius: 50%; background: var(--color-slate-lightest); color: var(--color-navy); display: flex; align-items: center; justify-content: center; font-size: 3rem; margin: 0 auto var(--space-md);">
                            👤
                        </div>
                    <?php endif; ?>

                    <span class="b-badge b-badge--dark" style="margin-bottom: var(--space-xs);"><?php echo esc_html($dept); ?></span>
                    <h3 style="font-size: var(--text-lg); color: var(--color-navy); margin: 0 0 4px;"><?php the_title(); ?></h3>
                    <div style="font-family: var(--font-mono); font-size: var(--text-xs); color: var(--color-slate-medium); margin-bottom: var(--space-md);"><?php echo esc_html($role); ?></div>

                    <?php if (!empty($linkedin) || !empty($github)) : ?>
                        <div style="display: flex; justify-content: center; gap: var(--space-sm); border-top: 1px solid var(--color-border); padding-top: var(--space-md);">
                            <?php if (!empty($linkedin)) : ?>
                                <a href="<?php echo esc_url($linkedin); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--outline" style="font-size: var(--text-xs); padding: var(--space-xs) var(--space-sm);">
                                    LinkedIn ↗
                                </a>
                            <?php endif; ?>
                            <?php if (!empty($github)) : ?>
                                <a href="<?php echo esc_url($github); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--outline" style="font-size: var(--text-xs); padding: var(--space-xs) var(--space-sm);">
                                    GitHub ↗
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Main Biography -->
                <div class="b-card" style="background: #ffffff; padding: var(--space-2xl); border: 1px solid var(--color-border); border-radius: var(--radius-lg);">
                    <h2 style="font-size: var(--text-xl); color: var(--color-navy); margin-top: 0; margin-bottom: var(--space-md);">
                        Parcours &amp; Responsabilités au sein du Groupe
                    </h2>

                    <?php if (!empty($bio_short)) : ?>
                        <p style="font-size: var(--text-lg); color: var(--color-blue); font-weight: 500; line-height: 1.6; margin-bottom: var(--space-lg);">
                            <?php echo esc_html($bio_short); ?>
                        </p>
                    <?php endif; ?>

                    <div style="font-size: var(--text-md); line-height: 1.8; color: var(--color-slate-dark);">
                        <?php 
                        $content = get_the_content();
                        if (!empty(trim($content))) {
                            the_content();
                        } else {
                            echo '<p>Collaborateur engagé au sein des initiatives technologiques et des programmes de déploiement du groupe BYT3LAB.</p>';
                        }
                        ?>
                    </div>

                    <div style="margin-top: var(--space-2xl); padding-top: var(--space-lg); border-top: 1px solid var(--color-border); display: flex; gap: var(--space-md); flex-wrap: wrap;">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--primary">
                            Prendre contact avec l'équipe
                        </a>
                        <a href="<?php echo esc_url(home_url('/equipe/')); ?>" class="b-btn b-btn--outline">
                            &larr; Tous les membres
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php get_template_part('components/footer/footer'); ?>
</main>

<?php get_footer(); ?>
