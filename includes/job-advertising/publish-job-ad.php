<div id="job_form" action="job-published-page.php" method="post" enctype="multipart/form-data">  

    <div class="container-fluid col header-section" >
 
        
            <?php get_template_part('includes/image-upload'); ?>
    </div>

    <button class="btn btn-apply" style="" onclick="location.href='kontrollpanel';">Søk her</button>

    <div class="container" style="padding-top: 50px;">
        <div class="row" >
        <h2 style="padding: 25px;">Annonsetittel: </h2> 
        <h4 style="padding: 25px;">Stillingstittel:</h4>
        <p style="padding: 25px; font-weight: bold;">Søknadsfrist: </p>

        <div class="col-6 col-sm-4 mt-4">
            <ul>
            <p style="font-weight: bold;">Arbeidsgiver: </p>
            <p style="font-weight: bold;">Arbeidsted:</p>
            <p style="font-weight: bold;">Ansettelsesform: </p>
            </ul>
        </div>
 
        <div class="col-6 col-sm-2 mt-4" >
            <ul> 
            <p style="font-weight: bold;">Sektor: </p>
            <p style="font-weight: bold;">Bransje: </p>
            <p style="font-weight: bold;">Antall stillinger: </p>
            </ul>
        </div>
        
    <hr>

    <div class="full-width description">
        <p style="font-weight: bold;><strong>Beskrivelse:</strong></p>
           <h5 style="font-weight: bold;">Beskrivelse: </h5>
        <!-- <div><?= nl2br(htmlspecialchars($description)) ?></div> -->
    </div>

    
  <hr>
    <!-- Google Maps Embed -->
    <div>
        <div class="job-address">
            <h6>Addresse </h6>
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





























 