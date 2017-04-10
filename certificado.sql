-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 10-04-2017 a las 14:13:17
-- Versión del servidor: 5.7.17-0ubuntu0.16.04.2
-- Versión de PHP: 5.6.30-9+deb.sury.org~xenial+1

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

--
-- Volcado de datos para la tabla `agencia`
--

INSERT INTO `agencia` (`id_agen`, `nomb_agen`) VALUES
(13, '2000'),
(9, 'ARCO IRIS'),
(19, 'CENTRO'),
(1, 'GAMMA'),
(21, 'GAMMA BANDA NORTE'),
(17, 'LIBRE'),
(20, 'LIKE'),
(15, 'MAIPU'),
(5, 'MAXI'),
(3, 'MILENIO'),
(12, 'NEW FENIX'),
(4, 'NORTE'),
(7, 'OESTE'),
(10, 'PREMIER'),
(18, 'PREMIUM'),
(11, 'PRONTO'),
(14, 'ROMA'),
(8, 'SAN MARTIN'),
(6, 'SUR'),
(16, 'TAXI'),
(2, 'YA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auto`
--

CREATE TABLE `auto` (
  `id_auto` bigint(20) NOT NULL,
  `domi_auto` varchar(7) DEFAULT NULL,
  `anio_auto` int(10) DEFAULT NULL,
  `id_mode` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `auto`
--

INSERT INTO `auto` (`id_auto`, `domi_auto`, `anio_auto`, `id_mode`) VALUES
(1, 'CCH334', 1997, 10);

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
  `nume_chapa` int(100) NOT NULL,
  `id_chapa` bigint(20) DEFAULT NULL,
  `nume_prec` bigint(20) DEFAULT NULL,
  `nume_reloj` varchar(255) DEFAULT NULL,
  `id_monto` bigint(20) DEFAULT NULL,
  `date_save` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `id_titu` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `certificado`
--

INSERT INTO `certificado` (`id_cert`, `id_permi`, `id_auto`, `id_reloj`, `id_agen`, `nume_chapa`, `id_chapa`, `nume_prec`, `nume_reloj`, `id_monto`, `date_save`, `id_titu`) VALUES
(1, 1, 1, 2, 2, 120, 1, 212414, 's/n', 2, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chapa`
--

CREATE TABLE `chapa` (
  `id_chapa` bigint(20) NOT NULL,
  `nomb_chapa` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `chapa`
--

INSERT INTO `chapa` (`id_chapa`, `nomb_chapa`) VALUES
(1, 'Licencia'),
(2, 'Oblea');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fos_user`
--

CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `fos_user`
--

INSERT INTO `fos_user` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, 'admin', 'admin', 'ingenieriagiubergia@gmail.com', 'ingenieriagiubergia@gmail.com', 1, NULL, '$2y$13$a9iHKmCFxVUHvVjODwUkBeGPMAySztP2kRN1SQdyxa2wlCywuYXeC', '2017-04-10 13:39:50', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marca`
--

CREATE TABLE `marca` (
  `id_marca` bigint(20) NOT NULL,
  `nomb_marca` varchar(100) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `marca`
--

INSERT INTO `marca` (`id_marca`, `nomb_marca`) VALUES
(1, 'Abarth'),
(2, 'BMW'),
(3, 'Dacia'),
(4, 'Infiniti'),
(5, 'Kia'),
(6, 'Land Rover'),
(7, 'Mercedes-Benz'),
(8, 'Opel'),
(9, 'Rolls-Royce'),
(10, 'Subaru'),
(11, 'VOLKSWAGEN'),
(12, 'Alfa Romeo'),
(13, 'Isuzu'),
(14, 'Peugeot'),
(15, 'Seat'),
(16, 'Suzuki'),
(17, 'Volvo'),
(18, 'Fiat'),
(19, 'Mitsubishi'),
(20, 'Piaggio'),
(21, 'Audi'),
(22, 'Chevrolet'),
(23, 'Ford'),
(24, 'Porsche'),
(25, 'Smart'),
(26, 'Citroen'),
(27, 'Honda'),
(28, 'Jeep'),
(29, 'Lancia'),
(30, 'Mazda'),
(31, 'Nissan'),
(32, 'Renault'),
(33, 'SsangYong'),
(34, 'Toyota');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelo`
--

CREATE TABLE `modelo` (
  `id_mode` bigint(20) NOT NULL,
  `nomb_mode` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `id_marca` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `modelo`
--

INSERT INTO `modelo` (`id_mode`, `nomb_mode`, `id_marca`) VALUES
(1, 'FIESTA KINETIC', 1),
(2, 'FOCUS', 1),
(3, 'DUNA', 2),
(4, 'SIERRA', 23),
(5, 'COROLLA', NULL),
(6, 'CORSA', NULL),
(7, 'AVEO', NULL),
(8, 'CLASICC', NULL),
(9, 'MERIVA', 22),
(10, 'GOL TREND', 11),
(11, 'FOX', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `monto`
--

CREATE TABLE `monto` (
  `id_monto` bigint(20) NOT NULL,
  `nomb_monto` varchar(50) CHARACTER SET latin1 COLLATE latin1_spanish_ci NOT NULL,
  `b_dia` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `b_noch` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `m_dia` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL,
  `m_noch` varchar(10) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `monto`
--

INSERT INTO `monto` (`id_monto`, `nomb_monto`, `b_dia`, `b_noch`, `m_dia`, `m_noch`) VALUES
(2, 'Actual', '24.00 d', '26.00 n', '1.20 d', '1.20 n');

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

--
-- Volcado de datos para la tabla `permisionario`
--

INSERT INTO `permisionario` (`id_permi`, `nomb_permi`, `dire_permi`, `dni_permi`) VALUES
(1, 'sandro mañez', 'peron oeste 03', '3276132');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reloj`
--

CREATE TABLE `reloj` (
  `id_reloj` bigint(20) NOT NULL,
  `nomb_reloj` varchar(255) CHARACTER SET latin1 COLLATE latin1_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `reloj`
--

INSERT INTO `reloj` (`id_reloj`, `nomb_reloj`) VALUES
(2, 'ARIEL GREEN'),
(4, 'ARIEL MILENIO'),
(3, 'ARIELTAX'),
(7, 'DIGITAX GRAFIC'),
(6, 'DIGITAX PLATINO'),
(5, 'DIGITAX PRINTER'),
(8, 'FULL-MAR TANGO XP');

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
-- Volcado de datos para la tabla `titular`
--

INSERT INTO `titular` (`id_titu`, `nomb_titu`, `domi_titu`, `cuit_titu`, `brut_titu`, `habi_titu`, `lega_titu`, `cert_titu`) VALUES
(1, 'Guillermo Giubergia', 'Sadi Carnot 1276', '20-14132212-6', '209350971', '2244', '7314', '9363');

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
  ADD UNIQUE KEY `nume_chapa` (`nume_chapa`) USING BTREE,
  ADD KEY `FK_AUTO_CERT` (`id_auto`),
  ADD KEY `FK_TITU_CERT` (`id_titu`),
  ADD KEY `FK_8B8B21056EC521FB` (`id_permi`),
  ADD KEY `FK_8B8B2105A982CFD9` (`id_reloj`),
  ADD KEY `FK_8B8B2105C1189551` (`id_chapa`),
  ADD KEY `FK_8B8B2105D6E65D60` (`id_agen`),
  ADD KEY `FK_8B8B2105FE57C495` (`id_monto`);

--
-- Indices de la tabla `chapa`
--
ALTER TABLE `chapa`
  ADD PRIMARY KEY (`id_chapa`),
  ADD UNIQUE KEY `nomb_chapa` (`nomb_chapa`);

--
-- Indices de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`);

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
  ADD PRIMARY KEY (`id_monto`),
  ADD UNIQUE KEY `nomb_tari` (`nomb_monto`);

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
  MODIFY `id_agen` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT de la tabla `auto`
--
ALTER TABLE `auto`
  MODIFY `id_auto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `certificado`
--
ALTER TABLE `certificado`
  MODIFY `id_cert` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `chapa`
--
ALTER TABLE `chapa`
  MODIFY `id_chapa` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `marca`
--
ALTER TABLE `marca`
  MODIFY `id_marca` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `modelo`
--
ALTER TABLE `modelo`
  MODIFY `id_mode` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT de la tabla `monto`
--
ALTER TABLE `monto`
  MODIFY `id_monto` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `permisionario`
--
ALTER TABLE `permisionario`
  MODIFY `id_permi` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `reloj`
--
ALTER TABLE `reloj`
  MODIFY `id_reloj` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `titular`
--
ALTER TABLE `titular`
  MODIFY `id_titu` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auto`
--
ALTER TABLE `auto`
  ADD CONSTRAINT `FK_66BA25FA1CEA5BA9` FOREIGN KEY (`id_mode`) REFERENCES `modelo` (`id_mode`);

--
-- Filtros para la tabla `certificado`
--
ALTER TABLE `certificado`
  ADD CONSTRAINT `FK_8B8B21055438ED73` FOREIGN KEY (`id_chapa`) REFERENCES `chapa` (`id_chapa`),
  ADD CONSTRAINT `FK_8B8B210562033D3B` FOREIGN KEY (`id_titu`) REFERENCES `titular` (`id_titu`),
  ADD CONSTRAINT `FK_8B8B21056EC521FB` FOREIGN KEY (`id_permi`) REFERENCES `permisionario` (`id_permi`),
  ADD CONSTRAINT `FK_8B8B2105A982CFD9` FOREIGN KEY (`id_reloj`) REFERENCES `reloj` (`id_reloj`),
  ADD CONSTRAINT `FK_8B8B2105D6E65D60` FOREIGN KEY (`id_agen`) REFERENCES `agencia` (`id_agen`),
  ADD CONSTRAINT `FK_8B8B2105ED9A39F8` FOREIGN KEY (`id_auto`) REFERENCES `auto` (`id_auto`),
  ADD CONSTRAINT `FK_8B8B2105FE57C495` FOREIGN KEY (`id_monto`) REFERENCES `monto` (`id_monto`) ON DELETE NO ACTION;

--
-- Filtros para la tabla `modelo`
--
ALTER TABLE `modelo`
  ADD CONSTRAINT `FK_F0D76C46E98F4023` FOREIGN KEY (`id_marca`) REFERENCES `marca` (`id_marca`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
