<?php
/*
 * Plugin Name: Stock Toolkit
 * Description: required plugins this theme.
 * Version: 1.0
 */


//Exit if accessed directly
if(!defined('ABSPATH')){
    exit;
}

//Define
define('STOCK_ACC_URL', WP_PLUGIN_URL . '/' . plugin_basename( dirname( __FILE__) ) . '/');
define('STOCK_ACC_PATH', plugin_dir_path( __FILE__ ));

function stock_toolkit_get_as_post() {
   $args = wp_parse_args(array(
       'post_type'  => 'slide',
       'numberposts' => -1,
   ));
    $posts = get_posts($args);

    $post_options = array(esc_html__( '--Select slide--', 'stock_toolkit' ) =>'');
    
    if($posts){
        foreach($posts as $post){
            $post_options[ $post -> post_title] = $post -> ID;
        }
    }
 
    return $post_options;
}
function stock_toolkit_get_as_page() {
    $args = wp_parse_args(array(
        'post_type'  => 'page',
        'numberposts' => -1,
    ));
     $posts = get_posts($args);
 
     $post_options = array(esc_html__( '--Select page--', 'stock_toolkit' ) =>'');
     
     if($posts){
         foreach($posts as $post){
             $post_options[ $post -> post_title] = $post -> ID;
         }
     }
  
     return $post_options;
 }

function stock_theme_custom_post(){ 
    register_post_type( 'slide',
            array(
                'labels' => array(
                    'name'  => esc_html__('slides','stock_toolkit'),
                    'singular_name' => esc_html__('slide','stock_toolkit'),
                ),
                'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
                'public' => false,
                'show_ui' => true,
            ), 

    );
    register_post_type( 'project',
        array(
            'labels' => array(
                'name'  => esc_html__('projects','stock_toolkit'),
                'singular_name' => 'project'
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true,
        ), 
    );

}
add_action( 'init', 'stock_theme_custom_post' ); //end custom post

//Custom Taxonomy
function stock_toolkit_custom_post_taxonomy(){
    register_taxonomy( 'project_cat', 'project', 
        array(
            "hierarchical" => true,
            "label" => esc_html__("Project Category ",'stock_toolkit'),
            'query_var' => true,
            'show_admin_column' => true,
            'rewrite' => array(
                'slug' => 'project-category',
                 'with_front' => true
             ),
        )
    );
}
add_action( 'init', 'stock_toolkit_custom_post_taxonomy' ); //end custom taxonomy


add_action( 'init', 'stock_theme_custom_post' );
//Prit Shotcodes in widgets
add_filter('widget_text', 'do_shortcode');

//Loading VC addons
require_once(STOCK_ACC_PATH . 'vc-addons/vc-blocks-load.php');

//Theme Shortcode
require_once(STOCK_ACC_PATH . 'theme-shortcodes/slides-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/logo-carousel.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/service-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/cta-area-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/btn-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/stat-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/testimonial-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/styled-map-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/tile-gallery-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/video-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/promo-box-shortcode.php');
require_once(STOCK_ACC_PATH . 'theme-shortcodes/projects-shortcode.php');

//Shortcode depend on Visual composer
include_once(ABSPATH. 'wp-admin/includes/plugin.php');
if(is_plugin_active( 'js_composer/js_composer.php' )){
   // require_once(STOCK_ACC_PATH . 'theme-shortcodes/staff-shortcode.php');
}

//registering stock toolkit files

function stock_toolkit_files(){
    wp_enqueue_style( 'owl-carousel', plugin_dir_url( __FILE__ ) . 'assets/css/owl.carousel.min.css' );
    wp_enqueue_style( 'stock-toolkit', plugin_dir_url( __FILE__ ) . 'assets/css/stock-toolkit.css' );
    wp_enqueue_script( 'owl-carousel', plugin_dir_url( __FILE__ ) .'assets/js/owl.carousel.min.js',array(), '2.3.0', true);
    wp_enqueue_script( 'waypoints', plugin_dir_url( __FILE__ ) .'assets/js/jquery.waypoints.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script( 'counter-up', plugin_dir_url( __FILE__ ) .'assets/js/jquery.counterup.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script( 'gmap3', plugin_dir_url( __FILE__ ) .'assets/js/gmap3.min.js',array('jquery'), '1.0', true);
    wp_enqueue_script( 'isotope', plugin_dir_url( __FILE__ ).'assets/js/isotope-docs.min.js',array('jquery'), '3.0.6', true);
    wp_enqueue_script( 'mainjs', plugin_dir_url( __FILE__ ) .'assets/js/main.js',array('jquery'), '1.0', true);
}
add_action( 'wp_enqueue_scripts', 'stock_toolkit_files' );
?>