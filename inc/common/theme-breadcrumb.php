<?php

/**
 * Breadcrumbs for gorent theme.
 *
 * @package     gorent
 * @author      Ordainit
 * @copyright   Copyright (c) 2024, Ordainit
 * @link        https://ordainit.com
 * @since       gorent 1.0.0
 */

function tanspot_breadcrumb_func()
{



?>


    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(assets/images/backgrounds/page-header-bg.jpg);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <div class="page-header__img-1">
                    <img src="assets/images/resources/page-header-img-1.png" alt="">
                </div>
                <div class="page-header__shape-1 float-bob-y">
                    <img src="assets/images/shapes/page-header-shape-1.png" alt="">
                </div>
                <p></p>
                <h2></h2>
                <h3><?php the_title(); ?></h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html__('Home', 'tanspot'); ?></a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>



<?php




}

add_action('tanspot_breadcrumb_content', 'tanspot_breadcrumb_func');

// Before Main Wrapper

// // Add smooth-wrapper and smooth-content before main content
// add_action('gorent_before_main_content', function () {
//     echo '<div id="smooth-wrapper">';
//     echo '  <div id="smooth-content">';
// });
// // After Main Content
// add_action('gorent_after_main_content', function () {
//     echo '  </div>'; // Close smooth-content
//     echo '</div>';   // Close smooth-wrapper
// });
