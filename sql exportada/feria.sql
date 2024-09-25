-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 17-08-2022 a las 15:51:29
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `feria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE IF NOT EXISTS `alumno` (
  `cedula` int(8) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `mail` varchar(40) NOT NULL,
  `celular` int(9) NOT NULL,
  `liceo` varchar(25) NOT NULL,
  `orientacion` varchar(25) NOT NULL,
  PRIMARY KEY (`cedula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `charla`
--

DROP TABLE IF EXISTS `charla`;
CREATE TABLE IF NOT EXISTS `charla` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `orientacion` varchar(40) NOT NULL,
  `profesional` varchar(40) NOT NULL,
  `profesion` varchar(70) NOT NULL,
  `hora` time DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `charla`
--

INSERT INTO `charla` (`id`, `orientacion`, `profesional`, `profesion`, `hora`) VALUES
(1, 'Biológico/Medicina', 'Ana Monza', 'Coordinadora Policlínca Casavalle (Salud Mental)', '17:20:00'),
(2, 'Científico/Ingeniería', 'Cristina Fernández', 'Ingeniera en telecomunicaciones', '17:20:00'),
(3, 'Derecho/Economía/Educación', 'Leonardo Slinger', 'Abogado Laboralista', '17:20:00'),
(4, 'Tecnologíco', 'Lic. Jimena Rocca y Romina Guerrero', 'IT Recruiting', '17:20:00'),
(5, 'Biológico/Medicina', 'Guido Demoro', 'Médico Anestesista', '17:45:00'),
(6, 'Científico/Ingeniería', 'Mauricio Ojuñan', 'Ingeniero Químico', '17:45:00'),
(7, 'Derecho/Economía/Educación', 'Valeria Charbonnier', 'Economista contadora', '17:45:00'),
(8, 'Tecnológico', 'ENDAVA', 'ENDAVA', '17:45:00'),
(9, 'MIXTA', 'Matias Vitureira', 'Psicólogo CEI', '17:20:00'),
(10, 'Sala Principal', 'Diego Scotti', 'Presidente Mutual Uruguaya de Futbolistas Profesionales', '17:20:00'),
(11, 'MIXTA', 'José Nuth y Gimena Vigourux', 'Administración de empresas', '17:45:00'),
(12, 'Sala Principal (vía ZOOM)', 'Gustavo Tortajada', 'Cardiólogo ', '19:10:00'),
(13, 'Biológico/Medicina', 'Fiorella Scandroglio', 'Médica Medicina General', '18:10:00'),
(14, 'Científico/Ingeniería', 'Nicolás Charbonnier', 'Ingeniero en Computación', '18:10:00'),
(15, 'Derecho/Economía/Educación', 'Malena García', 'Profesora de Historia, Especialización en Dif. Aprendizaje', '18:10:00'),
(16, 'Tecnológico', 'ENDAVA', 'ENDAVA', '18:10:00'),
(17, 'MIXTA', 'Alejandro Chucarro y Rodolfo Márquez', 'Oficiales de Armada Nacional', '18:10:00'),
(18, 'Biológico/Medicina (vía ZOOM)', 'Analía Estavilo', 'Pediatra', '19:10:00'),
(19, 'Científico/Ingeniería', 'Nelson Lema', 'Licenciado Analista en Sistemas', '19:10:00'),
(20, 'Derecho/Economía/Educación', 'Antonella Ochiuzzi', 'Maestra escuela IMPULSO', '19:10:00'),
(21, 'Tecnológico', 'Raquel Sosa', 'Ingeniera y Magistrada', '19:10:00'),
(24, 'Biológico/Medicina', 'Cecilia Luzardo y Maria Eugenia Baldoví', 'Trabajo social CEI', '19:30:00'),
(25, 'Científico/Ingeniería', 'Sofia Tito Virgilio', 'Ingeniera Química', '19:30:00'),
(26, 'Derecho/Economía/Educación', 'Mariela Aranguren', 'Maestra', '19:30:00'),
(27, 'Tecnologico', 'Leticia de los Santos', 'Analista de sistemas/ Docente / Desarrolladora', '19:30:00'),
(28, 'SALA PRINCIPAL (19:50)', 'Henry Cohen', 'Gastroenterólogo/ Infectologo GACH (Covid 19)', '19:30:00'),
(29, 'Biológico/Medicina', 'Sergio González', 'Enfermero', '20:00:00'),
(30, 'Científico/Ingeniería', 'Alejandra Schiavo', 'Química Farmacéutica', '20:00:00'),
(31, 'Derecho/Economía/Educación', 'Soledad Sequeira', 'Maestra de primera infancia', '20:00:00'),
(32, 'Tecnológico', 'Enrique Rosa', 'Estudiante Licenciatura Computación, Back Office DLocal', '20:00:00'),
(36, 'ALUMNI', 'Samuel Tabarez, Gimena Mazziotti', 'Cristian Martinez, Federico Mages', '16:15:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inscribe`
--

DROP TABLE IF EXISTS `inscribe`;
CREATE TABLE IF NOT EXISTS `inscribe` (
  `cedula` int(8) NOT NULL,
  `id` int(4) NOT NULL,
  PRIMARY KEY (`cedula`,`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `inscribe`
--
ALTER TABLE `inscribe`
  ADD CONSTRAINT `inscribe_ibfk_1` FOREIGN KEY (`cedula`) REFERENCES `alumno` (`cedula`),
  ADD CONSTRAINT `inscribe_ibfk_2` FOREIGN KEY (`id`) REFERENCES `charla` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
