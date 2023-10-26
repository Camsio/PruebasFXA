-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-09-2023 a las 01:16:01
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mudanzas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacidad_camion`
--

CREATE TABLE `capacidad_camion` (
  `Cod_camion_Capacidad` int(20) NOT NULL,
  `Kilogramos_capacidad` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `capacidad_camion`
--

INSERT INTO `capacidad_camion` (`Cod_camion_Capacidad`, `Kilogramos_capacidad`) VALUES
(1, 3000),
(2, 6000),
(3, 10000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `conductor`
--

CREATE TABLE `conductor` (
  `Usu_doc_Identidad` int(20) DEFAULT NULL,
  `Conductor_licencia_Conduccion` varchar(15) NOT NULL,
  `Conductor_antecedentes` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `conductor`
--

INSERT INTO `conductor` (`Usu_doc_Identidad`, `Conductor_licencia_Conduccion`, `Conductor_antecedentes`) VALUES
(1007105964, '7H383N383N3', 'Ninguno'),
(11, 'AUN3733H3H83H83', 'Ninguno'),
(11, 'bhmbjh', 'ningino'),
(11, 'NSUY73NDF783', 'Ninguno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE `cotizacion` (
  `Coti_num_Cotizacion` int(11) NOT NULL,
  `Coti_fecha` date NOT NULL,
  `Coti_direccion_Origen` varchar(50) NOT NULL,
  `Coti_direccion_Destino` varchar(50) NOT NULL,
  `Coti_precio` float NOT NULL,
  `Usu_doc_Identidad` int(20) DEFAULT NULL,
  `Cod_camion_Capacidad` int(20) DEFAULT NULL,
  `Kilometraje_cod` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `kilometraje`
--

CREATE TABLE `kilometraje` (
  `Kilometraje_cod` float NOT NULL,
  `Kilometraje_precio` float NOT NULL,
  `Kilometraje_tipo_Camion` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `kilometraje`
--

INSERT INTO `kilometraje` (`Kilometraje_cod`, `Kilometraje_precio`, `Kilometraje_tipo_Camion`) VALUES
(1, 20000, 'Camion liviano'),
(2, 50000, 'Camion carga mediana'),
(3, 85000, 'Camion carga pesada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `Pago_num_Comprobante` int(20) NOT NULL,
  `Recibo_num` int(20) DEFAULT NULL,
  `Usu_doc_Identidad` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pqr`
--

