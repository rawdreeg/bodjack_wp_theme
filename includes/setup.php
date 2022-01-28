<?php

/**
 * Theme setup.
 */
function rb_setup_theme() {
    // Theme support thumbnails.
    add_theme_support( 'post-thumbnails' );
    // Theme support title tag.
    add_theme_support( 'title-tag' );
    // Theme support custom logo.
    add_theme_support( 'custom-logo' );


    // Register nav.
    register_nav_menus( array(
        'top' => __( 'Top Menu', 'bodjack' ),
        'primary' => __( 'Primary Menu', 'bodjack' ),
        'footer' => __( 'Footer Menu', 'bodjack' ),
    ) );

    // add quads support.
    if (function_exists('quads_register_ad')){
        quads_register_ad( array('location' => 'header', 'description' => 'Header position') );
    }
}