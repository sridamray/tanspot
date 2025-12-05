    <?php

    $tanspot_header_top_phone = get_theme_mod('tanspot_header_top_phone', esc_html__('+15502505260', 'tanspot'));
    $tanspot_header_top_email = get_theme_mod('tanspot_header_top_email', esc_html__('info@tanspot24.com', 'tanspot'));
    $tanspot_header_top_location = get_theme_mod('tanspot_header_top_location', esc_html__('4124 Cimmaron Road, CA 92806', 'tanspot'));
    $tanspot_header_top_welcome_text = get_theme_mod('tanspot_header_top_welcome_text', esc_html__('Welcome to Our Tanspot Office', 'tanspot'));
    $tanspot_header_top_office_time = get_theme_mod('tanspot_header_top_office_time', esc_html__('Mon - Fri: 09:00 - 05:00', 'tanspot'));
    $tanspot_header_top_twitter = get_theme_mod('tanspot_header_top_twitter', esc_html__('#', 'tanspot'));
    $tanspot_header_top_facebook = get_theme_mod('tanspot_header_top_facebook', esc_html__('#', 'tanspot'));
    $tanspot_header_top_pinterest = get_theme_mod('tanspot_header_top_pinterest', esc_html__('#', 'tanspot'));
    $tanspot_header_top_instagram = get_theme_mod('tanspot_header_top_instagram', esc_html__('#', 'tanspot'));

    // Header Social Repeater
    $header_top_social_repeater = get_theme_mod('header_top_social_repeater');
    $header_top_switcher = get_theme_mod('header_top_switcher', true);
    $header_right_switcher = get_theme_mod('header_right_switcher', false);
    $tanspot_header_right_cta_text = get_theme_mod('tanspot_header_right_cta_text', esc_html__('Call Anytime', 'tanspot'));
    $tanspot_header_right_cta_phone = get_theme_mod('tanspot_header_right_cta_phone', esc_html__('+9288006780', 'tanspot'));
    $header_right_cta_switcher = get_theme_mod('header_right_cta_switcher', true);
    $tanspot_header_right_btn_text = get_theme_mod('tanspot_header_right_btn_text', esc_html__('Track Order', 'tanspot'));
    $tanspot_header_right_btn_url = get_theme_mod('tanspot_header_right_btn_url', esc_html__('#', 'tanspot'));
    $header_right_btn_switcher = get_theme_mod('header_right_btn_switcher', true);




    ?>




    <header class="main-header">
        <?php if (!empty($header_top_switcher)) : ?>
            <div class="main-menu__top">
                <div class="main-menu__top-inner">
                    <ul class="list-unstyled main-menu__contact-list">
                        <li>
                            <div class="icon">
                                <i class="icon-phone-call"></i>
                            </div>
                            <div class="text">
                                <p><a href="tel:<?php echo esc_attr($tanspot_header_top_phone, 'tanspot'); ?>"><?php echo esc_html($tanspot_header_top_phone, 'tanspot'); ?></a></p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-email"></i>
                            </div>
                            <div class="text">
                                <p><a href="mailto:<?php echo esc_attr($tanspot_header_top_email, 'tanspot'); ?>"><?php echo esc_html($tanspot_header_top_email, 'tanspot'); ?></a>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="icon-location1"></i>
                            </div>
                            <div class="text">
                                <p><?php echo esc_html($tanspot_header_top_location, 'tanspot'); ?></p>
                            </div>
                        </li>
                    </ul>
                    <p class="main-menu__top-welcome-text"><?php echo esc_html($tanspot_header_top_welcome_text, 'tanspot'); ?></p>

                    <?php tanspot_top_menu_functions(); ?>

                    <div class="main-menu__top-right">
                        <div class="main-menu__top-time">
                            <div class="main-menu__top-time-icon">
                                <span class="fas fa-clock"></span>
                            </div>
                            <p class="main-menu__top-text"><?php echo esc_html($tanspot_header_top_office_time, 'tanspot'); ?></p>
                        </div>
                        <div class="main-menu__social">
                            <?php if (!empty($tanspot_header_top_twitter)) : ?>
                                <a href="<?php echo esc_url($tanspot_header_top_twitter, 'tanspot'); ?>"><i class="fab fa-twitter"></i></a>
                            <?php endif; ?>


                            <?php foreach ($header_top_social_repeater as $header_top_socials):


                            ?>
                                <a href="<?php echo esc_url($header_top_socials['social_link'], 'tanspot'); ?>"><i class="<?php echo esc_attr($header_top_socials['social_link_icon'], 'tanpost'); ?>"></i></a>
                            <?php endforeach; ?>

                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>


        <nav class="main-menu">
            <div class="main-menu__wrapper">
                <div class="main-menu__wrapper-inner">
                    <div class="main-menu__left">
                        <div class="main-menu__logo">
                            <?php tanspot_theme_logo(); ?>

                        </div>
                    </div>
                    <div class="main-menu__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <?php tanspot_main_menu(); ?>


                    </div>

                    <?php if (!empty($header_right_switcher)) : ?>
                        <div class="main-menu__right">
                            <?php if (!empty($header_right_cta_switcher)) : ?>
                                <div class="main-menu__call">
                                    <div class="main-menu__call-icon">
                                        <i class="icon-phone-call"></i>
                                    </div>
                                    <div class="main-menu__call-content">
                                        <p class="main-menu__call-sub-title"><?php echo esc_html($tanspot_header_right_cta_text, 'tanspot'); ?></p>
                                        <h5 class="main-menu__call-number"><a href="tel:<?php echo esc_attr($tanspot_header_right_cta_phone, 'tanspot'); ?>"><?php echo esc_html($tanspot_header_right_cta_phone, 'tanspot'); ?></a></h5>
                                    </div>
                                </div>
                            <?php endif; ?>

                            <div class="main-menu__search-cart-box">
                                <div class="main-menu__search-cart-box">
                                    <div class="main-menu__search-box">
                                        <a href="#" class="main-menu__search searcher-toggler-box icon-search"></a>
                                    </div>
                                    <div class="main-menu__cart-box">
                                        <a href="cart.html" class="main-menu__cart">
                                            <span class="far fa-shopping-cart"></span>
                                            <span class="main-menu__cart-count">02</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="main-menu__nav-sidebar-icon">
                                <a class="navSidebar-button" href="javascript:void(0)">
                                    <span class="icon-dots-menu-one"></span>
                                    <span class="icon-dots-menu-two"></span>
                                    <span class="icon-dots-menu-three"></span>
                                </a>
                            </div>
                            <?php if (!empty($header_right_btn_switcher)) : ?>
                                <div class="main-menu__btn-box">
                                    <a href="<?php echo esc_url($tanspot_header_right_btn_url, 'tanspot'); ?>" class="thm-btn"><?php echo esc_html($tanspot_header_right_btn_text, 'tanspot'); ?><span><i
                                                class="icon-right-arrow"></i></span></a>
                                </div>
                            <?php endif; ?>
                        </div>

                    <?php endif; ?>


                </div>
            </div>
        </nav>
    </header>

    <div class="stricky-header stricked-menu main-menu">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->