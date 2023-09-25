-- Adminer 4.8.1 MySQL 11.1.2-MariaDB dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `entradas`;
CREATE TABLE `entradas` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `expte` varchar(255) DEFAULT NULL,
  `archivo_mesa` varchar(255) DEFAULT NULL,
  `archivo_labor` varchar(255) DEFAULT NULL,
  `archivo_comisiones` varchar(255) DEFAULT NULL,
  `adjunto` varchar(255) DEFAULT NULL,
  `extracto` longtext DEFAULT NULL,
  `letra` varchar(255) DEFAULT NULL,
  `paginas` int(133) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `informe_secretaria` varchar(255) DEFAULT NULL,
  `informe_prosecretaria` varchar(255) DEFAULT NULL,
  `informe_presidencia` varchar(255) DEFAULT NULL,
  `informe_labor` varchar(255) DEFAULT NULL,
  `informe_comisiones` varchar(255) DEFAULT NULL,
  `firma_secretaria` varchar(255) DEFAULT NULL,
  `firma_prosecretaria` varchar(255) DEFAULT NULL,
  `firma_presidencia` varchar(255) DEFAULT NULL,
  `lugarfecha_secretaria` varchar(255) DEFAULT NULL,
  `lugarfecha_prosecretaria` varchar(255) DEFAULT NULL,
  `lugarfecha_presidencia` varchar(255) DEFAULT NULL,
  `lugarfecha_labor` varchar(255) DEFAULT NULL,
  `lugarfecha_comisiones` varchar(255) DEFAULT NULL,
  `numero_proyecto` varchar(255) DEFAULT NULL,
  `tipo_proyecto` varchar(255) DEFAULT NULL,
  `pm_comision` varchar(255) DEFAULT NULL,
  `dmayoria` varchar(255) DEFAULT NULL,
  `dminoria` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `entradas` (`id`, `expte`, `archivo_mesa`, `archivo_labor`, `archivo_comisiones`, `adjunto`, `extracto`, `letra`, `paginas`, `autor`, `estado`, `tipo`, `informe_secretaria`, `informe_prosecretaria`, `informe_presidencia`, `informe_labor`, `informe_comisiones`, `firma_secretaria`, `firma_prosecretaria`, `firma_presidencia`, `lugarfecha_secretaria`, `lugarfecha_prosecretaria`, `lugarfecha_presidencia`, `lugarfecha_labor`, `lugarfecha_comisiones`, `numero_proyecto`, `tipo_proyecto`, `pm_comision`, `dmayoria`, `dminoria`, `creado`, `editado`) VALUES
