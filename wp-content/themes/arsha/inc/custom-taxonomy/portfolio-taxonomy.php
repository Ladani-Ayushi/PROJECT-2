<?php

function create_portfolio_taxonomy() {

    $labels = array(
        'name' => _x('Portfolio Categories', 'taxonomy general name'),
        'singular_name' => _x('Portfolio Category', 'taxonomy singular name'),
        'search_items' => __('Search Portfolio Categories'),
        'all_items' => __('All Portfolio Categories'),
        'parent_item' => __('Parent Portfolio Category'),
        'parent_item_colon' => __('Parent Portfolio Category:'),
        'edit_item' => __('Edit Portfolio Category'),
        'update_item' => __('Update Portfolio Category'),
        'add_new_item' => __('Add New Portfolio Category'),
        'new_item_name' => __('New Portfolio Category Name'),
        'menu_name' => __('Portfolio Categories'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'portfolio-category'),
    );

    register_taxonomy('portfolio_category', array('portfolio'), $args);
}
add_action('init', 'create_portfolio_taxonomy');

?>