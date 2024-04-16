
  <!-- Registreringsskjema info-->
  <form class="form" action="<?php echo wp_login_url(); ?>" method="post">
      <h2>Opplysninger om din bedrift</h2>
      
      <div class="form-field">
        <label for="name">Bedriftens navn</label>
        <input type="name" id="name" placeholder="Bedriftens navn">
      </div>
      <div class="form-field">
        <label for="Adress">Adresse</label>
        <input type="Adress" id="Adress" placeholder="Adresse">
      </div>
   
      <div class="form-field">
        <label for="postnumber">Postnummer</label>
        <input type="postnumber" id="postnumber" placeholder="postnummer">
       
      </div>
      <div class="form-field">
        <label for="orgnr">Orgnr.</label>
        <input type="orgnr" id="orgnr" placeholder="Organisasjonsnummer 9-siffer">
       
      </div>
      
      <div class="form-action">
      <button type="button" class="reg-button" onclick="window.location.href='<?php echo get_site_url();?>/register-3'">Gå videre</button>

</div>
      

      </div>
    </form>