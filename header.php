<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>




    <?php do_action('tanspot_header'); ?>
    <?php do_action('tanspot_breadcrumb_content'); ?>
    <?php do_action('tanspot_search_popups'); ?>