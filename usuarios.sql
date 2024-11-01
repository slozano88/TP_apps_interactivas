-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-11-2024 a las 05:45:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `usuarios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `id` int(20) NOT NULL,
  `usuario` varchar(60) NOT NULL,
  `contra` varchar(60) NOT NULL,
  `fecha_reg` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`id`, `usuario`, `contra`, `fecha_reg`) VALUES
(3, 'dasdas', '12321', '08/09/24'),
(4, 'santino', '12345', '08/09/24'),
(18, 'hola', '1234', '19/09/24'),
(19, 'sss', 'sss', '19/09/24'),
(20, 'sss', 'sss', '19/09/24'),
(21, 'sss', 'sss', '19/09/24'),
(22, 'sss', 'sss', '19/09/24'),
(23, 'sss', 'sss', '19/09/24'),
(24, 'sss', 'sss', '19/09/24'),
(25, 'aa', 'ss', '19/09/24'),
(26, 'aa', 'ss', '19/09/24'),
(27, 'aggg', '222', '19/09/24'),
(28, 's', 'aaa', '19/09/24'),
(29, 'hola1', 'sss', '19/09/24'),
(30, 'a', 'a', '19/09/24'),
(31, '2323', '333', '19/09/24'),
(32, 'a', 'a', '19/09/24'),
(33, '235rq23', 'ss', '19/09/24'),
(34, '123', '123', '19/09/24'),
(35, '123', '123', '19/09/24'),
(36, 'hola', '123', '19/09/24'),
(37, 'a', '23', '19/09/24'),
(43, 'hola123', '123', '20/09/24'),
(44, 'hola22', '22', '20/09/24'),
(45, 'ds', 'dssss', '25/09/24'),
(46, 'qqqqq', 'qqqq', '25/09/24'),
(47, 'ss', 'ss', '25/09/24'),
(48, 'ds', 'dsss', '25/09/24'),
(49, 'ss', 'ssss', '25/09/24'),
(50, 'efgte3gt', '3gt3g3', '25/09/24'),
(51, 'dsad', 'ssss', '25/09/24'),
(52, 'hola222', '222', '25/09/24'),
(53, 'hola2332', '2222', '25/09/24'),
(54, '54hbrteh', 'hh', '25/09/24'),
(55, 'sds', 'sss', '25/09/24'),
(56, 'ddd', 'dddd', '25/09/24'),
(57, 'hgooolaaa', '222222', '25/09/24'),
(58, 'aftgkwotq3', 'q235rq235r', '25/09/24'),
(59, 'hola234', '234', '25/09/24'),
(60, '3rwqa', 'asd', '25/09/24'),
(61, 'dsa', 'sd', '26/09/24'),
(62, 'aaaa', '2222222223', '01/11/24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingredientes`
--

CREATE TABLE `ingredientes` (
  `id_usuario` int(20) NOT NULL,
  `nombre_ingrediente` varchar(45) NOT NULL,
  `fecha_agregado` varchar(10) NOT NULL,
  `cantidad` int(60) NOT NULL,
  `id_ingrediente` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ingredientes`
--

INSERT INTO `ingredientes` (`id_usuario`, `nombre_ingrediente`, `fecha_agregado`, `cantidad`, `id_ingrediente`) VALUES
(34, 'morron', '01/11/24', 2, 1),
(34, 'papa', '01/11/24', 86, 2),
(34, 'a', '01/11/24', 2432, 3),
(34, 'ad', '01/11/24', 23, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD PRIMARY KEY (`id_ingrediente`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  MODIFY `id_ingrediente` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ingredientes`
--
ALTER TABLE `ingredientes`
  ADD CONSTRAINT `ingredientes_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `datos_usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
