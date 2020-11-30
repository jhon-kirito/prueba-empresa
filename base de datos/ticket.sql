-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 07:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticket`
--

-- --------------------------------------------------------

--
-- Table structure for table `empresa`
--

CREATE TABLE `empresa` (
  `nit` int(20) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `empresa`
--

INSERT INTO `empresa` (`nit`, `nombre`, `telefono`, `direccion`, `email`) VALUES
(154461, 'yumbo', '3126599874', 'zipaquira,barrio 7', 'yumbo@yumbo.com'),
(874694, 'ibm', '7896541259', 'bogota,localidad xd', 'imb@imb.com'),
(78466258, 'postobon', '9777896587', 'bogota,barrio kenedy', 'postobon@postobon.co');

-- --------------------------------------------------------

--
-- Table structure for table `em_pro`
--

CREATE TABLE `em_pro` (
  `id_emp` int(20) NOT NULL,
  `id_pr` int(20) NOT NULL,
  `nit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `em_pro`
--

INSERT INTO `em_pro` (`id_emp`, `id_pr`, `nit`) VALUES
(8, 1, 154461),
(9, 2, 154461),
(10, 3, 874694),
(11, 4, 78466258);

-- --------------------------------------------------------

--
-- Table structure for table `historia_usuario`
--

