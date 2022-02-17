<?php
    $dbh = new PDO("mysql:host=us-cdbr-east-04.cleardb.com;dbname=heroku_73ae08ece5ae102","bab7b6d6b428e0","5e897f8a");
	
	$sql = "
	
	-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.33 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla subasi.estudiantes
CREATE TABLE IF NOT EXISTS `estudiantes` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `PNOMBRE` varchar(300) NOT NULL,
  `SNOMBRE` varchar(300) NOT NULL,
  `PAPELLIDO` varchar(300) NOT NULL,
  `SAPELLIDO` varchar(300) NOT NULL,
  `GRADO` int(11) DEFAULT NULL,
  `MORA` bit(1) DEFAULT NULL,
  `MATRICULADO` bit(1) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla subasi.pagos
CREATE TABLE IF NOT EXISTS `pagos` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `MONTO` varchar(300) NOT NULL,
  `ESTUDIANTE` varchar(30) NOT NULL,
  `FECHA` datetime NOT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla subasi.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NOMBRE` varchar(300) NOT NULL,
  `USERNAME` varchar(30) NOT NULL,
  `PASSWORD` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  UNIQUE KEY `ID` (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
	";
$studentsQuery = $dbh->query($sql);

	
	
	
	
?>