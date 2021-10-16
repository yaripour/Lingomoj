<?php

add_action( 'cmb2_admin_init', 'lingomoj_register_theme_options_metabox' );

function lingomoj_register_theme_options_metabox() {

    $alloptions = new_cmb2_box( array(
        'id'           => 'lingomoj_option_metabox',
        'title'        => esc_html__( 'تنظیمات قالب', 'lingomoj' ),
        'object_types' => array( 'options-page' ),
        'option_key'      => 'lingomoj_options', // The option key and admin menu page slug.
    //    'icon_url'        => 'dashicons-palmtree', // Menu icon. Only applicable if 'parent_slug' is left empty.
    ) );


// شروع تنظیمات بخش عمومی
    $general = $alloptions->add_field( array(
        'id'          => 'lingomoj_general_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات عمومی ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );

    $alloptions->add_group_field( $general, array(
        'name' => 'تصویر لوگو',
        'id'   => 'lingomoj_logo_option',
        'type' => 'file',
    ) );
    $alloptions->add_group_field( $general, array(
        'name' => 'تصویر فیوآیکون',
        'id'   => 'lingomoj_favicon_option',
        'type' => 'file',
    ) );
    $alloptions->add_group_field( $general, array(
        'name' => 'محدوده عرض محتوا',
        'id'   => 'lingomoj_width_container_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پیشفرض 1200 است',
        ),
    ) );
    $alloptions->add_group_field( $general, array(
        'name' => 'رنگ اصلی سایت',
        'id'   => 'lingomoj_color_main_option',
        'type'    => 'colorpicker',
        'default' => '#FBBC09',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#FBBC09', '#FEDF3E', '#E0E0E0', '#63AFBF', ),
            ) ),
        ),
    ) );

    $alloptions->add_group_field( $general, array(
        'name' => ' رنگ دوم سایت ',
        'id'   => 'lingomoj_color_second_option',
        'type'    => 'colorpicker',
        'default' => '#63AFBF',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                // Iris Options set here as values in the 'data-colorpicker' array
                'palettes' => array( '#FBBC09', '#FEDF3E', '#E0E0E0', '#63AFBF', ),
            ) ),
        ),
    ) );
    // پایان تنظیمات بخش عمومی


    // شروع تنظیمات بخش تاپ منو
    $topmenu = $alloptions->add_field( array(
        'id'          => 'lingomoj_topmenu_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات منوی بالا ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'منوی بالا',
        'id'   => 'lingomoj_topmenu_active_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'رنگ زمینه منوی بالا',
        'id'   => 'lingomoj_color_topmenu_option',
        'type'    => 'colorpicker',
        'default' => '#FBBC09',
        'attributes' => array(
            'data-colorpicker' => json_encode( array(
                'palettes' => array( '#FBBC09', '#FEDF3E', '#E0E0E0', '#63AFBF', ),
            ) ),

            'data-conditional-id'     => 'lingomoj_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'شماره تلفن',
        'id'   => 'lingomoj_tell_topmenu_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'مشاوره و پشتیبانی واتساپ : 0938319473',
            'data-conditional-id'     => 'lingomoj_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'ایمیل',
        'id'   => 'lingomoj_email_topmenu_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'lingomoj@gmail.com',
            'data-conditional-id'     => 'lingomoj_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'نمایش/مخفی جستجو',
        'id'   => 'lingomoj_search_topmenu_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
        'attributes' => array(
            'data-conditional-id'     => 'lingomoj_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );
    $alloptions->add_group_field( $topmenu, array(
        'name' => 'نمایش/مخفی سبدخرید',
        'id'   => 'lingomoj_cart_topmenu_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'فعال', 'cmb2' ),
            'disable'   => __( 'غیر فعال', 'cmb2' ),
        ),
        'default' => 'enable',
        'attributes' => array(
            'data-conditional-id'     => 'lingomoj_topmenu_active_option',
            'data-conditional-value'  => 'enable',
        ),
    ) );


    // شروع تنظیمات بخش هدر
    $header = $alloptions->add_field( array(
        'id'          => 'lingomoj_header_options',
        'type'        => 'group',
        'repeatable'  => false, // use false if you want non-repeatable group
        'options'     => array(
            'group_title'       => __( 'تنظیمات هدر ', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'sortable'          => false,
            'closed'         => true, // true to have the groups closed by default
            // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cmb2' ), // Performs confirmation before removing group.
        ),
    ) );
    $alloptions->add_group_field( $header, array(
        'name' => 'انتخاب سربرگ',
        'id'   => 'lingomoj_header_select_option',
        'type'             => 'select',
        'show_option_none' => false,
        'default'          => 'header_one',
        'options'          => array(
            'header_one' => __( 'سربرگ 1', 'cmb2' ),
            'header_two'   => __( 'سربرگ 2', 'cmb2' ),
        ),
    ) );
    $alloptions->add_group_field( $header, array(
        'name' => 'نمایش/مخفی دکمه سربرگ',
        'id'   => 'lingomoj_header_button_option',
        'type'    => 'radio_inline',
        'options' => array(
            'enable' => __( 'نمایش', 'cmb2' ),
            'disable'   => __( 'مخفی', 'cmb2' ),
        ),
        'default' => 'enable',
    ) );
    $alloptions->add_group_field( $header, array(
        'name' => 'متن دکمه سربرگ',
        'id'   => 'lingomoj_text_button_header_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پبشفرض : ورود / ثبت نام است',
        ),
    ) );
    $alloptions->add_group_field( $header, array(
        'name' => 'لینک دکمه سربرگ',
        'id'   => 'lingomoj_link_button_header_option',
        'type' => 'text',
        'attributes' => array(
            'placeholder' => 'پبشفرض لینک حساب کاربری است ',
        ),
    ) );

}






function lingomoj_get_option( $key = '', $default = false ) {
    if ( function_exists( 'cmb2_get_option' ) ) {
        // Use cmb2_get_option as it passes through some key filters.
        return cmb2_get_option( 'lingomoj_options', $key, $default );
    }

    // Fallback to get_option if CMB2 is not loaded yet.
    $opts = get_option( 'lingomoj_options', $default );

    $val = $default;

    if ( 'all' == $key ) {
        $val = $opts;
    } elseif ( is_array( $opts ) && array_key_exists( $key, $opts ) && false !== $opts[ $key ] ) {
        $val = $opts[ $key ];
    }

    return $val;
}