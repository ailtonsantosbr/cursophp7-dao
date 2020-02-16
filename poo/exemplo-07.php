<?php

class Carro(){

	protected $modelo;
	protected $motor;
	protected $ano;

	protected function getModelo() {
		return $this->modelo;
	}

	protected function setModelo($modelo) {
		$this->modelo = $modelo;
	}

	protected function getMotor():float {
		return $this->motor;
	}

	protected function setMotor($motor) {
		$this->motor = $motor;
	}
	protected function getAno() {
		return $this->ano;
	}

	protected function setAno($ano) {
		$this->ano = $ano;
	}

	protected function exibir() {
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
}

$vw = new Carro();
$vw->setModelo("Brasilia");
$vw->setMotor("1.8");
$vw->setAno("1968");
print_r($this->exibir());

?>
