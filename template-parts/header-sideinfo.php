<?php

$header_side_content_logo  = get_theme_mod('header_side_content_logo');
$tanspot_logo_image = get_theme_mod('tanspot_logo_image', get_template_directory_uri() . '/assets/img/logo/logo-1.png');
$header_side_content_title = get_theme_mod('header_side_content_title', esc_html__('About Us', 'tanspot'));
$header_side_content_description = get_theme_mod('header_side_content_description', esc_html__('Description', 'tanspot'));
$header_side_content_contact_form_title = get_theme_mod('header_side_content_contact_form_title', esc_html__('Get a free quote', 'tanspot'));
$header_side_content_select_cf7_form = get_theme_mod('header_side_content_select_cf7_form');

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

                            <div class="sidebar-contact-info">
                                <h4>Contact Info</h4>
                                <ul class="list-unstyled">
                                    <li>
                                        <span class="icon-location1"></span> 88 broklyn street, New York
                                    </li>
                                    <li>
                                        <span class="icon-phone-call"></span>
                                        <a href="tel:123456789">+1 555-9990-153</a>
                                    </li>
                                    <li>
                                        <span class="icon-email"></span>
                                        <a href="mailto:info@example.com">info@example.com</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="thm-social-link1">
                                <ul class="social-box list-unstyled">
                                    <li>
                                        <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End sidebar widget content -->