<?php
/*
Template Name: Register-API
*/
get_header();
?>
<main class="main-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brrg-check-form.png');">
  <div class="container-fluid" style="height: 80vh;">
    <div class="row h-100 align-items-start">
  <div class="overlay-content">

    <!-- Back button -->
    <div class="back-button">
      <a href="/page-templates/register-1" class="btn btn-light"><i class="fa-solid fa-circle-arrow-left fa-lg"></i></a>
    </div>
    <div>
      <div>
    <!-- Progress navigation -->
    <div class="progress mb-3">
    <div class="progress-bar" role="progressbar" style="width: 35%; background-color:#C61932"" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
      <div class="progress-bar" role="progressbar" style="width: 35%; background-color:#C61932"" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">Steg 2 av 3</div>
    </div>
    </div>
 
    <!-- Registration Form 1 -->
    <?php get_template_part('includes/login/reg-api-form'); ?>
  </div>
</div>
</div>
</div>
</div>
</main>
<?php get_footer(); ?>






