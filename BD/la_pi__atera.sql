-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2023 a las 06:06:18
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `la_piñatera`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `Id` int(5) NOT NULL,
  `Descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`Id`, `Descripcion`) VALUES
(1, 'Administrador'),
(2, 'Vendedor'),
(3, 'Cliente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(255) NOT NULL,
  `NombreUsuario` varchar(25) NOT NULL,
  `NombreCompleto` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Id_rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `NombreUsuario`, `NombreCompleto`, `Email`, `Telefono`, `Contraseña`, `Id_rol`) VALUES
(1, 'CamiloR', 'Camilo Andrés Rodríguez Chaparro', 'crodriguezchaparro2@gmail.com', '3212757000', '12345', 1),
(2, 'Lunatico', 'Leidy Johana Chaparro Castillo', 'LeidyJohana@gmail.com', '1234567890', '123456', 2),
(3, 'MariaIsa', 'Maria Isabella Gustavo Sarmiento', 'Mariaisgusar@gmail.com', '3212432425', '1234567890', 3),
(4, 'NicolásM', 'Nicolás Mauricio Gutierrez Aguirre', 'nimaguaguirre@yopmail.com', '3479020757', 'nicolas347', 3),
(5, 'CarlosJ', 'Carlos José Gomez Acosta', 'cajogoacosta@yahoo.com', '3506926732', 'carlos 350', 3),
(6, 'AnaV', 'Ana Valeria Gimenez Fernandez', 'anvagifernandez@protonmail.com', '3869636774', 'ana386', 3),
(7, 'MartaA', 'Marta Alicia Martinez Flores', 'maalmaflores@yandex.com', '3738729864', 'marta373', 3),
(8, 'JuanD', 'Juan David Triana Rodríguez', 'judatrirodriguez@outlook.com', '3747459992', 'juan374', 1),
(9, 'JorgeR', 'Jorge Ricardo Diaz Herrera', 'joridiherrera@yandex.com', '3324354426', 'jorge332', 1),
(10, 'NataliaV', 'Natalia Valeria Rodriguez Sosa', 'navarososa@yandex.com', '3838764767', 'natalia383', 2),
(11, 'AliciaS', 'Alicia Susana Gomez Torres', 'alsugotorres@hotmail.com', '3215430354', 'alicia321', 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`Id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id_rol` (`Id_rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`Id_rol`) REFERENCES `permisos` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
