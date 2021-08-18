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
    add_image_size(name:'article',width:291,height: 320, crop:true);
    register_nav_menus(
        array(
            'header-menu' => __( 'منوی اصلی' ),
            'top-menu' => __( 'منوی نوار بالا' )
        )
    );

}

add_action('after_setup_theme','mylingoteam_setup_theme');

function custom_excerpt_lenght () {
    return 30;
}
add_filter('excerpt_lenght','custom_excerpt_lenght',999);



function post_type_mylingoteam_videos() {
    $labels = array(
        'name'               => __( 'مای لینگو ویدیو' ),
        'singular_name'      => __( 'مای لینگو ویدیو' ),
        'menu_name'          => __( 'مای لینگو ویدیو' ),
        'name_admin_bar'     => __( 'مای لینگو ویدیو' ),
        'add_new'            => __( ' افزودن جدید' ),
        'add_new_item'       => __( 'پست مخصوص ویدیوهای آموزشی' ),
        'new_item'           => __( 'پست جدید' ),
        'edit_item'          => __( 'ویرایش پست' ),
        'view_item'          => __( 'مشاهده پست' ),
        'all_items'          => __( 'همه ویدیوها' ),
        'search_items'       => __( 'جستجو در بین ویدیوها' ),
        'parent_item_colon'  => __( 'مادر' ),
        'not_found'          => __( 'مطلب یافت نشد' ),
        'not_found_in_trash' => __( 'مطلب در زباله دان یافت نشد' )
    );
    $args = array(
        'labels'             => $labels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,

        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'taxonomies' => array('post_tag'),
        //'taxonomies' => array('post_tag'),
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
    register_post_type( 'mylingo_videos', $args );
}
add_action( 'init', 'post_type_mylingoteam_videos' );



// اضافه کردن تاکسونومی برای پست تایپ مای لینگو
function create_taxonomies_for_mylingo_videos() {
    $labels = array(
        'name'              => _x( 'دسته بندی', 'دسته بندی' ),
        'singular_name'     => _x( 'دسته بندی پست ها ', 'دسته بندی' ),
        'search_items'      => __( 'جستجویه دسته' ),
        'all_items'         => __( 'تمام دسته ها' ),
        'parent_item'       => __( 'زیر دسته' ),
        'parent_item_colon' => __( 'Parent Genre:' ),
        'edit_item'         => __( 'ویرایش دسته' ),
        'update_item'       => __( 'بروزرسانی دسته' ),
        'add_new_item'      => __( 'افزودن دسته جدید' ),
        'new_item_name'     => __( 'نام جدید دسته' ),
        'menu_name'         => __( 'دسته بندی' ),
    );

    $ar = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );

    register_taxonomy( 'cat_mylingo_videos', 'mylingo_videos' , $ar );
}
add_action( 'init', 'create_taxonomies_for_mylingo_videos');



