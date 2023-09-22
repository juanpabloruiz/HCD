-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 22-09-2023 a las 23:43:16
-- Versión del servidor: 11.1.2-MariaDB
-- Versión de PHP: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comisiones`
--

CREATE TABLE `comisiones` (
  `id` int(133) NOT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `pmcomision` varchar(255) DEFAULT NULL,
  `dmayoria` varchar(255) DEFAULT NULL,
  `dminoria` varchar(255) DEFAULT NULL,
  `lugar_fecha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `comisiones`
--

INSERT INTO `comisiones` (`id`, `archivo`, `informe`, `pmcomision`, `dmayoria`, `dminoria`, `lugar_fecha`) VALUES
(1, NULL, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `labor`
--

CREATE TABLE `labor` (
  `id` int(133) NOT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `lugar_fecha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `labor`
--

INSERT INTO `labor` (`id`, `archivo`, `informe`, `numero`, `tipo`, `lugar_fecha`) VALUES
(1, NULL, NULL, NULL, NULL, NULL),
(2, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id` int(133) NOT NULL,
  `expte` varchar(255) DEFAULT NULL,
  `archivo` varchar(255) DEFAULT NULL,
  `adjunto` varchar(255) DEFAULT NULL,
  `extracto` longtext DEFAULT NULL,
  `letra` varchar(255) DEFAULT NULL,
  `paginas` int(133) DEFAULT NULL,
  `autor` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id`, `expte`, `archivo`, `adjunto`, `extracto`, `letra`, `paginas`, `autor`, `estado`, `tipo`, `creado`, `editado`) VALUES
(1, '4444', 'Captura desde 2023-09-22 13-52-32.png', 'dfg', 'fgdfgdfg', 'f', 3, 'Concejal Mestres, Mercedes', 'rer', 'Declaración', '2023-09-22', NULL),
(2, '1234', 'Captura desde 2023-09-22 13-53-04.png', 'ddf', 'dfgdf', 'f', 34, 'Concejal Mestres, Mercedes - Concejal Miranda Gallino, Julian', 'dfdfd', 'Resolución', '2023-09-22', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presidencia`
--

CREATE TABLE `presidencia` (
  `id` int(133) NOT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `lugar_fecha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `presidencia`
--

INSERT INTO `presidencia` (`id`, `informe`, `firma`, `lugar_fecha`) VALUES
(1, NULL, NULL, NULL),
(2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prosecretaria`
--

CREATE TABLE `prosecretaria` (
  `id` int(133) NOT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `lugar_fecha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `prosecretaria`
--

INSERT INTO `prosecretaria` (`id`, `informe`, `firma`, `lugar_fecha`) VALUES
(1, NULL, NULL, NULL),
(2, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `id` int(133) NOT NULL,
  `informe` longtext DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `lugar_fecha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id`, `informe`, `firma`, `lugar_fecha`) VALUES
(1, 'Por la presente se remite el Expediente de referencia, para su conocimiento.\r\n                                    <div style=\"text-indent: 100px;\">Sugiriendo salvo mejor criterio el pase a la Dirección de Labor Parlamentaria del HCD en el caso de que considere que corresponda su incorporación al orden del día para ser tratado en Sesión Ordinaria del HCD.</div>\r\n                                    <div style=\"text-indent: 100px;\">Atentamente</div>', '', 'Corrientes, 21 de Septiembre de 2023'),
(2, 'Por la presente se remite el Expediente de referencia, para su conocimiento.\r\n                                    <div style=\"text-indent: 100px;\">Sugiriendo salvo mejor criterio el pase a la Dirección de Labor Parlamentaria del HCD en el caso de que considere que corresponda su incorporación al orden del día para ser tratado en Sesión Ordinaria del HCD.</div>\r\n                                    <div style=\"text-indent: 100px;\">Atentamente</div>', 'Captura desde 2023-09-22 13-52-40.png', 'Corrientes, 22 de Septiembre de 2023');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(133) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `categoria` varchar(255) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `editado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `clave`, `nombre`, `categoria`, `creado`, `editado`) VALUES
(1, 'pabloruiz1980@gmail.com', 'soledad', 'Ruiz, Juan Pablo', 'Administrador', '2023-09-20 15:00:21', '2023-09-20 17:17:29'),
(2, 'mesa@hcd.ar', 'mesa', 'Romero, Javier Alejandro', 'Editor', '2023-09-20 15:00:59', '2023-09-20 20:56:27'),
(3, NULL, NULL, 'Concejal Vallejos, Alfredo', 'Autor', '2023-09-21 20:28:59', NULL),
(4, NULL, NULL, 'Concejal Duarte Ojeda, Cecilia', 'Autor', '2023-09-21 20:31:20', NULL),
(5, NULL, NULL, 'Concejal Achitte, Eduardo', 'Autor', '2023-09-21 20:31:53', NULL),
(6, NULL, NULL, 'Concejal Ibañes, Esteban', 'Autor', '2023-09-21 20:32:19', NULL),
(7, NULL, NULL, 'Concejal Nieves, Fabián', 'Autor', '2023-09-21 20:32:52', NULL),
(8, NULL, NULL, 'Concejal Ojeda, Florencia', 'Autor', '2023-09-21 20:33:18', NULL),
(9, NULL, NULL, 'Concejal Gauna, Gabriela', 'Autor', '2023-09-21 20:33:49', NULL),
(10, NULL, NULL, 'Concejal Torres, Héctor', 'Autor', '2023-09-21 20:34:14', NULL),
(11, NULL, NULL, 'Concejal Miranda Gallino, Julian', 'Autor', '2023-09-21 20:34:44', NULL),
(12, NULL, NULL, 'Concejal Almirón, Lisandro', 'Autor', '2023-09-21 20:35:08', NULL),
(13, NULL, NULL, 'Concejal Acevedo Caffa, Lorena', 'Autor', '2023-09-21 20:35:32', NULL),
(14, NULL, NULL, 'Concejal Duarte, Magdalena', 'Autor', '2023-09-21 20:36:05', NULL),
(15, NULL, NULL, 'Concejal Mecca, Melisa', 'Autor', '2023-09-21 20:36:25', NULL),
(16, NULL, NULL, 'Concejal Franco Laprovitta, Mercedes', 'Autor', '2023-09-21 20:37:01', NULL),
(17, NULL, NULL, 'Concejal Mestres, Mercedes', 'Autor', '2023-09-21 20:37:33', NULL),
(18, NULL, NULL, 'Concejal Mosquera, Manuel', 'Autor', '2023-09-21 20:37:56', NULL),
(19, NULL, NULL, 'Concejal Lovera, Nelsón', 'Autor', '2023-09-21 20:38:28', NULL),
(20, NULL, NULL, 'Concejal Vallejos, Sofía', 'Autor', '2023-09-21 20:38:52', NULL),
(21, NULL, NULL, 'Concejal Barrios, Yamandú', 'Autor', '2023-09-21 20:39:28', NULL),
(22, NULL, NULL, 'Señores Concejales', 'Autor', '2023-09-21 20:39:56', NULL),
(23, NULL, NULL, 'Bloque Unión Cívica Radical', 'Autor', '2023-09-21 20:40:38', NULL),
(24, NULL, NULL, 'Bloque Ciudadanos a Gobernar', 'Autor', '2023-09-21 20:41:04', NULL),
(25, NULL, NULL, 'Bloque Partido Nuevo', 'Autor', '2023-09-21 20:41:38', NULL),
(26, NULL, NULL, 'Bloque Coalición Cívica Ari', 'Autor', '2023-09-21 20:42:08', NULL),
(27, NULL, NULL, 'Bloque Partido Liberal', 'Autor', '2023-09-21 20:43:24', NULL),
(28, NULL, NULL, 'Bloque Unión Celeste y Blanca', 'Autor', '2023-09-21 20:44:00', NULL),
(29, NULL, NULL, 'Bloque Partido Justicialista', 'Autor', '2023-09-21 20:44:54', NULL),
(30, NULL, NULL, 'Bloque JP Descamisados. Partido Justicialista', 'Autor', '2023-09-21 20:45:45', NULL),
(31, NULL, NULL, 'Bloque Partido Popular', 'Autor', '2023-09-21 20:46:12', NULL),
(32, NULL, NULL, 'Bloque PRO', 'Autor', '2023-09-21 20:46:49', NULL),
(33, NULL, NULL, 'Bloque Nuevo Encuentro', 'Autor', '2023-09-21 20:47:18', NULL),
(34, NULL, NULL, 'Bloque Ciudadanos Comprometidos', 'Autor', '2023-09-21 20:47:41', NULL),
(35, NULL, NULL, 'Bloque Encuentro Liberal', 'Autor', '2023-09-21 20:48:01', NULL),
(36, NULL, NULL, 'Bloque Unión Popular', 'Autor', '2023-09-21 20:48:39', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comisiones`
--
ALTER TABLE `comisiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `labor`
--
ALTER TABLE `labor`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mesa`
--
ALTER TABLE `mesa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `presidencia`
--
ALTER TABLE `presidencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `prosecretaria`
--
ALTER TABLE `prosecretaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comisiones`
--
ALTER TABLE `comisiones`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `labor`
--
ALTER TABLE `labor`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `presidencia`
--
ALTER TABLE `presidencia`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `prosecretaria`
--
ALTER TABLE `prosecretaria`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
