<?php
/**
 * SHIFT NC Parent functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package SHIFT_NC_Parent
 */

 add_filter('tiny_mce_before_init','configure_tinymce');

 /**
  * Customize TinyMCE's configuration
  *
  * @param   array
  * @return  array
  */
 function configure_tinymce($in) {
   $in['paste_preprocess'] = "function(plugin, args){
     // Strip all HTML tags except those we have whitelisted
     var whitelist = 'p,span,b,strong,i,em,h3,h4,h5,h6,ul,li,ol';
     var stripped = jQuery('<div>' + args.content + '</div>');
     var els = stripped.find('*').not(whitelist);
     for (var i = els.length - 1; i >= 0; i--) {
       var e = els[i];
       jQuery(e).replaceWith(e.innerHTML);
     }
     // Strip all class and id attributes
     stripped.find('*').removeAttr('id').removeAttr('class');
     // Return the clean HTML
     args.content = stripped.html();
   }";
   return $in;
 }


if ( ! function_exists( 'bcdc_shiftparent_setup' ) ) :

function bcdc_shiftparent_setup() {
	load_theme_textdomain( 'bcdc-shiftparent', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 */
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'menu-1' => esc_html__( 'Primary', 'bcdc-shiftparent' ),
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
	add_theme_support( 'custom-background', apply_filters( 'bcdc_shiftparent_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	) );
}
endif;
add_action( 'after_setup_theme', 'bcdc_shiftparent_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bcdc_shiftparent_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bcdc_shiftparent_content_width', 640 );
}
add_action( 'after_setup_theme', 'bcdc_shiftparent_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bcdc_shiftparent_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bcdc-shiftparent' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bcdc-shiftparent' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bcdc_shiftparent_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bcdc_shiftparent_scripts() {
	wp_enqueue_style( 'bcdc-shiftparent-style', get_stylesheet_uri() );

	wp_enqueue_script( 'bcdc-shiftparent-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'bcdc-shiftparent-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bcdc_shiftparent_scripts' );

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
