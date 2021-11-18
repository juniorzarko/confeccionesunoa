-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-11-2021 a las 16:59:59
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.3.31-2+0~20211022.89+debian11~1.gbp745ac7

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `BD_confeccionesunoa`
--
CREATE DATABASE IF NOT EXISTS `BD_confeccionesunoa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `BD_confeccionesunoa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_lote`
--

DROP TABLE IF EXISTS `tb_lote`;
CREATE TABLE `tb_lote` (
  `id` int NOT NULL,
  `codigoLote` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nombre` int NOT NULL,
  `cantidad` int NOT NULL,
  `fechaCreacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8_spanish_ci COMMENT='Tabla de identificacion del lote de prenda';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_modulos`
--

DROP TABLE IF EXISTS `tb_modulos`;
CREATE TABLE `tb_modulos` (
  `id` int NOT NULL,
  `descripcion` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Tabla descripcion de los modulos de independientes';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_mod_prendas`
--

DROP TABLE IF EXISTS `tb_mod_prendas`;
CREATE TABLE `tb_mod_prendas` (
  `id` int NOT NULL,
  `fecha_mvto` date NOT NULL,
  `id_operaciones` int NOT NULL,
  `codigoOperador` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nombreOperador` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `unidad_hora` int NOT NULL,
  `unidadTotalDia` int NOT NULL,
  `salarioDia` int NOT NULL,
  `total` int NOT NULL,
  `observaciones` varchar(500) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `id_operario` int NOT NULL,
  `id_lote` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Tabla central de operaciones de prenda';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_operacion`
--

DROP TABLE IF EXISTS `tb_operacion`;
CREATE TABLE `tb_operacion` (
  `id` int NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `costo` int DEFAULT NULL,
  `unidades` int NOT NULL,
  `id_modulo` int NOT NULL,
  `tiempo_proceso` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Tabla de registro de operacion diaria';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_operario`
--

DROP TABLE IF EXISTS `tb_operario`;
CREATE TABLE `tb_operario` (
  `id` int NOT NULL,
  `Nombre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `apellido` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `direccion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telefono` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cargo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_transaccionesAPP`
--

DROP TABLE IF EXISTS `tb_transaccionesAPP`;
CREATE TABLE `tb_transaccionesAPP` (
  `id` int NOT NULL,
  `id_usuario` int NOT NULL,
  `fecha` date NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `salario` float NOT NULL,
  `unidades` int DEFAULT NULL,
  `id_modulo` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='tabla donde se registra las transacciones de la aplicacion';

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tb_usuarios`
--

DROP TABLE IF EXISTS `tb_usuarios`;
CREATE TABLE `tb_usuarios` (
  `id` int NOT NULL,
  `nombre` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `usuario` varchar(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `clave` varchar(500) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` varchar(300) COLLATE utf8mb4_spanish_ci DEFAULT NULL,
  `estado` varchar(50) COLLATE utf8mb4_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci COMMENT='Tablas de usuarios de la aplicacion';

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tb_lote`
--
ALTER TABLE `tb_lote`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_modulos`
--
ALTER TABLE `tb_modulos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_mod_prendas`
--
ALTER TABLE `tb_mod_prendas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_operario` (`id_operario`,`id_lote`),
  ADD KEY `id_operaciones` (`id_operaciones`),
  ADD KEY `id_lote` (`id_lote`);

--
-- Indices de la tabla `tb_operacion`
--
ALTER TABLE `tb_operacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- Indices de la tabla `tb_operario`
--
ALTER TABLE `tb_operario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tb_transaccionesAPP`
--
ALTER TABLE `tb_transaccionesAPP`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usaurio` (`id_usuario`,`id_modulo`),
  ADD KEY `id_modulo` (`id_modulo`);

--
-- Indices de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tb_lote`
--
ALTER TABLE `tb_lote`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_modulos`
--
ALTER TABLE `tb_modulos`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_mod_prendas`
--
ALTER TABLE `tb_mod_prendas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_operacion`
--
ALTER TABLE `tb_operacion`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_operario`
--
ALTER TABLE `tb_operario`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_transaccionesAPP`
--
ALTER TABLE `tb_transaccionesAPP`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tb_usuarios`
--
ALTER TABLE `tb_usuarios`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tb_mod_prendas`
--
ALTER TABLE `tb_mod_prendas`
  ADD CONSTRAINT `tb_mod_prendas_ibfk_1` FOREIGN KEY (`id_operario`) REFERENCES `tb_operario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mod_prendas_ibfk_2` FOREIGN KEY (`id_lote`) REFERENCES `tb_lote` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_mod_prendas_ibfk_3` FOREIGN KEY (`id_operaciones`) REFERENCES `tb_operacion` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_operacion`
--
ALTER TABLE `tb_operacion`
  ADD CONSTRAINT `tb_operacion_ibfk_1` FOREIGN KEY (`id_modulo`) REFERENCES `tb_modulos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tb_transaccionesAPP`
--
ALTER TABLE `tb_transaccionesAPP`
  ADD CONSTRAINT `tb_transaccionesAPP_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `tb_usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_transaccionesAPP_ibfk_2` FOREIGN KEY (`id_modulo`) REFERENCES `tb_modulos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
