<?php
/* Template Name: Controlpanel Page */

get_header();
?>

  <!-- Sticky Sidebar -->
  <div class="col-md-3">
            <div class="sticky-top" style="top: 100px;"> 
                <?php get_template_part('includes/controlpanel-sidebar'); ?>
            </div>
        </div>

    <!-- Page Content -->
    <div id="page-content-wrapper" >
        <div class="container">
        <div class="text-left ">
                <h2 class="mt-4" style="color: black;">Hei Marianne hos Amediaaa!</h2>
                <h5 style="color: #9E182F;">Velkommen til karriereportalen.</h5>
            </div>
            
    <!-- Cards Section -->
        <div class="card-container d-flex justify-content-center flex-wrap">
              <?php get_template_part('includes/controlpanel-cards'); ?>  
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
