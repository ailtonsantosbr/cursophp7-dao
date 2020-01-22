<?php  

$conn = new PDO("sqlsrv:Database=dbphp7; server=localhost\SQLEXPRESS; ConnectionPooling=0", "automacao", "Brasil10");

$stmt = $conn->prepare("CREATE TABLE tb_usuarios (
	idusuarios INT NOT NULL IDENTITY PRIMARY KEY,
	deslogin VARCHAR(64) NOT NULL,
	dessenha VARCHAR(256) NOT NULL,
	dtcadastro DATETIME NOT NULL DEFAULT GETDATE()");

$stmt->execute();



?>