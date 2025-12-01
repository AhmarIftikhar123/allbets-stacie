<?php

/**
 * Blog Custom Post Type + Templates Helpers
 * Drop this snippet into your theme's functions.php (or include it).
 */

// 1) Register "blog" Custom Post Type
add_action('init', function () {
    $labels = array(
        'name'               => _x('Blogs', 'post type general name'),
        'singular_name'      => _x('Blog', 'post type singular name'),
        'menu_name'          => _x('Blogs', 'admin menu'),
        'name_admin_bar'     => _x('Blog', 'add new on admin bar'),
        'add_new'            => _x('Add New', 'blog'),
        'add_new_item'       => __('Add New Blog'),
        'new_item'           => __('New Blog'),
        'edit_item'          => __('Edit Blog'),
        'view_item'          => __('View Blog'),
        'all_items'          => __('All Blogs'),
        'search_items'       => __('Search Blogs'),
        'not_found'          => __('No blogs found.'),
        'not_found_in_trash' => __('No blogs found in Trash.')
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'show_in_rest'       => true,
        'menu_icon'          => 'dashicons-welcome-write-blog',
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt', 'author', 'revisions', 'comments'),
        'has_archive'        => true,
        'rewrite'            => array('slug' => 'blog', 'with_front' => false),
        'taxonomies'         => array('post_tag'),
    );
    register_post_type('blog', $args);

    register_taxonomy('blog_category', ['blog'], array(
        'label'        => __('Blog Categories'),
        'hierarchical' => true,
        'show_in_rest' => true,
        'rewrite'      => array('slug' => 'blog-category')
    ));
});

add_action('after_setup_theme', function () {
    add_image_size('blog-card', 720, 480, true);
    add_image_size('blog-hero', 1280, 720, true);
});

