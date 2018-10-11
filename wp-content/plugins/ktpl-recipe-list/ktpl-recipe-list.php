<?php
/*
 * Plugin Name: Recipe List
 * Plugin URI:
 * Description: A simple plugin that creates a contact button
 * Version: 1.0
 * Author: Sean Buchanan
 * Author URI:
 * License: GPL2
*/


/*
 * create $plugin_root variable
 * This saves us writing out plugin_dir_path(__FILE__) each time
 * We also create a $menu_plugin_root_url , which is similar, but insteead of 
 * outputting the PHP file path, it outputs the URL path chich is required for 
 * only scripts or stylesheets we include in the head
*/
$recipe_plugin_root = plugin_dir_path(__FILE__);
$recipe_plugin_root_url = plugin_dir_url(__FILE__);


/* --------------------------------------------------------------------------------
* 0. Setup product post type and category taxonomy
*/
require_once( $recipe_plugin_root . 'inc/cpt-recipe.php' );
require_once( $recipe_plugin_root . 'inc/tax-category.php' );
require_once( $recipe_plugin_root . 'inc/tax-country.php' );
require_once( $recipe_plugin_root . 'inc/tax-meal.php' );
add_action('init', 'ktpl_recipe_post_type');
add_action('init', 'ktpl_list_category_taxonomy');
add_action('init', 'ktpl_list_country_taxonomy');
add_action('init', 'ktpl_list_meal_taxonomy');

/*
 * 4. Template tags
 * Require our Template tags file which contains all the functions for our 
 * template tags
*/
require_once( $recipe_plugin_root . 'inc/template-tags.php' );

/*
 * 5. Template tags - include for themes
 * tell wordpress to include our template-tags.php file for our theme, so
 * our template tag functions can be used in our theme. this is achieved via the 
 * wordpress action 'after_setup_theme'
*/
if( !function_exists('menu_include_template_tags' ) ) {
    function menu_include_template_tags() {
        global $recipe_plugin_root;
        include_once( $recipe_plugin_root . 'inc/template-tags.php' );
    }
    add_action( 'after_setup_theme', 'menu_include_template_tags' );
} 

?>