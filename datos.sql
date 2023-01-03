-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-01-2023 a las 15:48:59
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(9) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fecha_reg` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `nombre`, `email`, `fecha_reg`) VALUES
(23, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2022-12-12'),
(24, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2022-12-06'),
(25, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2022-12-19'),
(26, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2022-12-13'),
(27, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(28, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(29, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(30, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(31, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(32, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(33, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(34, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(35, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(36, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(37, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(38, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(39, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(40, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(41, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(42, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(43, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(44, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(45, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(46, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(47, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(48, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(49, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(50, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(51, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(52, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(53, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(54, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(55, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(56, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(57, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-04'),
(58, 'Teo Demattei Ortega', 'gustavodemattei@yahoo.com.ar', '2023-01-25');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
