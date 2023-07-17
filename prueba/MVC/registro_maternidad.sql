-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-07-2023 a las 04:26:17
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `registro_maternidad`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lechon`
--

CREATE TABLE `lechon` (
  `id_camada` bigint(20) UNSIGNED NOT NULL,
  `madre` int(11) NOT NULL,
  `medicacion` varchar(50) NOT NULL,
  `f_nacimiento` varchar(50) NOT NULL,
  `f_salida` varchar(50) NOT NULL,
  `t_alimento` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `madre`
--

CREATE TABLE `madre` (
  `id_madre` bigint(20) UNSIGNED NOT NULL,
  `f_monta` varchar(30) NOT NULL,
  `f_parto` varchar(30) NOT NULL,
  `n_parto` int(11) NOT NULL,
  `n_lechones` int(11) NOT NULL,
  `vivos` int(11) NOT NULL,
  `muertos` int(11) NOT NULL,
  `peso_camada` varchar(30) NOT NULL,
  `f_celo` varchar(30) NOT NULL,
  `tipo_aliemento` varchar(30) NOT NULL,
  `vacunas` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `madre`
--

INSERT INTO `madre` (`id_madre`, `f_monta`, `f_parto`, `n_parto`, `n_lechones`, `vivos`, `muertos`, `peso_camada`, `f_celo`, `tipo_aliemento`, `vacunas`) VALUES
(1, '7/5/23', '3/8/23', 4, 8, 7, 1, '10k', '2/9/23', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `lechon`
--
ALTER TABLE `lechon`
  ADD PRIMARY KEY (`id_camada`),
  ADD UNIQUE KEY `id_camada` (`id_camada`),
  ADD UNIQUE KEY `madre` (`madre`);

--
-- Indices de la tabla `madre`
--
ALTER TABLE `madre`
  ADD PRIMARY KEY (`id_madre`),
  ADD UNIQUE KEY `id_madre` (`id_madre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `lechon`
--
ALTER TABLE `lechon`
  MODIFY `id_camada` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `madre`
--
ALTER TABLE `madre`
  MODIFY `id_madre` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
