-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 05, 2020 at 04:10 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `hocmai_citys`
--

CREATE TABLE `hocmai_citys` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hocmai_citys`
--

INSERT INTO `hocmai_citys` (`id`, `name`, `created_at`, `updated_at`, `description`, `code`) VALUES
(1, 'Hà Nội', NULL, NULL, '', '4'),
(2, 'Hồ Chí Minh', NULL, NULL, '', '8'),
(3, 'Hải Phòng', NULL, NULL, '', '313'),
(4, 'Đà Nẵng', NULL, NULL, '', '511'),
(5, 'Hà Giang', NULL, NULL, '', '19'),
(6, 'Cao Bằng', NULL, NULL, '', '26'),
(7, 'Lai Châu', NULL, NULL, '', '23'),
(8, 'Lào Cai', NULL, NULL, '', '20'),
(9, 'Tuyên Quang', NULL, NULL, '', '27'),
(10, 'Lạng Sơn', NULL, NULL, '', '25'),
(11, 'Bắc Cạn', NULL, NULL, '', '281'),
(12, 'Thái Nguyên', NULL, NULL, '', '280'),
(13, 'Yên Bái', NULL, NULL, '', '29'),
(14, 'Sơn La', NULL, NULL, '', '22'),
(15, 'Phú Thọ', NULL, NULL, '', '210'),
(16, 'Vĩnh Phúc', NULL, NULL, '', '211'),
(17, 'Quảng Ninh', NULL, NULL, '', '33'),
(18, 'Bắc Giang', NULL, NULL, '', '240'),
(19, 'Bắc Ninh', NULL, NULL, '', '241'),
(21, 'Hải Dương', NULL, NULL, '', '320'),
(22, 'Hưng Yên', NULL, NULL, '', '321'),
(23, 'Hoà Bình', NULL, NULL, '', '218'),
(24, 'Hà Nam', NULL, NULL, '', '351'),
(25, 'Nam Định', NULL, NULL, '', '350'),
(26, 'Thái Bình', NULL, NULL, '', '36'),
(27, 'Ninh Bình', NULL, NULL, '', '30'),
(28, 'Thanh Hoá', NULL, NULL, '', '37'),
(29, 'Nghệ An', NULL, NULL, '', '383'),
(30, 'Hà Tĩnh', NULL, NULL, '', '39'),
(31, 'Quảng Bình', NULL, NULL, '', '52'),
(32, 'Quảng Trị', NULL, NULL, '', '53'),
(33, 'Thừa Thiên-Huế', NULL, NULL, '', '54'),
(34, 'Quảng Nam', NULL, NULL, '', '510'),
(35, 'Quảng Ngãi', NULL, NULL, '', '55'),
(36, 'Kon Tum', NULL, NULL, '', '60'),
(37, 'Bình Định', NULL, NULL, '', '56'),
(38, 'Gia Lai', NULL, NULL, '', '59'),
(39, 'Phú Yên', NULL, NULL, '', '57'),
(40, 'Đắk Lắk', NULL, NULL, '', '50'),
(41, 'Khánh Hoà', NULL, NULL, '', '58'),
(42, 'Lâm Đồng', NULL, NULL, '', '63'),
(43, 'Bình Phước', NULL, NULL, '', '651'),
(44, 'Bình Dương', NULL, NULL, '', '650'),
(45, 'Ninh Thuận', NULL, NULL, '', '68'),
(46, 'Tây Ninh', NULL, NULL, '', '66'),
(47, 'Bình Thuận', NULL, NULL, '', '62'),
(48, 'Đồng Nai', NULL, NULL, '', '613'),
(49, 'Long An', NULL, NULL, '', '72'),
(50, 'Đồng Tháp', NULL, NULL, '', '67'),
(51, 'An Giang', NULL, NULL, '', '76'),
(52, 'Bà Rịa-Vũng Tàu', NULL, NULL, '', '64'),
(53, 'Tiền Giang', NULL, NULL, '', '73'),
(54, 'Kiên Giang', NULL, NULL, '', '77'),
(55, 'Cần Thơ', NULL, NULL, '', '71'),
(56, 'Bến Tre', NULL, NULL, '', '75'),
(57, 'Vĩnh Long', NULL, NULL, '', '70'),
(58, 'Trà Vinh', NULL, NULL, '', '74'),
(59, 'Sóc Trăng', NULL, NULL, '', '79'),
(60, 'Bạc Liêu', NULL, NULL, '', '781'),
(61, 'Cà Mau', NULL, NULL, '', '780'),
(62, 'Điện Biên', NULL, NULL, '', '23'),
(63, 'Đăk Nông', NULL, NULL, '', '50'),
(64, 'Hậu Giang', NULL, NULL, '', '71');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hocmai_citys`
--
ALTER TABLE `hocmai_citys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hocmai_citys`
--
ALTER TABLE `hocmai_citys`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
