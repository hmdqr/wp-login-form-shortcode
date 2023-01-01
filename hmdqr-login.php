<?php
/*
 * Plugin Name: Login Form Shortcode
 * Description: This plugin adds a shortcode for displaying a login form that is optimized for screen reader users.
 * Version: 1.0
 * Author: Hamad M H Al-Qassar
 */

function login_form_shortcode() {
    if ( !is_user_logged_in() ) {
        $form  = '<form action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post">';
        $form .= '<p><label for="user_login">Username or Email Address</label>';
        $form .= '<input type="text" name="log" id="user_login" class="input" value="' . esc_attr( wp_unslash( $user_login ) ) . '" size="20" aria-describedby="login-description"></p>';
        $form .= '<p id="login-description" class="screen-reader-text">Enter your username or email address. If you have an account, you will be redirected to the login page to enter your password.</p>';
        $form .= '<p><label for="user_pass">Password</label>';
        $form .= '<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" aria-describedby="password-description"></p>';
        $form .= '<p id="password-description" class="screen-reader-text">Enter the password for your account.</p>';
        $form .= '<p class="forgetmenot"><input name="rememberme" type="checkbox" id="rememberme" value="forever" aria-describedby="rememberme-description">';
        $form .= '<label for="rememberme">Remember Me</label></p>';
        $form .= '<p id="rememberme-description" class="screen-reader-text">Check this box if you want to stay logged in on this device.</p>';
        $form .= '<p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Log In"></p>';
        $form .= '</form>';
        return $form;
    }
}
add_shortcode( 'login_form', 'login_form_shortcode' );
