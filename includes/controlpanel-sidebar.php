<aside>
    <div class="sidebar"> 
      <div class="col ">
            <div class="col d-flex flex-column align-items-center with-line" style="padding-top: 10px; text-align: center;">
                        <?php
                            $current_user = wp_get_current_user();
                            $company_name = get_user_meta($current_user->ID, 'company_name', true);
                            echo get_avatar($current_user->ID, 150, '', 'User Profile Picture', ['class' => 'profile-img rounded-circle']);  // echo '<h5 class="card-title" style="color: #9E182F;">Hei, ' . $current_user->display_name . '!</h5>';
                            echo '<h5 class="card-title" style="color: #FFFF;  padding-top:10px;  ">Hei, ' . $current_user->display_name . ' hos ' . $company_name . '!</h5>';
                        ?>
            </div>
                        
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="sidebar-link" href="kontrollpanel"><i class="fa fa-dashboard"></i> Kontrollpanel</a>
                            </li>
                            <li class="nav-item">
                                <a class="sidebar-link" href="din-annonse"><i class="fa-solid fa-box-archive"></i> Annonse Arkiv</a>
                            </li>
                            <li class="nav-item">
                                <a class="sidebar-link" href="faq"><i class="fa fa-life-ring"></i> Support</a>
                            </li>
                            <li class="nav-item">
                                <a class="sidebar-link" href="instillinger"><i class="fa fa-cog"></i> Instillinger</a>
                            </li>
                            <li class="nav-item">
                                <a class="sidebar-link" href="<?php echo wp_logout_url(home_url()); ?>"><i class="fa fa-sign-out"></i> Logg ut</a>
                            </li>
                        </ul>
        </div>
    </div>
</aside>
    