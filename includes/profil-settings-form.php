
<!-- https://developer.mozilla.org/en-US/docs/Learn/JavaScript/Client-side_web_APIs/Client-side_storage -->

<div class="container ">
<div class="row justify-content-center mt-5">
    <div class="col-12 col-lg-10 col-xl-9 ">
        <h2 class="h3 mb-4 page-title">Innstillinger</h2>
        <div class="my-4">

        <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profil" role="tab" aria-controls="profile" aria-selected="true">Profil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="security-tab" data-toggle="tab" href="#sikkerhet" role="tab" aria-controls="security" aria-selected="false">Sikkerhet</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="notification-tab" data-toggle="tab" href="#notifikasjoner" role="tab" aria-controls="notification" aria-selected="false">Notifikasjoner</a>
                </li>
            </ul>

            <form>
                <div class="row mt-5 align-items-center">
                    <div class="col-md-4 text-center mb-5">

                     <?php
                            $current_user = wp_get_current_user();
                            $company_name = get_user_meta($current_user->ID, 'company_name', true);
                            echo get_avatar($current_user->ID, 150, '', 'User Profile Picture', ['class' => 'profile-img rounded-circle']);  // echo '<h5 class="card-title" style="color: #9E182F;">Hei, ' . $current_user->display_name . '!</h5>';
                        ?>
                  </div>
                    <div class="col">
                        <div class="row align-items-center">
                            <div class="col-md-7">
                            <?php
                            $current_user = wp_get_current_user();
                            $company_name = get_user_meta($current_user->ID, 'company_name', true);
                            echo '<h4 class="mb-1" style="color: #000;  padding-top:10px;  ">' . $current_user->display_name . '!</h4>';
                            echo ' <p class="small mb-3"><span class="badge badge-dark">Bedriftens navn</span></p>'
                        ?>
                         
                               
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-md-7">
                                <p class="text-muted">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst. Cras urna quam, malesuada vitae risus at,
                                    pretium blandit sapien.
                                </p>
                            </div>
                            <div class="col">
                                <p class="small mb-0 text-muted">Bedriftens adresse</p>
                                <p class="small mb-0 text-muted">postnummer</p>
                                <p class="small mb-0 text-muted">Telefon</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4" />
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="firstname">Kontaktperson</label>
                        <input type="text" id="firstname" class="form-control" placeholder="Fornavn" />
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lastname" style="margin-top: 16px;"></label>
                        <input type="text" id="firstname" class="form-control" placeholder="Etternavn" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="inputCompany5">Bedriftens navn</label>
                        <input type="text" class="form-control" id="inputCompany5" placeholder="" />
                    </div>
                    <div class="form-row">
                    <div class="form-group col-md-6">
                    <label for="inputEmail4">E-post</label>
                    <input type="email" class="form-control" id="inputEmail4" placeholder="" />
                    </div>
                    </div>
                <div class="form-group col-md-6">
                    <label for="inputAddress5">Addresse</label>
                    <input type="text" class="form-control" id="inputAddress5" placeholder="" />
                </div>
              
                    <div class="form-group col-md-4">
                        <label for="inputState5">Sted</label>
                        <input type="text" class="form-control" id="inputplace5" placeholder="" />
                    
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputZip5">Postnummer</label>
                        <input type="text" class="form-control" id="inputZip5" placeholder="" />
                    </div>
                </div>
                <hr class="my-4" />
                <div class="row mb-4">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="inputPassword4">Gammelt passord</label>
                            <input type="password" class="form-control" id="inputPassword5" />
                        </div>
                        <div class="form-group">
                            <label for="inputPassword5">Nytt passord</label>
                            <input type="password" class="form-control" id="inputPassword5" />
                        </div>
                        <div class="form-group">
                            <label for="inputPassword6">Bekreft passord</label>
                            <input type="password" class="form-control" id="inputPassword6" />
                        </div>
                    </div>
                    <div class="col-md-6">
                    <p class="mb-2">Krav til passord</p>
                     <p class="small text-muted mb-2">For å opprette et nytt passord, må du oppfylle alle følgende krav:</p>
                         <ul class="small text-muted pl-4 mb-0">
                             <li>Minimum 8 tegn</li>
                             <li>Minst ett spesialtegn</li>
                             <li>Minst ett tall</li>
                             <li>Kan ikke være det samme som et tidligere passord</li>
                         </ul>
                    </div>
                    </div>
<button type="submit" class="btn" style="background-color:#9E182F; color:#fff;">Lagre endringer</button>

            </form>
        </div>
    </div>
</div>

</div>
