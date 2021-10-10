-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2020 a las 05:20:13
-- Versión del servidor: 10.4.8-MariaDB
-- Versión de PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_univer_prodesat`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_alumnos`
--

CREATE TABLE `cat_alumnos` (
  `icodigoalumno` int(11) NOT NULL,
  `vchnombre` varchar(50) NOT NULL,
  `vchapellidos` varchar(50) NOT NULL,
  `dtfechanac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_alumnos`
--

INSERT INTO `cat_alumnos` (`icodigoalumno`, `vchnombre`, `vchapellidos`, `dtfechanac`) VALUES
(1234, 'Ester', 'Expositor Ozuna', '0000-00-00'),
(2342, 'ander', 'muñoz', '1992-02-08'),
(2345, 'Lucrecia', 'Montenegro', '1999-08-24'),
(3245, 'Valerio', 'Montenegro', '1995-09-24'),
(4444, 'alda', 'adla', '1222-12-12'),
(5432, 'Polo', 'Machin', '1998-04-12'),
(8888, 'Jesus', 'Petro Niño', '1007-09-12');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_materias`
--

CREATE TABLE `cat_materias` (
  `vchcodigomateria` varchar(5) NOT NULL,
  `vchmateria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_materias`
--

INSERT INTO `cat_materias` (`vchcodigomateria`, `vchmateria`) VALUES
('PPP92', 'Sociales'),
('qq09', 'Español'),
('qqqq', 'ingles'),
('QQQQ1', 'ANTO'),
('zxzx', 'Geografia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cat_rel_alumno_materia`
--

CREATE TABLE `cat_rel_alumno_materia` (
  `fcalificacion` float NOT NULL,
  `cat_alumnos_icodigoalumno` int(11) NOT NULL,
  `cat_materias_vchcodigomateria` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cat_rel_alumno_materia`
--

INSERT INTO `cat_rel_alumno_materia` (`fcalificacion`, `cat_alumnos_icodigoalumno`, `cat_materias_vchcodigomateria`) VALUES
(0, 3245, 'qqqq'),
(0, 4444, 'QQQQ1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `IdUser` int(11) NOT NULL,
  `Nombre` varchar(90) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`IdUser`, `Nombre`, `usuario`, `password`) VALUES
(1, 'jesus', 'admin', 'admin');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cat_alumnos`
--
ALTER TABLE `cat_alumnos`
  ADD PRIMARY KEY (`icodigoalumno`);

--
-- Indices de la tabla `cat_materias`
--
ALTER TABLE `cat_materias`
  ADD PRIMARY KEY (`vchcodigomateria`);

--
-- Indices de la tabla `cat_rel_alumno_materia`
--
ALTER TABLE `cat_rel_alumno_materia`
  ADD KEY `cat_rel_alumno_materia_cat_alumnos_fk` (`cat_alumnos_icodigoalumno`),
  ADD KEY `cat_rel_alumno_materia_cat_materias_fk` (`cat_materias_vchcodigomateria`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`IdUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `IdUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cat_rel_alumno_materia`
--
ALTER TABLE `cat_rel_alumno_materia`
  ADD CONSTRAINT `cat_rel_alumno_materia_cat_alumnos_fk` FOREIGN KEY (`cat_alumnos_icodigoalumno`) REFERENCES `cat_alumnos` (`icodigoalumno`),
  ADD CONSTRAINT `cat_rel_alumno_materia_cat_materias_fk` FOREIGN KEY (`cat_materias_vchcodigomateria`) REFERENCES `cat_materias` (`vchcodigomateria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
