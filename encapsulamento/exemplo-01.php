<?php

class Pessoa
{
	public $nome = "Rasmus Lerdoff";
	protected $idade = 48;
	private $senha = "123456";

	public function verDados()
	{
		echo $this->nome . "<br>";
		echo $this->idade . "<br>";
		echo $this->senha . "<br>";
	}
}

$obj = new Pessoa();
echo $obj->nome . "<br>"; // todos tem acesso. public
echo $obj->idade . "<br>"; // somente os herdaddos. protected
echo $obj->senha . "<br>"; // ninguem tem acesso. private
$obj->verDados();

?>
