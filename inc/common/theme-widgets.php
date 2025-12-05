<?php

for ($num = 1; $num <= 4; $num++) {
    register_sidebar(array(
        'name'          => esc_html__('Footer Style 1 column ' . $num, 'tanspot'),
        'id'            => 'footer-1-column-' . $num,
        'description'   => esc_html__('Footer 1 Column', 'tanspot'),
        'before_widget' => '<div id="%1$s" class="widget footer-widget__column %2$s footer-1-column-' . $num . '">',
        'after_widget'  => '</div>',
        'before_title'  => '<div class="footer-widget__title-box"><h3 class="footer-widget__title">',
        'after_title'   => '</h3></div>',
    ));
}
