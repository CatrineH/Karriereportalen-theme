


<!-- Form -->
<form id="upload-form" method="post" action="#wp_ajax_job_form_upload" enctype="multipart/form-data">
  <div class="card">
    <div class="card-header">
      <h6 style="color: grey;">Stillingsannonse utkast</h6>
    </div>
    <div class="card-body col-lg-12">
      <fieldset>
        <legend>Informasjon om stillingen</legend>
        <!-- BANNER -->
        <div class="form-group">
          <img id="bannerPreview" src="https://via.placeholder.com/1000x200" alt="Banner Preview" />
          <input type="file" name="imageBanner" id="bannerInput" accept="image/*" class="form-control">
        </div>
        <!-- LOGO -->
        <div class="form-group">
          <img id="logoPreview" src="https://via.placeholder.com/150x150" alt="Logo Preview" />
          <input type="file" name="imageLogo" id="logoInput" accept="image/*" class="form-control mt-3">
        </div>

        <!-- Form fields for job advertisement -->
        <!-- --- ANNONSETITTEL ----  -->
        <div class="row">

          <div class="form-group" style="margin-top: 30px;">
            <label class="control-label" for="annonsetittel">Annonsetittel</label>
            <input id="annonsetittel" name="annonsetittel" type="text" placeholder="" class="form-control input-lg" required="">
          </div>
        </div>
        <div class="w-100">

          <!-- --- STILLINGSTITTEL ----  -->
          <div class="row">
            <div class="col-lg-6">
              <label for="stillingstittel" class="control-label">Stillingstittel</label>
              <input id="stillingstittel" name="stillingstittel" type="text" class="form-control" required="">
            </div>
            <div class="col-lg-6">
              <label for="ansettelsesform" class="control-label">Ansettelsesform</label>
              <select id="ansettelsesform" name="ansettelsesform" class="form-control">
                <option value="1">Velg</option>
                <option value="2">Fulltid</option>
                <option value="3">Deltid</option>
                <option value="4">Vikariat</option>
                <option value="5">Intern</option>
                <option value="6">Frivillig</option>
                <option value="7">Annet</option>
              </select>
            </div>
          </div>

          <!-- --- ARBEIDSTED ----  -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group" style="margin-top: 30px;">
                <label class="control-label" for="arbeidsted">Arbeidsted</label>
                <input id="arbeidsted" name="arbeidsted" type="text" placeholder="" class="form-control input-lg" required="">
              </div>
            </div>

            <!-- --- SEKTOR ----  -->
            <div class="col-lg-6">
              <div class="form-group" style="margin-top: 30px;">
                <label class="control-label" for="sektor">Velg sektor</label>
                <select id="sektor" name="sektor" class="form-control">
                  <option value="1">Velg</option>
                  <option value="2">Privat</option>
                  <option value="3">Offentlig</option>
                </select>
              </div>
            </div>
            <!------ STILLINGSTITTEL ---- -->
            <div class="col-lg-6">
              <div class="form-group" style="margin-top: 30px;">
                <label class="control-label" for="arbeidsgiver">Arbeidsgiver</label>
                <input id="arbeidsgiver" name="arbeidsgiver" type="text" placeholder="" class="form-control input-lg" required="">
              </div>
            </div>

            <!------ ANNSETTELSESFORM---- -->
            <div class="col-lg-6">
              <div class="form-group" style="margin-top: 30px;">
                <label class="control-label" for="bransje">Bransje</label>
                <select id="bransje" name="bransje" class="form-control">
                  <option value="1">Velg</option>
                  <option value="2">Helse og omsorg</option>
                  <option value="3">Varehandel</option>
                  <option value="4">Industri</option>
                  <option value="5">Bygg og anlegg</option>
                  <option value="6">Undervisning</option>
                  <option value="7">Offentlig administrasjon</option>
                  <option value="8">Faglige tjenester</option>
                  <option value="9">IT og medier</option>
                  <option value="10">Olje og gass</option>
                  <option value="11">Finans og forsikring</option>
                </select>
              </div>
            </div>
          </div>

          <!-- --- FRIST FOR SØKNAD ----  -->
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group" style="margin-top: 30px;">
                <label class=" control-label" for="frist">Frist for søknad</label>
                <input id="frist" name="frist" type="text" placeholder="01.01.24" class="form-control input-lg" required="">
              </div>
            </div>
            <script>
