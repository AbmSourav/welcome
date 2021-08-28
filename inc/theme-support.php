<?php
defined( 'ABSPATH' ) || die();


// Set the content width based on the theme's design and stylesheet.
if ( ! isset( $content_width ) ) {
    $content_width = 640; /* pixels */
}

if ( ! function_exists ( 'welcome_setup' ) ) {

    function welcome_setup() {

        // Make theme available for translation.
        load_theme_textdomain( 'welcome', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'welcome' ),
        ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        // Adding Thumbnail basic support
        add_theme_support( 'post-thumbnails' );

        // Add support editor stylesheet.
        add_theme_support( 'editor-styles' );

        // Add supports for responsive Embed fields
        add_theme_support( 'responsive-embeds' );

        // Add support for Block Styles.
        add_theme_support( 'wp-block-styles' );

        // Add support for full and wide align images.
        add_theme_support( 'align-wide' );

        // Enqueue editor styles.
        add_editor_style( 'style-editor.css' );

        // Adding support for Widget edit icons in customizer
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Enable support for Post Formats.
        add_theme_support( 'post-formats', array(
            'aside',
            'image',
            'video',
            'quote',
            'link',
        ) );

        // Set up the WordPress Theme logo feature.
        add_theme_support( 'custom-logo', array(
            'height'      => 40,
            'width'       => 90,
            'flex-height' => false,
            'flex-width'  => true,
            'header-text' => array( 'site-title' ),
        ) );

    }
}
add_action( 'after_setup_theme', 'welcome_setup' );
