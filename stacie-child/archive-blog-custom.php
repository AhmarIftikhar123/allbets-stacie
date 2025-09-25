<?php
/**
 * Archive Template for Blog (CPT: blog)
 */
get_header();
?>

<main id="primary" class="site-main ms-blog-archive">

  <?php $featured_id = function_exists('ms_get_featured_blog_post_id') ? ms_get_featured_blog_post_id() : 0; ?>
  <section class="ms-hero">
    <div class="ms-hero-left">
      <?php if (is_active_sidebar('blog-hero-left')) : dynamic_sidebar('blog-hero-left'); else: ?>
        <div class="ms-hero-placeholder">
          <h2>Get the Book!</h2>
          <p>Add a widget to <strong>Appearance → Widgets → Blog Hero Left</strong> to replace this promo block.</p>
          <a class="ms-btn" href="#">Learn More</a>
        </div>
      <?php endif; ?>
    </div>
    <div class="ms-hero-right">
      <?php if ($featured_id): ?>
        <article class="ms-featured">
          <a href="<?php echo esc_url(get_permalink($featured_id)); ?>">
            <?php if (has_post_thumbnail($featured_id)) { echo get_the_post_thumbnail($featured_id, 'blog-hero'); } ?>
          </a>
          <div class="ms-featured-content">
            <h2><a href="<?php echo esc_url(get_permalink($featured_id)); ?>"><?php echo esc_html(get_the_title($featured_id)); ?></a></h2>
            <p class="ms-meta"><?php echo get_the_date('', $featured_id); ?> · <?php echo esc_html(get_the_author_meta('display_name', get_post_field('post_author', $featured_id))); ?></p>
            <p><?php echo esc_html(get_the_excerpt($featured_id)); ?></p>
            <a class="ms-btn" href="<?php echo esc_url(get_permalink($featured_id)); ?>">Read more</a>
          </div>
        </article>
      <?php else: ?>
        <p>No blog posts found.</p>
      <?php endif; ?>
    </div>
  </section>

  <?php
  $paged = max(1, get_query_var('paged') ?: get_query_var('page'));
  $per_page = get_query_var('posts_per_page') ?: 9;
  $args = array(
    'post_type'      => 'blog',
    'post_status'    => 'publish',
    'paged'          => $paged,
    'posts_per_page' => $per_page,
  );
  if ($featured_id) { $args['post__not_in'] = array($featured_id); }
  $loop = new WP_Query($args);
  ?>

  <section class="ms-grid">
    <header class="ms-grid-header"><h2>Latest Articles</h2></header>
    <div class="ms-cards">
      <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
        <?php get_template_part('template-parts/content', 'blog-card'); ?>
      <?php endwhile; wp_reset_postdata(); else: ?>
        <p>No posts yet.</p>
      <?php endif; ?>
    </div>

    <?php
    $big = 999999999;
    $links = paginate_links(array(
      'base'      => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
      'format'    => '?paged=%#%',
      'current'   => max(1, $paged),
      'total'     => $loop->max_num_pages,
      'prev_text' => '&larr; Previous',
      'next_text' => 'Next &rarr;',
      'type'      => 'list'
    ));
    if ($links) : ?>
      <nav class="ms-pagination"><?php echo $links; ?></nav>
    <?php endif; ?>
  </section>

</main>

<?php get_footer(); ?>
