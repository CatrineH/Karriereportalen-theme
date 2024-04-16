
<?php  $step = $_GET['step'] ?? '1'; // Standard til trinn 1
?>
<div class="register-container">
    <?php if ($step === '1'): ?>
        <!-- Skjema for trinn 1 -->
    <?php elseif ($step === '2'): ?>
        <!-- Skjema for trinn 2 -->
    <?php endif; ?>
</div>


<?php

add_action('admin_post_register_step', 'handle_register_step');
function handle_register_step() {
    session_start();
    $step = $_POST['step'] ?? null;

    if ($step === '1') {
        // Behandle trinn 1
        $_SESSION['registration_data']['step1'] = $_POST;
        // Redirect til samme side med et query-parameter for å indikere neste trinn
        wp_redirect(home_url('/register/?step=2'));
        exit;
    } elseif ($step === '2') {
        // Behandle trinn 2
        $_SESSION['registration_data']['step2'] = $_POST;
        // og så videre...
    }
}