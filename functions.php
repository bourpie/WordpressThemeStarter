<?php

// Load stylesheet
function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts', 'load_css');


// Load javascripts
function load_js()
{
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), false, true);

    wp_enqueue_script('bootstrap');
}

add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus');



// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);
