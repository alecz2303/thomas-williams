<?php
/**
 * Front Page.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<main id="primary" class="site-main">

    <?php
    get_template_part('template-parts/hero/hero', 'home');
    get_template_part('template-parts/sections/home', 'intro');
    get_template_part('template-parts/sections/home', 'services');
    get_template_part('template-parts/sections/home', 'international');
    get_template_part('template-parts/sections/home', 'client-access');
    get_template_part('template-parts/sections/home', 'contact-cta');
    ?>

</main>

<?php
get_footer();
