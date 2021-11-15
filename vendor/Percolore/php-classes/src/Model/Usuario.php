<?php 
namespace Percolore\Model;

use \Percolore\DB\Sql;
use \Percolore\Model;

define('SECRET_IV', pack('a16', '1500k'));	
define('SECRET', pack('a16', '1500k'));

class Usuario extends Model {
	

	public static function getAllUser()
	{

		$sql = new Sql();
		$query = "SELECT _User.*, RO.ID_RECURSO AS id_recurso, RO.DESCRICAO AS descricao_recurso, EP.NOME AS nome_empresa FROM USUARIO";
		$query = $query .  " _User LEFT JOIN USUARIO_EMPRESA UE ON UE.ID_USUARIO = _User.ID_USUARIO";
		$query = $query .  " LEFT JOIN EMPRESA EP ON EP.ID_EMPRESA = UE.ID_EMPRESA";
		$query = $query . " LEFT JOIN USUARIO_RECURSO UR ON UR.ID_USUARIO = _USER.ID_USUARIO";
		$query = $query .  " LEFT JOIN RECURSO RO ON RO.ID_RECURSO = UR.ID_RECURSO";

		$results = $sql->select($query); 
		try
		{
			for($i = 0; $i< count($results); $i++)
			{
				$data = $results[$i];

				$string = openssl_decrypt(base64_decode($data['senha']), 'AES-128-CBC', SECRET, 0, SECRET_IV);

				$stringdec = json_decode($string, true);

				$pass = $stringdec['password'];

				$results[$i]['senha'] = $pass;
				

			}
		}
		catch(Exception $exc)
		{
		

		}		
		return $results;
	}

	public static function insertUser($nomeuser, $email, $senha, $empresa, $idiomapercolore)
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_usersupdate_save(:id_usuario, :nome, :email, :senha, :empresa, :idiomapercolore, :ativo)", array(
			":id_usuario"=>0,
			":nome"=>$nomeuser,
			":email"=>$email,
			":senha"=>Usuario::getPasswordHash($senha),
			":empresa"=>$empresa,
			":idiomapercolore"=>$idiomapercolore,
			":ativo"=>1
		));
		$retorno = 0;
		foreach ($results as $key => $value) {
			$retorno = (int)$value['id_usuario'];
			break;
		}
		return $retorno;

	}

	public static function getPasswordHash($password)
	{

		$code = base64_encode(
					openssl_encrypt(
					json_encode( ["password" => $password]
						),
					'AES-128-CBC',
					SECRET,
					0,
					SECRET_IV
				));

		return $code;

		//return password_hash($password, PASSWORD_DEFAULT, [
		//	'cost'=>12
		//]);

	}

	public static function deleteUser($id_usuario)
	{

		$sql = new Sql();

		$sql->query("DELETE FROM usuario WHERE id_usuario = :id_usuario", [
			':id_usuario'=>$id_usuario
		]);
		return true;

	}

	public static function UpdateUser($id_usuario, $nomeuser, $email, $senha, $empresa, $idiomapercolore, $ativo)
	{
		$sql = new Sql();

		$results = $sql->select("CALL sp_usersupdate_save(:id_usuario, :nome, :email, :senha, :empresa, :idiomapercolore, :ativo)", array(
			":id_usuario"=>$id_usuario,
			":nome"=>$nomeuser,
			":email"=>$email,
			":senha"=>Usuario::getPasswordHash($senha),
			":empresa"=>$empresa,
			":idiomapercolore"=>$idiomapercolore,
			":ativo"=>$ativo
		));
		$retorno = false;
		foreach ($results as $key => $value) {
			$retorno = true;
			break;
		}
		return $retorno;

	}

}
?>