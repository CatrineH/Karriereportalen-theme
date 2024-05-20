<?php
/*
Template Name: Login-Page
*/
get_header(); 
?>




<div class="main-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img1.png');">
  <!-- <div class="container-fluid"> -->
    <!-- <div class="row h-100 align-items-start"> -->
    <div class="container-fluid" style="height: 70vh;">
    <div class="col-md-7 text-white float-left p-5">
        <h1>Velkommen til karriereportalen</h1>
      </div>

      <!-- <div class="col-md-5" style="padding-top: 12rem;"> -->
      <div class="right-side-content">
          <?php get_template_part('includes/login/login-form'); ?>
        </div>
        </div>
      </div>
    </div>

</div>
</div>
    <!-- </div> -->
  </section><!-- End Hero Section -->

<?php get_footer(); ?>

