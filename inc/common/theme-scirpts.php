<?php

function tanspot_enqueue_scripts()
{
    // Enqueue Stylesheet

    $font_poppins_url = 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap';
    $font_rubik_url = 'https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap';

    wp_enqueue_style('google-fonts-poppins', $font_poppins_url, [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('google-fonts-rubik', $font_rubik_url, [], TRANSPOT_THEME_VERSION, 'all');

    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('animate', TRANSPOT_THEME_DIR . '/assets/css/animate.min.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('custom-animate', TRANSPOT_THEME_DIR . '/assets/css/custom-animate.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('swiper', TRANSPOT_THEME_DIR . '/assets/css/swiper.min.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('font-awesome', TRANSPOT_THEME_DIR . '/assets/css/font-awesome-all.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('jarallax', TRANSPOT_THEME_DIR . '/assets/css/jarallax.css.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('magnific-popup', TRANSPOT_THEME_DIR . '/assets/css/jquery.magnific-popup.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('flaticon', TRANSPOT_THEME_DIR . '/assets/css/flaticon.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('owl-carousel', TRANSPOT_THEME_DIR . '/assets/css/owl.carousel.min.css.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('owl-theme-default', TRANSPOT_THEME_DIR . '/assets/css/owl.theme.default.min.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('nice-select', TRANSPOT_THEME_DIR . '/assets/css/nice-select.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('jquery-ui', TRANSPOT_THEME_DIR . '/assets/css/jquery-ui.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('aos', TRANSPOT_THEME_DIR . '/assets/css/aos.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('odometer', TRANSPOT_THEME_DIR . '/assets/css/odometer.min.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('theme', TRANSPOT_THEME_DIR . '/assets/css/style.css', [], TRANSPOT_THEME_VERSION, 'all');
    wp_enqueue_style('responsive', TRANSPOT_THEME_DIR . '/assets/css/responsive.css', [], TRANSPOT_THEME_VERSION, 'all');

    wp_enqueue_style('tanspot-main', get_stylesheet_uri(), array(), TRANSPOT_THEME_VERSION, 'all');

    // Enqueue JavaScript File;

    // JS files
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', ['jquery'], TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('jarallax', get_template_directory_uri() . '/assets/js/jarallax.min.js',  ['jquery'], TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('appear', get_template_directory_uri() . '/assets/js/jquery.appear.min.js',  ['jquery'], TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('swiper', get_template_directory_uri() . '/assets/js/swiper.min.js', ['jquery'], TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('wnumb', get_template_directory_uri() . '/assets/js/wNumb.min.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('wow', get_template_directory_uri() . '/assets/js/wow.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('isotope', get_template_directory_uri() . '/assets/js/isotope.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.min.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('marquee', get_template_directory_uri() . '/assets/js/marquee.min.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/assets/js/countdown.min.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('circleType', get_template_directory_uri() . '/assets/js/jquery.circleType.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('fittext', get_template_directory_uri() . '/assets/js/jquery.fittext.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('lettering', get_template_directory_uri() . '/assets/js/jquery.lettering.min.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('sidebar-content', get_template_directory_uri() . '/assets/js/jquery-sidebar-content.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/js/aos.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('typed', get_template_directory_uri() . '/assets/js/typed-2.0.11.js', array('jquery'), TRANSPOT_THEME_VERSION, true);

    // GSAP
    wp_enqueue_script('gsap', get_template_directory_uri() . '/assets/js/gsap/gsap.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('scrollTrigger', get_template_directory_uri() . '/assets/js/gsap/ScrollTrigger.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
    wp_enqueue_script('splitText', get_template_directory_uri() . '/assets/js/gsap/SplitText.js', array('jquery'), TRANSPOT_THEME_VERSION, true);

    // Main theme script (optional)
    wp_enqueue_script('theme-main', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), TRANSPOT_THEME_VERSION, true);
}
add_action('wp_enqueue_scripts', 'tanspot_enqueue_scripts');
