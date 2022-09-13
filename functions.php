<?php

use Sabre\VObject\Property\VCard\TimeStamp;

if (!function_exists("aerobotix_theme_setup")):
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which runs
     * before the init hook. The init hook is too late for some features, such as indicating
     * support post thumbnails.
     */
    function aerobotix_theme_setup()
    {
        // Add title support to the theme
        add_theme_support("title-tag");

        // Add default posts and comments RSS feed links to <head>;.
        add_theme_support("automatic-feed-links");

        //Enable support for post thumbnails and featured images.
        add_theme_support("post-thumbnails");

        //Add support for two custom navigation menus.
        register_nav_menus([
            "Blog" => "blog",
            "About" => "about",
            "Links" => "links",
        ]);

        // Add support for custom logo.
        add_theme_support("custom-logo");

        add_theme_support("custom-background");
        add_theme_support("responsive-embeds");
        add_theme_support("align-wide");
    }
endif; // aerobotix_theme_setup
add_action("after_setup_theme", "aerobotix_theme_setup");

if (!function_exists("aerobotix_theme_enqueue_scripts")):
    /**
     * Enqueue scripts and styles.
     */
    function aerobotix_theme_enqueue_scripts()
    {
        // Enqueue the main Stylesheet.
        wp_enqueue_style(
            "style",
            get_stylesheet_uri(),
            [],
            time()  // TODO : Change this to a version number for production
        );

        
        
            wp_enqueue_script(
                "front",
                get_template_directory_uri() . "/scripts/front-page.js",
                [],
                '',
                true
            );
        
            wp_enqueue_script(
                "main",
                get_template_directory_uri() . "/scripts/main.js",
                [],
                '',
                true
            );
        
    }
endif; // aerobotix_theme_enqueue_scripts
add_action("wp_enqueue_scripts", "aerobotix_theme_enqueue_scripts");

function themename_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 350,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);

	add_theme_support( 'custom-logo', $defaults );
}

add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

function get_user_id_by_display_name( $display_name ) {
    global $wpdb;

    if ( ! $user = $wpdb->get_row( $wpdb->prepare(
        "SELECT `ID` FROM $wpdb->users WHERE `display_name` = %s", $display_name
    ) ) )
        return false;
    return $user->ID;
}