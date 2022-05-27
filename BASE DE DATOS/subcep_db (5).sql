-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 06-05-2022 a las 18:20:07
-- Versión del servidor: 5.7.34
-- Versión de PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `subcep_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `area`
--

CREATE TABLE `area` (
  `idarea` int(11) NOT NULL,
  `iddireccion` int(11) NOT NULL,
  `area` text NOT NULL,
  `sigla` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `area`
--

INSERT INTO `area` (`idarea`, `iddireccion`, `area`, `sigla`) VALUES
(1, 1, 'GERENCIA  DE CAPACITACIÓN', 'CENCAP'),
(2, 1, 'SECRETARIA GENERAL', 'SG'),
(3, 1, 'GERENCIA NACIONAL DE RECURSOS HUMANOS', 'GNRH'),
(4, 1, 'GERENCIA NACIONAL ADMINISTRATIVA FINANCIERA', 'GNAF'),
(5, 1, 'UNIDAD DE AUDITORÍA INTERNA', 'UAI'),
(6, 2, 'GERENCIA DE SERVICIOS LEGALES', 'GSL'),
(7, 2, 'GERENCIA DE ASUNTOS ADMINISTRATIVOS Y JURIDICOS', 'GAAJ'),
(8, 3, 'GERENCIA DE INSPECCIÓN DEL NIVEL CENTRAL', 'GINC'),
(9, 4, 'GERENCIA DE AUDITORÍA AMBIENTAL', 'GAA'),
(10, 4, 'GERENCIA DE AUDITORÍA DE TECNOLOGÍAS DE INFORMACIÓN Y COMUNICACIÓN  ', 'GATIC'),
(11, 4, 'GERENCIA DE APOYO EN AUDITORÍAS DE PROYECTOS DE INVERSIÓN PÚBLICA', 'GAAPIP'),
(12, 5, 'GERENCIA DE AUDITORÍA DE EMPRESAS PÚBLICAS', 'GAEP'),
(13, 6, 'GERENCIA DE SUPERVISIÓN Y PLANIFICACIÓN', 'GSP'),
(14, 7, 'GERENCIA DE INSPECCIÓN DE GOBIERNOS MUNICIPALES Y UNIVERSIDADES', 'GIGMU'),
(15, 8, 'GERENCIA DE INSPECCIÓN DE GOBIERNOS DEPARTAMENTALES', 'GIGD'),
(16, 1, 'GERENCIA PRINCIPAL DE AUDITORÍA', 'GEPA'),
(17, 1, 'GERENCIA PRINCIPAL DE AUDITORÍA 2', 'GEPA2'),
(18, 1, 'GERENCIA DEPARTAMENTAL ORURO', 'GD-OR'),
(19, 1, 'GERENCIA DEPARTAMENTAL COCHABAMBA', 'GD-CB'),
(20, 1, 'GERENCIA DEPARTAMENTAL SANTA CRUZ', 'GD-SC'),
(21, 1, 'GERENCIA DEPARTAMENTAL CHUQUISACA', 'GD-CH'),
(22, 1, 'GERENCIA DEPARTAMENTAL TARIJA', 'GD-TJ'),
(23, 1, 'GERENCIA DEPARTAMENTAL POTOSI', 'GD-PT'),
(24, 1, 'GERENCIA DEPARTAMENTAL PANDO', 'GD-PN'),
(25, 1, 'GERENCIA DEPARTAMENTAL BENI', 'GD-BN'),
(26, 1, 'DESPACHO ', 'CGE'),
(27, 6, 'DESPACHO', 'SCG'),
(28, 2, 'DESPACHO', 'SCSL'),
(29, 4, 'DESPACHO', 'SCAT'),
(30, 5, 'DESPACHO', 'SCEP'),
(31, 7, 'DESPACHO', 'SCGMU'),
(32, 8, 'DESPACHO', 'SCGD'),
(33, 3, 'DESPACHO', 'SCNC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bitacora_estado`
--

