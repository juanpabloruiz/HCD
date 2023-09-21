-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 21-09-2023 a las 23:09:19
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
  `texto` longtext DEFAULT NULL,
  `pmcomision` varchar(255) DEFAULT NULL,
  `dmayoria` varchar(255) DEFAULT NULL,
  `dminoria` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `comisiones`
--

INSERT INTO `comisiones` (`id`, `archivo`, `informe`, `texto`, `pmcomision`, `dmayoria`, `dminoria`, `creado`, `editado`) VALUES
(1, NULL, '5555', NULL, NULL, NULL, NULL, NULL, NULL);

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
  `ingreso` date DEFAULT NULL,
  `editado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `labor`
--

INSERT INTO `labor` (`id`, `archivo`, `informe`, `numero`, `tipo`, `ingreso`, `editado`) VALUES
(1, '5555', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mesa`
--

CREATE TABLE `mesa` (
  `id` int(133) NOT NULL,
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
  `editado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `mesa`
--

INSERT INTO `mesa` (`id`, `archivo`, `expte`, `adjunto`, `extracto`, `letra`, `paginas`, `autor`, `estado`, `tipo`, `creado`, `editado`) VALUES
(19, 'Captura desde 2023-09-20 20-15-35.png', '11111', 'adj 3423', 'gga sdf asd fsaf sf sad fa sfas', 'M', 8, 'González, Alejandra Victoria - Romero, Javier Alejandro', 'Sin', 'Resolución', '2023-09-21', NULL),
(20, 'Captura desde.png', '2', 'adjun fefefef', 'cvbxb xfbfbxdfbxfd ñ ó', 'A', 6, 'Ruiz, Juan Pablo - Romero, Javier Alejandro', 'Estando', 'Declaración', '2023-09-21', '2023-09-21');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `presidencia`
--

CREATE TABLE `presidencia` (
  `id` int(133) NOT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `lugar_fecha` longtext DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `presidencia`
--

INSERT INTO `presidencia` (`id`, `informe`, `lugar_fecha`, `creado`, `editado`) VALUES
(1, '5555', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `prosecretaria`
--

CREATE TABLE `prosecretaria` (
  `id` int(133) NOT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `lugar_fecha` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `prosecretaria`
--

INSERT INTO `prosecretaria` (`id`, `informe`, `firma`, `lugar_fecha`, `creado`, `editado`) VALUES
(1, '5555', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `secretaria`
--

CREATE TABLE `secretaria` (
  `id` int(133) NOT NULL,
  `informe` varchar(255) DEFAULT NULL,
  `firma` varchar(255) DEFAULT NULL,
  `creado` date DEFAULT NULL,
  `editado` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `secretaria`
--

INSERT INTO `secretaria` (`id`, `informe`, `firma`, `creado`, `editado`) VALUES
(1, '4444', NULL, NULL, NULL),
(2, '5555', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(133) NOT NULL,
  `correo` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `creado` datetime DEFAULT NULL,
  `editado` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `correo`, `clave`, `nombre`, `tipo`, `creado`, `editado`) VALUES
(1, 'pabloruiz1980@gmail.com', 'soledad', 'Ruiz, Juan Pablo', 'Administrador', '2023-09-20 15:00:21', '2023-09-20 17:17:29'),
(2, 'mesa@hcd.ar', 'mesa', 'Romero, Javier Alejandro', 'Concejal', '2023-09-20 15:00:59', '2023-09-20 20:56:27'),
(3, 'secre@hcd.ar', 'secretaria', 'González, Alejandra Victoria', 'Concejal', '2023-09-20 15:01:55', '2023-09-20 20:56:22');

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
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `labor`
--
ALTER TABLE `labor`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `mesa`
--
ALTER TABLE `mesa`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `presidencia`
--
ALTER TABLE `presidencia`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `prosecretaria`
--
ALTER TABLE `prosecretaria`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `secretaria`
--
ALTER TABLE `secretaria`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(133) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
