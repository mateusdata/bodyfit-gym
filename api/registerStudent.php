<?php
session_start();
include("./databases/database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $objetivo = $_POST['objetivo'];
    $tipo_treino = $_POST['tipo_treino'];
    
    $query = $db->prepare("INSERT INTO alunos (nome, email, senha, objetivo, tipo_treino, id_academia, tipo_user)
    VALUES (:nome, :email, :senha, :objetivo, :tipo_treino, :id_academia, :tipo_user)");
    
    $query->bindValue(':nome', $nome);
    $query->bindValue(':email', $email);
    $query->bindValue(':senha', $senha);
    $query->bindValue(':objetivo', $objetivo);
    $query->bindValue(':tipo_treino', $tipo_treino);
    $query->bindValue(':id_academia', 1);  
    $query->bindValue(':tipo_user', 'aluno'); 
    
    $result = $query->execute();
    

    if ($result) {
        echo "Inserção bem-sucedida";
    } else {
        echo "Erro ao inserir registro: " . $query->errorInfo()[2];
    }
}

exit();
?>