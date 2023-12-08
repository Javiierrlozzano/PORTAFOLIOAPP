-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para portafolio
CREATE DATABASE IF NOT EXISTS `portafolio` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `portafolio`;

-- Volcando estructura para tabla portafolio.actualizacionprecios
CREATE TABLE IF NOT EXISTS `actualizacionprecios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `protucto_id` bigint(20) unsigned DEFAULT NULL,
  `PrecioActual` varchar(255) DEFAULT NULL,
  `Utilidad%` varchar(255) DEFAULT NULL,
  `ValorUtilidad` varchar(255) DEFAULT NULL,
  `PrecioPublico` varchar(255) DEFAULT NULL,
  `OrigenProducto_id` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `protucto_id` (`protucto_id`),
  CONSTRAINT `actualizacionprecios_ibfk_1` FOREIGN KEY (`protucto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla portafolio.actualizacionprecios: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portafolio.bodegas
CREATE TABLE IF NOT EXISTS `bodegas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) DEFAULT NULL,
  `Direccion` varchar(255) DEFAULT NULL,
  `Empresas_id` bigint(20) unsigned DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `TiendaVirtual` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `Empresas_id` (`Empresas_id`),
  CONSTRAINT `bodegas_ibfk_1` FOREIGN KEY (`Empresas_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla portafolio.bodegas: ~0 rows (aproximadamente)
INSERT INTO `bodegas` (`id`, `Nombre`, `Direccion`, `Empresas_id`, `Estado`, `TiendaVirtual`, `created_at`, `updated_at`) VALUES
	(1, 'BODEGA1', 'CR14-145-22', 4, 'Activar', 'on', '2023-11-28 22:11:48', '2023-11-28 22:11:48');

-- Volcando estructura para tabla portafolio.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.categorias: ~3 rows (aproximadamente)
INSERT INTO `categorias` (`id`, `NombreCategoria`, `Estado`, `created_at`, `updated_at`) VALUES
	(2, 'Tecnologia', 'Activo', '2023-10-26 04:18:39', '2023-10-26 04:18:39'),
	(3, 'Seguridad', 'Activo', '2023-10-26 08:01:36', '2023-10-27 04:57:49'),
	(4, 'Dispositivos', 'Activo', '2023-10-27 05:01:49', '2023-10-27 05:01:49'),
	(5, 'Pruenas', 'Activo', '2023-10-28 07:04:13', '2023-10-28 07:04:13');

