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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/no.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>

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
        <?php
            if (is_user_logged_in()) {
                echo '<a href="/kontrollpanel" class="nav-link">Kontrollpanel</a>';
            } else {
                echo '<a href="/" class="nav-link">Log inn / Registrer</a>';
            }
        ?>
        <span class="separator">|</span>
        <a href="http://www.kristiania.no" class="navbar-btn"> Kristiania.no  <i class=" fa-solid fa-arrow-up-right-from-square"></i></a>

          </nav>
        </div>
      </div>
    </header>


