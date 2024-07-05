<?php
// Inclua o arquivo wp-load.php para ter acesso às funções do WordPress
require_once($_SERVER['DOCUMENT_ROOT'] . '/wp-load.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $creds = array(
        'user_login'    => $_POST['p_email'],
        'user_password' => $_POST['p_password'],
        'remember'      => true
    );

    // Tenta fazer o login
    $user = wp_signon($creds, false);

    if (is_wp_error($user)) {
        // Captura a mensagem de erro
        $error_message = $user->get_error_message();
        // Codifica a mensagem de erro para incluir na URL
        $error_message = urlencode($error_message);
        // Se houver um erro, redireciona de volta para a página de login com uma mensagem de erro
        wp_redirect('https://tigeruniversalcoaching.com/page-login.php?login=failed&error=' . $error_message);
        exit;
    } else {
        // Se o login for bem-sucedido, redireciona para a página desejada
        wp_redirect('https://tigeruniversalcoaching.com/portaldoaluno');
        exit;
    }
}
