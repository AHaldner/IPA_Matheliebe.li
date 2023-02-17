<?php

/**
 * Quote ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="quote">
    <?php if (get_field('quotetext') && get_field('quoteperson')) { ?>
        <i class="quote-text">«<?php the_field('quotetext'); ?>»</i>
        <p class="quote-person"><?php the_field('quoteperson'); ?></p>
    <?php } ?>
</div>