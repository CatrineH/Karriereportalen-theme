
<?php wp_footer();?>
<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-column">
            <a href="<?php echo home_url();  ?>"class="logo">
                <!-- logo-bildet  -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/Kristiania_logo_22_hvit.png" alt="Footer Logo" />
            </a>
            <span class="footer-separator">|</span>
            <div class="contact-info">
                Kontakt oss<br><br>
                <a href="#">karriere@kristiania.no</a><br>
                <a href="#">+47 99 15 07 42</a><br><br>
                <p>Karriereportalen driftes av karrieresenteret.</p>
            </div>
        </div>
        <div class="footer-column social-media-icons">
            <!-- Erstatt ikoner med FontAwesome -->
            <a href="#"><img src="path/to/facebook-icon.svg" alt="Facebook"></a>
            <a href="#"><img src="path/to/twitter-icon.svg" alt="Twitter"></a>
            <a href="#"><img src="path/to/instagram-icon.svg" alt="Instagram"></a>
            <a href="#"><img src="path/to/linkedin-icon.svg" alt="LinkedIn"></a>
        </div>
    </div>
</footer>

</body>
</html>