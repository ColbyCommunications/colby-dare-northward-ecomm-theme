<?php
/**
 * dare-northward functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package dare-northward
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function dare_north_ward_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on dare-north-ward, use a find and replace
		* to change 'dare-north-ward' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'dare-north-ward', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'dare-north-ward' ),
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
			'dare_north_ward_custom_background_args',
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

	/**
	 * Editor Color Palette
	 *
	 */
	add_theme_support('editor-color-palette',
     
    array(
         array(
             'name' => esc_html__('White', 'dare-north-ward'),
             'slug' => 'white',
             'color' => '#ffffff',
         ),
         array(
            'name' => esc_html__('Black', 'dare-north-ward'),
            'slug' => 'black',
            'color' => '#000000',
         ),
         array(
            'name' => esc_html__('Dark Blue', 'dare-north-ward'),
            'slug' => 'blue',
            'color' => '#12223E',
         ),
         array(
            'name' => esc_html__('Blue Gray', 'dare-north-ward'),
            'slug' => 'blue-gray',
            'color' => '#1E2D37',
         ),
         array(
            'name' => esc_html__('Gray', 'dare-north-ward'),
            'slug' => 'gray',
            'color' => '#A0A9AF',
         ),
         array(
            'name' => esc_html__('Baige', 'dare-north-ward'),
            'slug' => 'baige',
            'color' => '#FBF8EA',
         ),
         array(
            'name' => esc_html__('Brown', 'dare-north-ward'),
            'slug' => 'brown',
            'color' => '#C0885B',
         ),
         array(
            'name' => esc_html__('Red', 'dare-north-ward'),
            'slug' => 'red',
            'color' => '#cf2e2e',
         ),
         array(
            'name' => esc_html__('Amber', 'dare-north-ward'),
            'slug' => 'amber',
            'color' => '#fcb900',
         ),
         array(
            'name' => esc_html__('Light Green', 'dare-north-ward'),
            'slug' => 'light-green',
            'color' => '#7bdcb5',
         ),
         array(
            'name' => esc_html__('Green', 'dare-north-ward'),
            'slug' => 'green',
            'color' => '#00d084',
         ),
         array(
            'name' => esc_html__('Cyan Blue', 'dare-north-ward'),
            'slug' => 'cyan-blue',
            'color' => '#0693e3',
         ),
        )
    );
}
add_action( 'after_setup_theme', 'dare_north_ward_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function dare_north_ward_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'dare_north_ward_content_width', 640 );
}
add_action( 'after_setup_theme', 'dare_north_ward_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dare_north_ward_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'dare-north-ward' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'dare-north-ward' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar( array(
	    'name' => esc_html__( 'Footer Widgets 1', 'dare-north-ward' ),
	    'id' => 'footer-widget-area-1',
	    'description' => esc_html__( 'footer widget area', 'dare-north-ward' ),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) ); 

	register_sidebar( array(
	    'name' => esc_html__( 'Footer Widgets 2', 'dare-north-ward' ),
	    'id' => 'footer-widget-area-2',
	    'description' => esc_html__( 'footer widget area', 'dare-north-ward' ),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) ); 

	register_sidebar( array(
	    'name' => esc_html__( 'Footer Widgets 3', 'dare-north-ward' ),
	    'id' => 'footer-widget-area-3',
	    'description' => esc_html__( 'footer widget area', 'dare-north-ward' ),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) ); 

	register_sidebar( array(
	    'name' => esc_html__( 'Footer Widgets 4', 'dare-north-ward' ),
	    'id' => 'footer-widget-area-4',
	    'description' => esc_html__( 'footer widget area', 'dare-north-ward' ),
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	) ); 
}
add_action( 'widgets_init', 'dare_north_ward_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dare_north_ward_scripts() {
	wp_enqueue_style( 'dare-north-ward-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'fonts-css', get_stylesheet_directory_uri() . '/assets/styles/fonts.css', array(), _S_VERSION );
	wp_enqueue_style( 'about-css', get_stylesheet_directory_uri() . '/assets/styles/about.css', array(), _S_VERSION );
	wp_enqueue_style( 'collections-css', get_stylesheet_directory_uri() . '/assets/styles/collections.css', array(), _S_VERSION );
	wp_enqueue_style( 'pillars-css', get_stylesheet_directory_uri() . '/assets/styles/pillars.css', array(), _S_VERSION );
	wp_enqueue_style( 'woocommerce-css', get_stylesheet_directory_uri() . '/assets/styles/woocommerce.css', array(), _S_VERSION );
	wp_style_add_data( 'dare-north-ward-style', 'rtl', 'replace' );

	wp_enqueue_script( 'dare-north-ward-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'dare-north-ward-accordion', get_template_directory_uri() . '/js/accordion.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'dare_north_ward_scripts' );

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
 * Woocommerce.
 */
remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Change add to cart text on single product page
add_filter( 'woocommerce_product_single_add_to_cart_text', 'woocommerce_add_to_cart_button_text_single' ); 
function woocommerce_add_to_cart_button_text_single() {
    return __( 'Add to Bag', 'woocommerce' ); 
}

/** to change the position of excerpt **/
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 5 );

/* Remove product page tabs */
add_filter( 'woocommerce_product_tabs', 'my_remove_all_product_tabs', 98 );
 
function my_remove_all_product_tabs( $tabs ) {
  unset( $tabs['description'] );        // Remove the description tab
  unset( $tabs['reviews'] );       // Remove the reviews tab
  unset( $tabs['additional_information'] );    // Remove the additional information tab
  return $tabs;
}

/**
 * Woocommerce hand-picked gutenberg block.
 */
function hand_picked_product_block( $html, $data, $product ) {
    global $product;

    $html = '<li class="wc-block-grid__product">';
    $html .= '<a href="' . $data->permalink . '" class="wc-block-grid__product-link"><div class="image-wrap">
				' . $data->image . '
            </div>
			<span class="product-info">
				' . $data->title . '
				' . $data->price . '
				' . $data->rating . '
			</span></a>
			' . $data->button . '
    ';
    
    $html .= '</li>';
    return $html;
}
add_filter( 'woocommerce_blocks_product_grid_item_html', 'hand_picked_product_block', 10, 3);