<?php

/**
 * List ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="list-wrapper">
    <div class="list-inner">
        <?php while (have_rows('list')) :
            the_row(); ?>
            <div class="list-item">
                <p><?php the_sub_field('list-text'); ?></p>
                <p class="list-item-strong"><?php the_sub_field('list-number'); ?></p>
            </div>
        <?php
        endwhile; ?>
    </div>
</div>