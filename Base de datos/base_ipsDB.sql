-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2020 a las 00:33:58
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

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
(5, 'antonio felix castro', 224600, 3321285, 'traslado eps', 3),
(6, 'deivy rivas', 52431526, 1231243, 'nuevo ', 4),
(7, 'ana ruiz', 12341431, 324231342, 'nuevo ', 4),
(12, 'Juana', 2121313, 3123123, 'Especial', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_citas`
--

CREATE TABLE `tb_citas` (
  `id_cita` int(11) NOT NULL,
  `nom_usu_cita` varchar(100) NOT NULL,
  `cedu_usu_cita` int(11) NOT NULL,
  `correo_cita` text NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_servicio` int(11) NOT NULL,
  `id_medico` int(11) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_citas`
--

INSERT INTO `tb_citas` (`id_cita`, `nom_usu_cita`, `cedu_usu_cita`, `correo_cita`, `id_sede`, `id_servicio`, `id_medico`, `fecha`) VALUES
(2, 'pepito ', 231432, 'pepo@gmail.com', 2, 5, 1, '2020-11-04'),
(8, 'paco', 653426, 'paco@gmail.com', 1, 5, 1, '2020-11-20'),
(9, 'deivy rivas', 112344379, 'rivas@hotmail.com', 4, 8, 3, '2020-11-18'),
(11, 'ana luz milena', 554545, 'milenita@hotmail.com', 4, 8, 9, '2020-11-24'),
(14, 'Ribes', 878787, '656546', 4, 3, 3, '2020-11-21');

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
(2, 'la concha', 2),
(3, 'Buenos Aires', 2),
(4, 'Pereira', 1),
(12, 'Ribas', 14);

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
(2, 'arley ', 96764444, 140000, 'cra 44 a # 65 - 09', 'asprillarivas@gmail.com', 5),
(4, 'Deivy Rivas Steven ', 1143997886, 313765146, 'avenida 8 ', 'deyruiz555qgmail.com', 3),
(6, 'paulina Roa', 55426754, 32352823, 'calle 9', 'pau@hotmail.com', 6),
(7, 'Yeferson  rios', 6345223, 31076347, 'calle 1 # 45 - 09', 'yeriru@gmail.com', 6),
(8, 'pedro', 1113123, 11245, 'calle 6 - 54N', 'pedrito@gmail.com', 1),
(12, 'deivy ruiz', 1143997888, 313765146, 'cra 32 # 24 - 34', 'deyruiz555qgmail.com', 3),
(13, 'pedroo', 2323232, 453412, 'calle 9 # 54 - 66', 'pedrito@gmail.com', 5),
(16, 'mauricio', 2345212, 31397463, 'cra 2 # 4 -0', 'mau@gmail.co', 5),
(17, 'pepito peres', 11111111, 986345, 'ave 32 # 21- 76', 'pepo@hotmail.com', 5),
(18, 'alberto', 6537524, 31298356, 'cra 5 - 4', 'alber@gmail.com.co', 6),
(20, 'Arrinann', 23243241, 321432423, 'cra 23 - 34', 'ari@gmail.com.co', 5),
(24, 'Ruben', 4578787, 44557575, '545454', '45457575', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_medicamentos`
--

CREATE TABLE `tb_medicamentos` (
  `id_medicamento` int(11) NOT NULL,
  `nom_medicamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_medicamentos`
--

INSERT INTO `tb_medicamentos` (`id_medicamento`, `nom_medicamento`) VALUES
(1, 'Acetaminofen'),
(2, 'Dolexx'),
(3, 'Asitromicina'),
(4, 'Lebofloxacina'),
(5, 'Noxpirin'),
(6, 'Aspirinitas'),
(7, 'Advil'),
(9, 'Diclofenaco'),
(10, 'Ibuprofeno'),
(12, 'alcohol'),
(14, 'Ibuprofeno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_medicos`
--

CREATE TABLE `tb_medicos` (
  `id_medico` int(11) NOT NULL,
  `nom_medico` varchar(255) NOT NULL,
  `celu_medico` int(11) NOT NULL,
  `Especialista` varchar(50) NOT NULL,
  `cedu_medico` int(11) NOT NULL,
  `correo_medico` text NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_medicos`
--

INSERT INTO `tb_medicos` (`id_medico`, `nom_medico`, `celu_medico`, `Especialista`, `cedu_medico`, `correo_medico`, `id_sede`) VALUES
(1, 'pedro santiago', 31934576, 'cirujano', 12345, 'pedro@gmail.com', 1),
(2, 'santiago reos', 3165476, 'medico general', 987345, 'reos@gmail.com', 1),
(3, 'ana jose', 3123476, 'Cirujano', 78645, 'ana@gmail.com', 1),
(8, 'Pedro', 45512515, 'jinecologo', 156454545, 'pedro@gmail.com', 3),
(9, 'Karen', 55452245, 'Psicologo', 25554555, 'karen122@gmail.com', 4),
(10, 'Gustavo', 7878787, 'Especialista', 555555, '787878@gmail.com', 1),
(12, 'Fernando', 46643545, 'Psicologo', 55656565, 'fernando@gmail.com', 6),
(13, 'juan esteban ', 2147483647, 'cirujano', 562331448, 'jhikio@gmail.com', 1);

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
(2, 'Argentina'),
(5, 'Brasil'),
(6, 'Paraguay'),
(8, 'Uruguay'),
(9, 'Honduras'),
(14, 'CECEP-colombia');

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
(5, 'Asesores'),
(6, 'Cliente');

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
(5, 'cruz roja - rojita', 'calle 24d # 42a - 07', 112312, 2),
(6, 'cruz verde', 'av 5n # 2 - 12 ', 23423, 1),
(10, 'Cruz amarilla pollo', '4545', 4545, 12);

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
(2, 'Cita con medico general', 2),
(3, 'Especialista', 1),
(4, 'Laboratorios Clinicos', 3),
(5, 'Odontologia', 1),
(7, 'Especialista', 2),
(8, 'Laboratorios Clinicos', 2),
(10, 'Urgencias', 3),
(15, 'Fonoaudiologia', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

CREATE TABLE `tb_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nom_usuario` varchar(255) NOT NULL,
  `cedu_usuario` int(11) NOT NULL,
  `usua_user` varchar(100) NOT NULL,
  `celu_usuario` int(11) NOT NULL,
  `correo_usuario` text NOT NULL,
  `id_sede` int(11) NOT NULL,
  `id_rol` int(11) NOT NULL,
  `usua_pass` varchar(100) NOT NULL,
  `usua_foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tb_usuarios`
--

INSERT INTO `tb_usuarios` (`id_usuario`, `nom_usuario`, `cedu_usuario`, `usua_user`, `celu_usuario`, `correo_usuario`, `id_sede`, `id_rol`, `usua_pass`, `usua_foto`) VALUES
(4, 'Deivi Steven Rivas Rivas', 223451, 'deivy', 53453424, 'Drivas@gmail.com.co', 1, 1, '$2y$12$xyMXafB//kPIBlb6kBjUUe9ojYPpLgWT.uKEFdRMDfEzp7YffmmvW', 'deivy.jpg'),
(7, 'Pedro Bustamante Arqueo', 5562543, 'pedro', 31245673, 'Pedro@otro.com.co', 2, 3, '$2y$12$c0SuyCU6hdqKMf7RcW/ya.u0JfVRNcY8M10L7Thb2yvn0DaQT5w/a', 'avatar.png'),
(8, 'pepa pina peres', 223312, 'pepa', 3217465, 'pepa@gmail.com', 2, 2, '$2y$12$FINli3nvtX02o1nrixPpJOh9InzXNSaYMeV3zCGd.Rp2XSLPGweEa', 'avatar04.png'),
(9, 'Antony anuel torres', 2542524, 'antony', 4232525, 'anto@gmail.com', 1, 5, '$2y$12$z4E2K2boJbpDTpbZ7jyW2u87Bag7Lfa1Z5Z7uFYUcejY0FCaaJgZy', 'user2-160x160.jpg'),
(10, 'pepito perez', 64546564, 'pepito', 36456464, 'pepito123@gmail.com', 3, 6, '$2y$12$lggAAtExlYSbS.g6IKCmXuYbAlNqrwKZuQkbYIjkpz4K43tI17rmW', 'user2-160x160.jpg');

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
  ADD KEY `fkid_servicio` (`id_servicio`),
  ADD KEY `fkid_sede` (`id_sede`),
  ADD KEY `fkid_medico` (`id_medico`);

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
  MODIFY `id_afiliado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tb_citas`
--
ALTER TABLE `tb_citas`
  MODIFY `id_cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `tb_ciudades`
--
ALTER TABLE `tb_ciudades`
  MODIFY `id_ciudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tb_medicamentos`
--
ALTER TABLE `tb_medicamentos`
  MODIFY `id_medicamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_medicos`
--
ALTER TABLE `tb_medicos`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `tb_pais`
--
ALTER TABLE `tb_pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `tb_sedes`
--
ALTER TABLE `tb_sedes`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tb_servicio`
--
ALTER TABLE `tb_servicio`
  MODIFY `id_servicio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
  ADD CONSTRAINT `tb_citas_ibfk_1` FOREIGN KEY (`id_servicio`) REFERENCES `tb_servicio` (`id_servicio`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_citas_ibfk_2` FOREIGN KEY (`id_sede`) REFERENCES `tb_sedes` (`id_sede`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_citas_ibfk_3` FOREIGN KEY (`id_medico`) REFERENCES `tb_medicos` (`id_medico`) ON DELETE CASCADE ON UPDATE CASCADE;

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
