<?php
session_start();
include('./conn.php');
if (isset($_POST['login'])) {
    $user = $_POST['usuario'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE user = ? AND password = ?";

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user, $password]);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($stmt->rowCount() > 0) {
        $_SESSION['usuario'] = $result['user'];
        $_SESSION['admin'] = $result['isAdmin'];
        echo "<script>location.href='../pages/index/index.php';</script>";
    } else {
        echo "<script>alert('Usuário não encontrado!'); location.href='../pages/index/index.php';</script>";
    }
}
