<!-- Registreringsscheme user-->
<form class="form" id="register" method="post">
  <h2>Legg til informasjon </h2>
  <br>
  <p>For å opprette en konto trenger vi at du fyller inn noen detaljer.</p>
  
  <div class="form-field">
    <label for="name"></label>
    <input type="name" id="name" name="username" placeholder="Brukernavn" required>
  </div>

  <div class="form-field">
    <label for="password"></label>
    <input type="Password" id="Password" name="password" placeholder="Passord" required>
  </div>

  <div class="form-field">
    <label for="email"></label>
    <input type="email" id="email" name="email" placeholder="e-post" required>
  </div>

  <div class="form-action">
    <div class="checkbox-field">
      <input type="checkbox" id="brreg" name="registrert-i-brreg" value="1" class="checkmark">
      <label for="brreg">Er du registrert i Brønnøysundregisteret?</label>
    </div>
  </div>

  <div class="form-action">
    <button type="submit" class="reg-button">Lagre</button>
    <input type="hidden" name="action" value="create_new_user">
  </div>
</form>