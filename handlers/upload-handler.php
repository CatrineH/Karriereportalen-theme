<?php 

// Det er viktig å sikre at alle data som sendes til serveren er rene og trygge å bruke. 
// Bruk WordPress-funksjonene sanitize_text_field(), sanitize_email(), sanitize_url() og
// sanitize_textarea_field() til å rense innkommende data for å unngå sikkerhetsproblemer 
// som XSS-angrep eller SQL-injeksjoner.


//  Handle image uploads to jobform

function handle_image_upload($inputName) {
    require_once(ABSPATH . 'wp-admin/includes/image.php');
    require_once(ABSPATH . 'wp-admin/includes/file.php');
    require_once(ABSPATH . 'wp-admin/includes/media.php');

    // Sjekk om bildet faktisk er lastet opp via $_FILES
    if (!isset($_FILES[$inputName]) || $_FILES[$inputName]['error'] != UPLOAD_ERR_OK) {
        echo "Ingen fil ble lastet opp.";
        return;
    }

    // Håndtere opplastingen med WordPress funksjoner
    $attachment_id = media_handle_upload($inputName, 0);  // 0 betyr at det ikke er knyttet til noen spesifikk post

    if (is_wp_error($attachment_id)) {
        echo "Feil ved opplasting: " . $attachment_id->get_error_message();
    } else {
        // Trigg pluginens hook etter vellykket opplasting
        do_action('sirsc_attachment_images_processed', $attachment_id);
        echo "Bilde er lastet opp og behandlet! Vedlegg ID: " . $attachment_id;
    }
}


require_once(ABSPATH . 'wp-admin/includes/image.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/media.php');

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Håndterer bildeopplasting med hooks
    $banner_id = media_handle_upload('imageBanner', 0);  // 'imageBanner' fra formen, '0' betyr ingen tilknyttet post
    $logo_id = media_handle_upload('imageLogo', 0);   // 'imageLogo' fra formen

    if (is_wp_error($banner_id) || is_wp_error($logo_id)) {
        echo json_encode(['error' => 'Bildeopplasting feilet', 'details' => is_wp_error($banner_id) ? $banner_id->get_error_messages() : $logo_id->get_error_messages()]);
        exit;
    }

    // Lagre resten av formdata
    $postarr = [
        'post_author'  => get_current_user_id(),
        'post_title'   => sanitize_text_field($_POST['annonsetittel']),
        'post_content' => sanitize_textarea_field($_POST['editor']),
        'post_status'  => 'draft', 'publish', 'preview', // 'draft' eller 'publish'
        'meta_input'   => [
            'stillingstittel'    => sanitize_text_field($_POST['stillingstittel']),
            'ansttelsesform'     => sanitize_text_field($_POST['ansettelsesform']),
            'arbeidsted'         => sanitize_text_field($_POST['arbeidsted']),
            'sektor'             => sanitize_text_field($_POST['sektor']),
            'arbeidsgiver'       => sanitize_text_field($_POST['arbeidsgiver']),
            'bransje'            => sanitize_text_field($_POST['bransje']),
            'frist'              => sanitize_text_field($_POST['frist']),
            'antstillinger'      => sanitize_text_field($_POST['antstillinger']),
            'søkelink'           => sanitize_url($_POST['søkelink']),
            'søkepost'           => sanitize_email($_POST['søkepost']),
            'kontaktperson'      => sanitize_text_field($_POST['kontaktperson']),
            'telefon'            => sanitize_text_field($_POST['telefon']),
        ]
    ];

    $post_id = wp_insert_post($postarr);  // Oppretter en ny post (annonse)

    if ($post_id == 0) {
        echo json_encode(['error' => 'Kunne ikke opprette annonsepost']);
    } else {
        update_post_meta($post_id, 'banner_image_id', $banner_id);
        update_post_meta($post_id, 'logo_image_id', $logo_id);
        echo json_encode(['success' => true, 'post_id' => $post_id]);
    }
}

