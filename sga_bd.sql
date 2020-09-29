-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-09-2020 a las 19:42:00
-- Versión del servidor: 10.4.10-MariaDB
-- Versión de PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sga_bd`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canasta`
--

DROP TABLE IF EXISTS `canasta`;
CREATE TABLE IF NOT EXISTS `canasta` (
  `id_cna` int(11) NOT NULL AUTO_INCREMENT,
  `producto` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `subtotal` decimal(9,2) NOT NULL,
  `total` decimal(9,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `iva` decimal(9,2) NOT NULL,
  `categoria_prod` int(11) NOT NULL,
  PRIMARY KEY (`id_cna`),
  KEY `producto` (`producto`),
  KEY `usuario` (`usuario`),
  KEY `categoria_prod` (`categoria_prod`)
) ENGINE=MyISAM AUTO_INCREMENT=137 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `canasta`
--

INSERT INTO `canasta` (`id_cna`, `producto`, `usuario`, `fecha`, `subtotal`, `total`, `cantidad`, `iva`, `categoria_prod`) VALUES
(131, 25, 12, '2020-09-28', '600.00', '690.00', 1, '90.00', 2),
(124, 16, 2, '2020-09-27', '100.00', '115.00', 1, '15.00', 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE IF NOT EXISTS `categoria` (
  `id_cat` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cat`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id_cat`, `categoria`) VALUES
(1, 'Alimento'),
(2, 'Electrodomestico'),
(3, 'Decoracion'),
(4, 'Vestimenta'),
(5, 'Calzado'),
(6, 'Vehiculo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `importacion`
--

DROP TABLE IF EXISTS `importacion`;
CREATE TABLE IF NOT EXISTS `importacion` (
  `id_import` int(11) NOT NULL AUTO_INCREMENT,
  `importador` int(11) NOT NULL,
  `producto` int(11) NOT NULL,
  `fecha_import` timestamp NOT NULL DEFAULT current_timestamp(),
  `subtotal_import` decimal(9,2) NOT NULL,
  `total_import` decimal(9,2) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `iva` decimal(9,2) NOT NULL,
  PRIMARY KEY (`id_import`),
  KEY `importador` (`importador`),
  KEY `producto` (`producto`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `importacion`
--

INSERT INTO `importacion` (`id_import`, `importador`, `producto`, `fecha_import`, `subtotal_import`, `total_import`, `cantidad`, `iva`) VALUES
(35, 2, 13, '2020-09-27 20:30:56', '310.60', '357.19', 2, '46.59'),
(34, 2, 12, '2020-09-27 20:30:44', '201.00', '231.15', 2, '30.15'),
(33, 10, 9, '2020-09-27 20:21:33', '1800.00', '2070.00', 2, '270.00'),
(32, 2, 18, '2020-09-27 20:08:24', '350000.00', '402500.00', 1, '52500.00'),
(31, 2, 17, '2020-09-27 20:03:39', '375.00', '431.25', 3, '56.25'),
(30, 2, 15, '2020-09-27 20:00:20', '170.00', '195.50', 2, '25.50'),
(29, 2, 5, '2020-09-27 19:44:33', '130.00', '149.50', 2, '19.50'),
(28, 2, 8, '2020-09-27 19:38:24', '1800.26', '2070.30', 2, '270.04'),
(27, 2, 3, '2020-09-27 18:47:52', '1.50', '1.73', 1, '0.23'),
(26, 2, 3, '2020-09-27 18:41:59', '7.50', '8.63', 5, '1.13'),
(25, 2, 10, '2020-09-27 18:41:06', '3000.00', '3450.00', 5, '450.00'),
(24, 2, 10, '2020-09-27 18:05:25', '1200.00', '1380.00', 2, '180.00'),
(23, 2, 9, '2020-09-27 17:29:33', '4500.00', '5175.00', 5, '675.00'),
(22, 2, 9, '2020-09-27 17:26:16', '900.00', '1035.00', 1, '135.00'),
(21, 2, 10, '2020-09-27 16:54:04', '2400.00', '2760.00', 4, '360.00'),
(36, 2, 15, '2020-09-27 20:31:13', '170.00', '195.50', 2, '25.50'),
(37, 2, 16, '2020-09-27 20:31:54', '300.00', '345.00', 3, '45.00'),
(38, 2, 17, '2020-09-27 20:32:06', '125.00', '143.75', 1, '18.75'),
(39, 2, 7, '2020-09-27 20:32:56', '1601.74', '1842.00', 2, '240.26'),
(40, 2, 5, '2020-09-27 20:33:23', '65.00', '74.75', 1, '9.75'),
(41, 2, 3, '2020-09-27 20:33:45', '1.50', '1.73', 1, '0.23'),
(54, 12, 24, '2020-09-28 19:18:51', '96800.00', '111320.00', 1, '14520.00'),
(53, 5, 9, '2020-09-28 19:02:16', '4500.00', '5175.00', 5, '675.00'),
(52, 5, 9, '2020-09-28 19:02:11', '4500.00', '5175.00', 5, '675.00'),
(45, 2, 2, '2020-09-27 20:44:41', '500.50', '575.58', 1, '75.08'),
(46, 2, 9, '2020-09-27 20:45:00', '900.00', '1035.00', 1, '135.00'),
(47, 2, 18, '2020-09-27 20:45:30', '350000.00', '402500.00', 1, '52500.00'),
(48, 5, 21, '2020-09-28 02:26:09', '635000.00', '730250.00', 1, '95250.00'),
(49, 5, 7, '2020-09-28 15:10:47', '1601.74', '1842.00', 2, '240.26'),
(50, 5, 15, '2020-09-28 15:11:07', '255.00', '293.25', 3, '38.25'),
(51, 5, 24, '2020-09-28 17:23:23', '484000.00', '556600.00', 5, '72600.00'),
(55, 12, 16, '2020-09-28 19:21:28', '400.00', '460.00', 4, '60.00'),
(56, 2, 19, '2020-09-28 19:35:32', '500000.50', '575000.58', 1, '75000.08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE IF NOT EXISTS `productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `producto` varchar(60) NOT NULL,
  `peso` decimal(9,2) NOT NULL,
  `precio` decimal(9,2) NOT NULL,
  `categoria` int(11) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_producto`),
  KEY `categoria` (`categoria`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `producto`, `peso`, `precio`, `categoria`, `fecha_registro`) VALUES
(3, 'Arroz', '2.20', '1.50', 1, '2020-09-26 17:32:04'),
(2, 'Refrigerador', '55.50', '500.50', 2, '2020-09-26 17:32:04'),
(4, 'Meza', '16.40', '88.00', 3, '2020-09-26 17:32:04'),
(5, 'Florero', '2.20', '65.00', 3, '2020-09-26 17:32:04'),
(7, 'Laptons', '15.20', '800.87', 2, '2020-09-26 17:32:04'),
(8, 'Computadora de mesa', '55.45', '900.13', 2, '2020-09-26 17:39:14'),
(9, 'Banano', '100.67', '900.00', 1, '2020-09-26 20:15:33'),
(10, 'Atun', '50.00', '600.00', 1, '2020-09-26 20:16:02'),
(11, 'Aire acondicionado', '55.50', '650.44', 2, '2020-09-27 18:36:40'),
(12, 'Camisa deportiva', '0.15', '100.50', 4, '2020-09-27 19:49:39'),
(13, 'Conjunto FC Bayern de Munichs', '0.45', '155.30', 4, '2020-09-27 19:50:27'),
(23, 'Celular Iphone', '0.50', '800.00', 2, '2020-09-27 20:20:17'),
(15, 'Camisa de la Seleccion de futbol Alemana', '0.20', '85.00', 4, '2020-09-27 19:51:31'),
(16, 'Zapatillas deportivas Nike', '1.50', '100.00', 5, '2020-09-27 19:52:06'),
(17, 'Zapatos deportivos Adidas', '1.50', '125.00', 5, '2020-09-27 19:52:44'),
(18, 'Mclaren 570s', '1000.10', '350000.00', 6, '2020-09-27 19:54:21'),
(19, 'Ferrari sf90', '1000.52', '500000.50', 6, '2020-09-27 19:55:32'),
(20, 'For Mustang gt500', '1000.67', '167000.00', 6, '2020-09-27 19:56:40'),
(21, 'Lamborghini urus', '1000.52', '635000.00', 6, '2020-09-27 19:57:34'),
(22, 'Jeep wrangler sport', '1001.54', '95000.85', 6, '2020-09-27 19:59:40'),
(24, 'Mercedes Benz Sport', '1000.10', '96800.00', 6, '2020-09-28 03:15:01'),
(25, 'Televisor LG', '21.00', '600.00', 2, '2020-09-28 19:14:57');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

DROP TABLE IF EXISTS `rol`;
CREATE TABLE IF NOT EXISTS `rol` (
  `id_rol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(15) NOT NULL,
  PRIMARY KEY (`id_rol`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `rol`) VALUES
(1, 'ADMINISTRADOR'),
(2, 'USUARIO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `rol` int(11) NOT NULL,
  `estado` varchar(7) DEFAULT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id_usuario`),
  KEY `rol` (`rol`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `username`, `email`, `pass`, `rol`, `estado`, `fecha_registro`) VALUES
(1, 'admin', 'admin@admin.com', '$2y$10$4EWVOIW7PPMOQX21DNDZX.Gcm4lR85mLSQvxkDOKiZcXJyfN4YeDO', 1, 'ACTIVO', '2020-09-26'),
(2, 'relax', 'relax@gmail.com', '$2y$10$4EWVOIW7PPMOQX21DNDZX.Gcm4lR85mLSQvxkDOKiZcXJyfN4YeDO', 2, 'ACTIVO', '2020-09-26'),
(3, 'Anthony Arana', 'arana@gmail.com', '$2y$10$uBjih1CfEpQ7xicXECPa7.Gfk/fFfo9iddiZYwbc0U9uRYpQcKqB2', 2, 'ACTIVO', '2020-09-26'),
(5, 'Velkin', 'velkin@gmail.com', '$2y$10$JsBOX4Ucw9B6cnoW62Tc.uKdRyCGVVko942CmcD7k3iPkdS.c1UT2', 2, 'ACTIVO', '2020-09-26'),
(6, 'Benitocalo12', 'eavila4906@utm.edu.ec', '$2y$10$0aAVaLc431YSGOAeh12YF.dxU2Vf9XtrBfq..todQg3ByMjLBGZ16', 2, 'ACTIVO', '2020-09-26'),
(7, 'Benitocalo', 'carmensornoza8430@gmail.com', '$2y$10$wBr9xPFUAse/HiX.bmEc7OnLJzEkWpNrb4hikqfKmefxAiSLc7b5K', 2, 'ACTIVO', '2020-09-26'),
(8, 'Jose Emilio', 'emi@gmail.com', '$2y$10$JnmufzjHuS4q3H4.CvYC4OfLjjbMXOvqb/mEW7VCD8qMBaZYZcLd.', 2, 'ACTIVO', '2020-09-26'),
(9, 'Antho Arana', 'eavila4906@gmail.comss', '$2y$10$VIzpAJgcxoZ6NKu15jw6suSMHBLdWsmTkMLw7SeDt2WGwLnBgj/c2', 2, 'ACTIVO', '2020-09-27'),
(10, 'Marcelo Arana', 'aranqq@gmail.com', '$2y$10$MnfzyTFVShP6weV2fgGvF.NdB0WVVO61tStQpNiPG6.hWq2WmZ2je', 2, 'ACTIVO', '2020-09-27'),
(11, 'Miguel Avila', 'mavila@admin.com', '$2y$10$lVvvkxAwYJwZ3zpeCcBULOtz44I/DVshgqp9BzrYUDr4IGZ/QVFmC', 1, 'ACTIVO', '2020-09-27'),
(12, 'Steven Urdanigo', 'urda577@gmail.com', '$2y$10$euE93HjgRZFNmWnVU9IHredRbqlk/pgdnx.aCEP2xq/qOQIU3VwJS', 2, 'ACTIVO', '2020-09-28');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
