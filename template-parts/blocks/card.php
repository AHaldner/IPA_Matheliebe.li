<?php

/**
 * Card ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="card-wrapper">
    <?php while (have_rows('card')) :
        the_row(); ?>
        <?php
        $link = get_sub_field('link');
        if ($link) :

            $link_url = $link['url'];
            $link_title = $link['title'];
            $link_target = $link['target'] ? $link['target'] : '_self';
        ?>
            <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>">
            <?php
        endif;
            ?>
            <div class="card__container">
                <?php if (get_sub_field('image')) { ?>
                    <div class="card__container-image">
                        <img src="<?php the_sub_field('image'); ?>" alt="bild" />
                    </div>
                <?php } ?>
                <div class="team__container">
                    <div class="team__container-info">
                        <?php if (get_sub_field('date_s') && get_sub_field('date_e')) { ?>
                            <p><?php the_sub_field('date_s'); ?> – <?php the_sub_field('date_e'); ?></p>
                        <?php } ?>
                        <?php if (get_sub_field('countryflag')) { ?>
                            <span class="fi fi-<?php echo strtolower(get_sub_field('countryflag')); ?>"></span>
                        <?php } ?>
                    </div>
                    <div class="team__container-name">
                        <?php if (get_sub_field('name')) { ?>
                            <p class="strong-text"><?php the_sub_field('name'); ?></p>
                        <?php } ?>
                        <?php if (get_sub_field('city')) { ?>
                            <p><?php the_sub_field('city'); ?></p>
                        <?php } ?>
                    </div>
                    <div class="team__container-link">
                        <i class="bi bi-arrow-right"></i>
                    </div>
                </div>
            </div>
            </a>
        <?php
    endwhile; ?>
</div>