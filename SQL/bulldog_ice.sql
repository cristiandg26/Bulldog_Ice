-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 24-12-2024 a las 01:52:25
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Bulldog_Ice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ART`
--

CREATE TABLE `ART` (
  `ARTID` int(11) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `MARCID` int(11) NOT NULL,
  `FECHA_CREA` date NOT NULL,
  `FECHA_VENCE` date DEFAULT NULL,
  `ESTADO` int(11) NOT NULL,
  `COSTO_PROM` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `MARC`
--

CREATE TABLE `MARC` (
  `MARCID` int(11) NOT NULL,
  `DESCRIPCION` varchar(255) NOT NULL,
  `ESTADO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `PER`
--

CREATE TABLE `PER` (
  `TERID` int(11) NOT NULL,
  `NOMBRE` varchar(255) NOT NULL,
  `CORREO` varchar(100) DEFAULT NULL,
  `CEL` varchar(12) DEFAULT NULL,
  `ROL` int(11) NOT NULL,
  `USR` varchar(20) DEFAULT NULL,
  `PASS` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `PER`
--

INSERT INTO `PER` (`TERID`, `NOMBRE`, `CORREO`, `CEL`, `ROL`, `USR`, `PASS`) VALUES
(1, 'Meiby Mendez', NULL, NULL, 1, 'MMENDEZ', '1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ART`
--
ALTER TABLE `ART`
  ADD PRIMARY KEY (`ARTID`);

--
-- Indices de la tabla `MARC`
--
ALTER TABLE `MARC`
  ADD PRIMARY KEY (`MARCID`);

--
-- Indices de la tabla `PER`
--
ALTER TABLE `PER`
  ADD PRIMARY KEY (`TERID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ART`
--
ALTER TABLE `ART`
  MODIFY `ARTID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `MARC`
--
ALTER TABLE `MARC`
  MODIFY `MARCID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `PER`
--
ALTER TABLE `PER`
  MODIFY `TERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
