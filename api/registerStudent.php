<?php
session_start();
include("./databases/database.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $objetivo = $_POST['objetivo'];
    $tipo_treino = $_POST['tipo_treino'];

    $query = $db->prepare("INSERT INTO alunos (nome, email, senha, objetivo, tipo_treino, id_academia)
    VALUES (:nome, :email, :senha, :objetivo, :tipo_treino, :id_academia)");

    $query->bindValue(':nome', $nome);
    $query->bindValue(':email', $email);
    $query->bindValue(':senha', $senha);
    $query->bindValue(':objetivo', $objetivo);
    $query->bindValue(':tipo_treino', $tipo_treino);
    $query->bindValue(':id_academia', 1); // Utilize um valor direto, não é necessário bindParam()

    $result = $query->execute();

    if ($result) {
        echo "Inserção bem-sucedida";
    } else {
        echo "Erro ao inserir registro: " . $query->errorInfo()[2];
    }

    echo $nome; // Imprime o valor do nome do aluno inserido


    // echo ($nome.  $email. $senha . $objetivo . $tipo_treino);

    if ($email === 'mateus' && $senha === '123') {
        // Autenticação bem-sucedida
        $_SESSION['email'] = $usuario;
        //header('Location: ../index.php');
        exit();
    } else {
        // Credenciais incorretas
        $_SESSION['login_erro'] = 'Usuário ou senha incorretos. Tente novamente.';
    }
}
// Redirecionar para o formulário de login
//header('Location: ../src/pages/loginForm.php');
exit();
?>