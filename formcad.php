<?php
include "menu.php";
require_once "conexao.php";
require_once "Carro.php";
require_once "CarroDAO.php";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  
    $carro = new Carro(
        $_POST['modelo'],
        $_POST['marca'],
        $_POST['ano'],
        $_POST['preco']
    );

   
    $dao = new CarroDAO();
    $dao->inserir($carro);

    echo "<div class='alert alert-success text-center'>Carro cadastrado com sucesso!</div>";
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card mx-auto shadow p-4" style="max-width: 400px;">
        <h2 class="text-center mb-4">Cadastro de Carro</h2>

        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" required>
            </div>