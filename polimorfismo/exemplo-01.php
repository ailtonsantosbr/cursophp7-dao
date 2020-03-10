<?php

/**
* Classe Animal
* Autor: Ailton Santos
* date: 27/02/2020
* obs: Aprendendo polimorfismo
*/

abstract class Animal
{
	public function falar()
	{
		return "som";
	}

	public function mover()
	{
		return "anda";
	}
}

class Cachorro extends Animal
{
	public function falar($latir)
	{
		return $latir . "<br>" . parent::mover();
	}
}

class Gato extends Animal
{
	public function falar($miar)
	{
		return $miar "<br>" . parent::mover();
	}
}

class Passaro extends Animal
{
	public function falar()
	{
		return "Canta";
	}

	public function mover()
	{
		return "Voa e " . parent::mover();
	}

}

$pluto = new Cachorro();

echo $pluto->falar("uau uau uau"). "<br>" ;
echo $pluto->mover() . "<br>";

echo "------------------------------------<br>";

$tom = new Gato();

echo $tom->falar("miau miau miau") . "<br>";
echo $tom->mover();

echo "------------------------------------<br>";

$piu = new Passaro();

echo $piu->falar();
echo $piu->mover();

?>
