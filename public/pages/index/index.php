<?php session_start(); ?>
<main>
    <?php
    if (isset($_SESSION['usuario'])) {
        include('../inicio/inicio.php');
    } else {
        include('../login/login.php');
    }
    ?>
</main>