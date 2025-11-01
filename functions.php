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
};

add_action('after_setup_theme', 'tanspot_setup');


require_once get_template_directory() . '/inc/theme-scirpts.php';
