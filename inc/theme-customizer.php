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
    }
);
