<?php
/**
 * Configuración general del tema.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuración inicial del tema.
 */
function tw_theme_setup() {

    /**
     * Traducciones.
     */
    load_theme_textdomain(
        'thomas-williams',
        TW_THEME_DIR . '/languages'
    );

    /**
     * WordPress administrará el <title>.
     */
    add_theme_support('title-tag');

    /**
     * Imágenes destacadas.
     */
    add_theme_support('post-thumbnails');

    /**
     * Feeds automáticos.
     */
    add_theme_support('automatic-feed-links');

    /**
     * HTML5.
     */
    add_theme_support(
        'html5',
        [
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]
    );

    /**
     * Estilos del editor.
     */
    add_theme_support('editor-styles');

    /**
     * Mejor comportamiento responsive
     * para embeds.
     */
    add_theme_support('responsive-embeds');

    /**
     * Alineaciones wide/full de Gutenberg.
     */
    add_theme_support('align-wide');

    /**
     * Logo personalizado.
     */
    add_theme_support(
        'custom-logo',
        [
            'height'      => 160,
            'width'       => 500,
            'flex-height' => true,
            'flex-width'  => true,
        ]
    );

    /**
     * Tamaños de imagen propios.
     */
    add_image_size(
        'tw-service-card',
        800,
        600,
        true
    );

    add_image_size(
        'tw-article-card',
        900,
        600,
        true
    );

    add_image_size(
        'tw-hero',
        1920,
        1080,
        true
    );
}

add_action('after_setup_theme', 'tw_theme_setup');