<?php
/**
 * Tilman Gerhardt Theme – functions.php
 * Webprinzip – Custom Gutenberg-Theme mit ACF
 */

// Theme-Support
add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);
    add_theme_support('editor-styles');
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('responsive-embeds');
    add_theme_support('custom-logo');

    register_nav_menus([
        'primary' => 'Hauptnavigation',
    ]);
});

// Styles + Scripts
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('tilman-style', get_stylesheet_uri(), [], '1.0.0');
    wp_enqueue_style('tilman-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,400;1,600&family=Manrope:wght@300;400;500;600&family=Herr+Von+Muellerhoff&display=swap',
        [], null
    );
    wp_enqueue_script('tilman-main', get_template_directory_uri() . '/assets/js/main.js', [], '1.0.0', true);
});

// REST API: CORS für lokale Entwicklung
add_action('rest_api_init', function () {
    remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
    add_filter('rest_pre_serve_request', function ($value) {
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, OPTIONS');
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Allow-Headers: Authorization, Content-Type, X-WP-Nonce');
        return $value;
    });
});

// Application Passwords aktivieren
add_filter('wp_is_application_passwords_available', '__return_true');

// Flush rewrite rules bei Theme-Aktivierung
add_action('after_switch_theme', function () {
    flush_rewrite_rules();
});
