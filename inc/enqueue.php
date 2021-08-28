<?php
defined( 'ABSPATH' ) || die();


if ( ! function_exists( 'welcome_scripts' ) ) {

	function welcome_scripts() {
		wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/assets/vendor/fontawesome5.13/css/all.min.css', array(), '5.13' );
		wp_enqueue_style( 'welcome-style', get_template_directory_uri() . '/assets/css/welcome-main.min.css', array(), wp_get_theme()->get( 'Version' ) );

		wp_enqueue_script( 'welcome-main-js', get_template_directory_uri() . '/assets/js/welcome-main.min.js', array('jquery'), wp_get_theme()->get( 'Version' ), true );
	}
}
add_action( 'wp_enqueue_scripts', 'welcome_scripts' );
