<?php  

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD, idusuario = :ID)");

$login = 'Ailton';
$password = '123456';
$id = 2;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Alterados OK!!";


?>