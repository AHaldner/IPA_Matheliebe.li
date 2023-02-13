<?php

/**
 * Accordion ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<style>
    .accordion>dt a::after {
        background-image: url('<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/chevron-down1.svg');
    }
</style>
<dl class='accordion'>
    <?php while (have_rows('accordion')) :
        the_row(); ?>
        <dt>
            <a aria-expanded='false' href='#' tabindex='0'>
                <?php if (get_sub_field('question')) { ?>
                    <div class='accordion-heading'><?php the_sub_field('question'); ?></div>
                <?php } ?>
            </a>
        </dt>
        <dd tabindex='0'>
            <?php if (get_sub_field('answer')) { ?>
                <p><?php the_sub_field('answer'); ?></p>
            <?php } ?>
        </dd>
    <?php
    endwhile; ?>
</dl>