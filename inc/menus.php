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

/**
 * Insert Real Estate immediately before Contact without requiring a manual
 * WordPress menu update.
 */
function tw_add_real_estate_menu_item($items, $args) {
    if (empty($args->theme_location) || !in_array($args->theme_location, ['primary', 'footer'], true)) {
        return $items;
    }

    foreach ($items as $existing) {
        $path = wp_parse_url($existing->url, PHP_URL_PATH);
        if ($path && in_array(trim($path, '/'), ['real-estate', 'es/bienes-raices'], true)) {
            return $items;
        }
    }

    $item = new stdClass();
    $item->ID = -1010;
    $item->db_id = 0;
    $item->menu_item_parent = 0;
    $item->object_id = 0;
    $item->object = 'custom';
    $item->type = 'custom';
    $item->type_label = 'Custom Link';
    $item->title = tw_text('Real Estate', 'Bienes Raíces');
    $item->url = tw_is_spanish() ? home_url('/es/bienes-raices/') : home_url('/real-estate/');
    $item->target = '';
    $item->attr_title = '';
    $item->description = '';
    $item->classes = ['menu-item', 'menu-item-real-estate'];
    $item->xfn = '';
    $item->status = 'publish';
    $item->current = false;
    $item->current_item_ancestor = false;
    $item->current_item_parent = false;

    $position = count($items);
    foreach ($items as $index => $existing) {
        $path = wp_parse_url($existing->url, PHP_URL_PATH);
        $slug = $path ? trim(basename(untrailingslashit($path)), '/') : '';
        if (in_array($slug, ['contact', 'contacto'], true)) {
            $position = $index;
            break;
        }
    }

    array_splice($items, $position, 0, [$item]);
    return $items;
}
add_filter('wp_nav_menu_objects', 'tw_add_real_estate_menu_item', 8, 2);
