<aside class="col-md-2 d-none d-md-block sidebar">
    <div class="sidebar-sticky">
        <div class="card" style="width: 15rem; height:35rem; border-radius: 8px; align-items: center; ">
            <div class="card-body">
                <div class="text-left ">
                    <?php
                    $current_user = wp_get_current_user();
                    $company_name = get_user_meta($current_user->ID, 'company_name', true);
                    echo get_avatar($current_user->ID, 150, '', 'User Profile Picture', ['class' => 'profile-img img-fluid']);
                    // echo '<h5 class="card-title" style="color: #9E182F;">Hei, ' . $current_user->display_name . '!</h5>';
                    echo '<h5 class="card-title" style="color: #9E182F;">Hei, ' . $current_user->display_name . ' hos ' . $company_name . '!</h5>';
                    ?>
                </div>   
            </div>
    <ul class="nav flex-column">
        <li class="nav-item">
            <a href="kontrollpanel"><i class="fa fa-dashboard"></i> Kontrollpanel</a>
        </li>
         <li class="nav-item">
             <a href="annonsering"><i class="fa fa-plus-square"></i> Opprett ny annonse</a>
         </li>
         <li class="nav-item">
            <a href="faq"><i class="fa fa-life-ring"></i> Support</a>
         </li>
         <li class="nav-item">
             <a href="#"><i class="fa fa-cog"></i> Innstillinger</a>
        </li>
        <li class="nav-item">
            <a href="<?php echo wp_logout_url( home_url() ); ?>"><i class="fa fa-sign-out"></i> Logg ut</a>
         </li>
    </ul>
</aside>
