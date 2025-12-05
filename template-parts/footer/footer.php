     <!--Site Footer Start-->
     <footer class="site-footer">
         <div class="site-footer__shape-bg"
             style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/shapes/site-footer-shape-bg.png);"></div>
         <div class="container">
             <div class="site-footer__top">
                 <div class="row">
                     <div class="col-xl-12">
                         <div class="footer-widget__column footer-widget__newsletter">
                             <h3 class="footer-widget__newsletter-title">Subscribe To Our Newsletter To<br>
                                 Get
                                 Latest Update</h3>
                             <form class="footer-widget__newsletter-form contact-form-validated"
                                 action="<?php echo get_template_directory_uri(); ?>/assets/inc/sendemail.php" method="POST">
                                 <div class="footer-widget__newsletter-form-input-box">
                                     <input type="email" placeholder="Enter email" name="email">
                                 </div>
                                 <button type="submit" class="footer-widget__newsletter-btn thm-btn">Subscribe
                                     <span><i class="icon-right-arrow"></i></span>
                                 </button>
                                 <div class="result"></div>
                             </form>
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
                     <p class="site-footer__bottom-text">© Copywright 2025 by <a
                             href="https://themeforest.net/user/dreamlayout">Tanspot.com</a> All Rights
                         Reserved.</p>
                     <ul class="list-unstyled site-footer__bottom-menu">
                         <li><a href="contact.html">Support</a></li>
                         <li><a href="about.html">Terms and Condition</a></li>
                         <li><a href="about.html">Privacy and Policy</a></li>
                     </ul>
                 </div>
             </div>
         </div>
     </footer>
     <!--Site Footer End-->