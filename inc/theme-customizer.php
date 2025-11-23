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
    }
);
