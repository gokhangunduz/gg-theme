<?php
function themeSettings() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');

    wp_enqueue_style('gokhangunduz-style', get_stylesheet_uri());

        register_nav_menus(array(
        'main-menu' => __('Header Menu', 'gokhangunduz')
    ));
}
add_action('after_setup_theme', 'themeSettings');
?>