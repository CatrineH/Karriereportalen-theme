<?php
// Load Stylesheets
function load_css() {
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css'); 

// Load Javascript
function load_js() {
    wp_enqueue_script('jquery');
    // Bruker relativ sti i forhold til temaet
    wp_register_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap');
    
   
    wp_register_script('script', get_template_directory_uri(). './script.js', array('jquery'), false, true);
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'load_js');

// Theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('widgets');

// Menus
register_nav_menus(
   array(
        'top-bar' => __('Top Menu Location', 'theme-domain'),
        'mobile-menu' => __('Mobile Menu Location', 'theme-domain'),
        'footer-menu' => __('Footer Menu Location', 'theme-domain'),
    )
);

// Custom Image Sizes
add_image_size('thumbnail', 150, 150, true);
add_image_size('medium', 300, 300, true);
add_image_size('large', 768, 768, true);
add_image_size('full', 1024, 1024, true);
add_image_size('full-width', 1024, 0, true);
add_image_size('full-height', 0, 1024, true);
add_image_size('banner', 1024, 250, true);
add_image_size('banner-mobile', 320, 250, true);
add_image_size('banner-mobile-small', 200, 250, true);

// register_sidebars

function my_sidebar_widgets() {
    register_sidebar(array(
        'name' => 'Sidebar-Navigation',
        'id' =>'sidebar-nav',
        'description' => 'Sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title">',
        'after_title' => '</h4>',
    ));


}
add_action('widgets_init','my_sidebar_widgets');