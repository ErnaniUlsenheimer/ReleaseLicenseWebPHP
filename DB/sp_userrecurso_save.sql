CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_userrecurso_save`(
pid_usuario int(11),
pid_recurso int(11)
)
BEGIN
	DECLARE pid_usuario_recurso int(11);
	INSERT INTO usuario_recurso (id_usuario, id_recurso) VALUES (pid_usuario, pid_recurso);    
	SET pid_usuario_recurso = LAST_INSERT_ID();
    
    SELECT * FROM usuario_recurso WHERE id_usuario_recurso = pid_usuario_recurso;
	
END