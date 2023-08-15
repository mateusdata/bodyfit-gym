<?php
session_start();
include("./databases/database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id']; // Recebe o ID do usuário a ser excluído
  print_r($id);
    $query = $db->prepare("DELETE FROM alunos WHERE id = :id");
    $query->bindValue(':id', $id);
    $result = $query->execute();

    if ($result) {
        echo "Exclusão bem-sucedida";
    } else {
        echo "Erro ao excluir registro: " . $query->errorInfo()[2];
    }

    exit();
}
?>
