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
        <div class="col-8 offset-2">
            <div class="progress-container">
                <div class="progress">    
                    <div class="progress-bar" role="progressbar" style="width: 35%; background-color:#C61932; font-size: 15px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">Ny stillingsannonse</div>
                    <div class="progress-bar" role="progressbar" style="width: 35%; background-color:#ffff; color:black; font-size: 15px;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">Forhåndsvis</div>
                    <div class="progress-bar" role="progressbar" style="width: 30%; background-color:#ffff; color:black; font-size: 15px;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">Kontroll</div>
                </div>
            </div>
            <?php get_template_part('includes/job-advertising/job-posting-form'); ?>
        </div>
    </div>

    <!-- Preview Modal -->
    <div id="previewModal" class="modal" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-content">
            <span class="close" aria-label="Close">&times;</span>
            <div id="preview_body"></div>
        </div>
    </div>


<?php get_footer(); ?>
