<?php

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(:LOGIN, :PASSWORD)");

$login = 'Ailton';
$password = '123456';

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);

$stmt->execute();


$login = "root";
$password = "root";

$stmt->execute();


$login = "Maria";
$password = "Maria";

$stmt->execute();

echo "Dados Inserido com sucesso, OK!!";

?>
