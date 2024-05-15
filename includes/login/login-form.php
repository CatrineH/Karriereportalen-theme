
<form class="form" id="login" method="post">
  <h2>Logg inn</h2>
  
  <div class="form-field">
    <label for="user_login">Brukernavn</label><br>
    <input type="email" name="email" id="user_login" placeholder="Din e-post" required>
  </div>

  <div class="form-field">
    <label for="user_pass">Passord</label><br>
    <input type="password" name="password" id="user_pass" placeholder="Ditt passord" required>
  </div>

  <div class="form-action">
    <label class="checkbox-container"> Husk meg
      <input type="checkbox" name="remember" id="remember-me" value="forever">
      <span class="checkmark"></span>
    </label>
    <a href="<?php echo wp_lostpassword_url(); ?>" class="forgot-password">Glemt passord</a>
  </div>

  <button type="submit" name="wp-submit" class="login-button">Logg inn</button>
  <input type="hidden" name="action" value="user_login_action">
<br>
<p>Har du ikke en bruker hos oss?
  <a href="<?php echo get_permalink(get_page_by_path('register-1')); ?>" class="register">Opprett en konto</a>
</p>


</form>
