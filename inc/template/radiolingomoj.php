<section class="tv">
    <div class="container">
        <div class="tv-head">
            <div class="tv-titile">
                <h2>رادیو لینگوموج</h2>
                <h5>پادکست های لینگوموج</h5>

            </div>
            <div class="podcast-link">
                <a href="<?php echo get_post_type_archive_link('radiolingomoj') ?>">شنیدن همه پادکست ها</a>
            </div>
        </div>
        <div class="latest-podcast-box">
            <div class="left-podcasts">
                <figure>
                    <img src="<?php echo get_template_directory_uri().'/img/radiomoj.png' ?>">
                </figure>
            </div>

            <div class="right-podcasts">
                <?php
                $mainv = new WP_Query(array(
                    'post_type' => 'radiolingomoj',
                    'posts_per_page' => 4,

                ));
                if ($mainv->have_posts()){
                while ($mainv->have_posts()) : $mainv->the_post();?>
                <div class="other-podcasts">

                    <a href="<?php the_permalink(); ?>">


                    <audio controls>
                        <source src="http://localhost/lingomoj/wp-content/uploads/2021/09/mihanenglish_eslpod_0250.mp3" type="audio/mpeg">
                    </audio>
                    <h2><?php the_title(); ?></h2>
                    </a>

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