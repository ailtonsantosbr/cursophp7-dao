<!-- MYSQL -->

<!-- PDO::DELETE -->

<?php

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "root");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 2;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Deletados OK!!";


?>

<!-- SQL SERVER -->

<?php

$conn = new PDO("sqlsrv:server=localhost; database=dbphp7", "administrador", "");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 3;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Deletados OK..";


?>


<!-- POSTGRESQL -->


<?php

$conn = new PDO("pgsql:host=$hostname; port=5


	432; dbname=dbphp7", $username, $password);

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

$id = 4;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados Deletado OK..";

?>
