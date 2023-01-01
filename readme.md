# Login Form Shortcode

A simple plugin that adds a shortcode for displaying a login form that is optimized for screen reader users.

## Description

This plugin adds a shortcode for displaying a login form that is optimized for screen reader users. The form includes additional accessibility features such as aria-describedby attributes and screen-reader-text elements, which provide additional context and instructions for screen reader users.

To use the shortcode, simply add `[login_form]` to any post or page. The login form will be displayed for logged out users, and will be hidden for logged in users.

## Installation

1. Upload the plugin files to the `/wp-content/plugins/login-form-shortcode` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the shortcode `[login_form]` to display the login form in any post or page.

## Frequently Asked Questions

### Can I customize the login form?

Yes, you can customize the login form by modifying the plugin code. The form fields and layout can be modified by editing the `login_form_shortcode()` function in the plugin file.

### Will this plugin work with my theme?

This plugin should work with most WordPress themes. However, some themes may include custom login forms or styles that may conflict with the plugin. If you encounter any issues with the plugin, you can try deactivating your theme or contacting the theme author for support.

## Changelog

### 1.0
* Initial release.
