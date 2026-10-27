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
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt', 'page-attributes'],
        'has_archive' => false,
        'rewrite' => ['slug' => 'property', 'with_front' => false],
        'menu_position' => 21,
    ]);
}
add_action('init', 'tw_register_property_post_type');

/**
 * Team members editable from WordPress.
 */
function tw_register_team_member_post_type() {
    register_post_type('tw_team_member', [
        'labels' => [
            'name' => __('Team', 'thomas-williams'),
            'singular_name' => __('Team Member', 'thomas-williams'),
            'add_new_item' => __('Add Team Member', 'thomas-williams'),
            'edit_item' => __('Edit Team Member', 'thomas-williams'),
            'menu_name' => __('Team', 'thomas-williams'),
        ],
        'public' => false,
        'show_ui' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-groups',
        'supports' => ['title', 'thumbnail', 'page-attributes'],
        'menu_position' => 22,
    ]);
}
add_action('init', 'tw_register_team_member_post_type');


/**
 * Refresh rewrite rules once for the TW-10 property routes.
 */
function tw_maybe_flush_property_rewrites() {
    $rewrite_version = 'tw-10-properties-v2';
    if (get_option('tw_rewrite_version') === $rewrite_version) {
        return;
    }
    flush_rewrite_rules(false);
    update_option('tw_rewrite_version', $rewrite_version, false);
}
add_action('init', 'tw_maybe_flush_property_rewrites', 99);
