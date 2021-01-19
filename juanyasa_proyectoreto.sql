-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-01-2021 a las 01:20:42
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
(1, '2021-01-18', 'Estructura de desglose de tareas', 'Work Breakdown Structure - WBS', 3),
(3, '2021-01-18', 'LA IMPORTANCIA DE UTILIZAR EDT (WBS) Y LÍNEAS BASE EN EL CONTROL DE PROYECTOS DE INFRAESTRUCTURA', 'Análisis de la metodología de la EDT (WBS) y la Línea Base Presupuestal para aplicarla en un proyecto de infraestructura: Planta Criogénica ', 2),
(9, '2021-01-18', 'MICROSOFT PROJECT PROFESSIONAL 2013', 'Orientacion al usuario primero en las funciones del manejo\r\nde la herramienta Microsoft Office Project Professional 2013', 2),
(10, '2021-01-18', 'Uso de Microsoft Project', 'En este documento se muestra una referencia orientada al uso del programa de Microsoft Project 2016', 2),
(11, '2021-01-18', 'Enterprise Architect: Manual de usuario', 'El presente documento describe cuales son las tareas básicas que se pueden ejecutar en la explotación de la herramienta de modelado Enterprise Architect Corporate Edition.', 1);

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
(2, 'Microsof Project', 'Herramienta para establecer tareas'),
(3, 'Project libre', 'Herramienta para desglose de tareas');

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
(1, '2021-01-18', 'EJERCICIO PARA EL CURSO BÁSICO DE MICROSOFT PROJECT', 'Se trata de construir una pequeña vivienda.', 2),
(3, '2021-01-18', 'Proyectos de Sistemas de Software – 2016', 'Project Libre', 3),
(4, '2021-01-18', 'EVALUACIÓN DE LAS APLICACIONES PROJECT LIBRE VERSUS MICROSOFT ', 'Ejercicios de obras civiles', 3),
(5, '2021-01-18', 'Ejercicios	modelado de software', 'Ejercicios	modelado en Enterprise Architect', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_funcionalidades`
--

CREATE TABLE `recursos_funcionalidades` (
  `id_RecursoF` int(11) NOT NULL,
  `Nombre_Archivo` varchar(100) NOT NULL,
  `Tamaño` int(11) NOT NULL,
  `Tipo` varchar(50) NOT NULL,
  `Ruta` varchar(500) NOT NULL,
  `FK_Funcionalidades` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursos_funcionalidades`
--

INSERT INTO `recursos_funcionalidades` (`id_RecursoF`, `Nombre_Archivo`, `Tamaño`, `Tipo`, `Ruta`, `FK_Funcionalidades`) VALUES
(0, 'Tesis_Miguel Angel Martínez Reyes .pdf', 2449957, 'pdf', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/Tesis_Miguel Angel Martínez Reyes .pdf', 3),
(1, 'Estructura-de-desglose-de-tareas.pdf', 360324, 'pdf', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/Estructura-de-desglose-de-tareas.pdf', 1),
(2, 'Manual Microsoft Project Professional.pdf', 4088795, 'pdf', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/Manual Microsoft Project Professional.pdf', 9),
(3, 'project-2016.pdf', 12879955, 'pdf', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/project-2016.pdf', 10),
(4, 'EA. Manual de usuario para ArinBide v1.2.pdf', 5975483, ' Manual de usuario para ArinBide v1', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/EA. Manual de usuario para ArinBide v1.2.pdf', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recursos_practicas`
--

CREATE TABLE `recursos_practicas` (
  `id_RecursoP` int(11) NOT NULL,
  `Nombre_Archivo` varchar(100) NOT NULL,
  `Tamaño` int(11) NOT NULL,
  `Tipo` varchar(500) NOT NULL,
  `Ruta` varchar(500) NOT NULL,
  `FK_Practicas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `recursos_practicas`
--

INSERT INTO `recursos_practicas` (`id_RecursoP`, `Nombre_Archivo`, `Tamaño`, `Tipo`, `Ruta`, `FK_Practicas`) VALUES
(1, 'f2963a_37060076ce1544098575ade16f8a3dd6.pdf', 229527, 'pdf', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/f2963a_37060076ce1544098575ade16f8a3dd6.pdf', 1),
(2, '03-Presentacion ProjectLibre 8Septiembre2016.pdf', 668313, 'pdf', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/03-Presentacion ProjectLibre 8Septiembre2016.pdf', 3),
(3, 'Evaluacion de las aplicaciones project libre Vs microsoft project en la programacion de un proyecto ', 2862562, 'pdf', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/Evaluacion de las aplicaciones project libre Vs microsoft project en la programacion de un proyecto de edificacion.pdf', 4),
(4, 'ejercicios_modelado.pdf', 1618400, 'pdf', 'C:/xampp/htdocs/EasyLabWeb/assets/Archivos/ejercicios_modelado.pdf', 5);

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
