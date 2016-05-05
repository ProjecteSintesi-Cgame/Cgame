-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-05-2016 a las 11:34:39
-- Versión del servidor: 5.6.21
-- Versión de PHP: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `bd_cgames`
--
CREATE DATABASE IF NOT EXISTS `bd_cgames` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `bd_cgames`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_chat`
--

CREATE TABLE IF NOT EXISTS `tbl_chat` (
`id_chat` int(11) NOT NULL,
  `usu_emailP` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_emailC` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_genero`
--

CREATE TABLE IF NOT EXISTS `tbl_genero` (
`id_genero` int(11) NOT NULL,
  `gen_nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_genero`
--

INSERT INTO `tbl_genero` (`id_genero`, `gen_nombre`) VALUES
(1, 'Arcade'),
(2, 'Estrategia'),
(3, 'Acción'),
(4, 'Carreras'),
(5, 'Deportes'),
(6, 'Bélico'),
(7, 'Rol');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_interesado`
--

CREATE TABLE IF NOT EXISTS `tbl_interesado` (
`id_interes` int(11) NOT NULL,
  `usu_emailP` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_emailC` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_juegos` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_interesado`
--

INSERT INTO `tbl_interesado` (`id_interes`, `usu_emailP`, `usu_emailC`, `id_juegos`) VALUES
(1, 'aitor.blesa@fje.edu', 'sergio.ayala@fje.edu', 6),
(2, 'sergio.ayala@fje.edu', 'xavi.granell@fje.edu', 7);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_juego`
--

CREATE TABLE IF NOT EXISTS `tbl_juego` (
`id_juegos` int(11) NOT NULL,
  `jue_nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `id_genero` int(11) NOT NULL,
  `id_plataforma` int(11) NOT NULL,
  `usu_emailP` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_juego`
--

INSERT INTO `tbl_juego` (`id_juegos`, `jue_nombre`, `id_genero`, `id_plataforma`, `usu_emailP`) VALUES
(6, 'DriveClub 4', 4, 12, 'aitor.blesa@fje.edu'),
(7, 'FIFA 16', 5, 12, 'sergio.ayala@fje.edu'),
(8, 'World Of Warcraft', 7, 11, 'sergio.ayala@fje.edu'),
(9, 'OverWatch Origins 2', 3, 11, 'xavi.granell@fje.edu'),
(10, 'Assassin''s Creed', 2, 13, 'aitor.blesa@fje.edu');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mensajes`
--

CREATE TABLE IF NOT EXISTS `tbl_mensajes` (
`id_mensaje` int(11) NOT NULL,
  `mens_mensaje` text COLLATE utf8_bin NOT NULL,
  `id_chat` int(11) NOT NULL,
  `usu_email` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_plataforma`
--

CREATE TABLE IF NOT EXISTS `tbl_plataforma` (
`id_plataforma` int(11) NOT NULL,
  `pla_nombre` varchar(20) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_plataforma`
--

INSERT INTO `tbl_plataforma` (`id_plataforma`, `pla_nombre`) VALUES
(11, 'Pc'),
(12, 'PlayStation'),
(13, 'Xbox'),
(14, 'Nintendo Wiï'),
(15, 'PlayStation Portable');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuario`
--

CREATE TABLE IF NOT EXISTS `tbl_usuario` (
  `usu_email` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_contra` varchar(50) COLLATE utf8_bin NOT NULL,
`id_usuario` int(11) NOT NULL,
  `usu_nombre` varchar(20) COLLATE utf8_bin NOT NULL,
  `usu_apellido` varchar(35) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_usuario`
--

INSERT INTO `tbl_usuario` (`usu_email`, `usu_contra`, `id_usuario`, `usu_nombre`, `usu_apellido`) VALUES
('aitor.blesa@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'Aitor', 'Blesa'),
('sergio.ayala@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 2, 'Sergio', 'Ayala'),
('xavi.granell@fje.edu', '81dc9bdb52d04dc20036dbd8313ed055', 3, 'Xavi', 'Granell');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_valoracio`
--

CREATE TABLE IF NOT EXISTS `tbl_valoracio` (
`id_valoracion` int(11) NOT NULL,
  `usu_emailP` varchar(50) COLLATE utf8_bin NOT NULL,
  `usu_emailC` varchar(50) COLLATE utf8_bin NOT NULL,
  `val_valoracion` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Volcado de datos para la tabla `tbl_valoracio`
--

INSERT INTO `tbl_valoracio` (`id_valoracion`, `usu_emailP`, `usu_emailC`, `val_valoracion`) VALUES
(3, 'aitor.blesa@fje.edu', 'sergio.ayala@fje.edu', 'Muy buen vendedor y buena compra. Todo en buenas condiciones'),
(4, 'xavi.granell@fje.edu', 'aitor.blesa@fje.edu', 'Comprador muy fiable');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_chat`
--
ALTER TABLE `tbl_chat`
 ADD PRIMARY KEY (`id_chat`), ADD KEY `id_usuarioP` (`usu_emailP`), ADD KEY `id_usuarioC` (`usu_emailC`);

--
-- Indices de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
 ADD PRIMARY KEY (`id_genero`), ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `tbl_interesado`
--
ALTER TABLE `tbl_interesado`
 ADD PRIMARY KEY (`id_interes`), ADD KEY `id_usuarioP` (`usu_emailP`), ADD KEY `id_usuarioC` (`usu_emailC`), ADD KEY `id_juego` (`id_juegos`);

--
-- Indices de la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
 ADD PRIMARY KEY (`id_juegos`), ADD KEY `id_genero` (`id_genero`), ADD KEY `id_plataforma` (`id_plataforma`), ADD KEY `id_usuarioP` (`usu_emailP`), ADD KEY `id_juegos` (`id_juegos`);

--
-- Indices de la tabla `tbl_mensajes`
--
ALTER TABLE `tbl_mensajes`
 ADD PRIMARY KEY (`id_mensaje`), ADD KEY `id_chat` (`id_chat`), ADD KEY `usu_email` (`usu_email`);

--
-- Indices de la tabla `tbl_plataforma`
--
ALTER TABLE `tbl_plataforma`
 ADD PRIMARY KEY (`id_plataforma`);

--
-- Indices de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
 ADD PRIMARY KEY (`usu_email`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
 ADD PRIMARY KEY (`id_valoracion`), ADD KEY `id_usuarioP` (`usu_emailP`), ADD KEY `id_usuarioC` (`usu_emailC`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_chat`
--
ALTER TABLE `tbl_chat`
MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_genero`
--
ALTER TABLE `tbl_genero`
MODIFY `id_genero` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tbl_interesado`
--
ALTER TABLE `tbl_interesado`
MODIFY `id_interes` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
MODIFY `id_juegos` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tbl_mensajes`
--
ALTER TABLE `tbl_mensajes`
MODIFY `id_mensaje` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tbl_plataforma`
--
ALTER TABLE `tbl_plataforma`
MODIFY `id_plataforma` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT de la tabla `tbl_usuario`
--
ALTER TABLE `tbl_usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
MODIFY `id_valoracion` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_chat`
--
ALTER TABLE `tbl_chat`
ADD CONSTRAINT `tbl_chat_ibfk_1` FOREIGN KEY (`usu_emailP`) REFERENCES `tbl_usuario` (`usu_email`),
ADD CONSTRAINT `tbl_chat_ibfk_2` FOREIGN KEY (`usu_emailC`) REFERENCES `tbl_usuario` (`usu_email`);

--
-- Filtros para la tabla `tbl_interesado`
--
ALTER TABLE `tbl_interesado`
ADD CONSTRAINT `tbl_interesado_ibfk_3` FOREIGN KEY (`id_juegos`) REFERENCES `tbl_juego` (`id_juegos`),
ADD CONSTRAINT `tbl_interesado_ibfk_4` FOREIGN KEY (`usu_emailP`) REFERENCES `tbl_usuario` (`usu_email`),
ADD CONSTRAINT `tbl_interesado_ibfk_5` FOREIGN KEY (`usu_emailC`) REFERENCES `tbl_usuario` (`usu_email`);

--
-- Filtros para la tabla `tbl_juego`
--
ALTER TABLE `tbl_juego`
ADD CONSTRAINT `tbl_juego_ibfk_3` FOREIGN KEY (`id_plataforma`) REFERENCES `tbl_plataforma` (`id_plataforma`),
ADD CONSTRAINT `tbl_juego_ibfk_4` FOREIGN KEY (`id_genero`) REFERENCES `tbl_genero` (`id_genero`),
ADD CONSTRAINT `tbl_juego_ibfk_5` FOREIGN KEY (`usu_emailP`) REFERENCES `tbl_usuario` (`usu_email`);

--
-- Filtros para la tabla `tbl_mensajes`
--
ALTER TABLE `tbl_mensajes`
ADD CONSTRAINT `tbl_mensajes_ibfk_1` FOREIGN KEY (`id_chat`) REFERENCES `tbl_chat` (`id_chat`),
ADD CONSTRAINT `tbl_mensajes_ibfk_2` FOREIGN KEY (`usu_email`) REFERENCES `tbl_usuario` (`usu_email`);

--
-- Filtros para la tabla `tbl_valoracio`
--
ALTER TABLE `tbl_valoracio`
ADD CONSTRAINT `tbl_valoracio_ibfk_1` FOREIGN KEY (`usu_emailP`) REFERENCES `tbl_usuario` (`usu_email`),
ADD CONSTRAINT `tbl_valoracio_ibfk_2` FOREIGN KEY (`usu_emailC`) REFERENCES `tbl_usuario` (`usu_email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
