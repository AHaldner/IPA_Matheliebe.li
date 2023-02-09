<?php

/**
 * Icon Bar ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="iconbar-wrapper">
    <div class="iconbar-inner">
        <?php while (have_rows('icon')) :
            the_row(); ?>
            <a class="iconbar-icon" href="<?php the_sub_field('icon-link'); ?>">
                <i class="bi bi-<?php the_sub_field('icon-type'); ?>"></i>
                <?php the_sub_field('icon-text'); ?>
            </a>
        <?php
        endwhile; ?>
    </div>
</div>