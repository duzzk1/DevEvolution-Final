<?php
// Inicia a sessão do usuário
session_start();
?>
<main>
    <?php
    // Verifica se o usuário está logado
    if (isset($_SESSION['usuario'])) {
        // Inclui o arquivo de início
        include('../inicio/inicio.php');
    } else {
        // Inclui o arquivo de login
        include('../login/login.php');
    }
    ?>
</main>