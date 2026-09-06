<?php
/**
 * Header principal.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

$transition_logo =
    TW_THEME_URI
    . '/assets/images/branding/tw-logo-white.png';
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>
</head>

<body <?php body_class('tw-page-entering'); ?>>

    <?php wp_body_open(); ?>

    <div class="tw-page-transition" aria-hidden="true">

        <div class="tw-page-transition__content">

            <img
                src="<?php echo esc_url($transition_logo); ?>"
                alt=""
                class="tw-page-transition__logo"
                width="420"
                height="410"
            >

            <span class="tw-page-transition__line"></span>

        </div>

    </div>

    <a
        class="skip-link screen-reader-text"
        href="#primary"
    >
        <?php
        esc_html_e(
            'Skip to content',
            'thomas-williams'
        );
        ?>
    </a>

    <?php
    get_template_part(
        'template-parts/header/site',
        'header'
    );
    ?>