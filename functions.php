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

    // cropper.js for images
    wp_enqueue_script('cropper-js', 'https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.js', array('jquery'), '1.5.12', true);
    wp_enqueue_style('cropper-css', 'https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css');

    
    // custom js
    wp_register_script('script', get_template_directory_uri(). '/assets/js/main.js', array('jquery'), false, true);
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

add_action('init', 'handle_user_login');

function handle_user_login() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'user_login_action') {
        // Input checks
        if (!isset($_POST['email']) || !isset($_POST['password'])) {
            wp_die('email and password are required!');
        }

        $email = sanitize_text_field($_POST['email']);
        $password = sanitize_text_field($_POST['password']);
        $remember = isset($_POST['remember-me']) ? true : false;

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



// Håndtere opplasting av bildefiler i annonseringsskjemaet - Opprette en mappe feks path/uploads/annonser/







function process_upload($file_key, $target_width, $target_height) {
    if (isset($_FILES[$file_key]) && $_FILES[$file_key]['size'] > 0) {
        $upload_overrides = array('test_form' => false);
        $movefile = wp_handle_upload($_FILES[$file_key], $upload_overrides);

        if ($movefile && !isset($movefile['error'])) {
            $resized_path = resize_image($movefile['file'], $movefile['file'], $target_width, $target_height);
            if ($resized_path) {
                $attachment = array(
                    'guid'           => $movefile['url'],
                    'post_mime_type' => $movefile['type'],
                    'post_title'     => preg_replace('/\.[^.]+$/', '', basename($resized_path)),
                    'post_content'   => '',
                    'post_status'    => 'inherit'
                );

                $attach_id = wp_insert_attachment($attachment, $resized_path);
                $attach_data = wp_generate_attachment_metadata($attach_id, $resized_path);
                wp_update_attachment_metadata($attach_id, $attach_data);

                return $attach_id;
            }
        } else {
            error_log('File upload error: ' . $movefile['error']);
        }
    }
    return null;
}

?>