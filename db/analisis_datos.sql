-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-09-2018 a las 08:05:39
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
(1, 1, NULL, 2, 1, '2018-09-23 04:47:42', '2018-09-23 04:49:16'),
(2, 1, NULL, 3, 1, '2018-09-23 04:50:20', '2018-09-23 04:50:20'),
(3, 1, NULL, 5, 1, '2018-09-23 04:51:17', '2018-09-23 04:51:17'),
(4, 1, NULL, 4, 1, '2018-09-23 04:52:15', '2018-09-23 04:52:15'),
(5, 1, NULL, 7, 1, '2018-09-23 04:53:36', '2018-09-23 04:53:36'),
(6, 1, NULL, 8, 1, '2018-09-23 04:54:23', '2018-09-23 04:54:23'),
(7, 0, NULL, 10, 1, '2018-09-23 04:58:52', '2018-09-23 04:58:52'),
(8, 1, NULL, 11, 1, '2018-09-23 05:00:19', '2018-09-23 05:00:19'),
(9, 0, NULL, 12, 4, '2018-09-23 05:56:52', '2018-09-23 05:56:52');

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
(1, 1, 1, 7, NULL, NULL),
(2, 1, 2, 7, NULL, NULL),
(3, 1, 3, 20, NULL, NULL),
(4, 1, 4, 20, NULL, NULL),
(5, 1, 5, 18, NULL, NULL),
(6, 1, 6, 18, NULL, NULL),
(7, 1, 7, 18, NULL, NULL),
(8, 1, 8, 18, NULL, NULL),
(9, 1, 9, 14, NULL, NULL),
(10, 1, 19, 14, NULL, NULL),
(11, 1, 22, 27, NULL, NULL),
(12, 1, 23, 2, NULL, NULL),
(13, 1, 24, 29, NULL, NULL),
(14, 1, 25, 224, NULL, NULL),
(15, 2, 1, 9, NULL, NULL),
(16, 2, 2, 26, NULL, NULL),
(17, 2, 3, 24, NULL, NULL),
(18, 2, 4, 25, NULL, NULL),
(19, 2, 5, 13, NULL, NULL),
(20, 2, 6, 16, NULL, NULL),
(21, 2, 7, 13, NULL, NULL),
(22, 2, 8, 13, NULL, NULL),
(23, 2, 9, 12, NULL, NULL),
(24, 2, 19, 12, NULL, NULL),
(25, 2, 22, 21, NULL, NULL),
(26, 2, 23, 56, NULL, NULL),
(27, 2, 24, 77, NULL, NULL),
(28, 2, 25, 361, NULL, NULL),
(29, 3, 1, 5, NULL, NULL),
(30, 3, 2, 5, NULL, NULL),
(31, 3, 3, 12, NULL, NULL),
(32, 3, 4, 12, NULL, NULL),
(33, 3, 5, 16, NULL, NULL),
(34, 3, 6, 16, NULL, NULL),
(35, 3, 7, 16, NULL, NULL),
(36, 3, 8, 16, NULL, NULL),
(37, 3, 9, 10, NULL, NULL),
(38, 3, 19, 10, NULL, NULL),
(39, 3, 22, 26, NULL, NULL),
(40, 3, 23, 0, NULL, NULL),
(41, 3, 24, 26, NULL, NULL),
(42, 3, 25, 26, NULL, NULL),
(43, 4, 1, 9, NULL, NULL),
(44, 4, 2, 9, NULL, NULL),
(45, 4, 3, 21, NULL, NULL),
(46, 4, 4, 21, NULL, NULL),
(47, 4, 5, 15, NULL, NULL),
(48, 4, 6, 17, NULL, NULL),
(49, 4, 7, 15, NULL, NULL),
(50, 4, 8, 15, NULL, NULL),
(51, 4, 9, 6, NULL, NULL),
(52, 4, 19, 6, NULL, NULL),
(53, 4, 22, 24, NULL, NULL),
(54, 4, 23, 0, NULL, NULL),
(55, 4, 24, 24, NULL, NULL),
(56, 4, 25, 158, NULL, NULL),
(57, 5, 1, 14, NULL, NULL),
(58, 5, 2, 14, NULL, NULL),
(59, 5, 3, 20, NULL, NULL),
(60, 5, 4, 20, NULL, NULL),
(61, 5, 5, 12, NULL, NULL),
(62, 5, 6, 14, NULL, NULL),
(63, 5, 7, 12, NULL, NULL),
(64, 5, 8, 12, NULL, NULL),
(65, 5, 9, 9, NULL, NULL),
(66, 5, 19, 9, NULL, NULL),
(67, 5, 22, 23, NULL, NULL),
(68, 5, 23, 14, NULL, NULL),
(69, 5, 24, 37, NULL, NULL),
(70, 5, 25, 204, NULL, NULL),
(71, 6, 1, NULL, NULL, NULL),
(72, 6, 2, NULL, NULL, NULL),
(73, 6, 3, NULL, NULL, NULL),
(74, 6, 4, NULL, NULL, NULL),
(75, 6, 5, 7, NULL, NULL),
(76, 6, 6, 8, NULL, NULL),
(77, 6, 7, 7, NULL, NULL),
(78, 6, 8, 7, NULL, NULL),
(79, 6, 9, 9, NULL, NULL),
(80, 6, 19, 9, NULL, NULL),
(81, 6, 22, 2, NULL, NULL),
(82, 6, 23, 20, NULL, NULL),
(83, 6, 24, 22, NULL, NULL),
(84, 6, 25, 37, NULL, NULL),
(85, 7, 10, 60, NULL, NULL),
(86, 7, 11, 29, NULL, NULL),
(87, 7, 12, 29, NULL, NULL),
(88, 7, 13, 0, NULL, NULL),
(89, 7, 14, 0, NULL, NULL),
(90, 7, 20, 509, NULL, NULL),
(91, 7, 21, NULL, NULL, NULL),
(92, 8, 15, 5, NULL, NULL),
(93, 8, 16, 5, NULL, NULL),
(94, 8, 17, 4, NULL, NULL),
(95, 8, 18, 4, NULL, NULL),
(96, 9, 15, 5, NULL, NULL),
(97, 9, 16, 6, NULL, NULL),
(98, 9, 17, 2, NULL, NULL),
(99, 9, 18, 7, NULL, NULL);

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
(1, 'Selección de personal Docente', NULL, NULL, 1, '2018-09-23 05:02:32', '2018-09-23 05:02:32');

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
(1, 'septiembre-diciembre', 2017, 0, 1, 1, 2, '2018-09-23 02:49:59', '2018-09-23 05:50:03'),
(4, 'septiembre-diciembre', 2018, 0, 1, 3, 2, '2018-09-23 05:49:41', '2018-09-23 05:58:22'),
(5, 'mayo-agosto', 2018, 0, 0, 2, 2, '2018-09-23 05:58:11', '2018-09-23 05:58:22');

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

