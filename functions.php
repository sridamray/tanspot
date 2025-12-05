<?php

define('TRANSPOT_THEME_VERSION', '1.0.0');
define('TRANSPOT_THEME_DIR', get_template_directory_uri());
define('TANSPOT_THEME_IMG_DIR', TRANSPOT_THEME_DIR . '/assets/img');
define('TANSPOT_THEME_INC_DIR', TRANSPOT_THEME_DIR . '/inc');

function tanspot_setup()
{
    load_theme_textdomain('tanspot', get_template_directory() . '/languages');
    add_theme_support('automatic-feed-links');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ]);
    // post Formats support

    add_theme_support('post-formats', array(
        'image',
        'video',
        'gallery',
        'audio',
    ));

    // Register Menu
    register_nav_menus(array(
        'tanspot-menu' => esc_html__('Primary Menu', 'tanspot'),
    ));
};

add_action('after_setup_theme', 'tanspot_setup');

function tanspot_load_textdomain()
{
    require_once get_template_directory() . '/inc/common/theme-breadcrumb.php';
    require_once get_template_directory() . '/inc/common/theme-widgets.php';
    require_once get_template_directory() . '/inc/theme-functions.php';
    add_filter('gutenberg_use_widgets_block_editor', '__return_false');
    add_filter('use_widgets_block_editor', '__return_false');
}
add_action('init', 'tanspot_load_textdomain');


require_once get_template_directory() . '/inc/common/theme-scirpts.php';

require_once get_template_directory() . '/inc/common/acf-metabox.php';



if (class_exists('kirki')) {
    require_once get_template_directory() . '/inc/theme-customizer.php';
}
