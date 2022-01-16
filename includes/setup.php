<?php

/**
 * Theme setup.
 */
function rb_setup_theme() {
    // Theme support.
    add_theme_support( 'post-thumbnails' );


    // Register nav.
    register_nav_menus( array(
        'top' => __( 'Top Menu', 'bodjack' ),
        'primary' => __( 'Primary Menu', 'bodjack' ),
        'footer' => __( 'Footer Menu', 'bodjack' ),
    ) );
}