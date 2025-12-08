<?php

add_action(
    'init',
    function () {
        new \Kirki\Panel(
            'tanspot_theme_customizer',
            [
                'priority'    => 10,
                'title'       => esc_html__('Tanspot Customizer', 'tanspot'),
                'description' => esc_html__('Tanspot Customizer.', 'tanspot'),
            ]
        );

        // Preloader Section

        new \Kirki\Section(
            'tanspot_preloader',
            [
                'title'       => esc_html__('Preloader', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Checkbox_Switch(
            [
                'settings'    => 'tanspot_preloader_option',
                'label'       => esc_html__('Are you Hide/Show Preloader ?', 'tanspot'),
                'section'     => 'tanspot_preloader',
                'default'     => 'on',
                'choices'     => [
                    'on'  => esc_html__('On', 'tanspot'),
                    'off' => esc_html__('Off', 'tanspot'),
                ],
            ]
        );

        // Logo Section

        new \Kirki\Section(
            'tanspot_logo',
            [
                'title'       => esc_html__('Logo', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Image(
            [
                'settings'    => 'tanspot_logo_image',
                'label'       => esc_html__('Logo', 'tanspot'),
                'section'     => 'tanspot_logo',
                'default'     => get_template_directory_uri() . '/assets/img/logo/logo-1.png',
            ]
        );



        // Header Top Section

        new \Kirki\Section(
            'tanspot_header_top',
            [
                'title'       => esc_html__('Header Top Settings', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Checkbox_Switch(
            [
                'settings'    => 'header_top_switcher',
                'label'       => esc_html__('Enable Top Bar ?', 'tanspot'),
                'section'     => 'tanspot_header_top',
                'default'     => 'on',
                'choices'     => [
                    'on'  => esc_html__('Enable', 'tanspot'),
                    'off' => esc_html__('Disable', 'tanspot'),
                ],
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_phone',
                'label'    => esc_html__('Phone Number', 'tanspot'),
                'section'  => 'tanspot_header_top',
                'default'  => esc_html__('+15502505260', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_email',
                'label'    => esc_html__('Email Address', 'tanspot'),
                'section'  => 'tanspot_header_top',
                'default'  => esc_html__('info@tanspot24.com', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_location',
                'label'    => esc_html__('Location', 'tanspot'),
                'section'  => 'tanspot_header_top',
                'default'  => esc_html__('4124 Cimmaron Road, CA 92806', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_welcome_text',
                'label'    => esc_html__('Welcome Title', 'tanspot'),
                'section'  => 'tanspot_header_top',
                'default'  => esc_html__('Welcome to Our Tanspot Office', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_office_time',
                'label'    => esc_html__('Time', 'tanspot'),
                'section'  => 'tanspot_header_top',
                'default'  => esc_html__('Mon - Fri: 09:00 - 05:00', 'tanspot'),
                'priority' => 10,
            ]
        );



        // Header To social


        new \Kirki\Section(
            'tanspot_header_top_social',
            [
                'title'       => esc_html__('Header Top Social', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_twitter',
                'label'    => esc_html__('Twitter', 'tanspot'),
                'section'  => 'tanspot_header_top_social',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );

        // Header Top Social Repeater


        new \Kirki\Field\Repeater(
            [
                'settings' => 'header_top_social_repeater',
                'label'    => esc_html__('Social item', 'tanspot'),
                'section'  => 'tanspot_header_top_social',
                'priority' => 10,
                'fields'   => [
                    'social_link'   => [
                        'type'        => 'text',
                        'label'       => esc_html__('Social Link', 'tanspot'),
                        'default'     => esc_html__('#', 'tanspot'),
                    ],
                    'social_link_icon'   => [
                        'type'        => 'select',
                        'label'       => esc_html__('Select Icon', 'tanspot'),
                        'default'     => esc_html__('#', 'tanspot'),
                        'choices'     => [
                            'fab fa-facebook' => esc_html__('Facebook', 'tanspot'),
                            'fab fa-pinterest-p' => esc_html__('Pinterest', 'tanspot'),
                            'fab fa-instagram' => esc_html__('Instagram', 'tanspot'),
                        ],
                    ],

                ],
            ]
        );



        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_facebook',
                'label'    => esc_html__('Facebook', 'tanspot'),
                'section'  => 'tanspot_header_top_social',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_pinterest',
                'label'    => esc_html__('Pinterest', 'tanspot'),
                'section'  => 'tanspot_header_top_social',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_top_instagram',
                'label'    => esc_html__('Instagram', 'tanspot'),
                'section'  => 'tanspot_header_top_social',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );


        // Header right Settings

        new \Kirki\Section(
            'tanspot_header_right_settings',
            [
                'title'       => esc_html__('Header Right Settings', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Checkbox_Switch(
            [
                'settings'    => 'header_right_switcher',
                'label'       => esc_html__('Enable Header Right ?', 'tanspot'),
                'section'     => 'tanspot_header_right_settings',
                'default'     => 'off',
                'choices'     => [
                    'on'  => esc_html__('Enable', 'tanspot'),
                    'off' => esc_html__('Disable', 'tanspot'),
                ],
            ]
        );


        new \Kirki\Field\Checkbox_Switch(
            [
                'settings'    => 'header_right_cta_switcher',
                'label'       => esc_html__('Enable CTA ?', 'tanspot'),
                'section'     => 'tanspot_header_right_settings',
                'default'     => 'on',
                'choices'     => [
                    'on'  => esc_html__('Enable', 'tanspot'),
                    'off' => esc_html__('Disable', 'tanspot'),
                ],
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_right_cta_text',
                'label'    => esc_html__('CTA Text', 'tanspot'),
                'section'  => 'tanspot_header_right_settings',
                'default'  => esc_html__('Call Anytime', 'tanspot'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_right_cta_phone',
                'label'    => esc_html__('CTA Number', 'tanspot'),
                'section'  => 'tanspot_header_right_settings',
                'default'  => esc_html__('+9288006780', 'tanspot'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Checkbox_Switch(
            [
                'settings'    => 'header_right_btn_switcher',
                'label'       => esc_html__('Enable BTN ?', 'tanspot'),
                'section'     => 'tanspot_header_right_settings',
                'default'     => 'on',
                'choices'     => [
                    'on'  => esc_html__('Enable', 'tanspot'),
                    'off' => esc_html__('Disable', 'tanspot'),
                ],
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_right_btn_text',
                'label'    => esc_html__('Right BTN Text', 'tanspot'),
                'section'  => 'tanspot_header_right_settings',
                'default'  => esc_html__('Track Order', 'tanspot'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_header_right_btn_url',
                'label'    => esc_html__('Right BTN URL', 'tanspot'),
                'section'  => 'tanspot_header_right_settings',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );

        // Header Side Content Settings

        new \Kirki\Section(
            'tanspot_header_side_content_settings',
            [
                'title'       => esc_html__('Header Side Content Settings', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Image(
            [
                'settings'    => 'header_side_content_logo',
                'label'       => esc_html__('Header Side Logo', 'tanspot'),
                'section'     => 'tanspot_header_side_content_settings',
                'default'     => '',
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_title',
                'label'    => esc_html__('Title', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__('About Us', 'tanspot'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'header_side_content_description',
                'label'       => esc_html__('Descirption', 'tanspot'),
                'section'     => 'tanspot_header_side_content_settings',
                'default'     => esc_html__('Description', 'tanspot'),
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_form_title',
                'label'    => esc_html__('Contact Title', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__('Get a free quote', 'tanspot'),
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Select(
            [
                'settings'    => 'header_side_content_select_cf7_form',
                'label'       => esc_html__('Select CF7 Form', 'tanspot'),
                'section'     => 'tanspot_header_side_content_settings',
                'placeholder' => esc_html__('Choose a Form', 'tanspot'),
                'default'     => '',
                'choices'     => tanspot_get_cf7_forms(),
            ]
        );

        // contact info

        new \Kirki\Field\Checkbox_Switch(
            [
                'settings'    => 'header_side_content_contact_info_switcher',
                'label'       => esc_html__('Enable Contact Info ?', 'tanspot'),
                'section'     => 'tanspot_header_side_content_settings',
                'default'     => 'on',
                'choices'     => [
                    'on'  => esc_html__('Enable', 'tanspot'),
                    'off' => esc_html__('Disable', 'tanspot'),
                ],
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_info_title',
                'label'    => esc_html__('Contact Info Title', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__('Contact Info', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_info_address',
                'label'    => esc_html__('Contact Info Address', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__(' 88 broklyn street, New York', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_info_phone',
                'label'    => esc_html__('Contact Info Phone', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__(' 15559990153', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_info_email',
                'label'    => esc_html__('Contact Info Email', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__(' info@example.com', 'tanspot'),
                'priority' => 10,
            ]
        );

        // sidebar social section

        new \Kirki\Field\Checkbox_Switch(
            [
                'settings'    => 'header_side_content_contact_info_social_switcher',
                'label'       => esc_html__('Enable Social Area?', 'tanspot'),
                'section'     => 'tanspot_header_side_content_settings',
                'default'     => 'on',
                'choices'     => [
                    'on'  => esc_html__('Enable', 'tanspot'),
                    'off' => esc_html__('Disable', 'tanspot'),
                ],
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_info_facebook',
                'label'    => esc_html__('Facebook', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_info_twitter',
                'label'    => esc_html__('Twitter', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_info_pinterest',
                'label'    => esc_html__('Pinterest', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );
        new \Kirki\Field\Text(
            [
                'settings' => 'header_side_content_contact_info_instagram',
                'label'    => esc_html__('Instagram', 'tanspot'),
                'section'  => 'tanspot_header_side_content_settings',
                'default'  => esc_html__('#', 'tanspot'),
                'priority' => 10,
            ]
        );









        // header section

        new \Kirki\Section(
            'tanspot_header_style',
            [
                'title'       => esc_html__('Header Style', 'tanspot'),
                'description' => esc_html__('Header Style', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Select(
            [
                'settings'    => 'tanspot_header_style_option',
                'label'       => esc_html__('Select Header', 'tanspot'),
                'section'     => 'tanspot_header_style',
                'default'     => 'header-1',
                'placeholder' => esc_html__('Choose a Header', 'tanspot'),
                'choices'     => [
                    'header-1' => esc_html__('Header Style 1', 'tanspot'),
                    'header-2' => esc_html__('Header Style 2', 'tanspot'),
                    'header-3' => esc_html__('Header Style 3', 'tanspot'),
                ],
            ]
        );

        new \Kirki\Section(
            'tanspot_breacrumb_settings',
            [
                'title'       => esc_html__('Breadcrumb Settings', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );




        new \Kirki\Field\Image(
            [
                'settings'    => 'tanspot_breadcrumb_bg_image',
                'label'       => esc_html__('Breadcrumb BG Image', 'tanspot'),
                'section'     => 'tanspot_breacrumb_settings',
                'default'     => '',
            ]
        );

        new \Kirki\Field\Image(
            [
                'settings'    => 'tanspot_breadcrumb_thumb_image',
                'label'       => esc_html__('Breadcrumb Thumbnail', 'tanspot'),
                'section'     => 'tanspot_breacrumb_settings',
                'default'     => '',
            ]
        );
        new \Kirki\Field\Image(
            [
                'settings'    => 'tanspot_breadcrumb_shape1_image',
                'label'       => esc_html__('Breadcrumb Shape', 'tanspot'),
                'section'     => 'tanspot_breacrumb_settings',
                'default'     => '',
            ]
        );

        new \Kirki\Section(
            'tanspot_blog_settings',
            [
                'title'       => esc_html__('Blog Settings', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Text(
            [
                'settings' => 'tanspot_blog_title',
                'label'    => esc_html__('Blog Title', 'tanspot'),
                'section'  => 'tanspot_blog_settings',
                'default'  => esc_html__('Blog', 'tanspot'),
                'priority' => 10,
            ]
        );


        // Footer Top Settings


        new \Kirki\Section(
            'tanspot_footer_top_settings',
            [
                'title'       => esc_html__('Footer Top CTA', 'tanspot'),
                'description' => esc_html__('Only For Footer Style 1', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'tanspot_footer_top_cta_text',
                'label'       => esc_html__('CTA Text', 'tanspot'),
                'section'     => 'tanspot_footer_top_settings',
                'default'     => esc_html__('Subscribe To Our Newsletter To<br>Get Latest Update', 'tanspot'),
            ]
        );


        new \Kirki\Field\Select(
            [
                'settings'    => 'tanspot_footer_top_cta_form',
                'label'       => esc_html__('Select CF7 Form', 'tanspot'),
                'section'     => 'tanspot_footer_top_settings',
                'placeholder' => esc_html__('Choose a Form', 'tanspot'),
                'default'     => '',
                'choices'     => tanspot_get_cf7_forms(),
            ]
        );





        // Footer section

        new \Kirki\Section(
            'tanspot_footer_style',
            [
                'title'       => esc_html__('Footer Style', 'tanspot'),
                'description' => esc_html__('Footer Style', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );


        new \Kirki\Field\Select(
            [
                'settings'    => 'tanspot_footer_style_option',
                'label'       => esc_html__('Select Footer', 'tanspot'),
                'section'     => 'tanspot_footer_style',
                'default'     => 'footer-1',
                'placeholder' => esc_html__('Choose a Footer', 'tanspot'),
                'choices'     => [
                    'footer-1' => esc_html__('Footer Style 1', 'tanspot'),
                    'footer-2' => esc_html__('Footer Style 2', 'tanspot'),
                    'footer-3' => esc_html__('Footer Style 3', 'tanspot'),
                ],
            ]
        );
        // Footer copyright Settings

        new \Kirki\Section(
            'tanspot_footer_copywrite_settings',
            [
                'title'       => esc_html__('Footer Copywrite', 'tanspot'),
                'description' => esc_html__('Footer Copywrite', 'tanspot'),
                'panel'       => 'tanspot_theme_customizer',
                'priority'    => 160,
            ]
        );

        new \Kirki\Field\Textarea(
            [
                'settings'    => 'tanspot_footer_copywrite_text',
                'label'       => esc_html__('Copywrite Text', 'tanspot'),
                'section'     => 'tanspot_footer_copywrite_settings',
                'default'     => esc_html__('© Copywright 2025 by <a href="https://themeforest.net/user/dreamlayout">Tanspot.com</a> All Rights Reserved.', 'tanspot'),
            ]
        );

        new \Kirki\Field\Select(
            [
                'settings'    => 'tanspot_header_bottom_menu_select',
                'label'       => esc_html__('Select Menu', 'tanspot'),
                'section'     => 'tanspot_footer_copywrite_settings',
                'default'     => '',
                'placeholder' => esc_html__('Choose a Menu', 'tanspot'),
                'choices'     => tanspot_get_existing_menus(),
            ]
        );

        // end init function
    }

);
