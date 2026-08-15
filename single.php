<?php
/**
 * Single post template.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-single-insight">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part(
            'template-parts/single/article-hero'
        );

        get_template_part(
            'template-parts/single/article-content'
        );

        get_template_part(
            'template-parts/single/article-cta'
        );

    endwhile;
    ?>

</main>

<?php
get_footer();