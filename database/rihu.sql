-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 07:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rihu`
--

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `user_id`, `quantity`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(23, 2, 12, 1, NULL, '2021-02-06 05:35:20', '2021-02-08 03:51:01'),
(27, 3, 1, 1, NULL, '2021-02-09 23:27:45', '2021-02-09 23:27:45'),
(33, NULL, 1, 41, 1, '2021-04-21 07:34:53', '2021-04-21 07:34:53');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'men', '2021-04-13 04:40:11', '2021-04-14 21:07:01'),
(2, 'women', '2021-04-13 04:44:06', '2021-04-13 04:44:06'),
(3, 'kids', '2021-04-13 04:44:14', '2021-04-13 04:44:14'),
(4, 'home and leaving', '2021-04-13 04:44:28', '2021-04-14 19:51:32');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file`, `created_at`, `updated_at`) VALUES
(1, 'paneer.jpg', '2021-01-08 08:57:36', '2021-01-08 08:57:36'),
(3, 'cheese.jpeg', '2021-01-11 00:23:35', '2021-01-11 00:23:35'),
(4, 'dahi.jpg', '2021-01-11 01:39:11', '2021-01-11 01:39:11'),
(5, 'cheese-2.jpg', '2021-01-12 04:43:48', '2021-01-12 04:43:48'),
(6, 'cute-funny-Santa-cartoon-pictures-for-facebook-5801x4966.jpg', '2021-01-18 10:45:56', '2021-01-18 10:45:56'),
(7, 'dahi.jpg', '2021-01-31 01:38:43', '2021-01-31 01:38:43'),
(38, '30butter.jpg', '2021-04-14 07:22:11', '2021-04-14 07:22:11'),
(39, '33butter.jpg', '2021-04-14 21:05:39', '2021-04-14 21:05:39'),
(40, '34milk.jpg', '2021-04-14 21:48:22', '2021-04-14 21:48:22'),
(41, '35butter.jpg', '2021-04-14 23:22:41', '2021-04-14 23:22:41'),
(42, '35cake.jpg', '2021-04-14 23:22:41', '2021-04-14 23:22:41'),
(43, '35juice.jpg', '2021-04-14 23:23:27', '2021-04-14 23:23:27'),
(44, '38butter.jpg', '2021-04-21 05:15:01', '2021-04-21 05:15:01'),
(45, '39juice.jpg', '2021-04-21 05:32:06', '2021-04-21 05:32:06'),
(46, '40juice.jpg', '2021-04-21 06:27:49', '2021-04-21 06:27:49'),
(47, '41juice.jpg', '2021-04-21 06:31:26', '2021-04-21 06:31:26'),
(48, '42cake.jpg', '2021-04-23 07:07:03', '2021-04-23 07:07:03'),
(49, '43butter.jpg', '2021-04-23 23:36:53', '2021-04-23 23:36:53');

-- --------------------------------------------------------

--
-- Table structure for table `image_product`
--

