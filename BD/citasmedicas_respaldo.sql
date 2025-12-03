-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-11-2025 a las 23:23:23
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
-- Base de datos: `citasmedicas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID_Cita` int(11) NOT NULL,
  `Nombre_Paciente` varchar(99) NOT NULL,
  `Nombre_Medico` varchar(99) NOT NULL,
  `Fecha` date NOT NULL,
  `Hora` time(6) NOT NULL,
  `Especialidad_Medico` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID_Cita`, `Nombre_Paciente`, `Nombre_Medico`, `Fecha`, `Hora`, `Especialidad_Medico`) VALUES
(2, 'Andres', 'Badillo', '2025-11-19', '15:28:00.000000', '3'),
(3, 'Andres', 'Badillo', '2025-11-19', '15:28:00.000000', '3'),
(4, 'Andres', 'Badillo', '2025-11-20', '18:41:00.000000', 'medico_interno'),
(5, 'Andres', 'Badillo', '2025-11-20', '18:41:00.000000', 'pediatria'),
(7, 'Valentin', 'Cody', '2025-06-13', '18:11:00.000000', 'cirujano_general'),
(8, 'Andres', 'Badillo', '2025-11-27', '19:22:00.000000', 'pediatria'),
(10, 'ian raul', 'mario', '2025-11-10', '17:09:00.000000', 'ginecologo'),
(11, 'Humbero c a', 'Rios', '2025-11-27', '15:30:00.000000', 'medico_interno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID_Cita`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID_Cita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
