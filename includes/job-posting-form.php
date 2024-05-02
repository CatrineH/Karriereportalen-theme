<form id="job-listing-form" style="background: #9E182F; padding: 30px;" action="#husk_prosess_script" method="post" enctype="multipart/form-data">
    <div class="container-fluid">
        <div class="card custom-card-2">
            <div class="card-header">
                <h6 style="color: grey;">Annonserings detaljer - fyll ut skjema*</h6>
            </div>
            <div class="card-body">
                <fieldset>

<!-- Form Name -->
<legend>Stillingsannonse</legend>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="logo">Logo</label>
  <div class="col-md-8">
    <input id="logo" name="logo" class="input-file" type="file">
  </div>
</div>

<div class="hero-image">
<div class="form-group">
  <label class="col-md-4 control-label" for="Banner">Annonsebanner</label>
  <div class="col-md-8">
    <input id="Banner" name="Banner" class="input-file" type="file">
  </div>
</div>
<hr>
  </div>
<!-- File Button --> 

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Stillingstittel</label>  
  <div class="col-md-8">
  <input id="textinput" name="textinput" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="sektor">Velg sektor</label>
  <div class="col-md-8">
    <select id="sektor" name="sektor" class="form-control">
      <option value="1">-</option>
      <option value="2">Privat</option>
      <option value="">Offentlig</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="selectbransje">Velg bransje</label>
  <div class="col-md-8">
    <select id="selectbransje" name="selectbransje" class="form-control">
      <option value="1">-</option>
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




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Arbeidsgiver">Arbeidsgiver</label>  
  <div class="col-md-8">
  <input id="Arbeidsgiver" name="Arbeidsgiver" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="sted">Arbeidsted</label>  
  <div class="col-md-8">
  <input id="sted" name="sted" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="antstillinger">Antall stillinger</label>  
  <div class="col-md-8">
  <input id="antstillinger" name="antstillinger" type="text" placeholder="1 >" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Multiple Radios -->
<div class="form-group">
    <label class="col-md-4 control-label" for="ansettelsesform">Ansettelsesform</label>
    <div class="col-md-8">
        <div class="row">
           
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ansettelsesform" id="ansettelsesform-0" value="1" checked>
                    <label class="form-check-label" for="ansettelsesform-0">Fulltid</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ansettelsesform" id="ansettelsesform-1" value="2">
                    <label class="form-check-label" for="ansettelsesform-1">Deltid</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ansettelsesform" id="ansettelsesform-2" value="3">
                    <label class="form-check-label" for="ansettelsesform-2">Vikariat</label>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ansettelsesform" id="ansettelsesform-3" value="4">
                    <label class="form-check-label" for="ansettelsesform-3">Intern</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ansettelsesform" id="ansettelsesform-4" value="5">
                    <label class="form-check-label" for="ansettelsesform-4">Frivillig</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="ansettelsesform" id="ansettelsesform-5" value="6">
                    <label class="form-check-label" for="ansettelsesform-5">Annet</label>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="beskrivelse">Stillingsbeskrivelse</label>
  <div class="col-md-8">                     
    <textarea class="form-control" id="beskrivelse" name="beskrivelse">Informasjon om stillingen</textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="dato">Frist for søknad</label>  
  <div class="col-md-8">
  <input id="dato" name="dato" type="text" placeholder="01.01.01" class="form-control input-md" required="">
    
  </div>
</div>
<hr>
<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="lenke">Lenke til ekstern søkeportal</label>
  <div class="col-md-8">
    <input id="lenke" name="lenke" class="input-file" type="file">
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="kontaktperson">Kontaktperson </label>  
  <div class="col-md-4">
  <input id="kontaktperson" name="kontaktperson" type="text" placeholder="" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="e-post">E-post</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="e-post" name="e-post" class="form-control" placeholder="" type="text" required="">
      <span class="input-group-addon"></span>
    </div>
    
  </div>
</div>
<!-- Appended Input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefon">Telefon</label>
  <div class="col-md-4">
    <div class="input-group">
      <input id="telefon" name="telefon" class="form-control" placeholder="" type="text" required="">
      <span class="input-group-addon"></span>
    </div>
    
  </div>
</div>
<div class="form-group row">
                        <div class="col-md-12 text-right">
                            <button id="button1id" name="button1id" class="btn btn-white">Forhåndsvis</button>
                            <button id="button2id" name="button2id" class="btn btn-danger">publiser</button>
                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
    </div>
</form>
