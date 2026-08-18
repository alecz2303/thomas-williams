<?php
/**
 * Soporte adicional del tema.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}


/**
 * Ancho máximo del contenido.
 */
function tw_content_width() {

    $GLOBALS['content_width'] = apply_filters(
        'tw_content_width',
        1200
    );
}

add_action(
    'after_setup_theme',
    'tw_content_width',
    0
);


/**
 * Clases adicionales para el body.
 *
 * @param array $classes Clases actuales.
 *
 * @return array
 */
function tw_body_classes($classes) {

    if (is_front_page()) {
        $classes[] = 'tw-home';
    }

    if (is_page()) {
        $classes[] = 'tw-page';
    }

    if (is_single()) {
        $classes[] = 'tw-single';
    }

    if (is_archive()) {
        $classes[] = 'tw-archive';
    }

    if (is_404()) {
        $classes[] = 'tw-error-404';
    }

    return $classes;
}

add_filter(
    'body_class',
    'tw_body_classes'
);


/**
 * Añade estilos del tema al editor.
 */
function tw_add_editor_styles() {

    add_editor_style(
        'assets/css/base.css'
    );
}

add_action(
    'after_setup_theme',
    'tw_add_editor_styles'
);