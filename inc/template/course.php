<section class="course">
    <div class="container">
        <div class="course-head">
            <div class="course-titile">
                <h2>دوره های ویژه</h2>
                <h5>دوره ها</h5>

            </div>
            <div class="course-link">
                <a href="#">آرشیو دوره ها</a>
            </div>
        </div>
        <div class="course-slider">
            <div id="course-slider" class="owl-carousel owl-theme">
                <?php
                $pro = new WP_Query(array(
                    'post_type' => 'product',
                    'posts_per_page' => 5,

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
                            <span>یاری پور</span>
                            <i class="fas fa-chalkboard-teacher"></i>
                        </div>
                        <div class="rate">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>

                        </div>
                    </div>
                    <div class="details">
                        <div class="price">
                            <del>1,000,000</del>
                            <span>رایگان</span>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i>18
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