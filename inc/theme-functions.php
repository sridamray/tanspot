<?php

// Header Style function

function tanspot_header_style()
{
    $acf_tanspot_header_style = function_exists('get_field') ? get_field('tanspot_header_style') : NULL;
    $tanspot_header_style_option = get_theme_mod('tanspot_header_style_option', 'header-1');

    if ($acf_tanspot_header_style == 'header-style-1') {
        get_template_part('template-parts/header/header-01');
    } elseif ($acf_tanspot_header_style == 'header-style-2') {
        get_template_part('template-parts/header/header-02');
    } elseif ($acf_tanspot_header_style == 'header-style-3') {
        get_template_part('template-parts/header/header-03');
    } else {
        if ($tanspot_header_style_option == 'header-2') {
            get_template_part('template-parts/header/header-02');
        } elseif ($tanspot_header_style_option == 'header-3') {
            get_template_part('template-parts/header/header-03');
        } else {
            get_template_part('template-parts/header/header-01');
        }
    }
}

add_action('tanspot_header', 'tanspot_header_style');


// Footer 

function tanspot_footer_style()
{
    $tanspot_Footer_style = function_exists('get_field') ? get_field('tanspot_Footer_style') : NULL;
    $tanspot_footer_style_option = get_theme_mod('tanspot_footer_style_option', 'footer-1');

    if ($tanspot_Footer_style == 'footer-style-1') {
        get_template_part('template-parts/footer/footer');
    } elseif ($tanspot_Footer_style == 'footer-style-2') {
        get_template_part('template-parts/footer/footer-02');
    } elseif ($tanspot_Footer_style == 'footer-style-3') {
        get_template_part('template-parts/footer/footer-03');
    } else {
        if ($tanspot_footer_style_option == 'footer-2') {
            get_template_part('template-parts/footer/footer-02');
        } elseif ($tanspot_footer_style_option == 'footer-3') {
            get_template_part('template-parts/footer/footer-03');
        } else {
            get_template_part('template-parts/footer/footer');
        }
    }
}
add_action('tanspot_footer', 'tanspot_footer_style');



// Register Menus
function tanspot_main_menu()
{
    wp_nav_menu(array(
        'theme_location' => 'tanspot-menu',
        'menu_id'        => 'tanspot-main-menu',
        'menu_class'     => 'main-menu__list', // optional
    ));
}


// Theme Logo Function


function tanspot_theme_logo()
{
    $tanspot_logo_image = get_theme_mod('tanspot_logo_image', get_template_directory_uri() . '/assets/img/logo/logo-1.png');
    $tanspot_page_logo  = function_exists('get_field') ? get_field('tanspot_page_logo') : NULL;

?>
    <?php if (!empty($tanspot_page_logo)) : ?>
        <a href="<?php echo esc_url(home_url(), 'tanspot'); ?>"><img src="<?php echo esc_url($tanspot_page_logo['url'], 'tanspot'); ?>" alt="<?php echo esc_attr($tanspot_page_logo['title'], 'tanspot'); ?>"></a>
    <?php else : ?>


        <a href="<?php echo esc_url(site_url(), 'tanspot'); ?>"><img src="<?php echo esc_url($tanspot_logo_image, 'tanspot'); ?>" alt=""></a>
    <?php endif; ?>


<?php
}
