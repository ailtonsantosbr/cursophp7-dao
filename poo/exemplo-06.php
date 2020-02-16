<?php

class Carro() {

	public $modelo;
	public $motor;
	public $ano;

	public function getModelo(){
		return $this->modelo;
	}

	public function setModelo($modelo){
		$this->modelo = $modelo;
	}

	public function getMotor():float {
		return $this->modelo;
	}

	public function setMotor($motor) {
		$this->motor = $motor;
	}
	public function getAno():int {
		return $this->ano;
	}

	public function setAno($ano) {
		$this->ano = $ano;
	}

	public function exibir(){
		return array(
			"modelo"=>$this->getModelo(),
			"motor"=>$this->getMotor(),
			"ano"=>$this->getAno()
		);
	}
}

$car = new Carro();
$car->setModelo("Gol GT");
$car->setMotor("2.0");
$car->setAno("2008");
print_r($car->exibir());



?>
