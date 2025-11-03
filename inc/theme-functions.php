<?php

// Header Style function

function tanspot_header_style()
{

    $tanspot_header_style_option = get_theme_mod('tanspot_header_style_option', 'header-1');

    if ($tanspot_header_style_option == 'header-2') {
        get_template_part('template-parts/header/header-02');
    } elseif ($tanspot_header_style_option == 'header-3') {
        get_template_part('template-parts/header/header-03');
    } else {
        get_template_part('template-parts/header/header-01');
    }
}

add_action('tanspot_header', 'tanspot_header_style');


// Footer 

function tanspot_footer_style()
{

    get_template_part('template-parts/footer/footer');
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
