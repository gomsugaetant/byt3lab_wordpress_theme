<?php
/*
Template Name: ngrafix
Description: Studio Créatif NGRAFIX — Identité de marque, design & communication
*/
if (!defined('ABSPATH')) {
    exit;
}

$path = get_template_directory() . '/page-ngrafix.php';
if (file_exists($path)) {
    include $path;
} else {
    get_header();
    get_template_part('components/header/header');
    echo '<main id="primary" class="site-main"><div class="b-container b-section">';
    if (have_posts()) : while (have_posts()) : the_post(); the_content(); endwhile; endif;
    echo '</div></main>';
    get_template_part('components/footer/footer');
    get_footer();
}
