<?php

/**
 * Slider ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="swiper">
    <div class="swiper-wrapper">
        <?php while (have_rows('slider')) :
            the_row(); ?>
            <div class="swiper-slide">
                <div class="slide-image">
                    <?php if (get_sub_field('image')) { ?>
                        <img src="<?php the_sub_field('image'); ?>" alt="bild" />
                    <?php } ?>
                </div>
            </div>
        <?php
        endwhile; ?>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>
<script>
    const swiper = new Swiper('.swiper', {
        direction: 'horizontal',
        loop: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        autoplay: {
            delay: 4000,
        },
    });
</script>