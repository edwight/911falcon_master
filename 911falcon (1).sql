-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-08-2016 a las 15:16:36
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `911falcon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `casos`
--

CREATE TABLE `casos` (
  `id` int(10) UNSIGNED NOT NULL,
  `efectivos` int(10) UNSIGNED NOT NULL,
  `sinefecto` int(10) UNSIGNED NOT NULL,
  `noatendida` int(10) UNSIGNED NOT NULL,
  `repetida` int(10) UNSIGNED NOT NULL,
  `apoyo` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactos`
--

CREATE TABLE `contactos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `apellido` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `cedula` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `estado_id` int(10) UNSIGNED DEFAULT NULL,
  `municipio_id` int(10) UNSIGNED NOT NULL,
  `parroquia_id` int(10) UNSIGNED NOT NULL,
  `localidad_id` int(10) UNSIGNED DEFAULT NULL,
  `direccion_id` int(10) UNSIGNED NOT NULL,
  `motivo_id` int(10) UNSIGNED NOT NULL,
  `fecha_at` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contactos`
--

INSERT INTO `contactos` (`id`, `nombre`, `apellido`, `cedula`, `telefono`, `status`, `estado_id`, `municipio_id`, `parroquia_id`, `localidad_id`, `direccion_id`, `motivo_id`, `fecha_at`, `created_at`, `updated_at`) VALUES
(1, 'Evert Lind', 'Miss Elna McClure', '4916796642', '1-283-947-68', 0, NULL, 0, 0, NULL, 0, 0, '2016-06-27 00:02:15', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(2, 'Prof. Bill Brakus Jr.', 'Rosetta Tillman PhD', '4639801249', '+17737495674', 0, NULL, 0, 0, NULL, 0, 0, '2015-09-07 12:12:46', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(3, 'Mr. Barrett Mills', 'Aubree Hegmann', '5552983106', '716.898.1863', 0, NULL, 0, 0, NULL, 0, 0, '2016-06-13 23:41:20', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(4, 'Wilfrid Shanahan', 'Tyrese Kerluke', '5112042096', '520.320.3021', 0, NULL, 0, 0, NULL, 0, 0, '2015-09-04 11:29:35', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(5, 'Bailey Bruen', 'Mr. Ewell Graham', '5373164551', '803.797.4336', 0, NULL, 0, 0, NULL, 0, 0, '2016-01-10 16:40:25', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(6, 'Jessyca Thiel', 'Turner Toy II', '4916371199', '897-497-2981', 0, NULL, 0, 0, NULL, 0, 0, '2016-01-31 23:27:34', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(7, 'Talia Jaskolski', 'Prof. Dorothy Goodwin DVM', '4532757988', '309.781.0794', 0, NULL, 0, 0, NULL, 0, 0, '2015-10-04 13:36:30', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(8, 'Dr. Tyrese Reilly I', 'Karlee Ward Jr.', '5452283371', '219.763.0268', 0, NULL, 0, 0, NULL, 0, 0, '2016-07-11 23:09:09', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(9, 'Buck Hegmann V', 'Ms. Katlyn Adams', '4115657684', '1-306-590-28', 0, NULL, 0, 0, NULL, 0, 0, '2016-05-03 22:11:04', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(10, 'Elvie Stamm', 'Dr. Dortha Prohaska', '5210453232', '403-417-2619', 0, NULL, 0, 0, NULL, 0, 0, '2015-09-13 02:00:59', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(11, 'Dr. Israel Morissette DDS', 'Prof. Celestino Wilkinson', '6011984349', '1-678-679-38', 0, NULL, 0, 0, NULL, 0, 0, '2016-04-30 19:13:09', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(12, 'Evangeline Mante III', 'Miss Vanessa Huels DDS', '4485595651', '+17085717744', 0, NULL, 0, 0, NULL, 0, 0, '2015-08-31 19:20:33', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(13, 'Prof. Franz Effertz PhD', 'Mrs. Fae Considine Jr.', '5285665031', '(264) 550-24', 0, NULL, 0, 0, NULL, 0, 0, '2015-09-12 05:39:01', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(14, 'Mr. Luis Rodriguez', 'Mr. General Wolff DDS', '6011487799', '562-591-9728', 0, NULL, 0, 0, NULL, 0, 0, '2016-03-14 09:25:25', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(15, 'Brielle Flatley', 'Marcelina Weimann', '5272342399', '+1-927-736-4', 0, NULL, 0, 0, NULL, 0, 0, '2016-03-18 05:46:43', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(16, 'Sadie Prosacco II', 'Sylvester Jacobs', '5410357449', '(737) 967-97', 0, NULL, 0, 0, NULL, 0, 0, '2016-01-21 03:39:30', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(17, 'Mr. Keeley Gutkowski', 'Helen Kemmer', '3475531860', '+1-798-276-1', 0, NULL, 0, 0, NULL, 0, 0, '2016-08-10 10:13:04', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(18, 'Jade Stroman', 'Prof. Karina Hettinger', '4024007165', '992-291-0802', 0, NULL, 0, 0, NULL, 0, 0, '2016-03-21 01:24:26', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(19, 'Zackary O''Hara Jr.', 'Mrs. Carolyn Kuphal', '5597984979', '725-613-3520', 0, NULL, 0, 0, NULL, 0, 0, '2016-04-21 11:06:14', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(20, 'Stacey Daugherty', 'Ms. Felicity Satterfield', '4485424862', '1-456-761-16', 0, NULL, 0, 0, NULL, 0, 0, '2016-05-18 05:24:34', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(21, 'Paul Rogahn', 'Ines Erdman', '4916083599', '+13462296544', 0, NULL, 0, 0, NULL, 0, 0, '2015-12-13 12:21:18', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(22, 'Berniece Crooks', 'Emmet O''Kon', '5519403938', '485-418-6352', 0, NULL, 0, 0, NULL, 0, 0, '2015-10-27 15:21:19', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(23, 'Mr. Emanuel Heidenreich PhD', 'Alysson Hauck', '5145823111', '+19804773481', 0, NULL, 0, 0, NULL, 0, 0, '2016-02-04 06:18:46', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(24, 'Fae Crona', 'Kristofer Metz', '5381169290', '683-444-1146', 0, NULL, 0, 0, NULL, 0, 0, '2016-07-21 03:49:53', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(25, 'Dariana Kuhic', 'Mrs. Talia Gutmann Sr.', '5462881042', '1-316-863-10', 0, NULL, 0, 0, NULL, 0, 0, '2015-09-21 16:54:27', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(26, 'Olaf Little', 'Rowland Hodkiewicz Sr.', '4532604827', '893.714.5650', 0, NULL, 0, 0, NULL, 0, 0, '2015-08-30 05:44:06', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(27, 'Maynard Watsica', 'Prof. Cecilia Steuber IV', '4294032827', '242.233.0393', 0, NULL, 0, 0, NULL, 0, 0, '2016-06-16 09:30:48', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(28, 'Dr. Alexandre Schowalter DVM', 'Dr. Althea Nader IV', '5328874232', '+1-751-872-3', 0, NULL, 0, 0, NULL, 0, 0, '2016-07-24 02:55:30', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(29, 'Mariane Barrows', 'Kimberly Wolff', '4463034295', '1-465-502-20', 0, NULL, 0, 0, NULL, 0, 0, '2016-05-21 18:07:22', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(30, 'Kathleen Runolfsdottir IV', 'Prof. Bradley Sporer', '5552314327', '1-371-370-14', 0, NULL, 0, 0, NULL, 0, 0, '2016-07-13 16:24:34', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(31, 'Dr. Urban Schultz II', 'Griffin Farrell', '3460877627', '(602) 227-33', 0, NULL, 0, 0, NULL, 0, 0, '2015-11-08 12:02:38', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(32, 'Clark Lockman PhD', 'Kitty Nolan DDS', '3732015644', '672-226-8826', 0, NULL, 0, 0, NULL, 0, 0, '2016-02-20 16:50:14', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(33, 'Peter Ryan', 'Hermina Corkery', '3449148424', '1-532-243-72', 0, NULL, 0, 0, NULL, 0, 0, '2016-05-16 20:56:34', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(34, 'Dr. Amina Schumm', 'Anastasia Kirlin', '4511681817', '879-575-4728', 0, NULL, 0, 0, NULL, 0, 0, '2015-11-17 09:45:06', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(35, 'Miss Laurie Tremblay I', 'Yasmine Carter', '6011799054', '658.770.3885', 0, NULL, 0, 0, NULL, 0, 0, '2016-07-14 06:44:56', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(36, 'Verla Zieme II', 'Ms. Cierra DuBuque DDS', '4716401616', '+16167483513', 0, NULL, 0, 0, NULL, 0, 0, '2015-11-17 04:10:57', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(37, 'Ms. Brandi Yundt', 'Dr. Khalil Orn DVM', '5499454768', '443.281.5373', 0, NULL, 0, 0, NULL, 0, 0, '2016-02-06 05:44:19', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(38, 'Dr. Henderson Tillman MD', 'Prof. Jovani Reynolds DVM', '4916331710', '(591) 909-97', 0, NULL, 0, 0, NULL, 0, 0, '2016-04-30 08:46:49', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(39, 'Vicky Borer DDS', 'Morgan Mertz DVM', '5492172103', '1-772-930-52', 0, NULL, 0, 0, NULL, 0, 0, '2015-12-03 23:24:46', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(40, 'Shayne Runolfsdottir', 'Myrna Tromp', '4929080575', '996-770-4791', 0, NULL, 0, 0, NULL, 0, 0, '2016-07-22 07:58:33', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(41, 'Kenyatta Haley', 'Michaela Mante', '3447522229', '+16323058221', 0, NULL, 0, 0, NULL, 0, 0, '2016-07-15 01:00:40', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(42, 'Mr. Jack McLaughlin', 'Kenneth Wisozk', '5527907513', '398.774.9111', 0, NULL, 0, 0, NULL, 0, 0, '2015-08-26 12:17:42', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(43, 'Mr. Humberto Cormier DVM', 'Bettye Hoeger', '4556973334', '1-587-282-73', 0, NULL, 0, 0, NULL, 0, 0, '2016-06-05 17:44:49', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(44, 'Roy Gutkowski', 'Mr. Dante Reinger PhD', '5426171120', '(448) 522-24', 0, NULL, 0, 0, NULL, 0, 0, '2016-03-22 14:02:17', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(45, 'Mr. Earl Sanford', 'Constantin DuBuque', '5298337886', '+1-375-276-4', 0, NULL, 0, 0, NULL, 0, 0, '2015-12-01 06:16:07', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(46, 'Lue Champlin', 'Ms. Shanna Jast PhD', '5194949392', '254.228.9931', 0, NULL, 0, 0, NULL, 0, 0, '2015-12-09 10:21:24', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(47, 'Ms. Joy Hegmann', 'Israel Mueller PhD', '5574576290', '+1.959.871.3', 0, NULL, 0, 0, NULL, 0, 0, '2015-10-15 15:54:27', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(48, 'Shanel Abbott', 'Brooke Crist PhD', '4716847202', '1-883-855-90', 0, NULL, 0, 0, NULL, 0, 0, '2016-02-17 05:04:07', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(49, 'Julius Gusikowski Jr.', 'Tyreek Boehm', '4485892814', '367.994.4766', 0, NULL, 0, 0, NULL, 0, 0, '2016-02-10 03:16:06', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(50, 'Herminio Herzog DDS', 'Tavares Waelchi', '4024007122', '325.928.6382', 0, NULL, 0, 0, NULL, 0, 0, '2016-01-30 16:08:16', '2016-08-23 19:52:00', '2016-08-23 19:52:00'),
(51, 'xcvvxxvx', 'cxvxvcxvx', '3242422', '3442342', 0, 11, 14, 50, NULL, 1, 2, '2016-08-23 16:01:08', '2016-08-23 20:01:08', '2016-08-23 20:01:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_cuadrante`
--

CREATE TABLE `contacto_cuadrante` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `cuadrante_id` int(10) UNSIGNED DEFAULT NULL,
  `contacto_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_organismo`
--

CREATE TABLE `contacto_organismo` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `contacto_id` int(10) UNSIGNED DEFAULT NULL,
  `organismo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contacto_organismo`
--

INSERT INTO `contacto_organismo` (`id`, `cantidad`, `contacto_id`, `organismo_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 51, 1, '2016-08-23 20:01:09', '2016-08-23 20:01:09'),
(2, NULL, 51, 2, '2016-08-23 20:01:09', '2016-08-23 20:01:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto_user`
--

CREATE TABLE `contacto_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `contacto_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `contacto_user`
--

INSERT INTO `contacto_user` (`id`, `contacto_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 51, 55, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadrantes`
--

CREATE TABLE `cuadrantes` (
  `id` int(10) UNSIGNED NOT NULL,
  `cuadrante` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `sectores` text COLLATE utf8_unicode_ci NOT NULL,
  `localidad` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `organismo_id` int(10) UNSIGNED NOT NULL,
  `municipio_id` int(10) UNSIGNED NOT NULL,
  `parroquia_id` int(10) UNSIGNED NOT NULL,
  `ubigeom_id` int(10) UNSIGNED NOT NULL,
  `ubigeop_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cuadrantes`
--

INSERT INTO `cuadrantes` (`id`, `cuadrante`, `telefono`, `sectores`, `localidad`, `organismo_id`, `municipio_id`, `parroquia_id`, `ubigeom_id`, `ubigeop_id`) VALUES
(1, 'P-1', '0416-610-34-96', 'PARCELAMIENTO CASTULO MARMOL, PANTANO ABAJO, PARCELAMIENTO JOSEFA CAMEJO.', '', 1, 14, 0, 0, 0),
(2, 'P-2', '0416-610-34-59', 'LOS ORUMOS, POLIDEPORTIVO, SAN BOSCO, APAMATES, PLAZA, BARRIO LA  CONCORDIA', '', 2, 14, 0, 0, 0),
(3, 'P-3', '0416-610-35-01', 'LA FLORESTA, PARCELAMIENTO RAFAEL, GALLARDO, SANTA ANA.', '', 2, 14, 0, 0, 0),
(4, 'P-4', '0416-610-34-97', 'LA FLORESTA, PARCELAMIENTO RAFAEL, GALLARDO, SANTA ANA.', '', 1, 14, 0, 0, 0),
(5, 'P-5', '0416-610-34-57', 'ZONA INDUSTRIAL, VELITAS VI, VELITAS II, VELITA V, URBANIZACIÓN 480, URBANIZACIÓN SANTA MARÍA, URBANIZACIÓN SANTA PAULA', '', 1, 14, 0, 0, 0),
(6, 'P-6', '0416-610-35-17', 'PUEBLO NUEVO, 28 DE JULIO NORTE Y SUR, LAS MERCEDES, LA FLORIDA.', '', 3, 14, 0, 0, 0),
(7, 'P-7', '0416-610-35-16', 'LAS GUINEAS, CENTRO CORO, ASOCENTRO, BARRIO SAN NICOLAS, BARRIO LAS PANELAS, BARRIO CURAZAITO.', '', 1, 14, 0, 0, 0),
(8, 'P-8', '0416-610-35-15', 'PANTANO CENTRO, PANTANO ARRIBA, EL CHIPRE, BOBARE NORTE', '', 1, 14, 0, 0, 0),
(9, 'P-9', '0416-610-35-09', 'PARQUE CRISTAL, RESIDENCIAS SOL DE CORO, PARCELAMIENTO CACIQUE BACOA, NUESTRA SEÑORA DE LA COROMOTO, SAN JOSE.', '', 2, 14, 0, 0, 0),
(10, 'P-10', '0416-610-34-91', 'PARCELAMIENTO Y BARRIO CRUZ VERDE, URBANIZACIÓN ANTONIO JOSE DE SUCRE, URBANIZACIÓN JOSEFA CAMEJO', '', 1, 14, 0, 0, 0),
(11, 'P-11', '0416-610-48-01', 'HOSPITAL, MONTE VERDE, URBANIZACIÓN AMPIES, URBANIZACIÓN EL BOSQUE, URBANIZACIÓN EL CAREY', '', 1, 14, 0, 0, 0),
(12, 'P-12', '0416-610-52-02', 'CABUDARE, LOS CLARITOS, URBANIZACIÓN 28 DE JULIO, MONZÓN, LAS MARGARITAS, BOBARE SUR.', '', 1, 14, 0, 0, 0),
(13, 'P-13', '0416-610-48-06', 'BARRIO 5 DE JULIO', '', 2, 14, 0, 0, 0),
(14, 'P-14', '0416-610-51-99', 'URBANIZACIÓN CRUZ VERDE', '', 1, 14, 0, 0, 0),
(15, 'P-15', '0416-610-48-03', 'LOS PEROZOS', '', 2, 14, 0, 0, 0),
(16, 'P-16', '0416-610-48-02', 'LA CAÑADA, URBANIZACIÓN  MONSEÑOR ITURRIZA, PARCELAMIENTO VICTORIA', '', 3, 14, 0, 0, 0),
(17, 'P-17', '0416-610-47-99', 'URBANIZACIÓN LAS EUGENIAS, URBANIZACIÓN ARISTIDES GALVANI, ZUMURUCUARE', '', 1, 14, 0, 0, 0),
(18, 'P-18', '0416-610-48-05', 'URBANIZACIÓN LOS MEDANOS.', '', 3, 14, 0, 0, 0),
(19, 'P-19', '0416-610-47-97', 'LOS LIBERTADORES, CAJUARAO, LA BOMBA, SECTOR LAS HUERTAS', '', 1, 14, 0, 0, 0),
(20, 'P-2', '0416-610-47-03', 'ANTIGUO AEROPUERTO, LA CHINITA, VILLA DEL MAR, EZEQUIEL ZAMORA, SANTA ROSALÍA', '', 1, 5, 0, 0, 0),
(21, 'P-3', '0416-610-47-01', 'SANTA ELENA, LOS PINOS, ANTONIO JOSE DE SUCRE.', '', 1, 5, 0, 0, 0),
(22, 'P-4', '0416-610-41-00', 'BANCO OBRERO, LAS PIEDRAS, LA BOSTA, NUEVO PUEBLO NORTE Y SUR, LA SALINETA.', '', 1, 5, 0, 0, 0),
(23, 'P-5', '0416-610-48-00', 'CAJA DE AGUA, BRISAS DE SANTA ELENA', '', 4, 5, 0, 0, 0),
(24, 'P-6', '0416-610-47-98', 'TROPICANA, CUJIANA, BARRIO LA ROSA, BARRIO MODELO, BELLA VISTA, BLOQUE VTV.', '', 4, 5, 0, 0, 0),
(25, 'P-7', '0416-610-48-04', 'URB. MARIA AUXILIADORA, SECTOR SAMBIL, SECTOR UNIVERSITARIO, LAS ADJUNTAS.', '', 4, 5, 0, 0, 0),
(26, 'P-8', '0416-610-44-73', 'CARIRUBANA, ANDRES ELOY BLANCO, BARRIO INDUSTRIAL', '', 4, 5, 0, 0, 0),
(27, 'P-9', '0416-610-44-55', 'CENTRO, BARRIO BOLIVAR, SAN FRANCISCO JAVIER', '', 3, 5, 0, 0, 0),
(28, 'P-10', '0416-610-44-53', 'JOSEFA CAMEJO, SANTA IRENE', '', 1, 5, 0, 0, 0),
(29, 'P-11', '0416-610-44-68', 'LAS MARGARITAS, LA ESMERALDA, LOS CACIQUES, LOS CAPTUS.', '', 4, 5, 0, 0, 0),
(30, 'P-12', '0416-610-44-72', 'EL CARDÓN, LA COLONIA, PARAGUANÁ MALL, CIUDAD FEDERACIÓN.', '', 4, 5, 0, 0, 0),
(31, 'P-13', '0416-610-44-69', 'ZARABÓN, MARAVEN, LOS MARISTAS.', '', 3, 5, 0, 0, 0),
(32, 'P-14', '0416-610-44-61', 'LAS MERCEDES, PEDRO MANUEL ARCAYA, TERMINAL DE PASAJEROS.', '', 3, 5, 0, 0, 0),
(33, 'P-15', '0416-610-44-52', 'BICENTENARIO, PUNTA CARDÓN, LOS ROSALES.', '', 3, 5, 0, 0, 0),
(34, 'P-16', '0416-610-41-51', 'PUERTA MARAVEN,  23 DE ENERO, URB ESPAÑA', '', 1, 5, 0, 0, 0),
(35, 'P-1', '0416-610-40-52', 'SABANA LARGA, LAS MALVINAS', '', 1, 6, 0, 0, 0),
(36, 'P-2', '0416-610-40-53', 'LA VELA DE CORO (NORTE )', '', 3, 6, 0, 0, 0),
(37, 'P-3', '0416-610-40-64', 'LA VELA DE CORO (SUR)', '', 1, 6, 0, 0, 0),
(38, 'P-1', '0416-610-40-57', 'SECTOR 4, PUNTE FLECHADO, NUE,VA TUCACAS, TUQUE UNO, VENETUR, CASCO CENTRAL', '', 4, 20, 0, 0, 0),
(39, 'P-2', '0416-610-42-46', 'BARRIO SANTA ROSA, BARRIO ISAAC, COMPLEJO TURISTICO, AV LIBERTADOR, AV SILVA.', '', 4, 20, 0, 0, 0),
(40, 'P-3', '0416-610-44-57', 'SAID 1, SAID 2, LOS CORALES', '', 1, 20, 0, 0, 0),
(41, 'P-4', '0416-610-40-62', 'CARACARAS, LAS DELICIAS, ALCABALA, BOCA DE AROA, BARRIO CARTÓN', '', 1, 20, 0, 0, 0),
(42, 'P-1', '0416-610-40-11', '', 'CASCO CENTRAL', 1, 10, 0, 0, 0),
(43, 'P-2', '0416-610-40-05', '', 'MAPARA-PAJUI ', 1, 10, 0, 0, 0),
(44, 'P-3', '0416-610-40-08', '', 'ROBLE-MAPARARI', 3, 10, 0, 0, 0),
(45, 'P-1', '0416-610-39-95', '', 'SAN CRUZ BUCARAL', 1, 23, 0, 0, 0),
(46, 'P-1', '0416-610-40-06', '', 'CURIMAGUA', 1, 17, 0, 0, 0),
(47, 'P-2', '0416-610-40-02', '', 'CABURE', 1, 17, 0, 0, 0),
(48, 'P-1', '0416-610-39-98', '', 'SAN LUIS', 1, 2, 0, 0, 0),
(49, 'P-1', '0416-610-39-97', '', 'CRUZ DE TARATARA', 1, 21, 0, 0, 0),
(50, 'P-1', '0416-610-41-07', '', 'SECTOR TIJANA', 3, 7, 0, 0, 0),
(51, 'P-2', '0416-610-40-68', '', 'SECTOR NUEVA', 1, 7, 0, 0, 0),
(52, 'P-3', '0416-610-40-60', '', 'SECTOR LOS ANDES', 1, 7, 0, 0, 0),
(53, 'P-1', '0416-610-41-16', '', 'NORTE- ENTRADA', 1, 13, 0, 0, 0),
(54, 'P-2', '0416-610-40-72', '', 'SUR CASCO CENTRAL', 3, 13, 0, 0, 0),
(55, 'P-1', '0416-610-41-14', '', 'URUMACO', 3, 24, 0, 0, 0),
(56, 'P-1', '0416-610-41-11', '', 'PEDREGAL', 1, 8, 0, 0, 0),
(57, 'P-1', '0416-610-41-08', '', 'BARIRO.GUAJIRO', 1, 3, 0, 0, 0),
(58, 'P-2', '0416-610-41-08', '', 'CAPATARIDA', 1, 3, 0, 0, 0),
(59, 'P-1', '0416-610-41-09', '', 'CENTRO-CAÑADA', 1, 25, 0, 0, 0),
(60, 'P-2', '0416-610-41-05', '', 'INAVI', 3, 25, 0, 0, 0),
(61, 'P-1', '0416-610-41-01', '', 'TOCOPERO', 1, 22, 0, 0, 0),
(62, 'P-1', '0416-610-41-02', '', 'PIRITU', 1, 18, 0, 0, 0),
(63, 'P-2', '0416-610-42-37', '', 'GUAMACHO', 1, 18, 0, 0, 0),
(64, 'P-1', '0416-610-44-65', '', 'CASCO CENTRAL', 1, 9, 0, 0, 0),
(65, 'P-2', '0416-610-35-95', '', 'ADICORA', 3, 9, 0, 0, 0),
(66, 'P-3', '0416-610-40-04', '', 'BUENA VISTA', 1, 9, 0, 0, 0),
(67, 'P-1', '0416-610-40-66', '', 'CREOLANDIA', 1, 12, 0, 0, 0),
(68, 'P-2', '0416-610-36-00', '', 'JUDIBANA', 3, 12, 0, 0, 0),
(69, 'P-3', '0416-610-42-52', '', 'GUANADITO', 1, 12, 0, 0, 0),
(70, 'P-4', '0416-610-40-74', '', 'OASIS', 1, 12, 0, 0, 0),
(71, 'P-5', '0416-610-42-44', '', 'JAYANA-AMUAY', 3, 12, 0, 0, 0),
(72, 'P-6', '0416-610-35-93', '', 'V. MARINA-TAQUES', 3, 12, 0, 0, 0),
(73, 'P-1', '0416-610-35-97', '', 'SAN JUAN CAYOS', 3, 1, 0, 0, 0),
(74, 'P-1', '0416-610-35-89', '', 'CHICHIRIVICHI  P-1', 1, 15, 0, 0, 0),
(75, 'P-2', '0416-610-42-36', '', 'CHICHIRIVICHI  P-2', 5, 15, 0, 0, 0),
(76, 'P-3', '0416-610-42-34', '', 'BOCA TOCUYO', 5, 15, 0, 0, 0),
(77, 'P-4', '0416-610-36-01', '', 'TOCUYO DE COSTA', 5, 15, 0, 0, 0),
(78, 'P-1', '0416-610-36-02', '', 'JACURA', 1, 11, 0, 0, 0),
(79, 'P-1', '0416-610-36-08', '', 'MIRIMIRE', 1, 19, 0, 0, 0),
(80, 'P-1', '0416-610-41-50', '', 'YARACAL', 3, 4, 0, 0, 0),
(81, 'P-1', '0416-610-36-07', '', 'K-14', 1, 16, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuadrante_motivo`
--

CREATE TABLE `cuadrante_motivo` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `cuadrante_id` int(10) UNSIGNED DEFAULT NULL,
  `motivo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `direcciones`
--

CREATE TABLE `direcciones` (
  `id` int(10) UNSIGNED NOT NULL,
  `despcricion` text COLLATE utf8_unicode_ci NOT NULL,
  `ubicacion` text COLLATE utf8_unicode_ci NOT NULL,
  `preferencia` text COLLATE utf8_unicode_ci NOT NULL,
  `observacion` text COLLATE utf8_unicode_ci NOT NULL,
  `parroquia_id` int(10) UNSIGNED NOT NULL,
  `municipio_id` int(10) UNSIGNED NOT NULL,
  `localidad_id` int(10) UNSIGNED NOT NULL,
  `motivo_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `direcciones`
--

INSERT INTO `direcciones` (`id`, `despcricion`, `ubicacion`, `preferencia`, `observacion`, `parroquia_id`, `municipio_id`, `localidad_id`, `motivo_id`) VALUES
(1, 'vxvxvxvxc', 'xcvxvxvx', 'vxcx', '', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id` int(10) UNSIGNED NOT NULL,
  `entidad` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id`, `entidad`) VALUES
(2, 'Amàzonas'),
(3, 'Anzoategui '),
(4, 'Apure'),
(5, 'Aragua'),
(6, 'Barinas'),
(7, 'Bolìvar'),
(15, 'Bolivariano de Miranda'),
(8, 'Carabobo'),
(9, 'Cojedes'),
(10, 'Delta Amacuro'),
(25, 'Dependencia Federales'),
(1, 'Distrito Capital'),
(11, 'Falcòn'),
(12, 'Guàrico'),
(13, 'Lara'),
(14, 'Mèrida'),
(16, 'Monagas'),
(17, 'Nueva Esparta'),
(18, 'Portuguesa'),
(19, 'Sucre'),
(20, 'Tàchira'),
(21, 'Trujillo'),
(24, 'Vargas'),
(22, 'Yaracuy'),
(23, 'Zulia');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_motivo`
--

CREATE TABLE `estado_motivo` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `estado_id` int(10) UNSIGNED DEFAULT NULL,
  `motivo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estado_motivo`
--

INSERT INTO `estado_motivo` (`id`, `cantidad`, `estado_id`, `motivo_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 11, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_organismo`
--

CREATE TABLE `estado_organismo` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `estado_id` int(10) UNSIGNED DEFAULT NULL,
  `organismo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `estado_organismo`
--

INSERT INTO `estado_organismo` (`id`, `cantidad`, `estado_id`, `organismo_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 11, 1, NULL, NULL),
(2, NULL, 11, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupos`
--

CREATE TABLE `grupos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `grupos`
--

INSERT INTO `grupos` (`id`, `name`) VALUES
(1, 'grupo 1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `llamadas`
--

CREATE TABLE `llamadas` (
  `id` int(10) UNSIGNED NOT NULL,
  `falsas` int(10) UNSIGNED NOT NULL,
  `quejas` int(10) UNSIGNED NOT NULL,
  `sabotaje` int(10) UNSIGNED NOT NULL,
  `registradas` int(10) UNSIGNED NOT NULL,
  `informativas` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `llamadas`
--

INSERT INTO `llamadas` (`id`, `falsas`, `quejas`, `sabotaje`, `registradas`, `informativas`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 0, 1, 0, 55, '2016-08-23 20:01:08', '2016-08-23 20:01:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localidades`
--

CREATE TABLE `localidades` (
  `id` int(10) UNSIGNED NOT NULL,
  `localidad` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `municipio_id` int(10) UNSIGNED DEFAULT NULL,
  `parroquia_id` int(10) UNSIGNED DEFAULT NULL,
  `ubigeom_id` int(10) UNSIGNED NOT NULL,
  `ubigeop_id` int(10) UNSIGNED NOT NULL,
  `ubigeol_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `localidades`
--

INSERT INTO `localidades` (`id`, `localidad`, `municipio_id`, `parroquia_id`, `ubigeom_id`, `ubigeop_id`, `ubigeol_id`) VALUES
(1, 'San Juan de Los Cayos (Capital)', 25, NULL, 1125, 112505, 4294967295),
(2, 'Boca de Mangle', 25, NULL, 1125, 112505, 4294967295),
(3, 'Boca de Tocuyo', 25, NULL, 1125, 112505, 4294967295),
(4, 'Boquerones', 25, NULL, 1125, 112505, 4294967295),
(5, 'Cerrito, El', 25, NULL, 1125, 112505, 4294967295),
(6, 'Potrero Viejo', 25, NULL, 1125, 112505, 4294967295),
(7, 'Villa, La', 25, NULL, 1125, 112505, 4294967295),
(8, 'Boca de Rio', 25, NULL, 1125, 112505, 4294967295),
(9, 'Boquita, La', 25, NULL, 1125, 112505, 4294967295),
(10, 'Diez, El (Hacienda)', 25, NULL, 1125, 112505, 4294967295),
(11, 'Chula, La (Hacienda)', 25, NULL, 1125, 112505, 4294967295),
(12, 'Isoras, Las (Hacienda)', 25, NULL, 1125, 112505, 4294967295),
(13, 'Tacarigua (Planta de Tratamiento)', 25, NULL, 1125, 112505, 4294967295),
(14, 'Sector Los Ovejos', 25, NULL, 1125, 112505, 4294967295),
(15, 'Somosagua', 25, NULL, 1125, 112505, 4294967295),
(16, 'Capadare (Capital)', 25, NULL, 1125, 112505, 4294967295),
(17, 'Agua Blanca', 25, NULL, 1125, 112505, 4294967295),
(18, 'Bajura, La', 25, NULL, 1125, 112505, 4294967295),
(19, 'Quebrada Honda', 25, NULL, 1125, 112505, 4294967295),
(20, 'San Gregorio', 25, NULL, 1125, 112505, 4294967295),
(21, 'San Pedro (San Pedrito)', 25, NULL, 1125, 112505, 4294967295),
(22, 'Bajura I, La', 25, NULL, 1125, 112505, 4294967295),
(23, 'Escuela Granja', 25, NULL, 1125, 112505, 4294967295),
(24, 'Palma, La (Fundo)', 25, NULL, 1125, 112505, 4294967295),
(25, 'Parada, La', 25, NULL, 1125, 112505, 4294967295),
(26, 'Vivienda Dispersa', 25, NULL, 1125, 112505, 4294967295),
(27, 'Pastora, La (F) (Capital)', 25, NULL, 1125, 112505, 4294967295),
(28, 'Aguide', 25, NULL, 1125, 112505, 4294967295),
(29, 'Canton, El', 25, NULL, 1125, 112505, 4294967295),
(30, 'Curamichate', 25, NULL, 1125, 112505, 4294967295),
(31, 'Hicacales, Los', 25, NULL, 1125, 112505, 4294967295),
(32, 'Pilancones, Los', 25, NULL, 1125, 112505, 4294967295),
(33, 'Santa Ana-Apurite', 25, NULL, 1125, 112505, 4294967295),
(34, 'Viento Suave', 25, NULL, 1125, 112505, 4294967295),
(35, 'Lirios, Los', 25, NULL, 1125, 112505, 4294967295),
(36, 'Cantón, El (Sector El Guayabo)', 25, NULL, 1125, 112505, 4294967295),
(37, 'Carlos Sierralta', 25, NULL, 1125, 112505, 4294967295),
(38, 'Cayude Abajo', 25, NULL, 1125, 112505, 4294967295),
(39, 'Cerro Capadare I', 25, NULL, 1125, 112505, 4294967295),
(40, 'Colorados, Los', 25, NULL, 1125, 112505, 4294967295),
(41, 'Felicidad I, La', 25, NULL, 1125, 112505, 4294967295),
(42, 'Ponderosa, La (Fundo)', 25, NULL, 1125, 112505, 4294967295),
(43, 'Cimarrones Nueva (Hacienda)', 25, NULL, 1125, 112505, 4294967295),
(44, 'Lirios II, Los', 25, NULL, 1125, 112505, 4294967295),
(45, 'Manuel Meza  (Hacienda)', 25, NULL, 1125, 112505, 4294967295);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_07_04_214051_create_organismos_table', 1),
('2016_07_04_214508_create_municipios_table', 1),
('2016_07_04_214619_create_parroquias_table', 1),
('2016_07_06_132221_create_contacto_table', 1),
('2016_07_06_133704_create_grupos_table', 1),
('2016_07_11_180628_create_direccion_table', 1),
('2016_07_13_133302_create_motivos_table', 1),
('2016_07_15_125636_create_llamadas_table', 1),
('2016_07_15_131043_create_localidad_table', 1),
('2016_07_22_172659_create_agendas_table', 1),
('2016_07_27_134305_create_estados_table', 1),
('2016_07_27_174013_create_vehiculos_table', 1),
('2016_08_04_180715_create_cuadrantes_table', 1),
('2016_08_07_170540_create_casos_table', 1),
('2016_08_10_001422_create_sessiones_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivos`
--

CREATE TABLE `motivos` (
  `id` int(10) UNSIGNED NOT NULL,
  `motivo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `descripcion` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivos`
--

INSERT INTO `motivos` (`id`, `motivo`, `activo`, `descripcion`) VALUES
(1, 'robo a entidad Comercial', 0, ''),
(2, 'Robo a mano armada', 0, ''),
(3, 'Robo a Persona', 0, ''),
(4, 'Robo a Viviendas', 0, ''),
(5, 'Robo a Vehiculo', 0, ''),
(6, 'Robo', 0, ''),
(7, 'Hurto frustrado', 0, ''),
(8, 'Hurto de vehiculo', 0, ''),
(9, 'Hurto de moto', 0, ''),
(10, 'Hurto', 0, ''),
(11, 'Reporte', 0, ''),
(12, 'Reporte de Persona', 0, ''),
(13, 'Homicidio con arma blanca', 0, ''),
(14, 'Homicidio con arma de fuego', 0, ''),
(15, 'Homicidio culposo por accidente de transito', 0, ''),
(16, 'Homicidio doloso por asfixia', 0, ''),
(17, 'Homicidio doloso por inmersion', 0, ''),
(18, 'Homicidio por objetos contundente', 0, ''),
(19, 'Incendios forestales', 0, ''),
(20, 'Incendios', 0, ''),
(21, 'Lesiones leves', 0, ''),
(22, 'Lesiones por accidente de transito', 0, ''),
(23, 'Lesiones por arma blanca', 0, ''),
(24, 'Lesiones por arma de fuego', 0, ''),
(25, 'Lesiones por objetos contundentes', 0, ''),
(26, 'Accidente de transito sin lesionados', 0, ''),
(27, 'Alarma de Banco', 0, ''),
(28, 'Riña Colectiva', 0, ''),
(29, 'Verificacion Siipol', 0, ''),
(30, 'Persona Sospechosa', 0, ''),
(31, 'Vehiculo Sospechosa', 0, ''),
(32, 'Hidrofalcon', 0, ''),
(33, 'Obtaculo en Via', 0, ''),
(34, 'Informativa', 0, ''),
(35, 'Insulto', 0, ''),
(36, 'Contaminacion Sonica', 0, ''),
(37, 'Estrutura en Peligro ', 0, ''),
(38, 'Emergencia Medica', 0, ''),
(39, 'Traslado Medica', 0, ''),
(40, 'Ataque Animal', 0, ''),
(41, 'Abandonada', 0, ''),
(42, 'Invasion', 0, ''),
(43, 'Delito contra niño', 0, ''),
(44, 'Ocultamiento de objetos provenientes del delito', 0, ''),
(45, 'Perturbacion del orden publico', 0, ''),
(46, 'Plagio', 0, ''),
(47, 'Porte ilicito de arma de fuego', 0, ''),
(48, 'Resistencia a la autoridad', 0, ''),
(49, 'Sabotaje', 0, ''),
(50, 'Indocumentados', 0, ''),
(51, 'Soborno a funcionario publico', 0, ''),
(52, 'Violencia de genero', 0, ''),
(53, 'Trafico de droga', 0, ''),
(54, 'Violacion', 0, ''),
(55, 'Abigeato', 0, ''),
(56, 'Persona extraviada', 0, ''),
(57, 'Ilicito fiscal', 0, ''),
(58, 'Desvalijamiento', 0, ''),
(59, 'Aprovechamiento de vehiculo proveniente del delito', 0, ''),
(60, 'Aprovechamiento de Moto proveniente del delito', 0, ''),
(61, 'Movimientos de tierras', 0, ''),
(62, 'Quema', 0, ''),
(63, 'Caceria ilegal', 0, ''),
(64, 'Contaminacion ambiental', 0, ''),
(65, 'Accidentes acuaticos', 0, ''),
(66, 'Rescates en agua', 0, ''),
(67, 'Traslado de ambulancia', 0, ''),
(68, 'Actos lascivos', 0, ''),
(69, 'Alteracion de seriales de vehiculo', 0, ''),
(70, 'Amenaza de muerte', 0, ''),
(71, 'Apropiacion indebida', 0, ''),
(72, 'Aprovechamiento de cosas provenientes del delito', 0, ''),
(73, 'Arrollamiento', 0, ''),
(74, 'Contrabando', 0, ''),
(75, 'Corrupcion', 0, ''),
(76, 'Daños a la propiedad', 0, ''),
(77, 'Decomiso de juegos pirotecnicos', 0, ''),
(78, 'Delito informatico', 0, ''),
(79, 'Distribucion de droga', 0, ''),
(80, 'Enriquecimiento ilicito', 0, ''),
(81, 'Especulacion y acaparamiento', 0, ''),
(82, 'Estafa', 0, ''),
(83, 'Extorsion', 0, ''),
(84, 'Forjamiento de documento publico', 0, ''),
(85, 'Fuga de gas', 0, ''),
(86, 'Incautacion de droga', 0, ''),
(87, 'Tenencia de droga', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo_localidad`
--

CREATE TABLE `motivo_localidad` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `motivo_id` int(10) UNSIGNED DEFAULT NULL,
  `localidad_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo_municipio`
--

CREATE TABLE `motivo_municipio` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `motivo_id` int(10) UNSIGNED DEFAULT NULL,
  `municipio_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivo_municipio`
--

INSERT INTO `motivo_municipio` (`id`, `cantidad`, `motivo_id`, `municipio_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 14, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo_organismo`
--

CREATE TABLE `motivo_organismo` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `motivo_id` int(10) UNSIGNED DEFAULT NULL,
  `organismo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivo_organismo`
--

INSERT INTO `motivo_organismo` (`id`, `cantidad`, `motivo_id`, `organismo_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 1, NULL, NULL),
(2, NULL, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `motivo_parroquia`
--

CREATE TABLE `motivo_parroquia` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `motivo_id` int(10) UNSIGNED DEFAULT NULL,
  `parroquia_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `motivo_parroquia`
--

INSERT INTO `motivo_parroquia` (`id`, `cantidad`, `motivo_id`, `parroquia_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 2, 50, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id` int(10) UNSIGNED NOT NULL,
  `municipio` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `capital` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `levelzoom` int(11) NOT NULL,
  `estado_id` int(10) UNSIGNED NOT NULL,
  `ubigeom_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `municipios`
--

INSERT INTO `municipios` (`id`, `municipio`, `capital`, `latitude`, `longitude`, `levelzoom`, `estado_id`, `ubigeom_id`) VALUES
(1, 'ACOSTA', 'San Juan de los Cayos', 11.1713708935296, -68.4004926681519, 0, 11, 1101),
(2, 'BOLIVAR', '', 0, 0, 0, 11, 1101),
(3, 'BUCHIVACOA', '', 0, 0, 0, 11, 1101),
(4, 'CACIQUE MANAURE', '', 0, 0, 0, 11, 1101),
(5, 'CARIRUBANA', '', 0, 0, 0, 11, 1101),
(6, 'COLINA', '', 0, 0, 0, 11, 1101),
(7, 'DABAJURO', '', 0, 0, 0, 11, 1101),
(8, 'DEMOCRACIA', '', 0, 0, 0, 11, 1101),
(9, 'FALCON', '', 0, 0, 0, 11, 1101),
(10, 'FEDERACION', '', 0, 0, 0, 11, 1101),
(11, 'JACURA', '', 0, 0, 0, 11, 1101),
(12, 'LOS TAQUES', '', 0, 0, 0, 11, 1101),
(13, 'MAUROA', '', 0, 0, 0, 11, 1101),
(14, 'MIRANDA', '', 0, 0, 0, 11, 1101),
(15, 'MONS. ITURRIZA', '', 0, 0, 0, 11, 1101),
(16, 'PALMA SOLA', '', 0, 0, 0, 11, 1101),
(17, 'PETIT', '', 0, 0, 0, 11, 1101),
(18, 'PIRITU', '', 0, 0, 0, 11, 1101),
(19, 'SAN FRANCISCO', '', 0, 0, 0, 11, 1101),
(20, 'SILVA', '', 0, 0, 0, 11, 1101),
(21, 'SUCRE', '', 0, 0, 0, 11, 1101),
(22, 'TOCOPERO', '', 0, 0, 0, 11, 1101),
(23, 'UNION', '', 0, 0, 0, 11, 1101),
(24, 'URUMACO', '', 0, 0, 0, 11, 1101),
(25, 'ZAMORA', '', 0, 0, 0, 11, 1101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipio_organismo`
--

CREATE TABLE `municipio_organismo` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `municipio_id` int(10) UNSIGNED DEFAULT NULL,
  `organismo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `municipio_organismo`
--

INSERT INTO `municipio_organismo` (`id`, `cantidad`, `municipio_id`, `organismo_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 14, 1, NULL, NULL),
(2, NULL, 14, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organismos`
--

CREATE TABLE `organismos` (
  `id` int(10) UNSIGNED NOT NULL,
  `siglas` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` text COLLATE utf8_unicode_ci NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `organismos`
--

INSERT INTO `organismos` (`id`, `siglas`, `nombre`, `telefono`, `direccion`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'POLIFALCON', 'POLICIA DEL ESTADO', '02687920110', '', 0, NULL, NULL),
(2, 'POLIMIRANDA', 'POLICIA MUNICIPAL DE MIRANDA', '02682521795', '', 0, NULL, NULL),
(3, 'GNB', 'GUARDIA NACIONAL BOLIVARIANA', '02682517599', '', 0, NULL, NULL),
(4, 'POLICARIRUBANA', 'POLICIA DE CARIRUBANA', '02692202746', '', 0, NULL, NULL),
(5, 'PNB', 'POLICIA NACIONAL BOLIVARIANA', '', '', 0, NULL, NULL),
(6, 'Hidrofalcon', 'HIDROFALCON', '02687920110', '', 0, NULL, NULL),
(7, 'Coorpoelect', 'Coorpoelect', '02687920110', '', 0, NULL, NULL),
(8, 'Otros Organismos', 'Otros Organismos', '02687920110', '', 0, NULL, NULL),
(9, 'C.I.C.P.C', 'CUERPO DE INVESTIGACIONES CIENTIFICAS PENALES Y CRIMINALISTICAS', '', '', 0, NULL, NULL),
(10, '171', '171 EMRGENCIAS EDO FALCON', '', '', 0, NULL, NULL),
(11, 'SSCF', 'SECRETARIA DE SEGURIDAD CIUDADANA', '02682512021', '', 0, NULL, NULL),
(12, 'TRANSITO', 'CUERPO TECNICO DE VIGILANCIA DEL TRANSPORTE TERRESTRE', '02682512021', '', 0, NULL, NULL),
(13, 'P.C. MUNICIPAL', 'PROTECCION CIVIL MIRANDA', '04125131516', '', 0, NULL, NULL),
(14, 'P.C. REGIONAL', 'PROTECCION CIVIL DEL ESTADO FALCON', '02682511859', '', 0, NULL, NULL),
(15, 'BOMBEROS', 'BOMBEROS DEL ESTADO FALCON', '', '', 0, NULL, NULL),
(16, 'GUARDA COSTA', 'BASE NAVAL', '', '', 0, NULL, NULL),
(17, 'ZODI', 'ZODI FALCON', '', '', 0, NULL, NULL),
(18, 'TRIBUNAL MILITAR', 'TRIBUNAL MILITAR DEL ESTADO FALCON', '', '', 0, NULL, NULL),
(19, 'Ministerio Publico', 'Ministerio Publico', '', '', 0, NULL, NULL),
(20, 'DIM', 'Direccion regional de inteligencia militar', '', '', 0, NULL, NULL),
(21, 'SEBIN', 'SEBIN', '04129544970', '', 0, NULL, NULL),
(22, 'SIIPOL', 'SIIPOL', '', '', 0, NULL, NULL),
(23, 'POLICIA NAVAL', 'POLICIA NAVAL', '04127907506', '', 0, NULL, NULL),
(24, 'CC Policial  ZONA 1', 'CC Policial  ZONA 1', '', '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organismo_localidad`
--

CREATE TABLE `organismo_localidad` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `localidad_id` int(10) UNSIGNED DEFAULT NULL,
  `organismo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organismo_parroquia`
--

CREATE TABLE `organismo_parroquia` (
  `id` int(10) UNSIGNED NOT NULL,
  `cantidad` int(10) UNSIGNED DEFAULT NULL,
  `parroquia_id` int(10) UNSIGNED DEFAULT NULL,
  `organismo_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `organismo_parroquia`
--

INSERT INTO `organismo_parroquia` (`id`, `cantidad`, `parroquia_id`, `organismo_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 50, 1, NULL, NULL),
(2, NULL, 50, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `organismo_user`
--

CREATE TABLE `organismo_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `activo` tinyint(1) NOT NULL,
  `organismo_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `organismo_user`
--

INSERT INTO `organismo_user` (`id`, `activo`, `organismo_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 0, 10, 56, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parroquias`
--

CREATE TABLE `parroquias` (
  `id` int(10) UNSIGNED NOT NULL,
  `parroquia` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `estado_id` int(10) UNSIGNED NOT NULL,
  `municipio_id` int(10) UNSIGNED NOT NULL,
  `ubigeom_id` int(10) UNSIGNED NOT NULL,
  `ubigeop_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `parroquias`
--

INSERT INTO `parroquias` (`id`, `parroquia`, `estado_id`, `municipio_id`, `ubigeom_id`, `ubigeop_id`) VALUES
(1, 'San Juan de los Cayos', 11, 1, 1101, 110101),
(2, 'Capadare', 11, 1, 1101, 110102),
(3, 'La Pastora', 11, 1, 1101, 110103),
(4, 'Libertador', 11, 1, 1101, 110104),
(5, 'San Luis', 11, 2, 1102, 110201),
(6, 'Aracua', 11, 2, 1102, 110202),
(7, 'La Peña', 11, 2, 1102, 110203),
(8, 'Capatárida', 11, 3, 1103, 110301),
(9, 'Bariro', 11, 3, 1103, 110302),
(10, 'Borojó', 11, 3, 1103, 110303),
(11, 'Guajiro', 11, 3, 1103, 110304),
(12, 'Seque', 11, 3, 1103, 110305),
(13, 'Zazárida', 11, 3, 1103, 110306),
(14, 'Carirubana', 11, 5, 1105, 110501),
(15, 'Norte', 11, 5, 1105, 110502),
(16, 'Punta Cardón', 11, 5, 1105, 110503),
(17, 'Santa Ana', 11, 5, 1105, 110504),
(18, 'La Vela de Coro', 11, 6, 1106, 110601),
(19, 'Acurigua', 11, 6, 1106, 110602),
(20, 'Guaibacoa', 11, 6, 1106, 110603),
(21, 'Las Calderas', 11, 6, 1106, 110604),
(22, 'Macoruca', 11, 6, 1106, 110605),
(23, 'Pedregal', 11, 8, 1108, 110801),
(24, 'Agua Clara', 11, 8, 1108, 110802),
(25, 'Avaria', 11, 8, 1108, 110803),
(26, 'Piedra Grande', 11, 8, 1108, 110804),
(27, 'Purureche', 11, 8, 1108, 110805),
(28, 'Pueblo Nuevo', 11, 9, 1109, 110901),
(29, 'Adícora', 11, 9, 1109, 110902),
(30, 'Baraived', 11, 9, 1109, 110903),
(31, 'Buena Vista', 11, 9, 1109, 110904),
(32, 'Jadacaquiva', 11, 9, 1109, 110905),
(33, 'Moruy', 11, 9, 1109, 110906),
(34, 'Adaure', 11, 9, 1109, 110907),
(35, 'El Hato', 11, 9, 1109, 110908),
(36, 'El Vínculo', 11, 9, 1109, 110909),
(37, 'Churuguara', 11, 10, 1110, 111001),
(38, 'Agua Larga', 11, 10, 1110, 111002),
(39, 'El Paují', 11, 10, 1110, 111003),
(40, 'Independencia', 11, 10, 1110, 111004),
(41, 'Mapararí', 11, 10, 1110, 111005),
(42, 'Jacura', 11, 11, 1111, 111101),
(43, 'Agua Linda', 11, 11, 1111, 111102),
(44, 'Araurima', 11, 11, 1111, 111103),
(45, 'Los Taques', 11, 12, 1112, 111201),
(46, 'Judibana', 11, 12, 1112, 111202),
(47, 'Mene de Mauroa', 11, 13, 1113, 111301),
(48, 'Casigua', 11, 13, 1113, 111302),
(49, 'San Félix', 11, 13, 1113, 111303),
(50, 'San Antonio', 11, 14, 1114, 111401),
(51, 'San Gabriel', 11, 14, 1114, 111402),
(52, 'Santa Ana', 11, 14, 1114, 111403),
(53, 'Guzmán Guillermo', 11, 14, 1114, 111404),
(54, 'Mitare', 11, 14, 1114, 111405),
(55, 'Río Seco', 11, 14, 1114, 111406),
(56, 'Sabaneta', 11, 14, 1114, 111407),
(57, 'Chichiriviche', 11, 15, 1115, 111501),
(58, 'Boca de Tocuyo', 11, 15, 1115, 111502),
(59, 'Tocuyo de la Costa', 11, 15, 1115, 111503),
(60, 'Cabure', 11, 17, 1117, 111701),
(61, 'Colina', 11, 17, 1117, 111702),
(62, 'Curimagua', 11, 17, 1117, 111703),
(63, 'Píritu', 11, 18, 1118, 111801),
(64, 'San José de la Costa', 11, 18, 1118, 111802),
(65, 'Tucacas', 11, 20, 1120, 112001),
(66, 'Boca de Aroa', 11, 20, 1120, 112002),
(67, 'Sucre', 11, 21, 1121, 112101),
(68, 'Pecaya', 11, 21, 1121, 112102),
(69, 'Santa Cruz de Bucaral', 11, 23, 1123, 112301),
(70, 'El Charal', 11, 23, 1123, 112302),
(71, 'Las Vegas del Tuy', 11, 23, 1123, 112303),
(72, 'Urumaco', 11, 24, 1124, 112401),
(73, 'Bruzual', 11, 24, 1124, 112402),
(74, 'Puerto Cumarebo', 11, 25, 1125, 112501),
(75, 'La Ciénaga', 11, 25, 1125, 112502),
(76, 'La Soledad', 11, 25, 1125, 112503),
(77, 'Pueblo Cumarebo', 11, 25, 1125, 112504),
(78, 'Zazárida', 11, 25, 1125, 112505);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessiones`
--

CREATE TABLE `sessiones` (
  `id` int(10) UNSIGNED NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `duraccion` int(10) UNSIGNED NOT NULL,
  `startTime` int(10) UNSIGNED NOT NULL,
  `endTime` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT '/imgs/users/avatar.png',
  `sexo` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `roles` enum('operador','despachador','supervisor','admin') COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `grupo_id` int(10) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `email`, `phone`, `foto`, `sexo`, `status`, `fecha_nacimiento`, `roles`, `password`, `grupo_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Amari Sawayn', 'slug', 'kub.barbara@example.org', '+1.380.718.9', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'TyEgCCFplZ', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(3, 'Dr. Eladio Feest', 'slug', 'wilburn.littel@example.net', '(325) 607-47', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'b4T6Axg7bB', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(4, 'Rogers Koch', 'slug', 'glen15@example.net', '1-773-844-11', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'vIohC612QQ', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(5, 'Josue Kohler DVM', 'slug', 'betsy25@example.org', '1-734-263-71', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, '6b8JYfVDhB', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(6, 'Judge Becker', 'slug', 'zconnelly@example.com', '1-885-614-56', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, '5VkArsIGHr', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(7, 'Jamil Breitenberg DDS', 'slug', 'ykiehn@example.net', '1-668-671-91', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'fiewndPhVH', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(8, 'Dandre West', 'slug', 'llebsack@example.com', '+1 (648) 725', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'mHHKZRfnWC', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(9, 'Trent Bogisich', 'slug', 'melissa02@example.org', '1-754-956-99', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'X6egWQSBR4', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(10, 'Karianne McLaughlin', 'slug', 'elyssa.lebsack@example.org', '+16174190021', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'Vpi1nAbvvv', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(11, 'Violette Auer III', 'slug', 'viva89@example.net', '280.250.8829', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'Eoskjd2aBS', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(12, 'Barry Volkman', 'slug', 'ajerde@example.com', '(710) 245-81', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'mHg46ozIbv', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(13, 'Catherine Olson', 'slug', 'sanford.kiara@example.net', '(525) 214-21', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'P43XKYw7Sh', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(14, 'Ms. Anya Kuphal', 'slug', 'haag.lessie@example.net', '(549) 702-08', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, '20xawVJhGC', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(15, 'Narciso Hodkiewicz I', 'slug', 'jeanie18@example.com', '+1-831-423-9', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'wAr5H5xnIm', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(16, 'Prof. Ines Borer', 'slug', 'zelda.schimmel@example.org', '+14582569608', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'WEj8tK6ShQ', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(17, 'Marco Morar', 'slug', 'kmorissette@example.com', '369.608.8246', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'ZoFOgnt0Dt', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(18, 'Mr. Tony Bailey', 'slug', 'feest.noelia@example.net', '(918) 789-64', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'QFjj8KKgHg', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(19, 'Prof. Kirk Abshire', 'slug', 'hdenesik@example.com', '+1-280-395-3', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'iAOPKwy9KB', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(20, 'Consuelo Upton', 'slug', 'megane10@example.com', '235-654-1178', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'ie4oCYUQHN', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(21, 'Prof. Adolf Hills', 'slug', 'albina.miller@example.com', '675.445.3514', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'mVQN7fLw6z', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(22, 'Fredrick Kerluke III', 'slug', 'camylle.legros@example.com', '(528) 931-37', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'XelR6fzsVg', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(23, 'Tod Ryan', 'slug', 'dritchie@example.com', '(652) 449-87', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'PzKAkPNUiO', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(24, 'Grady Walter', 'slug', 'doconner@example.net', '240.748.0521', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'GXTUzgxD6b', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(25, 'Patience Stroman', 'slug', 'jace04@example.net', '(671) 457-97', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'xhW9jTw31W', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(26, 'Verlie Donnelly', 'slug', 'qernser@example.com', '318-960-1869', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'o28sDMBh4h', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(27, 'Sadye Collier', 'slug', 'landerson@example.org', '771-699-5163', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'qOdUm4gMha', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(28, 'Virgie McClure V', 'slug', 'crystal96@example.com', '(312) 687-44', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'Z6yiVR2zt2', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(29, 'Dr. Hardy Dickinson PhD', 'slug', 'ayla75@example.com', '791-265-1297', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'IGWtR7mmzC', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(30, 'Rolando Fadel', 'slug', 'lori30@example.net', '1-808-209-42', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'KZoWWDeIYl', '2016-08-23 19:51:57', '2016-08-23 19:51:57'),
(31, 'Valentine Cole', 'slug', 'rhianna40@example.net', '+1 (757) 772', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'nWuAWKUt71', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(32, 'Gage Gutmann', 'slug', 'kjacobs@example.org', '+1.667.607.1', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'imY0xEpoic', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(33, 'Bessie Wisoky', 'slug', 'andres83@example.org', '519-937-4625', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'TOpRDkjINl', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(34, 'Miss Lydia Hirthe DDS', 'slug', 'cormier.graciela@example.net', '+1.532.750.5', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'm4cgDEZGNd', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(35, 'Darlene Kirlin', 'slug', 'xander.fritsch@example.net', '226.710.2277', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'ukVG5jM71D', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(36, 'Price Russel', 'slug', 'velma.schaden@example.net', '864-453-2644', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'zOCazW4K7z', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(37, 'Willie Sanford', 'slug', 'zgreen@example.org', '+1-868-705-7', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'PCfXL5y62k', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(38, 'Mr. Hal Cartwright III', 'slug', 'nitzsche.rylan@example.com', '1-940-590-27', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'npzq7gUjbm', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(39, 'Deonte Simonis', 'slug', 'vhudson@example.com', '767.208.6646', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'iv3wK0NJSp', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(40, 'Mr. Darrick Barrows IV', 'slug', 'schmidt.maryjane@example.com', '+1-534-763-6', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'AovWcoZQCD', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(41, 'Miss Lauriane Fay', 'slug', 'zita.beer@example.net', '876.326.3565', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'qoU1qxhU3g', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(42, 'Ben Schimmel', 'slug', 'roosevelt95@example.org', '(247) 852-71', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'PeNIKAzz2d', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(43, 'Karelle Bechtelar', 'slug', 'durgan.melyna@example.com', '+1-587-613-5', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'diGIDGKnWJ', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(44, 'Chasity Yundt DDS', 'slug', 'bstanton@example.org', '+1-313-445-7', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'AhJBroUQg5', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(45, 'Mariane Hammes', 'slug', 'eleonore.graham@example.com', '973.959.8419', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'JI8yQIgJOB', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(46, 'Jovan Grimes V', 'slug', 'noah.bednar@example.org', '406.449.1776', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'Pr11lhI6f1', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(47, 'Norberto Grady', 'slug', 'hegmann.geovany@example.com', '1-653-812-03', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'bRIj9CZCec', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(48, 'Arden Herzog', 'slug', 'mmcglynn@example.com', '545-778-2031', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'hgI1QPMkhG', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(49, 'Zachery Champlin', 'slug', 'bernier.gabe@example.net', '+1-867-654-2', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'jCcF8wjPAu', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(50, 'Dr. Reid Goodwin', 'slug', 'ghomenick@example.org', '804-742-3451', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'e4aOIFxHZa', '2016-08-23 19:51:58', '2016-08-23 19:51:58'),
(54, 'edwar operador', 'edwar', 'edwardelgado3@gmail.com', '929.907.2355', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'operador', '', 0, 'kYrUYOfNkp', '2016-08-23 19:51:59', '2016-08-23 19:51:59'),
(55, 'edwar delgado', '', 'edwardelgado0@gmail.com', '154265684', '/imgs/users/avatar.png', 0, 0, '0000-00-00', 'admin', '$2y$10$QJx14vCURbPx8LKpmKMAR.EK9FXLRbNw/CxcUin7JH36xbqZRCTKy', 0, NULL, '2016-08-23 19:57:42', '2016-08-23 19:57:42'),
(56, 'edwar delgado', 'edwar-delgado', 'edwardelgado1@gmail.com', '04146528956', '/imgs/users/avatar.png', 0, 1, '0000-00-00', 'supervisor', '$2y$10$1kGH8Y6ftsJsttCQ4AWdmOInKETN81IEFKYJb7zUyOfKEDfI7mufi', 1, NULL, '2016-08-23 19:59:35', '2016-08-23 19:59:35');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculos`
--

CREATE TABLE `vehiculos` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `despcricion` text COLLATE utf8_unicode_ci,
  `matricula` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `organismo_id` int(10) UNSIGNED NOT NULL,
  `municipio_id` int(10) UNSIGNED NOT NULL,
  `parroquia_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `casos`
--
ALTER TABLE `casos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contactos`
--
ALTER TABLE `contactos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_cuadrante`
--
ALTER TABLE `contacto_cuadrante`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_organismo`
--
ALTER TABLE `contacto_organismo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto_user`
--
ALTER TABLE `contacto_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuadrantes`
--
ALTER TABLE `cuadrantes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cuadrante_motivo`
--
ALTER TABLE `cuadrante_motivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `estados_entidad_unique` (`entidad`);

--
-- Indices de la tabla `estado_motivo`
--
ALTER TABLE `estado_motivo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `estado_organismo`
--
ALTER TABLE `estado_organismo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `grupos`
--
ALTER TABLE `grupos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `localidades`
--
ALTER TABLE `localidades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivos`
--
ALTER TABLE `motivos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `motivos_motivo_unique` (`motivo`);

--
-- Indices de la tabla `motivo_localidad`
--
ALTER TABLE `motivo_localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivo_municipio`
--
ALTER TABLE `motivo_municipio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivo_organismo`
--
ALTER TABLE `motivo_organismo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `motivo_parroquia`
--
ALTER TABLE `motivo_parroquia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipio_organismo`
--
ALTER TABLE `municipio_organismo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organismos`
--
ALTER TABLE `organismos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organismo_localidad`
--
ALTER TABLE `organismo_localidad`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organismo_parroquia`
--
ALTER TABLE `organismo_parroquia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `organismo_user`
--
ALTER TABLE `organismo_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indices de la tabla `sessiones`
--
ALTER TABLE `sessiones`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `casos`
--
ALTER TABLE `casos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contactos`
--
ALTER TABLE `contactos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT de la tabla `contacto_cuadrante`
--
ALTER TABLE `contacto_cuadrante`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `contacto_organismo`
--
ALTER TABLE `contacto_organismo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `contacto_user`
--
ALTER TABLE `contacto_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `cuadrantes`
--
ALTER TABLE `cuadrantes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
--
-- AUTO_INCREMENT de la tabla `cuadrante_motivo`
--
ALTER TABLE `cuadrante_motivo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `direcciones`
--
ALTER TABLE `direcciones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `estado_motivo`
--
ALTER TABLE `estado_motivo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `estado_organismo`
--
ALTER TABLE `estado_organismo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `grupos`
--
ALTER TABLE `grupos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `llamadas`
--
ALTER TABLE `llamadas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `localidades`
--
ALTER TABLE `localidades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT de la tabla `motivos`
--
ALTER TABLE `motivos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT de la tabla `motivo_localidad`
--
ALTER TABLE `motivo_localidad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `motivo_municipio`
--
ALTER TABLE `motivo_municipio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `motivo_organismo`
--
ALTER TABLE `motivo_organismo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `motivo_parroquia`
--
ALTER TABLE `motivo_parroquia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `municipios`
--
ALTER TABLE `municipios`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT de la tabla `municipio_organismo`
--
ALTER TABLE `municipio_organismo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `organismos`
--
ALTER TABLE `organismos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT de la tabla `organismo_localidad`
--
ALTER TABLE `organismo_localidad`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `organismo_parroquia`
--
ALTER TABLE `organismo_parroquia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `organismo_user`
--
ALTER TABLE `organismo_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `parroquias`
--
ALTER TABLE `parroquias`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT de la tabla `sessiones`
--
ALTER TABLE `sessiones`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
--
-- AUTO_INCREMENT de la tabla `vehiculos`
--
ALTER TABLE `vehiculos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
