<?php

// Register Custom Taxonomy
if(!function_exists('ktpl_list_meal_taxonomy')){
	function ktpl_list_Meal_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Meal', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Meal', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Meals', 'text_domain' ),
		'all_items'                  => __( 'All Meals', 'text_domain' ),
		'parent_item'                => __( 'Parent Meal', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Meal:', 'text_domain' ),
		'new_item_name'              => __( 'New Meal Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Meal', 'text_domain' ),
		'edit_item'                  => __( 'Edit Meal', 'text_domain' ),
		'update_item'                => __( 'Update Meal', 'text_domain' ),
		'view_item'                  => __( 'View Meal', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Meals with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Meals', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Meals', 'text_domain' ),
		'search_items'               => __( 'Search Meals', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Meals', 'text_domain' ),
		'items_list'                 => __( 'Meal list', 'text_domain' ),
		'items_list_navigation'      => __( 'Meals list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'meal', array( 'recipe' ), $args );

}
}

?>