-- Volcando estructura para tabla portafolio.clientes
CREATE TABLE IF NOT EXISTS `clientes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nombre2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientes_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.clientes: ~1 rows (aproximadamente)
INSERT INTO `clientes` (`id`, `tipo`, `nombre`, `estado`, `doc`, `apellido1`, `apellido2`, `nombre1`, `nombre2`, `email`, `telefono`, `created_at`, `updated_at`) VALUES
	(4, NULL, NULL, NULL, 'MESA 1', '0', '0', '0', '0', '0', NULL, '2023-12-08 19:37:21', '2023-12-08 19:37:21');

-- Volcando estructura para tabla portafolio.contactos
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `long` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Latitud` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `clientes_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `contactos_clientes_id_foreign` (`clientes_id`),
  CONSTRAINT `contactos_clientes_id_foreign` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.contactos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portafolio.detfacturas
CREATE TABLE IF NOT EXISTS `detfacturas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `protucto_id` bigint(20) unsigned DEFAULT NULL,
  `Cantidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Valorunidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ValorTotal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descuento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facturas_id` bigint(20) unsigned NOT NULL,
  `ValorEvioTotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `detfacturas_protucto_id_foreign` (`protucto_id`),
  KEY `detfacturas_facturas_id_foreign` (`facturas_id`),
  CONSTRAINT `detfacturas_facturas_id_foreign` FOREIGN KEY (`facturas_id`) REFERENCES `facturas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `detfacturas_protucto_id_foreign` FOREIGN KEY (`protucto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.detfacturas: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portafolio.empresas
CREATE TABLE IF NOT EXISTS `empresas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Nit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Direccion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `celular` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Eslogan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Colorprincipal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Colorletras` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Colorfondo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ColorSegundario` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Colorbotones` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Colorpiepagina` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Colorletrapie` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.empresas: ~0 rows (aproximadamente)
INSERT INTO `empresas` (`id`, `Nombre`, `Nit`, `Direccion`, `Telefono`, `celular`, `Logo`, `Eslogan`, `Estado`, `Colorprincipal`, `Colorletras`, `Colorfondo`, `ColorSegundario`, `Colorbotones`, `Colorpiepagina`, `Colorletrapie`, `created_at`, `updated_at`) VALUES
	(4, '@INPUTSYSTEM', '1006456463-7', 'CR13-1720', '3134402412', '+57 3134402412', '/storage/app/SPcAyRuWq1P7X0O97CRfDIEmDa6LN7X3zLSnNwR2.png', 'TECNOLOGIA Y DESARROLLO', 'Activo', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-10-27 08:11:35', '2023-10-27 08:11:35');

-- Volcando estructura para tabla portafolio.facturas
CREATE TABLE IF NOT EXISTS `facturas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NumeroFactura` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Valortotal` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MedioPago` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValorEvio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Clientes_id` bigint(20) unsigned DEFAULT NULL,
  `Empresa_id` bigint(20) unsigned DEFAULT NULL,
  `contactos_id` bigint(20) unsigned DEFAULT NULL,
  `Producto_id` bigint(20) unsigned DEFAULT NULL,
  `users_id` bigint(20) unsigned DEFAULT NULL,
  `Comentarios` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `facturas_contactos_id_foreign` (`contactos_id`),
  KEY `facturas_clientes_id_foreign` (`Clientes_id`),
  KEY `facturas_empresa_id_foreign` (`Empresa_id`),
  KEY `Producto_id` (`Producto_id`) USING BTREE,
  KEY `users_id` (`users_id`) USING BTREE,
  CONSTRAINT `facturas_clientes_id_foreign` FOREIGN KEY (`Clientes_id`) REFERENCES `clientes` (`id`) ON DELETE CASCADE,
  CONSTRAINT `facturas_contactos_id_foreign` FOREIGN KEY (`contactos_id`) REFERENCES `contactos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `facturas_empresa_id_foreign` FOREIGN KEY (`Empresa_id`) REFERENCES `empresas` (`id`) ON DELETE CASCADE,
  CONSTRAINT `facturas_producto_id_foreign` FOREIGN KEY (`Producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `facturas_user_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.facturas: ~7 rows (aproximadamente)
INSERT INTO `facturas` (`id`, `NumeroFactura`, `Valortotal`, `Estado`, `MedioPago`, `ValorEvio`, `Clientes_id`, `Empresa_id`, `contactos_id`, `Producto_id`, `users_id`, `Comentarios`, `created_at`, `updated_at`) VALUES
	(2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2023-11-20 07:32:36', '2023-11-20 07:32:36'),
	(5, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '2023-11-26 22:26:12', '2023-11-26 22:26:12'),
	(6, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '2023-11-26 22:26:13', '2023-11-26 22:26:13'),
	(7, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '2023-11-26 22:26:14', '2023-11-26 22:26:14'),
	(8, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '2023-11-26 22:26:14', '2023-11-26 22:26:14'),
	(9, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '2023-11-26 22:26:14', '2023-11-26 22:26:14'),
	(10, NULL, NULL, NULL, NULL, NULL, NULL, 4, NULL, NULL, NULL, NULL, '2023-11-26 22:26:15', '2023-11-26 22:26:15');

-- Volcando estructura para tabla portafolio.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portafolio.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.migrations: ~11 rows (aproximadamente)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_100000_create_password_resets_table', 1),
	(2, '2019_08_19_000000_create_failed_jobs_table', 1),
	(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(4, '2022_12_18_041931_user', 1),
	(5, '2023_10_23_234809_categorias', 1),
	(6, '2023_10_23_235159_productos', 1),
	(7, '2023_10_23_235218_clientes', 1),
	(8, '2023_10_24_231345_empresas', 1),
	(9, '2023_10_24_231711_contactos', 1),
	(10, '2023_10_24_232418_facturas', 1),
	(11, '2023_10_24_232727_facdetalles', 1);

-- Volcando estructura para tabla portafolio.movimientos
CREATE TABLE IF NOT EXISTS `movimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Consecutivo` varchar(255) DEFAULT NULL,
  `idEntrada` varchar(255) DEFAULT NULL,
  `Origen` varchar(255) DEFAULT NULL,
  `Destino` varchar(255) DEFAULT NULL,
  `CodigoMovimiento` varchar(255) DEFAULT NULL,
  `CreadorMovimiento_id` bigint(20) unsigned DEFAULT NULL,
  `Actualizacion_id` bigint(20) unsigned DEFAULT NULL,
  `TipoMovimiento` bigint(255) unsigned DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `Comentarios1` varchar(255) DEFAULT NULL,
  `Comentarios2` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `CreadorMovimiento_id` (`CreadorMovimiento_id`),
  KEY `TipoMovimiento` (`TipoMovimiento`) USING BTREE,
  KEY `Actulizar_id` (`Actualizacion_id`),
  CONSTRAINT `Actulizar_id` FOREIGN KEY (`Actualizacion_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  CONSTRAINT `FK_movimientos_tipomovimientos` FOREIGN KEY (`TipoMovimiento`) REFERENCES `tipomovimientos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `movimientos_ibfk_1` FOREIGN KEY (`CreadorMovimiento_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla portafolio.movimientos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portafolio.movimientosdetallados
CREATE TABLE IF NOT EXISTS `movimientosdetallados` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `producto_id` bigint(20) unsigned DEFAULT NULL,
  `Cantidad` varchar(255) DEFAULT NULL,
  `CantidadExistencias` varchar(255) DEFAULT NULL,
  `Total` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `producto_id` (`producto_id`),
  CONSTRAINT `movimientosdetallados_ibfk_1` FOREIGN KEY (`producto_id`) REFERENCES `productos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla portafolio.movimientosdetallados: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portafolio.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.password_resets: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portafolio.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla portafolio.productos
CREATE TABLE IF NOT EXISTS `productos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `NombreProducto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Valor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CantidadExitente` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Imagen` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Imagen2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Imagen3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Imagen4` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Oferta` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Descuento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `agregarcomentario` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ValorEvio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Categoria_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `productos_categoria_id_foreign` (`Categoria_id`),
  CONSTRAINT `productos_categoria_id_foreign` FOREIGN KEY (`Categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.productos: ~7 rows (aproximadamente)
INSERT INTO `productos` (`id`, `NombreProducto`, `Descripcion`, `Estado`, `Valor`, `CantidadExitente`, `Imagen`, `Imagen2`, `Imagen3`, `Imagen4`, `Oferta`, `Descuento`, `agregarcomentario`, `ValorEvio`, `Categoria_id`, `created_at`, `updated_at`) VALUES
	(32, 'PRUEBAS', 'sdfsdf', 'Activo', '100024', NULL, NULL, NULL, NULL, NULL, 'on', 'ASD', NULL, NULL, 2, '2023-11-05 08:12:30', '2023-11-19 23:07:44'),
	(33, 'asd', 'asd', 'Activo', 'asd', NULL, '/storage/app/IICKQiVeQcuj0W4kwEnUj1X9F4NF53Z3L8vzwe1v.png', NULL, NULL, NULL, 'on', 'asd', 'on', NULL, 3, '2023-11-05 09:04:08', '2023-11-24 07:29:22'),
	(34, 'asds', 'asd', 'Activo', 'asd', NULL, '/storage/app/bN9wvEQsXMr8s3eordfCejGJJHS7TZeD1Qvv2PDR.png', NULL, NULL, NULL, 'on', 'asd', 'on', NULL, 2, '2023-11-06 07:28:00', '2023-11-19 23:34:40'),
	(35, 'sxas', 'as', 'Activo', 'asd', NULL, '/storage/app/ARn474UEgDYdhEDfEsLOHZ1DZyQCkSnyMgdSwUI4.png', NULL, NULL, NULL, NULL, 'asd', NULL, NULL, 2, '2023-11-06 07:28:39', '2023-11-06 07:28:39'),
	(36, 'asd', 'sdasd', 'Activo', '1006456', '100', NULL, NULL, NULL, NULL, NULL, '1064654', NULL, NULL, 3, '2023-11-06 09:40:41', '2023-11-19 23:08:24'),
	(37, 'PRUEBAS', NULL, 'Activo', 'asd', '1', '/storage/app/Pnxk2VWnZjBl26gQ7YYYIauKDBB7Xd2yynQhcWWq.webp', NULL, NULL, NULL, 'on', 'asd', 'on', NULL, 3, '2023-11-24 07:29:45', '2023-11-24 07:29:45'),
	(38, 'PRUEBAS', NULL, 'Activo', '60', NULL, '/storage/app/86xDqwwvi3lGXiuNTNfsqOlmFPXWGMgDcl3VRZup.webp', NULL, NULL, NULL, 'on', 'asd', 'on', NULL, 3, '2023-11-24 07:30:09', '2023-11-24 07:30:09');

-- Volcando estructura para tabla portafolio.tipomovimientos
CREATE TABLE IF NOT EXISTS `tipomovimientos` (
  `id` bigint(255) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) DEFAULT NULL,
  `Codigo` varchar(255) DEFAULT NULL,
  `DescuentoExistencia` varchar(255) DEFAULT NULL,
  `AñadeExistencia` varchar(255) DEFAULT NULL,
  `Bloquea` varchar(255) DEFAULT NULL,
  `Alertar` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla portafolio.tipomovimientos: ~4 rows (aproximadamente)
INSERT INTO `tipomovimientos` (`id`, `Nombre`, `Codigo`, `DescuentoExistencia`, `AñadeExistencia`, `Bloquea`, `Alertar`, `Estado`, `created_at`, `updated_at`) VALUES
	(1, 'Salidas', 'S001', 'on', NULL, NULL, NULL, 'Activo', '2023-11-28 08:40:09', '2023-11-28 08:40:09'),
	(2, 'Entradas', 'E000', NULL, 'on', NULL, NULL, 'Activo', '2023-11-28 08:40:29', '2023-11-28 08:40:29'),
	(3, 'Translados', 'Tns00', 'on', NULL, NULL, 'on', 'Activo', '2023-11-28 08:40:54', '2023-11-28 08:42:03'),
	(4, 'Ajustes', 'ST00', 'on', 'on', NULL, NULL, 'Activo', '2023-11-28 08:41:14', '2023-11-28 08:41:14'),
	(5, 'Reservas', 'RS00', NULL, NULL, 'on', NULL, 'Activo', '2023-11-28 08:41:33', '2023-11-28 08:41:33');

-- Volcando estructura para tabla portafolio.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perfil` varchar(225) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla portafolio.users: ~4 rows (aproximadamente)
INSERT INTO `users` (`id`, `name`, `email`, `estado`, `perfil`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'JAVIER', 'sistemas@esemorenoyclavijo.gov.co', NULL, NULL, NULL, '$2y$10$7dkHzWsUic6TB.EBThu8BOEgr/nujY.TqYg8XYSdC.SKLrngaJKF2', NULL, '2023-10-26 04:04:25', '2023-10-26 04:04:25'),
	(2, 'jaiver', 'javierlozano2001@hotmail.com', 'Activo', 'Administrador', NULL, '$2y$10$g1Tj3G2TOWeeOhZCSkxQG.GvVA04uco1wsk.iFuvVhoiO86SxIJyq', NULL, '2023-11-16 08:37:31', '2023-11-16 08:37:31'),
	(3, 'Tatiana', 'tatyespinosa11@gmail.com', 'Activo', 'Cliente', NULL, '$2y$10$t0QY.9mJJ67NxbBkAQWj0eXilao/lkR13v1pKJmMqFPons9SisDBK', NULL, '2023-12-08 19:30:30', '2023-12-08 19:30:30'),
	(4, 'Marlon Espinosa', 'marlonger0920@gmail.com', 'Activo', 'Cliente', NULL, '$2y$10$7DoQKTeAaC2g9g6TW7JEnuMTFbZCpINy1eaqts4mT6Gz.YBG2bHaS', NULL, '2023-12-08 19:30:38', '2023-12-08 19:30:38');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
