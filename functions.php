<?php

require get_template_directory() . '/inc/customizer.php';

function essence_load_scripts() {
    
    wp_enqueue_style( 
        'essence-style', 
        get_stylesheet_uri(), 
        array(), 
        filemtime( get_template_directory() . '/style.css' ), 
        'all' 
    );

    wp_enqueue_script( 
        'essence-dropdown', 
        get_template_directory_uri() . '/js/dropdown.js', 
        array(), 
        '1.0', 
        false 
    );

    wp_enqueue_script( 
        'essence-slider', 
        get_template_directory_uri() . '/js/slider.js', 
        array(), 
        '1.0', 
        true 
    );
}
add_action( 'wp_enqueue_scripts', 'essence_load_scripts' );

function essence_theme_setup() {
    register_nav_menus( array(
        'wp_devs_main_menu'   => __( 'Main Menu', 'essence' ),
        'wp_devs_footer_menu' => __( 'Footer Menu', 'essence' ),
        'essence_footer_menu' => __( 'Footer Menu', 'essence' ), // Added new menu here
    ) );

    add_theme_support( 'custom-header', array(
        'height' => 225,
        'width'  => 1920
    ) );

    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo', array(
        'width'       => 200,
        'height'      => 110,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    add_theme_support( 'automatic-feed-links' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'html5', array(
        'comment-list',
        'comment-form',
        'search-form',
        'gallery',
        'caption',
        'style',
        'script'
    ) );
}
add_action( 'after_setup_theme', 'essence_theme_setup' );

function essence_register_sidebars() {
    register_sidebar( array(
        'name'          => __( 'Blog Sidebar', 'essence' ),
        'id'            => 'sidebar-blog',
        'description'   => __( 'Add widgets for blog posts.', 'essence' ),
        'before_widget' => '<div class="widget-wrapper">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );

    for ( $i = 1; $i <= 3; $i++ ) {
        register_sidebar( array(
            'name'          => __( "Service $i", 'essence' ),
            'id'            => "services-$i",
            'description'   => __( "Service Area $i on the homepage", 'essence' ),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    }
}
add_action( 'widgets_init', 'essence_register_sidebars' );

if ( ! function_exists( 'wp_body_open' ) ) {
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}