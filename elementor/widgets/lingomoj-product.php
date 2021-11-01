<?php

class Elementor_lingomoj_product extends \Elementor\Widget_Base {

    public function get_name() {
        return 'lingomoj_product';
    }

    public function get_title() {
        return 'اسلایدر محصولات';
    }

    public function get_icon() {
        return 'fas fa-store';
    }

    public function get_categories() {
        return ['basic'];
    }

    function get_product_cat(){
        $terms = get_terms( array(
            'taxonomy' => 'product_cat',
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
            'lingomoj_product_title',
            [
                'label' => __( 'عنوان را وارد کنید', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => '',
            ]
        );
        $this->add_control(
            'lingomoj_product_subtitle',
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
            'lingomoj_product_btn_title',
            [
                'label' => __( 'متن دکمه ', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => '',
            ]
        );
        $this->add_control(
            'lingomoj_product_btn_link',
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
            'lingomoj_select_product_cat',
            [
                'label' => __( 'دسته بندی را انتخاب کنید', 'plugin-domain' ),
                'type' => \Elementor\Controls_Manager::SELECT2,
                'multiple' => true,
                'options' => $this->get_product_cat(),
                'description' =>'لطفا یک دسته بندی را انتخاب کنید'
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
            'lingomoj_product_slide_number',
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
            'lingomoj_product_slide_number_tablet',
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
            'lingomoj_product_slide_number_mobile',
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
            'lingomoj_product_slide_bullet',
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
            'lingomoj_product_slide_loop',
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
            'lingomoj_product_slide_autoplay',
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
            'lingomoj_product_slide_speed',
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
                $('#product_slider_element').owlCarousel({
                    loop:<?php if ($settings['lingomoj_product_slide_loop']) {echo "true"; } else {echo "false"; } ?>,
                    margin:10,
                    nav:true,
                    responsive:{
                        0:{
                            items:<?php echo $settings['lingomoj_product_slide_number_mobile']; ?>
                        },
                        600:{
                            items:<?php echo $settings['lingomoj_product_slide_number_tablet']; ?>
                        },
                        1000:{
                            items:<?php echo $settings['lingomoj_product_slide_number']; ?>
                        }
                    },
                    dots:<?php if ($settings['lingomoj_product_slide_bullet']) {echo "true"; } else {echo "false"; } ?>,
                    autoplay:<?php if ($settings['lingomoj_product_slide_autoplay']) {echo "true"; } else {echo "false"; } ?>,
                    autoplayTimeout:<?php echo $settings['lingomoj_product_slide_speed']; ?>
                })
            });

        </script>

        <section class="course">
            <div class="container">
                <div class="course-head">
                    <div class="course-titile">
                        <h2><?php echo $settings['lingomoj_product_title']; ?></h2>
                        <h5><?php echo $settings['lingomoj_product_subtitle']; ?></h5>

                    </div>
                    <div class="course-link">
                        <a href="<?php echo $settings['lingomoj_product_btn_link']; ?>"><?php echo $settings['lingomoj_product_btn_title']; ?></a>                    </div>
                </div>
                <div class="course-slider">
                    <div id="product_slider_element" class="owl-carousel owl-theme">
                        <?php
                        $pro = new WP_Query(array(
                            'post_type' => 'product',
                            'posts_per_page' => 6,

                            'tax_query' => [[
                                'taxonomy'=> 'product_cat',
                                'field' => 'term_id',
                                'terms'=> $settings['lingomoj_select_product_cat'],
                            ]],
                        ));
                        if ($pro->have_posts()){
                            while ($pro->have_posts()) : $pro->the_post();?>

                                <div class="item course-box">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php
                                        if (has_post_thumbnail()) {
                                            the_post_thumbnail('product');
                                        }
                                        else {
                                            ?><img src="<?php echo get_template_directory_uri().'/img/0.jpg' ?>"> <?php
                                        }
                                        ?>
                                        <h2><?php the_title(); ?></h2></a>
                                    <div class="description">

                                        <div class="teacher">
                            <span>
                                 <?php
                                 $teacher_name = get_post_meta(get_the_ID() , 'lingomoj_course_teacher_name' , true);
                                 if (!empty($teacher_name)) {
                                     echo $teacher_name;
                                 }
                                 ?>
                            </span>
                                            <i class="fas fa-chalkboard-teacher"></i>
                                        </div>
                                        <div class="woocommerce rate">
                                            <?php woocommerce_template_loop_rating(); ?>
                                        </div>

                                    </div>
                                    <div class="details">
                                        <div class="price">
                                            <?php global $product; echo $product->get_price_html(); ?>
                                        </div>
                                        <div class="users">
                                            <i class="fas fa-users"></i>
                                            <?php echo get_post_meta($product->id , 'total_sales' , true); ?>
                                        </div>
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