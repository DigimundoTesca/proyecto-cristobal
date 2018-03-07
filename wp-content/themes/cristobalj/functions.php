<?php
/**
 * Cristobal theme functions and definitions
 *
 */

if ( ! function_exists( 'cristobalj_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function cristobalj_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on CristobalJ, use a find and replace
		 * to change 'cristobalj' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'cristobalj', get_template_directory() . '/languages' );

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
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'cristobalj' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'cristobalj_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'cristobalj_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cristobalj_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cristobalj_content_width', 640 );
}
add_action( 'after_setup_theme', 'cristobalj_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cristobalj_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'cristobalj' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cristobalj' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'cristobalj_widgets_init' );


function language_settings() {
	register_sidebar( array(
		'name'          => esc_html__( 'LanBar', 'cristobalj' ),
		'id'            => 'langbar-1',
		'description'   => esc_html__( 'Add widgets here.', 'cristobalj' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widgettitle">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'language_settings' );

/**
 * Enqueue scripts and styles.
 */
function cristobalj_scripts() {
  wp_enqueue_style( 'fonts-style', get_template_directory_uri().'/fonts/stylesheet.css' );
  wp_enqueue_style( 'swalcss', 'https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.2/sweetalert2.css', true );
  wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css', true );
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style( 'fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', true );
  wp_enqueue_script( 'swaljs', 'https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.2/sweetalert2.all.min.js', true );
  wp_enqueue_script( 'prefixfree', 'https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js', true );
	wp_enqueue_script( 'pooper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', true );
  wp_enqueue_script( 'bootstrapjs', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', true );
  wp_enqueue_script( 'mainjs', get_template_directory_uri() . '/js/main.js', array(), '', true );
  wp_enqueue_script( 'toolsjs', get_template_directory_uri() . '/js/mootools.js', array(), '', true );
	wp_enqueue_script( 'textjs', get_template_directory_uri() . '/js/f.txt', array(), '', true );
	wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', array(), '', true );
	wp_enqueue_script( 'slide', get_template_directory_uri() . '/js/responsiveslides.min.js', array(), '', true );
	wp_enqueue_script( 'themejs', get_template_directory_uri() . '/js/theme-scripts.js', array(), '', true );
  $translation_array = array( 'templateUrl' => get_template_directory_uri() );
  $redirect_array = array( 'redirectUrl' => get_permalink( get_page_by_title( 'downloadcompleted' ) ) );
//after wp_enqueue_script
  wp_localize_script( 'themejs', 'object_uri', $translation_array );
  wp_localize_script( 'themejs', 'object_name', $redirect_array );
  wp_enqueue_script('jquery');


  wp_enqueue_script( 'cristobalj-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20170818', true );
  wp_enqueue_style( 'cristobalj-style', get_stylesheet_uri() );

  wp_enqueue_script( 'cristobalj-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20170818', true );

  if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
    wp_enqueue_script( 'comment-reply' );
  }
}
add_action( 'wp_enqueue_scripts', 'cristobalj_scripts' );

/**
 * Custom post type for books.
 */
add_action( 'init', 'book_projects' );
function book_projects() {
  $labels = array(
    'name'               => _x( 'Books', 'blog' ),
    'singular_name'      => _x( 'Book', 'post type singular name', 'blog' ),
    'menu_name'          => _x( 'Books', 'admin menu', 'blog' ),
    'name_admin_bar'     => _x( 'Books', 'add new on admin bar', 'blog' ),
    'add_new'            => _x( 'Add New', 'book', 'blog' ),
    'add_new_item'       => __( 'Add New Project', 'blog' ),
    'new_item'           => __( 'New Project', 'blog' ),
    'edit_item'          => __( 'Edit Books', 'blog' ),
    'view_item'          => __( 'View Books', 'blog' ),
    'all_items'          => __( 'All Books', 'blog' ),
    'search_items'       => __( 'Search Books', 'blog' ),
    'parent_item_colon'  => __( 'Parent Books:', 'blog' ),
    'not_found'          => __( 'No Projects found.', 'blog' ),
    'not_found_in_trash' => __( 'No Projects found in Trash.', 'blog' )
  );

  $args = array(
    'labels'             => $labels,
    'description'        => __( 'Description.', 'blog' ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'booksblog' ),
    'capability_type'    => 'post',
    'has_archive'        => true,
    'hierarchical'       => false,
    'menu_position'      => 6,
    'supports'           => array( 'title', 'editor', 'thumbnail' ),
    'taxonomies'          => array( 'category' ),
  );

  register_post_type( 'booksblog', $args );
}



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
