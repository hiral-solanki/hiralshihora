<?php
/**
 * heer-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package heer-theme
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}
function add_jquery() {
    wp_enqueue_script( 'jquery' );
 }    

 add_action('init', 'add_jquery');

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function heer_theme_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on heer-theme, use a find and replace
		* to change 'heer-theme' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'heer-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
//	add_theme_support( 'automatic-feed-links' );

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
			'primary' => esc_html__( 'Primary', 'heer-theme' ),
			'secondary' => esc_html__( 'Secondary', 'heer-theme' ),
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
			'heer_theme_custom_background_args',
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
add_action( 'after_setup_theme', 'heer_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function heer_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'heer_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'heer_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function heer_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'heer-theme' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'heer-theme' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'heer_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function heer_theme_scripts() {
	wp_enqueue_style( 'heer-theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'heer-theme-style', 'rtl', 'replace' );

	wp_enqueue_script( 'heer-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'heer_theme_scripts' );

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

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/inc/woocommerce.php';
}
// This function enqueues the all css & JS Files for use. The first parameter is a name for the stylesheet, the second is the URL.
function add_scripts() {
    //Vendor CSS Files
    wp_enqueue_style('animate', get_template_directory_uri() ."/assets/vendor/animate.css/animate.min.css");
    wp_enqueue_style('aos', get_template_directory_uri() ."/assets/vendor/aos/aos.css");
    wp_enqueue_style('bootstrap', get_template_directory_uri() ."/assets/vendor/bootstrap/css/bootstrap.min.css");
    wp_enqueue_style('bootstrap-icon', get_template_directory_uri() ."/assets/vendor/bootstrap-icons/bootstrap-icons.css");
    wp_enqueue_style('boxicon', get_template_directory_uri() ."/assets/vendor/boxicons/css/boxicons.min.css");
    wp_enqueue_style('glightbox', get_template_directory_uri() ."/assets/vendor/glightbox/css/glightbox.min.css");
    wp_enqueue_style('remixicon', get_template_directory_uri() ."/assets/vendor/remixicon/remixicon.css");
    wp_enqueue_style('swiper', get_template_directory_uri() ."/assets/vendor/swiper/swiper-bundle.min.css");
    //Template Main CSS File
    wp_enqueue_style('mainstyle', get_template_directory_uri() ."/assets/css/style.css"); 
    //Vendor JS Files
    wp_enqueue_script( 'aos', get_template_directory_uri() ."/assets/vendor/aos/aos.js");
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() ."/assets/vendor/bootstrap/js/bootstrap.bundle.min.js");
    wp_enqueue_script( 'glightbox', get_template_directory_uri() ."/assets/vendor/glightbox/js/glightbox.min.js");
    wp_enqueue_script( 'isotop', get_template_directory_uri() ."/assets/vendor/isotope-layout/isotope.pkgd.min.js");
    wp_enqueue_script( 'swiper', get_template_directory_uri() ."/assets/vendor/swiper/swiper-bundle.min.js");
    wp_enqueue_script( 'validate', get_template_directory_uri() ."/assets/vendor/php-email-form/validate.js");
      //Template Main JS File
    wp_enqueue_script( 'mainscript', get_template_directory_uri() ."/assets/js/main.js");
}
add_action('wp_enqueue_scripts', 'add_scripts');
//Get dynamic page content
function get_post_content($type,$id){
    if($type=='page' && $id!='' && is_numeric($id) )
    {
        $page_id = $id;  //Page ID
        $page_data = get_post( $page_id );
        $title = $page_data->post_title;
        $content = apply_filters('the_content', $page_data->post_content);
        return $content;
    }
	else if($type=='page' && is_string($id))
    {
        $page_id = get_page_by_title($id);  //Page ID
        $page_data = get_post( $page_id );
        $title = $page_data->post_title;
        $content = apply_filters('the_content', $page_data->post_content);
        return $content;
    }
    else
    {
        return $content = 'No Data Found';
    }
}
//Menu Class
add_filter('nav_menu_link_attributes','active_menu_class',10,3);
function active_menu_class($classes,$item,$args){
	//print_r($item);
    if($item->current == '1')
    {
        $classes['class'] = $args->add_link_class_active;
    }
    else
    {
        $classes['class'] = $args->add_link_class;
    }
    return $classes;
}