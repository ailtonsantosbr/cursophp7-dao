<?php

$nome = "Ailton";

function teste() {

	global $nome;
	echo $nome;

}

function teste2() {

	$nome = "Joao ";

	echo $nome . "Casa do vizinho fechada";

}

teste();

?>
