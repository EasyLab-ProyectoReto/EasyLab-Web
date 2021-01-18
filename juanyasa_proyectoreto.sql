-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-01-2021 a las 04:13:54
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `juanyasa_proyectoreto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id_Encuesta` int(11) NOT NULL,
  `Pregunta` varchar(500) NOT NULL,
  `Valor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `funcionalidades`
--

CREATE TABLE `funcionalidades` (
  `id_Funcionalidad` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre_Funcionalidad` varchar(100) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `FK_Herramientas_F` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `funcionalidades`
--

INSERT INTO `funcionalidades` (`id_Funcionalidad`, `Fecha`, `Nombre_Funcionalidad`, `Descripcion`, `FK_Herramientas_F`) VALUES
(1, '2020-12-15', 'Casos de uso', 'Casos de uso en Enterprise Architect', 1),
(2, '2020-12-18', 'Diagramas de contexto', 'Diagramas de contexto en Enterprise Architect', 1),
(3, '2021-01-05', 'WBS', NULL, 2),
(4, '2021-01-18', 'asdasdasdasd', 'asdasd', 1),
(5, '2021-01-18', 'asdasdasdasd', 'asdasd', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `herramientas`
--

CREATE TABLE `herramientas` (
  `id_Herramientas` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `herramientas`
--

INSERT INTO `herramientas` (`id_Herramientas`, `nombre`, `descripcion`) VALUES
(1, 'Enterprise Architect', 'Herramienta para modelado'),
(2, 'Microsof Project', 'Herramienta para establecer tareas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `practicas`
--

CREATE TABLE `practicas` (
  `id_Practica` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Nombre_Practica` varchar(100) NOT NULL,
  `Descripcion` varchar(255) DEFAULT NULL,
  `FK_Herramientas_P` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `practicas`
--

INSERT INTO `practicas` (`id_Practica`, `Fecha`, `Nombre_Practica`, `Descripcion`, `FK_Herramientas_P`) VALUES
(1, '2020-12-15', 'Practia diagramas de contexto', 'Practia para el repaso de los diagramas de contexto', 1),
(2, '2020-12-18', 'Practica casos de uso', 'Practia para el repaso de los casos de uso', 1),
(3, '2021-01-05', 'Practica wbs', 'Practia para el repaso de wbs', 2),
(4, '2021-01-18', 'aaa', 'aaasdasd', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_funcionalidades`
--

CREATE TABLE `recursos_funcionalidades` (
  `id_RecursoF` int(11) NOT NULL,
  `Nombre_Archivo` varchar(100) NOT NULL,
  `Tamaño` int(11) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Ruta` varchar(500) NOT NULL,
  `FK_Funcionalidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_practicas`
--

CREATE TABLE `recursos_practicas` (
  `id_RecursoP` int(11) NOT NULL,
  `Nombre_Archivo` varchar(100) NOT NULL,
  `Tamaño` int(11) NOT NULL,
  `Tipo` varchar(45) NOT NULL,
  `Ruta` varchar(500) NOT NULL,
  `FK_Practicas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_Usuario` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_Usuario`, `usuario`, `password`, `rol`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id_Encuesta`);

--
-- Indices de la tabla `funcionalidades`
--
ALTER TABLE `funcionalidades`
  ADD PRIMARY KEY (`id_Funcionalidad`),
  ADD KEY `fk_herramientas` (`FK_Herramientas_F`);

--
-- Indices de la tabla `herramientas`
--
ALTER TABLE `herramientas`
  ADD PRIMARY KEY (`id_Herramientas`);

--
-- Indices de la tabla `practicas`
--
ALTER TABLE `practicas`
  ADD PRIMARY KEY (`id_Practica`),
  ADD KEY `FK_Herramientas_P` (`FK_Herramientas_P`);

--
-- Indices de la tabla `recursos_funcionalidades`
--
ALTER TABLE `recursos_funcionalidades`
  ADD PRIMARY KEY (`id_RecursoF`),
  ADD KEY `recursos_funcionalidades_ibfk_1` (`FK_Funcionalidades`);

--
-- Indices de la tabla `recursos_practicas`
--
ALTER TABLE `recursos_practicas`
  ADD PRIMARY KEY (`id_RecursoP`),
  ADD KEY `FK_Practicas` (`FK_Practicas`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_Usuario`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `funcionalidades`
--
ALTER TABLE `funcionalidades`
  ADD CONSTRAINT `fk_herramientas` FOREIGN KEY (`FK_Herramientas_F`) REFERENCES `herramientas` (`id_Herramientas`);

--
-- Filtros para la tabla `practicas`
--
ALTER TABLE `practicas`
  ADD CONSTRAINT `practicas_ibfk_1` FOREIGN KEY (`FK_Herramientas_P`) REFERENCES `herramientas` (`id_Herramientas`);

--
-- Filtros para la tabla `recursos_funcionalidades`
--
ALTER TABLE `recursos_funcionalidades`
  ADD CONSTRAINT `recursos_funcionalidades_ibfk_1` FOREIGN KEY (`FK_Funcionalidades`) REFERENCES `funcionalidades` (`id_Funcionalidad`);

--
-- Filtros para la tabla `recursos_practicas`
--
ALTER TABLE `recursos_practicas`
  ADD CONSTRAINT `recursos_practicas_ibfk_1` FOREIGN KEY (`FK_Practicas`) REFERENCES `practicas` (`id_Practica`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
