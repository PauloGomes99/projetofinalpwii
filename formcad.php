<?php
include "menu.php";
require_once "conexao.php";
require_once "Pessoa.php";

if ($_POST) {

    $pessoa = new Pessoa(
        $_POST['nome'],
        $_POST['email'],
        $_POST['telefone']
    );

    $pessoa->cadastrar($pdo);

    
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <h1>Cadastrar</h1>

<form method="POST">

    <input type="text"name="nome" placeholder="Nome">

    <br><br>

    <input type="email" name="email" placeholder="Email">

    <br><br>

    <input type="text" name="telefone" placeholder="Telefone">

    <br><br>

    <button class="btn btn-primary type="submit"> Enviar </button>
    <button class="btn btn-primary" type="reset">Limpar</button>


</form>
<a href="index.php">VOLTAR</a>
</body>
</html>






<?php

