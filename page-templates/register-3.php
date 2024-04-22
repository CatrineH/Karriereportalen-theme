<?php
/*
Template Name: register-3
*/

get_header(); 
?>

<div class="container-fluid my-5">
  <div class="row">

      <!-- Back button -->
      <div class="back-button">
      <a href="register-2" class="btn btn-light"><i class="fa-solid fa-circle-arrow-left fa-lg"></i></a>
    </div>

    <!-- Image column -->
    <div class="col-md-6 mt-4">

      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.png" alt="Image Description" class="img-fluid">
    </div>

    <!-- Form column -->
    <div class="col-md-6 mt-4 text-black">
          <!-- Progress navigation -->
          <div class="progress mb-3">
  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">Steg 3 av 3</div>

</div>

<br><br>
     <!--- Registration Form 3 --->
      <?php get_template_part('includes/register-form-3'); ?>
      

    </div>
  </div>
</div>

<?php get_footer(); ?>
