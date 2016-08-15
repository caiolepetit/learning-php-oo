<?php
// para definir uma classe:
class Carro {

    // definindo propriedade/atributos
    var $cor;
    var $marchas = 5;

    // metodo = acao do objeto
    // metodo normalmente é nomeado utilizando um verbo
    // parametro utilizado para passar valor ao metodo
    function acelerar( $marcha ) {
        echo "acelerando, marcha $marcha! <br>";
    }

    function frear() {
        echo "parando! <br>";
    }
}


// criando instancia da classe
$obj1 = new Carro();
// executando um metodo!
$obj1->acelerar( 2 );
$obj1->frear();

// manipulação das propriedades
$obj1->cor = 'Preto';

echo "A cor do Carro : {$obj1->cor} <br>";

echo "Marchas do Carro : {$obj1->marchas} <br>";

var_dump( $obj1 );

echo '<hr>';




// Classe Filha herda todas caracteristicas da
// classe Pai Carro
class CarroConversivel extends Carro {

  function levantarCapota() {
    echo "Levantando capota <br>";
  }
}

$obj2 = new CarroConversivel();

$obj2->acelerar(5);

$obj2->levantarCapota();

var_dump( $obj2 );







