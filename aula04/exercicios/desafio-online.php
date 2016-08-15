<?php

/*
 * Imagine que você pretende criar um sistema para uma escola.
 * Como nenhum sistema começa grande, podemos pensar em coisas básicas, como por exemplo, quem faz parte dessa escola:
 * Podemos ter:
 * Alunos, Professores, Secretarios, Diretor, Vice-Diretor
 * Com o que vimos até agora, crie uma classe abstrata que comporte todas as pessoas em questão, e depois crie classes 
 * estendidas, mais específicas. Lembre que diretores tem mais poderes que professores, e estes mais poderes que alunos.
 * Mas no fundo eles serão terão coisas em comum como (ID, Nome, Telefone, etc.
 * Diretores poderão utilizar métodos como excluir_aluno(), excluir_professor(), etc
 * Crie uma classe de acordo com o que você conhece sobre um ambiente escolar.
 */

abstract class Pessoa {
	public $id;
	public $nome;
	public $telefone;
	public $idade;
}

class Aluno extends Pessoa {
	
}

class Professor extends Pessoa {
	
}

?>