-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-07-2019 a las 15:39:13
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 7.1.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `administrararte`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `banco`
--

CREATE TABLE `banco` (
  `ID_Banco` int(11) NOT NULL,
  `Banco` varchar(20) NOT NULL,
  `numero_Cuenta` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cierre_caja`
--

CREATE TABLE `cierre_caja` (
  `ID_CC` int(11) NOT NULL,
  `Fecha_Cierre` date NOT NULL,
  `Monto_Cierre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cierre_caja`
--

INSERT INTO `cierre_caja` (`ID_CC`, `Fecha_Cierre`, `Monto_Cierre`) VALUES
(2, '2019-07-02', '101000'),
(3, '2019-07-03', '25000'),
(4, '2019-07-04', '12000'),
(5, '2019-07-05', '41700'),
(6, '2019-07-06', '9000'),
(18, '2019-07-01', '29300'),
(20, '2019-07-07', '120654'),
(21, '2019-07-08', '148800'),
(22, '2019-07-09', '28600'),
(23, '2019-07-10', '3400'),
(24, '2019-07-11', '3000'),
(25, '2019-07-12', '10000'),
(26, '2019-07-14', '21000'),
(27, '2019-07-15', '26000'),
(28, '2019-07-16', '28000'),
(29, '2019-07-18', '8000'),
(30, '2019-07-19', '36000'),
(31, '2019-07-22', '63500');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentas_pagar`
--

CREATE TABLE `cuentas_pagar` (
  `ID_CP` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Acreedor` varchar(100) NOT NULL,
  `Monto` varchar(10) NOT NULL,
  `Numero_Cuotas` varchar(2) NOT NULL,
  `Monto_cuota` varchar(9) NOT NULL,
  `Pagos` varchar(10) NOT NULL,
  `Interes` varchar(5) NOT NULL,
  `Fecha_pago` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cuentas_pagar`
--

INSERT INTO `cuentas_pagar` (`ID_CP`, `Fecha`, `Descripcion`, `Acreedor`, `Monto`, `Numero_Cuotas`, `Monto_cuota`, `Pagos`, `Interes`, `Fecha_pago`) VALUES
(9, '2019-07-09', 'Credito ofrecido e invertido en insumos y herramientas', 'BanColombia', '1400000', '12', '144977', 'mensual', '24.26', '2019-08-08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_cuenta_pagar`
--

CREATE TABLE `detalles_cuenta_pagar` (
  `ID_DCP` int(11) NOT NULL,
  `ID_CP` int(5) NOT NULL,
  `cuota_amortizada` varchar(3) NOT NULL,
  `cuota_pendiente` varchar(3) NOT NULL,
  `total_amortizado` varchar(9) NOT NULL,
  `total_pendiente` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalles_cuenta_pagar`
--

INSERT INTO `detalles_cuenta_pagar` (`ID_DCP`, `ID_CP`, `cuota_amortizada`, `cuota_pendiente`, `total_amortizado`, `total_pendiente`) VALUES
(2, 9, '0', '12', '0', '1400000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_inversion`
--

CREATE TABLE `detalles_inversion` (
  `ID_DI` int(11) NOT NULL,
  `ID_CP` int(11) NOT NULL,
  `inversion` varchar(250) NOT NULL,
  `fecha` date NOT NULL,
  `monto_inversion` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detalles_inversion`
--

INSERT INTO `detalles_inversion` (`ID_DI`, `ID_CP`, `inversion`, `fecha`, `monto_inversion`) VALUES
(4, 9, 'Cuchillas Cameo', '2019-07-10', '121500'),
(5, 9, 'Papel fotografico adhesivo mate', '2019-07-11', '14700'),
(6, 9, 'Papel fotografico brillante', '2019-07-11', '19500'),
(7, 9, 'Vinilo textil Glitter gold, 50 cm X 1  m', '2019-07-11', '37000'),
(8, 9, 'Vinilo textil Flock amarillo, 51cm X 1 m', '2019-07-11', '34000'),
(9, 9, 'Vinilo textil pu imprimible, 51 cm X 1m', '2019-07-11', '25000'),
(10, 9, 'Vinilo textil, 2m blanco, 2m negro', '2019-07-11', '92000'),
(11, 9, 'Vinilo textil color, unidades de 0,5 m diversos colores (10 unidades)', '2019-07-11', '140000'),
(12, 9, 'Cartuchos de Plotter (2)', '2019-07-12', '580000'),
(13, 9, 'Papel Decal', '2019-07-12', '13000'),
(14, 9, 'Rollo papel Pergamino, 90 gr, 76 cm X 50 m', '2019-07-12', '96000'),
(15, 9, 'Rollo papel Bond 75 gr, 91 cm X 50 m', '2019-07-12', '25823'),
(16, 9, 'Reparacion de Epson', '2019-07-11', '80000'),
(17, 9, 'Franelas cotton licra', '2019-07-09', '78000');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `diezmos`
--

CREATE TABLE `diezmos` (
  `ID_Diezmos` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `monto` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gastos`
--

CREATE TABLE `gastos` (
  `ID_Cierre` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Descripcion` varchar(250) NOT NULL,
  `Monto` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `gastos`
--

INSERT INTO `gastos` (`ID_Cierre`, `Fecha`, `Descripcion`, `Monto`) VALUES
(2, '2019-07-01', 'Pan', '1000'),
(5, '2019-07-01', 'Coca cola', '3500'),
(16, '2019-07-01', 'aromatica', '600'),
(19, '2019-07-02', 'Pan', '1000'),
(20, '2019-07-02', 'Franela dañada \"Club Gerizim\"', '10000'),
(21, '2019-07-02', 'Block cuadriculado Claudia', '2500'),
(22, '2019-07-02', 'Lapicero', '800'),
(23, '2019-07-02', 'Pasajes', '3000'),
(24, '2019-07-02', 'Pan', '1000'),
(25, '2019-07-02', 'Agua saborizada', '950'),
(26, '2019-07-02', 'Campamento Claudia', '6000'),
(27, '2019-07-02', 'Panela', '2750'),
(28, '2019-07-02', 'Mantequilla de maní', '3400'),
(29, '2019-07-02', 'Harina Pan', '3000'),
(30, '2019-07-02', 'Leche liquida 2L', '3600'),
(32, '2019-07-02', 'Verduras', '10000'),
(33, '2019-07-02', 'Paledonias', '2000'),
(34, '2019-07-02', 'Bocadillo', '1400'),
(35, '2019-07-02', 'Ponque', '2800'),
(36, '2019-07-03', 'Pan ', '1000'),
(37, '2019-07-02', 'Pan', '1000'),
(38, '2019-07-02', 'copia', '200'),
(39, '2019-07-02', 'Platanos', '2000'),
(40, '2019-07-04', '2 pizzas', '2000'),
(41, '2019-07-04', 'comida', '9900'),
(42, '2019-07-04', 'Quesillo', '2000'),
(43, '2019-07-04', 'Recarga telefono', '2000'),
(44, '2019-07-04', '3 metros vinilo textil', '60000'),
(45, '2019-07-04', 'Domicilio de envio vinilo textil', '5000'),
(46, '2019-07-05', 'Pan', '2000'),
(47, '2019-07-05', 'Envio vinilo textil desde Cucuta', '6000'),
(48, '2019-07-05', 'Pliego de Papel periodico ', '200'),
(49, '2019-07-05', 'Pliego de y papel Kraft', '400'),
(50, '2019-07-05', 'Queso', '4000'),
(51, '2019-07-05', 'Movistar', '61900'),
(52, '2019-07-04', 'Pizzas', '2000'),
(53, '2019-07-05', 'Pan integral', '7000'),
(54, '2019-07-07', 'Pan', '2000'),
(55, '2019-07-07', 'Te', '600'),
(56, '2019-07-07', 'Agua saborizada', '900'),
(57, '2019-07-07', '2 Yogurt', '1900'),
(58, '2019-07-07', 'Comida', '15154'),
(59, '2019-07-07', 'Pasteles, arepa, avena (almuerzo)', '7100'),
(60, '2019-07-08', 'Claudia', '3000'),
(61, '2019-07-07', 'pasaje', '3000'),
(62, '2019-07-08', 'Amigo secreto club de frances', '4000'),
(63, '2019-07-08', 'Ultima cuota telefono', '89000'),
(64, '2019-07-08', 'gas domestico', '11800'),
(65, '2019-07-08', 'propina', '2600'),
(66, '2019-07-08', 'Raton inalambrico', '25000'),
(67, '2019-07-09', 'Pan', '2500'),
(68, '2019-07-09', 'Comida', '17400'),
(69, '2019-07-10', 'Pan', '2000'),
(78, '2019-07-14', 'Pan', '2000'),
(79, '2019-07-14', 'Comida', '19800'),
(80, '2019-07-13', 'Libre casa Suly hasta apartamento', '5000'),
(81, '2019-07-15', 'Coca cola', '3500'),
(82, '2019-07-15', 'Pan', '2000'),
(83, '2019-07-16', 'Pan', '1000'),
(84, '2019-07-16', 'Servicio de electricidad (apartamento)', '35000'),
(85, '2019-07-17', 'Pan', '1000'),
(86, '2019-07-17', 'Papel higienico', '2000'),
(87, '2019-07-17', 'claudia', '1000'),
(88, '2019-07-17', 'envio cartuhos de tinta plotter desde Bogota', '9500'),
(89, '2019-07-18', 'Laca en spray', '6000'),
(90, '2019-07-18', 'Hoja de segueta', '2000'),
(91, '2019-07-18', 'pan', '2000'),
(92, '2019-07-19', 'agua', '1000'),
(93, '2019-07-19', 'Factura servicio de agua', '20500'),
(94, '2019-07-19', 'Comida', '35500'),
(96, '2019-07-22', 'Pan y yogurt', '29000'),
(97, '2019-07-22', 'pan', '1000'),
(98, '2019-07-22', 'Aromatica', '600');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasa_transferencia`
--

CREATE TABLE `tasa_transferencia` (
  `ID_TT` int(11) NOT NULL,
  `tasa_proveedor` decimal(11,3) NOT NULL,
  `incremento` decimal(11,3) NOT NULL,
  `tasa_impresionarte` decimal(11,3) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tasa_transferencia`
--

INSERT INTO `tasa_transferencia` (`ID_TT`, `tasa_proveedor`, `incremento`, `tasa_impresionarte`, `fecha`) VALUES
(7, '0.410', '0.050', '0.460', '2019-07-15'),
(14, '0.380', '0.050', '0.430', '2019-07-17'),
(15, '0.365', '0.050', '0.415', '2019-07-18'),
(16, '0.340', '0.050', '0.390', '2019-07-19'),
(23, '0.315', '0.050', '0.365', '2019-07-22'),
(24, '0.315', '0.050', '0.365', '2019-07-22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `ID_Transferencia` int(11) NOT NULL,
  `ID_Usuario` int(3) NOT NULL,
  `ID_TT` int(11) NOT NULL,
  `banco` varchar(30) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `monto_pesos` varchar(10) NOT NULL,
  `recibe_Bs` varchar(10) NOT NULL,
  `transferirProveedor` varchar(10) NOT NULL,
  `utilidad` varchar(10) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transferencia`
--

INSERT INTO `transferencia` (`ID_Transferencia`, `ID_Usuario`, `ID_TT`, `banco`, `numero`, `monto_pesos`, `recibe_Bs`, `transferirProveedor`, `utilidad`, `fecha`) VALUES
(14, 26, 14, 'Provincial', '01080326840200094975', '30000', '722891', '', '', '2019-07-15 10:07:34'),
(24, 36, 12, 'Postobon', '333', '50000', '71428.', '', '', '2019-07-15 19:49:52'),
(28, 40, 14, 'Mercantil', '999999999', '10000', '23255.', '', '', '2019-07-17 22:38:03'),
(39, 26, 15, 'Provincial', '01080326840200094975', '405000', '975903', '356.204,8', '48.795,18', '2019-07-18 15:36:24'),
(42, 57, 16, 'Banesco', '01340025310253112791', '336000', '861538.46', '292923.076', '43076.9236', '2019-07-19 11:08:16'),
(45, 57, 16, 'Banesco', '01340025310253112791', '1', '2.56', '0,87<br>', '0,13', '2019-07-19 11:39:28'),
(46, 57, 16, 'Banesco', '01340025310253112791', '2', '5.13', '1,74<br>', '0,26', '2019-07-19 11:42:52'),
(47, 26, 16, 'Provincial', '01080326840200094975', '34000', '87179.49', '29.641,03', '4.358,97', '2019-07-22 09:26:31'),
(48, 26, 17, 'Provincial', '01080326840200094975', '34000', '89473.68', '29.526,31', '4.473,69', '2019-07-22 12:07:11'),
(49, 40, 17, 'Mercantil', '01050062101062261763', '5000', '13157.89', '4.342,10', '657,90', '2019-07-22 14:35:46'),
(50, 40, 23, 'Mercantil', '999999999', '5000', '13698.63', '4.315,07', '684,93', '2019-07-22 15:09:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuariotransferencia`
--

CREATE TABLE `usuariotransferencia` (
  `ID_UT` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `cedula` varchar(12) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `aleatorio` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuariotransferencia`
--

INSERT INTO `usuariotransferencia` (`ID_UT`, `nombre`, `apellido`, `cedula`, `telefono`, `aleatorio`) VALUES
(26, 'Edimar', 'Maldonado', '14075283', '3206301720', '830477721'),
(36, 'Postobon', 'Postobon', '222', '333', '172732290'),
(40, 'PAblo', 'Cabeza', '12728036', '123', '639134024'),
(43, 'Vicente', 'Carrillo', '19668848', '', '295189486'),
(57, 'Vicente', 'Carrillo', '19668948', '', '22670698');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `banco`
--
ALTER TABLE `banco`
  ADD PRIMARY KEY (`ID_Banco`);

--
-- Indices de la tabla `cierre_caja`
--
ALTER TABLE `cierre_caja`
  ADD PRIMARY KEY (`ID_CC`);

--
-- Indices de la tabla `cuentas_pagar`
--
ALTER TABLE `cuentas_pagar`
  ADD PRIMARY KEY (`ID_CP`);

--
-- Indices de la tabla `detalles_cuenta_pagar`
--
ALTER TABLE `detalles_cuenta_pagar`
  ADD PRIMARY KEY (`ID_DCP`);

--
-- Indices de la tabla `detalles_inversion`
--
ALTER TABLE `detalles_inversion`
  ADD PRIMARY KEY (`ID_DI`);

--
-- Indices de la tabla `diezmos`
--
ALTER TABLE `diezmos`
  ADD PRIMARY KEY (`ID_Diezmos`);

--
-- Indices de la tabla `gastos`
--
ALTER TABLE `gastos`
  ADD PRIMARY KEY (`ID_Cierre`);

--
-- Indices de la tabla `tasa_transferencia`
--
ALTER TABLE `tasa_transferencia`
  ADD PRIMARY KEY (`ID_TT`);

--
-- Indices de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  ADD PRIMARY KEY (`ID_Transferencia`);

--
-- Indices de la tabla `usuariotransferencia`
--
ALTER TABLE `usuariotransferencia`
  ADD PRIMARY KEY (`ID_UT`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `banco`
--
ALTER TABLE `banco`
  MODIFY `ID_Banco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cierre_caja`
--
ALTER TABLE `cierre_caja`
  MODIFY `ID_CC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `cuentas_pagar`
--
ALTER TABLE `cuentas_pagar`
  MODIFY `ID_CP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `detalles_cuenta_pagar`
--
ALTER TABLE `detalles_cuenta_pagar`
  MODIFY `ID_DCP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `detalles_inversion`
--
ALTER TABLE `detalles_inversion`
  MODIFY `ID_DI` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `diezmos`
--
ALTER TABLE `diezmos`
  MODIFY `ID_Diezmos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `ID_Cierre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT de la tabla `tasa_transferencia`
--
ALTER TABLE `tasa_transferencia`
  MODIFY `ID_TT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  MODIFY `ID_Transferencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `usuariotransferencia`
--
ALTER TABLE `usuariotransferencia`
  MODIFY `ID_UT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
