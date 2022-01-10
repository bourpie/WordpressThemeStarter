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
add_theme_support('post-thumbnails');
add_theme_support('widgets');


// Menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location',
        'mobile-menu' => 'Mobile Menu Location',
    )
);

// Removes W3C Warnings for type attributes
add_action(
    'after_setup_theme',
    function() {
        add_theme_support( 'html5', [ 'script', 'style' ] );
    }
);

//Filters
// Remove "Category:", "Tag:", "Author:" from the_archive_title
add_filter( 'get_the_archive_title', function ($title) {    
    if ( is_category() ) {    
            $title = single_cat_title( '', false );    
        } elseif ( is_tag() ) {    
            $title = single_tag_title( '', false );    
        } elseif ( is_author() ) {    
            $title = '<span class="vcard">' . get_the_author() . '</span>' ;    
        } elseif ( is_tax() ) { //for custom post types
            $title = sprintf( __( '%1$s' ), single_term_title( '', false ) );
        } elseif (is_post_type_archive()) {
            $title = post_type_archive_title( '', false );
        }
    return $title;    
});


// Custom Image Sizes

add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);


// Register Sidebars
function my_sidebars()
{
    register_sidebar(
        array(
                'name' => 'Page Sidebar',
                'id' => 'page-sidebar', 
                'before_title' => '<h4 class="widget-title">',
                'after_title' => '</h4>',
                'before_widget' => '<div class="sidebar-module">',
                'after_widget' => '</div>',

            )
        );

        register_sidebar(
            array(
                    'name' => 'Blog Sidebar',
                    'id' => 'blog-sidebar', 
                    'before_title' => '<h4 class="widget-title">',
                    'after_title' => '</h4>',
                    'before_widget' => '<div class="sidebar-module">',
                    'after_widget' => '</div>',
    
                )
            );

}
add_action('widgets_init', 'my_sidebars');



//Shortcodes

// [button link="#" text="Button Text" class="primary"]
function button_func($atts, $content = null)
{
    extract(shortcode_atts(array(
        'link' => '#',
        'text' => 'Button Text',
        'class' => 'primary',
    ), $atts));

    return '<a href="' . $link . '" class="btn btn-' . $class . '">' . $text . '</a>';
}

add_shortcode('button', 'button_func');

function alert_func($atts, $content = null)
{
    extract(shortcode_atts(array(
        'type' => 'info',
        'text' => 'Alert Text',
        'icon' => '',
    ), $atts));

    if($type == 'success') {
        $type = 'alert-success';
        $icon = '<i class="fas fa-check-circle"></i>';
    } elseif($type == 'info') {
        $type = 'alert-info';
        $icon = '<i class="fas fa-info-circle"></i>';
    } elseif($type == 'warning') {
        $type = 'alert-warning';
        $icon = '<i class="fas fa-exclamation-circle"></i>';
    } elseif($type == 'danger') {
        $type = 'alert-danger';
        $icon = '<i class="fas fa-exclamation-triangle"></i>';
    }

    return '<div class="alert ' . $type . '">' . $icon . '<span class="ms-3">' . $text . '</span></div>';
}

add_shortcode('alert', 'alert_func');

