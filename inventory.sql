-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2020 at 11:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `advancesalaries`
--

CREATE TABLE `advancesalaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` bigint(20) UNSIGNED NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `advance_salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `advancesalaries`
--

INSERT INTO `advancesalaries` (`id`, `employee_id`, `date`, `month`, `status`, `year`, `advance_salary`, `created_at`, `updated_at`) VALUES
(1, 2, '16-05-20', 'February', 'Current', '2019', '10000', '2020-05-16 16:25:45', '2020-05-16 16:25:45'),
(2, 1, '17-05-20', 'February', 'Advance', '2019', '10000', '2020-05-17 12:55:02', '2020-05-17 12:55:02'),
(3, 3, '17-05-20', 'April', 'Advance', '2020', '10000', '2020-05-17 12:55:25', '2020-05-17 12:55:25'),
(4, 1, '17-05-20', 'January', 'Due', '2020', '10000', '2020-05-17 12:55:49', '2020-05-17 12:55:49'),
(6, 2, '17-05-20', 'April', 'Current', '2020', '14000', '2020-05-17 14:58:47', '2020-05-17 14:58:47'),
(7, 1, '17-05-20', 'April', 'Current', '2020', '14000', '2020-05-17 15:13:25', '2020-05-17 15:13:25'),
(8, 2, '18-05-20', 'March', 'Due', '2020', '14000', '2020-05-18 10:00:52', '2020-05-18 10:00:52'),
(9, 1, '17-06-20', 'May', 'Current', '2020', '12000', '2020-06-17 10:38:27', '2020-06-17 10:38:27');

-- --------------------------------------------------------

--
-- Table structure for table `attendences`
--

CREATE TABLE `attendences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `employee_id` int(11) NOT NULL,
  `attendence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attendences`
--

