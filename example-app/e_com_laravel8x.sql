-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2022 at 09:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_com_laravel8x`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `qty` varchar(10) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `status` int(2) DEFAULT 1 COMMENT '1:add to cart 2:order 3:remove'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`id`, `product_id`, `qty`, `user_id`, `created_at`, `status`) VALUES
(1, 1, '4', 2, '2022-01-13 08:56:53', 2),
(2, 1, '1', 2, '2022-01-16 07:24:19', 2),
(3, 2, '1', 2, '2022-01-16 07:26:54', 2),
(4, 3, '1', 2, '2022-01-16 07:27:14', 2),
(5, 1, '2', 2, '2022-01-16 07:31:03', 2),
(6, 2, '1', 2, '2022-01-16 07:31:05', 2),
(7, 3, '1', 2, '2022-01-16 07:31:08', 2);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `star` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `status` int(3) DEFAULT 1 COMMENT '1:on 2:delete',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `img`, `title`, `subtitle`, `star`, `price`, `status`, `created_at`, `created_by`) VALUES
(1, 'product1.png', '<div class=\"tag new\">\r\n   <span>new</span>\r\n</div>', 'stylish dress for women', '5', '30', 1, '2022-01-13 06:55:50', NULL),
(2, 'product2.png', NULL, 'stylish dress for women', '5', '30', 1, '2022-01-13 06:57:07', NULL),
(3, 'product3.png', '<div class=\"tag percent\">\r\n                                <span>15%</span>\r\n                            </div>', 'stylish dress for women', '5', '40', 1, '2022-01-13 06:57:07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_detail`
--

CREATE TABLE `transaction_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `qty` varchar(50) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `paymentId` varchar(500) DEFAULT NULL,
  `token` varchar(500) DEFAULT NULL,
  `PayerID` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transaction_detail`
--

INSERT INTO `transaction_detail` (`id`, `product_id`, `product_name`, `qty`, `price`, `create_by`, `create_at`, `paymentId`, `token`, `PayerID`) VALUES
(1, 1, 'stylish dress for women', '4', '30', 2, '2022-01-16 07:21:52', 'PAYID-MHR4O4Q22H931704A859803K', 'EC-3KH47638SJ084531F', 'UW5KLTHXVF69N'),
(2, 1, 'stylish dress for women', '1', '30', 2, '2022-01-16 07:24:47', 'PAYID-MHR4QLY4MH40431RX550545K', 'EC-54W91924AV688294U', 'UW5KLTHXVF69N'),
(3, 2, 'stylish dress for women', '1', '30', 2, '2022-01-16 07:27:51', 'PAYID-MHR4RXQ2BY70513R9055084M', 'EC-6JP26826SE767263T', 'UW5KLTHXVF69N'),
(4, 3, 'stylish dress for women', '1', '40', 2, '2022-01-16 07:27:51', 'PAYID-MHR4RXQ2BY70513R9055084M', 'EC-6JP26826SE767263T', 'UW5KLTHXVF69N'),
(5, 1, 'stylish dress for women', '2', '30', 2, '2022-01-16 07:32:10', 'PAYID-MHR4TZQ1KC9819039702931J', 'EC-3LT32308DR136090J', 'UW5KLTHXVF69N'),
(6, 2, 'stylish dress for women', '1', '30', 2, '2022-01-16 07:32:11', 'PAYID-MHR4TZQ1KC9819039702931J', 'EC-3LT32308DR136090J', 'UW5KLTHXVF69N'),
(7, 3, 'stylish dress for women', '1', '40', 2, '2022-01-16 07:32:11', 'PAYID-MHR4TZQ1KC9819039702931J', 'EC-3LT32308DR136090J', 'UW5KLTHXVF69N');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(2) DEFAULT 1 COMMENT '1:user 2:admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'riki', 'riki@riki.mobi', NULL, '$2y$10$cckdULyErJkr6FddBTk.Yebc2NxQnjCObYlBw1dIYD572.l1gIknK', NULL, '2022-01-12 19:57:49', '2022-01-12 19:57:49', 2),
(2, 'test', 'test@riki.mobi', NULL, '$2y$10$aOM5IoAZXy3V.KwUZUVAcecb989OUHfhQfuFYLsnKS66/J5K7jnhO', NULL, '2022-01-13 01:01:40', '2022-01-13 01:01:40', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction_detail`
--
ALTER TABLE `transaction_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
