<?php
/* SHORTCODE: [product_grid] */

function ms_product_grid_shortcode($atts)
{
  // Enqueue blog CSS for consistent styling
  if (wp_style_is('ms-blog-css', 'registered')) {
    wp_enqueue_style('ms-blog-css');
  }

  // Enqueue product-specific CSS
  if (wp_style_is('ms-product-css', 'registered')) {
    wp_enqueue_style('ms-product-css');
  }

  $a = shortcode_atts(array(
    'count'   => 6,
    'columns' => 3,
    'paged'   => 'true',
  ), $atts);

  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

  $args = array(
    'post_type'      => 'ms_product',
    'posts_per_page' => intval($a['count']),
    'paged'          => $paged,
  );

  $q = new WP_Query($args);

  ob_start();

  // Check if there are products
  if ($q->have_posts()) {
    echo '<div class="ms-cards ms-cols-' . esc_attr($a['columns']) . '">';

    while ($q->have_posts()) : $q->the_post();
      // Fixed template path to match your file structure
      $template = locate_template('template-parts/products/content-product-card.php');
      if ($template) {
        get_template_part('template-parts/products/content', 'product-card');
      } else {
        // Fallback inline card if template not found
        $link = get_post_meta(get_the_ID(), '_ms_product_link', true);
?>
        <div class="ms-card">
          <a href="<?php echo esc_url($link ?: '#'); ?>" target="_blank" class="ms-thumb">
            <?php if (has_post_thumbnail()) {
              the_post_thumbnail('medium');
            } else {
              echo '<div class="ms-thumb-placeholder"></div>';
            } ?>
          </a>
          <div class="ms-card-body">
            <h3 class="ms-card-title">
              <a href="<?php echo esc_url($link ?: '#'); ?>" target="_blank">
                <?php the_title(); ?>
              </a>
            </h3>
            <p class="ms-card-excerpt">
              <?php echo esc_html(wp_trim_words(get_the_content(), 20)); ?>
            </p>
            <a href="<?php echo esc_url($link ?: '#'); ?>" target="_blank" class="ms-btn">
              View Product
            </a>
          </div>
        </div>
<?php
      }
    endwhile;

    echo '</div>';

    // Pagination with same style as blog
    if ($a['paged'] === 'true' && $q->max_num_pages > 1) {

      $big = 999999999;

      $links = paginate_links(array(
        'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'    => '?paged=%#%',
        'current'   => max(1, $paged),
        'total'     => $q->max_num_pages,

        // Font Awesome Previous & Next
        'prev_text' => '<i class="fa-solid fa-chevron-left"></i>',
        'next_text' => '<i class="fa-solid fa-chevron-right"></i>',

        'type'      => 'list'
      ));

      if ($links) {
        echo '<nav class="ms-pagination">' . $links . '</nav>';
      }
    }
  } else {
    // No products found message
    echo '<div class="ms-cards"><p>No products found.</p></div>';
  }

  wp_reset_postdata();
  return ob_get_clean();
}
add_shortcode('product_grid', 'ms_product_grid_shortcode');
