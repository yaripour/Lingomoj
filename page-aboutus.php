<?php get_header() ?>
    <div class="single">
        <div class="container">
            <div class="main-single full-width">
                <?php
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();?>
                        <article class="single-post">
                            <header>
                                <h1><?php the_title() ?></h1>
                                <div class="postmeta">
                                    <i class="fas fa-clock"></i>
                                    <span><?php the_date('j F Y'); ?></span>
                                </div>
                                <div class="postmeta">
                                    <i class="fas fa-user"></i>
                                    <span><?php the_author(); ?></span>
                                </div>
                                <div class="postmeta">
                                    <i class="fas fa-folder-open"></i>
                                    <span><?php the_category(','); ?></span>
                                </div>
                                <div class="postmeta">
                                    <i class="fas fa-eye"></i>
                                    <span><?php if(function_exists('the_views')) { the_views(); } ?></span>
                                </div>
                            </header>
                            <div class="post-pic">
                                <figure>
                                    <?php the_post_thumbnail(); ?>
                                </figure>
                            </div>
                            <div class="content-single">
                                <?php the_content(); ?>

                            </div>
                        </article>
                    <?php
                    endwhile;
                else :
                    _e( 'Sorry, no posts were found.', 'textdomain' );
                endif;
                ?>
                <?php if ( comments_open() || get_comments_number() ) : ?>
                    <div class="clear"></div>
                    <br><div class="comment-box">
                        <div class="related-head">
                            <h4>ثبت دیدگاه :</h4>
                        </div>
                        <?php

                        comments_template();

                        ?>


                    </div>
                <?php endif; ?>
            </div>

        </div>
    </div>


<?php get_footer() ?>