<?php
include "menu.php";
require_once "conexao.php";

$sql = "SELECT * FROM pessoas";

$dados = $pdo->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Lista de Pessoas</title>
</head>

<body>

<h1>Pessoas Cadastradas</h1>

<table class="table table-bordered table-striped">

    <thead class="table-dark">

        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
        </tr>

    </thead>

    <tbody>












<?php foreach($dados as $pessoa) { ?>

<tr>

<td><?= $pessoa['id'] ?></td>
<td><?= $pessoa['nome'] ?></td>
<td><?= $pessoa['email'] ?></td>
<td><?= $pessoa['telefone'] ?></td>

</tr>

<?php } ?>

</table>

<br>

<a href="index.php">
Voltar
</a>

</body>
</html>