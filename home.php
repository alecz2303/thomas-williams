<?php
/**
 * Posts index fallback.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-content-index">
    <section class="tw-content-index__hero">
        <div class="tw-container">
            <span class="tw-content-index__eyebrow"><?php tw_e('Insights', 'Artículos'); ?></span>
            <h1><?php tw_e('Latest articles and updates', 'Artículos y novedades recientes'); ?></h1>
        </div>
    </section>

    <section class="tw-content-index__results">
        <div class="tw-container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content/content', 'post'); ?>
                <?php endwhile; ?>

                <?php the_posts_pagination(); ?>
            <?php else : ?>
                <?php get_template_part('template-parts/content/content', 'none'); ?>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
