<?php

require_once __DIR__ . '/class/Pessoa.php'; // __DIR__: não precisar colocar o caminho inteiro

$pessoa = new Pessoa("047.721.538-61");
echo "<p>CPF da Pessoa: {$pessoa->cpf}</p>"; // Com as Chaves, é separado o código Php do código HTML
$pessoa->validarCpf(); // Chamando Método de forma externa
