-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-01-2024 a las 06:11:33
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
-- Base de datos: `db_kondamatik`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbbancos`
--

CREATE TABLE `tbbancos` (
  `IdBanco` int(11) NOT NULL,
  `Nom_Banco` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbconcepto`
--

CREATE TABLE `tbconcepto` (
  `IdConcepto` int(11) NOT NULL,
  `Nom_Concepto` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbconfiguracionnotificacion`
--

CREATE TABLE `tbconfiguracionnotificacion` (
  `idNotificacion` int(11) NOT NULL,
  `Num_Intervalo` varchar(50) DEFAULT NULL,
  `IdFrecuencia` int(11) DEFAULT NULL,
  `fec_HorarioInicio` date DEFAULT NULL,
  `Fec_HorarioFin` date DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbedificio`
--

CREATE TABLE `tbedificio` (
  `IdEdificio` int(11) NOT NULL,
  `Nom_Edificio` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfamiliares`
--

CREATE TABLE `tbfamiliares` (
  `IdFamiliar` int(11) NOT NULL,
  `IdUsuarioVivienda` int(11) NOT NULL,
  `Nom_Nombres` varchar(80) DEFAULT NULL,
  `Nom_Apellidos` varchar(80) DEFAULT NULL,
  `Des_Email` varchar(150) DEFAULT NULL,
  `Num_Documento` varchar(15) DEFAULT NULL,
  `IdTipDocumento` int(11) NOT NULL,
  `Des_Celular` varchar(50) DEFAULT NULL,
  `Fec_Registro` datetime NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbformaspago`
--

CREATE TABLE `tbformaspago` (
  `IdFormaPago` int(11) NOT NULL,
  `Nom_FormaPago` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbfrecuencia`
--

CREATE TABLE `tbfrecuencia` (
  `IdFrecuencia` int(11) NOT NULL,
  `Nom_Frecuencia` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbopcionesmenu`
--

CREATE TABLE `tbopcionesmenu` (
  `IdOpcionMenu` int(11) NOT NULL,
  `Nom_Nombre` varchar(50) NOT NULL,
  `IdOpcionPadre` int(11) NOT NULL,
  `Des_Pagina` varchar(50) NOT NULL,
  `Des_Carpeta` varchar(50) NOT NULL,
  `Des_IconoOpcion` varchar(50) DEFAULT NULL,
  `Num_Orden` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbperfiles`
--

CREATE TABLE `tbperfiles` (
  `IdPerfil` int(11) NOT NULL,
  `Nom_Perfil` varchar(50) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbperfiles`
--

INSERT INTO `tbperfiles` (`IdPerfil`, `Nom_Perfil`, `Flg_Estado`) VALUES
(1, 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbperfilopcion`
--

CREATE TABLE `tbperfilopcion` (
  `IdPerfilOpcion` int(11) NOT NULL,
  `IdPerfil` int(11) NOT NULL,
  `IdOpcionMenu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbpermanencia`
--

CREATE TABLE `tbpermanencia` (
  `IdPermanencia` int(11) NOT NULL,
  `Nom_Permanencia` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbplantillas`
--

CREATE TABLE `tbplantillas` (
  `IdPlantilla` int(11) NOT NULL,
  `IdTipSolicitud` int(11) NOT NULL,
  `Des_FormatoHTML` varchar(1500) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbprofesion`
--

CREATE TABLE `tbprofesion` (
  `IdProfesion` int(11) NOT NULL,
  `Nom_Profesion` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbserviciospermanentes`
--

CREATE TABLE `tbserviciospermanentes` (
  `IdServicioPermanente` int(11) NOT NULL,
  `Nom_Nombres` varchar(80) DEFAULT NULL,
  `Nom_Apellidos` varchar(80) DEFAULT NULL,
  `IdProfesion` int(11) NOT NULL,
  `Num_Celular` varchar(10) NOT NULL,
  `Num_TelefonoFijo` varchar(10) DEFAULT NULL,
  `Des_Email` varchar(150) DEFAULT NULL,
  `idTipDocumento` int(11) NOT NULL,
  `Num_Documento` varchar(15) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipoarchivos`
--

CREATE TABLE `tbtipoarchivos` (
  `IdTipArchivo` int(11) NOT NULL,
  `Nom_TipoArchivo` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbtipoarchivos`
--

INSERT INTO `tbtipoarchivos` (`IdTipArchivo`, `Nom_TipoArchivo`, `Flg_Estado`) VALUES
(1, 'Archivo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipodocumento`
--

CREATE TABLE `tbtipodocumento` (
  `IdTipDocumento` int(11) NOT NULL,
  `Nom_TipDocumento` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipodocumentogestion`
--

CREATE TABLE `tbtipodocumentogestion` (
  `IdTipDocumentoGestion` int(11) NOT NULL,
  `Nom_TipoDocumentoGestion` varchar(50) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbtipodocumentogestion`
--

INSERT INTO `tbtipodocumentogestion` (`IdTipDocumentoGestion`, `Nom_TipoDocumentoGestion`, `Flg_Estado`) VALUES
(1, 'ACUERDO', 1),
(2, 'MINUTA', 1),
(3, 'NOTIFICACIÓN', 1),
(4, 'ACTA DE REUNION', 1),
(5, 'BOLETÍN', 1),
(6, 'RECIBO DE AGUA', 1),
(7, 'RECIBO DE LUZ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtiposolicitud`
--

CREATE TABLE `tbtiposolicitud` (
  `IdTipSolicitud` int(11) NOT NULL,
  `Nom_TipoSolicitud` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipousuario`
--

CREATE TABLE `tbtipousuario` (
  `IdTipUsuario` int(11) NOT NULL,
  `Nom_TipUsuario` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbtipousuario`
--

INSERT INTO `tbtipousuario` (`IdTipUsuario`, `Nom_TipUsuario`, `Flg_Estado`) VALUES
(1, 'Administrador', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipovehiculo`
--

CREATE TABLE `tbtipovehiculo` (
  `IdTipVehiculo` int(11) NOT NULL,
  `Nom_TipVehiculo` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbtipovisita`
--

CREATE TABLE `tbtipovisita` (
  `IdTipVisita` int(11) NOT NULL,
  `Nom_Visita` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbubigeo`
--

CREATE TABLE `tbubigeo` (
  `IdUbigeo` int(11) NOT NULL,
  `Cod_Departamento` varchar(2) DEFAULT NULL,
  `Nom_Departamento` varchar(50) DEFAULT NULL,
  `Cod_Provincia` varchar(4) DEFAULT NULL,
  `Nom_Provincia` varchar(50) DEFAULT NULL,
  `Cod_Distrito` varchar(6) DEFAULT NULL,
  `Nom_Distrito` varchar(50) DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuarios`
--

CREATE TABLE `tbusuarios` (
  `idUsuario` int(11) NOT NULL,
  `Nom_Apellidos` varchar(80) DEFAULT NULL,
  `Nom_Nombres` varchar(80) DEFAULT NULL,
  `Fec_Expiracion` datetime NOT NULL,
  `Des_Clave` varchar(50) NOT NULL,
  `Des_Email` varchar(150) NOT NULL,
  `IdPerfil` int(11) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbusuarios`
--

INSERT INTO `tbusuarios` (`idUsuario`, `Nom_Apellidos`, `Nom_Nombres`, `Fec_Expiracion`, `Des_Clave`, `Des_Email`, `IdPerfil`, `Flg_Estado`) VALUES
(1, 'Administrador', 'Administrador', '2023-09-26 19:35:02', 'admin', 'admin@admin.com', 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbusuariosvivienda`
--

CREATE TABLE `tbusuariosvivienda` (
  `IdUsuarioVivienda` int(11) NOT NULL,
  `Cod_Identificador` varchar(10) NOT NULL,
  `Nom_Apellidos` varchar(80) DEFAULT NULL,
  `Nom_Nombres` varchar(80) DEFAULT NULL,
  `Des_Email` varchar(150) NOT NULL,
  `Num_Documento` varchar(15) NOT NULL,
  `IdTipDocumento` int(11) NOT NULL,
  `Fec_Registro` datetime NOT NULL,
  `IdEdificio` int(11) NOT NULL,
  `Num_Departamento` varchar(10) DEFAULT NULL,
  `Des_Direccion` varchar(150) DEFAULT NULL,
  `Cod_Departamento` varchar(2) DEFAULT NULL,
  `Cod_Provincia` varchar(4) DEFAULT NULL,
  `Cod_Distrito` varchar(6) DEFAULT NULL,
  `IdTipUsuario` int(11) NOT NULL,
  `Des_Celular` varchar(10) DEFAULT NULL,
  `Des_TelefonoCasa` varchar(10) DEFAULT NULL,
  `IdUsuario` int(11) NOT NULL,
  `IdUbigeo` int(11) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbvisitascochera`
--

CREATE TABLE `tbvisitascochera` (
  `IdVisitaCochera` int(11) NOT NULL,
  `IdVisitaFrecuente` int(11) NOT NULL,
  `IdUsuarioVivienda` int(11) NOT NULL,
  `Num_Cochera` varchar(5) DEFAULT NULL,
  `Des_Placa` varchar(50) DEFAULT NULL,
  `Des_Modelo` varchar(50) DEFAULT NULL,
  `Des_Marca` varchar(50) DEFAULT NULL,
  `IdTipVehiculo` int(11) NOT NULL,
  `Num_PagoFueraHorario` double DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmcargoscochera`
--

CREATE TABLE `tmcargoscochera` (
  `IdCargoCochera` int(11) NOT NULL,
  `IdVisitaCochera` int(11) NOT NULL,
  `Fec_HoraLimite` time DEFAULT NULL,
  `Num_Monto` double DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmcuotasmantenimiento`
--

CREATE TABLE `tmcuotasmantenimiento` (
  `IdCuotaMantenimiento` int(11) NOT NULL,
  `IdUsuarioVivienda` int(11) NOT NULL,
  `Num_Cuotas` int(11) DEFAULT NULL,
  `Num_MontoCuota` double DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmdetallecuotasmantenimiento`
--

CREATE TABLE `tmdetallecuotasmantenimiento` (
  `IdDetCuotaMantenimiento` int(11) NOT NULL,
  `idCuotaMantenimiento` int(11) NOT NULL,
  `Num_Cuota` int(11) NOT NULL,
  `Num_MontoCuota` double DEFAULT NULL,
  `Num_MontoMora` double DEFAULT NULL,
  `Fec_Pago` datetime DEFAULT NULL,
  `Fec_Creacion` datetime DEFAULT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmdetallerecibos`
--

CREATE TABLE `tmdetallerecibos` (
  `IdDetRecibo` int(11) NOT NULL,
  `IdRecibo` int(11) NOT NULL,
  `IdConcepto` int(11) NOT NULL,
  `Num_Monto` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmgestiondocumentos`
--

CREATE TABLE `tmgestiondocumentos` (
  `IdGestionDocumento` int(11) NOT NULL,
  `id_generator` varchar(10) DEFAULT NULL,
  `IdTipDocumentoGestion` int(11) NOT NULL,
  `Des_Detalle` varchar(150) DEFAULT NULL,
  `Fec_Registro` datetime DEFAULT NULL,
  `Des_RutaDocumento` varchar(200) DEFAULT NULL,
  `Des_NombreDocumento` varchar(50) DEFAULT NULL,
  `IdTipArchivo` int(11) NOT NULL,
  `Flg_Busqueda` tinyint(4) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tmgestiondocumentos`
--

INSERT INTO `tmgestiondocumentos` (`IdGestionDocumento`, `id_generator`, `IdTipDocumentoGestion`, `Des_Detalle`, `Fec_Registro`, `Des_RutaDocumento`, `Des_NombreDocumento`, `IdTipArchivo`, `Flg_Busqueda`, `Flg_Estado`) VALUES
(6, 'GD000002', 1, 'Acuerdo v1', '2023-10-04 00:00:00', 'Kondomatik _ Registro de Propietario_Gestión Doc_Gestión_Sol_Gestion V.pdf', 'ACUERDO VAS', 1, 1, 1),
(7, 'GD000003', 3, 'Notificacion c5', '2023-10-04 00:00:00', 'Kondomatik _ Registro de Propietario_Gestión Doc_Gestión_Sol_Gestion V.pdf', 'Notificacion c5', 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmgestionsolicitudes`
--

CREATE TABLE `tmgestionsolicitudes` (
  `IdGestionSolicitud` int(11) NOT NULL,
  `IdTipSolicitud` int(11) NOT NULL,
  `Des_Detalle` varchar(150) DEFAULT NULL,
  `Fec_Creacion` datetime NOT NULL,
  `IdUsuarioVivienda` int(11) NOT NULL,
  `Fec_Ejecucion` datetime DEFAULT NULL,
  `Flg_Aprobacion` tinyint(4) NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Fec_RangoInicio` datetime DEFAULT NULL,
  `Fec_RangoFin` datetime DEFAULT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmocurrencias`
--

CREATE TABLE `tmocurrencias` (
  `IdOcurrencia` int(11) NOT NULL,
  `IdTipOcurrencia` int(11) NOT NULL,
  `Des_Detalle` varchar(500) NOT NULL,
  `Fec_Creacion` datetime NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Flg-Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmpagos`
--

CREATE TABLE `tmpagos` (
  `IdPagos` int(11) NOT NULL,
  `IdDetCuotaMantenimiento` int(11) NOT NULL,
  `Fec_Cancelacion` datetime DEFAULT NULL,
  `Num_MontoPagado` double DEFAULT NULL,
  `IdFormaPago` int(11) NOT NULL,
  `Num_Operacion` varchar(20) DEFAULT NULL,
  `Num_CuentaBancaria` varchar(30) DEFAULT NULL,
  `IdBanco` int(11) NOT NULL,
  `Num_Anio` int(11) DEFAULT NULL,
  `Num_Mes` int(11) DEFAULT NULL,
  `IdUsuarioVivienda` int(11) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmrecibos`
--

CREATE TABLE `tmrecibos` (
  `IdRecibo` int(11) NOT NULL,
  `Nom_Nombres` varchar(50) DEFAULT NULL,
  `Nom_Apellidos` varchar(50) DEFAULT NULL,
  `IdTipDocumento` int(11) NOT NULL,
  `Num_Documento` varchar(12) NOT NULL,
  `Fec_Creacion` datetime NOT NULL,
  `IdUsuario` int(11) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmseguimientosolicitud`
--

CREATE TABLE `tmseguimientosolicitud` (
  `IdSeguimientoSolicitud` int(11) NOT NULL,
  `IdGestionSolicitud` int(11) NOT NULL,
  `Des_Comentarios` varchar(250) DEFAULT NULL,
  `Flg_Estado` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tmvisitasfrecuentes`
--

CREATE TABLE `tmvisitasfrecuentes` (
  `IdVisitaFrecuente` int(11) NOT NULL,
  `IdTipVisita` int(11) NOT NULL,
  `IdProfesion` int(11) NOT NULL,
  `Nom_Nombres` varchar(80) DEFAULT NULL,
  `Nom_Apellidos` varchar(80) DEFAULT NULL,
  `IdTipDocumento` int(11) NOT NULL,
  `Num_Documento` varchar(15) NOT NULL,
  `Des_Celular` varchar(10) DEFAULT NULL,
  `IdPermanencia` int(11) NOT NULL,
  `Fec_RangoInicio` datetime DEFAULT NULL,
  `Fec_RangoFin` datetime DEFAULT NULL,
  `Fec_RegistroIngreso` datetime DEFAULT NULL,
  `Fec_RegistroSalida` datetime DEFAULT NULL,
  `Fec_Creacion` datetime DEFAULT NULL,
  `IdUsuarioVivienda` int(11) NOT NULL,
  `Flg_EstadoVisita` tinyint(4) NOT NULL,
  `Flg_Estado` tinyint(4) NOT NULL,
  `Flg_Cochera` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbbancos`
--
ALTER TABLE `tbbancos`
  ADD PRIMARY KEY (`IdBanco`);

--
-- Indices de la tabla `tbconcepto`
--
ALTER TABLE `tbconcepto`
  ADD PRIMARY KEY (`IdConcepto`);

--
-- Indices de la tabla `tbconfiguracionnotificacion`
--
ALTER TABLE `tbconfiguracionnotificacion`
  ADD PRIMARY KEY (`idNotificacion`),
  ADD KEY `IXFK_tbConfiguracionNotificacion_tbFrecuencia` (`IdFrecuencia`);

--
-- Indices de la tabla `tbedificio`
--
ALTER TABLE `tbedificio`
  ADD PRIMARY KEY (`IdEdificio`);

--
-- Indices de la tabla `tbfamiliares`
--
ALTER TABLE `tbfamiliares`
  ADD PRIMARY KEY (`IdFamiliar`),
  ADD KEY `IXFK_tbFamiliares_tbTipoDocumento` (`IdTipDocumento`),
  ADD KEY `IXFK_tbFamiliares_tbUsuariosVivienda` (`IdUsuarioVivienda`);

--
-- Indices de la tabla `tbformaspago`
--
ALTER TABLE `tbformaspago`
  ADD PRIMARY KEY (`IdFormaPago`);

--
-- Indices de la tabla `tbfrecuencia`
--
ALTER TABLE `tbfrecuencia`
  ADD PRIMARY KEY (`IdFrecuencia`);

--
-- Indices de la tabla `tbopcionesmenu`
--
ALTER TABLE `tbopcionesmenu`
  ADD PRIMARY KEY (`IdOpcionMenu`);

--
-- Indices de la tabla `tbperfiles`
--
ALTER TABLE `tbperfiles`
  ADD PRIMARY KEY (`IdPerfil`);

--
-- Indices de la tabla `tbperfilopcion`
--
ALTER TABLE `tbperfilopcion`
  ADD PRIMARY KEY (`IdPerfilOpcion`),
  ADD KEY `IXFK_tbPerfilOpcion_tbOpcionesMenu` (`IdOpcionMenu`),
  ADD KEY `IXFK_tbPerfilOpcion_tbPerfiles` (`IdPerfil`);

--
-- Indices de la tabla `tbpermanencia`
--
ALTER TABLE `tbpermanencia`
  ADD PRIMARY KEY (`IdPermanencia`);

--
-- Indices de la tabla `tbplantillas`
--
ALTER TABLE `tbplantillas`
  ADD PRIMARY KEY (`IdPlantilla`),
  ADD KEY `IXFK_tbPlantillas_tbTipoSolicitud` (`IdTipSolicitud`);

--
-- Indices de la tabla `tbprofesion`
--
ALTER TABLE `tbprofesion`
  ADD PRIMARY KEY (`IdProfesion`);

--
-- Indices de la tabla `tbserviciospermanentes`
--
ALTER TABLE `tbserviciospermanentes`
  ADD PRIMARY KEY (`IdServicioPermanente`),
  ADD KEY `IXFK_tbServiciosPermanentes_tbProfesion` (`IdProfesion`),
  ADD KEY `IXFK_tbServiciosPermanentes_tbTipoDocumento` (`idTipDocumento`);

--
-- Indices de la tabla `tbtipoarchivos`
--
ALTER TABLE `tbtipoarchivos`
  ADD PRIMARY KEY (`IdTipArchivo`);

--
-- Indices de la tabla `tbtipodocumento`
--
ALTER TABLE `tbtipodocumento`
  ADD PRIMARY KEY (`IdTipDocumento`);

--
-- Indices de la tabla `tbtipodocumentogestion`
--
ALTER TABLE `tbtipodocumentogestion`
  ADD PRIMARY KEY (`IdTipDocumentoGestion`);

--
-- Indices de la tabla `tbtiposolicitud`
--
ALTER TABLE `tbtiposolicitud`
  ADD PRIMARY KEY (`IdTipSolicitud`);

--
-- Indices de la tabla `tbtipousuario`
--
ALTER TABLE `tbtipousuario`
  ADD PRIMARY KEY (`IdTipUsuario`);

--
-- Indices de la tabla `tbtipovehiculo`
--
ALTER TABLE `tbtipovehiculo`
  ADD PRIMARY KEY (`IdTipVehiculo`);

--
-- Indices de la tabla `tbtipovisita`
--
ALTER TABLE `tbtipovisita`
  ADD PRIMARY KEY (`IdTipVisita`);

--
-- Indices de la tabla `tbubigeo`
--
ALTER TABLE `tbubigeo`
  ADD PRIMARY KEY (`IdUbigeo`);

--
-- Indices de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD PRIMARY KEY (`idUsuario`),
  ADD KEY `IXFK_tbUsuarios_tbPerfiles` (`IdPerfil`);

--
-- Indices de la tabla `tbusuariosvivienda`
--
ALTER TABLE `tbusuariosvivienda`
  ADD PRIMARY KEY (`IdUsuarioVivienda`),
  ADD KEY `IXFK_tbUsuariosVivienda_tbEdificio` (`IdEdificio`),
  ADD KEY `IXFK_tbUsuariosVivienda_tbTipoDocumento` (`IdTipDocumento`),
  ADD KEY `IXFK_tbUsuariosVivienda_tbTipoUsuario` (`IdTipUsuario`),
  ADD KEY `IXFK_tbUsuariosVivienda_tbUbigeo` (`IdUbigeo`),
  ADD KEY `IXFK_tbUsuariosVivienda_tbUsuarios` (`IdUsuario`);

--
-- Indices de la tabla `tbvisitascochera`
--
ALTER TABLE `tbvisitascochera`
  ADD PRIMARY KEY (`IdVisitaCochera`),
  ADD KEY `IXFK_tbVisitasCochera_tbTipoVehiculo` (`IdTipVehiculo`),
  ADD KEY `IXFK_tbVisitasCochera_tbUsuariosVivienda` (`IdUsuarioVivienda`),
  ADD KEY `IXFK_tbVisitasCochera_tmVisitasFrecuentes` (`IdVisitaFrecuente`);

--
-- Indices de la tabla `tmcargoscochera`
--
ALTER TABLE `tmcargoscochera`
  ADD PRIMARY KEY (`IdCargoCochera`),
  ADD KEY `IXFK_tmCargosCochera_tbVisitasCochera` (`IdVisitaCochera`);

--
-- Indices de la tabla `tmcuotasmantenimiento`
--
ALTER TABLE `tmcuotasmantenimiento`
  ADD PRIMARY KEY (`IdCuotaMantenimiento`);

--
-- Indices de la tabla `tmdetallecuotasmantenimiento`
--
ALTER TABLE `tmdetallecuotasmantenimiento`
  ADD PRIMARY KEY (`IdDetCuotaMantenimiento`),
  ADD KEY `IXFK_tmDetalleCuotasMantenimiento_tbUsuarios` (`IdUsuario`),
  ADD KEY `IXFK_tmDetalleCuotasMantenimiento_tmCuotasMantenimiento` (`idCuotaMantenimiento`);

--
-- Indices de la tabla `tmdetallerecibos`
--
ALTER TABLE `tmdetallerecibos`
  ADD PRIMARY KEY (`IdDetRecibo`),
  ADD KEY `IXFK_tmDetalleRecibos_tbConcepto` (`IdConcepto`),
  ADD KEY `IXFK_tmDetalleRecibos_tmRecibos` (`IdRecibo`);

--
-- Indices de la tabla `tmgestiondocumentos`
--
ALTER TABLE `tmgestiondocumentos`
  ADD PRIMARY KEY (`IdGestionDocumento`),
  ADD KEY `IXFK_tmGestionDocumentos_tbTipoArchivos` (`IdTipArchivo`),
  ADD KEY `IXFK_tmGestionDocumentos_tbTipoDocumentoGestion` (`IdTipDocumentoGestion`);

--
-- Indices de la tabla `tmgestionsolicitudes`
--
ALTER TABLE `tmgestionsolicitudes`
  ADD PRIMARY KEY (`IdGestionSolicitud`),
  ADD KEY `IXFK_tmGestionSolicitudes_tbTipoSolicitud` (`IdTipSolicitud`),
  ADD KEY `IXFK_tmGestionSolicitudes_tbUsuarios` (`IdUsuario`),
  ADD KEY `IXFK_tmGestionSolicitudes_tbUsuariosVivienda` (`IdUsuarioVivienda`);

--
-- Indices de la tabla `tmocurrencias`
--
ALTER TABLE `tmocurrencias`
  ADD PRIMARY KEY (`IdOcurrencia`),
  ADD KEY `IXFK_tmOcurrencias_tbUsuarios` (`IdUsuario`);

--
-- Indices de la tabla `tmpagos`
--
ALTER TABLE `tmpagos`
  ADD PRIMARY KEY (`IdPagos`),
  ADD KEY `IXFK_tmPagos_tbBancos` (`IdBanco`),
  ADD KEY `IXFK_tmPagos_tbFormasPago` (`IdFormaPago`),
  ADD KEY `IXFK_tmPagos_tbFormasPago_02` (`IdFormaPago`),
  ADD KEY `IXFK_tmPagos_tbUsuariosVivienda` (`IdUsuarioVivienda`),
  ADD KEY `IXFK_tmPagos_tmDetalleCuotasMantenimiento` (`IdDetCuotaMantenimiento`);

--
-- Indices de la tabla `tmrecibos`
--
ALTER TABLE `tmrecibos`
  ADD PRIMARY KEY (`IdRecibo`),
  ADD KEY `IXFK_tmRecibos_tbUsuarios` (`IdUsuario`);

--
-- Indices de la tabla `tmseguimientosolicitud`
--
ALTER TABLE `tmseguimientosolicitud`
  ADD PRIMARY KEY (`IdSeguimientoSolicitud`),
  ADD KEY `IXFK_tmSeguimientoSolicitud_tmGestionSolicitudes` (`IdGestionSolicitud`);

--
-- Indices de la tabla `tmvisitasfrecuentes`
--
ALTER TABLE `tmvisitasfrecuentes`
  ADD PRIMARY KEY (`IdVisitaFrecuente`),
  ADD KEY `IXFK_tmVisitasFrecuentes_tbPermanencia` (`IdPermanencia`),
  ADD KEY `IXFK_tmVisitasFrecuentes_tbProfesion` (`IdProfesion`),
  ADD KEY `IXFK_tmVisitasFrecuentes_tbTipoVisita` (`IdTipVisita`),
  ADD KEY `IXFK_tmVisitasFrecuentes_tbUsuariosVivienda` (`IdUsuarioVivienda`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbbancos`
--
ALTER TABLE `tbbancos`
  MODIFY `IdBanco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbconcepto`
--
ALTER TABLE `tbconcepto`
  MODIFY `IdConcepto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbconfiguracionnotificacion`
--
ALTER TABLE `tbconfiguracionnotificacion`
  MODIFY `idNotificacion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbedificio`
--
ALTER TABLE `tbedificio`
  MODIFY `IdEdificio` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbfamiliares`
--
ALTER TABLE `tbfamiliares`
  MODIFY `IdFamiliar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbformaspago`
--
ALTER TABLE `tbformaspago`
  MODIFY `IdFormaPago` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbfrecuencia`
--
ALTER TABLE `tbfrecuencia`
  MODIFY `IdFrecuencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbopcionesmenu`
--
ALTER TABLE `tbopcionesmenu`
  MODIFY `IdOpcionMenu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbperfiles`
--
ALTER TABLE `tbperfiles`
  MODIFY `IdPerfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbperfilopcion`
--
ALTER TABLE `tbperfilopcion`
  MODIFY `IdPerfilOpcion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbpermanencia`
--
ALTER TABLE `tbpermanencia`
  MODIFY `IdPermanencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbplantillas`
--
ALTER TABLE `tbplantillas`
  MODIFY `IdPlantilla` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbprofesion`
--
ALTER TABLE `tbprofesion`
  MODIFY `IdProfesion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbserviciospermanentes`
--
ALTER TABLE `tbserviciospermanentes`
  MODIFY `IdServicioPermanente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbtipoarchivos`
--
ALTER TABLE `tbtipoarchivos`
  MODIFY `IdTipArchivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbtipodocumento`
--
ALTER TABLE `tbtipodocumento`
  MODIFY `IdTipDocumento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbtipodocumentogestion`
--
ALTER TABLE `tbtipodocumentogestion`
  MODIFY `IdTipDocumentoGestion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `tbtiposolicitud`
--
ALTER TABLE `tbtiposolicitud`
  MODIFY `IdTipSolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbtipousuario`
--
ALTER TABLE `tbtipousuario`
  MODIFY `IdTipUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbtipovehiculo`
--
ALTER TABLE `tbtipovehiculo`
  MODIFY `IdTipVehiculo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbtipovisita`
--
ALTER TABLE `tbtipovisita`
  MODIFY `IdTipVisita` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbubigeo`
--
ALTER TABLE `tbubigeo`
  MODIFY `IdUbigeo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  MODIFY `idUsuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tbusuariosvivienda`
--
ALTER TABLE `tbusuariosvivienda`
  MODIFY `IdUsuarioVivienda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbvisitascochera`
--
ALTER TABLE `tbvisitascochera`
  MODIFY `IdVisitaCochera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmcargoscochera`
--
ALTER TABLE `tmcargoscochera`
  MODIFY `IdCargoCochera` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmcuotasmantenimiento`
--
ALTER TABLE `tmcuotasmantenimiento`
  MODIFY `IdCuotaMantenimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmdetallecuotasmantenimiento`
--
ALTER TABLE `tmdetallecuotasmantenimiento`
  MODIFY `IdDetCuotaMantenimiento` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmdetallerecibos`
--
ALTER TABLE `tmdetallerecibos`
  MODIFY `IdDetRecibo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmgestiondocumentos`
--
ALTER TABLE `tmgestiondocumentos`
  MODIFY `IdGestionDocumento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tmgestionsolicitudes`
--
ALTER TABLE `tmgestionsolicitudes`
  MODIFY `IdGestionSolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmocurrencias`
--
ALTER TABLE `tmocurrencias`
  MODIFY `IdOcurrencia` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmpagos`
--
ALTER TABLE `tmpagos`
  MODIFY `IdPagos` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmrecibos`
--
ALTER TABLE `tmrecibos`
  MODIFY `IdRecibo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmseguimientosolicitud`
--
ALTER TABLE `tmseguimientosolicitud`
  MODIFY `IdSeguimientoSolicitud` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tmvisitasfrecuentes`
--
ALTER TABLE `tmvisitasfrecuentes`
  MODIFY `IdVisitaFrecuente` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbconfiguracionnotificacion`
--
ALTER TABLE `tbconfiguracionnotificacion`
  ADD CONSTRAINT `FK_tbConfiguracionNotificacion_tbFrecuencia` FOREIGN KEY (`IdFrecuencia`) REFERENCES `tbfrecuencia` (`IdFrecuencia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbfamiliares`
--
ALTER TABLE `tbfamiliares`
  ADD CONSTRAINT `FK_tbFamiliares_tbTipoDocumento` FOREIGN KEY (`IdTipDocumento`) REFERENCES `tbtipodocumento` (`IdTipDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbFamiliares_tbUsuariosVivienda` FOREIGN KEY (`IdUsuarioVivienda`) REFERENCES `tbusuariosvivienda` (`IdUsuarioVivienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbperfilopcion`
--
ALTER TABLE `tbperfilopcion`
  ADD CONSTRAINT `FK_tbPerfilOpcion_tbOpcionesMenu` FOREIGN KEY (`IdOpcionMenu`) REFERENCES `tbopcionesmenu` (`IdOpcionMenu`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbPerfilOpcion_tbPerfiles` FOREIGN KEY (`IdPerfil`) REFERENCES `tbperfiles` (`IdPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbplantillas`
--
ALTER TABLE `tbplantillas`
  ADD CONSTRAINT `FK_tbPlantillas_tbTipoSolicitud` FOREIGN KEY (`IdTipSolicitud`) REFERENCES `tbtiposolicitud` (`IdTipSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbserviciospermanentes`
--
ALTER TABLE `tbserviciospermanentes`
  ADD CONSTRAINT `FK_tbServiciosPermanentes_tbProfesion` FOREIGN KEY (`IdProfesion`) REFERENCES `tbprofesion` (`IdProfesion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbServiciosPermanentes_tbTipoDocumento` FOREIGN KEY (`idTipDocumento`) REFERENCES `tbtipodocumento` (`IdTipDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbusuarios`
--
ALTER TABLE `tbusuarios`
  ADD CONSTRAINT `FK_tbUsuarios_tbPerfiles` FOREIGN KEY (`IdPerfil`) REFERENCES `tbperfiles` (`IdPerfil`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbusuariosvivienda`
--
ALTER TABLE `tbusuariosvivienda`
  ADD CONSTRAINT `FK_tbUsuariosVivienda_tbEdificio` FOREIGN KEY (`IdEdificio`) REFERENCES `tbedificio` (`IdEdificio`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbUsuariosVivienda_tbTipoDocumento` FOREIGN KEY (`IdTipDocumento`) REFERENCES `tbtipodocumento` (`IdTipDocumento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbUsuariosVivienda_tbTipoUsuario` FOREIGN KEY (`IdTipUsuario`) REFERENCES `tbtipousuario` (`IdTipUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbUsuariosVivienda_tbUbigeo` FOREIGN KEY (`IdUbigeo`) REFERENCES `tbubigeo` (`IdUbigeo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbUsuariosVivienda_tbUsuarios` FOREIGN KEY (`IdUsuario`) REFERENCES `tbusuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tbvisitascochera`
--
ALTER TABLE `tbvisitascochera`
  ADD CONSTRAINT `FK_tbVisitasCochera_tbTipoVehiculo` FOREIGN KEY (`IdTipVehiculo`) REFERENCES `tbtipovehiculo` (`IdTipVehiculo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbVisitasCochera_tbUsuariosVivienda` FOREIGN KEY (`IdUsuarioVivienda`) REFERENCES `tbusuariosvivienda` (`IdUsuarioVivienda`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tbVisitasCochera_tmVisitasFrecuentes` FOREIGN KEY (`IdVisitaFrecuente`) REFERENCES `tmvisitasfrecuentes` (`IdVisitaFrecuente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmcargoscochera`
--
ALTER TABLE `tmcargoscochera`
  ADD CONSTRAINT `FK_tmCargosCochera_tbVisitasCochera` FOREIGN KEY (`IdVisitaCochera`) REFERENCES `tbvisitascochera` (`IdVisitaCochera`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmdetallecuotasmantenimiento`
--
ALTER TABLE `tmdetallecuotasmantenimiento`
  ADD CONSTRAINT `FK_tmDetalleCuotasMantenimiento_tbUsuarios` FOREIGN KEY (`IdUsuario`) REFERENCES `tbusuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmDetalleCuotasMantenimiento_tmCuotasMantenimiento` FOREIGN KEY (`idCuotaMantenimiento`) REFERENCES `tmcuotasmantenimiento` (`IdCuotaMantenimiento`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmdetallerecibos`
--
ALTER TABLE `tmdetallerecibos`
  ADD CONSTRAINT `FK_tmDetalleRecibos_tbConcepto` FOREIGN KEY (`IdConcepto`) REFERENCES `tbconcepto` (`IdConcepto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmDetalleRecibos_tmRecibos` FOREIGN KEY (`IdRecibo`) REFERENCES `tmrecibos` (`IdRecibo`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmgestiondocumentos`
--
ALTER TABLE `tmgestiondocumentos`
  ADD CONSTRAINT `FK_tmGestionDocumentos_tbTipoArchivos` FOREIGN KEY (`IdTipArchivo`) REFERENCES `tbtipoarchivos` (`IdTipArchivo`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmGestionDocumentos_tbTipoDocumentoGestion` FOREIGN KEY (`IdTipDocumentoGestion`) REFERENCES `tbtipodocumentogestion` (`IdTipDocumentoGestion`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmgestionsolicitudes`
--
ALTER TABLE `tmgestionsolicitudes`
  ADD CONSTRAINT `FK_tmGestionSolicitudes_tbTipoSolicitud` FOREIGN KEY (`IdTipSolicitud`) REFERENCES `tbtiposolicitud` (`IdTipSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmGestionSolicitudes_tbUsuarios` FOREIGN KEY (`IdUsuario`) REFERENCES `tbusuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmGestionSolicitudes_tbUsuariosVivienda` FOREIGN KEY (`IdUsuarioVivienda`) REFERENCES `tbusuariosvivienda` (`IdUsuarioVivienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmocurrencias`
--
ALTER TABLE `tmocurrencias`
  ADD CONSTRAINT `FK_tmOcurrencias_tbUsuarios` FOREIGN KEY (`IdUsuario`) REFERENCES `tbusuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmpagos`
--
ALTER TABLE `tmpagos`
  ADD CONSTRAINT `FK_tmPagos_tbBancos` FOREIGN KEY (`IdBanco`) REFERENCES `tbbancos` (`IdBanco`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmPagos_tbFormasPago` FOREIGN KEY (`IdFormaPago`) REFERENCES `tbformaspago` (`IdFormaPago`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmPagos_tbUsuariosVivienda` FOREIGN KEY (`IdUsuarioVivienda`) REFERENCES `tbusuariosvivienda` (`IdUsuarioVivienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmrecibos`
--
ALTER TABLE `tmrecibos`
  ADD CONSTRAINT `FK_tmRecibos_tbUsuarios` FOREIGN KEY (`IdUsuario`) REFERENCES `tbusuarios` (`idUsuario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmseguimientosolicitud`
--
ALTER TABLE `tmseguimientosolicitud`
  ADD CONSTRAINT `FK_tmSeguimientoSolicitud_tmGestionSolicitudes` FOREIGN KEY (`IdGestionSolicitud`) REFERENCES `tmgestionsolicitudes` (`IdGestionSolicitud`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `tmvisitasfrecuentes`
--
ALTER TABLE `tmvisitasfrecuentes`
  ADD CONSTRAINT `FK_tmVisitasFrecuentes_tbPermanencia` FOREIGN KEY (`IdPermanencia`) REFERENCES `tbpermanencia` (`IdPermanencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmVisitasFrecuentes_tbProfesion` FOREIGN KEY (`IdProfesion`) REFERENCES `tbprofesion` (`IdProfesion`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmVisitasFrecuentes_tbTipoVisita` FOREIGN KEY (`IdTipVisita`) REFERENCES `tbtipovisita` (`IdTipVisita`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_tmVisitasFrecuentes_tbUsuariosVivienda` FOREIGN KEY (`IdUsuarioVivienda`) REFERENCES `tbusuariosvivienda` (`IdUsuarioVivienda`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
