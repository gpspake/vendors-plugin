<?php
/*
Plugin Name: Vendors
Plugin URI: http://georgespake.com
Description: A Vendors Plugin
Author: George Spake
Version: 0.1
Author URI: http://georgespake.com
*/

if ( ! function_exists('vendor_post_type') ) {

// Register Custom Post Type
    function vendor_post_type() {

        $labels = array(
            'name'                => _x( 'Vendors', 'Post Type General Name', 'memtech' ),
            'singular_name'       => _x( 'Vendor', 'Post Type Singular Name', 'memtech' ),
            'menu_name'           => __( 'Vendors', 'memtech' ),
            'name_admin_bar'      => __( 'Vendor', 'memtech' ),
            'parent_item_colon'   => __( 'Parent Vendor:', 'memtech' ),
            'all_items'           => __( 'All Vendors', 'memtech' ),
            'add_new_item'        => __( 'Add New Vendor', 'memtech' ),
            'add_new'             => __( 'Add New', 'memtech' ),
            'new_item'            => __( 'New Vendor', 'memtech' ),
            'edit_item'           => __( 'Edit Vendor', 'memtech' ),
            'update_item'         => __( 'Update Vendor', 'memtech' ),
            'view_item'           => __( 'View Vendor', 'memtech' ),
            'search_items'        => __( 'Search Vendor', 'memtech' ),
            'not_found'           => __( 'Not found', 'memtech' ),
            'not_found_in_trash'  => __( 'Not found in Trash', 'memtech' ),
        );
        $args = array(
            'label'               => __( 'vendor', 'memtech' ),
            'description'         => __( 'Vendors', 'memtech' ),
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
            'taxonomies'          => array( 'vendor_category' ),
            'hierarchical'        => false,
            'public'              => true,
            'show_ui'             => true,
            'show_in_menu'        => true,
            'menu_position'       => 5,
            'menu_icon'           => 'dashicons-businessman',
            'show_in_admin_bar'   => true,
            'show_in_nav_menus'   => true,
            'can_export'          => true,
            'has_archive'         => true,
            'exclude_from_search' => false,
            'publicly_queryable'  => true,
            'capability_type'     => 'page',
        );
        register_post_type( 'vendor', $args );

    }

// Hook into the 'init' action
    add_action( 'init', 'vendor_post_type', 0 );

}