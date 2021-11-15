CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_userempresa_save`(
pid_usuario int(11),
pid_empresa int(11)
)
BEGIN
	DECLARE pid_usuario_empresa int(11);
	INSERT INTO usuario_empresa (id_usuario, id_empresa) VALUES (pid_usuario, pid_empresa);    
	SET pid_usuario_empresa = LAST_INSERT_ID();
    
    SELECT * FROM usuario_empresa WHERE id_usuario_empresa = pid_usuario_empresa;
	
END