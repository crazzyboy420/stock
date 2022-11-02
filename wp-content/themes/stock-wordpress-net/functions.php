<?php
/**
 * Stock functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Stock
 */
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'stock_wordpress_net_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function stock_wordpress_net_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Stock, use a find and replace
		 * to change 'stock-wordpress-net' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'stock-wordpress-net', get_template_directory() . '/languages' );

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

		//Custom Image size
		add_image_size( 'stock_post_thumb', 750, 450, true );

		add_theme_support( 'woocommerce' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'stock-wordpress-net' ),
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
				'stock_wordpress_net_custom_background_args',
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
add_action( 'after_setup_theme', 'stock_wordpress_net_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function stock_wordpress_net_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'stock_wordpress_net_content_width', 640 );
}
add_action( 'after_setup_theme', 'stock_wordpress_net_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function stock_wordpress_net_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'stock-wordpress-net' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'stock-wordpress-net' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Project Sidebar', 'stock-wordpress-net' ),
			'id'            => 'stock_project_sidebar',
			'description'   => esc_html__( 'Add project sidebar widgets here.', 'stock-wordpress-net' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>' 
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widgets', 'stock-wordpress-net' ),
			'id'            => 'stock_footer',
			'description'   => esc_html__( 'Add footer widgets here.', 'stock-wordpress-net' ),
			'before_widget' => '<div class="col-md-3"><div id="%1$s" class="stock-footer-menu widget %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'stock_wordpress_net_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function stock_wordpress_net_scripts() {
	wp_enqueue_style( 'stock-default', get_template_directory_uri().'/assets/css/default.css', array(), '1.0' );
	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css',array(), '5.6.0.' );
	wp_enqueue_style( 'fontawesome', get_template_directory_uri().'/assets/css/all.min.css', array(), '5.0.0' );
	wp_enqueue_style( 'old_fontawesome', get_template_directory_uri().'/assets/css/fontawesome.min.css', array(), '4.7.0' );
	wp_enqueue_style( 'slicknav', get_template_directory_uri().'/assets/css/slicknav.min.css', array(), '4.7.0' );
	wp_style_add_data( 'stock-wordpress-net-style', 'rtl', 'replace' );
	wp_enqueue_style('stock-wordpress-net',  get_stylesheet_uri());

	

	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.js', array('jquery'),'', '5.0' );
	wp_enqueue_script( 'fontawesome', get_template_directory_uri() . '/assets/js/fontawesome.min.js', array('jquery'),'5.15.3', true ); 
	wp_enqueue_script( 'slicknav', get_template_directory_uri() . '/assets/js/jquery.slicknav.js', array('jquery'),'5.15.3', true ); 
	wp_enqueue_script( 'active', get_template_directory_uri() . '/assets/js/active.js', array('jquery'),'5.15.3', true ); 
	$header_scripts   = cs_get_option('header_scripts');
    if(!empty($header_scripts)){
		wp_add_inline_script( 'jquery-migrate', $header_scripts);
	}


	$custom_style   = cs_get_option('custom_style');
    if(!empty($custom_style)){
		wp_add_inline_style( 'stock-wordpress-net', $custom_style);
	}

	$body_end_scripts   = cs_get_option('body_end_scripts');
    if(!empty($body_end_scripts)){
		wp_add_inline_script( 'active', $body_end_scripts);
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts','stock_wordpress_net_scripts' );
//CS framework
require get_template_directory() . '/inc/cs-framework/cs-framework.php';
require get_template_directory() . '/inc/metabox-and-options.php';
require get_template_directory() . '/inc/custom-style.php';
require get_template_directory() . '/inc/required-plugins.php';


/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


//WooCmmerce Active
//Woocommerce

function deo_woocommerce_cart_icon() {
	?>
	<a class="stock-cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php echo esc_attr__( 'View your shopping cart', 'furosa' ); ?>">
			<i class="fas fa-shopping-cart"></i>
			<span class="stock-cart-count"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
	</a>
	<?php
}

//One Click Demo impoter
function ocdi_import_files() {
	return [
	  [
		'import_file_name'             => 'Demo Import 1',
		'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo_data/stock_theme_data.xml',
		'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo_data/stock_theme_widgets.wie',
		'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo_data/stock-theme_demo_data.dat',
		
	  ],
	];
  }
add_filter( 'ocdi/import_files', 'ocdi_import_files' );
