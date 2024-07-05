<?php
// Incluir o arquivo wp-load.php para ter acesso às funcionalidades do WordPress
require_once('wp-load.php');

// Verificar se o formulário de login foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obter o email e senha do formulário
    $email = $_POST['p_email'];
    $password = $_POST['p_password'];

    // Tentar autenticar o usuário
    $user = wp_authenticate($email, $password);

    if (is_wp_error($user)) {
        // Se houver erro na autenticação (credenciais inválidas, etc.)
        echo '<p>Erro: ' . $user->get_error_message() . '</p>';
    } else {
        // Se a autenticação for bem sucedida
        wp_set_current_user($user->ID, $user->user_login);
        wp_set_auth_cookie($user->ID);

        // Redirecionar para a página /portal
        wp_redirect('/portal');
        exit;
    }
}
?>
