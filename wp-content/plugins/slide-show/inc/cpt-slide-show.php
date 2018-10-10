<?php

// Register Custom Post Type

if(!function_exists('ktpl_slideshow_post_type')){
	function ktpl_slideshow_post_type() {

	$labels = array(
		'name'                  => _x( 'Slideshow', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'slideshow', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'slideshow', 'text_domain' ),
		'name_admin_bar'        => __( 'slideshow', 'text_domain' ),
		'archives'              => __( 'slideshow Archives', 'text_domain' ),
		'attributes'            => __( 'slideshow Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent slideshow:', 'text_domain' ),
		'all_items'             => __( 'All slideshow', 'text_domain' ),
		'add_new_item'          => __( 'Add New slideshow', 'text_domain' ),
		'add_new'               => __( 'Add New slideshow Item', 'text_domain' ),
		'new_item'              => __( 'New slideshow Item', 'text_domain' ),
		'edit_item'             => __( 'Edit slideshow', 'text_domain' ),
		'update_item'           => __( 'Update slideshow', 'text_domain' ),
		'view_item'             => __( 'View slideshow', 'text_domain' ),
		'view_items'            => __( 'View slideshow', 'text_domain' ),
		'search_items'          => __( 'Search slideshow', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into slideshow', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this slideshow', 'text_domain' ),
		'items_list'            => __( 'slideshow list', 'text_domain' ),
		'items_list_navigation' => __( 'slideshow list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter slideshow list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'slideshow', 'text_domain' ),
		'description'           => __( 'Content for each slideshow Item', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions' ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-format-video',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'slideshow', $args );

	}
}

?>