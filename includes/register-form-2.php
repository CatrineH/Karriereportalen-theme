
  <!-- Registreringsscheme company-->
  <form class="form" id="register" method="post">
  <h3>Fyll inn informasjon om bedriften</h3>
  <br>
      <!-- <p>Fyll in informasjon om bedriften din.</p> -->
      
      <div class="form-field">
        <label for="name"></label>
        <input type="name" id="name" placeholder="Bedriftens navn" name="company_name" required>
      </div>

      <div class="form-field">
        <label for="Adress"></label>
        <input type="Adress" id="Adress" placeholder="Adresse" name="company_address" required>
      </div>
   
      <div class="form-field">
        <label for="postnumber"></label>
        <input type="postnumber" id="postnumber" placeholder="Postnummer" name="company_postal" required>
      </div>

      <div class="form-field">
        <label for="orgnr"></label>
        <input type="orgnr" id="orgnr" placeholder="Organisasjonsnummer 9-siffer" name="company_orgnr" required>
       
      </div>
      <div>
        <div class="form-action">
          <button id="reg-button-2" type="submit" class="reg-button">Lagre</button>
          <input type="hidden" name="action" value="save_company_data">
        </div>
      </div>
      
    </div>
    </form>