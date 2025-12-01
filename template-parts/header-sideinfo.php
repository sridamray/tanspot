<?php

$header_side_content_logo  = get_theme_mod('header_side_content_logo');
$tanspot_logo_image = get_theme_mod('tanspot_logo_image', get_template_directory_uri() . '/assets/img/logo/logo-1.png');
$header_side_content_title = get_theme_mod('header_side_content_title', esc_html__('About Us', 'tanspot'));
$header_side_content_description = get_theme_mod('header_side_content_description', esc_html__('Description', 'tanspot'));
$header_side_content_contact_form_title = get_theme_mod('header_side_content_contact_form_title', esc_html__('Get a free quote', 'tanspot'));
$header_side_content_select_cf7_form = get_theme_mod('header_side_content_select_cf7_form');

$header_side_content_contact_info_title = get_theme_mod('header_side_content_contact_info_title', esc_html__('Contact Info', 'tanspot'));
$header_side_content_contact_info_address = get_theme_mod('header_side_content_contact_info_address', esc_html__('88 broklyn street, New York', 'tanspot'));
$header_side_content_contact_info_phone = get_theme_mod('header_side_content_contact_info_phone', esc_html__('+1 555-9990-153', 'tanspot'));
$header_side_content_contact_info_email = get_theme_mod('header_side_content_contact_info_email', esc_html__('info@example.com', 'tanspot'));
$header_side_content_contact_info_switcher = get_theme_mod('header_side_content_contact_info_switcher', true);
$header_side_content_contact_info_social_switcher = get_theme_mod('header_side_content_contact_info_social_switcher', true);
$header_side_content_contact_info_facebook = get_theme_mod('header_side_content_contact_info_facebook', esc_html__('#', 'tanspot'));
$header_side_content_contact_info_twitter = get_theme_mod('header_side_content_contact_info_twitter', esc_html__('#', 'tanspot'));
$header_side_content_contact_info_pinterest = get_theme_mod('header_side_content_contact_info_pinterest', esc_html__('#', 'tanspot'));
$header_side_content_contact_info_instagram = get_theme_mod('header_side_content_contact_info_instagram', esc_html__('#', 'tanspot'));

if (!empty($header_side_content_logo)) {
    $header_side_content_logo = $header_side_content_logo;
} else {
    $header_side_content_logo = $tanspot_logo_image;
}



?>

<!-- Start sidebar widget content -->
<div class="xs-sidebar-group info-group info-sidebar">
    <div class="xs-overlay xs-bg-black"></div>
    <div class="xs-sidebar-widget">
        <div class="sidebar-widget-container">
            <div class="widget-heading">
                <a href="#" class="close-side-widget"><?php echo esc_html__('X', 'tanspot'); ?></a>
            </div>
            <div class="sidebar-textwidget">
                <div class="sidebar-info-contents">
                    <div class="content-inner">
                        <div class="logo">

                            <a href="<?php echo esc_url(home_url()); ?>"><img src="<?php echo esc_url($header_side_content_logo, 'tanspot'); ?>" alt="" /></a>
                        </div>
                        <div class="content-box">
                            <h4><?php echo esc_html($header_side_content_title, 'tanspot'); ?></h4>
                            <div class="inner-text">
                                <p><?php echo esc_html($header_side_content_description, 'tanspot'); ?>
                                </p>
                            </div>
                        </div>

                        <div class="form-inner">
                            <h4><?php echo esc_html($header_side_content_contact_form_title, 'tanspot'); ?></h4>
                            <div class="contact-form">

                                <?php
                                if (!empty($header_side_content_select_cf7_form)) {

                                    echo do_shortcode('[contact-form-7 id="' . esc_attr($header_side_content_select_cf7_form) . '"]');
                                } else {
                                    echo esc_html__('CF7 Not Found!', 'tanspot');
                                }


                                ?>



                            </div>
                            <?php if (!empty($header_side_content_contact_info_switcher)) : ?>
                                <div class="sidebar-contact-info">
                                    <h4><?php echo esc_html($header_side_content_contact_info_title, 'tanspot'); ?></h4>
                                    <ul class="list-unstyled">
                                        <?php if (!empty($header_side_content_contact_info_address)): ?>
                                            <li>
                                                <span class="icon-location1"></span> <?php echo esc_html($header_side_content_contact_info_address, 'tanspot'); ?>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (!empty($header_side_content_contact_info_phone)): ?>
                                            <li>
                                                <span class="icon-phone-call"></span>
                                                <a href="tel:<?php echo esc_attr($header_side_content_contact_info_phone, 'tanspot'); ?>"><?php echo esc_html($header_side_content_contact_info_phone, 'tanspot'); ?></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (!empty($header_side_content_contact_info_email)): ?>
                                            <li>
                                                <span class="icon-email"></span>
                                                <a href="mailto:<?php echo esc_attr($header_side_content_contact_info_email, 'tanspot'); ?>"><?php echo esc_html($header_side_content_contact_info_email, 'tanspot'); ?></a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($header_side_content_contact_info_social_switcher)) : ?>
                                <div class="thm-social-link1">
                                    <ul class="social-box list-unstyled">
                                        <?php if (!empty($header_side_content_contact_info_facebook)): ?>
                                            <li>
                                                <a href="<?php echo esc_url($header_side_content_contact_info_facebook, 'tanspot'); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (!empty($header_side_content_contact_info_twitter)): ?>
                                            <li>
                                                <a href="<?php echo esc_url($header_side_content_contact_info_twitter, 'tanspot'); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (!empty($header_side_content_contact_info_pinterest)): ?>
                                            <li>
                                                <a href="<?php echo esc_url($header_side_content_contact_info_pinterest, 'tanspot'); ?>"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                            </li>
                                        <?php endif; ?>
                                        <?php if (!empty($header_side_content_contact_info_instagram)): ?>
                                            <li>
                                                <a href="<?php echo esc_url($header_side_content_contact_info_instagram, 'tanspot'); ?>"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->