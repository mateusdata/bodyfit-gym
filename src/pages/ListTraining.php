<?php
session_start();
if (!isset($_SESSION['email'])) {
    echo "<script>alert('Você precisa fazer login para acessar esta página');</script>";
    header('Location: ./src/pages/loginForm.php');
    exit();
} else {
    if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'][0];

        if ($usuario['tipo_user'] == "personal") {
            header('Location: /index.php');

        }
        ;
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Treino</title>
    <link rel="icon" type="image/png" sizes="16x16" href="https://travelpedia.com.br/wp-content/uploads/2018/03/academia-icon.png">

</head>

<body>
    <?php include("../components/header.php") ?>

    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <?php echo "<h2 class=\"text-2xl font-bold md:text-4xl md:leading-tight dark:text-white\">Bem-vindo " . ucfirst($usuario['nome']) . "</h2>"; ?>
            <?php echo "<p class=\"mt-1  font-bold dark:text-gray-800 text-md\">Tipo de treino " . ucfirst($usuario['tipo_treino']) . "</p>"; ?>
  
            <p class="mt-1 text-gray-600 dark:text-gray-400">Seu treino semana do Sistema bodyfit</p>
        </div>


        <div class="max-w-75 mx-auto">
            <div class="hs-accordion-group">
                <?php
                include("../../api/databases/database.php");

                $query = "SELECT * FROM $usuario[tipo_treino]";
                $resultado = $db->prepare($query);

                $resultado->execute();
                $treinos = $resultado->fetchAll(PDO::FETCH_ASSOC);

                $treinosPorDia = array(
                    "Segunda-feira" => array(),
                    "Terça-feira" => array(),
                    "Quarta-feira" => array(),
                    "Quinta-feira" => array(),
                    "Sexta-feira" => array()
                );

                // Mapear valores de dia_semana para nomes completos dos dias da semana
                $diaSemanaMapping = array(
                    "Segunda" => "Segunda-feira",
                    "Terca" => "Terça-feira",
                    "Quarta" => "Quarta-feira",
                    "Quinta" => "Quinta-feira",
                    "Sexta" => "Sexta-feira"
                );

                // Preencher o array $treinosPorDia com base nos dados do banco de dados
                foreach ($treinos as $treino) {
                    $diaSemana = $treino['dia_semana'];
                    if (array_key_exists($diaSemana, $diaSemanaMapping)) {
                        $diaSemanaCompleto = $diaSemanaMapping[$diaSemana];
                        $exercicio = $treino['exercicio'];
                        $serie = $treino['serie'];
                        $nome = $treino['nome'];

                        // Construir a descrição do treino
                        $treinoDescricao = "$exercicio ($serie) - $nome";

                        // Adicionar o treino ao array correspondente ao dia da semana
                        if (array_key_exists($diaSemanaCompleto, $treinosPorDia)) {
                            $treinosPorDia[$diaSemanaCompleto][] = $treinoDescricao;
                        }
                    }
                }

                foreach ($treinosPorDia as $dia => $exercicios) {
                    $diaSlug = strtolower(str_replace(' ', '-', $dia));

                    echo '<div class="hs-accordion rounded-xl p-6 dark:hs-accordion-active:bg-white/[.05]">';
                    echo '<button class="hs-accordion-toggle group pb-3 inline-flex items-center justify-between gap-x-3 w-full  md:text-lg font-semibold text-left text-gray-800 transition hover:text-gray-500 dark:text-gray-200 dark:hover:text-gray-400" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-' . $diaSlug . '">';
                    echo $dia;
                    echo '<svg class="hs-accordion-active:hidden block w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 5L8.16086 10.6869C8.35239 10.8637 8.64761 10.8637 8.83914 10.6869L15 5" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg><svg class="hs-accordion-active:block hidden w-3 h-3 text-gray-600 group-hover:text-gray-500 dark:text-gray-400" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M2 11L8.16086 5.31305C8.35239 5.13625 8.64761 5.13625 8.83914 5.31305L15 11" stroke="currentColor" stroke-width="2" stroke-linecap="round" /></svg></button>';
                    echo '<div id="hs-basic-with-title-and-arrow-stretched-collapse-' . $diaSlug . '" class="hs-accordion-content w-full  overflow-hidden transition-[height] duration-300">';
                    echo '<p class="text-gray-800 dark:text-gray-200">';

                    foreach ($exercicios as $exercicio) {
                        echo $exercicio . '<br>';
                    }

                    echo '</p>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>


            <script>
                const accordions = document.querySelectorAll('.hs-accordion');

                accordions.forEach(accordion => {
                    const toggle = accordion.querySelector('.hs-accordion-toggle');
                    const content = accordion.querySelector('.hs-accordion-content');

                    toggle.addEventListener('click', () => {
                        accordions.forEach(otherAccordion => {
                            if (otherAccordion !== accordion) {
                                otherAccordion.classList.remove('active');
                                otherAccordion.querySelector('.hs-accordion-content').style.maxHeight = '0';
                            }
                        });

                        accordion.classList.toggle('active');
                        if (accordion.classList.contains('active')) {
                            content.style.maxHeight = content.scrollHeight + 'px';
                        } else {
                            content.style.maxHeight = '0';
                        }
                    });

                    // Feche os itens do acordeão ao carregar a página
                    content.style.maxHeight = '0';
                });
            </script>


        </div>

        <?php include("../components/footer.php") ?>
</body>

</html>