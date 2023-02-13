<?php

/**
 * File Template for displaying the Footer. It is called when using the wp_footer()
 * 
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>

<footer class="footer">
    <div class="footer-inner">
        <div class="footer-address">
            <?php dynamic_sidebar('address_widget'); ?>
        </div>
        <div class="footer-contact">
            <?php dynamic_sidebar('contact_widget'); ?>
        </div>
        <div class="footer-links">
            <?php wp_nav_menu(['theme_location' => 'footer-menu']); ?>
        </div>
    </div>
</footer>
</div>
<section id="wp-footer">
    <?php wp_footer(); ?>
</section>
</body>

</html>