<?php

$nome = "Hcode";
$site = 'www.hcode.com.br';

$ano = 1990;

$salario = 5500,99;

$bloqueado = false;

////////////////////////////////

$frutas = array("abacaxi", "laranja", "banana");

echo $frutas[2];

$nascimento = new DateTime();

echo "<br>";

var_dump($nascimento);

////////////////////////////////

$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);

$nulo = null;

?>
