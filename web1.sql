-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-09-2023 a las 02:53:18
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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_seleccionado` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`) VALUES
(1, 'erick'),
(2, 'erick'),
(3, 'fiestas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `nameUsers` varchar(50) NOT NULL,
  `urlImagen` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `id_user`, `nameUsers`, `urlImagen`) VALUES
(1, 6, 'test23187', 'Imagenes/prueba/otro1.JPG'),
(2, 6, 'test11', 'Imagenes/prueba/otro.JPG'),
(3, NULL, 'test13', 'Imagenes/prueba/otro1.JPG'),
(4, NULL, 'test23', 'Imagenes/prueba/otro.JPG'),
(5, NULL, 'test3457', 'Imagenes/prueba/Angel DJ.jpg'),
(6, NULL, 'test2', 'Angel DJ.jpg'),
(7, NULL, 'test23', 'Angel DJ.jpg'),
(8, NULL, 'test2344', 'Angel DJ.jpg'),
(9, NULL, 'test2546', 'Imagenes/prueba/Angel DJ.jpg'),
(10, NULL, 'test23', 'Imagenes/prueba/Angel DJ.jpg'),
(11, NULL, 'test23', 'Imagenes/prueba/Angel DJ.jpg'),
(12, NULL, 'test23', 'Imagenes/prueba/Angel DJ.jpg'),
(13, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(14, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(15, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(16, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(17, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(18, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(19, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(20, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(21, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(22, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(23, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(24, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(25, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(26, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(27, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(28, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(29, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(30, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(31, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(32, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(33, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(34, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(35, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(36, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(37, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(38, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(39, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(40, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(41, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(42, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(43, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(44, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(45, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(46, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(47, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(48, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(49, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(50, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(51, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(52, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(53, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(54, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(55, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(56, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(57, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(58, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(59, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(60, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(61, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(62, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(63, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(64, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(65, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(66, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(67, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(68, NULL, 'test2344', 'Imagenes/prueba/Angel DJ.jpg'),
(69, NULL, 'test2344', 'Angel DJ.jpg'),
(70, NULL, 'test2344', 'Angel DJ.jpg'),
(71, NULL, 'test2344', 'Angel DJ.jpg'),
(72, NULL, 'test2344', 'Angel DJ.jpg'),
(73, NULL, 'test2344', 'Angel DJ.jpg'),
(74, NULL, 'test2344', 'Angel DJ.jpg'),
(75, NULL, 'test2344', 'Angel DJ.jpg'),
(76, NULL, 'test2344', 'Angel DJ.jpg'),
(77, NULL, 'test2344', 'Angel DJ.jpg'),
(78, NULL, 'test2344', 'Angel DJ.jpg'),
(79, NULL, 'test2344', 'Angel DJ.jpg'),
(80, NULL, 'test2344', 'Angel DJ.jpg'),
(81, NULL, 'test2344', 'Angel DJ.jpg'),
(82, NULL, 'test2344', 'Angel DJ.jpg'),
(83, NULL, 'test2344', 'Angel DJ.jpg'),
(84, NULL, 'test2344', 'Angel DJ.jpg'),
(85, NULL, 'test2344', 'Angel DJ.jpg'),
(86, NULL, 'test2344', 'Angel DJ.jpg'),
(87, NULL, 'test2344', 'Angel DJ.jpg'),
(88, NULL, 'test2344', 'Angel DJ.jpg'),
(89, NULL, 'test2344', 'Angel DJ.jpg'),
(90, NULL, 'test2344', 'Angel DJ.jpg'),
(91, NULL, 'test2344', 'Angel DJ.jpg'),
(92, NULL, 'test2344', 'Angel DJ.jpg'),
(93, NULL, 'test2344', 'Angel DJ.jpg'),
(94, NULL, 'test2344', 'Angel DJ.jpg'),
(95, NULL, 'test2344', 'Angel DJ.jpg'),
(96, NULL, 'test2344', 'Angel DJ.jpg'),
(97, NULL, 'test2344', 'Angel DJ.jpg'),
(98, NULL, 'test2344', 'Angel DJ.jpg'),
(99, NULL, 'test2344', 'Angel DJ.jpg'),
(100, NULL, 'test2344', 'Angel DJ.jpg'),
(101, NULL, 'test2344', 'Angel DJ.jpg'),
(102, NULL, 'test2344', 'Angel DJ.jpg'),
(103, NULL, 'test2344', 'Angel DJ.jpg'),
(104, NULL, 'test2344', 'Angel DJ.jpg'),
(105, NULL, 'test2344', 'Angel DJ.jpg'),
(106, NULL, 'test2344', 'Angel DJ.jpg'),
(107, NULL, 'test2344', 'Angel DJ.jpg'),
(108, NULL, 'test2344', 'Angel DJ.jpg'),
(109, NULL, 'test2344', 'Angel DJ.jpg'),
(110, NULL, 'test2344', 'Angel DJ.jpg'),
(111, NULL, 'test2344', 'Angel DJ.jpg'),
(112, NULL, 'test2344', 'Angel DJ.jpg'),
(113, NULL, 'test2344', 'Angel DJ.jpg'),
(114, NULL, 'test2344', 'Angel DJ.jpg'),
(115, NULL, 'test2344', 'Angel DJ.jpg'),
(116, NULL, 'test2344', 'Angel DJ.jpg'),
(117, NULL, 'test2344', 'Angel DJ.jpg'),
(118, NULL, 'test2344', 'Angel DJ.jpg'),
(119, NULL, 'test2344', 'Angel DJ.jpg'),
(120, NULL, 'test2344', 'Angel DJ.jpg'),
(121, NULL, 'test2344', 'Angel DJ.jpg'),
(122, NULL, 'test2344', 'Angel DJ.jpg'),
(123, NULL, 'test2344', 'Angel DJ.jpg'),
(124, NULL, 'test2344', 'Angel DJ.jpg'),
(125, NULL, 'test2344', 'Angel DJ.jpg'),
(126, NULL, 'test2344', 'Angel DJ.jpg'),
(127, NULL, 'test2344', 'Angel DJ.jpg'),
(128, NULL, 'test2344', 'Angel DJ.jpg'),
(129, NULL, 'test2344', 'Angel DJ.jpg'),
(130, NULL, 'test2344', 'Angel DJ.jpg'),
(131, NULL, 'test2344', 'Angel DJ.jpg'),
(132, NULL, 'test2344', 'Angel DJ.jpg'),
(133, NULL, 'test2344', 'Angel DJ.jpg'),
(134, NULL, 'test2344', 'Angel DJ.jpg'),
(135, NULL, 'test2344', 'Angel DJ.jpg'),
(136, NULL, 'test2344', 'Angel DJ.jpg'),
(137, NULL, 'test2344', 'Angel DJ.jpg'),
(138, NULL, 'test2344', 'Angel DJ.jpg'),
(139, NULL, 'test2344', 'Angel DJ.jpg'),
(140, NULL, 'test2344', 'Angel DJ.jpg'),
(141, NULL, 'test2344', 'Angel DJ.jpg'),
(142, NULL, 'test2344', 'Angel DJ.jpg'),
(143, NULL, 'test2344', 'Angel DJ.jpg'),
(144, NULL, 'test2344', 'Angel DJ.jpg'),
(145, NULL, 'test2344', 'Angel DJ.jpg'),
(146, NULL, 'test2344', 'Angel DJ.jpg'),
(147, NULL, 'test2344', 'Angel DJ.jpg'),
(148, NULL, 'test2344', 'Angel DJ.jpg'),
(149, NULL, 'test2344', 'Angel DJ.jpg'),
(150, NULL, 'test2344', 'Angel DJ.jpg'),
(151, NULL, 'test2344', 'Angel DJ.jpg'),
(152, NULL, 'test2344', 'Angel DJ.jpg'),
(153, NULL, 'test2344', 'Angel DJ.jpg'),
(154, NULL, 'test2344', 'Angel DJ.jpg'),
(155, NULL, 'test2344', 'Angel DJ.jpg'),
(156, NULL, 'test2344', 'Angel DJ.jpg'),
(157, NULL, 'test2344', 'Angel DJ.jpg'),
(158, NULL, 'test2344', 'Angel DJ.jpg'),
(159, NULL, 'test2344', 'Angel DJ.jpg'),
(160, NULL, 'test2344', 'Angel DJ.jpg'),
(161, NULL, 'test2344', 'Angel DJ.jpg'),
(162, NULL, 'test2344', 'Angel DJ.jpg'),
(163, NULL, 'test2344', 'Angel DJ.jpg'),
(164, NULL, 'test2344', 'Angel DJ.jpg'),
(165, NULL, 'test2344', 'Angel DJ.jpg'),
(166, NULL, 'test2344', 'Angel DJ.jpg'),
(167, NULL, 'test2344', 'Angel DJ.jpg'),
(168, NULL, 'test2344', 'Angel DJ.jpg'),
(169, NULL, 'test2344', 'Angel DJ.jpg'),
(170, NULL, 'test2344', 'Angel DJ.jpg'),
(171, NULL, 'test2344', 'Angel DJ.jpg'),
(172, NULL, 'test2344', 'Angel DJ.jpg'),
(173, NULL, 'test2344', 'Angel DJ.jpg'),
(174, NULL, 'test2344', 'Angel DJ.jpg'),
(175, NULL, 'test2344', 'Angel DJ.jpg'),
(176, NULL, 'test2344', 'Angel DJ.jpg'),
(177, NULL, 'test2344', 'Angel DJ.jpg'),
(178, NULL, 'test2344', 'Angel DJ.jpg'),
(179, NULL, 'test2344', 'Angel DJ.jpg'),
(180, NULL, 'test2344', 'Angel DJ.jpg'),
(181, NULL, 'test2344', 'Angel DJ.jpg'),
(182, NULL, 'test2344', 'Angel DJ.jpg'),
(183, NULL, 'test2344', 'Angel DJ.jpg'),
(184, NULL, 'test2344', 'Angel DJ.jpg'),
(185, NULL, 'test2344', 'Angel DJ.jpg'),
(186, NULL, 'test2344', 'Angel DJ.jpg'),
(187, NULL, 'test2344', 'Angel DJ.jpg'),
(188, NULL, 'test11', 'Angel DJ.jpg'),
(189, NULL, 'test23', 'Angel DJ.jpg'),
(190, NULL, 'test23', 'Imagenes/prueba/Angel DJ.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE `comentarios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comentarioo` varchar(90) NOT NULL,
  `id_adorno` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `urlImagen` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `cantidad`, `descripcion`, `urlImagen`) VALUES
(1, 'patatas', 0, 'papas fritas', ''),
(2, 'test2', 0, 'test3', ''),
(3, 'test2', 0, 'test3', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `puntuacion`
--

CREATE TABLE `puntuacion` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_adorno` bigint(20) UNSIGNED DEFAULT NULL,
  `puntuacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seleccionado`
--

CREATE TABLE `seleccionado` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_adorno` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `urlImagen` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `apellido`, `email`, `password`, `urlImagen`) VALUES
(1, 'erick', 'candia', 'gojanded@gmnail.com', '1234', 'Imagenes/prueba/logo instituti icepal.jpg'),
(2, 'test1', 'test1', 'test1', 'test1', ''),
(3, 'test2', 'test2', 'test2', 'test2', ''),
(4, 'test3', 'test3', 'test3', 'test3', ''),
(5, 'test4', 'test4', 'test4', 'test4', ''),
(6, 'erick', 'candia', 'algo@gmial.com', '2485', 'Imagenes/prueba/Captura de pantalla 2023-07-19 204607.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` bigint(20) UNSIGNED DEFAULT NULL,
  `nombre` varchar(60) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `genero` varchar(50) NOT NULL,
  `id_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_cliente` bigint(20) UNSIGNED NOT NULL,
  `id_vendedor` bigint(20) UNSIGNED NOT NULL,
  `id_carrito` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

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
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_CARITO` (`id_seleccionado`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_cliente` (`id_user`);

--
-- Indices de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_ADORNO` (`id_adorno`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_PUNTUACION` (`id_adorno`);

--
-- Indices de la tabla `seleccionado`
--
ALTER TABLE `seleccionado`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_SELECCIONADO` (`id_adorno`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_USER` (`id_user`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `FK_CLIENTE_VENTA` (`id_cliente`),
  ADD KEY `FK_VENDEDOR_VENTA` (`id_vendedor`),
  ADD KEY `FK_CARRITO_VENTA` (`id_carrito`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adorno`
--
ALTER TABLE `adorno`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT de la tabla `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `seleccionado`
--
ALTER TABLE `seleccionado`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `adorno`
--
ALTER TABLE `adorno`
  ADD CONSTRAINT `FK_CATEGORIA` FOREIGN KEY (`id_categoria`) REFERENCES `categoria` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `FK_CARITO` FOREIGN KEY (`id_seleccionado`) REFERENCES `seleccionado` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD CONSTRAINT `FK_cliente` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `comentarios`
--
ALTER TABLE `comentarios`
  ADD CONSTRAINT `FK_ADORNO` FOREIGN KEY (`id_adorno`) REFERENCES `adorno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `puntuacion`
--
ALTER TABLE `puntuacion`
  ADD CONSTRAINT `FK_PUNTUACION` FOREIGN KEY (`id_adorno`) REFERENCES `adorno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seleccionado`
--
ALTER TABLE `seleccionado`
  ADD CONSTRAINT `FK_SELECCIONADO` FOREIGN KEY (`id_adorno`) REFERENCES `adorno` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD CONSTRAINT `FK_USER` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `FK_CARRITO_VENTA` FOREIGN KEY (`id_carrito`) REFERENCES `carrito` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_CLIENTE_VENTA` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_VENDEDOR_VENTA` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
