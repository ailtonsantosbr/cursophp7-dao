<?php

interface Veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocaMarcha($marcha);
}

class Civic implements Veiculo {

	public function acelerar($velocidade){
		echo "O veiculo acelerou ate " . $velocidade . "km/h";
	}

	public function frenar($velocidade) {
		echo "O veiculo frenou até " . $velocidade . "km/h";
	}

	public function trocaMarcha($marcha){
		echo "O veiculo engatou a marcha ". $marcha;
	}
}

$carro = new Civic();
$carro->trocaMarcha(1);
$carro->acelerar(120);
$carro->frenar(260);


class Onix implements Veiculo
{
	public function acelerar($velocidade)
	{
		echo "O veiculo e novo e acelerou ate " . $velocidade . "km/h";
	}

	public function frenar($velocidade)
	{
		echo "o veiculo frenou até " . $velocidade . "km/h";
	}

	public function trocaMarcha($marcha)
	{
		echo "O veiculo engatou a marcha " . $marcha;
	}
}

$carOnix = new Onix();
$carOnix->acelerar(160);
$carOnix->frenar(120);
$carOnix->trocaMarcha(6);

/**
* 
*/
class Fusca implements Veiculo
{
	
	function __construct(argument)
	{
		# code...
	}

	public function acelerar($velocidade)
	{
		echo "O veiculo esta acelerando " .$velocidade . "km/h";
	}

	public function frenar($velocidade)
	{
		echo "O esta frenando a " . $velocidade . "km/h";
	}

	public trocaMarcha($velocidade)
	{
		echo "O veiculo trocou a marcha " . $marcha . ""  ;
	}
}







?>
