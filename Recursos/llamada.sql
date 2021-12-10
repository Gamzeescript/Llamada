-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-12-2021 a las 06:59:36
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `llamada`
--
CREATE DATABASE IF NOT EXISTS `llamada` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `llamada`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion`
--

CREATE TABLE `gestion` (
  `id_gestion` int(11) NOT NULL,
  `id_tipo_llamada` int(11) NOT NULL,
  `id_origen_llamada` int(11) NOT NULL,
  `nombre` varchar(25) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(20) COLLATE utf8_bin NOT NULL,
  `gestion` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `gestion`
--

INSERT INTO `gestion` (`id_gestion`, `id_tipo_llamada`, `id_origen_llamada`, `nombre`, `telefono`, `gestion`) VALUES
(1, 1, 1, 'Juan Perez', '12345678', 'Comprobable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `origen_llamada`
--

CREATE TABLE `origen_llamada` (
  `id_origen_llamada` int(11) NOT NULL,
  `origen_llamada` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `origen_llamada`
--

INSERT INTO `origen_llamada` (`id_origen_llamada`, `origen_llamada`) VALUES
(1, 'WhatsApp'),
(2, 'Telefono Movil');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_llamada`
--

CREATE TABLE `tipo_llamada` (
  `id_tipo_llamada` int(11) NOT NULL,
  `tipo_llamada` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tipo_llamada`
--

INSERT INTO `tipo_llamada` (`id_tipo_llamada`, `tipo_llamada`) VALUES
(1, 'Consulta'),
(2, 'Compra');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `gestion`
--
ALTER TABLE `gestion`
  ADD PRIMARY KEY (`id_gestion`),
  ADD KEY `fk_tipo_llamada` (`id_tipo_llamada`),
  ADD KEY `fk_origen_llamada` (`id_origen_llamada`);

--
-- Indices de la tabla `origen_llamada`
--
ALTER TABLE `origen_llamada`
  ADD PRIMARY KEY (`id_origen_llamada`);

--
-- Indices de la tabla `tipo_llamada`
--
ALTER TABLE `tipo_llamada`
  ADD PRIMARY KEY (`id_tipo_llamada`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `gestion`
--
ALTER TABLE `gestion`
  MODIFY `id_gestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `origen_llamada`
--
ALTER TABLE `origen_llamada`
  MODIFY `id_origen_llamada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_llamada`
--
ALTER TABLE `tipo_llamada`
  MODIFY `id_tipo_llamada` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gestion`
--
ALTER TABLE `gestion`
  ADD CONSTRAINT `fk_origen_llamada` FOREIGN KEY (`id_origen_llamada`) REFERENCES `origen_llamada` (`id_origen_llamada`),
  ADD CONSTRAINT `fk_tipo_llamada` FOREIGN KEY (`id_tipo_llamada`) REFERENCES `tipo_llamada` (`id_tipo_llamada`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
