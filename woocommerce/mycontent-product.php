<div class="shop-archive-box course-box">
    <a href="<?php the_permalink(); ?>">
        <?php
        if (has_post_thumbnail()) {
            the_post_thumbnail('product');
        } else {
            ?><img src="<?php echo get_template_directory_uri() . '/img/0.jpg' ?>"> <?php
        }
        ?>
        <h2><?php the_title(); ?></h2></a>
    <div class="description">

        <div class="teacher">
                            <span>
                                 <?php
                                 $teacher_name = get_post_meta(get_the_ID(), 'lingomoj_course_teacher_name', true);
                                 if (!empty($teacher_name)) {
                                     echo $teacher_name;
                                 }
                                 ?>
                            </span>
            <i class="fas fa-chalkboard-teacher"></i>
        </div>
        <div class="woocommerce rate">
            <?php woocommerce_template_loop_rating(); ?>
        </div>

    </div>
    <div class="details">
        <div class="price">
            <?php global $product;
            echo $product->get_price_html(); ?>
        </div>
        <div class="users">
            <i class="fas fa-users"></i>
            <?php echo get_post_meta($product->id, 'total_sales', true); ?>
        </div>
    </div>
</div>