document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#frist", {
        "locale": "no", // Angi norsk som språk
        dateFormat: "d.m.Y", // Format på datoen
    });
});
</script>



            <!-- --- ANT STILLINGER ----  -->
            <div class="col-lg-6">
              <div class="form-group" style="margin-top: 30px;">
                <label class="control-label" for="antstillinger">Antall stillinger</label>
                <select id="antstillinger" name="antstillinger"class="form-control">
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
                
              </div>
            </div>
          </div>

          <!-- --- BESKRIVELSE----  -->
          <div class="form-group">
            <label for="editor" class="col-lg-10 control-label" style="padding-top:30px;">Stillingsbeskrivelse</label>
            <textarea class="form-control" id="editor" name="editor" style="height: 400px;"></textarea>
          </div>
          <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                editor.ui.view.editable.element.style.height = '400px';
            })
            .catch(error => {
                console.error('There was a problem initializing the CKEditor:', error);
            });
    </script>

          <!-- --- LENKE TIL SØKNAD ----  -->
          <h6 style=" color: #9E182F; margin: 15px;"> Hvordan skal stillingen søkes?</h6>

          <div class="form-group" style="margin-top: 10px;">
            <label class="col-md-5 control-label" for="søkelink">
              <p style="color: #4e0000; font-size: 14px;">Via bedriftens eksterne søkeportal</p>
            </label>
            <div class="col-lg-12 input-group">
              <div class=" input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-sharp fa-solid fa-link"></i>
                </span>
              </div>
              <input id="kontaktperson" name="kontaktperson" type="text" placeholder="" class="form-control input-md" required="">
            </div>
          </div>

          <!-- --- E-POST ----  -->
          <div class="form-group" style="margin-top: 10px;">
            <label class="col-md-5 control-label" for="søkepost">
              <p style="color: #4e0000; font-size: 14px;">Via e-post</p>
            </label>
            <div class="col-lg-5 input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-regular fa-envelope"></i>
                </span>
              </div>
              <input id="kontaktperson" name="kontaktperson" type="text" placeholder="" class="form-control input-md" required="">
            </div>
          </div>

          <hr style="padding: 30px;">
          <!-- --- KONTAKT ----  -->

          <h6 style="color: #9E182F; margin: 15px;">Kontaktinformasjon</h6>

          <div class="form-group" style="margin-top: 10px;">
            <label class="col-md-5 control-label" for="kontaktperson">
              <p style="color: #4e0000; font-size: 14px;">Søker kan kontakte denne personen</p>
            </label>
            <div class="col-lg-5 input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-user-group"></i>
                </span>
              </div>
              <input id="kontaktperson" name="kontaktperson" type="text" placeholder="" class="form-control input-md" required="">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-5 control-label" for="telefon">
              <p style="color: #4e0000; font-size: 14px;">Telefon</p>
            </label>
            <div class="col-lg-5 input-group">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="fa-solid fa-phone"></i>
                </span>
              </div>
              <input id="telefon" name="telefon" type="tel" placeholder="" class="form-control input-md" required="">
            </div>
          </div>
        </div>

        <!-- Submission buttons -->
        <div class="form-group row">
          <div class="col-lg-7">
            <p style="padding-top: 30px; color:#7D7DAA; font-size: 14px;">** Annonsen må kvalitetssikres av karrieresenteret før den blir synlig for søkere</p>
            <button type="submit" name="publish-btn-job" class="btn" style="background-color:#9E182F; color:#fff;">Publiser</button>
          </div>
          <div class="col-lg-12 text-right">
            <button  type="button" id="previewButton" name="draft-btn-job" class="btn" style="background-color:#7D7DAA; color:#fff;">Forhåndsvis</button>
            <button type="button" name="save-btn-job" class="btn" style="background-color:#7D7DAA; color:#fff;">Lagre til senere</button>
          </div>
        </div>
      </fieldset>
    </div>
  </div>
</form>


<!-- Modal HTML struktur -->
<div id="previewModal" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close">&times;</span>
        <h2>Forhåndsvisning av Stilling</h2>
        <div id="modal-body">
            <!-- Dynamisk innhold vil bli lastet her -->
        </div>
    </div>
</div>

