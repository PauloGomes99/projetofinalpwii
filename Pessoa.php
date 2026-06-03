<?php


class Pessoa{

private string $nome;
private string $email;
private string $telefone;


public function __construct($nome, $email, $telefone) {

$this->nome = $nome;
$this->email = $email;
$this->telefone = $telefone;

} 



 public function cadastrar($conexao) {

        $sql = "INSERT INTO usuario
        (nome, email, telefone)
        VALUES (?, ?, ?)";

        $stmt = $conexao->prepare($sql);

        $stmt->execute([
            $this->nome,
            $this->email,
            $this->telefone
        ]);
    }
}