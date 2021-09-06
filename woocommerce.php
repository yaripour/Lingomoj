<?php get_header() ?>
    <div class="single">
        <div class="container">
            <div class="main-single main-pro">
                <div class="product-title">
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                </div>
                <div class="product-thumbnail"
                <div class="post-pic">
                    <figure>
                        <?php
                        $video = get_post_meta(get_the_ID(), key: 'mylingo_video_product', single: true);
                        $poster= get_post_meta(get_the_ID(), key: 'mylingo_video_product_poster', single: true);
                        if(!empty($video)){
                            $attr = array(
                                'src' => $video,
                                'width' => '800',
                                'height' => '400',
                                'poster' =>'$poster',

                            );
                            echo wp_video_shortcode($attr);
                        } else {
                            the_post_thumbnail();
                        }
                        ?>
                    </figure>
                </div>

                <article class="woocommerce">
                    <?php woocommerce_content(); ?>
                </article>


            </div>

        </div>
    </div>


<?php get_footer() ?>