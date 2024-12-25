<?php
if( function_exists('acf_add_options_page') ) {

acf_add_options_sub_page(array(
    'page_title'    => 'Theme General Settings',
    'menu_title'    => 'General',
    'menu_slug'     => 'theme-general-settings',
    'capability'    => 'edit_posts',
));

acf_add_options_sub_page(array(
    'page_title'    => 'Theme Header Settings',
    'menu_title'    => 'Header',
    'menu_slug'     => 'theme-header-settings',
    'capability'    => 'edit_posts',
));

acf_add_options_sub_page(array(
    'page_title'    => 'Theme Footer Settings',
    'menu_title'    => 'Footer',
    'menu_slug'     => 'theme-footer-settings',
    'capability'    => 'edit_posts',
));

acf_add_options_sub_page(array(
    'page_title'    => 'Theme Portfolio Settings',
    'menu_title'    => 'Portfolio',
    'menu_slug'     => 'theme-Portfolio-settings',
    'capability'    => 'edit_posts',
));

acf_add_options_sub_page(array(

    'page_title'    => 'Theme Skills Settings',
    'menu_title'    => 'Skills',
    'menu_slug'     => 'theme-Skills-settings',
    'capability'    => 'edit_posts',
));

acf_add_options_sub_page(array(
    'page_title'    => 'Theme Clients Settings',
    'menu_title'    => 'Clients',
    'menu_slug'     => 'theme-Clients-settings',
    'capability'    => 'edit_posts',
));

}
?>