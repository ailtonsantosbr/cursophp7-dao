<?php

class Usuario {

	private $idusuario;
	private $deslogin;
	private $dessenha;
	private $dtcadastro;

	public function getIdusuario() {
		return $this->idusuario;
	}

	public function setIdusuario($idusuario) {
		$this->idusuario = $idusuario;
	}

	public function getDeslogin() {
		return $this->deslogin;
	}

	public function setDeslogin($deslogin) {
		$this->deslogin = $deslogin;
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

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

		// if(isset($result)){
		if (count($result) > 0) {
			$row = $result[0];

			$this->setData($row);
			// $this->setIdusuario($row['idusuario']);
			// $this->setDeslogin($row['deslogin']);
			// $this->setDessenha($row['dessenha']);
			// $this->setDtcadastro(new DateTime($row['dtcadastro']));
		}
	}

	public function getList() {
		$sql = new Sql();
		return = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");
	}

	public static function search($login) {
		$sql = new Sql();
		return $sql->select("SELECT * FROM tb_usuarios LIKE ? ORDER BY deslogin", array(":SEARCH"=>"%".$login."%"));
	}

	public function login($login, $password){
		$sql = new Sql();

		$result = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(":LOGIN"=>$login,":PASSWORD"=>$password
		));

		// if(isset($result)){
		if (count($result)> 0) {
			$row = $result[0];

			$this->setData($row);
			// $this->setIdusuario($row['idusuario']);
			// $this->setDeslogin($row['deslogin']);
			// $this->setDessenha($row['dessenha']);
			// $this->setDtcadastro(new DateTime($row['dtcadastro']));
		} else {
			throw new Exception("Login e/ou senha invalidos ");
		}
	}

	public function __toString() {
		return json_encode(array(
			"idusuario"=>$this->getIdusuario(),
			"deslogin"=>$this->getDeslogin(),
			"dessenha"=>$this->getDessenha(),
			"dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")
			));
	}

	public function query() {
		$sql = new Sql();

		$results = $sql->select("SELECT * FROM tb_usuarios");
	}

	public function setData($data){

		$this->setIdusuario($data['idusuario']);
		$this->setDeslogin($data['deslogin']);
		$this->setDessenha($data['dessenha']);
		$this->setDtcadastro(new DateTime($data['dtcadastro']));
	}

	public function insert(){
		$sql = new Sql();

		$sql->query("INSERT INTO tb_usuarios ('deslogin', 'dessenha') VALUES('ailton', 'xpto') ");
	}

	public function callProcedure(){
		$sql = new Sql();

		$sql->insert("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha()
			));
	}

	public function update($login, $password){

		$this->setDeslogin($login);
		$this->setDessenha($password);

		$sql = new Sql();

		$sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
			':LOGIN'=>$this->getDeslogin(),
			':PASSWORD'=>$this->getDessenha(),
			':ID'=>$this->getIdusuario()
		));
	}

	public function delete(){

		$sql = new Sql();

		$sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
			':ID'=>$this->getIdusuario()
		));
	}

	$this->setIdusuario(0);
	$this->setDeslogin("");
	$this->setDessenha("");
	$this->setDtcadastro(new DateTime());

}


?>
