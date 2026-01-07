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

define('THEME_URI', get_template_directory_uri());
define('THEME_PATH', get_template_directory());

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

// Setup theme setting page
if (function_exists('acf_add_options_page')) {
	$name_option = 'Theme Settings';

	$parent = acf_add_options_page(array(
		'page_title' => $name_option,
		'menu_title' => $name_option,
		'menu_slug'  => 'theme-settings',
		'capability' => 'edit_posts',
		'redirect'   => false,
		'position'   => 80
	));

	// Header settings
	acf_add_options_sub_page(array(
		'page_title'  => 'Header Settings',
		'menu_title'  => 'Header',
		'parent_slug' => $parent['menu_slug'],
	));

	// Footer settings
	acf_add_options_sub_page(array(
		'page_title'  => 'Footer Settings',
		'menu_title'  => 'Footer',
		'parent_slug' => $parent['menu_slug'],
	));
}

class Ecoba_Primary_Walker extends Walker_Nav_Menu
{

	public function start_lvl(&$output, $depth = 0, $args = null)
	{
		$output .= '<ul>';
	}

	public function end_lvl(&$output, $depth = 0, $args = null)
	{
		$output .= '</ul>';
	}

	public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{

		$classes = empty($item->classes) ? [] : (array) $item->classes;
		$class   = esc_attr(implode(' ', $classes));

		$output .= '<li class="' . $class . '">';

		$output .= '<a href="' . esc_url($item->url) . '">';
		$output .= esc_html($item->title);
		$output .= '</a>';
	}

	public function end_el(&$output, $item, $depth = 0, $args = null)
	{
		$output .= '</li>';
	}
}

function biotech_exclude_pages_from_search($query)
{
	if (
		!is_admin() &&
		$query->is_main_query() &&
		$query->is_search()
	) {
		$query->set('post_type', ['post']);
	}
}
add_action('pre_get_posts', 'biotech_exclude_pages_from_search');

function biotech_register_product_post_type()
{

	$labels = [
		'name'               => 'Sản phẩm',
		'singular_name'      => 'Sản phẩm',
		'menu_name'          => 'Sản phẩm',
		'name_admin_bar'     => 'Sản phẩm',
		'add_new'            => 'Thêm mới',
		'add_new_item'       => 'Thêm sản phẩm',
		'edit_item'          => 'Sửa sản phẩm',
		'new_item'           => 'Sản phẩm mới',
		'view_item'          => 'Xem sản phẩm',
		'search_items'       => 'Tìm sản phẩm',
		'not_found'          => 'Không tìm thấy',
		'not_found_in_trash' => 'Không có trong thùng rác',
	];

	$args = [
		'labels'             => $labels,
		'public'             => true,
		'show_in_menu'       => true,
		'menu_icon'          => 'dashicons-cart',
		'supports'           => ['title', 'editor', 'thumbnail', 'excerpt'],
		'has_archive'        => false,
		'rewrite'            => [
			'slug'       => 'san-pham',
			'with_front' => false,
		],
		'menu_position'      => 6,
		'exclude_from_search' => false,
		'show_in_rest'       => true, // Gutenberg / REST
	];

	register_post_type('san_pham', $args);
}
add_action('init', 'biotech_register_product_post_type');

function register_post_type_du_an()
{

	$labels = array(
		'name'               => 'Dự án',
		'singular_name'      => 'Dự án',
		'menu_name'          => 'Dự án',
		'name_admin_bar'     => 'Dự án',
		'add_new'            => 'Thêm mới',
		'add_new_item'       => 'Thêm dự án mới',
		'edit_item'          => 'Sửa dự án',
		'new_item'           => 'Dự án mới',
		'view_item'          => 'Xem dự án',
		'search_items'       => 'Tìm dự án',
		'not_found'          => 'Không có dự án',
		'not_found_in_trash' => 'Không có dự án trong thùng rác',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'menu_position'      => 6,
		'menu_icon'          => 'dashicons-building',
		'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
		'rewrite'            => array(
			'slug'       => 'du-an',
			'with_front' => false,
		),
		'has_archive'        => false, // ❌ không dùng archive
		'publicly_queryable' => true,
		'exclude_from_search' => false,
		'show_in_rest'       => true, // dùng Gutenberg nếu cần
	);

	register_post_type('du_an', $args);
}
add_action('init', 'register_post_type_du_an');
