<?php
require_once get_template_directory() . '/functions/common.php';

function themeSettings()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    add_filter('navigation_markup_template', 'paginationSetter');

    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'gg')
    ));

    add_filter('excerpt_more', 'excerptMoreSetter');
}

function themeAssets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/style.css');

    wp_enqueue_style('icon', 'https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css');

    wp_enqueue_script('theme', get_template_directory_uri() . '/assets/js/theme.js', [], false, true);

    wp_enqueue_script('menu', get_template_directory_uri() . '/assets/js/menu.js', [], null, true);

    wp_enqueue_script('code', get_template_directory_uri() . '/assets/js/code.js', [], null, true);

    wp_enqueue_style(
        'highlight.js-css',
        'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css'
    );

    wp_enqueue_script(
        'highlight.js',
        'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js',
        [],
        false,
        true
    );

    wp_add_inline_script('highlight.js', '
        document.addEventListener("DOMContentLoaded", function () {
            hljs.highlightAll();
        });
    ');

    wp_enqueue_style(
        'highlight.js-theme',
        'https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/atom-one-dark.min.css' 
    );

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