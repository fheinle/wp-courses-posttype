<?php
/*
Plugin Name: Courses post type
Plugin URI: https://github.com/fheinle/wp-courses-posttype
Description: represent a course listing in a schedule, with hours and picture
Version: 1.0
Author: Florian Heinle
Author URI: https://www.florianheinle.de
License: GPL2
*/

// Register Custom Post Type
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Course', 'Post Type General Name', 'courses_posttype' ),
		'singular_name'         => _x( 'Courses', 'Post Type Singular Name', 'courses_posttype' ),
		'menu_name'             => __( 'Courses', 'courses_posttype' ),
		'name_admin_bar'        => __( 'Course', 'courses_posttype' ),
		'archives'              => __( 'Course Archives', 'courses_posttype' ),
		'attributes'            => __( 'Course Attributes', 'courses_posttype' ),
		'parent_item_colon'     => __( 'Parent Course:', 'courses_posttype' ),
		'all_items'             => __( 'All Courses', 'courses_posttype' ),
		'add_new_item'          => __( 'Add New Course', 'courses_posttype' ),
		'add_new'               => __( 'Add New', 'courses_posttype' ),
		'new_item'              => __( 'New Course', 'courses_posttype' ),
		'edit_item'             => __( 'Edit Course', 'courses_posttype' ),
		'update_item'           => __( 'Update Course', 'courses_posttype' ),
		'view_item'             => __( 'View Course', 'courses_posttype' ),
		'view_items'            => __( 'View Courses', 'courses_posttype' ),
		'search_items'          => __( 'Search Course', 'courses_posttype' ),
		'not_found'             => __( 'Not found', 'courses_posttype' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'courses_posttype' ),
		'featured_image'        => __( 'Featured Image', 'courses_posttype' ),
		'set_featured_image'    => __( 'Set featured image', 'courses_posttype' ),
		'remove_featured_image' => __( 'Remove featured image', 'courses_posttype' ),
		'use_featured_image'    => __( 'Use as featured image', 'courses_posttype' ),
		'insert_into_item'      => __( 'Insert into course', 'courses_posttype' ),
		'uploaded_to_this_item' => __( 'Uploaded to this course', 'courses_posttype' ),
		'items_list'            => __( 'Courses list', 'courses_posttype' ),
		'items_list_navigation' => __( 'Courses list navigation', 'courses_posttype' ),
		'filter_items_list'     => __( 'Filter courses list', 'courses_posttype' ),
	);
	$args = array(
		'label'                 => __( 'Courses', 'courses_posttype' ),
		'description'           => __( 'Courses schedule with hours and picture', 'courses_posttype' ),
		'labels'                => $labels,
		'supports'				=> array('title', 'editor', 'thumbnail'),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_type', $args );

}
add_action( 'init', 'custom_post_type', 0 );
?>
