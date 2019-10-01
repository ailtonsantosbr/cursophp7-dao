<!-- MYSQL delete PDO -->
<!-- utilizando o beginTransaction() -->

<?php  

$conn = new PDO("mysql:host=localhost; dbname=dbphp7", "root", "root");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

echo "Dados Deletados OK!!";


?>

<!-- POSTGRESQL delete PDO -->

<?php  

$conn = new PDO("pgsql:host=localhost; port=5432; dbname=dbphp7"; $user, $password);

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

echo "Dados Deletados OK!!!";

?>

<!-- SQLSERVER delete PDO -->

<?php  

$conn = new PDO("sqlsrv:server=localhost; database=dbphp7"; $user, $password);

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

$id = 2;

$stmt->execute(array($id));

echo "Dados Deletados OK!!!";

?>