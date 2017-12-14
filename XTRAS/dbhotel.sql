-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2017 a las 16:46:15
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `dbhotel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `pais` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `nombre`, `apellido1`, `apellido2`, `telefono`, `direccion`, `provincia`, `email`, `dni`, `activo`, `created_at`, `updated_at`, `pais`) VALUES
(251, 'Carmen', 'Lebrón', 'Delrío', '620306689', 'Calle Rojas, 5, 09º E, 78858, As Martí', 'Almería', 'elena.bahena@hotmail.com', '12432960B', '1', '2017-12-02 10:01:17', '2017-12-02 10:01:17', 'España'),
(252, 'Adam', 'Valero', 'Rascón', '664581066', 'Camino Báez, 61, 2º A, 28814, Os Henríquez', 'Barcelona', 'ismael81@zayas.com', '01087415K', '1', '2017-12-02 10:01:17', '2017-12-02 10:01:17', 'España'),
(253, 'Daniel', 'Jaramillo', 'Campos', '615551154', 'Carrer Victoria, 620, Ático 5º, 62782, Vall Castillo', 'Córdoba', 'adriana.quintana@lorenzo.com', '07204302N', '1', '2017-12-02 10:01:17', '2017-12-02 10:01:17', 'España'),
(254, 'Marcos', 'Carballo', 'Verdugo', '634590223', 'Avenida Llorente, 10, 6º D, 28184, La Porras Baja', 'Alicante', 'victoria.pulido@hotmail.com', '77564786T', '1', '2017-12-02 10:01:17', '2017-12-02 10:01:17', 'España'),
(255, 'Gabriel', 'Torres', 'Cuellar', '662248621', 'Paseo Leyre, 125, 3º F, 72649, Las Camarillo de San Pedro', 'Teruel', 'fatima08@montoya.org', '10491461B', '1', '2017-12-02 10:01:17', '2017-12-02 10:01:17', 'España'),
(256, 'Gonzalo', 'Toro', 'Farías', '682831682', 'Plaça Rodrigo, 5, 2º 9º, 08068, O Ordoñez de Arriba', 'Segovia', 'mateo48@gallardo.org', '84197430L', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(257, 'Gael', 'Rivas', 'Benítez', '613765153', 'Avenida Salazar, 16, 2º D, 60889, Las Cornejo Alta', 'Granada', 'kgarrido@rodriguez.com', '34848350S', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(258, 'Celia', 'Puig', 'Rangel', '697271272', 'Carrer Delao, 5, 7º 0º, 11652, La Rascón del Vallès', 'Cantabria', 'abanda@santamaria.com.es', '99604957F', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(259, 'Adriana', 'Roque', 'Pardo', '684905340', 'Avenida Dario, 405, 23º A, 32898, As Velásquez', 'Las Palmas', 'laia.osorio@hotmail.es', '97728370J', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(260, 'Candela', 'Dávila', 'Leiva', '610571432', 'Travesía Olivares, 94, 31º F, 31949, Viera Baja', 'Guipuzkoa', 'moreno.helena@hotmail.com', '09917788G', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(261, 'Jana', 'Carrión', 'Pichardo', '605770597', 'Ronda Sandra, 4, 7º C, 41726, Las Vega', 'Ceuta', 'kpuga@rangel.com', '16573950N', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(262, 'Óscar', 'Salinas', 'Hernández', '697927513', 'Praza Andrea, 5, 00º 6º, 26676, Delrío del Bages', 'Illes Balears', 'acarmona@live.com', '65490829P', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(263, 'Raúl', 'Delatorre', 'Navas', '619917142', 'Praza Rocío, 88, 2º B, 12407, Os Galindo', 'León', 'isaac.tafoya@hispavista.com', '50469574F', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(264, 'Ángel', 'Mora', 'Guevara', '616389790', 'Paseo Deleón, 77, Bajos, 05997, Os Méndez', 'Toledo', 'gabriel.lopez@cotto.es', '91675907T', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(265, 'Gerard', 'Escudero', 'Espinal', '639453643', 'Rúa Miranda, 78, 95º C, 55623, La Rojas', 'Vizcaya', 'javier46@blanco.com', '52284060T', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(266, 'Joan', 'Pons', 'Luis', '661504991', 'Rúa Covarrubias, 359, 2º C, 61187, O Casanova', 'Ávila', 'yaiza.tovar@lovato.es', '30312363L', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(267, 'Pedro', 'Aponte', 'Treviño', '666177986', 'Calle Naiara, 064, 2º D, 45621, El Valladares', 'Soria', 'vballesteros@gmail.com', '61027339J', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(268, 'José Manuel', 'Barroso', 'De la Fuente', '651656918', 'Avinguda Fernando, 37, 2º, 84383, Las Arevalo del Barco', 'Granada', 'aragon.rafael@hispavista.com', '10383462C', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(269, 'Anna', 'Terán', 'Guerra', '648015954', 'Camino Madrigal, 52, 0º E, 54263, O Ledesma', 'Santa Cruz de Tenerife', 'hugo.benitez@live.com', '23074374S', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(270, 'Martín', 'Robledo', 'Mares', '623063832', 'Plaça Niño, 3, 34º E, 09024, Los Rangel Medio', 'Cádiz', 'omar11@reynoso.com', '07601824W', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(271, 'José', 'Sevilla', 'Negrete', '647127529', 'Carrer Aitana, 0, 77º A, 94985, Valdés del Pozo', 'Badajoz', 'juan.deanda@cuellar.com.es', '00354165B', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(272, 'Aya', 'Gómez', 'Delgado', '627520460', 'Avinguda Eva, 95, Bajos, 02712, Los Guzmán', 'Guipuzkoa', 'olimon@perea.net', '34975446J', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(273, 'Rubén', 'Expósito', 'Garay', '600721400', 'Avenida Roca, 101, 5º B, 34563, Sisneros de Lemos', 'Alicante', 'alcantar.josemanuel@bahena.com.es', '62290545J', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(274, 'Francisco Javier', 'Izquierdo', 'Pagan', '668958829', 'Carrer Valero, 9, Ático 1º, 86613, La Covarrubias del Penedès', 'Jaén', 'oliver48@hotmail.es', '07324368H', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(275, 'Irene', 'Barrientos', 'Juan', '667296552', 'Plaça Mendoza, 0, 56º A, 14331, Os Garrido', 'A Coruña', 'dsantillan@latinmail.com', '36598798W', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(276, 'Alma', 'Arreola', 'Castro', '672231008', 'Praza Roberto, 360, 5º E, 56893, Rodrigo Baja', 'Sevilla', 'sandra.sisneros@latinmail.com', '03739289H', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(277, 'Daniela', 'Saldivar', 'Alfaro', '636089481', 'Rúa Jana, 4, 7º A, 73476, As Saldaña de Lemos', 'Castellón', 'adrian80@latinmail.com', '20192874R', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(278, 'Lidia', 'Melgar', 'Salinas', '616554541', 'Carrer Santana, 8, 2º D, 59956, La Gálvez del Puerto', 'Valencia', 'laia.alejandro@gmail.com', '18868046L', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(279, 'Silvia', 'Vidal', 'Roybal', '616131969', 'Travesía Dávila, 27, 1º B, 91422, Barajas del Bages', 'Cuenca', 'gfajardo@hotmail.es', '85569777W', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(280, 'Gabriel', 'Hernández', 'Montoya', '678556324', 'Plaça Iván, 0, 6º 4º, 09025, Zamora de Arriba', 'Palencia', 'pena.leyre@linares.net', '78088191V', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(281, 'Pedro', 'Lugo', 'Carvajal', '613276944', 'Passeig Ismael, 270, 9º 1º, 63159, La Toledo', 'Pontevedra', 'alberto85@gmail.com', '50570455X', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(282, 'Andrés', 'Tijerina', 'Pozo', '621642127', 'Paseo Adame, 7, 3º C, 24768, Os Concepción del Pozo', 'Jaén', 'mario27@live.com', '98453297A', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(283, 'Andrés', 'Baca', 'Rocha', '692928697', 'Camino Oliver, 163, 2º C, 59572, San Abrego del Vallès', 'Salamanca', 'xdomenech@collado.org', '81747589T', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(284, 'Marco', 'Fuentes', 'Robles', '689255167', 'Camiño Sedillo, 275, 27º 4º, 32826, Centeno Alta', 'Ceuta', 'toledo.beatriz@almaraz.com.es', '02514094X', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(285, 'Ismael', 'Parra', 'Camacho', '669396395', 'Ronda Mateo, 0, 08º C, 25447, Villa Delapaz del Puerto', 'Lleida', 'leo24@latinmail.com', '50409799D', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(286, 'Aaron', 'Galindo', 'Gil', '688047913', 'Travesía Francisco, 824, Ático 8º, 11793, As Mora de Arriba', 'Valencia', 'martina.altamirano@terra.com', '31323948H', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(287, 'Adrián', 'Molina', 'Ramón', '662854843', 'Camino Carlos, 81, 6º E, 51930, La Colunga', 'Álava', 'jurado.alba@hispavista.com', '39243112Y', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(288, 'Jimena', 'Orta', 'Regalado', '632485436', 'Carrer Jordi, 5, 7º D, 03180, Guerrero de Arriba', 'Valladolid', 'munguia.hector@najera.es', '69845287Z', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(289, 'Fernando', 'Bautista', 'Cabrera', '681142805', 'Ronda Ordóñez, 893, 3º F, 33925, El Mena', 'Girona', 'ocordova@yahoo.com', '75861913R', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(290, 'Gerard', 'Barajas', 'Maldonado', '651247085', 'Travessera Navarro, 360, 8º 9º, 86189, A Magaña', 'Tarragona', 'earmendariz@dominguez.com', '07120470S', '1', '2017-12-02 10:01:18', '2017-12-02 10:01:18', 'España'),
(291, 'nombre', 'apellido', 'apellido', '650536645', 'CALLE ALFONSO X Nº36 ALMENDRALEJO (BADAJOZ)', 'BADAJOZ', 'pedro@hotel.com', '44111222L', '1', '2017-12-03 10:39:25', '2017-12-03 10:39:25', 'España');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta_por_cobrar`
--

