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
    // Automatic feed.
    add_theme_support( 'automatic-feed-links' );
    // HTML5 support.
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

    // Starter content.
    add_theme_support( 'starter-content', array(
        'widgets' => array(
            'rb_sidebar' => array(
                'text_business_info',
                'search',
                'text_about',
            ),
        ),
        'attachments' => array(
            'image-about' => array(
                'post_title' => _x( 'About', 'Theme starter content', 'bodjack' ),
                'file' => 'assets/images/about/1.jpg',
            )
        ),
        'posts' => array(
            'home' => array(
                'thumbnail' => '{{image-about}}',
            ),
            'about' => array(
                'thumbnal' => '{{image-about}}',
                'post_content' => _x( 'This is a post about our company.', 'Theme starter content', 'bodjack' ),
            ),
            'blog' => array(
                'thumbnal' => '{{image-about}}',
                'post_content' => _x( 'This is a post about our contact.', 'Theme starter content', 'bodjack' ),
            ),
        ),
        'options' => array(
            'show_on_front' => 'page',
            'page_on_front' => '{{home}}',
            'page_for_post' => '{{blog}}',
        ),
        'theme_mods' => array(
            'rb_header_show_search' => 'yes',
            'rb_header_show_cart' => 'yes',
            'rb_footer_copyright_text' => 'Bodjack Theme, Powered by WordPress. All Rights Reserved. &copy; ' . date( 'Y' ),
        ),
        'nav_menus' => array(
            'primary' => array(
                'name' => __( 'Primary Menu', 'bodjack' ),
                'items' => array(
                    'page_home',
                    'page_about',
                    'page_blog',                
                ),
            ),
            'top' => array(
                'name' => __( 'Primary Menu', 'bodjack' ),
                'items' => array(
                    'page_home',
                    'page_about',
                    'page_blog',                
                ),
            ),
        ),
    ));

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