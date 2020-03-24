<?php

function load_stylesheets(){
    
    wp_register_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style( 'bootstrap' );
    
    wp_register_style( 'myThemeStyle', get_template_directory_uri() . '/style.css', array(), false, 'all' );
    wp_enqueue_style( 'myThemeStyle' );
}
add_action( 'wp_enqueue_scripts', 'load_stylesheets');


function load_js(){

    wp_register_script( 'jQuery', get_template_directory_uri() . '/jquery/jquery.js', array(), null, true );
    wp_enqueue_script( 'jQuery' );
    wp_register_script( 'myThemeJs', get_template_directory_uri() . '/scripts.js', array(), null, true );
    wp_enqueue_script( 'myThemeJs' );

}
add_action( 'wp_enqueue_scripts', 'load_js');

add_theme_support( 'menus' );

add_theme_support( 'post-thumbnails' );

register_nav_menus( array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme')
) );

add_image_size( 'blog_card', 300, 200, true );
add_image_size( 'post_image', 600, 400, true );