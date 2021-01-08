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