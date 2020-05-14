<?php

class Produto
{
    public $nome, $preco;

    function __construct($nome, $preco)
    {
        //$minhaVariavel = 2; -- Variável do Método e não da Classe
        $this->nome = $this->converterPrimeiraLetra($nome);
        $this->preco = $this->formatarPreco($preco);
    }

    function formatarPreco($preco)
    {
        //number_format(): Método Global do PHP, para números flutuantes
        return number_format($preco, 2, ",","."); //(Número a formatar, Qt casa decimais, ponto flutuante, separador de milhar)
    }

    function converterLetrasMaiuscula($nome)
    {
        //strtouppe(): string to upper
        return strtoupper($nome); 
    }

    function converterLetrasMinuscula($nome)
    {
        //strtouppe(): string to lower
        return strtolower($nome); 
    }

    function converterPrimeiraLetra($nome)
    {
        //ucwords(): primeira letra Maiuscula das Palavras
        return ucwords($nome); 
    }
}