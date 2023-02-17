<?php

/**
 * File Template for displaying Error 404 pages 
 * 
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 */

get_header(); ?>
<div class="page-content">
    <div class="spacing-medium"></div>
    <img class="error-img" src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/02/dinosaur.gif" alt="Dino-GIF">
    <?php if (get_locale() == 'de_CH') { ?>
        <h2 class="has-text-align-center">Seite nicht gefunden</h2>
        <p>Leider konnten wir die Seite unter der von Ihnen angegebenen Adresse nicht finden. Bitte versuchen Sie eine andere Adresse oder gehen Sie zurück zur Startseite.</p>
        <div class="spacing-small"></div>
        <?php
        echo '<a class="custom-button-link small" href="';
        echo home_url();
        echo '" target="_self">
        <div class="custom-button m-gray">
            Zur Startseite <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
            </svg>
        </div>
    </a>';
        ?>
    <?php } else { ?>
        <h2 class="has-text-align-center">Page not found</h2>
        <p>Unfortunately, we could not find the page at the address you provided. Please try another address or go back to the homepage.</p>
        <div class="spacing-small"></div>
        <?php
        echo '<a class="custom-button-link small" href="';
        echo home_url();
        echo '" target="_self">
        <div class="custom-button m-gray">
            To Homepage <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
            </svg>
        </div>
    </a>';
        ?>
    <?php } ?>
    <div class="spacing-large"></div>
</div>
<?php get_footer(); ?>