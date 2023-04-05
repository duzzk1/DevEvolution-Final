<?php
date_default_timezone_set('America/Sao_Paulo');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto final - DevEvolution!</title>
    <meta name="description" content="Projeto feito pelo Eduardo Santos válido como projeto final do curso de PHP Dev Evolution!">
    <link rel="stylesheet" href="../../styles/main.css">
    <script src="https://kit.fontawesome.com/27f286315e.js" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <nav>
            <a href="../index/index.php"><img src="logo.svg" alt="Logo do Projeto"></a>
            <ul>
                <li class="listitem"><a href="../index/index.php">Inicio</a></li>
                <li class="listitem"><a href="../index/index.php#sobre">Sobre</a></li>
                <li class="listitem"><a href="../index/index.php#contato">Contato</a></li>

            </ul>
            <div class="btnConfig">
                <?php
                if (@$_SESSION['usuario']) {
                    print "<a href='../session/closeSession.php' class='entrarBtn'>" . $_SESSION['usuario'] . "</a>";
                }

                if (@$_SESSION['admin'] == 1) {
                    echo ' <a href="../admin/admin.php"><i class="fa fa-gear" style="color:white; font-size:26px;"></i></a>';
                } ?>
            </div>
        </nav>
    </header>