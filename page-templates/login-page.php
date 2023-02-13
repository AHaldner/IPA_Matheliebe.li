<?php

/**
 * Template Name: Login Page 
 */

get_header(); ?>
<div class="page-content">
    <?php
    global $current_user;
    wp_get_current_user();

    the_content();

    if (is_user_logged_in()) {
        if (get_locale() == 'de_CH') {
            echo '<p>Willkommen ' . $current_user->display_name . "\n </p>";
        } else {
            echo '<p>Welcome ' . $current_user->display_name . "\n </p>";
        }
    } else {
        if (get_locale() == 'de_CH') {
            wp_login_form(

                array(
                    'echo'           => true,
                    // Default 'redirect' value takes the user back to the request URI.
                    'redirect'       => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                    'form_id'        => 'login-form',
                    'label_username' => __('Nutzername'),
                    'label_password' => __('Passwort'),
                    'label_remember' => __('Merken'),
                    'label_log_in'   => __('Anmelden'),
                    'id_username'    => 'user_login',
                    'id_password'    => 'user_pass',
                    'id_remember'    => 'rememberme',
                    'id_submit'      => 'wp-submit',
                    'remember'       => true,
                    'value_username' => '',
                    // Set 'value_remember' to true to default the "Remember me" checkbox to checked.
                    'value_remember' => false,
                )

            );
        } else {
            wp_login_form(

                array(
                    'echo'           => true,
                    // Default 'redirect' value takes the user back to the request URI.
                    'redirect'       => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                    'form_id'        => 'login-form',
                    'label_username' => __('Username'),
                    'label_password' => __('Password'),
                    'label_remember' => __('Remember'),
                    'label_log_in'   => __('Log in'),
                    'id_username'    => 'user_login',
                    'id_password'    => 'user_pass',
                    'id_remember'    => 'rememberme',
                    'id_submit'      => 'wp-submit',
                    'remember'       => true,
                    'value_username' => '',
                    // Set 'value_remember' to true to default the "Remember me" checkbox to checked.
                    'value_remember' => false,
                )

            );
        }

        if (get_locale() == 'de_CH') {
            echo '<p class="register-text">Noch kein Konto? Gehen Sie zur <a href="' . get_site_url() . '/registrieren">Registrierung</a>.</p>';
        } else {
            echo '<p class="register-text">No account yet? Go to the <a href="' . get_site_url() . '/register">register page</a>.</p';
        }
    }
    ?>
</div>
<div class="spacing-large"></div>
<?php get_footer(); ?>