<?php
/**
 * Template Name: Job Published Page
 */
get_header(); 
?>

<div class="container-fluid " style="">
    <!-- Button og progress bar section -->
    <div class="row">
        <div class="col-12">
            <button class="btn btn-back-publish" style="" onclick="location.href='kontrollpanel';">
                <i class="fas fa-arrow-left"></i>
            </button>
            </div>
        </div>
    <!-- Content section -->
    <div class="row justify-content-center align-items-center ">
        <div class="col">
            <div class="job-published-container"> 
                <?php get_template_part('includes/job-advertising/publish-job-ad'); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
