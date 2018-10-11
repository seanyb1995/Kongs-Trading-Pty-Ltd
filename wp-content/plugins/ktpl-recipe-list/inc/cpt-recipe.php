<?php

// Register Custom Post Type

if(!function_exists('ktpl_recipe_post_type')){
	function ktpl_recipe_post_type() {

	$labels = array(
		'name'                  => _x( 'Recipes', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'recipe', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'recipe', 'text_domain' ),
		'name_admin_bar'        => __( 'recipe', 'text_domain' ),
		'archives'              => __( 'recipe Archives', 'text_domain' ),
		'attributes'            => __( 'recipe Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent recipe:', 'text_domain' ),
		'all_items'             => __( 'All recipes', 'text_domain' ),
		'add_new_item'          => __( 'Add New recipe', 'text_domain' ),
		'add_new'               => __( 'Add New recipe Item', 'text_domain' ),
		'new_item'              => __( 'New recipe Item', 'text_domain' ),
		'edit_item'             => __( 'Edit recipe', 'text_domain' ),
		'update_item'           => __( 'Update recipe', 'text_domain' ),
		'view_item'             => __( 'View recipe', 'text_domain' ),
		'view_items'            => __( 'View recipes', 'text_domain' ),
		'search_items'          => __( 'Search recipes', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into recipe', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this recipe', 'text_domain' ),
		'items_list'            => __( 'recipe list', 'text_domain' ),
		'items_list_navigation' => __( 'recipes list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter recipe list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'recipe', 'text_domain' ),
		'description'           => __( 'Content for each recipe Item', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-cart',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'recipe', $args );

	}
}

?>