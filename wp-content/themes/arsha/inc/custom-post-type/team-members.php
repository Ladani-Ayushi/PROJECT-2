<?php

function create_team_member_post_type() {
    // Register the custom post type
    register_post_type('team_member',
        array(
            'labels' => array(
                'name' => __('Team Members'),
                'singular_name' => __('Team Member'),
                'add_new' => __('Add New'),
                'add_new_item' => __('Add New Team Member'),
                'edit_item' => __('Edit Team Member'),
                'new_item' => __('New Team Member'),
                'view_item' => __('View Team Member'),
                'search_items' => __('Search Team Members'),
                'not_found' => __('No Team Members found'),
                'not_found_in_trash' => __('No Team Members found in Trash'),
                'all_items' => __('All Team Members'),
                'archives' => __('Team Member Archives'),
                'insert_into_item' => __('Insert into Team Member'),
                'uploaded_to_this_item' => __('Uploaded to this Team Member'),
                'filter_items_list' => __('Filter Team Members list'),
                'items_list_navigation' => __('Team Members list navigation'),
                'items_list' => __('Team Members list'),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'team'),
            'supports' => array('title', 'editor', 'thumbnail'),
            'publicly_queryable' => false, 
        )
    );
}


function init_team_member_post_type() {
    create_team_member_post_type();
}


add_action('init', 'init_team_member_post_type');

?>
