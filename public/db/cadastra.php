<?php
session_start();
include('./conn.php');
if (isset($_POST['cadastra'])) {
    $user = $_POST['usuario'];
    $password = $_POST['password'];


    $sql = "SELECT COUNT(*) FROM users WHERE user = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);
    $count = $stmt->fetchColumn();
    if ($count > 0) {
        // O usuário já existe no banco de dados
        print "<script>alert('Usuário já existe!'); location.href='../../pages/registro/registro.php';</script>";
    } else {
        $sql = "INSERT INTO users (user,password) VALUES (?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$user, $password]);
        print "<script>alert('Conta criada! Faça login!'); location.href='../../pages/login/login.php';</script>";
    }
}
