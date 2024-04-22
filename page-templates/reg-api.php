<?php
/*
Template Name: Register Api Page

*/

get_header(); 
?>

<div class="container-fluid my-5">
  <div class="row">

    <!-- Back button -->
    <div class="back-button position-absolute " style="top: 23%;  transform: translateY(-50%); "> 
      <a href="register-1" class="btn"><i class="fa-solid fa-circle-arrow-left fa-lg" style="color: #e00606;"></i></a>
    </div>

    <!-- Image column -->
    <div class="col-md-6 mt-4">

      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.png" alt="Image Description" class="img-fluid">
    </div>

    <!-- Form column -->
    <div class="col-md-6 mt-4 text-black">
          <!-- Progress navigation -->
          <div class="progress" style="height: 7px;" >
  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

</div>

<br><br>
      <h2>Hent bedriftens detaljer</h2>

      <!-- API Interaction Form -->
      <?php get_template_part('includes/reg-api-form'); ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
