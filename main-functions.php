<?php

function handle_job_listing_form_submission() {
    // Check if form is submitted and process the data
    if (isset($_POST['company']) && isset($_FILES['job_image'])) {
      // Sanitize and process the form data
      $company = sanitize_text_field($_POST['company']);
      $job_title = sanitize_text_field($_POST['job_title']);
      $about_job = sanitize_textarea_field($_POST['about_job']);
      $job_image = $_FILES['job_image'];
      
      // Handle file upload
      // Make sure to validate and securely handle the file upload
  
  // Handle the AJAX request for the benefits search
add_action( 'wp_ajax_search_benefits', 'search_benefits_callback' );
add_action( 'wp_ajax_nopriv_search_benefits', 'search_benefits_callback' );

function search_benefits_callback() {
  // Verify nonce for security
  check_ajax_referer( 'search_benefits_nonce', 'nonce' );

  $keyword = sanitize_text_field( $_POST['keyword'] );

  // Perform search based on keyword
  // This would typically involve a database query
  $results = []; // Assume you get results from a database based on the keyword

  wp_send_json_success( $results );

  wp_die(); // this is required to terminate immediately and return a proper response
}

// Handle the form submission
add_action( 'admin_post_submit_job_listing', 'handle_job_listing_form' );
add_action( 'admin_post_nopriv_submit_job_listing', 'handle_job_listing_form' );

function handle_job_listing_form() {
  // Ensure you check for a nonce or user capabilities if needed here for security
  
  // Sanitize all inputs
  $phone_number = sanitize_text_field( $_POST['phone_number'] );
  $email_address = sanitize_email( $_POST['email_address'] );
  $benefits = array_map( 'sanitize_text_field', $_POST['benefits'] ?? [] );
  
  // You would then store these to your database or perform other logic required
  
  // Redirect or return success response
}


// Enqueue Bootstrap, custom styles, and scripts
function enqueue_custom_theme_scripts() {
  // Enqueue Bootstrap
  wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');
  // Enqueue custom styles (Assuming you have a custom.css file in your theme)
  wp_enqueue_style('custom-css', get_template_directory_uri() . '/custom.css');
  // Enqueue custom JavaScript (Assuming you have a custom.js file in your theme)
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/custom.js', array('jquery'), null, true);
  // Localize script for AJAX
  wp_localize_script('custom-js', 'ajax_params', array(
      'ajax_url' => admin_url('admin-ajax.php'),
      'nonce' => wp_create_nonce('search_benefits_nonce')
  ));
}

add_action('wp_enqueue_scripts', 'enqueue_custom_theme_scripts');