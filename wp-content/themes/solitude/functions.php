<?php
function load_stylesheets()
{
    wp_enqueue_script('main_university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, '1.0', true);

    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
    wp_enqueue_style('google-fonts');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('font-awesome');
    /*
    wp_register_style('style', get_template_directory_uri().'/style.css', array(), false, 'all');
    wp_enqueue_style('style');
    */
    wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
}
add_action('wp_enqueue_scripts', 'load_stylesheets');


/* 

function include_jquery()
{

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.4.1.min.js', '', 1, true);
    add_action('wp_enqueue_scripts', 'jquery');

}
add_action('wp_enqueue_scripts', 'include_jquery');

function load_js()
{
   wp_enqueue_script('main_university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);

    wp_register_script('custom_js', get_template_directory_uri().'/js/scripts.js', '', 1, true);
    wp_enqueue_script('custom_js');
    
}
add_action('wp_enqueue_scripts', 'load_js');
*/

function university_features(){

    register_nav_menu('headerMenuLocation', 'Header Menu Location');
    add_theme_support('title-tag');
}

add_action('after_setup_theme', 'university_features');



add_theme_support('menus');

register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme'),
        'footer-menu' => __('footer Menu', 'theme'),


    )
);
