<?php
session_start();
  include("../../api/databases/database.php");
if (!isset($_SESSION['usuario'])) {
    echo "<script>alert('Você precisa fazer login para acessar esta página');</script>";
    header('Location: ./src/pages/loginForm.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-8 w-[50%]">
        <h1 class="text-2xl font-semibold mb-4">Cadastro de Usuários</h1>
        <form action="../../api/registerStudent.php" method="POST" class="bg-white p-4 rounded shadow-md">
            <div class="mb-4">
                <label for="nome" class="block font-medium text-gray-700">Nome</label>
                <input type="text" id="nome" name="nome" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="senha" class="block font-medium text-gray-700">Senha</label>
                <input type="text" id="senha" name="senha" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <div class="mb-4">
                <label for="objetivo" class="block font-medium text-gray-700">objetivo</label>
                <input type="text" id="objetivo" name="objetivo" class="mt-1 p-2 border rounded w-full" required>
            </div>
            <div>
                <label for="tipo_treino" class="block font-medium text-gray-700">Tipo de Treino</label>
                <select id="tipo_treino" name="tipo_treino" class="mt-1 p-2 border rounded w-full" required>
                    <?php
                    $resultado = $db->prepare("SELECT * FROM bodyfit.tipo_de_treino");
                    $resultado->execute();
                    $row = $resultado->fetchAll(PDO::FETCH_ASSOC);

                    foreach ($row as $linha) {
                        echo "<option value=\"{$linha['nome']}\">{$linha['nome']}</option>";
                    }
                    ?>
                </select>
            </div>
            <button class="bg-blue-600 rounded-lg shadow-lg flex items-center justify-center p-2 mt-3" >Cadastro Aluno</button>
        </form>
    </div>
</body>

</html>