<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stillingsportal</title>
    <?php wp_head();?>
</head>
<body>
    
<header>
<div class="top-bar">
    <a href="<?php echo home_url(); ?>" class="logo">
        <!-- logo-header  -->
        <img src="<?php echo get_template_directory_uri(); ?>/images/Kristiania_logo_22_sort.png" alt="Logo" />
    </a>
    <nav class="top-bar-nav">
        <a href="https://karriere.kristiania.no/arrangementer/">Aktivitetskalender</a>
        <a href="https://karriere.kristiania.no/ledige-stillinger/">Ledige stillinger</a>
        <a href="kontrollpanel">Kontrollpanel</a>
        <a href="login-registrering">Login / Registrering</a>
        <span class="separator">|</span>
        <a href="http://www.kristiania.no" class="button">Kristiania.no</a>
    </nav>
</div>

</header>
