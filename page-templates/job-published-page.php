<?php
/**
 * Template Name: Job Published Page
 */
get_header(); 
?>

<div class="container-fluid">

    <div class="row">
        <div class="col-3 ">
            <button class="btn btn-back-publish" style="" onclick="location.href='kontrollpanel';">
                <i class="fas fa-arrow-left"></i> Kontrollpanel
            </button>
            </div>
        </div>
    <!-- Content section -->

    <div class="row justify-content-center align-items-center ">
        <div class="col-7 col-sm-10 col-md-11">
            <div class="job-published-container"> 
                <?php get_template_part('includes/job-advertising/job-finale-message'); ?>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
