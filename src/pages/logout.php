<?php
session_start();

// Destruir a sessão
session_destroy();

// Redirecionar para a página de login
header('Location: ../pages/loginForm.php');
exit();
?>
