<?php 

use \Percolore\Model\Usuario;
use \Percolore\Model\LogLicense;
use \Percolore\Model\Security;

	$app->post('/License/ConsultaLicenseActivator',  function() 
	{
		$lRetorno = new LicenseActivator();
		$lRetorno->StatusLicence = 0;
		try
		{
			$chaveLic = $_POST['chave'];	
			if(strlen($chaveLic) == 12)
			{
				//$md5 = md5($chaveLic, false);
				$security  = new Security();
				$md5 = $security->AtivacaoSoftware($chaveLic);

				if(strlen($md5)>12)
				{
					$md5 = substr($md5, 0, 12);
				}
				
				$lRetorno->GenerateLicense = $md5;
				$lRetorno->StatusLicence = 1;

			}
			else
			{
				$lRetorno->StatusLicence = 2;
			}
		}
		catch(Exception $e)
		{
			$lRetorno->GenerateLicense = $e->getMessage();

		}
		echo json_encode($lRetorno);
	});

	$app->post('/License/ConsultaLicenseManutencao',  function() 
	{
		$lRetorno = new LicenseActivator();
		$lRetorno->StatusLicence = 0;
		try
		{
			//implementar

		}
		catch(Exception $e)
		{
			$lRetorno->GenerateLicense = $e->getMessage();

		}
		echo json_encode($lRetorno);
	});

	$app->post('/License/SetLogLicense',  function() 
	{
		
		$lRetorno = 0;
		try
		{
			// Get Cookies
			$idUser = 1;
			$nome_user = 'Desenvolvimento';
			$nome_empresa = 'Percolore';
			
			$numeroSerie = (isset($_POST['numeroSerie'])) ? $_POST['numeroSerie'] : '';
			$tipo = $_POST['tipo'];
			$descricao = $_POST['descricao'];
			$lRetorno = LogLicense::insereLog((int)$idUser, $nome_user, $nome_empresa, $numeroSerie, $tipo, $descricao );
			if($lRetorno > 0)
			{
				$lRetorno = 1;
			}
		}
		catch(Exception $e)
		{
			

		}
		echo json_encode($lRetorno);
	});

	class LicenseActivator
	{
		public $GenerateLicense;
		public $StatusLicence;
	}

 ?>