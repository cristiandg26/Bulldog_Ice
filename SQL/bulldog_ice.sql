-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-12-2024 a las 21:57:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bulldog_ice`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `per`
--

CREATE TABLE `per` (
  `PERID` int(11) NOT NULL,
  `NOMBRE` varchar(100) NOT NULL,
  `CORREO` varchar(50) DEFAULT NULL,
  `CEL` varchar(12) DEFAULT NULL,
  `ROL` int(11) NOT NULL,
  `USR` varchar(20) DEFAULT NULL,
  `PASS` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `per`
--

INSERT INTO `per` (`PERID`, `NOMBRE`, `CORREO`, `CEL`, `ROL`, `USR`, `PASS`) VALUES
(1, 'Meiby Mendez', NULL, NULL, 1, 'MMENDEZ', '123456');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `per`
--
ALTER TABLE `per`
  ADD PRIMARY KEY (`PERID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `per`
--
ALTER TABLE `per`
  MODIFY `PERID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
