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

function hide_admin_bar_from_non_admins(){
    if (current_user_can('administrator')) {
      return true;
    }
    return false;
  }
  add_filter( 'show_admin_bar', 'hide_admin_bar_from_non_admins' );

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

function save_company_data() {
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'save_company_data') {
        if (!is_user_logged_in()) {
            wp_die('You must be logged in to save company data!');
        } elseif (!isset($_POST['company_name']) || !isset($_POST['company_address']) || !isset($_POST['company_postal']) || !isset($_POST['company_orgnr'])) {
            wp_die('Company name, address, postal and orgnr are required!');
        }
        
        $user_id = get_current_user_id();
        update_user_meta($user_id, 'company_name', sanitize_text_field($_POST['company_name']));
        update_user_meta($user_id, 'company_address', sanitize_textarea_field($_POST['company_address']));
        update_user_meta($user_id, 'company_postal', sanitize_text_field($_POST['company_postal']));
        update_user_meta($user_id, 'company_orgnr', sanitize_text_field($_POST['company_orgnr']));

        wp_redirect("register-3");
        exit;
    }
}
add_action('init', 'save_company_data'); // Assuming data saves on user registration

function custom_user_fields($user) {
    $bedriftsnavn = get_user_meta($user->ID, 'company_name', true);
    $adresse = get_user_meta($user->ID, 'company_address', true);
    $postnummer = get_user_meta($user->ID, 'company_postal', true);
    $orgnr = get_user_meta($user->ID, 'company_orgnr', true);

    ?>
    <h3>Bedriftsinformasjon</h3>
    <table class="form-table">
        <tr>
            <th><label for="company_name">Bedriftsnavn</label></th>
            <td><input type="text" name="company_name" id="company_name" value="<?php echo $bedriftsnavn; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="company_address">Adresse</label></th>
            <td><input type="text" name="company_address" id="company_address" value="<?php echo $adresse; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="company_postal">Postnummer</label></th>
            <td><input type="text" name="company_postal" id="company_postal" value="<?php echo $postnummer; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="company_orgnr">Organisasjonsnummer</label></th>
            <td><input type="text" name="company_orgnr" id="company_orgnr" value="<?php echo $orgnr; ?>" class="regular-text" /></td>
        </tr>
    </table>
    <?php
}
add_action('show_user_profile', 'custom_user_fields');
add_action('edit_user_profile', 'custom_user_fields');

function save_custom_user_fields($user_id) {
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    update_user_meta($user_id, 'company_name', sanitize_text_field($_POST['company_name']));
    update_user_meta($user_id, 'company_address', sanitize_textarea_field($_POST['company_address']));
    update_user_meta($user_id, 'company_postal', sanitize_text_field($_POST['company_postal']));
    update_user_meta($user_id, 'company_orgnr', sanitize_text_field($_POST['company_orgnr']));
}
add_action('personal_options_update', 'save_custom_user_fields');
add_action('edit_user_profile_update', 'save_custom_user_fields');

/* 
function delete_inactive_users() {
    $users = get_users(array('role' => 'subscriber'));
    $current_time = current_time('timestamp');

    foreach ($users as $user) {
        $last_login = get_user_meta($user->ID, 'last_login', true);
        $last_login = strtotime($last_login);

        if ($current_time - $last_login > 31536000) { // 1 year
            wp_delete_user($user->ID);
        }
    }
}

if (!wp_next_scheduled('delete_inactive_users_cron')) {
    wp_schedule_event(time(), 'daily', 'delete_inactive_users_cron');
}
add_action('delete_inactive_users_cron', 'delete_inactive_users');

function update_last_login($user_login, $user) {
    update_user_meta($user->ID, 'last_login', current_time('mysql'));
}
add_action('wp_login', 'update_last_login', 10, 2);
 */