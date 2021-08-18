<?php
function add_theme_scripts() {
    wp_enqueue_style( 'all', get_template_directory_uri() . '/css/all.min.css', array(), false, 'all');
    wp_enqueue_style( 'owl.carousel', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), false, 'all');
    wp_enqueue_style( 'owl.theme', get_template_directory_uri() . '/css/owl.theme.default.min.css', array(), false, 'all');
    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), false, 'all' );
    wp_enqueue_script( 'jq', get_template_directory_uri() . '/js/jquery-3.6.0.min.js', array(), false, true);
    wp_enqueue_script( 'owl.carousel.js', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'main.js', get_template_directory_uri() . '/js/main.js', array('jquery'), false, true);

}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


function mylingoteam_setup_theme () {
    add_theme_support( feature: 'title-tag');
    add_theme_support( feature: 'automatic-feed-links');
    add_theme_support(feature: 'post-thumbnails');
    register_nav_menus(
        array(
            'header-menu' => __( 'منوی اصلی' ),
            'top-menu' => __( 'منوی نوار بالا' )
        )
    );

}

add_action('after_setup_theme','mylingoteam_setup_theme');
