<?php

echo '<pre>';
require_once __DIR__ . '/class/Pessoa.php'; // __DIR__: não precisar colocar o caminho inteiro
require_once __DIR__ . '/class/Produto.php';


$pessoa = new Pessoa("047.721.538-61", "2002-05-04"); //Pode colocar a Data sem os traços
$resultDtNascFormatada = $pessoa->formatarDtNascimento();

echo "<p>CPF da Pessoa: {$pessoa->cpf}</p> <p> Data de Nasc: {$resultDtNascFormatada}"; // Com as Chaves, é separado o código Php do código HTML

//$pessoa->validarCpf(); -- Chamando Método de forma externa
echo '</pre>';