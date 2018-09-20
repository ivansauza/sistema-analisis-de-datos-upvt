-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-09-2018 a las 07:59:32
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
-- Volcado de datos para la tabla `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `slug`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Navegar periodos', 'periodos.index', 'Lista y navegar todos los periodos del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(2, 'Ver detalle del periodo', 'periodos.show', 'Ver en detalle cada periodo del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(3, 'Creación de periodos', 'periodos.create', 'Crear periodos en el sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(4, 'Edición de periodos', 'periodos.edit', 'Editar cualquier dato de un periodo del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(5, 'Eliminar periodos', 'periodos.destroy', 'Eliminar cualquier periodo del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(6, 'Navegar preguntas', 'preguntas.index', 'Lista y navegar todas las preguntas del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(7, 'Ver detalle de la pregunta', 'preguntas.show', 'Ver en detalle cada pregunta del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(8, 'Creación de preguntas', 'preguntas.create', 'Crear preguntas en el sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(9, 'Edición de preguntas', 'preguntas.edit', 'Editar cualquier dato de un pregunta del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(10, 'Eliminar preguntas', 'preguntas.destroy', 'Eliminar cualquier pregunta del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(11, 'Navegar encuestas', 'encuestas.index', 'Lista y navegar todas las encuestas del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(12, 'Ver detalle de la encuesta', 'encuestas.show', 'Ver en detalle cada encuesta del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(13, 'Creación de encuestas', 'encuestas.create', 'Crear encuestas en el sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(14, 'Edición de encuestas', 'encuestas.edit', 'Editar cualquier dato de una encuesta del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(15, 'Eliminar encuestas', 'encuestas.destroy', 'Eliminar cualquier encuesta del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(16, 'Seleccionar usuario', 'encuestas.select.user', 'Seleccionar un usuario para crear una encuesta.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(17, 'Seleccionar periodo', 'encuestas.select.periodo', 'Seleccionar un periodo para crear una encuesta.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(18, 'Navegar procesos', 'procesos.index', 'Lista y navegar todos los procesos del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(19, 'Ver detalle del proceso', 'procesos.show', 'Ver en detalle cada proceso del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(20, 'Creación de procesos', 'procesos.create', 'Crear procesos en el sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(21, 'Edición de procesos', 'procesos.edit', 'Editar cualquier dato de un proceso del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(22, 'Eliminar procesos', 'procesos.destroy', 'Eliminar cualquier proceso del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(23, 'Navegar estadísticas', 'estadisticas.index', 'Lista y navegar todos los estadísticas del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(24, 'Ver detalle de la estadística', 'estadisticas.details', 'Ver en detalle cada estadística del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(25, 'Navegar users', 'users.index', 'Lista y navegar todos los users del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(26, 'Ver detalle del user', 'users.show', 'Ver en detalle cada user del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(27, 'Creación de users', 'users.create', 'Crear users en el sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(28, 'Edición de users', 'users.edit', 'Editar cualquier dato de un user del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29'),
(29, 'Eliminar users', 'users.destroy', 'Eliminar cualquier user del sistema.', '2018-09-20 10:58:29', '2018-09-20 10:58:29');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
