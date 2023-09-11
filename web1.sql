-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2023 a las 02:49:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `web1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adorno`
--

CREATE TABLE `adorno` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `nombre_adorno` varchar(60) NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` int(11) NOT NULL,
  `url_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `adorno`
--

INSERT INTO `adorno` (`id`, `id_categoria`, `nombre_adorno`, `stock`, `precio`, `url_imagen`) VALUES
(1, 1, 'navias', 10, 20, ''),
(2, 1, 'navias', 10, 20, ''),
(3, 3, 'navidad', 15, 45, 'Imagenes/prueba/otro.JPG'),
(4, 3, 'navidad', 15, 45, 'Imagenes/prueba/otro.JPG'),
(5, 3, 'navidad', 15, 45, 'Imagenes/prueba/otro.JPG'),
(6, 3, 'navidad', 15, 45, 'Imagenes/prueba/otro.JPG'),
(7, 3, 'navidad', 15, 45, 'Imagenes/prueba/otro.JPG'),
(8, 3, 'navidad', 15, 45, 'Imagenes/prueba/otro.JPG');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adorno`
--
ALTER TABLE `adorno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adorno`
--
ALTER TABLE `adorno`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adorno`
--
ALTER TABLE `adorno`
  ADD CONSTRAINT `FK_CATEGORIA` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
