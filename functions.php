<?php
require_once get_template_directory() . '/functions/common.php';

function themeSettings()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    register_nav_menus(array(
        'main-menu' => __('Header Menu', 'gokhangunduz')
    ));
}

function themeAssets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('icon', 'https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css');

    wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', [], false, true);

    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', [], null, true);

    if (!wp_is_mobile()) {
        wp_enqueue_script(
            'cursor',
            get_template_directory_uri() . '/assets/js/cursor.js',
            [],
            false,
            true
        );
    }
}

add_action('after_setup_theme', 'themeSettings');
add_action('wp_enqueue_scripts', 'themeAssets');