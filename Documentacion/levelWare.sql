-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 21-06-2022 a las 06:45:18
-- Versión del servidor: 5.7.34
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `levelWare`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(62, '2014_10_12_000000_create_users_table', 1),
(63, '2014_10_12_100000_create_password_resets_table', 1),
(64, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(65, '2019_08_19_000000_create_failed_jobs_table', 1),
(66, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(67, '2022_04_28_075650_create_sessions_table', 1),
(68, '2022_04_28_084843_create_producto_table', 1),
(69, '2022_05_07_110345_create_rol_table', 1),
(70, '2022_05_07_111314_create_producto_rep_table', 1),
(71, '2022_05_11_154452_create_repataciones_table', 1),
(72, '2022_05_11_192257_create_cesta_table', 1),
(73, '2022_05_11_192327_create_productos_cesta_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `precioTotal` double(8,2) DEFAULT NULL,
  `fechaPedido` date NOT NULL,
  `estado` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id`, `idUser`, `precioTotal`, `fechaPedido`, `estado`, `created_at`, `updated_at`, `deleted_at`) VALUES
(22, 1, 35.00, '2022-06-13', 0, '2022-06-13 18:38:33', '2022-06-18 15:10:54', NULL),
(23, 1, 42.50, '2022-06-13', 1, '2022-06-13 19:47:18', '2022-06-13 19:47:18', NULL),
(24, 1, 0.00, '2022-06-15', 3, '2022-06-15 13:33:01', '2022-06-18 15:57:59', NULL),
(25, 1, 0.00, '2022-06-15', 0, '2022-06-15 13:33:24', '2022-06-15 13:33:24', NULL),
(26, 1, 200.00, '2022-06-15', 2, '2022-06-15 13:34:46', '2022-06-15 13:34:46', NULL),
(27, 1, 123.98, '2022-06-15', 0, '2022-06-15 20:21:48', '2022-06-18 15:51:44', NULL),
(28, 1, 30.00, '2022-06-15', 0, '2022-06-15 20:23:02', '2022-06-15 20:23:02', NULL),
(29, 1, 60.00, '2022-06-15', 3, '2022-06-15 20:25:44', '2022-06-15 20:25:44', NULL),
(30, 9, 509.99, '2022-06-16', 0, '2022-06-16 08:11:02', '2022-06-16 08:11:02', NULL),
(31, 1, 580.00, '2022-06-18', 0, '2022-06-18 16:15:35', '2022-06-18 16:15:35', NULL),
(32, 1, 59.99, '2022-06-18', 0, '2022-06-18 19:20:30', '2022-06-18 19:20:30', NULL),
(33, 1, 500.00, '2022-06-19', 0, '2022-06-19 20:10:20', '2022-06-19 20:10:20', NULL),
(34, 1, 517.00, '2022-06-19', 0, '2022-06-19 20:44:55', '2022-06-19 20:44:55', NULL),
(35, 1, 517.00, '2022-06-19', 0, '2022-06-19 20:50:29', '2022-06-19 20:50:29', NULL),
(36, 1, 30.00, '2022-06-21', 0, '2022-06-21 03:58:18', '2022-06-21 03:58:18', NULL),
(37, 1, 55.00, '2022-06-21', 0, '2022-06-21 04:35:53', '2022-06-21 04:35:53', NULL),
(38, 1, 110.00, '2022-06-21', 0, '2022-06-21 04:38:09', '2022-06-21 04:38:09', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almacenamiento` double(8,2) NOT NULL,
  `tipoPro` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `descripcion`, `precio`, `stock`, `imagen`, `almacenamiento`, `tipoPro`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Xbox Series S', 'La Xbox Series S es la consola más pequeña de la generación. Carece de lector de discos, pero puedes sacarle el máximo partido con una suscripción de Xbox Game Pass.', 300.00, 20, 'storage/productsPhotos/1654721258-xboxSeriesS.jpg', 500.00, 1, '2022-06-08 18:47:38', '2022-06-16 08:20:10', NULL),
(2, 'Ghost of Tsushima', 'Juego para Playstation de aventuras en Japón.', 30.00, 22, 'storage/productsPhotos/1655324713-ejemplo.png', 0.00, 2, '2022-06-08 19:18:16', '2022-06-21 03:58:18', NULL),
(5, 'Xbox Series X', 'La consola más potente del mundo. La Xbox con lector de disco, perfecta para jugar a cualquier juego.', 500.00, 17, 'storage/productsPhotos/1654723899-xboxSeriesX.jpg', 1000.00, 1, '2022-06-08 19:29:22', '2022-06-19 20:10:20', NULL),
(6, 'Hollow knight', 'Explora el vasto mundo de hollownest en este trepidante juego. Juego de Nintendo Switch y PC.', 20.00, 40, 'storage/productsPhotos/1654859484-hollowknight.jpg', 0.00, 2, '2022-06-10 09:11:24', '2022-06-15 18:00:27', '2022-06-15 18:00:27'),
(7, 'Mando dualsense ps5', 'Mando de Playstation 5 con nueva vibración háptica y más ergonómico que nunca', 60.00, 41, 'storage/productsPhotos/1655324242-mando.png', 0.00, 3, '2022-06-10 09:15:22', '2022-06-15 20:25:44', NULL),
(8, 'Celeste', 'Solo tienes que subir la montaña. ¿Qué podría salir mal? Juego de PC y Nintendo Switch.', 23.99, 34, 'storage/productsPhotos/1655323202-ejemplo2.png', 0.00, 2, '2022-06-10 09:22:01', '2022-06-15 20:21:48', NULL),
(9, 'Gears 5', 'Juego de Xbox de temática de guerra contra alienígenas, en el cual debemos vencer a todos los aliens para salvar el planeta tierra.', 40.00, 38, 'storage/productsPhotos/1654860398-gears5.jpg', 0.00, 2, '2022-06-10 09:26:38', '2022-06-18 16:15:35', NULL),
(10, 'Cámara HD ps5', 'Disfruta de tu partida transmitiéndola con la cámara HD para PS5', 120.00, 30, 'storage/productsPhotos/1655325942-ejemplo4.png', 0.00, 3, '2022-06-10 09:33:13', '2022-06-15 18:45:42', NULL),
(11, 'Playstation 5', 'La playstation 5 (PS5) es la consola de última generación de Sony. Esta consola es capaz de correr los videojuegos en 4K y 60 FPS.', 500.00, 26, 'storage/productsPhotos/1655140217-ps5_2.jpg', 800.00, 1, '2022-06-13 14:46:49', '2022-06-19 20:50:29', NULL),
(12, 'Funda Nintendo Switch Roja', 'Funda de transporte para la Nintendo Switch. Perfecta para llevar tu consola a todas partes. Esta funda es de color rojo.', 17.00, 3, 'storage/productsPhotos/1655141049-fundaSwitch.jpg', 0.00, 3, '2022-06-13 15:24:09', '2022-06-19 20:50:29', NULL),
(13, 'Cities Skylines', 'Juego de PC para crear tu propia ciudad. Transformate en un alcalde como ningún otro.', 15.00, 18, 'storage/productsPhotos/1655152149-cities_skylines.jpg', 0.00, 2, '2022-06-13 15:30:24', '2022-06-13 18:29:09', NULL),
(14, 'Game & Watch Zelda', 'Clásica consola de Nintendo con la que podrás jugar y ver la hora. La Game & Watch viene con una batería recargable. Podrás jugar a los tres primeros The Legend of Zelda:', 35.00, 10, 'storage/productsPhotos/1655152378-game&watch.jpg', 2.00, 1, '2022-06-13 18:32:58', '2022-06-13 18:32:58', NULL),
(15, 'Mando Inalambrico Xbox', 'Mando de Xbox, compatible con todas las consolas de la marca y con el PC.', 55.00, 9, 'storage/productsPhotos/1655153446-mandoXbox.JPG', 0.00, 3, '2022-06-13 18:48:59', '2022-06-21 04:38:09', NULL),
(16, 'No More Heroes', 'El frenético juego de acción frenética, Hack and Slash, donde tendrás que llegar a lo más alto de la liga de villanos de Santa Destroy. Un clásico de Nintendo Wii que vuelve para la Nintendo Switch.', 9.99, 12, 'storage/productsPhotos/1655156453-NMH1.jpg', 0.00, 2, '2022-06-13 19:40:53', '2022-06-18 19:20:30', NULL),
(17, 'Death Stranding', 'Juego de Hideo Kojima para Playstation donde te transformas en un repartidor en un mundo post apocalístico.', 7.50, 5, 'storage/productsPhotos/1655156747-deathStranding.jpg', 0.00, 2, '2022-06-13 19:45:47', '2022-06-13 19:45:47', NULL),
(18, 'Nintendo Switch', 'La Nintendo Switch es la consola híbrida que permite jugar a cualquier juego, ya sea en la televisión o en modo portatil.', 300.00, 10, 'storage/productsPhotos/1655157518-nintendoSwitch.webp', 32.00, 1, '2022-06-13 19:58:38', '2022-06-13 19:58:38', NULL),
(19, 'Mario Strikers Battle League', 'El juego de fútbol más canalla vuelve por todo lo alto. Ahora podeis jugar hasta 8 personas en una misma Nintendo Switch.', 50.00, 4, 'storage/productsPhotos/1655195640-marioStrikers.jpg', 0.00, 2, '2022-06-14 06:34:00', '2022-06-18 19:20:30', NULL),
(20, 'Nintendo DS', 'Consola portatil de Nintendo con dos pantallas. La DS es una portatil con una pantalla normal y otra tactil. Además incluye un lapiz para jugar en la pantalla tactil. Solo disponible en color rojo.', 90.00, 4, 'storage/productsPhotos/1655580781-nintendoDS.jpg', 1.00, 1, '2022-06-18 17:33:01', '2022-06-18 17:33:01', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productoRep`
--

CREATE TABLE `productoRep` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `rutaImgs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productoRep`
--

INSERT INTO `productoRep` (`id`, `descripcion`, `idUser`, `rutaImgs`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Consola con pantalla superior rota', 1, 'storage/repairImgs/1655373878-nintendoDS.jpg', '2022-06-16 08:04:38', '2022-06-16 08:04:38', NULL),
(2, 'Consola con pantalla superior rota', 9, 'storage/repairImgs/1655374554-nintendoDS.jpg', '2022-06-16 08:15:54', '2022-06-16 08:15:54', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productosCesta`
--

CREATE TABLE `productosCesta` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `idPro` bigint(20) UNSIGNED NOT NULL,
  `cantidad` int(11) NOT NULL,
  `idPedido` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productosCesta`
--

INSERT INTO `productosCesta` (`id`, `idPro`, `cantidad`, `idPedido`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 14, 1, 22, '2022-06-13 18:38:33', '2022-06-13 18:38:33', NULL),
(2, 2, 1, 23, '2022-06-13 19:47:18', '2022-06-13 19:47:18', NULL),
(3, 17, 1, 23, '2022-06-13 19:47:18', '2022-06-13 19:47:18', NULL),
(4, 6, 10, 24, '2022-06-15 13:33:01', '2022-06-15 13:33:01', NULL),
(5, 6, 10, 25, '2022-06-15 13:33:24', '2022-06-15 13:33:24', NULL),
(6, 6, 10, 26, '2022-06-15 13:34:46', '2022-06-15 13:34:46', NULL),
(7, 16, 1, 27, '2022-06-15 20:21:48', '2022-06-15 20:21:48', NULL),
(8, 8, 1, 27, '2022-06-15 20:21:48', '2022-06-15 20:21:48', NULL),
(9, 7, 1, 27, '2022-06-15 20:21:48', '2022-06-15 20:21:48', NULL),
(10, 2, 1, 27, '2022-06-15 20:21:48', '2022-06-15 20:21:48', NULL),
(11, 2, 1, 28, '2022-06-15 20:23:02', '2022-06-15 20:23:02', NULL),
(12, 7, 1, 29, '2022-06-15 20:25:44', '2022-06-15 20:25:44', NULL),
(13, 16, 1, 30, '2022-06-16 08:11:02', '2022-06-16 08:11:02', NULL),
(14, 5, 1, 30, '2022-06-16 08:11:02', '2022-06-16 08:11:02', NULL),
(15, 5, 1, 31, '2022-06-18 16:15:35', '2022-06-18 16:15:35', NULL),
(16, 9, 2, 31, '2022-06-18 16:15:35', '2022-06-18 16:15:35', NULL),
(17, 16, 1, 32, '2022-06-18 19:20:30', '2022-06-18 19:20:30', NULL),
(18, 19, 1, 32, '2022-06-18 19:20:30', '2022-06-18 19:20:30', NULL),
(19, 5, 1, 33, '2022-06-19 20:10:20', '2022-06-19 20:10:20', NULL),
(20, 11, 1, 34, '2022-06-19 20:44:55', '2022-06-19 20:44:55', NULL),
(21, 12, 1, 34, '2022-06-19 20:44:55', '2022-06-19 20:44:55', NULL),
(22, 11, 1, 35, '2022-06-19 20:50:29', '2022-06-19 20:50:29', NULL),
(23, 12, 1, 35, '2022-06-19 20:50:29', '2022-06-19 20:50:29', NULL),
(24, 2, 1, 36, '2022-06-21 03:58:18', '2022-06-21 03:58:18', NULL),
(25, 15, 1, 37, '2022-06-21 04:35:53', '2022-06-21 04:35:53', NULL),
(26, 15, 2, 38, '2022-06-21 04:38:09', '2022-06-21 04:38:09', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparaciones`
--

CREATE TABLE `reparaciones` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci,
  `estado` int(11) NOT NULL,
  `fechaEntrada` date NOT NULL,
  `fechaSalida` date DEFAULT NULL,
  `idUser` bigint(20) UNSIGNED NOT NULL,
  `codProducto` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reparaciones`
--

INSERT INTO `reparaciones` (`id`, `descripcion`, `estado`, `fechaEntrada`, `fechaSalida`, `idUser`, `codProducto`, `created_at`, `updated_at`) VALUES
(1, 'Consola con pantalla superior rota', 0, '2022-06-16', NULL, 1, 1, '2022-06-16 08:04:38', '2022-06-16 08:04:38'),
(2, 'Consola con pantalla superior rota', 0, '2022-06-16', NULL, 9, 2, '2022-06-16 08:15:54', '2022-06-16 08:15:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('6dB2TSOuZY5VUJyAL1bjbHHXdC2jWwfWTAlTc16P', 1, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:101.0) Gecko/20100101 Firefox/101.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVVFHUFVQUHpSMDVkTTBKWkdEdWU5UzNFckRlNHlmMVo0VnZ6YTlKUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjA6Imh0dHA6Ly9sb2NhbGhvc3QvUHJveWVjdG8tRmluYWwtREFXL2xldmVsV2FyZS9wdWJsaWMvY29uc29sYSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkb3k4cVZZb1FOMlF4b282eml6Ui5CdWJHZUp1a1NzNDc3WS91S00yeFBPWHhCdS8zWllSVU8iO30=', 1655793866),
('aCsG3kDGaSlcsIFZmduzdH7HDN66xLXDDefLVBPS', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:101.0) Gecko/20100101 Firefox/101.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSFR5emlNaXNJOUFPMDNzSWlWenVNbVVMdlViek5udnZjMk5TT0s2MiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czo2MzoiaHR0cDovL2xvY2FsaG9zdC9Qcm95ZWN0by1GaW5hbC1EQVcvbGV2ZWxXYXJlL3B1YmxpYy9taXNQZWRpZG9zIjt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NjM6Imh0dHA6Ly9sb2NhbGhvc3QvUHJveWVjdG8tRmluYWwtREFXL2xldmVsV2FyZS9wdWJsaWMvbWlzUGVkaWRvcyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1655791309),
('x7qCukoFyCMUdIb6C1NTHbAYidwmzu9Zi5jGrvDs', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:101.0) Gecko/20100101 Firefox/101.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicXhpNnpYT0tlMURIZVJNZ0VGanVjVkFwVGJ2UVZqYTR5R2JKaXhyMyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTg6Imh0dHA6Ly9sb2NhbGhvc3QvUHJveWVjdG8tRmluYWwtREFXL2xldmVsV2FyZS9wdWJsaWMvbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1655791309);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creditCard` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `apellidos`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `rol`, `provincia`, `localidad`, `direccion`, `creditCard`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alemol', 'Molero', 'ale@ale.com', '2022-06-07 20:44:31', '$2y$10$oy8qVYoQN2Qxoo6zizR.BubGeJukSs477Y/uKM2xPOXxBu/3ZYRUO', NULL, NULL, NULL, 1, 'Córdoba', 'Lucena', 'Plaza de España', '1234567887654321', 'O4fCpf8dwc26RWKJVlLBzou5Hgwpkr3bEhiUqKfDGcLspdj8gBouv6i4uB03', NULL, NULL, '2022-06-08 20:44:31', '2022-06-19 20:50:29', NULL),
(4, 'Felipe', 'Molero Gómez', 'falso123@gmail.com', NULL, '$2y$10$4xtYr6abLzOMw6WlmB.Yo.DBBB/1vid4djcoTAIJmmTj6mY2Cm.fC', NULL, NULL, NULL, 1, NULL, 'Lucena', 'calle falsa s/n', NULL, NULL, NULL, NULL, '2022-06-10 08:52:32', '2022-06-10 08:52:32', NULL),
(9, 'KK User', 'kk Apellidos', 'kk@kk.com', '2022-06-11 08:14:25', '$2y$10$ZM.VCXh8ej3nO0ZFJZfxrOvVfWiGrQAnjYfWPz.NXkYY9QdbEn2aS', NULL, NULL, NULL, 0, 'KK Provincia', 'kk city', 'Calle Falsa 123', NULL, NULL, NULL, NULL, '2022-06-11 08:11:05', '2022-06-11 08:14:25', NULL),
(10, 'usuarioNuevo', 'nuevo', 'new@new.com', '2022-06-18 21:29:42', '$2y$10$oRnL83UiCDRFFqajeeW0t.DQxCafESylPeDSZaYKIa.g1dnTYa/vS', NULL, NULL, NULL, 0, 'Fantasia', 'Magia', 'calle magica 123', NULL, NULL, NULL, NULL, '2022-06-18 19:29:04', '2022-06-18 19:29:04', NULL),
(11, 'Usuario', 'User new', 'user@user.com', '2022-06-20 22:44:28', '$2y$10$chxBKl2A3K80D9ktUbyXDeH89943eJ05cVAcs74p1aeYbGcggTWq2', NULL, NULL, NULL, 0, 'User provincia', 'Lucena', 'Calle Falsa 123', NULL, NULL, NULL, NULL, '2022-06-20 20:39:52', '2022-06-20 20:39:52', NULL);

--
-- Índices para tablas volcadas
--

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
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cesta_iduser_foreign` (`idUser`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `productoRep`
--
ALTER TABLE `productoRep`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productorep_iduser_foreign` (`idUser`);

--
-- Indices de la tabla `productosCesta`
--
ALTER TABLE `productosCesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productoscesta_idpro_foreign` (`idPro`),
  ADD KEY `productoscesta_idpedido_foreign` (`idPedido`);

--
-- Indices de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reparaciones_iduser_foreign` (`idUser`),
  ADD KEY `reparaciones_codproducto_foreign` (`codProducto`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `productoRep`
--
ALTER TABLE `productoRep`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `productosCesta`
--
ALTER TABLE `productosCesta`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD CONSTRAINT `cesta_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `productoRep`
--
ALTER TABLE `productoRep`
  ADD CONSTRAINT `productorep_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `productosCesta`
--
ALTER TABLE `productosCesta`
  ADD CONSTRAINT `productoscesta_idpedido_foreign` FOREIGN KEY (`idPedido`) REFERENCES `pedido` (`id`),
  ADD CONSTRAINT `productoscesta_idpro_foreign` FOREIGN KEY (`idPro`) REFERENCES `producto` (`id`);

--
-- Filtros para la tabla `reparaciones`
--
ALTER TABLE `reparaciones`
  ADD CONSTRAINT `reparaciones_codproducto_foreign` FOREIGN KEY (`codProducto`) REFERENCES `productoRep` (`id`),
  ADD CONSTRAINT `reparaciones_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
