<?php  

interface veiculo {

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarchar($marcha);
}

class Civic implements veiculo {

	public function acelerar($velocidade) {

		if ($velocidade >= 120) {
			echo "Valor do motorista ultrapassou o limite" . "$velocidade km/h";;
		}
	}

	public function frenar($velocidade) {

		if ($velocidade >= 80) {
			echo "Corrigir sua velocidade, que esta excedendo" . "$velocidade";
		}
	}

	public function trocarMarchar($m) {

		switch ($m) {
			case '1':
				echo "Você esta usando a . $m";
				break;

			case '2':
				echo "Você esta usando a . $m";
				break;

			case '3':
				echo "Você esta usando a . $m";
				break;

			case '4':
				echo "Você esta usando a . $m";
				break;

			case '5':
				echo "Você esta usando a . $m";
				break;

			case '6':
				echo "Você esta usando a . $m";
				break;

			default:
				echo "Esta usando a marcha errada";
				break;
		}
	}
}

$obj = new veiculo
$obj->acelerar(120);
$obj->frenar(80);
$obj->trocarMarchar(4);






?>