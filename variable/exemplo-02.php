<?php

$anoNascimento = 1990;
$nomeCompleto = "Ailton Silva dos Santos";
$endereço = "";
$CEP = "08122-455";

$nome1 = "Ailton";
$1nome = "Variavel incorreta";


echo "<br/>";

unset($nome1);

if (isset($nome1)) {
	echo $nome1;
}

?>
