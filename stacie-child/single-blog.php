<?php
/**
 * Single Template for Blog (CPT: blog)
 * Layout: HERO (featured image) on top, then Title, Subtitle, Meta, then Content.
 */
get_header();
?>
<main id="primary" class="site-main ms-blog-single mt-0 p-0">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php $ms_subtitle = get_post_meta( get_the_ID(), 'ms_subtitle', true ); ?>

    <article id="post-<?php the_ID(); ?>" <?php post_class('ms-article'); ?>>

      <?php if ( has_post_thumbnail() ) : ?>
        <div class="ms-hero-image">
          <?php
          // If you registered 'blog-hero' size use it, otherwise fallback to 'large'
          if ( function_exists('has_image_size') && has_image_size('blog-hero') ) {
            the_post_thumbnail('blog-hero', ['class' => 'ms-hero-img', 'loading' => 'eager']);
          } else {
            the_post_thumbnail('large', ['class' => 'ms-hero-img', 'loading' => 'eager']);
          }
          ?>
        </div>
      <?php endif; ?>

      <header class="ms-article-header">
        <h1 class="ms-title mx-0"><?php the_title(); ?></h1>

        <?php if ( ! empty( $ms_subtitle ) ) : ?>
          <p class="ms-subtitle"><?php echo esc_html( $ms_subtitle ); ?></p>
        <?php endif; ?>

        <p class="ms-meta">
          <time datetime="<?php echo esc_attr( get_the_date('c') ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
          <span class="ms-dot">·</span>
          <span class="ms-author"><?php the_author(); ?></span>
        </p>
      </header>

      <div class="ms-content">
        <?php the_content(); ?>
      </div>

      <footer class="ms-article-footer">
        <div class="ms-tags">
          <?php the_terms( get_the_ID(), 'blog_category', '<span>Categories: </span>', ', ' ); ?>
          <?php the_tags( '<span>Tags: </span>', ', ' ); ?>
        </div>
        <nav class="ms-post-nav">
          <div class="ms-prev"><?php previous_post_link('%link', '&larr; %title', true, '', 'blog_category'); ?></div>
          <div class="ms-next"><?php next_post_link('%link', '%title &rarr;', true, '', 'blog_category'); ?></div>
        </nav>
      </footer>
    </article>

    <?php
    // Related (same category)
    $cats = wp_get_post_terms( get_the_ID(), 'blog_category', ['fields' => 'ids'] );
    if ( ! empty( $cats ) ) {
      $rel = new WP_Query([
        'post_type'      => 'blog',
        'post_status'    => 'publish',
        'posts_per_page' => 3,
        'post__not_in'   => [ get_the_ID() ],
        'tax_query'      => [[
          'taxonomy' => 'blog_category',
          'field'    => 'term_id',
          'terms'    => $cats
        ]],
        'no_found_rows'  => true,
      ]);
      if ( $rel->have_posts() ) : ?>
        <section class="ms-related">
          <h3>Related Articles</h3>
          <div class="ms-cards">
            <?php while ( $rel->have_posts() ) : $rel->the_post();
              get_template_part('template-parts/content', 'blog-card');
            endwhile; wp_reset_postdata(); ?>
          </div>
        </section>
      <?php endif; } ?>

  <?php endwhile; endif; ?>
</main>
<?php get_footer(); ?>
