<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Ailton Santos");
$cad->setEmail("ailton.santos@gmail.com");
$cad->setSenha("123456");

// echo $cad;

$cad->registrarVenda();

?>
