
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("../components/header.php") ?>
    <h1>Lista de Usuários</h1>
    <ul>
        <li>
            <strong>Nome:</strong> João da Silva<br>
            <strong>Email:</strong> joao@example.com<br>
            <strong>Tipo de Pessoa:</strong> Física
        </li>
        <li>
            <strong>Nome:</strong> Maria Souza<br>
            <strong>Email:</strong> maria@example.com<br>
            <strong>Tipo de Pessoa:</strong> Física
        </li>
        <li>
            <strong>Nome:</strong> Empresa XYZ Ltda.<br>
            <strong>Email:</strong> contato@empresa.com<br>
            <strong>Tipo de Pessoa:</strong> Jurídica
        </li>
    </ul>
    <?php include("../components/footer.php") ?>
</body>
</html>