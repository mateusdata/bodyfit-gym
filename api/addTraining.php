<?php
session_start();
include("./databases/database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dia_semana = $_POST['dia_semana'];
    $exercicio = $_POST['exercicio'];
    $serie = $_POST['serie'];
    $modelo_treino = $_POST['modelo_treino'];
    $query = $db->prepare("INSERT INTO treino_intermediario (dia_semana, exercicio, serie, nome, nome_id)
    VALUES (:dia_semana, :exercicio, :serie, :nome, :nome_id)");
       

    $query->bindValue(':dia_semana', $dia_semana);
    $query->bindValue(':exercicio', $exercicio);
    $query->bindValue(':serie', $serie);
    $query->bindValue(':nome', $modelo_treino);  
    $query->bindValue(':nome_id', 1); 
    
    $result = $query->execute();
    print_r($result);

    if ($result) {
        echo "Inserção bem-sucedida";
    } else {
        echo "Erro ao inserir registro: " . $query->errorInfo()[2];
    }
}

exit();
?>
