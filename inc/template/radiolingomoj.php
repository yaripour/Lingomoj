<section class="tv">
    <div class="container">
        <div class="tv-head">
            <div class="tv-titile">
                <h2>رادیو</h2>
                <h5>پادکست های لینگوموج</h5>

            </div>
            <div class="podcast-link">
                <a href="<?php echo get_post_type_archive_link('radiolingomoj') ?>">شنیدن همه پادکست ها</a>
            </div>
        </div>
        <div class="latest-podcast-box">

            <div class="podcast-box">
                <div class="left-podcasts">
                    <figure>

                        <i class="fas fa-podcast"></i>
                    </figure>
                </div>
            <div class="right-podcasts">
                <?php
                $podc = get_post_meta(get_the_ID(), key: 'lingomoj_radio', single: true);
                $attr = array(
                    'src' => $podc,
                    'loop'   => 'off',

                );

                $mainr = new WP_Query(array(
                    'post_type' => 'radiolingomoj',
                    'posts_per_page' => 6,

                ));

                if ($mainr->have_posts()){
                while ($mainr->have_posts()) : $mainr->the_post();?>
                <div class="other-podcasts">

                    <audio controls class="pod-player">
                        <source src="<?php echo wp_audio_shortcode($attr);?>
                    </audio>


                <div class="details">
                        <div class="title-p">
                            <h2><?php the_title(); ?></h2>
                        </div>
                    <div class="dl-p">
                        <i class="fas fa-download"></i>

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

<div class="line"></div>