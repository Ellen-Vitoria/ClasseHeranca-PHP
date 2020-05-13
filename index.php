<?php

echo '<pre>';
require_once __DIR__ . '/class/Pessoa.php'; // __DIR__: não precisar colocar o caminho inteiro
require_once __DIR__ . '/class/Produto.php';


$pessoa = new Pessoa("Person 1", "047.721.538-61", "2002-05-04"); //Pode colocar a Data sem os traços
$resultDtNascFormatada = $pessoa->formatarDtNascimento();
echo "<p>CPF da Pessoa: {$pessoa->cpf}</p><p>Data de Nasc: {$resultDtNascFormatada}"; // Com as Chaves, é separado o código Php do código HTML


$produto = new Produto("Fone", 50.0);
echo "<p>Nome do Produto: {$produto->nome}</p><p>Preco: {$produto->preco}";


$pessoaf = new PessoaFisica("Person 2", "047.721.538-61", "2002-05-04");
echo "<p>Nome da Pessoa Fisica: {$pessoaf->nome}</p><p>CPF da Pessoa Fisica: {$pessoaf->cpf}";


$pessoaj = new PessoaJuridica("Person 2", "047.721.538-61", "2002-05-04");
echo "<p>Nome da Pessoa Juridica: {$pessoaj->nome}</p><p>Data de Nasc. da Pessoa Juridica: {$pessoaj->dtNasc}";


//$pessoa->validarCpf(); -- Chamando Método de forma externa
echo '</pre>';