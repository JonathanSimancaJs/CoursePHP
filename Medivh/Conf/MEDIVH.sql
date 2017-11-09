-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2017 at 09:54 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `MEDIVH`
--

-- --------------------------------------------------------

--
-- Table structure for table `ACTIVO`
--

CREATE TABLE `ACTIVO` (
  `IdActivo` int(5) UNSIGNED ZEROFILL NOT NULL,
  `ActSerial` varchar(30) NOT NULL,
  `ActNombreModelo` varchar(50) NOT NULL,
  `ActLicencia` varchar(100) DEFAULT NULL,
  `ActEstado` varchar(15) NOT NULL,
  `ActCategoria` varchar(15) NOT NULL,
  `IdUsuarioAct` char(15) DEFAULT NULL,
  `IdProcesadorAct` int(11) DEFAULT NULL,
  `IdMemoriaAct` int(11) DEFAULT NULL,
  `IdHardwareAct` int(11) NOT NULL,
  `IdSoftwareAct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ACTIVO`
--

INSERT INTO `ACTIVO` (`IdActivo`, `ActSerial`, `ActNombreModelo`, `ActLicencia`, `ActEstado`, `ActCategoria`, `IdUsuarioAct`, `IdProcesadorAct`, `IdMemoriaAct`, `IdHardwareAct`, `IdSoftwareAct`) VALUES
(00001, '2G1245S', 'HP SMFF 800', 'SDGSDG-ERVAER-SDFERR-FQERWF', 'Asignado', 'Hardware', 'pperez', 5, 2, 17, 7);

-- --------------------------------------------------------

--
-- Table structure for table `AREASSOPORTE`
--

CREATE TABLE `AREASSOPORTE` (
  `IdArea` int(11) NOT NULL,
  `AreNombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `AREASSOPORTE`
--

INSERT INTO `AREASSOPORTE` (`IdArea`, `AreNombre`) VALUES
(1, 'Nivel 1'),
(2, 'Redes'),
(3, 'Windows Server'),
(4, 'Backup'),
(5, 'D Controller'),
(6, 'A Directory'),
(7, 'Administración');

-- --------------------------------------------------------

--
-- Table structure for table `ASESOR`
--

CREATE TABLE `ASESOR` (
  `IdAsesor` char(15) NOT NULL,
  `AseNombre` varchar(50) NOT NULL,
  `AseCorreo` varchar(50) NOT NULL,
  `AseContra` varchar(200) NOT NULL,
  `IdPermisoAse` int(11) NOT NULL,
  `IdAreaAse` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ASESOR`
--

INSERT INTO `ASESOR` (`IdAsesor`, `AseNombre`, `AseCorreo`, `AseContra`, `IdPermisoAse`, `IdAreaAse`) VALUES
('admin', 'Default', 'Default', '$2y$10$txPmuzvaT1mmCxw.J2w4g.wXurODpmBvmSRPZlQUfdaD29kOlFEwW', 1, 7),
('jdanilo', 'Juan Danilo Medina', 'jdanilo@correo.com', '$2y$10$txPmuzvaT1mmCxw.J2w4g.wXurODpmBvmSRPZlQUfdaD29kOlFEwW', 2, 1),
('jsimanca', 'Jonathan Simanca', 'jsimanca@corre.com', '$2y$10$b4zqxzsgtsHNfBsIkHdH..Fc2HUv0OgzVQj/7/u/4A7CY/4eYIZxa', 1, 7),
('mecra', 'David Perez', 'dperez@correo.com', '$2y$10$txPmuzvaT1mmCxw.J2w4g.wXurODpmBvmSRPZlQUfdaD29kOlFEwW', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `CANALENTRADA`
--

CREATE TABLE `CANALENTRADA` (
  `IdCanal` int(11) NOT NULL,
  `CanNombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CANALENTRADA`
--

INSERT INTO `CANALENTRADA` (`IdCanal`, `CanNombre`) VALUES
(1, 'Web'),
(2, 'Teléfono'),
(3, 'Correo'),
(4, 'Presencial');

-- --------------------------------------------------------

--
-- Table structure for table `CIUDAD`
--

CREATE TABLE `CIUDAD` (
  `IdCiudad` int(11) NOT NULL,
  `CiuNombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CIUDAD`
--

INSERT INTO `CIUDAD` (`IdCiudad`, `CiuNombre`) VALUES
(1, 'Bogota'),
(2, 'Medellin'),
(3, 'Cali'),
(4, 'Barranquilla'),
(5, 'Cartagena de Indias'),
(6, 'Soledad'),
(7, 'Cúcuta'),
(8, 'Ibagué'),
(9, 'Soacha'),
(10, 'Bucaramanga'),
(11, 'Santa Martha'),
(12, 'Villavicencio'),
(13, 'Pereira'),
(14, 'Buenaventura'),
(15, 'Pasto'),
(16, 'Manizalez'),
(17, 'Montería'),
(18, 'Neiva');

-- --------------------------------------------------------

--
-- Table structure for table `CLIENTE`
--

CREATE TABLE `CLIENTE` (
  `IdCliente` int(11) NOT NULL,
  `CliNombre` varchar(50) NOT NULL,
  `CliTelefono1` varchar(10) NOT NULL,
  `CliTelefono2` varchar(10) DEFAULT NULL,
  `CliDireccion` varchar(50) NOT NULL,
  `IdCiudadCli` int(11) NOT NULL,
  `IdDepartCli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `CLIENTE`
--

INSERT INTO `CLIENTE` (`IdCliente`, `CliNombre`, `CliTelefono1`, `CliTelefono2`, `CliDireccion`, `IdCiudadCli`, `IdDepartCli`) VALUES
(10001, 'Default', 'Default', NULL, 'Default', 1, 5),
(9181920, 'Itpro', '2051423', '2141514', 'Calle 45', 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `COMUNICADOS`
--

CREATE TABLE `COMUNICADOS` (
  `IdComunicado` int(11) NOT NULL,
  `ComTitulo` varchar(30) NOT NULL,
  `ComTexto` text NOT NULL,
  `ComFecha` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `COMUNICADOS`
--

INSERT INTO `COMUNICADOS` (`IdComunicado`, `ComTitulo`, `ComTexto`, `ComFecha`) VALUES
(1, 'Gestion de casos', 'Bienvenidos a la herramienta para gestionar casoso, todas las inquetudes seran atendidas.', '2017-04-26 10:09:16');

-- --------------------------------------------------------

--
-- Table structure for table `DEPARTAMENTO`
--

CREATE TABLE `DEPARTAMENTO` (
  `IdDepart` int(11) NOT NULL,
  `DepNombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `DEPARTAMENTO`
--

INSERT INTO `DEPARTAMENTO` (`IdDepart`, `DepNombre`) VALUES
(1, 'Amazonas'),
(2, 'Arauca'),
(3, 'Antioquia'),
(4, 'Atlántico'),
(5, 'Bogotá D.C'),
(6, 'Bolivar'),
(7, 'Boyacá'),
(8, 'Caldas'),
(9, 'Caquéta'),
(10, 'Casanare'),
(11, 'Cauca'),
(12, 'Cesar'),
(13, 'Choco'),
(14, 'Córdoba'),
(15, 'Cundínamarca'),
(16, 'Guanía'),
(17, 'Guaviaré'),
(18, 'Huíla'),
(19, 'Guajira'),
(20, 'Magdalena'),
(21, 'Meta'),
(22, 'Nariño'),
(23, 'Norte de santander'),
(24, 'Putumayo'),
(25, 'Quindio'),
(26, 'Risaralda'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Table structure for table `ESTADOTICKET`
--

CREATE TABLE `ESTADOTICKET` (
  `IdEstado` int(11) NOT NULL,
  `EstNombre` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ESTADOTICKET`
--

INSERT INTO `ESTADOTICKET` (`IdEstado`, `EstNombre`) VALUES
(1, 'Creado'),
(2, 'Asignado'),
(3, 'En Gestion'),
(4, 'Cerrado');

-- --------------------------------------------------------

--
-- Table structure for table `HARDWARE`
--

CREATE TABLE `HARDWARE` (
  `IdHardware` int(11) NOT NULL,
  `HarNombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `HARDWARE`
--

INSERT INTO `HARDWARE` (`IdHardware`, `HarNombre`) VALUES
(1, 'No Aplica'),
(2, 'Teclado'),
(3, 'All In One'),
(4, 'Camara'),
(5, 'Celular'),
(6, 'Diadema'),
(7, 'Modem'),
(8, 'Monitor'),
(9, 'Mouse'),
(10, 'Portatil'),
(11, 'Router'),
(12, 'Servidor'),
(13, 'Swich'),
(14, 'Tablet'),
(15, 'Teléfono'),
(16, 'Televisor'),
(17, 'Torre');

-- --------------------------------------------------------

--
-- Table structure for table `MEMORIA`
--

CREATE TABLE `MEMORIA` (
  `IdMemoria` int(11) NOT NULL,
  `MemCantidad` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `MEMORIA`
--

INSERT INTO `MEMORIA` (`IdMemoria`, `MemCantidad`) VALUES
(1, '2 GB'),
(2, '4 GB'),
(3, '8 GB'),
(4, '16 GB'),
(5, '32 GB'),
(6, '64 GB'),
(7, '128 GB'),
(8, '256 GB'),
(9, 'No Aplica');

-- --------------------------------------------------------

--
-- Table structure for table `NOTAS`
--

CREATE TABLE `NOTAS` (
  `IdNota` int(11) NOT NULL,
  `NotDescripcion` text NOT NULL,
  `NotFecha` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `IdTicketNot` int(6) UNSIGNED ZEROFILL NOT NULL,
  `IdAsesorNot` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `NOTAS`
--

INSERT INTO `NOTAS` (`IdNota`, `NotDescripcion`, `NotFecha`, `IdTicketNot`, `IdAsesorNot`) VALUES
(1, 'Esta es una nota de prueba.', '2017-04-29 21:03:21', 000001, 'jdanilo'),
(3, 'Nueva nota de prueba.', '2017-04-29 23:45:33', 000001, 'jdanilo'),
(4, 'Otra nota de prueba.', '2017-04-29 23:48:45', 000001, 'jdanilo');

-- --------------------------------------------------------

--
-- Table structure for table `PERMISOS`
--

CREATE TABLE `PERMISOS` (
  `IdPermiso` int(11) NOT NULL,
  `PerTipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PERMISOS`
--

INSERT INTO `PERMISOS` (`IdPermiso`, `PerTipo`) VALUES
(1, 'Administrador'),
(2, 'Asesor'),
(3, 'Usuario');

-- --------------------------------------------------------

--
-- Table structure for table `PROCESADOR`
--

CREATE TABLE `PROCESADOR` (
  `IdProcesador` int(11) NOT NULL,
  `ProNombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `PROCESADOR`
--

INSERT INTO `PROCESADOR` (`IdProcesador`, `ProNombre`) VALUES
(1, 'Intel Core Duo'),
(2, 'Intel Pentium 4'),
(3, 'Intel Celeron'),
(4, 'Intel Xeon'),
(5, 'Intel Core i3'),
(6, 'Intel Core i5'),
(7, 'Intel Core i7'),
(8, 'AMD FX'),
(9, 'AMD Athlon'),
(10, 'AMD APU'),
(11, 'AMD Rizen'),
(12, 'No Aplica');

-- --------------------------------------------------------

--
-- Table structure for table `SOFTWARE`
--

CREATE TABLE `SOFTWARE` (
  `IdSoftware` int(11) NOT NULL,
  `SofNOmbre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `SOFTWARE`
--

INSERT INTO `SOFTWARE` (`IdSoftware`, `SofNOmbre`) VALUES
(1, 'No Aplica'),
(2, 'Windows Xp'),
(3, 'Windows Vista'),
(4, 'Windows 7'),
(5, 'Windows 8'),
(6, 'Windows 8.1'),
(7, 'Windows 10'),
(8, 'Windows Server 2003'),
(9, 'Windows Server 2008'),
(10, 'Windows Server 2008 R2'),
(11, 'Windows Server 2012'),
(12, 'Windows Server 2012 R2'),
(13, 'Windows Server 2016'),
(14, 'Office 2007'),
(15, 'Office 2010'),
(16, 'Office 2013'),
(17, 'Office 2016'),
(18, 'Office 365'),
(19, 'Navegador Web'),
(20, 'Base de datos'),
(21, 'Plugin'),
(22, 'Controlador'),
(25, 'Software Empresarial'),
(26, 'Otro Software'),
(28, 'Software Multimedia');

-- --------------------------------------------------------

--
-- Table structure for table `TICKETS`
--

CREATE TABLE `TICKETS` (
  `IdTicket` int(6) UNSIGNED ZEROFILL NOT NULL,
  `TicFechaCreado` datetime NOT NULL,
  `TicFechaCierre` datetime DEFAULT NULL,
  `TicAsunto` varchar(30) NOT NULL,
  `TicDescripcion` text NOT NULL,
  `TicImagen` varchar(50) DEFAULT NULL,
  `IdEstadoTic` int(11) NOT NULL,
  `IdAreaTic` int(11) NOT NULL,
  `IdCanalTic` int(11) NOT NULL,
  `IdUsuarioTic` char(15) NOT NULL,
  `IdAsesorTic` char(15) DEFAULT NULL,
  `IdHardwareTic` int(11) DEFAULT NULL,
  `IdSoftwareTic` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `TICKETS`
--

INSERT INTO `TICKETS` (`IdTicket`, `TicFechaCreado`, `TicFechaCierre`, `TicAsunto`, `TicDescripcion`, `TicImagen`, `IdEstadoTic`, `IdAreaTic`, `IdCanalTic`, `IdUsuarioTic`, `IdAsesorTic`, `IdHardwareTic`, `IdSoftwareTic`) VALUES
(000001, '2017-04-26 10:05:14', NULL, 'Pc no encuende.', 'Al prender el computador aparece una pantalla azul con error.', '', 3, 1, 1, 'pperez', 'jdanilo', 17, 1),
(000002, '2017-04-26 10:52:16', NULL, 'Error DB', 'Tengo problemas al intentar conectarme a la bd de dattos de producccion.', 'Screenshot from 2017-03-05 10-05-35.png', 2, 1, 1, 'pperez', 'mecra', 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `USUARIO`
--

CREATE TABLE `USUARIO` (
  `IdUsuario` char(15) NOT NULL,
  `UsuIdent` int(11) NOT NULL,
  `UsuNombre` varchar(50) NOT NULL,
  `UsuCorreo` varchar(50) NOT NULL,
  `UsuTelefono` varchar(20) NOT NULL,
  `UsuUbicacion` varchar(20) NOT NULL,
  `UsuContra` varchar(200) NOT NULL,
  `IdCLienteUsu` int(11) NOT NULL,
  `IdPermisoUsu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `USUARIO`
--

INSERT INTO `USUARIO` (`IdUsuario`, `UsuIdent`, `UsuNombre`, `UsuCorreo`, `UsuTelefono`, `UsuUbicacion`, `UsuContra`, `IdCLienteUsu`, `IdPermisoUsu`) VALUES
('default', 100001, 'default', 'default', 'default', 'default', '$2y$10$It0JLFxgIuqxjQ8UgytuguQ3bCBAhoNsdLfT/Dm9YX6TTT1vMFbUu', 10001, 3),
('pperez', 20215214, 'Pepito Perez', 'pperez@correo.com', '12456', 'Piso 2', '$2y$10$/E3C6TIGWhK0nyBnak9ngu06tYdakFXYXgYcERZ0TSQPvQIgF8kJa', 9181920, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ACTIVO`
--
ALTER TABLE `ACTIVO`
  ADD PRIMARY KEY (`IdActivo`),
  ADD KEY `fk_IdUsuarioAct` (`IdUsuarioAct`),
  ADD KEY `fk_IdProcesadorAct` (`IdProcesadorAct`),
  ADD KEY `fk_IdMemoriaAct` (`IdMemoriaAct`),
  ADD KEY `fk_IdHardwareAct` (`IdHardwareAct`),
  ADD KEY `fk_IdSoftwareAct` (`IdSoftwareAct`);

--
-- Indexes for table `AREASSOPORTE`
--
ALTER TABLE `AREASSOPORTE`
  ADD PRIMARY KEY (`IdArea`);

--
-- Indexes for table `ASESOR`
--
ALTER TABLE `ASESOR`
  ADD PRIMARY KEY (`IdAsesor`),
  ADD KEY `fk_IdPermisoAse` (`IdPermisoAse`),
  ADD KEY `fk_IdAreaAse` (`IdAreaAse`);

--
-- Indexes for table `CANALENTRADA`
--
ALTER TABLE `CANALENTRADA`
  ADD PRIMARY KEY (`IdCanal`);

--
-- Indexes for table `CIUDAD`
--
ALTER TABLE `CIUDAD`
  ADD PRIMARY KEY (`IdCiudad`);

--
-- Indexes for table `CLIENTE`
--
ALTER TABLE `CLIENTE`
  ADD PRIMARY KEY (`IdCliente`),
  ADD KEY `fk_IdCiudadCli` (`IdCiudadCli`),
  ADD KEY `fk_IdDepartCli` (`IdDepartCli`);

--
-- Indexes for table `COMUNICADOS`
--
ALTER TABLE `COMUNICADOS`
  ADD PRIMARY KEY (`IdComunicado`);

--
-- Indexes for table `DEPARTAMENTO`
--
ALTER TABLE `DEPARTAMENTO`
  ADD PRIMARY KEY (`IdDepart`);

--
-- Indexes for table `ESTADOTICKET`
--
ALTER TABLE `ESTADOTICKET`
  ADD PRIMARY KEY (`IdEstado`);

--
-- Indexes for table `HARDWARE`
--
ALTER TABLE `HARDWARE`
  ADD PRIMARY KEY (`IdHardware`);

--
-- Indexes for table `MEMORIA`
--
ALTER TABLE `MEMORIA`
  ADD PRIMARY KEY (`IdMemoria`);

--
-- Indexes for table `NOTAS`
--
ALTER TABLE `NOTAS`
  ADD PRIMARY KEY (`IdNota`),
  ADD KEY `fk_IdTicketNot` (`IdTicketNot`),
  ADD KEY `fk_IdAsesorNot` (`IdAsesorNot`);

--
-- Indexes for table `PERMISOS`
--
ALTER TABLE `PERMISOS`
  ADD PRIMARY KEY (`IdPermiso`);

--
-- Indexes for table `PROCESADOR`
--
ALTER TABLE `PROCESADOR`
  ADD PRIMARY KEY (`IdProcesador`);

--
-- Indexes for table `SOFTWARE`
--
ALTER TABLE `SOFTWARE`
  ADD PRIMARY KEY (`IdSoftware`);

--
-- Indexes for table `TICKETS`
--
ALTER TABLE `TICKETS`
  ADD PRIMARY KEY (`IdTicket`),
  ADD KEY `fk_IdEstadoTic` (`IdEstadoTic`),
  ADD KEY `fk_IdAreaTic` (`IdAreaTic`),
  ADD KEY `fk_IdCanalTic` (`IdCanalTic`),
  ADD KEY `fk_IdUsuarioTic` (`IdUsuarioTic`),
  ADD KEY `fk_IdAsesorTic` (`IdAsesorTic`),
  ADD KEY `fk_IdHardwareTic` (`IdHardwareTic`),
  ADD KEY `fk_IdSoftwareTic` (`IdSoftwareTic`);

--
-- Indexes for table `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD PRIMARY KEY (`IdUsuario`),
  ADD KEY `fk_IdCLienteUsu` (`IdCLienteUsu`),
  ADD KEY `fk_IdPermisoUsu` (`IdPermisoUsu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ACTIVO`
--
ALTER TABLE `ACTIVO`
  MODIFY `IdActivo` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `AREASSOPORTE`
--
ALTER TABLE `AREASSOPORTE`
  MODIFY `IdArea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `CANALENTRADA`
--
ALTER TABLE `CANALENTRADA`
  MODIFY `IdCanal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `CIUDAD`
--
ALTER TABLE `CIUDAD`
  MODIFY `IdCiudad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `COMUNICADOS`
--
ALTER TABLE `COMUNICADOS`
  MODIFY `IdComunicado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `DEPARTAMENTO`
--
ALTER TABLE `DEPARTAMENTO`
  MODIFY `IdDepart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `ESTADOTICKET`
--
ALTER TABLE `ESTADOTICKET`
  MODIFY `IdEstado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `HARDWARE`
--
ALTER TABLE `HARDWARE`
  MODIFY `IdHardware` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `MEMORIA`
--
ALTER TABLE `MEMORIA`
  MODIFY `IdMemoria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `NOTAS`
--
ALTER TABLE `NOTAS`
  MODIFY `IdNota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `PERMISOS`
--
ALTER TABLE `PERMISOS`
  MODIFY `IdPermiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `PROCESADOR`
--
ALTER TABLE `PROCESADOR`
  MODIFY `IdProcesador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `SOFTWARE`
--
ALTER TABLE `SOFTWARE`
  MODIFY `IdSoftware` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `TICKETS`
--
ALTER TABLE `TICKETS`
  MODIFY `IdTicket` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `ACTIVO`
--
ALTER TABLE `ACTIVO`
  ADD CONSTRAINT `fk_IdHardwareAct` FOREIGN KEY (`IdHardwareAct`) REFERENCES `HARDWARE` (`IdHardware`),
  ADD CONSTRAINT `fk_IdMemoriaAct` FOREIGN KEY (`IdMemoriaAct`) REFERENCES `MEMORIA` (`IdMemoria`),
  ADD CONSTRAINT `fk_IdProcesadorAct` FOREIGN KEY (`IdProcesadorAct`) REFERENCES `PROCESADOR` (`IdProcesador`),
  ADD CONSTRAINT `fk_IdSoftwareAct` FOREIGN KEY (`IdSoftwareAct`) REFERENCES `SOFTWARE` (`IdSoftware`),
  ADD CONSTRAINT `fk_IdUsuarioAct` FOREIGN KEY (`IdUsuarioAct`) REFERENCES `USUARIO` (`IdUsuario`);

--
-- Constraints for table `ASESOR`
--
ALTER TABLE `ASESOR`
  ADD CONSTRAINT `fk_IdAreaAse` FOREIGN KEY (`IdAreaAse`) REFERENCES `AREASSOPORTE` (`IdArea`),
  ADD CONSTRAINT `fk_IdPermisoAse` FOREIGN KEY (`IdPermisoAse`) REFERENCES `PERMISOS` (`IdPermiso`);

--
-- Constraints for table `CLIENTE`
--
ALTER TABLE `CLIENTE`
  ADD CONSTRAINT `fk_IdCiudadCli` FOREIGN KEY (`IdCiudadCli`) REFERENCES `CIUDAD` (`IdCiudad`),
  ADD CONSTRAINT `fk_IdDepartCli` FOREIGN KEY (`IdDepartCli`) REFERENCES `DEPARTAMENTO` (`IdDepart`);

--
-- Constraints for table `NOTAS`
--
ALTER TABLE `NOTAS`
  ADD CONSTRAINT `fk_IdAsesorNot` FOREIGN KEY (`IdAsesorNot`) REFERENCES `ASESOR` (`IdAsesor`),
  ADD CONSTRAINT `fk_IdTicketNot` FOREIGN KEY (`IdTicketNot`) REFERENCES `TICKETS` (`IdTicket`);

--
-- Constraints for table `TICKETS`
--
ALTER TABLE `TICKETS`
  ADD CONSTRAINT `fk_IdAreaTic` FOREIGN KEY (`IdAreaTic`) REFERENCES `AREASSOPORTE` (`IdArea`),
  ADD CONSTRAINT `fk_IdAsesorTic` FOREIGN KEY (`IdAsesorTic`) REFERENCES `ASESOR` (`IdAsesor`),
  ADD CONSTRAINT `fk_IdCanalTic` FOREIGN KEY (`IdCanalTic`) REFERENCES `CANALENTRADA` (`IdCanal`),
  ADD CONSTRAINT `fk_IdEstadoTic` FOREIGN KEY (`IdEstadoTic`) REFERENCES `ESTADOTICKET` (`IdEstado`),
  ADD CONSTRAINT `fk_IdHardwareTic` FOREIGN KEY (`IdHardwareTic`) REFERENCES `HARDWARE` (`IdHardware`),
  ADD CONSTRAINT `fk_IdSoftwareTic` FOREIGN KEY (`IdSoftwareTic`) REFERENCES `SOFTWARE` (`IdSoftware`),
  ADD CONSTRAINT `fk_IdUsuarioTic` FOREIGN KEY (`IdUsuarioTic`) REFERENCES `USUARIO` (`IdUsuario`);

--
-- Constraints for table `USUARIO`
--
ALTER TABLE `USUARIO`
  ADD CONSTRAINT `fk_IdCLienteUsu` FOREIGN KEY (`IdCLienteUsu`) REFERENCES `CLIENTE` (`IdCliente`),
  ADD CONSTRAINT `fk_IdPermisoUsu` FOREIGN KEY (`IdPermisoUsu`) REFERENCES `PERMISOS` (`IdPermiso`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
