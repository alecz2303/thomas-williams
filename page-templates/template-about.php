<?php
/**
 * Template Name: About
 * Template Post Type: page
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-about-page">

    <?php
    get_template_part(
        'template-parts/hero/hero',
        'about'
    );

    get_template_part(
        'template-parts/sections/about/intro'
    );

    get_template_part(
        'template-parts/sections/about/history'
    );

    get_template_part(
        'template-parts/sections/about/approach'
    );

    get_template_part(
        'template-parts/sections/about/mission'
    );

    get_template_part(
        'template-parts/sections/about/cta'
    );
    ?>

</main>

<?php
get_footer();