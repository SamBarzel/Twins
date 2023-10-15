-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 30-05-2023 a las 08:02:01
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
-- Base de datos: `Twins`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personalizados`
--

CREATE TABLE `personalizados` (
  `id` int(11) NOT NULL,
  `nom` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `time` varchar(20) NOT NULL,
  `size` varchar(15) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personalizados`
--

INSERT INTO `personalizados` (`id`, `nom`, `email`, `tel`, `time`, `size`, `descripcion`) VALUES
(3, 'Sebastian', 'sebas@hotmail.com', '4431725519', '06/08/2023 3:00 PM', 'Pequeño', 'Pastel de Amoung us'),
(4, 'Araceli', 'ara@gmail.com', '4431725590', '06/10/2023 3:00 PM', 'Grande', 'Pastel de peliculas de disney'),
(6, 'Maria', 'mari@gmail.com', '4431236612', '05/29/2023 10:00 AM', 'Grande', 'Pastel de Boda temática Avenger'),
(7, 'Estefani', 'fany@gmail.com', '4431725515', '06/10/2023 10:00 AM', 'Pequeño', 'Galletas de Pokemon');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `precio` varchar(100) NOT NULL,
  `imagen` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`) VALUES
(1, 'pastel', '$100.00', 'pastelAmongUS.jpg'),
(3, 'Moffin', '$150.00', 'hero-3.jpg'),
(4, 'Pastel', '50', 'especial.jpg'),
(6, 'GAlletas de Conegito', '$75.00', 'galletasConejitos.jpg'),
(7, 'PASTEL DE DIA DE MUERTOS', '$350.00', 'Pastel_DiaMuertos.jpg'),
(9, 'PASTEL DON JULION', '$455.00', 'especial.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int(255) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellidos` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `mujer` varchar(10) NOT NULL,
  `hombre` varchar(10) NOT NULL,
  `rol` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `nombre`, `apellidos`, `email`, `pass`, `mujer`, `hombre`, `rol`) VALUES
(1, 'Samuel', 'Pineda', 'pinedasamuel8504@gmail.com', '1234', '', 'hombre', 'admi'),
(2, 'Samuel', 'Pineda', 'pinedasamuel8504@hotmail.com', '1234', '', 'hombre', 'usuario'),
(3, 'Martina', 'Rodriguez Sanchez', 'martu@gmail.com', '123', 'mujer', '', 'usuario'),
(6, 'Esteban', ' Pineda Avila', 'estepa@gmail.com', '123', '', '', 'usuario'),
(7, 'Mayra', ' Carrasco Rodriguez', 'May123@gmail.com', '1234', 'mujer', 'mujer', 'usuario'),
(8, 'Armando', ' Carrasco Rodriguez', 'Mando123@gmail.com', '1223', '', 'hombre', 'usuario'),
(9, 'Fernanda', ' Mediola Silva', 'fer@gmail.com', '1234', 'mujer', '', 'admi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `personalizados`
--
ALTER TABLE `personalizados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `personalizados`
--
ALTER TABLE `personalizados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
