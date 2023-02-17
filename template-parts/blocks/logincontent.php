<?php

/**
 * Login Content ACF Block
 *
 * @since Theme Version 1.0
 *
 * @return void
 */
?>
<div class="login-content-wrapper">
    <?php
    if (is_user_logged_in()) {
        if (get_locale() == 'de_CH') {
            echo do_shortcode('[contact-form-7 id="487" title="Kontaktformular"]');
        } else {
            echo do_shortcode('[contact-form-7 id="488" title="Contact Form"]');
        }
    } else {
        if (get_locale() == 'de_CH') {
            echo '<a class="custom-button-link small" href="';
            echo get_site_url();
            echo '/anmelden" target="_self">
            <div class="custom-button m-yellow">
                Für Zugriff anmelden <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg>
            </div>
            </a>';
        } else {
            echo '<a class="custom-button-link small" href="';
            echo get_site_url();
            echo '/log-in" target="_self">
            <div class="custom-button m-yellow">
                Log in for access <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
                </svg>
            </div>
            </a>';
        }
    }
    ?>
</div>
<div class="login-logout">
    <?php
    if (is_user_logged_in()) { ?>
        <div class="spacing-small"></div>
        <?php if (get_locale() == 'de_CH') { ?>
            <p><a class="underline-link" href="<?php echo wp_logout_url(home_url()); ?>">Abmelden</a></p>
        <?php } else { ?>
            <p><a class="underline-link" href="<?php echo wp_logout_url(home_url()); ?>">Log out</a></p>
    <?php }
    }
    ?>
</div>
<div class="spacing-large"></div>