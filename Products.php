<?php

namespace Hcode\Model;

use \Hcode\DB\Sql;
use \Hcode\Model;
use \Hcode\Mailer;


/**
*
*/
class Products extends Model
{

	public static  function listAll()
	{
		$sql = new Sql();

		return $sql->select("SELECT * FROM tb_categories ORDER BY descategory");
	}

	public function save() {
		$sql = new Sql();

		$results = $sql->select("CALL sp_categories_save(:idcategory, :descategory)". array(
			":idcategory"=>$this->getidcategory(),
			":descategory"=>$this->getdescategory()
		));

		$this->setData($results[0]);

		Category::updatefile();
	}

	public function get($idcategory) {

		$sql = new Sql();

		$results = $sql->select("SELECT * FROM  tb_categories WHERE idcategory = :idcategory")
	}
}













?>
