<?php
/**
 * Template Name: Contact
 * Template Post Type: page
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-contact-page">

    <?php
    get_template_part(
        'template-parts/hero/hero',
        'contact'
    );

    get_template_part(
        'template-parts/sections/contact/contact-main'
    );

    get_template_part(
        'template-parts/sections/contact/contact-location'
    );

    get_template_part(
        'template-parts/sections/contact/contact-details'
    );

    get_template_part(
        'template-parts/sections/contact/contact-cta'
    );
    ?>

</main>

<?php
get_footer();