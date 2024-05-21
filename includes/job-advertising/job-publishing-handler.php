<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['title'] = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Annonsetittel er ikke definert';
    $_SESSION['jobTitle'] = filter_input(INPUT_POST, 'jobTitle', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Stillingstittel er ikke definert';
    $_SESSION['deadline'] = filter_input(INPUT_POST, 'deadline', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen frist er definert';
    $_SESSION['employmentType'] = filter_input(INPUT_POST, 'ansettelsesform', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen ansettelsesform er definert';
    $_SESSION['workplace'] = filter_input(INPUT_POST, 'arbeidsted', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen arbeidsted er definert';
    $_SESSION['sector'] = filter_input(INPUT_POST,'sektor', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen sektor valgt';
    $_SESSION['employer'] = filter_input(INPUT_POST, 'employer', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen employer er definert';
    $_SESSION['industry'] = filter_input(INPUT_POST, 'industry', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen industry er definert';
    $_SESSION['numberOfPositions'] = filter_input(INPUT_POST, 'numberOfPositions', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen antall stillinger er definert';
    $_SESSION['description'] = filter_input(INPUT_POST, 'editor', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen beskrivelse av stillingen er definert';
    $_SESSION['imageBanner'] = filter_input(INPUT_POST, 'imageBanner', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen bannerbilde er definert';
    $_SESSION['imageLogo'] = filter_input(INPUT_POST, 'imageLogo', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen logo er definert';
    $_SESSION['imagePreview'] = filter_input(INPUT_POST, 'imagePreview', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen forhåndsvisning er definert';
    $_SESSION['image'] = filter_input(INPUT_POST, 'image', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen bilde er definert';
    $_SESSION['applicationLink'] = filter_input(INPUT_POST, 'applicationLink', FILTER_SANITIZE_URL) ?? 'Ingen søkelink er definert';
    $_SESSION['applicationEmail'] = filter_input(INPUT_POST, 'applicationEmail', FILTER_SANITIZE_EMAIL) ?? 'Ingen søkepost er definert';
    $_SESSION['contactPerson'] = filter_input(INPUT_POST, 'contactPerson', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen kontaktperson er definert';
    $_SESSION['contactEmail'] = filter_input(INPUT_POST, 'contactEmail', FILTER_SANITIZE_EMAIL) ?? 'Ingen kontaktperson er definert';
    $_SESSION['contactPhone'] = filter_input(INPUT_POST, 'contactPhone', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen kontaktperson er definert';
    $_SESSION['contactAddress'] = filter_input(INPUT_POST, 'contactAddress', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen kontaktperson er definert';
    $_SESSION['contactPostalCode'] = filter_input(INPUT_POST, 'contactPostalCode', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen kontaktperson er definert';
    $_SESSION['contactCity'] = filter_input(INPUT_POST, 'contactCity', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen kontaktperson er definert';

    $employmentTypes = [
        'Velg' => 'Velg',
        'Fast' => 'Fast',
        'Deltid' => 'Deltid',
        'Vikariat' => 'Vikariat',
        'Intern' => 'Intern',
        'Engasjement' => 'Engasjement',
        'Prosjekt' => 'Prosjekt',
        'Lærling' => 'Lærling',
        'Bemanningsbyrå' => 'Bemanningsbyrå',
    ];
    $employmentTypeValue = filter_input(INPUT_POST, 'employmentType', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['employmentType'] = $employmentTypes[$employmentTypeValue] ?? 'Ingen ansettelsesform er definert';

    $sectors = [
        'Velg' => 'Velg',
        'Privat' => 'Privat',
        'Offentlig' => 'Offentlig',
    ];
    $sectorValue = filter_input(INPUT_POST, 'sector', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['sector'] = $sectors[$sectorValue] ?? 'Ingen sektor valgt';

    $industries = [
        'Velg' => 'Velg',
        'Helse og omsorg' => 'Helse og omsorg',
        'Varehandel' => 'Varehandel',
        'Industri' => 'Industri',
        'Bygg og anlegg' => 'Bygg og anlegg',
        'Undervisning' => 'Undervisning',
        'Offentlig administrasjon' => 'Offentlig administrasjon',
        'Faglige tjenester' => 'Faglige tjenester',
        'IT og medier' => 'IT og medier',
        'Olje og gass' => 'Olje og gass',
        'Finans og forsikring' => 'Finans og forsikring',
    ];
    $industryValue = filter_input(INPUT_POST, 'industry', FILTER_SANITIZE_SPECIAL_CHARS);
    $_SESSION['industry'] = $industries[$industryValue] ?? 'Ingen industri valgt';

    $_SESSION['workplace'] = filter_input(INPUT_POST, 'workplace', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen arbeidsted er definert';
    $_SESSION['employer'] = filter_input(INPUT_POST, 'employer', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen arbeidsgiver er definert';
    $_SESSION['numberOfPositions'] = filter_input(INPUT_POST, 'numberOfPositions', FILTER_SANITIZE_NUMBER_INT) ?? 0;
    $_SESSION['description'] = filter_input(INPUT_POST, 'content', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen beskrivelse av stillingen er definert';
    $_SESSION['applicationLink'] = filter_input(INPUT_POST, 'applicationLink', FILTER_SANITIZE_URL) ?? 'Ingen søkelink er definert';
    $_SESSION['applicationEmail'] = filter_input(INPUT_POST, 'applicationEmail', FILTER_SANITIZE_EMAIL) ?? 'Ingen søkepost er definert';
    $_SESSION['contactPerson'] = filter_input(INPUT_POST, 'contactPerson', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen kontaktperson er definert';
    $_SESSION['phone'] = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen telefon er definert';
    $_SESSION['email'] = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL) ?? 'Ingen epost er definert';
    $_SESSION['address'] = filter_input(INPUT_POST, 'address', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen adresse er definert';
    $_SESSION['postalCode'] = filter_input(INPUT_POST, 'postalCode', FILTER_SANITIZE_SPECIAL_CHARS) ?? 'Ingen postnummer er definert';
    
    $upload_dir = '/Users/cat/Local Sites/karriereportalen-theme/app/public/uploads/';

    // Behandle opplastede bilder
    if (isset($_FILES['imageBanner']) && $_FILES['imageBanner']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['imageBanner']['tmp_name'];
        $name = basename($_FILES['imageBanner']['name']);
        $target_path = $upload_dir . $name;

        if (move_uploaded_file($tmp_name, $target_path)) {
            $_SESSION['imageBanner'] = $target_path;
        } else {
            $_SESSION['imageBanner'] = 'Feil ved opplasting av bannerbilde.';
        }
    } else {
        $_SESSION['imageBanner'] = 'Ingen bannerbilde er valgt';
    }

    if (isset($_FILES['imageLogo']) && $_FILES['imageLogo']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES['imageLogo']['tmp_name'];
        $name = basename($_FILES['imageLogo']['name']);
        $target_path = $upload_dir . $name;

        if (move_uploaded_file($tmp_name, $target_path)) {
            $_SESSION['imageLogo'] = $target_path;
        } else {
            $_SESSION['imageLogo'] = 'Feil ved opplasting av logobildet.';
        }
    } else {
        $_SESSION['imageLogo'] = 'Ingen logo er valgt';
    }

    header("Location: job-published-page.php");
    exit();
}
?>
