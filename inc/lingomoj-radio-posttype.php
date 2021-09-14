<?php
// register post type
function post_type_lingomoj_radio() {
$labels2 = array(
'name'               => __( 'رادیو لینگوموج' ),
'singular_name'      => __( 'رادیو لینگوموج' ),
'menu_name'          => __( 'رادیو لینگوموج' ),
'name_admin_bar'     => __( 'رادیو لینگوموج' ),
'add_new'            => __( ' افزودن جدید' ),
'add_new_item'       => __( 'پست مخصوص پادکست لینگوموج' ),
'new_item'           => __( 'پست جدید' ),
'edit_item'          => __( 'ویرایش پست' ),
'view_item'          => __( 'مشاهده پست' ),
'all_items'          => __( 'همه پادکست ها' ),
'search_items'       => __( 'جستجو در بین پادکست ها' ),
'parent_item_colon'  => __( 'مادر' ),
'not_found'          => __( 'مطلب یافت نشد' ),
'not_found_in_trash' => __( 'مطلب در زباله دان یافت نشد' )
);
$args2 = array(
'labels'             => $labels2,
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
register_post_type( 'radiolingomoj', $args2 );
}
add_action( 'init', 'post_type_lingomoj_radio' );



// اضافه کردن تاکسونومی برای پست تایپ مای لینگو
function create_taxonomies_for_lingomoj_radio() {
$labels2 = array(
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

$ar2 = array(
'hierarchical'      => true,
'labels'            => $labels2,
'show_ui'           => true,
'show_admin_column' => true,
'query_var'         => true,
);

register_taxonomy( 'cat_lingomoj_radio', 'radiolingomoj' , $ar2 );
}
add_action( 'init', 'create_taxonomies_for_lingomoj_radio');
