<?php

/**
 * Theme Functions
 * @package Karriereportalen
 */

// Load stylesheets
function load_css()
{
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
    wp_enqueue_style('style', get_template_directory_uri() . '/assets/css/custom.css', array(), false, 'all');
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
}
add_action('wp_enqueue_scripts', 'load_css');

// Load JavaScript files
function load_js()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), null, true);
    wp_enqueue_script('custom-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), null, true);

    // Localize script for AJAX
    wp_localize_script('custom-script', 'ajax_object', array(
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce' => wp_create_nonce('file_upload')
    ));
}
add_action('wp_enqueue_scripts', 'load_js');

// AJAX handlers for file upload
function handle_image_upload_request()
{
    error_log('AJAX request received');

    if (!check_ajax_referer('file_upload', 'security', false)) {
        error_log('Nonce check failed');
        wp_send_json_error(['message' => 'Nonce verification failed']);
    }


    check_ajax_referer('file_upload', 'security', true);
    $response = [];
    $banner_id = media_handle_upload('imageBanner', 0);
    $logo_id = media_handle_upload('imageLogo', 0);

    if (is_wp_error($banner_id) || is_wp_error($logo_id)) {
        error_log('Error uploading files: ' . print_r($banner_id->get_error_messages(), true) . ' or ' . print_r($logo_id->get_error_messages(), true));
        wp_send_json_error(array('message' => 'Uploading failed.'));
        return;
    }

    error_log('Upload successful: Banner ID - ' . $banner_id . ', Logo ID - ' . $logo_id);
    wp_send_json_success(['ids' => ['banner_id' => $banner_id, 'logo_id' => $logo_id]]);
    // wp_send_json_success(array('banner_id' => $banner_id, 'logo_id' => $logo_id));
}


function handle_job_form_upload()
{
    // Sjekker nonce security
    if (!check_ajax_referer('file_upload', 'security', false)) {
        wp_send_json_error(['message' => 'Security check failed']);
        return;
    }

    $banner_id = media_handle_upload('imageBanner', 0); // 0 = ikke tilknyttet noen post
    $logo_id = media_handle_upload('imageLogo', 0);

    if (is_wp_error($banner_id) || is_wp_error($logo_id)) {
        wp_send_json_error(['message' => 'Upload failed', 'errors' => ['banner' => $banner_id->get_error_messages(), 'logo' => $logo_id->get_error_messages()]]);
    } else {
        wp_send_json_success(['message' => 'Upload successful', 'ids' => ['banner_id' => $banner_id, 'logo_id' => $logo_id]]);
    }
}
add_action('wp_ajax_handle_job_form_upload', 'handle_job_form_upload');



// Theme setup
function theme_setup()
{
    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');

    register_nav_menus(array(
        'top-bar' => __('Top Menu Location', 'theme-domain'),
        'mobile-menu' => __('Mobile Menu Location', 'theme-domain'),
        'footer-menu' => __('Footer Menu Location', 'theme-domain'),
        'side-navigation' => 'Side Navigation',
    ));

    add_image_size('thumbnail', 150, 150, true);
    // add_image_size('medium', 300, 300, true);
    // add_image_size('large', 768, 768, true);
    add_image_size('full', 1024, 1024, true);
    add_image_size('full-width', 1024, 0, true);
    add_image_size('full-height', 0, 1024, true);
    add_image_size('banner', 1024, 250, true);
    // add_image_size('banner-mobile', 320, 250, true);
    // add_image_size('banner-mobile-small', 200, 250, true);
}
add_action('after_setup_theme', 'theme_setup');

// Skjuler admin bar for ikke admins
function hide_admin_bar_from_non_admins()
{
    return current_user_can('administrator');
}
add_filter('show_admin_bar', 'hide_admin_bar_from_non_admins');



// ------------- CUSTOM login og reg hooks + funksjoner -----------------


