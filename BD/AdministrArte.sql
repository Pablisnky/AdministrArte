-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-07-2019 a las 15:52:51
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
(25, '2019-07-12', '10000');

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
(70, '2019-07-11', 'Vinilo textil color', '140000'),
(71, '2019-07-10', 'Cuchillas CAMEO', '121500'),
(72, '2019-07-11', '4 m vinilo textil', '92000'),
(73, '2019-07-11', 'Vinilo textil imprimible', '37000'),
(74, '2019-07-11', 'Vinilo textil Flock', '25000'),
(75, '2019-07-11', 'Vinilo textil Glitter', '34000'),
(76, '2019-07-11', 'Papel fotografico brillante', '19500'),
(77, '2019-07-11', 'papel fotografico adhesivo mate', '14700');

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transferencia`
--

CREATE TABLE `transferencia` (
  `ID_Transferencia` int(11) NOT NULL,
  `ID_Usuario` int(3) NOT NULL,
  `banco` varchar(30) NOT NULL,
  `numero` varchar(30) NOT NULL,
  `monto` varchar(10) NOT NULL,
  `Bs_recibe` varchar(6) NOT NULL,
  `tasa_Proveedor` varchar(6) NOT NULL,
  `tasa` varchar(5) NOT NULL,
  `incremento` varchar(4) NOT NULL,
  `utilidad` varchar(5) NOT NULL,
  `fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `transferencia`
--

INSERT INTO `transferencia` (`ID_Transferencia`, `ID_Usuario`, `banco`, `numero`, `monto`, `Bs_recibe`, `tasa_Proveedor`, `tasa`, `incremento`, `utilidad`, `fecha`) VALUES
(12, 24, 'Mercantil', '1234', '20000', '', '0.43', '0.48', '0.05', '2323', '2019-07-11 18:22:25'),
(13, 25, 'Banesco', '444444', '2', '4,17', '', '', '', '', '2019-07-11 18:43:45');

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
(24, 'Pablo', 'Cabeza', '12728036', '04143541194', '331042661'),
(25, 'Silvia', 'Noriega', '147089955', '3333333', '270618770');

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
  MODIFY `ID_CC` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

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
-- AUTO_INCREMENT de la tabla `diezmos`
--
ALTER TABLE `diezmos`
  MODIFY `ID_Diezmos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `gastos`
--
ALTER TABLE `gastos`
  MODIFY `ID_Cierre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT de la tabla `tasa_transferencia`
--
ALTER TABLE `tasa_transferencia`
  MODIFY `ID_TT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `transferencia`
--
ALTER TABLE `transferencia`
  MODIFY `ID_Transferencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `usuariotransferencia`
--
ALTER TABLE `usuariotransferencia`
  MODIFY `ID_UT` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
