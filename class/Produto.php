<?php

Class Produto
{
    public $nome, $preco;

    function __construct($nome, $preco)
    {
        $this->nome = $nome;
        $this->preco = $this->formatarPreco($preco);
    }

    function formatarPreco($preco)
    {
        //number_format(): Método Global do PHP, para números flutuantes
        return number_format($preco, 2, ",","."); //(Número a formatar, Qt casa decimais, ponto flutuante, separador de milhar)
    }
}