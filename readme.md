# Login Form Shortcode

This plugin adds a shortcode for displaying a login form that is optimized for screen reader users and allows users to add custom text to the form. It also includes support for the Polylang plugin, which allows users to translate the form into multiple languages. We welcome any contributions that can help improve this plugin!

## Installation

1. Upload the plugin files to the `/wp-content/plugins/login-form-shortcode` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the shortcode `[login_form]` in your post or page content to display the login form.

## Frequently Asked Questions

### Can I customize the text that appears on the login form?

Yes, you can add custom text to the login form by including it as content within the shortcode. For example: `[login_form]This is some custom text.[/login_form]` If you do not want to include any custom text, you can simply use the shortcode without any content.

### Does this plugin support multiple languages?

Yes, this plugin includes support for the Polylang plugin, which allows users to translate the form into multiple languages.

### How can I improve the security of the login form?

This plugin includes several security measures such as a nonce field and SSL/TLS protection, but there are additional steps you can take to further secure your login form. Some options include implementing two-factor authentication, monitoring for suspicious login activity, and regularly updating your WordPress installation and plugins.

## Changelog

### 1.2
- Added a check to ensure that the plugin is not accessed directly by verifying that the ABSPATH constant has been defined. This helps to prevent potential security vulnerabilities by blocking access to the plugin's files from external sources. This change helps to improve the overall security of the plugin.

### 1.1
- Added support for the Polylang plugin, allowing users to translate the form into multiple languages.
- Improved security measures such as a nonce field and SSL/TLS protection to help prevent hacking attempts and man-in-the-middle attacks.

### 1.0
- Initial release of the plugin.
