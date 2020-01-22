<?php

try {
	$dbh = new PDO('odbc:SAMPLE', 'dbinst1', 'ibmdb2', array(PDO::ATTR_PERSITENT => true));
	echo "Connected\n";
} catch (Exception $e) {
	die("Unable to connect: " . $e->getMessage());
}

try {
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$dbh->beginTransaction();
	$dbh->exec("insert into staff (id, first, last) values(23, 'Joe', 'Bloggs')");
	$dbh->exec("insert into salarychange (id, amount, changedate) values (23,5000,NOW())");
	$dbh->commit();
} catch (Exception $e) {
	$dbh->rollBack();
	echo "Failed... " . $e.getMessage();
}


 ?>
