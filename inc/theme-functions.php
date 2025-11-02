<?php

// Header Style function

function tanspot_header_style()
{

    get_template_part('template-parts/header/header-01');
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
