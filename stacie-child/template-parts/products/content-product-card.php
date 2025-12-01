<?php

/**
 * Product Card Template - Minimal Clean Design
 * Layout: Image → Title → Subtitle → Description + Arrow Link
 */
$link = get_post_meta(get_the_ID(), '_ms_product_link', true);
$subtitle = get_post_meta(get_the_ID(), '_ms_product_subtitle', true);
?>

<article id="product-<?php the_ID(); ?>" <?php post_class('ms-product-card'); ?>>

  <!-- Product Image -->
  <a href="<?php echo esc_url($link ?: '#'); ?>" target="_blank" class="ms-product-image">
    <?php if (has_post_thumbnail()) {
      the_post_thumbnail('blog-card');
    } else {
      echo '<div class="ms-product-placeholder"></div>';
    } ?>
  </a>

  <!-- Content -->

  <div class="ms-product-content">

    <!-- Title -->
    <h3 class="ms-product-title">
      <?php the_title(); ?>
    </h3>

    <!-- Subtitle (small text) -->
    <?php if (!empty($subtitle)) : ?>
      <p class="ms-product-subtitle"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>

    <!-- Description with Arrow Link -->
    <div class="ms-product-footer">
      <p class="ms-product-desc collapsed">
        <?php echo esc_html(strip_tags(get_the_content())); ?>
      </p>

      <!-- Expand Button -->
      <button class="ms-product-toggle" aria-label="Expand Description">
        <i class="fa fa-chevron-down"></i>
      </button>
      <a href="<?php echo esc_url($link ?: '#'); ?>" target="_blank" class="ms-product-arrow" aria-label="View Product">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
          <path d="M7 17L17 7M17 7H7M17 7V17" />
        </svg>
      </a>
    </div>

  </div>

</article>