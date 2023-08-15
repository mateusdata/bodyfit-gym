<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Você precisa fazer login para acessar esta página');</script>";
    header('Location: ./src/pages/loginForm.php');
    exit();
} else {
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'][0];

        if ($usuario['tipo_user'] == "aluno") {
            header('Location: ./src/pages/ListTraining.php');

        }
        ;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Página Principal</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <?php include("./src/components/header.php") ?>
    <div>
       <?php include("./src/components/home.php") ?>
        <a class="fixed top-[90%] w-20 left-[90%] text-white text-md hover:bg-blue-600 animate-pulse bottom-0 bg-red-800 p-2 rounded-lg shadow-xl flex items-center justify-center h-10" href="./src/pages/logout.php">Sair</a>
    </div>
    <?php include("./src/components/details.php") ?>
    <?php include("./src/components/footer.php") ?>
</body>

</html>