<?php
/**
 * 404 Error Template - BYT3LAB Technology Group
 */
if (!defined('ABSPATH')) {
    exit;
}

status_header(404);
get_header();
?>

<main id="primary" class="site-main">
    <?php get_template_part('components/header/header'); ?>
    <?php get_template_part('components/notfound-body/notfound-body'); ?>
    <?php get_template_part('components/footer/footer'); ?>
</main>

<?php get_footer(); ?>
