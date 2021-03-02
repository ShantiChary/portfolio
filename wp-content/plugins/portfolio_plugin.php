<?php
  /*
  Plugin Name: Portfolio Theme CPT & taxonomy
  Description: Portfolio Theme Custom Post Types and Taxonomies
  Version: 1.0
  Author: Shanti Chary
  License: GPL 2.1
  */

  function portfolio_register_custom_post_types() {
    //Project Custom Post type
    $labels = array(
        'name'               => _x( 'Projects', 'post type general name' ),
        'singular_name'      => _x( 'Project', 'post type singular name'),
        'menu_name'          => _x( 'Projects', 'admin menu' ),
        'name_admin_bar'     => _x( 'Project', 'add new on admin bar' ),
        'add_new'            => _x( 'Add New', 'Project' ),
        'add_new_item'       => __( 'Add New Project' ),
        'new_item'           => __( 'New Project' ),
        'edit_item'          => __( 'Edit Project' ),
        'view_item'          => __( 'View Project' ),
        'all_items'          => __( 'All Projects' ),
        'search_items'       => __( 'Search Projects' ),
        'parent_item_colon'  => __( 'Parent Projects:' ),
        'not_found'          => __( 'No Projects found.' ),
        'not_found_in_trash' => __( 'No Projects found in Trash.' ),
        'archives'           => __( 'Project Archives'),
        'insert_into_item'   => __( 'Uploaded to this Project'),
        'uploaded_to_this_item' => __( 'Project Archives'),
        'filter_item_list'   => __( 'Filter Projects list'),
        'items_list_navigation' => __( 'Projects list navigation'),
        'items_list'         => __( 'Projects list'),
        'featured_image'     => __( 'Project feature image'),
        'set_featured_image' => __( 'Set Project feature image'),
        'remove_featured_image' => __( 'Remove Project feature image'),
        'use_featured_image' => __( 'Use as feature image'),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_nav_menus'  => true,
        'show_in_admin_bar'  => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'projects' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'menu_icon'          => 'dashicons-media-audio',
    );
    register_post_type( 'project', $args );
}

 add_action( 'init', 'portfolio_register_custom_post_types' );

 function portfolio_rewrite_flush() {
    portfolio_register_custom_post_types();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'portfolio_rewrite_flush' );



//--------------------------------------------------------------
// Taxonomies
//--------------------------------------------------------------
function portfolio_register_taxonomies() {
   // Add Project Type taxonomy - hierarchical (like categories)
   $labels = array(
       'name'              => _x( 'Project Categories', 'taxonomy general name' ),
       'singular_name'     => _x( 'Project Category', 'taxonomy singular name' ),
       'search_items'      => __( 'Search Project Categories' ),
       'all_items'         => __( 'All Project Category' ),
       'parent_item'       => __( 'Parent Project Category' ),
       'parent_item_colon' => __( 'Parent Project Category:' ),
       'edit_item'         => __( 'Edit Project Category' ),
       'view_item'         => __( 'Vview Project Category' ),
       'update_item'       => __( 'Update Project Category' ),
       'add_new_item'      => __( 'Add New Project Category' ),
       'new_item_name'     => __( 'New Project Category Name' ),
       'menu_name'         => __( 'Project Category' ),
   );
   $args = array(
       'hierarchical'      => true,
       'labels'            => $labels,
       'show_ui'           => true,
       'show_in_menu'      => true,
       'show_in_nav_menu'  => true,
       'show_admin_column' => true,
       'query_var'         => true,
       'rewrite'           => array( 'slug' => 'project-categories' ),
   );
   register_taxonomy( 'project-category', array( 'project' ), $args );
}
add_action( 'init', 'portfolio_register_taxonomies');
