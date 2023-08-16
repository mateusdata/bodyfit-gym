
<?php
session_start();
if (!isset($_SESSION['email'])) {
   
    header('Location: ../pages/loginForm.php');
    exit();
} else {
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'][0];
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu dados</title>
</head>
<body>
    <?php include("../components/header.php") ?>
    <div class="min-h-[50vh] sm:min-h-[80vh] flex items-center justify-center">
        <div class="bg-white p-8 rounded-md shadow-md max-w-md w-full">
            <h1 class="text-2xl font-semibold mb-4">Perfil do Usuário</h1>
            <div class="mb-4">
                <p class="text-gray-600"><strong>Nome:</strong> <?= $usuario['nome']  ?></p>
                <p class="text-gray-600"><strong>Tipo:</strong> <?= $usuario['tipo_user']  ?></p>
                <p class="text-gray-600"><strong>Email:</strong> <?= $usuario['email']  ?></p>
                <p class="text-gray-600"><strong>Nome da Academia:</strong> Body Fit</p>
            </div>
        </div>
    </div>
    <?php include("../components/footer.php") ?>
</body>
</html>