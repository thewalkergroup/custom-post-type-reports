<?php
/*
Plugin Name: Custom Post Type: Reports
Plugin URI: 
Description: Reports post type
Version: 1.0
Author: Michael W. Delaney
Author URI: 
License: MIT
*/
// Register Custom Post Type
function Reports_post_type() {
	$labels = array(
		'name'                  => _x( 'Reports', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Report', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Reports', 'text_domain' ),
		'name_admin_bar'        => __( 'Report', 'text_domain' ),
		'archives'              => __( 'Reports Archives', 'text_domain' ),
		'parent_item_colon'     => __( 'Report Item:', 'text_domain' ),
		'all_items'             => __( 'All Reports', 'text_domain' ),
		'add_new_item'          => __( 'Add New Report', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Report', 'text_domain' ),
		'edit_item'             => __( 'Edit Report', 'text_domain' ),
		'update_item'           => __( 'Update Report', 'text_domain' ),
		'view_item'             => __( 'View Report', 'text_domain' ),
		'search_items'          => __( 'Search Report', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Report', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Report', 'text_domain' ),
		'items_list'            => __( 'Reports list', 'text_domain' ),
		'items_list_navigation' => __( 'Reports list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Report list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Report', 'text_domain' ),
		'description'           => __( 'Reports', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', ),
		'taxonomies'            => array( 'category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-clipboard',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'Reports', $args );
}
add_action( 'init', 'Reports_post_type', 0 );
