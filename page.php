<?php
/**
 * Generic Page Template - BYT3LAB Technology Group
 */
if (!defined('ABSPATH')) {
    exit;
}

global $post;
$slug = isset($post->post_name) ? $post->post_name : '';
$path = get_template_directory() . '/pages/page-' . $slug . '.php';

if (file_exists($path)) {
    include $path;
    return;
}

get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part('components/header/header'); ?>

    <section class="b-section b-section--navy" style="padding: calc(var(--space-2xl) * 1.2) 0 var(--space-xl);">
        <div class="b-container">
            <span class="b-badge b-badge--dark">BYT3LAB // DOCUMENT INSTITUTIONNEL</span>
            <h1 style="color: var(--color-white); font-size: clamp(2rem, 4vw, 3rem); margin-top: var(--space-xs); margin-bottom: 0;">
                <?php the_title(); ?>
            </h1>
        </div>
    </section>

    <section class="b-section b-section--light" style="padding: var(--space-2xl) 0;">
        <div class="b-container">
            <article class="b-card" style="background: #ffffff; padding: clamp(1.5rem, 4vw, 3rem); border-radius: var(--radius-lg); border: 1px solid var(--color-border); line-height: 1.8; color: var(--color-slate-dark); font-size: var(--text-md);">
                <?php
                if (have_posts()) :
                    while (have_posts()) : the_post();
                        the_content();
                    endwhile;
                endif;
                ?>
            </article>
        </div>
    </section>

    <?php get_template_part('components/footer/footer'); ?>
</main>

<?php get_footer(); ?>
