<?php
session_start();
$_SESSION['config'] = 'true';

if (@$_SESSION['admin'] == 1) { // verifica se o usuário é um admin
    include('../header/header.php'); // inclui o cabeçalho
    include('./lista/lista.php'); // inclui a lista de usuários
} else { // se o usuário não é um admin, redireciona para a página inicial
    echo "<script>location.href='../../';</script>";
}