(8,	'1111',	NULL,	NULL,	NULL,	'adjun 345',	'sdasdf asdasdfasdsdsdfasd',	'M',	34,	'Bloque Ciudadanos a Gobernar - Concejal Vallejos, Sofía',	'Con estado',	'Ordenanza',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-09-27',	NULL),
(9,	'2222',	'Captura desde 2023-09-25 12-09-14.png',	NULL,	NULL,	'adj',	'rtgsgdfgdfg',	'e',	23,	'Bloque Nuevo Encuentro - Bloque Partido Justicialista',	'fffff',	'Declaración',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-09-26',	NULL),
(10,	'3333',	'Captura desde 2023-09-25 12-09-14.png',	NULL,	NULL,	'sdfsd',	'sdfasd',	'd',	12,	'Bloque Ciudadanos a Gobernar - Bloque Ciudadanos Comprometidos',	'ssss',	'Ordenanza',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-09-14',	'2023-09-25'),
(11,	'4455',	'Captura desde 2023-09-25 12-09-14.png',	NULL,	NULL,	'adjunto 222',	'hola mundo ñ á',	'D',	11,	'Señores Concejales',	'Sin estado',	'Ordenanza',	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	NULL,	'2023-09-20',	'2023-09-25');

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `id` int(133) NOT NULL AUTO_INCREMENT,
  `correo` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `editado` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

INSERT INTO `usuarios` (`id`, `correo`, `clave`, `nombre`, `categoria`, `creado`, `editado`) VALUES
(1,	'pabloruiz1980@gmail.com',	'soledad',	'Ruiz, Juan Pablo',	'Administrador',	'2023-09-20 15:00:21',	'2023-09-20 17:17:29'),
(2,	'mesa@hcd.ar',	'mesa',	'Romero, Javier Alejandro',	'Editor',	'2023-09-20 15:00:59',	'2023-09-20 20:56:27'),
(3,	NULL,	NULL,	'Concejal Vallejos, Alfredo',	'Autor',	'2023-09-21 20:28:59',	NULL),
(4,	NULL,	NULL,	'Concejal Duarte Ojeda, Cecilia',	'Autor',	'2023-09-21 20:31:20',	NULL),
(5,	NULL,	NULL,	'Concejal Achitte, Eduardo',	'Autor',	'2023-09-21 20:31:53',	NULL),
(6,	NULL,	NULL,	'Concejal Ibañes, Esteban',	'Autor',	'2023-09-21 20:32:19',	NULL),
(7,	NULL,	NULL,	'Concejal Nieves, Fabián',	'Autor',	'2023-09-21 20:32:52',	NULL),
(8,	NULL,	NULL,	'Concejal Ojeda, Florencia',	'Autor',	'2023-09-21 20:33:18',	NULL),
(9,	NULL,	NULL,	'Concejal Gauna, Gabriela',	'Autor',	'2023-09-21 20:33:49',	NULL),
(10,	NULL,	NULL,	'Concejal Torres, Héctor',	'Autor',	'2023-09-21 20:34:14',	NULL),
(11,	NULL,	NULL,	'Concejal Miranda Gallino, Julian',	'Autor',	'2023-09-21 20:34:44',	NULL),
(12,	NULL,	NULL,	'Concejal Almirón, Lisandro',	'Autor',	'2023-09-21 20:35:08',	NULL),
(13,	NULL,	NULL,	'Concejal Acevedo Caffa, Lorena',	'Autor',	'2023-09-21 20:35:32',	NULL),
(14,	NULL,	NULL,	'Concejal Duarte, Magdalena',	'Autor',	'2023-09-21 20:36:05',	NULL),
(15,	NULL,	NULL,	'Concejal Mecca, Melisa',	'Autor',	'2023-09-21 20:36:25',	NULL),
(16,	NULL,	NULL,	'Concejal Franco Laprovitta, Mercedes',	'Autor',	'2023-09-21 20:37:01',	NULL),
(17,	NULL,	NULL,	'Concejal Mestres, Mercedes',	'Autor',	'2023-09-21 20:37:33',	NULL),
(18,	NULL,	NULL,	'Concejal Mosquera, Manuel',	'Autor',	'2023-09-21 20:37:56',	NULL),
(19,	NULL,	NULL,	'Concejal Lovera, Nelsón',	'Autor',	'2023-09-21 20:38:28',	NULL),
(20,	NULL,	NULL,	'Concejal Vallejos, Sofía',	'Autor',	'2023-09-21 20:38:52',	NULL),
(21,	NULL,	NULL,	'Concejal Barrios, Yamandú',	'Autor',	'2023-09-21 20:39:28',	NULL),
(22,	NULL,	NULL,	'Señores Concejales',	'Autor',	'2023-09-21 20:39:56',	NULL),
(23,	NULL,	NULL,	'Bloque Unión Cívica Radical',	'Autor',	'2023-09-21 20:40:38',	NULL),
(24,	NULL,	NULL,	'Bloque Ciudadanos a Gobernar',	'Autor',	'2023-09-21 20:41:04',	NULL),
(25,	NULL,	NULL,	'Bloque Partido Nuevo',	'Autor',	'2023-09-21 20:41:38',	NULL),
(26,	NULL,	NULL,	'Bloque Coalición Cívica Ari',	'Autor',	'2023-09-21 20:42:08',	NULL),
(27,	NULL,	NULL,	'Bloque Partido Liberal',	'Autor',	'2023-09-21 20:43:24',	NULL),
(28,	NULL,	NULL,	'Bloque Unión Celeste y Blanca',	'Autor',	'2023-09-21 20:44:00',	NULL),
(29,	NULL,	NULL,	'Bloque Partido Justicialista',	'Autor',	'2023-09-21 20:44:54',	NULL),
(30,	NULL,	NULL,	'Bloque JP Descamisados. Partido Justicialista',	'Autor',	'2023-09-21 20:45:45',	NULL),
(31,	NULL,	NULL,	'Bloque Partido Popular',	'Autor',	'2023-09-21 20:46:12',	NULL),
(32,	NULL,	NULL,	'Bloque PRO',	'Autor',	'2023-09-21 20:46:49',	NULL),
(33,	NULL,	NULL,	'Bloque Nuevo Encuentro',	'Autor',	'2023-09-21 20:47:18',	NULL),
(34,	NULL,	NULL,	'Bloque Ciudadanos Comprometidos',	'Autor',	'2023-09-21 20:47:41',	NULL),
(35,	NULL,	NULL,	'Bloque Encuentro Liberal',	'Autor',	'2023-09-21 20:48:01',	NULL),
(36,	NULL,	NULL,	'Bloque Unión Popular',	'Autor',	'2023-09-21 20:48:39',	NULL);

-- 2023-09-25 22:06:11
