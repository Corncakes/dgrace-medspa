<?php
/*
    Plugin Name: D'Grace Medspa - Post Types
    Plugin URI: http://twitter.com/_corncakes
    Description: Añade Post Types al sitio D'Grace Medspa
    Version: 1.0.0
    Author: Wilberto Torres
    Author URI: http://twitter.com/_corncakes
    Text Domain: dgrace
*/

if(!defined('ABSPATH')) die();

// Register Service Post Type
function dgrace_services_post_type() {

	$labels = array(
		'name'                  => _x( 'Services', 'Post Type General Name', 'dgrace' ),
		'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'dgrace' ),
		'menu_name'             => __( 'Services', 'dgrace' ),
		'name_admin_bar'        => __( 'Service', 'dgrace' ),
		'archives'              => __( 'Archive', 'dgrace' ),
		'attributes'            => __( 'Attributes', 'dgrace' ),
		'parent_item_colon'     => __( 'Parent Service', 'dgrace' ),
		'all_items'             => __( 'All Services', 'dgrace' ),
		'add_new_item'          => __( 'Add New Service', 'dgrace' ),
		'add_new'               => __( 'Add New', 'dgrace' ),
		'new_item'              => __( 'New Service', 'dgrace' ),
		'edit_item'             => __( 'Edit Service', 'dgrace' ),
		'update_item'           => __( 'Update Service', 'dgrace' ),
		'view_item'             => __( 'View Service', 'dgrace' ),
		'view_items'            => __( 'View Services', 'dgrace' ),
		'search_items'          => __( 'Search Service', 'dgrace' ),
		'not_found'             => __( 'Not found', 'dgrace' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'dgrace' ),
		'featured_image'        => __( 'Featured image', 'dgrace' ),
		'set_featured_image'    => __( 'Set featured image', 'dgrace' ),
		'remove_featured_image' => __( 'Delete featured image', 'dgrace' ),
		'use_featured_image'    => __( 'Use featured image', 'dgrace' ),
		'insert_into_item'      => __( 'Insert into Service', 'dgrace' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Service', 'dgrace' ),
		'items_list'            => __( 'Services list', 'dgrace' ),
		'items_list_navigation' => __( 'Services list navigation', 'dgrace' ),
		'filter_items_list'     => __( 'Filter Services', 'dgrace' ),
	);
	$args = array(
		'label'                 => __( 'Service', 'dgrace' ),
		'description'           => __( 'Services for website', 'dgrace' ),
		'labels'                => $labels,
        'show_in_rest'          => true,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-portfolio',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dgrace_services', $args );

}
add_action( 'init', 'dgrace_services_post_type', 0 );

// Register Testimonial Post Type
function dgrace_testimonials_post_type() {

	$labels = array(
		'name'                  => _x( 'Testimonials', 'Post Type General Name', 'dgrace' ),
		'singular_name'         => _x( 'Testimonial', 'Post Type Singular Name', 'dgrace' ),
		'menu_name'             => __( 'Testimonials', 'dgrace' ),
		'name_admin_bar'        => __( 'Testimonial', 'dgrace' ),
		'archives'              => __( 'Archive', 'dgrace' ),
		'attributes'            => __( 'Attributes', 'dgrace' ),
		'parent_item_colon'     => __( 'Parent Testimonial', 'dgrace' ),
		'all_items'             => __( 'All Testimonials', 'dgrace' ),
		'add_new_item'          => __( 'Add New Testimonial', 'dgrace' ),
		'add_new'               => __( 'Add New', 'dgrace' ),
		'new_item'              => __( 'New Testimonial', 'dgrace' ),
		'edit_item'             => __( 'Edit Testimonial', 'dgrace' ),
		'update_item'           => __( 'Update Testimonial', 'dgrace' ),
		'view_item'             => __( 'View Testimonial', 'dgrace' ),
		'view_items'            => __( 'View Testimonials', 'dgrace' ),
		'search_items'          => __( 'Search Testimonial', 'dgrace' ),
		'not_found'             => __( 'Not found', 'dgrace' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'dgrace' ),
		'featured_image'        => __( 'Featured image', 'dgrace' ),
		'set_featured_image'    => __( 'Set featured image', 'dgrace' ),
		'remove_featured_image' => __( 'Delete featured image', 'dgrace' ),
		'use_featured_image'    => __( 'Use featured image', 'dgrace' ),
		'insert_into_item'      => __( 'Insert into Testimonial', 'dgrace' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Testimonial', 'dgrace' ),
		'items_list'            => __( 'Testimonials list', 'dgrace' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'dgrace' ),
		'filter_items_list'     => __( 'Filter Testimonials', 'dgrace' ),
	);
	$args = array(
		'label'                 => __( 'Testimonial', 'dgrace' ),
		'description'           => __( 'Testimonials for website', 'dgrace' ),
		'labels'                => $labels,
        'show_in_rest'          => true,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-testimonial',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dgrace_testimonials', $args );

}
add_action( 'init', 'dgrace_testimonials_post_type', 0 );

// Register Before-After Post Type
function dgrace_before_after_post_type() {

	$labels = array(
		'name'                  => _x( 'Before - After', 'Post Type General Name', 'dgrace' ),
		'singular_name'         => _x( 'Before - After', 'Post Type Singular Name', 'dgrace' ),
		'menu_name'             => __( 'Before - After', 'dgrace' ),
		'name_admin_bar'        => __( 'Before - After', 'dgrace' ),
		'archives'              => __( 'Archive', 'dgrace' ),
		'attributes'            => __( 'Attributes', 'dgrace' ),
		'parent_item_colon'     => __( 'Parent Before - After', 'dgrace' ),
		'all_items'             => __( 'All Before - After', 'dgrace' ),
		'add_new_item'          => __( 'Add New Before - After', 'dgrace' ),
		'add_new'               => __( 'Add New', 'dgrace' ),
		'new_item'              => __( 'New Before - After', 'dgrace' ),
		'edit_item'             => __( 'Edit Before - After', 'dgrace' ),
		'update_item'           => __( 'Update Before - After', 'dgrace' ),
		'view_item'             => __( 'View Before - After', 'dgrace' ),
		'view_items'            => __( 'View Before - After', 'dgrace' ),
		'search_items'          => __( 'Search Before - After', 'dgrace' ),
		'not_found'             => __( 'Not found', 'dgrace' ),
		'not_found_in_trash'    => __( 'Not found in trash', 'dgrace' ),
		'featured_image'        => __( 'Featured image', 'dgrace' ),
		'set_featured_image'    => __( 'Set featured image', 'dgrace' ),
		'remove_featured_image' => __( 'Delete featured image', 'dgrace' ),
		'use_featured_image'    => __( 'Use featured image', 'dgrace' ),
		'insert_into_item'      => __( 'Insert into Before - After', 'dgrace' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Before - After', 'dgrace' ),
		'items_list'            => __( 'Before - After list', 'dgrace' ),
		'items_list_navigation' => __( 'Before - After list navigation', 'dgrace' ),
		'filter_items_list'     => __( 'Filter Before - After', 'dgrace' ),
	);
	$args = array(
		'label'                 => __( 'Before - After', 'dgrace' ),
		'description'           => __( 'Before - After for website', 'dgrace' ),
		'labels'                => $labels,
        'show_in_rest'          => true,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-leftright',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dgrace_before_after', $args );

}
add_action( 'init', 'dgrace_before_after_post_type', 0 );

class Custom_Post_Widget extends WP_Widget {
    // Constructor del widget
    public function __construct() {
        parent::__construct(
            'custom_post_widget',
            __( 'Custom Post Widget', 'text_domain' ),
            array( 'description' => __( 'Displays featured image and title of custom post type.', 'text_domain' ), )
        );
    }

    public function widget( $args, $instance ) {
        echo $args['before_widget'];
    
        // Query para obtener los últimos Custom Post Types
        $query_args = array(
            'post_type' => 'dgrace_services',
            'posts_per_page' => 3, // Cambia esto según tus necesidades
        );
        $custom_posts = new WP_Query( $query_args );
    
        if ( $custom_posts->have_posts() ) {
            while ( $custom_posts->have_posts() ) {
                $custom_posts->the_post();
                echo '<div class="custom-post-widget-item">';
                if ( has_post_thumbnail() ) {
                    echo '<div class="custom-post-widget-image">';
                    the_post_thumbnail( 'thumbnail' ); // Tamaño de la imagen
                    echo '</div>';
                }
                echo '<h4 class="custom-post-widget-title">' . get_the_title() . '</h4>';
                echo '</div>';
            }
            wp_reset_postdata();
        }
    
        echo $args['after_widget'];
    }    
}

function register_custom_post_widget() {
    register_widget( 'Custom_Post_Widget' );
}
add_action( 'widgets_init', 'register_custom_post_widget' );
