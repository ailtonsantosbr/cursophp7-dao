<?php

class Usuario {

	private $idusuario;
	private $desslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdusuario($idusuario) {
		$this->idusuario = $idusuario;
	}

	public function getDesslogin() {
		return $this->desslogin;
	}

	public function setDesslogin($desslogin) {
		$this->desslogin = $desslogin;
	}

	public function getDessenha() {
		return $this->dessenha;
	}

	public function setDessenha($dessenha) {
		$this->dessenha = $dessenha;
	}

	public function getDtcadastro() {
		return $this->dtcadastro;
	}

	public function setDtcadastro($dtcadastro) {
		$this->dtcadastro = $dtcadastro;
	}

	public function loadById($id) {
		$sql = new Sql();

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
			":ID"=>$id));

		if(isset($result)){
			$row = result[0];

			$this->setIdusuario($row['idusuario']);
			$this->setDesslogin($row['desslogin']);
			$this->setDessenha($row['dessenha']);
			$this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
	}

	public function getList() {

		$sql = new Sql();

		return = $sql->select("SELECT * FROM tb_usuarios ORDER BY desslogin");
	}

	public function __toString() {
		return json_decode(array(
			"idusuario"=>$this->getIdusuario(),
			"desslogin"=>$this->getDesslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
	}
}


?>
