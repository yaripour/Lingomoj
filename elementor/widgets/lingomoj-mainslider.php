<?php

class Elementor_lingomoj_mainslider extends \Elementor\Widget_Base {

    public function get_name() {
        return 'lingomoj_mainslider';
    }

    public function get_title() {
        return 'اسلایدر اصلی لینگوموج';
    }

    public function get_icon() {
        return 'far fa-images';
    }

    public function get_categories() {
        return ['basic'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(
            'image_mainslider',
            [
                'label' => __( 'تصویر اسلایدر', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
            ]
        );
        $repeater->add_control(
            'url_mainslider', [
                'label' => __( 'لینک اسلایدر', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __( 'اسلایدر' , 'plugin-domain' ),
                'label_block' => true,
                'input_type' => 'url',
            ]
        );
        $repeater->add_control(
            'target_mainslider',
            [
                'label' => __( 'بازکردن لینک', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT,
                'default' => '_blank',
                'options' => [
                    '_blank'  => __( 'در پنجره جدید بازشود', 'plugin-domain' ),
                    '_self' => __( 'در همان پنجره باز شود', 'plugin-domain' ),
                ],
            ]
        );


        $this->add_control(
            'main_slider',
            [
                'label' => __( 'اسلایدر', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'url_mainslider' => __( '', 'plugin-domain' ),
                        'image_mainslider' => __( 'اسلایدر1', 'plugin-domain' ),
                    ],
                ],
                'title_field' => 'اسلایدر',
            ]
        );

        $this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        $mainslider = $settings['main_slider'];
        //var_dump($mainslider);

        ?>
        <section class="box-slider">
            <div id="main-slider" class="owl-carousel owl-theme">
                <?php foreach ($mainslider as $slider) { ?>
                    <div class="item"><a target="<?php echo $slider['target_mainslider']; ?>" href="<?php echo $slider['url_mainslider']; ?>"><img src="<?php echo $slider['image_mainslider']['url']; ?>"></a> </div>
                <?php } ?>
            </div>
        </section>
        <?php
    }

    protected function _content_template() {}

}