




 <!-- Form -->
 <form id="job-listing-form" style="" action="#husk_prosess_script" method="post" enctype="multipart/form-data">
        <div class="card" style="">
            <div class="card-header">
                <h6 style="color: grey;"> Stillingsannonse utkast</h6>
            </div>

<div class="card-body col-lg-12">
  <fieldset>

<!-- Form Name -->
<legend></legend>


 <!-- --------------------------------- BANNER ------------------------------------>
<div class="form-group">
<!-- <img id="bannerPreview" src="https://via.placeholder.com/950x200" alt="Banner Preview"/> -->
<img id="bannerPreview" src="https://via.placeholder.com/1000x200" alt="Banner Preview"/>

  <label class="col-lg-4 control-label" for="Banner"></label>
  <div class="col-lg-12">

  <input id="banner" name="banner" class="input-file" type="file" accept="image/*" onchange="previewImage('banner', 'bannerPreview')">

  <!-- <input id="banner" name="banner" class="input-file" type="file" accept="image/*" onchange="previewImage('banner', 'bannerPreview')"> -->
  </div>
</div>


 <!-- ------------------------------------ LOGO --------------------------------->
 <div class="form-group" style="margin-top: 30px;">

<img id="logoPreview" src="https://via.placeholder.com/150x150" alt="Logo Preview"/>  

  <label class="col-lg-4 control-label" for="logo"></label>
  <div class="col-lg-8">
  <input id="logo" name="logo" class="input-file" type="file" accept="image/*" onchange="previewImage('logo', 'logoPreview')">
</div>
</div>
<!-- ---------------------------------------------------------------------------->

 <!-- --- ANNONSETITTEL ----  -->
 <div class="row">

<div class="form-group" style="margin-top: 30px;">
  <label class="control-label" for="textinput">Annonsetittel</label>  

  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-lg" required="">
  </div>
  </div>
  <div class="w-100">

 <!----------------------------------------------- ROW 1 -------- ------------------------ -->

  <!------ STILLINGSTITTEL ---- -->
 <div class="row">
  <div class="col-lg-6">
    <div class="form-group" style="margin-top: 30px;">
      <label class="control-label" for="textinput">Stillingstittel</label>  
      <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-lg" required="">
    </div>
  </div>
  
   <!------ ANNSETTELSESFORM---- -->
  <div class="col-lg-6">
    <div class="w-100">
    <div class="form-group" style="margin-top: 30px;">
      <label class="control-label" for="textinput">Ansettelsesform</label>
      <select id="selectbransje" name="selectbransje" class="form-control">
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
</div>

 <!---------------------------------------- ROW 2 ------------------------------------------>

 <!-- --- ARBEIDSTED ----  -->
 <div class="col-lg-6">
<div class="form-group" style="margin-top: 30px;">
  <label class="control-label" for="textinput">Arbeidsted</label>  
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-lg" required="">
  </div>
</div>


 <!-- --- SEKTOR ----  -->
 <div class="col-lg-6">
<div class="form-group" style="margin-top: 30px;">
  <label class="control-label" for="textinput">Velg sektor</label>
      <select id="sektor" name="sektor" class="form-control">
        <option value="1">Velg</option>
        <option value="2">Privat</option>
        <option value="3">Offentlig</option>
      </select>
    </div>
  </div>




 <!---------------------------------------- ROW 3  -------------------------------------->

   <!------ STILLINGSTITTEL ---- -->
  <div class="col-lg-6">
    <div class="form-group" style="margin-top: 30px;">
      <label class="control-label" for="textinput">Arbeidsgiver</label>  
      <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-lg" required="">
    </div>
  </div>
  
   <!------ ANNSETTELSESFORM---- -->
  <div class="col-lg-6">
    <div class="form-group" style="margin-top: 30px;">
      <label class="control-label" for="textinput">Bransje</label>
      <select id="selectbransje" name="selectbransje" class="form-control">
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
              <option value="">Finans og forsikring</option>
      </select>
    </div>
  </div>
</div>
 
 <!---------------------------------------- ROW 4  -------------------------------------->

 <!-- --- FRIST FOR SØKNAD ----  -->
 <div class="row">
  <div class="col-lg-6"> 
  <div class="form-group" style="margin-top: 30px;">
  <label class=" control-label" for="textinput">Frist for søknad</label>  
  <input id="dato" name="dato" type="text" placeholder="01.01.24" class="form-control input-lg" required="">
</div>
</div>

   <!-- --- ANT STILLINGER ----  -->
<div class="col-lg-6">
<div class="form-group" style="margin-top: 30px;">
  <label class="control-label" for="antstillinger">Antall stillinger</label>  
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-lg" required="">
</div>
</div>
</div>
 <!-- ---------------------------------- STILLINGSBESKRIVELSE ------------------------------>

 <div class="form-group" style="margin-top: 30px;">
  <label class="col-lg-10 control-label" for="editor" >Stillingsbeskrivelse</label>
  <div class="col-lg-12" >                     
    <textarea class="form-control" style="height: 400px;"  id="editor" name="editor"></textarea>
  </div>
</div>
<hr style="padding: 30px;">


<!-- ------------------------ HVORDAN SKAL STILLINGEN SØKES? --------------------------- -->

 <!-- --- LENKE TIL SØKNAD ----  -->
 <h6 style=" color: #9E182F; margin: 15px;"> Hvordan skal stillingen søkes?</h6>

<div class="form-group" style="margin-top: 10px;">
    <label class="col-md-5 control-label" for="kontaktperson">
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
    <label class="col-md-5 control-label" for="kontaktperson">
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
      <p style="color: #4e0000; font-size: 14px;">Telefon kontaktperson</p>
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

 <!-- --- BUTTONS FORHÅNDSVIS + PUBLISER ----  -->

<div class="form-group row">
    <div class="col-lg-7">
        <p style="padding-top: 30px; color:#7D7DAA; font-size: 14px;">** Annonsen må kvalitetssikres av karrieresenteret før den blir synlig for søkere</p>
        <button id="button1" type="submit" name="button1" class="btn"style="background-color:#9E182F; color:#fff;"><i class="fa-solid fa-arrow-up-from-bracket"></i> Publiser</button>
    </div>
    <div class="col-lg-12 text-right">
        <button id="button2" name="button2" class="btn" style="background-color:#7D7DAA; color:#fff;"><i class="fa-regular fa-eye"></i> Forhåndsvis</button>
        <button id="button3" name="button3" class="btn" style="background-color:#7D7DAA; color:#fff;"><i class="fa-regular fa-floppy-disk"></i> Lagre til senere</button>
    </div>
</div>

                </fieldset>
            </div>
        </div>
    </div>
</form>
