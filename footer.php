
<?php
/**
 * Footer Template
 *  @package Karriereportalen
 */

?>


<?php wp_footer();?>
<!-- <div class="container"> -->
<footer class="footer fixed-bottom"> 
        <div class="footer-column">
            <a href="<?php echo home_url();  ?>"class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kristiania_logo_22_hvit.png" alt="Footer Logo" />
            </a>
            <span class="footer-separator">|</span>
            <div class="contact-info">Kontakt oss<br><br>
                <a href="#">karriere@kristiania.no</a><br>
                <a href="#">+47 99 15 07 42</a><br><br>
                <p>Karriereportalen driftes av karrieresenteret.</p>
            </div>
        </div>
        <div class="social-media-icons d-inline p-4 pe-auto">
    <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook"></i></a>
    <a href="#" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
    <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
    <a href="#" aria-label="Facebook"> <i class="fa-brands fa-linkedin"></i></a>
</div>

</div>
</footer>

</body>
</html>