CREATE TABLE `bitacora_estado` (
  `idbitacora_estado` int(11) NOT NULL,
  `idcorres` int(11) NOT NULL,
  `correlativo` int(11) NOT NULL,
  `idestado` int(11) NOT NULL,
  `resumen` text,
  `fecha` date DEFAULT NULL,
  `codigo_doc` varchar(45) DEFAULT NULL,
  `archivo_id` varchar(45) DEFAULT NULL,
  `hash` text,
  `idusuario` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `bitacora_estado`
--

INSERT INTO `bitacora_estado` (`idbitacora_estado`, `idcorres`, `correlativo`, `idestado`, `resumen`, `fecha`, `codigo_doc`, `archivo_id`, `hash`, `idusuario`) VALUES
(1, 2, 1, 5, 'Se esta recopilando la informacion para los informes.', '2022-05-05', '07902-DOC-1', '2022_2077', 'c65ae855d80dde891b41d677f332ddfed5023711bbcfc01f7d73dd57ae4bacfb', 10),
(2, 2, 2, 6, 'Se concluyo el Memorandum de Planificacion de Aduditoria', '2022-05-05', '', '', '', 10),
(3, 2, 3, 7, 'Se esta realizando la Primera fase de la auditoria, evaluando el control interno previo', '2022-05-05', '07902-DOC-3', '2022_2078', '9ddbe21c5835fea9bfe1a3990c8620a1f6b1c8802d9551d12dc2e39e7d135e11', 10),
(4, 2, 4, 12, 'Se Aprueba el informe y adjunto oficio APROBADO', '2022-05-05', '07902-DOC-4', '2022_2079', '4a67a89f9165f46bcdfcc2ddb6e7ec56f4bb945cddca01939a453de565ae855c', 2),
(5, 2, 5, 9, 'El control de calidad fue aprobado por el Sr. Subcontralor de Empresas Publicas', '2022-05-05', '07902-DOC-5', '2022_2080', '66b250ef5aa858182b54377498f2b21d9ca562a62af42744581b8f7e8ca3cc8d', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `idcargo` int(11) NOT NULL,
  `idarea` int(11) NOT NULL,
  `cargo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`idcargo`, `idarea`, `cargo`) VALUES
(1, 1, 'GERENTE DE CAPACITACION'),
(2, 1, 'OFICIAL DE ATENCION AL USUARIO'),
(3, 1, 'OFICIAL DE PROMOCION'),
(4, 1, 'RESPONSABLE DE CAPACITACION Y ESPECIALIZACION'),
(5, 1, 'ENCARGADO DE CAPACITACIÓN Y ESPECIALIZACIÓN'),
(6, 1, 'AUXILIAR DE CAPACITACIÓN Y ESPECIALIZACIÓN'),
(7, 1, 'RESPONSABLE DE CAPACITACION VIRTUAL '),
(8, 1, 'ENCARGADO DE DESARROLLO DE SOFTWARE EDUCATIVO'),
(9, 1, 'ENCARGADO DE MULTIMEDIA'),
(10, 1, 'RESPONSABLE DE CONTROL SOCIAL'),
(11, 1, 'ENCARGADO DE CONTROL SOCIAL'),
(12, 1, 'AUXILIAR DE CONTROL SOCIAL'),
(13, 1, 'CENCAP (RA)'),
(14, 1, 'AUXILIAR'),
(15, 26, 'CONTRALOR GENERAL DEL ESTADO'),
(18, 27, 'SUBCONTRALOR GENERAL'),
(19, 28, 'SUBCONTRALOR DE SERVICIOS LEGALES'),
(20, 29, 'SUBCONTRALOR DE AUDITORIAS TÉCNICAS'),
(21, 1, 'ASISTENTE DE GERENCIA'),
(22, 4, 'GERENTE NACIONAL ADMINISTRATIVO FINANCIERO'),
(23, 1, 'OFICIAL DE CAPACITACION - 1'),
(24, 1, 'OFICIAL DE CAPACITACION - 2'),
(25, 1, 'OFICIAL DE CAPACITACION - 3'),
(26, 1, 'OFICIAL DE CAPACITACION - 4'),
(27, 1, 'OFICIAL DE CAPACITACION - 5'),
(28, 1, 'OFICIAL DE CAPACITACION - 6'),
(29, 1, 'AUXILIAR DE CAPACITACION'),
(30, 4, 'SUBGERENTE DE FINANZAS'),
(31, 2, 'SECRETARIA GENERAL'),
(32, 4, 'RESPONSABLE DEL PROCESO DE CONTRATACIÓN DE APOYO  NACIONAL A LA PRODUCCIÓN Y EMPLEO – \r\nRPA'),
(33, 1, 'ENCARGADO DE GESTION INSTITUCIONAL'),
(34, 1, 'OFICIAL DEL CENCAP - RRHH'),
(35, 1, 'GNAF (RA)'),
(36, 1, 'LEGAL (RA)'),
(37, 4, 'OFICIAL DE CAJA'),
(38, 1, 'OFICIAL DE CAPACITACION - 7'),
(39, 1, 'OFICIAL DE CAPACITACION - 8'),
(40, 4, 'OFICIAL ADMINISTRATIVO'),
(41, 12, 'SUBCONTRALOR DE EMPRESAS PÚBLICAS'),
(42, 12, 'GERENTE DE AUDITORÍA DE EMPRESAS PÚBLICAS'),
(43, 12, 'SUPERVISOR B'),
(44, 12, 'SUPERVISOR B'),
(45, 12, 'SUPERVISOR B'),
(46, 12, 'SUPERVISOR B'),
(47, 12, 'SUPERVISOR B'),
(48, 12, 'SUPERVISOR C'),
(49, 12, 'SUPERVISOR C'),
(50, 12, 'SUPERVISOR C'),
(51, 12, 'SUPERVISOR C'),
(52, 12, 'ASISTENTE ADMINISTRATIVO'),
(53, 12, 'AUXILIAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `condicion`
--

CREATE TABLE `condicion` (
  `idcondicion` int(11) NOT NULL,
  `condicion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `condicion`
--

INSERT INTO `condicion` (`idcondicion`, `condicion`) VALUES
(1, 'ACTIVO'),
(2, 'PASIVO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `corres`
--

CREATE TABLE `corres` (
  `idcorres` int(11) NOT NULL,
  `gestion` varchar(45) NOT NULL,
  `correlativo` int(11) NOT NULL,
  `origen` varchar(45) NOT NULL,
  `idusuario` int(11) NOT NULL,
  `referencia` text NOT NULL,
  `procedencia` text NOT NULL,
  `no_control` varchar(45) NOT NULL,
  `fecha_corres` date NOT NULL,
  `anexo` varchar(45) NOT NULL,
  `idestado` int(11) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `idtipo_hojaruta` int(11) NOT NULL,
  `iddocumento_adj` int(11) DEFAULT NULL,
  `fecha_recib` date DEFAULT NULL,
  `hora_recib` varchar(35) DEFAULT NULL,
  `idubicacion_archivo` int(11) DEFAULT NULL,
  `fecha_archivo` date DEFAULT NULL,
  `usr_archivo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `corres`
--

INSERT INTO `corres` (`idcorres`, `gestion`, `correlativo`, `origen`, `idusuario`, `referencia`, `procedencia`, `no_control`, `fecha_corres`, `anexo`, `idestado`, `codigo`, `idtipo_hojaruta`, `iddocumento_adj`, `fecha_recib`, `hora_recib`, `idubicacion_archivo`, `fecha_archivo`, `usr_archivo`) VALUES
(1, '2022', 1, 'EXTERNA', 1, 'REMITE FORMATOS 1 Y 2 DEL INFORME N UAI/N 002/2021 Y 003/2021', 'EMPRESA DE APOYO A LA PRODUCCION DE ALIMENTOS - EMAPA', '08084', '2022-04-05', '17', 2, '08084', 2, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(2, '2022', 2, 'EXTERNA', 1, 'REMITE INFORME SEGUIMIENTO DE IMPLANTACION N. EBA/DAI/INF/AI-2022-009', 'EMPRESA BOLIVIANA DE ALIMENTOS Y DERIVADOS - EBA', '07902', '2022-04-01', '17', 2, '07902', 2, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(3, '2022', 3, 'EXTERNA', 1, 'REMITE INFORME DE CONTROL INTERNO E INFORMES DE AUDITORIA ', 'YACIMIENTOS DE LITIO BOLIVIANOS - YLB ', '08104', '2022-04-05', '247 (13 ANILLADOS)', 2, '08104', 6, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(4, '2022', 4, 'EXTERNA', 1, 'REMITE INFORME DE REVISION N. EBA/DA/INF/AI-2022-008', 'EMPRESA BOLIVIANA DE ALIMENTOS Y DERIVADOS - EBA', '07901', '2022-04-01', '15 ', 2, '07901', 2, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(5, '2022', 5, 'EXTERNA', 1, 'REMISION INF. DAB-UAI-SEG. NRO. 002/2022 AUDITORIA INTERNA', 'DEPOSITOS ADUANEROS BOLIVIANOS - DAB', '09193', '2022-04-14', '12', 2, '09193', 2, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(6, '2022', 6, 'EXTERNA', 1, 'SU NOTA  CGE/SCEP-253-006/2022', 'EMPRESA DE APOYO A LA PRODUCCCION DE EVENTOS  - EMAPA', '09701', '2022-04-21', '11', 2, '09701', 3, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(7, '2022', 7, 'EXTERNA', 1, 'REMITE INFORME OB/GA/INF/008/2022 INFORME DE PRONUNCIAMIENTO', 'EMPRESA PUBLICA NACIONAL ESTRATEGICA BOLIVIANA DE AVIACION', '07759', '2022-03-31', '11', 3, '07759', 2, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(8, '2022', 8, 'EXTERNA', 1, 'RESPUESTA EN ATENCION A NOTA NRO. CGE/SCEP-253-2/2022', 'EMPRESA MUNICIPAL DE ASFALTO Y VIAS \"EMAVIAS\"', '09096', '2022-04-14', '2', 2, '09096', 2, 1, '1111-11-11', ' ', NULL, NULL, NULL),
(9, '2022', 9, 'EXTERNA', 1, 'REMISION INF. DAB-UAI-SEG NRO. 004/2022 AUDITORIA INTERNA.', 'DEPOSITOS ADUANEROS BOLIVIANOS', '09195', '2022-04-14', '7/1 CD', 2, '09195', 7, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(10, '2022', 10, 'EXTERNA', 1, 'REMISION REGLAMENTO DE CONTROL DJBR EN ENTIDADES PUBLICAS', 'ADMINISTRACION DE SERVICIOS PORTUALRIOS', '07534', '2022-03-30', '10', 4, '07534', 7, 3, '1111-11-11', ' ', 1, '2022-05-04', 1),
(11, '2022', 11, 'EXTERNA', 1, 'REMITE INFORME UAI/CI/008-2022 RESULTADOS DE LA REVISION ANUAL', 'EMPRESA MUNICIPAL DE AGUA POTABLE Y ALCANTARILLADO SACABA ', '07183', '2022-03-28', '1 ENG', 2, '07183', 7, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(12, '2022', 12, 'EXTERNA', 1, 'REMITE INFORME DE CONTROL INTERNO ', 'EMPRESA MUNICIPAL DE AREAS VERDES, PARQUES Y FORESTACION EMAVERDE.', '07491', '2022-03-30', '73 + 1 CD', 2, '07491', 7, 3, '1111-11-11', ' ', NULL, NULL, NULL),
(13, '2022', 1, 'INTERNA', 1, 'REFERENCIA DE PRUEBA INTERNA ', 'PPROCEDENCIA', '1', '2022-05-06', '4.-', 1, 'SCEP-INT-1/2022', 9, 3, '1111-11-11', ' ', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamento`
--

CREATE TABLE `departamento` (
  `iddepartamento` int(11) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  `sigla` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamento`
--

INSERT INTO `departamento` (`iddepartamento`, `departamento`, `sigla`) VALUES
(1, 'CHUQUISACA', 'CH'),
(2, 'LA PAZ', 'LP'),
(3, 'ORURO', 'OR'),
(4, 'POTOSI', 'PT'),
(5, 'COCHABAMBA', 'CBBA'),
(6, 'TARIJA', 'TA'),
(7, 'PANDO', 'PN'),
(8, 'BENI', 'BN'),
(9, 'SANTA CRUZ', 'SC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `deriva_corres`
--

CREATE TABLE `deriva_corres` (
  `idderiva_corres` int(11) NOT NULL,
  `idcorres` int(11) NOT NULL,
  `idusuarioo` int(11) NOT NULL,
  `idusuariod` int(11) NOT NULL,
  `idinstruccion` int(11) DEFAULT NULL,
  `comentario` text,
  `fecha_deriva` date DEFAULT NULL,
  `fecha_recibe` date DEFAULT NULL,
  `derivada` varchar(45) DEFAULT NULL,
  `recibida` varchar(45) DEFAULT NULL,
  `hora_recibe` varchar(35) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `deriva_corres`
--

INSERT INTO `deriva_corres` (`idderiva_corres`, `idcorres`, `idusuarioo`, `idusuariod`, `idinstruccion`, `comentario`, `fecha_deriva`, `fecha_recibe`, `derivada`, `recibida`, `hora_recibe`) VALUES
(1, 11, 1, 10, 9, 'Su Atencion.', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(2, 1, 1, 5, 9, 'Su atencion', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(3, 3, 1, 4, 9, 'Su atencion', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(4, 4, 1, 10, 9, 'Su atenciuon', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(5, 5, 1, 6, 9, 'Su atencion', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(6, 6, 1, 5, 9, 'Su atencion.', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(7, 8, 1, 3, 9, 'Su atencion', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(8, 7, 1, 10, 9, 'Su Atencion', '2022-04-29', '2022-05-04', 'SI', 'SI', '14:43'),
(9, 9, 1, 6, 9, 'Su Atencion', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(10, 10, 1, 10, 9, 'Su Atencion', '2022-04-29', '2022-05-04', 'SI', 'SI', '15:09'),
(11, 12, 1, 4, 9, 'Su Atencion.', '2022-04-29', '1111-11-11', 'SI', 'NO', NULL),
(12, 2, 1, 10, 9, 'Su Atencion', '2022-04-29', '2022-05-03', 'SI', 'SI', '08:33'),
(13, 7, 10, 1, 9, 'Su Atención.', '2022-05-04', '2022-05-04', 'NO', 'NO', '14:49'),
(14, 10, 10, 1, 9, 'Su Atencion.', '2022-05-04', '2022-05-04', 'NO', 'NO', '15:10'),
(15, 2, 10, 2, 9, 'Su atencion Dr.', '2022-05-05', '2022-05-05', 'SI', 'SI', '15:05'),
(16, 2, 2, 10, 9, 'Su atencion ', '2022-05-05', '2022-05-05', 'NO', 'SI', '15:20');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direccion`
--

CREATE TABLE `direccion` (
  `iddireccion` int(11) NOT NULL,
  `direccion` text NOT NULL,
  `sigla` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `direccion`
--

INSERT INTO `direccion` (`iddireccion`, `direccion`, `sigla`) VALUES
(1, 'CONTRALORIA GENERAL DEL ESTADO', 'CGE'),
(2, 'SUBCONTRALORIA DE SERVICIOS LEGALES', 'SCSL'),
(3, 'SUBCONTRALORÍA DEL NIVEL CENTRAL', 'SCNC'),
(4, 'SUBCONTRALORÍA DE AUDITORÍAS TÉCNICAS', 'SCAT'),
(5, 'SUBCONTRALORÍA DE EMPRESAS PUBLICAS', 'SCEP'),
(6, 'SUBCONTRALORÍA  GENERAL', 'SCG'),
(7, 'SUBCONTRALORÍA DE GOBIERNOS MUNICIPALES Y UNIVERSIDADES', 'SCGMU'),
(8, 'SUBCONTRALORÍA DE GOBIERNOS DEPARTAMENTALES', 'SCGD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento_adj`
--

CREATE TABLE `documento_adj` (
  `iddocumento_adj` int(11) NOT NULL,
  `documento_adj` varchar(40) NOT NULL,
  `descripcion` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `documento_adj`
--

INSERT INTO `documento_adj` (`iddocumento_adj`, `documento_adj`, `descripcion`) VALUES
(1, 'INF-UAI-CONF', 'INFORME DE AUDITORIA DE CONFIABILIDAD'),
(2, 'OTRO', 'OTRO TIPO DE DOCUMENTO'),
(3, ' ', 'SIN ADJUNTO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `idestado` int(11) NOT NULL,
  `estado` text NOT NULL,
  `tipo_estado` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`idestado`, `estado`, `tipo_estado`) VALUES
(1, 'REGISTRADA', 'PRIMARIO'),
(2, 'INICIADA', 'PRIMARIO'),
(3, 'CONCLUIDA', 'PRIMARIO'),
(4, 'ARCHIVADA', 'PRIMARIO'),
(5, 'RECOLECCION DE INFORMACIÓN', 'DINAMICO'),
(6, 'PLANIFICACIÓN MPA', 'DINAMICO'),
(7, 'EJECUCION', 'DINAMICO'),
(8, 'ELABORACIÓN DE INFORMACIÓN', 'DINAMICO'),
(9, 'CONTROL DE CALIDAD', 'DINAMICO'),
(10, 'COMUNICACION INTERNA DE REVISIÓN', 'DINAMICO'),
(11, 'AJUSTA INFORMACIÓN O MPA', 'DINAMICO'),
(12, 'REVISION GERENTE', 'DINAMICO'),
(13, 'APROBADO', 'DINAMICO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historico_hr`
--

CREATE TABLE `historico_hr` (
  `idhistorico_hr` int(11) NOT NULL,
  `correlativo` varchar(45) DEFAULT NULL,
  `supervisor` text,
  `tipo_trabajo` text,
  `empresa` varchar(45) DEFAULT NULL,
  `hoja_ruta` varchar(45) DEFAULT NULL,
  `fecha_hr` varchar(45) DEFAULT NULL,
  `fecha_asig` varchar(45) DEFAULT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `informe` varchar(100) DEFAULT NULL,
  `fecha_inf` varchar(45) DEFAULT NULL,
  `nota` varchar(45) DEFAULT NULL,
  `fecha_emision` varchar(45) DEFAULT NULL,
  `aclaraciones` text,
  `tipo` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `historico_hr`
--

INSERT INTO `historico_hr` (`idhistorico_hr`, `correlativo`, `supervisor`, `tipo_trabajo`, `empresa`, `hoja_ruta`, `fecha_hr`, `fecha_asig`, `estado`, `informe`, `fecha_inf`, `nota`, `fecha_emision`, `aclaraciones`, `tipo`) VALUES
(1, '1', 'WILDER HERRERA', 'POA 2020', 'AAPOS', '25037', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-460/2019', '', 'CGE/SCEP-1235/2019', '11/10/19', '', 'POA'),
(2, '2', 'ANDRES ORTEGA', 'POA 2020', 'ASPB', '26664', '18/10/19', '21/10/19', 'P', '', '', '', '', '', 'POA'),
(3, '3', 'SONIA VELASQUEZ', 'POA 2020', 'BOLTUR', '24990', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-455/2019', '', 'CGE/SCEP-1226/2019', '11/10/19', '', 'POA'),
(4, '4', 'DELFIN PONCE', 'POA 2020', 'COFADENA', '24756', '27/9/19', '30/9/19', 'C', 'CGE/SCEP/INF-439/2019', '', 'CGE/SCEP-1212/2019', '2/10/19', '', 'POA'),
(5, '5', 'MELISSA VARGAS', 'POA 2020', 'COMIBOL', '24805', '30/9/19', '30/9/19', 'C', 'CGE/SCEP/INF-458/2019', '', 'CGE/SCEP-1212/2019', '4/10/19', '', 'POA'),
(6, '6', 'ELENA MALLON', 'POA 2020', 'EASBA', '24941', '30/9/19', '1/10/19', 'C', '', '', 'CGE/SCEP-1212/2019', '4/10/19', '', 'POA'),
(7, '7', 'FREDDY CRUZ', 'POA 2020', 'EBA', '25409', '3/10/19', '4/10/19', 'C', 'CGE/SCEP/INF-464/2019', '', 'CGE/SCEP-1238/2019', '7/10/19', '', 'POA'),
(8, '8', 'WILDER HERRERA', 'POA 2020', 'EBC', '24470', '25/9/19', '26/9/19', 'C', 'CGE/SCEP/INF-473/2019', '', 'CGE/SCEP-1269/2019', '7/10/19', '', 'POA'),
(9, '9', 'FREDDY CRUZ', 'POA 2020', 'EDITORIAL', '24896', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-457/2019', '', 'CGE/SCEP-1220/2019', '4/10/19', '', 'POA'),
(10, '10', 'SONIA VELASQUEZ', 'POA 2020', 'ELAPAS', '24854', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-454/2019', '', 'CGE/SCEP-1225/2019', '11/10/19', '', 'POA'),
(11, '11', 'FREDDY CRUZ', 'POA 2020', 'EMAPA', '24995', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-446/2019', '', 'CGE/SCEP-1216/2019', '11/10/19', '', 'POA'),
(12, '12', 'ANDRES ORTEGA', 'POA 2020', 'EMAPAS', '24788', '30/9/19', '30/9/19', 'C', 'CGE/SCEP/INF-449/2019', '', 'CGE/SCEP-1221/2019', '3/10/19', '', 'POA'),
(13, '13', 'WILDER HERRERA', 'POA 2020', 'EMAVERDE', '24782', '30/9/19', '30/9/19', 'C', 'CGE/SCEP/INF-445/2019', '', 'CGE/SCEP-1210/2019', '4/10/19', '', 'POA'),
(14, '14', 'WILDER HERRERA', 'POA 2020', 'EMAVIAS', '25816', '08/10/209', '9/10/19', 'C', 'CGE/SCEP/INF-478/2019', '', 'CGE/SCEP-1270/2019', '17/10/19', '', 'POA'),
(15, '15', 'ANDRES ORTEGA', 'POA 2020', 'EMAVRA', '25221', '02/10/209', '3/10/19', 'C', '149/2020', '', '325/2020', '9/6/20', '', 'POA'),
(16, '16', 'EVA COLQUE', 'POA 2020', 'EMSA', '24699', '27/9/19', '2/10/19', 'C', 'CGE/SCEP/INF-463/2019', '', 'CGE/SCEP-1241/2019', '8/10/19', '', 'POA'),
(17, '17', 'ELENA MALLON', 'POA 2020', 'EMTAGAS', '24808', '30/9/19', '30/9/19', 'C', '006/2020', '', '123/2020', '10/2/20', '', 'POA'),
(18, '18', 'DELFIN PONCE', 'POA 2020', 'ENDE', '25228', '02/10/209', '2/10/19', 'C', 'CGE/SCEP/INF-456/2019', '', 'CGE/SCEP-1229/2019', '4/10/19', '', 'POA'),
(19, '19', 'DELFIN PONCE', 'POA 2020', 'ENFE', '24800', '30/9/19', '30/9/19', 'C', 'CGE/SCEP/INF-447/2019', '', 'CGE/SCEP-1217/2019', '11/10/19', '', 'POA'),
(20, '20', 'EDDY MARQUEZ', 'POA 2020', 'EPDEOR', '25705', '1/10/19', '8/10/19', 'C', 'CGE/SCEP/INF-474/2019', '', 'CGE/SCEP-1265/2019', '9/10/19', '', 'POA'),
(21, '21', 'ANDRES ORTEGA', 'POA 2020', 'GERES', '25108', '1/10/19', '2/10/19', 'C', '150/2020', '', '326/2020', '9/6/20', '', 'POA'),
(22, '22', 'EDDY MARQUEZ', 'POA 2020', 'GESTORA', '24656', '27/9/19', '30/9/19', 'C', 'CGE/SCEP/INF-452/2019', '', 'CGE/SCEP-1242/2019', '11/10/19', '', 'POA'),
(23, '23', 'DELFIN PONCE', 'POA 2020', 'MI TELEFERICO', '24913', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-440/2019', '', 'CGE/SCEP-1207/2019', '2/10/19', '', 'POA'),
(24, '24', 'SONIA VELASQUEZ', 'POA 2020', 'MISICUNI', '24791', '30/9/19', '30/9/19', 'C', '', '', 'CGE/SCEP/1204/2019', '1/10/19', '', 'POA'),
(25, '25', 'FREDDY CRUZ', 'POA 2020', 'MUTUN', '24898', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-448/2019', '', 'CGE/SCEP-1224/2019', '4/10/19', '', 'POA'),
(26, '26', 'EVA COLQUE', 'POA 2020', 'QUIPUS', '25279', '2/10/19', '3/10/19', 'C', 'CGE/SCEP/INF-462/2019', '', 'CGE/SCEP-1239/2019', '7/10/19', '', 'POA'),
(27, '27', 'ANDRES ORTEGA', 'POA 2020', 'SAMAPA', '24947', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-495/2019', '', 'CGE/SCEP-1299/2019', '22/10/19', '', 'POA'),
(28, '28', 'POA 2020', 'POA 2020', 'SEDEM', '25005', '30/9/19', '2/10/19', 'C', 'CGE/SCEP/INF-505/2019', '', 'CGE/SCEP-1376/2019', '5/11/19', '', 'POA'),
(29, '29', 'SONIA VELASQUEZ', 'POA 2020', 'SELA', '25334', '3/10/19', '3/10/19', 'C', 'CGE/SCEP/INF-485/2019', '', 'CGE/SCEP-1289/2019', '22/10/19', '', 'POA'),
(30, '30', 'MELISSA VARGAS', 'POA 2020', 'SEMAPA', '25016', '30/9/19', '1/10/19', 'P', '', '', '', '', '', 'POA'),
(31, '31', 'EVA COLQUE', 'POA 2020', 'SENATEX', '24855', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-453/2019', '', 'CGE/SCEP-1233/2019', '4/10/19', '', 'POA'),
(32, '32', 'ELENA MALLON', 'POA 2020', 'SETAR', '24809-27750/19', '30/9/19', '30/9/19', 'C', '008/2020', '', '125/2020', '11/2/20', '', 'POA'),
(33, '33', 'EDDY MARQUEZ', 'POA 2020', 'TAB', '25006', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-450/2019', '', 'CGE/SCEP-1231/2019', '3/10/19', '', 'POA'),
(34, '34', 'WILDER HERRERA', 'POA 2020', 'VINTO', '24786', '30/9/19', '30/9/19', 'C', 'CGE/SCEP/INF-461/2019', '', 'CGE/SCEP-1263/2019', '10/10/19', '', 'POA'),
(35, '35', 'EDDY MARQUEZ', 'POA 2020', 'YLB', '24886', '30/9/19', '1/10/19', 'C', 'CGE/SCEP/INF-451/2019', '', 'CGE/SCEP-1232/2019', '11/10/19', '', 'POA'),
(36, '36', 'EDDY MARQUEZ', 'POA 2020 AJUSTE', 'YLB ', '26693', '18/10/19', '21/10/19', 'P', '', '', '', '', '', 'POA'),
(37, '37', 'ELENA MALLON', 'POA 2020', 'YPFB', '24997', '30/9/19', '1/10/19', 'P', '', '', '', '', '', 'POA'),
(38, '38', 'DELFIN PONCE', 'POA 2020 AJUSTADO', 'ENDE', '27445', '30/10/19', '31/10/19', 'C', '', '', '', '', 'HRC ARCHIVADA SUJETO A EVALUACION', 'POA'),
(39, '39', 'DELFIN PONCE', 'POA 2020', 'DAB', '25041', '30/9/19', '31/10/19', 'C', 'CGE/SCEP/INF-514/2019', '', 'CGE/SCEP-1375/2019', '4/11/19', '', 'POA'),
(40, '40', 'FREDDY CRUZ', 'POA ', 'EBA', '30875', '9/12/19', '10/12/19', 'C', '', '', 'CGE/SCEO-1542/2019', '11/12/19', '', 'POA'),
(41, '41', 'DELFIN PONCE', 'POA 2020', 'OFEP', '32518', '27/12/19', '31/12/19', 'C', '', '', '', '', '* SE ARCHIVA HR ', 'POA'),
(42, '42', 'DELFIN PONCE', 'POA 2020', 'BOLIVIA TV', '32924', '31/12/19', '2/1/20', 'C', 'CGE/SCEP/INF-009/2020', '', 'CGE/SCEP-129/2020', '12/2/20', '', 'POA'),
(43, '43', 'FREDDY CRUZ', 'POA 2020', 'ABE', '3092', '4/2/20', '17/2/20', 'C', '50/2020', '', '256/2020', '3/3/20', '', 'POA'),
(44, '44', 'SONIA VELASQUEZ', 'POA 2020', 'BOA', '4318', '18/2/20', '19/2/20', 'C', '48/2020', '', '212/2020', '28/2/20', '', 'POA'),
(45, '45', 'EUSTAQIUIO HUAYTA', 'REPROGRAMADO POA 2020', 'BOLIVIA TV', '8982', '1/7/20', '2/7/20', 'C', '266/2020', '', '510/2020', '23/7/20', '', 'POA'),
(46, '46', 'EUSTAQIUIO HUAYTA', 'REPROGRAMADO POA 2020', 'BOLTUR', '8949', '30/6/20', '2/7/20', 'P', '', '', '', '', '', 'POA'),
(47, '47', 'ELENA MALLON', 'REPROGRAMACION POA 2020', 'YPFB', '8957', '30/6/20', '3/7/20', 'P', '', '', '', '', '', 'POA'),
(48, '48', 'FREDDY CRUZ', 'REFORMULACION 2020', 'EMAPA', '8964', '30/6/20', '3/7/20', 'P', '', '', '', '', '', 'POA'),
(49, '49', 'GUSTAVO RAMIREZ', 'POA REFORMULADO 2020', 'EMAVERDE', '8935', '30/6/20', '1/7/20', 'P', '', '', '', '', '', 'POA'),
(50, '50', 'ANDRES ORTEGA', 'POA REAJUSTADO DE LA UAI', 'EMAPAS', '1892', '21/1/20', '23/1/20', 'C', '148/2020', '', '324/2020', '9/6/20', '', 'POA'),
(51, '51', 'ELENA MALLON', 'POA REFORMULADO 2020', 'EASBA', '10435', '27/7/20', '29/7/20', 'C', '426/2020', '', '799/2020', '6/11/20', '', 'POA'),
(52, '1', 'ANDRES ORTEGA', 'INF/AUDITOR INTERNO  AIC 001/2020 Y EE.FF.', 'AAPOS', '5459', '2/3/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(53, '2', 'FREDDY CRUZ', 'INF/AUDITORI INTERNO ABE-AI 01/2020 Y EEFF.', 'ABE', '5112', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(54, '3', 'FREDDY CRUZ', 'INFORME DE CONTROL INTERNO AI 02/2020', 'ABE', '', '', '', '', '', '', '', '', '', 'CONF'),
(55, '4', 'FREDDY CRUZ', 'INFORME DE CONTROL INTERNO SOBRE EL EXAMEN A LA CONFIABILIDAD EE.FF.2019 INF. ASP-B/UAI-INF-CI-002/2020', 'ASPB', '4857', '27/2/20', '28/2/20', '', '', '', '', '', '', 'CONF'),
(56, '5', 'SONIA VELASQUEZ', 'INF/AUDITOR INTERNO OB.GA.INF.001/2020 Y EE.FF.', 'BOA', '5236', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(57, '6', 'EUSTAQUIO HUAYTA', 'INFORME DE CONTROL INTERO EMERGENTE DE LA CONFIB. EE.FF.2019 INF  BOLIVIA TV-UAI N? 002/2020', 'BOLIVIA TV', '9941', '15/7/20', '21/7/20', '', '', '', '', '', '', 'CONF'),
(58, '7', 'DELFIN PONCE', 'INF/AUDITOR INTERNO UAI. INF. N? 002/2020 Y  EE.FF.', 'COFADENA', '5126', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(59, '8', 'DELFIN PONCE', 'INFORME DE CONTROL INTERNO ', 'COFADENA', '8900', '30/6/20', '2/7/20', '', '', '', '', '', '', 'CONF'),
(60, '9', 'WILDER HERRERA', 'INF/AUITOR INTERNO DA-3-002/2020 Y EE.FF.', 'COMIBOL', '5079', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(61, '10', 'DELFIN PONCE', 'INF/AUDITOR INTERNO INF DAB/UAI N? 001/2020 Y EEFF', 'DAB', '5084', '28/2/20', '28/2/20', '', '', '', '', '', '', 'CONF'),
(62, '11', 'ELENA MALLON', 'INF/AUDITOR INTERNO  EASBA-UAI-INF-N? 005/2019 Y EE.FF.', 'EASBA', '5132', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(63, '12', 'FREDDY CRUZ', 'INF/AUDITOR INTERNO  EBA/UAI/INF-AI/2020-004 Y EE.FF.', 'EBA', '5314', '26/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(64, '13', 'FREDDY CRUZ', 'INF/AUDITOR INTERNO EBA/DAI/INF-AI/2020-04', 'EBA', '5300', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(65, '14', 'WILDER HERRERA', 'INF/AUDITOR INTERNO INF/GGE/AAI/2020-0003', 'EBC', '5182', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(66, '15', 'ANDRES ORTEGA', 'INF/AUDITOR INTERNO EBIH.INF.UAI.N?02/2020 Y EEFF', 'EBIH', '5041', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(67, '16', 'ANDRES ORTEGA', 'REMITE INFORME DE CONTROL INTERNO EBIH INF-UAI-03/2020', 'EBIIH', '8019', '12/6/20', '15/6/20', '', '', '', '', '', '', 'CONF'),
(68, '17', 'FREDDY CRUZ', 'INF/AUITOR INTERNO EDITORIAL/UAI/INF/002/2019 Y EE.FF.', 'EDITORIAL', '5307', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(69, '18', 'ELENA MALLON', 'INF/AUDITOR INTERNO N? I.A.I. 02/20  Y EE. FF', 'ELAPAS', '5423', '2/3/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(70, '19', 'EVA COLQUE', 'INF/AUDITOR INTERNO UAI-N?-004/2020 Y EE.FF', 'EMAPA', '5194', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(71, '20', 'FREDDY CRUZ', 'INF/AUDITOR INTERNO  UAI-004/2020 Y EE.FF', 'EMAPAS', '5352', '8/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(72, '21', 'GUSTAVO RAMIREZ', 'REMITE INF CONFIABILIDAD DE REG Y EE. FF. 2019', 'EMAVERDE', '5324', '28/2/20', '3/6/20', '', '', '', '', '', '', 'CONF'),
(73, '22', 'GUSTAVO RAMIREZ', 'REM. ESTADOS FINANCIEROS GESTION 2019', 'EMAVERDE', '5087', '28/2/20', '3/6/20', '', '', '', '', '', '', 'CONF'),
(74, '23', 'GUSTAVO RAMIREZ', 'REM. CONTROL INTERNO AUD DE CONFIABILIDAD GESTION 2019', 'EMAVERDE', '5325', '28/2/20', '3/6/20', '', '', '', '', '', '', 'CONF'),
(75, '24', 'WILDER HERRERA', 'INF/AUDITOR INTERNO EMAVIAS-UAI-002/2020 Y EE.FF.|', 'EMAVIAS', '5090', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(76, '25', 'WILDER HERRERA', 'INF/AUDITOR INTERNO INF.UAI..N? 01/20', 'EMAVRA', '5668', '30/3/20', '20/3/20', '', '', '', '', '', '', 'CONF'),
(77, '26', 'WILDER HERRERA', 'INF. CONTROL INTERNO EMAVRA/UAI/24/2020', 'EMAVRA', '8700', '25/6/20', '29/6/20', '', '', '', '', '', '', 'CONF'),
(78, '27', 'EVA COLQUE', 'INF/AUDITOR INTERNO INF.UAI.N? 01/2020 Y EE.FF', 'EMSA', '5022', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(79, '28', 'GUSTAVO RAMIREZ', 'INFORME DE AUDITORIA DE CONFIABILIDADAUD.INT.IAC. N?01/2020', 'EMTAGAS', '4937', '27/2/20', '28/2/20', '', '', '', '', '', '', 'CONF'),
(80, '29', 'GUSTAVO RAMIREZ', 'INF/AUDITOR INTERNO AUD.INT.IAC. N? 01/2020 Y EE.FF.', 'EMTAGAS', '5437', '2/3/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(81, '30', 'DELFIN PONCE', 'INF/AUDITOR INTERNO  INF-UAI-N? 01/2020', 'ENDE', '5151', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(82, '31', 'EDDY MARQUEZ', 'INF AUDITOR INTERNO  EPDEOR/AUDIN/CONF/N? 001-2020 Y EE.FF.', 'EPDEOR', '5412', '2/3/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(83, '32', 'EDDY MARQUEZ', 'REMITE EPDEOR/AUDIN/CONF/N? 002/2020 CONTROL INTERNO', 'EPDEOR', '10246', '22/7/20', '23/7/20', '', '', '', '', '', '', 'CONF'),
(84, '33', 'EVA COLQUE', 'INF/AUDITOR INTERO  INF UAI N| 004/2020 Y EE.FF', 'GERES', '5649', '3/3/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(85, '34', 'EDDY MARQUEZ', 'INF/AUDITOR INTERNO N? GP/AI/CONF/OP/001/2020 Y EE. FF.', 'GESTORA', '', '', '', '', '', '', '', '', '', 'CONF'),
(86, '35', 'ACEFALO', 'REM INFORME DE CONFIABILIDAD/ INFORME DE CONTROL INTERNO', 'MI TELEFERICO', '7293', '20/3/20', '', '', '', '', '', '', '', 'CONF'),
(87, '36', 'GUSTAVO RAMIREZ', 'INFORME DEL AUDITOR INTERNO EM/UAI/001/2020', 'MISICUNI', '4451', '19/2/20', '20/2/20', '', '', '', '', '', '', 'CONF'),
(88, '37', 'ANDRES ORTEGA', 'INF/AUDITOR INTERNO  ESM/UAI/I N? 001/2020 Y EE.FF.', 'MUTUN', '4997', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(89, '38', 'ANDRES ORTEGA', 'REMITE PT DE AUD. DE CONFABILIDAD DE REGISTROS DE EE.FF. AL 31 DE DIOC. 2019', 'MUTUN', '8032', '12/6/20', '15/6/20', '', '', '', '', '', '', 'CONF'),
(90, '39', 'DELFIN PONCE', 'INF/AUDITOR INTERNO  INF/AI N? 0002/2020 Y EE.FF.', 'OFEP', '5253', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(91, '40', 'DELFIN PONCE', 'INFORME DE CONTROL INTERNO DE LA CONF. EE.FF. 2019 ', 'OFEP', '8199', '16/6/20', '18/6/20', '', '', '', '', '', '', 'CONF'),
(92, '41', 'ANDRES ORTEGA', 'INF/AUDITOR INTERNO QUIPUS/GG/INF N? 0008/2020 Y EE. FF.', 'QUIPUS', '5283', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(93, '42', 'EDDY MARQUEZ', 'INF/AUDITOR INTERNO SEDEM.INF.AI.02/2020 Y EE.FF.', 'SEDEM', '5316', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(94, '43', 'ELENA MALLON', 'INF/AUDITOR INTERNO INF. N? SO/IAI/B-04/2020 YEE.FF.', 'SELA', '5031', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(95, '44', 'EVA COLQUE', 'INF/AUDITOR INTERNO SENTEX/INF/UAI-003/2020 Y EE.FF.', 'SENATEX', '5070', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(96, '45', 'GUSTAVO RAMIREZ', 'INFORME DE AUDITOR INTERNO SOBRE LA CONFIABILIDAD DE LOS EE.FF. 2019 Y 2018 INF.DAI. N? 01/2020', 'SETAR', '4872', '27/2/20', '28/2/20', '', '', '', '', '', '', 'CONF'),
(97, '46', 'EDDY MARQUEZ', 'INF/AUDITORINTERRNO DAI./INF.N? 002/2020', 'TAB', '5269', '28/2/20', '10/03/2020}', '', '', '', '', '', '', 'CONF'),
(98, '47', 'EDDY MARQUEZ', 'INFORME CONTROL INTERNO DAI/INF. N? 003/2020', 'TAB', '7524', '6/6/20', '8/6/20', '', '', '', '', '', '', 'CONF'),
(99, '48', 'WILDER HERRERA', 'INF/AUDITOR INTERNO  EMV/UAI/CONF/N? 02/2020', 'VINTO', '5793', '4/3/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(100, '49', 'ANDRES ORTEGA', 'INF/AUDITOR INTERNO  YACANA-UAI-IT-N?0002/20 Y EE.FF.', 'YACANA', '5545', '3/3/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(101, '50', 'ANDRES ORTEGA', 'INF YACANA-UAI-02/22020', 'YACANA', '9748', '13/7/20', '13/7/20', '', '', '', '', '', '', 'CONF'),
(102, '51', 'ELENA MALLON', 'INF/AUDITOR INTERNO  DAIC-D-01/2020 Y EE.FF', 'YPFB', '5171', '28/2/20', '10/3/20', '', '', '', '', '', '', 'CONF'),
(103, '1', 'DELFIN PONCE', 'N? INF/UAI/003/2020', 'COFADENA', '6526', '10/3/20', '13/3/20', '', '', '', '', '', '', 'DJBR'),
(104, '2', 'EDDY MARQUEZ', 'INF. N? GP/AI/OTROS CI N? 01/2020', 'GESTORA', '6864', '13/3/20', '', '', '', '', '', '', '', 'DJBR'),
(105, '3', 'EDDY MARQUEZ', 'EPDEOR/AUDIN/REV-001/2020', 'EPDEOR', '8084', '15/6/20', '16/6/20', '', '', '', '', '', '', 'DJBR'),
(106, '2', 'ELENA MALLON', 'N? SO/IAI/B-02/2020', 'SELA', '4862', '27/2/20', '', '', '', '', '', '', '', 'DJBR'),
(107, '3', 'ELENA MALLON', 'N? EASBA-UAI-INF-N? 002/2020', 'EASBA', '5133', '28/2/20', '', '', '', '', '', '', '', 'DJBR'),
(108, '4', 'FREDDY CRUZ', 'N? EBA/DAI/INF-AI/2020-006', 'EBA', '5301', '28/2/20', '3/9/20', 'C', '410/2020', '', '', '', '', 'DJBR'),
(109, '3', 'FREDDY CRUZ', 'INF. N? ABE-AI V-02/2020', 'ABE', '6989', '16/3/20', '', '', '', '', '', '', '', 'DJBR'),
(110, '4', 'GUSTAVO RAMIREZ', 'N?AI.N? 03/2020', 'SETAR', '5027', '28/2/20', '', '', '', '', '', '', '', 'DJBR'),
(111, '5', 'SONIA VELASQUEZ', '', 'BOLIVIA TV', '32874', '', '', '', '', '', '', '', '', 'DJBR'),
(112, '4', 'WILDER HERRERA', 'N? INF/GGE/AAI/2020-004', 'EBC', '5181', '28/2/20', '', '', '', '', '', '', '', 'DJBR'),
(113, '5', 'DELFIN PONCE', 'UAI-6/3-20', 'ENDE', '8585', '23/6/20', '29/6/20', 'C', '221/2020', '26/6/20', '482/2020', '3/7/20', '', 'DJBR'),
(114, '6', 'WILDER HERRERA', 'EMAVRA/UAI/25/2020', 'EMAVRA', '8701', '25/6/20', '39/06/2020', '', '', '', '', '', '', 'DJBR'),
(115, '5', 'EDDY MARQUEZ', 'REMITE INFORME  DAI. INF-008/2020 DJBR', 'TAB', '9034', '2/7/20', '4/7/20', '', '', '', '', '', '', 'DJBR'),
(116, '6', 'FREDDY CRUZ', 'EVALUACI?N A LOS PRNUNCIAMIENTOS DBJBR', 'EDITORIAL', '5940', '5/3/20', '4/6/20', 'C', '178/2020', '8/6/20', '387/2020', '17/6/20', '', 'DJBR'),
(117, '7', 'DELFIN PONCE', 'INF/A-004/2020 OFEP/2020-00606', 'OFEP', '8198', '16/6/20', '24/6/20', 'C', '120/2020', '25/6/20', '484/2020', '3/7/20', '', 'DJBR'),
(118, '6', 'EDDY MARQUEZ', 'YLB-AUD-INF-SEG 007/2020', 'YLB', '18031', '30/10/20', '30/10/20', '', '', '', '', '', '', 'DJBR'),
(119, '7', 'EDDY MARQUEZ', 'YLB-UD-INF-DJ 010/2020', 'YLB', '18032', '30/10/20', '30/10/20', '', '', '', '', '', '', 'DJBR'),
(120, '8', 'GUSTAVO RAMIREZ', 'INF EM/UAI-005/2020', 'MISICUNI', '18022', '30/10/20', '30/10/20', '', '', '', '', '', '', 'DJBR'),
(121, '7', 'DELFIN PONCE', 'INF DAB-UAI-002/2020', 'DAB', '10785', '3/8/20', '15/10/20', 'C', '372/2020', '9/10/20', '750/2020', '15/10/20', '', 'DJBR'),
(122, '8', 'EUSTAQUIO HUAYTA', 'INF DAI.03/2020', 'SETAR', '5027', '28/2/20', '16/10/20', 'C', '408/2020', '16/10/20', '760/2020', '19/10/20', '', 'DJBR'),
(123, '9', 'EUSTAQUIO HUAYTA', 'INF DE DJBR', 'VINTO', '5793', '4/3/20', '5/3/20', 'C', '40672020', '16/11/20', '758/2020', '19710/2020', '', 'DJBR'),
(124, '8', 'EUSTAQUIO HUAYTA', 'INF. EASBA-NE-GG-N? 117/2020', 'EASBA', '5133', '28/2/20', '3/9/20', 'C', '412/2020', '16/11/20', '764/2020', '16/10/20', '', 'DJBR'),
(125, '9', 'EUSTAQUIO HUAYTA', 'INF. EMAVIAS-UAI-004/2020', 'EMAVIAS', '4957', '28/2/20', '3/9/20', 'C', '358/2020', '16/10/20', '695/2020', '19/10/20', '', 'DJBR'),
(126, '10', 'EUSTAQUIO HUAYTA', 'INF. /GGE/AAI/2020-0031', 'EBC', '5181', '28/2/20', '03/09/23020', 'C', '409/2020', '16/10/20', '761/2020', '19/10/20', '', 'DJBR'),
(127, '9', 'EUSTAQUIO HUAYTA', 'INF ABE/AI-V-02/2020', 'ABE', '6989', '16/3/20', '3/9/20', 'C', '407/2020', '16/10/20', '759/2020', '19/10/20', '', 'DJBR'),
(128, '10', 'WILDER HERRERA', 'INF. DAI-3-004/2020', 'COMIBOL', '5079', '28/022020', '', 'C', '402/2020', '15/10/20', '756/2020', '19/10/20', '', 'DJBR'),
(129, '1', 'WILDER HERRERA', 'REMITE INFORME DE AUDITORIA OPERATIVA EMV/UAI/OPE/02/2019', 'VINTO', '31025', '', '', 'P', '', '', '', '', '', 'OPERATIVAS'),
(130, '2', 'SONIA VELASQUEZ', 'INFORME DE AUDITORIA OERACIONAL N? SO/IAI-09/2019', 'SELA', '31059', '', '', 'P', '', '', '', '', '', 'OPERATIVAS'),
(131, '3', 'GUSTAVO RAMIREZ', 'INFORME OB.GA. INF 021-19 DE AUDITORIA OPERACIONAL', 'BOA', '31340', '', '', 'P', '', '', '', '', '', 'OPERATIVAS'),
(132, '4', 'SONIA VELASQUEZ', 'REMITE INFORME DE AUDITORIA OPERACIOANAL  UAI/INF/AO/01/2019', 'BOLTUR', '31268', '', '', 'P', '', '', '', '', '', 'OPERATIVAS'),
(133, '5', 'WILDER HERRERA', 'DAI-3-0007/2019', 'COMIBOL', '32348', '26/12/20', '17/2/20', '', '', '', '', '', '', 'OPERATIVAS'),
(134, '6', 'EVA COLQUE', 'UAI/INF/AO/02/2019', 'BOLTUR', '799', '9/1/20', '15/6/20', 'C', '97/2020', '', '430/2020', '18/6/20', '', 'OPERATIVAS'),
(135, '7', 'ELENA MALLON', 'AUD. OPERACIONAL PO.1.1.3', 'DAB', '1466', '15/1/20', '18/6/20', 'C', '202/2020', '', '474/2020', '1/7/20', '', 'OPERATIVAS'),
(136, '8', 'EVA COLQUE', 'INF SENATEX/INF/UAI-018/2020', 'SENATEX', '1775', '28/10/20', '9/11/20', 'C', '', '', '', '', '', 'OPERATIVAS'),
(137, '9', 'WILDER HERRERA', 'DAIC-PO-16 SUOR-CB-05/2020', 'YPFB', '20847', '1/12/20', '1/12/20', '', '', '', '', '', '', 'OPERATIVAS'),
(138, '10', 'WILDER HERRERA', 'INF-UAI-N? 06/20', 'EMAVRA', '210022', '2/12/20', '7/12/20', '', '', '', '', '', '', 'OPERATIVAS'),
(139, '11', 'WILDER HERRERA', 'EMV/UAI/OPE/N?01/2020', 'VINTO', '21046', '2/12/20', '7/12/20', '', '', '', '', '', '', 'OPERATIVAS'),
(140, '12', 'EDDY MARQUEZ', 'YLB/AUD/INF/SEG 017/2020', 'YLB', '23663', '31/12/20', '4/1/21', '', '', '', '', '', '', 'OPERATIVAS'),
(141, '13', 'EDDY MARQUEZ', 'INF. SEDEM.INF.AI.07/2020', 'SEDEM', '23634', '31/12/20', '4/1/21', '', '', '', '', '', '', 'OPERATIVAS'),
(142, '14', 'EDDY MARQUEZ', 'INF. SEDEM.INF.AI.08/2020', 'SEDEM', '23632', '31/12/20', '4/1/20', '', '', '', '', '', '', 'OPERATIVAS'),
(143, '15', 'EDDY MARQUEZ', 'INF. SEDEM INF.AI. 10/2020', 'SEDEM', '23628', '31/12/20', '4/1/20', '', '', '', '', '', '', 'OPERATIVAS'),
(144, '16', 'EDDY MARQUEZ', 'INF SEDEM INF. INF. AI.092/2020', 'SEDEM', '23630', '31/12/20', '4/1/21', '', '', '', '', '', '', 'OPERATIVAS'),
(145, '1', 'ANDRES ORTEGA', '', 'EMAVRA', '3196', '5/2/20', '7/2/20', 'C', '53/2020', '', '230/2020', '2/3/20', '', 'ACT ANNUAL'),
(146, '2', 'ANDRES ORTEGA', '', 'ASP-B', '2813', '31/1/20', '7/2/20', 'C', '52/2020', '', '228/2020', '2/3/20', '', 'ACT ANNUAL'),
(147, '3', 'ANDRES ORTEGA', '', 'GERES', '2554', '30/1/20', '7/2/20', 'C', '65/2020', '', '227/2020', '2/3/20', '', 'ACT ANNUAL'),
(148, '4', 'ANDRES ORTEGA', '', 'EMAPAS', '1891', '21/1/20', '23/1/20', 'C', '54/2020', '', '229/2020', '2/3/20', '', 'ACT ANNUAL'),
(149, '5', 'ANDRES ORTEGA', '', 'SAMAPA', '4587', '20/2/20', '20/2/20', 'C', '64/2020', '', '254/2020', '2/3/20', '', 'ACT ANNUAL'),
(150, '6', 'ANDRES ORTEGA', '', 'QUIPUS', '6667', '11/3/20', '13/3/20', 'C', '100/2020', '', '280/2020', '16/3/20', '', 'ACT ANNUAL'),
(151, '7', 'ANDRES ORTEGA', '', 'MUTUN', '6129', '9/3/20', '10/3/20', 'C', '94/2020', '', '276/2020', '13/3/20', '', 'ACT ANNUAL'),
(152, '8', 'DELFIN PONCE', '', 'MI TELEFERICO', '2876', '31/1/20', '10/2/20', 'C', '34/2020', '', '222/2020', '2/3/20', '', 'ACT ANNUAL'),
(153, '9', 'DELFIN PONCE', '', 'ENDE', '3200', '5/2/20', '10/2/20', 'C', '31/2020', '', '224/2020', '2/3/20', '', 'ACT ANNUAL'),
(154, '10', 'DELFIN PONCE', '', 'DAB', '2868', '31/1/20', '10/2/20', 'C', '24/2020', '', '223/2020', '2/3/20', '', 'ACT ANNUAL'),
(155, '11', 'DELFIN PONCE', '', 'BOLIVIA TV', '2866', '31/1/20', '10/2/20', 'C', '23/2020', '', '225/2020', '2/3/20', '', 'ACT ANNUAL'),
(156, '12', 'DELFIN PONCE', '', 'OFEP', '2871', '31/1/20', '10/2/20', 'C', '14/2020', '', '221/2020', '2/3/20', '', 'ACT ANNUAL'),
(157, '13', 'DELFIN PONCE', '', 'COFADENA', '2402', '28/1/20', '2/2/20', 'C', '15/2020', '', '226/2020', '2/3/20', '', 'ACT ANNUAL'),
(158, '14', 'DELFIN PONCE', '', 'ENFE', '2004', '23/1/20', '24/1/20', 'C', '33/2020', '', '220/2020', '2/3/20', '', 'ACT ANNUAL'),
(159, '15', 'EDDY MARQUEZ', '', 'SEDEM', '2833', '31/1/20', '7/2/20', 'C', 'CGE/SCEP/INF-030/2020', '', 'CGE/SCEP-244/2020', '03/03/2020', '', 'ACT ANNUAL'),
(160, '16', 'EDDY MARQUEZ', '', 'EPDEOR', '2941', '3/2/20', '7/2/20', 'C', 'CGE/SCEP/INF-027/2020', '', 'CGE/SCEP-245/2020', '03/03/2020', '', 'ACT ANNUAL'),
(161, '17', 'EDDY MARQUEZ', '', 'TAB', '2684', '31/1/20', '7/2/20', 'C', 'CGE/SCEP/INF-028/2020', '', 'CGE/SCEP-242/2020', '03/03/2020', '', 'ACT ANNUAL'),
(162, '18', 'EDDY MARQUEZ', '', 'GESTORA', '2002', '23/01/2020', '23/01/2020', 'C', 'CGE/SCEP/INF-029/2020', '', 'CGE/SCEP-243/2020', '03/03/2020', '', 'ACT ANNUAL'),
(163, '19', 'ELENA MALLON', '', 'SETAR', '2430', '29/1/20', '6/2/20', 'C', '59/2020', '', '241/2020', '2/3/20', '', 'ACT ANNUAL'),
(164, '20', 'ELENA MALLON', '', 'EASBA', '3352', '6/2/20', '7/2/20', 'C', '57/2020', '', '239/2020', '', '', 'ACT ANNUAL'),
(165, '21', 'ELENA MALLON', '', 'BOA', '3100', '4/2/20', '7/2/20', 'C', '56/2020', '', '238/2020', '2/3/20', '', 'ACT ANNUAL'),
(166, '22', 'ELENA MALLON', '', 'YPFB', '2848', '31/1/20', '7/2/20', 'C', '58/2020', '', '240/2020', '6/3/20', '', 'ACT ANNUAL'),
(167, '23', 'ELENA MALLON', '', 'EMTAGAS', '2901', '31/1/20', '7/2/20', 'C', '55/2020', '', '237/2020', '2/3/20', '', 'ACT ANNUAL'),
(168, '24', 'FREDDY CRUZ', '', 'EBA', '2864', '31/1/20', '7/2/20', 'C', '16/2020', '', '234/2020', '2/3/20', '', 'ACT ANNUAL'),
(169, '25', 'FREDDY CRUZ', '', 'EMAPA', '2845', '31/1/20', '7/2/20', 'C', '17/2020', '', '235/2020', '2/3/02', '', 'ACT ANNUAL'),
(170, '26', 'FREDDY CRUZ', '', 'ABE', '2828', '31/1/20', '17/2/20', 'C', '25/2020', '', '232/2020', '2/3/20', '', 'ACT ANNUAL'),
(171, '27', 'FREDDY CRUZ', '', 'EDITORIAL', '1622', '17/1/20', '17/1/20', 'C', '18/2020', '', '233/2020', '2/3/20', '', 'ACT ANNUAL'),
(172, '28', 'GUSTAVO RAMIREZ', '', 'SENATEX', '2948', '3/2/20', '19/2/20', 'C', '63/2020', '', '253/2020', '2/3/20', '', 'ACT ANNUAL'),
(173, '29', 'GUSTAVO RAMIREZ', '', 'SEMAPA', '2705', '31/1/20', '19/2/20', 'C', '60/2020', '', '250/2020', '2/3/20', '', 'ACT ANNUAL'),
(174, '30', 'GUSTAVO RAMIREZ', '', 'EMSA', '4361', '18/2/20', '19/2/20', 'C', '62/2020', '', '252/2020', '2/3/20', '', 'ACT ANNUAL'),
(175, '31', 'GUSTAVO RAMIREZ', '', 'MISICUNI', '2722', '31/1/20', '17/2/20', 'C', '61/2020', '', '251/2020', '2/3/20', '', 'ACT ANNUAL'),
(176, '32', 'SONIA VELASQUEZ', '', 'BOLTUR', '2860', '31/1/20', '18/2/20', 'C', '45/2020', '', '207/2020', '26/2/20', '', 'ACT ANNUAL'),
(177, '33', 'SONIA VELASQUEZ', '', 'ELAPAS', '2900', '31/1/20', '17/2/20', 'C', '46/2020', '', '205/2020', '26/2/20', '', 'ACT ANNUAL'),
(178, '34', 'SONIA VELASQUEZ', '', 'SELA', '3151', '5/2/20', '17/2/20', 'C', '44/2020', '', '206/2020', '26/2/20', '', 'ACT ANNUAL'),
(179, '35', 'WILDER HERRERA', '', 'VINTO', '2693', '31/1/20', '7/2/20', 'C', '20/2020', '', '247/2020', '2/3/20', '', 'ACT ANNUAL'),
(180, '36', 'WILDER HERRERA', '', 'EMAVERDE', '2672', '31/1/20', '7/2/20', 'C', '26/2020', '', '248/2020', '2/3/20', '', 'ACT ANNUAL'),
(181, '37', 'WILDER HERRERA', '', 'EMAVIAS', '60', '2/1/20', '3/1/20', 'C', '19/2020', '', '249/2020', '2/3/20', '', 'ACT ANNUAL'),
(182, '38', 'WILDER HERRERA', '', 'COMIBOL', '2749', '31/1/20', '17/2/20', 'P', '', '', '', '', '', 'ACT ANNUAL'),
(183, '39', 'WILDER HERRERA', '', 'YLB', '7083', '17/3/20', '18/3/20', 'C', '103/2020', '', '284/2020', '19/3/20', '', 'ACT ANNUAL'),
(184, '40', 'WILDER HERRERA', '', 'AAPOS', '5816', '5/3/20', '5/6/20', 'C', '166/2020', '', '478/2020', '1/7/20', '', 'ACT ANNUAL'),
(185, '41', 'WILDER HERRERA', '', 'EBC', '6017', '6/3/20', '5/6/20', 'C', '165/2020', '', '467/2020', '30/6/20', '', 'ACT ANNUAL'),
(186, '41', 'GUSTAVO RAMIREZ', '', 'EMAVERDE (REFORMULADO)', '8935', '30/6/20', '1/7/20', 'C', '279/2020', '', '530/2020', '4/8/20', '', 'ACT ANNUAL'),
(187, '1', 'EDDY  MARQUEZ', 'INF. GP/AI/SEG. N? 001/2020', 'GESTORA', '6864', '13/3/20', '', '', '', '', '', '', '', 'SEGUIMIENTO'),
(188, '2', 'EDDY  MARQUEZ', 'INF GP/AI/SEG. N? 002/2020', 'GESTORA', '6864', '13/3/20', '', '', '', '', '', '', '', 'SEGUIMIENTO'),
(189, '3', 'ELENA MALLON', 'SEGUIMIENTO N? SO/IAI/B-03/2020 ', 'SELA', '4862', '27/2/20', '28/2/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(190, '4', 'ELENA MALLON', 'SEG. INF. N? I.A.I. 01/20,  2? SEG. AL INF  N? I.A.I. 03/18', 'ELAPAS', '5423', '2/3/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(191, '5', 'ELENA MALLON', 'SEG . EASBA-UAI-INF- N?004/2020,   AL  INFORME DE AUD. INDEP. SOBRE SOBRE LA EVALUACION DEL SISTEMA DE CONTROL INTERNO PRASTICADO A LA EMPRESA AZUCARERA EASBA', 'EASBA', '5133', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(192, '6', 'ELENA MALLON', 'EASBA-UAI-INF-N| 003/2020 1? SEG. AL INF. DE AUDITORIA INTERNA EASBA-UAI-INF-N?004 ', 'EASBA', '5133', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(193, '7', 'EVA COLQUE', 'SEGUMIENTO SOBRE LA IMPLANTACION DE RECOMENDACIONES DEL INFORME DE CONTROL INTERNO DE AUDITORIA DE CONF.', 'SEMAPA', '33', '2/1/20', '3/1/20', 'C', '', '', '518/2020', '28/7/20', '', 'SEGUIMIENTO'),
(194, '8', 'EVA COLQUE', 'SEGUIMEINTO SOBRE IMPLANTACION DE RECOMENDACIONES DEL INFORME DE CONTROL INTERNO CONFIABILIDAD', 'SEMAPA', '34', '2/1/20', '3/1/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(195, '9', 'EVA COLQUE', 'INF. UAI-N? 006/2020 SEGUIMIENTO AL INFORME UAI-N| 003/2019', 'EMAPAS', '5194', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(196, '10', 'FREDDY CRUZ', 'SEGUIMIENTO UAI-SEG-003-2020', 'EMAPAS', '3799', '11/2/20', '17/2/20', 'C', '', '', '214/2020', '2/3/20', '', 'SEGUIMIENTO'),
(197, '11', 'FREDDY CRUZ', 'SEG. EBA/UAI/INF-AI/2019-02', 'EBA', '5303', '28/2/20', '10/3/20', 'C', '', '', '361/2020', '16/6/20', '', 'SEGUIMIENTO'),
(198, '12', 'FREDDY CRUZ', 'INF.  EBA/DAI/INF-AI/2020-08 PRIMER SEG. AL INFORME EBA/UAI/INF-AI/2019-04 ', 'EBA', '5302', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(199, '13', 'FREDDY CRUZ', 'INF. AL SEG. NROS ABE-AI S-01/2020 Y ABE-AI S-02/2020', 'ABE', '6988', '16/3/20', '4/6/20', 'C', '', '', '370/2020', '16/6/20', '', 'SEGUIMIENTO'),
(200, '14', 'FREDDY CRUZ', 'INF. ABE-AI S-02/2020', 'ABE', '6988', '16/3/20', '', '', '', '', '', '', '', 'SEGUIMIENTO'),
(201, '15', 'FREDDY CRUZ', 'INF. ABE-AI S-03/2020', 'ABE', '6988', '16/3/20', '', '', '', '', '', '', '', 'SEGUIMIENTO'),
(202, '16', 'FREDDY CRUZ', 'INF.  EDITORIAL/UAI/INF 004/2020', 'EDITORIAL', '5939', '5/3/20', '', '', '', '', '', '', '', 'SEGUIMIENTO'),
(203, '17', 'GUSTAVO RAMIREZ', 'INF. DAI. N? 02/2019 PRIMER SEG.  AL INF.  INF.DAI.02/2019', 'SETAR', '5026', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(204, '18', 'GUSTAVO RAMIREZ', 'INF. DAI. N? 02/2018 -S2 SEGUNDO SEG.  AL INF. DAI.02/2018-CI', 'SETAR', '5026', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(205, '19', 'GUSTAVO RAMIREZ', 'INF. DAI.N? 03/2018 Y INF. DAI.N? 03/2018 PRIMER SEG. A RECOMENDACIONES SOBRE LA REVISION DEL CUMPLIMIENTO DE DJBR GESTION 2018', 'SETAR', '5026', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(206, '20', 'GUSTAVO RAMIREZ', 'INF. DAI. N? 04/2019-S1 PRIMER SEG. A LA AUDITORIA ESPECIAL DEL CUMPL. DEL PROCDIMIENTO ESPF. PARA EL CONTROL Y DATOS LIQUIDADOS EN LAS PLANILLAS SALARIALES', 'SETAR', '5026', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(207, '21', 'GUSTAVO RAMIREZ', 'INF.DAI.N? 06/2018-S2 SEGUNDO SEG. A INF. DAI.N?06/2018-C1', 'SETAR', '5026', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(208, '22', 'SONIA VELASQUEZ', 'SEGUIMIENTO AUD. OPERATIVA BOLTUR UAI-S-10/2019', 'BOLTUR', '2651', '30/1/20', '7/2/20', 'C', '', '', '362/2020', '16/6/20', '', 'SEGUIMIENTO'),
(209, '23', 'WILDER HERRERA', 'INF. N? DAI-2-001/2020 PRIMER SEG. AL CUMPLIMIENTO DEL INF. DAI-3-003/2019', 'COMIBOL', '5079', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(210, '24', 'WILDER HERRERA', 'INF. DAI-2-002/2020 SEGUNDO SEG. AL CUMPLIMIENTO DEL INF. DAI-3-003/2018', 'COMIBOL', '5079', '28/2/20', '10/3/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(211, '25', 'EDDY  MARQUEZ', 'INF EPDEOR/AUDIN/REV/S-001/2020', 'EPDEOR', '8085', '15/6/20', '16/6/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(212, '26', 'EDDY  MARQUEZ', 'INF-AI-03 Y 04/2020', 'SEDEM', '8267', '17/6/20', '18/6/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(213, '27', 'EUSTAQUIO HUAYTA', 'A INF BOLTUR /UAI-S-01/2020 CONF', 'BOLTUR', '9868', '14/7/20', '14/7/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(214, '28', 'EUSTAQUIO HUAYTA', 'PRIMER SEG. AL CUMPL. DE LAS RECOMENDACIONES DEL INFORME BOLIVIA TV-UAI N| 003/2019 EMERGENTE DE LA AUD. DE CONFIABILIDAD DE EE.FF. 2018  INFORME BOLIVIA TV.UAI N?003/2020', 'BOLIVIA TV', '9945', '15/7/20', '21/7/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(215, '29', 'ANDRES ORTEGA', '1? SEGUMIENTO A INFORME DE CONTROL ESM/UAI/I N? 003/2019 REFERNTE A LA CONFIAB. EE.FF.2018', 'MUTUN', '10206', '22/7/20', '22/7/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(216, '30', 'EDDY  MARQUEZ', 'INFORME DAI-INF-006/2020 SEGUIMIENTODAI INF-004/2019 DE CONFIABILIDAD', 'TAB', '9037', '2/7/20', '2/7/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(217, '31', 'GUSTAVO RAMIREZ', '2 ? SEG. A INF. EM/UAI/002/2018', 'MISICUNI', '13452', '8/9/20', '9/9/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(218, '32', 'GUSTAVO RAMIREZ', '1? SEG. INF. EM/UAI/003/2020', 'MISICUNI', '13453', '8/9/20', '9/9/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(219, '33', 'GUSTAVO RAMIREZ', '1? SEG. INFORME DEL AUDITOR INTERNO N? EM/UAI/005/2020', 'MISICUNI', '18022', '30/10/20', '30/10/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(220, '34', 'ANDRES ORTEGA', 'EBIH/INF-UAI-05/2020', 'EBIH', '18029', '30/10/20', '30/10/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(221, '35', 'EUSTAQUIO HUAYTA', 'REMITE PRIMER SEGUMIENTO BOLTUR UAI-S-03/2020 A LA AUD. OPERATIVA SOBRE EFICACIA A LOS PROCESOS, OPERACIONES Y ACTIVIDADES', 'BOLTUR', '18398', '5/11/20', '9/11/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(222, '36', 'EUSTAQUIO HUAYTA', 'REM. SEGUNDO SEGUIMIENTO BOLTUR/UAI S-05/2020 SOBRE GESTION 2018', 'BOLTUR', '18457', '5/11/20', '9/11/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(223, '37', 'EUSTAQUIO HUAYTA', 'PRIMER SEG. BOLTURUAI/S-04/2020', 'BOLTUR', '18399', '5/11/20', '9/11/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(224, '38', 'EDDY  MARQUEZ', 'PRIMER SEG. GP/AI/SEG.N?006/2020', 'GESTORA', '18644', '6/11/20', '9/11/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(225, '39', 'EDDY  MARQUEZ', 'REM. SEG. N? GESTORA-UAI N?17/2018', 'GESTORA', '18643', '6/11/20', '9/11/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(226, '40', 'EDDY  MARQUEZ', 'REM. GPA/SEG-005/2020', 'GESTORA', '18642', '6/11/20', '9/11/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(227, '41', 'DELDIN PONCE', 'DAB/UAI N 007/2020', 'DAB', '20762', '30/11/20', '1/12/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(228, '42', 'GUSTAVO RAMIREZ', 'AUD-INT.IAS N? 03/2020', 'EMTAGAS', '20721', '30/11/20', '1/12/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(229, '43', 'GUSTAVO RAMIREZ', 'AUD.IN.IAS. N? 04/2020', 'EMTAGAS', '20719', '30/11/20', '1/12/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(230, '44', 'GUSTAVO RAMIREZ', 'EM/UAI/007/2020', 'MISICUNI', '20881', '1/12/20', '2/12/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(231, '45', 'ELENA MALLON', 'SO/IAI/B-06/2020', 'SELA', '20654', '27/11/20', '28/11/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(232, '46', 'ELENA MALLON', 'INF/SO IA/B-07/2020', 'SELA', '20659', '27/11/20', '28/11/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(233, '47', 'WILDER HERRERA', 'INF. UAI N?0318', 'EMAVRA', '21022', '2/12/20', '7/12/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(234, '48', 'ESUTAQUIO HUAYTA', 'INF. N? BOLTUR UAI-S-06/2020', 'BOLTUR', '21237', '4/12/20', '7/12/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(235, '49', 'DELDIN PONCE', 'INF. DAB-UAI-002', 'DAB', '10785', '31/7/20', '15/10/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(236, '50', 'DELDIN PONCE', 'INF. DAB/G.G. N? 544/2020', 'DAB', '12318', '15/10/20', '15/10/20', '', '', '', '', '', '', 'SEGUIMIENTO'),
(237, '51', 'EVA COLQUE', 'REMITEINFORME DE SEGUIMIENTO', 'GERES', '17588', '26/10/20', '28/10/20', 'C', '', '', 'CGE/SCEP-795/2020', '28/10/20', '', 'SEGUIMIENTO'),
(238, '52', 'WILDER HERRERA', 'INF. DAI-3-002/2020', 'COMIBOL', '5079', '28/2/20', '5/6/20', 'C', '', '', '740/2020', '14/10/20', '', 'SEGUIMIENTO'),
(239, '53', 'EUSTAQUIO HUAYTA', 'INF. BTV-UAI Nros. 003/20, 004/20, 005/20', 'BOLIVIA TV', '9945', '15/7/20', '21/7/20', 'C', '', '', '829/2020', '19/11/20', '', 'SEGUIMIENTO'),
(240, '54', 'EDDY  MARQUEZ', 'INF. YLB/AUD/INF/SEG 018/2020', 'YLB', '23662', '31/12/20', '4/1/21', '', '', '', '', '', '', 'SEGUIMIENTO'),
(241, '1', 'WILDER HERRERA ', 'REMITE INFORME INF/GGE/AAI/2020-0013', 'EBC', '10198', '22/7/20', '22/7/20', '', '', '', '', '', '', 'INF SEMESTRAL'),
(242, '2', 'GUSTAVO RAMIREZ', 'INF. DAI N? 02/2020-IA', 'SETAR', '10993', '4/8/20', '12/10/20', 'C', '383/2020', '12/10/20', '708/2020', '12/10/20', '', 'INF SEMESTRAL'),
(243, '3', 'FREDY CRUZ', 'INF. ASPB-B/UAI/INF-IS-007/2020', 'ASP-B', '10618', '29/7/20', '29/7/20', 'C', '379/2020', '12/10/20', '697/2002', '13/10/20', '', 'INF SEMESTRAL'),
(244, '4', 'FREDY CRUZ', 'INF. N? UAI-007/2020', 'EMAPAS', '10842', '31/7/20', '03/08/220', 'C', '381/2020', '12/10/20', '381/2020', '13/10/20', '', 'INF SEMESTRAL'),
(245, '5', 'GUSTAVO RAMIREZ', 'INF. SEMESTRAL', 'EMTAGAS', '10697', '30/7/20', '3/8/20', 'C', '382/2020', '12/10/20', '707/2020', '12/10/20', '', 'INF SEMESTRAL'),
(246, '6', 'EUSTAQUIO HUAYTA', 'INF. SAM/AI/INF/004/2020', 'SAMAPA', '16737', '15/10/20', '15/10/20', 'C', '405/2020', '16/10/20', '757/2020', '19/10/20', '', 'INF SEMESTRAL'),
(247, '7', 'DELFIN PONCE', 'INF. SEMETRAL', 'ENFE', '10640', '30/7/20', '30/07/200', 'C', '364/2020', '8/10/20', '700/2020', '13/10/20', '', 'INF SEMESTRAL'),
(248, '8', 'FREDY CRUZ', 'INF. EDITORIAL/UAI/INF. N?005/2020', 'EDITORIAL', '10645', '30/7/20', '31/7/20', 'C', '380/2020', '12/10/20', '698/2020', '13/10/20', '', 'INF SEMESTRAL'),
(249, '9', 'EDDY MARQUEZ', 'SEDEM.INF.AI.06/2020', 'SEDEM', '10670', '30/7/20', '31/7/20', 'C', '392/2020', '12/10/20', '725/2020', '13/10/20', '', 'INF SEMESTRAL'),
(250, '10', 'DELFIN PONCE', 'INF SEMESTRAL', 'ENDE', '11171', '5/8/20', '13/8/20', 'C', '361/2020', '8/10/20', '704/2020', '8/10/20', '', 'INF SEMESTRAL'),
(251, '11', 'FREDDY CRUZ', 'EBA-UAI-011/2020', 'EBA', '10819', '31/7/20', '13/8/20', 'C', '378/2020', '12/10/20', '696/2020', '13/10/20', '', 'INF SEMESTRAL'),
(252, '12', 'EDDY MARQUEZ', 'DAI./INF.N?0010/2020', 'TAB', '14300', '16/9/20', '16/9/20', 'C', '376/2020', '12/10/20', '715/2020', '13/10/20', '', 'INF SEMESTRAL'),
(253, '13', 'EUSTAQUIO HUAYTA', 'GE-NAS-0066-INF/20', 'MI TELEFERICO', '16689', '14/10/20', '15/10/20', 'C', '416/2020', '20/10/20', '771/2020', '20/10/20', '', 'INF SEMESTRAL'),
(254, '14', 'DELFIN PONCE', 'DAB/UAI-IA No. 002/2020', 'DAB', '10849', '31/7/20', '22/9/20', 'C', '363/2020', '8/10/20', '721/2020', '13/10/20', '', 'INF SEMESTRAL'),
(255, '15', 'EDDY MARQUEZ', 'GP/AI/ACT.ADM.N? 003/2020', 'GESTORA', '10695', '30/7/20', '31/7/20', 'C', '374/2020', '12/10/20', '717/2002', '13/10/20', '', 'INF SEMESTRAL'),
(256, '16', 'EVA COLQUE', 'UAI N? 006/2020', 'GERES', '11158', '5/8/20', '10/8/20', 'C', '387/2020', '12/10/20', '729/2020', '12/10/20', '', 'INF SEMESTRAL'),
(257, '17', 'DELFIN PONCE', 'INF.UAI.N?008/2020', 'COFADENA', '12424', '27/8/20', '8/10/20', 'C', '362/2020', '8/10/20', '702/2020', '13/10/20', '', 'INF SEMESTRAL'),
(258, '18', 'EVA COLQUE', 'UAI- N? 011/2020', 'EMAPA', '10874', '3/8/20', '3/8/20', 'C', '389/2020', '12/10/20', '731/2020', '13/10/20', '', 'INF SEMESTRAL'),
(259, '19', 'WILDER HERRERA ', 'DAI-320/2020', 'COMIBOL', '10683', '30/7/20', '9/10/20', 'C', '371/2020', '9/10/20', '712/2020', '12/10/20', '', 'INF SEMESTRAL'),
(260, '20', '', '', 'SEMAPA', '11211', '10/8/20', '10/8/20', 'C', '388/2020', '12/10/20', '730/2020', '13/10/20', '', 'INF SEMESTRAL'),
(261, '21', 'ELENA MALLON', 'INF SEMESTRAL', 'ELAPAS', '171', '3/8/20', '3/8/20', 'C', '396/2020', '13/10/20', '735/2020', '14/10/20', '', 'INF SEMESTRAL'),
(262, '22', 'WILDER HERRERA ', 'INF/GGE/AAI/2020-0013/I/2020-1792', 'EBC', '10198', '22/7/20', '9/10/20', 'C', '369/2020', '6/9/20', '711/2020', '12/10/20', '', 'INF SEMESTRAL'),
(263, '23', 'ANDRES ORTEGA', 'QUIPUS/UAI/INF-A N? 001/2020', 'QUIPUS', '11610', '14/8/20', '17/8/20', 'C', '393/2020', '13/10/20', '726/2020', '13/10/20', '', 'INF SEMESTRAL'),
(264, '24', 'WILDER HERRERA ', 'EMV/UAI/63/20', 'VINTO', '12151', '25/8/20', '31/8/20', 'C', '368/2020', '9/10/20', '709/2020', '12/10/20', '', 'INF SEMESTRAL'),
(265, '25', 'GUSTAVO RAMIREZ', 'INF.SEMETRAL', 'MISICUNI', '16956', '19/10/20', '22/10/20', 'C', '417/2020', '22/10/20', '775/2020', '22/10/20', '', 'INF SEMESTRAL'),
(266, '26', 'EUSTAQUIO HUAYTA', 'CITE GE-JAI-016-INF/20', 'BOLTUR', '10693', '30/7/20', '3/9/20', 'C', '385/2020', '12/10/20', '719/2020', '13/10/20', '', 'INF SEMESTRAL'),
(267, '27', 'ANDRES ORTEGA', 'EBIH/UAI/INF-ADM/ N? 01/2020', 'EBIH', '11053', '5/6/20', '05/08/220', 'C', '394/2020', '13/10/20', '727/2020', '13/10/20', '', 'INF SEMESTRAL'),
(268, '28', 'ANDRES ORTEGA', 'ESM/UIA/I N? 005/2020', 'MUTUN', '10205', '22/7/20', '22/7/20', 'C', '391/2020', '13/10/20', '723/2020', '15/10/20', '', 'INF SEMESTRAL'),
(269, '29', 'WILDER HERRERA ', 'EMAVIAS-UAI-006/2020', 'EMAVIAS', '10673', '30/7/20', '31/8/20', 'C', '370/2020', '9/10/20', '710/2020', '12/10/20', '', 'INF SEMESTRAL'),
(270, '30', 'EUSTAQUIO HUAYTA', 'BOLIVIA TV-UAI N? 007/2020', 'BOLIVIA TV', '10803', '31/7/20', '3/9/20', 'C', '384/2020', '12/10/20', '718/2020', '12/10/20', '', 'INF SEMESTRAL'),
(271, '31', 'EDDY MARQUEZ', 'INF. SEMESTRAL', 'EPDEOR', '11540', '14/8/20', '12/10/20', 'C', '375/2020', '12/10/20', '716/2020', '13/10/20', '', 'INF SEMESTRAL'),
(272, '32', 'DELFIN PONCE', 'INF/AI N? 0005/2020 OFEP', 'OFEP', '10834', '31/7/20', '13/10/20', 'C', '360/2020', '8/10/20', '703/2020', '13/10/20', '', 'INF SEMESTRAL'),
(273, '33', 'EUSTAQUIO HUAYTA', 'EMAVERDE/GG/UAI/N? 004/2020', 'EMAVERDE', '10649', '30/7/20', '3/9/20', 'C', '386/2020', '12/10/20', '720/2020', '13/10/20', '', 'INF SEMESTRAL'),
(274, '34', 'EVA COLQUE', 'INF. SEMESTRAL DE ACTV.', 'EMSA', '17299', '22/10/20', '23/10/20', 'C', '422/2020', '26/10/20', '794/2020', '28/10/20', '', 'INF SEMESTRAL'),
(275, '35', 'SONIA VELASQUEZ', 'INF. SEMESTRAL DE ACTV.', 'BOA', '17371', '23/10/20', '23/10/20', 'C', '425/2020', '6/11/20', '806/2020', '9/11/20', '', 'INF SEMESTRAL'),
(276, '36', 'WILDER HERRERA ', 'INF  EMAVRA UAI-032/2020', 'EMAVRA', '11161', '5/8/20', '31/8/20', 'C', '367/2020', '9/10/20', '713/2020', '12/10/20', '', 'INF SEMESTRAL'),
(277, '37', 'FREDDY CRUZ', 'INF. ABE7AI -03/2020', 'ABE', '16753', '15/10/20', '16/10/20', 'C', '404/2020', '16/10/20', '754/2020', '19/10/20', '', 'INF SEMESTRAL'),
(278, '1', 'SONIA VELASQUEZ', 'CD-DAIC-RV-02 SUOC-LP-02/2020', 'YPFB', '2938', '3/2/20', '7/2/20', 'C', '130/2020', '9/6/20', '304/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(279, '2', 'SONIA VELASQUEZ', 'CD-UAI-II-001/2020', 'EMAPA', '2844', '31/1/20', '7/2/20', 'C', '135/2020', '9/6/20', '309/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(280, '3', 'EDDY MARQUEZ', 'O- ATENCION ANOTA CGE/SCEP-008/2020 ', 'SEDEM', '2846', '31/1/20', '7/2/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(281, '4', 'SONIA VELASQUEZ', 'CD-DAIC-RV-01 SUOC-LP-01/2020', 'YPFB', '1493', '16/1/20', '10/2/20', 'C', '130/2020', '9/6/20', '304/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(282, '5', 'SONIA VELASQUEZ', 'CD-ABE AI C-01/2020', 'ABE', '4150', '14/2/20', '17/2/20', 'C', '133/2020', '9/6/20', '307/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(283, '6', 'SONIA VELASQUEZ', 'CD-DAIC-R-03 SUOC-LP-03/2020', 'YPFB', '4151', '14/2/20', '17/2/20', 'C', '130/2020', '9/6/20', '304/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(284, '7', 'DELFIN PONCE', 'CD-UAI-EPCD 01/20', 'ENDE', '3865', '12/2/20', '17/2/20', 'C', '132/2020', '9/6/20', '311/2020', '09/06/200', '', 'CONTRATACION DIRECTA'),
(285, '8', 'SONIA VELASQUEZ', 'CD-EBA/UAI/INF-AI/2020-003', 'EBA', '4275', '17/2/20', '18/2/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(286, '9', 'ELENA MALLON', 'CD- DAIC-RV-04 SUOC-LP-04/2020', 'YLB', '4923', '27/2/20', '28/2/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(287, '10', 'SONIA VELASQUEZ', 'CD-DAIC-RV-05 SUOC-LP-05/2020', 'YPFB', '5347', '28/2/20', '3/3/20', 'C', '130/2020', '9/6/20', '304/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(288, '11', 'SONIA VELASQUEZ', 'CD- ASP-B/UAI/INF-CD-004/2020', 'ASP-B', '5086', '28/2/20', '3/3/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(289, '12', 'SONIA VELASQUEZ', 'CD-INF-UAI-EPCD-N? 02/20', 'ENDE', '6593', '11/3/20', '13/3/20', 'C', '132/2020', '9/6/20', '311/2020', '09/06/200', '', 'CONTRATACION DIRECTA'),
(290, '13', 'SONIA VELASQUEZ', 'CD-INF F-3008  BTV-UAI-F N? 001/2020', 'BOLIVIA TV', '5704', '4/3/20', '4/6/20', 'C', '175/2020', '12/6/20', '', '', '', 'CONTRATACION DIRECTA'),
(291, '14', 'SONIA VELASQUEZ', 'CD- DAIC-RV-06 SUOC-LP 06/2020', 'YPFB', '5904', '5/3/20', '4/6/20', 'C', '436/2020', '11/11/20', '814/2020', '11/11/20', '', 'CONTRATACION DIRECTA'),
(292, '15', 'SONIA VELASQUEZ', 'CD-ABE-AI-03/22020 ', 'ABE', '7173', '19/3/20', '5/6/20', 'C', '174/2020', '18/6/20', '385/2020', '18/6/20', '', 'CONTRATACION DIRECTA'),
(293, '16', 'SONIA VELASQUEZ', 'CD EMV-UAI-INF F3008 01/2020', 'VINTO', '8075', '15/6/20', '16/6/20', 'C', '226/2020', '30/6/20', '477/2020', '1/7/20', '', 'CONTRATACION DIRECTA'),
(294, '17', 'SONIA VELASQUEZ', 'CD-REM INF. DE CONTRATCION DIRECTA', 'ABE', '', '', '', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(295, '18', 'SONIA VELASQUEZ', 'CD- EASBA-UAI-INF-07,08,09/2020 DE LA UAI', 'EASBA', '8984', '1/7/20', '2/7/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(296, '19', 'SONIA VELASQUEZ', 'CD-EMV-UAI-INF-F-30008', 'VINTO', '9727', '13/7/20', '14/7/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(297, '20', 'SONIA VELASQUEZ', 'CD-INF/GGE/AAI/2020-0009I/2020-01548', 'EBC', '8465', '19/6/20', '24/6/20', 'C', '252/2020', '8/7/20', '495/2020', '10/7/20', '', 'CONTRATACION DIRECTA'),
(298, '21', 'SONIA VELASQUEZ', 'CD-INF F3008', 'VINTO', '7880', '10/6/20', '16/6/20', 'C', '226/2020', '30/6/20', '477/2020', '1/7/20', '', 'CONTRATACION DIRECTA'),
(299, '22', 'SONIA VELASQUEZ', 'CD- INF F3008', 'VINTO', '3953', '13/2/20', '24/6/20', 'C', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(300, '23', 'SONIA VELASQUEZ', 'CD  DAI-0072/2020', 'COMIBOL', '1340', '15/1/20', '15/1/20', 'C', '140/2020', '9/6/20', '314/2020', '15/6/20', '', 'CONTRATACION DIRECTA'),
(301, '24', 'SONIA VELASQUEZ', 'CD', 'EBA', '310', '7/1/20', '', 'C', '128/2020', '09//06/2020', '302/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(302, '25', 'SONIA VELASQUEZ', 'CD', 'EBA', '1298', '14/1/20', '', 'C', '128/2020', '9/6/20', '302/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(303, '26', 'SONIA VELASQUEZ', 'CD', 'EBA', '1273', '23/1/20', '', 'C', '128/2020', '9/6/20', '302/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(304, '27', 'SONIA VELASQUEZ', 'CD', 'EBA', '2118', '24/1/20', '', 'C', '128/2020', '9/6/20', '302/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(305, '28', 'SONIA VELASQUEZ', 'CD', 'EBA', '4275', '24/1/20', '', 'C', '128/2020', '9/6/20', '302/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(306, '29', 'SONIA VELASQUEZ', 'CD', 'MI TELEFERICO', '4654', '21/2/20', '27/2/20', 'C', '134/2020', '9/6/20', '308/2020', '9/6/20', '', 'CONTRATACION DIRECTA'),
(307, '30', 'SONIA VELASQUEZ', 'CD', 'EASBA', '8984', '1/7/20', '9/7/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(308, '31', 'SONIA VELASQUEZ', 'CD', 'GESTORA', '9319', '7/7/20', '18/7/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(309, '32', 'SONIA VELASQUEZ', 'CD', 'EMAPA', '17974', '30/10/20', '30/10/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(310, '33', 'SONIA VELASQUEZ', 'CD', 'DAB', '17901', '2910/2020', '30/10/20', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(311, '34', 'SONIA VELASQUEZ', 'CD', 'MI TELEFERICO', '17896', '2910/2020', '30/10/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(312, '35', 'SONIA VELASQUEZ', 'CD', 'YLB', '17923', '29/10/20', '30/10/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(313, '36', 'SONIA VELASQUEZ', 'CD', 'YLB', '17924', '29/10/20', '30/10/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(314, '37', 'SONIA VELASQUEZ', 'CD', 'DAB', '18002', '30/10/20', '3/11/20', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(315, '38', 'SONIA VELASQUEZ', 'CD', 'DAB', '18003', '30/10/20', '3/11/20', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(316, '39', 'SONIA VELASQUEZ', 'CD', 'QUIPUS', '18020', '30/10/20', '3/11/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(317, '40', 'SONIA VELASQUEZ', 'CD', 'TAB', '18579', '6/11/20', '9/11/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(318, '41', 'SONIA VELASQUEZ', 'CD', 'DAB', '18576', '6/11/20', '9/11/20', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(319, '42', 'SONIA VELASQUEZ', 'CD', 'BOLIVIA TV', '5704', '4/3/20', '10/6/20', 'C', '175/2020', '12/6/20', '', '', '', 'CONTRATACION DIRECTA'),
(320, '43', 'SONIA VELASQUEZ', 'CD', 'DAB', '20764', '30/11/20', '1/12/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(321, '44', 'SONIA VELASQUEZ', 'CD', 'DAB', '20763', '30/11/20', '1/12/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(322, '45', 'SONIA VELASQUEZ', 'CD', 'ABE', '20858', '1/12/20', '', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(323, '46', 'SONIA VELASQUEZ', 'CD', 'GETSORA', '194436', '13/11/20', '13/11/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(324, '47', 'SONIA VELASQUEZ', 'CD', 'BOLIVIA TV', '19327', '12/11/20', '12/10/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(325, '48', 'SONIA VELASQUEZ', 'CD', 'BOA', '21091', '3/12/20', '7/12/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(326, '49', 'SONIA VELASQUEZ', 'CD', 'BOLIVIA TV', '21399', '7/12/20', '15/12/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(327, '50', 'SONIA VELASQUEZ', 'CD', 'ABE', '21637', '9/12/20', '15/12/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(328, '51', 'SONIA VELASQUEZ', 'CD', 'YLB', '21648', '9/12/20', '15/12/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(329, '52', 'SONIA VELASQUEZ', 'CD', 'EBA', '21664', '9/12/20', '15/12/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(330, '53', 'SONIA VELASQUEZ', 'CD', 'EBA', '21663', '9/12/20', '15/12/20', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(331, '54', 'SONIA VELASQUEZ', 'CD', 'DAB', '14575', '', '', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(332, '55', 'SONIA VELASQUEZ', 'CD', 'DAB', '16389', '', '', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(333, '56', 'SONIA VELASQUEZ', 'CD', 'DAB', '17308', '', '', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA');
INSERT INTO `historico_hr` (`idhistorico_hr`, `correlativo`, `supervisor`, `tipo_trabajo`, `empresa`, `hoja_ruta`, `fecha_hr`, `fecha_asig`, `estado`, `informe`, `fecha_inf`, `nota`, `fecha_emision`, `aclaraciones`, `tipo`) VALUES
(334, '57', 'SONIA VELASQUEZ', 'CD', 'DAB', '17675', '', '', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(335, '58', 'SONIA VELASQUEZ', 'CD', 'DAB', '17674', '', '', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(336, '59', 'SONIA VELASQUEZ', 'CD', 'DAB', '18253', '', '', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(337, '60', 'SONIA VELASQUEZ', 'CD', 'DAB', '18803', '', '', 'C', '440/2020', '16/11/20', '825/2020', '19/11/20', '', 'CONTRATACION DIRECTA'),
(338, '61', 'SONIA VELASQUEZ', 'CD', 'BOLIVIA TV', '23672', '31/12/20', '4/1/21', '', '', '', '', '', '', 'CONTRATACION DIRECTA'),
(339, '62', 'SONIA VELASQUEZ', 'CD', 'YPFB', '7739', '8/6/20', '10/6/20', 'C', '436/2020', '11/11/20', '814/2020', '11/11/20', '', 'CONTRATACION DIRECTA'),
(340, '63', 'SONIA VELASQUEZ', 'CD', 'YPFB', '10552', '28/7/20', '29/7/20', 'C', '436/2020', '11/11/20', '814/2020', '11/11/20', '', 'CONTRATACION DIRECTA'),
(341, '64', 'SONIA VELASQUEZ', 'CD', 'YPFB', '11951', '20/8/20', '20/8/20', 'C', '436/2020', '11/11/20', '814/2020', '11/11/20', '', 'CONTRATACION DIRECTA'),
(342, '65', 'SONIA VELASQUEZ', 'CD', 'YPFB', '14780', '22/9/20', '12/9/20', 'C', '436/2020', '11/11/20', '814/2020', '11/11/20', '', 'CONTRATACION DIRECTA'),
(343, '66', 'SONIA VELASQUEZ', 'CD', 'YPFB', '17218', '21/10/20', '22/10/20', 'C', '436/2020', '11/11/20', '814/2020', '11/11/20', '', 'CONTRATACION DIRECTA'),
(344, '67', 'SONIA VELASQUEZ', 'CD', 'YPFB', '17219', '21/10/20', '22/10/20', 'C', '436/2020', '11/11/20', '814/2020', '11/11/20', '', 'CONTRATACION DIRECTA'),
(345, '68', 'SONIA VELASQUEZ', 'CD', 'EBA', '10630', '29/7/20', '29/7/20', 'C', '435/2020', '10/11/20', '809/2020', '10/11/20', '', 'CONTRATACION DIRECTA'),
(346, '69', 'SONIA VELASQUEZ', 'CD', 'EBA', '13408', '7/9/20', '8/9/20', 'C', '435/2020', '10/11/20', '809/2020', '10/11/20', '', 'CONTRATACION DIRECTA'),
(347, '70', 'SONIA VELASQUEZ', 'CD', 'EBA', '13603', '9/9/20', '10/9/20', 'C', '435/2020', '10/11/20', '809/2020', '10/11/20', '', 'CONTRATACION DIRECTA'),
(348, '71', 'SONIA VELASQUEZ', 'CD', 'EBA', '14930', '23/9/20', '24/9/20', 'C', '435/2020', '10/11/20', '809/2020', '10/11/20', '', 'CONTRATACION DIRECTA'),
(349, '72', 'SONIA VELASQUEZ', 'CD', 'EBA', '10631', '27/7/20', '28/7/20', 'C', '435/2020', '10/11/20', '809/2020', '10/11/20', '', 'CONTRATACION DIRECTA'),
(350, '1', 'FREDDY CRUZ', 'AUD. ESP. EVALAUCION DEL INFORME ESM/UAI/No. 012/2019 Auditoria Especial al proceso de contratcion para la ejecuciOn del proyecto de dise?o, construccion, puesta en marcha y operaciOn', 'MUTUN', '625/2020', '8/1/20', '10/3/20', 'C', '073/2020', '4/3/20', '275/2020', '12/3/20', '', 'OTROS'),
(351, '2', 'FREDDY CRUZ', 'AUS. ESP.', 'ABE', '', '', '', 'C', '', '', '', '', '', 'OTROS'),
(352, '3', 'FREDDY CRUZ', 'AUS. ESP.', 'ABE', '20677', '30/11/20', '1/12/20', '', '', '', '', '', '', 'OTROS'),
(353, '4', 'EVA COLQUE', 'AUS. ESP.', 'GERES', '21023', '2/12/20', '7/12/20', '', '', '', '', '', '', 'OTROS'),
(354, '5', 'FREDDY CRUZ', 'AUS. ESP.', 'ABE', '12893', '2/9/20', '7/12/20', '', '', '', '', '', '', 'OTROS'),
(355, '1', 'GUSTAVO TRAMIREZ', 'EVCON', 'EDALP-EMPRESA PUBLICA DEPARTAMENTAL ESTRATEGI', '7091', '', '', '', '1803/2020', '16/6/20', '', '', '', 'CONSISTENCIA'),
(356, '1', 'Andres Ortega', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(357, '2', 'Delfin Ponce', '', 'Mi TelefErico', '', '', '', 'P', '', '', '', '', 'Con codigo CONAUD', 'SUPERVISIONES'),
(358, '3', '', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(359, '4', 'Elena Mallon', '', 'Vinto', '', '', '', 'P', '', '', '', '', 'En gestiOn  codigo CONAUD', 'SUPERVISIONES'),
(360, '5', '', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(361, '6', 'Eva Colque (DZ)', '', 'BoA', '', '', '', 'P', '', '', '', '', 'En gestiOn  codigo CONAUD', 'SUPERVISIONES'),
(362, '7', '', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(363, '8', 'Eddy Marquez', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(364, '9', '', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(365, '10', 'Freddy Cruz', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(366, '12', 'Wilder Herrera', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(367, '13', 'Supervisor (EC)', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(368, '14', 'Supervisor (GPA 2)', '', '', '', '', '', 'P', '', '', '', '', '', 'SUPERVISIONES'),
(369, '1', 'WILDER HERRERA', 'EMV/UAI/CONF/N? 02/2020', 'VINTO', '5793', '4/3/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(370, '2', 'WILDER HERRERA', ' INF/GGE/AAI/2020-0002', 'EBC', '5180', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(371, '3', 'EVA COLQUE ', 'UAI-N? 005/2020', 'EMAPA', '5194', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(372, '4', 'EVA COLQUE ', 'SENATEX/INF/UAI-003/2020', 'SENATEX', '5070', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(373, '5', 'ELENA MALLON', 'EASBA-UAI-INF-N? 006/2020', 'EASBA', '5132', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(374, '6', 'ANDRES ORTEGA', ' ESM/UAI/N? 002/2020', 'MUTUN', '4997', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(375, '7', 'FREDDY CRUZ', 'EDITORIAL/UAI/INF/003/2020', 'EDITORIAL', '5307', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(376, '8', 'WILDER HERRERA', 'DAI-3-003/2020', 'COMIBOL', '5079', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(377, '9', 'FREDDY CRUZ', 'EBA/DAI/INF-AI/2020-05', 'EBA', '5300', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(378, '10', 'WILDER HERRERA', 'EMAVIAS-UAI-003/2020', 'EMAVIAS', '4957', '28/2/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(379, '11', 'ELENA MALLON', 'INF.N| SO/IAI/B-05/2020', 'SELA', '5793', '4/3/20', '', '', '', '', '', '', '', 'CONTROL INTERNO'),
(380, '1', 'ELENA MALLON', 'AUD. ESPECIAL  REMITE INF. COMPLEMENTARIO SUBSANADO Y REFORMULADO DAIC-C-11 SOUC-LP08/2018 (C1)', 'YPFB', '7598', '04/06/23020', '8/6/20', '', '', '', '', '', '', 'ESPECIAL UAI'),
(381, '2', 'ELENA MALLON', 'INFORME COMPLEMENTARIO SUBSANADO Y REFORMULADO DAIC-C-09 SOUC-LP-07/2018(C1)', 'YPFB', '7599', '4/6/20', '8/6/20', '', '', '', '', '', '', 'ESPECIAL UAI'),
(382, '1', 'DPP', 'POA 2021', 'ENDE', '18027', '30/10/20', '3/11/20', '', '', '', '', '', '', 'POA 2021');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `instruccion`
--

CREATE TABLE `instruccion` (
  `idinstruccion` int(11) NOT NULL,
  `instruccion` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `instruccion`
--

INSERT INTO `instruccion` (`idinstruccion`, `instruccion`) VALUES
(1, 'APROBAR'),
(2, 'REVISAR'),
(3, 'JUSTIFICAR'),
(4, 'SU OPINION'),
(5, 'COORDINAR'),
(6, 'PARA ARCHIVO'),
(7, 'PREPARAR RESPUESTA'),
(8, 'ANALIZAR'),
(9, 'PARA SU CONOCIMIENTO Y FINES CONSIGUIENTES'),
(10, 'VISITEME'),
(11, 'EVALUAR'),
(12, 'EJECUTAR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_login`
--

CREATE TABLE `log_login` (
  `idlog_login` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `ip` varchar(45) NOT NULL,
  `condicion` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `log_login_failure`
--

CREATE TABLE `log_login_failure` (
  `idlog_login_failure` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `fecha_hora` datetime NOT NULL,
  `ip` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nombres`
--

CREATE TABLE `nombres` (
  `idnombre` int(11) NOT NULL,
  `paterno` varchar(45) NOT NULL,
  `materno` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `casada` varchar(45) DEFAULT NULL,
  `ci` varchar(45) NOT NULL,
  `exp` varchar(45) NOT NULL,
  `titulo` varchar(45) DEFAULT NULL,
  `iniciales` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `nombres`
--

INSERT INTO `nombres` (`idnombre`, `paterno`, `materno`, `nombres`, `casada`, `ci`, `exp`, `titulo`, `iniciales`) VALUES
(1, 'Yapuchura', 'Chuquimia', 'Luis Gonzalo', ' ', '5966306', '', 'Ing.', 'lgych'),
(2, 'Vargas', 'Angulo', 'Wilmer Francisco', ' ', '599958-1S', 'OR', 'Dr.', 'WFVA'),
(3, 'Marquez', 'Chipana', 'Eddy', ' ', '4851906', 'LP', 'Lic.', 'emc'),
(4, 'Colque', 'Hurtado', 'Eva Laura', ' ', '5268713', 'CBBA', 'Lic.', 'elch'),
(5, 'Herrera', 'Mamani', 'Wilder', ' ', '4060061', 'OR', 'Lic.', 'whm'),
(6, 'Garcia', 'Apaza', 'Patricia Carola', ' ', '4903915', 'LP', 'Lic.', 'pcga'),
(7, 'Ortega', 'Perez', 'Andres Cleto', ' ', '1411305-1M', 'CBBA', 'Lic,', 'pop'),
(8, 'Mamani ', 'Adrian', 'Peregrino', ' ', '3074161', 'OR', 'Lic.', 'pma'),
(9, 'Ramos', 'Aduviri', 'Oscar', ' ', '4333170', 'LP', 'Lic.', 'ora'),
(10, 'Gomez ', 'Rivera', 'Juan Pablo', ' ', '6859478', 'LP', 'Lic.', 'jpgr'),
(11, 'Torrez', 'Victoria', 'Maritza', ' ', '2346006', 'LP', 'Sra.', 'mtv'),
(12, 'Velasquez', 'Alacoria', 'Noemi Jacqueline', ' ', '9864651', 'L.P.', ' ', 'njva'),
(13, 'Velasquez', 'Bozo', 'Sonia Veronica', ' ', '3457109', 'LP', 'Lic.', 'svvb');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE `perfil` (
  `idperfil` int(11) NOT NULL,
  `perfil` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`idperfil`, `perfil`) VALUES
(1, 'USUARIO'),
(2, 'ADMINISTRADOR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_hojaruta`
--

CREATE TABLE `tipo_hojaruta` (
  `idtipo_hojaruta` int(11) NOT NULL,
  `tipo_hojaruta` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `tipo_hojaruta`
--

INSERT INTO `tipo_hojaruta` (`idtipo_hojaruta`, `tipo_hojaruta`) VALUES
(1, 'Evaluación de consistencia'),
(2, 'Auditorías'),
(3, 'Supervisiones'),
(4, 'Relevamientos de Información'),
(5, 'Contrataciones Directas'),
(6, 'Evaluación de Informes de UAI\'s'),
(7, 'Evaluación de Informes de POA y PE de UAI'),
(8, 'Solicitudes y denuncias'),
(9, 'Tareas Administrativas'),
(10, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion_archivo`
--

CREATE TABLE `ubicacion_archivo` (
  `idubicacion_archivo` int(11) NOT NULL,
  `ubicacion_archivo` varchar(45) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ubicacion_archivo`
--

INSERT INTO `ubicacion_archivo` (`idubicacion_archivo`, `ubicacion_archivo`) VALUES
(1, 'HR-CELESTE'),
(2, 'HRR-CENCAP'),
(3, 'HRR-GNRH'),
(4, 'HRR-GNAF'),
(5, 'HRR-DC'),
(6, 'HRR-SCG'),
(7, 'HRR-SCSL'),
(8, 'HRR-SCGM'),
(9, 'HRR-SCEP'),
(10, 'HRR-SCGD'),
(11, 'HRR-SCNC'),
(12, 'HRR-SCAT'),
(13, 'HRR-UAI'),
(14, 'HRR-GPA'),
(15, 'HRR-GPA2'),
(16, 'HRR-SG'),
(17, 'HRR-GDS'),
(18, 'HRR-GDT'),
(19, 'HRR-GDB'),
(20, 'HRR-GDN'),
(21, 'HRR-GDO'),
(22, 'HHR-GDP'),
(23, 'HRR-GDC'),
(24, 'HRR-GDH'),
(25, 'INF.EJE.EVE'),
(26, 'CONTRATOS'),
(27, ' ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idusuario` int(11) NOT NULL,
  `idnombre` int(11) NOT NULL,
  `usuario` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `fecha` date NOT NULL,
  `condicion` varchar(45) NOT NULL,
  `perfil` varchar(45) NOT NULL,
  `idarea` int(11) NOT NULL,
  `idcargo` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idusuario`, `idnombre`, `usuario`, `password`, `fecha`, `condicion`, `perfil`, `idarea`, `idcargo`) VALUES
(1, 1, 'lyapuchura', '5966306', '2022-04-21', 'ACTIVO', 'ADMINISTRADOR', 12, 43),
(2, 2, 'wvargas', '599958-1S', '2022-04-21', 'ACTIVO', 'ADMINISTRADOR', 12, 41),
(3, 13, 'svelasquez', '3457109', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 42),
(4, 3, 'emarquez', '4851906', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 44),
(5, 4, 'ecolque', '5268713', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 45),
(6, 5, 'wherrera', '4060061', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 46),
(7, 6, 'pgarcia', '4903915', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 47),
(8, 7, 'aortega', '1411305-1M', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 48),
(9, 8, 'pmamani', '3074161', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 49),
(10, 9, 'oramos', '4333170', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 50),
(11, 10, 'jgomez', '6859478', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 51),
(12, 11, 'mtorrez', '2346006', '2022-04-21', 'ACTIVO', 'USUARIO', 12, 52),
(13, 12, 'nvelasquez', '9864651', '2022-04-21', 'ACTIVO', 'ADMINISTRADOR', 12, 53);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`idarea`);

--
-- Indices de la tabla `bitacora_estado`
--
ALTER TABLE `bitacora_estado`
  ADD PRIMARY KEY (`idbitacora_estado`);

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`idcargo`);

--
-- Indices de la tabla `condicion`
--
ALTER TABLE `condicion`
  ADD PRIMARY KEY (`idcondicion`);

--
-- Indices de la tabla `corres`
--
ALTER TABLE `corres`
  ADD PRIMARY KEY (`idcorres`);

--
-- Indices de la tabla `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`iddepartamento`);

--
-- Indices de la tabla `deriva_corres`
--
ALTER TABLE `deriva_corres`
  ADD PRIMARY KEY (`idderiva_corres`);

--
-- Indices de la tabla `direccion`
--
ALTER TABLE `direccion`
  ADD PRIMARY KEY (`iddireccion`);

--
-- Indices de la tabla `documento_adj`
--
ALTER TABLE `documento_adj`
  ADD PRIMARY KEY (`iddocumento_adj`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`idestado`);

--
-- Indices de la tabla `historico_hr`
--
ALTER TABLE `historico_hr`
  ADD PRIMARY KEY (`idhistorico_hr`);

--
-- Indices de la tabla `instruccion`
--
ALTER TABLE `instruccion`
  ADD PRIMARY KEY (`idinstruccion`);

--
-- Indices de la tabla `log_login`
--
ALTER TABLE `log_login`
  ADD PRIMARY KEY (`idlog_login`);

--
-- Indices de la tabla `log_login_failure`
--
ALTER TABLE `log_login_failure`
  ADD PRIMARY KEY (`idlog_login_failure`);

--
-- Indices de la tabla `nombres`
--
ALTER TABLE `nombres`
  ADD PRIMARY KEY (`idnombre`);

--
-- Indices de la tabla `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`idperfil`);

--
-- Indices de la tabla `tipo_hojaruta`
--
ALTER TABLE `tipo_hojaruta`
  ADD PRIMARY KEY (`idtipo_hojaruta`);

--
-- Indices de la tabla `ubicacion_archivo`
--
ALTER TABLE `ubicacion_archivo`
  ADD PRIMARY KEY (`idubicacion_archivo`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `idnombre` (`idnombre`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `area`
--
ALTER TABLE `area`
  MODIFY `idarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `bitacora_estado`
--
ALTER TABLE `bitacora_estado`
  MODIFY `idbitacora_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `idcargo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `condicion`
--
ALTER TABLE `condicion`
  MODIFY `idcondicion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `corres`
--
ALTER TABLE `corres`
  MODIFY `idcorres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `departamento`
--
ALTER TABLE `departamento`
  MODIFY `iddepartamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `deriva_corres`
--
ALTER TABLE `deriva_corres`
  MODIFY `idderiva_corres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `direccion`
--
ALTER TABLE `direccion`
  MODIFY `iddireccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `documento_adj`
--
ALTER TABLE `documento_adj`
  MODIFY `iddocumento_adj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `idestado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `historico_hr`
--
ALTER TABLE `historico_hr`
  MODIFY `idhistorico_hr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=383;

--
-- AUTO_INCREMENT de la tabla `instruccion`
--
ALTER TABLE `instruccion`
  MODIFY `idinstruccion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `log_login`
--
ALTER TABLE `log_login`
  MODIFY `idlog_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `log_login_failure`
--
ALTER TABLE `log_login_failure`
  MODIFY `idlog_login_failure` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `nombres`
--
ALTER TABLE `nombres`
  MODIFY `idnombre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `perfil`
--
ALTER TABLE `perfil`
  MODIFY `idperfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tipo_hojaruta`
--
ALTER TABLE `tipo_hojaruta`
  MODIFY `idtipo_hojaruta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `ubicacion_archivo`
--
ALTER TABLE `ubicacion_archivo`
  MODIFY `idubicacion_archivo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
