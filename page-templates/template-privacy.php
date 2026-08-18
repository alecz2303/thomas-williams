<?php
/**
 * Template Name: Privacy Policy
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
        'privacy'
    );

    get_template_part(
        'template-parts/sections/legal/privacy-content'
    );
    ?>

</main>

<?php
get_footer();