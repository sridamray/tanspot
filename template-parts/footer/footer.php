     <?php

        $tanspot_footer_top_cta_text = get_theme_mod('tanspot_footer_top_cta_text', esc_html__('Subscribe To Our Newsletter To<br>Get Latest Update', 'tanspot'));
        $tanspot_footer_top_cta_form = get_theme_mod('tanspot_footer_top_cta_form');
        $tanspot_footer_copywrite_text = get_theme_mod('tanspot_footer_copywrite_text', esc_html__('© Copywright 2025 by <a href="https://themeforest.net/user/dreamlayout">Tanspot.com</a> All Rights Reserved.', 'tanspot'));


        ?>


     <!--Site Footer Start-->
     <footer class="site-footer">

         <div class="site-footer__shape-bg"
             style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/site-footer-shape-bg.png);"></div>
         <div class="container">
             <div class="site-footer__top">
                 <div class="row">
                     <div class="col-xl-12">
                         <div class="footer-widget__column footer-widget__newsletter">
                             <h3 class="footer-widget__newsletter-title"><?php echo tanspot_kses($tanspot_footer_top_cta_text, 'tanspot'); ?></h3>

                             <?php echo do_shortcode('[contact-form-7 id="' . $tanspot_footer_top_cta_form . '"]'); ?>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="site-footer__middle">
                 <div class="row">
                     <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                         <?php dynamic_sidebar('footer-1-column-1'); ?>

                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                         <?php dynamic_sidebar('footer-1-column-2'); ?>

                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                         <?php dynamic_sidebar('footer-1-column-3'); ?>

                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                         <?php dynamic_sidebar('footer-1-column-4'); ?>

                     </div>
                 </div>
             </div>
         </div>
         <div class="site-footer__bottom">
             <div class="container">
                 <div class="site-footer__bottom-inner">
                     <p class="site-footer__bottom-text"><?php echo tanspot_kses($tanspot_footer_copywrite_text, 'tanspot'); ?></p>
                     <?php tanspot_footer_bottom_menu_functions(); ?>
                 </div>
             </div>
         </div>
     </footer>
     <!--Site Footer End-->