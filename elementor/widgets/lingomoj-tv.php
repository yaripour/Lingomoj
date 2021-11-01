<?php

class Elementor_lingomoj_tv extends \Elementor\Widget_Base {

    public function get_name() {
        return 'lingomoj_tv';
    }

    public function get_title() {
        return 'لینگوموج TV';
    }

    public function get_icon() {
        return 'fas fa-tv';
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
            'lingomoj_tv_title',
            [
                'label' => __( 'عنوان را وارد کنید', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => '',
            ]
        );
        $this->add_control(
            'lingomoj_tv_subtitle',
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
            'lingomoj_tv_btn_title',
            [
                'label' => __( 'متن دکمه بالا', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
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
            'lingomoj_tv_btn_ztitle',
            [
                'label' => __( 'متن دکمه زیرین', 'plugin-name' ),
                'type' => \Elementor\Controls_Manager::TEXT,
                'input_type' => 'text',
                'placeholder' => '',
            ]
        );



        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();

        ?>

        <section class="tv">
            <div class="container">
                <div class="tv-head">
                    <div class="tv-titile">
                        <h2><?php echo $settings['lingomoj_tv_title'] ?></h2>
                        <h5><?php echo $settings['lingomoj_tv_subtitle'] ?></h5>

                    </div>
        <?php if (!empty($settings['lingomoj_tv_btn_title'])) : ?>
                    <div class="tv-link">
                        <a href="<?php echo get_post_type_archive_link('mylingovideos') ?>"><?php echo $settings['lingomoj_tv_btn_title'] ?></a>
                    </div>
        <?php endif; ?>
                </div>
                <div class="video-box">
                    <div class="right-videobox">

                        <?php
                        $mainv = new WP_Query(array(
                            'post_type' => 'mylingovideos',
                            'posts_per_page' => 1,
                        ));
                        if ($mainv->have_posts()){
                            while ($mainv->have_posts()) : $mainv->the_post();?>
                                <div class="main-video">
                                    <a href="<?php the_permalink(); ?>">
                                        <figure>
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('large_video_pic');
                                            }
                                            else {
                                                ?>
                                                <img src="<?php echo get_template_directory_uri().'/img/0.jpg' ?>"> <?php
                                            }
                                            ?>
                                            <i class="fas fa-play-circle"></i>
                                            <?php
                                            $time = get_post_meta(get_the_ID(), key: 'mylingo_video_tv_time', single: true);
                                            if(!empty($time)){
                                                ?>
                                                <span><?php echo $time; ?><i class="fas fa-play"></i></span>
                                                <?php
                                            }
                                            ?>

                                            <h2><?php the_title(); ?></h2>
                                        </figure>
                                    </a>

                                </div>
                            <?php
                            endwhile;
                        }
                        wp_reset_postdata();
                        ?>

                    </div>
                    <div class="left-videobox">
                        <?php
                        $mainv = new WP_Query(array(
                            'post_type' => 'mylingovideos',
                            'posts_per_page' => 6,
                            'offset' =>1,
                        ));
                        if ($mainv->have_posts()){
                            while ($mainv->have_posts()) : $mainv->the_post();?>
                                <div class="other-videos">

                                    <a href="<?php the_permalink(); ?>">

                                        <figure>
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('small_video_pic');
                                            }
                                            else {
                                                ?>
                                                <img src="<?php echo get_template_directory_uri().'/img/0.jpg' ?>"> <?php
                                            }
                                            ?>
                                            <i class="fas fa-play"></i>
                                            <?php
                                            $time = get_post_meta(get_the_ID(), key: 'mylingo_video_tv_time', single: true);
                                            if(!empty($time)){
                                                ?>
                                                <span><?php echo $time; ?><i class="fas fa-play"></i></span>
                                                <?php
                                            }
                                            ?>
                                            <h2><?php the_title(); ?></h2>
                                        </figure>
                                    </a>

                                </div>
                            <?php
                            endwhile;
                        }
                        wp_reset_postdata();
                        ?>
        <?php if (!empty($settings['lingomoj_tv_btn_ztitle'])) { ?>
                        <div class="all-videos">
                            <a href="<?php echo get_post_type_archive_link('mylingovideos') ?>"><?php echo $settings['lingomoj_tv_btn_ztitle']; ?></a>
                        </div>
        <?php } ?>

                    </div>
                </div>
            </div>

        </section>

        <div class="line"></div>
        <?php
    }

    protected function _content_template() {}

}