<?php

add_action( 'cmb2_admin_init', 'cmb2_lingomoj_metabox_product_teacher' );

function cmb2_lingomoj_metabox_product_teacher()
{

    $teacher_pro = new_cmb2_box(array(
        'id' => 'lingomoj_product_metabox_teacher',
        'title' => __('درباره مدرس', 'cmb2'),
        'object_types' => array('product'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));


    $teacher_pro->add_field( array(
        'name'    => 'تصویر مدرس',
        //'desc'    => 'آپلود فایل ویدیوی معرفی دوره',
        'id'      => 'lingomoj_course_teacher_pic',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود تصویر' // Change upload button text. Default: "Add or Upload File"
        ),
    ) );


    $teacher_pro->add_field( array(
        'name'    => 'نام و نام خانواگی',
        'desc'    => 'نام و نام خانوادگی مدرس را وارد کنید',
        'id'      => 'lingomoj_course_teacher_name',
        'type'    => 'text',
    ) );

    $teacher_pro->add_field( array(
        'name'    => 'درباره مدرس',
        'desc'    => 'در این قسمت میتوانید رزومه مدرس را وارد کنید',
        'id'      => 'lingomoj_course_teacher_aboute',
        'type'    => 'textarea',
    ) );



}