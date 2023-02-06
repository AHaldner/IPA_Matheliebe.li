<?php

/**
 * Book ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="book-wrapper">
    <div class="book-image">
        <img src="<?php the_field('book-image'); ?>" alt="bild" />
    </div>
    <div class="book-text">
        <?php the_field('book-text'); ?>
        <a href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#ffffff" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
            </svg>
        </a>
    </div>
</div>