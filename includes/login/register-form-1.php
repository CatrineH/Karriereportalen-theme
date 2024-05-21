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
    <div class="form-check form-switch" style="left: 32px; top: 6px;">
      <input style="transform: scale(1.5);" class="form-check-input" type="checkbox" id="registrert-i-brreg" name="registrert-i-brreg" value="1" checked>
      <div id="switch-check">
        <i class="fas fa-check" style="color: white;"></i>
      </div>
      <div id="switch-x">
        <i class="fas fa-xmark"style="color: black;"></i>
      </div>
      <label style="margin-left: 10px;" class="form-check-label" for="registrert-i-brreg">Er du registrert i Brønnøysundregisteret?</label>
    </div>
    <div class="form-action">
      <input type="hidden" name="action" value="create_new_user">
    </div>
  </div>
  <button id="reg-button-1" type="submit" class="reg-button fa-solid fa-arrow-right"></button>
</form>

<script>
  // Hide registrert-i-brreg checkbox on page load
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('switch-x').style.visibility = 'hidden';
  });

  // Add class to registrert-i-brreg checkbox when checked
  document.getElementById('registrert-i-brreg').addEventListener('change', function() {
    if (this.checked) {
      document.getElementById('switch-check').style.visibility = 'visible';
      document.getElementById('switch-x').style.visibility = 'hidden';
    }
    else {
      document.getElementById('switch-x').style.visibility = 'visible';
      document.getElementById('switch-check').style.visibility = 'hidden';
    }
  });
</script>