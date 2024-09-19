-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2024 a las 23:20:49
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
(38, 'dsjjdsjds', '2222222', '19/09/24'),
(39, 'gola', '2345', '19/09/24');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
