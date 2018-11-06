-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: mysql
-- Tiempo de generación: 05-11-2018 a las 23:00:46
-- Versión del servidor: 5.7.22
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbejemplopdo`
--
CREATE DATABASE IF NOT EXISTS `dbejemplopdo` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `dbejemplopdo`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `dni` varchar(10) NOT NULL,
  `rol` varchar(10) NOT NULL,
  `archivo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `nick`, `nombre`, `apellidos`, `email`, `telefono`, `pass`, `dni`, `rol`, `archivo`) VALUES
(5, 'Buendys', 'Jose', 'Carrillo', 'jose@gmail.com', '618152226', 'f645de4cd8e36c99438faf1d2d640fe9', '48635162Y', 'alumno', './uploads/jose@gmail.com.jpg'),
(9, 'Danielo', 'Daniel', 'Buendia Valverde', 'danielbuendiasmr@gmail.com', '618152226', 'f645de4cd8e36c99438faf1d2d640fe9', '48635162Y', 'profesor', './uploads/danielbuendiasmr@gmail.com.jpg'),
(10, 'Danilosky', 'Dani', 'Valverde', 'danielsmr@gmail.com', '618152226', 'f645de4cd8e36c99438faf1d2d640fe9', '48635162Y', 'alumno', './uploads/danielsmr@gmail.com.jpg'),
(11, 'BuendysS', 'David', 'Valverde', 'david@gmail.com', '618152226', 'f645de4cd8e36c99438faf1d2d640fe9', '48635162Y', 'alumno', './uploads/david@gmail.com.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `nick` (`nick`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
