<?php

/**
 * Register Custom Post Type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

add_action( 'init', 'neuron_custom_post' );
function neuron_custom_post() {

	// Custom post for Slider

	$labels = array(
		'name'               => _x( 'Sliders', 'post type general name', 'neuron' ),
		'singular_name'      => _x( 'slider', 'post type singular name', 'neuron' ),
		'menu_name'          => _x( 'Sliders', 'admin menu', 'neuron' ),
		'name_admin_bar'     => _x( 'Slider', 'add new on admin bar', 'neuron' ),
		'add_new'            => _x( 'Add New', 'neuron', 'neuron' ),
		'add_new_item'       => __( 'Add New Slider', 'neuron' ),
		'new_item'           => __( 'New Slider', 'neuron' ),
		'edit_item'          => __( 'Edit Slider', 'neuron' ),
		'view_item'          => __( 'View Slider', 'neuron' ),
		'all_items'          => __( 'All Sliders', 'neuron' ),
		'search_items'       => __( 'Search Sliders', 'neuron' ),
		'parent_item_colon'  => __( 'Parent Sliders:', 'neuron' ),
		'not_found'          => __( 'No Sliders found.', 'neuron' ),
		'not_found_in_trash' => __( 'No Sliders found in Trash.', 'neuron' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'neuron' ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'neuron' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' )
	);

	register_post_type( 'slider', $args );


		// Custom post for Features

	$labels = array(
		'name'               => _x( 'Features', 'post type general name', 'neuron' ),
		'singular_name'      => _x( 'feature', 'post type singular name', 'neuron' ),
		'menu_name'          => _x( 'Features', 'admin menu', 'neuron' ),
		'name_admin_bar'     => _x( 'Feature', 'add new on admin bar', 'neuron' ),
		'add_new'            => _x( 'Add New', 'neuron', 'neuron' ),
		'add_new_item'       => __( 'Add New Feature', 'neuron' ),
		'new_item'           => __( 'New Feature', 'neuron' ),
		'edit_item'          => __( 'Edit Feature', 'neuron' ),
		'view_item'          => __( 'View Feature', 'neuron' ),
		'all_items'          => __( 'All Features', 'neuron' ),
		'search_items'       => __( 'Search Features', 'neuron' ),
		'parent_item_colon'  => __( 'Parent Features:', 'neuron' ),
		'not_found'          => __( 'No Features found.', 'neuron' ),
		'not_found_in_trash' => __( 'No Features found in Trash.', 'neuron' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'neuron' ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'neuron' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
	);

	register_post_type( 'feature', $args );


			// Custom post for Services

	$labels = array(
		'name'               => _x( 'Services', 'post type general name', 'neuron' ),
		'singular_name'      => _x( 'service', 'post type singular name', 'neuron' ),
		'menu_name'          => _x( 'Services', 'admin menu', 'neuron' ),
		'name_admin_bar'     => _x( 'Service', 'add new on admin bar', 'neuron' ),
		'add_new'            => _x( 'Add New', 'neuron', 'neuron' ),
		'add_new_item'       => __( 'Add New Service', 'neuron' ),
		'new_item'           => __( 'New Service', 'neuron' ),
		'edit_item'          => __( 'Edit Service', 'neuron' ),
		'view_item'          => __( 'View Service', 'neuron' ),
		'all_items'          => __( 'All Services', 'neuron' ),
		'search_items'       => __( 'Search Services', 'neuron' ),
		'parent_item_colon'  => __( 'Parent Services:', 'neuron' ),
		'not_found'          => __( 'No Services found.', 'neuron' ),
		'not_found_in_trash' => __( 'No Services found in Trash.', 'neuron' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'neuron' ),
		'public'             => false,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'neuron' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes' )
	);

	register_post_type( 'service', $args );


		// Custom post for Portfolio

	$labels = array(
		'name'               => _x( 'Works', 'post type general name', 'neuron' ),
		'singular_name'      => _x( 'work', 'post type singular name', 'neuron' ),
		'menu_name'          => _x( 'Works', 'admin menu', 'neuron' ),
		'name_admin_bar'     => _x( 'Work', 'add new on admin bar', 'neuron' ),
		'add_new'            => _x( 'Add New', 'neuron', 'neuron' ),
		'add_new_item'       => __( 'Add New Work', 'neuron' ),
		'new_item'           => __( 'New Work', 'neuron' ),
		'edit_item'          => __( 'Edit Work', 'neuron' ),
		'view_item'          => __( 'View Work', 'neuron' ),
		'all_items'          => __( 'All Works', 'neuron' ),
		'search_items'       => __( 'Search Works', 'neuron' ),
		'parent_item_colon'  => __( 'Parent Works:', 'neuron' ),
		'not_found'          => __( 'No Works found.', 'neuron' ),
		'not_found_in_trash' => __( 'No Works found in Trash.', 'neuron' )
	);

	$args = array(
		'labels'             => $labels,
        'description'        => __( 'Description.', 'neuron' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => 'neuron' ),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'page-attributes' )
	);

	register_post_type( 'work', $args );


}
