<?php
interface veiculo {
	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($m);
}

class Civic implements veiculo {
	public function acelerar($v){
		if($v >= 120) {
			echo "Velocidade excedida . $v";
		} else {
			echo "Velocidade dentro da normalidade..";
		}
	}

	public function frenar($v) {
		if ($v >= 80) {
			echo "frenar velocidade acima do limite";
		}
	}

	public function trocarMarcha($m) {
		switch ($m) {
			case '1':
				echo "você esta utlizando a marcha: $m";
				break;
			case '2':
				echo "você esta utlizando a marcha: $m";
				break;
			case '3':
				echo "você esta utlizando a marcha: $m";
				break;
			case '4':
				echo "você esta utlizando a marcha: $m";
				break;
			case '5':
				echo "você esta utlizando a marcha: $m";
				break;

			default:
				echo "Você esta utililzando marcha errada.!!";
				break;
		}
	}
}

$obj = new veiculo();
$obj->acelerar("120");
$obj->frenar("81");
$obj->trocarMarcha("3");
print_r(expression)

?>
