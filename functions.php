<?php

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
 * Setup Theme
 */
 function templedubientretheme_setup() {
        // Add featured image support
        add_theme_support('post-thumbnails');
    }
    add_action('after_setup_theme', 'templedubientretheme_setup');

?>