<?php

function rb_widgets() {
    register_sidebar( array(
        'name'          => __( 'Sidebar', 'bodjack' ),
        'id'            => 'rb_sidebar',
        'description'   => __( 'Add widgets here to appear in your sidebar.', 'bodjack' ),
        'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}