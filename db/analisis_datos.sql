-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-09-2018 a las 03:39:35
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
  `ruta` longtext COLLATE utf8mb4_unicode_ci,
  `url` longtext COLLATE utf8mb4_unicode_ci,
  `ip` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agente` text COLLATE utf8mb4_unicode_ci,
  `metodo` varchar(120) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lugar` longtext COLLATE utf8mb4_unicode_ci,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actividades`
--

INSERT INTO `actividades` (`id`, `ruta`, `url`, `ip`, `agente`, `metodo`, `lugar`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(32, 'analisis.index', 'http://localhost:8000/analisis', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:18:18', '2018-09-23 20:18:18', NULL),
(33, 'settings.user', 'http://localhost:8000/configuracion/user', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:20:07', '2018-09-23 20:20:07', NULL),
(34, 'settings.user.update', 'http://localhost:8000/configuracion/user', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:20:14', '2018-09-23 20:20:14', NULL),
(35, 'settings.user', 'http://localhost:8000/configuracion/user', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:20:15', '2018-09-23 20:20:15', NULL),
(36, 'programas.index', 'http://localhost:8000/programas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:02', '2018-09-23 20:25:02', NULL),
(37, 'programas.predetermined', 'http://localhost:8000/programas/2/predetermined', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:05', '2018-09-23 20:25:05', NULL),
(38, 'programas.index', 'http://localhost:8000/programas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:05', '2018-09-23 20:25:05', NULL),
(39, 'procesos.index', 'http://localhost:8000/procesos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:08', '2018-09-23 20:25:08', NULL),
(40, 'analisis.index', 'http://localhost:8000/analisis', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:11', '2018-09-23 20:25:11', NULL),
(41, 'periodos.index', 'http://localhost:8000/periodos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:15', '2018-09-23 20:25:15', NULL),
(42, 'analisis.index', 'http://localhost:8000/analisis', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:19', '2018-09-23 20:25:19', NULL),
(43, 'analisis.select', 'http://localhost:8000/analisis/select', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:22', '2018-09-23 20:25:22', NULL),
(44, 'analisis.create', 'http://localhost:8000/analisis/crear?periodo_id=6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:25:25', '2018-09-23 20:25:25', NULL),
(45, 'home', 'http://localhost:8000/home', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 4, '2018-09-23 20:35:54', '2018-09-23 20:35:54', NULL),
(46, 'home', 'http://localhost:8000/home', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:35:58', '2018-09-23 20:35:58', NULL),
(47, 'analisis.index', 'http://localhost:8000/analisis', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 4, '2018-09-23 20:36:11', '2018-09-23 20:36:11', NULL),
(48, 'analisis.show', 'http://localhost:8000/analisis/4', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 4, '2018-09-23 20:36:16', '2018-09-23 20:36:16', NULL),
(49, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-23 20:36:43', '2018-09-23 20:36:43', NULL),
(50, 'home', 'http://192.168.0.2/home', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 20:59:10', '2018-09-23 20:59:10', NULL),
(51, 'home', 'http://192.168.0.2/home', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 20:59:15', '2018-09-23 20:59:15', NULL),
(52, 'estadisticas.index', 'http://192.168.0.2/estadisticas', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 20:59:29', '2018-09-23 20:59:29', NULL),
(53, 'preguntas.index', 'http://192.168.0.2/preguntas', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:01:15', '2018-09-23 21:01:15', NULL),
(54, 'preguntas.create', 'http://192.168.0.2/preguntas/crear', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:02:30', '2018-09-23 21:02:30', NULL),
(55, 'preguntas.store', 'http://192.168.0.2/preguntas', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'POST', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:02:35', '2018-09-23 21:02:35', NULL),
(56, 'preguntas.create', 'http://192.168.0.2/preguntas/crear', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:02:35', '2018-09-23 21:02:35', NULL),
(57, 'home', 'http://192.168.0.2/home', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:02:57', '2018-09-23 21:02:57', NULL),
(58, 'settings.user', 'http://192.168.0.2/configuracion/user', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:03:03', '2018-09-23 21:03:03', NULL),
(59, 'encuestas.index', 'http://192.168.0.2/encuestas', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:03:15', '2018-09-23 21:03:15', NULL),
(60, 'encuestas.show', 'http://192.168.0.2/encuestas/1', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:03:26', '2018-09-23 21:03:26', NULL),
(61, 'users.show', 'http://192.168.0.2/users/2', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:03:32', '2018-09-23 21:03:32', NULL),
(62, 'users.edit', 'http://192.168.0.2/users/2/editar', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:03:36', '2018-09-23 21:03:36', NULL),
(63, 'users.index', 'http://192.168.0.2/users', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:03:52', '2018-09-23 21:03:52', NULL),
(64, 'users.index', 'http://192.168.0.2/users', '192.168.0.6', 'Mozilla/5.0 (Linux; Android 7.0; Moto G (4) Build/NPJS25.93-14-4) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Mobile Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:03:57', '2018-09-23 21:03:57', NULL),
(65, 'home', 'http://192.168.0.2/home', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 2, '2018-09-23 21:29:04', '2018-09-23 21:29:04', NULL),
(66, 'programas.index', 'http://192.168.0.2/programas', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 2, '2018-09-23 21:29:15', '2018-09-23 21:29:15', NULL),
(67, 'analisis.index', 'http://192.168.0.2/analisis', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 2, '2018-09-23 21:33:49', '2018-09-23 21:33:49', NULL),
(68, 'analisis.show', 'http://192.168.0.2/analisis/1', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 2, '2018-09-23 21:34:00', '2018-09-23 21:34:00', NULL),
(69, 'settings.user', 'http://192.168.0.2/configuracion/user', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 2, '2018-09-23 21:36:27', '2018-09-23 21:36:27', NULL),
(70, 'analisis.index', 'http://192.168.0.2/analisis', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 2, '2018-09-23 21:36:37', '2018-09-23 21:36:37', NULL),
(71, 'home', 'http://192.168.0.2/home', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 2, '2018-09-23 21:38:55', '2018-09-23 21:38:55', NULL),
(72, 'home', 'http://192.168.0.2/home', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:39:59', '2018-09-23 21:39:59', NULL),
(73, 'settings.user', 'http://192.168.0.2/configuracion/user', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:40:23', '2018-09-23 21:40:23', NULL),
(74, 'programas.index', 'http://192.168.0.2/programas', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:41:52', '2018-09-23 21:41:52', NULL),
(75, 'periodos.index', 'http://192.168.0.2/periodos', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:41:55', '2018-09-23 21:41:55', NULL),
(76, 'periodos.create', 'http://192.168.0.2/periodos/crear', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:41:58', '2018-09-23 21:41:58', NULL),
(77, 'periodos.create', 'http://192.168.0.2/periodos/crear', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:43:36', '2018-09-23 21:43:36', NULL),
(78, 'periodos.store', 'http://192.168.0.2/periodos', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'POST', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:43:47', '2018-09-23 21:43:47', NULL),
(79, 'periodos.create', 'http://192.168.0.2/periodos/crear', '192.168.0.9', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/69.0.3497.100 Safari/537.36', 'GET', 'es-ES,es;q=0.9,en;q=0.8,la;q=0.7', 1, '2018-09-23 21:43:47', '2018-09-23 21:43:47', NULL),
(80, 'home', 'http://localhost:8000/home', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:11:29', '2018-09-24 00:11:29', NULL),
(81, 'programas.index', 'http://localhost:8000/programas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:12:49', '2018-09-24 00:12:49', NULL),
(82, 'periodos.index', 'http://localhost:8000/periodos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:12:53', '2018-09-24 00:12:53', NULL),
(83, 'periodos.create', 'http://localhost:8000/periodos/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:04', '2018-09-24 00:13:04', NULL),
(84, 'periodos.store', 'http://localhost:8000/periodos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:07', '2018-09-24 00:13:07', NULL),
(85, 'periodos.create', 'http://localhost:8000/periodos/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:08', '2018-09-24 00:13:08', NULL),
(86, 'preguntas.index', 'http://localhost:8000/preguntas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:27', '2018-09-24 00:13:27', NULL),
(87, 'preguntas.create', 'http://localhost:8000/preguntas/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:30', '2018-09-24 00:13:30', NULL),
(88, 'preguntas.store', 'http://localhost:8000/preguntas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:33', '2018-09-24 00:13:33', NULL),
(89, 'preguntas.create', 'http://localhost:8000/preguntas/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:34', '2018-09-24 00:13:34', NULL),
(90, 'encuestas.index', 'http://localhost:8000/encuestas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:55', '2018-09-24 00:13:55', NULL),
(91, 'encuestas.select.user', 'http://localhost:8000/encuestas/select/user', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:13:59', '2018-09-24 00:13:59', NULL),
(92, 'encuestas.select.periodo', 'http://localhost:8000/encuestas/select/periodo?user_id=6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:14:07', '2018-09-24 00:14:07', NULL),
(93, 'encuestas.create', 'http://localhost:8000/encuestas/crear?periodo_id=1&user_id=6', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:14:11', '2018-09-24 00:14:11', NULL),
(94, 'encuestas.index', 'http://localhost:8000/encuestas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:14:17', '2018-09-24 00:14:17', NULL),
(95, 'encuestas.select.user', 'http://localhost:8000/encuestas/select/user', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:14:20', '2018-09-24 00:14:20', NULL),
(96, 'encuestas.select.periodo', 'http://localhost:8000/encuestas/select/periodo?user_id=2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:14:27', '2018-09-24 00:14:27', NULL),
(97, 'encuestas.create', 'http://localhost:8000/encuestas/crear?periodo_id=4&user_id=2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:14:32', '2018-09-24 00:14:32', NULL),
(98, 'analisis.index', 'http://localhost:8000/analisis', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:15:10', '2018-09-24 00:15:10', NULL),
(99, 'analisis.select', 'http://localhost:8000/analisis/select', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:15:14', '2018-09-24 00:15:14', NULL),
(100, 'procesos.index', 'http://localhost:8000/procesos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:15:32', '2018-09-24 00:15:32', NULL),
(101, 'procesos.create', 'http://localhost:8000/procesos/crear?programa_id=2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:15:36', '2018-09-24 00:15:36', NULL),
(102, 'procesos.store', 'http://localhost:8000/procesos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:15:39', '2018-09-24 00:15:39', NULL),
(103, 'procesos.create', 'http://localhost:8000/procesos/crear?programa_id=2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:15:39', '2018-09-24 00:15:39', NULL),
(104, 'procesos.store', 'http://localhost:8000/procesos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:17:27', '2018-09-24 00:17:27', NULL),
(105, 'procesos.create', 'http://localhost:8000/procesos/crear?programa_id=2', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:17:27', '2018-09-24 00:17:27', NULL),
(106, 'procesos.index', 'http://localhost:8000/procesos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:17:33', '2018-09-24 00:17:33', NULL),
(107, 'subindicadores.create', 'http://localhost:8000/subindicadores/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:17:39', '2018-09-24 00:17:39', NULL),
(108, 'subindicadores.store', 'http://localhost:8000/subindicadores', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:17:43', '2018-09-24 00:17:43', NULL),
(109, 'subindicadores.create', 'http://localhost:8000/subindicadores/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:17:43', '2018-09-24 00:17:43', NULL),
(110, 'estadisticas.index', 'http://localhost:8000/estadisticas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:17:52', '2018-09-24 00:17:52', NULL),
(111, 'estadisticas.graph', 'http://localhost:8000/estadisticas/grafica?periodo=4&subindicador=1', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:18:06', '2018-09-24 00:18:06', NULL),
(112, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:18:30', '2018-09-24 00:18:30', NULL),
(113, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:18:55', '2018-09-24 00:18:55', NULL),
(114, 'users.store', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:18:59', '2018-09-24 00:18:59', NULL),
(115, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:19:00', '2018-09-24 00:19:00', NULL),
(116, 'users.store', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:19:11', '2018-09-24 00:19:11', NULL),
(117, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:19:12', '2018-09-24 00:19:12', NULL),
(118, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:20:42', '2018-09-24 00:20:42', NULL),
(119, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:21:15', '2018-09-24 00:21:15', NULL),
(120, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:23:06', '2018-09-24 00:23:06', NULL),
(121, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:29:12', '2018-09-24 00:29:12', NULL),
(122, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:29:47', '2018-09-24 00:29:47', NULL),
(123, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:30:02', '2018-09-24 00:30:02', NULL),
(124, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:30:35', '2018-09-24 00:30:35', NULL),
(125, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:30:45', '2018-09-24 00:30:45', NULL),
(126, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:31:41', '2018-09-24 00:31:41', NULL),
(127, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:31:55', '2018-09-24 00:31:55', NULL),
(128, 'users.edit', 'http://localhost:8000/users/2/editar', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:32:02', '2018-09-24 00:32:02', NULL),
(129, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:32:23', '2018-09-24 00:32:23', NULL),
(130, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:32:45', '2018-09-24 00:32:45', NULL),
(131, 'users.store', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:32:48', '2018-09-24 00:32:48', NULL),
(132, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:32:48', '2018-09-24 00:32:48', NULL),
(133, 'users.create', 'http://localhost:8000/users/crear', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:33:06', '2018-09-24 00:33:06', NULL),
(134, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:33:20', '2018-09-24 00:33:20', NULL),
(135, 'estadisticas.index', 'http://localhost:8000/estadisticas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:33:23', '2018-09-24 00:33:23', NULL),
(136, 'procesos.index', 'http://localhost:8000/procesos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:33:27', '2018-09-24 00:33:27', NULL),
(137, 'settings.user', 'http://localhost:8000/configuracion/user', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:33:40', '2018-09-24 00:33:40', NULL),
(138, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:40:15', '2018-09-24 00:40:15', NULL),
(139, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:40:42', '2018-09-24 00:40:42', NULL),
(140, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:41:10', '2018-09-24 00:41:10', NULL),
(141, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:42:46', '2018-09-24 00:42:46', NULL),
(142, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:43:06', '2018-09-24 00:43:06', NULL),
(143, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:43:16', '2018-09-24 00:43:16', NULL),
(144, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:44:54', '2018-09-24 00:44:54', NULL),
(145, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:45:37', '2018-09-24 00:45:37', NULL),
(146, 'estadisticas.index', 'http://localhost:8000/estadisticas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:46:07', '2018-09-24 00:46:07', NULL),
(147, 'estadisticas.index', 'http://localhost:8000/estadisticas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:46:09', '2018-09-24 00:46:09', NULL),
(148, 'estadisticas.index', 'http://localhost:8000/estadisticas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:46:50', '2018-09-24 00:46:50', NULL),
(149, 'procesos.index', 'http://localhost:8000/procesos', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:47:05', '2018-09-24 00:47:05', NULL),
(150, 'analisis.index', 'http://localhost:8000/analisis', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:47:09', '2018-09-24 00:47:09', NULL),
(151, 'analisis.index', 'http://localhost:8000/analisis', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:47:45', '2018-09-24 00:47:45', NULL),
(152, 'encuestas.index', 'http://localhost:8000/encuestas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:47:53', '2018-09-24 00:47:53', NULL),
(153, 'estadisticas.index', 'http://localhost:8000/estadisticas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:49:24', '2018-09-24 00:49:24', NULL),
(154, 'estadisticas.index', 'http://localhost:8000/estadisticas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:49:36', '2018-09-24 00:49:36', NULL),
(155, 'users.index', 'http://localhost:8000/users', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:49:49', '2018-09-24 00:49:49', NULL),
(156, 'estadisticas.index', 'http://localhost:8000/estadisticas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:50:01', '2018-09-24 00:50:01', NULL),
(157, 'encuestas.index', 'http://localhost:8000/encuestas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:50:06', '2018-09-24 00:50:06', NULL),
(158, 'preguntas.index', 'http://localhost:8000/preguntas', '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:50:08', '2018-09-24 00:50:08', NULL),
(159, 'periodos.index', 'http://localhost:8000/periodos', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:55:40', '2018-09-24 00:55:40', NULL),
(160, 'periodos.index', 'http://localhost:8000/periodos', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:57:13', '2018-09-24 00:57:13', NULL),
(161, 'periodos.create', 'http://localhost:8000/periodos/crear', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:57:19', '2018-09-24 00:57:19', NULL),
(162, 'periodos.index', 'http://localhost:8000/periodos', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:57:23', '2018-09-24 00:57:23', NULL),
(163, 'preguntas.index', 'http://localhost:8000/preguntas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:57:26', '2018-09-24 00:57:26', NULL),
(164, 'preguntas.posicion.update', 'http://localhost:8000/preguntas/posicion/update', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'POST', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:58:31', '2018-09-24 00:58:31', NULL),
(165, 'preguntas.index', 'http://localhost:8000/preguntas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:58:33', '2018-09-24 00:58:33', NULL),
(166, 'preguntas.show', 'http://localhost:8000/preguntas/2', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:58:37', '2018-09-24 00:58:37', NULL),
(167, 'estadisticas.index', 'http://localhost:8000/estadisticas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:58:43', '2018-09-24 00:58:43', NULL),
(168, 'estadisticas.details', 'http://localhost:8000/estadisticas/detalles?periodo=6&subindicador=2', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:58:58', '2018-09-24 00:58:58', NULL),
(169, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:59:05', '2018-09-24 00:59:05', NULL),
(170, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 00:59:19', '2018-09-24 00:59:19', NULL),
(171, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:03:36', '2018-09-24 01:03:36', NULL),
(172, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:03:56', '2018-09-24 01:03:56', NULL),
(173, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:05:32', '2018-09-24 01:05:32', NULL),
(174, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:05:46', '2018-09-24 01:05:46', NULL),
(175, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:05:58', '2018-09-24 01:05:58', NULL),
(176, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:07:20', '2018-09-24 01:07:20', NULL),
(177, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:07:42', '2018-09-24 01:07:42', NULL),
(178, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:08:12', '2018-09-24 01:08:12', NULL),
(179, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:09:04', '2018-09-24 01:09:04', NULL),
(180, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:09:21', '2018-09-24 01:09:21', NULL),
(181, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:09:43', '2018-09-24 01:09:43', NULL),
(182, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:10:54', '2018-09-24 01:10:54', NULL),
(183, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:11:04', '2018-09-24 01:11:04', NULL),
(184, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:11:43', '2018-09-24 01:11:43', NULL),
(185, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:11:56', '2018-09-24 01:11:56', NULL),
(186, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:12:17', '2018-09-24 01:12:17', NULL),
(187, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:13:35', '2018-09-24 01:13:35', NULL),
(188, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:13:49', '2018-09-24 01:13:49', NULL),
(189, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:14:17', '2018-09-24 01:14:17', NULL),
(190, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 2, '2018-09-24 01:14:27', '2018-09-24 01:14:27', NULL),
(191, 'settings.user', 'http://localhost:8000/configuracion/user', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 2, '2018-09-24 01:14:31', '2018-09-24 01:14:31', NULL),
(192, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:14:40', '2018-09-24 01:14:40', NULL),
(193, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:14:49', '2018-09-24 01:14:49', NULL),
(194, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:14:59', '2018-09-24 01:14:59', NULL),
(195, 'users.actividades', 'http://localhost:8000/users/5/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:15:04', '2018-09-24 01:15:04', NULL),
(196, 'users.actividades', 'http://localhost:8000/users/5/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:15:17', '2018-09-24 01:15:17', NULL),
(197, 'users.actividades', 'http://localhost:8000/users/5/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:16:06', '2018-09-24 01:16:06', NULL),
(198, 'users.actividades', 'http://localhost:8000/users/5/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:16:11', '2018-09-24 01:16:11', NULL),
(199, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:16:17', '2018-09-24 01:16:17', NULL),
(200, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:16:31', '2018-09-24 01:16:31', NULL),
(201, 'programas.index', 'http://localhost:8000/programas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 2, '2018-09-24 01:17:23', '2018-09-24 01:17:23', NULL),
(202, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:17:30', '2018-09-24 01:17:30', NULL),
(203, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:18:01', '2018-09-24 01:18:01', NULL),
(204, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:18:27', '2018-09-24 01:18:27', NULL),
(205, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:18:34', '2018-09-24 01:18:34', NULL),
(206, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:18:56', '2018-09-24 01:18:56', NULL),
(207, 'users.actividades', 'http://localhost:8000/users/1/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:19:08', '2018-09-24 01:19:08', NULL),
(208, 'users.actividades', 'http://localhost:8000/users/6/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:19:17', '2018-09-24 01:19:17', NULL),
(209, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:19:21', '2018-09-24 01:19:21', NULL),
(210, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:19:43', '2018-09-24 01:19:43', NULL),
(211, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:19:48', '2018-09-24 01:19:48', NULL),
(212, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:20:03', '2018-09-24 01:20:03', NULL),
(213, 'users.actividades', 'http://localhost:8000/users/1/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:20:14', '2018-09-24 01:20:14', NULL),
(214, 'users.actividades', 'http://localhost:8000/users/1/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:20:42', '2018-09-24 01:20:42', NULL),
(215, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:20:54', '2018-09-24 01:20:54', NULL),
(216, 'settings.user', 'http://localhost:8000/configuracion/user', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:21:27', '2018-09-24 01:21:27', NULL),
(217, 'periodos.index', 'http://localhost:8000/periodos', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:21:33', '2018-09-24 01:21:33', NULL),
(218, 'preguntas.index', 'http://localhost:8000/preguntas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:21:35', '2018-09-24 01:21:35', NULL),
(219, 'home', 'http://localhost:8000/home', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:21:42', '2018-09-24 01:21:42', NULL),
(220, 'programas.index', 'http://localhost:8000/programas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:22:50', '2018-09-24 01:22:50', NULL),
(221, 'periodos.index', 'http://localhost:8000/periodos', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:22:53', '2018-09-24 01:22:53', NULL),
(222, 'preguntas.index', 'http://localhost:8000/preguntas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:23:01', '2018-09-24 01:23:01', NULL),
(223, 'encuestas.index', 'http://localhost:8000/encuestas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:23:07', '2018-09-24 01:23:07', NULL),
(224, 'periodos.index', 'http://localhost:8000/periodos', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:25:39', '2018-09-24 01:25:39', NULL),
(225, 'encuestas.index', 'http://localhost:8000/encuestas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:25:53', '2018-09-24 01:25:53', NULL),
(226, 'encuestas.index', 'http://localhost:8000/encuestas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:26:02', '2018-09-24 01:26:02', NULL),
(227, 'encuestas.index', 'http://localhost:8000/encuestas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:26:05', '2018-09-24 01:26:05', NULL),
(228, 'analisis.index', 'http://localhost:8000/analisis', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:26:38', '2018-09-24 01:26:38', NULL),
(229, 'procesos.index', 'http://localhost:8000/procesos', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:26:44', '2018-09-24 01:26:44', NULL);
INSERT INTO `actividades` (`id`, `ruta`, `url`, `ip`, `agente`, `metodo`, `lugar`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(230, 'subindicadores.show', 'http://localhost:8000/subindicadores/12', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:26:50', '2018-09-24 01:26:50', NULL),
(231, 'encuestas.index', 'http://localhost:8000/encuestas', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:26:53', '2018-09-24 01:26:53', NULL),
(232, 'users.index', 'http://localhost:8000/users', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:26:55', '2018-09-24 01:26:55', NULL),
(233, 'users.actividades', 'http://localhost:8000/users/2/actividades', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:26:59', '2018-09-24 01:26:59', NULL),
(234, 'settings.user', 'http://localhost:8000/configuracion/user', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:27:35', '2018-09-24 01:27:35', NULL),
(235, 'home', 'http://localhost:8000/home', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:27:38', '2018-09-24 01:27:38', NULL),
(236, 'analisis.index', 'http://localhost:8000/analisis', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:34:03', '2018-09-24 01:34:03', NULL),
(237, 'analisis.select', 'http://localhost:8000/analisis/select', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:36:49', '2018-09-24 01:36:49', NULL),
(238, 'procesos.index', 'http://localhost:8000/procesos', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:37:31', '2018-09-24 01:37:31', NULL),
(239, 'settings.user', 'http://localhost:8000/configuracion/user', '::1', 'Mozilla/5.0 (Windows NT 6.1; rv:62.0) Gecko/20100101 Firefox/62.0', 'GET', 'es-MX,es;q=0.8,en-US;q=0.5,en;q=0.3', 1, '2018-09-24 01:37:37', '2018-09-24 01:37:37', NULL);

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
(1, 'Selección de personal Docente', NULL, NULL, 1, '2018-09-23 05:02:32', '2018-09-23 05:02:32'),
(2, 'Evaluación Docente', NULL, NULL, 1, '2018-09-23 17:14:13', '2018-09-23 17:14:13'),
(3, 'Expedición de Dictamen oficial de equivalencia de estudios', NULL, NULL, 1, '2018-09-23 17:16:35', '2018-09-23 17:16:35'),
(4, 'Autorización de Planes de Cursos Académicos', NULL, NULL, 1, '2018-09-23 17:17:14', '2018-09-23 17:17:14'),
(5, 'Seguimiento y Evaluación de Cursos Académicos', NULL, NULL, 1, '2018-09-23 17:19:01', '2018-09-23 17:19:01'),
(6, 'Realización y Evaluación de Estancia y/o Estadía', NULL, NULL, 1, '2018-09-23 17:20:15', '2018-09-23 17:20:15'),
(7, 'Autorización de Cargas Horarias Docentes', NULL, NULL, 1, '2018-09-23 17:22:49', '2018-09-23 17:22:49'),
(8, 'Autorización de Cambio de Carrera dentro de la UPVT', NULL, NULL, 1, '2018-09-23 17:24:52', '2018-09-23 17:24:52'),
(9, 'Control del servicio o producto no conforme', NULL, NULL, 2, '2018-09-23 17:27:49', '2018-09-23 17:27:49'),
(10, 'Asesoría Académica', NULL, NULL, 3, '2018-09-23 17:29:46', '2018-09-23 17:29:46'),
(12, 'Tutoría Académica', NULL, NULL, 3, '2018-09-23 17:34:56', '2018-09-23 17:34:56');

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
(10, '2018_08_26_231053_create_programas_table', 1),
(11, '2018_08_26_231507_create_procesos_table', 1),
(12, '2018_08_26_233031_create_indicadores_table', 1),
(13, '2018_08_26_233927_create_subindicadores_table', 1),
(14, '2018_08_26_234134_create_periodos_table', 1),
(15, '2018_08_26_234730_create_preguntas_table', 1),
(16, '2018_08_27_000751_create_encuestas_table', 1),
(18, '2018_08_27_001322_create_programa_user_table', 1),
(19, '2018_08_27_001352_create_encuesta_pregunta_table', 1),
(20, '2018_08_29_194724_create_pregunta_programa_table', 1),
(21, '2018_09_02_201423_create_programa_subindicador_table', 1),
(24, '2018_08_26_221241_create_actividades_table', 2);

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
(6, 'septiembre-diciembre', 2016, 0, 0, NULL, 2, '2018-09-23 18:10:55', '2018-09-23 18:10:55');

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
(1, 'Número de alumnos que fueron evaluados en el de Estancias/Estadía', 'Periodo establecido. (40 días como máximo)', 0, 2, 2, 2, NULL, '2018-09-24 00:58:31'),
(2, 'Total de alumnos con carta de terminación de Estancia/Estadía', '', 0, 1, 2, 2, NULL, '2018-09-24 00:58:31'),
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
(1, 'Enseñanza Aprendizaje', NULL, NULL, 2, '2018-09-23 05:02:13', '2018-09-23 05:02:13'),
(2, 'Procedimientos de Control', NULL, NULL, 2, '2018-09-23 17:26:55', '2018-09-23 17:26:55'),
(3, 'Procedimientos de Fortalecimiento Académico', NULL, NULL, 2, '2018-09-23 17:29:29', '2018-09-23 17:29:29');

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
(4, 2, 3, 1, NULL, NULL),
(5, 2, 4, 1, NULL, NULL),
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
(1, 'Porcentaje de aspirantes contratados', '[{\"type\":\"pregunta\",\"value\":\"17\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"18\"}]', 50, '(No. De docentes contratados/No. De aspirantes evaluados)', NULL, 1, '2018-09-23 05:03:27', '2018-09-23 05:05:39'),
(2, 'Porcentaje con evaluación satisfactoria de Docentes', '[{\"type\":\"pregunta\",\"value\":\"15\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"16\"}]', 85, 'Número de Docentes con más del 50% del total de \r\nsus cursos con Evaluación Docente satisfactoria / Total de Docentes evaluados', NULL, 2, '2018-09-23 17:15:26', '2018-09-23 17:15:26'),
(3, 'Porcentaje de planeación de los cursos', '[{\"type\":\"pregunta\",\"value\":\"9\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"10\"}]', 90, '(Planes de Cursos Académicos autorizados \r\nen los primeros 15 días del cuatrimestre / \r\nTotal de asignaturas de la oferta educativa del cuatrimestre)* 100', NULL, 4, '2018-09-23 17:18:05', '2018-09-23 17:18:05'),
(4, 'Eficacia de la docencia', '[{\"type\":\"pregunta\",\"value\":\"19\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"10\"}]', 100, '(Número de asignaturas que atendieron el 100% del programa de la asignatura / \r\nTotal de asignaturas ofertadas en el cuatrimestre)  * 100', NULL, 5, '2018-09-23 17:19:42', '2018-09-23 17:19:42'),
(5, 'Eficiencia de la validación de Estancias', '[{\"type\":\"pregunta\",\"value\":\"1\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"2\"}]', 50, 'Número de alumnos que fueron evaluados en el periodo establecido. (40 días como máximo ) /\r\nTotal de alumnos con carta de terminación de Estancia/Estadía', NULL, 6, '2018-09-23 17:22:11', '2018-09-23 17:22:11'),
(6, '% de Cargas  Horarias Docente Autorizadas', '[{\"type\":\"pregunta\",\"value\":\"11\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"12\"}]', 85, 'Número de Cargas Horarias Docentes autorizadas / Total de Docentes para el cuatrimestre actual', NULL, 7, '2018-09-23 17:24:00', '2018-09-23 17:24:00'),
(7, 'Porcentaje de Autorizaciones de Cambio de Carrera', '[{\"type\":\"pregunta\",\"value\":\"13\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"14\"}]', 100, 'Número de alumnos con Dictamen de \r\nCambio de Carrera en los 10 días hábiles \r\n/ Total de alumnos que solicitaron cambio de Carrera.', NULL, 8, '2018-09-23 17:25:58', '2018-09-23 17:25:58'),
(8, '%  de cursos no conformes', '[]', 20, 'No. De cursos no conformes / Total de cursos en el cuatrimestre', NULL, 9, '2018-09-23 17:28:52', '2018-09-23 17:28:52'),
(9, '% de participación en la Asesoría con control de tutoría', '[{\"type\":\"pregunta\",\"value\":\"22\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"24\"}]', 10, 'No. total de alumnos asesorados con control de Tutoría /\r\nNo. total de alumnos asesorados', NULL, 10, '2018-09-23 17:30:52', '2018-09-23 17:32:43'),
(10, '% de participación en la Asesoría sin control de tutoría', '[{\"type\":\"pregunta\",\"value\":\"23\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"24\"}]', 10, 'No. total de alumnos asesorados sin Control de Tutoría / No. total de alumnos asesorados', NULL, 10, '2018-09-23 17:32:05', '2018-09-23 17:32:05'),
(11, '% de participación en la Asesoría General', '[{\"type\":\"pregunta\",\"value\":\"24\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"20\"}]', 10, 'Total de alumnos asesorados / Total de alumnos inscritos en el Programa Educativo', NULL, 10, '2018-09-23 17:33:46', '2018-09-23 17:33:46'),
(12, '% de efectividad de la tutoría', '[{\"type\":\"pregunta\",\"value\":\"5\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"6\"}]', 80, 'Núm. total de alumnos que cumplieron con el 100 % de asesorías y que acreditaron todas sus asignaturas. / Núm. total de alumnos tutorados', NULL, 12, '2018-09-23 17:35:39', '2018-09-23 17:35:39'),
(13, '% de eficiencia de la tutoría Núm', '[{\"type\":\"pregunta\",\"value\":\"5\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"7\"}]', 80, 'Núm. total de alumnos que cumplieron con el 100 % de asesorías y que acreditaron todas sus asignaturas. / Núm. total de alumnos que cumplieron con el 100% de asesorías', NULL, 12, '2018-09-23 17:36:43', '2018-09-23 17:36:43'),
(14, '% de aprobación', '[{\"type\":\"pregunta\",\"value\":\"8\"},{\"type\":\"operacion\",\"value\":\"\\/\"},{\"type\":\"pregunta\",\"value\":\"6\"}]', 80, 'Núm. total de alumnos que acreditaron todas sus asignaturas / Número total de alumnos tutorados', NULL, 12, '2018-09-23 17:37:33', '2018-09-23 17:37:51');

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
(1, 'M. en C.E.', 'Leticia Jael', 'Rojas Ortiz', 'jael@upvt.com', '1', 1, '$2y$10$TaIkUCc66/6hDw6tVwfB5eSJEHziA/yxPwrKnQ7jX7UvGSpbsxdM.', 0, 'xjnHctX79e4GFRoeK3u2S2I9yQUkS9BC1G7uEhfB8LCLdEbD9rCupkpnjDHj', NULL, '2018-09-23 17:46:51'),
(2, 'M. en CC.', 'Adrían', 'González Gómez', 'adriangonzalezblue@gmail.com', '2', 0, '$2y$10$25I6lqMbYK5lLy33NfjNUuwLRP4vTx03Qr2fNwk7fvR2TcGrOHIay', 0, '8nevXaMH4zRaiTH8wQ6tBXiLRMiCKlw3VtUKaJ6QXi0aDXfsMYZNHWyXKO3a', '2018-09-23 04:26:00', '2018-09-23 04:31:40'),
(3, 'M. en C.', 'Juana Guadalupe', 'Bringas González', NULL, '3', 0, '$2y$10$OBQU3uhAL3mAwF4578nUy.HG0u6MXYDN9wxauEQcTNb6qe4EMs5/a', 0, 'QPtwKtvva4bXQ0BBAdgpfj3PjbUEtGDgtChlDc5jmltvFLofyFBKqkStwYtW', '2018-09-23 04:35:50', '2018-09-23 04:35:50'),
(4, 'M. en TI.', 'Martha Maria', 'Montes de Oca Herrera', NULL, '4', 0, '$2y$10$tMQyL.asNEvSlo18o4mUNe7.7i6.im2hG1xLpdceWvPrI61shGi/6', 0, NULL, '2018-09-23 04:36:51', '2018-09-23 04:36:51'),
(5, 'M. en A.', 'José Luis', 'Ledezma Sánchez', NULL, '5', 0, '$2y$10$z25CMgyQiTh5nb2YuhGGVOHJTF211nXc6SjLvlj6epGT6OzJZ5BFy', 0, NULL, '2018-09-23 04:37:32', '2018-09-23 04:37:32'),
(6, 'MTRO.', 'Pedro', 'Valencia Pérez', NULL, '6', 0, '$2y$10$1f6by/8G1t.vIs8Fr7hcleORAExz2BY8oAf2sbkSOzX.8PeK7Hpyq', 0, NULL, '2018-09-23 04:38:29', '2018-09-23 04:38:29'),
(7, NULL, 'Leticia Jael', 'Rojas Ortiz', NULL, '7', 0, '$2y$10$y7r9leqBmRKnmD3gFqYgQu/3s1TfBlYZsoXursdPdzKb/pI7dKt1K', 0, NULL, '2018-09-23 04:39:31', '2018-09-23 04:39:31'),
(8, NULL, 'Alejandra', NULL, NULL, '8', 0, '$2y$10$kw8v1LiHsFJHZM7lFFmCUuOiMGMfueQaSllxV3oGjikAFMUBuzOXy', 0, NULL, '2018-09-23 04:40:48', '2018-09-23 04:40:48'),
(9, 'M. en D.', 'Juan Gabriel', 'Velázquez Gómez', NULL, '9', 0, '$2y$10$RGdkfr0ajYxF5HXZsTgAJOVAzqZObt4fFRmtugE43Na9S8qIpwqaG', 0, NULL, '2018-09-23 04:43:49', '2018-09-23 04:43:49'),
(10, 'Mtro.', 'David Mauricio', 'Flores Castellanos', NULL, '10', 0, '$2y$10$24j7mk/oApGOaE3qN0UzwOwUyzeUPlEVXHlrGGVsg8gnHinZqlzbS', 0, NULL, '2018-09-23 04:55:02', '2018-09-23 17:42:27'),
(11, NULL, 'Belem', NULL, NULL, '11', 0, '$2y$10$n6pv8AaMAPggga8u/xzsuOpNsxUcnr7cLJy0dPX93zOQ9uSs8pN8G', 0, NULL, '2018-09-23 04:55:49', '2018-09-23 04:55:49'),
(12, NULL, 'Paola', 'Salazar', NULL, '12', 0, '$2y$10$626K1O5SmqMCtGlaY/1cjOLQNjs1UuAIO.9/J3iZOoMqFpgO2un..', 0, NULL, '2018-09-23 04:56:08', '2018-09-23 17:43:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actividades`
--
ALTER TABLE `actividades`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `periodos`
--
ALTER TABLE `periodos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Restricciones para tablas volcadas
--

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
