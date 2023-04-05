<?php
session_start();

if (@$_SESSION['admin'] == 0) {
    echo "<script>location.href='../index.php';</script>";
} else {
    include('../header/header.php');
    include('./lista/lista.php');
}
