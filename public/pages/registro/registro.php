<!-- Página de registro -->
<link rel="stylesheet" href="../../styles/Login/login.css">
<div class="containerForm">
    <img src="../../assets/img/fundoInicio.jpg" alt="FUNDO">
    <form action="../../db/cadastra.php" method="POST">
        <h1>Cadastre-se!</h1>
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