<?php

get_header(); 
?>

        <!-- Main Content Area -->
        <main class="content">
    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    ?>
</main>


<?php

get_footer();
?>
