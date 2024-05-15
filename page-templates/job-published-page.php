<?php
/**
 * Template Name: Job Published Page
 */
get_header(); 
?>


<div class="col mt-4 mr-4">
        <button class="btn" style="background-color:#9E182F; color:#fff;" onclick="location.href='kontrollpanel';">Tilbake</button>
     </div>

    <div class="col sticky-top">
        <?php get_template_part('includes/progress-stepper'); ?>
    </div>
  
 <?php get_template_part('includes/job-advertising/publish-job-ad'); ?>  

