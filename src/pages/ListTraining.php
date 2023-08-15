<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Você precisa fazer login para acessar esta página');</script>";
    header('Location: ./src/pages/loginForm.php');
    exit();
}
else{
     if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'][0]; 
        echo "Nomesss: " . $usuario['nome'];
        echo "Emaisssl: " . $usuario['email'];
        echo "IDsss: " . $usuario['nome'];
        if($usuario['tipo_user']=="personal"){
            header('Location: /index.php');
            
        };
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    aqui vai o treino do usuario
</body>
</html>