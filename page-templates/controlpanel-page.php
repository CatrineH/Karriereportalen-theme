<?php
/* Template Name: Controlpanel Page */

get_header();
?>

    <?php get_template_part('includes/c-panel/controlpanel-sidebar'); ?>
    <div class="headline-block" > 
    Her er stillingsportalen! Hva vil du gjøre?
    </div>
        <div class="container">
        <div class="d-flex justify-content-center">

              <?php get_template_part('includes/c-panel/controlpanel-cards'); ?>  
            </div>

        </div>
  
<?php get_footer(); ?>

