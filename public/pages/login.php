<?php
session_start();

include('./header.php');
if (isset($_POST['usuario'])){
    $usuario = $_POST['usuario'];
    $_SESSION['usuario'] = $usuario;
    header('location: ../index.php');
}


?>

<form class="formLogin" action="" method="post">
    <div class="borderForm">
        <h1>Acessar:</h1>
    <label for="usuario">Usuário:</label>
    <input type="text" name="usuario" id="usuario" required>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password" required>
    <input type="submit" value="Entrar">
    </div>
</form>