<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    </script>
</head>

<body>
    <section
        class="bg-gray-50 dark:bg-gray-900 h-screen bg-[url('https://www.recreiodajuventude.com.br/userfiles/conteudos/academia-sede-juventude2-1.jpg')] bg-no-repeat bg-center bg-cover">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <a href="#" class=" items-center mb-6 text-2xl font-semibold text-blue-900 dark:text-white hidden">
                <img class="w-8 h-8 mr-2" src="https://cdn-icons-png.flaticon.com/512/755/755298.png" alt="logo">
                Bem- vindo ao bodyfit
            </a>
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white text-center">
                        Fazer login como aluno
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="../../api/login.php" method="POST">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                                email</label>
                            <input type="text" id="email" name="email" required
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="mateus@data.com">
                        </div>
                        <div>
                            <label for="senha"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">senha</label>
                            <input type="password" id="senha" name="senha" placeholder="•••••s•••" required=""
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        </div>
                        <div>
                            <input  name="tipo_user" type="text" class="bg-red-600 hidden"  value="aluno" >
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Lembrar senha</label>
                                </div>
                            </div>
                            <a href="#" onclick="alert('Contate sua academia!!')"
                                class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">esqueceu
                                sua senha?</a>
                        </div>
                        <button type="submit"
                            class="w-full text-white bg-blue-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Entrar
                        </button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            voce é adiministrador? <a href="/src/pages/loginAdm.php"
                                class="font-medium text-red-600 hover:underline dark:text-primary-500">click
                                aqui</a>
                        </p>

                        <?php if (isset($_SESSION['login_erro'])): ?>
                            <p class="error">
                                <?php echo $_SESSION['login_erro']; ?>
                            </p>
                            <?php unset($_SESSION['login_erro']); ?>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>

</body>

</html>