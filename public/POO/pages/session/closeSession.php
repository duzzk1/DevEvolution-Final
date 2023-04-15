<?php
unset($_SESSION['usuario']);
unset($_SESSION['config']);

session_start();
session_destroy();
header("Location: ../../index.php");
