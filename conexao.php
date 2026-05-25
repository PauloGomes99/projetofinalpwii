<?php

$host = "localhost";
$banco = "cadastro_pessoa";
$usuario = "root";
$senha = "";

try {

    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco",
        $usuario,
        $senha
    );

    $conexao->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

    

} catch(PDOException $erro) {

    echo "Erro: " . $erro->getMessage();
}