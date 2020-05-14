# ClasseHeranca-PHP
Estudo sobre Classe, Encapsulamento e Herança na linguagem PHP.

# ENCAPSULAMENTO: definir a visibilidade de uma Propriedade, para permitir ou não que possa ser acessada de forma externa, por exemplo, pelo index.php
      --- Para exibir/alterar o Valor de um Atributo privado ou protegido em um outro Arquivo (index.php) via Instância, é necessário criar os Métodos Get-Set do tipo public.


# Visibilidade dos Atributos ou Métodos:

* Private (-): os atributos ou os métodos só podem ser acessados pela Classe que foram declarados. 

* Protected (#): os atributos ou os métodos são acessados,a apenas, pela Classe que foram declarados e pelas Classes descendentes (herdadas).

* Public (+): os atributos ou os métodos são acessados de forma livre. Quando suas visibilidades não são declaradas, automaticamente, são do tipo public.

# HERANÇA:
--- Ecommerce ---
Pessoa: Fornecedor, Cliente, Empregado, Gerente, Diretor, Analista;

Pessoa (Super Classe):

   * Pessoa Física - Cpf: poderia haver uma Classe Gerente,
   que seria filha da Classe PessoaFisica, que seria filha da Classe Pessoa, assim, a Classe Pessoa teria o controle sobre essas Classes.

   * Pessoa Jurídica - Cnpj

# Index:
Como "PessoaFisica" e "PessoaJuridica" são classes que herdam os Atributos da Classe Pessoa, não é preciso declará-las com o "require"
