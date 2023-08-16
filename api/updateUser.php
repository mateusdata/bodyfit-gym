<?php
session_start();
include("./databases/database.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $novoValor = $_POST['novoValor'];
    print_r($id.$novoValor);
    $query = $db->prepare("UPDATE alunos SET tipo_treino = :novoValor WHERE id = :id");
    $query->bindValue(':novoValor', $novoValor);
    $query->bindValue(':id', $id);
    $result = $query->execute();

    if ($result) {
        echo "Atualização bem-sucedida";
    } else {
        echo "Erro ao atualizar registro: " . $query->errorInfo()[2];
    }

    exit();
}
?>
