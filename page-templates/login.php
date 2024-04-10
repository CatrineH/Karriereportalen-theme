<?php
/*
Template Name: Login
*/
?>

<?php get_header(); ?>
<div class="login-page" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/login-img.png');">
   <div class="login-txt"> <h2>Velkommen til stillingsportalen</h2> </div>
<div class="login-container">

<?php get_template_part('inc/login-form'); ?>
</div>


</div>
</div>
<?php get_footer(); ?>


