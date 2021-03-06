-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2022 a las 22:33:34
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `morismas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistentes`
--

CREATE TABLE `asistentes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `fecha_entrega` datetime NOT NULL,
  `qr` varchar(100) NOT NULL,
  `entregado` int(11) DEFAULT NULL,
  `curp` varchar(18) NOT NULL,
  `cantidad_polvora` int(11) NOT NULL,
  `detalles` varchar(100) DEFAULT NULL,
  `codigo` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `asistentes`
--

INSERT INTO `asistentes` (`id`, `nombre`, `apellidos`, `fecha_entrega`, `qr`, `entregado`, `curp`, `cantidad_polvora`, `detalles`, `codigo`) VALUES
(1, 'Marco Polo', 'Mazatan', '2022-06-30 18:28:34', '', 0, 'MAXM780911HZLSDG01', 1, NULL, ''),
(2, 'Rodolfo', 'Leaños Villegas', '2022-06-30 20:37:30', '', 0, 'LEVJ810924HZSXLS04', 1, NULL, ''),
(3, 'Ana Elisa', 'Barba Pinedo', '0000-00-00 00:00:00', '', 0, 'BAPA821212MJCRNN04', 0, '', ''),
(4, 'Luis Fernando', 'González Álvarez', '0000-00-00 00:00:00', '', 0, 'GOAL851108HZSSNL02', 0, '', ''),
(5, 'Francisco Rosendo', 'Barba Vizcaíno', '0000-00-00 00:00:00', '', 0, 'BAVF510212HJSRRZ04', 1, '', ''),
(6, 'Andrea', 'González Barba', '2022-06-30 14:57:29', '', 0, 'GOBA161022MJCNRNA2', 1, '', ''),
(7, 'Arantza', 'Barba Pinedo', '2022-07-04 14:22:31', '', 0, 'BAPA831222MJCRNR02', 1, '', ''),
(8, 'Jazmin', 'Sepúlveda Álvarez', '2022-07-04 14:37:28', '', 0, 'SEAJ830615MZSPLZ01', 1, '', ''),
(9, 'Jazmin', 'Sepúlveda Álvarez', '2022-07-04 14:39:52', '', 0, 'SEAJ830615MZSPLZ01', 1, '', ''),
(10, 'Juan', 'de las Cuerdas', '2022-07-04 14:52:12', '', 0, 'DEXJ760102HZSLXN05', 1, '', ''),
(11, 'Juan', 'de las Cuerdas', '2022-07-04 14:53:10', '', 0, 'DEXJ760102HZSLXN05', 1, '', ''),
(12, 'Juan', 'de las Cuerdas', '2022-07-04 14:53:42', '', 0, 'DEXJ760102HZSLXN05', 1, '', ''),
(13, 'Juan', 'de las Cuerdas', '2022-07-04 14:55:50', '', 0, 'DEXJ760102HZSLXN05', 1, '', ''),
(14, 'Juan', 'de las Cuerdas', '2022-07-04 14:56:34', '', 0, 'DEXJ760102HZSLXN05', 1, '', ''),
(15, 'Luis Fernando', 'González Álvarez', '2022-07-04 14:59:04', '', 0, 'GOAL851108HZSSNL02', 1, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usr`
--

CREATE TABLE `usr` (
  `id` int(11) NOT NULL,
  `usr` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usr`
--
ALTER TABLE `usr`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistentes`
--
ALTER TABLE `asistentes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `usr`
--
ALTER TABLE `usr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
