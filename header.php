    <!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo(); ?> ">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <?php wp_head(); ?>
    <?php
    $general = lingomoj_get_option('lingomoj_general_options');
    $topmenu = lingomoj_get_option('lingomoj_topmenu_options');
    $header = lingomoj_get_option('lingomoj_header_options');
    $footer = lingomoj_get_option('lingomoj_footer_options');
    ?>

    <link rel="icon" type="image/png/jpg" href=<?php echo $general[0]['lingomoj_favicon_option']; ?>>

    <style>
        <?php
        
        
        // شروع تنظیمات فوتر
        $footer_bg = $footer[0]['lingomoj_footer_background_option'];
        ?>
        footer{background: <?php echo $footer_bg." !important"; ?>}
        <?php

        $footer_color = $footer[0]['lingomoj_footer_text_color_option'];
        ?>
        footer{color: <?php echo $footer_color." !important"; ?>}
        <?php

        $copyright_bg = $footer[0]['lingomoj_footer_copyright_background_option'];
        ?>
        .copy-right{background: <?php echo $copyright_bg." !important"; ?>}
        <?php

        $copyright_color = $footer[0]['lingomoj_footer_copyright_color_option'];
        ?>
        .copy-right{color: <?php echo $copyright_color." !important"; ?>}
        <?php


        // شروع تنظیمات عمومی
         $container = $general[0]['lingomoj_width_container_option'];
         $maincolor = $general[0]['lingomoj_color_main_option'];
         $secondcolor = $general[0]['lingomoj_color_second_option'];
            if (isset($container)) {
                ?>
        .container {
            width: <?php echo $container."px"; ?>;
        }

        <?php
            }
            if (isset($maincolor)) {
                ?>
        .top-menu,footer .copy-right,.lingomoj-nav-acount,.tv .tv-head .tv-link a:hover,.all-videos a,
        .articles .articles-head .articles-link a:hover,.article-box:hover .btn-more a,
        .articles-slider .owl-theme .owl-dots .owl-dot.active span,.adv,.course .course-head .course-link a:hover,
        footer .copy-right,.single-widget input[type="submit"],.pagination span.current,
        .comment-respond input[type="submit"],#wp-calendar caption,.tv .tv-head .podcast-link a:hover,
        .lingomoj-nav-acount ul li a:hover
        {
            background: <?php echo $maincolor." !important"; ?>;
        }
        .price-button {
            box-shadow: 0px 0px 3px <?php echo $maincolor." !important"; ?>;
        }
        .tv .tv-head .tv-link a,.all-videos a:hover,.articles .articles-head .articles-link a,
        .article-box h2:hover,.course .course-head .course-link a,.course-box h2:hover,
        .course-box .description .rate i,.course-box .details .price ins,.single-widget ul li a:hover
        .tv .tv-head .podcast-link a,.main-single .archive-podcasts-box .right-archive-pod i,
        .pro-price p.price > del,.woocommerce .star-rating  {
            color: <?php echo $maincolor." !important"; ?>;
        }
        .tv .tv-head .tv-link a,.tv .tv-head .tv-link a:hover,.all-videos a,.all-videos a:hover,
        .articles .articles-head .articles-link a,.course .course-head .course-link a,
        #wp-calendar tbody tr td a,.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
        .tv .tv-head .podcast-link a {
            border-color: <?php echo $maincolor." !important"; ?>;
        }
        .selected a,.lingomoj-nav-acount ul li a,.woocommerce div.product .woocommerce-tabs ul.tabs::before,.related-product h4 {
            border-bottom: <?php echo $maincolor." !important"; ?>;
        }


        <?php
    }
 if (isset($secondcolor)) {
               ?>
        .sign a,.woocommerce a.button.alt,.woocommerce button,.lesson-course ul li ul .meta-course,
        .price_slider_amount .button,.ui-slider .ui-slider-handle {
            background: <?php echo $secondcolor." !important"; ?>;
        }
        .lingomoj-nav-acount ul li a {
            border-bottom: 1px solid <?php echo $secondcolor." !important"; ?>;
        }
        .adv .right-adv a,#qa li,.quick-access i,.social-media a i:hover,
        .single-post .postmeta i,.latest-podcast-box .left-podcasts figure i,
        .right-podcasts .other-podcasts .details .dl-p i,
        .woocommerce a {
            color: <?php echo $secondcolor." !important"; ?>;
        }
        .single-widget h4 {
            border-bottom: <?php echo $secondcolor." !important"; ?>;
        }
        .right-podcasts .other-podcasts .details .dl-p i {
            border-color: <?php echo $secondcolor." !important"; ?>;
        }

        <?php
        }
 ?>
    </style>
