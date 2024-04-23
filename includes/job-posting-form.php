<form id="job-listing-form"  style="background: #cac5dd;" action="#husk prosess script" method="post" enctype="multipart/form-data">
    <div class="custom-card-2">
        <div class="card-header">
            <h6 style="color: grey;">Annonserings detaljer</h6>
        </div>
        <div class="card-body">
            <!-- Bransje -->
            <div class="form-group row">
                <label for="company" class="col-md-3 col-form-label">Bransje*</label>
                <div class="col-md-9">
                    <select id="company" name="company" class="form-control" required>
                        <option value="">Velg din bransje</option>
                        <option value="healthcare">Helsevesenet</option>
                        <!-- More options added via PHP -->
                    </select>
                </div>
            </div>
            <!-- Tittel -->
            <div class="form-group row">
                <label for="job-title" class="col-md-3 col-form-label">Tittel*</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" id="job-title" name="job_title" required placeholder="e.g. Junior Front-end Developer">
                </div>
            </div>
            <!-- Bilde-banner -->
            <div class="form-group row">
                <label for="job-banner" class="col-md-3 col-form-label">Bilde-banner*</label>
                <div class="col-md-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="job-banner" name="job_banner" required>
                        <label class="custom-file-label" for="job-banner">(1024px x 1024px)</label>
                    </div>
                </div>
            </div>
            <!-- Logo -->
            <div class="form-group row">
                <label for="company-logo" class="col-md-3 col-form-label">Logo*</label>
                <div class="col-md-9">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="company-logo" name="company_logo" required>
                        <label class="custom-file-label" for="company-logo">(300px x 300px )</label>
                    </div>
                </div>
            </div>
            <!-- Om stillingen -->
            
            <div class="form-group row">
                <label for="about-the-job" class="col-md-3 col-form-label">Om stillingen*</label>
                <div class="col-md-9">
                    <textarea class="form-control" style="height: 300px;" id="about-the-job" name="about_job" required placeholder="Skriv eller lim inn tekst. Få med noen setninger om rollen, hvilke krav stillingen har, og hvordan det er å jobbe hos dere."></textarea>
                </div>
            </div>
            <!-- Stillingsform -->

            <h6 class="mt-4 mb-2 ">Stillingsform*</h6>

           <!-- Fulltid -->

           <div class="row ml-5">
  <div class="col-md-4 form-check">
          <input class="form-check-input" type="radio" name="work_type" id="full-time" value="full_time">
          <label class="form-check-label" for="full-time">
            Fulltid
          </label>
        </div>
    
      <!-- Deltid -->

      <div class="col-md-4 form-check">
          <input class="form-check-input" type="radio" name="work_type" id="part-time" value="part_time">
          <label class="form-check-label" for="part-time">
            Deltid
          </label>
        </div>
      
      <!-- Vikariat -->

        <div class="form-check">
          <input class="form-check-input" type="radio" name="work_type" id="temporary" value="temporary">
          <label class="form-check-label" for="temporary">
            Vikariat
          </label>
        </div>

      <!-- Intern -->

      <div class="col-md-4 form-check">
          <input class="form-check-input" type="radio" name="work_type" id="intern" value="intern">
          <label class="form-check-label" for="intern">
            Intern
          </label>
        </div>

      <!-- Frivillig -->


      <div class="col-md-4 form-check">
          <input class="form-check-input" type="radio" name="work_type" id="volunteer" value="volunteer">
          <label class="form-check-label" for="volunteer">
            Frivillig
          </label>
        </div>
  
      <!-- Annet -->
    

      <div class="col-md-3 form-check ">
          <input class="form-check-input" type="radio" name="work_type" id="other" value="other">
          <label class="form-check-label" for="other">
            Annet
          </label>
        </div>
      </div>

<br>
            <!-- Kontaktperson -->
            <h6 class=" border-top border-dark p-4">Kontaktperson</h6>
            <div class="form-group row p-4">
                <label for="phone-number" class="col-md-3 col-form-label">Telefon</label>
                <div class="col-md-9">
                <input type="tel" class="form-control" id="phone-number" name="phone_number" placeholder="Telefon">                    </div>
            </div>
            <div class="form-group row p-4">
                <label for="email-address" class="col-md-3 col-form-label">E-post</label>
                <div class="col-md-9">
                    <input type="email" class="form-control" id="email-address" name="email_address" placeholder="E-post">
                </div>
            </div>
            <!-- Buttons -->
            <div class="form-group row justify-content-end">
                <button type="submit" class="btn btn-danger mx-2">Forhåndsvis</button>
                <button type="submit" class="btn btn-dark">Publiser</button>
            </div>
        </div>
    </div>
</form>