<?php
session_start();
include("../api/databases/database.php");


// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $tipo_user = $_POST['tipo_user'];
    $tabela = $tipo_user == "adm" ? "administrador" : "alunos";
    $queryUser = $tipo_user == "adm" ? "administrador.nome, senha, email, administrador.id, tipo_user, academia.nome AS nome_academia" : "alunos.nome, senha, email, alunos.id, tipo_user, tipo_treino, academia.nome AS nome_academia";

    $query = "SELECT $queryUser FROM $tabela";
    $query .= " INNER JOIN academia ON $tabela.id_academia = academia.id";
    $query .= " WHERE email = :email AND senha = :senha";
    $resultado = $db->prepare($query);
    $resultado->bindValue("email", $email);
    $resultado->bindValue("senha", $senha);
    $resultado->execute();
    $row = $resultado->fetchAll(PDO::FETCH_ASSOC);

    //print_r($row);

    $_SESSION['usuario'] = $row;
    /* $teste =  $_SESSION['usuario'][0];
     if($teste['nome']== "rabelo"){
        print_r("true");
        return;
     };
     print_r("false");
   /* if (isset($_SESSION['usuario'])) {
        $usuario = $_SESSION['usuario'][0]; 
        echo "Nomesss: " . $usuario['nome'];
        echo "Emaisssl: " . $usuario['email'];
        echo "IDsss: " . $usuario[''];
    }

*/


    if (!empty($row)) {

        $_SESSION['email'] = $email;
        $tipo_user == "adm" ? header('Location: ../index.php') : header('Location: ../src/pages/ListTraining.php');

        $row = json_encode($row);
        header("Content-Type: application/json");
        exit();
    } else {
        $_SESSION['login_erro'] = 'Usuário ou senha incorretos. Tente novamente.';
    }
}
// Redirecionar para o formulário de login
header('Location: ../src/pages/loginForm.php');
exit();
?>