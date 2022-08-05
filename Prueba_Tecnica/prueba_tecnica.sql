-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-08-2022 a las 23:27:06
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prueba_tecnica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos_paises`
--

CREATE TABLE `casos_paises` (
  `pais` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `bandera` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `casos_confirmados` int(11) NOT NULL,
  `muertes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `casos_paises`
--

INSERT INTO `casos_paises` (`pais`, `bandera`, `casos_confirmados`, `muertes`) VALUES
('Mexico', 'mexico.jpeg', 6803190, 328007),
('Estados Unidos', 'usa.jpeg', 91786294, 1029108),
('Canada', 'canada.jpeg', 4094621, 43066),
('Brasil', 'brasil.jpeg', 33964494, 679534),
('Rusia', 'rusia.jpeg', 18382278, 374849),
('Australia', 'australia.jpeg', 9586984, 12201),
('China', 'china.jpeg', 2280418, 14759),
('Argentina', 'argentina.jpeg', 9560307, 129369),
('Madagascar', 'madagascar.jpeg', 66491, 1408),
('Nigeria', 'nigeria.jpeg', 261473, 3147);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `password`) VALUES
(1, 'luis', '1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
