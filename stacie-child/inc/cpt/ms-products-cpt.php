<?php
/* CUSTOM POST TYPE: ms_product */
function ms_register_products_cpt() {
    register_post_type('ms_product', array(
        'labels' => array(
            'name' => 'Products',
            'singular_name' => 'Product'
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title','thumbnail','editor'),
        'rewrite' => array('slug' => 'products'),
    ));
}
add_action('init','ms_register_products_cpt');