CREATE TABLE `cuenta_por_cobrar` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `estado` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `activo` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `monto` float(8,2) NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `id_reserva` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion`
--

CREATE TABLE `habitacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `nro` int(11) NOT NULL,
  `estado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_tipo_habitacion` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `habitacion`
--

INSERT INTO `habitacion` (`id`, `nro`, `estado`, `activo`, `id_tipo_habitacion`, `created_at`, `updated_at`) VALUES
(1, 101, 'LIBRE', '1', 4, '2014-05-12 18:23:59', '2017-11-10 06:22:13'),
(2, 102, 'LIBRE', '1', 7, '2014-05-12 21:31:24', '2017-11-05 18:06:02'),
(3, 103, 'LIBRE', '1', 4, '2017-10-25 15:40:34', '2017-11-14 19:08:39'),
(4, 104, 'LIBRE', '1', 8, '2017-10-26 15:33:09', '2017-11-14 19:07:04'),
(7, 105, 'OCUPADA', '1', 9, '2017-10-26 15:33:43', '2017-12-13 14:01:15'),
(8, 106, 'OCUPADA', '1', 6, '2017-10-26 15:33:52', '2017-12-12 16:49:28'),
(11, 107, 'OCUPADA', '1', 8, '2017-11-01 07:39:50', '2017-12-13 14:00:04'),
(12, 108, 'OCUPADA', '1', 7, '2017-11-01 07:40:03', '2017-12-12 16:51:15'),
(13, 109, 'LIBRE', '1', 9, '2017-11-01 07:40:12', '2017-11-01 07:40:12'),
(17, 110, 'OCUPADA', '1', 8, '2017-11-01 23:32:21', '2017-12-12 16:50:03'),
(19, 201, 'OCUPADA', '1', 8, '2017-11-01 23:33:46', '2017-12-12 16:50:40'),
(20, 202, 'LIBRE', '1', 8, '2017-11-17 17:08:53', '2017-11-17 17:08:53'),
(21, 203, 'LIBRE', '1', 8, '2017-11-17 17:09:47', '2017-11-17 17:09:47'),
(22, 204, 'LIBRE', '1', 6, '2017-12-02 16:15:53', '2017-12-02 16:15:53'),
(23, 205, 'OCUPADA', '1', 10, '2017-12-02 16:16:18', '2017-12-12 16:52:11'),
(24, 206, 'LIBRE', '1', 10, '2017-12-02 16:16:28', '2017-12-02 16:16:28'),
(25, 207, 'LIBRE', '1', 10, '2017-12-02 16:17:30', '2017-12-02 16:17:30'),
(37, 308, 'LIBRE', '1', 10, '2017-12-05 17:25:08', '2017-12-05 17:25:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `habitacion_reserva`
--

CREATE TABLE `habitacion_reserva` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_precio` int(11) UNSIGNED NOT NULL,
  `id_reserva` int(10) UNSIGNED NOT NULL,
  `id_habitacion` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `habitacion_reserva`
--

INSERT INTO `habitacion_reserva` (`id`, `id_precio`, `id_reserva`, `id_habitacion`, `created_at`, `updated_at`) VALUES
(26, 12, 27, 8, '2017-12-02 18:06:24', '2017-12-02 18:06:24'),
(27, 12, 28, 8, '2017-12-12 16:49:28', '2017-12-12 16:49:28'),
(28, 8, 29, 17, '2017-12-12 16:50:03', '2017-12-12 16:50:03'),
(29, 8, 30, 19, '2017-12-12 16:50:40', '2017-12-12 16:50:40'),
(30, 17, 31, 12, '2017-12-12 16:51:15', '2017-12-12 16:51:15'),
(31, 13, 32, 23, '2017-12-12 16:52:11', '2017-12-12 16:52:11'),
(32, 8, 33, 11, '2017-12-13 14:00:04', '2017-12-13 14:00:04'),
(33, 9, 34, 7, '2017-12-13 14:01:15', '2017-12-13 14:01:15');

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
('2017_10_12_103417_crear_cliente', 1),
('2017_10_12_103505_crear_trabajador', 1),
('2017_10_12_103525_crear_moneda', 1),
('2017_10_12_103550_crear_tipo_habitacion', 1),
('2017_10_12_103612_crear_tipo_usuario', 1),
('2017_10_12_103626_crear_usuario', 1),
('2017_10_12_103640_crear_reserva', 1),
('2017_10_12_103657_crear_habitacion', 1),
('2017_10_12_103732_crear_cuenta_por_cobrar', 1),
('2017_10_12_103744_crear_pago', 1),
('2017_10_12_103800_crear_precio', 1),
('2017_10_12_103852_crear_habitacion_reserva', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moneda`
--

CREATE TABLE `moneda` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `simbolo` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `moneda`
--

INSERT INTO `moneda` (`id`, `nombre`, `pais`, `simbolo`, `created_at`, `updated_at`) VALUES
(5, 'Euros', 'España', '€', '2014-05-08 00:16:45', '2014-05-08 00:16:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `monto` float(8,2) NOT NULL,
  `concepto` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_reserva` int(10) UNSIGNED NOT NULL,
  `id_moneda` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `pago`
--

INSERT INTO `pago` (`id`, `fecha`, `monto`, `concepto`, `activo`, `id_reserva`, `id_moneda`, `created_at`, `updated_at`) VALUES
(2, '2017-12-04 18:12:10', 90.00, 'Sin cobros pendientes', '1', 27, 5, '2017-12-04 17:12:10', '2017-12-04 17:12:10'),
(3, '2017-12-12 17:52:31', 45.00, 'Sin cobros pendientes', '1', 28, 5, '2017-12-12 16:52:31', '2017-12-12 16:52:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precio`
--

CREATE TABLE `precio` (
  `id` int(10) UNSIGNED NOT NULL,
  `monto` float(8,2) NOT NULL,
  `personas` int(11) NOT NULL,
  `id_moneda` int(10) UNSIGNED NOT NULL,
  `id_tipo_habitacion` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `precio`
--

INSERT INTO `precio` (`id`, `monto`, `personas`, `id_moneda`, `id_tipo_habitacion`, `created_at`, `updated_at`) VALUES
(7, 60.00, 2, 5, 7, '2017-11-01 07:13:14', '2017-11-22 17:06:35'),
(8, 60.00, 2, 5, 8, '2017-11-01 07:38:06', '2017-11-22 16:50:01'),
(9, 360.00, 4, 5, 9, '2017-11-01 07:38:43', '2017-11-22 16:52:01'),
(10, 90.00, 2, 5, 4, '2017-11-01 07:38:58', '2017-11-22 17:03:45'),
(11, 50.00, 1, 5, 8, '2017-11-22 16:50:16', '2017-11-22 16:50:16'),
(12, 45.00, 1, 5, 6, '2017-11-22 16:50:29', '2017-11-22 16:50:29'),
(13, 120.00, 2, 5, 10, '2017-11-22 16:58:31', '2017-11-22 16:58:31'),
(14, 100.00, 1, 5, 10, '2017-11-22 16:58:45', '2017-11-22 16:58:45'),
(15, 80.00, 1, 5, 4, '2017-11-22 17:04:00', '2017-11-22 17:04:00'),
(16, 50.00, 1, 5, 7, '2017-11-22 17:06:47', '2017-11-22 17:06:47'),
(17, 90.00, 3, 5, 7, '2017-11-22 17:07:29', '2017-11-22 17:07:29');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reserva`
--

CREATE TABLE `reserva` (
  `id` int(10) UNSIGNED NOT NULL,
  `fecha` datetime NOT NULL,
  `fecha_entrada` datetime NOT NULL,
  `fecha_salida` datetime NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `estado_pago` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dias` int(11) NOT NULL,
  `total` float(8,2) NOT NULL,
  `activo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_trabajador` int(10) UNSIGNED NOT NULL,
  `id_cliente` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `reserva`
--

INSERT INTO `reserva` (`id`, `fecha`, `fecha_entrada`, `fecha_salida`, `descripcion`, `estado_pago`, `dias`, `total`, `activo`, `id_trabajador`, `id_cliente`, `created_at`, `updated_at`) VALUES
(27, '2017-12-02 19:06:24', '2017-12-02 19:06:24', '2017-12-04 15:00:00', '', 'CANCELADO', 2, 90.00, '0', 9, 252, '2017-12-02 18:06:24', '2017-12-04 17:12:20'),
(28, '2017-12-12 17:49:27', '2017-12-12 17:49:27', '2017-12-13 15:00:00', '', 'CANCELADO', 1, 45.00, '1', 9, 267, '2017-12-12 16:49:27', '2017-12-12 16:52:31'),
(29, '2017-12-12 17:50:03', '2017-12-12 17:50:03', '2017-12-19 15:00:00', '', 'PENDIENTE', 7, 420.00, '1', 9, 251, '2017-12-12 16:50:03', '2017-12-12 16:50:03'),
(30, '2017-12-12 17:50:39', '2017-12-12 17:50:39', '2017-12-14 15:00:00', '', 'PENDIENTE', 2, 120.00, '1', 9, 256, '2017-12-12 16:50:39', '2017-12-12 16:50:39'),
(31, '2017-12-12 17:51:15', '2017-12-17 17:51:15', '2017-12-24 15:00:00', '', 'PENDIENTE', 7, 630.00, '1', 9, 276, '2017-12-12 16:51:15', '2017-12-12 16:51:15'),
(32, '2017-12-12 17:52:11', '2017-12-13 17:52:11', '2017-12-17 15:00:00', '', 'PENDIENTE', 4, 480.00, '1', 9, 281, '2017-12-12 16:52:11', '2017-12-12 16:52:11'),
(33, '2017-12-13 15:00:04', '2017-12-24 15:00:04', '2017-12-31 15:00:00', '', 'PENDIENTE', 7, 420.00, '1', 8, 282, '2017-12-13 14:00:04', '2017-12-13 14:00:04'),
(34, '2017-12-13 15:01:15', '2017-12-19 15:01:15', '2017-12-20 15:00:00', '', 'PENDIENTE', 1, 360.00, '1', 8, 254, '2017-12-13 14:01:15', '2017-12-13 14:01:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_habitacion`
--

CREATE TABLE `tipo_habitacion` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_habitacion`
--

INSERT INTO `tipo_habitacion` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(4, 'Matrim', 'Doble de uso indivial o dos personal.\r\nUna cama de 150 cms.', '2014-05-07 17:59:06', '2017-11-22 17:03:45'),
(6, 'Individual', 'Uso individual.\r\nCama de 105 cms.', '2014-05-07 23:31:15', '2017-11-22 17:00:51'),
(7, 'Triple', 'Triple para uso de una a tres personas.\r\nCuenta con tres camas de 105 cms.', '2017-10-20 17:07:57', '2017-11-22 17:05:41'),
(8, 'Doble', 'Uso doble o individual.\r\nDos camas de 105 cm individuales independientes.', '2017-10-26 15:00:17', '2017-11-22 16:59:42'),
(9, 'Suites', 'Cuentan con dos habitaciones dobles, 2 baños, salón y estancia. ', '2017-10-26 15:00:55', '2017-11-22 16:52:01'),
(10, 'KingSize', 'Uso doble o individual.\r\nUna cama de  2 metros x 2 metros.', '2017-11-22 16:58:31', '2017-11-22 17:01:25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `descripcion` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `nombre`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRADOR DE SISTEMA', 'Nivel SuperUsuario.\r\nAcesso a toda la gestión de menús, crearlos, editarlos y/o eliminarlos.\r\nTiene acceso a la configuración del sistema.', '2017-11-28 17:33:39', '2017-11-28 17:33:39'),
(3, 'USUARIO', 'Puede acceder al sistemas de reservas.\r\nCrear y editar clientes.\r\nConsultar datos  de trabajadores.\r\nRealizar reportes.', '2017-11-14 18:57:11', '2017-12-02 15:54:16'),
(5, 'ADMINISTRADOR DE CONTENIDOS', ' Tiene un acceso total a la administración del panel. Acceso restringido a la configuración del sistema.', '2017-11-27 19:42:07', '2017-11-27 19:42:07');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajador`
--

CREATE TABLE `trabajador` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `apellido2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `telefono` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `provincia` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `pais` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dni` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `trabajador`
--

INSERT INTO `trabajador` (`id`, `nombre`, `apellido1`, `apellido2`, `telefono`, `direccion`, `provincia`, `pais`, `email`, `dni`, `activo`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin', '75619084', 'villa verde', 'Badajoz', 'España', 'admin@admin.com', '5392888 sz', '1', '2014-05-02 17:33:16', '2014-05-02 17:33:16'),
(4, 'PEDRO', 'MIRANDA', 'NISA', '655435576', 'pedro vidal aragon, 4 PORTAL C 2ºC Almendralejo', 'Badajoz', 'España', 'peminisa@hotmail.com', '44779575R', '1', '2017-11-14 18:52:14', '2017-11-14 18:53:56'),
(5, 'ANGELA', 'PEREZ', 'PEREZ', '666000111', 'calle Estafeta nº5 Almendralejo ', 'Badajoz', 'España', 'angela@hotel.com', '44455566F', '1', '2017-11-14 18:53:30', '2017-12-02 07:50:45'),
(6, 'MARIA', 'MONTAÑO', 'PEREZ', '666000111', 'CALLE ALFONSO X Nº36 ALMENDRALEJO (BADAJOZ)', 'Badajoz', 'España', 'maria@hotel.com', '44111222R', '1', '2017-11-27 19:29:39', '2017-11-27 19:29:39'),
(7, 'Claudia', 'Mejía', 'Espino', '629804939', 'Travesía Nieto, 00, 25º B, 74735, Aparicio del Vallès', 'Salamanca', 'España', 'gael61@yahoo.com', '22984418N', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(8, 'Mar', 'Rojas', 'Castellanos', '635742350', 'Paseo Patricia, 239, 3º F, 38156, Villa Rentería', 'Badajoz', 'España', 'adriana.cintron@gmail.com', '29629748K', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(9, 'Aya', 'Esteve', 'Barrios', '653583737', 'Avinguda Patricia, 5, 4º D, 29861, Caballero Baja', 'Lleida', 'España', 'miguel.zayas@yahoo.es', '48422030S', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(10, 'Martina', 'Collazo', 'Quesada', '610648256', 'Plaza Salma, 54, Bajos, 93683, As García de Arriba', 'Cádiz', 'España', 'alvaro.aranda@aponte.com.es', '25153624L', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(11, 'Mar', 'Lugo', 'Polanco', '607090874', 'Calle Medrano, 49, 9º F, 56764, Os Patiño del Pozo', 'A Coruña', 'España', 'yvalverde@yahoo.es', '48478755E', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(12, 'Gael', 'Miramontes', 'Rey', '680356232', 'Passeig Jesús, 71, 9º D, 82406, Os Valle del Mirador', 'Valladolid', 'España', 'odavila@live.com', '56366197M', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(13, 'Mara', 'Castaño', 'Ornelas', '612886423', 'Calle Isaac, 1, 2º C, 84499, Tejada de Ulla', 'Ciudad Real', 'España', 'marti.sancho@ferrer.es', '02481489L', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(14, 'Diego', 'Soler', 'Linares', '604710360', 'Paseo Berta, 24, 1º C, 86737, Arellano Alta', 'Guadalajara', 'España', 'bruno98@benito.com', '97374975J', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(15, 'Lucía', 'Duran', 'Bustos', '631460939', 'Paseo Valles, 665, 61º D, 03426, Blanco del Puerto', 'Huelva', 'España', 'apalacios@terra.com', '18220062Z', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(16, 'Martí', 'Valero', 'Corrales', '691014864', 'Plaza Pau, 048, 8º B, 54110, Moreno de Lemos', 'Burgos', 'España', 'joel70@terra.com', '86122818P', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(17, 'Isabel', 'Laureano', 'Téllez', '649469994', 'Plaça Pizarro, 23, 0º D, 65916, Guzmán del Puerto', 'Ourense', 'España', 'zepeda.nayara@mas.com.es', '24418453C', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(18, 'Izan', 'Delarosa', 'Carrión', '676020132', 'Plaça Sancho, 872, 2º C, 46888, Altamirano Baja', 'Zamora', 'España', 'jbermudez@lopez.es', '74413786T', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(19, 'Guillem', 'Quintero', 'Arias', '636925145', 'Paseo Requena, 716, 9º D, 02861, Os Sanabria del Mirador', 'Segovia', 'España', 'pmateo@mendoza.com', '72612607C', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46'),
(20, 'Iker', 'Pedraza', 'Valero', '679585855', 'Plaza Clara, 1, 3º C, 63467, L\' Luevano', 'Guipuzkoa', 'España', 'jon70@gimeno.es', '00204365X', '1', '2017-12-02 08:14:46', '2017-12-02 08:14:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fecha_creacion` date NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `activo` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `id_trabajador` int(10) UNSIGNED NOT NULL,
  `id_tipo_usuario` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `password`, `fecha_creacion`, `remember_token`, `activo`, `id_trabajador`, `id_tipo_usuario`, `created_at`, `updated_at`) VALUES
(6, 'angela@hotel.com', '$2y$10$8Zba.XE0HGZOvlwDLsOg2eBqQf6sVREP66b2sv6k/zydWo/W.X5Ee', '2017-11-14', 'eLQZxElLbXCTmFxhbgSSkceiF3HZvbapmub04QpUbbyVgaP6KXheYXZrf7hd', '1', 5, 3, '2017-11-14 18:59:42', '2017-12-13 19:32:51'),
(7, 'maria@hotel.com', '$2y$10$oa9N1hvpElC4TmUrKgv7BuJxvkQa4SS4.0.CJYthmXIGT2xPVK9aa', '2017-11-27', '', '1', 6, 3, '2017-11-27 19:31:59', '2017-11-27 19:31:59'),
(8, 'peminisa@hotmail.com', '$2y$10$lxXsCB2Rd8P.xRXwhkyG.eMtFMATkX3mwiQWNOcG9.wn6x4hCpX0S', '2017-11-28', 'ceVmnnyumF97nKrvdBhpxSLly1lk0kzMh0a9TIsPcjJcqIaaMwaF4HhG6gR8', '1', 4, 5, '2017-11-28 17:36:46', '2017-12-13 19:41:34'),
(9, 'admin@admin.com', '$2a$04$1EHu.bnzpPkq9weGDRo1xeUtBPOx6OW5jJ9rbhQVd0X4pwZ.zVKwe', '2017-11-28', '7QnYmJqcSPAP0GXqbnZWvgb15MEz64RjvhUyU4TTQKbCNbO5sILQADU4FciC', '1', 1, 1, '0000-00-00 00:00:00', '2017-12-13 14:22:52'),
(10, 'aya@hotel.com', '$2y$10$A41QaiM2yTgNFTcbIXFoWeYhT9SLz.XtMoUp2TcdiUQyXErxMm/zi', '2017-12-02', '9FWM25773Mbru14QxMiGoUj1CMWgwCRdL7D0xkGuDPtxUKQPeJORNINSrHiQ', '1', 9, 3, '2017-12-02 15:58:43', '2017-12-08 09:56:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indices de la tabla `cuenta_por_cobrar`
--
ALTER TABLE `cuenta_por_cobrar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cuenta_por_cobrar_id_cliente_foreign` (`id_cliente`),
  ADD KEY `cuenta_por_cobrar_id_reserva_foreign` (`id_reserva`);

--
-- Indices de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `habitacion_id_tipo_habitacion_foreign` (`id_tipo_habitacion`);

--
-- Indices de la tabla `habitacion_reserva`
--
ALTER TABLE `habitacion_reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `habitacion_reserva_id_reserva_foreign` (`id_reserva`),
  ADD KEY `habitacion_reserva_id_habitacion_foreign` (`id_habitacion`),
  ADD KEY `reserva_habitacion_id_precio_foreign` (`id_precio`);

--
-- Indices de la tabla `moneda`
--
ALTER TABLE `moneda`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pago_id_reserva_foreign` (`id_reserva`),
  ADD KEY `pago_id_moneda_foreign` (`id_moneda`);

--
-- Indices de la tabla `precio`
--
ALTER TABLE `precio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `precio_id_moneda_foreign` (`id_moneda`),
  ADD KEY `precio_id_tipo_habitacion_foreign` (`id_tipo_habitacion`);

--
-- Indices de la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reserva_id_trabajador_foreign` (`id_trabajador`),
  ADD KEY `reserva_id_cliente_foreign` (`id_cliente`);

--
-- Indices de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `usuario_email_unique` (`email`),
  ADD KEY `usuario_id_trabajador_foreign` (`id_trabajador`),
  ADD KEY `usuario_id_tipo_usuario_foreign` (`id_tipo_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;
--
-- AUTO_INCREMENT de la tabla `cuenta_por_cobrar`
--
ALTER TABLE `cuenta_por_cobrar`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `habitacion`
--
ALTER TABLE `habitacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `habitacion_reserva`
--
ALTER TABLE `habitacion_reserva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT de la tabla `moneda`
--
ALTER TABLE `moneda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `precio`
--
ALTER TABLE `precio`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT de la tabla `reserva`
--
ALTER TABLE `reserva`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `tipo_habitacion`
--
ALTER TABLE `tipo_habitacion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `trabajador`
--
ALTER TABLE `trabajador`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuenta_por_cobrar`
--
ALTER TABLE `cuenta_por_cobrar`
  ADD CONSTRAINT `cuenta_por_cobrar_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cuenta_por_cobrar_id_reserva_foreign` FOREIGN KEY (`id_reserva`) REFERENCES `reserva` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `habitacion`
--
ALTER TABLE `habitacion`
  ADD CONSTRAINT `habitacion_id_tipo_habitacion_foreign` FOREIGN KEY (`id_tipo_habitacion`) REFERENCES `tipo_habitacion` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `habitacion_reserva`
--
ALTER TABLE `habitacion_reserva`
  ADD CONSTRAINT `habitacion_reserva_id_habitacion_foreign` FOREIGN KEY (`id_habitacion`) REFERENCES `habitacion` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `habitacion_reserva_id_reserva_foreign` FOREIGN KEY (`id_reserva`) REFERENCES `reserva` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserva_habitacion_id_precio_foreign` FOREIGN KEY (`id_precio`) REFERENCES `precio` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `pago`
--
ALTER TABLE `pago`
  ADD CONSTRAINT `pago_id_moneda_foreign` FOREIGN KEY (`id_moneda`) REFERENCES `moneda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pago_id_reserva_foreign` FOREIGN KEY (`id_reserva`) REFERENCES `reserva` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `precio`
--
ALTER TABLE `precio`
  ADD CONSTRAINT `precio_id_moneda_foreign` FOREIGN KEY (`id_moneda`) REFERENCES `moneda` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `precio_id_tipo_habitacion_foreign` FOREIGN KEY (`id_tipo_habitacion`) REFERENCES `tipo_habitacion` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reserva`
--
ALTER TABLE `reserva`
  ADD CONSTRAINT `reserva_id_cliente_foreign` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `reserva_id_trabajador_foreign` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_id_tipo_usuario_foreign` FOREIGN KEY (`id_tipo_usuario`) REFERENCES `tipo_usuario` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `usuario_id_trabajador_foreign` FOREIGN KEY (`id_trabajador`) REFERENCES `trabajador` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
