<?php
/*
Template Name: Register-1
*/
 get_header(); 
 ?>

<div class="content" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/img2.png');">

<div class="container d-flex align-items-center justify-content-between ">
</div>
<div class="reg-login-form" >
   <?php get_template_part('includes/register-form-1'); ?>
   </div>

</div>
<?php get_footer(); ?>