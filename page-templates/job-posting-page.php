<?php
/*
Template Name: Job Posting Page
*/
get_header();
?>
<div class="main-content">
<div class="row">
        
    <?php get_template_part('includes/controlpanel-sidebar'); ?>
    </div>
    
    <div class="container mt-4"> 
        <?php get_template_part('includes/job-posting-form'); ?>         
    </div>

  <?php get_footer(); 
  ?>
