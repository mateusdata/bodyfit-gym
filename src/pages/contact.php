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
    <link rel="icon" type="image/png" sizes="16x16" href="https://travelpedia.com.br/wp-content/uploads/2018/03/academia-icon.png">

</head>

<body>
    <?php include("../components/header.php") ?>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl lg:max-w-5xl mx-auto">
            <div class="text-center">
                <h1 class="text-3xl font-bold text-gray-800 sm:text-4xl dark:text-white">
                    Preencher o formulário

                </h1>
                <p class="mt-1 text-gray-600 dark:text-gray-400">
                    Adoraríamos conversar sobre como podemos ajudá-lo. </p>
            </div>

            <div class="mt-12 grid items-center lg:grid-cols-2 gap-6 lg:gap-16">

                <div class="flex flex-col border rounded-xl p-4 sm:p-6 lg:p-8 dark:border-gray-700">
                    <h2 class="mb-8 text-xl font-semibold text-gray-800 dark:text-gray-200">
                        Preencher o formulário
                    </h2>

                    <form>
                        <div class="grid gap-4">

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label for="hs-firstname-contacts-1" class="sr-only">Primeiro Name</label>
                                    <input type="text" name="hs-firstname-contacts-1" id="hs-firstname-contacts-1"
                                        class="py-3 px-4 block w-full border border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        placeholder="Primeiro Nome">
                                </div>

                                <div>
                                    <label for="hs-lastname-contacts-1" class="sr-only">Utimo Name</label>
                                    <input type="text" name="hs-lastname-contacts-1" id="hs-lastname-contacts-1"
                                        class="py-3 px-4 block w-full border border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                        placeholder="utimo Nome">
                                </div>
                            </div>


                            <div>
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" autocomplete="email"
                                    class="py-3 px-4 block w-full border border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Email">
                            </div>

                            <div>
                                <label for="celular" class="sr-only">Celular</label>
                                <input type="text" name="celular" id="celular"
                                    class="py-3 px-4 block w-full border border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Número de telefone">
                            </div>

                            <div>
                                <label for="hs-about-contacts-1" class="sr-only">Detalhes</label>
                                <textarea id="hs-about-contacts-1" name="hs-about-contacts-1" rows="4"
                                    class="py-3 px-4 block w-full border border-gray-400 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-slate-900 dark:border-gray-700 dark:text-gray-400"
                                    placeholder="Details"></textarea>
                            </div>
                        </div>


                        <div class="mt-4 grid">
                            <button type="submit"
                                class="inline-flex justify-center items-center gap-x-3 text-center bg-blue-600 hover:bg-blue-700 border border-transparent text-sm lg:text-base text-white font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-blue-600 focus:ring-offset-2 focus:ring-offset-white transition py-3 px-4 dark:focus:ring-offset-gray-800">Enviar
                                consulta
                            </button>
                        </div>

                        <div class="mt-3 text-center">
                            <p class="text-sm text-gray-500">
                            Entraremos em contato com você em 1 a 2 dias úteis.
                            </p>
                        </div>
                    </form>
                </div>


                <div class="divide-y divide-gray-200 dark:divide-gray-800">

                    <div class="flex gap-x-7 py-6">
                        <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                            <path
                                d="M5.255 5.786a.237.237 0 0 0 .241.247h.825c.138 0 .248-.113.266-.25.09-.656.54-1.134 1.342-1.134.686 0 1.314.343 1.314 1.168 0 .635-.374.927-.965 1.371-.673.489-1.206 1.06-1.168 1.987l.003.217a.25.25 0 0 0 .25.246h.811a.25.25 0 0 0 .25-.25v-.105c0-.718.273-.927 1.01-1.486.609-.463 1.244-.977 1.244-2.056 0-1.511-1.276-2.241-2.673-2.241-1.267 0-2.655.59-2.75 2.286zm1.557 5.763c0 .533.425.927 1.01.927.609 0 1.028-.394 1.028-.927 0-.552-.42-.94-1.029-.94-.584 0-1.009.388-1.009.94z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Base de conhecimento</h3>
                            <p class="mt-1 text-sm text-gray-500">Estamos aqui para ajudar com qualquer dúvida ou código</p>
                            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200"
                                href="#">
                                Entre em contato com o suporte
                                <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>



                    <div class="flex gap-x-7 py-6">
                        <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">FAQ</h3>
                            <p class="mt-1 text-sm text-gray-500">Pesquise nosso FAQ para obter respostas para qualquer coisa que você possa perguntar
                            </p>
                            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200"
                                href="#">
                                Perguntas frequentes
                                <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>



                    <div class=" flex gap-x-7 py-6">
                        <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M6 9a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3A.5.5 0 0 1 6 9zM3.854 4.146a.5.5 0 1 0-.708.708L4.793 6.5 3.146 8.146a.5.5 0 1 0 .708.708l2-2a.5.5 0 0 0 0-.708l-2-2z" />
                            <path
                                d="M2 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2zm12 1a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V3a1 1 0 0 1 1-1h12z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Possiveis APIs do desenvolvedor</h3>
                            <p class="mt-1 text-sm text-gray-500">EM breve disponivel</p>
                            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200"
                                href="#">
                                Contate nos
                                <svg class="w-2.5 h-2.5 transition ease-in-out group-hover:translate-x-1" width="16"
                                    height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M0.975821 6.92249C0.43689 6.92249 -3.50468e-07 7.34222 -3.27835e-07 7.85999C-3.05203e-07 8.37775 0.43689 8.79749 0.975821 8.79749L12.7694 8.79748L7.60447 13.7596C7.22339 14.1257 7.22339 14.7193 7.60447 15.0854C7.98555 15.4515 8.60341 15.4515 8.98449 15.0854L15.6427 8.68862C16.1191 8.23098 16.1191 7.48899 15.6427 7.03134L8.98449 0.634573C8.60341 0.268455 7.98555 0.268456 7.60447 0.634573C7.22339 1.00069 7.22339 1.59428 7.60447 1.9604L12.7694 6.92248L0.975821 6.92249Z"
                                        fill="currentColor" />
                                </svg>
                            </a>
                        </div>
                    </div>



                    <div class=" flex gap-x-7 py-6">
                        <svg class="flex-shrink-0 w-6 h-6 mt-1.5 text-gray-800 dark:text-gray-200"
                            xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path
                                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                        </svg>
                        <div>
                            <h3 class="font-semibold text-gray-800 dark:text-gray-200">Contacte-nos por e-mail</h3>
                            <p class="mt-1 text-sm text-gray-500">Se você deseja nos escrever um e-mail, por favor use
                            </p>
                            <a class="mt-2 inline-flex items-center gap-x-2 text-sm font-medium text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200"
                                href="#">
                                mateuspele2015@gmail.com
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include("../components/footer.php") ?>
</body>

</html>