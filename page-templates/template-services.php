<?php
/**
 * Template Name: Services
 * Template Post Type: page
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-services-page">

    <?php
    get_template_part(
        'template-parts/hero/hero',
        'services'
    );

    get_template_part(
        'template-parts/sections/services/intro'
    );

    get_template_part(
        'template-parts/sections/services/compliance'
    );

    get_template_part(
        'template-parts/sections/services/business-individuals'
    );

    get_template_part(
        'template-parts/sections/services/real-estate'
    );

    get_template_part(
        'template-parts/sections/services/international'
    );

    get_template_part(
        'template-parts/sections/services/cta'
    );
    ?>

</main>

<?php
get_footer();