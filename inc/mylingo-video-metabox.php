<?php

add_action( 'cmb2_admin_init', 'cmb2_sample_metaboxes' );

function cmb2_sample_metaboxes ()
{

    $video = new_cmb2_box(array(
        'id' => 'tt_metabox',
        'title' => __('آپلود ویدیو', 'cmb2'),
        'object_types' => array('mylingovideos'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));


    $video->add_field( array(
        'name'    => 'آپلود ویدیو',
        'desc'    => 'آپلود فایل ویدیویی شما',
        'id'      => 'mylingo_video_tv',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود ویدیو' // Change upload button text. Default: "Add or Upload File"
        ),

        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );


    $time = new_cmb2_box(array(
        'id' => 'mylingo_video_tv_time_metabox',
        'title' => __('زمان ویدیو', 'cmb2'),
        'object_types' => array('mylingovideos'), // Post type
        'context' => 'side',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    $time->add_field( array(
        'desc'    => 'زمان ویدیو را وارد کنید مثلا 12:48',
        'id'      => 'mylingo_video_tv_time',
        'type'    => 'text',
    ) );
}

