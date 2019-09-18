<?php
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'inc/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}
add_action( 'carbon_fields_register_fields', 'estore_register_custom_fields' );
function estore_register_custom_fields() {
    require get_template_directory() . '/inc/custom-fields-options/metabox.php';
    require get_template_directory() . '/inc/custom-fields-options/theme-options.php';
}
/**
 * bio-ferma functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bio-ferma
 */

if ( ! function_exists( 'bio_ferma_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function bio_ferma_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on bio-ferma, use a find and replace
		 * to change 'bio-ferma' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'bio-ferma', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'bio-ferma' ),
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
		add_theme_support( 'custom-background', apply_filters( 'bio_ferma_custom_background_args', array(
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
		function add_class_to_all_menu_anchors( $atts ) {
	    $atts['class'] = 'links';
	 
	    return $atts;
		}
		add_filter( 'nav_menu_link_attributes', 'add_class_to_all_menu_anchors', 10 );
		function add_id_to_all_menu_anchors( $atts ) {
	    $atts['id'] = 'asdlinks';
	 
	    return $atts;
		}
		add_filter( 'nav_menu_link_attributes', 'add_id_to_all_menu_anchors', 10 );
	}
endif;
add_action( 'after_setup_theme', 'bio_ferma_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bio_ferma_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'bio_ferma_content_width', 640 );
}
add_action( 'after_setup_theme', 'bio_ferma_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bio_ferma_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'bio-ferma' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'bio-ferma' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'bio_ferma_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bio_ferma_scripts() {
    wp_enqueue_style( 'bio-ferma-bootstrap', get_template_directory_uri().'/assets/files/styles/bootstrap.css', array());
	wp_enqueue_style( 'bio-ferma-skinss', get_template_directory_uri().'/assets/skinss/css/default.css@v4.css',array());
	wp_enqueue_style( 'bio-ferma-animate', get_template_directory_uri().'/assets/skinss/css/animate.css', array());
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/skinss/css/font-awesome.min.css@v7.css', array());
	wp_enqueue_style( 'bio-ferma-files', get_template_directory_uri().'/assets/files/styles/1.css@times=1522749352.css', array());
	wp_enqueue_style( 'bio-ferma-files-1', get_template_directory_uri().'/assets/files/styles/-1.css@times=1522749352.css', array());
    wp_enqueue_style( 'bio-ferma-files-2', get_template_directory_uri().'/assets/files/styles/style-materials.css', array());
    wp_enqueue_style( 'bio-ferma-single-product-style', get_template_directory_uri().'/assets/files/styles/single-product.css', array());
    wp_enqueue_style( 'bio-ferma-shop-style', get_template_directory_uri().'/assets/files/styles/shop-style.css', array());
    wp_enqueue_style( 'bio-ferma-style', get_template_directory_uri().'/style.css', array());


    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'bio-ferma-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bio-ferma-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array('jquery'), '20151215', true );
	wp_enqueue_script('jquerymin', get_template_directory_uri()."/assets/skinss/js/jcarousel.js", array('jquery'));
	wp_enqueue_script('carousel', get_template_directory_uri()."/assets/skinss/js/jquery.carousel.js", array('jquery'));
	wp_enqueue_script('shiningImage', get_template_directory_uri()."/assets/js-script/jquery.shiningImage.min.js", array('jquery'));
	wp_enqueue_script('jswow', get_template_directory_uri()."/assets/skinss/js/wow.min.js", array('jquery'), '', true);
	wp_enqueue_script( 'bio-ferma-script', get_template_directory_uri().'/assets/skinss/js/script.js', array('jquery'), '',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	function load_fonts()
	{
	  wp_register_style('et-googleRoboto', 'https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic');
	  wp_register_style('et-googleSans', 'https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&subset=cyrillic');
	  wp_enqueue_style( 'et-googleRoboto');
	  wp_enqueue_style( 'et-googleSans');
	}
	add_action('wp_print_styles', 'load_fonts');

}
add_action( 'wp_enqueue_scripts', 'bio_ferma_scripts');

/**
 * Вспомогательные функции
 */
require get_template_directory() . '/inc/helpers.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
require get_template_directory() . '/inc/navigations.php';


require get_template_directory() . '/inc/custom-footer.php';
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
    require get_template_directory() . '/woocommerce/includes/wc-functions.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-cart.php';
    require get_template_directory() . '/woocommerce/includes/wc-functions-single-product.php';
    require get_template_directory() . '/woocommerce/includes/wc-function-archive.php';
}



