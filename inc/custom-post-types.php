<?php
/**
 * Custom post types.
 *
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }

function tw_register_property_post_type() {
    register_post_type('tw_property', [
        'labels' => [
            'name' => __('Properties', 'thomas-williams'),
            'singular_name' => __('Property', 'thomas-williams'),
            'add_new_item' => __('Add New Property', 'thomas-williams'),
            'edit_item' => __('Edit Property', 'thomas-williams'),
            'view_item' => __('View Property', 'thomas-williams'),
            'search_items' => __('Search Properties', 'thomas-williams'),
            'not_found' => __('No properties found.', 'thomas-williams'),
            'menu_name' => __('Real Estate', 'thomas-williams'),
        ],
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-building',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'has_archive' => 'real-estate',
        'rewrite' => ['slug' => 'real-estate', 'with_front' => false],
        'menu_position' => 21,
    ]);
}
add_action('init', 'tw_register_property_post_type');
