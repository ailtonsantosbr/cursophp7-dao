<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if($conn->connect_error) {

	echo "Error: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios(deslogin, dessenha) VALUES(?, ?)")

// $stmt->mysqli_bind_param("ss", "user", "123456");
$stmt->mysqli_bind_param("ss", $login, $pass);

$login = "Ailton";
$pass = "1234567";

$stmt->execute();

$login = "root";
$pass = "98765412";

$stmt->execute();





?>
