<?php

// Parâmetro = Argumento
class Pessoa
{
    public $cpf;
    public $dataNasc;

    public function __construct($cpf, $dataNasc) // Método da classe no PHP - Inicializar qualquer Objeto
    {
        //validarIdade(); -- Executar antes de inderir Cpf - Chamando Método dentro da própria Classe
        $this->cpf = $cpf;
        $this->dataNasc = $dataNasc;

        /*
            -- Poderia colocar:
               $this->dataNasc = $this->formatarDtNascimento($dataNasc);

            -- Então, no Método formatarDtNascimento($dataNasc) ficaria:
               return date("d/m/Y", strtotime($dataNasc));  
            
            -- Para exibir no index:
               echo "Data de Nasc: {$pessoa->dataNasc};"
                
        */
    }

    public function formatarDtNascimento()
    {
        return date("d/m/Y", strtotime($this->dataNasc));

        // setlocale(LC_ALL, 'pt_BR'); -- LC_ALL: trazer todas as linguagens no computador
        // strtotime() é como um conversor/formata uma string para o tipo data    
        
        
        //Y para 4 dígitos do ano (2020) e y para dois dígitos do ano (20)
        //"D" mostra o Dia da Semana
        //"F" mostra o mês completo: date(d F Y, ...);


       /* Ou -- Para Validações, este é o recomendado:
            $resultFormat = date("2020-05-04", strtotime($dataNasc)); 
              return $resultFormat;
       */      
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