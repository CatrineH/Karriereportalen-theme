<?php
/*
Template Name: Login Page
*/
get_header(); 
?>
<main class="main-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img1.png');">
  <div class="container-fluid vh-100">
    <div class="row h-100 align-items-start">
     
    <div class="col-md-7  text-white float-left p-4 mt-5">
        <h1>Velkommen til karriereportalen</h1>
      </div>

      <div class="col-md-5" style="padding-top: 12rem;">
      <div class="right-side-content">
          <?php get_template_part('includes/login-form'); ?>
        </div>
        </div>
      </div>
    </div>

</main>

<?php get_footer(); ?>

