<?php get_header(); ?>


<section class="box-slider">
    <div id="main-slider" class="owl-carousel owl-theme">
        <div class="item"><img src="<?php echo get_template_directory_uri(). '/img/1.jpg'?>"></div>
        <div class="item"><img src="<?php echo get_template_directory_uri(). '/img/2.jpg'?>"></div>
    </div>
</section>


<section class="tv">
    <div class="container">
        <div class="tv-head">
            <div class="tv-titile">
                <h2>مای لینگو تیم</h2>
                <h5>ویدیوهای آموزشی</h5>

            </div>
            <div class="tv-link">
                <a href="#">همه ویدیوها</a>
            </div>
        </div>
        <div class="video-box">
            <div class="right-videobox">
                <div class="main-video">

                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(). '/img/3.jpg'?>" >
                            <i class="fas fa-play-circle"></i>
                        </figure>
                    </a>

                </div>


            </div>
            <div class="left-videobox">
                <div class="other-videos">

                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(). '/img/other-videos1.jpg'?>" >
                            <i class="fas fa-play"></i>
                            <h2>آموزش انگلیسی برای کودکان سه تا پنج سال</h2>
                        </figure>
                    </a>

                </div>
                <div class="other-videos">

                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(). '/img/other-videos2.jpg'?>" >
                            <i class="fas fa-play"></i>
                            <h2>آموزش انگلیسی برای کودکان سه تا پنج سال</h2>
                        </figure>
                    </a>

                </div>
                <div class="other-videos">

                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(). '/img/other-videos3.jpg'?>" >
                            <i class="fas fa-play"></i>
                            <h2>آموزش انگلیسی برای کودکان سه تا پنج سال</h2>
                        </figure>
                    </a>

                </div>
                <div class="other-videos">

                    <a href="#">
                        <figure>
                            <img src="<?php echo get_template_directory_uri(). '/img/other-videos4.jpg'?>" >
                            <i class="fas fa-play"></i>
                            <h2>آموزش انگلیسی برای کودکان سه تا پنج سال</h2>
                        </figure>
                    </a>

                </div>
                <div class="all-videos">
                   <a href="#">تماشای همه ویدیوها</a>
                </div>

            </div>
        </div>
    </div>

</section>

    <div class="line"></div>
<div class="line"></div>


<section class="articles">
    <div class="container">
        <div class="articles-head">
            <div class="articles-titile">
                <h2>آخرین مقالات</h2>
                <h5>بلاگ</h5>

            </div>
            <div class="articles-link">
                <a href="#">همه مقالات</a>
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

                <div class="item course-box">
                    <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/course1.jpg'?>">
                        <h2>آموزش گرامر انگلیسی به زبان ساده</h2></a>
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
                <div class="item course-box">
                    <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/course2.jpg'?>">
                        <h2>دوره آموزشی انگلیسی در سفر</h2></a>
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
                            <del>730,000</del>
                            <ins>580,000</ins>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i>28
                        </div>
                    </div>
                </div>
                <div class="item course-box">
                    <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/course3.jpg'?>">
                        <h2>دوره مکالمه انگلیسی</h2></a>
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
                            <del>1,650,000</del>
                            <ins>1,280,000</ins>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i>22
                        </div>
                    </div>
                </div>
                <div class="item course-box">
                    <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/course4.jpg'?>">
                        <h2>دوره ی خود آموز انگلیسی</h2></a>
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
                            <del>1,650,000</del>
                           <span>رایگان</span>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i>48
                        </div>
                    </div>
                </div>
                <div class="item course-box">
                    <a href="#"><img src="<?php echo get_template_directory_uri(). '/img/course5.jpg'?>">
                        <h2>لغات کاربری انگلیسی</h2></a>
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
                            <del>1,650,000</del>
                            <ins>1,280,000</ins>
                        </div>
                        <div class="users">
                            <i class="fas fa-users"></i>18
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</section>

<?php get_footer(); ?>