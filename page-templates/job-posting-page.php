<?php
/*
Template Name: Job Posting Page
*/
get_header();
?>


<div id="wrapper" class="d-flex">
    <!-- Sidebar -->
    <div class="bg-red p-4" id="sidebar-wrapper">
    <?php get_template_part('includes/controlpanel-sidebar'); ?>
    </div>

  <div id="page-content-wrapper">
    <div class="container">
      <div class="text-left">
        <h2 class="mt-4" style="color: black;">Her oppretter du din annonse Marianne!</h2>
        
      </div>

    <!-- Cards Section -->
        <div class="card-container mt-4">
        <?php get_template_part('includes/job-posting-form'); ?>         
          </div>
          
        </div>
    </div>
</div>
<?php get_footer(); ?>
