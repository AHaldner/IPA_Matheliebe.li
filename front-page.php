<?php

/**
 * If there is a front-page.php file in the theme, this template is always used for the start page. Without the template file, either home.php (blog index) or page.php (static start page) is loaded as normal.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#home-page-display
 *
 */

get_header(); ?>
<div class="page-content">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>