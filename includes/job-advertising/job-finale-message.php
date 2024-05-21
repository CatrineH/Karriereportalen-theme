<form class="form text-center" action="<?php echo wp_login_url(); ?>" method="post">
   <h2 class="mb-4">Flottings, da var annonsen din på vei til kontroll før publisering.<br>
   <h4>Du vil finne annonsen under
      <span class="red-text" style="color: #9E182F;">
         <a href="/user-ad-list-page" style="color: #9E182F;">mine annonser</a>
      </span> 
      når den er klar.
   </h4>
   </h2>
   <br>
   <div class="img-container">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/animations/checking-content.gif" alt="Sending data animation" class="responsive-img">
   </div>
</form>