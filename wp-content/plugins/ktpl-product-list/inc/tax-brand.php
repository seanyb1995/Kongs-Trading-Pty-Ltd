<?php

// Register Custom Taxonomy
if(!function_exists('ktpl_product_brand_taxonomy')){
	function ktpl_product_brand_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Brand', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Brand', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Brand', 'text_domain' ),
		'all_items'                  => __( 'All Brand', 'text_domain' ),
		'parent_item'                => __( 'Parent Brand', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Brand:', 'text_domain' ),
		'new_item_name'              => __( 'New Brand Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Brand', 'text_domain' ),
		'edit_item'                  => __( 'Edit Brand', 'text_domain' ),
		'update_item'                => __( 'Update Brand', 'text_domain' ),
		'view_item'                  => __( 'View Brand', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate Brand with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove Brand', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Brand', 'text_domain' ),
		'search_items'               => __( 'Search Brand', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No Brand', 'text_domain' ),
		'items_list'                 => __( 'Brand list', 'text_domain' ),
		'items_list_navigation'      => __( 'Brand list navigation', 'text_domain' ),
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
	register_taxonomy( 'brand', array( 'product' ), $args );

}
}

?>