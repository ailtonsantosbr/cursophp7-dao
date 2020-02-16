<?php

class Documento
{
	private $numero;

	public function getNumero()
	{
		return $this->numero;
	}

	public function setNumero($n)
	{
		$this->numero = $n;
	}
}

class CPF extends Documento
{
	public function validar():bool
	{
		$numeroCPF = $this->getNumero();
		return true;
	}
}

$doc = new CPF();

$doc->setNumero("111222333-44");

var_dump($doc->validar());

echo $doc->getNumero();

echo $doc->$numeroCPF;


class RG extends Documento
{
	public function validar():bool
	{
		$numeroRG = $this->getNumero();
		return true;
	}
}

$docRg = new RG();
$doc->setNumero("20.042.717-9");
var_dump($docRg->validar());
echo $docRg->getNumero();
echo $docRg->setNumero();



?>
