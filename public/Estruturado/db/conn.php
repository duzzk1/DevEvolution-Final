<?php
// Define as informações para conexão com o banco de dados
$host = 'mariadb';
$dbname = 'crudDevEvolution';
$username = 'root';
$password = 'mariadb';

try {
    // Cria uma nova conexão PDO com as informações definidas acima
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
} catch (PDOException $e) {
    // Se houver um erro na conexão, exibe uma mensagem de erro
    echo 'Conexão falhou: ' . $e->getMessage();
}
