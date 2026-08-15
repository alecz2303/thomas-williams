<?php
/**
 * Menús del tema.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Registrar ubicaciones de menú.
 */
function tw_register_menus() {

    register_nav_menus(
        [
            'primary' => __('Menú principal', 'thomas-williams'),
            'footer'  => __('Menú del footer', 'thomas-williams'),
            'legal'   => __('Menú legal', 'thomas-williams'),
        ]
    );
}

add_action('after_setup_theme', 'tw_register_menus');