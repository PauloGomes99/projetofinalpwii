<?php

class Carro {
    private $id;
    private $modelo;
    private $marca;
    private $ano;
    private $preco;

    
    public function __construct($modelo, $marca, $ano, $preco, $id = null) {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
        $this->preco = $preco;
        $this->id = $id;
    }

   
    public function getId() { return $this->id; }
    public function getModelo() { return $this->modelo; }
    public function getMarca() { return $this->marca; }
    public function getAno() { return $this->ano; }
    public function getPreco() { return $this->preco; }

    
    public function setModelo($modelo) { $this->modelo = $modelo; }
    public function setMarca($marca) { $this->marca = $marca; }
    public function setAno($ano) { $this->ano = $ano; }
    public function setPreco($preco) { $this->preco = $preco; }
}

?>