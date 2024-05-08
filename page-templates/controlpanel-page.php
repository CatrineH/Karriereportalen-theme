<?php
/* Template Name: Controlpanel Page */

get_header();
?>

    <?php get_template_part('includes/controlpanel-sidebar'); ?>

        <div class="container">
        <div class="d-flex justify-content-center">

            <div class="card-container d-flex justify-content-center flex-wrap">
              <?php get_template_part('includes/controlpanel-cards'); ?>  
            </div>

        </div>
    </div>
<!-- </div> -->
<?php get_footer(); ?>

