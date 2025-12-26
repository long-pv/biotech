<?php

/**
 * biotech functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package biotech
 */

if (! defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function biotech_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on biotech, use a find and replace
		* to change 'biotech' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('biotech', get_template_directory() . '/languages');

	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support('title-tag');

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support('post-thumbnails');

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'biotech'),
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
			'biotech_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

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
add_action('after_setup_theme', 'biotech_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function biotech_content_width()
{
	$GLOBALS['content_width'] = apply_filters('biotech_content_width', 640);
}
add_action('after_setup_theme', 'biotech_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function biotech_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'biotech'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'biotech'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'biotech_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function biotech_scripts()
{
	wp_enqueue_style('biotech-style', get_stylesheet_uri(), array(), _S_VERSION);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'biotech_scripts');

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
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if (class_exists('WooCommerce')) {
	require get_template_directory() . '/inc/woocommerce.php';
}

// nhúng css vào
/**
 * Enqueue CSS
 */
function biotech_enqueue_styles()
{

	$css_uri = get_template_directory_uri() . '/dist/css/';

	wp_enqueue_style('dashicons');

	// ✅ Bootstrap CSS (BẮT BUỘC)
	wp_enqueue_style(
		'bootstrap',
		$css_uri . 'bootstrap.min.css',
		[],
		_S_VERSION
	);

	wp_enqueue_style('cptch-stylesheet',       $css_uri . 'front_end_style.css', [], _S_VERSION);
	wp_enqueue_style('cptch-desktop-style',     $css_uri . 'desktop_style.css', [], _S_VERSION);
	wp_enqueue_style('contact-form-7',          $css_uri . 'styles.css', [], _S_VERSION);
	wp_enqueue_style('wpdm-bootstrap',           $css_uri . 'bootstrap.css', [], _S_VERSION);
	wp_enqueue_style('math-captcha-frontend',   $css_uri . 'frontend.css', [], _S_VERSION);
	wp_enqueue_style('qts-front-styles',         $css_uri . 'qts-default.css', [], _S_VERSION);

	wp_enqueue_style('font-awesome',             $css_uri . 'font-awesome.min.css', [], _S_VERSION);
	wp_enqueue_style('menu-mobile',              $css_uri . 'menu_mobile.css', [], _S_VERSION);
	wp_enqueue_style('style-media',               $css_uri . 'style_media.css', [], _S_VERSION);
	wp_enqueue_style('style-custom',              $css_uri . 'style-custom.css', ['style-media'], _S_VERSION);
	wp_enqueue_style('main-style',                $css_uri . 'style.css', [], _S_VERSION);
	wp_enqueue_style('jssor',                     $css_uri . 'jssor.css', [], _S_VERSION);
}
add_action('wp_enqueue_scripts', 'biotech_enqueue_styles');

/**
 * Enqueue JS
 */
function biotech_enqueue_scripts()
{

	$js_uri = get_template_directory_uri() . '/dist/js/';

	// Core
	wp_enqueue_script('jquery');

	// Libraries
	wp_enqueue_script('jquery-form',  $js_uri . 'jquery.form.min.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('bootstrap',     $js_uri . 'bootstrap.min.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('hc-sticky',      $js_uri . 'jquery.hc-sticky.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('slimscroll',     $js_uri . 'jquery.slimscroll.min.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('owl-carousel',   $js_uri . 'owl.carousel.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('jssor-slider',   $js_uri . 'jssor.slider-24.1.5.min.js', [], _S_VERSION, true);
	wp_enqueue_script('scripts-main',  $js_uri . 'scripts.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('postviews',     $js_uri . 'postviews-cache.js', ['jquery'], _S_VERSION, true);
	wp_enqueue_script('gistfile',      $js_uri . 'gistfile1.js', ['jquery'], _S_VERSION, true);

	// Localize
	wp_localize_script(
		'postviews',
		'viewsCacheL10n',
		[
			'admin_ajax_url' => admin_url('admin-ajax.php'),
			'post_id'        => get_the_ID(),
		]
	);

	// Inline init JSSOR (SAU index.js)
	wp_add_inline_script('index-js', 'jssor_1_slider_init();');
}
add_action('wp_enqueue_scripts', 'biotech_enqueue_scripts');
