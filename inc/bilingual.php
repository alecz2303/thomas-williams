<?php
/**
 * Bilingual helpers.
 *
 * English is the default language.
 * Spanish pages are exposed under /es/.
 *
 * @package ThomasWilliams
 */

if (!defined('ABSPATH')) {
    exit;
}


/**
 * ------------------------------------------------------------
 * LANGUAGE CONFIGURATION
 * ------------------------------------------------------------
 */

function tw_get_languages()
{
    return [
        'en' => [
            'label'  => 'EN',
            'locale' => 'en_US',
        ],

        'es' => [
            'label'  => 'ES',
            'locale' => 'es_MX',
        ],
    ];
}


/**
 * Spanish public routes mapped to their
 * equivalent English WordPress page slug.
 */
function tw_get_bilingual_routes()
{
    return [
        'about' => [
            'en' => 'about',
            'es' => 'nosotros',
        ],

        'services' => [
            'en' => 'services',
            'es' => 'servicios',
        ],

        'insights' => [
            'en' => 'insights',
            'es' => 'articulos',
        ],

        'payments' => [
            'en' => 'payments',
            'es' => 'pagos',
        ],

        'contact' => [
            'en' => 'contact',
            'es' => 'contacto',
        ],

        'privacy-policy' => [
            'en' => 'privacy-policy',
            'es' => 'aviso-de-privacidad',
        ],

        'terms-disclaimer' => [
            'en' => 'terms-disclaimer',
            'es' => 'terminos',
        ],
    ];
}


/**
 * ------------------------------------------------------------
 * QUERY VAR
 * ------------------------------------------------------------
 */

function tw_register_language_query_var($vars)
{
    $vars[] = 'tw_lang';

    return $vars;
}

add_filter(
    'query_vars',
    'tw_register_language_query_var'
);


/**
 * ------------------------------------------------------------
 * REWRITE RULES
 * ------------------------------------------------------------
 */

function tw_register_bilingual_rewrites()
{
    /*
     * Spanish homepage.
     */
    add_rewrite_rule(
        '^es/?$',
        'index.php?tw_lang=es',
        'top'
    );


    /*
     * Spanish pages.
     */
    foreach (tw_get_bilingual_routes() as $route) {

        add_rewrite_rule(
            '^es/' . preg_quote($route['es'], '/') . '/?$',
            'index.php?pagename='
                . $route['en']
                . '&tw_lang=es',
            'top'
        );
    }
}

add_action(
    'init',
    'tw_register_bilingual_rewrites'
);


/**
 * ------------------------------------------------------------
 * CURRENT LANGUAGE
 * ------------------------------------------------------------
 */

function tw_current_language()
{
    $language =
        get_query_var('tw_lang');

    if ($language === 'es') {
        return 'es';
    }

    return 'en';
}


/**
 * Convenience helper.
 */
function tw_is_spanish()
{
    return tw_current_language() === 'es';
}


/**
 * ------------------------------------------------------------
 * LANGUAGE URL
 * ------------------------------------------------------------
 */

function tw_get_language_url($language)
{
    $language = $language === 'es'
        ? 'es'
        : 'en';


    /*
     * Homepage.
     */
    if (is_front_page()) {

        return $language === 'es'
            ? home_url('/es/')
            : home_url('/');
    }


    /*
     * Singular pages.
     */
    if (is_page()) {

        $current_slug = get_post_field(
            'post_name',
            get_queried_object_id()
        );

        foreach (tw_get_bilingual_routes() as $route) {

            if ($route['en'] !== $current_slug) {
                continue;
            }

            if ($language === 'es') {

                return home_url(
                    '/es/'
                    . $route['es']
                    . '/'
                );
            }

            return home_url(
                '/'
                . $route['en']
                . '/'
            );
        }
    }


    /*
     * Fallback.
     */
    return $language === 'es'
        ? home_url('/es/')
        : home_url('/');
}


/**
 * ------------------------------------------------------------
 * TRANSLATION HELPER
 * ------------------------------------------------------------
 *
 * Usage:
 *
 * tw_text(
 *     'Start the conversation.',
 *     'Inicia la conversación.'
 * );
 */

function tw_text($english, $spanish)
{
    return tw_is_spanish()
        ? $spanish
        : $english;
}


/**
 * Echo version.
 */
function tw_e($english, $spanish)
{
    echo esc_html(
        tw_text(
            $english,
            $spanish
        )
    );
}


/**
 * ------------------------------------------------------------
 * BODY CLASS
 * ------------------------------------------------------------
 */

function tw_bilingual_body_classes($classes)
{
    $classes[] =
        'tw-lang-' . tw_current_language();

    return $classes;
}

add_filter(
    'body_class',
    'tw_bilingual_body_classes'
);


/**
 * ------------------------------------------------------------
 * HTML LANGUAGE ATTRIBUTE
 * ------------------------------------------------------------
 */

function tw_bilingual_language_attributes($output)
{
    if (!tw_is_spanish()) {
        return $output;
    }

    $output = preg_replace(
        '/lang=("|\')[^"\']+("|\')/',
        'lang="es-MX"',
        $output
    );

    return $output;
}

add_filter(
    'language_attributes',
    'tw_bilingual_language_attributes'
);

/**
 * ------------------------------------------------------------
 * TRANSLATE WORDPRESS MENUS
 * ------------------------------------------------------------
 */

/**
 * Return translated navigation labels.
 *
 * @return array
 */
function tw_get_menu_translations()
{
    return [
        'about' => [
            'label' => 'Nosotros',
            'url'   => '/es/nosotros/',
        ],

        'services' => [
            'label' => 'Servicios',
            'url'   => '/es/servicios/',
        ],

        'insights' => [
            'label' => 'Artículos',
            'url'   => '/es/articulos/',
        ],

        'payments' => [
            'label' => 'Pagos',
            'url'   => '/es/pagos/',
        ],

        'contact' => [
            'label' => 'Contacto',
            'url'   => '/es/contacto/',
        ],

        'privacy-policy' => [
            'label' => 'Aviso de Privacidad',
            'url'   => '/es/aviso-de-privacidad/',
        ],

        'terms-disclaimer' => [
            'label' => 'Términos y Aviso Legal',
            'url'   => '/es/terminos/',
        ],
    ];
}


/**
 * Translate primary, footer and legal menus
 * when viewing the Spanish version.
 *
 * @param array  $items Menu items.
 * @param object $args  Menu arguments.
 *
 * @return array
 */
function tw_translate_menu_items($items, $args)
{
    if (!tw_is_spanish()) {
        return $items;
    }

    $allowed_locations = [
        'primary',
        'footer',
        'legal',
    ];

    if (
        empty($args->theme_location) ||
        !in_array(
            $args->theme_location,
            $allowed_locations,
            true
        )
    ) {
        return $items;
    }

    $translations =
        tw_get_menu_translations();

    foreach ($items as $item) {

        $path = wp_parse_url(
            $item->url,
            PHP_URL_PATH
        );

        if (!$path) {
            continue;
        }

        $slug = trim(
            basename(
                untrailingslashit($path)
            ),
            '/'
        );

        if (
            !isset(
                $translations[$slug]
            )
        ) {
            continue;
        }

        $item->title =
            $translations[$slug]['label'];

        $item->url =
            home_url(
                $translations[$slug]['url']
            );
    }

    return $items;
}

add_filter(
    'wp_nav_menu_objects',
    'tw_translate_menu_items',
    10,
    2
);