<?php
/*
Template Name: Kontrollpanel
*/
?>

<?php get_header(); ?>

<div class="container d-flex align-items-center justify-content-between ">

        <!-- Sticky Sidebar -->
        <div class="col-md-3">
            <div class="sticky-top" style="top: 100px;"> 
                <?php get_template_part('inc/controlpanel-sidebar'); ?>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="col-md-9">
            <div class="controlpanel-welcome-txt">  
                <h3>Hei Marianne hos Amediaaaaa!</h3> 
                <h5>Velkommen til karriereportalen.</h5>
             </div>
                <div class="col align-items-start">
                    <?php get_template_part('includes/controlpanel-cards'); ?>
                </div>
         </div>
</div>

<?php get_footer(); ?>
