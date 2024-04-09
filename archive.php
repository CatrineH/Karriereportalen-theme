<?php get_header();?>

<section class="page-wrap">
    <div class= "container">
        <?php get_template_part('includes/section', 'archive');?>

        <?php previous_posts_link('Forrige');?>
        <?php next_posts_link('Neste');?>
</div>
</section>
<?php get_footer();?>