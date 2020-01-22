<?php

require_once("config.php");

//Carrega dados do usuario pelo ID
// $root = new Usuario();

// $root->loadById(3);

// echo $root;




// $sql = new Sql();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

// echo json_encode($usuarios);

// ***************************************
// Carrega uma lista de usuarios
// $lista = Usuario::getList();

// echo json_decode($lista);

// ***************************************

// Carrega um alista de usuarios busca por login..

// $search = Usuario::search("jo");

// echo json_encode($search);

// deletar usuario

$usuario = new usuario();

$usuario->loadById(7);

$usuario->delete();

echo $usuario;


?>
