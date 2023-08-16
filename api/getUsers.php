<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    if ($usuario === 'mateus' && $senha === '123') {
        $_SESSION['usuario'] = $usuario;
        header('Location: ../index.php');
        exit();
    } else {
        $_SESSION['login_erro'] = 'Usuário ou senha incorretos. Tente novamente.';
    }
}
header('Location: ../src/pages/loginForm.php');
exit();
?>