add_action('widgets_init', function () {
    register_sidebar(array(
        'name'          => __('Blog Hero Left'),
        'id'            => 'blog-hero-left',
        'description'   => __('Appears in the hero left column on the blog archive. Add an image/text/HTML.'),
        'before_widget' => '<div class="widget blog-hero-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
});

add_action('wp_enqueue_scripts', function () {
    if (is_post_type_archive('blog') || is_singular('blog')) {
        wp_enqueue_style('ms-blog', get_stylesheet_directory_uri() . '/assets/blog.css', [], '1.0');
    }
});

function ms_get_featured_blog_post_id()
{
    $q = new WP_Query(array(
        'post_type'      => 'blog',
        'post_status'    => 'publish',
        'meta_key'       => 'ms_featured',
        'meta_value'     => '1',
        'posts_per_page' => 1
    ));
    if ($q->have_posts()) {
        $q->the_post();
        $id = get_the_ID();
        wp_reset_postdata();
        return $id;
    }
    $q = new WP_Query(array(
        'post_type'      => 'blog',
        'post_status'    => 'publish',
        'posts_per_page' => 1
    ));
    if ($q->have_posts()) {
        $q->the_post();
        $id = get_the_ID();
        wp_reset_postdata();
        return $id;
    }
    return 0;
}

// === Shortcode: [blog_grid] ===
// Usage examples:
// [blog_grid]                              -> default 6 posts, 3 columns
// [blog_grid count="9" columns="3"]        -> 9 posts, 3 columns
// [blog_grid category="news"]              -> only 'news' category (slug) from blog_category taxonomy
// [blog_grid featured_only="1"]            -> only posts with ms_featured=1
// [blog_grid orderby="date" order="DESC"]  -> ordering control
// Register CSS if not already
add_action('init', function () {
    $path = get_stylesheet_directory() . '/assets/blog.css';
    if (file_exists($path)) {
        wp_register_style('ms-blog-css', get_stylesheet_directory_uri() . '/assets/blog.css', [], filemtime($path));
    }
});

/**
 * Shortcode: [blog_grid]
 * Examples:
 * [blog_grid paginate="1" count="3" columns="1"]
 * [blog_grid paginate="1" count="6" columns="3" category="news"]
 */
function ms_blog_grid_shortcode_paged($atts = [])
{
    if (wp_style_is('ms-blog-css', 'registered')) {
        wp_enqueue_style('ms-blog-css');
    }

    $a = shortcode_atts([
        'count'         => 6,           // posts per page
        'columns'       => 3,           // 1-4
        'category'      => '',          // blog_category slug
        'featured_only' => '0',         // 1 = only ms_featured=1
        'orderby'       => 'date',
        'order'         => 'DESC',
        'paginate'      => '0',         // 1 = show pagination
        'query_arg'     => 'bg',        // querystring key prefix to avoid clashes
    ], $atts, 'blog_grid');

    $paginate = $a['paginate'] === '1';

    // figure out current page (works inside pages too)
    $page_param = sanitize_key($a['query_arg']) . '_page';
    $page = 1;
    if (isset($_GET[$page_param])) {
        $page = max(1, intval($_GET[$page_param]));
    } else {
        $page = max(1, get_query_var('paged') ? intval(get_query_var('paged')) : (get_query_var('page') ? intval(get_query_var('page')) : 1));
    }

    $args = [
        'post_type'      => 'blog',
        'posts_per_page' => intval($a['count']),
        'orderby'        => sanitize_key($a['orderby']),
        'order'          => ($a['order'] === 'ASC') ? 'ASC' : 'DESC',
        'paged'          => $paginate ? $page : 1,
        'no_found_rows'  => $paginate ? false : true,
        'meta_query'     => [],
        'tax_query'      => [],
    ];

    if ($a['featured_only'] === '1') {
        $args['meta_query'][] = ['key' => 'ms_featured', 'value' => '1', 'compare' => '='];
    }
    if (!empty($a['category'])) {
        $args['tax_query'][] = [
            'taxonomy' => 'blog_category',
            'field'    => 'slug',
            'terms'    => sanitize_title($a['category']),
        ];
    }

    $q = new WP_Query($args);
    if (!$q->have_posts()) {
        return '<div class="ms-cards"><p>No articles found.</p></div>';
    }

    $cols = (int)$a['columns'];
    if ($cols < 1 || $cols > 4) $cols = 3;
    $grid_class = 'ms-cards ms-cols-' . $cols;

    ob_start();
    echo '<div class="' . esc_attr($grid_class) . '">';
    while ($q->have_posts()) {
        $q->the_post();
        $tpl = locate_template('template-parts/content-blog-card.php');
        if ($tpl) {
            get_template_part('template-parts/content', 'blog-card');
        } else { ?>
            <article class="ms-card">
                <a class="ms-thumb" href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) the_post_thumbnail('medium_large', ['loading' => 'lazy']); ?>
                </a>
                <div class="ms-card-body">
                    <div class="ms-meta"><?php echo esc_html(get_the_date()); ?></div>
                    <h3 class="ms-card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="ms-excerpt"><?php echo esc_html(wp_trim_words(get_the_excerpt(), 22)); ?></p>
                </div>
            </article>
    <?php }
    }
    echo '</div>';

    // Pagination
    if ($paginate) {
        $total = (int)$q->max_num_pages;
        if ($total > 1) {
            // Build base URL with custom page param
            $base = remove_query_arg($page_param);
            $base = add_query_arg($page_param, '%#%', $base);

            $links = paginate_links([
                'base'      => $base,
                'format'    => '', // we’re using custom query arg
                'current'   => $page,
                'total'     => $total,
                'mid_size'  => 1,
                'end_size'  => 1,
                'prev_text' => '&laquo;',
                'next_text' => '&raquo;',
                'type'      => 'array',
            ]);

            if ($links) {
                echo '<nav class="ms-pagination" aria-label="Pagination"><ul>';
                foreach ($links as $li) {
                    // add class for current page
                    $is_current = strpos($li, 'current') !== false;
                    echo '<li class="' . ($is_current ? 'is-current' : '') . '">' . $li . '</li>';
                }
                echo '</ul></nav>';
            }
        }
    }

    wp_reset_postdata();
    return ob_get_clean();
}
add_shortcode('blog_grid', 'ms_blog_grid_shortcode_paged');

// --- Register CSS for CTA banner ---
add_action('init', function () {
    $css = get_stylesheet_directory() . '/assets/ms-cta.css';
    if (file_exists($css)) {
        wp_register_style('ms-cta-css', get_stylesheet_directory_uri() . '/assets/ms-cta.css', [], filemtime($css));
    }
});

// --- Shortcode: [ms_cta] ---
/*
Usage examples:

[ms_cta
  title1="ACT LIKE A"
  title1_accent="LADY"
  title2="BET BETTER THAN A"
  title2_accent="MAN!"
  desc="Discover the empowering insights behind Act Like a Lady, Bet Better Than a Man..."
  btn_text="Get Started"
  btn_url="#"
  img_id="123"
  img_pos="left"   (left|right|none)
]

Tip: Media → upload ball image, note its ID, use as img_id.
*/
function ms_cta_shortcode($atts = [], $content = null)
{
    if (wp_style_is('ms-cta-css', 'registered')) wp_enqueue_style('ms-cta-css');

    $a = shortcode_atts([
        'title1'        => 'ACT LIKE A',
        'title1_accent' => 'LADY',
        'title2'        => 'BET BETTER THAN A',
        'title2_accent' => 'MAN!',
        'desc'          => '',
        'btn_text'      => 'Get Started',
        'btn_url'       => '#',
        'img_id'        => '',
        'img_pos'       => 'left', // left|right|none
    ], $atts, 'ms_cta');

    $img_html = '';
    if ($a['img_id']) {
        $img_html = wp_get_attachment_image(intval($a['img_id']), 'medium', false, ['class' => 'ms-cta-img']);
    }

    ob_start(); ?>
    <section class="ms-cta">
        <?php if ($a['img_pos'] === 'left' && $img_html) : ?>
            <div class="ms-cta-media"><?php echo $img_html; ?></div>
        <?php endif; ?>

        <div class="ms-cta-body">
            <h2 class="ms-cta-head">
                <span><?php echo esc_html($a['title1']); ?> <span class="ms-accent"><?php echo esc_html($a['title1_accent']); ?></span></span>
                <br>
                <span><?php echo esc_html($a['title2']); ?> <span class="ms-accent"><?php echo esc_html($a['title2_accent']); ?></span></span>
            </h2>

            <?php
            $desc = $a['desc'];
            if ($content && trim($content) !== '') {
                // Allow using shortcode content as description (supports basic links)
                $desc = do_shortcode(wp_kses_post($content));
            }
            if ($desc) : ?>
                <p class="ms-cta-desc"><?php echo $desc; ?></p>
            <?php endif; ?>

            <?php if (!empty($a['btn_text'])) : ?>
                <p><a class="ms-cta-btn" href="<?php echo esc_url($a['btn_url']); ?>"><?php echo esc_html($a['btn_text']); ?></a></p>
            <?php endif; ?>
        </div>

        <?php if ($a['img_pos'] === 'right' && $img_html) : ?>
            <div class="ms-cta-media"><?php echo $img_html; ?></div>
        <?php endif; ?>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('ms_cta', 'ms_cta_shortcode');

//--------------- Add Sedtion for Subtitle of the CPT: blog ---------------
/**
 * Ensure CPT 'blog' supports custom fields (just in case).
 */
add_action('init', function () {
    add_post_type_support('blog', 'custom-fields');
});

/**
 * Add a clean "Subtitle" meta box for CPT: blog
 * Stores value in post meta key: ms_subtitle
 */
add_action('add_meta_boxes', function () {
    add_meta_box(
        'ms_subtitle_box',
        __('Subtitle', 'your-textdomain'),
        function ($post) {
            $value = get_post_meta($post->ID, 'ms_subtitle', true);
            wp_nonce_field('ms_subtitle_save', 'ms_subtitle_nonce');
    ?>
        <p>
            <label for="ms_subtitle_input" style="font-weight:600;display:block;margin-bottom:6px;">
                <?php _e('Subtitle (shown under the title)', 'your-textdomain'); ?>
            </label>
            <input type="text" id="ms_subtitle_input" name="ms_subtitle"
                value="<?php echo esc_attr($value); ?>"
                style="width:100%;max-width:800px;padding:8px;border:1px solid #ccd0d4;border-radius:4px;">
        </p>
<?php
        },
        'blog',            // post type
        'normal',          // context
        'default'          // priority
    );
});

/**
 * Save the subtitle
 */
add_action('save_post_blog', function ($post_id) {
    if (!isset($_POST['ms_subtitle_nonce']) || !wp_verify_nonce($_POST['ms_subtitle_nonce'], 'ms_subtitle_save')) {
        return;
    }
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $val = isset($_POST['ms_subtitle']) ? wp_strip_all_tags(wp_unslash($_POST['ms_subtitle'])) : '';
    if ($val === '') {
        delete_post_meta($post_id, 'ms_subtitle');
    } else {
        update_post_meta($post_id, 'ms_subtitle', $val);
    }
});


?>