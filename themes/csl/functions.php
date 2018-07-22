<?php
/**
 * csl Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package CSL_Theme
 */







if ( ! function_exists( 'csl_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function csl_starter_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
		'story-menu' => esc_html( 'Story' ),
		'secondary-menu' => __( 'Mobile Menu' ),
		'footer-menu' => __( 'Footer Mobile Menu' )
	) );

	// Switch search form, comment form, and comments to output valid HTML5.
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

}
endif; // csl_starter_setup
add_action( 'after_setup_theme', 'csl_starter_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function csl_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'csl_starter_content_width', 640 );
}
add_action( 'after_setup_theme', 'csl_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function csl_starter_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html( 'Social Media For Contact Page' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'Social Media For Header' ),
		'id'            => 'sidebar-2',
		'description'   => 'side bar for header',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => esc_html( 'Social Media For Seasonal Events Page ' ),
		'id'            => 'sidebar-3',
		'description'   => 'side bar for events page',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'csl_starter_widgets_init' );

/**
 * Filter the stylesheet_uri to output the minified CSS file.
 */
function csl_starter_minified_css( $stylesheet_uri, $stylesheet_dir_uri ) {
	if ( file_exists( get_template_directory() . '/build/css/style.min.css' ) ) {
		$stylesheet_uri = $stylesheet_dir_uri . '/build/css/style.min.css';
	}

	return $stylesheet_uri;
}
add_filter( 'stylesheet_uri', 'csl_starter_minified_css', 10, 2 );

/**
 * Enqueue scripts and styles.
 */
function csl_starter_scripts() {
	wp_enqueue_style( 'csl-starter-style', get_stylesheet_uri() );
	wp_enqueue_style('main-font','https://fonts.googleapis.com/css?family=Lato:300,400,700,900');
	wp_enqueue_style('font-awesome','https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js');
	wp_enqueue_script( 'mobile-menu', get_template_directory_uri() . '/build/js/mobile-menu.min.js',array(), '20130115', true );
	wp_enqueue_script( 'csl-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	if ( is_tax('event_type', 'seasonal') || is_singular( 'event' )  ){
		wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', array(), null, true );
		wp_enqueue_script( 'owl-init', get_template_directory_uri() . '/build/js/owl-init.min.js', array(), null, true );
	}
	if ( is_archive() && ( is_tax('event_type', 'weekly') || is_tax('event_type', 'anwe') )){
		wp_enqueue_script( 'weekly-event-hover', get_template_directory_uri() . '/build/js/weekly-event-hover.min.js',array(), '20130116', true );
	}
	if ( is_page('contact') ){
		wp_enqueue_script( 'contact-form-submit-alert', get_template_directory_uri() . '/build/js/contact-form-submit-alert.min.js',array(), '20130116', true );
	}
	if ( is_archive('story')){
		wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/build/js/smooth-scroll.min.js', array(), null, true );
	}
}
add_action( 'wp_enqueue_scripts', 'csl_starter_scripts' );


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';


require get_template_directory() . '/inc/customizer.php';

/**
 * Add metaboxes.
 */

/**
 * Events meta-boxes.
 */

if ( ! defined( 'CMB2_DIR' ) ) {
	define( 'CMB2_DIR', WP_PLUGIN_DIR . '/CMB2/' );
}
if ( file_exists( CMB2_DIR . 'init.php' ) ) {
	require_once CMB2_DIR . 'init.php';
}

require get_template_directory() . '/inc/event-mb.php';

require get_template_directory() . '/inc/story-mb.php';

require get_template_directory() . '/inc/news-mb.php';

//limit words for seasonal events content//
function seasonal_content($limit){
  $content = explode(' ', get_the_content(), $limit);
 
  if (count($content)>=$limit){
       array_pop($content);
       $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }
 
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
}

function csl_pre_get_posts( $query ) {
	if ( is_archive() && is_tax('event_type', 'gallery') && $query->is_main_query() ) {
		$query->set('posts_per_page', 8 );
	}

}

add_action( 'pre_get_posts', 'csl_pre_get_posts' );

