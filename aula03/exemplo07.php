<?php
interface Carro {
  public function acelerar();
  public function frear();

  /* Interface não pode possuir metodos com corpo
  public function trocarMarcha() {

  }
  */
}

class Uno implements Carro {
  public function acelerar() {

  }

  public function frear() {

  }
}