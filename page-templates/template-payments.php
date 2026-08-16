<?php
/**
 * Template Name: Payments
 * Template Post Type: page
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main tw-payments-page">

    <?php
    get_template_part(
        'template-parts/hero/hero',
        'payments'
    );

    get_template_part(
        'template-parts/sections/payments/intro'
    );

    get_template_part(
        'template-parts/sections/payments/payment-options'
    );

    get_template_part(
        'template-parts/sections/payments/help'
    );
    ?>

</main>

<?php
get_footer();