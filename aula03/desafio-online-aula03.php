<?php
/*
 //Com o que vimos até agora, vamos treinar os conceitos básicos vistos até agora:
 * Criar um código que represente aves (classes, subclasses, métodos)
 * Leve em consideração que nem todas as aves são iguais em seu comportamento, por exemplo, nem todas as aves voam.
	● Utilizar uma classe abstrata
	● Criar classes filhas que herdem as características da classe abstrata.
	● Dentro dos métodos, basta colocar “echos”, pois trata-se apenas de um exemplo.
 * Mãos à obra!!!
 */
 
 
 	// Definição das classes
	abstract class Ave {
		abstract function voar ();
		
		public function possuirPenas () {
			echo "Possuo penas...<br>";
		}
	}
	
	class Galinha extends Ave {
					
		public function ciscar (){
			echo "Cisco para encontrar alimentos...<br>";
		}
		
		public function voar (){
			echo "Não posso voar :( ...<br>";
		}
	}
	
	class Pato extends Ave {
		
		public function nadar (){
			echo "Consigo nadar...<br>";
		}
		
		public function voar (){
			echo "Consigo voar...<br>";
		}

	}
	
	class BeijaFlor extends Ave {
		public function voar (){
			echo "Consigo voar...<br>";
		}
		
		public function polinizar (){
			echo "Polinização realizada...<br>";
		}
	}
	
	// Utilização dos objetos e métodos
	$galinze = new Galinha;
	
	$galinze->voar();
	$galinze->ciscar();
	$galinze->possuirPenas();
	
	echo "<hr>";
	
	$donald = new Pato;
	
	$donald->nadar();
	$donald->possuirPenas();
	$donald->voar();
	
	echo "<hr>";
	
	$colibri = new BeijaFlor;
	
	$colibri->polinizar();
	$colibri->possuirPenas();
	$colibri->voar();
	
?>