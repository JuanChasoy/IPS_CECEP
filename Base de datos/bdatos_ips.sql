-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-10-2020 a las 05:13:39
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
-- Base de datos: `bdatos_ips`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_afiliados`
--

CREATE TABLE `tb_afiliados` (
  `id_afiliado` int(11) NOT NULL,
  `nom_afiliado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_soli_afili` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tipo_afili_reali` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `celu_afiliado` int(11) NOT NULL,
  `cedu_afiliado` int(11) NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_afiliados`
--

INSERT INTO `tb_afiliados` (`id_afiliado`, `nom_afiliado`, `tipo_soli_afili`, `tipo_afili_reali`, `celu_afiliado`, `cedu_afiliado`, `id_sede`) VALUES
(1, 'Jose maria romero', 'Afiliación al Régimen Contributivo', 'Traslado de EPS.', 234567, 423134567, 1),
(2, 'geronimo', 'traslado eps', 'nuevo', 98536, 1234908, 1),
(3, 'geronimo', 'traslado eps', 'nuevo', 98536, 1234908, 1),
(4, 'mario', 'traslado eps', 'nuevo', 14626, 121108, 2),
(5, 'romo', 'traslado eps', 'nuevo', 11236, 1223408, 1),
(6, 'stefany', 'traslado eps', 'nuevo', 456536, 1097908, 1),
(7, 'ana', 'traslado eps', 'nuevo', 92211, 120088, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_empleados`
--

CREATE TABLE `tb_empleados` (
  `id_empleado` int(11) NOT NULL,
  `nom_empleado` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cedu_emplado` int(11) NOT NULL,
  `direc_empleado` text COLLATE utf8_unicode_ci NOT NULL,
  `celu_empleado` int(11) NOT NULL,
  `email_empleado` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_empleados`
--

INSERT INTO `tb_empleados` (`id_empleado`, `nom_empleado`, `cedu_emplado`, `direc_empleado`, `celu_empleado`, `email_empleado`, `id_sede`) VALUES
(1, 'alberto jimenes', 346872, 'cra 34 # 65 -67 bis', 5467234, 'jimenes@hotmail.com', 1),
(2, 'pepito', 11136524, 'calle 5', 123345, 'pepito@gmail.com', 1),
(3, 'maria', 12634324, 'calle 5', 123345, 'maria@gmail.com', 1),
(4, 'pedro', 1113123, 'calle 6', 11245, 'pedrito@gmail.com', 1),
(5, 'arley', 96766524, 'calle 2', 143345, 'arley@gmail.com', 1),
(6, 'oscar', 78566524, 'calle 1', 112345, 'oscar@gmail.com', 1),
(7, 'juanda', 11345524, 'calle 8', 123312, 'janda@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_medicos`
--

CREATE TABLE `tb_medicos` (
  `id_medico` int(11) NOT NULL,
  `nom_medico` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `celu_medico` int(11) NOT NULL,
  `cedu_medico` int(11) NOT NULL,
  `correo_medico` text COLLATE utf8_unicode_ci NOT NULL,
  `id_sede` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_medicos`
--

INSERT INTO `tb_medicos` (`id_medico`, `nom_medico`, `celu_medico`, `cedu_medico`, `correo_medico`, `id_sede`) VALUES
(1, 'pedro santiago', 31934576, 12345, 'pedro@gmail.com', 1),
(2, 'david urrego', 324567873, 2345676, 'urregotapo@gmail.com', 2),
(3, 'steven urrego', 32432345, 23476, 'steveno@gmail.com', 1),
(4, 'ana jose', 3123476, 78645, 'ana@gmail.com', 1),
(5, 'santiago reos', 3165476, 987345, 'reos@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_pais`
--

CREATE TABLE `tb_pais` (
  `id_pais` int(11) NOT NULL,
  `nom_pais` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
  `nom_rol` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_roles`
--

INSERT INTO `tb_roles` (`id_rol`, `nom_rol`) VALUES
(1, 'Administrador'),
(2, 'Medicos'),
(3, 'Especialista'),
(4, 'Cliente'),
(5, 'Empleado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_sedes`
--

CREATE TABLE `tb_sedes` (
  `id_sede` int(11) NOT NULL,
  `nom_sede` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direc_sede` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `tele_sede` int(11) NOT NULL,
  `id_ciudad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tb_sedes`
--

INSERT INTO `tb_sedes` (`id_sede`, `nom_sede`, `direc_sede`, `tele_sede`, `id_ciudad`) VALUES
(1, 'Sede Cecep', 'cra 43a # 27 - 70', 2367743, 1),
(2, 'sanadora', 'car 2 # 34 - 5', 453765, 2),
(3, 'mano sagradas', 'av 5n # 3n - 57', 886524, 1),
(4, 'sanitas', 'av 6n # 36n - 7', 834564, 1),
(5, 'Diosito', 'trnasv 6s # 33n - 67', 786436, 1),
(6, 'san juan', 'calle 6 # 45 - 47', 112342, 1),
(7, 'cruz roja', 'calle 24d # 42a - 07', 112312, 1),
(8, 'cruz verde', 'av 5n # 2 - 12 ', 23423, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_afiliados`
--
ALTER TABLE `tb_afiliados`
  ADD PRIMARY KEY (`id_afiliado`);

--
-- Indices de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `tb_medicos`
--
ALTER TABLE `tb_medicos`
  ADD PRIMARY KEY (`id_medico`);

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
  ADD PRIMARY KEY (`id_sede`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_afiliados`
--
ALTER TABLE `tb_afiliados`
  MODIFY `id_afiliado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tb_empleados`
--
ALTER TABLE `tb_empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tb_medicos`
--
ALTER TABLE `tb_medicos`
  MODIFY `id_medico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_pais`
--
ALTER TABLE `tb_pais`
  MODIFY `id_pais` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_roles`
--
ALTER TABLE `tb_roles`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tb_sedes`
--
ALTER TABLE `tb_sedes`
  MODIFY `id_sede` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
