<?php
/**
 * Template Name: Job Published Page
 */
get_header(); 
?>
<button class="btn btn-back-publish" style="" onclick="location.href='kontrollpanel';">Tilbake</button>    
<div class="job-published-container">
    
        <div class="container-fluid col" style="height: 20vh;">
            <?php get_template_part('includes/image-upload'); ?>

        <div style=margin-right: 550px; margin-left: 550px;"> 
    <div class="progress mb-3 fixed-top" >    
        <div class="progress-bar" role="progressbar" style="width: 35%; background-color:#C61932"" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar" role="progressbar" style="width: 35%; background-color:#C61932"" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
        <div class="progress-bar" role="progressbar" style="width: 30%; background-color:#C61932"" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">Steg 3 av 3</div>
    </div>

</div>
  
<div class="col mt-8"style="margin-top: 150px;">
<?php get_template_part('includes/job-advertising/publish-job-ad'); ?>  

     </div>




</div>
</div>