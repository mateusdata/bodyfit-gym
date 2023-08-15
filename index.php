<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Página Principal</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="https://travelpedia.com.br/wp-content/uploads/2018/03/academia-icon.png">

</head>

<body>
    <?php include("./src/components/header.php") ?>
    <div>
        <?php include("./src/components/home.php") ?>
        <a class="fixed top-[90%] w-20 left-[90%] text-white text-md
         hover:bg-blue-600 animate-pulse bottom-0 bg-red-800 p-2 rounded-lg shadow-xl 
         flex items-center justify-center h-10" href="./src/pages/logout.php">Sair</a>
    </div>
    <?php include("./src/components/details.php") ?>
    <?php include("./src/components/footer.php") ?>
</body>

</html>