INSERT INTO `attendences` (`id`, `employee_id`, `attendence`, `date`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 1, 'Present', '18-05-20', 'May', '2020', NULL, '2020-05-18 07:28:02'),
(2, 2, 'Present', '18-05-20', 'May', '2020', NULL, '2020-06-17 10:43:30'),
(3, 3, 'Present', '18-05-20', 'May', '2020', NULL, '2020-05-18 07:28:46'),
(4, 1, 'Present', '17-06-20', 'June', '2020', NULL, NULL),
(5, 2, 'Present', '17-06-20', 'June', '2020', NULL, NULL),
(6, 3, 'Present', '17-06-20', 'June', '2020', NULL, NULL),
(7, 1, 'Absense', '18-06-20', 'June', '2020', NULL, NULL),
(8, 2, 'Absense', '18-06-20', 'June', '2020', NULL, NULL),
(9, 3, 'Absense', '18-06-20', 'June', '2020', NULL, NULL),
(10, 1, 'Present', '22-06-20', 'June', '2020', NULL, NULL),
(11, 2, 'Absense', '22-06-20', 'June', '2020', NULL, NULL),
(12, 3, 'Present', '22-06-20', 'June', '2020', NULL, NULL),
(13, 1, 'Present', '30-06-20', 'June', '2020', NULL, NULL),
(14, 2, 'Present', '30-06-20', 'June', '2020', NULL, NULL),
(15, 3, 'Present', '30-06-20', 'June', '2020', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `created_at`, `updated_at`) VALUES
(1, 'Electronic & Accessories', '2020-05-12 16:48:19', '2020-05-12 16:48:19'),
(2, 'Fashion & Design', '2020-05-12 17:03:21', '2020-05-12 17:03:21'),
(3, 'Libraries & stationary', '2020-05-12 17:03:33', '2020-05-12 17:03:33');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_holder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_branch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `shopname`, `image`, `bank_name`, `account_holder`, `account_number`, `bank_branch`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Jamil Ahmed', 'jamilahmed@gmail.com', '01624545552', 'House #21,Street #41,def Road,ghasityla,Sylhet,Sadar-3100.', 'PRAN Group Limited', 'customer/IasE1AqwQ9yhDrPYvczmpr09FdZmlha2zVhzJEcQ.jpeg', 'Datch bangla bank limited', 'Jamil Ahmed', '4242424242424242', 'Sylhet', 'Sylhet', '2020-05-12 16:39:11', '2020-05-12 16:39:11'),
(2, 'Saker al faruque', 'sker@gmai.com', '01756556633', 'House #62,Street #45,LED Road,Lamapara,Sylhet,Sadar-3100.', 'RFL Group of Limited', 'customer/5n2VczlYn7WXr64tOF29dwn7cWmiW0xEQ2G8HPyn.webp', 'Islami Bank Limited', 'Saker Al Faruque', '22323232323', 'Sylhet', 'Sylhet', '2020-05-12 16:42:13', '2020-05-12 16:42:13'),
(3, 'Rimon Ahmed', 'rimon@gmail.com', '01475552552', 'House #123,Street #123,ABC Road,Lamapara,Sylhet,Sadar-3100.', 'PRAN Group', 'customer/B5USVPjszYIT93TE6WzxX6fCKxFIJkLFwbPpuRHq.jpeg', 'Islami Bank Limited', 'S M Rimon Nahid', '22323232323', 'Sylhet', 'London', '2020-05-12 22:08:08', '2020-05-12 22:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `phone`, `address`, `experience`, `image`, `nid`, `salary`, `vacation`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Jahangir Alom', 'jahangiralom@gmail.com', '01772540622', 'House #123,Street #123,ABC Road,Lamapara,Sylhet,Sadar-3100.', '2 years', 'employee/BcMuX1RCwlDqgIUCNeonErKDyLFonFHlDGJPqxCV.jpeg', '999924315242', '12500', '3 days', 'Sylhet', '2020-05-12 16:24:23', '2020-05-12 16:24:23'),
(2, 'Emon Ahmed Muttasir', 'emonahmedmuttasir@gmail.com', '01746880622', 'For Example:House #123,Street #123,ABC Road,Lamapara,Sylhet,Sadar-3100.', '1 years', 'employee/H8QDrsYBrHtH7yjpCYFOif4JNEQlY4RKGjfrxmkE.jpeg', '999952451245', '15000', '4 days', 'Dhaka', '2020-05-12 16:26:22', '2020-05-12 16:26:22'),
(3, 'Sabbir Ahmed Jakir', 'sabbir@gmail.com', '01726213335', 'House #645,Street #12,ABC Road,Lamapara,Sunamganj,Sadar-3310.', 'No experience', 'employee/ejPSWmhjzlgR01i0iccCppKM9KdVYlKrAt4n1zgw.jpeg', '9542555545', '10000', '3 days', 'Sunamganj', '2020-05-12 16:35:59', '2020-05-12 16:35:59');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ammount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `details`, `ammount`, `date`, `month`, `year`, `created_at`, `updated_at`) VALUES
(1, 'Sold a new Computer,4gb ram,core-i3,7th generation.', '30000', '13/05/20', 'May', '2020', '2020-05-12 20:12:27', '2020-05-12 20:12:27'),
(2, 'Sold bucket for our store', '1200', '18/06/20', 'June', '2020', '2020-06-18 10:42:36', '2020-06-18 10:42:36');

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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_05_07_095906_create_employees_table', 1),
(5, '2020_05_07_172359_create_customers_table', 1),
(6, '2020_05_07_190641_create_suppliers_table', 1),
(8, '2020_05_08_152224_create_categories_table', 1),
(9, '2020_05_08_154437_create_products_table', 1),
(10, '2020_05_08_203210_create_expenses_table', 1),
(12, '2020_05_10_201619_create_settings_table', 1),
(13, '2020_05_12_183454_create_orders_table', 1),
(14, '2020_05_12_183916_create_orderdetails_table', 1),
(18, '2020_05_07_202358_create_advancesalaries_table', 2),
(19, '2020_05_09_141205_create_attendences_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unitcost` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `product_id`, `quantity`, `unitcost`, `total`, `created_at`, `updated_at`) VALUES
(10, 8, 1, '1', '40000', '48400', '2020-05-12 22:10:04', '2020-05-12 22:10:04'),
(11, 8, 2, '1', '150000', '181500', '2020-05-12 22:10:04', '2020-05-12 22:10:04'),
(12, 8, 3, '4', '12000', '58080', '2020-05-12 22:10:04', '2020-05-12 22:10:04'),
(13, 9, 1, '1', '40000', '48400', '2020-05-13 06:31:28', '2020-05-13 06:31:28'),
(14, 9, 3, '3', '12000', '43560', '2020-05-13 06:31:28', '2020-05-13 06:31:28'),
(15, 10, 1, '1', '40000', '48400', '2020-05-14 07:40:42', '2020-05-14 07:40:42'),
(16, 10, 2, '1', '150000', '181500', '2020-05-14 07:40:42', '2020-05-14 07:40:42'),
(17, 11, 1, '1', '40000', '48400', '2020-05-14 07:41:46', '2020-05-14 07:41:46'),
(18, 11, 2, '3', '150000', '544500', '2020-05-14 07:41:46', '2020-05-14 07:41:46'),
(19, 12, 4, '1', '25000', '30250', '2020-05-14 08:09:23', '2020-05-14 08:09:23'),
(20, 12, 6, '4', '2000', '9680', '2020-05-14 08:09:24', '2020-05-14 08:09:24'),
(21, 13, 8, '1', '3000', '3630', '2020-05-31 09:59:45', '2020-05-31 09:59:45'),
(22, 13, 5, '3', '600', '2178', '2020-05-31 09:59:45', '2020-05-31 09:59:45'),
(23, 13, 4, '1', '25000', '30250', '2020-05-31 09:59:45', '2020-05-31 09:59:45'),
(24, 14, 1, '1', '40000', '48400', '2020-06-15 11:50:51', '2020-06-15 11:50:51'),
(25, 15, 1, '4', '40000', '193600', '2020-06-17 10:46:46', '2020-06-17 10:46:46'),
(26, 15, 2, '1', '150000', '181500', '2020-06-17 10:46:46', '2020-06-17 10:46:46'),
(27, 16, 1, '1', '40000', '48400', '2020-06-22 14:42:29', '2020-06-22 14:42:29'),
(28, 16, 2, '1', '150000', '181500', '2020-06-22 14:42:29', '2020-06-22 14:42:29'),
(29, 16, 4, '1', '25000', '30250', '2020-06-22 14:42:29', '2020-06-22 14:42:29'),
(30, 16, 6, '1', '2000', '2420', '2020-06-22 14:42:29', '2020-06-22 14:42:29'),
(31, 17, 1, '3', '40000', '145200', '2020-06-29 18:26:48', '2020-06-29 18:26:48'),
(32, 17, 2, '1', '150000', '181500', '2020-06-29 18:26:48', '2020-06-29 18:26:48'),
(33, 17, 3, '1', '12000', '14520', '2020-06-29 18:26:48', '2020-06-29 18:26:48');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_product` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtotal` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vat` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `order_date`, `order_status`, `total_product`, `subtotal`, `vat`, `total`, `payment_status`, `pay`, `due`, `created_at`, `updated_at`) VALUES
(8, 3, '13-05-20', 'shipped', '6', '238,000.00', '49,980.00', '287,980.00', 'Chaque', '200000', '80720', NULL, '2020-06-29 19:24:04'),
(9, 1, '13-05-20', 'shipped', '4', '76,000.00', '15,960.00', '91,960.00', 'Handcash', '100000', '0', NULL, '2020-05-13 06:53:56'),
(10, 2, '14-05-20', 'shipped', '2', '190,000.00', '39,900.00', '229,900.00', 'Chaque', '200000', '29900', NULL, '2020-05-14 08:12:17'),
(11, 1, '14-05-20', 'shipped', '4', '490,000.00', '102,900.00', '592,900.00', 'Handcash', '400000', '192900', NULL, '2020-05-14 08:05:56'),
(12, 3, '14-05-20', 'shipped', '5', '33,000.00', '6,930.00', '39,930.00', 'Chaque', '30000', '9930', NULL, '2020-06-29 19:18:56'),
(13, 1, '31-05-20', 'shipped', '5', '29,800.00', '6,258.00', '36,058.00', 'Chaque', '12000', '24058', NULL, '2020-05-31 10:00:24'),
(14, 1, '15-06-20', 'shipped', '1', '40,000.00', '8,400.00', '48,400.00', 'Chaque', '12000', '36400', NULL, '2020-06-17 10:40:36'),
(15, 3, '17-06-20', 'shipped', '5', '310,000.00', '65,100.00', '375,100.00', 'Handcash', '200000', '175100', NULL, '2020-06-29 18:43:18'),
(16, 1, '22-06-20', 'Pending', '4', '217,000.00', '45,570.00', '262,570.00', 'Handcash', '250000', '12570', NULL, NULL),
(17, 2, '30-06-20', 'Pending', '5', '282,000.00', '59,220.00', '341,220.00', 'Chaque', '300000', '41220', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('rimonnahid19@gmail.com', '$2y$10$g0pGf1kViSC0uEy0NmgeUeEI3QzDdXzo5ZgH543u2INLPxnvYPXmu', '2020-05-14 16:11:49');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_garage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_route` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buy_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expire_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `buying_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `selling_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `supplier_id`, `product_code`, `product_garage`, `product_route`, `image`, `buy_date`, `expire_date`, `buying_price`, `selling_price`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo pad', 1, 1, 'm2101', 'A', 'route', 'product/qpryxBaAhSFGC4e0hgj6hNYPfeOJ5sBovU6Y79EW.jpeg', '2020-05-28', '2020-05-30', '32000', '40000', '2020-05-12 17:05:27', '2020-05-12 17:05:27'),
(2, 'iphone 11pro', 1, 2, 'h9989', 'A', 'route', 'product/W12RKFmt1JKBiEGYGmjhDmFViixoZFTr8NP4AXSj.jpeg', '2020-05-14', '2020-05-26', '80000', '150000', '2020-05-12 17:06:53', '2020-05-12 19:26:38'),
(3, 'Samsung MackOS HeadPhone', 1, 3, 'h9989', 'A', 'route', 'product/9772BkaOv3p8A0TokCWb4RFw1YimeqZyWnW1s5o9.png', '2020-05-19', '2020-05-28', '8000', '12000', '2020-05-12 19:16:55', '2020-05-12 19:27:32'),
(4, 'nikon nz232 camera', 1, 1, 'h9989', 'A', 'route', 'product/mwiXqgaich9NI3paqLBXfSHnbp4GDLuwNfwPlV23.jpeg', '2020-05-07', '2020-05-30', '15000', '25000', '2020-05-12 19:18:48', '2020-05-12 19:28:02'),
(5, 'A4 Tech Mouse', 1, 2, 'm2101', 'A', 'route', 'product/TL6sGQM6LKdMTUIVDzFWxVYZD57ofcagX9yHD7EI.jpeg', '2020-05-15', '2020-05-25', '400', '600', '2020-05-12 19:21:16', '2020-05-12 19:21:16'),
(6, 'Joystick', 1, 3, 'm2101', 'A', 'route', 'product/n2jHO0OvUJpAocpOHP6V8xTPyP2ZvI7s294Z9SEK.jpeg', '2020-05-26', '2020-05-29', '1200', '2000', '2020-05-12 19:22:19', '2020-05-12 19:28:35'),
(7, 'Laptop m007', 1, 3, 'm2101', 'A', 'route', 'product/pPBJmpgFjinE9yxXfAfrL1ZBvF3euyaY6bNbDN3x.jpeg', '2020-05-14', '2020-05-18', '20000', '40000', '2020-05-12 19:23:41', '2020-05-12 19:23:41'),
(8, 'T-shirt Standard', 2, 2, 'h9989', 'C', 'route', 'product/KQB7XahOaXJtuKZD7p8mpOcdkzHK7NYi3ryAKNZv.jpeg', '2020-05-07', '2020-05-27', '1500', '3000', '2020-05-12 19:25:00', '2020-05-12 19:25:00'),
(9, 'Nicon Camera', 1, 3, '1200', 'A', 'FF', 'product/azYslrmIv1g3zD0rh08FCW5IBlJVe3vteiiSMLfZ.jpeg', '2020-06-02', '2020-06-24', '10000', '30000', '2020-06-18 05:48:20', '2020-06-18 05:48:20');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `name`, `address`, `email`, `phone`, `logo`, `mobile`, `city`, `country`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 'R N Company Limited', 'House #123,Street #123,ABC Road,Lamapara,Sylhet,Sadar-3100.', 'rimonnahid19@gmail.com', '9985428512', 'setting/6C9K0smNT4VqgPhA7LfDXuvI3VnQfA9EsbYTmNP3.jpeg', '01792-544275', 'Sylhet', 'Bangladesh', '3100', '2020-06-29 10:44:34', '2020-06-29 10:44:34');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shop` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_holder` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `email`, `phone`, `address`, `type`, `image`, `shop`, `bank_name`, `account_holder`, `account_number`, `branch_name`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Jahid Ahmed', 'jahid@gmail.com', '01234557653', 'Road,ghasityla,Sylhet,Sadar-3100.', NULL, 'supplier/0Uxa8sIAQ8JuaC3NAewUeha9k3KQNmoy0v58IWvK.jpeg', 'Echo store', 'Datch Bangla Bank', 'Jahid Ahmed', '4242424242424242', 'Sylhet', 'Sylhet', '2020-05-12 16:57:07', '2020-05-12 16:57:07'),
(2, 'Isak Mia', 'ishak@gmail.com', '01758465256', 'Road,ghasityla,Sylhet,Sadar-3100.', 'Manager', 'supplier/pKUeO2TQK2X8wYu9U1QOmNHTXVhfezrK3u0kLrAV.webp', 'Shikha shoppingmol', 'Rupali Bank Limited', 'Ishak Mia', '17544163341', 'Sylhet', 'Sylhet', '2020-05-12 17:00:37', '2020-05-12 17:00:37'),
(3, 'S M Rimon Nahid', 'rimonnahid19@gmail.com', '01792544275', 'House #323,Street #13,DEF Road,Sheikhghat,Sylhet,Sadar-3100.', 'Distributor', 'supplier/RPi2leEEncJ994C0942vaaviOHElEkQx8xfUgXzE.jpeg', 'Pran Group', 'Rupali Bank Limited', 'S M Rimon Nahid', '22323232323', 'Dhaka', 'Sadar', '2020-05-12 17:08:17', '2020-05-12 17:08:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `is_admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'rimon', 'rimon@gmail.com', NULL, NULL, '$2y$10$ZsEV5angj/Rs9B0EwbDYdORkmxy1Nx3.d18PZ7Q.cIMT..rLWqfz.', NULL, '2020-05-15 13:13:24', '2020-05-15 13:13:24'),
(5, 'Rimon', 'rimonnahid19@gmail.com', NULL, NULL, '$2y$10$7QqY23ETyXQDZEghmGWAmO92IXwIemEYBIE8DpbpNWo6yXcZQFTQG', NULL, '2020-06-17 10:05:35', '2020-06-17 10:05:35'),
(6, 'Junk', 'admin@gmail.com', NULL, NULL, '$2y$10$sReAVVYvBq3UPstnuURgMe2HzocLjcIu.u07wbhbVK5gZDXajE7pK', NULL, '2020-06-17 10:08:44', '2020-06-17 10:08:44'),
(7, 'Junk', '5001000junkemail@gmail.com', NULL, NULL, '$2y$10$qcbNyDZ4b.hO5qvjSIh8u.lNwCLmmnn0zQLrxNnJ5XyNb.FuMIdxS', NULL, '2020-06-17 10:09:27', '2020-06-17 10:09:27');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advancesalaries`
--
ALTER TABLE `advancesalaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `advancesalaries_employee_id_foreign` (`employee_id`);

--
-- Indexes for table `attendences`
--
ALTER TABLE `attendences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

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
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
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
-- AUTO_INCREMENT for table `advancesalaries`
--
ALTER TABLE `advancesalaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `attendences`
--
ALTER TABLE `attendences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advancesalaries`
--
ALTER TABLE `advancesalaries`
  ADD CONSTRAINT `advancesalaries_employee_id_foreign` FOREIGN KEY (`employee_id`) REFERENCES `employees` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
