-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-11-2022 a las 18:16:35
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `jugososlavina`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chat`
--

CREATE TABLE `chat` (
  `id_chat` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `mensaje` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `chat`
--

INSERT INTO `chat` (`id_chat`, `nombre`, `mensaje`) VALUES
(1, 'Admin', 'Bienvenidos a nuestro sistema de comercio electrónico...'),
(2, 'Benito Gutierrez', 'Buenos días, quisiera saber sobre...'),
(3, 'Maria Alejandra', 'Buenas tarde,s quisiera tener información de...'),
(4, 'Juan Felipe', 'Buenas noches, quisiera preguntar sobre...'),
(5, 'Diana Carolina', 'Hola, disculpen quisisera saber si...'),
(6, 'Lizeth Ramirez', 'Hola, buenos dias por favor...'),
(7, 'Felipe Romero', 'Helo help me please...'),
(8, 'Yesid Matta', 'Gracias por su información...'),
(9, 'Albeiro Romero', 'Agradeceria por favor mas información sobre...'),
(10, 'Maria Ramirez', 'Por favor quisiera tener ayuda sobre...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `documento` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `municipio` int(11) NOT NULL,
  `region` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_clientes`, `nombre`, `documento`, `email`, `telefono`, `direccion`, `fecha_nacimiento`, `municipio`, `region`, `foto`) VALUES
