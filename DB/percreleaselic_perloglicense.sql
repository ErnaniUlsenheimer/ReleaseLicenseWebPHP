CREATE DATABASE  IF NOT EXISTS `percreleaselic` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `percreleaselic`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: percreleaselic
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.20-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `perloglicense`
--

DROP TABLE IF EXISTS `perloglicense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `perloglicense` (
  `id_perloglicense` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `nome_user` text NOT NULL,
  `nome_empresa` text NOT NULL,
  `tipo_licensa` text DEFAULT NULL,
  `descricao_licensa` text NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT current_timestamp(),
  `numero_serie` text DEFAULT NULL,
  PRIMARY KEY (`id_perloglicense`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `perloglicense`
--

LOCK TABLES `perloglicense` WRITE;
/*!40000 ALTER TABLE `perloglicense` DISABLE KEYS */;
INSERT INTO `perloglicense` VALUES (11,1,'Desenvolvimento','PERCOLORE','Software Activator','Key:d25a725fe71b','2021-09-01 11:00:00','0001'),(12,1,'Desenvolvimento','PERCOLORE','Software Activator','Key:d25a725fe71b','2021-09-07 20:58:51',NULL),(17,1,'Desenvolvimento','Percolore','Ativador Sofware','Key:d25a725fe71b','2021-09-08 16:28:43',''),(18,1,'Desenvolvimento','Percolore','Ativador Sofware','Key:123456789012','2021-09-08 16:32:23',''),(19,1,'Desenvolvimento','Percolore','Ativador Sofware','Key:d25a725fe71b','2021-09-08 17:15:55','');
/*!40000 ALTER TABLE `perloglicense` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-14 21:09:47
