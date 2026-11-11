<?php
/**
 * Single Template: Projet Réalisé BYT3LAB
 * Style : Design System Institutionnel BYT3LAB
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();

$category    = get_post_meta(get_the_ID(), '_byt3lab_project_category', true) ?: 'INGÉNIERIE';
$stack       = get_post_meta(get_the_ID(), '_byt3lab_project_stack', true) ?: '';
$impact      = get_post_meta(get_the_ID(), '_byt3lab_project_impact', true);
$url         = get_post_meta(get_the_ID(), '_byt3lab_project_url', true);
$img_url     = has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'large') : (get_post_meta(get_the_ID(), '_byt3lab_project_image', true) ?: '');
$stack_items = !empty($stack) ? array_map('trim', explode('/', $stack)) : [];
?>

<main id="primary" class="site-main">
    <?php get_template_part('components/header/header'); ?>

    <!-- Hero Header -->
    <section class="b-section b-section--navy" style="padding: calc(var(--space-2xl) * 1.2) 0 var(--space-xl);">
        <div class="b-container">
            <div style="margin-bottom: var(--space-md);">
                <a href="<?php echo esc_url(home_url('/realisations/')); ?>" style="color: var(--color-cyan); font-family: var(--font-mono); font-size: var(--text-xs); text-decoration: none; display: inline-flex; align-items: center; gap: var(--space-xs);">
                    &larr; Retour à l'ensemble des réalisations
                </a>
            </div>

            <div style="display: flex; gap: var(--space-xs); align-items: center; flex-wrap: wrap; margin-bottom: var(--space-xs);">
                <span class="b-badge b-badge--dark"><?php echo esc_html($category); ?></span>
                <?php foreach ($stack_items as $st) : if (!empty($st)) : ?>
                    <span class="b-badge b-badge--light"><?php echo esc_html($st); ?></span>
                <?php endif; endforeach; ?>
            </div>

            <h1 style="color: var(--color-white); font-size: clamp(2rem, 4vw, 3rem); margin: var(--space-xs) 0 0; letter-spacing: -0.02em;">
                <?php the_title(); ?>
            </h1>
        </div>
    </section>

    <!-- Main Article -->
    <section class="b-section b-section--light" style="padding: var(--space-2xl) 0;">
        <div class="b-container">
            <article class="b-card" style="background: #ffffff; border: 1px solid var(--color-border); border-radius: var(--radius-lg); padding: clamp(1.5rem, 4vw, 3rem); max-width: 900px; margin: 0 auto;">
                <?php if (!empty($img_url)) : ?>
                    <div style="margin-bottom: var(--space-xl); border-radius: var(--radius-md); overflow: hidden; max-height: 440px; background: var(--color-slate-lightest);">
                        <img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" style="width: 100%; height: 100%; object-fit: cover;" />
                    </div>
                <?php endif; ?>

                <div style="font-size: var(--text-md); line-height: 1.8; color: var(--color-slate-dark); margin-bottom: var(--space-xl);">
                    <?php the_content(); ?>
                </div>

                <?php if (!empty($impact)) : ?>
                    <div style="padding: var(--space-lg); background: var(--color-slate-lightest); border-left: 4px solid var(--color-blue); border-radius: var(--radius-sm); margin-bottom: var(--space-xl);">
                        <strong style="color: var(--color-navy); display: block; margin-bottom: var(--space-xs); font-family: var(--font-mono); font-size: var(--text-xs); text-transform: uppercase;">
                            ⚡ Impact Opérationnel Mesuré :
                        </strong>
                        <p style="margin: 0; color: var(--color-slate-dark); font-size: var(--text-sm); line-height: 1.6;">
                            <?php echo esc_html($impact); ?>
                        </p>
                    </div>
                <?php endif; ?>

                <div style="border-top: 1px solid var(--color-border); padding-top: var(--space-lg); display: flex; gap: var(--space-md); flex-wrap: wrap;">
                    <?php if (!empty($url)) : ?>
                        <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer" class="b-btn b-btn--primary">
                            Consulter la ressource &rarr;
                        </a>
                    <?php endif; ?>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="b-btn b-btn--outline">
                        Échanger sur un projet similaire
                    </a>
                </div>
            </article>
        </div>
    </section>

    <?php get_template_part('components/footer/footer'); ?>
</main>

<?php get_footer(); ?>
