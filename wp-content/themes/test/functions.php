<?php


function test_css_files(){
    wp_enqueue_style('main-css', get_template_directory_uri().'/css/style.css', false, '0.1', 'all');
}

add_action('wp_enqueue_scripts', 'test_css_files');

function register_menus(){
    register_nav_menus(
        array(
            'main_nav' => 'menu_główne',
            'footer_nav' => 'menu_dolne'
        )
    );
}

add_action('init','register_menus');

function test_post_types(){
    register_post_type('slider', array(
        'public' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'labels' => array(
            'name' => 'Mój slider',
            'add_new_item' => 'Dodaj nowy slajd',
            'edit_item' => 'Edytuj slajdy',
            'all_items' => 'Wszystkie slajdy',

        )
    ));
}

add_action('init', 'test_post_types');

?>