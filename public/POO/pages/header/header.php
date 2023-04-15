<?php
// Define o fuso horário para São Paulo
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final - DevEvolution</title>
    <meta name="description" content="Projeto feito pelo Eduardo Santos válido como projeto final do curso de PHP Dev Evolution!">
    <link rel="shortcut icon" href="../../assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../../styles/main.css">
    <script src="https://kit.fontawesome.com/27f286315e.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <!-- Logo do Projeto -->
            <a class="logoDu" href="/"><img src="../../assets/img/logo.svg" alt="Logo do Projeto"></a>
            <!-- Menu de Navegação -->
            <ul>
                <li class="listitem"><a href="/">Inicio</a></li>
                <li class="listitem"><a href="/#sobre">Sobre</a></li>
                <li class="listitem"><a href="/#contato">Contato</a></li>
                <li class="listitem"><a href="/#documentacao">Documentação</a></li>
            </ul>

            <!-- Botão de Configurações -->
            <div class="btnConfig">
                <?php
                $urlExplode = [' ', ' ', ' ', ' '];
                // Verifica se há uma sessão ativa para mostrar o nome do usuário
                if (@$_SESSION['usuario']) {
                    print "<a href='../../pages/session/closeSession.php' class='entrarBtn' onmouseover='this.innerHTML=\"Sair\"' onmouseout='this.innerHTML=\"" . $_SESSION['usuario'] . "\"'>" . $_SESSION['usuario'] . "</a>";
                }

                // Verifica se o usuário é um administrador para mostrar o botão de configurações
                if (@$_SESSION['admin'] == 1) {
                    $url = $_SERVER['REQUEST_URI'];
                    $urlExplode = explode('/', $url);
                    if($_SESSION['config'] !== 'true') {
                        echo ' <a href="pages/admin/admin.php"><i class="fa fa-gear" style="color:white; font-size:26px;"></i></a>';
                    }               
                }
                ?>
            </div>
        </nav>
    </header>