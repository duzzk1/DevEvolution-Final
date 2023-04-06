<?php


session_start(); //Inicia a sessão do usuário
include('../../db/conn.php'); //Inclui o arquivo de conexão com o banco de dados
if (isset($_POST['cadastra'])) { //Verifica se o formulário foi enviado
    $user = $_POST['usuario']; //Atribui o valor do campo de usuário para a variável $user
    $password = $_POST['password']; //Atribui o valor do campo de senha para a variável $password

    //Verifica se já existe um usuário com o mesmo nome no banco de dados
    $sql = "SELECT COUNT(*) FROM users WHERE user = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);
    $count = $stmt->fetchColumn();
    if ($count > 0) { //Se já existe um usuário com o mesmo nome
        // Exibe uma mensagem usuário já existente
        $alertaError = "Usuário já existe!";
        header("Refresh:2;");
    } else { //Se não existe um usuário com o mesmo nome
        //Insere o novo usuário e senha no banco de dados
        $sql = "INSERT INTO users (user,password) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user, $password]);
        // Exibe uma mensagem de sucesso e redireciona para a página de login
        $alertaSucess = "Usuário criado com sucesso!";
        header("Refresh:2; url=../../index.php");
    }
}

?>

<!-- CADASTRA NOVO USUÁRIO NO BANCO -->

<!-- Página de registro -->
<link rel="stylesheet" href="../../styles/Login/login.css">
<div class="containerForm">
    <img src="../../assets/img/fundoInicio.jpg" alt="FUNDO">
    <form action="" method="POST">
        <h1>Cadastre-se!</h1>
        <?php
        if (isset($alertaError)) {
        ?>
            <p style="color: red;"><?php echo $alertaError ?></p>
        <?php } elseif (isset($alertaSucess)) {
        ?>
            <p style="color: green;"><?php echo $alertaSucess ?></p>
        <?php } ?>
        <input type="text" name="usuario" id="usuario" required> <!-- Campo de entrada de texto para o usuário -->
        <span>Usuário:</span> <!-- Descrição do campo de entrada de texto para o usuário -->
        <input type="password" name="password" id="password" required> <!-- Campo de entrada de senha -->
        <span>Senha:</span> <!-- Descrição do campo de entrada de senha -->
        <div class="submitDiv">
            <input type="submit" value="Cadastrar" name="cadastra"> <!-- Botão de envio do formulário de registro -->
        </div>
        <a href="../../index.php">Voltar</a> <!-- Link para a página inicial -->
    </form>
</div>