<?php
/*
 * Plugin Name: Login Form Shortcode
 * Description: This plugin adds a shortcode for displaying a login form that is optimized for screen reader users and allows users to add custom text to the form. It also includes support for the Polylang plugin, which allows users to translate the form into multiple languages. This version includes improved security measures such as a nonce field and SSL/TLS protection.
 * Version: 1.2
 * Author: Hamad M H Al-Qassar
 */

function login_form_shortcode( $atts, $content = null ) {
    if ( !is_user_logged_in() ) {
        $form  = '<form action="' . esc_url( site_url( 'wp-login.php', 'login_post' ) ) . '" method="post">';
        $form .= '<p><label for="user_login">' . __( 'Username or Email Address', 'polylang' ) . '</label>';
        $form .= '<input type="text" name="log" id="user_login" class="input" value="' . esc_attr( wp_unslash( $user_login ) ) . '" size="20" aria-describedby="login-description"></p>';
        $form .= '<p id="login-description" class="screen-reader-text">' . __
        ( 'Enter your username or email address. If you have an account, you will be redirected to the login page to enter your password.', 'polylang' ) . '</p>';
        $form .= '<p><label for="user_pass">' . __( 'Password', 'polylang' ) . '</label>';
        $form .= '<input type="password" name="pwd" id="user_pass" class="input" value="" size="20" aria-describedby="password-description"></p>';
        $form .= '<p id="password-description" class="screen-reader-text">' . __( 'Enter the password for your account.', 'polylang' ) . '</p>';
        $form .= '<p><input type="checkbox" name="rememberme" id="rememberme" value="forever" aria-describedby="rememberme-description">';
        $form .= '<label for="rememberme">' . __( 'Remember Me', 'polylang' ) . '</label>';
        $form .= '<span id="rememberme-description" class="screen-reader-text">' . __( 'Check this box if you want to stay logged in on this device.', 'polylang' ) . '</span></p>';
        $form .= '<input type="hidden" name="redirect_to" value="' . esc_url( $_SERVER['REQUEST_URI'] ) . '">';
        $form .= '<input type="hidden" name="_wpnonce" value="' . wp_create_nonce( 'login_form_shortcode' ) . '">';
        $form .= '<p><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="' . __( 'Log In', 'polylang' ) . '"></p>';
        $form .= '</form>';

        if ( $content ) {
            $form .= '<p class="login-form-shortcode-text">' . $content . '</p>';
        }

        return $form;
    }
}
add_shortcode( 'login_form', 'login_form_shortcode' );

function login_form_shortcode_secure_login() {
    if ( ! is_ssl() ) {
        if ( 0 === strpos( $_SERVER['REQUEST_URI'], 'wp-login.php' ) || 0 === strpos( $_SERVER['REQUEST_URI'], 'wp-admin' ) ) {
            wp_safe_redirect( set_url_scheme( $_SERVER['REQUEST_URI'], 'https' ) );
            exit();
        }
    }
}
add_action( 'login_init', 'login_form_shortcode_secure_login' );
