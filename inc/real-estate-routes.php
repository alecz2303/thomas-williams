<?php
/**
 * Real Estate bilingual routes. Kept separate from the stable bilingual module.
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }

function tw_real_estate_spanish_rewrite() {
    add_rewrite_rule('^es/bienes-raices/?$', 'index.php?pagename=real-estate&tw_lang=es', 'top');
}
add_action('init', 'tw_real_estate_spanish_rewrite', 20);

function tw_real_estate_translate_menu($items, $args) {
    if (!function_exists('tw_is_spanish') || !tw_is_spanish()) return $items;
    if (empty($args->theme_location) || !in_array($args->theme_location, ['primary','footer'], true)) return $items;
    foreach ($items as $item) {
        $path = wp_parse_url($item->url, PHP_URL_PATH);
        if (is_string($path) && trim($path, '/') === 'real-estate') {
            $item->title = 'Bienes Raíces';
            $item->url = home_url('/es/bienes-raices/');
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'tw_real_estate_translate_menu', 20, 2);

function tw_real_estate_language_url($url, $language) {
    if (!is_page('real-estate')) return $url;
    return home_url($language === 'es' ? '/es/bienes-raices/' : '/real-estate/');
}
add_filter('tw_real_estate_language_url', 'tw_real_estate_language_url', 10, 2);

function tw_real_estate_rewrite_flush_once() {
    if (get_option('tw_real_estate_rewrite_version') === 'v1') return;
    flush_rewrite_rules(false);
    update_option('tw_real_estate_rewrite_version', 'v1', false);
}
add_action('init', 'tw_real_estate_rewrite_flush_once', 99);

/**
 * Spanish single-property URLs use the existing property posts.
 */
function tw_real_estate_property_rewrite() {
    add_rewrite_rule('^es/propiedad/([^/]+)/?$', 'index.php?tw_property=$matches[1]&tw_lang=es', 'top');
}
add_action('init', 'tw_real_estate_property_rewrite', 20);

function tw_real_estate_property_url($post_id, $language = null) {
    $post = get_post($post_id);
    if (!$post || $post->post_type !== 'tw_property') return get_permalink($post_id);
    if ($language === null) $language = tw_is_spanish() ? 'es' : 'en';
    return $language === 'es'
        ? home_url('/es/propiedad/' . $post->post_name . '/')
        : get_permalink($post_id);
}

function tw_real_estate_property_language_switch($url, $language) {
    if (is_singular('tw_property')) {
        return tw_real_estate_property_url(get_queried_object_id(), $language);
    }
    if (is_page('real-estate')) {
        return home_url($language === 'es' ? '/es/bienes-raices/' : '/real-estate/');
    }
    return $url;
}
add_filter('tw_real_estate_language_url', 'tw_real_estate_property_language_switch', 20, 2);

function tw_real_estate_property_document_title($parts) {
    if (tw_is_spanish() && is_singular('tw_property')) {
        $parts['title'] = get_the_title(get_queried_object_id());
    }
    return $parts;
}
add_filter('document_title_parts', 'tw_real_estate_property_document_title', 20);

/** Flush only after the new property rewrite is registered. */
function tw_real_estate_property_flush_once() {
    if (get_option('tw_real_estate_property_rewrite_version') === 'v1') return;
    flush_rewrite_rules(false);
    update_option('tw_real_estate_property_rewrite_version', 'v1', false);
}
add_action('init', 'tw_real_estate_property_flush_once', 100);
