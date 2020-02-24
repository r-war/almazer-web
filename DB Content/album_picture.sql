-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 24, 2020 at 11:30 AM
-- Server version: 10.3.22-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rivalwar_almazer`
--

-- --------------------------------------------------------

--
-- Table structure for table `album_picture`
--

CREATE TABLE `album_picture` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `index` int(11) NOT NULL,
  `album_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `album_picture`
--

INSERT INTO `album_picture` (`id`, `index`, `album_id`, `name`, `description`, `picture`, `url`, `created_at`, `updated_at`) VALUES
(1, 11, 1, 'Neha Jacobs', 'Eveniet non et culpa nihil voluptas hic.', 'https://lorempixel.com/480/200/?53018', 'http://goldner.com/', '2020-01-15 06:36:41', '2020-01-15 06:36:41'),
(2, 12, 1, 'Dr. Maryam Kunze Sr.', 'Voluptatem rerum dolorem eum tempore voluptatem id.', 'https://lorempixel.com/480/200/?71369', 'http://runte.com/quibusdam-temporibus-illum-ipsam-possimus-in-ducimus.html', '2020-01-15 06:36:41', '2020-01-15 06:36:41'),
(3, 13, 1, 'Madie Veum', 'Quisquam reprehenderit necessitatibus id.', 'https://lorempixel.com/480/200/?28877', 'http://www.conn.com/', '2020-01-15 06:36:41', '2020-01-15 06:36:41'),
(4, 14, 1, 'Leonel Nikolaus', 'Provident est asperiores consequatur ratione voluptatem facilis.', 'https://lorempixel.com/480/200/?89902', 'http://www.hintz.net/', '2020-01-15 06:36:41', '2020-01-15 06:36:41'),
(5, 15, 1, 'Dr. Joana Jenkins', 'Qui corporis eum quo omnis molestias architecto facilis.', 'https://lorempixel.com/480/200/?93083', 'http://gutmann.com/totam-eaque-velit-aliquam', '2020-01-15 06:36:41', '2020-01-15 06:36:41'),
(6, 16, 2, 'Magdalen Grimes', 'Eveniet enim ipsa ut quasi.', 'https://lorempixel.com/480/200/?18154', 'http://willms.com/ut-itaque-qui-suscipit-necessitatibus-soluta-optio.html', '2020-01-15 06:36:41', '2020-01-15 06:36:41'),
(7, 17, 2, 'Rhianna Haag Sr.', 'Explicabo quo dolor repudiandae explicabo omnis rem facilis.', 'https://lorempixel.com/480/200/?40492', 'http://runolfsson.com/', '2020-01-15 06:36:41', '2020-01-15 06:36:41'),
(8, 18, 2, 'Santina Runolfsson', 'Placeat optio delectus ut ex.', 'https://lorempixel.com/480/200/?70470', 'http://abbott.info/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(9, 19, 2, 'Logan Nicolas', 'Autem sed nulla aut officiis.', 'https://lorempixel.com/480/200/?16392', 'https://wisozk.com/nobis-enim-dolorem-est-illo-corrupti.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(10, 20, 2, 'Jasen Cruickshank', 'Vitae consequuntur distinctio voluptatem omnis excepturi non.', 'https://lorempixel.com/480/200/?35291', 'http://mitchell.com/ex-commodi-atque-consequuntur-officia-sunt-numquam.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(11, 21, 3, 'Reginald Cole I', 'Quasi quia non quidem sed molestias vero.', 'https://lorempixel.com/480/200/?93123', 'http://marks.com/voluptatibus-quia-aut-occaecati-sequi-temporibus-autem-et', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(12, 22, 3, 'Brent Lind', 'Enim libero cupiditate qui animi.', 'https://lorempixel.com/480/200/?18703', 'http://volkman.biz/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(13, 23, 3, 'Mrs. Sabryna Murazik', 'Voluptatum repellat dolorem eius rem ea harum in enim.', 'https://lorempixel.com/480/200/?10047', 'http://www.cruickshank.com/possimus-architecto-voluptatem-at-labore-reiciendis-nostrum', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(14, 24, 3, 'Fleta Botsford', 'Tenetur quas dignissimos atque qui dolores beatae.', 'https://lorempixel.com/480/200/?38354', 'http://www.cruickshank.com/deleniti-culpa-maiores-atque-dolorum-vitae-nesciunt.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(15, 25, 3, 'Dr. Hillard Barrows Jr.', 'Voluptates consequuntur quisquam odio dolorum consequatur expedita perferendis voluptas.', 'https://lorempixel.com/480/200/?93550', 'http://www.stroman.net/quam-quia-aut-eveniet-ex-numquam-sint', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(16, 26, 4, 'Max Barrows', 'Pariatur et alias quas nostrum consectetur omnis adipisci et.', 'https://lorempixel.com/480/200/?15600', 'https://www.walker.biz/nobis-labore-qui-ut-aut', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(17, 27, 4, 'Aleen Hirthe', 'Et totam nulla et quisquam quo.', 'https://lorempixel.com/480/200/?70602', 'http://www.yost.com/odit-animi-consequuntur-aut-porro-quisquam', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(18, 28, 4, 'Prof. Lisa Bartoletti', 'Enim officia incidunt eos cupiditate quia ad nobis.', 'https://lorempixel.com/480/200/?80704', 'http://herman.com/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(19, 29, 4, 'Mike Haag Sr.', 'Placeat nihil ad molestiae quod.', 'https://lorempixel.com/480/200/?21999', 'http://barrows.info/necessitatibus-minus-nam-expedita-ut', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(20, 30, 4, 'Rosalind Kautzer', 'Laudantium vero amet consequatur ipsam neque exercitationem in.', 'https://lorempixel.com/480/200/?16835', 'http://hoeger.com/suscipit-dolorem-exercitationem-accusantium-est-atque-minus-vel', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(21, 31, 5, 'Ms. Dasia Reilly', 'Iure adipisci omnis repudiandae ut quos quas repudiandae.', 'https://lorempixel.com/480/200/?21011', 'http://rohan.info/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(22, 32, 5, 'Orie Kertzmann', 'Deserunt error ut qui qui ea.', 'https://lorempixel.com/480/200/?77506', 'http://www.becker.com/quos-dolorem-dolores-quos-animi-dolorum-et-quisquam', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(23, 33, 5, 'Roma Mayert', 'Voluptatem dicta ut voluptas accusamus dolorem quia excepturi.', 'https://lorempixel.com/480/200/?78975', 'http://www.haley.com/sequi-reprehenderit-sint-est-omnis-et-ipsam-ratione', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(24, 34, 5, 'Darby Heathcote MD', 'Quae quidem blanditiis omnis.', 'https://lorempixel.com/480/200/?62506', 'http://ebert.biz/officia-ipsa-in-saepe.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(25, 35, 5, 'Prof. Liana Bartell Sr.', 'Facere sapiente voluptas distinctio corrupti omnis blanditiis dignissimos.', 'https://lorempixel.com/480/200/?47675', 'http://howe.com/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(26, 36, 6, 'Camron Weissnat', 'Possimus animi ut ipsa illum ipsam labore.', 'https://lorempixel.com/480/200/?80069', 'http://skiles.com/veniam-ut-sit-et-quia-at-alias-consequuntur.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(27, 37, 6, 'Ofelia Swift MD', 'Numquam sed in quam sequi voluptatem nulla quia et.', 'https://lorempixel.com/480/200/?60237', 'http://www.schaden.com/dolorem-quis-voluptatem-quam-et-error-nemo-consequatur-aliquid', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(28, 38, 6, 'Callie Smith', 'Dolor molestiae ratione in neque quo.', 'https://lorempixel.com/480/200/?37347', 'https://www.stehr.com/quia-deleniti-quidem-velit-praesentium-quo-maxime', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(29, 39, 6, 'Francesca Larkin Jr.', 'Voluptas similique dolore provident.', 'https://lorempixel.com/480/200/?12590', 'http://towne.com/ad-voluptate-fuga-illo-reprehenderit-architecto-dolores-eum.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(30, 40, 6, 'Verona Murphy', 'Voluptatem enim aut accusantium.', 'https://lorempixel.com/480/200/?46481', 'http://reichel.com/in-recusandae-id-sed-temporibus', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(31, 41, 7, 'Gudrun Swift Jr.', 'Et ut amet qui veniam et reiciendis et.', 'https://lorempixel.com/480/200/?44464', 'http://www.donnelly.com/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(32, 42, 7, 'Vesta Abbott', 'Quas iusto quis nam qui ea sit amet fugiat.', 'https://lorempixel.com/480/200/?66408', 'http://www.stiedemann.net/deserunt-rem-eveniet-nisi-est-occaecati-molestiae-ratione-ratione', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(33, 43, 7, 'Rusty Walter', 'Officiis distinctio non vel necessitatibus quos error adipisci.', 'https://lorempixel.com/480/200/?63627', 'http://borer.org/qui-fugiat-sed-esse-fugit-magnam-temporibus', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(34, 44, 7, 'Della Reilly', 'Pariatur maxime consequatur sit inventore ea inventore perferendis.', 'https://lorempixel.com/480/200/?72520', 'http://stracke.com/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(35, 45, 7, 'Marc Padberg', 'Maxime eos nostrum ipsum eos ut quia.', 'https://lorempixel.com/480/200/?12562', 'http://www.ernser.com/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(36, 46, 8, 'Mr. Wellington Jast', 'Nesciunt quidem sequi ut commodi earum.', 'https://lorempixel.com/480/200/?56000', 'https://www.considine.com/consequuntur-illo-alias-fugiat-neque-eos', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(37, 47, 8, 'Prof. Erwin Schoen', 'Neque quibusdam eos voluptatibus voluptatem ut harum.', 'https://lorempixel.com/480/200/?16329', 'https://www.kutch.com/expedita-porro-odit-nisi-sunt-accusantium', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(38, 48, 8, 'Mr. Kacey Mosciski Jr.', 'Rerum velit maxime voluptas sit accusantium provident.', 'https://lorempixel.com/480/200/?11638', 'https://www.jaskolski.com/mollitia-et-earum-enim-laudantium', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(39, 49, 8, 'Sherwood Stokes', 'Cupiditate soluta soluta ut atque pariatur aliquid.', 'https://lorempixel.com/480/200/?28138', 'https://www.yundt.com/et-quis-molestiae-dolore-ad-hic-qui', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(40, 50, 8, 'Valentin Keebler IV', 'Nemo quidem at est quis rerum.', 'https://lorempixel.com/480/200/?57496', 'http://hayes.biz/odio-omnis-explicabo-numquam-sequi-ducimus-quisquam-sit', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(41, 51, 9, 'Prof. Heaven Goyette I', 'At laborum non et temporibus.', 'https://lorempixel.com/480/200/?76192', 'http://www.muller.com/cum-aut-nihil-qui.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(42, 52, 9, 'Gudrun Kihn', 'Non voluptatibus dicta velit velit fugiat exercitationem voluptas.', 'https://lorempixel.com/480/200/?81245', 'http://mitchell.com/assumenda-officia-perferendis-doloribus-ex', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(43, 53, 9, 'Jessie Reilly', 'Magnam dolores necessitatibus porro non sed incidunt totam impedit.', 'https://lorempixel.com/480/200/?15084', 'http://www.harber.net/ratione-voluptas-hic-occaecati-asperiores-voluptas-quibusdam-a.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(44, 54, 9, 'Alek Pfeffer', 'Consequatur quos eligendi itaque officia ut.', 'https://lorempixel.com/480/200/?23874', 'http://www.anderson.com/alias-enim-excepturi-magnam-doloremque-vitae-inventore-laudantium-eius', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(45, 55, 9, 'Mr. Dee Keeling II', 'Saepe nihil fuga voluptatem rerum a fugiat debitis.', 'https://lorempixel.com/480/200/?99248', 'http://www.powlowski.com/autem-qui-in-reiciendis-minus', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(46, 56, 10, 'Shania Kohler', 'Consequatur velit nulla necessitatibus et nemo assumenda nihil.', 'https://lorempixel.com/480/200/?98902', 'http://www.pollich.com/omnis-et-reprehenderit-distinctio-aut', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(47, 57, 10, 'Alf Cummerata V', 'Deserunt velit exercitationem omnis non et quas totam.', 'https://lorempixel.com/480/200/?22458', 'http://welch.net/', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(48, 58, 10, 'Eleanora Hackett', 'Quo voluptatem mollitia dolorum corporis nihil.', 'https://lorempixel.com/480/200/?38588', 'http://www.shields.com/harum-facilis-suscipit-quos-autem-non-cumque-ex.html', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(49, 59, 10, 'Trevor Casper', 'Consequatur ipsum eos sequi libero aspernatur.', 'https://lorempixel.com/480/200/?93406', 'http://schuppe.biz/nobis-eum-rerum-mollitia-nisi', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(50, 60, 10, 'Bud Ortiz', 'Amet et quaerat aspernatur qui temporibus.', 'https://lorempixel.com/480/200/?69316', 'https://www.dare.info/in-soluta-sequi-aut-eligendi-et-qui-mollitia-incidunt', '2020-01-15 06:36:42', '2020-01-15 06:36:42'),
(51, 1, 11, '1', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.24 (1).jpeg', NULL, '2020-01-15 07:36:19', '2020-01-15 07:36:19'),
(52, 2, 11, '2', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.24 (2).jpeg', NULL, '2020-01-15 07:36:35', '2020-01-15 07:36:35'),
(53, 3, 11, '3', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.24.jpeg', NULL, '2020-01-15 07:36:51', '2020-01-15 07:36:51'),
(54, 4, 11, '4', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.25 (1).jpeg', NULL, '2020-01-15 07:37:06', '2020-01-15 07:37:06'),
(55, 5, 11, '5', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.25.jpeg', NULL, '2020-01-15 07:37:22', '2020-01-15 07:37:22'),
(56, 6, 11, '6', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.26 (1).jpeg', NULL, '2020-01-15 07:37:37', '2020-01-15 07:37:37'),
(57, 7, 11, '7', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.26 (2).jpeg', NULL, '2020-01-15 07:37:52', '2020-01-15 07:37:52'),
(58, 8, 11, '8', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.26.jpeg', NULL, '2020-01-15 07:38:07', '2020-01-15 07:38:07'),
(59, 9, 11, '9', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.27 (1).jpeg', NULL, '2020-01-15 07:38:26', '2020-01-15 07:38:26'),
(60, 10, 11, '10', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.27 (2).jpeg', NULL, '2020-01-15 07:38:52', '2020-01-15 07:38:52'),
(61, 11, 11, '11', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.27.jpeg', NULL, '2020-01-15 07:39:07', '2020-01-15 07:39:07'),
(62, 12, 11, '12', NULL, 'uploads/WhatsApp Image 2020-01-14 at 12.47.28.jpeg', NULL, '2020-01-15 07:39:20', '2020-01-15 07:39:20'),
(63, 1, 12, '1', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.48.57 (1).jpeg', NULL, '2020-01-15 07:39:45', '2020-01-15 07:39:45'),
(64, 2, 12, '2', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.48.57 (2).jpeg', NULL, '2020-01-15 07:40:04', '2020-01-15 07:40:04'),
(65, 3, 12, '3', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.48.58 (1).jpeg', NULL, '2020-01-15 07:40:17', '2020-01-15 07:40:17'),
(66, 4, 12, '4', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.48.58 (2).jpeg', NULL, '2020-01-15 07:40:32', '2020-01-15 07:40:32'),
(67, 5, 12, '5', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.48.58.jpeg', NULL, '2020-01-15 07:40:46', '2020-01-15 07:40:46'),
(68, 6, 12, '6', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.48.59 (1).jpeg', NULL, '2020-01-15 07:41:02', '2020-01-15 07:41:02'),
(69, 7, 12, '7', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.48.59.jpeg', NULL, '2020-01-15 07:41:34', '2020-01-15 07:41:34'),
(70, 8, 12, '8', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.49.00 (1).jpeg', NULL, '2020-01-15 07:41:47', '2020-01-15 07:41:47'),
(71, 9, 12, '9', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.49.00 (2).jpeg', NULL, '2020-01-15 07:42:05', '2020-01-15 07:42:05'),
(72, 10, 12, '10', NULL, 'uploads/WhatsApp Image 2020-01-15 at 20.49.00.jpeg', NULL, '2020-01-15 07:42:22', '2020-01-15 07:42:22'),
(73, 1, 27, '1', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.04.jpeg', NULL, '2020-02-20 01:54:08', '2020-02-20 01:54:08'),
(74, 2, 27, '2', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.13.jpeg', NULL, '2020-02-20 01:54:31', '2020-02-20 01:54:31'),
(75, 3, 27, '3', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.05 (1).jpeg', NULL, '2020-02-20 01:56:17', '2020-02-20 01:56:17'),
(76, 4, 27, '4', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.05.jpeg', NULL, '2020-02-20 01:57:27', '2020-02-20 01:57:27'),
(77, 5, 27, '5', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.15.jpeg', NULL, '2020-02-20 01:59:06', '2020-02-20 01:59:06'),
(78, 6, 27, '6', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.17.jpeg', NULL, '2020-02-20 02:01:41', '2020-02-20 02:01:41'),
(79, 7, 27, '7', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.34.jpeg', NULL, '2020-02-20 02:02:11', '2020-02-20 02:02:11'),
(80, 8, 27, '8', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.18.jpeg', NULL, '2020-02-20 02:04:06', '2020-02-20 02:04:06'),
(81, 9, 27, '9', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.03.jpeg', NULL, '2020-02-20 02:04:49', '2020-02-20 02:04:49'),
(84, 12, 27, 'Family Photo', NULL, 'uploads/2.jpg', NULL, '2020-02-22 20:31:32', '2020-02-22 20:31:32'),
(83, 11, 27, '11', NULL, 'uploads/WhatsApp Image 2020-02-20 at 16.19.03 (1).jpeg', NULL, '2020-02-20 02:09:07', '2020-02-20 02:09:07'),
(85, 13, 11, 'Cover', NULL, 'uploads/IMG-20191107-WA0053.jpg', NULL, '2020-02-22 20:59:29', '2020-02-22 21:00:08'),
(86, 1, 14, '1', NULL, 'uploads/IMG_20191027_110156_resize.jpg', NULL, '2020-02-22 21:08:42', '2020-02-22 21:08:42'),
(87, 2, 14, '2', NULL, 'uploads/IMG_20191027_112212_1_resize.jpg', NULL, '2020-02-22 21:08:54', '2020-02-22 21:08:54'),
(88, 3, 14, '3', NULL, 'uploads/IMG-20191027-WA0032_resize.jpg', NULL, '2020-02-22 21:09:05', '2020-02-22 21:09:05'),
(89, 4, 14, '4', NULL, 'uploads/IMG-20191027-WA0041_resize.jpg', NULL, '2020-02-22 21:09:16', '2020-02-22 21:09:16'),
(90, 5, 14, '5', NULL, 'uploads/IMG-20191027-WA0056_resize.jpg', NULL, '2020-02-22 21:09:29', '2020-02-22 21:09:29'),
(91, 6, 14, '6', NULL, 'uploads/IMG-20191027-WA0063_resize.jpg', NULL, '2020-02-22 21:09:48', '2020-02-22 21:09:48'),
(92, 7, 14, '7', NULL, 'uploads/IMG-20191028-WA0048_resize.jpg', NULL, '2020-02-22 21:10:04', '2020-02-22 21:10:04'),
(93, 14, 11, '14', NULL, 'uploads/IMG_20191212_153405_resize.jpg', NULL, '2020-02-22 21:12:52', '2020-02-22 21:12:52'),
(94, 1, 31, '1', NULL, 'uploads/IMG_20190928_120144_resize.jpg', NULL, '2020-02-22 21:14:03', '2020-02-22 21:14:03'),
(95, 2, 31, '2', NULL, 'uploads/IMG_20190928_130958_resize.jpg', NULL, '2020-02-22 21:14:15', '2020-02-22 21:14:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `album_picture`
--
ALTER TABLE `album_picture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_picture_album_id_index` (`album_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `album_picture`
--
ALTER TABLE `album_picture`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
