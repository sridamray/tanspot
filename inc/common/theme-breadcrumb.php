<?php



function tanspot_breadcrumb_func()
{
    global $post;

    $title = get_bloginfo('name');

    if (is_front_page() && is_home()) {
        $title = get_theme_mod('tanspot_blog_title', esc_html__('Blog', 'tanspot'));
    } elseif (is_home()) {

        $title = get_the_title(get_option('page_for_posts'));
    } else {
        $title = get_the_title();
    }


    $tanspot_breadcrumb_bg_image = get_theme_mod('tanspot_breadcrumb_bg_image');
    $tanspot_breadcrumb_thumb_image = get_theme_mod('tanspot_breadcrumb_thumb_image');
    $tanspot_breadcrumb_shape1_image = get_theme_mod('tanspot_breadcrumb_shape1_image');







?>





    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url(<?php echo esc_url($tanspot_breadcrumb_bg_image, 'tanspot'); ?>);">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <div class="page-header__img-1">
                    <img src="<?php echo esc_url($tanspot_breadcrumb_thumb_image, 'tanspot'); ?>" alt="">
                </div>
                <div class="page-header__shape-1 float-bob-y">
                    <img src="<?php echo esc_url($tanspot_breadcrumb_shape1_image, 'tanspot'); ?>" alt="">
                </div>
                <p></p>
                <h2></h2>
                <h3><?php echo esc_html($title, 'tanspot'); ?></h3>
                <div class="thm-breadcrumb__inner">
                    <ul class="thm-breadcrumb list-unstyled">
                        <li><a href="<?php echo esc_url(home_url()); ?>"><?php echo esc_html__('Home', 'tanspot'); ?></a></li>
                        <li><span class="fas fa-angle-right"></span></li>
                        <li><?php echo esc_html($title, 'tanspot'); ?></li>
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
