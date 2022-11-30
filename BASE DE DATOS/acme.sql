-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 20:04:46
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `acme`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductores`
--

CREATE TABLE `conductores` (
  `ConCedula` int(10) NOT NULL,
  `ConPrimerNombre` varchar(20) NOT NULL,
  `ConSegundoNombre` varchar(20) DEFAULT NULL,
  `ConApellido` varchar(50) NOT NULL,
  `ConDireccion` varchar(100) NOT NULL,
  `ConTelefono` varchar(15) NOT NULL,
  `ConCiudad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `conductores`
--

INSERT INTO `conductores` (`ConCedula`, `ConPrimerNombre`, `ConSegundoNombre`, `ConApellido`, `ConDireccion`, `ConTelefono`, `ConCiudad`) VALUES
(5678, 'alvaro', 'leiv', 'perez', 'er67', '3156709505', 'pere'),
(23445, 'alvaro', 'aaron', 'grady', 'calle 2632', '2147483647', 'ewe'),
(33333, 'e', 'r', 'e', 'reewe34', '2147483647', 'pereira'),
(1088269661, 'LUCHO', 'MARCO', 'RODRIGUEZ', 'CALLE 16', '3115463212', 'ewe');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `propietarios`
--

CREATE TABLE `propietarios` (
  `ProCedula` int(10) NOT NULL,
  `ProPrimerNombre` varchar(20) NOT NULL,
  `ProSegundoNombre` varchar(20) DEFAULT NULL,
  `ProApellidos` varchar(50) NOT NULL,
  `ProDireccion` varchar(100) NOT NULL,
  `ProTelefono` int(10) NOT NULL,
  `ProCiudad` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `propietarios`
--

INSERT INTO `propietarios` (`ProCedula`, `ProPrimerNombre`, `ProSegundoNombre`, `ProApellidos`, `ProDireccion`, `ProTelefono`, `ProCiudad`) VALUES
(123, 'dsad', 'aaron', 'grady', 'calle 2632', 2147483647, 'ewe'),
(4234, 'dsad', 'aaron', 'grady', 'calle 2632', 2147483647, 'ewe'),
(42054607, 'MARTHA', 'LUCIA', 'GONZALES', 'CALLE 12', 2147483647, 'pereira'),
(106378234, 'pepe', 'puebla', 'dias', 'calle 2632', 2147483647, 'ewe'),
(1088269661, 'diego', 'alberto', 'mazuera', 'VIA S/N SN 610 VEREDA EL RINCON RURAL, LA UNION, V', 2147483647, 'pereira');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `VehPlaca` varchar(15) NOT NULL,
  `VehColor` varchar(12) NOT NULL,
  `VehMarca` varchar(20) NOT NULL,
  `VehTipo` enum('Particular','Público') NOT NULL,
  `Propietarios_ProCedula` int(10) NOT NULL,
  `Conductores_ConCedula` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `vehiculos`
--

INSERT INTO `vehiculos` (`VehPlaca`, `VehColor`, `VehMarca`, `VehTipo`, `Propietarios_ProCedula`, `Conductores_ConCedula`) VALUES
('A322', 'Rojo', 'mazda', 'Particular', 4234, 23445),
('VBS06A', 'Rojo', 'BMW', 'Público', 42054607, 1088269661);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `conductores`
--
ALTER TABLE `conductores`
  ADD PRIMARY KEY (`ConCedula`);

--
-- Indices de la tabla `propietarios`
--
ALTER TABLE `propietarios`
  ADD PRIMARY KEY (`ProCedula`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`VehPlaca`),
  ADD KEY `Propietarios_ProCedula` (`Propietarios_ProCedula`),
  ADD KEY `Conductores_ConCedula` (`Conductores_ConCedula`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD CONSTRAINT `vehiculos_ibfk_1` FOREIGN KEY (`Propietarios_ProCedula`) REFERENCES `propietarios` (`ProCedula`),
  ADD CONSTRAINT `vehiculos_ibfk_2` FOREIGN KEY (`Conductores_ConCedula`) REFERENCES `conductores` (`ConCedula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
