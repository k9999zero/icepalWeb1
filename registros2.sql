-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-09-2023 a las 05:59:00
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
-- Base de datos: `registros2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `celo`
--

CREATE TABLE `celo` (
  `ID_CELO` int(11) NOT NULL,
  `ID_MADRE` int(11) DEFAULT NULL,
  `F_CELO` varchar(50) DEFAULT NULL,
  `N_CELO` int(11) DEFAULT NULL,
  `F_REG` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `celo`
--

INSERT INTO `celo` (`ID_CELO`, `ID_MADRE`, `F_CELO`, `N_CELO`, `F_REG`) VALUES
(9, 14, '2023-09-09', 4, '2023-09-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cerdo`
--

CREATE TABLE `cerdo` (
  `ID_CERDO` int(11) NOT NULL,
  `ID_CORRAL` int(11) DEFAULT NULL,
  `PESO_CERDO` varchar(30) DEFAULT NULL,
  `RAZA` varchar(30) DEFAULT NULL,
  `F_NACIMIENTO` varchar(50) DEFAULT NULL,
  `F_SALIDA` varchar(50) DEFAULT NULL,
  `SEXO` varchar(50) DEFAULT NULL,
  `F_REG` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corral`
--

CREATE TABLE `corral` (
  `ID_CORRAL` int(11) NOT NULL,
  `COD_CORRAL` varchar(30) DEFAULT NULL,
  `COD_POCILGA` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `corral`
--

INSERT INTO `corral` (`ID_CORRAL`, `COD_CORRAL`, `COD_POCILGA`) VALUES
(29, '25', '1A'),
(30, '22', '2'),
(31, '222', '22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diagnostico`
--

CREATE TABLE `diagnostico` (
  `ID_DIAGNOSTICO` int(11) NOT NULL,
  `ID_MADRE` int(11) DEFAULT NULL,
  `ID_LECHON` int(11) DEFAULT NULL,
  `ID_CERDO` int(11) DEFAULT NULL,
  `F_REG` varchar(50) DEFAULT NULL,
  `DETALLES` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `diagnostico`
--

INSERT INTO `diagnostico` (`ID_DIAGNOSTICO`, `ID_MADRE`, `ID_LECHON`, `ID_CERDO`, `F_REG`, `DETALLES`) VALUES
(3, NULL, NULL, NULL, '2023-09-01', 'qwwqw'),
(4, NULL, NULL, NULL, '2023-09-23', 'diarrea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ficha_parto`
--

CREATE TABLE `ficha_parto` (
  `ID_PARTO` int(11) NOT NULL,
  `ID_MADRE` int(11) DEFAULT NULL,
  `N_LECHONES` int(11) DEFAULT NULL,
  `VIVOS` int(11) DEFAULT NULL,
  `MUERTOS` int(11) DEFAULT NULL,
  `F_PARTO` date DEFAULT NULL,
  `N_PARTO` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ficha_parto`
--

INSERT INTO `ficha_parto` (`ID_PARTO`, `ID_MADRE`, `N_LECHONES`, `VIVOS`, `MUERTOS`, `F_PARTO`, `N_PARTO`) VALUES
(3, 14, 34, 2, 2, '2023-09-01', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lechon`
--

CREATE TABLE `lechon` (
  `ID_LECHON` int(11) NOT NULL,
  `ID_CORRAL` int(11) DEFAULT NULL,
  `ID_MADRE` int(11) DEFAULT NULL,
  `PESO_LECHON` varchar(30) DEFAULT NULL,
  `F_ENTRADA` varchar(50) DEFAULT NULL,
  `F_SALIDA` varchar(50) DEFAULT NULL,
  `F_REG` date DEFAULT NULL,
  `RAZA` varchar(50) DEFAULT NULL,
  `SEXO` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `lechon`
--

INSERT INTO `lechon` (`ID_LECHON`, `ID_CORRAL`, `ID_MADRE`, `PESO_LECHON`, `F_ENTRADA`, `F_SALIDA`, `F_REG`, `RAZA`, `SEXO`) VALUES
(5, 31, NULL, 'qxas', '2023-09-14', '2023-09-21', '2023-09-20', '323', '323');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `madre`
--

CREATE TABLE `madre` (
  `ID_MADRE` int(11) NOT NULL,
  `ID_CORRAL` int(11) DEFAULT NULL,
  `F_MONTA` varchar(50) DEFAULT NULL,
  `F_REG` date DEFAULT NULL,
  `RAZA` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `madre`
--

INSERT INTO `madre` (`ID_MADRE`, `ID_CORRAL`, `F_MONTA`, `F_REG`, `RAZA`) VALUES
(14, 31, '2023-09-08', '2023-09-21', '1212');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medicamento`
--

CREATE TABLE `medicamento` (
  `ID_MED` int(11) NOT NULL,
  `ID_DIAGNOSTICO` int(11) DEFAULT NULL,
  `MEDICAMENTO` varchar(110) DEFAULT NULL,
  `F_REG` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `medicamento`
--

INSERT INTO `medicamento` (`ID_MED`, `ID_DIAGNOSTICO`, `MEDICAMENTO`, `F_REG`) VALUES
(1, NULL, '11', '1'),
(2, 3, '434', '2023-09-15'),
(3, 3, 'sulfato', '2023-09-14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `celo`
--
ALTER TABLE `celo`
  ADD PRIMARY KEY (`ID_CELO`),
  ADD KEY `FK_RELATIONSHIP_5` (`ID_MADRE`);

--
-- Indices de la tabla `cerdo`
--
ALTER TABLE `cerdo`
  ADD PRIMARY KEY (`ID_CERDO`),
  ADD KEY `FK_RELATIONSHIP_2` (`ID_CORRAL`);

--
-- Indices de la tabla `corral`
--
ALTER TABLE `corral`
  ADD PRIMARY KEY (`ID_CORRAL`);

--
-- Indices de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD PRIMARY KEY (`ID_DIAGNOSTICO`),
  ADD KEY `FK_RELATIONSHIP_10` (`ID_CERDO`),
  ADD KEY `FK_RELATIONSHIP_6` (`ID_MADRE`),
  ADD KEY `FK_RELATIONSHIP_9` (`ID_LECHON`);

--
-- Indices de la tabla `ficha_parto`
--
ALTER TABLE `ficha_parto`
  ADD PRIMARY KEY (`ID_PARTO`),
  ADD KEY `FK_RELATIONSHIP_8` (`ID_MADRE`);

--
-- Indices de la tabla `lechon`
--
ALTER TABLE `lechon`
  ADD PRIMARY KEY (`ID_LECHON`),
  ADD KEY `FK_RELATIONSHIP_1` (`ID_CORRAL`),
  ADD KEY `FK_RELATIONSHIP_4` (`ID_MADRE`);

--
-- Indices de la tabla `madre`
--
ALTER TABLE `madre`
  ADD PRIMARY KEY (`ID_MADRE`),
  ADD KEY `FK_RELATIONSHIP_3` (`ID_CORRAL`);

--
-- Indices de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD PRIMARY KEY (`ID_MED`),
  ADD KEY `FK_RELATIONSHIP_7` (`ID_DIAGNOSTICO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `celo`
--
ALTER TABLE `celo`
  MODIFY `ID_CELO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `cerdo`
--
ALTER TABLE `cerdo`
  MODIFY `ID_CERDO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `corral`
--
ALTER TABLE `corral`
  MODIFY `ID_CORRAL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  MODIFY `ID_DIAGNOSTICO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ficha_parto`
--
ALTER TABLE `ficha_parto`
  MODIFY `ID_PARTO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `lechon`
--
ALTER TABLE `lechon`
  MODIFY `ID_LECHON` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `madre`
--
ALTER TABLE `madre`
  MODIFY `ID_MADRE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `medicamento`
--
ALTER TABLE `medicamento`
  MODIFY `ID_MED` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `celo`
--
ALTER TABLE `celo`
  ADD CONSTRAINT `FK_RELATIONSHIP_5` FOREIGN KEY (`ID_MADRE`) REFERENCES `madre` (`ID_MADRE`);

--
-- Filtros para la tabla `cerdo`
--
ALTER TABLE `cerdo`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_CORRAL`) REFERENCES `corral` (`ID_CORRAL`);

--
-- Filtros para la tabla `diagnostico`
--
ALTER TABLE `diagnostico`
  ADD CONSTRAINT `FK_RELATIONSHIP_10` FOREIGN KEY (`ID_CERDO`) REFERENCES `cerdo` (`ID_CERDO`),
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`ID_MADRE`) REFERENCES `madre` (`ID_MADRE`),
  ADD CONSTRAINT `FK_RELATIONSHIP_9` FOREIGN KEY (`ID_LECHON`) REFERENCES `lechon` (`ID_LECHON`);

--
-- Filtros para la tabla `ficha_parto`
--
ALTER TABLE `ficha_parto`
  ADD CONSTRAINT `FK_RELATIONSHIP_8` FOREIGN KEY (`ID_MADRE`) REFERENCES `madre` (`ID_MADRE`);

--
-- Filtros para la tabla `lechon`
--
ALTER TABLE `lechon`
  ADD CONSTRAINT `FK_RELATIONSHIP_1` FOREIGN KEY (`ID_CORRAL`) REFERENCES `corral` (`ID_CORRAL`),
  ADD CONSTRAINT `FK_RELATIONSHIP_4` FOREIGN KEY (`ID_MADRE`) REFERENCES `madre` (`ID_MADRE`);

--
-- Filtros para la tabla `madre`
--
ALTER TABLE `madre`
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_CORRAL`) REFERENCES `corral` (`ID_CORRAL`);

--
-- Filtros para la tabla `medicamento`
--
ALTER TABLE `medicamento`
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`ID_DIAGNOSTICO`) REFERENCES `diagnostico` (`ID_DIAGNOSTICO`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
