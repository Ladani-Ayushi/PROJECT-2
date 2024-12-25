<?php

function create_client_post_type() {
    register_post_type('client',
        array(
            'labels' => array(
                'name' => __('Clients'),
                'singular_name' => __('Client')
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'thumbnail'),
            'publicly_queryable' => false, 
        )
    );
}
add_action('init', 'create_client_post_type');

?>
