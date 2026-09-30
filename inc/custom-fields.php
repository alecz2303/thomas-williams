<?php
/**
 * Property administration fields.
 *
 * @package ThomasWilliams
 */
if (!defined('ABSPATH')) { exit; }

function tw_property_meta_fields() {
    return [
        'price' => ['label' => 'Price / Precio', 'type' => 'text'],
        'location' => ['label' => 'Location / Ubicación', 'type' => 'text'],
        'property_type' => ['label' => 'Property type / Tipo', 'type' => 'text'],
        'status' => ['label' => 'Status / Estado', 'type' => 'select'],
        'bedrooms' => ['label' => 'Bedrooms / Recámaras', 'type' => 'number'],
        'bathrooms' => ['label' => 'Bathrooms / Baños', 'type' => 'number'],
        'area' => ['label' => 'Area / Superficie', 'type' => 'text'],
    ];
}
function tw_add_property_meta_box() {
    add_meta_box('tw-property-details', __('Property Details', 'thomas-williams'), 'tw_render_property_meta_box', 'tw_property', 'normal', 'high');
}
add_action('add_meta_boxes', 'tw_add_property_meta_box');

function tw_render_property_meta_box($post) {
    wp_nonce_field('tw_save_property_meta', 'tw_property_nonce');
    echo '<div class="tw-property-admin-grid">';
    foreach (tw_property_meta_fields() as $key => $field) {
        $value = get_post_meta($post->ID, '_tw_property_' . $key, true);
        echo '<p><label for="tw_property_' . esc_attr($key) . '"><strong>' . esc_html($field['label']) . '</strong></label><br>';
        if ($field['type'] === 'select') {
            echo '<select id="tw_property_' . esc_attr($key) . '" name="tw_property_' . esc_attr($key) . '">';
            foreach (['available' => 'Available / Disponible', 'under-contract' => 'Under Contract / Bajo contrato', 'sold' => 'Sold / Vendido'] as $option => $label) {
                echo '<option value="' . esc_attr($option) . '"' . selected($value, $option, false) . '>' . esc_html($label) . '</option>';
            }
            echo '</select>';
        } else {
            echo '<input class="widefat" type="' . esc_attr($field['type']) . '" id="tw_property_' . esc_attr($key) . '" name="tw_property_' . esc_attr($key) . '" value="' . esc_attr($value) . '">';
        }
        echo '</p>';
    }
    echo '</div><p>' . esc_html__('Use the Featured Image for the primary property photograph. Additional media can be added in the content editor.', 'thomas-williams') . '</p>';
}
function tw_save_property_meta($post_id) {
    if (!isset($_POST['tw_property_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['tw_property_nonce'])), 'tw_save_property_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;
    foreach (tw_property_meta_fields() as $key => $field) {
        if (!isset($_POST['tw_property_' . $key])) continue;
        $value = sanitize_text_field(wp_unslash($_POST['tw_property_' . $key]));
        if ($key === 'status' && !in_array($value, ['available','under-contract','sold'], true)) $value = 'available';
        update_post_meta($post_id, '_tw_property_' . $key, $value);
    }
}
add_action('save_post_tw_property', 'tw_save_property_meta');
function tw_get_property_meta($post_id, $key) {
    return get_post_meta($post_id, '_tw_property_' . $key, true);
}


/**
 * Team member administration fields.
 */
function tw_add_team_member_meta_box() {
    add_meta_box(
        'tw-team-member-details',
        'Team Member Details',
        'tw_render_team_member_meta_box',
        'tw_team_member',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'tw_add_team_member_meta_box');

function tw_render_team_member_meta_box($post) {
    wp_nonce_field('tw_save_team_member_meta', 'tw_team_member_nonce');
    $role = get_post_meta($post->ID, '_tw_team_role', true);
    ?>
    <p>
        <label for="tw_team_role"><strong>Position / Puesto</strong></label><br>
        <input class="widefat" type="text" id="tw_team_role" name="tw_team_role" value="<?php echo esc_attr($role); ?>">
    </p>
    <p>Use the Featured Image for the team member photograph. Use the Order field to control display order.</p>
    <?php
}

function tw_save_team_member_meta($post_id) {
    if (!isset($_POST['tw_team_member_nonce'])) return;
    if (!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['tw_team_member_nonce'])), 'tw_save_team_member_meta')) return;
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    if (isset($_POST['tw_team_role'])) {
        $role = sanitize_text_field(wp_unslash($_POST['tw_team_role']));
        update_post_meta($post_id, '_tw_team_role', $role);
    }
}
add_action('save_post_tw_team_member', 'tw_save_team_member_meta');
