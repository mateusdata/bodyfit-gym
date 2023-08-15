<?php
session_start();

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // Verificar as credenciais aqui (exemplo: usuário=admin, senha=123)
    if ($usuario === 'mateus' && $senha === '123') {
        // Autenticação bem-sucedida
        $_SESSION['usuario'] = $usuario;
        header('Location: ../index.php');
        exit();
    } else {
        // Credenciais incorretas
        $_SESSION['login_erro'] = 'Usuário ou senha incorretos. Tente novamente.';
    }
}

// Redirecionar para o formulário de login
header('Location: ../src/pages/loginForm.php');
exit();
?>
