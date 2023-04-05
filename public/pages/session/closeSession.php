<?php
unset($_SESSION['usuario']);
session_start();
session_destroy();
header('location: ../index/index.php');
