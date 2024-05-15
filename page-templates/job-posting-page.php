<?php
/*
Template Name: Job Posting Page
*/
get_header();
?>

<div class="container-fluid">

        <div class="col-md-2">
            <?php get_template_part('includes/c-panel/controlpanel-sidebar'); ?>
        </div>

        <!-- Main Content -->
        <div class="col-8 offset-2">
            <!-- Progress Bar Container -->
            <div class="progress-container">
                <div class="progress">    
                    <div class="progress-bar" role="progressbar" style="width: 35%; background-color:#C61932" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">Ny stillingsannonse</div>
                    <div class="progress-bar" role="progressbar" style="width: 35%; background-color:#fff; color:black;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">Forhåndsvis</div>
                    <div class="progress-bar" role="progressbar" style="width: 30%; background-color:#fff; color:black;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">Publiser</div>
                </div>
            </div>
            <?php get_template_part('includes/job-advertising/job-posting-form'); ?>
        </div>
    
</div>

<?php get_footer(); ?>
