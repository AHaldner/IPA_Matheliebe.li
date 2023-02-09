<?php

/**
 * Template Name: Login Page 
 */

get_header(); ?>
<div class="page-content">
    <div class="spacing-large"></div>
    <?php
    if (is_user_logged_in()) {
        echo '<p>Welcome. You are logged in!</p>';
    } else {
        wp_login_form(

            array(
                'echo'           => true,
                // Default 'redirect' value takes the user back to the request URI.
                'redirect'       => (is_ssl() ? 'https://' : 'http://') . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                'form_id'        => 'loginform',
                'label_username' => __('Your Username'),
                'label_password' => __('Your Password'),
                'label_remember' => __('Remember Me'),
                'label_log_in'   => __('Log In'),
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
    ?>
    <div class="spacing-large"></div>
</div>
<?php get_footer(); ?>