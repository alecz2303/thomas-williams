<?php
/**
 * Template Name: Real Estate
 * Template Post Type: page
 *
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }
get_header();
?>
<main id="primary" class="site-main tw-real-estate-page">
<?php
get_template_part('template-parts/hero/hero', 'real-estate');
get_template_part('template-parts/sections/real-estate/intro');
get_template_part('template-parts/sections/real-estate/listings');
get_template_part('template-parts/sections/real-estate/cta');
?>
</main>
<?php get_footer(); ?>
