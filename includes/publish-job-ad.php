
<!-- <div class="banner-container" style="margin-top: 30px;"> 
<img id="bannerPreview" src="https://via.placeholder.com/1024x200" alt="Banner Preview" />
<img id="logoPreview" src="https://via.placeholder.com/150x150" alt="Logo Preview" />


</div> -->
<div class="container-fluid mt-4">
    

<?php get_template_part('includes/image-upload'); ?>
</div>

<div class="col sticky-top ">
        <?php get_template_part('includes/progress-stepper'); ?>
        </div>

<div class="job-published-container">

    <div class="header-section">
    <div><h2>Annonsetittel: <?= htmlspecialchars ($title) ?></h2></div>
    </div>
    <div><h4>Stillingstittel:<?= htmlspecialchars($jobTitle) ?></h4></div>
    
    <div class="columnPreview">
    <p style="font-weight: bold;">Arbeidsgiver: <?= htmlspecialchars($employer) ?></p>
        <p style="font-weight: bold;">Ansettelsesform: <?= htmlspecialchars($employmentType) ?></p>
      
    </div>

    <div class="columnPreview">
        <p style="font-weight: bold;">Sektor: <?= htmlspecialchars($sector) ?></p>
        <p style="font-weight: bold;">Bransje: <?= htmlspecialchars($industry) ?></p>
        <p style="font-weight: bold;">Antall stillinger: <?= htmlspecialchars($numberOfPositions) ?></p>
        <p style="font-weight: bold;">Søknadsfrist: <?= htmlspecialchars($deadline) ?></p>
    </div>

    <hr>

    <div class="full-width description">
        <p style="font-weight: bold;><strong>Beskrivelse:</strong></p>
        <div><?= nl2br(htmlspecialchars($description)) ?></div>
    </div>

    

    <!-- Google Maps Embed -->
    <div>
    <div class="job-address">
    <h2>Addresse</h2>
    <p>Arbeidsted: <?= htmlspecialchars($workplace) ?></p>
   
    <iframe width="80%"
            height="300"
            style="border:0"
            loading="lazy"
            allowfullscreen
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1995.9878953729372!2d10.753945316406016!3d59.90924448187622!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416e61f267f039%3A0x7e92605fd3231e9a!2sDronning%20Eufemias%20gate%2010%2C%200191%20Oslo%2C%20Norway!5e0!3m2!1sen!2sus!4v1609435345436!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy">
             <!-- src="<?= $mapsUrl ?>">  -->
        </iframe>
       
         </div>  
    </div>
</div>
</div>




























 