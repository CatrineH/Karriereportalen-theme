<?php
/*
Template Name: Login-form
*/
?>

<form class="login-form" action="<?php echo wp_login_url(); ?>" method="post">
      <h2>Logg inn</h2>
      <div class="form-field">
        <label for="email">Brukernavn</label>
        <input type="email" id="email" placeholder="Din e-post">
      </div>
      <div class="form-field">
        <label for="password">Passord</label>
        <input type="password" id="password" placeholder="Ditt passord">
        <a href="#" class="forgot-password">Glemt passord?</a>
      </div>
      
      <div class="form-action">
        <label class="checkbox-container">
          Husk meg
          <input type="checkbox" id="remember-me">
          <span class="checkmark"></span>
        </label>
        <button type="submit" class="login-button">Logg inn</button>
      </div>
     
      <a href="#" class="register">Opprett ny konto</a>
    </form>



