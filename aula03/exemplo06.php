<?php
abstract class Carro {
  abstract function acelerar();
  //abstract function acelerar( $marcha );

  public function frear() {

  }
}

# Erro Fatal
#$carro = new Carro();

class Uno extends Carro {

  public function acelerar() {

  }
}

$uno = new Uno();