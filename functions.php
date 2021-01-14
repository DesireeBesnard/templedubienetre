<?php

/**
 * Include external files
 */
 require_once('inc/pagination.inc.php');
 require_once('inc/template-tags.inc.php');

/**
 * Include CSS files
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.11.2/css/all.css' );
        wp_enqueue_style( 'Bootstrap_css', '/node_modules/mdbootstrap/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', '/node_modules/mdbootstrap/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/css/style.css' );
        wp_enqueue_script( 'jQuery', '/node_modules/mdbootstrap/js/jquery.min.js' );
        wp_enqueue_script( 'Tether', '/node_modules/mdbootstrap/js/popper.min.js' );
        wp_enqueue_script( 'Bootstrap', '/node_modules/mdbootstrap/js/bootstrap.min.js' );
        wp_enqueue_script( 'MDB', '/node_modules/mdbootstrap/js/mdb.min.js' );
        wp_enqueue_script( 'Script', get_template_directory_uri() . '/js/script.js' );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

/**
 * Add WC Compatibility
 */
 function mytheme_add_woocommerce_support() {
  add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );

/**
  * Bootstrap slider custom post type
*/
add_action( 'init', 'custom_bootstrap_slider' );
/**
 * Register a Custom post type for.
 */
function custom_bootstrap_slider() {
	$labels = array(
		'name'               => _x( 'Slider', 'post type general name'),
		'singular_name'      => _x( 'Slide', 'post type singular name'),
		'menu_name'          => _x( 'Bootstrap Slider', 'admin menu'),
		'name_admin_bar'     => _x( 'Slide', 'add new on admin bar'),
		'add_new'            => _x( 'Add New', 'Slide'),
		'add_new_item'       => __( 'Name'),
		'new_item'           => __( 'New Slide'),
		'edit_item'          => __( 'Edit Slide'),
		'view_item'          => __( 'View Slide'),
		'all_items'          => __( 'All Slide'),
		'featured_image'     => __( 'Featured Image', 'text_domain' ),
		'search_items'       => __( 'Search Slide'),
		'parent_item_colon'  => __( 'Parent Slide:'),
		'not_found'          => __( 'No Slide found.'),
		'not_found_in_trash' => __( 'No Slide found in Trash.'),
	);

	$args = array(
		'labels'             => $labels,
		'menu_icon'	     => 'dashicons-star-half',
    	        'description'        => __( 'Description.'),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	);

	register_post_type( 'slider', $args );
}





/**
 * Register Custom Bootstrap Navigation Walker
 */
 function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
  'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );

/**
 * Setup Theme
 */
 function mdbtheme_setup() {
        // Add featured image support
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'mdbtheme_setup');
    
/**
 * Register our sidebars and widgetized areas.
 */
function mdb_widgets_init() {
    
  register_sidebar( array(
    'name'          => 'Sidebar',
    'id'            => 'sidebar',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ) );
    
}
add_action( 'widgets_init', 'mdb_widgets_init' );

/**
 * Single production template changes
 */
 remove_action('woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash', 10);
 remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);
 remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
 remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
 add_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5);
 remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
 
 function woocommerce_template_product_description() {
   woocommerce_get_template( 'single-product/tabs/description.php' );
 }
 add_action( 'woocommerce_single_product_summary', 'woocommerce_template_product_description', 20 );
 
 remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);
 //content-product.php
 remove_action('woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10);
 
 
?>