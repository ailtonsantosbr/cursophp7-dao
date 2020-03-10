<?php

namespace Cliente;

use \Cadastro;

Class Cadastro extends \Cadastro {
	public function registrarVenda(){
		echo "Foi registrada uma venda para o clietne " . $this->getNome();
	}
}

?>
