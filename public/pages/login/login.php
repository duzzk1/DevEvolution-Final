<?php
include('../../db/conn.php'); // Inclui o arquivo de conexão com o banco de dados

// SELECT DO BANCO PARA VERIFICAR SE O USUÁRIO EXISTE!

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
        echo "<script>location.href='../main/main.php';</script>"; // Redireciona para a página principal

    } else {

        $alerta = "Usuário ou senha incorreta!";
    }
}
?>
<!-- Página de login -->
<link rel="stylesheet" href="../../styles/Login/login.css">
<div class="containerForm">
    <img src="../../assets/img/fundoInicio.jpg" alt="FUNDO">
    <form action="" method="POST">
        <h1>Bem vindo!</h1>
        <?php
        if (isset($alerta)) {
        ?>
            <p style="color: red;"><?php echo $alerta ?></p>
        <?php } ?>

        <input type="text" name="usuario" id="usuario" required> <!-- Campo de entrada de texto para o usuário -->
        <span>Usuário:</span> <!-- Descrição do campo de entrada de texto para o usuário -->
        <input type="password" name="password" id="password" required> <!-- Campo de entrada de senha -->
        <span>Senha:</span> <!-- Descrição do campo de entrada de senha -->
        <div class="submitDiv">
            <input type="submit" value="Entrar" name="login"> <!-- Botão de envio do formulário de login -->
        </div>
        <a href="../registro/registro.php">Cadastre-se</a> <!-- Link para a página de registro -->
    </form>
</div>