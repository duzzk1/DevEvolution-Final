<?php
$host = 'mariadb';
$dbname = 'crudDevEvolution';
$username = 'root';
$password = 'mariadb';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    echo 'Conexão falhou: ' . $e->getMessage();
}
