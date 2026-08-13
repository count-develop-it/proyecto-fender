-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-08-2026 a las 00:51:01
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
-- Base de datos: `tienda_fender`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `etiqueta` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `precio`, `imagen`, `categoria`, `etiqueta`) VALUES
(1, 'American Professional II Telecaster®', 14350.00, 'img_prod/ame1.png', 'american', NULL),
(2, 'American Ultra II Telecaster®', 18200.00, 'img_prod/ame2.png', 'american', 'New'),
(3, 'American Vintage II 1951 Telecaster®', 16500.00, 'img_prod/ame3.png', 'american', NULL),
(4, 'American Performer Telecaster®', 11200.00, 'img_prod/ame4.png', 'american', NULL),
(5, 'American Professional II Stratocaster®', 14500.00, 'img_prod/ame5.png', 'american', NULL),
(6, 'American Ultra II Stratocaster® HSS', 18500.00, 'img_prod/ame6.png', 'american', 'New'),
(7, 'American Professional Classic Stratocaster® HSS', 12200.00, 'img_prod/ame7.png', 'american', 'New'),
(8, 'American Ultra II Stratocaster® Left-Hand', 25350.00, 'img_prod/ame8.png', 'american', 'New'),
(9, 'American Professional II Jazzmaster®', 15100.00, 'img_prod/ame9.png', 'american', NULL),
(10, 'American Ultra II Jazzmaster®', 19100.00, 'img_prod/ame10.png', 'american', 'New'),
(11, 'American Vintage II 1966 Jazzmaster®', 17300.00, 'img_prod/ame11.png', 'american', NULL),
(12, 'American Performer Mustang®', 10800.00, 'img_prod/ame12.png', 'american', NULL),
(13, 'American Professional II Precision Bass®', 14900.00, 'img_prod/ame13.png', 'american', NULL),
(14, 'Player II Stratocaster®', 9549.00, 'img_prod/strato1.png', 'stratocaster', 'New'),
(15, 'Player II Stratocaster® HSS', 9659.00, 'img_prod/strato2.png', 'stratocaster', 'New'),
(16, 'Made in Japan Traditional 2025 Collection \'60s Stratocaster®', 12761.45, 'img_prod/strato3.png', 'stratocaster', 'New'),
(17, 'Vintera® III Late \'60s Stratocaster®', 10121.15, 'img_prod/strato4.png', 'stratocaster', NULL),
(18, 'Vintera® III Early \'60s Stratocaster®', 7900.00, 'img_prod/strato5.png', 'stratocaster', 'New'),
(19, 'Vintera® III Late \'50s Stratocaster®', 7850.00, 'img_prod/strato6.png', 'stratocaster', 'New'),
(20, 'American Professional II Stratocaster®', 14500.00, 'img_prod/strato7.png', 'stratocaster', NULL),
(21, 'American Ultra II Stratocaster® HSS', 18500.00, 'img_prod/strato8.png', 'stratocaster', NULL),
(22, 'American Professional Classic Stratocaster® HSS', 12200.00, 'img_prod/strato9.png', 'stratocaster', 'New'),
(23, 'Yngwie Malmsteen Stratocaster®', 21200.00, 'img_prod/strato10.png', 'stratocaster', 'Back in stock'),
(24, 'Limited Edition Player II Stratocaster®, Shell Pink', 7850.00, 'img_prod/strato11.png', 'stratocaster', 'Back in stock'),
(25, 'Standard Stratocaster® HSS', 5350.00, 'img_prod/strato12.png', 'stratocaster', 'Back in stock'),
(26, 'American Ultra II Stratocaster® Left-Hand', 25350.00, 'img_prod/strato13.png', 'stratocaster', 'New'),
(27, 'Classic Vibe \'70s Jaguar®', 4290.00, 'img_prod/jaguar1.png', 'jaguar', NULL),
(28, 'Player Jaguar®', 7200.00, 'img_prod/jaguar2.png', 'jaguar', NULL),
(29, 'Vintera® II \'60s Jaguar®', 11500.00, 'img_prod/jaguar3.png', 'jaguar', 'New'),
(30, 'Johnny Marr Jaguar®', 22500.00, 'img_prod/jaguar4.png', 'jaguar', NULL),
(31, 'Kurt Cobain Jaguar®', 13800.00, 'img_prod/jaguar5.png', 'jaguar', 'Back in stock'),
(32, 'Made in Japan Hybrid II Jaguar®', 11900.00, 'img_prod/jaguar6.png', 'jaguar', 'New'),
(33, 'Limited Edition Player II Jaguar®', 8100.00, 'img_prod/jaguar7.png', 'jaguar', 'New'),
(34, 'American Vintage II 1966 Jaguar®', 17800.00, 'img_prod/jaguar8.png', 'jaguar', NULL),
(35, 'Squier Contemporary Jaguar® HH ST', 4850.00, 'img_prod/jaguar9.png', 'jaguar', NULL),
(36, 'Classic Vibe \'60s Jaguar® HH', 4500.00, 'img_prod/jaguar10.png', 'jaguar', NULL),
(37, 'Gold Foil Jaguar®', 12100.00, 'img_prod/jaguar11.png', 'jaguar', NULL),
(38, 'Paranormal Custom Jaguar® Smile', 4300.00, 'img_prod/jaguar12.png', 'jaguar', 'New'),
(39, 'Made in Japan Traditional \'60s Jaguar®', 12400.00, 'img_prod/jaguar13.png', 'jaguar', NULL),
(40, 'Player II Telecaster® HH', 6900.00, 'img_prod/tele1.png', 'telecaster', 'New'),
(41, 'Player II Telecaster®', 7100.00, 'img_prod/tele2.png', 'telecaster', 'New'),
(42, 'Vintera® II \'50s Telecaster®', 10900.00, 'img_prod/tele3.png', 'telecaster', NULL),
(43, 'American Professional II Telecaster®', 14350.00, 'img_prod/tele4.png', 'telecaster', NULL),
(44, 'American Ultra II Telecaster®', 18200.00, 'img_prod/tele5.png', 'telecaster', 'New'),
(45, 'Classic Vibe \'50s Telecaster®', 3950.00, 'img_prod/tele6.png', 'telecaster', NULL),
(46, 'Classic Vibe \'60s Custom Telecaster®', 4200.00, 'img_prod/tele7.png', 'telecaster', NULL),
(47, 'Player II Deluxe Telecaster®', 7800.00, 'img_prod/tele8.png', 'telecaster', 'New'),
(48, 'Jim Root Telecaster®', 12900.00, 'img_prod/tele9.png', 'telecaster', NULL),
(49, 'Brent Mason Telecaster®', 24500.00, 'img_prod/tele10.png', 'telecaster', NULL),
(50, 'Britt Daniel Telecaster® Thinline', 18900.00, 'img_prod/tele11.png', 'telecaster', NULL),
(51, 'Made in Japan Hybrid II Telecaster®', 11500.00, 'img_prod/tele12.png', 'telecaster', 'New'),
(52, 'American Vintage II 1951 Telecaster®', 16500.00, 'img_prod/tele13.png', 'telecaster', NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
