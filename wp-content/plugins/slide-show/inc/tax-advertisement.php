<?php

// Register Custom Taxonomy
if(!function_exists('ktpl_advertisment_taxonomy')){
	function ktpl_advertisment_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Advertisements', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Advertisement', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Advertisements', 'text_domain' ),
		'all_items'                  => __( 'All Advertisements', 'text_domain' ),
		'parent_item'                => __( 'Parent Advertisement', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Advertisement:', 'text_domain' ),
		'new_item_name'              => __( 'New Advertisement Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Advertisement', 'text_domain' ),
		'edit_item'                  => __( 'Edit Advertisement', 'text_domain' ),
		'update_item'                => __( 'Update Advertisement', 'text_domain' ),
		'view_item'                  => __( 'View Advertisement', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Advertisements with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Advertisements', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Advertisements', 'text_domain' ),
		'search_items'               => __( 'Search Advertisements', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Advertisements', 'text_domain' ),
		'items_list'                 => __( 'Advertisement list', 'text_domain' ),
		'items_list_navigation'      => __( 'Advertisements list navigation', 'text_domain' ),
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
	register_taxonomy( 'advertisement', array( 'slideshow' ), $args );

}
}

?>