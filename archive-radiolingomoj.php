<?php get_header(); ?>

<div class="single">
    <div class="container">
        <div class="main-single">

            <section class="category-post">
                <div class="category-head">
                    <h4><span style="color: #5caf21" ><?php echo get_the_archive_title() ?></span></h4>
                </div>

                <?php
                                $podc = get_post_meta(get_the_ID(), key: 'lingomoj_radio', single: true);

                                if(!empty($podc)){
                                    $attr = array(
                                        'src' => $podc,
                                        'loop'   => 'on',
                                        'width'=> '90%',




                                    );

                                } else {
                                    the_post_thumbnail();
                                }

                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();?>


                        <div class="archive-podcasts-box">
                            <div class="right-archive-pod">
                                <i class="fas fa-podcast"></i>
                            </div>
                            <div class="left-archive-pod">
                                <div class="archive-title-pod">
                                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(size:'article'); ?>
                                        <h2><?php the_title() ?></h2></a>
                                </div>
                                <div class="archive-player-box">
                                    <audio controls class="archive-player-pod">
                                        <source src="<?php echo wp_audio_shortcode($attr);?>
                    </audio>
                                </div>
                                <div class="archive-pod-more">
                                    <a href="<?php the_permalink(); ?>">توضیحات بیشتر</a>

                                </div>
                                <div class="dlfile">
                                        <a href="<?php echo $podc; ?>">دانلود</a>
                                </div>


                            </div>
                        </div>




                    <?php
                    endwhile;
                else :
                    _e( 'Sorry, no posts were found.', 'textdomain' );
                endif;
                ?>



            </section>
            <div class="pagination">
                <?php  echo paginate_links() ?>

            </div>


        </div>
        <?php get_sidebar(); ?>

    </div>
</div>


<?php get_footer(); ?>
