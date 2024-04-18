<form class="form" id="login" method="post">
  <h2>Logg inn</h2>
  <div class="form-field">
    <label for="email">Brukernavn</label>
    <input type="email" id="email" name="email" placeholder="Din e-postadresse" required>
  </div>
  <div class="form-field">
    <label for="password">Passord</label>
    <input type="password" id="password" name="password" placeholder="Ditt passord" required>
    <a href="#" class="forgot-password">Glemt passord?</a>
  </div>

  <div class="form-action">
    <label class="checkbox-container">
      Husk meg
      <input type="checkbox" id="remember-me" name="remember-me">
      <span class="checkmark"></span>
    </label>
    <button type="submit" class="login-button" id="login-button">Logg inn</button>
    <input type="hidden" name="action" value="custom_login_action">
  </div>
  <a href="register" class="register">Opprett konto</a>
</form>