CREATE TABLE `historia_usuario` (
  `id_historia` int(20) NOT NULL,
  `Descripcion` varchar(500) NOT NULL,
  `id_pro` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `historia_usuario`
--

INSERT INTO `historia_usuario` (`id_historia`, `Descripcion`, `id_pro`) VALUES
(13, 'crear acceso a la plataforma', 8),
(14, 'realizar front-end', 8),
(15, 'funcionalidad de crear roles', 8),
(16, 'crear front-end', 9),
(17, 'realizar las pruebas de verification', 9),
(18, 'realizar la interacción con el usuario', 9),
(19, 'crear base de datos', 10),
(20, 'realizar pruebas', 10),
(21, 'realizar backend', 10),
(22, 'realizar el acceso a diferentes roles', 11),
(23, 'realizar base de datos', 11),
(24, 'realizar el front-end', 11),
(25, 'CREAR INTERFAZ', 10);

-- --------------------------------------------------------

--
-- Table structure for table `proyecto`
--

CREATE TABLE `proyecto` (
  `id_p` int(20) NOT NULL,
  `nombre1` varchar(100) NOT NULL,
  `fecha_creacion1` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proyecto`
--

INSERT INTO `proyecto` (`id_p`, `nombre1`, `fecha_creacion1`) VALUES
(1, 'desarrollo web', '2020-11-25 06:09:09'),
(2, 'construir una app movil', '2020-11-22 06:09:09'),
(3, 'app multiplataforma', '2020-11-19 00:00:00'),
(4, 'app postobon', '2020-11-24 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `solicitud`
--

CREATE TABLE `solicitud` (
  `id_sol` int(20) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `fecha_creacion` varchar(50) NOT NULL,
  `fecha_finalizada` varchar(50) NOT NULL,
  `comentarios` varchar(500) NOT NULL,
  `activo` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solicitud`
--

INSERT INTO `solicitud` (`id_sol`, `estado`, `fecha_creacion`, `fecha_finalizada`, `comentarios`, `activo`) VALUES
(1, 'Activo', 'sghag', '', 'sahggas', 1),
(2, 'Terminada', '2020-11-29 22:37:52', '', 'realizado', 1),
(3, 'Activo', '2020-11-29 22:38:21', '', 'realizada la bd', 1),
(4, 'Activo', '2020-11-29 23:00:21', '', 'REALIZADO', 1);

-- --------------------------------------------------------

--
-- Table structure for table `usuario`
--

CREATE TABLE `usuario` (
  `cedula` int(20) NOT NULL,
  `tipo` varchar(50) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `direccion` varchar(200) NOT NULL,
  `user` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario`
--

INSERT INTO `usuario` (`cedula`, `tipo`, `nombre`, `email`, `direccion`, `user`, `pass`) VALUES
(1075687, 'CC', 'jhon Poveda', 'jpovedapove@protonmail.com', 'zipaquira,vereda san isidro', 'Kirito', '$2y$10$GHM/hFj3K32VmnSkhnLM7ORgSy5At8QPhyaegwVpRpRIlUZe99exe');

-- --------------------------------------------------------

--
-- Table structure for table `usuario_com`
--

CREATE TABLE `usuario_com` (
  `id_uc` int(20) NOT NULL,
  `nit` int(20) NOT NULL,
  `id_user` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_com`
--

INSERT INTO `usuario_com` (`id_uc`, `nit`, `id_user`) VALUES
(4, 874694, 1075687);

-- --------------------------------------------------------

--
-- Table structure for table `usuario_pc`
--

CREATE TABLE `usuario_pc` (
  `id_pc` int(20) NOT NULL,
  `id_c` int(20) NOT NULL,
  `ced` int(20) NOT NULL,
  `id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usuario_pc`
--

INSERT INTO `usuario_pc` (`id_pc`, `id_c`, `ced`, `id`) VALUES
(23, 19, 1075687, 3),
(22, 21, 1075687, 2),
(24, 25, 1075687, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`nit`);

--
-- Indexes for table `em_pro`
--
ALTER TABLE `em_pro`
  ADD PRIMARY KEY (`id_emp`),
  ADD KEY `id_p` (`id_pr`,`nit`),
  ADD KEY `nit` (`nit`);

--
-- Indexes for table `historia_usuario`
--
ALTER TABLE `historia_usuario`
  ADD PRIMARY KEY (`id_historia`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Indexes for table `proyecto`
--
ALTER TABLE `proyecto`
  ADD PRIMARY KEY (`id_p`);

--
-- Indexes for table `solicitud`
--
ALTER TABLE `solicitud`
  ADD PRIMARY KEY (`id_sol`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cedula`);

--
-- Indexes for table `usuario_com`
--
ALTER TABLE `usuario_com`
  ADD PRIMARY KEY (`id_uc`),
  ADD KEY `nit` (`nit`,`id_user`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `usuario_pc`
--
ALTER TABLE `usuario_pc`
  ADD PRIMARY KEY (`id_pc`),
  ADD KEY `nit` (`id_c`,`ced`,`id`),
  ADD KEY `id` (`id`),
  ADD KEY `ced` (`ced`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `em_pro`
--
ALTER TABLE `em_pro`
  MODIFY `id_emp` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `historia_usuario`
--
ALTER TABLE `historia_usuario`
  MODIFY `id_historia` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `proyecto`
--
ALTER TABLE `proyecto`
  MODIFY `id_p` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `solicitud`
--
ALTER TABLE `solicitud`
  MODIFY `id_sol` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario_com`
--
ALTER TABLE `usuario_com`
  MODIFY `id_uc` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuario_pc`
--
ALTER TABLE `usuario_pc`
  MODIFY `id_pc` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `em_pro`
--
ALTER TABLE `em_pro`
  ADD CONSTRAINT `em_pro_ibfk_1` FOREIGN KEY (`id_pr`) REFERENCES `proyecto` (`id_p`),
  ADD CONSTRAINT `em_pro_ibfk_2` FOREIGN KEY (`nit`) REFERENCES `empresa` (`nit`);

--
-- Constraints for table `historia_usuario`
--
ALTER TABLE `historia_usuario`
  ADD CONSTRAINT `historia_usuario_ibfk_1` FOREIGN KEY (`id_pro`) REFERENCES `em_pro` (`id_emp`);

--
-- Constraints for table `usuario_com`
--
ALTER TABLE `usuario_com`
  ADD CONSTRAINT `usuario_com_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`cedula`),
  ADD CONSTRAINT `usuario_com_ibfk_2` FOREIGN KEY (`nit`) REFERENCES `empresa` (`nit`);

--
-- Constraints for table `usuario_pc`
--
ALTER TABLE `usuario_pc`
  ADD CONSTRAINT `usuario_pc_ibfk_5` FOREIGN KEY (`id`) REFERENCES `solicitud` (`id_sol`),
  ADD CONSTRAINT `usuario_pc_ibfk_6` FOREIGN KEY (`ced`) REFERENCES `usuario` (`cedula`),
  ADD CONSTRAINT `usuario_pc_ibfk_7` FOREIGN KEY (`id_c`) REFERENCES `historia_usuario` (`id_historia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
