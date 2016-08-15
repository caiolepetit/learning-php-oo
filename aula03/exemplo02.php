<?php
// para definir uma classe:
class Carro {

  // metodo = acao do objeto
  // metodo normalmente é nomeado utilizando um verbo
  function acelerar() {
    echo "acelerando! <br>";
  }

  function frear() {
    echo "parando! <br>";
  }
}

class CarroConversivel {

}

// criando instancia da classe
$obj1 = new Carro();
// executando um metodo!
$obj1->acelerar();
$obj1->frear();

# Erro Fatal: metodo indefinido
#$obj1->trocarMarcha();

var_dump( $obj1 );

echo '<hr>';

$obj2 = new CarroConversivel();

var_dump( $obj2 );