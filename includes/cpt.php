<?php

function twomiles_custom_post(){

    // category Post
    $categoryPost_label = array(
        'name'               => __('Category Post','textdomain'),
        'singular_name'      => __('category Post','textdomain'),
        'add_new'            => __('Add category Post','textdomain'),
        'add_new_item'       => __('Add New category','textdomain'),
        'edit_item'          => __('Edit category Post','textdomain'),
        'all_items'          => __('category Post','textdomain')

    );

    $categoryPost_args = array(
        'labels'                 => $categoryPost_label,
        'public'                 => true,
        'capability_type'        => 'post',
        'show_ui'                => true,
        'taxonomies'             => array ('post_tag', 'category'),
        'supports'                => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('categoryPost', $categoryPost_args);

    // TAgs
    $tags_label = array(
        'name'               => __('Tags','textdomain'),
        'singular_name'      => __('Tags','textdomain'),
        'add_new'            => __('Add Tags','textdomain'),
        'add_new_item'       => __('Add New Tags','textdomain'),
        'edit_item'          => __('Edit Tags','textdomain'),
        'all_items'          => __('Tags','textdomain')

    );

    $tags_args = array(
        'labels'                 => $tags_label,
        'public'                 => true,
        'capability_type'        => 'post',
        'show_ui'                => true,
        'taxonomies'             => array ('post_tag', 'category'),
        'supports'                => array ('title', 'editor', 'thumbnail', 'excerpt')
    );

    register_post_type('tags', $tags_args);

}
add_action('init', 'twomiles_custom_post');