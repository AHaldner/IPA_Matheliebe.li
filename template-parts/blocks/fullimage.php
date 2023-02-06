<?php

/**
 * Full Image ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<?php if (get_field('fullimage')) { ?>
    <div class="fullimage">
        <img src="<?php the_field('fullimage'); ?>" alt="bild" />
    </div>
<?php } ?>