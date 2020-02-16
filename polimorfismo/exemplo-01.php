<?php

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
		return $latir;
	}
}

class Gato extends Animal
{
	public function falar($miar)
	{
		return $miar;
	}
}

$pluto = new Cachorro();

echo $pluto->falar("uau uau uau"). "<br>" ;
echo $pluto->mover() . "<br>";

$tom = new Gato();

echo $tom->falar("miau miau miau") . "<br>";
echo $tom->mover();

?>
