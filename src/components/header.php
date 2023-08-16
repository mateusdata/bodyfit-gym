<?php
if (!isset($_SESSION['email'])) {
} else {
  if (isset($_SESSION['usuario'])) {
    $usuario = $_SESSION['usuario'][0];

    if ($usuario['tipo_user'] == "personal") {
      // header('Location: /index.php');

    };
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    var dropdownVisible = false; 

    function toggleDropdown() {
        var dropdown = document.getElementById('myDropdown');
        if (dropdownVisible) {
            dropdown.classList.add('hidden'); 
        } else {
            dropdown.classList.remove('hidden'); 
        }
        dropdownVisible = !dropdownVisible; 
    }

    function toggleMenu() {
      alert("teste")
        var dropdown = document.getElementById('menu');
        if (dropdownVisible) {
            dropdown.classList.add('hidden'); 
        } else {
            dropdown.classList.remove('hidden'); 
        }
        dropdownVisible = !dropdownVisible; 
    }
</script>




</head>

<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <button  onclick="toggleMenu()" type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Abrir menu</span>

          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>

          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="">
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <?php

            if (isset($_SESSION['usuario'])) {
              if ($usuario['tipo_user'] == "personal") {
                echo '<a href="/index.php" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Pagina inicial</a>';
                echo '<a href="../../src/pages/registeringTraining.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Adição de treinos</a>';
                echo '<a href="../../src/pages/registeringTraining.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Gerenciar ususarios</a>';
                echo '<a href="../../src/pages/contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contato</a>';
              } else if ($usuario['tipo_user'] == "aluno") {
                echo '<a href="/index.php" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Pagina inicial</a>';
                echo '<a href="../../src/pages/listTraining.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Ficha de treino</a>';
                echo '<a href="../../src/pages/services.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Serviços</a>';
                echo '<a href="../../src/pages/myData.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Meus dados</a>';
              }
            } else {
              echo '<a href="/index.php" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Pagina inicial</a>';
              echo '<a href="../../src/pages/about.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Sobre</a>';
              echo '<a href="../../src/pages/services.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Serviços</a>';
              echo '<a href="../../src/pages/contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contato</a>';
            }


            ?>



          </div>
        </div>
      </div>
      <?php

      if (isset($_SESSION['usuario'])) {
        if (isset($usuario)) {
          $teste = substr($usuario['nome'], 0, 1);
          echo '<div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">';
          echo '<p class="hidden sm:block text-bold text-white text-1xl ' . ($usuario['tipo_user'] == "aluno" ? 'aluno-style' : 'admin-style') . '">';
          echo ($usuario['tipo_user'] == "aluno") ? 'Aluno: ' : 'Administrador: ';
          echo $usuario['nome'];
          echo ' ';
          echo '<span onclick="toggleDropdown()"  class=" inline-flex items-center justify-center h-[2.200rem] w-[2.200rem] rounded-full bg-orange-600">
                    <button class=" hidden sm:block font-medium text-white leading-none">' . $teste . '</button>

                    <div id="myDropdown"  class="hidden absolute right-0 top-12 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                    <!-- Active: "bg-gray-100", Not Active: "" -->
                    <a href="/index.php" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Home</a>
                    <a href="/src/pages/myData.php" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Sua conta</a>
                    <a  href="../../src/pages/logout.php"" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sair</a>
                  </div>
                  </span>';
          echo '</p>';
          echo '</div>';

          
        }
      } else {
        echo '<a  href="/src/pages/loginForm.php" class="text-white bg-gradient-to-r tt-2 from-purple-500 via-purple-600 to-purple-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 shadow-lg mt-2 shadow-purple-500/50 dark:shadow-lg dark:shadow-purple-800/80 font-medium rounded-lg text-sm px-5 py-1.5 text-center mr-2 mb-1">Entrar</a>

      ';
      }
      ?>
     
    </div>
  </div>

  <div class="sm:hidden" id="menu">
    <div class="space-y-1 px-2 pb-4 pt-2">
      <?php

      if (isset($_SESSION['usuario'])) {
        if ($usuario['tipo_user'] == "personal") {
          echo '<a href="/index.php" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium">Pagina inicial</a>';
          echo '<a href="../../src/pages/registeringTraining.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Adição de treinos</a>';
          echo '<a href="../../src/src/pages/registeringTraining.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Gerenciar ususarios</a>';
          echo '<a href="../../src/pages/contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contato</a>';
        } else if ($usuario['tipo_user'] == "aluno") {
          echo '<a href="/index.php" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium">Pagina inicial</a>';
          echo '<a href="../../src/pages/listTraining.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Ficha de treino</a>';
          echo '<a href="../../src/pages/services.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Serviços</a>';
          echo '<a href="../../src/pages/myData.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Meus dados</a>';
        }
      } else {
        echo '<a href="/index.php" class="bg-gray-900 text-white block rounded-md px-3 py-2 text-base font-medium">Pagina inicial</a>';
        echo '<a href="../../src/pages/about.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Sobre</a>';
        echo '<a href="../../src/pages/services.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Serviços</a>';
        echo '<a href="../../src/pages/contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Contato</a>';
      }
      ?>
    </div>
  </div>
</nav>
</body>

</html>