-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2020 a las 17:17:20
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_cursa`
--
CREATE DATABASE IF NOT EXISTS `bd_cursa` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish_ci;
USE `bd_cursa`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_categoria`
--

CREATE TABLE `tbl_categoria` (
  `id_categoria` int(11) NOT NULL,
  `nom_categoria` varchar(200) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_categoria`
--

INSERT INTO `tbl_categoria` (`id_categoria`, `nom_categoria`) VALUES
(1, 'sub-12'),
(2, 'sub-18'),
(3, 'sub-30'),
(4, 'sub-60'),
(5, 'veterà');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_inscripcio`
--

CREATE TABLE `tbl_inscripcio` (
  `id_dorsal` int(11) NOT NULL,
  `id_participant` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_inscripcio`
--

INSERT INTO `tbl_inscripcio` (`id_dorsal`, `id_participant`, `id_categoria`) VALUES
(2, 11, 1),
(3, 12, 3),
(4, 13, 1),
(5, 14, 1),
(6, 15, 3),
(7, 16, 4),
(8, 17, 4),
(9, 18, 5),
(10, 19, 4),
(11, 20, 3),
(12, 21, 1),
(13, 22, 1),
(14, 23, 1),
(15, 24, 3),
(16, 25, 4),
(17, 26, 4),
(18, 27, 4),
(19, 28, 1),
(20, 29, 5),
(21, 30, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_participants`
--

CREATE TABLE `tbl_participants` (
  `id_participant` int(11) NOT NULL,
  `DNI` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `primer_cognom` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `segon_cognom` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `data_naixement` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_spanish_ci NOT NULL,
  `sexe` enum('Dona','Home') COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `tbl_participants`
--

INSERT INTO `tbl_participants` (`id_participant`, `DNI`, `nom`, `primer_cognom`, `segon_cognom`, `data_naixement`, `email`, `sexe`) VALUES
(11, '47669254Y', 'htgrfe', 'hgrfe', 'hgtfred', '2020-10-27', 'agnes@gmail.com', 'Dona'),
(12, '73677318S', 'Juan', 'López', 'Horta', '2020-11-04', 'juanlopez@gmail.com', 'Home'),
(13, '', '', '', '', '2020-11-03', '', 'Dona'),
(14, '85315382X', 'ytrew', 'ytre', 'jytre', '2015-12-15', 'eqwrfe@gmail.com', 'Dona'),
(15, '02953646D', 'Marta', 'López', 'Pérez', '2002-11-15', 'mlopez@gmail.com', 'Dona'),
(16, 'X0608436V', 'Juan', 'Alfonso', 'Cantero', '1964-01-08', 'jalfonso@gmail.com', 'Dona'),
(17, '93054221Q', 'Mari', 'Valero', 'Semis', '1963-06-25', 'mvalero@gmail.com', 'Dona'),
(18, '71455026Y', 'Lorena', 'Simón', 'Puertas', '1942-05-12', 'lsimon@gmail.com', 'Dona'),
(19, '23845025M', 'Manel', 'Barrios', 'Lugo', '1978-05-12', 'mbarrios@gmail.com', 'Home'),
(20, '27488268W', 'Andrea', 'Villanueva', 'Hernández', '1991-11-18', 'andreav@gmail.com', 'Dona'),
(21, '83752711M', 'Juan', 'Alfonso', 'Rodríguez', '2020-11-18', 'juann@gmail.com', 'Home'),
(22, 'X4409908A', 'ads', 'ad', 'asds', '2020-11-18', 'SASDFA@GMAIL.COM', 'Dona'),
(23, 'X1932940C', 'wqsredt', 'qawsedrfg', 'werftg', '2015-11-22', 'judit@gmail.comm', 'Dona'),
(24, '33', 'we', 'trewq', 're4wq', '1998-12-12', 'we@gmail.com', 'Dona'),
(25, '54r', 'weq', 'qwrew', 'wertg', '1978-05-12', 'qwregrfdsxc@gmail.com', 'Dona'),
(26, '59256327R', 'proba23', 'q1wert', 't4rews', '1978-05-12', '2ww@gmail.com', 'Dona'),
(27, 'X6188780D', 'proba2', 'proba2', 'proba2', '1978-12-05', 'proba2@gmail.com', 'Dona'),
(28, '11501393J', 'Proba3', 'Proba3', 'Proba3', '2017-11-23', 'Proba3@gmail.com', 'Dona'),
(29, 'Z2265951L', 'Z2265951L', 'Z2265951L', 'Z2265951L', '1912-12-12', 'we@gmail.com', 'Dona'),
(30, '62302288A', 'Martí', 'París', 'Londres', '1998-05-12', 'mparis@gmail.com', 'Home');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Indices de la tabla `tbl_inscripcio`
--
ALTER TABLE `tbl_inscripcio`
  ADD PRIMARY KEY (`id_dorsal`),
  ADD KEY `id_participant` (`id_participant`),
  ADD KEY `id_categoria` (`id_categoria`);

--
-- Indices de la tabla `tbl_participants`
--
ALTER TABLE `tbl_participants`
  ADD PRIMARY KEY (`id_participant`),
  ADD UNIQUE KEY `dni` (`DNI`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_categoria`
--
ALTER TABLE `tbl_categoria`
  MODIFY `id_categoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `tbl_inscripcio`
--
ALTER TABLE `tbl_inscripcio`
  MODIFY `id_dorsal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `tbl_participants`
--
ALTER TABLE `tbl_participants`
  MODIFY `id_participant` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_inscripcio`
--
ALTER TABLE `tbl_inscripcio`
  ADD CONSTRAINT `tbl_inscripcio_ibfk_1` FOREIGN KEY (`id_categoria`) REFERENCES `tbl_categoria` (`id_categoria`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_inscripcio_ibfk_2` FOREIGN KEY (`id_participant`) REFERENCES `tbl_participants` (`id_participant`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
