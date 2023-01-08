-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 02:24 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banco_aps`
--

-- --------------------------------------------------------

--
-- Table structure for table `capital`
--

CREATE TABLE `capital` (
  `id_capital` int(11) NOT NULL,
  `monto_neto` double NOT NULL,
  `numero_cuenta` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `capital`
--

INSERT INTO `capital` (`id_capital`, `monto_neto`, `numero_cuenta`) VALUES
(1, 2750, 1234567890),
(2, 2450, 1234567891);

-- --------------------------------------------------------

--
-- Table structure for table `movimientos`
--

CREATE TABLE `movimientos` (
  `id_movimiento` int(11) NOT NULL,
  `monto` double NOT NULL,
  `destinatario` int(30) NOT NULL,
  `remitente` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movimientos`
--

INSERT INTO `movimientos` (`id_movimiento`, `monto`, `destinatario`, `remitente`) VALUES
(1, 150, 1234567890, 1234567891);

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `numero_cuenta` int(30) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido_paterno` varchar(100) NOT NULL,
  `apellido_materno` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nip` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `estado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`numero_cuenta`, `nombre`, `apellido_paterno`, `apellido_materno`, `username`, `nip`, `rol`, `estado`) VALUES
(1234567890, 'Jonathan', 'Salvador', 'Tolentino', 'Jonathan23', 1234, 'Cliente', 1),
(1234567891, 'Luis', 'Lopez', 'Gonzalez', 'Luis23', 12345, 'Cliente', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `capital`
--
ALTER TABLE `capital`
  ADD PRIMARY KEY (`id_capital`),
  ADD KEY `fk_capital_usuario` (`numero_cuenta`);

--
-- Indexes for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD PRIMARY KEY (`id_movimiento`),
  ADD KEY `fk_remitente` (`remitente`),
  ADD KEY `fk_destinatario` (`destinatario`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`numero_cuenta`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `capital`
--
ALTER TABLE `capital`
  MODIFY `id_capital` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movimientos`
--
ALTER TABLE `movimientos`
  MODIFY `id_movimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `numero_cuenta` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567892;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `capital`
--
ALTER TABLE `capital`
  ADD CONSTRAINT `fk_capital_usuario` FOREIGN KEY (`numero_cuenta`) REFERENCES `usuarios` (`numero_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `movimientos`
--
ALTER TABLE `movimientos`
  ADD CONSTRAINT `fk_destinatario` FOREIGN KEY (`destinatario`) REFERENCES `usuarios` (`numero_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_remitente` FOREIGN KEY (`remitente`) REFERENCES `usuarios` (`numero_cuenta`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
