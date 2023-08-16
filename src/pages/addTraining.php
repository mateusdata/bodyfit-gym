<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Treino</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto p-6">
        <h1 class="text-2xl font-bold mb-4">Formulário de Treino</h1>
        <form action="../../api//addTraining.php" method="post" class="bg-white p-4 rounded shadow-md">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="dia_semana">Dia da Semana:</label>
                <select name="dia_semana" class="w-full border rounded p-2">
                    <option value="Segunda">Segunda-feira</option>
                    <option value="Terca">Terça-feira</option>
                    <option value="Quarta">Quarta-feira</option>
                    <option value="Quinta">Quinta-feira</option>
                    <option value="Sexta">Sexta-feira</option>
                </select>
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="exercicio">Exercício:</label>
                <input type="text" name="exercicio" class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="serie">Série:</label>
                <input type="text" name="serie" class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="modelo_treino">Modelo de Treino:</label>
                <select name="modelo_treino" class="w-full border rounded p-2">
                    <option value="treino_iniciante">Treino iniciante</option>
                    <option value="treino_intermediario">Treio intermediario</option>
                    <option value="treino_avancado">Treino avançado</option>
                </select>
            </div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Inserir</button>
        </form>

        <?php
        if (isset($_GET['success']) && $_GET['success'] == 1) {
            echo "<p class='text-green-500'>Inserção bem-sucedida</p>";
        } elseif (isset($_GET['error']) && $_GET['error'] == 1) {
            echo "<p class='text-red-500'>Erro ao inserir registro</p>";
        }
        ?>
    </div>
</body>

</html>