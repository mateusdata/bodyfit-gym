<!DOCTYPE html>
<html>

<head>
    <title>Formulário de Treino</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <section class="bg-white dark:bg-gray-50">
        <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
            <div class="flex flex-row flex-nowrap gap-2 items-center  mb-4">
                <svg  fill="none" stroke="currentColor" class="text-orange-600 w-6 h-6" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m3.75 9v6m3-3H9m1.5-12H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                </svg>

                <h2 class=" text-xl font-bold text-gray-900 dark:text-white">Cadastro de Treinos </h2>
            </div>
            <hr class="mb-4">
            <form action="../../api//addTraining.php" method="POST">
                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

                    <div class="w-full">
                        <label for="exercicio" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Exercicio</label>
                        <input type="text" name="exercicio" id="exercicio" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="exercicio" required="">
                    </div>
                    <div class="w-full">
                        <label for="serie" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Serie</label>
                        <input type="text" name="serie" id="serie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="serie" required="">
                    </div>

                    <div>
                        <label for="dia_semana" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Dia da semana</label>
                        <select required="" id="dia_semana" name="dia_semana" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="Segunda">Segunda-feira</option>
                            <option value="Terca">Terça-feira</option>
                            <option value="Quarta">Quarta-feira</option>
                            <option value="Quinta">Quinta-feira</option>
                            <option value="Sexta">Sexta-feira</option>
                        </select>
                    </div>

                    <div>
                        <label for="modelo_treino" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">modelo_treino</label>
                        <select required="" id="modelo_treino" name="modelo_treino" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option value="treino_iniciante">Treino iniciante</option>
                            <option value="treino_intermediario">Treio intermediario</option>
                            <option value="treino_avancado">Treino avançado</option>
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