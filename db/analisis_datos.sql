-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-09-2018 a las 06:41:33
-- Versión del servidor: 10.1.34-MariaDB
-- Versión de PHP: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `analisis_datos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividades`
--

CREATE TABLE `actividades` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actividad_user`
--

CREATE TABLE `actividad_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `actividad_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `url` longtext COLLATE utf8mb4_unicode_ci,
  `ip` longtext COLLATE utf8mb4_unicode_ci,
  `ubicacion` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuestas`
--

CREATE TABLE `encuestas` (
  `id` int(10) UNSIGNED NOT NULL,
  `finalizado` tinyint(1) NOT NULL DEFAULT '0',
  `nota` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(10) UNSIGNED NOT NULL,
  `periodo_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `encuestas`
--

INSERT INTO `encuestas` (`id`, `finalizado`, `nota`, `user_id`, `periodo_id`, `created_at`, `updated_at`) VALUES
(21, 0, NULL, 6, 4, '2018-09-18 13:01:50', '2018-09-18 13:03:01'),
(23, 0, NULL, 8, 4, '2018-09-18 21:15:53', '2018-09-18 21:15:53'),
(24, 0, NULL, 7, 4, '2018-09-18 21:20:11', '2018-09-18 21:20:11'),
(25, 0, NULL, 5, 4, '2018-09-18 21:20:59', '2018-09-18 21:20:59'),
(26, 0, NULL, 4, 4, '2018-09-18 21:21:48', '2018-09-18 21:21:48'),
(27, 0, NULL, 1, 4, '2018-09-18 21:25:13', '2018-09-18 21:25:13'),
(28, 0, NULL, 10, 4, '2018-09-19 05:50:20', '2018-09-19 05:50:20'),
(29, 0, NULL, 11, 4, '2018-09-19 05:51:17', '2018-09-19 05:51:17');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `encuesta_pregunta`
--

CREATE TABLE `encuesta_pregunta` (
  `id` int(10) UNSIGNED NOT NULL,
  `encuesta_id` int(10) UNSIGNED NOT NULL,
  `pregunta_id` int(10) UNSIGNED NOT NULL,
  `valor` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `encuesta_pregunta`
--

INSERT INTO `encuesta_pregunta` (`id`, `encuesta_id`, `pregunta_id`, `valor`, `created_at`, `updated_at`) VALUES
(197, 21, 1, 7, NULL, NULL),
(198, 21, 2, 7, NULL, NULL),
(199, 21, 3, 20, NULL, NULL),
(200, 21, 4, 20, NULL, NULL),
(201, 21, 5, 18, NULL, NULL),
(202, 21, 6, 18, NULL, NULL),
(203, 21, 7, 18, NULL, NULL),
(204, 21, 8, 18, NULL, NULL),
(205, 21, 9, 14, NULL, NULL),
(206, 21, 19, 14, NULL, NULL),
(207, 21, 22, 27, NULL, NULL),
(208, 21, 23, 2, NULL, NULL),
(209, 21, 24, 29, NULL, NULL),
(210, 21, 25, 224, NULL, NULL),
(218, 23, 15, 28, NULL, NULL),
(219, 23, 16, 29, NULL, NULL),
(220, 23, 17, 4, NULL, NULL),
(221, 23, 18, 4, NULL, NULL),
(222, 24, 1, 5, NULL, NULL),
(223, 24, 2, 5, NULL, NULL),
(224, 24, 3, 12, NULL, NULL),
(225, 24, 4, 12, NULL, NULL),
(226, 24, 5, 16, NULL, NULL),
(227, 24, 6, 16, NULL, NULL),
(228, 24, 7, 16, NULL, NULL),
(229, 24, 8, 16, NULL, NULL),
(230, 24, 9, 10, NULL, NULL),
(231, 24, 19, 10, NULL, NULL),
(232, 24, 22, 26, NULL, NULL),
(233, 24, 23, 0, NULL, NULL),
(234, 24, 24, 26, NULL, NULL),
(235, 24, 25, 26, NULL, NULL),
(236, 25, 1, 9, NULL, NULL),
(237, 25, 2, 26, NULL, NULL),
(238, 25, 3, 24, NULL, NULL),
(239, 25, 4, 25, NULL, NULL),
(240, 25, 5, 13, NULL, NULL),
(241, 25, 6, 16, NULL, NULL),
(242, 25, 7, 13, NULL, NULL),
(243, 25, 8, 13, NULL, NULL),
(244, 25, 9, 12, NULL, NULL),
(245, 25, 19, 12, NULL, NULL),
(246, 25, 22, 21, NULL, NULL),
(247, 25, 23, 56, NULL, NULL),
(248, 25, 24, 77, NULL, NULL),
(249, 25, 25, 361, NULL, NULL),
(250, 26, 1, 9, NULL, NULL),
(251, 26, 2, 9, NULL, NULL),
(252, 26, 3, 21, NULL, NULL),
(253, 26, 4, 21, NULL, NULL),
(254, 26, 5, 15, NULL, NULL),
(255, 26, 6, 17, NULL, NULL),
(256, 26, 7, 15, NULL, NULL),
(257, 26, 8, 15, NULL, NULL),
(258, 26, 9, 6, NULL, NULL),
(259, 26, 19, 6, NULL, NULL),
(260, 26, 22, 24, NULL, NULL),
(261, 26, 23, 0, NULL, NULL),
(262, 26, 24, 24, NULL, NULL),
(263, 26, 25, 158, NULL, NULL),
(264, 27, 10, 60, NULL, NULL),
(265, 27, 11, 29, NULL, NULL),
(266, 27, 12, 29, NULL, NULL),
(267, 27, 13, 0, NULL, NULL),
(268, 27, 14, 0, NULL, NULL),
(269, 27, 20, 509, NULL, NULL),
(270, 27, 21, NULL, NULL, NULL),
(271, 28, 1, 14, NULL, NULL),
(272, 28, 2, 14, NULL, NULL),
(273, 28, 3, 20, NULL, NULL),
(274, 28, 4, 20, NULL, NULL),
(275, 28, 5, 12, NULL, NULL),
(276, 28, 6, 14, NULL, NULL),
(277, 28, 7, 12, NULL, NULL),
(278, 28, 8, 12, NULL, NULL),
(279, 28, 9, 9, NULL, NULL),
(280, 28, 19, 9, NULL, NULL),
(281, 28, 22, 23, NULL, NULL),
(282, 28, 23, 14, NULL, NULL),
(283, 28, 24, 37, NULL, NULL),
(284, 28, 25, 204, NULL, NULL),
(285, 29, 1, NULL, NULL, NULL),
(286, 29, 2, NULL, NULL, NULL),
(287, 29, 3, NULL, NULL, NULL),
(288, 29, 4, NULL, NULL, NULL),
(289, 29, 5, 7, NULL, NULL),
(290, 29, 6, 8, NULL, NULL),
(291, 29, 7, 7, NULL, NULL),
(292, 29, 8, 7, NULL, NULL),
(293, 29, 9, 9, NULL, NULL),
(294, 29, 19, 9, NULL, NULL),
(295, 29, 22, 2, NULL, NULL),
(296, 29, 23, 20, NULL, NULL),
(297, 29, 24, 22, NULL, NULL),
(298, 29, 25, 37, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `indicadores`
--

CREATE TABLE `indicadores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` longtext COLLATE utf8mb4_unicode_ci,
  `posicion` int(11) DEFAULT NULL,
  `proceso_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `indicadores`
--

INSERT INTO `indicadores` (`id`, `nombre`, `nota`, `posicion`, `proceso_id`, `created_at`, `updated_at`) VALUES
(1, 'Selección de personal Docente', NULL, NULL, 1, '2018-09-18 09:26:18', '2018-09-18 09:26:18'),
(2, 'Evaluación Docente', NULL, NULL, 1, '2018-09-18 21:40:38', '2018-09-18 21:40:38'),
(3, 'Autorización de Planes de Cursos Académicos', NULL, NULL, 1, '2018-09-18 21:43:39', '2018-09-18 21:43:39'),
(4, 'Seguimiento y Evaluación de Cursos Académicos', NULL, NULL, 1, '2018-09-18 21:48:30', '2018-09-18 21:48:30'),
(6, 'Realización y Evaluación de Estancia y/o Estadía', NULL, NULL, 1, '2018-09-19 04:37:43', '2018-09-19 04:37:43'),
(7, 'Autorización de Cargas Horarias Docentes', NULL, NULL, 1, '2018-09-19 04:43:04', '2018-09-19 04:43:04'),
(8, 'Autorización de Cambio de Carrera dentro de la UPVT', NULL, NULL, 1, '2018-09-19 04:52:08', '2018-09-19 04:52:08'),
(9, 'Control del servicio o producto no conforme', NULL, NULL, 2, '2018-09-19 04:56:08', '2018-09-19 04:56:08'),
(10, 'Asesoría Académica', NULL, NULL, 3, '2018-09-19 04:58:36', '2018-09-19 04:58:36'),
(11, 'Tutoría Académica', NULL, NULL, 3, '2018-09-19 05:04:29', '2018-09-19 05:04:29'),
(12, 'Evaluación  Docente de Estancias o Estadías', NULL, NULL, 1, '2018-09-19 05:08:39', '2018-09-19 05:08:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_01_20_084450_create_roles_table', 1),
(4, '2015_01_20_084525_create_role_user_table', 1),
(5, '2015_01_24_080208_create_permissions_table', 1),
(6, '2015_01_24_080433_create_permission_role_table', 1),
(7, '2015_12_04_003040_add_special_role_column', 1),
(8, '2017_10_17_170735_create_permission_user_table', 1),
(9, '2018_08_26_221241_create_actividades_table', 1),
(10, '2018_08_26_231053_create_programas_table', 1),
(11, '2018_08_26_231507_create_procesos_table', 1),
(12, '2018_08_26_233031_create_indicadores_table', 1),
(13, '2018_08_26_233927_create_subindicadores_table', 1),
(14, '2018_08_26_234134_create_periodos_table', 1),
(15, '2018_08_26_234730_create_preguntas_table', 1),
(16, '2018_08_27_000751_create_encuestas_table', 1),
(17, '2018_08_27_001150_create_actividad_user_table', 1),
(18, '2018_08_27_001322_create_programa_user_table', 1),
(19, '2018_08_27_001352_create_encuesta_pregunta_table', 1),
(20, '2018_08_29_194724_create_pregunta_programa_table', 1),
(21, '2018_09_02_201423_create_programa_subindicador_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `periodos`
--

CREATE TABLE `periodos` (
  `id` int(10) UNSIGNED NOT NULL,
  `clave` enum('enero-abril','mayo-agosto','septiembre-diciembre') COLLATE utf8mb4_unicode_ci NOT NULL,
  `anio` year(4) NOT NULL,
  `actual` tinyint(1) DEFAULT NULL,
  `estado` tinyint(1) DEFAULT NULL,
  `posicion` int(11) DEFAULT NULL,
  `programa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `periodos`
--

INSERT INTO `periodos` (`id`, `clave`, `anio`, `actual`, `estado`, `posicion`, `programa_id`, `created_at`, `updated_at`) VALUES
(4, 'septiembre-diciembre', 2017, 0, 1, 2, 2, '2018-09-18 04:26:00', '2018-09-19 03:24:35'),
(5, 'septiembre-diciembre', 2017, 0, 0, NULL, 4, '2018-09-18 04:59:59', '2018-09-18 04:59:59'),
(10, 'mayo-agosto', 2017, 0, 0, NULL, 2, '2018-09-19 06:06:45', '2018-09-19 06:28:03'),
(11, 'enero-abril', 2017, 0, 1, NULL, 2, '2018-09-19 06:28:12', '2018-09-19 06:29:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_role`
--

CREATE TABLE `permission_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permission_user`
--

CREATE TABLE `permission_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preguntas`
--

CREATE TABLE `preguntas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` longtext COLLATE utf8mb4_unicode_ci,
  `desactivar` tinyint(1) NOT NULL DEFAULT '0',
  `posicion` int(11) DEFAULT NULL,
  `programa_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `preguntas`
--

INSERT INTO `preguntas` (`id`, `nombre`, `nota`, `desactivar`, `posicion`, `programa_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 'Número de alumnos que fueron evaluados en el de Estancias/Estadía', 'Periodo establecido. (40 días como máximo)', 0, NULL, 2, 2, NULL, NULL),
(2, 'Total de alumnos con carta de terminación de Estancia/Estadía', '', 0, NULL, 2, 2, NULL, NULL),
(3, 'Alumnos que entregan informe quincenal', '', 0, NULL, 2, 2, NULL, NULL),
(4, 'Número de alumnos en proceso de Estancia/Estadía', '', 0, NULL, 2, 2, NULL, NULL),
(5, 'Numero total de alumnos que cumplieron con el 100 % de asesorías y que acreditaron todas sus asignaturas', '', 0, NULL, 2, 2, NULL, NULL),
(6, 'Número total de alumnos tutorados', '', 0, NULL, 2, 2, NULL, NULL),
(7, 'Número total de alumnos que cumplieron con el 100% de asesorías', '', 0, NULL, 2, 2, NULL, NULL),
(8, 'Número total de alumnos que acreditaron todas sus asignaturas', '', 0, NULL, 2, 2, NULL, NULL),
(9, 'Planes de Cursos Académicos autorizados en los primeros 15 días del cuatrimestre', '', 0, NULL, 2, 2, NULL, NULL),
(10, 'Total de asignaturas de la oferta educativa del cuatrimestre', '', 0, NULL, 2, 1, NULL, NULL),
(11, 'Número de Cargas Horarias Docentes autorizadas', '', 0, NULL, 2, 1, NULL, NULL),
(12, 'Total de Docentes para el cuatrimestre Autorizadas', '', 0, NULL, 2, 1, NULL, NULL),
(13, 'Número de alumnos con Dictamen de Cambio de Carrera en los 10 días hábiles', '', 0, NULL, 2, 1, NULL, NULL),
(14, 'Total de alumnos que solicitaron cambio de Cambio de Carrera', '', 0, NULL, 2, 1, NULL, NULL),
(15, 'Número de Docentes con más del 50% del total de sus cursos con Evaluación Docente satisfactoria', '', 0, NULL, 2, 3, NULL, NULL),
(16, 'Total de Docentes evaluados', '', 0, NULL, 2, 3, NULL, NULL),
(17, 'Número de Docentes Contratados', '', 0, NULL, 2, 3, NULL, NULL),
(18, 'Número de Aspirantes Evaluados', '', 0, NULL, 2, 3, NULL, NULL),
(19, 'Número de asignaturas que atendieron el 100% del programa de la asignatura', '', 0, NULL, 2, 2, NULL, NULL),
(20, 'Total de alumnos inscritos en el Programa Educativo', '', 0, NULL, 2, 1, NULL, NULL),
(21, 'Expedición de Dictamen oficial de equivalencia de estudios', 'Días Transcurridos entre la solicitud y la entrega del dictamen', 0, NULL, 2, 1, NULL, NULL),
(22, 'Número total de alumnos asesorados con control de Tutoría', '', 0, NULL, 2, 2, NULL, NULL),
(23, 'Número total de alumnos asesorados sin Control de Tutoría', '', 0, NULL, 2, 2, NULL, NULL),
(24, 'Número total de alumnos asesorados', '', 0, NULL, 2, 2, NULL, NULL),
(25, 'Número Total de Asesorías', '', 0, NULL, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pregunta_programa`
--

CREATE TABLE `pregunta_programa` (
  `id` int(10) UNSIGNED NOT NULL,
  `pregunta_id` int(10) UNSIGNED NOT NULL,
  `programa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `procesos`
--

CREATE TABLE `procesos` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` longtext COLLATE utf8mb4_unicode_ci,
  `posicion` int(11) DEFAULT NULL,
  `programa_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `procesos`
--

INSERT INTO `procesos` (`id`, `nombre`, `nota`, `posicion`, `programa_id`, `created_at`, `updated_at`) VALUES
(1, 'Enseñanza Aprendizaje', NULL, NULL, 2, '2018-09-18 09:23:50', '2018-09-18 09:24:59'),
(2, 'Procedimientos de Control', NULL, NULL, 2, '2018-09-19 04:55:35', '2018-09-19 04:55:35'),
(3, 'Procedimientos de Fortalecimiento Académico', NULL, NULL, 2, '2018-09-19 04:58:01', '2018-09-19 04:58:01'),
(4, 'Autorización y Control de Cambios de calificaciones a las y los alumnos', NULL, NULL, 2, '2018-09-19 05:11:46', '2018-09-19 05:11:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programas`
--

CREATE TABLE `programas` (
  `id` int(10) UNSIGNED NOT NULL,
  `clave` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programas`
--

INSERT INTO `programas` (`id`, `clave`, `nombre`, `created_at`, `updated_at`) VALUES
(1, 'LNI', 'Licenciatura en Negocios Internacionales', NULL, NULL),
(2, 'INI', 'Ingeniería en Informática', NULL, NULL),
(3, 'IIS', 'Ingeniería Industrial y de Sistemas', NULL, NULL),
(4, 'IMA', 'Ingeniería en Mecánica Automotriz', NULL, NULL),
(5, 'IME', 'Ingeniería Mecatrónica', NULL, NULL),
(6, 'IEN', 'Ingeniería en Energía', NULL, NULL),
(7, 'IBT', 'Ingeniería en Biotecnología', NULL, NULL),
(8, 'MAD', 'Maestría en Administración', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_subindicador`
--

CREATE TABLE `programa_subindicador` (
  `id` int(10) UNSIGNED NOT NULL,
  `programa_id` int(10) UNSIGNED NOT NULL,
  `subindicador_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `programa_user`
--

CREATE TABLE `programa_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `programa_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `predeterminado` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `programa_user`
--

INSERT INTO `programa_user` (`id`, `programa_id`, `user_id`, `predeterminado`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, NULL, NULL),
(2, 8, 1, 0, NULL, NULL),
(7, 2, 4, 1, NULL, NULL),
(8, 4, 2, 1, NULL, NULL),
(9, 2, 5, 0, NULL, NULL),
(10, 2, 6, 1, NULL, NULL),
(11, 2, 7, 0, NULL, NULL),
(12, 2, 8, 0, NULL, NULL),
(13, 4, 9, 0, NULL, NULL),
(14, 2, 10, 0, NULL, NULL),
(15, 2, 11, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `special` enum('all-access','no-access') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`, `special`) VALUES
(1, 'Director', 'director', 'Director principal de la carrera', NULL, NULL, 'all-access'),
(2, 'PTC', 'ptc', 'Profesor de tiempo completo', NULL, NULL, 'no-access'),
(3, 'Secretaria', 'secretaria', '', NULL, NULL, 'no-access');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(3, 2, 4, NULL, NULL),
(4, 1, 2, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 3, 8, NULL, NULL),
(9, 2, 9, NULL, NULL),
(10, 2, 10, NULL, NULL),
(11, 2, 11, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `subindicadores`
--

CREATE TABLE `subindicadores` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `procedimiento` longtext COLLATE utf8mb4_unicode_ci,
  `valor_meta` int(11) NOT NULL,
  `nota` longtext COLLATE utf8mb4_unicode_ci,
  `posicion` int(11) DEFAULT NULL,
  `indicador_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `subindicadores`
--

INSERT INTO `subindicadores` (`id`, `nombre`, `procedimiento`, `valor_meta`, `nota`, `posicion`, `indicador_id`, `created_at`, `updated_at`) VALUES
(1, 'Porcentaje de aspirantes contratados', '[{\"type\":\"pregunta\",\"value\":\"17\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"18\"}]', 50, 'No. De docentes contratados / No. De aspirantes evaluados', NULL, 1, '2018-09-18 09:27:39', '2018-09-18 21:26:15'),
(2, 'Porcentaje con evaluación satisfactoria de Docentes', '[{\"type\":\"pregunta\",\"value\":\"15\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"16\"}]', 85, 'Número de Docentes con más del 50% del total de \r\nsus cursos con Evaluación Docente satisfactoria / Total de Docentes evaluados', NULL, 2, '2018-09-18 21:42:16', '2018-09-18 21:42:16'),
(3, 'Porcentaje de planeación de los cursos', '[{\"type\":\"pregunta\",\"value\":\"9\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"10\"}]', 90, '(Planes de Cursos Académicos autorizados \r\nen los primeros 15 días del cuatrimestre / \r\nTotal de asignaturas de la oferta educativa del cuatrimestre) * 100', NULL, 3, '2018-09-18 21:45:20', '2018-09-18 21:45:20'),
(4, 'Eficiencia de la docencia', '[{\"type\":\"pregunta\",\"value\":\"19\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"10\"}]', 100, '(Número de asignaturas que atendieron el 100% del programa de la asignatura / \r\nTotal de asignaturas ofertadas en el cuatrimestre)  * 100', NULL, 4, '2018-09-18 21:50:09', '2018-09-19 04:37:07'),
(7, 'Eficiencia de la validación de Estancias', '[{\"type\":\"pregunta\",\"value\":\"1\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"2\"}]', 50, 'Número de alumnos que fueron evaluados en el periodo establecido. (40 días como máximo ) / Total de alumnos con carta de terminación de \r\nEstancia/Estadía', NULL, 6, '2018-09-19 04:39:52', '2018-09-19 04:39:52'),
(8, 'Eficiencia del seguimiento', '[{\"type\":\"pregunta\",\"value\":\"3\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"4\"}]', 70, 'Alumnos que entregan informe quincenal / \r\n Número de alumnos en proceso de Estancia/Estadía', NULL, 6, '2018-09-19 04:42:08', '2018-09-19 04:42:08'),
(9, '% de Cargas  Horarias Docente Autorizadas', '[{\"type\":\"pregunta\",\"value\":\"11\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"12\"}]', 85, 'Número de Cargas Horarias Docentes autorizadas  /\r\nTotal de Docentes para el cuatrimestre actual', NULL, 7, '2018-09-19 04:44:54', '2018-09-19 04:44:54'),
(10, 'Porcentaje de Autorizaciones de Cambio de Carrera', '[{\"type\":\"pregunta\",\"value\":\"13\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"14\"}]', 100, 'Número de alumnos con Dictamen de \r\nCambio de Carrera en los 10 días hábiles / Total de alumnos que solicitaron cambio de Carrera.', NULL, 8, '2018-09-19 04:53:13', '2018-09-19 06:46:28'),
(11, '%  de  cursos no conformes', '[]', 20, 'No. De cursos no conformes/Total de cursos en el cuatrimestre', NULL, 9, '2018-09-19 04:57:09', '2018-09-19 04:57:09'),
(12, '% de participación en la Asesoría con control de tutoría', '[{\"type\":\"pregunta\",\"value\":\"22\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"24\"}]', 10, 'No. total de alumnos asesorados con control de Tutoría / No. total de alumnos asesorados', NULL, 10, '2018-09-19 04:59:27', '2018-09-19 05:01:47'),
(14, '% de participación en la Asesoría sin control de tutoría', '[{\"type\":\"pregunta\",\"value\":\"23\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"24\"}]', 10, 'No. total de alumnos asesorados sin Control de Tutoría / No. total de alumnos asesorados', NULL, 10, '2018-09-19 05:02:32', '2018-09-19 05:02:32'),
(15, '% de participación en la Asesoría general', '[{\"type\":\"pregunta\",\"value\":\"24\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"20\"}]', 10, NULL, NULL, 10, '2018-09-19 05:03:39', '2018-09-19 05:03:39'),
(16, '% de efectividad de la tutoría', '[{\"type\":\"pregunta\",\"value\":\"5\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"6\"}]', 80, 'Núm. total de alumnos que cumplieron con el 100 % de asesorías y que acreditaron todas sus asignaturas. / Núm. total de alumnos tutorados', NULL, 11, '2018-09-19 05:05:34', '2018-09-19 05:05:34'),
(17, '% de eficiencia de la tutoría Núm', '[{\"type\":\"pregunta\",\"value\":\"5\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"7\"}]', 80, 'Núm. total de alumnos que cumplieron con el 100 % de asesorías y que acreditaron todas sus asignaturas. / Núm. total de alumnos que cumplieron con el 100% de asesorías', NULL, 11, '2018-09-19 05:06:50', '2018-09-19 05:06:50'),
(18, '% de aprobación', '[{\"type\":\"pregunta\",\"value\":\"8\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"6\"}]', 80, 'Núm. total de alumnos que acreditaron todas sus asignaturas / Número total de alumnos tutorados', NULL, 11, '2018-09-19 05:07:33', '2018-09-19 05:17:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `prefijo` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `password` varchar(120) COLLATE utf8mb4_unicode_ci NOT NULL,
  `disabled` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `prefijo`, `name`, `apellidos`, `email`, `username`, `admin`, `password`, `disabled`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'M. en C.E. ', 'Leticia Jael', 'Rojas Ortiz', 'jael@upvt.com', '1', 1, '$2y$10$NlRBOTbAnoql2oHPx/iIp.0Od24fXCFIHZDy38gsdaIZzdJiOwI0a', 0, 'Kyt4Oh2bpaEW0hs8u7ZQbudTvJzW50tTVHJDWKrCwXhgrBEDxVKRRoVFQ7Hf', NULL, NULL),
(2, NULL, 'Arlet', '', 'arlet@upvt.com', '2', 1, '$2y$10$m2oBD8EGLp8MG4ItGRE5uOvEkrmLy/QYqZsnmA7DCSfD27j3moxoa', 0, 'jc3SX6SlkYExXLy2wELyAlOIYKsDydRWhktFhQxLnu1BzxoG5tTgQ9fAHBjf', NULL, NULL),
(4, 'M. en TI. ', 'Martha', 'Montes de Oca Herrera', 'martha@upvt.com', '4', 0, '$2y$10$YKjE9Sv2NmqgmV6AbLClzeqbbzLbGdm/ensN3NaCC47Z1x9MJ3LXS', 0, 'p0d79oA0V5V85cweVZsA8SpvJM62Z8ypmBCz1k18SnP8SRyzFnji0iQPQa8C', '2018-09-17 09:09:27', '2018-09-18 09:35:44'),
(5, 'M. en C. ', 'Juana Guadalupe', 'Bringas Gonález', 'adrian@upvt.com', '5', 0, '$2y$10$9sr4dcTkHxsUPJZY5GDK1.dqh/I7iFu7mtdYnezi7XL4aGJwytaw6', 0, NULL, '2018-09-18 09:36:37', '2018-09-18 22:53:28'),
(6, 'M. en CC.', 'Adrían', 'González Gómez', NULL, '6', 0, '$2y$10$thmOj4YeQXafMniStF3DbulQ.OoosUlwhaehCUn8JawW0Mlh180Qa', 0, NULL, '2018-09-18 09:37:25', '2018-09-18 23:04:45'),
(7, 'M. en A. ', 'José Luis', 'Ledezma Sánchez', 'ledezma@upvt.com', '7', 0, '$2y$10$a4.ID3ug3Be3BQGdSiO35OKsNfH0rdqUlUmfAZP5StH08JpG6L6EK', 0, NULL, '2018-09-18 09:38:13', '2018-09-18 09:38:13'),
(8, NULL, 'Belem', NULL, 'belem@upvt.com', '20', 0, '$2y$10$MHry21hdsMQvVsCnG.yux.whTufY7sfCRjn9E/jXGjoaXdyuq3mOG', 0, NULL, '2018-09-18 09:39:01', '2018-09-18 23:00:36'),
(9, NULL, 'Ejemplo', NULL, 'ejemplo@upvt.com', '9', 0, '$2y$10$KteHvCKjgSXvdZNrEFMuOegkM.0uJmtfi.K3mkDLXCMWmUmECwfWu', 0, NULL, '2018-09-18 11:02:27', '2018-09-18 11:02:27'),
(10, NULL, 'Leticia Jael', 'Rojas Ortiz', NULL, '24', 0, '$2y$10$PvfFMHUWm/blxdF1frDrHOeXixDPdmH1O70sy.BbAkgoOias29KAq', 0, NULL, '2018-09-19 05:22:42', '2018-09-19 05:22:42'),
(11, NULL, 'Alejandra', NULL, NULL, '15', 0, '$2y$10$/4tcOnnds6BD2CRgSVn5L.UxCQzDg/LrsyeSTviSTrj.MH5rugrZa', 0, NULL, '2018-09-19 05:47:12', '2018-09-19 05:47:12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actividad_user`
--
ALTER TABLE `actividad_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actividad_user_actividad_id_foreign` (`actividad_id`),
  ADD KEY `actividad_user_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `encuestas_user_id_foreign` (`user_id`),
  ADD KEY `encuestas_periodo_id_foreign` (`periodo_id`);

--
-- Indices de la tabla `encuesta_pregunta`
--
ALTER TABLE `encuesta_pregunta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `encuesta_pregunta_encuesta_id_foreign` (`encuesta_id`),
  ADD KEY `encuesta_pregunta_pregunta_id_foreign` (`pregunta_id`);

--
-- Indices de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `indicadores_nombre_unique` (`nombre`),
  ADD KEY `indicadores_proceso_id_foreign` (`proceso_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `periodos_programa_id_foreign` (`programa_id`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_slug_unique` (`slug`);

--
-- Indices de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indices de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permission_user_permission_id_index` (`permission_id`),
  ADD KEY `permission_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `preguntas_programa_id_foreign` (`programa_id`),
  ADD KEY `preguntas_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `pregunta_programa`
--
ALTER TABLE `pregunta_programa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pregunta_programa_pregunta_id_foreign` (`pregunta_id`),
  ADD KEY `pregunta_programa_programa_id_foreign` (`programa_id`);

--
-- Indices de la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `procesos_nombre_unique` (`nombre`),
  ADD KEY `procesos_programa_id_foreign` (`programa_id`);

--
-- Indices de la tabla `programas`
--
ALTER TABLE `programas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `programas_clave_unique` (`clave`),
  ADD UNIQUE KEY `programas_nombre_unique` (`nombre`);

--
-- Indices de la tabla `programa_subindicador`
--
ALTER TABLE `programa_subindicador`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programa_subindicador_programa_id_foreign` (`programa_id`),
  ADD KEY `programa_subindicador_subindicador_id_foreign` (`subindicador_id`);

--
-- Indices de la tabla `programa_user`
--
ALTER TABLE `programa_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `programa_user_programa_id_foreign` (`programa_id`),
  ADD KEY `programa_user_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_user_role_id_index` (`role_id`),
  ADD KEY `role_user_user_id_index` (`user_id`);

--
-- Indices de la tabla `subindicadores`
--
ALTER TABLE `subindicadores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subindicadores_nombre_unique` (`nombre`),
  ADD KEY `subindicadores_indicador_id_foreign` (`indicador_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actividades`
--
ALTER TABLE `actividades`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `actividad_user`
--
ALTER TABLE `actividad_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `encuestas`
--
ALTER TABLE `encuestas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `encuesta_pregunta`
--
ALTER TABLE `encuesta_pregunta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=299;

--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permission_role`
--
ALTER TABLE `permission_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `permission_user`
--
ALTER TABLE `permission_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `preguntas`
--
ALTER TABLE `preguntas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `pregunta_programa`
--
ALTER TABLE `pregunta_programa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `programas`
--
ALTER TABLE `programas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `programa_subindicador`
--
ALTER TABLE `programa_subindicador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `programa_user`
--
ALTER TABLE `programa_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `subindicadores`
--
ALTER TABLE `subindicadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actividad_user`
--
ALTER TABLE `actividad_user`
  ADD CONSTRAINT `actividad_user_actividad_id_foreign` FOREIGN KEY (`actividad_id`) REFERENCES `actividades` (`id`),
  ADD CONSTRAINT `actividad_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `encuestas`
--
ALTER TABLE `encuestas`
  ADD CONSTRAINT `encuestas_periodo_id_foreign` FOREIGN KEY (`periodo_id`) REFERENCES `periodos` (`id`),
  ADD CONSTRAINT `encuestas_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `encuesta_pregunta`
--
ALTER TABLE `encuesta_pregunta`
  ADD CONSTRAINT `encuesta_pregunta_encuesta_id_foreign` FOREIGN KEY (`encuesta_id`) REFERENCES `encuestas` (`id`),
  ADD CONSTRAINT `encuesta_pregunta_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`);

--
-- Filtros para la tabla `indicadores`
--
ALTER TABLE `indicadores`
  ADD CONSTRAINT `indicadores_proceso_id_foreign` FOREIGN KEY (`proceso_id`) REFERENCES `procesos` (`id`);

--
-- Filtros para la tabla `periodos`
--
ALTER TABLE `periodos`
  ADD CONSTRAINT `periodos_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`);

--
-- Filtros para la tabla `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `preguntas`
--
ALTER TABLE `preguntas`
  ADD CONSTRAINT `preguntas_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `preguntas_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Filtros para la tabla `pregunta_programa`
--
ALTER TABLE `pregunta_programa`
  ADD CONSTRAINT `pregunta_programa_pregunta_id_foreign` FOREIGN KEY (`pregunta_id`) REFERENCES `preguntas` (`id`),
  ADD CONSTRAINT `pregunta_programa_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`);

--
-- Filtros para la tabla `procesos`
--
ALTER TABLE `procesos`
  ADD CONSTRAINT `procesos_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`);

--
-- Filtros para la tabla `programa_subindicador`
--
ALTER TABLE `programa_subindicador`
  ADD CONSTRAINT `programa_subindicador_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `programa_subindicador_subindicador_id_foreign` FOREIGN KEY (`subindicador_id`) REFERENCES `subindicadores` (`id`);

--
-- Filtros para la tabla `programa_user`
--
ALTER TABLE `programa_user`
  ADD CONSTRAINT `programa_user_programa_id_foreign` FOREIGN KEY (`programa_id`) REFERENCES `programas` (`id`),
  ADD CONSTRAINT `programa_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `subindicadores`
--
ALTER TABLE `subindicadores`
  ADD CONSTRAINT `subindicadores_indicador_id_foreign` FOREIGN KEY (`indicador_id`) REFERENCES `indicadores` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
