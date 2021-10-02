<?php get_header(); ?>

    <div class="single-page">
        <div class="container">
            <div class="main-single main-pro">

                <div class="product-title">
                    <header>
                        <h1><?php the_title(); ?></h1>
                    </header>
                </div>

                <div class="product-thumbnail">
                    <figure>
                        <?php
                        $video_pro = get_post_meta(get_the_ID() , 'lingomoj_video_product' , true);
                        $poster = get_post_meta(get_the_ID() , 'lingomoj_video_product_poster' , true);
                        if (!empty($video_pro)) {
                            $attr = array(
                                'src'   =>  $video_pro,
                                'width' => '1200',
                                'height'    => '700',
                                'poster' => $poster,
                            );
                            echo wp_video_shortcode($attr);
                        }
                        else {
                            the_post_thumbnail();
                        }
                        ?>
                    </figure>
                </div>

                <article class="product-single woocommerce">
                    <div class="content-single">
                        <?php woocommerce_content(); ?>
                    </div>
                </article>

                <div class="related-product woocommerce">
                    <?php echo do_shortcode('[related_products per_page=3 columns=3]'); ?>
                </div>
            </div>

            <div class="sidebar side-pro">
                <div class="single-widget">
                    <div class="pro-price">
                        <span class="price-name"> قیمت : </span>
                        <p class="<?php global $product; echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
                    </div>
                    <?php
                    $id = $product->id;
                    if (is_user_logged_in()) {
                        $current_user = wp_get_current_user();
                    }
                    if (wc_customer_bought_product(  $current_user->user_email ,  $current_user->ID , $id )){
                        ?>
                        <div class="price-button">
                            <a>
                                <i class="fas fa-credit-card"></i>
                                دانشجوی دوره هستید!
                            </a>
                        </div>
                        <?php
                    }
                    else {
                        ?>
                        <div class="price-button">
                            <a href="<?php echo do_shortcode("[add_to_cart_url id=$id]"); ?>">
                                <i class="fas fa-credit-card"></i>
                                ثبت نام دوره
                            </a>
                        </div>
                        <?php
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>