CREATE TABLE `pqr` (
  `PQR_cod` int(20) NOT NULL,
  `PQR_tipo` varchar(15) NOT NULL,
  `PQR_descripcion` varchar(100) NOT NULL,
  `PQR_fecha` varchar(12) NOT NULL,
  `Usu_doc_Identidad` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `recibo_de_pago`
--

CREATE TABLE `recibo_de_pago` (
  `Recibo_num` int(20) NOT NULL,
  `Recibo_iva` float NOT NULL,
  `Recibo_fecha` date NOT NULL,
  `Recibo_sub_Total` float NOT NULL,
  `Recibo_total` float NOT NULL,
  `Coti_num_Cotizacion` int(20) DEFAULT NULL,
  `Usu_doc_Identidad` int(20) DEFAULT NULL,
  `Vehiculo_num_Placa` varchar(12) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `Rol_cod` int(20) NOT NULL,
  `Rol_tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`Rol_cod`, `Rol_tipo`) VALUES
(0, 'administrador'),
(1, 'empleado'),
(2, 'conductor'),
(3, 'cliente'),
(5, 'default');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Usu_doc_Identidad` int(20) NOT NULL,
  `Usu_nombre` varchar(50) NOT NULL,
  `Usu_direccion` varchar(30) NOT NULL,
  `Usu_telefono` bigint(14) NOT NULL,
  `Usu_correo` varchar(30) NOT NULL,
  `Usu_nombre_Usuario` varchar(50) NOT NULL,
  `Usu_contraseña` varchar(20) NOT NULL,
  `Rol_cod` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Usu_doc_Identidad`, `Usu_nombre`, `Usu_direccion`, `Usu_telefono`, `Usu_correo`, `Usu_nombre_Usuario`, `Usu_contraseña`, `Rol_cod`) VALUES
(0, 'Admin', '0', 0, '0@gmial.com', '0', '0', 0),
(1, 'Empleado', '1', 1, 'empleado@empleado.com', '1', '1', 1),
(2, 'Conductor', '2', 2, 'conductor@conductor.com', '2', '2', 2),
(3, 'Cliente', '3', 3, 'cliente@cliente.com', '3', '3', 3),
(11, 'prueba', '11', 11, '11', '11', '11', 3),
(1007105964, 'Nicolas Cocunubo', 'Cra 12 d este #19-13 sur', 3188705641, 'nicococu2011@gmail.com', 'Nicolas18', '1234', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `Vehiculo_num_Placa` varchar(10) NOT NULL,
  `Vehiculo_tipo_Camion` varchar(20) NOT NULL,
  `Vehiculo_tarjeta_Propiedad` varchar(20) NOT NULL,
  `Usu_doc_Identidad` int(20) DEFAULT NULL,
  `Cod_camion_Capacidad` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`Vehiculo_num_Placa`, `Vehiculo_tipo_Camion`, `Vehiculo_tarjeta_Propiedad`, `Usu_doc_Identidad`, `Cod_camion_Capacidad`) VALUES
('ENG789', 'Carga ligera', '3423232', 11, 1),
('IJG286', 'Carga mediana', '827826722', 1007105964, 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `capacidad_camion`
--
ALTER TABLE `capacidad_camion`
  ADD PRIMARY KEY (`Cod_camion_Capacidad`);

--
-- Indices de la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD PRIMARY KEY (`Conductor_licencia_Conduccion`),
  ADD KEY `Usu_doc_Identidad` (`Usu_doc_Identidad`);

--
-- Indices de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD PRIMARY KEY (`Coti_num_Cotizacion`),
  ADD KEY `Usu_doc_Identidad` (`Usu_doc_Identidad`),
  ADD KEY `Cod_camion_Capacidad` (`Cod_camion_Capacidad`),
  ADD KEY `Kilometraje_cod` (`Kilometraje_cod`);

--
-- Indices de la tabla `kilometraje`
--
ALTER TABLE `kilometraje`
  ADD PRIMARY KEY (`Kilometraje_cod`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`Pago_num_Comprobante`),
  ADD KEY `Recibo_num` (`Recibo_num`),
  ADD KEY `Usu_doc_Identidad` (`Usu_doc_Identidad`);

--
-- Indices de la tabla `pqr`
--
ALTER TABLE `pqr`
  ADD PRIMARY KEY (`PQR_cod`),
  ADD KEY `Usu_doc_Identidad` (`Usu_doc_Identidad`);

--
-- Indices de la tabla `recibo_de_pago`
--
ALTER TABLE `recibo_de_pago`
  ADD PRIMARY KEY (`Recibo_num`),
  ADD KEY `Usu_doc_Identidad` (`Usu_doc_Identidad`),
  ADD KEY `Coti_num_Cotizacion` (`Coti_num_Cotizacion`),
  ADD KEY `Vehiculo_num_Placa` (`Vehiculo_num_Placa`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`Rol_cod`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Usu_doc_Identidad`),
  ADD KEY `Rol_cod` (`Rol_cod`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`Vehiculo_num_Placa`),
  ADD KEY `Usu_doc_Identidad` (`Usu_doc_Identidad`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  MODIFY `Coti_num_Cotizacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de la tabla `pqr`
--
ALTER TABLE `pqr`
  MODIFY `PQR_cod` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `conductor`
--
ALTER TABLE `conductor`
  ADD CONSTRAINT `conductor_ibfk_1` FOREIGN KEY (`Usu_doc_Identidad`) REFERENCES `usuario` (`Usu_doc_Identidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cotizacion`
--
ALTER TABLE `cotizacion`
  ADD CONSTRAINT `Cod_camion_Capacidad` FOREIGN KEY (`Cod_camion_Capacidad`) REFERENCES `capacidad_camion` (`Cod_camion_Capacidad`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Kilometraje_cod` FOREIGN KEY (`Kilometraje_cod`) REFERENCES `kilometraje` (`Kilometraje_cod`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Usu_doc_Identidad` FOREIGN KEY (`Usu_doc_Identidad`) REFERENCES `usuario` (`Usu_doc_Identidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `Recibo_num` FOREIGN KEY (`Recibo_num`) REFERENCES `recibo_de_pago` (`Recibo_num`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pago_ibfk_1` FOREIGN KEY (`Usu_doc_Identidad`) REFERENCES `usuario` (`Usu_doc_Identidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pqr`
--
ALTER TABLE `pqr`
  ADD CONSTRAINT `pqr_ibfk_1` FOREIGN KEY (`Usu_doc_Identidad`) REFERENCES `usuario` (`Usu_doc_Identidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `recibo_de_pago`
--
ALTER TABLE `recibo_de_pago`
  ADD CONSTRAINT `Coti_num_Cotizacion` FOREIGN KEY (`Coti_num_Cotizacion`) REFERENCES `cotizacion` (`Coti_num_Cotizacion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Vehiculo_num_Placa` FOREIGN KEY (`Vehiculo_num_Placa`) REFERENCES `vehiculo` (`Vehiculo_num_Placa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `recibo_de_pago_ibfk_1` FOREIGN KEY (`Usu_doc_Identidad`) REFERENCES `usuario` (`Usu_doc_Identidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `Rol_cod` FOREIGN KEY (`Rol_cod`) REFERENCES `roles` (`Rol_cod`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD CONSTRAINT `vehiculo_ibfk_1` FOREIGN KEY (`Usu_doc_Identidad`) REFERENCES `usuario` (`Usu_doc_Identidad`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
