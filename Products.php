<?php

class Product
{
    public $id;
    public $marca;
    public $nome;
    public $imagem;
    public $especificacoes;
    public $pastaImagens;


    public function __construct($id, $marca, $nome, $imagem, $especificacoes, $pastaImagens)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->especificacoes = $especificacoes;
        $this->pastaImagens = $pastaImagens;
    }
}
