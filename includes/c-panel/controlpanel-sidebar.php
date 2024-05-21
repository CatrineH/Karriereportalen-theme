<aside>
    <div class="sidebar"> 
      <div class="col">
        <div class="col d-flex flex-column align-items-center with-line" style="padding-top: 10px; text-align: center;">
                    <?php
                        $current_user = wp_get_current_user();
                        $company_name = get_user_meta($current_user->ID, 'company_name', true);
                        echo get_avatar($current_user->ID, 100, '', 'User Profile Picture', ['class' => 'profile-img rounded-circle']);
                        echo '<h6 class="card-title" style="color: #FFFF;  padding-top:10px;">Hei, <br>' . $current_user->display_name . '<br> hos ' . $company_name . '!</h6>';
                    ?>
        </div>
                        
        <ul class="nav flex-column">
            <li class="nav-item text-center">
                <a class="sidebar-link" href="/kontrollpanel">
                    <i class="fa fa-dashboard fa-2x"></i>
                    <span>Kontrollpanel</span>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="sidebar-link" href="/user-ad-list-page">
                    <i class="fa-solid fa-box-archive fa-2x"></i>
                    <span>Mine annonser</span>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="sidebar-link" href="/faq">
                    <i class="fa-solid fa-circle-question fa-2x"></i>
                    <span>FAQ</span>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="sidebar-link" href="/innstillinger">
                    <i class="fa fa-cog fa-2x"></i>
                    <span>Instillinger</span>
                </a>
            </li>
            <li class="nav-item text-center">
                <a class="sidebar-link" href="<?php echo wp_logout_url(home_url()); ?>">
                    <i class="fa fa-sign-out fa-2x"></i>
                    <span>Logg ut</span>
                </a>
            </li>
        </ul>
      </div>
    </div>
</aside>
