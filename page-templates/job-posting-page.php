<?php
/*
Template Name: Job Posting Page
*/
get_header();
?>
         
<div class="container-fluid mt-4">
    
    <div class="row">
        
        <!-- Sidebar Navigation -->
        <div class="col-md-2">
            <?php get_template_part('includes/c-panel/controlpanel-sidebar'); ?>
        </div>

        <!-- Main Content -->
        <div class="col sticky-top ">
          <?php get_template_part('includes/progress-stepper'); ?>
        </div>
        <div class="col-8 offset-2">
            <?php get_template_part('includes/job-advertising/job-posting-form'); ?>
        </div>

        <!-- Tips Column -->
        <div class="col-md-2" style="margin-top: 7rem; margin-left: -4rem;">
            <div class="card mb-3"style="max-width: 18rem; background-color: #CAC5DD;">
                <div class="card-header">Tips</div>
                <div class="card-body">
                    <p class="card-text">Få med alle detaljer til annonsen din for best resultat.</p>
                </div>
            </div>
        </div>
    </div>
</div>
     
</div>
</div>
  <?php get_footer(); 
  ?>
