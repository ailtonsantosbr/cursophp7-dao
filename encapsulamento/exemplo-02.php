<?php

class Pessoa {

	public $nome = "Rasmus Lerdoff";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados(){
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

class Programador extends Pessoa {

	public function verDados(){

		echo get_class($this) . "<br>";

		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

class Engenheiro extends Pessoa {

	echo get_class($this);
}

class Professor extends Pessoa {

	echo get_class($this);
}

$obj = new Programador();
echo $obj->$nome . "<br>";
$obj->verDados() . "<br>";

$eng = new Engenheiro();
echo $eng->$idade . "<br>";
$eng->verDados() . "<br>";



?>
