<?php
/**
 * Header Template
 *  @package Karriereportalen
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <?php wp_head(); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body <?php body_class(); ?>>
<?php if (function_exists('wp_body_open')) { wp_body_open(); } ?>

<header class="header fixed-top">
    <div class="top-bar">
        <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kristiania_logo_22_sort.png" alt="Logo">
        </a>
        <nav class="top-bar-nav">
            <!-- Navigation Links -->
            <nav class="top-bar-nav">
        <a href="https://karriere.kristiania.no/arrangementer/">Aktivitetskalender</a>
        <a href="https://karriere.kristiania.no/ledige-stillinger/">Ledige stillinger</a>
        <a href="https://karriere.kristiania.no/">Kontrollpanel</a>
        <a href="login">Login / Registrer</a>
        <span class="separator">|</span>
        <a href="http://www.kristiania.no" class="button">
     Kristiania.no  <i class=" fa-solid fa-arrow-up-right-from-square"></i>
</a>
    </nav>
        </nav>
    </div>
</header>
