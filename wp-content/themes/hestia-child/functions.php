<?php

//Para agrregar menús personalizados
function register_menus()
{
    register_nav_menus([
        'menu_principal' => __('Main menu'),
        'menu_secundario' => __('Secondary menu'),
    ]);
}
add_action('init', 'register_menus');

//Para agregar librerias
function my_libraries()
{
    wp_enqueue_style('slicknav_styles', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/slicknav.min.css', [], '1.0.0', true);
    wp_enqueue_script('slicknav_script', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.0/jquery.slicknav.js', [], '1.0.0', true);
    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.js', ['jquery', 'slicknav_script'], '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'my_libraries');

//Para agregar posts personalizados
function custom_post_3d_model()
{

    $labels = array(
        'name'                  => __('3D Models', 'hestia'),
        'singular_name'         => __('3D Model', 'hestia'),
        'menu_name'             => __('3D Models', 'hestia'),
        'add_new'               => __('Add New', 'hestia'),
        'add_new_item'          => __('Add New 3D Model', 'hestia'),
        'edit'                  => __('Edit', 'hestia'),
        'edit_item'             => __('Edit 3D Model', 'hestia'),
        'new_item'              => __('New 3D Model', 'hestia'),
        'view'                  => __('View', 'hestia'),
        'view_item'             => __('View 3D Model', 'hestia'),
        'search_items'          => __('Search 3D Models', 'hestia'),
        'not_found'             => __('No 3D Models found', 'hestia'),
        'not_found_in_trash'    => __('No 3D Models found in trash', 'hestia'),
        'parent'                => __('Parent 3D Model', 'hestia'),
        'featured_image'        => __('Featured Image', 'hestia'),
        'set_featured_image'    => __('Set featured image', 'hestia'),
        'remove_featured_image' => __('Remove featured image', 'hestia'),
        'use_featured_image'    => __('Use as featured image', 'hestia'),
        'archives'              => __('3D Model archives', 'hestia'),
        'insert_into_item'      => __('Insert into 3D Model', 'hestia'),
        'uploaded_to_this_item' => __('Uploaded to this 3D Model', 'hestia'),
        'filter_items_list'     => __('Filter 3D Models', 'hestia'),
        'items_list_navigation' => __('3D Models navigation', 'hestia'),
        'items_list'            => __('3D Models list', 'hestia'),
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-smiley',
        'show_in_admin_bar'   => true,
        'show_in_nav_menus'   => true,
        'can_export'          => true,
        'has_archive'         => true,
        'hierarchical'        => false,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'supports'            => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields'),
        'rewrite'             => array('slug' => '3d-models'),
    );

    register_post_type('3d-models', $args);
}
add_action('init', 'custom_post_3d_model');

?>