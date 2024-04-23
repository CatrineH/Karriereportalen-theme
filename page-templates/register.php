<?php
/*
Template Name: Register
*/

get_header(); 
?>
<main class="main-content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brrg-check-form.png');">
  <div class="container vh-100">
    <!-- Position h2 absolutely within the container for top-left positioning -->
    <h2 class="mt-2 position-absolute">La oss hente informasjonen <br> litt raskere!</h2>
    <div class="row h-100 justify-content-center align-items-start pt-5">
      <!-- Centered question-box in the top center of the viewport -->
      <div class="col-md-2 col-lg-6 text-left">
        <div class="question-box" style="width: 600px; ">
          <p class="lead mb-3 p-1" style="color: white;" >Er bedriften din registrert i Brønnøysundregistret?</p>
          <a href="http://www.brrg.no" class="navbar-btn-brrg m-3 align-items-end justify-content-end">brrg.no <i class="fa-solid fa-arrow-up-right-from-square"></i></a>
          <div class="button-group">
            <a href="register-1" class="btn btn-outline-light mr-3">Nei</a>
            <a href="reg-api" class="btn btn-light">Ja</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>