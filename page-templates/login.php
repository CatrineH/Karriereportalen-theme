<?php
/*
Template Name: Login
*/
get_header();  // Load the header
?>


<div class="content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img1.png');">
        
    <div class="container d-flex align-items-center justify-content-between ">
        <div class="login-txt">
            <h2>Velkommen til stillingsportalen</h2>
    </div>
        </div>
        <div class="login-form">
            <?php get_template_part('includes/login-form'); // Include the login form ?>
        </div>
 </div>

<?php get_footer(); // Load the footer ?>
