<?php
/*
Template Name: Annonsering
*/
?>

<?php get_header();?>
<div class="container">
    <h1><?php the_title();?></h1>

    <div class="row">
        <div class="col-lg-6">
            This is where the image goes
        </div>

        <div class="col-lg-6">
            This is where the form goes
        </div>
        <?php get_template_part('includes/job-posting-form'); ?>
        

</div>
<?php get_footer();?>