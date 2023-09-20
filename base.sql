-- Adminer 4.8.1 MySQL 11.1.2-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `comisiones`;
CREATE TABLE `comisiones` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `archivo` varchar(255) DEFAULT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `texto` longtext DEFAULT NULL,
  `pmcomision` varchar(255) DEFAULT NULL,
  `dmayoria` varchar(255) DEFAULT NULL,
  `dminoria` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `comisiones` (`id`, `archivo`, `informe`, `texto`, `pmcomision`, `dmayoria`, `dminoria`, `creado`, `editado`) VALUES
(1,	NULL,	'5555',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `labor`;
CREATE TABLE `labor` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `archivo` varchar(255) DEFAULT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `ingreso` date DEFAULT NULL,
  `editado` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `labor` (`id`, `archivo`, `informe`, `numero`, `tipo`, `ingreso`, `editado`) VALUES
(1,	'5555',	NULL,	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `mesa`;
CREATE TABLE `mesa` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `archivo` varchar(255) DEFAULT NULL,
  `expte` varchar(255) DEFAULT NULL,
  `adjunto` varchar(255) DEFAULT NULL,
  `extracto` longtext DEFAULT NULL,
  `letra` varchar(255) DEFAULT NULL,
  `paginas` int(133) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `mesa` (`id`, `archivo`, `expte`, `adjunto`, `extracto`, `letra`, `paginas`, `autor`, `estado`, `tipo`, `creado`, `editado`) VALUES
(11,	NULL,	'2222',	NULL,	'este es el dos',	NULL,	NULL,	'González, Alejandra Victoria - Romero, Javier Alejandro',	NULL,	NULL,	'2023-09-20',	NULL),
(12,	NULL,	'33333',	NULL,	'dfgsdfgsdfsdfgd',	NULL,	NULL,	'Romero, Javier Alejandro - Ruiz, Juan Pablo',	NULL,	NULL,	'2023-09-20',	NULL),
(13,	NULL,	'4444',	NULL,	'ddfgsdgsdfg',	NULL,	NULL,	'González, Alejandra Victoria - Romero, Javier Alejandro',	NULL,	NULL,	'2023-09-20',	NULL),
(14,	NULL,	'5555',	NULL,	'aaaaaaa',	NULL,	NULL,	'Romero, Javier Alejandro - Ruiz, Juan Pablo',	NULL,	NULL,	'2023-09-20',	NULL);

DROP TABLE IF EXISTS `presidencia`;
CREATE TABLE `presidencia` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `informe` varchar(255) DEFAULT NULL,
  `lugar_fecha` longtext DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `presidencia` (`id`, `informe`, `lugar_fecha`, `creado`, `editado`) VALUES
(1,	'5555',	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `prosecretaria`;
CREATE TABLE `prosecretaria` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `informe` varchar(255) DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `lugar_fecha` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `prosecretaria` (`id`, `informe`, `firma`, `lugar_fecha`, `creado`, `editado`) VALUES
(1,	'5555',	NULL,	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `secretaria`;
CREATE TABLE `secretaria` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `informe` varchar(255) DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `secretaria` (`id`, `informe`, `firma`, `creado`, `editado`) VALUES
(1,	'4444',	NULL,	NULL,	NULL),
(2,	'5555',	NULL,	NULL,	NULL);

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `correo` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `editado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `usuarios` (`id`, `correo`, `clave`, `nombre`, `tipo`, `creado`, `editado`) VALUES
(1,	'pabloruiz1980@gmail.com',	'soledad',	'Ruiz, Juan Pablo',	'Administrador',	'2023-09-20 15:00:21',	'2023-09-20 17:17:29'),
(2,	'mesa@hcd.ar',	'mesa',	'Romero, Javier Alejandro',	NULL,	'2023-09-20 15:00:59',	NULL),
(3,	'secre@hcd.ar',	'secretaria',	'González, Alejandra Victoria',	NULL,	'2023-09-20 15:01:55',	NULL);

-- 2023-09-20 23:19:59
