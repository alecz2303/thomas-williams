<?php
/**
 * Site-wide production hardening helpers.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Preserve Spanish context for requests under /es/ even when the requested
 * path is not one of the explicit rewrite routes (for example Spanish 404s).
 */
function tw_harden_spanish_request_context($query_vars)
{
    if (!empty($query_vars['tw_lang'])) {
        return $query_vars;
    }

    $request_uri = isset($_SERVER['REQUEST_URI'])
        ? wp_unslash($_SERVER['REQUEST_URI'])
        : '';

    $path = wp_parse_url($request_uri, PHP_URL_PATH);

    if (is_string($path) && preg_match('#^/es(?:/|$)#i', $path)) {
        $query_vars['tw_lang'] = 'es';
    }

    return $query_vars;
}
add_filter('request', 'tw_harden_spanish_request_context', 1);

/**
 * Translate WordPress document-title labels for public Spanish routes.
 */
function tw_harden_document_title_parts($parts)
{
    if (!tw_is_spanish()) {
        return $parts;
    }

    if (is_front_page()) {
        $parts['title'] = 'Contabilidad, Impuestos y Asesoría';
        return $parts;
    }

    if (is_404()) {
        $parts['title'] = 'Página no encontrada';
        return $parts;
    }

    if (is_search()) {
        $parts['title'] = sprintf('Resultados para “%s”', get_search_query());
        return $parts;
    }

    if (is_page()) {
        $slug = get_post_field('post_name', get_queried_object_id());
        $titles = [
            'about' => 'Nosotros',
            'services' => 'Servicios',
            'insights' => 'Artículos',
            'payments' => 'Pagos',
            'contact' => 'Contacto',
            'privacy-policy' => 'Aviso de Privacidad',
            'terms-disclaimer' => 'Términos y Aviso Legal',
        ];

        if (isset($titles[$slug])) {
            $parts['title'] = $titles[$slug];
        }
    }

    return $parts;
}
add_filter('document_title_parts', 'tw_harden_document_title_parts');
