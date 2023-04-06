<!-- Página de login -->
<link rel="stylesheet" href="../../styles/Login/login.css">
<div class="containerForm">
    <img src="../../assets/img/fundoInicio.jpg" alt="FUNDO">
    <form action="../../db/login.php" method="POST">
        <h1>Bem vindo!</h1>
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