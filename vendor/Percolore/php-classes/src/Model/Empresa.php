<?php 
namespace Percolore\Model;

use \Percolore\DB\Sql;
use \Percolore\Model;

class Empresa extends Model {
	protected $fields = [
		"id_empresa", "nome", "prefixo", "data_cadastro"
	];

	public static function getAllEmpresa()
	{

		$sql = new Sql();
		return $sql->select("SELECT * FROM empresa");

	}

	public static function insertUser($id_usuario, $id_empresa)
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_userempresa_save(:id_usuario, :id_empresa)", array(
			":id_usuario"=>$id_usuario,
			":id_empresa"=>$id_empresa,
			
		));
		$retorno = 0;
		foreach ($results as $key => $value) {
			$retorno = (int)$value['id_usuario_empresa'];
			break;
		}
		return $retorno;

	}

	public static function UpdateUser($id_usuario, $id_empresa)
	{
		$sql = new Sql();

		$results = $sql->select("UPDATE usuario_empresa SET id_empresa = :id_empresa WHERE id_usuario = :id_usuario", array(
			":id_usuario"=>$id_usuario,
			":id_empresa"=>$id_empresa			
		));
		
		return true;

	}
	public static function deleteUser($id_usuario)
	{

		$sql = new Sql();

		$sql->query("DELETE FROM usuario_empresa WHERE id_usuario = :id_usuario", [
			':id_usuario'=>$id_usuario
		]);
		return true;

	}


}
?>