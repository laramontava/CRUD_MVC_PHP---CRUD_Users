-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 10:21:40
-- Versión del servidor: 5.5.49-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `usersapp`
--
CREATE DATABASE IF NOT EXISTS `usersapp` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `usersapp`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `dni` varchar(10) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `surname` varchar(100) CHARACTER SET latin1 NOT NULL,
  `date_birthday` varchar(20) CHARACTER SET latin1 NOT NULL,
  `sexo` varchar(10) CHARACTER SET latin1 NOT NULL,
  `mobile` varchar(20) CHARACTER SET latin1 NOT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `user` varchar(45) CHARACTER SET latin1 NOT NULL,
  `pass` varchar(45) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`dni`),
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`dni`, `name`, `surname`, `date_birthday`, `sexo`, `mobile`, `email`, `user`, `pass`) VALUES
('12345678Z', 'Pepe Juan', 'Selles', '03/05/1998', 'Otro', '299676217', 'pepe@ejemplo.com', 'user4', '1234'),
('56671408Y', 'Sara', 'Molto', '08/05/1989', 'Otro', '165434955', 'sara@ejemplo.com', 'user6', '1234'),
('58302332T', 'Javier', 'Guardiola', '24/04/1995', 'Hombre', '645353465', 'javier@ejemplo.com', 'user7', '1234'),
('62563720V', 'Alfonso', 'Lerma', '03/05/1998', 'Otro', '849884512', 'alfonso@ejemplo.com', 'user5', '1234'),
('66491300W', 'Amparo', 'Curto', '03/05/1998', 'Otro', '587735419', 'amparo@ejemplo.com', 'user8', '1234'),
('82177985C', 'Irene', 'Adame', '03/05/1998', 'Mujer', '497247286', 'irene@ejemplo.com', 'user2', '1234'),
('90507750J', 'Maria', 'Rivas', '11/05/1988', 'Otro', '663434648', 'maria@ejemplo.com', 'user3', '1234'),
('91010653K', 'Jorge', 'Padilla', '12/05/1998', 'Otro', '462939893', 'jorge@ejemplo.com', 'user9', '1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
