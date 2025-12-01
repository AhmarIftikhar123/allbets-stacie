<?php
/* META BOXES: External Product Link + Subtitle */

function ms_product_meta_box() {
    // External Link Meta Box
    add_meta_box(
        'ms_product_link',
        'External Product Link',
        'ms_product_link_callback',
        'ms_product',
        'normal',
        'default'
    );
    
    // Subtitle Meta Box
    add_meta_box(
        'ms_product_subtitle',
        'Price / Product Subtitle',
        'ms_product_subtitle_callback',
        'ms_product',
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'ms_product_meta_box');

// External Link Callback
function ms_product_link_callback($post) {
    wp_nonce_field('ms_product_meta_save', 'ms_product_meta_nonce');
    $value = get_post_meta($post->ID, '_ms_product_link', true);
    echo '<label style="font-weight:600;display:block;margin-bottom:6px;">External Link:</label>';
    echo '<input type="url" style="width:100%;padding:8px;border:1px solid #ccd0d4;border-radius:4px;" name="ms_product_link" value="'.esc_attr($value).'" placeholder="https://example.com/product">';
}

// Subtitle Callback
function ms_product_subtitle_callback($post) {
    $value = get_post_meta($post->ID, '_ms_product_subtitle', true);
    echo '<label style="font-weight:600;display:block;margin-bottom:6px;">Subtitle (shown under the title):</label>';
    echo '<input type="text" style="width:100%;padding:8px;border:1px solid #ccd0d4;border-radius:4px;" name="ms_product_subtitle" value="'.esc_attr($value).'" placeholder="e.g., MERCH CONCEPT">';
}

// Save Meta Data
function ms_product_save_meta($post_id) {
    // Security checks
    if (!isset($_POST['ms_product_meta_nonce']) || !wp_verify_nonce($_POST['ms_product_meta_nonce'], 'ms_product_meta_save')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }
    
    // Save External Link
    if (isset($_POST['ms_product_link'])) {
        update_post_meta($post_id, '_ms_product_link', esc_url_raw($_POST['ms_product_link']));
    }
    
    // Save Subtitle
    if (isset($_POST['ms_product_subtitle'])) {
        $subtitle = sanitize_text_field($_POST['ms_product_subtitle']);
        if (!empty($subtitle)) {
            update_post_meta($post_id, '_ms_product_subtitle', $subtitle);
        } else {
            delete_post_meta($post_id, '_ms_product_subtitle');
        }
    }
}
add_action('save_post_ms_product', 'ms_product_save_meta');