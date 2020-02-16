<?php

interface Veiculo
{
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocaMarcha($marcha);
}

abstract class Automovel implements Veiculo
{
	public function acelerar($velocidade)
	{
		echo "O veiculo acelerou até " . $velocidade ."km/h";
	}

	public function frenar($velocidade)
	{
		echo "O veiculo frenou a " . $velocidade . "km/h";
	}

	public function trocaMarcha($marcha)
	{
		echo "Você trocou a marcha " . $marcha . " marcha";
	}
}

class DelRey extends Automovel
{
	public function empurrar($ano)
	{
		if ($ano > 1975) {
			echo "DelRey seminovo";
		} else {
		echo "empurrando o DelRey";
	}
}

class Jaguar extends Automovel
{
	public function hibrido($eletrico)
	{
		if ($eletrico >= 450){
			echo "Autonomia do veiculo de 450km";
		} else {
			echo "Auto consumo de combustivel";
		}
	}
}

$carro = new DelRey();
$carro->acelerar(200);
$carro->empurrar(1977);
$carro->hibrido(420);

// não pode instanciar a classe diretamenta Automovel.
// um objeto não instancia uma classe abstrata.
$carro = new Automovel();
$carro->acelerar(200);
$carro->hibrido(280);

?>
