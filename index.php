<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_excerpt(); ?></div>
        </article>
        <hr>
    <?php endwhile; ?>

    <div class="navigation">
        <?php the_posts_pagination(); ?>
    </div>

<?php else : ?>
    <p>Aucun contenu trouvé.</p>
<?php endif; ?>

<?php get_footer(); ?>
