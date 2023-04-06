<?php
session_start();
if (@$_SESSION['admin'] == 1) { //Se o usuário não for admin envia ele para a pagina inicial 
    include('../header/header.php');
    include('./lista/lista.php');
} else { //Se o usuário for admin, abre a lista de usuários na pagina.
    echo "<script>location.href='../index.php';</script>";
}