CREATE TABLE `image_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `image_product`
--

INSERT INTO `image_product` (`id`, `image_id`, `product_id`, `created_at`, `updated_at`) VALUES
(3, 4, 4, NULL, NULL),
(4, 5, 5, NULL, NULL),
(6, 3, 3, NULL, NULL),
(7, 1, 1, NULL, NULL),
(14, 13, 5, NULL, NULL),
(15, 14, 5, NULL, NULL),
(48, 38, 30, NULL, NULL),
(49, 39, 33, NULL, NULL),
(50, 40, 34, NULL, NULL),
(51, 41, 35, NULL, NULL),
(52, 42, 35, NULL, NULL),
(53, 43, 35, NULL, NULL),
(54, 44, 38, NULL, NULL),
(55, 45, 39, NULL, NULL),
(56, 46, 40, NULL, NULL),
(57, 47, 41, NULL, NULL),
(58, 48, 42, NULL, NULL),
(59, 49, 43, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_07_133552_create_roles_table', 1),
(5, '2021_01_07_133619_create_products_table', 1),
(6, '2021_01_07_133701_create_purchasers_table', 1),
(7, '2021_01_08_070905_create_images_table', 2),
(8, '2021_01_19_100014_create_tags_table', 3),
(9, '2021_01_21_035830_create_carts_table', 4),
(10, '2021_01_21_184505_create_wishlists_table', 5),
(11, '2021_01_30_135017_create_images_products_table', 6),
(12, '2021_02_03_111238_create_newsletters_table', 7),
(13, '2021_02_04_125652_create_orders_table', 8),
(14, '2021_02_07_095349_create_orderstatuses_table', 9),
(15, '2021_02_17_075916_create_enquiries_table', 10),
(16, '2021_04_13_091215_create_categories_table', 10),
(17, '2021_04_13_091453_create_sub_categories_table', 11),
(18, '2021_04_13_091540_create_sub_sub_categories_table', 12),
(19, '2021_04_13_095144_create_categories_table', 13),
(20, '2021_04_13_095241_create_sub_categories_table', 14),
(21, '2021_04_13_095447_create_sub_sub_categories_table', 14),
(22, '2021_04_21_080404_create_sizes_table', 15),
(23, '2021_04_21_090018_create_products_sizes_table', 16),
(24, '2021_04_21_103746_add_size_id_column_to_products_tables', 17),
(26, '2021_04_21_123523_add_size_id_column_to_carts_tables', 18),
(27, '2021_04_22_054024_add_size_id_column_to_orders_tables', 19),
(28, '2021_04_22_080933_add_size_id_column_to_purchasers_tables', 20),
(29, '2021_04_23_085637_add_size_id_column_to_wishlists_tables', 21),
(30, '2021_04_23_094435_create_ratings_table', 22),
(31, '2021_04_24_042602_remove_size_id_column_from_products-table', 23);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `rzp_order_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rzp_payment_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_mode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `orderstatus_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `size_id`, `rzp_order_id`, `rzp_payment_id`, `amount`, `payment_mode`, `orderstatus_id`, `created_at`, `updated_at`) VALUES
(1, 3, NULL, 'order_GYEZVIeE7Ys0nT', NULL, '60', NULL, NULL, '2021-02-06 03:41:07', '2021-02-06 03:41:07'),
(2, 3, NULL, 'order_GYEimA8KzgsT2m', NULL, '60', NULL, NULL, '2021-02-06 03:49:53', '2021-02-06 03:49:54'),
(3, 3, NULL, 'order_GYElAO54cNkBgM', NULL, '60', NULL, NULL, '2021-02-06 03:52:09', '2021-02-06 03:52:10'),
(4, 3, NULL, 'order_GYEpqJKmcP8FAH', NULL, '60', NULL, NULL, '2021-02-06 03:56:34', '2021-02-06 03:56:35'),
(5, 3, NULL, 'order_GYEuNombSKcUwl', NULL, '60', NULL, NULL, '2021-02-06 04:00:53', '2021-02-06 04:00:53'),
(6, 3, NULL, 'order_GYF0zUdMeBQJRX', NULL, '60', NULL, NULL, '2021-02-06 04:07:08', '2021-02-06 04:07:08'),
(7, 3, NULL, 'order_GYF38jGAFRuzzb', NULL, '60', NULL, NULL, '2021-02-06 04:09:10', '2021-02-06 04:09:11'),
(8, 3, NULL, 'order_GYF51Zb0o1W7dl', 'pay_GYF5RwNrELwXz4', '60', 'card', 5, '2021-02-06 04:10:57', '2021-02-13 15:00:14'),
(9, 3, NULL, 'order_GYFEqN56gBWvsM', 'pay_GYFFCfEKXgfASx', '100', 'card', 6, '2021-02-06 04:20:14', '2021-02-15 14:21:59'),
(10, 3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-06 04:22:56', '2021-02-06 04:22:56'),
(11, 3, NULL, 'order_GYFHgfvX6ia68c', NULL, '60', NULL, NULL, '2021-02-06 04:22:56', '2021-02-06 04:22:57'),
(12, 3, NULL, 'order_GYFIHceQodTAmV', NULL, '60', NULL, NULL, '2021-02-06 04:23:30', '2021-02-06 04:23:31'),
(13, 3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-06 04:23:30', '2021-02-06 04:23:30'),
(14, 3, NULL, 'order_GYFJWX4ee5Rsqa', NULL, '60', NULL, NULL, '2021-02-06 04:24:40', '2021-02-06 04:24:41'),
(15, 3, NULL, NULL, NULL, NULL, NULL, NULL, '2021-02-06 04:24:40', '2021-02-06 04:24:40'),
(16, 3, NULL, 'order_GYFc8XgDlJO46N', 'pay_GYFeXBHc47Dv7Z', '160', 'card', 6, '2021-02-06 04:42:18', '2021-02-15 14:41:25'),
(17, 2, NULL, NULL, NULL, '10000', NULL, NULL, '2021-02-06 04:53:16', '2021-02-06 04:53:16'),
(18, 2, NULL, NULL, NULL, '10000', NULL, NULL, '2021-02-06 04:53:22', '2021-02-06 04:53:22'),
(19, 2, NULL, 'order_GYFoWAilW15U8M', 'pay_GYFon7Wv0pZCXZ', '10000', 'card', 2, '2021-02-06 04:54:01', '2021-02-06 04:54:21'),
(20, 2, NULL, 'order_GYFsAjN1IUPeKC', NULL, '160', NULL, NULL, '2021-02-06 04:57:29', '2021-02-06 04:57:29'),
(21, 2, NULL, 'order_GYFsRd0qcJFssj', NULL, '160', NULL, NULL, '2021-02-06 04:57:44', '2021-02-06 04:57:45'),
(22, 2, 2, 'order_GYFss4OZg8uKF1', 'pay_GYFtW0gUiIZdlf', '10060', 'card', 2, '2021-02-06 04:58:08', '2021-02-08 03:43:04'),
(23, 2, NULL, 'order_GZ1iXdCXHc9bao', NULL, '1000', NULL, 1, '2021-02-08 03:45:39', '2021-02-08 03:45:40'),
(24, 2, NULL, 'order_GZ1oMYKsGRyPj4', NULL, '1200', NULL, NULL, '2021-02-08 03:51:10', '2021-02-08 03:51:10'),
(25, 3, NULL, 'order_GZklMJL2QnPjHU', NULL, '100', NULL, NULL, '2021-02-09 23:49:32', '2021-02-09 23:49:33'),
(26, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 06:27:48', '2021-02-10 06:27:48'),
(27, 3, NULL, 'order_GZrYB7Wwr6huz5', NULL, '100', NULL, NULL, '2021-02-10 06:27:55', '2021-02-10 06:27:55'),
(28, 3, NULL, 'order_GZrYvieHDGNdpv', NULL, '100', NULL, NULL, '2021-02-10 06:28:37', '2021-02-10 06:28:38'),
(29, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 06:30:02', '2021-02-10 06:30:02'),
(30, 3, NULL, 'order_GZrafs2HwddCPX', NULL, '100', NULL, NULL, '2021-02-10 06:30:16', '2021-02-10 06:30:17'),
(31, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 06:31:50', '2021-02-10 06:31:50'),
(32, 3, NULL, 'order_GZrcW7YT53mUSc', NULL, '100', NULL, NULL, '2021-02-10 06:31:59', '2021-02-10 06:32:02'),
(33, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 06:34:29', '2021-02-10 06:34:29'),
(34, 3, NULL, 'order_GZrfLNtKI2IuVY', NULL, '100', NULL, NULL, '2021-02-10 06:34:42', '2021-02-10 06:34:42'),
(35, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 06:37:05', '2021-02-10 06:37:05'),
(36, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 06:38:02', '2021-02-10 06:38:02'),
(37, 3, NULL, 'order_GZrixOPMVrKna5', NULL, '100', NULL, NULL, '2021-02-10 06:38:07', '2021-02-10 06:38:07'),
(38, 3, NULL, 'order_GZrk4GZID6qMNg', NULL, '100', NULL, NULL, '2021-02-10 06:39:08', '2021-02-10 06:39:11'),
(39, 3, NULL, 'order_GZswQglQVcFuuf', NULL, '100', NULL, NULL, '2021-02-10 07:49:33', '2021-02-10 07:49:35'),
(40, 3, NULL, 'order_GZsxQvZAjc31uL', NULL, '100', NULL, NULL, '2021-02-10 07:50:30', '2021-02-10 07:50:33'),
(41, 3, NULL, 'order_GZtBls07VTbsW4', NULL, '100', NULL, NULL, '2021-02-10 08:04:04', '2021-02-10 08:04:10'),
(42, 3, NULL, 'order_GZtMYT2qIh8rjd', NULL, '100', NULL, NULL, '2021-02-10 08:14:18', '2021-02-10 08:14:18'),
(43, 3, NULL, 'order_GZtmyNGPAbRC8o', NULL, '100', NULL, NULL, '2021-02-10 08:39:18', '2021-02-10 08:39:19'),
(44, 3, NULL, 'order_GZtsudppBjsXdw', NULL, '100', NULL, NULL, '2021-02-10 08:44:55', '2021-02-10 08:44:57'),
(45, 3, NULL, 'order_GZtuwcXFPdY7kQ', NULL, '100', NULL, NULL, '2021-02-10 08:46:49', '2021-02-10 08:46:53'),
(46, 3, NULL, 'order_GZtv0nzni6UawZ', NULL, '100', NULL, NULL, '2021-02-10 08:46:53', '2021-02-10 08:46:56'),
(47, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 08:55:46', '2021-02-10 08:55:46'),
(48, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 08:56:16', '2021-02-10 08:56:16'),
(49, 3, NULL, 'order_GZu6DTtJOxkQsO', NULL, '100', NULL, NULL, '2021-02-10 08:57:28', '2021-02-10 08:57:32'),
(50, 3, NULL, NULL, NULL, '100', NULL, NULL, '2021-02-10 08:59:51', '2021-02-10 08:59:51'),
(51, 3, NULL, 'order_GZu9I3HOMBdKcu', NULL, '100', NULL, NULL, '2021-02-10 09:00:19', '2021-02-10 09:00:27'),
(52, 4, NULL, 'order_H1pqtiqkVgn3yJ', NULL, '7', NULL, 1, '2021-04-21 23:00:18', '2021-04-21 23:00:18'),
(53, 4, NULL, 'order_H2FqSmWM0j7iCf', NULL, '7', NULL, 1, '2021-04-23 00:25:56', '2021-04-23 00:25:57'),
(54, 4, NULL, 'order_H2GD50exM1oo7V', 'pay_H2GEjYCoP42ucv', '1', 'card', 2, '2021-04-23 00:47:21', '2021-04-23 00:49:49'),
(55, 4, NULL, 'order_H2Mhkqa6SCOSmS', 'pay_H2MioGUBujBUjH', '12', 'card', 2, '2021-04-23 07:08:31', '2021-04-23 07:12:02'),
(56, 4, NULL, 'order_H2cuYNfe5jq6F1', 'pay_H2cvHzZkTzO6P6', '12', 'card', 5, '2021-04-23 22:59:44', '2021-04-23 23:05:36'),
(57, 4, NULL, 'order_H2d1el6uKLYc1y', 'pay_H2d2UbJ11SGdcd', '24', 'card', 2, '2021-04-23 23:06:28', '2021-04-23 23:14:21'),
(58, 4, NULL, 'order_H2dYdSqI88vREl', 'pay_H2dZOkMa3LBhjd', '200', 'card', 2, '2021-04-23 23:37:41', '2021-04-23 23:39:24');

-- --------------------------------------------------------

--
-- Table structure for table `orderstatuses`
--

CREATE TABLE `orderstatuses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderstatuses`
--

INSERT INTO `orderstatuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Not Confirmed', NULL, NULL),
(2, 'Confirmed', NULL, NULL),
(3, 'Dispatched', NULL, NULL),
(4, 'Delivered', NULL, NULL),
(5, 'Cancellation in progress', NULL, NULL),
(6, 'Return/Refund Confirmed', NULL, NULL),
(7, 'Return/Refund in Progress', NULL, NULL),
(8, 'Return/Refund Delivered', NULL, NULL),
(9, 'Cancelled', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `sub_sub_category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` int(11) DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `amount_unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tag_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `sub_category_id`, `sub_sub_category_id`, `name`, `product_code`, `description`, `quantity`, `quantity_unit`, `amount`, `amount_unit`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 2, 9, 8, 'cake', NULL, 'ftftftf', '1', 'kg', '1', 'kg', 1, '2021-04-14 23:22:40', '2021-04-14 23:22:40'),
(3, NULL, NULL, NULL, 'Cheese', NULL, 'It comprises proteins and fat from milk, usually the milk of cows, buffalo, goats, or sheep.', '0', 'kg', '100', 'kg', 1, '2021-01-11 00:23:35', '2021-02-06 04:58:50'),
(4, NULL, NULL, NULL, 'Curd', NULL, 'Curd is obtained by coagulating milk in a sequential process called curdling.', '998', 'kg', '60', 'kg', 2, '2021-01-11 01:39:11', '2021-02-06 04:44:44'),
(5, 2, 4, 4, 'milk', NULL, 'grdgrd', '1', 'kg', '1', 'kg', NULL, '2021-04-14 21:48:22', '2021-04-14 21:48:22'),
(39, 2, 9, 8, 'juice', 123, 'cxdscs', '1', 'kg', '1', 'kg', 1, '2021-04-21 05:32:06', '2021-04-21 05:32:06'),
(41, 1, 1, 6, 'butter', 123, 'hgvhgv', '0', 'kg', '1', 'kg', 1, '2021-04-21 06:31:26', '2021-04-23 00:49:01'),
(42, 1, 1, 6, 'pants', 123, 'demo', '0', 'kg', '12', 'kg', 1, '2021-04-23 07:07:03', '2021-04-23 23:07:21'),
(43, 1, 1, 6, 'printed-top', 123, 'demo1', '4', 'piece', '100', 'piece', 2, '2021-04-23 23:36:53', '2021-04-23 23:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `product_size`
--

CREATE TABLE `product_size` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_size`
--

INSERT INTO `product_size` (`id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(3, 41, 1, NULL, NULL),
(4, 41, 2, NULL, NULL),
(5, 42, 1, NULL, NULL),
(6, 42, 2, NULL, NULL),
(7, 42, 3, NULL, NULL),
(8, 43, 5, NULL, NULL),
(9, 43, 9, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchasers`
--

CREATE TABLE `purchasers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `purchasers`
--

INSERT INTO `purchasers` (`id`, `product_id`, `size_id`, `quantity`, `order_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 1, 8, 3, '2021-02-06 04:11:27', '2021-02-06 04:11:27'),
(2, 3, 2, 1, 9, 3, '2021-02-06 04:20:42', '2021-02-06 04:20:42'),
(3, 4, 3, 1, 16, 3, '2021-02-06 04:44:44', '2021-02-06 04:44:44'),
(4, 1, 2, 1, 16, 3, '2021-02-06 04:44:44', '2021-02-06 04:44:44'),
(5, 1, 3, 100, 19, 2, '2021-02-06 04:54:21', '2021-02-06 04:54:21'),
(6, 5, 1, 1, 22, 2, '2021-02-06 04:58:50', '2021-02-06 04:58:50'),
(7, 3, 2, 100, 22, 2, '2021-02-06 04:58:50', '2021-02-06 04:58:50'),
(8, 41, 3, 1, 54, 4, '2021-04-23 00:49:01', '2021-04-23 00:49:01'),
(9, 42, 2, 1, 55, 4, '2021-04-23 07:09:36', '2021-04-23 07:09:36'),
(10, 42, 3, 1, 56, 4, '2021-04-23 23:00:31', '2021-04-23 23:00:31'),
(11, 42, 2, 2, 57, 4, '2021-04-23 23:07:21', '2021-04-23 23:07:21'),
(12, 43, 5, 2, 58, 4, '2021-04-23 23:38:31', '2021-04-23 23:38:31');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `product_id`, `rating`, `created_at`, `updated_at`) VALUES
(1, 4, 41, 2.5, '2021-04-23 07:02:13', '2021-04-23 07:02:13'),
(2, 4, 42, 4, '2021-04-23 07:13:38', '2021-04-23 07:13:38'),
(3, 4, 42, 4, '2021-04-23 07:13:40', '2021-04-23 07:13:40'),
(4, 4, 42, 3, '2021-04-23 07:13:44', '2021-04-23 07:13:44'),
(5, 4, 42, 5, '2021-04-23 07:14:08', '2021-04-23 07:14:08'),
(6, 4, 42, 5, '2021-04-23 23:07:48', '2021-04-23 23:07:48'),
(7, 4, 42, 5, '2021-04-23 23:07:50', '2021-04-23 23:07:50'),
(8, 4, 43, 4.5, '2021-04-23 23:38:51', '2021-04-23 23:38:51'),
(9, 4, 43, 5, '2021-04-23 23:38:52', '2021-04-23 23:38:52'),
(10, 4, 43, 5, '2021-04-23 23:38:54', '2021-04-23 23:38:54'),
(11, 4, 43, 5, '2021-04-23 23:40:03', '2021-04-23 23:40:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Customer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE `sizes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'xs', '2021-04-21 02:48:58', '2021-04-21 02:54:48'),
(2, 's', '2021-04-21 02:49:13', '2021-04-21 02:49:13'),
(3, 'm', '2021-04-21 02:49:22', '2021-04-21 02:49:22'),
(4, 'l', '2021-04-21 02:49:31', '2021-04-21 02:54:58'),
(5, 'xl', '2021-04-21 02:55:15', '2021-04-21 02:55:15'),
(6, '2xl', '2021-04-21 02:55:22', '2021-04-21 02:55:22'),
(9, '3xl', '2021-04-21 02:56:13', '2021-04-21 02:56:31');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`id`, `category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'formal shirt', '2021-04-13 05:25:31', '2021-04-14 21:07:23'),
(2, 1, 'jackets', '2021-04-13 05:25:55', '2021-04-14 19:56:39'),
(3, 3, 'boys clothing', '2021-04-13 05:26:26', '2021-04-13 05:26:26'),
(8, 2, 'top', '2021-04-14 23:19:41', '2021-04-14 23:19:41'),
(9, 2, 'plazo', '2021-04-14 23:20:14', '2021-04-14 23:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `sub_sub_categories`
--

CREATE TABLE `sub_sub_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `sub_category_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_sub_categories`
--

INSERT INTO `sub_sub_categories` (`id`, `category_id`, `sub_category_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 3, 3, 't-shirts', '2021-04-13 05:49:36', '2021-04-13 05:49:36'),
(4, 2, 4, 'printed tops', '2021-04-14 20:11:34', '2021-04-14 20:12:15'),
(6, 1, 1, 'cotton shirt', '2021-04-14 21:01:42', '2021-04-14 21:07:36'),
(7, 2, 7, 'printed top', '2021-04-14 23:19:11', '2021-04-14 23:19:11'),
(8, 2, 9, 'printed plazo', '2021-04-14 23:20:36', '2021-04-14 23:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'trending', '2021-04-20 23:44:41', '2021-04-20 23:56:24'),
(2, 'mostview', '2021-04-20 23:45:02', '2021-04-20 23:56:38'),
(3, 'featured', '2021-04-20 23:45:10', '2021-04-20 23:56:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `mobile`, `city`, `address`, `pincode`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nilay Gajjar', 'nilay@gmail.com', NULL, '$2y$10$oiPifpNxG4Bmo6rL5XmdOew3H.leapgQuIOnotGRNpypNwIEKR2Ey', '9574995119', NULL, NULL, NULL, 1, NULL, '2021-01-07 12:29:50', '2021-01-07 12:29:50'),
(2, 'Chavda Chnadrakant', 'chavda.ahm@gmail.com', NULL, '$2y$10$1drEjVS3ewLppxqxoCieoOWUE.aqlWrKqJMMCF2dRnT7WON74uFL2', '01478523690', 'Ahmedabad', 'Harsh flat, nr. kumkum vidhyalaya, ghodasar, Ahmedabad', '380003', 2, NULL, '2021-01-11 07:44:32', '2021-01-11 07:44:32'),
(3, 'Vikas Shah', 'vikas@gmail.com', NULL, '$2y$10$1l9hLv8KvRIf3UMmqlA.jObHk9fO6O4vB.bpgDEwZcBkjJM6ZG.Ay', '07894561230', 'Ahmedabad', '20 Tejendra society,  nirant cross road, vastral, ahmedabad', '382418', 2, NULL, '2021-01-11 08:51:11', '2021-01-11 08:51:11'),
(4, 'vidhi', 'vidhigajjar@nocat.tech', NULL, '$2y$10$Hi4L39Gey9i3R5S/sniFGucf0IhpEVHODVKt8nt7J590v.DCPAJXC', NULL, NULL, NULL, NULL, NULL, NULL, '2021-04-13 00:42:01', '2021-04-13 00:42:01');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `size_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlists`
--

INSERT INTO `wishlists` (`id`, `user_id`, `product_id`, `size_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, NULL, '2021-01-21 13:44:29', '2021-01-21 13:44:29'),
(2, 2, 3, NULL, '2021-01-21 13:47:04', '2021-01-21 13:47:04'),
(11, 4, 39, 1, '2021-04-21 05:37:11', '2021-04-21 05:37:11');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image_product`
--
ALTER TABLE `image_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderstatuses`
--
ALTER TABLE `orderstatuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_size`
--
ALTER TABLE `product_size`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchasers`
--
ALTER TABLE `purchasers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `image_product`
--
ALTER TABLE `image_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `orderstatuses`
--
ALTER TABLE `orderstatuses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `product_size`
--
ALTER TABLE `product_size`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `purchasers`
--
ALTER TABLE `purchasers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sub_sub_categories`
--
ALTER TABLE `sub_sub_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
