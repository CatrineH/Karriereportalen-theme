
  <!-- Registreringsskjema logininfo-->
  <form class="form" action="<?php echo wp_login_url(); ?>" method="post">
      <h2>Legg til informasjon</h2>
      <p>For å opprette en konto trenger vi at du fyller inn noen detaljer.</p>
      
      <div class="form-field">
        <label for="email">E-post</label>
        <input type="email" id="email" placeholder="Din e-post">
      </div>
      <div class="form-field">
        <label for="username">Brukernavn</label>
        <input type="username" id="username" placeholder="Ditt brukernavn">
      </div>
   
      <div class="form-field">
        <label for="password">Passord</label>
        <input type="password" id="password" placeholder="Ditt passord">
       
      </div>
      
      <!-- <div class="form-action">
        <button type="save" class="reg-button">Lagre</button>

      </div> -->
      <div class="form-action">
      <button type="button" class="reg-button" onclick="window.location.href='<?php echo get_site_url();?>/register-2'">Lagre</button>

</div>

      </div>
    </form>