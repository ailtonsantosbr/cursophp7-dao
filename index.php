<?php

require_once("config.php");

/** SELECT NA TABELA USUARIOS
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

echo json_encode($usuarios);
**/

/** CARREGA APENAS UM USUARIO
$root = new Usuario();
$root->loadById(3);

echo $root;

**/

// CARREGA UMA LISTA DE USUARIOS
/**
$lista = Usuario::getList();

echo json_encode($lista);    
**/

//CARREGA UMA LISTA DE USUARIOS BUSCANDO PELO LOGIN
/**
$search = Usuario::search("ail");

echo json_encode($search);
**/

//CARREGA O USUARIO USANDO O LOGIN E PASSWORD

/**$usuario = new Usuario();

$usuario->login("ailton", "reste");

echo $usuario;
**/

//CRIANDO UM NOVO USUARIO INSERT
//$aluno = new Usuario("Aluno", "@@aluno");

//$aluno->setDeslogin("Mariana");
//$aluno->setDessenha("@6547931");

//$aluno->insert();

//echo $aluno;

//ALTERAR UM USUARIO
/**
$usuario = new Usuario();
$usuario->loadById(8);
$usuario->update("professor", "!!@@##$$%%");

echo $usuario;
**/

// deletar um registro da tabela

$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();

echo $usuario;

 ?>
