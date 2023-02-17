<?php

/**
 * Cover ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="cover-wrapper">
    <div class="cover-image b-<?php the_field('covercolor'); ?>">
        <?php if (get_field('coverimage')) { ?>
            <img src="<?php the_field('coverimage'); ?>" alt="bild" />
        <?php } ?>
    </div>
    <div class="cover-box">
        <?php if (get_field('covertitle') && get_field('covertext')) { ?>
            <h1><?php the_field('covertitle'); ?></h1>
            <h3><?php the_field('covertext'); ?></h3>
        <?php } ?>
    </div>
</div>