-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 06, 2021 at 09:05 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cafe_ex`
--

-- --------------------------------------------------------

--
-- Table structure for table `authentication_1`
--

DROP TABLE IF EXISTS `authentication_1`;
CREATE TABLE IF NOT EXISTS `authentication_1` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_USER` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_singup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `National_Code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Fathers_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_Of_Birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Place_Of_Birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sex` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Postal_Code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `State` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Plaque` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentication_1`
--

INSERT INTO `authentication_1` (`id`, `id_USER`, `name_singup`, `Fname`, `Lname`, `National_Code`, `Fathers_Name`, `Date_Of_Birth`, `Place_Of_Birth`, `Sex`, `Postal_Code`, `State`, `City`, `Address`, `Plaque`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '2', 'mahdi', 'علی', 'کاظمی', '0781252921', 'محمد', '12/22/2000', 'سبزوار', '1', '0987654321', '2', '43891', 'vbhnjftgyuj c cfhjfc rthjcftgh cdtuyhctryuj', '55', NULL, NULL, NULL),
(2, '3', 'mahdi', 'مهدی', 'کاظمی', '0781252921', 'محمد', '12/22/2000', 'سبزوار', '1', '0987654321', '16', '5961', 'lok,ewsdf ;wsf  o[pwsfdr 7 hgjhbc s i0 ke y j[frchino', '0254', NULL, NULL, NULL),
(3, '7', 'mahdi', 'as', 'as', '0791234567', 'محمد', '12/22/2000', 'سبزوار', '1', '0987654321', '7', '961', 'a;sk', '55', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `authentication_2`
--

DROP TABLE IF EXISTS `authentication_2`;
CREATE TABLE IF NOT EXISTS `authentication_2` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_USER` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_singup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bank_Name` int(11) NOT NULL,
  `Branch_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Branch_Code` int(11) NOT NULL,
  `Account_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Shaba_Namber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Card_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentication_2`
--

INSERT INTO `authentication_2` (`id`, `id_USER`, `name_singup`, `Bank_Name`, `Branch_Name`, `Branch_Code`, `Account_Number`, `Shaba_Namber`, `Card_Number`, `created_at`, `updated_at`) VALUES
(1, '2', 'mahdi', 4, 'مرکزی', 21, '6012547852145', 'IR00000000000005464654564', '321321321321321321', NULL, NULL),
(2, '3', 'mahdi', 1, 'مرکزی', 554, '6012547852145', 'IR00000000000005464654564', '321321321321321321', NULL, NULL),
(3, '7', 'mahdi', 10, 'مرکزی', 21, '11111111111111111111111', 'IR00000000000005464654564', '5464654564', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `authentication_3`
--

DROP TABLE IF EXISTS `authentication_3`;
CREATE TABLE IF NOT EXISTS `authentication_3` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_USER` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_singup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_face` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_face_and_card` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authentication_3`
--

INSERT INTO `authentication_3` (`id`, `id_USER`, `name_singup`, `image_face`, `image_card`, `image_face_and_card`) VALUES
(1, '2', 'mahdi', '/user/img/2_mahdi_image_face.jpg', '/user/img/2_mahdi_image_card.jpg', '/user/img/2_mahdi_image_face_and_card.jpg'),
(2, '3', 'mahdi', '/user/img/3_mahdi_image_face.jpg', '/user/img/3_mahdi_image_card.jpg', '/user/img/3_mahdi_image_face_and_card.jpg'),
(3, '7', 'mahdi', '/user/img/7_mahdi_image_face.jpg', '/user/img/7_mahdi_image_card.jpg', '/user/img/7_mahdi_image_face_and_card.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buy`
--

DROP TABLE IF EXISTS `buy`;
CREATE TABLE IF NOT EXISTS `buy` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_USER` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_singup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deposit_wallet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Registration_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Purchase_Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Serial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy`
--

INSERT INTO `buy` (`id`, `id_USER`, `name_singup`, `Currency`, `Amount`, `Deposit_wallet`, `Registration_time`, `Purchase_Price`, `Serial`, `Condition`, `created_at`, `updated_at`) VALUES
(1, '2', 'mahdi', '0', '0.011', 'ikdrg54564dhg5fg554dh80thg55dg00df855y00df', '20200512031137', '8,667.96', '3', '1', NULL, NULL),
(2, '3', 'mahdi', '1', '0.011', 'djjed45afasdfatf564.cdvfbhzzdfcbht', '20200512151035', '8,883.71', '2', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `deposit_wallet`
--

DROP TABLE IF EXISTS `deposit_wallet`;
CREATE TABLE IF NOT EXISTS `deposit_wallet` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SHARE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `SECRET` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposit_wallet`
--

INSERT INTO `deposit_wallet` (`id`, `NAME`, `SHARE`, `SECRET`, `state`) VALUES
(1, 'w-1', '1Puh7Pk1TNsYnvUawoRs1MqPLS8XagK61N', 'Kz2ySp25gdSSib95LoiWXfXtx9Nk1xNhUyVGRKoQJM2RXCdkJNWS', '0'),
(2, 'w-2', '13EjLUMRr5q9Pa4RbXBCs16VbLqCnCdASQ', 'L1XenGcgj8agrbQiQt1iL4sZaqUBtQC2VFe32nktb6vALp711Msw', '0'),
(3, 'w-3', '12xbYkt72Uprd775FX8uWAgeWUiAY7bmDK', 'KyzzB4MT3Zu9Tq4SwgJbn4JbZCDsABZRrSVCL5vQ5tVCjWhicnoF', '1');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_05_02_075332_deposit_wallet', 1),
(4, '2020_05_03_042019_price', 1),
(5, '2020_05_03_181635_authentication_1', 1),
(6, '2020_05_03_181702_authentication_2', 1),
(7, '2020_05_03_181746_authentication_3', 1),
(8, '2020_05_05_122918_admin', 1),
(9, '2020_05_05_194615_sell', 1),
(10, '2020_05_05_194644_buy', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

DROP TABLE IF EXISTS `price`;
CREATE TABLE IF NOT EXISTS `price` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Bitcoin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ethereum` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `XRP` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Tether` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Bitcoin_Cash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `Bitcoin`, `Ethereum`, `XRP`, `Tether`, `Bitcoin_Cash`, `state`) VALUES
(1, '8,684.41', '188.30', '188.30', '1.00', '234.72', '1'),
(2, '8,751.04', '189.21', '189.21', '1.00', '233.54', '1'),
(3, '8,868.85', '190.83', '190.83', '1.00', '233.72', '1'),
(4, '9,749.74', '244.28', '0.203342', '1.00', '254.43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sell`
--

DROP TABLE IF EXISTS `sell`;
CREATE TABLE IF NOT EXISTS `sell` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `id_USER` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_singup` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Currency` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deposit_wallet_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deposit_wallet_SHARE` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deposit_wallet_SECRET` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Registration_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Purchase_Price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Serial` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Account_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Card_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Shaba_Number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cardholder_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Condition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sell`
--

INSERT INTO `sell` (`id`, `id_USER`, `name_singup`, `Currency`, `Amount`, `Deposit_wallet_name`, `Deposit_wallet_SHARE`, `Deposit_wallet_SECRET`, `Registration_time`, `Purchase_Price`, `Serial`, `Account_Number`, `Card_Number`, `Shaba_Number`, `Cardholder_Name`, `Condition`, `created_at`, `updated_at`) VALUES
(1, '2', 'mahdi', 'Bitcoin', '00214', 'w-2', '13EjLUMRr5q9Pa4RbXBCs16VbLqCnCdASQ', 'L1XenGcgj8agrbQiQt1iL4sZaqUBtQC2VFe32nktb6vALp711Msw', '1', '8,628.02', '238', '6012547852145', '321321321321321321', 'IR00000000000005464654564', 'علی', '1', NULL, NULL),
(2, '2', 'mahdi', 'Bitcoin', '0.011', 'w-2', '13EjLUMRr5q9Pa4RbXBCs16VbLqCnCdASQ', 'L1XenGcgj8agrbQiQt1iL4sZaqUBtQC2VFe32nktb6vALp711Msw', '2', '8,667.52', '312', '6012547852145', '321321321321321321', 'IR00000000000005464654564', 'علی', '1', NULL, NULL),
(3, '2', 'mahdi', 'Bitcoin', '00587', 'w-3', '12xbYkt72Uprd775FX8uWAgeWUiAY7bmDK', 'KyzzB4MT3Zu9Tq4SwgJbn4JbZCDsABZRrSVCL5vQ5tVCjWhicnoF', '4', '8,667.52', '434', '6012547852145', '321321321321321321', 'IR00000000000005464654564', 'علی', '1', NULL, NULL),
(4, '2', 'mahdi', 'Bitcoin', '0.01254', 'w-2', '13EjLUMRr5q9Pa4RbXBCs16VbLqCnCdASQ', 'L1XenGcgj8agrbQiQt1iL4sZaqUBtQC2VFe32nktb6vALp711Msw', '5', '8,677.40', '362', '6012547852145', '321321321321321321', 'IR00000000000005464654564', 'علی', '1', NULL, NULL),
(5, '3', 'mahdi', 'Bitcoin', '0.011', 'w-2', '13EjLUMRr5q9Pa4RbXBCs16VbLqCnCdASQ', 'L1XenGcgj8agrbQiQt1iL4sZaqUBtQC2VFe32nktb6vALp711Msw', '8', '8,895.60', '293', '6012547852145', '321321321321321321', 'IR00000000000005464654564', 'مهدی', '0', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'customer',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `full_name` varchar(90) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'name_family',
  `src_img_face` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '/user/img/',
  `state_authentication` int(2) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `type`, `password`, `full_name`, `src_img_face`, `state_authentication`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mahdi', 'admin@opofast.com', 'admin', '$2y$10$bHaJh3zCKa0Y5oFuXqr6BuTzvow95YZ4Mc4fSNU7gTEQ3kmgiCok2', 'name_family', '/user/img/', 9, NULL, '2020-05-11 16:50:17', '2020-05-11 16:50:17'),
(7, 'mahdi', 'md2885ka2885@gmail.com', 'customer', '$2y$10$bHaJh3zCKa0Y5oFuXqr6BuTzvow95YZ4Mc4fSNU7gTEQ3kmgiCok2', 'as as', '/user/img/7_mahdi_image_face.jpg', 1, NULL, '2020-10-21 10:56:14', '2020-10-21 11:04:14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
