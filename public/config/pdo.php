<?php 
define('HOST', 'mariadb');
define('USER', 'user');
define('PASS', 'password');
define('DBNAME', 'database');

try {
$pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASS);
echo "Conectado com Sucesso!";
}catch (PDOException $e){
    echo "Conexão falhou! Erro: ".$e->getMessage();
}
