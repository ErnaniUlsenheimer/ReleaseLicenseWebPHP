CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_loglicense_save`(
pid_usuario int(11),
pnome text,
pempresa text,
pnumero_serie text,
ptipo_licensa text,
pdescricao_licensa text

)
BEGIN
	DECLARE pid_perloglicense int(11);
	INSERT INTO perloglicense (id_usuario, nome_user, nome_empresa, tipo_licensa, 
    descricao_licensa, numero_serie) VALUES (pid_usuario, pnome,
    pempresa, ptipo_licensa, pdescricao_licensa, pnumero_serie);    
	SET pid_perloglicense = LAST_INSERT_ID();
    
    SELECT * FROM perloglicense WHERE id_perloglicense = pid_perloglicense;
	
END