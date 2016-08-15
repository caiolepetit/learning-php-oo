<?php
/* Como exemplo prático, vou aplicar alguns conceitos de OO que vimos da aula de ontem *
 */

/**
 * Classe Banco (classe Pai)
 *
 * Caracteristicas:
 * - classe abstrata, logo, não pode ser instanciada diretamente, e utilizada para extender a outras classes;
 * - possuirá um metodo 'final' chamado 'conectar' e 'verificarConexao', os metodos finais, lembrando, eles não podem ser sobrescritos;
 * - possuirá ainda 4 métodos abstrados, ou seja, eles precisarão ser implementados na classe filha.
 */
abstract class Banco {

  protected $conectado = false;

  abstract public function inserir();
  abstract public function deletar( $id );
  abstract public function atualizar();
  abstract public function selecionar();

  // metodo private, para que ele não possa ser utilizado pela classe filha, e sim, apenas pela própria classe Banco
  final private function conectar() {
    echo '"Conectando" ao Banco de dados... <br>';
    $this->conectado = true;
  }

  // metodo protected, para que ele possa ser utilizado externamente, ou seja, através da instancia da classe Filha,
  // mas por ser protected, a classe filha, internamente poderá executar esse método.
  final protected function verificarConexao() {
    if( $this->conectado == false ) {
      $this->conectar();
    }
  }

}

/**
 * Classe Pessoa (classe Filha)
 *
 * Caracteristicas:
 * - extende a classe Banco, ou seja, herda todas as caracteristicas da classe Pai;
 * - como a classe Pai, é uma classe abstrata, precisamos obrigatoriamente desenvolver
 *   os metodos abstratos (inserir, deletar, atualizar, selecionar);
 * - terá um método "exibirPessoa", lembrando que uma classe filha quando extendida de uma classe abstrata, pode
 *   possuir metodos além daqueles sugeridos pela classe abstrata.
 */
class Pessoa extends Banco {

  public $nome;
  public $email;
  public $rg;

  public function inserir() {
    $this->verificarConexao();
    echo "Inserindo Pessoa... <br>";
    $this->exibirPessoa();
  }

  public function deletar( $id ) {
    $this->verificarConexao();
    echo "Deletando Pessoa com id = $id... <br>";
  }


  public function atualizar() {
    $this->verificarConexao();
    echo "Atualizando Pessoa... <br>";
    $this->exibirPessoa();
  }


  public function selecionar() {
    $this->verificarConexao();
    echo "Retornando lista de Pessoas... <br>";
  }

  private function exibirPessoa() {
    echo "Nome = {$this->nome} <br>";
    echo "Email = {$this->email} <br>";
    echo "Rg = {$this->rg} <br>";
  }
}

/*
 * Testando
 */

// criando uma instancia da classe Pessoa
$fulano = new Pessoa();

// atribuindo valores as propriedades
$fulano->nome  = 'Fulano de Tal';
$fulano->email = 'fulano@tals.com';
$fulano->rg    = 232333;

$fulano->inserir();

echo '<hr>';

$fulano->deletar(2);

echo '<hr>';

$fulano->selecionar();