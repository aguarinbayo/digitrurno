-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-05-2018 a las 01:38:39
-- Versión del servidor: 10.1.10-MariaDB
-- Versión de PHP: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `turnofacil`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asesor`
--

CREATE TABLE `asesor` (
  `idasesor` int(11) NOT NULL,
  `turno` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `Estado` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `cod_Cliente` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `caja`
--

CREATE TABLE `caja` (
  `idCaja` int(11) NOT NULL,
  `turno` varchar(10) COLLATE utf8_bin DEFAULT NULL,
  `code_Cliente` int(11) DEFAULT NULL,
  `Estado` varchar(20) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idClientes` int(11) NOT NULL,
  `cedula` varchar(20) COLLATE utf8_bin DEFAULT NULL,
  `nombre` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `telefono` varchar(15) COLLATE utf8_bin DEFAULT NULL,
  `password` varchar(45) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idClientes`, `cedula`, `nombre`, `telefono`, `password`) VALUES
(1, '1019110712', 'daniel', '3178363249', '1234'),
(2, '1495', 'Daniel Contreras', '6901621', 'c893bad68927b457dbed39460e6afd62'),
(3, '10109', 'daniel', '6901621', 'a94652aa97c7211ba8954dd15a3cf838'),
(4, '1495', 'daniel', '6901621', 'dc599a9972fde3045dab59dbd1ae170b'),
(5, '1495', 'daniel', '6901621', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, '1495', 'daniel', '6901621', '42d6174fddbf1ff96b645cd7a8f6d270'),
(7, '1495', 'daniel', '6901621', '42d6174fddbf1ff96b645cd7a8f6d270'),
(8, '1495', 'daniel', '6901621', 'a67c8c9a961b4182688768dd9ba015fe'),
(9, '1495', 'daniel', '6901621', 'a67c8c9a961b4182688768dd9ba015fe'),
(10, '654', 'daniel', '6901621', 'd41d8cd98f00b204e9800998ecf8427e'),
(11, '654', 'daniel', '6901621', 'd41d8cd98f00b204e9800998ecf8427e'),
(12, '654', 'daniel', '6901621', 'c893bad68927b457dbed39460e6afd62'),
(13, '654', 'daniel', '6901621', 'c893bad68927b457dbed39460e6afd62'),
(14, '1495', 'daniel', '6901621', 'c893bad68927b457dbed39460e6afd62'),
(15, '14955', 'daniel', '6901621', 'd41d8cd98f00b204e9800998ecf8427e'),
(16, '14955', 'daniel', '6901621', 'dc599a9972fde3045dab59dbd1ae170b'),
(17, '14955', 'daniel', '6901621', '81dc9bdb52d04dc20036dbd8313ed055'),
(18, '14955', 'daniel', '6901621', 'ab233b682ec355648e7891e66c54191b'),
(19, '14955', 'daniel', '6901621', 'ab233b682ec355648e7891e66c54191b'),
(20, '1495', 'aniel', '12454', 'aa47f8215c6f30a0dcdb2a36a9f4168e'),
(21, '098', 'uan', '89899', '81dc9bdb52d04dc20036dbd8313ed055'),
(22, '1495', 'asda', '1234', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD PRIMARY KEY (`idasesor`),
  ADD KEY `fk_asesor_Clientes1_idx` (`cod_Cliente`);

--
-- Indices de la tabla `caja`
--
ALTER TABLE `caja`
  ADD PRIMARY KEY (`idCaja`),
  ADD KEY `fk_Caja_Clientes_idx` (`code_Cliente`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idClientes`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asesor`
--
ALTER TABLE `asesor`
  MODIFY `idasesor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `caja`
--
ALTER TABLE `caja`
  MODIFY `idCaja` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idClientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `asesor`
--
ALTER TABLE `asesor`
  ADD CONSTRAINT `fk_asesor_Clientes1` FOREIGN KEY (`cod_Cliente`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `caja`
--
ALTER TABLE `caja`
  ADD CONSTRAINT `fk_Caja_Clientes` FOREIGN KEY (`code_Cliente`) REFERENCES `clientes` (`idClientes`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
