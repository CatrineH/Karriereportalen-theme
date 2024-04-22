
   <!-- Registreringsscheme user-->
   <form class="form" action="<?php echo wp_login_url(); ?>" method="post">
   <h2>Legg til informasjon</h2>
      <br>
      <p>For å opprette en konto trenger vi at du fyller inn noen detaljer.</p>
      
      <div class="form-field">
        <label for="name"></label>
        <input type="name" id="name" placeholder="Brukernavn">
      </div>

      <div class="form-field">
        <label for="password"></label>
        <input type="Password" id="Password" placeholder="Passord">
      </div>
   
      <div class="form-field">
        <label for="email"></label>
        <input type="email" id="email" placeholder="e-post">
      </div>
      
      <div class="form-action">
      <button type="button" class="reg-button" onclick="window.location.href='<?php echo get_site_url();?>/register-2'">Lagre</button>
      </div>
      

      </div>
    </form>