-- phpMyAdmin SQL Dump
-- version 4.4.15.9
-- https://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-09-2019 a las 17:05:36
-- Versión del servidor: 5.6.37
-- Versión de PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `reciclaje`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casas`
--

CREATE TABLE IF NOT EXISTS `casas` (
  `id` int(11) NOT NULL,
  `t_identidad` varchar(3) NOT NULL,
  `n_identidad` varchar(200) NOT NULL,
  `nombre` varchar(300) NOT NULL,
  `n_casa` varchar(150) NOT NULL,
  `direccion` varchar(2000) NOT NULL,
  `n_personas` int(11) NOT NULL,
  `age_0_12` int(11) NOT NULL,
  `age_13_20` int(11) NOT NULL,
  `age_20_100` int(11) NOT NULL,
  `participa` varchar(5) NOT NULL,
  `telefono` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casas`
--

INSERT INTO `casas` (`id`, `t_identidad`, `n_identidad`, `nombre`, `n_casa`, `direccion`, `n_personas`, `age_0_12`, `age_13_20`, `age_20_100`, `participa`, `telefono`, `email`) VALUES
(1, 'V', '27232299', 'Pablo Miguel', '119', 'Urbanizacion El Molino calle el cimiento casa Nº 119', 9, 3, 3, 4, 'Si', '04247572217', 'pablov806@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casa_dia`
--

CREATE TABLE IF NOT EXISTS `casa_dia` (
  `id` int(11) NOT NULL,
  `id_casa` int(11) NOT NULL,
  `participa` varchar(2) NOT NULL,
  `fecha` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `casa_dia`
--

INSERT INTO `casa_dia` (`id`, `id_casa`, `participa`, `fecha`) VALUES
(1, 1, 'Si', '27-09-2019');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `plastico_dia`
--

CREATE TABLE IF NOT EXISTS `plastico_dia` (
  `id` int(11) NOT NULL,
  `fecha` varchar(100) NOT NULL,
  `residuos_no_tratados` float NOT NULL,
  `residuos_tratados` float NOT NULL,
  `plastico` float NOT NULL,
  `carton` float NOT NULL,
  `papel` float NOT NULL,
  `vidrio` float NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `plastico_dia`
--

INSERT INTO `plastico_dia` (`id`, `fecha`, `residuos_no_tratados`, `residuos_tratados`, `plastico`, `carton`, `papel`, `vidrio`) VALUES
(1, '14-09-2019', 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `nombre` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `username`, `password`, `nombre`) VALUES
(1, 'pablo', '$2y$10$F.NUnhCqjLUrpcCJAM0/ruOGkbeH8IXa6Co/0xLAvQ5EJjedhnIQC', 'Pablo Villamizar');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casas`
--
ALTER TABLE `casas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `casa_dia`
--
ALTER TABLE `casa_dia`
  ADD PRIMARY KEY (`id`,`id_casa`),
  ADD KEY `idCasa` (`id_casa`);

--
-- Indices de la tabla `plastico_dia`
--
ALTER TABLE `plastico_dia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casas`
--
ALTER TABLE `casas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `casa_dia`
--
ALTER TABLE `casa_dia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `plastico_dia`
--
ALTER TABLE `plastico_dia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `casa_dia`
--
ALTER TABLE `casa_dia`
  ADD CONSTRAINT `idCasa` FOREIGN KEY (`id_casa`) REFERENCES `casas` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
