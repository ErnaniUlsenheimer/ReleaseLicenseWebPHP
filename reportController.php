<?php 
use \Percolore\Model\Usuario;
use \Percolore\Model\LogLicense;

	
	$app->post('/ReportController/ConsultaDadosUser',  function() 
	{
		$lRetorno = array();
		try
		{
			$users = Usuario::getAllUser();
			foreach ($users as $key => $value) 
			{
				$aux = new ObjUser();
				$aux->id_usuario = $value['id_usuario'];
				$aux->nomeUser = $value['nome'];
				array_push($lRetorno, $aux);
			}
		}
		catch(Exception $e)
		{

		}
		echo json_encode($lRetorno);
	});

	
	$app->post('/ReportController/ConsultaDadosReport',  function() 
	{
		$lRetorno = array();
		try
		{
			$idUser = $_POST['idUser'];			
			$data_inicio =  $_POST['dataInicio'] . ' 00:00:00';
			$data_fim = $_POST['dataFim'] . ' 23:59:59';

			$loglic = LogLicense::getLogLicense((int)$idUser, $data_inicio , $data_fim);
			foreach ($loglic as $key => $value) 
			{
				$aux = new ObjReport();
				$aux->nomeUser = $value['nome_user'];
				$aux->nomeEmpresa = $value['nome_empresa'];
				$aux->numeroSerie = (isset($value['numero_serie'])) ? $value['numero_serie'] : '';
				$aux->tipoLicense = $value['tipo_licensa'];
				$aux->descricaoLicense = $value['descricao_licensa'];
				$aux->dataCadastro = $value['data_cadastro'];

				array_push($lRetorno, $aux);
			}


		}
		catch(Exception $e)
		{

		}
		echo json_encode($lRetorno);
	});

	class ObjReport
    {
        public $nomeUser;
        public $nomeEmpresa;            
        public $numeroSerie;
        public $tipoLicense;
        public $descricaoLicense;
        public $dataCadastro;
    }

	class ObjUser
	{
		public $id_usuario;
        public $nomeUser;
	}

	

 ?>