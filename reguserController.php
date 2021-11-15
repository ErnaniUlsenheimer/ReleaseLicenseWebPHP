<?php 

	use \Percolore\Model\Recurso;
	use \Percolore\Model\Empresa;
	use \Percolore\Model\Usuario;

	

	$app->post('/regUserController/ConsultaDadosUsuariosGruposEmpresas',  function() 
	{
		$lRetorno = new ObjGrupoEmpresa();
		try
		{		
			$recursos = Recurso::getAllGrupo();
			foreach ($recursos as $key => $value) {
				$grupo = new ObjGrupo();
				$grupo->idGrupo = $value['id_recurso'];
				$grupo->nomeGrupo = $value['descricao'];

				array_push($lRetorno->lRecurso, $grupo);

			}

			$empresas = Empresa::getAllEmpresa();
			foreach ($empresas as $key => $value) {
				$emp = new ObjEmpresa();
				$emp->idEmpresa = $value['id_empresa'];
				$emp->nomeEmpresa = $value['nome'];
				array_push($lRetorno->lEmpresa, $emp);

			}
		}
		catch(Exception $e)
		{

		}

		

		echo json_encode($lRetorno);
	 
	});

	$app->post('/regUserController/ConsultaDadosUsuarios',  function() 
	{
		$lRetorno = array();
		try
		{
			$users = Usuario::getAllUser();
			foreach ($users as $key => $value) 
			{
				$aux = new ObjRegUser();
				$aux->id_usuario = $value['id_usuario'];
				$aux->id_empresa = $value['id_empresa'];
				$aux->id_recurso = $value['id_recurso'];
				$aux->nomeUser = $value['nome'];
				$aux->nomeEmpresa = $value['nome_empresa'];
				$aux->nomeRecurso = $value['descricao_recurso'];
				$aux->email = $value['email'];
				$aux->senha = $value['senha'];
				$aux->ativo = $value['ativo'];
				$aux->IdiomaPercolore = $value['idiomapercolore'];
				array_push($lRetorno, $aux);
			}
		}
		catch(Exception $e)
		{

		}
		echo json_encode($lRetorno);
	});

	$app->post('/regUserController/InsertUsuario',  function() 
	{
		$lretorno = new ObjRetorno();
		try
		{
			$nomeuser = $_POST['nomeuser'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$recurso = $_POST['recurso'];
			$empresa = $_POST['empresa'];
			$IdiomaPercolore = $_POST['IdiomaPercolore'];


			$users = Usuario::getAllUser();
			$existe_email = false;
			foreach ($users as $key => $value) 
			{
				if($value['email'] === $email)
				{
					$existe_email = true;
					break;
				}
			}
			if(!$existe_email)
			{
				if ($nomeuser != null && strlen($nomeuser) > 2)
                {
                    if ($email != null && strlen($email) > 4)
                    {
                        if ($senha != null && strlen($senha) >= 4)
                        {
                            $idUser = Usuario::insertUser($nomeuser, $email, $senha, (int)$empresa, $IdiomaPercolore);                    
                            if ($idUser > 0)
                            {
                                $idUserEmp = Empresa::insertUser($idUser, (int)$empresa);
                                $idUsrRec = Recurso::insertUser($idUser, (int)$recurso);
                                if ($idUserEmp > 0 && $idUsrRec > 0)
                                {
                                    $lretorno->retorno = 1;
                                    $lretorno->descricao = "Cadastro realizado com sucesso!";
                                }
                                else
                                {
                                    Usuario::deleteUser($idUser);
                                    $lretorno->retorno = 0;
                                    $lretorno->descricao = "Erro relacionamento entre tabelas!";
                                }
                            }
                            else
                            {
                                $lretorno->retorno = 0;
                                $lretorno->descricao = "Erro no cadastro!";
                            }
                        }
                        else
                        {
                            $lretorno->retorno = 0;
                            $lretorno->descricao = "Campo Senha digite uma senha com no mínimo 4 caracteres!";
                        }
                    }
                    else
                    {
                        $lretorno->retorno = 0;
                        $lretorno->descricao = "Campo Email digite um email válido!";
                    }
                }
                else
                {
                    $lretorno->retorno = 0;
                    $lretorno->descricao = "Campo Usuário digite um nome!";
                }	

			}
			else
			{
				 $lretorno->retorno = 0;
				 $lretorno->descricao = "Email já cadastrado na base de dados!";
			}

		}
		catch(Exception $exc)
		{
			$lretorno->retorno = -1;
			$lretorno->descricao = "Error:"+ $exc->getMessage();
		}

		echo json_encode($lretorno);

	});

	$app->post('/regUserController/UpdateUsuario',  function() 
	{
		$lretorno = new ObjRetorno();
		try
		{
			$idUser = $_POST['idUser'];
			$nomeuser = $_POST['nomeuser'];
			$email = $_POST['email'];
			$senha = $_POST['senha'];
			$recurso = $_POST['recurso'];
			$empresa = $_POST['empresa'];
			$IdiomaPercolore = $_POST['IdiomaPercolore'];
			$ativo = $_POST['ativo'] === "True" ? 1 : 0;
			if ($nomeuser != null && strlen($nomeuser) > 2)
            {
                if ($email != null && strlen($email) > 4)
                {
                    if ($senha != null && strlen($senha) >= 4)
                    {
                        $att = Usuario::UpdateUser((int)$idUser, $nomeuser, $email, $senha, (int)$empresa, $IdiomaPercolore, $ativo);                    
                        if ($att)
                        {
                            $isUserEmp = Empresa::UpdateUser((int)$idUser, (int)$empresa);
                            $isUsrRec = Recurso::UpdateUser((int)$idUser, (int)$recurso);
                            if ($isUserEmp && $isUsrRec )
                            {
                                $lretorno->retorno = 1;
                                $lretorno->descricao = "Cadastro realizado com sucesso!";
                            }
                            else
                            {
                                Usuario::deleteUser($idUser);
                                $lretorno->retorno = 0;
                                $lretorno->descricao = "Erro relacionamento entre tabelas!";
                            }
                        }
                        else
                        {
                            $lretorno->retorno = 0;
                            $lretorno->descricao = "Erro no cadastro!";
                        }
                    }
                    else
                    {
                        $lretorno->retorno = 0;
                        $lretorno->descricao = "Campo Senha digite uma senha com no mínimo 4 caracteres!";
                    }
                }
                else
                {
                    $lretorno->retorno = 0;
                    $lretorno->descricao = "Campo Email digite um email válido!";
                }
            }
            else
            {
                $lretorno->retorno = 0;
                $lretorno->descricao = "Campo Usuário digite um nome!";
            }	
		}
		catch(Exception $exc)
		{
			$lretorno->retorno = -1;
			$lretorno->descricao = "Error:"+ $exc->getMessage();
		}

		echo json_encode($lretorno);
	});	

	$app->post('/regUserController/deleteUsuario',  function() 
	{
		$lretorno = new ObjRetorno();
		try
		{
			$idUser = $_POST['idUser'];
			$att = Usuario::deleteUser((int)$idUser);                    
            if ($att)
            {
                $isUserEmp = Empresa::deleteUser((int)$idUser);
                $isUsrRec = Recurso::deleteUser((int)$idUser);
                if ($isUserEmp && $isUsrRec )
                {
                    $lretorno->retorno = 1;
                    $lretorno->descricao = "Usuário removido com sucesso!";
                }
                else
                {
                    Usuario::deleteUser($idUser);
                    $lretorno->retorno = 0;
                    $lretorno->descricao = "Erro relacionamento entre tabelas!";
                }
            }
            else
            {
                $lretorno->retorno = 0;
                $lretorno->descricao = "Erro no cadastro!";
            }

		}
		catch(Exception $exc)
		{
			$lretorno->retorno = -1;
			$lretorno->descricao = "Error:"+ $exc->getMessage();
		}

		echo json_encode($lretorno);
	});


	class ObjRegUser
	{
		public $id_usuario;
        public $id_empresa;
        public $id_recurso;
        public $nomeUser;
        public $nomeEmpresa;
        public $nomeRecurso;
        public $email;
        public $senha;
        public $IdiomaPercolore;
        public $ativo;
	}

	class ObjGrupoEmpresa
    {
    	public $lRecurso = array();
    	public $lEmpresa = array();
	}

	class ObjGrupo
	{
		public $idGrupo;
		public $nomeGrupo;

	}
	class ObjEmpresa
	{
		public $idEmpresa;
		public $nomeEmpresa;
	}

	class ObjRetorno        
    { 
        public $retorno;
        public $descricao;
    }
	
 ?>
