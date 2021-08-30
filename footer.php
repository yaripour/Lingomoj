<footer>
    <div class="container">
        <div class="about-us">
            <?php if ( is_active_sidebar( 'footer_aboutus' ) ) {
                dynamic_sidebar('footer_aboutus');
            }
            ?>
        </div>
        <div id="qa" class="quick-access">
            <?php if ( is_active_sidebar( 'footer_quickaccess' ) ) {
                dynamic_sidebar('footer_quickaccess');
            }
            ?>
        </div>
        <div id="contact" class="quick-access">
            <?php if ( is_active_sidebar( 'footer_contactus' ) ) {
                dynamic_sidebar('footer_contactus');
            }
            ?>
        </div>

    </div>
    <div class="copy-right">
        <p>تمامی حقوق سایت برای مای لینگوتیم محفوظ است و کپی برداری تنها با ذکر منبع آزاد است </p>
        <div class="social-media">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
</footer>

<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/main.js"></script>
<?php wp_footer(); ?>
</body>
</html>