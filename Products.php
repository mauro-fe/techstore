<?php

class Product
{
    public $id;
    public $marca;
    public $nome;
    public $imagem;
    public $especificacoes;
    public $pastaImagens;
    public $sobre;


    public function __construct($id, $marca, $nome, $imagem, $especificacoes, $pastaImagens, $sobre)
    {
        $this->id = $id;
        $this->marca = $marca;
        $this->nome = $nome;
        $this->imagem = $imagem;
        $this->especificacoes = $especificacoes;
        $this->pastaImagens = $pastaImagens;
        $this->sobre = $sobre;
    }
}

class Avaliacoes
{
    public $id;
    public $nome;
    public $avaliacao;
    public $imagem;
    public $localizacao;
    public $estrela;


    public function __construct($id, $nome, $avaliacao, $imagem, $localizacao, $estrela)
    {
        $this->id = $id;
        $this->nome = $nome;
        $this->avaliacao = $avaliacao;
        $this->imagem = $imagem;
        $this->localizacao = $localizacao;
        $this->estrela = $estrela;
    }
}