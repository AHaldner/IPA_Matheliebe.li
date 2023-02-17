<?php

/**
 * Video ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<?php if (get_field('video-link')) { ?>
    <iframe class="video-frame" src="<?php the_field('video-link'); ?>" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
<?php } ?>