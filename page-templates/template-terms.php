<?php
/**
 * Template Name: Terms & Disclaimer
 * Template Post Type: page
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-legal-page">

    <?php
    get_template_part(
        'template-parts/hero/hero',
        'terms'
    );

    get_template_part(
        'template-parts/sections/legal/terms-content'
    );
    ?>

</main>

<?php
get_footer();