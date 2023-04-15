<?php
// Inicia a sessão do usuário
session_start();
$_SESSION['config'] = 'false';

?>
<main>
    <?php
    // Verifica se o usuário está logado
    if (isset($_SESSION['usuario'])) {
        // Inclui o arquivo de início
        include('./pages/inicio/inicio.php');
    } else {
        // Inclui o arquivo de login
        include('./pages/login/login.php');
    }
    
    ?>
</main>