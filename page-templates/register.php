<?php
/*
Template Name: Register
*/
get_header(); 
?>
  <div class="content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/brrg-check-form.png');">
    <div class="container d-flex align-items-center justify-content-between ">

      <div class="register-txt"> 
        <h2>La oss finne informasjonen din <br> litt raskere!</h2> 
    </div>
  </div>
  <?php get_template_part('includes/modal-popup'); ?>
</div>

  


<?php get_footer(); ?>
