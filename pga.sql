-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2024 a las 19:55:06
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
-- Base de datos: `prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) NOT NULL,
  `nombre_producto` varchar(255) NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `id_carrito` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `carrito`
--

INSERT INTO `carrito` (`id`, `nombre_producto`, `precio`, `id_carrito`) VALUES
(1, 'Elden Ring', 142.00, 1),
(2, 'Gears 5', 62.70, 1),
(3, 'Skullgirls 2nd Encore', 80.00, 1),
(4, 'NieR:Automata The End of YoRHa Edition', 70.00, 2),
(5, 'Guilty Gear Strive', 136.00, 2),
(6, 'Ori: The Collection', 77.78, 2),
(7, 'Skullgirls 2nd Encore', 80.00, 3),
(8, 'Gears 5', 62.70, 3),
(9, 'Elden Ring', 142.00, 3),
(10, 'Hi-Fi Rush', 81.90, 4),
(11, 'Forza Horizon 5', 149.19, 5),
(12, 'Hi-Fi Rush', 81.90, 5),
(13, 'Skullgirls 2nd Encore', 80.00, 5),
(14, 'Skullgirls 2nd Encore', 80.00, 6),
(15, 'NieR:Automata The End of YoRHa Edition', 70.00, 6),
(16, 'Ori: The Collection', 77.78, 6),
(17, 'Elden Ring', 142.00, 7),
(18, 'Elden Ring', 142.00, 8),
(19, 'Forza Horizon 5', 149.19, 9),
(20, 'Halo Infinite', 79.90, 9),
(21, 'Hi-Fi Rush', 81.90, 10),
(22, 'Forza Horizon 5', 149.19, 10),
(23, 'Halo Infinite', 79.90, 10),
(24, 'Red Fall', 80.00, 11),
(25, 'Darck pictures', 62.70, 11),
(26, 'The Medieum', 142.00, 11),
(27, 'far cry 6', 136.00, 12),
(28, 'A Plague Tale: Requiem', 70.00, 12),
(29, 'Kirby’s Dream Buffet™', 73.00, 13),
(30, 'Fire Emblem Warriors', 279.00, 13),
(31, 'Minecraft', 91.90, 14),
(32, 'Paquete doble de Pokémon™ Scarlet y Pokémon™ Violet', 559.00, 15),
(33, '', 279.00, 15),
(34, 'Pokémon™ Scarlet', 279.00, 15),
(35, 'HARVESTELLA', 238.00, 15),
(36, 'Pokémon™ Violet', 279.00, 16),
(37, 'Pokémon™ Scarlet', 279.00, 16),
(38, 'Paquete doble de Pokémon™ Scarlet y Pokémon™ Violet', 559.00, 16),
(39, 'MARIO + RABBIDS SPARKS OF HOPE', 75.79, 17),
(40, 'Fire Emblem Warriors: Three Hopes', 144.00, 17),
(41, 'Gears 5', 62.70, 18),
(42, 'Skullgirls 2nd Encore', 80.00, 18),
(43, 'The Legend of Zelda™: Tears of the Kingdom', 144.00, 19),
(44, 'The Legend of Zelda™: Breath of the Wild', 79.90, 19),
(45, 'THE LAST OF US REMASTERED', 39.90, 20),
(46, 'uncharted', 80.00, 20),
(47, 'Horizon', 49.90, 20),
(48, 'uncharted', 80.00, 21),
(49, 'Deathloop', 230.00, 22),
(50, 'Ghostwire: Tokyo', 299.00, 23),
(51, 'Sackboy: A Big Adventure', 299.00, 23),
(52, 'Soma', 70.00, 24),
(53, 'Layers of Fear', 60.00, 24),
(54, 'Amnesia: Collection', 80.00, 24),
(55, 'Dead by Daylight', 80.00, 25);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
