<?php
/**
 * wrdiy functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wrdiy
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'wrdiy_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function wrdiy_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on wrdiy, use a find and replace
		 * to change 'wrdiy' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'wrdiy', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'wrdiy' ),
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
				'wrdiy_custom_background_args',
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
add_action( 'after_setup_theme', 'wrdiy_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wrdiy_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wrdiy_content_width', 640 );
}
add_action( 'after_setup_theme', 'wrdiy_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wrdiy_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Primary', 'wrdiy' ),
			'id'            => 'primary',
			'description'   => esc_html__( 'Add widgets here.', 'wrdiy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'wrdiy_widgets_init' );
function wrdiy_widgets_init2() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'page-sidebar', 'wrdiy' ),
			'id'            => 'page-sidebar',
			'description'   => esc_html__( 'Add widgets here.', 'wrdiy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
/* 			'before_title'  => '<h3 class="widget-title">This Title',
			'after_title'   => '</h3>', */
			)
		);
	}
	add_action( 'widgets_init', 'wrdiy_widgets_init2' );
function wrdiy_widgets_about() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'about', 'wrdiy' ),
			'id'            => 'about',
			'description'   => esc_html__( 'Add widgets here.', 'wrdiy' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
/* 			'before_title'  => '<h3 class="widget-title">This Title',
			'after_title'   => '</h3>', */
			)
		);
	}
	add_action( 'widgets_init', 'wrdiy_widgets_about' );

	/* <?php dynamic_sidebar('WIDGET');?> */


/**
 * Enqueue scripts and styles.
 */
function wrdiy_scripts() {
	wp_enqueue_style( 'wrdiy-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'wrdiy-style', 'rtl', 'replace' );

	wp_enqueue_script( 'wrdiy-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wrdiy_scripts' );

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

