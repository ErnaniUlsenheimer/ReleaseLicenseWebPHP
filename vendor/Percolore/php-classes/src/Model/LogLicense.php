<?php 
namespace Percolore\Model;

use \Percolore\DB\Sql;
use \Percolore\Model;

class LogLicense extends Model {

	public static function getLogLicense($id_usuario, $dataInicio, $dataFim)
	{
		$sql = new Sql();
		$query = "SELECT * FROM perloglicense WHERE";
		$query = $query .  " data_cadastro BETWEEN :datainicio AND :datafim AND id_usuario = :id_usuario";
		
		$results = $sql->select($query, array(
			":datainicio"=>$dataInicio,
			":datafim"=>$dataFim,
			":id_usuario"=>$id_usuario
		)); 
		return $results;
	}

	public static function insereLog($id_user, $nomeuser, $nome_empresa, $numero_serie, $tipo_licensa, $descricao_licensa)
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_loglicense_save(:id_usuario, :nome, :empresa, :numero_serie, :tipo_licensa, :descricao_licensa)", array(
			":id_usuario"=>$id_user,
			":nome"=>$nomeuser,
			":empresa"=>$nome_empresa,
			":numero_serie"=>$numero_serie,
			":tipo_licensa"=>$tipo_licensa,
			":descricao_licensa"=>$descricao_licensa
		));
		$retorno = 0;
		foreach ($results as $key => $value) {
			$retorno = (int)$value['id_perloglicense'];
			break;
		}
		return $retorno;

	}

}
 ?>