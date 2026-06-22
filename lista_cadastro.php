<?php
include "menu.php";
require_once "conexao.php";

$sql = "SELECT * FROM carros";
$dados = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Carros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h1 class="mb-4">Lista de Carros</h1>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Modelo</th>
                <th>Marca</th>
                <th>Ano</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($dados as $carro) { ?>
                <tr>
                    <td><?= $carro['id'] ?></td>
                    <td><?= $carro['modelo'] ?></td>
                    <td><?= $carro['marca'] ?></td>
                    <td><?= $carro['ano'] ?></td>
                    <td>R$ <?= number_format($carro['preco'], 2, ',', '.') ?></td>
                    <td>
                        <a href="editar.php?id=<?= $carro['id'] ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="excluir.php?id=<?= $carro['id'] ?>" class="btn btn-danger btn-sm"
                           onclick="return confirm('Tem certeza que deseja excluir este carro?')">Excluir</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <a href="formcad.php" class="btn btn-primary">Cadastrar novo carro</a>
</div>

</body>
</html>
