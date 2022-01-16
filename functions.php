<?php

// Setup

define( 'RB_DEV_MODE', true );

// Includes
require get_theme_file_path( '/includes/front/enqueue.php' );
require get_theme_file_path( '/includes/setup.php' );
require get_theme_file_path( '/includes/custom-nav-walker.php' );
require get_theme_file_path( '/includes/widgets.php' );

// Hooks
add_action( 'wp_enqueue_scripts', 'rb_enqueue' );
add_action( 'after_setup_theme', 'rb_setup_theme' );
add_action( 'widgets_init', 'rb_widgets' );

// Shortcodes
