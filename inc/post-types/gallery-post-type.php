<?php
/**
 * Register Gallery Custom Post Type
 */
function benmiles_register_gallery_post_type() {
    $labels = array(
        'name'                  => _x( 'Gallery Home Page', 'Post Type General Name', 'benmiles' ),
        'singular_name'         => _x( 'Gallery Item', 'Post Type Singular Name', 'benmiles' ),
        'menu_name'             => __( 'Gallery Home Page', 'benmiles' ),
        'name_admin_bar'        => __( 'Gallery Item', 'benmiles' ),
        'archives'              => __( 'Gallery Archives', 'benmiles' ),
        'attributes'            => __( 'Gallery Attributes', 'benmiles' ),
        'parent_item_colon'     => __( 'Parent Gallery:', 'benmiles' ),
        'all_items'             => __( 'All Gallery Items', 'benmiles' ),
        'add_new_item'          => __( 'Add New Gallery Item', 'benmiles' ),
        'add_new'               => __( 'Add New', 'benmiles' ),
        'new_item'              => __( 'New Gallery Item', 'benmiles' ),
        'edit_item'             => __( 'Edit Gallery Item', 'benmiles' ),
        'update_item'           => __( 'Update Gallery Item', 'benmiles' ),
        'view_item'             => __( 'View Gallery Item', 'benmiles' ),
        'view_items'            => __( 'View Gallery Items', 'benmiles' ),
        'search_items'          => __( 'Search Gallery', 'benmiles' ),
    );

    $args = array(
        'label'                 => __( 'Gallery Item', 'benmiles' ),
        'description'           => __( 'Gallery items with featured images', 'benmiles' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
    );

    register_post_type( 'gallery', $args );
}
add_action( 'init', 'benmiles_register_gallery_post_type', 0 );