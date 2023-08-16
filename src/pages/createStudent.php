<?php
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
    <link rel="icon" type="image/png" sizes="16x16" href="https://travelpedia.com.br/wp-content/uploads/2018/03/academia-icon.png">


</head>

<body>
    <section class="bg-white dark:bg-gray-50">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <div class="flex flex-row flex-nowrap gap-2 items-center  mb-4">
                <svg fill="none" stroke="currentColor" class="text-orange-600 w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                </svg>

                <h2 class=" text-xl font-bold text-gray-900 dark:text-white">Cadastro de usuarios </h2>
            </div>
            <hr class="mb-4">

            <form action="../../api/registerStudent.php" method="POST">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="nome" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome</label>
                        <input type="text" name="nome" id="nome" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Nome do aluno" required="">
                    </div>
                    <div class="w-full">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Email" required="">
                    </div>
                    <div class="w-full">
                        <label for="senha" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">senha</label>
                        <input type="text" name="senha" id="senha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Senha" required="">
                    </div>
                    <div class="w-full">
                        <label for="objetivo" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">objetivo</label>
                        <input type="text" name="objetivo" id="objetivo" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Objetivo" required="">
                    </div>
                    <div>
                        <label for="tipo_treino" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">tipo_treino</label>
                        <select required="" id="tipo_treino" name="tipo_treino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
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

                </div>
                <div class="flex justify-between items-center">
                    <button class="inline-flex items-center bg-purple-600 px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-black bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Cadastro Aluno
                    </button>
                    <p id="closeDialog" class="cursor-pointer inline-flex items-center bg-red-400 px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Sair
                    </p>
                    <script>
                        const myDialog = document.getElementById('myDialog');
                        const openDialogButton = document.getElementById('openDialog');
                        const closeDialogButton = document.getElementById('closeDialog');
                        openDialogButton.addEventListener('click', () => {
                            myDialog.showModal();
                        });
                        closeDialogButton.addEventListener('click', () => {
                            myDialog.close();
                        });
                    </script>


                </div>
            </form>



        </div>
    </section>
</body>

</html>