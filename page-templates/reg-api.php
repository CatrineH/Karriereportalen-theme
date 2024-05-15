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
      <a href="register" class="btn"><i class="fa-solid fa-circle-arrow-left fa-lg" style="color: #e00606;"></i></a>
    </div>

    <!-- Image column -->
    <div class="col-md-6 mt-4">

      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img4.webp" alt="Happy woman" class="img-fluid">
    </div>

    <!-- Form column -->
    <div class="col-md-6 mt-4 text-black">
          <!-- Progress navigation -->
          <div class="progress" style="height: 10px; " >
  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
  <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>

</div>

<br><br>
      <h3 style="color: black;">Hent bedriftens detaljer</h3>
<p>For å hente opplysningene må du skrive inn organisasjonsummer. <br> Hvis du må søke nummeret opp, kan du besøke <a href="https://www.brreg.no" class="navbar-btn-brrg align-items-end ">brrg.no <i class="fa-solid fa-arrow-up-right-from-square"></i></a> for mer informasjon.</p>
<br>
<p>Ønsker du å skrive bedriftsinformasjonen manuelt, kan du trykke <a href="register-2" class="navbar-btn-brrg align-items-end ">her <i class="fa-solid fa-arrow-up-right-from-square"></i></a></p>
<br>
      <!-- API Interaction Form -->
      <?php get_template_part('includes/login/reg-api-form'); ?>

    </div>
  </div>
</div>

<?php get_footer(); ?>
