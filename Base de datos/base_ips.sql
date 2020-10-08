-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-10-2020 a las 06:28:21
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `base_ips`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_afiliados`
--

CREATE TABLE `tb_afiliados` (
  `id_afiliado` int(11) NOT NULL,
  `nom_afiliado` varchar(255) NOT NULL,
  `cedu_afiliado` int(11) NOT NULL,
  `celu_afiliado` int(11) NOT NULL,
  `tipo_afiliacion` varchar(255) NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_afiliados`
--

INSERT INTO `tb_afiliados` (`id_afiliado`, `nom_afiliado`, `cedu_afiliado`, `celu_afiliado`, `tipo_afiliacion`, `id_sede`) VALUES
(1, 'Marcos antonio', 998213, 312456785, 'traslado eps', 1),
(2, 'Marcos antonio', 998213, 312456785, 'traslado eps', 1),
(3, 'Diana lorena', 111213, 3143485, 'nueva', 1),
(4, 'oscar fernando', 992223, 3127755, 'traslado eps', 2),
(5, 'antonio felix', 224613, 3321285, 'traslado eps', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_citas`
--

CREATE TABLE `tb_citas` (
  `id_cita` int(11) NOT NULL,
  `nom_usu_cita` varchar(100) NOT NULL,
  `cedu_usu_cita` int(11) NOT NULL,
  `correo_cita` text NOT NULL,
  `id_servicio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_citas`
--

INSERT INTO `tb_citas` (`id_cita`, `nom_usu_cita`, `cedu_usu_cita`, `correo_cita`, `id_servicio`) VALUES
(1, 'Maria del socorro', 2345612, 'maria@ijg.com.co', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_ciudades`
--

CREATE TABLE `tb_ciudades` (
  `id_ciudad` int(11) NOT NULL,
  `nom_ciudad` varchar(100) NOT NULL,
  `id_pais` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_ciudades`
--

INSERT INTO `tb_ciudades` (`id_ciudad`, `nom_ciudad`, `id_pais`) VALUES
(1, 'Cali', 1),
(2, 'Bogota', 1),
(3, 'Buenos Aires', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empleados`
--

CREATE TABLE `tb_empleados` (
  `id_empleado` int(11) NOT NULL,
  `nom_empleado` varchar(255) NOT NULL,
  `cedu_emplado` int(11) NOT NULL,
  `celu_empleado` int(11) NOT NULL,
  `dire_empleado` text NOT NULL,
  `email_empleado` text NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_empleados`
--

INSERT INTO `tb_empleados` (`id_empleado`, `nom_empleado`, `cedu_emplado`, `celu_empleado`, `dire_empleado`, `email_empleado`, `id_sede`) VALUES
(1, 'pedro', 1113123, 11245, 'calle 6', 'pedrito@gmail.com', 1),
(2, 'arley', 96766524, 143345, 'calle 2', 'arley@gmail.com', 1),
(3, 'oscar', 78566524, 112345, 'calle 1', 'oscar@gmail.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_medicamentos`
--

CREATE TABLE `tb_medicamentos` (
  `id_medicamento` int(11) NOT NULL,
  `nom_medicamento` varchar(255) NOT NULL,
  `fecha_venci` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_medicamentos`
--

INSERT INTO `tb_medicamentos` (`id_medicamento`, `nom_medicamento`, `fecha_venci`) VALUES
(1, 'Acetaminofen', '2023-01-20'),
(2, 'Dolex', '2023-01-20'),
(3, 'Asitromicina', '2023-01-20'),
(4, 'Lebofloxacina', '2023-01-20'),
(5, 'Noxpirin', '2023-01-20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_medicos`
--

CREATE TABLE `tb_medicos` (
  `id_medico` int(11) NOT NULL,
  `nom_medico` varchar(255) NOT NULL,
  `celu_medico` int(11) NOT NULL,
  `cedu_medico` int(11) NOT NULL,
  `correo_medico` text NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_medicos`
--

INSERT INTO `tb_medicos` (`id_medico`, `nom_medico`, `celu_medico`, `cedu_medico`, `correo_medico`, `id_sede`) VALUES
(1, 'pedro santiago', 31934576, 12345, 'pedro@gmail.com', 1),
(2, 'santiago reos', 3165476, 987345, 'reos@gmail.com', 1),
(3, 'ana jose', 3123476, 78645, 'ana@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pais`
--

CREATE TABLE `tb_pais` (
  `id_pais` int(11) NOT NULL,
  `nom_pais` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_pais`
--

INSERT INTO `tb_pais` (`id_pais`, `nom_pais`) VALUES
(1, 'Colombia'),
(2, 'Argentina');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_rol` int(11) NOT NULL,
  `nom_rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `nom_rol`) VALUES
(1, 'Administrador'),
(2, 'Director'),
(3, 'Medicos'),
(4, 'Especialistas'),
(5, 'Asesores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sedes`
--

CREATE TABLE `tb_sedes` (
  `id_sede` int(11) NOT NULL,
  `nom_sede` varchar(255) NOT NULL,
  `direc_sede` text NOT NULL,
  `tele_sede` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_sedes`
--

INSERT INTO `tb_sedes` (`id_sede`, `nom_sede`, `direc_sede`, `tele_sede`, `id_ciudad`) VALUES
(1, 'mano sagradas', 'av 5n # 3n - 57', 886524, 1),
(2, 'sanitas', 'av 6n # 36n - 7', 834564, 1),
(3, 'Diosito', 'trnasv 6s # 33n - 67', 786436, 1),
(4, 'san juan', 'calle 6 # 45 - 47', 112342, 1),
(5, 'cruz roja', 'calle 24d # 42a - 07', 112312, 1),
(6, 'cruz verde', 'av 5n # 2 - 12 ', 23423, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_servicio`
--

CREATE TABLE `tb_servicio` (
  `id_servicio` int(11) NOT NULL,
  `tipo_servicio` varchar(100) NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_servicio`
--

INSERT INTO `tb_servicio` (`id_servicio`, `tipo_servicio`, `id_sede`) VALUES
(1, 'Cita con medico general', 1),
(2, 'Cita con medico general', 1),
(3, 'Especialista', 1),
(4, 'Laboratorios Clinicos', 1),
(5, 'Odontologia', 1),
(6, 'Cita con medico general', 2),
(7, 'Especialista', 2),
(8, 'Laboratorios Clinicos', 2),
(9, 'Odontologia', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(255) NOT NULL,
  `cedu_usuario` int(11) NOT NULL,
  `sexo_usuario` varchar(2) NOT NULL,
  `celu_usuario` int(11) NOT NULL,
  `correo_usuario` text NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nom_usuario`, `cedu_usuario`, `sexo_usuario`, `celu_usuario`, `correo_usuario`, `id_sede`, `id_rol`) VALUES
(1, 'Camilo fuentes', 231111, 'M', 98111, 'funtes@hotmail.com', 2, 1),
(2, 'loren', 234564, 'F', 98712, 'lorenita@hotmail.com', 3, 1),
(3, 'mayra', 201123, 'F', 98142, 'mayra@hotmail.com', 4, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_afiliados`
--
ALTER TABLE `tb_afiliados`
  ADD PRIMARY KEY (`id_afiliado`),
  ADD KEY `fkid_sede` (`id_sede`);

--
-- Indices de la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  ADD PRIMARY KEY (`id_cita`),
  ADD KEY `fkid_servicio` (`id_servicio`);

--
-- Indices de la tabla `tb_ciudades`
--
ALTER TABLE `tb_ciudades`
  ADD PRIMARY KEY (`id_ciudad`),
  ADD KEY `fkid_pais` (`id_pais`);

--
-- Indices de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `fkid_sede` (`id_sede`);

--
-- Indices de la tabla `tb_medicamentos`
--
ALTER TABLE `tb_medicamentos`
  ADD PRIMARY KEY (`id_medicamento`);

--
-- Indices de la tabla `tb_medicos`
--
ALTER TABLE `tb_medicos`
  ADD PRIMARY KEY (`id_medico`),
  ADD KEY `fkid_sede` (`id_sede`);

--
-- Indices de la tabla `tb_pais`
--
ALTER TABLE `tb_pais`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `tb_sedes`
--
ALTER TABLE `tb_sedes`
  ADD PRIMARY KEY (`id_sede`),
  ADD KEY `fkid_ciudad` (`id_ciudad`);

--
-- Indices de la tabla `tb_servicio`
--
ALTER TABLE `tb_servicio`
  ADD PRIMARY KEY (`id_servicio`),
  ADD KEY `fkid_sede` (`id_sede`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fkid_sede` (`id_sede`),
  ADD KEY `fkid_rol` (`id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_afiliados`
--
ALTER TABLE `tb_afiliados`
  MODIFY `id_afiliado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tb_ciudades`
--
ALTER TABLE `tb_ciudades`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_medicamentos`
--
ALTER TABLE `tb_medicamentos`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_medicos`
--
ALTER TABLE `tb_medicos`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tb_pais`
--
ALTER TABLE `tb_pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `tb_sedes`
--
ALTER TABLE `tb_sedes`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tb_servicio`
--
ALTER TABLE `tb_servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_afiliados`
--
ALTER TABLE `tb_afiliados`
  ADD CONSTRAINT `tb_afiliados_ibfk_1` FOREIGN KEY (`id_sede`) REFERENCES `tb_sedes` (`id_sede`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  ADD CONSTRAINT `tb_citas_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `tb_servicio` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_ciudades`
--
ALTER TABLE `tb_ciudades`
  ADD CONSTRAINT `tb_ciudades_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `tb_pais` (`id_pais`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  ADD CONSTRAINT `tb_empleados_ibfk_1` FOREIGN KEY (`id_sede`) REFERENCES `tb_sedes` (`id_sede`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_medicos`
--
ALTER TABLE `tb_medicos`
  ADD CONSTRAINT `tb_medicos_ibfk_1` FOREIGN KEY (`id_sede`) REFERENCES `tb_sedes` (`id_sede`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_sedes`
--
ALTER TABLE `tb_sedes`
  ADD CONSTRAINT `tb_sedes_ibfk_1` FOREIGN KEY (`id_ciudad`) REFERENCES `tb_ciudades` (`id_ciudad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_servicio`
--
ALTER TABLE `tb_servicio`
  ADD CONSTRAINT `tb_servicio_ibfk_1` FOREIGN KEY (`id_sede`) REFERENCES `tb_sedes` (`id_sede`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD CONSTRAINT `tb_usuarios_ibfk_1` FOREIGN KEY (`id_sede`) REFERENCES `tb_sedes` (`id_sede`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_usuarios_ibfk_2` FOREIGN KEY (`id_rol`) REFERENCES `tb_roles` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
