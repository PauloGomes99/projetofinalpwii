<?php
include "menu.php";
require_once "conexao.php";
require_once "classes/Carro.php";
require_once "classes/CarroDAO.php";

$dao = new CarroDAO();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $carro = new Carro(
        $_POST['modelo'],
        $_POST['marca'],
        $_POST['ano'],
        $_POST['preco'],
        $_POST['id'] 
    );

    $dao->atualizar($carro);
    header("Location: lista_cadastro.php");
    exit;
}


$id = $_GET['id'];
$carro = $dao->buscarPorId($id);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Editar Carro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="card mx-auto shadow p-4" style="max-width: 400px;">
        <h2 class="text-center mb-4">Editar Carro</h2>

        <form method="POST">
            <input type="hidden" name="id" value="<?= $carro['id'] ?>">

            <div class="mb-3">
                <label class="form-label">Modelo</label>
                <input type="text" name="modelo" class="form-control" value="<?= $carro['modelo'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Marca</label>
                <input type="text" name="marca" class="form-control" value="<?= $carro['marca'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Ano</label>
                <input type="number" name="ano" class="form-control" value="<?= $carro['ano'] ?>" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="number" step="0.01" name="preco" class="form-control" value="<?= $carro['preco'] ?>" required>
            </div>

            <button type="submit" class="btn btn-success w-100">Salvar Alterações</button>
            <a href="lista_cadastro.php" class="btn btn-secondary w-100 mt-2">Cancelar</a>
        </form>
    </div>
</div>
</body>
</html>
