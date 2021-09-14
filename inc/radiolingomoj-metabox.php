<?php

add_action( 'cmb2_admin_init', 'cmb2_radio_metaboxes' );

function cmb2_radio_metaboxes ()
{

    $radio = new_cmb2_box(array(
        'id' => 'radiolingo_metabox',
        'title' => __('آپلود فایل صوتی', 'cmb2'),
        'object_types' => array('radiolingomoj'), // Post type
        'context' => 'normal',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));


    $radio->add_field( array(
        'name'    => 'آپلود فایل صوتی',
        'desc'    => 'آپلود فایل ویدیویی شما',
        'id'      => 'lingomoj_radio',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => true, // Hide the text input for the url
        ),
        'text'    => array(
            'add_upload_file_text' => 'آپلود فایل صوتی' // Change upload button text. Default: "Add or Upload File"
        ),

        'preview_size' => 'large', // Image size to use when previewing in the admin.
    ) );


    $time2 = new_cmb2_box(array(
        'id' => 'lingomoj_radio_time_metabox',
        'title' => __('زمان فایل', 'cmb2'),
        'object_types' => array('radiolingomoj'), // Post type
        'context' => 'side',
        'priority' => 'high',
        'show_names' => true, // Show field names on the left
        // 'cmb_styles' => false, // false to disable the CMB stylesheet
        // 'closed'     => true, // Keep the metabox closed by default
    ));

    $time2->add_field( array(
        'desc'    => 'زمان فایل را وارد کنید مثلا 12:48',
        'id'      => 'lingomoj_radio_time',
        'type'    => 'text',
    ) );
}

