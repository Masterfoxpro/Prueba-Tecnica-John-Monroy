-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 12-01-2022 a las 21:39:07
-- Versión del servidor: 10.2.41-MariaDB-cll-lve
-- Versión de PHP: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebatecnica_smdigital`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `intID` int(11) NOT NULL,
  `strUsuario` varchar(45) NOT NULL,
  `strPassword` varchar(150) NOT NULL,
  `dteFecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_admin`
--

INSERT INTO `tbl_admin` (`intID`, `strUsuario`, `strPassword`, `dteFecha`) VALUES
(2, 'admin', '$2y$10$oi1BjQylEZn1nnuNq/9sKO6lKeBAxhQMNEGY1Q/9R3.73FAKTKo1W', '0000-00-00'),
(3, 'John', '$2y$10$cCkHewY/ORm27DTSh1FVCOir..P7VqdXo8Rkg7jhocNVKrh8WtHcm', '0000-00-00'),
(4, 'cvergara', '$2y$10$h//ZEojz55PbZNIBDVyhaOu1z0BQNv/2Nzb6p4CDS1rT6R75KyiOW', '0000-00-00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categorias`
--

CREATE TABLE `tbl_categorias` (
  `intID` int(11) NOT NULL,
  `strNombre` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_categorias`
--

INSERT INTO `tbl_categorias` (`intID`, `strNombre`) VALUES
(5, 'Bio Seguridad'),
(7, 'Higiene Bucal'),
(8, 'Salud Oral'),
(9, 'Demo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_Productos`
--

CREATE TABLE `tbl_Productos` (
  `intID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `strPrefijo` varchar(255) NOT NULL DEFAULT 'PRD',
  `strNProducto` varchar(150) NOT NULL,
  `intPrecio` int(11) NOT NULL,
  `intCategoria` int(11) NOT NULL,
  `intDcto` int(11) NOT NULL,
  `intStock` int(11) NOT NULL,
  `DteFecha` date NOT NULL,
  `strFoto` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tbl_Productos`
--

INSERT INTO `tbl_Productos` (`intID`, `strPrefijo`, `strNProducto`, `intPrecio`, `intCategoria`, `intDcto`, `intStock`, `DteFecha`, `strFoto`) VALUES
(0007, 'PRD', 'Crema Dental', 4000, 7, 5, 100, '2022-01-05', '129350-1-CREMA-DENTAL-TRIPLE-ACCION-COLGATE-TUB-X-60ML.jpg'),
(0008, 'PRD', 'Gel Antibacterial', 10000, 5, 10, 200, '2022-01-06', 'gel-antibacterial-sanitizante-lps.jpg'),
(0009, 'PRD', 'Cepillo de Dientes', 15000, 7, 15, 150, '2022-01-05', '81rdz3q0DJL._SL1500_.jpg'),
(0010, 'PRD', 'Seda Dental', 8000, 8, 15, 5000, '2022-01-05', '98673-1-REP-SEDA-DENTAL-JOHNSON-&-JOHNSON-CAJ-X-50MT-REACH-PAG-35-LLE-50MTR-MENTA.jpg'),
(0011, 'PRD', 'JabÃ³n Liquido para manos', 6000, 5, 15, 1000, '2022-01-05', '106247.jpg'),
(0012, 'PRD', 'Caja de guantes de Nitrilo', 50000, 5, 10, 300, '2022-01-05', '71xq3i-M+2S._SX342_.jpg'),
(0013, 'PRD', 'Desinfectantes ', 35000, 5, 10, 800, '2022-01-05', 'descarga (2).jpg'),
(0014, 'PRD', 'Alcohol AntisÃ©ptico', 4000, 5, 10, 200, '2022-01-05', 'alcohol-antiseptico-750-ml.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`intID`);

--
-- Indices de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  ADD PRIMARY KEY (`intID`);

--
-- Indices de la tabla `tbl_Productos`
--
ALTER TABLE `tbl_Productos`
  ADD PRIMARY KEY (`intID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `intID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `tbl_categorias`
--
ALTER TABLE `tbl_categorias`
  MODIFY `intID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_Productos`
--
ALTER TABLE `tbl_Productos`
  MODIFY `intID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