--
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Navegar periodos', 'periodos.index', 'Lista y navegar todos los periodos del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(2, 'Ver detalle del periodo', 'periodos.show', 'Ver en detalle cada periodo del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(3, 'Creación de periodos', 'periodos.create', 'Crear periodos en el sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(4, 'Edición de periodos', 'periodos.edit', 'Editar cualquier dato de un periodo del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(5, 'Eliminar periodos', 'periodos.destroy', 'Eliminar cualquier periodo del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(6, 'Navegar preguntas', 'preguntas.index', 'Lista y navegar todas las preguntas del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(7, 'Ver detalle de la pregunta', 'preguntas.show', 'Ver en detalle cada pregunta del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(8, 'Creación de preguntas', 'preguntas.create', 'Crear preguntas en el sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(9, 'Edición de preguntas', 'preguntas.edit', 'Editar cualquier dato de un pregunta del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(10, 'Eliminar preguntas', 'preguntas.destroy', 'Eliminar cualquier pregunta del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(11, 'Navegar encuestas', 'encuestas.index', 'Lista y navegar todas las encuestas del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(12, 'Ver detalle de la encuesta', 'encuestas.show', 'Ver en detalle cada encuesta del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(13, 'Creación de encuestas', 'encuestas.create', 'Crear encuestas en el sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(14, 'Edición de encuestas', 'encuestas.edit', 'Editar cualquier dato de una encuesta del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(15, 'Eliminar encuestas', 'encuestas.destroy', 'Eliminar cualquier encuesta del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(16, 'Navegar procesos', 'procesos.index', 'Lista y navegar todos los procesos del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(17, 'Ver detalle del proceso', 'procesos.show', 'Ver en detalle cada proceso del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(18, 'Creación de procesos', 'procesos.create', 'Crear procesos en el sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(19, 'Edición de procesos', 'procesos.edit', 'Editar cualquier dato de un proceso del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(20, 'Eliminar procesos', 'procesos.destroy', 'Eliminar cualquier proceso del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(21, 'Navegar estadísticas', 'estadisticas.index', 'Lista y navegar todos los estadísticas del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48'),
(22, 'Ver detalle de la estadística', 'estadisticas.details', 'Ver en detalle cada estadística del sistema.', '2018-09-23 00:50:48', '2018-09-23 00:50:48');

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
(1, 'Número de alumnos que fueron evaluados en el de Estancias/Estadía', 'Periodo establecido. (40 días como máximo)', 0, 1, 2, 2, NULL, '2018-09-23 03:40:30'),
(2, 'Total de alumnos con carta de terminación de Estancia/Estadía', '', 0, 2, 2, 2, NULL, '2018-09-23 03:40:30'),
(3, 'Alumnos que entregan informe quincenal', '', 0, 3, 2, 2, NULL, '2018-09-23 03:40:17'),
(4, 'Número de alumnos en proceso de Estancia/Estadía', '', 0, 4, 2, 2, NULL, '2018-09-23 03:40:18'),
(5, 'Numero total de alumnos que cumplieron con el 100 % de asesorías y que acreditaron todas sus asignaturas', '', 0, 5, 2, 2, NULL, '2018-09-23 03:40:18'),
(6, 'Número total de alumnos tutorados', '', 0, 6, 2, 2, NULL, '2018-09-23 03:40:18'),
(7, 'Número total de alumnos que cumplieron con el 100% de asesorías', '', 0, 7, 2, 2, NULL, '2018-09-23 03:40:18'),
(8, 'Número total de alumnos que acreditaron todas sus asignaturas', '', 0, 8, 2, 2, NULL, '2018-09-23 03:40:18'),
(9, 'Planes de Cursos Académicos autorizados en los primeros 15 días del cuatrimestre', '', 0, 9, 2, 2, NULL, '2018-09-23 03:40:18'),
(10, 'Total de asignaturas de la oferta educativa del cuatrimestre', '', 0, 10, 2, 1, NULL, '2018-09-23 03:40:18'),
(11, 'Número de Cargas Horarias Docentes autorizadas', '', 0, 11, 2, 1, NULL, '2018-09-23 03:40:18'),
(12, 'Total de Docentes para el cuatrimestre Autorizadas', '', 0, 12, 2, 1, NULL, '2018-09-23 03:40:18'),
(13, 'Número de alumnos con Dictamen de Cambio de Carrera en los 10 días hábiles', '', 0, 13, 2, 1, NULL, '2018-09-23 03:40:18'),
(14, 'Total de alumnos que solicitaron cambio de Cambio de Carrera', '', 0, 14, 2, 1, NULL, '2018-09-23 03:40:18'),
(15, 'Número de Docentes con más del 50% del total de sus cursos con Evaluación Docente satisfactoria', '', 0, 15, 2, 3, NULL, '2018-09-23 03:40:18'),
(16, 'Total de Docentes evaluados', '', 0, 16, 2, 3, NULL, '2018-09-23 03:40:18'),
(17, 'Número de Docentes Contratados', '', 0, 17, 2, 3, NULL, '2018-09-23 03:40:18'),
(18, 'Número de Aspirantes Evaluados', '', 0, 18, 2, 3, NULL, '2018-09-23 03:40:18'),
(19, 'Número de asignaturas que atendieron el 100% del programa de la asignatura', '', 0, 19, 2, 2, NULL, '2018-09-23 03:40:18'),
(20, 'Total de alumnos inscritos en el Programa Educativo', '', 0, 20, 2, 1, NULL, '2018-09-23 03:40:18'),
(21, 'Expedición de Dictamen oficial de equivalencia de estudios', 'Días Transcurridos entre la solicitud y la entrega del dictamen', 0, 21, 2, 1, NULL, '2018-09-23 03:40:18'),
(22, 'Número total de alumnos asesorados con control de Tutoría', '', 0, 22, 2, 2, NULL, '2018-09-23 03:40:18'),
(23, 'Número total de alumnos asesorados sin Control de Tutoría', '', 0, 23, 2, 2, NULL, '2018-09-23 03:40:18'),
(24, 'Número total de alumnos asesorados', '', 0, 24, 2, 2, NULL, '2018-09-23 03:40:18'),
(25, 'Número Total de Asesorías', '', 0, 25, 2, 2, NULL, '2018-09-23 03:40:18');

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
(1, 'Enseñanza Aprendizaje', NULL, NULL, 2, '2018-09-23 05:02:13', '2018-09-23 05:02:13');

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
(3, 2, 2, 1, NULL, NULL),
(4, 2, 3, 0, NULL, NULL),
(5, 2, 4, 0, NULL, NULL),
(6, 2, 5, 0, NULL, NULL),
(7, 2, 6, 0, NULL, NULL),
(8, 2, 7, 0, NULL, NULL),
(9, 2, 8, 0, NULL, NULL),
(10, 2, 9, 0, NULL, NULL),
(11, 2, 10, 0, NULL, NULL),
(12, 8, 10, 1, NULL, NULL),
(13, 2, 11, 0, NULL, NULL),
(14, 2, 12, 0, NULL, NULL);

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
(2, 'PTC', 'ptc', 'Profesor de tiempo completo', NULL, NULL, NULL),
(3, 'Secretaria', 'secretaria', '', NULL, NULL, NULL);

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
(2, 2, 2, NULL, NULL),
(3, 2, 3, NULL, NULL),
(4, 2, 4, NULL, NULL),
(5, 2, 5, NULL, NULL),
(6, 2, 6, NULL, NULL),
(7, 2, 7, NULL, NULL),
(8, 2, 8, NULL, NULL),
(9, 2, 9, NULL, NULL),
(10, 1, 10, NULL, NULL),
(11, 3, 11, NULL, NULL),
(12, 3, 12, NULL, NULL);

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
(1, 'Porcentaje de aspirantes contratados', '[{\"type\":\"pregunta\",\"value\":\"17\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"18\"}]', 50, '(No. De docentes contratados/No. De aspirantes evaluados)', NULL, 1, '2018-09-23 05:03:27', '2018-09-23 05:05:39');

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
(1, 'M. en C.E.', 'Leticia Jael', 'Rojas Ortiz', 'jael@upvt.com', '1', 1, '$2y$10$kKCnjS1cTNv2IHenDW58ceIKHEOcQfRmHBgKL5IyOwRWLcyXRyU5i', 0, NULL, NULL, NULL),
(2, 'M. en CC.', 'Adrían', 'González Gómez', 'adriangonzalezblue@gmail.com', '2', 0, '$2y$10$25I6lqMbYK5lLy33NfjNUuwLRP4vTx03Qr2fNwk7fvR2TcGrOHIay', 0, 'daIppvxZvJUWOQpikCVFeAtl88gP0eZlsZncpQpDEWKH43egNC71Au2PtEPj', '2018-09-23 04:26:00', '2018-09-23 04:31:40'),
(3, 'M. en C.', 'Juana Guadalupe', 'Bringas González', NULL, '3', 0, '$2y$10$OBQU3uhAL3mAwF4578nUy.HG0u6MXYDN9wxauEQcTNb6qe4EMs5/a', 0, NULL, '2018-09-23 04:35:50', '2018-09-23 04:35:50'),
(4, 'M. en TI.', 'Martha Maria', 'Montes de Oca Herrera', NULL, '4', 0, '$2y$10$tMQyL.asNEvSlo18o4mUNe7.7i6.im2hG1xLpdceWvPrI61shGi/6', 0, NULL, '2018-09-23 04:36:51', '2018-09-23 04:36:51'),
(5, 'M. en A.', 'José Luis', 'Ledezma Sánchez', NULL, '5', 0, '$2y$10$z25CMgyQiTh5nb2YuhGGVOHJTF211nXc6SjLvlj6epGT6OzJZ5BFy', 0, NULL, '2018-09-23 04:37:32', '2018-09-23 04:37:32'),
(6, 'MTRO.', 'Pedro', 'Valencia Pérez', NULL, '6', 0, '$2y$10$1f6by/8G1t.vIs8Fr7hcleORAExz2BY8oAf2sbkSOzX.8PeK7Hpyq', 0, NULL, '2018-09-23 04:38:29', '2018-09-23 04:38:29'),
(7, NULL, 'Leticia Jael', 'Rojas Ortiz', NULL, '7', 0, '$2y$10$y7r9leqBmRKnmD3gFqYgQu/3s1TfBlYZsoXursdPdzKb/pI7dKt1K', 0, NULL, '2018-09-23 04:39:31', '2018-09-23 04:39:31'),
(8, NULL, 'Alejandra', NULL, NULL, '8', 0, '$2y$10$kw8v1LiHsFJHZM7lFFmCUuOiMGMfueQaSllxV3oGjikAFMUBuzOXy', 0, NULL, '2018-09-23 04:40:48', '2018-09-23 04:40:48'),
(9, 'M. en D.', 'Juan Gabriel', 'Velázquez Gómez', NULL, '9', 0, '$2y$10$RGdkfr0ajYxF5HXZsTgAJOVAzqZObt4fFRmtugE43Na9S8qIpwqaG', 0, NULL, '2018-09-23 04:43:49', '2018-09-23 04:43:49'),
(10, 'MTRO.', 'David', NULL, NULL, '10', 0, '$2y$10$24j7mk/oApGOaE3qN0UzwOwUyzeUPlEVXHlrGGVsg8gnHinZqlzbS', 0, NULL, '2018-09-23 04:55:02', '2018-09-23 04:55:02'),
(11, NULL, 'Belem', NULL, NULL, '11', 0, '$2y$10$n6pv8AaMAPggga8u/xzsuOpNsxUcnr7cLJy0dPX93zOQ9uSs8pN8G', 0, NULL, '2018-09-23 04:55:49', '2018-09-23 04:55:49'),
(12, NULL, 'Paola', NULL, NULL, '12', 0, '$2y$10$626K1O5SmqMCtGlaY/1cjOLQNjs1UuAIO.9/J3iZOoMqFpgO2un..', 0, NULL, '2018-09-23 04:56:08', '2018-09-23 04:56:08');

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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `encuesta_pregunta`
--
ALTER TABLE `encuesta_pregunta`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT de la tabla `indicadores`
--
ALTER TABLE `indicadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pregunta_programa`
--
ALTER TABLE `pregunta_programa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `procesos`
--
ALTER TABLE `procesos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `subindicadores`
--
ALTER TABLE `subindicadores`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
