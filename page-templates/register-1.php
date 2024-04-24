<?php
/*
Template Name: Register-1
*/
get_header();
?>
<main class="main-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img2.png');">
  <div class="container-fluid vh-100">
    <div class="row h-100 align-items-start">
  <div class="overlay-content">

    <!-- Back button -->
    <div class="back-button">
      <a href="register" class="btn btn-light"><i class="fa-solid fa-circle-arrow-left fa-lg"></i></a>
    </div>
    <div class="col-md-10">
      <div class="right-side-content">
    <!-- Progress navigation -->
    <div class="progress mb-3">
      <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">Steg 1 av 3</div>
    </div>
 
    <!-- Registration Form 1 -->
    <?php get_template_part('includes/register-form-1'); ?>
  </div>
</div>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>






