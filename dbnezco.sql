-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-03-2018 a las 14:59:12
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 7.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbnezco`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_documentos`
--

CREATE TABLE `categoria_documentos` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `estatus` enum('Activo','Desactivo') NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categoria_documentos`
--

INSERT INTO `categoria_documentos` (`id`, `descripcion`, `estatus`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Ley', 'Activo', 2, '2018-03-17 00:00:00', '2018-03-17 02:12:16'),
(2, 'Reglamentos', 'Activo', 2, '2018-03-17 00:00:00', '2018-03-17 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_imagen`
--

CREATE TABLE `categoria_imagen` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` enum('Activo','Desactivado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria_imagen`
--

INSERT INTO `categoria_imagen` (`id`, `descripcion`, `estatus`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Producto', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(2, 'Servicio', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(3, 'Galeria', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(4, 'Empresa', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_producto`
--

CREATE TABLE `categoria_producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` enum('Activo','Desactivado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria_producto`
--

INSERT INTO `categoria_producto` (`id`, `descripcion`, `estatus`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Extintores', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(2, 'Mangueras', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(3, 'Polvos Químicos', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(4, 'Pitón', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(5, 'Acoples', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-17 03:36:09'),
(6, 'Siamesa', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(7, 'Devanadora', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(8, 'Niple', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(9, 'Válvula', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(10, 'Bateria', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(11, 'Lámpara', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(12, 'Caja Metálica', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00'),
(13, 'Frente de Lámpara', 'Activo', 2, '2018-03-11 04:00:00', '2018-03-11 04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_servicio`
--

CREATE TABLE `categoria_servicio` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` enum('Activo','Desactivado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria_servicio`
--

INSERT INTO `categoria_servicio` (`id`, `descripcion`, `estatus`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Cursos', 'Activo', 2, '2018-03-12 04:00:00', '2018-03-17 03:31:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria_video`
--

CREATE TABLE `categoria_video` (
  `id` int(10) UNSIGNED NOT NULL,
  `descripcion` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` enum('Activo','Desactivado') COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categoria_video`
--

INSERT INTO `categoria_video` (`id`, `descripcion`, `estatus`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Principal', 'Activo', 2, '2018-03-12 04:00:00', '2018-03-12 04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documentos`
--

CREATE TABLE `documentos` (
  `id` int(11) NOT NULL,
  `nombre` varchar(250) NOT NULL,
  `descripcion` text NOT NULL,
  `categoria_documento_id` int(11) NOT NULL,
  `publico` enum('Si','No') NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `publico` enum('Si','No','','') NOT NULL,
  `estatus` enum('Activo','Desactivado','','') NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre`, `descripcion`, `imagen`, `publico`, `estatus`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'XYZ', '<p>Empresa dedicada al ramo</p>', 'empresa_1521512386.jpg', 'Si', 'Activo', 2, '2018-03-20 00:00:00', '2018-03-20 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publico` enum('Si','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagenes`
--

CREATE TABLE `imagenes` (
  `id` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `url` varchar(200) NOT NULL,
  `categoria_imagen_id` int(11) NOT NULL,
  `tipo_id` int(11) NOT NULL,
  `publico` enum('Si','No') NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `imagenes`
--

INSERT INTO `imagenes` (`id`, `nombre`, `url`, `categoria_imagen_id`, `tipo_id`, `publico`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Foto 1', 'producto_1521501611.jpg', 1, 1, 'Si', 2, '2018-03-19 00:00:00', '2018-03-19 00:00:00'),
(2, 'Taller 1', 'servicio_1521553704.jpg', 2, 1, 'Si', 2, '2018-03-20 00:00:00', '2018-03-20 00:00:00'),
(3, 'Taller 2', 'servicio_1521554052.jpg', 2, 1, 'Si', 2, '2018-03-20 00:00:00', '2018-03-20 00:00:00');

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
(14, '2014_10_12_000000_create_users_table', 1),
(15, '2014_10_12_100000_create_password_resets_table', 1);

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
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(10) UNSIGNED NOT NULL,
  `codigo` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_producto_id` int(11) NOT NULL,
  `tipo_producto_id` int(11) NOT NULL,
  `publico` enum('Si','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `estatus` enum('Activo','Desactivado','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `usuario_id` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigo`, `titulo`, `descripcion`, `categoria_producto_id`, `tipo_producto_id`, `publico`, `inicio`, `posicion`, `estatus`, `imagen`, `created_at`, `usuario_id`, `updated_at`) VALUES
(1, 'EX01', 'Extintor importado de 10 lbs PQS (Polvo Químico Seco) ABC (Monofosfato de amonio) marca KIDDE / FYRECHEM Certificación UL- Incluye soporte para ser instalado en pared.', '<p>Extintor importado de 10 lbs PQS (Polvo Qu&iacute;mico Seco) ABC (Monofosfato de amonio) marca KIDDE / FYRECHEM Certificaci&oacute;n UL- Incluye soporte para ser instalado en pared.&nbsp;</p>', 1, 1, 'Si', 1, 1, 'Activo', 'producto_1521403681.jpg', '2018-03-18 04:00:00', 2, '2018-03-19 00:08:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `id` int(10) UNSIGNED NOT NULL,
  `titulo` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detalles` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_servicio_id` int(11) NOT NULL,
  `publico` enum('Si','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `inicio` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estatus` enum('Activo','Desactivado','','') COLLATE utf8mb4_unicode_ci NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`id`, `titulo`, `descripcion`, `detalles`, `categoria_servicio_id`, `publico`, `inicio`, `posicion`, `imagen`, `estatus`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Instalación de Extintores', '<p>sadasdasdasd</p>', '<p>sadasdsadasdsadsadsad</p>', 1, 'Si', 1, 1, 'servicio_1521553452.jpg', 'Activo', 2, '2018-03-20 04:00:00', '2018-03-20 04:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_producto`
--

CREATE TABLE `tipo_producto` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(250) NOT NULL,
  `categoria_producto_id` int(11) NOT NULL,
  `estatus` enum('Activo','Desactivado') NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_producto`
--

INSERT INTO `tipo_producto` (`id`, `descripcion`, `categoria_producto_id`, `estatus`, `usuario_id`, `created_at`, `updated_at`) VALUES
(1, 'Monofosfato de Amonio', 1, 'Activo', 2, '2018-03-17 00:00:00', '2018-03-17 01:39:51'),
(2, 'Chaqueta Sencilla  (Polyester) y recubrimiento interno de goma sintética', 2, 'Activo', 2, '2018-03-17 00:00:00', '2018-03-17 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Yoelis Mendoza', 'yoe318@gmail.com', '$2y$10$r7kzW6T6xi25ozsk1tunSegG1R9anftelKYiOy7fzMYSfWTnknu4S', 'jwzUVrhvYYU7Rhj98Fx7IrCDgwZIZoSZKm1pY2AgtZtQZh7MonnmX7GynDLW', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `video`
--

CREATE TABLE `video` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_video_id` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `publico` enum('Si','No') COLLATE utf8mb4_unicode_ci NOT NULL,
  `posicion` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categoria_documentos`
--
ALTER TABLE `categoria_documentos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_imagen`
--
ALTER TABLE `categoria_imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_servicio`
--
ALTER TABLE `categoria_servicio`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria_video`
--
ALTER TABLE `categoria_video`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `documentos`
--
ALTER TABLE `documentos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_documento` (`categoria_documento_id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario_id`);

--
-- Indices de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_imagen` (`categoria_imagen_id`),
  ADD KEY `tipo` (`tipo_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_producto_id_fk` (`categoria_producto_id`),
  ADD KEY `tipo_producto` (`tipo_producto_id`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_servicio_id_fk` (`categoria_servicio_id`);

--
-- Indices de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_producto` (`categoria_producto_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categoria_video_id_fk` (`categoria_video_id`),
  ADD KEY `usuario` (`usuario_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categoria_documentos`
--
ALTER TABLE `categoria_documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria_imagen`
--
ALTER TABLE `categoria_imagen`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `categoria_producto`
--
ALTER TABLE `categoria_producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `categoria_servicio`
--
ALTER TABLE `categoria_servicio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categoria_video`
--
ALTER TABLE `categoria_video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `documentos`
--
ALTER TABLE `documentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `imagenes`
--
ALTER TABLE `imagenes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tipo_producto`
--
ALTER TABLE `tipo_producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `video`
--
ALTER TABLE `video`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
