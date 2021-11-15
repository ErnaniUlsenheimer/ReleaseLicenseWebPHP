CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_usersupdate_save`(
pid_usuario int(11),
pnome text,
pemail text,
psenha text,
pempresa int(11),
pidiomapercolore text,
pativo tinyint(4)
)
BEGIN
	
	IF pid_usuario > 0 THEN
		
		UPDATE usuario
        SET 
			nome = pnome,
            email = pemail,
            senha = psenha,
            id_empresa = pempresa,
            idiomapercolore = pIdiomaPercolore,
            ativo = pativo
        WHERE id_usuario = pid_usuario;
        
    ELSE
		
		INSERT INTO usuario (nome, email, senha, id_empresa, idiomapercolore, ativo, id_cliente) 
        VALUES(pnome, pemail, psenha, pempresa, pIdiomaPercolore, pativo, 0);
        
        SET pid_usuario = LAST_INSERT_ID();
        
    END IF;
    
    SELECT * FROM usuario WHERE id_usuario = pid_usuario;
    
END