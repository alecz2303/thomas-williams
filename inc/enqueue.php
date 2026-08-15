<?php
/**
 * Carga de estilos y scripts.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Obtiene una versión basada en la fecha de modificación
 * durante el desarrollo.
 *
 * Esto evita problemas de caché.
 */
function tw_asset_version($relative_path) {

    $file = TW_THEME_DIR . $relative_path;

    if (file_exists($file)) {
        return (string) filemtime($file);
    }

    return TW_THEME_VERSION;
}

/**
 * Cargar assets públicos.
 */
function tw_enqueue_assets() {

    /*
     * ========================================================
     * CSS
     * ========================================================
     */

    wp_enqueue_style(
        'tw-base',
        TW_THEME_URI . '/assets/css/base.css',
        [],
        tw_asset_version('/assets/css/base.css')
    );

    wp_enqueue_style(
        'tw-layout',
        TW_THEME_URI . '/assets/css/layout.css',
        ['tw-base'],
        tw_asset_version('/assets/css/layout.css')
    );

    wp_enqueue_style(
        'tw-components',
        TW_THEME_URI . '/assets/css/components.css',
        ['tw-layout'],
        tw_asset_version('/assets/css/components.css')
    );

    wp_enqueue_style(
        'tw-utilities',
        TW_THEME_URI . '/assets/css/utilities.css',
        ['tw-components'],
        tw_asset_version('/assets/css/utilities.css')
    );

    wp_enqueue_style(
        'tw-responsive',
        TW_THEME_URI . '/assets/css/responsive.css',
        ['tw-utilities'],
        tw_asset_version('/assets/css/responsive.css')
    );

    /*
     * ========================================================
     * JAVASCRIPT
     * ========================================================
     */

    wp_enqueue_script(
        'tw-navigation',
        TW_THEME_URI . '/assets/js/navigation.js',
        [],
        tw_asset_version('/assets/js/navigation.js'),
        true
    );

    wp_enqueue_script(
        'tw-animations',
        TW_THEME_URI . '/assets/js/animations.js',
        [],
        tw_asset_version('/assets/js/animations.js'),
        true
    );

    wp_enqueue_script(
        'tw-forms',
        TW_THEME_URI . '/assets/js/forms.js',
        [],
        tw_asset_version('/assets/js/forms.js'),
        true
    );

    wp_enqueue_script(
        'tw-main',
        TW_THEME_URI . '/assets/js/main.js',
        [
            'tw-navigation',
            'tw-animations',
        ],
        tw_asset_version('/assets/js/main.js'),
        true
    );

    /**
     * Variables disponibles para JavaScript.
     */
    wp_localize_script(
        'tw-main',
        'twTheme',
        [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'homeUrl' => home_url('/'),
            'themeUrl' => TW_THEME_URI,
            'language' => get_locale(),
        ]
    );
}

add_action('wp_enqueue_scripts', 'tw_enqueue_assets');

/**
 * Cargar estilos exclusivos del administrador.
 */
function tw_enqueue_admin_assets() {

    $admin_css = TW_THEME_DIR . '/assets/css/admin.css';

    if (!file_exists($admin_css)) {
        return;
    }

    wp_enqueue_style(
        'tw-admin',
        TW_THEME_URI . '/assets/css/admin.css',
        [],
        tw_asset_version('/assets/css/admin.css')
    );
}

add_action('admin_enqueue_scripts', 'tw_enqueue_admin_assets');