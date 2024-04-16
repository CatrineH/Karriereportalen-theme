<?php

get_header(); 
?>

<div class="container">
<h1>Siden ble ikke funnet</h1>
     <p>Beklager, men siden du prøvde å vise, eksisterer ikke.</p>
     <p>Det ser ut til at dette var resultatet av enten:</p>
     <ul>
         <li>en feilskrevet adresse</li>
         <li>en utdatert lenke</li>
     </ul>
    <p>Prøv å bruke en annen adresse eller naviger tilbake til <a href="<?php echo home_url(); ?>">stillingsportalen</a>.</p>
</div>

<?php

get_footer();
?>
