<?php

// Parâmetro = Argumento
class Pessoa
{
    public $cpf;

    public __construct($cpf) // Método da classe no PHP - Inicializar qualquer Objeto
    {
        validarIdade(); // Executar antes de inderir Cpf - Chamando Método dentro da própria Classe
        validarCpf();
        $this->cpf = $cpf;
    }

    /* 
       Se fosse "public __construct($cpf = null)", estaria declarando que esse Parâmetro é opcional
       Ou
       "public __construct($cpf, $idade = 18)", o primeiro Parâmetro seria obrigatório, mas o segundo não
    */

    public function validarIdade()
    {
        return true;
    }
    public function validarCpf()
    {
        return true;
    }
}