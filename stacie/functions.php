<?php
/**
 * stacie functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package stacie
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'stacie_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stacie_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on stacie, use a find and replace
		 * to change 'stacie' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'stacie', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary 1', 'stacie' ),
				'menu-2' => esc_html__( 'Primary 2', 'stacie' ),
				'menu-3' => esc_html__( 'Primary 3', 'stacie' ),
				'menu-4' => esc_html__( 'how to bet', 'stacie' ),
				'menu-5' => esc_html__( 'About all Bets', 'stacie' ),
			
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'stacie_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'stacie_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stacie_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stacie_content_width', 640 );
}
add_action( 'after_setup_theme', 'stacie_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stacie_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'stacie' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'stacie' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'press release sidebar', 'stacie' ),
			'id'            => 'press_release_sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'stacie' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'all bets category', 'stacie' ),
			'id'            => 'all_bets_category',
			'description'   => esc_html__( 'Add widgets here.', 'stacie' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog archieve', 'stacie' ),
			'id'            => 'blog_archieve',
			'description'   => esc_html__( 'Add widgets here.', 'stacie' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'stacie_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stacie_scripts() {
	wp_enqueue_style( 'stacie-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'stacie-style', 'rtl', 'replace' );

	wp_enqueue_script( 'stacie-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'stacie_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {
    if( function_exists('acf_add_options_sub_page') ) {
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme General Settings'),
            'menu_title'  => __('Theme Settings'),
            'redirect'    => false,
        ));
    }
}


/*---------Contact form tag class--------*/


add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );

function custom_custom_form_class_attr( $class ) {
  $class .= ' login';
  return $class;
}


/*-------------Custom post type-----------------*/

function custom_Promotion_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Promotions', 'Post Type General Name', 'stacie' ),
        'singular_name'       => _x( 'Promotion', 'Post Type Singular Name', 'stacie' ),
        'menu_name'           => __( 'Promotion', 'stacie' ),
        'parent_item_colon'   => __( 'Parent Promotion', 'stacie' ),
        'all_items'           => __( 'All Promotions', 'stacie' ),
        'view_item'           => __( 'View Promotion', 'stacie' ),
        'add_new_item'        => __( 'Add New Promotion', 'stacie' ),
        'add_new'             => __( 'Add New', 'stacie' ),
        'edit_item'           => __( 'Edit Promotion', 'stacie' ),
        'update_item'         => __( 'Update Promotion', 'stacie' ),
        'search_items'        => __( 'Search Promotion', 'stacie' ),
        'not_found'           => __( 'Not Found', 'stacie' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'stacie' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Promotion', 'stacie' ),
        'description'         => __( 'Promotion news and reviews', 'stacie' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true, 
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'taxonomies'  => array( 'category' ),
        'show_in_rest' => true,
 
    );
     
    register_post_type( 'promotion', $args );
 
}
 
add_action( 'init', 'custom_promotion_type', 0 );


/*--------------------Gallery----------------*/
function custom_galler_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Gallers', 'Post Type General Name', 'stacie' ),
        'singular_name'       => _x( 'Galler', 'Post Type Singular Name', 'stacie' ),
        'menu_name'           => __( 'Galler', 'stacie' ),
        'parent_item_colon'   => __( 'Parent Galler', 'stacie' ),
        'all_items'           => __( 'All Gallers', 'stacie' ),
        'view_item'           => __( 'View Galler', 'stacie' ),
        'add_new_item'        => __( 'Add New Galler', 'stacie' ),
        'add_new'             => __( 'Add New', 'stacie' ),
        'edit_item'           => __( 'Edit Galler', 'stacie' ),
        'update_item'         => __( 'Update Galler', 'stacie' ),
        'search_items'        => __( 'Search Galler', 'stacie' ),
        'not_found'           => __( 'Not Found', 'stacie' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'stacie' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'Galler', 'stacie' ),
        'description'         => __( 'Galler news and reviews', 'stacie' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true, 
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'taxonomies'  => array( 'category' ),
        'show_in_rest' => true,
 
    );
     
    register_post_type( 'galler', $args );
 
}
 
add_action( 'init', 'custom_galler_type', 0 );
