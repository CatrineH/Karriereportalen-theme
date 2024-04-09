<?php get_header();?>

<section class="page-wrap">
<div class="container">

<?php if( is_active_sidebar('sidebar-nav') ):?>
    <?php dynamic_sidebar('sidebar-nav');?>
    <?php endif;?>

    <h1><?php the_title();?></h1>
    <?php get_template_part('includes/section', 'content');?>

</div>
</section>
<?php get_footer();?>