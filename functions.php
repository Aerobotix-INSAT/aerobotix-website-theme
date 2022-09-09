<?php

if (!function_exists("aerobotix_theme_setup")) :
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
    }
endif; // aerobotix_theme_setup
add_action("after_setup_theme", "aerobotix_theme_setup");

if (!function_exists("aerobotix_theme_enqueue_scripts")) :
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
            strval(time()) // TODO : Change this to a version number for production
        );

        // Conditionally Enqueue the main JS file.
        if (is_front_page()) {
            wp_enqueue_script(
                "front",
                get_template_directory_uri() . "/scripts/front-page.js",
                "1.0.0",
                true
            );
        } else {
            wp_enqueue_script(
                "main",
                get_template_directory_uri() . "/scripts/main.js",
                array(),false,true,
            );
        }
    }
endif; // aerobotix_theme_enqueue_scripts
add_action("wp_enqueue_scripts", "aerobotix_theme_enqueue_scripts");


