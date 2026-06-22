<?php
$host = "192.168.8.7";     
$dbname = "grupopw10";   
$usuario = "root";        
$senha = "";             
$port = "3306";           

try {
    $dsn = "mysql:host=192.168.8.7;dbname=grupopw10;port=3306";
    $pdo = new PDO($dsn, $usuario, $senha);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

?>