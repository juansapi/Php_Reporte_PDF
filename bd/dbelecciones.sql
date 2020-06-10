-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2017 a las 02:24:30
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `dbelecciones`
--
CREATE DATABASE IF NOT EXISTS `dbelecciones` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbelecciones`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `candidato`
--

CREATE TABLE IF NOT EXISTS `candidato` (
  `cedula` int(11) DEFAULT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `dirrecion` varchar(20) NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `edad` int(11) NOT NULL,
  `sexo` varchar(20) NOT NULL,
  `partido` varchar(20) DEFAULT NULL,
  `postulacion` varchar(20) NOT NULL,
  `tarjeton` varchar(20) NOT NULL,
  `lema` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `candidato`
--

INSERT INTO `candidato` (`cedula`, `nombre`, `apellido`, `dirrecion`, `telefono`, `celular`, `email`, `edad`, `sexo`, `partido`, `postulacion`, `tarjeton`, `lema`) VALUES
(1144202405, 'juan', 'sarmiento', 'notengo', 121232, 12123123, 'sdfdsdfs', 19, 'M', 'el que gana', 'Senado', '23432423', 'A ganar el parcial'),
(1144202405, 'juan', 'sarmiento', 'notengo', 121232, 12123123, 'sdfdsdfs', 19, 'M', 'el que gana', 'Senado', '23432423', 'A ganar el parcial'),
(0, '', '', '', 0, 0, '', 0, '', '', '', '', ''),
(2342342, 'juan', 'rojas', '', 0, 0, '', 0, '', 'werwr', 'ewrew', 'ewrwe', ''),
(0, '', '', '', 0, 0, '', 0, '', '', '', '', ''),
(0, '', '', '', 0, 0, '', 0, '', '', '', '', ''),
(0, '', '', '', 0, 0, '', 0, '', '', '', '', ''),
(0, '', '', '', 0, 0, '', 0, '', '', '', '', ''),
(0, '', '', '', 0, 0, '', 0, '', '', 'gggg', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
