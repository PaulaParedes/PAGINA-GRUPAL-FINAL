-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2022 a las 04:39:42
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php_login_database`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'test@mail.com', '$2y$10$6LqndAoYyB3Izg1vSsi4Ce/kPFCP.uVBFnvQ5ZLe10hUVqyw20Ose'),
(21, 'test17@mail.com', '$2y$10$ivKTwSwAuetXQQI6R8.XTOE6cb8qSrnPiuIP6efjOlmvIfnyWOpH6'),
(22, 'test2@mail.com', '$2y$10$OG1P7G6xX003KgRLkshXyOE4VtUooDz/mAVOm1EYbaJibo/6BaoBq'),
(23, 'koa@mail.com', '$2y$10$8eV2XMvwkVdwl4JpgI3fJeSz/k1VVohOQTqmuLepv9arIPUEpBGtO'),
(24, 'koa1@mail.com', '$2y$10$Ke3Qcgbr42KYeMFF.BmyGOa04TCEq0H3Tm8W2Hd6hOHEiq6kyyXCW'),
(25, 'test123@mail.com', '$2y$10$EDCIhtT36cYAsPot4uPCROL8hdTYsc6/AuE58lPv5XkTJ1Sx50I6a'),
(26, 'prueba3@mail.com', '$2y$10$jES7Uk1enFVZ7BgdIDj1GOkKMdV0BCJ9mvdzSjYLhJndJfy6z8pMK'),
(27, 'prueba3@mail.com', '$2y$10$ns2QNNhbT3Ass26u3GIWPefTC2u2UvxqR63Yy5c53B8vGygDyN38q');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
