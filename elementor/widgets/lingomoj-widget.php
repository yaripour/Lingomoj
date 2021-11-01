<?php

class Elementor_lingomoj_Widget extends \Elementor\Widget_Base {

    public function get_name() {
        return 'my_widget';
    }

    public function get_title() {
        return 'اختصاصی لینگوموج';
    }

    public function get_icon() {
        return 'far fa-grin-tongue-wink';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {
        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'کنترلر المان', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'lingomoj_url',
            [
                'label' => __( 'آدرس را وارد کنید', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => 'پیشفرض lingomoj.ir است',
            ]
        );
        $this->add_control(
            'lingomoj_title',
            [
                'label' => __( 'عنوان را وارد کنید', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => 'پیشفرض لینگوموج است',
            ]
        );

        $this->add_control(
            'more_options',
            [
                'label' => __( 'تنظیمات بیشتر', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );

        $this->add_control(
            'price',
            [
                'label' => __( 'انتخاب عدد', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 5,
                'max' => 100,
                'step' => 5,
                'default' => 10,
                'description' => 'عدد را در مضربی از 5 انتخاب کنید',
            ]
        );

        $this->add_control(
            'item_description',
            [
                'label' => __( 'توضیحات', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __( '', 'plugin-domain' ),
                'placeholder' => __( 'توضیحات را وارد کنید', 'plugin-domain' ),
            ]
        );

        $this->add_control(
            'show_title',
            [
                'label' => __( 'نمایش/مخفی', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'نمایش', 'your-plugin' ),
                'label_off' => __( 'مخفی', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'icon',
            [
                'label' => __( 'انتخاب آیکون', 'text-domain' ),
                'type' => \Elementor\Controls_Manager::ICONS,
                'default' => [
                    'value' => 'fas fa-star',
                    'library' => 'solid',
                ],
            ]
        );

        $this->end_controls_section();



        // کنترلر های تب استایل
        $this->start_controls_section(
            'style_section',
            [
                'label' => __( 'کنترلرهای استایل المان', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'border_style',
            [
                'label' => __( 'حالت بوردر', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => 'solid',
                'options' => [
                    'solid'  => __( 'خط صاف', 'plugin-domain' ),
                    'dashed' => __( 'نقطه چین', 'plugin-domain' ),
                    'dotted' => __( 'نقطه', 'plugin-domain' ),
                    'double' => __( 'دوبل', 'plugin-domain' ),
                    'none' => __( 'None', 'plugin-domain' ),
                ],
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        echo $settings['lingomoj_title'];



        if ($settings['show_title']=='yes') {
            echo '<div class="description">' . $settings['item_description'] . '</div>';
        }


        echo "<br>";
        echo '<div style="border:3px solid #666; border-style: ' . $settings['border_style'] . '"> متن ثابت </div>';

        ?>
        <div class="my-icon-wrapper">
            <?php \Elementor\Icons_Manager::render_icon( $settings['icon'], [ 'aria-hidden' => 'true' ] ); ?>
        </div>
        <?php
    }

    protected function _content_template() {}

}