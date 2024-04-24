<?php
/**
 * Footer Template
 * @package Karriereportalen
 */
?>

    <footer class="container-fluid py-3 text-left text-white bg-black p-5">
      <div class="row">
        <div class="col-12 col-md-4 mb-3 mb-md-0">
          <a href="<?php echo home_url(); ?>" class="navbar-brand">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kristiania_logo_22_hvit.png" alt="Kristiania" style="height: 70px;"> <!-- Adjust logo size as needed -->
          </a>
        </div>
        <div class="col-12 col-md-4 mb-4 mb-md-0 ">
          <h5> Kontakt oss</h5>
          karriere@kristiania.no<br>
          +47 99 15 07 42
        </div>
        <div class="col-12 col-md-4">
          <!-- Social Media Icons -->
          <div class="social-icons">
            <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>



    <!-- <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
    <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
    <a href="#" aria-label="Facebook"> <i class="fa-brands fa-linkedin"></i></a> -->







