# ************************************************************
# Sequel Pro SQL dump
# Versión 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.19)
# Base de datos: sistema_innovacion
# Tiempo de Generación: 2017-08-14 12:49:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE educa_icinf;

USE educa_icinf;


# Volcado de tabla administrador
# ------------------------------------------------------------

DROP TABLE IF EXISTS `administrador`;

CREATE TABLE `administrador` (
  `id_administrador` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_adm` varchar(50) DEFAULT NULL,
  `correo_electronico` varchar(50) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_administrador`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `administrador_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `administrador` WRITE;
/*!40000 ALTER TABLE `administrador` DISABLE KEYS */;

INSERT INTO `administrador` (`id_administrador`, `nombre_adm`, `correo_electronico`, `id_usuario`)
VALUES
	(1,'mauro','mauro.travisany@kiwox.cl',14);

/*!40000 ALTER TABLE `administrador` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla administrador_responde_solicitud
# ------------------------------------------------------------

DROP TABLE IF EXISTS `administrador_responde_solicitud`;

CREATE TABLE `administrador_responde_solicitud` (
  `id_administrador` int(11) NOT NULL,
  `id_solicitud` int(11) NOT NULL,
  `fecha_respuesta` date DEFAULT NULL,
  PRIMARY KEY (`id_administrador`,`id_solicitud`),
  KEY `id_solicitud` (`id_solicitud`),
  CONSTRAINT `administrador_responde_solicitud_ibfk_1` FOREIGN KEY (`id_administrador`) REFERENCES `administrador` (`id_administrador`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `administrador_responde_solicitud_ibfk_2` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Volcado de tabla estado_solicitud
# ------------------------------------------------------------

DROP TABLE IF EXISTS `estado_solicitud`;

CREATE TABLE `estado_solicitud` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_estado` varchar(50) DEFAULT NULL,
  `id_solicitud` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_estado`),
  KEY `id_solicitud` (`id_solicitud`),
  CONSTRAINT `estado_solicitud_ibfk_1` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `estado_solicitud` WRITE;
/*!40000 ALTER TABLE `estado_solicitud` DISABLE KEYS */;

INSERT INTO `estado_solicitud` (`id_estado`, `nombre_estado`, `id_solicitud`)
VALUES
	(8,'Pendiente',14);

/*!40000 ALTER TABLE `estado_solicitud` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla estudiante
# ------------------------------------------------------------

DROP TABLE IF EXISTS `estudiante`;

CREATE TABLE `estudiante` (
  `rut` int(11) NOT NULL,
  `nombre` varchar(50) DEFAULT NULL,
  `apellido` varchar(50) DEFAULT NULL,
  `correo_personal` varchar(50) DEFAULT NULL,
  `edad` int(11) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  PRIMARY KEY (`rut`),
  KEY `id_usuario` (`id_usuario`),
  CONSTRAINT `estudiante_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `estudiante` WRITE;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;

INSERT INTO `estudiante` (`rut`, `nombre`, `apellido`, `correo_personal`, `edad`, `telefono`, `id_usuario`)
VALUES
	(18794142,'mauro travisany','travisany','travisany.asd@gmail.com',43,948782404,13),
	(187941423,'mauro','travisany','travisany.rm@gmail.com',23,948782404,14);

/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla solicitud
# ------------------------------------------------------------

DROP TABLE IF EXISTS `solicitud`;

CREATE TABLE `solicitud` (
  `id_solicitud` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_solicitante` varchar(50) DEFAULT NULL,
  `apellido_solicitante` varchar(50) DEFAULT NULL,
  `edad_solicitante` varchar(50) DEFAULT NULL,
  `carrera_solicitante` varchar(50) DEFAULT NULL,
  `resumen` text,
  `descripcion` text,
  `respuesta` text,
  `fecha_emision` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id_solicitud`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `solicitud` WRITE;
/*!40000 ALTER TABLE `solicitud` DISABLE KEYS */;

INSERT INTO `solicitud` (`id_solicitud`, `nombre_solicitante`, `apellido_solicitante`, `edad_solicitante`, `carrera_solicitante`, `resumen`, `descripcion`, `respuesta`, `fecha_emision`)
VALUES
	(14,'mauro','travisany','23','informatico','kskladksakd','skdklnsadknsa','. .','2017-08-12 22:04:36');

/*!40000 ALTER TABLE `solicitud` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla tipo_solicitud
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tipo_solicitud`;

CREATE TABLE `tipo_solicitud` (
  `id_tipo` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_solicitud` varchar(50) DEFAULT NULL,
  `id_solicitud` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_tipo`),
  KEY `id_solicitud` (`id_solicitud`),
  CONSTRAINT `tipo_solicitud_ibfk_1` FOREIGN KEY (`id_solicitud`) REFERENCES `solicitud` (`id_solicitud`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `tipo_solicitud` WRITE;
/*!40000 ALTER TABLE `tipo_solicitud` DISABLE KEYS */;

INSERT INTO `tipo_solicitud` (`id_tipo`, `tipo_solicitud`, `id_solicitud`)
VALUES
	(1,'Sugerencia',14);

/*!40000 ALTER TABLE `tipo_solicitud` ENABLE KEYS */;
UNLOCK TABLES;


# Volcado de tabla usuario
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `tipo_usuario` varchar(50) DEFAULT NULL,
  `contrasena` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;

INSERT INTO `usuario` (`id_usuario`, `tipo_usuario`, `contrasena`)
VALUES
	(13,'estudiante','pasd'),
	(14,'administrador','123456');

/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;







