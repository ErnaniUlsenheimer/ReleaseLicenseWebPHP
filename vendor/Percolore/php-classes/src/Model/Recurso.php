<?php 
namespace Percolore\Model;

use \Percolore\DB\Sql;
use \Percolore\Model;

class Recurso extends Model {
	protected $fields = [
		"id_recurso", "descricao"
	];

	public static function getAllGrupo()
	{

		$sql = new Sql();
		return $sql->select("SELECT * FROM recurso");

	}

	public static function insertUser($id_usuario, $id_recurso)
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_userrecurso_save(:id_usuario, :id_recurso)", array(
			":id_usuario"=>$id_usuario,
			":id_recurso"=>$id_recurso,
			
		));
		$retorno = 0;
		foreach ($results as $key => $value) {
			$retorno = (int)$value['id_usuario_recurso'];
			break;
		}
		return $retorno;

	}

	public static function UpdateUser($id_usuario, $id_recurso)
	{
		$sql = new Sql();

		$results = $sql->select("UPDATE usuario_recurso SET id_recurso = :id_recurso WHERE id_usuario = :id_usuario", array(
			":id_usuario"=>$id_usuario,
			":id_recurso"=>$id_recurso
			
		));
		
		return true;

	}
	public static function deleteUser($id_usuario)
	{

		$sql = new Sql();

		$sql->query("DELETE FROM usuario_recurso WHERE id_usuario = :id_usuario", [
			':id_usuario'=>$id_usuario
		]);
		return true;

	}

}
 ?>