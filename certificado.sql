-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 04-04-2017 a las 07:37:56
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.1
-- Versión de PHP: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `certificado`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE `agencia` (
  `id_agen` bigint(20) NOT NULL,
  `nomb_agen` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `id_auto` bigint(20) NOT NULL,
  `domi_auto` varchar(6) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `anio_auto` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_mode` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `certificado`
--

CREATE TABLE `certificado` (
  `id_cert` bigint(20) NOT NULL,
  `id_permi` bigint(20) DEFAULT NULL,
  `id_auto` bigint(20) DEFAULT NULL,
  `id_reloj` bigint(20) DEFAULT NULL,
  `id_agen` bigint(20) DEFAULT NULL,
  `id_oblea` bigint(20) DEFAULT NULL,
  `nume_prec` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL COMMENT 'numero de precinto',
  `nume_reloj` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT 's/n',
  `id_monto` bigint(20) DEFAULT NULL,
  `date_save` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `id_titu` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chapa`
--

CREATE TABLE `chapa` (
  `id_chapa` bigint(20) NOT NULL,
  `nomb_chapa` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` bigint(20) NOT NULL,
  `nomb_marca` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id_mode` bigint(20) NOT NULL,
  `nomb_mode` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_marca` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monto`
--

CREATE TABLE `monto` (
  `id_monto` bigint(20) NOT NULL,
  `b_dia` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `b_noch` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `m_dia` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `m_noch` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `oblea`
--

CREATE TABLE `oblea` (
  `id_oblea` bigint(20) NOT NULL,
  `nume_oblea` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_chapa` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisionario`
--

CREATE TABLE `permisionario` (
  `id_permi` bigint(20) NOT NULL,
  `nomb_permi` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `dire_permi` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `dni_permi` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reloj`
--

CREATE TABLE `reloj` (
  `id_reloj` bigint(20) NOT NULL,
  `nomb_reloj` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `titular`
--

CREATE TABLE `titular` (
  `id_titu` bigint(20) NOT NULL,
  `nomb_titu` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `domi_titu` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `cuit_titu` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `brut_titu` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `habi_titu` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `lega_titu` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `cert_titu` varchar(20) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`id_agen`),
  ADD UNIQUE KEY `nomb_agen` (`nomb_agen`);

--
-- Indices de la tabla `auto`
--
ALTER TABLE `auto`
  ADD PRIMARY KEY (`id_auto`),
  ADD UNIQUE KEY `domi_auto` (`domi_auto`),
  ADD KEY `id_mode` (`id_mode`);

--
-- Indices de la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD PRIMARY KEY (`id_cert`),
  ADD KEY `FK_AUTO_CERT` (`id_auto`),
  ADD KEY `FK_TITU_CERT` (`id_titu`),
  ADD KEY `FK_PERMI_CERT` (`id_permi`),
  ADD KEY `FK_AGEN_CERT` (`id_agen`),
  ADD KEY `FK_OBLEA_CERT` (`id_oblea`),
  ADD KEY `FK_MONTO_CERT` (`id_monto`),
  ADD KEY `FK_RELOJ_CERT` (`id_reloj`);

--
-- Indices de la tabla `chapa`
--
ALTER TABLE `chapa`
  ADD PRIMARY KEY (`id_chapa`),
  ADD UNIQUE KEY `nomb_chapa` (`nomb_chapa`);

--
-- Indices de la tabla `marca`
--
ALTER TABLE `marca`
  ADD PRIMARY KEY (`id_marca`);

--
-- Indices de la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD PRIMARY KEY (`id_mode`),
  ADD UNIQUE KEY `nomb_mode` (`nomb_mode`),
  ADD KEY `FK_MODE_MARCA` (`id_marca`);

--
-- Indices de la tabla `monto`
--
ALTER TABLE `monto`
  ADD PRIMARY KEY (`id_monto`);

--
-- Indices de la tabla `oblea`
--
ALTER TABLE `oblea`
  ADD PRIMARY KEY (`id_oblea`),
  ADD UNIQUE KEY `nume_oblea` (`nume_oblea`),
  ADD KEY `FK_OBLEA_CHAPA` (`id_chapa`);

--
-- Indices de la tabla `permisionario`
--
ALTER TABLE `permisionario`
  ADD PRIMARY KEY (`id_permi`),
  ADD UNIQUE KEY `dni_permi` (`dni_permi`);

--
-- Indices de la tabla `reloj`
--
ALTER TABLE `reloj`
  ADD PRIMARY KEY (`id_reloj`),
  ADD UNIQUE KEY `UQ_reloj_name` (`nomb_reloj`),
  ADD UNIQUE KEY `nomb_reloj` (`nomb_reloj`);

--
-- Indices de la tabla `titular`
--
ALTER TABLE `titular`
  ADD PRIMARY KEY (`id_titu`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencia`
--
ALTER TABLE `agencia`
  MODIFY `id_agen` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `auto`
--
ALTER TABLE `auto`
  MODIFY `id_auto` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `certificado`
--
ALTER TABLE `certificado`
  MODIFY `id_cert` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `chapa`
--
ALTER TABLE `chapa`
  MODIFY `id_chapa` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_mode` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `monto`
--
ALTER TABLE `monto`
  MODIFY `id_monto` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `oblea`
--
ALTER TABLE `oblea`
  MODIFY `id_oblea` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `permisionario`
--
ALTER TABLE `permisionario`
  MODIFY `id_permi` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `reloj`
--
ALTER TABLE `reloj`
  MODIFY `id_reloj` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `titular`
--
ALTER TABLE `titular`
  MODIFY `id_titu` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `FK_AUTO_MODE` FOREIGN KEY (`id_mode`) REFERENCES `modelo` (`id_mode`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `FK_AGEN_CERT` FOREIGN KEY (`id_agen`) REFERENCES `agencia` (`id_agen`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_AUTO_CERT` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id_auto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_MONTO_CERT` FOREIGN KEY (`id_monto`) REFERENCES `monto` (`id_monto`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_OBLEA_CERT` FOREIGN KEY (`id_oblea`) REFERENCES `oblea` (`id_oblea`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_PERMI_CERT` FOREIGN KEY (`id_permi`) REFERENCES `permisionario` (`id_permi`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_RELOJ_CERT` FOREIGN KEY (`id_reloj`) REFERENCES `reloj` (`id_reloj`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_TITU_CERT` FOREIGN KEY (`id_titu`) REFERENCES `titular` (`id_titu`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `FK_MODE_MARCA` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `oblea`
--
ALTER TABLE `oblea`
  ADD CONSTRAINT `FK_OBLEA_CHAPA` FOREIGN KEY (`id_chapa`) REFERENCES `chapa` (`id_chapa`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
