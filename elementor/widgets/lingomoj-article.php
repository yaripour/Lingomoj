<?php

class Elementor_lingomoj_article extends \Elementor\Widget_Base {

    public function get_name() {
        return 'lingomoj_article';
    }

    public function get_title() {
        return 'اسلایدر مقالات';
    }

    public function get_icon() {
        return 'fa fa-th-list';
    }

    public function get_categories() {
        return ['basic'];
    }

    function get_post_cat(){
        $terms = get_terms( array(
            'taxonomy' => 'category',
            'hide_empty' => true,
        ));

        if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
            foreach ( $terms as $term ) {
                $options[ $term->term_id ] = $term->name;
            }
            return $options;
        }
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
            'lingomoj_article_title',
            [
                'label' => __( 'عنوان را وارد کنید', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => '',
            ]
        );
        $this->add_control(
            'lingomoj_article_subtitle',
            [
                'label' => __( 'زیرعنوان را وارد کنید', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => '',
            ]
        );

        $this->add_control(
            'lingomoj_tv_hr1',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'lingomoj_article_btn_title',
            [
                'label' => __( 'متن دکمه ', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => '',
            ]
        );
        $this->add_control(
            'lingomoj_article_btn_link',
            [
                'label' => __( 'لینک دکمه ', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'url',
                'placeholder' => '',
            ]
        );


        $this->add_control(
            'lingomoj_tv_hr2',
            [
                'type' => \Elementor\Controls_Manager::DIVIDER,
            ]
        );

        $this->add_control(
            'lingomoj_select_category',
            [
                'label' => __( 'دسته بندی را انتخاب کنید', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->get_post_cat(),
                'description' =>'اگر خالی باشد همه دسته ها را در نظر میگیرد'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'slider_settings',
            [
                'label' => __( 'تنظیمات اسلایدر', 'plugin-name' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'lingomoj_article_slide_number',
            [
                'label' => __( 'تعداد پست در دسکتاپ', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 2,
                'max' => 6,
                'step' => 1,
                'default' => 4,
            ]
        );
        $this->add_control(
            'lingomoj_article_slide_number_tablet',
            [
                'label' => __( 'تعداد پست در تبلت', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 2,
                'max' => 6,
                'step' => 1,
                'default' => 1,
            ]
        );
        $this->add_control(
            'lingomoj_article_slide_number_mobile',
            [
                'label' => __( 'تعداد پست در موبایل', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 2,
                'max' => 6,
                'step' => 1,
                'default' => 1,
            ]
        );
        $this->add_control(
            'lingomoj_article_slide_bullet',
            [
                'label' => __( 'نقطه های زیر اسلایدر', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'نمایش', 'your-plugin' ),
                'label_off' => __( 'مخفی', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'lingomoj_article_slide_loop',
            [
                'label' => __( 'چرخش اسلایدها', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'روشن', 'your-plugin' ),
                'label_off' => __( 'خاموش', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );
        $this->add_control(
            'lingomoj_article_slide_autoplay',
            [
                'label' => __( 'حرکت خودکار', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SWITCHER,
                'label_on' => __( 'روشن', 'your-plugin' ),
                'label_off' => __( 'خاموش', 'your-plugin' ),
                'return_value' => 'yes',
                'default' => 'yes',
            ]
        );

        $this->add_control(
            'lingomoj_article_slide_speed',
            [
                'label' => __( 'سرعت حرکت اسلایدها', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'min' => 200,
                'max' => 10000,
                'step' => 1,
                'default' => 5000,
            ]
        );
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>
        <script>
            $(function (){
                $('#multi_slider_element').owlCarousel({
                    loop:<?php if ($settings['lingomoj_article_slide_loop']) {echo "true"; } else {echo "false"; } ?>,
                    margin:10,
                    nav:true,
                    responsive:{
                        0:{
                            items:<?php echo $settings['lingomoj_article_slide_number_mobile']; ?>
                        },
                        600:{
                            items:<?php echo $settings['lingomoj_article_slide_number_tablet']; ?>
                        },
                        1000:{
                            items:<?php echo $settings['lingomoj_article_slide_number']; ?>
                        }
                    },
                    dots:<?php if ($settings['lingomoj_article_slide_bullet']) {echo "true"; } else {echo "false"; } ?>,
                    autoplay:<?php if ($settings['lingomoj_article_slide_autoplay']) {echo "true"; } else {echo "false"; } ?>,
                    autoplayTimeout:<?php echo $settings['lingomoj_article_slide_speed']; ?>
                })
            });

        </script>
        <section class="articles">
            <div class="container">
                <div class="articles-head">
                    <div class="articles-titile">
                        <h2><?php echo $settings['lingomoj_article_title']; ?></h2>
                        <h5><?php echo $settings['lingomoj_article_subtitle']; ?></h5>

                    </div>
                    <div class="articles-link">
                        <a href="<?php echo $settings['lingomoj_article_btn_link']; ?>"><?php echo $settings['lingomoj_article_btn_title']; ?></a>
                    </div>
                </div>
                <div class="articles-slider">
                    <div id="multi_slider_element" class="owl-carousel owl-theme">
                        <?php
        $article = new WP_Query(array(
            'post_type' => 'post',
            'posts_per_page' => 6,
            'cat' => $settings['lingomoj_select_category'],
        ));
        if($article->have_posts()) {
            while ($article->have_posts()) : $article->the_post(); ?>
                                <div class="item article-box">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(size:'article'); ?>
                                        <h2><?php the_title() ?></h2></a>
                                    <p><?php the_excerpt() ?></p>
                                    <div class="btn-more">
                                        <a href="<?php the_permalink(); ?>">ادامه مطلب</a>
                                    </div>
                                </div>
            <?php
            endwhile;
        }
                        wp_reset_postdata();
                        ?>




                    </div>
                </div>

            </div>
        </section>

        <?php
    }

    protected function _content_template() {}

}