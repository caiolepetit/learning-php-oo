<?php
class Carro {
  // propriedade
  public $cor = 'Azul';
  private $marca = 'Fiat';
  protected $marcha = 6;

  public function exibirMarca() {
    return $this->marca;
  }
}

$uno = new Carro();
echo "Cor : {$uno->cor} <br>";

# Erro Fatal
#echo "Marca : {$uno->marca} <br>";

echo "Marca : {$uno->exibirMarca()} <br>";





echo '<hr>';

final class CarroConversivel extends Carro {

  public function retornarPrivate() {
    return $this->marca; // propr. private da classe Pai
  }

  public function retornarProtected() {
      return $this->marcha;
  }
}

$uno_conv = new CarroConversivel();

echo "Cor : {$uno_conv->cor} <br>";

# Notice: propriedade indefinida
#echo "Marca : {$uno_conv->retornarPrivate()} <br>";

echo "Marcha : {$uno_conv->retornarProtected()} <br>";




#final teste
# Erro Fatal
#class Uno extends CarroConversivel {

#}









