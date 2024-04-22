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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="container-fluid py-3 sticky-top" style="background-color: #FFFFFF; box-shadow: 0px 3px 6px #00000029;">
      <div class="row">
        <div class="col d-flex justify-content-between align-items-center">
          <!-- Logo section -->
          <a href="<?php echo home_url(); ?>" class="navbar-brand">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kristiania_logo_22_sort.png" alt="Kristiania"style="height: 70px;">
          </a>
          <!-- Navigation -->
          <nav class="nav align-items-center">
           
        <a href="https://karriere.kristiania.no/arrangementer/" class="nav-link">Aktivitetskalender</a>
        <a href="https://karriere.kristiania.no/ledige-stillinger/"class="nav-link">Ledige stillinger</a>
        <a href="https://karriere.kristiania.no/"class="nav-link">Kontrollpanel</a>
        <a href="login"class="nav-link">Login / Registrer</a>
        <span class="separator">|</span>
        <a href="http://www.kristiania.no" class="navbar-btn"> Kristiania.no  <i class=" fa-solid fa-arrow-up-right-from-square"></i></a>

          </nav>
        </div>
      </div>
    </header>





<!-- <header class="header fixed-top"> 

<nav class="navbar bg-body-tertiary">
  <div class="container">
            <a href="<?php echo home_url(); ?>" class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Kristiania_logo_22_sort.png" alt="Logo">
            </a> -->


              <!-- Navigation Links -->
        <!-- <a href="https://karriere.kristiania.no/arrangementer/">Aktivitetskalender</a>
        <a href="https://karriere.kristiania.no/ledige-stillinger/">Ledige stillinger</a>
        <a href="https://karriere.kristiania.no/">Kontrollpanel</a>
        <a href="login">Login / Registrer</a>
        <span class="separator">|</span>
        <a href="http://www.kristiania.no" class="button"> Kristiania.no  <i class=" fa-solid fa-arrow-up-right-from-square"></i></a>
  </div>
</nav> -->



   
    <!-- <nav class="navbar ">
           
       
    </nav> -->
<!-- <header> -->