<section class="tv">
    <div class="container">
        <div class="tv-head">
            <div class="tv-titile">
                <h2>مای لینگو تیم</h2>
                <h5>ویدیوهای آموزشی</h5>

            </div>
            <div class="tv-link">
                <a href="<?php echo get_post_type_archive_link('mylingovideos') ?>">همه ویدیوها</a>
            </div>
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

                <div class="all-videos">
                    <a href="<?php echo get_post_type_archive_link('mylingovideos') ?>">تماشای همه ویدیوها</a>
                </div>

            </div>
        </div>
    </div>

</section>

<div class="line"></div>