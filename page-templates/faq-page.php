<?php
/* Template Name: FAQ-Page */
get_header();
?>

<?php get_template_part('includes/controlpanel-sidebar'); ?> 

<div id="page-content-wrapper">
    <div class="container">
      <div class="row">
        <?php get_template_part('includes/faq-template'); ?>         
          </div>
          </div>
</div>

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar-wrapper">
    <?php get_template_part('includes/controlpanel-sidebar'); ?>
    </div>
<?php
get_footer();
?>
