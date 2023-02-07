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
        <img src="<?php the_field('coverimage'); ?>" alt="bild" />
    </div>
    <div class="cover-box">
        <h1><?php the_field('covertitle'); ?></h1>
        <h3><?php the_field('covertext'); ?></h3>
    </div>
</div>