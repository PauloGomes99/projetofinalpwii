<?php

require_once "conexao.php";
require_once "Carro.php";

class CarroDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = $GLOBALS['pdo'];
    }

    public function inserir(Carro $carro) {
        $sql = "INSERT INTO carros (modelo, marca, ano, preco) VALUES (:modelo, :marca, :ano, :preco)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(":modelo", $carro->getModelo());
        $stmt->bindValue(":marca", $carro->getMarca());
        $stmt->bindValue(":ano", $carro->getAno());
        $stmt->bindValue(":preco", $carro->getPreco());
        $stmt->execute();
    }

    public function listar() {
        $sql = "SELECT * FROM carros";
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }
}