function handle_user_login()
{
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

function create_new_user()
{
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

function save_company_data()
{
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

function custom_user_fields($user)
{
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


function save_custom_user_fields($user_id)
{
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



function handle_image_upload($inputName)
{
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');

    // Sjekk om bildet faktisk er lastet opp via $_FILES
    if (!isset($_FILES[$inputName]) || $_FILES[$inputName]['error'] != UPLOAD_ERR_OK) {
        echo "Ingen fil ble lastet opp.";
        return;
    }

    // Håndtere opplastingen med WordPress funksjoner
    $attachment_id = media_handle_upload($inputName, 0);  // 0 betyr at det ikke er knyttet til noen spesifikk post

    if (is_wp_error($attachment_id)) {
        echo "Feil ved opplasting: " . $attachment_id->get_error_message();
    } else {
        // Trigg pluginens hook etter vellykket opplasting
        do_action('sirsc_attachment_images_processed', $attachment_id);
        echo "Bilde er lastet opp og behandlet! Vedlegg ID: " . $attachment_id;
    }
}




function upload_job_post_form() {
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     // Håndterer bildeopplasting med hooks
        $banner_id = media_handle_upload('imageBanner', 0);  // 'imageBanner' fra formen, '0' betyr ingen tilknyttet post
        $logo_id = media_handle_upload('imageLogo', 0);   // 'imageLogo' fra formen

    if (is_wp_error($banner_id) || is_wp_error($logo_id)) {
        echo json_encode(['error' => 'Bildeopplasting feilet', 'details' => is_wp_error($banner_id) ? $banner_id->get_error_messages() : $logo_id->get_error_messages()]);
        exit;
    }
    $postarr = [
        'post_author'  => get_current_user_id(),
        'post_title'   => sanitize_text_field($_POST['annonsetittel']),
        'post_content' => sanitize_textarea_field($_POST['editor']),
        'post_status'  => 'draft', 
        'meta_input'   => [
            'job_title'         => sanitize_text_field($_POST['stillingstittel']),
            'employment_type'   => sanitize_text_field($_POST['ansettelsesform']),
            'workplace'         => sanitize_text_field($_POST['arbeidsted']),
            'sector'            => sanitize_text_field($_POST['sektor']),
            'employer'          => sanitize_text_field($_POST['arbeidsgiver']),
            'industry'          => sanitize_text_field($_POST['bransje']),
            'deadline'          => sanitize_text_field($_POST['frist']),
            'number_of_positions' => sanitize_text_field($_POST['numberOfPositions']),
            'application_link'  => sanitize_url($_POST['søkelink']),
            'application_email' => sanitize_email($_POST['søkepost']),
            'contact_person'    => sanitize_text_field($_POST['kontaktperson']),
            'phone'             => sanitize_text_field($_POST['telefon']),
        ]
    ];
    

    $post_id = wp_insert_post($postarr);  // Oppretter en ny post (annonse)

    if ($post_id == 0) {
        echo json_encode(['error' => 'Kunne ikke opprette annonsepost']);
    } else {
        update_post_meta($post_id, 'banner_image_id', $banner_id);
        update_post_meta($post_id, 'logo_image_id', $logo_id);
        echo json_encode(['success' => true, 'post_id' => $post_id]);
    }
}
}
add_action('wp_ajax_upload_job_post_form', 'handle_image_upload');




function preview_job_ad() {
    check_ajax_referer('nonce', 'security');

    // Sanitere og hente data fra POST
    $title = sanitize_text_field($_POST['annonsetittel']);
    $employer = sanitize_text_field($_POST['arbeidsgiver']);
    $workplace = sanitize_text_field($_POST['arbeidsted']);
    $employmentType = sanitize_text_field($_POST['ansettelsesform']);
    $sector = sanitize_text_field($_POST['sektor']);
    $description = sanitize_textarea_field($_POST['editor']);
    $applicationLink = sanitize_url($_POST['søkelink']);
    $applicationEmail = sanitize_email($_POST['søkepost']);
    $contactPerson = sanitize_text_field($_POST['kontaktperson']);
    $phone = sanitize_text_field($_POST['telefon']);
    $frist = sanitize_text_field($_POST['frist']);
    $numerOfPositions = sanitize_text_field($_POST['antstillinger']);

    // Hente bilde-URLer fra vedlegg IDs
    $banner_url = wp_get_attachment_url($_POST['banner_id']);
    $logo_url = wp_get_attachment_url($_POST['logo_id']);

    $html = "
        <div style='width: 600px; margin: 0 auto;'>
            <img src='$banner_url' alt='Banner' style='width: 100%; height:200px;'>
            <img src='$logo_url' alt='Logo' style='width: 150px; height: 150px; display: block; margin: 20px auto;'>
            <h1>$title</h1>
            <h2>$employer</h2>
            <p><strong>Arbeidsted:</strong> $workplace</p>
            <p><strong>Ansettelsesform:</strong> $jobType</p>
            <p><strong>Sektor:</strong> $sector</p>
            <p><strong>Stillingsbeskrivelse:</strong> $description</p>
            <p><strong>Søknadsfrist:</strong> $frist</p>
            <p><strong>Antall stillinger:</strong> $antstillinger</p>
            <p><strong>Hvordan søke:</strong> Besøk vår <a href='$applicationLink'>søkeportal</a> eller send din søknad direkte til <a href='mailto:$applicationEmail'>$applicationEmail</a>.</p>
            <p><strong>Kontaktperson:</strong> $contactPerson, <a href='tel:$phone'>$phone</a></p>
        </div>
    ";

    wp_send_json_success(['html' => $html]);
}






function custom_job_ad_fields($user)
{
    $arbeidsgiver = get_user_meta($user->ID, 'employer', true);
    $stillingstittel = get_user_meta($user->ID, 'job_title', true);
    $ansettelsesform = get_user_meta($user->ID, 'employment_type', true);
    $arbeidsted = get_user_meta($user->ID, 'workplace', true);
    $sektor = get_user_meta($user->ID, 'sector', true);
    $bransje = get_user_meta($user->ID, 'industry', industry);
    $frist = get_user_meta($user->ID, 'deadline', true);
    $antstillinger = get_user_meta($user->ID, 'number_of_positions', true);
    $søkelink = get_user_meta($user->ID, 'application_link', true);
    $søkepost = get_user_meta($user->ID, 'application_email', industry);
    $kontaktperson = get_user_meta($user->ID, 'contact_person', true);
    $telefon = get_user_meta($user->ID, 'phone', true);
?>
    <h3>Annonseinformasjon</h3>
    <table class="form-table">
        <tr>
            <th><label for="jobTitle">Stillingstittel</label></th>
            <td><input type="text" name="job_title" id="job_title" value="<?php echo $stillingstittel; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="employer">Arbeidsgiver</label></th>
            <td><input type="text" name="employer" id="employer" value="<?php echo $arbeidsgiver; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="sector">Sektor</label></th>
            <td><input type="text" name="sector" id="sector" value="<?php echo $sektor; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="industry">Bransje</label></th>
            <td><input type="text" name="industry" id="industry" value="<?php echo $bransje; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="employmentType">Ansettelsesform</label></th>
            <td><input type="text" name="employment_type" id="employment_type" value="<?php echo $ansettelsesform; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="number_of_positions">Antstillinger</label></th>
            <td><input type="text" name="number_of_positions" id="number_of_positions" value="<?php echo $antstillinger; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="workplace">Arbeidsted</label></th>
            <td><input type="text" name="workplace" id="workplace" value="<?php echo $arbeidsted; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="application_link">Søkelink</label></th>
            <td><input type="text" name="application_link" id="application_link" value="<?php echo $søkelink; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="application_email">Søkepost</label></th>
            <td><input type="text" name="application_email" id="application_email" value="<?php echo $søkepost; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="contact_person">Kontaktperson</label></th>
            <td><input type="text" name="contact_person" id="contact_person" value="<?php echo $kontaktperson; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="phone">Telefon</label></th>
            <td><input type="text" name="phone" id="phone" value="<?php echo $telefon; ?>" class="regular-text" /></td>
        </tr>
        <tr>
            <th><label for="deadline">Frist</label></th>
            <td><input type="text" name="deadline" id="deadline" value="<?php echo $frist; ?>" class="regular-text" /></td>
        </tr>
    </table>
<?php
}
add_action('show_user_profile', 'custom_user_fields');
add_action('edit_user_profile', 'custom_user_fields');




function save_custom_job_ad_fields($user_id)
{
    if (!current_user_can('edit_user', $user_id)) {
        return false;
    }

    xupdate_user_meta($user_id, 'job_title', sanitize_text_field($_POST['stillingstittel']));
    xupdate_user_meta($user_id, 'employment_type', sanitize_text_field($_POST['ansettelsesform']));
    xupdate_user_meta($user_id, 'workplace', sanitize_text_field($_POST['arbeidsted']));
    xupdate_user_meta($user_id, 'sector', sanitize_text_field($_POST['sektor']));
    xupdate_user_meta($user_id, 'employer', sanitize_text_field($_POST['arbeidsgiver']));
    xupdate_user_meta($user_id, 'industry', sanitize_text_field($_POST['bransje']));
    xupdate_user_meta($user_id, 'deadline', sanitize_text_field($_POST['frist']));
    xupdate_user_meta($user_id, 'number_of_positions', sanitize_text_field($_POST['antstillinger']));
    xupdate_user_meta($user_id, 'application_link', sanitize_url($_POST['søkelink']));
    xupdate_user_meta($user_id, 'application_email', sanitize_email($_POST['søkepost']));
    update_user_meta($user_id, 'contact_person', sanitize_text_field($_POST['kontaktperson']));
    update_user_meta($user_id, 'phone', sanitize_text_field($_POST['telefon']));
}
add_action('personal_options_update', 'save_custom_job_ad_fields');
add_action('edit_user_profile_update', 'save_custom_job_ad_fields');
