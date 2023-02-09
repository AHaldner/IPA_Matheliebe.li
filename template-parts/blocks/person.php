<?php

/**
 * Person ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="person-wrapper">
    <?php while (have_rows('person')) :
        the_row(); ?>
        <div class="person__container">
            <?php if (get_sub_field('image')) { ?>
                <div class="person__container-image">
                    <img src="<?php the_sub_field('image'); ?>" alt="bild" />
                </div>
            <?php } ?>
            <div class="person__info-container">
                <div class="person__info-container-name">
                    <?php if (get_sub_field('name')) { ?>
                        <p class="strong-text"><?php the_sub_field('name'); ?></p>
                    <?php } ?>
                    <?php if (get_sub_field('position')) { ?>
                        <p><?php the_sub_field('position'); ?></p>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php
    endwhile; ?>
</div>