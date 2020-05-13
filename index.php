<?php

echo '<pre>';
require_once __DIR__ . '/class/Pessoa.php'; // __DIR__: não precisar colocar o caminho inteiro
require_once __DIR__ . '/class/Produto.php';


$pessoa = new Pessoa("Person 1", "2002-05-04"); //Pode colocar a Data sem os traços
$resultDtNascFormatada = $pessoa->formatarDtNascimento();
echo "<p>Nome da Pessoa: {$pessoa->nome}</p><p>Data de Nasc: {$resultDtNascFormatada}"; // Com as Chaves, é separado o código Php do código HTML


$produto = new Produto("Fone", 50.0);
echo "<p>Nome do Produto: {$produto->nome}</p><p>Preco: {$produto->preco}";


$pessoaf = new PessoaFisica("Person 2", "2002-05-04");
$pessoaf->cpf = "047.721.538-61";
echo "<p>Nome da Pessoa Fisica: {$pessoaf->nome}</p><p>CPF da Pessoa Fisica: {$pessoaf->cpf}";


$pessoaj = new PessoaJuridica("Person 3", "2002-05-04");
$pessoaj->cnpj = "---";
echo "<p>Nome da Pessoa Juridica: {$pessoaj->nome}</p><p>CNPJ da Pessoa Juridica: {$pessoaj->cnpj}";


//$pessoa->validarCpf(); -- Chamando Método de forma externa
echo '</pre>';