</head>
<body>
<?php

$topmenu_active = $topmenu[0]['lingomoj_topmenu_active_option'];
$topmenu_background = $topmenu[0]['lingomoj_color_topmenu_option'];
$topmenu_tell = $topmenu[0]['lingomoj_tell_topmenu_option'];
$topmenu_email = $topmenu[0]['lingomoj_email_topmenu_option'];
$topmenu_search = $topmenu[0]['lingomoj_search_topmenu_option'];
$topmenu_cart = $topmenu[0]['lingomoj_cart_topmenu_option'];

if ($topmenu_active=='enable') : ?>
<div style="background: <?php echo $topmenu_background." !important"; ?>" class="top-menu">
    <div class="container">
        <div class="topbar-right">
            <ul>
                <li><i class="fas fa-phone"></i><?php echo $topmenu_tell; ?> </li>
                <li><i class="fas fa-envelope"></i>ایمیل: <?php echo $topmenu_email; ?> </li>

            </ul>


        </div>
        <div class="topbar-left">
            <ul>
                <?php if ($topmenu_cart=='enable') : ?>
                <li><a href="<?php echo home_url()."/cart"; ?>"><i class="fas fa-shopping-basket"></i></a> </li>
                <?php endif; ?>
                <?php if ($topmenu_search=='enable') : ?>
                <li class="search-icon"><i class="fas fa-search"></i> </li>
                <?php endif; ?>
            </ul>
            <?php wp_nav_menu( array( 'theme_location' => 'top-menu' , 'container'  => '' ) ); ?>
        </div>
    </div>
</div>
<?php endif; ?>

<?php

$select_header = $header[0]['lingomoj_header_select_option'];
$header_button = $header[0]['lingomoj_header_button_option'];
$button_text = $header[0]['lingomoj_text_button_header_option'];
$button_link = $header[0]['lingomoj_link_button_header_option'];
?>

<?php if ($select_header=='header_one') { ?>
<header class="header">
    <div class="container relative">
        <div class="logo">
            <?php
            $logo = $general[0]['lingomoj_logo_option'];
            if (isset($logo)) {
                ?><a href="<?php echo home_url(); ?>"> <img src="<?php echo $logo; ?>"></a><?php
            }
            else {
                ?><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/img/logo-lingomoj.jpg' ?>"></a><?php
            }
            ?>

        </div>

        <nav class="main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '') );
            ?>
        </nav>
        <div class="sign">
            <?php if($header_button=="enable") : ?>
            <a href="<?php echo $button_link; ?>"><i class="fas fa-user-lock"></i><?php echo $button_text; ?> </a>
        </div>
        <?php endif; ?>
        <div class="searchbox">
            <form method="get" action="<?php home_url('/'); ?>">
                <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="جستجو کنید...">
                <button class="fas fa-search"></button>
            </form>
        </div>

    </div>
</header>
<?php }

else { ?>
<header class="header">
    <div class="container relative">
        <div class="logo">
            <?php
            $logo = $general[0]['lingomoj_logo_option'];
            if (isset($logo)) {
                ?><a href="<?php echo home_url(); ?>"> <img src="<?php echo $logo; ?>"></a><?php
            }
            else {
                ?><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri().'/img/logo-lingomoj.jpg' ?>"></a><?php
            }
            ?>

        </div>




        <div class="searchbox">
            <form method="get" action="<?php home_url('/'); ?>">
                <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="جستجو کنید...">
                <button class="fas fa-search"></button>
            </form>
        </div>
        <div class="searchbox2">
            <form method="get" action="<?php home_url('/'); ?>">
                <input type="text" name="s" value="<?php the_search_query(); ?>" placeholder="جستجو کنید...">
                <button class="fas fa-search"></button>
            </form>
        </div>
    </div>
</header>
<div class="menu-wrapper">
    <nav class="container main-menu2">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container' => '') );
        ?>
        <?php if($header_button=="enable") : ?>
        <div class="sign nopadding">
            <a href="<?php echo $button_link; ?>"><i class="fas fa-user-lock"></i><?php echo $button_text; ?>  </a>
        </div>
        <?php endif; ?>
    </nav>
</div>
    <?php } ?>