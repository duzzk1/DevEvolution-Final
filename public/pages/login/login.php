<link rel="stylesheet" href="../../styles/Login/login.css">
<div class="containerForm">
    <img src="../../assets/img/fundoInicio.jpg" alt="FUNDO">
    <form action="../../db/login.php" method="POST">
        <h1>Bem vindo!</h1>
        <input type="text" name="usuario" id="usuario" required>
        <span>Usuário:</span>
        <input type="password" name="password" id="password" required>
        <span>Senha:</span>
        <div class="submitDiv">
            <input type="submit" value="Entrar" name="login">
        </div>
        <a href="../registro/registro.php">Cadastre-se</a>
    </form>
</div>