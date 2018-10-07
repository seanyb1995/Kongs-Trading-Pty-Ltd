<?php
/*
 * Plugin Name: Slide Show
 * Plugin URI:
 * Description: A simple plugin that keeps track of order
 * Version: 1.0
 * Author: Sean Buchanan
 * Author URI:
 * License: GPL2
*/

/*
 * Create $plugin_root variable
 * This save your writing out plugin_dir_path(__FILE__) each time
 * We also create a $plugin_root_url, which is similar, but instead of
 * outputting the PHP file path, it outputs the URL path which is required for 
 * any scripts or stylesheets we include in the head
*/

$slide_show_plugin_root = plugin_dir_path(__FILE__);
$slide_show_plugin_root_url = plugin_dir_url(__FILE__);


/* 
* 0. Setup product post type and category taxonomy
*/
require_once( $slide_show_plugin_root . 'inc/cpt-slide-show.php' );
add_action('init', 'mb_custom_burger_slideshow_post_type');

/*
 * 1. Template tags
 * Require our Template tags file which contains all the functions for our
 * template tags
*/
require_once( $slide_show_plugin_root . 'inc/template-tags.php' );

/* 
 * 2. Template tags - include for themes
 * Tell WordPress to include our template-tags.php file for our theme, so
 * our template tag functions can be used in our theme. This is achieved via the
 * WordPress action 'after_setup_theme'
*/ 
if( !function_exists('slide_show_include_template_tags') ) {
    function slide_show_include_template_tags() {
        global $slide_show_plugin_root;
        include_once( $slide_show_plugin_root . 'inc/template-tags.php' );
    }
    add_action( 'after_setup_theme', 'slide_show_include_template_tags' );
}

?>