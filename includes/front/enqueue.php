<?php


/**
 * Enqueue scripts and styles.
 */
function rb_enqueue() {

	$uri = get_theme_file_uri();
	$ver = RB_DEV_MODE ? time() : false;

	// register styles.
	wp_register_style( 'rb_google_fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i', false, $ver );
	wp_register_style( 'rb_bootstrap', $uri . '/assets/css/bootstrap.css', false, $ver );
	wp_register_style( 'rb_style', $uri . '/assets/css/style.css', false, $ver );
	wp_register_style( 'rb_dark', $uri . '/assets/css/dark.css', false, $ver );
	wp_register_style( 'rb_font_icons', $uri . '/assets/css/font-icons.css', false, $ver );
	wp_register_style( 'rb_animate', $uri . '/assets/css/animate.css', false, $ver );
	wp_register_style( 'rb_magnific_popup', $uri . '/assets/css/magnific-popup.css', false, $ver );
	wp_register_style( 'rb_responsive', $uri . '/assets/css/responsive.css', false, $ver );
	wp_register_style( 'rb_custom', $uri . '/assets/css/custom.css', false, $ver );

	// enqueue styles.
	wp_enqueue_style( 'rb_google_fonts' );
	wp_enqueue_style( 'rb_bootstrap' );
	wp_enqueue_style( 'rb_style' );
	wp_enqueue_style( 'rb_dark' );
	wp_enqueue_style( 'rb_font_icons' );
	wp_enqueue_style( 'rb_animate' );
	wp_enqueue_style( 'rb_magnific_popup' );
	wp_enqueue_style( 'rb_responsive' );
	wp_enqueue_style( 'rb_custom' );

	// register scripts.
	wp_register_script( 'rb_plugins', $uri . '/assets/js/plugins.js', array( 'jquery' ), $ver, true );
	wp_register_script( 'rb_functions', $uri . '/assets/js/functions.js', array( 'jquery' ), $ver, true );

	// enqueue scripts.
	wp_enqueue_script( 'rb_plugins' );
	wp_enqueue_script( 'rb_functions' );

}
