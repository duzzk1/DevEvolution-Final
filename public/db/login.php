<?php
session_start(); // Inicia a sessão
include('./conn.php'); // Inclui o arquivo de conexão com o banco de dados

if (isset($_POST['login'])) { // Verifica se o formulário de login foi submetido
    $user = $_POST['usuario']; // Obtém o nome de usuário informado no formulário
    $password = $_POST['password']; // Obtém a senha informada no formulário

    $sql = "SELECT * FROM users WHERE user = ? AND password = ?"; // Prepara a consulta SQL para buscar o usuário no banco de dados

    $stmt = $pdo->prepare($sql); // Prepara a consulta SQL
    $stmt->execute([$user, $password]); // Executa a consulta SQL, passando os parâmetros necessários
    $result = $stmt->fetch(PDO::FETCH_ASSOC); // Obtém o resultado da consulta SQL

    if ($stmt->rowCount() > 0) { // Verifica se a consulta SQL retornou algum resultado
        $_SESSION['usuario'] = $result['user']; // Armazena o nome de usuário na sessão
        $_SESSION['admin'] = $result['isAdmin']; // Armazena o nível de permissão do usuário na sessão
        echo "<script>location.href='../pages/index/index.php';</script>"; // Redireciona para a página principal
    } else {
        echo "<script>alert('Usuário não encontrado!'); location.href='../pages/index/index.php';</script>"; // Exibe uma mensagem de erro e redireciona para a página principal
    }
}
