<?php get_header(); ?>


<section class="box-slider">
    <div id="main-slider" class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo get_template_directory_uri(). '/img/1.jpg'?>"></div>
        <div class="item"><img src="<?php echo get_template_directory_uri(). '/img/2.jpg'?>"></div>
    </div>
</section>


<?php
include_once 'inc/template/mylingovideos.php'
?>
<?php
include_once 'inc/template/radiolingomoj.php'
?>

<section class="articles">
    <div class="container">
        <div class="articles-head">
            <div class="articles-titile">
                <h2>آخرین مقالات</h2>
                <h5>بلاگ</h5>

            </div>
            <div class="articles-link">
                <a href="<?php echo get_post_type_archive_link('tv'); ?>">همه مقالات</a>
            </div>
        </div>
        <div class="articles-slider">
                <div id="articles-slider" class="owl-carousel owl-theme">
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




                </div>
        </div>

    </div>
</section>

<section class="adv">
    <div class="container">
        <div class="right-adv">
            <h2 class="adv-title">تعیین سطح رایگان</h2>
            <p class="adv-desc">با انجام این آزمون تعیین سطح آنلاین کاملا رایگان، از سطح تقریبی زبان خود آگاه خواهید شد.<br>برای شروع روی دکمه زیر کلیک کنید</p>
            <a href="#">شروع تعیین سطح</a>
        </div>
        <div class="left-adv">
            <figure>
                <img src="<?php echo get_template_directory_uri(). '/img/1.webp'?>">
            </figure>

        </div>
    </div>

</section>




<?php include_once 'inc/template/course.php'?>

<?php get_footer(); ?>