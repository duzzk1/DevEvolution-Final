<?php


session_start(); //Inicia a sessão do usuário
include('./conn.php'); //Inclui o arquivo de conexão com o banco de dados
if (isset($_POST['cadastra'])) { //Verifica se o formulário foi enviado
    $user = $_POST['usuario']; //Atribui o valor do campo de usuário para a variável $user
    $password = $_POST['password']; //Atribui o valor do campo de senha para a variável $password

    //Verifica se já existe um usuário com o mesmo nome no banco de dados
    $sql = "SELECT COUNT(*) FROM users WHERE user = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);
    $count = $stmt->fetchColumn();
    if ($count > 0) { //Se já existe um usuário com o mesmo nome
        // Exibe uma mensagem de alerta e redireciona para a página de registro
        print "<script>alert('Usuário já existe!'); location.href='../../pages/registro/registro.php';</script>";
    } else { //Se não existe um usuário com o mesmo nome
        //Insere o novo usuário e senha no banco de dados
        $sql = "INSERT INTO users (user,password) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user, $password]);
        // Exibe uma mensagem de sucesso e redireciona para a página de login
        print "<script>alert('Conta criada! Faça login!'); location.href='../../pages/login/login.php';</script>";
    }
}
