<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['annonsetittel'];
    $jobTitle = $_POST['stillingstittel'];
    $employmentType = $_POST['ansettelsesform'];
    $workplace = $_POST['arbeidsted'];
    $sector = $_POST['sektor'];
    $employer = $_POST['arbeidsgiver'];
    $industry = $_POST['industry'];
    $deadline = $_POST['frist'];
    $numberOfPositions = $_POST['numberOfPositions'];
    $description = $_POST['editor']; 


get_header(); 
?>
        
        <main class="main-content">
            <img src="path/to/banner/image.jpg" alt="Banner image" class="banner-image">
            <h1><?= $title; ?></h1>
            <div class="job-details">
                <p>Stillingstittel: <?= $jobTitle; ?></p>
                <p>Ansettelsesform: <?= $employmentType; ?></p>
                <p>Arbeidsted: <?= $workplace; ?></p>
                <p>Sektor: <?= $sector; ?></p>
                <p>Arbeidsgiver: <?= $employer; ?></p>
                <p>Bransje: <?= $industry; ?></p>
                <p>Frist: <?= $deadline; ?></p>
                <p>Antall stillinger: <?= $numberOfPositions; ?></p>
            </div>
            <div class="job-description">
                <p><?= $description; ?></p>
            </div>
        </main>

<?php get_footer(); ?>
    </div>
</body>
</html>