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

class CarroConversivel {

}

// criando instancia da classe
$obj1 = new Carro();
// executando um metodo!
$obj1->acelerar( 2 );
$obj1->frear();

// manipulação das propriedades
$obj1->cor = 'Preto';
$obj1->propriedade_indefinida = 0;

echo "A cor do Carro : {$obj1->cor} <br>";

echo "Marchas do Carro : {$obj1->marchas} <br>";

# Notice: Propriedade indefinida
#echo "Prop Indef2 : {$obj1->propriedade_indefinida2} <br>";

# Erro Fatal: metodo indefinido
#$obj1->trocarMarcha();

var_dump( $obj1 );

echo '<hr>';

$obj2 = new CarroConversivel();

var_dump( $obj2 );