<link rel="stylesheet" href="../../styles/Login/login.css">
<div class="containerForm">
    <img src="../../assets/img/fundoInicio.jpg" alt="FUNDO">
    <form action="../../db/cadastra.php" method="POST">
        <h1>Cadastre-se!</h1>
        <input type="text" name="usuario" id="usuario" required>
        <span>Usuário:</span>
        <input type="password" name="password" id="password" required>
        <span>Senha:</span>
        <div class="submitDiv">
            <input type="submit" value="Cadastrar" name="cadastra">
        </div>
        <a href="../index/index.php">Voltar</a>
    </form>
</div>