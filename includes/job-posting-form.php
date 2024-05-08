<form id="job-listing-form" style="background: #FFFF;" action="#husk_prosess_script" method="post" enctype="multipart/form-data">
    <div class="container-fluid"style="background: #FFFF;">
        <div class="card custom-card-2">
            <div class="card-header">
                <h6 style="color: grey;">Dette er en mal til stillingsannonsen - fyll ut detaljene i skjema*</h6>
            </div>

  <div class="card-body">
      <fieldset>

<!-- Form Name -->
<!-- <legend>Dette er en mal til stillingsannonsen</legend> -->


 <!-- --- BANNER ----  -->
<div class="form-group">
<img id="bannerPreview" src="https://via.placeholder.com/950x200" alt="Banner Preview"/>
</div>
  <label class="col-md-4 control-label" for="Banner"> 
  </label>
  <div class="col-md-8">
    <input id="logo" name="logo" class="input-file" type="file">
  </div>
</div>


<div class="form-group">
  <label class="col-md-4 control-label" for="Banner">Annonsebanner</label>
  <div class="col-md-8">
    <input id="Banner" name="Banner" class="input-file" type="file">
  </div>
</div>
<hr>

  <input id="Banner" name="Banner" class="input-file" type="file" accept="image/*" onchange="previewImage('Banner', 'bannerPreview')"> 
 </div>
</div>


 <!-- --- LOGO ----  -->
<div class="form-group">
<img id="logoPreview" src="https://via.placeholder.com/150x150" alt="Logo Preview"/>  
</div>
  <label class="col-md-4 control-label" for="logo">

  </label>
  <div class="col-md-8">
  <input id="logo" name="logo" class="input-file" type="file" accept="image/*" onchange="previewImage('logo', 'logoPreview')">
</div>
<!-- ------------------------------------------------------------------------------------- -->

 <!-- --- ANNONSETITTEL ----  -->
<div class="form-group" style="margin-top: 30px;">
  <label class="col-md-4 control-label" for="textinput">Annonsetittel</label>  
  <div class="col-md-8">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    


 <!----------------------------------------------- ROW 1 -------- ------------------------ -->

  <!------ STILLINGSTITTEL ---- -->
 <div class="row">
  <div class="col-md-6">
    <div class="form-group" style="margin-top: 30px;">
      <label class="control-label" for="textinput">Stillingstittel</label>  
      <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    </div>
  </div>
   <!------ ANNSETTELSESFORM---- -->
  <div class="col-md-6">
    <div class="form-group" style="margin-top: 30px;">
      <label class="control-label" for="selectbransje">Ansettelsesform</label>
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

 <!-- --- FRIST FOR SØKNAD ----  -->
 <div class="row">
 <div class="col-md-6">
<div class="form-group" style="margin-top: 30px;">
  <label class="control-label" for="sted">Arbeidsted</label>  
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>


 <!-- --- SEKTOR ----  -->
 <div class="col-md-6">
<div class="form-group" style="margin-top: 30px;">
  <label class="control-label" for="sektor">Velg sektor</label>
      <select id="sektor" name="sektor" class="form-control">
        <option value="1">Velg</option>
        <option value="2">Privat</option>
        <option value="3">Offentlig</option>
      </select>
    </div>
  </div>




 <!---------------------------------------- ROW 3  -------------------------------------->

 <!-- --- ARBEIDSGIVER ----  -->
 <div class="row">
 <div class="col-md-6">
  <div class="form-group" style="margin-top: 30px;">
      <label class="control-label" for="textinput">Arbeidsgiver</label>  
      <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    </div>
  </div>


 <!-- --- ARBEIDSTED --- -->
 <div class="col-md-6">
  <div class="form-group" style="margin-top: 30px;">
        <label class="control-label" for="selectbransje">Bransje</label>
      
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
  <div class="col-md-6"> 
  <div class="form-group" style="margin-top: 30px;">
  <label class=" control-label" for="dato">Frist for søknad</label>  
  <input id="dato" name="dato" type="text" placeholder="01.01.24" class="form-control input-md" required="">
</div>
</div>

   <!-- --- ANT STILLINGER ----  -->
<div class="col-md-6">
<div class="form-group" style="margin-top: 30px;">
  <label class="control-label" for="antstillinger">Antall stillinger</label>  
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
</div>
</div>


 <!-- ---------------------------------- STILLINGSBESKRIVELSE ------------------------------>

 <div class="form-group" style="margin-top: 30px;">
  <label class="col-md-4 control-label" for="editor">Stillingsbeskrivelse</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="editor" name="editor">Informasjon om stillingen</textarea>
  </div>
</div>
<hr>


<!-- ------------------------ HVORDAN SKAL STILLINGEN SØKES? --------------------------- -->

 <!-- --- LENKE TIL SØKNAD ----  -->
 <h6 style=" color: #9E182F"> Hvordan skal stillingen søkes?</h6>
 <div class="form-group" style="margin-top: 30px;">

 <label class="col-md-4 control-label" for="lenke"> <p style="color: #4e0000; font-size: 13px;">Lenke til bedriftens eksterne søkeportal</p></label>
  <div class="col-md-8">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
  </div>
</div>

<hr>
<h6 style="color: #9E182F"> Kontaktinformasjon til søker</h6>

  <!-- --- KONTAKT ----  -->
 <div class="form-group" style="margin-top: 30px;">
  <label class="col-md-4 control-label" for="kontaktperson">Kontaktperson </label>  
  <div class="col-md-4">
  <input id="kontaktperson" name="kontaktperson" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

 <!-- --- E-POST ----  -->
 <div class="form-group" style="margin-top: 30px;">
  <label class="col-md-4 control-label" for="e-post">E-post</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="e-post" name="e-post" class="form-control" placeholder="" type="text" required="">
      <span class="input-group-addon"></span>
    </div>
    
  </div>
</div>

 <!-- --- TELEFON ----  -->
 <div class="form-group" style="margin-top: 30px;">
  <label class="col-md-4 control-label" for="telefon">Telefon</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="telefon" name="telefon" class="form-control" placeholder="" type="text" required="">
      <span class="input-group-addon"></span>
    </div>
    
  </div>
</div>

 <!-- --- BUTTONS FORHÅNDSVIS + PUBLISER ----  -->
<div class="form-group row">
                        <div class="col-md-12 text-right">
                            <button id="button1id" name="button1id" class="btn btn-white">Forhåndsvis</button>
                            <button id="button2id" type="submit" name="button2id" class="btn btn-danger">publiser</button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</form>
