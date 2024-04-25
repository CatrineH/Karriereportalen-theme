<?php
/**
 *  Theme Functions
 * @package Karriereportalen
 */

// Load Stylesheets
function load_css() {
    // bootstrap
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // custom css
    wp_register_style('style', get_template_directory_uri() . '/assets/css/custom.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_css'); 


// Load Javascript
function load_js() {
    // bootstrap + jquery
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri(). '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap');
    
    // custom js
    wp_register_script('script', get_template_directory_uri(). '/assets/js/script.js', array('jquery'), false, true);
    wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'load_js');


// Load Fontawsome icons
function load_font_awesome() {
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_font_awesome');



// Theme setup
function theme_setup() {
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
            'side-navigation' => 'Side Navigation',
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
}
add_action('after_setup_theme', 'theme_setup');

function handle_user_login() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'user_login_action') {
        // Input checks
        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            wp_die('Email and password are required!');
        }

        $email = sanitize_text_field($_POST['email']);
        $password = sanitize_text_field($_POST['password']);
        $remember = isset($_POST['remember']) ? true : false;

        $creds = array(
            'user_login'    => $email,
            'user_password' => $password,
            'remember'      => $remember
        );

        $user = wp_signon($creds, false);

        if (is_wp_error($user)) {
            echo $user->get_error_message();
        } else {
            // Redirect to a kontrollpanel page after successful login
            wp_redirect("kontrollpanel");
            exit;
        }
    }
}
add_action('init', 'handle_user_login');

function create_new_user() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'create_new_user') {
        // Input checks
        if (!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['email'])) {
            wp_die('Username, password and email are required!');
        }
    
        $username = sanitize_text_field($_POST['username']);
        $password = $_POST['password']; // Passwords should not be sanitized as it can remove valid characters
        $email = sanitize_email($_POST['email']);
    
        $user_id = wp_create_user($username, $password, $email);
    
        if (is_wp_error($user_id)) {
            wp_redirect("register");
            exit;
        } else {
            $creds = array(
                'user_login'    => $email,
                'user_password' => $password,
            );

            $user = wp_signon($creds, false);
            wp_redirect("register-2");
            exit;
        }
    }
}
add_action('init', 'create_new_user');

function save_company_data($user_id) {
    if (isset($_POST['company_name'])) {
        update_user_meta($user_id, 'company_name', sanitize_text_field($_POST['company_name']));
    }
    if (isset($_POST['company_address'])) {
        update_user_meta($user_id, 'company_address', sanitize_textarea_field($_POST['company_address']));
    }
    if (isset($_POST['company_number'])) {
        update_user_meta($user_id, 'company_number', sanitize_text_field($_POST['company_number']));
    }
}
add_action('user_register', 'save_company_data'); // Assuming data saves on user registration

function hide_admin_bar_from_non_admins(){
  if (current_user_can('administrator')) {
    return true;
  }
  return false;
}
add_filter( 'show_admin_bar', 'hide_admin_bar_from_non_admins' );