<?php
require_once "conexao.php";
require_once "classes/CarroDAO.php";

$dao = new CarroDAO();


$id = $_GET['id'] ?? null;

if ($id) {
    $dao->excluir($id);
}


header("Location: lista_cadastro.php");
exit;
