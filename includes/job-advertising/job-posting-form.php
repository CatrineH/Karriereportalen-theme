
    <!-- Job Post Form -->
    <form id="job_form" action="job-published-page.php" method="post" enctype="multipart/form-data">
        <div class="card-form">
            <div class="card-header">
                <h6 style="color: grey; height: 12px;"><legend>Registrering av annonse</legend></h6>
            </div>
            <div class="card-body col-lg-12">
                <fieldset>
                    <!-- BANNER -->
                    <div class="form-group">
                        <div class="banner-container"> 
                            <img id="bannerPreview" src="https://via.placeholder.com/1024x200" alt="Banner Preview" />
                        </div>
                    </div>
                    <!-- LOGO -->
                    <div class="form-group">
                        <img id="logoPreview" src="https://via.placeholder.com/150x150" alt="Logo Preview" />
                        <div class="upload-btn-wrapper" style="margin-top: 100px;">
                            <label for="logoInput" class="custom-file-upload">Last opp logo</label>
                            <input type="file" name="imageLogo" id="logoInput" accept="image/*" class="form-control mt-3" style="display: none;">
                            <label for="bannerInput" class="custom-file-upload">Last opp banner</label>
                            <input type="file" name="imageBanner" id="bannerInput" accept="image/*" class="form-control mb-3 mt-3" style="display: none;">
                        </div>
                    </div>
                    <!-- STILLINGSINFO -->
                    <div class="row">
                        <div class="form-group">
                            <label class="control-label" for="postTitle">Annonsetittel</label>
                            <input id="postTitle" name="postTitle" type="text" placeholder="" class="form-control input-lg" required="">
                        </div>
                    </div>
                    <div class="w-100">
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="jobTitle" class="control-label">Stillingstittel</label>
                                <input id="jobTitle" name="jobTitle" type="text" class="form-control" required="">
                            </div>
                            <div class="col-lg-6">
                                <label for="jobType" class="control-label">Ansettelsesform</label>
                                <select id="jobType" name="jobType" class="form-control">
                                    <option value="1"> Velg</option>
                                    <option value="2"> Fast</option>
                                    <option value="3"> Deltid</option>
                                    <option value="4"> Vikariat</option>
                                    <option value="5"> Intern</option>
                                    <option value="6"> Engasjement</option>
                                    <option value="7"> Prosjekt</option>
                                    <option value="8"> Lærling</option>
                                    <option value="9"> Bemanningsbyrå</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="margin-top: 30px;">
                                    <label class="control-label" for="workplace">Adresse</label>
                                    <input id="workplace" name="workplace" type="text" placeholder="" class="form-control input-lg" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="margin-top: 30px;">
                                    <label class="control-label" for="sector">Velg sektor</label>
                                    <select id="sector" name="sector" class="form-control">
                                        <option value="1"> Velg</option>
                                        <option value="2"> Privat</option>
                                        <option value="3"> Offentlig</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="margin-top: 30px;">
                                    <label class="control-label" for="employer">Arbeidsgiver</label>
                                    <input id="employer" name="employer" type="text" placeholder="" class="form-control input-lg" required="">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group" style="margin-top: 30px;">
                                    <label class="control-label" for="industry">Bransje</label>
                                    <select id="industry" name="industry" class="form-control">
                                    <option value="1">Velg</option>
                                    <option value="2">Bygg og anlegg</option>
                                    <option value="3">Faglige tjenester</option>
                                    <option value="4">Finans og forsikring</option>
                                    <option value="5">Helse og omsorg</option>
                                    <option value="6">HR og ledelse</option>
                                    <option value="7">Håndverkere</option>
                                    <option value="8">Industri og produksjon</option>
                                    <option value="9">IT og medier</option>
                                    <option value="10">Kultur og kreative yrker</option>
                                    <option value="11">Natur og miljø</option>
                                    <option value="12">Offentlig administrasjon</option>
                                    <option value="13">Olje og gass</option>
                                    <option value="14">Reiseliv og mat</option>
                                    <option value="15">Sikkerhet og beredskap</option>
                                    <option value="16">Transport og lager</option>
                                    <option value="17">Uoppgitt / ikke identifiserbare</option>
                                    <option value="18">Varehandel</option>
                                    <option value="19">Kontor og økonomi</option>

                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group" style="margin-top: 30px;">
                                    <label class="control-label" for="deadline">Frist for søknad</label>
                                    <input id="deadline" name="deadline" type="text" placeholder="" class="form-control input-lg" required="">
                                </div>
                            </div>
                            <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                flatpickr("#deadline", {
                                    "locale": "no",
                                    dateFormat: "d.m.Y",
                                });
                            });
                            </script>
                            <div class="col-lg-6">
                                <div class="form-group" style="margin-top: 30px;">
                                    <label class="control-label" for="numberOfPositions">Antall stillinger</label>
                                    <select id="numberOfPositions" name="numberOfPositions" class="form-control">
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
                        <div class="form-group">
                            <label for="editor" class="col-lg-11 control-label" style="padding-top:30px;">Stillingsbeskrivelse</label>
                            <textarea class="form-control" id="editor" name="editor" style="height: 400px;"></textarea>
                        </div>
                        <script src="https://cdn.ckeditor.com/ckeditor5/34.1.0/classic/ckeditor.js"></script>
                        <h5 style="color: #9E182F; margin: 15px;"> Hvordan skal stillingen søkes?</h5>
                        <div class="form-group" style="margin-top: 10px;">
                            <label class="col-md-5 control-label" for="applicationLink">
                                <p style="color: #4e0000; font-size: 16px;">Via bedriftens eksterne søkeportal</p>
                            </label>
                            <div class="col-lg-12 input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa-sharp fa-solid fa-link"></i>
                                    </span>
                                </div>
                                <input id="applicationLink" name="applicationLink" type="text" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <div class="form-group" style="margin-top: 10px;">
                            <label class="col-md-5 control-label" for="applicationEmail">
                                <p style="color: #4e0000; font-size: 16px;">Via e-post</p>
                            </label>
                            <div class="col-lg-5 input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                </div>
                                <input id="applicationEmail" name="applicationEmail" type="email" placeholder="" class="form-control input-md" required="">
                            </div>
                        </div>
                        <hr style="padding: 10px;">
                        <h5 style="color: #9E182F; margin: 15px;">Kontaktinformasjon</h5>
                        <div class="form-group">
    <label class="col-md-5 control-label" for="contactPerson">
        <p style="color: #4e0000; font-size: 16px;">Søker kan kontakte </p>
        <button type="button" id="addContactButton" class="btn btn-secondary mt-4">Legg til flere kontaktpersoner</button>
    </label>

    <div id="contactContainer" class="col-lg-12">
        <div class="input-group mt-2">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa-solid fa-user-group"></i>
                </span>
            </div>
            <input id="contactPerson1" name="contactPerson[]" type="text" placeholder="Kontaktperson" class="form-control input-md">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa-solid fa-phone"></i>
                </span>
            </div>
            <input id="applicationPhone1" name="applicationPhone[]" type="tel" placeholder="Telefonnummer" class="form-control input-md">
        </div>
    </div>
</div>

<div class="form-group row">
    <div class="col-lg-7">
        <p style="padding-top: 30px; color:#7D7DAA; font-size: 14px;">** Annonsen må kvalitetssikres av karrieresenteret før den blir synlig for søkere</p>
        <button type="submit" name="publish-btn" id="publishButton" class="btn" style="background-color:#9E182F; color:#fff;">Publiser</button>
        <button type="button" id="previewButton" class="btn" style="background-color:#7D7DAA; color:#fff;">Forhåndsvis</button>
    </div>
</div>

                </fieldset>
            </div>
        </div>
    </form>
   <!-- Preview Modal -->
   <div id="previewModal" class="modal" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-content">
            <span class="close" aria-label="Close">&times;</span>
            <div id="preview_body"></div>
        </div>
    </div>

