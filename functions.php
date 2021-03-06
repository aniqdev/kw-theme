<?php
/**
 * Kumle functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Kumle
 */

define('KW_TEMPLATE_DIRECTORY', get_template_directory());
define('KW_TEMPLATE_DIRECTORY_URI', get_template_directory_uri());

function sa($array = [], $save = false){
	if ($save) return '<pre>' . print_r($array, true) . '</pre>';
	echo "<pre>";
	print_r($array);
	echo "</pre>";
}

if ( ! function_exists( 'kumle_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kumle_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Kumle, use a find and replace
	 * to change 'kumle' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kumle', KW_TEMPLATE_DIRECTORY . '/languages' );

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
	 * Enable support for custom logo.
	 */
	add_theme_support( 'custom-logo' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );

	// Register navigation menu locations.
	register_nav_menus( array(
		'primary' 	=> esc_html__( 'Primary', 'kumle' ),
		'social'  	=> esc_html__( 'Social', 'kumle' ),
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
	add_theme_support( 'custom-background', apply_filters( 'kumle_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add woocommerce support, gallery zoom, lightbox and thumbnail slider.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
endif;
add_action( 'after_setup_theme', 'kumle_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kumle_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kumle_content_width', 810 );
}
add_action( 'after_setup_theme', 'kumle_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kumle_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Primary Sidebar', 'kumle' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	for( $i = 1; $i <= 4; $i++ ) {
	    register_sidebar( array(
	        /* translators: 1: Widget number. */
	        'name'          => sprintf( esc_html__( 'Footer Sidebar %d', 'kumle' ), $i ),
	        'id'            => 'footer-'.$i,
	        'before_widget' => '<section id="%1$s" class="widget %2$s">',
	        'after_widget'  => '</section>',
	        'before_title'  => '<h2 class="widget-title">',
	        'after_title'   => '</h2>',
	    ) );
	}	
}
add_action( 'widgets_init', 'kumle_widgets_init' );

/**
* Enqueue scripts and styles.
*/
function kumle_scripts() {

	// wp_enqueue_style( 'kumle-fonts', kumle_fonts_url(), array(), null );

	wp_enqueue_style( 'jquery-meanmenu', KW_TEMPLATE_DIRECTORY_URI . '/assets/third-party/meanmenu/meanmenu.css' );

	wp_enqueue_style( 'bootstrap-grid', KW_TEMPLATE_DIRECTORY_URI . '/css/main-page-bootstrap-grid.css', '', '1.6.0' );

	wp_enqueue_style( 'jquery-slick', KW_TEMPLATE_DIRECTORY_URI . '/assets/third-party/slick/slick.css', '', '1.6.0' );

	wp_enqueue_style( 'font-awesome', KW_TEMPLATE_DIRECTORY_URI . '/assets/third-party/font-awesome/css/font-awesome.min.css', '', '4.7.0' );

	wp_enqueue_style( 'kumle-style', KW_TEMPLATE_DIRECTORY_URI . '/style.css', '', filemtime(__DIR__.'/style.css') );

	

	wp_enqueue_script( 'kumle-navigation', KW_TEMPLATE_DIRECTORY_URI . '/assets/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'kumle-skip-link-focus-fix', KW_TEMPLATE_DIRECTORY_URI . '/assets/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'jquery-meanmenu', KW_TEMPLATE_DIRECTORY_URI . '/assets/third-party/meanmenu/jquery.meanmenu.js', array('jquery'), '2.0.2', true );

	wp_enqueue_script( 'jquery-slick', KW_TEMPLATE_DIRECTORY_URI . '/assets/third-party/slick/slick.js', array('jquery'), '1.6.0', true );

	wp_enqueue_script( 'kumle-custom', KW_TEMPLATE_DIRECTORY_URI . '/assets/js/custom.js', array( 'jquery' ), '2.0.2', true );

	wp_enqueue_script( 'bootstrap.min', KW_TEMPLATE_DIRECTORY_URI . '/assets/js/bootstrap.min.js', array( 'jquery' ), '2.0.2', true );

	wp_enqueue_script( 'jquery.bxslider.min', KW_TEMPLATE_DIRECTORY_URI . '/assets/js/jquery.bxslider.min.js', array( 'jquery' ), '2.0.2', true );

	wp_enqueue_script( 'main-page', KW_TEMPLATE_DIRECTORY_URI . '/assets/js/main-page.js', array( 'jquery' ), filemtime(__DIR__.'/assets/js/main-page.js'), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kumle_scripts' );

function remove_array_value($array, $value_to_delete)
{
	$array = array_flip($array); //Меняем местами ключи и значения
	if (is_array($value_to_delete)) {
		foreach ($value_to_delete as $value) {
			unset ($array[$value]) ; //Удаляем элемент массива
		}
	}else{
		unset ($array[$value_to_delete]) ; //Удаляем элемент массива
	}
	return array_flip($array); //Меняем местами ключи и значения
}

// Load main file.
require_once trailingslashit( KW_TEMPLATE_DIRECTORY ) . '/includes/main.php';





add_action('admin_menu', function(){
	add_menu_page( 'Дополнительные настройки сайта', 'Пульт', 'manage_options', 'site-options', 'add_my_setting', '', 33 ); 
} );

// функция отвечает за вывод страницы настроек
// подробнее смотрите API Настроек: http://wp-kama.ru/id_3773/api-optsiy-nastroek.html
function add_my_setting(){
	include_once KW_TEMPLATE_DIRECTORY . '/includes/admin-page-pult.php';
}
