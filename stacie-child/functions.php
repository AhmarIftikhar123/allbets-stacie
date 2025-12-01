<?php

// Register Product CSS
add_action('init', function () {
  // Remove any old FA files to prevent conflict
  wp_dequeue_style('font-awesome');
  wp_deregister_style('font-awesome');

  // Load FA6
  wp_enqueue_style(
    'fa6',
    'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css',
    array(),
    '6.5.0'
  );

  $path = get_stylesheet_directory() . '/assets/ms-product.css';
  if (file_exists($path)) {
    wp_register_style('ms-product-css', get_stylesheet_directory_uri() . '/assets/ms-product.css', [], filemtime($path));
    // Custom script
    wp_enqueue_script(
      'ms-product-expand',
      get_stylesheet_directory_uri() . '/assets/js/ms-product-expand.js',
      array('jquery'),
      '1.0',
      true
    );
  }
});

// Auto-enqueue on product archive pages
add_action('wp_enqueue_scripts', function () {
  if (is_post_type_archive('ms_product') || is_singular('ms_product')) {
    wp_enqueue_style('ms-product-css');
  }
});
// Custom Blog Type Compleate code file
require_once get_stylesheet_directory() . '/functions-append.php';
/** AUTLOADING PRODUCT SYSTEM FILES **/
require_once get_stylesheet_directory() . '/inc/cpt/ms-products-cpt.php';
require_once get_stylesheet_directory() . '/inc/meta/ms-products-meta.php';
require_once get_stylesheet_directory() . '/inc/shortcodes/ms-products-shortcode.php';
