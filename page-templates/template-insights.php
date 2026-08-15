<?php
/**
 * Template Name: Insights
 * Template Post Type: page
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-insights-page">

    <?php
    get_template_part(
        'template-parts/hero/hero',
        'insights'
    );

    get_template_part(
        'template-parts/sections/insights/featured'
    );

    get_template_part(
        'template-parts/sections/insights/latest'
    );

    get_template_part(
        'template-parts/sections/insights/cta'
    );
    ?>

</main>

<?php
get_footer();