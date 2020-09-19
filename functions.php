<?php
/**
 * Links Wien Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Links_Wien_Theme
 */

if ( ! function_exists( 'links_wien_theme_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function links_wien_theme_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Links Wien Theme, use a find and replace
		 * to change 'links-wien-theme' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'links-wien-theme', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in three locations.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'links-wien-theme' ),
			'menu-2' => esc_html__( 'Secondary', 'links-wien-theme' ),
			'menu-3' => esc_html__( 'Tertiary', 'links-wien-theme' )
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
		/* add_theme_support( 'custom-background', apply_filters( 'links_wien_theme_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );*/

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		/*add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );*/

		// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Orange', 'links-wien' ),
			'slug'  => 'orange',
			'color'	=> '#FA7F16',
		),
		array(
			'name'  => __( 'Lila', 'links-wien' ),
			'slug'  => 'violet',
			'color' => '#5e219e',
		),
		array(
			'name'  => __( 'Dunkles Lila', 'links-wien' ),
			'slug'  => 'violetDark',
			'color' => '#43187E',
		)
	) );

	add_editor_style( 'editor-style.css' );
	add_theme_support( 'editor-styles' );
	}
endif;
add_action( 'after_setup_theme', 'links_wien_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function links_wien_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'links_wien_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'links_wien_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function links_wien_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 1', 'links-wien-theme' ),
		'id'            => 'footer-1',
		'description'   => esc_html__( 'Add widgets here.', 'links-wien-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer 2', 'links-wien-theme' ),
		'id'            => 'footer-2',
		'description'   => esc_html__( 'Add widgets here.', 'links-wien-theme' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'links_wien_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function links_wien_theme_scripts() {
	wp_enqueue_style( 'links-wien-theme-style', get_stylesheet_uri() );

	wp_enqueue_script( 'links-wien-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'links-wien-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'links-wien-theme-form-hidden-bezirk', get_template_directory_uri() . '/js/form-hidden-bezirk.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'links_wien_theme_scripts' );

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
// require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Activate shortcuts in footers.
 */
add_filter('widget_text', 'shortcode_unautop');
add_filter('widget_text', 'do_shortcode');
