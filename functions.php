<?php
/**
 * Thomas Williams, CPA, PLLC
 *
 * Archivo principal de inicialización del tema.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

define('TW_THEME_VERSION', '1.0.0');
define('TW_THEME_DIR', get_template_directory());
define('TW_THEME_URI', get_template_directory_uri());

$tw_theme_files = [
    '/inc/setup.php',
    '/inc/theme-support.php',
    '/inc/menus.php',
    '/inc/enqueue.php',
    '/inc/custom-post-types.php',
    '/inc/taxonomies.php',
    '/inc/custom-fields.php',
    '/inc/helpers.php',
    '/inc/security.php',
    '/inc/seo.php',
    '/inc/admin.php',

    // Datos reutilizables.
    '/inc/data/country-calling-codes.php',

    // Procesamiento.
    '/inc/ajax.php',
    '/inc/contact-form.php',
    '/inc/bilingual.php',
    '/inc/site-hardening.php',

    // Integraciones.
    '/inc/integrations/smartvault.php',
    '/inc/integrations/payments.php',
    '/inc/integrations/analytics.php',
    '/inc/integrations/maps.php',
];

foreach ($tw_theme_files as $tw_file) {
    $tw_path = TW_THEME_DIR . $tw_file;

    if (file_exists($tw_path)) {
        require_once $tw_path;
    }
}
