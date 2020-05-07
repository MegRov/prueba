-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 07-05-2020 a las 00:05:14
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
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

DROP TABLE IF EXISTS `ingredientes`;
CREATE TABLE IF NOT EXISTS `ingredientes` (
  `idingrediente` int(10) NOT NULL AUTO_INCREMENT,
  `pan` int(11) NOT NULL,
  `carne` int(11) NOT NULL,
  `cebolla` int(11) NOT NULL,
  `tomate` int(11) NOT NULL,
  `lechuga` int(11) NOT NULL,
  `queso` int(11) NOT NULL,
  `lonja` int(11) NOT NULL,
  `tocino` int(11) NOT NULL,
  `mayo` int(11) NOT NULL,
  `bbq` int(11) NOT NULL,
  PRIMARY KEY (`idingrediente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`idingrediente`, `pan`, `carne`, `cebolla`, `tomate`, `lechuga`, `queso`, `lonja`, `tocino`, `mayo`, `bbq`) VALUES
(1, 1, 1, 50, 50, 20, 1, 1, 100, 50, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

DROP TABLE IF EXISTS `inventario`;
CREATE TABLE IF NOT EXISTS `inventario` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `ingrediente` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cantidad` int(30) NOT NULL,
  `unidadmedida` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `costo` int(30) NOT NULL,
  `precio` int(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `inventario`
--

INSERT INTO `inventario` (`id`, `ingrediente`, `cantidad`, `unidadmedida`, `costo`, `precio`) VALUES
(1, 'pan bimbo', 200, 'unidades', 300, NULL),
(2, 'carne ranchera burguer', 200, 'unidades', 3000, NULL),
(3, 'Tomate Milano', 10000, 'gramos', 120, NULL),
(4, 'cebolla cabezona', 10000, 'gramos', 120, NULL),
(5, 'Lechuga', 4000, 'gramos', 90, NULL),
(6, 'lonja queso', 200, 'unidad', 500, NULL),
(7, 'BBQ', 10000, 'gramos', 600, NULL),
(8, 'mayonesa', 10000, 'gramos', 600, NULL),
(9, 'tocineta', 20000, 'gramos', 1200, 2000),
(10, 'queso chedar', 200, 'unidad', 800, 1500);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

DROP TABLE IF EXISTS `venta`;
CREATE TABLE IF NOT EXISTS `venta` (
  `idventa` int(30) NOT NULL AUTO_INCREMENT,
  `cebolla` int(30) DEFAULT NULL,
  `tomate` int(30) DEFAULT NULL,
  `mayonesa` int(30) DEFAULT NULL,
  `BBQ` int(30) DEFAULT NULL,
  `tocino` int(30) DEFAULT NULL,
  `chedar` int(30) DEFAULT NULL,
  `costo` int(30) DEFAULT NULL,
  `total` int(30) NOT NULL,
  PRIMARY KEY (`idventa`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`idventa`, `cebolla`, `tomate`, `mayonesa`, `BBQ`, `tocino`, `chedar`, `costo`, `total`) VALUES
(46, 0, 0, 0, 0, 1200, 800, 6130, 13500),
(25, 0, 0, 600, 600, 1200, 600, 7330, 13500),
(24, 120, 0, 0, 600, 0, 800, 5410, 11500),
(23, 0, 120, 600, 0, 1200, 0, 5810, 12000),
(39, 120, 120, 0, 0, 0, 0, 3890, 10000),
(40, 0, 120, 0, 0, 0, 0, 4010, 10000),
(41, 120, 0, 0, 0, 0, 0, 4010, 10000,);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