(1, 'primero', 123456789, 'asdfd@hotmail.com', '3204587963', 'calle 1', '1988-08-01', 1, 1, NULL),
(2, 'segundo', 987654321, 'asdfd@hotmail.com', '3204587963', 'calle 2', '1991-06-13', 28, 4, NULL),
(3, 'soy tercero', 489123578, 'asdfd@hotmail.com', '3204587963', 'calle 3', '1992-08-17', 5, 1, NULL),
(4, 'cuarto', 812132485, 'asdfd@hotmail.com', '3204587963', 'calle 4', '1987-04-19', 28, 4, NULL),
(5, 'quinto', 789121545, 'asdfd@hotmail.com', '3204587963', 'calle 5', '1991-11-21', 27, 2, NULL),
(10, 'pepito', 123456, 'asgfd@gfdgdf', '322457845', 'calle 64', '0000-00-00', 1, 1, 'pepito.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultar_producto`
--

CREATE TABLE `consultar_producto` (
  `id_consultar_producto` int(11) NOT NULL,
  `codigo` varchar(255) NOT NULL,
  `valor` double NOT NULL,
  `stock` int(11) NOT NULL,
  `r_producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consultar_producto`
--

INSERT INTO `consultar_producto` (`id_consultar_producto`, `codigo`, `valor`, `stock`, `r_producto`) VALUES
(3, 'JV01', 10000, 90, 1),
(4, 'JV02', 1000, 50, 2),
(6, 'JV03', 1000, 85, 3),
(9, 'JV04', 10000, 100, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contador_visitas`
--

CREATE TABLE `contador_visitas` (
  `id_contador_visitas` int(11) NOT NULL,
  `acumulado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `contador_visitas`
--

INSERT INTO `contador_visitas` (`id_contador_visitas`, `acumulado`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasxcobrar`
--

CREATE TABLE `cuentasxcobrar` (
  `id_cobrar` int(11) NOT NULL,
  `NIT` varchar(255) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `valor_factura` double NOT NULL,
  `fecha_factura` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuentasxcobrar`
--

INSERT INTO `cuentasxcobrar` (`id_cobrar`, `NIT`, `razon_social`, `valor_factura`, `fecha_factura`) VALUES
(1, '1121894523-2', 'Carcel Villavicencio', 700000, '2022-10-01'),
(2, '58742133-1', 'Fuerza aérea', 1200000, '2022-10-07'),
(3, '1121752436', 'ColFem', 500000, '2022-10-24'),
(7, '123123123', 'pepitas', 80000, '2022-12-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuentasxpagar`
--

CREATE TABLE `cuentasxpagar` (
  `id_pagar` int(11) NOT NULL,
  `ref_factura` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `valor` double NOT NULL,
  `fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuentasxpagar`
--

INSERT INTO `cuentasxpagar` (`id_pagar`, `ref_factura`, `nombre`, `valor`, `fecha`) VALUES
(1, 'r-445', 'Insumos plasticos', 200000, '2022-10-15'),
(3, 'hey', 'hey', 20000, '2021-01-07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_de_pago`
--

CREATE TABLE `datos_de_pago` (
  `id_datos_de_pago` int(11) NOT NULL,
  `nro_tarjeta` varchar(50) NOT NULL,
  `cod_seguridad` varchar(150) NOT NULL,
  `fecha_vencimiento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `datos_de_pago`
--

INSERT INTO `datos_de_pago` (`id_datos_de_pago`, `nro_tarjeta`, `cod_seguridad`, `fecha_vencimiento`) VALUES
(18, '1234567890123456', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '2023-12-31'),
(20, '8456210214785682', 'eff21ea61686d97a0501cf99893f46ea33538fa7', '2023-11-15'),
(21, '4679201457685123', '8702e64001542c19676730d4ffb224133f687aa5', '2023-12-22'),
(22, '8146930257154963', '570722b44ec7003126d686b70703051e72ff7408', '2023-10-15'),
(23, '9784582101123487', '8e77b368c8a97b4d56a7403da126be609f5b0eaf', '2023-12-08'),
(24, '0012585469821572', '9c320bc8499977b59b1c72b878b055ea494dd320', '2023-10-26'),
(25, '7958421020142575', '038e80506f190ff0ead67c00b7c201d914267d32', '2023-11-28'),
(26, '6754130287942165', '8f8e400b7be89653cf6372cfdd136fcdff19b1c7', '2023-11-16'),
(27, '8579652145014752', '242179c69b34910d4bf3555d9db31d00a362cbf3', '2023-10-05'),
(28, '8420164975632050', 'c291d2cd05a205c5c3d53a086c701af3e7d28f44', '2023-12-24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos_colombia`
--

CREATE TABLE `departamentos_colombia` (
  `id_departamentos` int(11) NOT NULL,
  `nombre_departamento` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `departamentos_colombia`
--

INSERT INTO `departamentos_colombia` (`id_departamentos`, `nombre_departamento`) VALUES
(1, 'Amazonas'),
(2, 'Antoquia'),
(3, 'Arauca'),
(4, 'Atlántico'),
(5, 'Bolivar'),
(6, 'Boyacá'),
(7, 'Caldas'),
(8, 'Caquetá'),
(9, 'Casanare'),
(10, 'Cauca'),
(11, 'Cesar'),
(12, 'Chocó'),
(13, 'Córdoba'),
(14, 'Cundinamarca'),
(15, 'Guainía'),
(16, 'Guaviare'),
(17, 'Huila'),
(18, 'La Guajira'),
(19, 'Magdalena'),
(20, 'Meta'),
(21, 'Nariño'),
(22, 'Norte de Santander'),
(23, 'Putumayo'),
(24, 'Quindío'),
(25, 'Risaralda'),
(26, 'San Andrés y Providencia'),
(27, 'Santander'),
(28, 'Sucre'),
(29, 'Tolima'),
(30, 'Valle del Cauca'),
(31, 'Vaupés'),
(32, 'Vichada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ecommerce`
--

CREATE TABLE `ecommerce` (
  `id_ecommerce` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `busqueda` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ecommerce`
--

INSERT INTO `ecommerce` (`id_ecommerce`, `url`, `busqueda`) VALUES
(1, 'www.jugososlavina.com/inicio', 'jugososlavina'),
(2, 'www.jugososlavina.com/jugosos', 'jugosos'),
(3, 'www.jugososlavina.com/agua', 'agua'),
(4, 'www.jugososlavina.com/maxnaranbotell', 'max naranja en botella'),
(5, 'www.jugososlavina.com/botellonagua', 'agua en botellon'),
(6, 'www.jugososlavina.com/refrescosx12', 'refrescos 12 unidades'),
(7, 'www.jugososlavina.com/paqprepx12', 'paquete de preparada'),
(8, 'www.jugososlavina.com/7litros', 'agua 7 litros'),
(9, 'www.jugososlavina.com/3_4agua', 'agua 3/4'),
(10, 'www.jugososlavina.com/maxnaranjax12', 'max naranja 12 unidades');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `identificacion` varchar(15) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `email` varchar(255) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `tipo_empleado` varchar(255) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `hv_empleado` varchar(255) DEFAULT NULL,
  `r_municipios` int(11) NOT NULL,
  `r_login` int(11) NOT NULL,
  `r_formulario` int(11) NOT NULL,
  `r_chat` int(11) NOT NULL,
  `r_encuesta` int(11) NOT NULL,
  `r_facturacion` int(11) NOT NULL,
  `r_registrar_pedido` int(11) NOT NULL,
  `r_mantenimiento` int(11) NOT NULL,
  `r_gestion_financiera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_empleado`, `nombre`, `identificacion`, `direccion`, `email`, `celular`, `tipo_empleado`, `foto`, `hv_empleado`, `r_municipios`, `r_login`, `r_formulario`, `r_chat`, `r_encuesta`, `r_facturacion`, `r_registrar_pedido`, `r_mantenimiento`, `r_gestion_financiera`) VALUES
(1, 'Luz Miryam Diaz Diaz', '39525933', 'calle 16 # 26-71', 'luzmi1216@gmail.com', '3102445416', 'administrador', '', '', 28, 11, 2, 1, 2, 1, 1, 2, 2),
(3, 'Diana Carolina Moreno Diaz', '1121845563', 'calle 64 # 32-85', 'dianamoreno-2424@hotmail.com', '3204006877', 'jefe operativa', '', '', 28, 13, 4, 3, 4, 4, 3, 4, 4),
(4, 'Bryan Stiven Ramirez', '1121702031', 'carrera 21 # 36-22', 'Bryan3235@gmail.com', '3204265987', 'empacador', '', '', 28, 14, 5, 4, 5, 5, 4, 5, 5),
(18, 'Belisario Ramirez Yate', '17336031', 'carrera 22 # 45-61', 'belisar@gmail.com', '3112774225', 'supervisor de ventas', '', '', 28, 25, 3, 2, 3, 3, 2, 3, 3),
(19, 'Edwar Agusto Perez', '1121456912', 'carrera 62 # 86-12', 'edwar6622@hotmail.com', '3104548263', 'sellador', '', '', 28, 26, 6, 5, 6, 6, 5, 6, 6),
(20, 'Camilo Torres Torres', '1121649032', 'calle 26 # 26-91', 'cont2020@gmail.com', '3234237791', 'contador', '', '', 28, 27, 7, 6, 7, 7, 6, 7, 7),
(21, 'Lina Romero Rojas', '1121963745', 'carrera 72 # 45-37', 'linitaroj@gmail.com', '3106642265', 'auxiliar operativa', '', '', 28, 17, 8, 7, 8, 8, 7, 8, 8),
(22, 'Jesus David Fajardo Paez', '1121584632', 'calle 22 # 35-67', 'jesuscond@gmail.com', '3138222365', 'auxiliar operativo', '', '', 28, 18, 9, 8, 9, 9, 8, 9, 9),
(23, 'William Alberto Gutierrez Rojas', '17665893', 'calle 19 # 83-21', 'william2445@gmail.com', '3102234233', 'auxiliar operativo', '', '', 28, 19, 10, 9, 10, 10, 9, 10, 10),
(24, 'Yeraldine Lizeth Ramirez', '1121854601', 'calle 42 # 22-81', 'lizthadmin7@gmail.com', '3234458297', 'auxiliar administrativo', '', '', 28, 28, 1, 10, 1, 2, 10, 1, 1),
(46, 'ffgf', '123154', 'afgdf', 'afgdf@afdgdf', '321545645', 'pich', '123154.jpg', '123154_ffgf.pdf', 16, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta`
--

CREATE TABLE `encuesta` (
  `id_encuesta` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `identificacion` varchar(15) NOT NULL,
  `respuesta1` enum('a','b','c') NOT NULL,
  `respuesta2` enum('a','b','c') NOT NULL,
  `respuesta3` enum('a','b','c') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `encuesta`
--

INSERT INTO `encuesta` (`id_encuesta`, `nombre`, `identificacion`, `respuesta1`, `respuesta2`, `respuesta3`) VALUES
(1, 'Santiago Romero', '1121870142', 'b', 'a', 'a'),
(2, 'Camilo Perez', '1121845965', 'a', 'c', 'a'),
(3, 'Carolina Cardona', '1121854214', 'c', 'b', 'a'),
(4, 'Benito Carrillo', '1121751239', 'b', 'b', 'c'),
(5, 'Sara Lopez', '1121572145', 'a', 'a', 'b'),
(6, 'Pedro Ramirez', '1121792146', 'b', 'c', 'a'),
(7, 'Sergio Rojas', '1121812454', 'c', 'a', 'b'),
(8, 'Camila Nuñez', '1121014214', 'c', 'c', 'b'),
(9, 'Pablo Castañeda', '1121921425', 'a', 'b', 'c'),
(10, 'Ana Maria Cardona', '1121232948', 'b', 'b', 'a');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `id_facturacion` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `cliente` int(11) NOT NULL,
  `productos` text NOT NULL,
  `cantidad` text NOT NULL,
  `valor_unidad` text NOT NULL,
  `subtotal` text NOT NULL,
  `total` double NOT NULL,
  `metodo_pago` text NOT NULL,
  `hora` time DEFAULT NULL,
  `nit` int(11) DEFAULT NULL,
  `direccion` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `facturacion`
--

INSERT INTO `facturacion` (`id_facturacion`, `fecha`, `cliente`, `productos`, `cantidad`, `valor_unidad`, `subtotal`, `total`, `metodo_pago`, `hora`, `nit`, `direccion`) VALUES
(20, '2022-11-09', 4, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"6\";}', 'a:2:{i:0;s:4:\"1000\";i:1;s:5:\"10000\";}', 'a:2:{i:0;i:1000;i:1;i:60000;}', 61000, 'Efectivo', NULL, NULL, NULL),
(21, '2022-11-10', 3, 'a:2:{i:0;s:1:\"3\";i:1;s:1:\"3\";}', 'a:2:{i:0;s:1:\"1\";i:1;s:1:\"1\";}', 'a:2:{i:0;s:4:\"1000\";i:1;s:4:\"1000\";}', 'a:2:{i:0;i:1000;i:1;i:1000;}', 2000, 'Tarjeta', NULL, NULL, NULL),
(22, '2022-11-10', 4, 'a:2:{i:0;s:1:\"6\";i:1;s:1:\"4\";}', 'a:2:{i:0;s:1:\"5\";i:1;s:1:\"7\";}', 'a:2:{i:0;s:4:\"7000\";i:1;s:5:\"10000\";}', 'a:2:{i:0;i:35000;i:1;i:70000;}', 105000, 'Tarjeta', NULL, NULL, NULL),
(23, '2022-11-13', 10, 'a:3:{i:0;s:1:\"1\";i:1;s:1:\"3\";i:2;s:1:\"3\";}', 'a:3:{i:0;s:1:\"5\";i:1;s:1:\"5\";i:2;s:1:\"1\";}', 'a:3:{i:0;s:5:\"10000\";i:1;s:4:\"1000\";i:2;s:4:\"1000\";}', 'a:3:{i:0;i:50000;i:1;i:5000;i:2;i:1000;}', 56000, 'Tarjeta', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `formulario`
--

CREATE TABLE `formulario` (
  `id_formulario` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `identificacion` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `solicitud` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `formulario`
--

INSERT INTO `formulario` (`id_formulario`, `nombre`, `identificacion`, `email`, `solicitud`) VALUES
(1, 'Alejandra Romero', '1121846205', 'alejrom@gmail.com', 'La siguiente solicitud es para...'),
(2, 'Maria Ramirez', '1121854902', 'mariaram@gmail.com', 'La siguiente solicitud es para...'),
(3, 'Camila Gutierrez', '1121276412', 'camilagut@gmail.com', 'La siguiente solicitud es para...'),
(4, 'Miguel Ardila', '1121852016', 'miguelard@gmail.com', 'Me dirijo a ustedes para...'),
(5, 'Stiven Paez', '1121561027', 'stivpa@gmail.com', 'La siguiente solicitud es para...'),
(6, 'Camila Romero', '1121888945', 'camirom94@hotmail.com', 'Me dirijo con la siguiente solicitud para...'),
(7, 'Alvaro Fajardo', '1121827091', 'alvfaj@gmail.com', 'La siguiente solicitud es para...'),
(8, 'Carlos Gutierrez', '1121563012', 'carlgut@gmail.com', 'Me dirijo a ustedes para...'),
(9, 'Diana Moreno', '1121852654', 'morendian@gmail.com', 'La siguiente solicitud es para...'),
(10, 'Luisa Espinoza', '1121917353', 'espinosa89luisa@gmail.com', 'Me dirijo a ustedes para...');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gestion_financiera`
--

CREATE TABLE `gestion_financiera` (
  `id_gestion_financiera` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `ingreso` double NOT NULL,
  `egreso` double NOT NULL,
  `nominas` double NOT NULL,
  `cts_por cobrar` double NOT NULL,
  `cts_por_pagar` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gestion_financiera`
--

INSERT INTO `gestion_financiera` (`id_gestion_financiera`, `fecha`, `ingreso`, `egreso`, `nominas`, `cts_por cobrar`, `cts_por_pagar`) VALUES
(1, '2022-06-15', 4000000, 1000000, 1500000, 650000, 350000),
(2, '2022-06-15', 3800000, 1000000, 1500000, 800000, 350000),
(3, '2022-06-16', 3700000, 1000000, 1500000, 500000, 250000),
(4, '2022-06-17', 3500000, 1000000, 1500000, 600000, 150000),
(5, '2022-06-18', 3800000, 1000000, 1500000, 450000, 350000),
(6, '2022-06-19', 3500000, 1000000, 1500000, 800000, 250000),
(7, '2022-06-20', 3900000, 1000000, 1500000, 900000, 150000),
(8, '2022-06-21', 3800000, 1000000, 1500000, 500000, 250000),
(9, '2022-06-22', 3700000, 1000000, 1500000, 600000, 400000),
(10, '2022-06-23', 3500000, 1000000, 1500000, 700000, 450000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `usuario` varchar(255) NOT NULL,
  `contrasena` varchar(255) NOT NULL,
  `r_ecommerce` int(11) NOT NULL,
  `r_datos_de_pago` int(11) NOT NULL,
  `r_gestion_financiera` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login`
--

INSERT INTO `login` (`id_login`, `usuario`, `contrasena`, `r_ecommerce`, `r_datos_de_pago`, `r_gestion_financiera`) VALUES
(11, 'genesis2021', '5e5f911455899a9f9f32dd770c76fbb535a45e87', 1, 18, 2),
(13, 'samuraix', 'f7b6ec1437287cafac8b1d44a3ea003572b955ce', 3, 20, 4),
(14, 'tatto', '7cbb9726fba16ec047f537e7bf96881cc5c6beb6', 4, 21, 5),
(17, 'benshi22', 'f329996c951474be947b58e747a01d40f19e1f3a', 7, 24, 8),
(18, 'tatu123', '5a74ef438bbcf587c72f473e81af6c3119cbce16', 8, 25, 9),
(19, 'exodus', 'fcc1e34431e0fdda21715bd3cd554c682b763d09', 9, 26, 10),
(25, 'aurora3', 'b747d6d2a3df08a55f4313c116c8033a677c8e0f', 2, 28, 3),
(26, 'antilope35', 'c79bbf2b0a474b3487e31b4f0ee4b416270ccd78', 5, 22, 6),
(27, 'rapsody', '0d7fe8195ba0e63a5510b4d75280f6c23973e126', 6, 23, 7),
(28, 'chimaira77', '05eedeafbefb716c85e84f7c997e664a78e186c8', 10, 27, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mantenimiento`
--

CREATE TABLE `mantenimiento` (
  `id_mantenimiento` int(11) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `mantenimiento`
--

INSERT INTO `mantenimiento` (`id_mantenimiento`, `tipo`, `fecha`, `hora`) VALUES
(1, 'correctivo', '2022-06-01', '23:00:00'),
(2, 'correctivo', '2022-06-15', '22:00:00'),
(3, 'preventivo', '2022-06-20', '22:00:00'),
(4, 'preventivo', '2022-06-30', '22:00:00'),
(5, 'correctivo', '2022-07-05', '23:00:00'),
(6, 'preventivo', '2022-07-15', '22:00:00'),
(7, 'correctivo', '2022-08-30', '23:00:00'),
(8, 'preventivo', '2022-07-31', '22:00:00'),
(9, 'preventivo', '2022-08-05', '21:00:00'),
(10, 'preventivo', '2022-08-15', '22:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipios` int(11) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `r_regiones` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id_municipios`, `municipio`, `r_regiones`) VALUES
(1, 'Acacias', 1),
(2, 'Barranca de Upia', 1),
(3, 'Cabuyaro', 1),
(4, 'Castilla La Nueva', 2),
(5, 'Cubarral', 1),
(6, 'Cumaral', 1),
(7, 'El Calvario', 1),
(8, 'El Castillo', 3),
(9, 'El Dorado', 3),
(10, 'Fuente de Oro', 3),
(11, 'Granada', 3),
(12, 'Guamal', 1),
(13, 'La Macarena', 3),
(14, 'La Uribe', 3),
(15, 'Lejanias', 3),
(16, 'Mapiripan', 3),
(17, 'Mesetas', 3),
(18, 'Puerto Concordia', 3),
(19, 'Puerto Gaitan', 2),
(20, 'Puerto Lleras', 3),
(21, 'Puerto Lopez', 2),
(22, 'Puerto Rico', 3),
(23, 'Restrepo', 1),
(24, 'San Carlos de Guaroa', 1),
(25, 'San Juan de Arama', 3),
(26, 'San Juanito', 1),
(27, 'San Martin', 2),
(28, 'Villavicencio', 4),
(29, 'Vista Hermosa', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios_colombia`
--

CREATE TABLE `municipios_colombia` (
  `id_municipios` int(11) NOT NULL,
  `nombre_municipio` varchar(255) NOT NULL,
  `r_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `municipios_colombia`
--

INSERT INTO `municipios_colombia` (`id_municipios`, `nombre_municipio`, `r_departamento`) VALUES
(1, 'Leticia', 1),
(2, 'Medellin', 2),
(3, 'Arauca', 3),
(4, 'Barranquilla', 4),
(5, 'Cartagena', 5),
(6, 'Tunja', 6),
(7, 'Manizales', 7),
(8, 'Florencia', 8),
(9, 'Yopal', 9),
(10, 'Popayán', 10),
(11, 'Valledupar', 11),
(12, 'Quibdó', 12),
(13, 'Montería', 13),
(14, 'Bogotá', 14),
(15, 'Inírida', 15),
(16, 'San José del Guaviare', 16),
(17, 'Neiva', 17),
(18, 'Riohacha', 18),
(19, 'Santa Marta', 19),
(20, 'Villavicencio', 20),
(21, 'Pasto', 21),
(22, 'Cúcuta', 22),
(23, 'Mocoa', 23),
(24, 'Armenia', 24),
(25, 'Pereira', 25),
(26, 'San Andrés', 26),
(27, 'Bucaramanga', 27),
(28, 'Sincelejo', 28),
(29, 'Ibagué', 29),
(30, 'Cali', 30),
(31, 'Mitú', 31),
(32, 'Puerto Carreño', 32);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nominas`
--

CREATE TABLE `nominas` (
  `id_nomina` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nombre_trabajador` int(11) NOT NULL,
  `dias_laborados` int(11) NOT NULL,
  `salario_diario` double NOT NULL,
  `auxilio_transporte` double NOT NULL,
  `seguridad_social` double NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `nominas`
--

INSERT INTO `nominas` (`id_nomina`, `fecha`, `nombre_trabajador`, `dias_laborados`, `salario_diario`, `auxilio_transporte`, `seguridad_social`, `Total`) VALUES
(1, '2022-01-31', 1, 31, 60000, 150000, 85000, 2095000),
(2, '2022-01-31', 3, 31, 50000, 150000, 85000, 1785000),
(3, '2022-01-31', 4, 31, 40000, 150000, 85000, 1475000),
(5, '2022-03-31', 1, 29, 40000, 150000, 85000, 4000000),
(6, '2022-03-31', 4, 28, 35000, 150000, 85000, 1500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `nit_cliente` varchar(15) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `total` double NOT NULL,
  `r_facturacion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `caracteristicas` varchar(255) NOT NULL,
  `precio` double NOT NULL,
  `cantidad` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_producto`, `nombre`, `caracteristicas`, `precio`, `cantidad`, `foto`) VALUES
(1, 'max naranja bolsa', 'pack 12 unidades', 10000, 80, NULL),
(2, 'max naranja botella', '1 litro', 2000, 60, NULL),
(3, 'agua 7 litros', 'bolsa 7 litros', 1000, 150, NULL),
(4, 'preparada', 'bolsa 12 unidades', 10000, 90, NULL),
(5, 'refresco congelado', 'pack x 12 unid.', 6000, 120, NULL),
(6, 'agua bolsa 3/4', 'pack x 12 unid.', 7000, 150, NULL),
(7, 'agua bolsa 1/2', 'pack x 12 unid', 5000, 160, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `r_municipio` int(11) NOT NULL,
  `r_departamento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id_proveedor`, `nombre`, `direccion`, `telefono`, `email`, `r_municipio`, `r_departamento`) VALUES
(1, 'Frutaroma', 'Calle 14 No. 27A-123', '315 573 27 84', 'servicliente@kelsis.com', 30, 30),
(2, 'Cimpa', 'Avenida Américas No. 63-05', '315 310 73 23', 'centrodecontacto@cimpa.com.co', 14, 14),
(3, 'Liquid Flavors', 'AU Medellin KM 5.9 Parque Industrial El Rincon', '310 262 51 56', 'ventas@liquidflavors.co', 2, 2),
(4, 'Serviplasticos', 'Cl. 19 Sur #42-119 ', '313 481 38 31', 'Serviplas@gmail.com', 20, 20),
(5, 'Makro', 'Carrera 22 # 7-37 vía VVC CO 500004, Puerto López', '86829292', 'notificaciones@makro.com.co.', 20, 20),
(7, 'prueba1', 'calle 45', '3220148795', 'prueba@gmail.com', 10, 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `regiones`
--

CREATE TABLE `regiones` (
  `id_regiones` int(11) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `regiones`
--

INSERT INTO `regiones` (`id_regiones`, `region`) VALUES
(1, 'Piedemonte'),
(2, 'Rio Meta'),
(3, 'Ariari'),
(4, 'Capital');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registrar_pedido`
--

CREATE TABLE `registrar_pedido` (
  `id_registrar_pedido` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `hora` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `registrar_pedido`
--

INSERT INTO `registrar_pedido` (`id_registrar_pedido`, `fecha`, `hora`) VALUES
(1, '2022-06-01', '08:30:00'),
(2, '2022-06-01', '09:30:00'),
(3, '2022-06-01', '09:59:00'),
(4, '2022-06-01', '13:00:00'),
(5, '2022-06-02', '09:00:00'),
(6, '2022-06-02', '10:30:00'),
(7, '2022-06-02', '14:30:00'),
(8, '2022-06-02', '15:00:00'),
(9, '2022-06-03', '09:30:00'),
(10, '2022-06-04', '10:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `user` varchar(255) NOT NULL,
  `identificacion` varchar(15) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `direccion` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `contrasena` varchar(150) NOT NULL,
  `rol` varchar(255) NOT NULL,
  `activo` varchar(3) NOT NULL,
  `r_ecommerce` int(11) NOT NULL,
  `r_login` int(11) NOT NULL,
  `r_datos_de_pago` int(11) NOT NULL,
  `r_contador_visitas` int(11) NOT NULL,
  `r_encuesta` int(11) NOT NULL,
  `r_consultar_producto` int(11) NOT NULL,
  `r_chat` int(11) NOT NULL,
  `r_formulario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre`, `user`, `identificacion`, `celular`, `direccion`, `email`, `contrasena`, `rol`, `activo`, `r_ecommerce`, `r_login`, `r_datos_de_pago`, `r_contador_visitas`, `r_encuesta`, `r_consultar_producto`, `r_chat`, `r_formulario`) VALUES
(53, 'Luz Miryam Diaz Diaz', 'luzmy7', '39525933', '3102445416', '', 'calle 16 # 26-71', '20eabe5d64b0e216796e834f52d61fd0b70332fc', 'administrador', 'Si', 0, 0, 0, 0, 0, 0, 0, 0),
(54, 'Diana Carolina Moreno Diaz', 'dianmore8', '1121845563', '3204006877', '', 'dianamoreno-2424@hotmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'jefe operativa', 'Si', 0, 0, 0, 0, 0, 0, 0, 0),
(55, 'Belisario Ramirez Yate', 'Belis9', '17336031', '3112774225', '', 'belisar@gmail.com', 'f7c3bc1d808e04732adf679965ccc34ca7ae3441', 'supervisor de ventas', 'Si', 0, 0, 0, 0, 0, 0, 0, 0),
(57, 'Camilo Torres Torres', 'camil5', '1121649032', '3234237791', '', 'cont2020@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 'contador', 'No', 0, 0, 0, 0, 0, 0, 0, 0),
(58, 'Yeraldine Lizeth Ramirez', 'Yeral6', '1121854601', '3234458297', '', 'lizthadmin7@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 'aux administrativa', 'Si', 0, 0, 0, 0, 0, 0, 0, 0),
(61, 'benito', 'benito8', '123456789', '3224567894', '', 'benito8@hotmail.com', '7c222fb2927d828af22f592134e8932480637c0d', 'chofer', 'Si', 0, 0, 0, 0, 0, 0, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id_chat`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`);

--
-- Indices de la tabla `consultar_producto`
--
ALTER TABLE `consultar_producto`
  ADD PRIMARY KEY (`id_consultar_producto`),
  ADD KEY `r_producto` (`r_producto`);

--
-- Indices de la tabla `contador_visitas`
--
ALTER TABLE `contador_visitas`
  ADD PRIMARY KEY (`id_contador_visitas`);

--
-- Indices de la tabla `cuentasxcobrar`
--
ALTER TABLE `cuentasxcobrar`
  ADD PRIMARY KEY (`id_cobrar`);

--
-- Indices de la tabla `cuentasxpagar`
--
ALTER TABLE `cuentasxpagar`
  ADD PRIMARY KEY (`id_pagar`);

--
-- Indices de la tabla `datos_de_pago`
--
ALTER TABLE `datos_de_pago`
  ADD PRIMARY KEY (`id_datos_de_pago`);

--
-- Indices de la tabla `departamentos_colombia`
--
ALTER TABLE `departamentos_colombia`
  ADD PRIMARY KEY (`id_departamentos`);

--
-- Indices de la tabla `ecommerce`
--
ALTER TABLE `ecommerce`
  ADD PRIMARY KEY (`id_ecommerce`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `r_login` (`r_login`),
  ADD KEY `r_formulario` (`r_formulario`),
  ADD KEY `r_chat` (`r_chat`),
  ADD KEY `r_encuesta` (`r_encuesta`),
  ADD KEY `r_facturacion` (`r_facturacion`),
  ADD KEY `r_registrar_pedido` (`r_registrar_pedido`),
  ADD KEY `r_mantenimiento` (`r_mantenimiento`),
  ADD KEY `r_gestion_financiera` (`r_gestion_financiera`),
  ADD KEY `r_municipios` (`r_municipios`);

--
-- Indices de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  ADD PRIMARY KEY (`id_encuesta`);

--
-- Indices de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD PRIMARY KEY (`id_facturacion`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `nit` (`nit`),
  ADD KEY `direccion` (`direccion`);

--
-- Indices de la tabla `formulario`
--
ALTER TABLE `formulario`
  ADD PRIMARY KEY (`id_formulario`);

--
-- Indices de la tabla `gestion_financiera`
--
ALTER TABLE `gestion_financiera`
  ADD PRIMARY KEY (`id_gestion_financiera`);

--
-- Indices de la tabla `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`),
  ADD KEY `r_ecommerce` (`r_ecommerce`),
  ADD KEY `r_datos_de_pago` (`r_datos_de_pago`),
  ADD KEY `r_gestion_financiera` (`r_gestion_financiera`);

--
-- Indices de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  ADD PRIMARY KEY (`id_mantenimiento`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipios`),
  ADD KEY `r_regiones` (`r_regiones`);

--
-- Indices de la tabla `municipios_colombia`
--
ALTER TABLE `municipios_colombia`
  ADD PRIMARY KEY (`id_municipios`),
  ADD KEY `r_departamento` (`r_departamento`);

--
-- Indices de la tabla `nominas`
--
ALTER TABLE `nominas`
  ADD PRIMARY KEY (`id_nomina`),
  ADD KEY `nombre_trabajador` (`nombre_trabajador`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `r_facturacion` (`r_facturacion`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id_proveedor`),
  ADD KEY `r_municipio` (`r_municipio`),
  ADD KEY `r_departamento` (`r_departamento`);

--
-- Indices de la tabla `regiones`
--
ALTER TABLE `regiones`
  ADD PRIMARY KEY (`id_regiones`);

--
-- Indices de la tabla `registrar_pedido`
--
ALTER TABLE `registrar_pedido`
  ADD PRIMARY KEY (`id_registrar_pedido`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `r_ecommerce` (`r_ecommerce`),
  ADD KEY `r_login` (`r_login`),
  ADD KEY `r_datos_de_pago` (`r_datos_de_pago`),
  ADD KEY `r_contador_visitas` (`r_contador_visitas`),
  ADD KEY `r_encuesta` (`r_encuesta`),
  ADD KEY `r_consultar_producto` (`r_consultar_producto`),
  ADD KEY `r_chat` (`r_chat`),
  ADD KEY `r_formulario` (`r_formulario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `chat`
--
ALTER TABLE `chat`
  MODIFY `id_chat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_clientes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `consultar_producto`
--
ALTER TABLE `consultar_producto`
  MODIFY `id_consultar_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `contador_visitas`
--
ALTER TABLE `contador_visitas`
  MODIFY `id_contador_visitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `cuentasxcobrar`
--
ALTER TABLE `cuentasxcobrar`
  MODIFY `id_cobrar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `cuentasxpagar`
--
ALTER TABLE `cuentasxpagar`
  MODIFY `id_pagar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `datos_de_pago`
--
ALTER TABLE `datos_de_pago`
  MODIFY `id_datos_de_pago` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `departamentos_colombia`
--
ALTER TABLE `departamentos_colombia`
  MODIFY `id_departamentos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `ecommerce`
--
ALTER TABLE `ecommerce`
  MODIFY `id_ecommerce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `encuesta`
--
ALTER TABLE `encuesta`
  MODIFY `id_encuesta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  MODIFY `id_facturacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `formulario`
--
ALTER TABLE `formulario`
  MODIFY `id_formulario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `gestion_financiera`
--
ALTER TABLE `gestion_financiera`
  MODIFY `id_gestion_financiera` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `mantenimiento`
--
ALTER TABLE `mantenimiento`
  MODIFY `id_mantenimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id_municipios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `municipios_colombia`
--
ALTER TABLE `municipios_colombia`
  MODIFY `id_municipios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `nominas`
--
ALTER TABLE `nominas`
  MODIFY `id_nomina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `regiones`
--
ALTER TABLE `regiones`
  MODIFY `id_regiones` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `registrar_pedido`
--
ALTER TABLE `registrar_pedido`
  MODIFY `id_registrar_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `consultar_producto`
--
ALTER TABLE `consultar_producto`
  ADD CONSTRAINT `consultar_producto_ibfk_1` FOREIGN KEY (`r_producto`) REFERENCES `producto` (`id_producto`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD CONSTRAINT `facturacion_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `clientes` (`id_clientes`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`r_ecommerce`) REFERENCES `ecommerce` (`id_ecommerce`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `login_ibfk_2` FOREIGN KEY (`r_datos_de_pago`) REFERENCES `datos_de_pago` (`id_datos_de_pago`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `login_ibfk_3` FOREIGN KEY (`r_gestion_financiera`) REFERENCES `gestion_financiera` (`id_gestion_financiera`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`r_regiones`) REFERENCES `regiones` (`id_regiones`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipios_colombia`
--
ALTER TABLE `municipios_colombia`
  ADD CONSTRAINT `municipios_colombia_ibfk_1` FOREIGN KEY (`r_departamento`) REFERENCES `departamentos_colombia` (`id_departamentos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `nominas`
--
ALTER TABLE `nominas`
  ADD CONSTRAINT `nominas_ibfk_1` FOREIGN KEY (`nombre_trabajador`) REFERENCES `empleado` (`id_empleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `pedido_ibfk_1` FOREIGN KEY (`r_facturacion`) REFERENCES `facturacion` (`id_facturacion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`r_municipio`) REFERENCES `municipios_colombia` (`id_municipios`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
