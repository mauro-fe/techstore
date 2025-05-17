<?php

class Product
{
    public $id;
    public $marca;
    public $nome;
    public $imagem;

    public function __construct($id, $marca, $nome, $imagem)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->nome = $nome;
        $this->imagem = $imagem;
    }
}