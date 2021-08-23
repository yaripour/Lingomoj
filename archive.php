<?php get_header(); ?>

<div class="single">
    <div class="container">
        <div class="main-single">

            <section class="category-post">
                <div class="category-head">
                    <h4>آخرین مطالب از دسته <span style="color: #5caf21" >آموزش های انگلیسی</span></h4>
                </div>

                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();?>
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
                else :
                    _e( 'Sorry, no posts were found.', 'textdomain' );
                endif;
                ?>



            </section>
        </div>
        <?php get_sidebar(); ?>

    </div>
</div>


<?php get_footer(); ?>
