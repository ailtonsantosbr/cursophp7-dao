<?php
/*
*Incluir a classe incluirClasses para chamar a uma spl_autoload_register
* Autor: Ailton
* Date: 27/02/2020
*
*/
function incluirClasses($nomeClasses)
{
	if(file_exists($nomeClasses . "php") === true)
	{
		require_once($nomeClasses . "php");
	}
}
// faz chamada a uma classe no caso incluirClasses
spl_autoload_register("incluirClasses");

spl_autoload_register(function($nomeClasses)
{
	if(file_exists("abstratas" . DIRECTORY_SEPARATOR . $nomeClasses . "php") === true) {
		require_once("abstratas" . DIRECTORY_SEPARATOR . $nomeClasses . "php");
	}
});

$carro = new DelRey();
$carro->acelerar(80);

?>
