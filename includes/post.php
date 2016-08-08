<?php

/**
 * Create post types.
 */
function orbis_email_examples_create_initial_post_types() {
	register_post_type(
		'orbis_email_example',
		array(
			'label'         => __( 'Email Examples', 'orbis-email-examples' ),
			'labels'        => array(
				'name'               => _x( 'Email Examples', 'post type general name', 'orbis-email-examples' ),
				'singular_name'      => _x( 'Email Example', 'post type singular name', 'orbis-email-examples' ),
				'add_new'            => __( 'Add New', 'orbis-email-examples' ),
				'add_new_item'       => __( 'Add New Email Example', 'orbis-email-examples' ),
				'edit_item'          => __( 'Edit Email Example', 'orbis-email-examples' ),
				'new_item'           => __( 'New Email Example', 'orbis-email-examples' ),
				'view_item'          => __( 'View Email Example', 'orbis-email-examples' ),
				'search_items'       => __( 'Search Email Examples', 'orbis-email-examples' ),
				'not_found'          => __( 'No email examples found', 'orbis-email-examples' ),
				'not_found_in_trash' => __( 'No email examples found in Trash', 'orbis-email-examples' ),
				'parent_item_colon'  => __( 'Parent Email Example:', 'orbis-email-examples' ),
				'menu_name'          => __( 'Email Examples', 'orbis-email-examples' ),
			),
			'public'        => true,
			'menu_position' => 30,
			'menu_icon'     => 'dashicons-email-alt',
			'supports'      => array( 'title', 'editor', 'author', 'comments' ),
			'has_archive'   => true,
			'rewrite'       => array(
				'slug' => _x( 'email-examples', 'slug', 'orbis-email-examples' ),
			),
		)
	);
}

add_action( 'init', 'orbis_email_examples_create_initial_post_types', 0 ); // highest priority
