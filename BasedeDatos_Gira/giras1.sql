-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2019 a las 01:07:05
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `giras_proyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `giras1`
--

CREATE TABLE `giras1` (
  `id_giras` int(11) NOT NULL,
  `nombre_gira` varchar(30) COLLATE utf8_bin NOT NULL,
  `precio_gira` int(11) NOT NULL,
  `hora_gira` date NOT NULL,
  `fecha_gira` date NOT NULL,
  `cantidad_gira` int(11) NOT NULL,
  `lugar_gira` varchar(30) COLLATE utf8_bin NOT NULL,
  `encuentro_gira` varchar(30) COLLATE utf8_bin NOT NULL,
  `descripcion_gira` varchar(30) COLLATE utf8_bin NOT NULL,
  `imagen_gira` varchar(100) COLLATE utf8_bin NOT NULL,
  `estado_gira` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `giras1`
--

INSERT INTO `giras1` (`id_giras`, `nombre_gira`, `precio_gira`, `hora_gira`, `fecha_gira`, `cantidad_gira`, `lugar_gira`, `encuentro_gira`, `descripcion_gira`, `imagen_gira`, `estado_gira`) VALUES
(2, 'Golon', 8, '0000-00-00', '0008-08-08', 8, '8', '8', '8', '', 'A'),
(9, 'Ender', 1111, '0000-00-00', '0000-00-00', 0, 'hola@gmail.com', 'D', 'd', '', 'A'),
(10, '7', 44, '0000-00-00', '0000-00-00', 0, '4', '44', '44', '', 'A');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `giras1`
--
ALTER TABLE `giras1`
  ADD PRIMARY KEY (`id_giras`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `giras1`
--
ALTER TABLE `giras1`
  MODIFY `id_giras` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
