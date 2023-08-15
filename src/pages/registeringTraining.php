<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar treino</title>
    <link rel="icon" type="image/png" sizes="16x16" href="https://travelpedia.com.br/wp-content/uploads/2018/03/academia-icon.png">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        function deleteUser(id) {
            if (confirm("Tem certeza que deseja excluir este usuário?")) {
                const url = `../../api/deleteUser.php`;
                const formData = new FormData();
                formData.append('id', id);
                fetch(url, {
                        method: 'POST',
                        body: formData
                    })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error(`Erro ao excluir usuário: ${response.status} ${response.statusText}`);
                        }
                        return response.text(); // Seu endpoint retorna um texto (ex: "Exclusão bem-sucedida" ou "Erro ao excluir registro...")
                    })
                    .then(message => {
                        alert(message);
                        window.location.reload();
                    })
                    .catch(error => {
                        console.error(error);
                        alert("Erro ao excluir usuário. Por favor, tente novamente mais tarde.");
                    });
            }
        }
    </script>



</head>

<body>
    <?php include("../components/header.php") ?>





    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">

        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-900 dark:border-gray-700">

                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-gray-700">
                            <div>
                                <h2 class="text-xl font-semibold text-gray-800 dark:text-gray-200">
                                    Alunos cadastrados na academia
                                </h2>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    usuários atualmente cadastrados na<a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline font-medium" href="#">Academia</a>
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <a class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800" href="#">
                                        Visualizar tudo
                                    </a>

                                    <a id="openDialog" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800" href="#">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M2.63452 7.50001L13.6345 7.5M8.13452 13V2" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                                        </svg>
                                        Criar usuario
                                    </a>
                                    <dialog id="myDialog" class="rounded-2xl shadow-2xl w-[80%] h-[80%]">
                                        <?php include("./registeringUsers.php") ?>
                                       <div class="p-5 shadow-md rounded-md w-full flex justify-end">
                                       <button class="p-5 shadow-md rounded-md bg-red-500 w-50 h-4 flex  items-center  justify-center" id="closeDialog">Fechar</button>
                                       </div>
                                    </dialog>
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
                            </div>
                        </div>
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                id
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                nome
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                email
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-left">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-gray-200">
                                                tipo
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-right"></th>
                                </tr>
                            </thead>

                            <?php
                            include("../../api/databases/database.php");
                            $query = $db->prepare("SELECT * FROM bodyfit.alunos");
                            $query->execute();
                            $row = $query->fetchAll(PDO::FETCH_ASSOC);
                            print_r($row);
                            foreach ($row as $key => $value) {
                            ?>
                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                    <tr>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-600 dark:text-gray-400"><?= $value['id'] ?> </span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <div class="flex items-center gap-x-2">
                                                    <span class="inline-flex items-center justify-center h-[1.5rem] w-[1.5rem] rounded-full bg-orange-500">
                                                        <span class="font-medium text-white leading-none"><?= strtoupper(substr($value['nome'], 0, 1)) ?></span>
                                                    </span>
                                                    <div class="grow">
                                                        <span class="text-sm text-gray-600 dark:text-gray-400"><?= $value['nome'] ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center gap-x-2.5 py-2 px-2.5 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:ring-offset-2 focus:ring-offset-white transition-all text-xs dark:bg-gray-800 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-gray-700 dark:focus:ring-offset-gray-800">
                                                    <?= $value['email'] ?>
                                                    <svg class="h-3.5 w-3.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                                                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </td>

                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-3">
                                                <span class="text-sm text-gray-600 dark:text-gray-400"> <?= $value['tipo_treino'] ?></span>
                                            </div>
                                        </td>
                                        <td class="h-px w-px whitespace-nowrap">
                                            <div class="px-6 py-1.5">
                                                <div class="hs-dropdown relative inline-block [--placement:bottom-right]">
                                                    <button onclick="deleteUser('<?= $value['id'] ?>')" id="hs-table-dropdown-6" type="button" class="text-red-500 hs-dropdown-toggle border-red-300 py-<?= $value['tipo_treino'] ?>5 px-2 inline-flex justify-center items-center gap-2 rounded-md  align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                        Apagar
                                                    </button>

                                                    <button onclick="deleteUser('<?= $value['id'] ?>')" id="hs-table-dropdown-6" type="button" class="hs-dropdown-toggle border-red-300 py-1.5 px-2 inline-flex justify-center items-center gap-2 rounded-md text-gray-700 align-middle focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                                        Editar
                                                    </button>



                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>


                            <?php
                            }

                            ?>
                        </table>
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-gray-700">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400">
                                    <span class="font-semibold text-gray-800 dark:text-gray-200">6</span> results
                                </p>
                            </div>

                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                                        </svg>
                                        Proximo
                                    </button>

                                    <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-2 rounded-md border font-medium bg-white text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-blue-600 transition-all text-sm dark:bg-slate-900 dark:hover:bg-slate-800 dark:border-gray-700 dark:text-gray-400 dark:hover:text-white dark:focus:ring-offset-gray-800">
                                        Anterior
                                        <svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../components/footer.php") ?>
</body>

</html>