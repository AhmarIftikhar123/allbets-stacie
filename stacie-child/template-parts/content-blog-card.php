<?php
/**
 * Blog Card (used in archive and related)
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('ms-card'); ?>>
  <a class="ms-thumb" href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()) {
        the_post_thumbnail('blog-card');
      } else {
        echo '<div class="ms-thumb-placeholder"></div>';
      }
    ?>
  </a>
  <div class="ms-card-body">
    <div class="ms-card-cats">
      <?php the_terms(get_the_ID(), 'blog_category', '', ' · '); ?>
    </div>
    <h3 class="ms-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <p class="ms-card-excerpt"><?php echo esc_html( wp_trim_words(get_the_excerpt() ?: wp_strip_all_tags(get_the_content()), 22) ); ?></p>
    <p class="ms-card-meta"><?php echo get_the_date(); ?> · <?php the_author(); ?></p>
  </div>
</article>
