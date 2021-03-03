-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2020 at 04:56 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uruyuki`
--

-- --------------------------------------------------------

--
-- Table structure for table `adjust`
--

CREATE TABLE `adjust` (
  `id` int(250) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item` varchar(250) NOT NULL,
  `qty` varchar(250) NOT NULL,
  `reason` varchar(250) NOT NULL,
  `exp` varchar(250) NOT NULL,
  `cost` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `pay_type` varchar(250) NOT NULL,
  `paid` varchar(250) NOT NULL,
  `sdc` varchar(250) NOT NULL,
  `stock_status` varchar(250) NOT NULL,
  `sale_status` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `customer` varchar(250) NOT NULL,
  `date_done` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `done_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adjust`
--

INSERT INTO `adjust` (`id`, `order_id`, `barcode`, `item`, `qty`, `reason`, `exp`, `cost`, `total`, `pay_type`, `paid`, `sdc`, `stock_status`, `sale_status`, `done`, `customer`, `date_done`, `done_date`) VALUES
(1, 'invoice136', '', 'ACYCLOVIR CREAM 1OGR', '-2', '              test            \r\n                          ', '', '1200', '-2400', '', '', '', 'inve', 'ordered', 'fullname', '', '2020-02-27 07:03:26', '2020-02-26'),
(2, 'invoice138', '', 'ABACOFF SP 100ML', '1', '                                                                                                                ', '', '700', '700', '', '', '', 'inve', 'pending', 'fullname', '', '2020-03-06 18:18:08', '2020-02-27'),
(3, 'invoice138', '', 'ACNESOL CREAM', '2', '                                                                                                                ', '', '1', '2', '', '', '', 'inve', 'pending', 'fullname', '', '2020-03-06 18:31:33', '2020-03-06'),
(4, 'Ref_Number139', '', 'NOOTROPYL 800MG 45CES', '1', '', '', '1', '1', '', '', '', 'inve', 'pending', 'fullname', '', '2020-03-06 19:29:19', '2020-03-06'),
(5, 'invoice140', '', 'ABACOFF SP 100ML', '5', '                                                                                    ', '', '700', '3500', '', '', '', 'inve', 'ordered', 'fullname', '', '2020-03-09 20:04:08', '2020-03-09'),
(6, 'invoice140', '', 'ABAISSE LANGUE', '1', '', '', '1', '1', '', '', '', 'inve', 'pending', 'fullname', '', '2020-03-09 20:05:35', '2020-03-09'),
(7, 'invoice141', '', 'ABACOFF SP 100ML', '5', '                            ', '', '700', '3500', '', '', '', 'inve', 'pending', 'fullname', '', '2020-03-13 02:49:43', '2020-03-12'),
(8, 'invoice142', '', 'PAIDOTERIN SP 100ML', '1', '', '', '4000', '4000', '', '', '', 'inve', 'ordered', 'fullname', '', '2020-04-01 16:10:30', '2020-04-01'),
(9, 'invoice142', '', 'PARACETAMOL SP 100ML', '4', '                            ', '', '600', '2400', '', '', '', 'inve', 'ordered', 'fullname', '', '2020-04-01 16:46:06', '2020-04-01'),
(10, 'invoice143', '', 'PARACETAMOL SP 100ML', '1', '', '', '600', '600', '', '', '', 'inve', 'ordered', 'fullname', '', '2020-04-01 16:48:07', '2020-04-01'),
(11, 'invoice143', '', 'PARACETAMOL SP 60ML', '1', '                            ', '', '500', '500', '', '', '', 'inve', 'ordered', 'fullname', '', '2020-04-01 16:48:07', '2020-04-01'),
(12, 'invoice144', '', 'PARACETAMOL SP 60ML', '1', '', '', '500', '500', '', '', '', 'inve', 'pending', 'fullname', '', '2020-04-01 16:48:25', '2020-04-01'),
(13, 'invoice163', '', 'AUGMENTIN ENFANT SP 60ML', '1', '', '', '6000', '6000', '', '', '', 'inve', 'pending', 'fullname', '', '2020-04-05 22:46:08', '2020-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(50) NOT NULL,
  `branch_address` varchar(100) NOT NULL,
  `branch_contact` varchar(50) NOT NULL,
  `skin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`branch_id`, `branch_name`, `branch_address`, `branch_contact`, `skin`) VALUES
(1, 'Cashier', 'Nyamirambo', '0787381418', 'red'),
(2, 'superadmin', 'Nyamirambo', '0787381418', 'purple'),
(3, 'admin', 'Nyamirambo', '', 'black');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(250) NOT NULL,
  `category` varchar(250) NOT NULL,
  `lot` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `datedone` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `lot`, `done`, `datedone`) VALUES
(2, 'beverage', '', '', '2019-12-06 15:26:10'),
(3, 'Drinks', '', '', '2019-12-06 15:26:21');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `tin_number` varchar(250) NOT NULL,
  `nid` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `date_done` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `fullname`, `phone`, `email`, `tin_number`, `nid`, `done`, `date_done`) VALUES
(3, 'Rutembesa Shema Elvis', '0787381418', 'rutembesaelvis@gmail.com', '334455221144', '11223344', 'fullname', '2019-12-05 02:00:29'),
(4, 'Rutembesa Elvis', '0781459147', 'rutembesaelvis2@gmail.com', '55656', '555555', 'niwemahoro nicole', '2020-08-03 11:15:18');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(250) NOT NULL,
  `fullname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `photo` varchar(250) NOT NULL,
  `post` varchar(250) NOT NULL,
  `nid` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `date_done` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fullname`, `username`, `password`, `phone`, `email`, `photo`, `post`, `nid`, `done`, `date_done`) VALUES
(2, 'fullname', 'admin', 'admin', '0787381418', 'rutembesaelvis2@gmail.com', '', '2', '11223344556', 'Rutembesa Elvis', '2019-10-12 16:35:52'),
(5, 'KAMALI THEOPHILE', 'YUHI', '19800', '0783330060', 'theophila.kamali@gmail.com', '', '1', '1198080165932017', 'fullname', '2017-01-12 06:49:23'),
(6, 'niwemahoro nicole', 'nick', '1987', '0781909325', 'niwenicole45@gmail.com', '', '3', '1199570068410249', 'fullname', '2020-07-12 09:56:06'),
(7, 'B2J', 'kaka', '1452', '02783219180', 'hygrestha@fr', '', '2', '1452', 'fullname', '2017-01-12 11:22:17');

-- --------------------------------------------------------

--
-- Table structure for table `history_log`
--

CREATE TABLE `history_log` (
  `log_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_log`
--

INSERT INTO `history_log` (`log_id`, `user_id`, `action`, `date`) VALUES
(1, 0, 'has logged out the system at ', '2019-10-10 08:41:45'),
(2, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(3, 0, 'has logged out the system at ', '2019-10-10 08:43:35'),
(4, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(5, 0, 'has logged out the system at ', '2019-10-10 17:40:00'),
(6, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(7, 0, 'has logged out the system at ', '2019-10-10 17:42:14'),
(8, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(9, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(10, 0, 'has logged out the system at ', '2019-10-11 09:10:43'),
(11, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(12, 0, 'has logged out the system at ', '2019-10-11 09:11:38'),
(13, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(14, 0, 'has logged out the system at ', '2019-10-11 09:12:14'),
(15, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(16, 0, 'has logged out the system at ', '2019-10-11 09:56:01'),
(17, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(18, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(19, 0, 'has logged out the system at ', '2019-10-12 04:28:42'),
(20, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(21, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(22, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(23, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(24, 0, 'has logged out the system at ', '2019-10-13 00:29:46'),
(25, 0, 'has logged out the system at ', '2019-10-13 00:30:01'),
(26, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(27, 0, 'has logged out the system at ', '2019-10-13 00:30:49'),
(28, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(29, 0, 'has logged out the system at ', '2019-10-13 00:31:38'),
(30, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(31, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(32, 0, 'has logged out the system at ', '2019-10-13 00:36:09'),
(33, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(34, 0, 'has logged out the system at ', '2019-10-13 00:36:30'),
(35, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(36, 0, 'has logged out the system at ', '2019-10-13 02:19:09'),
(37, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(38, 0, 'has logged out the system at ', '2019-10-13 06:46:39'),
(39, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(40, 0, 'has logged out the system at ', '2019-10-13 15:23:46'),
(41, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(42, 0, 'has logged out the system at ', '2019-10-13 15:55:05'),
(43, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(44, 0, 'has logged out the system at ', '2019-10-13 15:55:37'),
(45, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(46, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(47, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(48, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(49, 0, 'has logged out the system at ', '2019-10-14 13:31:30'),
(50, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(51, 0, 'has logged out the system at ', '2019-10-14 14:30:10'),
(52, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(53, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(54, 0, 'has logged out the system at ', '2019-10-16 00:43:16'),
(55, 0, 'has logged out the system at ', '2019-10-16 01:58:44'),
(56, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(57, 0, 'has logged out the system at ', '2019-10-16 02:00:01'),
(58, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(59, 0, 'has logged out the system at ', '2019-10-16 23:27:43'),
(60, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(61, 0, 'has logged out the system at ', '2019-10-17 02:04:32'),
(62, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(63, 0, 'has logged out the system at ', '2019-10-17 02:05:53'),
(64, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(65, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(66, 0, 'has logged out the system at ', '2019-10-20 01:21:17'),
(67, 0, 'has logged out the system at ', '2019-10-20 01:21:59'),
(68, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(69, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(70, 0, 'has logged out the system at ', '2019-10-22 01:17:58'),
(71, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(72, 0, 'has logged out the system at ', '2019-10-23 05:58:25'),
(73, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(74, 0, 'has logged out the system at ', '2019-10-23 05:58:37'),
(75, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(76, 0, 'has logged out the system at ', '2019-10-23 06:07:37'),
(77, 0, 'has logged out the system at ', '2019-10-24 02:30:12'),
(78, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(79, 0, 'has logged out the system at ', '2019-10-24 04:49:43'),
(80, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(81, 0, 'has logged out the system at ', '2019-10-24 14:34:27'),
(82, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(83, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(84, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(85, 0, 'has logged out the system at ', '2019-10-24 22:32:41'),
(86, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(87, 0, 'has logged out the system at ', '2019-10-25 00:23:33'),
(88, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(89, 0, 'has logged out the system at ', '2019-10-25 01:28:59'),
(90, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(91, 0, 'has logged out the system at ', '2019-10-25 01:30:16'),
(92, 0, 'has logged out the system at ', '2019-10-25 01:30:18'),
(93, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(94, 0, 'has logged out the system at ', '2019-10-25 01:32:18'),
(95, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(96, 0, 'has logged out the system at ', '2019-10-25 01:38:38'),
(97, 0, 'has logged out the system at ', '2019-10-28 18:23:08'),
(98, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(99, 0, 'has logged out the system at ', '2019-10-29 05:37:39'),
(100, 0, 'has logged out the system at ', '2019-10-29 05:38:06'),
(101, 0, 'has logged out the system at ', '2019-10-29 05:40:24'),
(102, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(103, 0, 'has logged out the system at ', '2019-10-29 05:50:16'),
(104, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(105, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(106, 0, 'has logged out the system at ', '2019-11-23 06:44:20'),
(107, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(108, 0, 'has logged out the system at ', '2019-12-06 00:13:04'),
(109, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(110, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(111, 0, 'has logged out the system at ', '2019-12-06 22:56:07'),
(112, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(113, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(114, 0, 'has logged out the system at ', '2019-12-12 15:23:50'),
(115, 0, 'has logged out the system at ', '2019-12-12 15:24:20'),
(116, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(117, 0, 'has logged out the system at ', '2019-12-12 19:11:48'),
(118, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(119, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(120, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(121, 0, 'has logged out the system at ', '2019-12-16 18:53:25'),
(122, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(123, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(124, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(125, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(126, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(127, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(128, 0, 'has logged out the system at ', '2019-12-20 04:42:43'),
(129, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(130, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(131, 0, 'has logged out the system at ', '2019-12-20 09:02:27'),
(132, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(133, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(134, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(135, 0, 'has logged out the system at ', '2019-12-22 19:19:30'),
(136, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(137, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(138, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(139, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(140, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(141, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(142, 0, 'has logged out the system at ', '2020-01-11 19:23:46'),
(143, 0, 'has logged out the system at ', '2020-01-11 19:23:47'),
(144, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(145, 0, 'has logged out the system at ', '2020-01-11 19:32:58'),
(146, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(147, 0, 'has logged out the system at ', '2020-01-14 18:05:47'),
(148, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(149, 0, 'has logged out the system at ', '2020-01-20 17:55:57'),
(150, 0, 'has logged out the system at ', '2020-01-20 17:55:57'),
(151, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(152, 0, 'has logged out the system at ', '2020-01-21 08:09:04'),
(153, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(154, 0, 'has logged out the system at ', '2020-01-29 17:44:18'),
(155, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(156, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(157, 0, 'has logged out the system at ', '2020-01-31 20:20:02'),
(158, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(159, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(160, 0, 'has logged out the system at ', '2020-02-08 10:33:06'),
(161, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(162, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(163, 0, 'has logged out the system at ', '2020-02-08 20:58:38'),
(164, 0, 'has logged out the system at ', '2020-02-08 20:59:05'),
(165, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(166, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(167, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(168, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(169, 0, 'has logged out the system at ', '2017-01-12 14:53:30'),
(170, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(171, 0, 'has logged out the system at ', '2017-01-12 14:55:41'),
(172, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(173, 0, 'has logged out the system at ', '2017-01-12 14:59:29'),
(174, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(175, 0, 'has logged out the system at ', '2017-01-12 15:00:02'),
(176, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(177, 0, 'has logged out the system at ', '2017-01-12 15:01:32'),
(178, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(179, 0, 'has logged out the system at ', '2017-01-12 15:02:13'),
(180, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(181, 0, 'has logged out the system at ', '2017-01-12 15:06:35'),
(182, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(183, 0, 'has logged out the system at ', '2017-01-12 15:29:06'),
(184, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(185, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(186, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(187, 0, 'has logged out the system at ', '2017-01-12 17:53:01'),
(188, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(189, 0, 'has logged out the system at ', '2017-01-12 19:22:24'),
(190, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(191, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(192, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(193, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(194, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(195, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(196, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(197, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(198, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(199, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(200, 0, 'has logged out the system at ', '2020-02-27 03:55:05'),
(201, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(202, 0, 'has logged out the system at ', '2020-02-27 05:45:04'),
(203, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(204, 0, 'has logged out the system at ', '2020-02-27 17:27:27'),
(205, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(206, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(207, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(208, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(209, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(210, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(211, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(212, 0, 'has logged out the system at ', '2020-03-29 05:10:29'),
(213, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(214, 0, 'has logged out the system at ', '2020-04-01 22:49:23'),
(215, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(216, 0, 'has logged out the system at ', '2020-04-02 04:14:17'),
(217, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(218, 0, 'has logged out the system at ', '2020-04-06 04:03:16'),
(219, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(220, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(221, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(222, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(223, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(224, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(225, 0, 'has logged out the system at ', '2020-07-12 17:24:08'),
(226, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(227, 0, 'has logged out the system at ', '2020-07-12 17:56:09'),
(228, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(229, 0, 'has logged out the system at ', '2020-07-13 10:09:53'),
(230, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(231, 0, 'has logged out the system at ', '2020-07-17 08:08:25'),
(232, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(233, 0, 'has logged out the system at ', '2020-07-17 08:08:52'),
(234, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(235, 0, 'has logged out the system at ', '2020-07-17 13:01:39'),
(236, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(237, 0, 'has logged out the system at ', '2020-07-17 13:42:22'),
(238, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(239, 0, 'has logged out the system at ', '2020-07-19 11:42:21'),
(240, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(241, 0, 'has logged out the system at ', '2020-07-21 00:53:47'),
(242, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(243, 0, 'has logged out the system at ', '2020-07-21 05:49:01'),
(244, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(245, 0, 'has logged out the system at ', '2020-07-22 07:32:37'),
(246, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(247, 0, 'has logged out the system at ', '2020-07-22 12:10:31'),
(248, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(249, 0, 'has logged out the system at ', '2020-07-22 13:41:03'),
(250, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(251, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(252, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(253, 0, 'has logged out the system at ', '2020-07-31 13:31:10'),
(254, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(255, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(256, 0, 'has logged out the system at ', '2020-08-04 12:56:51'),
(257, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(258, 0, 'has logged out the system at ', '2020-08-07 11:55:30'),
(259, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(260, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(261, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(262, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(263, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(264, 0, 'has logged out the system at ', '2020-08-17 19:14:45'),
(265, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(266, 0, 'has logged out the system at ', '2020-08-29 23:29:49'),
(267, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(268, 0, 'has logged out the system at ', '2020-09-03 02:19:04'),
(269, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(270, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(271, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(272, 0, 'has logged out the system at ', '2020-11-14 06:04:41'),
(273, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(274, 0, 'has logged in the system at ', '0000-00-00 00:00:00'),
(275, 0, 'has logged out the system at ', '2020-11-14 11:08:20');

-- --------------------------------------------------------

--
-- Table structure for table `insurances`
--

CREATE TABLE `insurances` (
  `id` int(250) NOT NULL,
  `insu_name` varchar(250) NOT NULL,
  `percentage` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `done_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `insurances`
--

INSERT INTO `insurances` (`id`, `insu_name`, `percentage`, `done`, `done_date`) VALUES
(1, 'RSSB', '85', 'fullname', '2020-02-26 20:09:55'),
(2, 'UAP', '100', 'fullname', '2020-02-26 20:10:24');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(250) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `datedone` date NOT NULL,
  `doneby` varchar(250) NOT NULL,
  `donedate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `order_id`, `datedone`, `doneby`, `donedate`, `status`) VALUES
(1, 'invoice', '2019-10-02', 'Admin ', '2019-10-01 23:36:48', 'pending'),
(2, 'invoice1', '2019-10-03', 'Rutembesa Elvis', '2019-10-03 13:34:46', 'ordered'),
(3, 'invoice2', '2019-10-03', 'Rutembesa Elvis', '2019-10-03 13:34:46', 'pending'),
(4, 'invoice3', '2019-10-07', 'Rutembesa Elvis', '2019-10-07 14:04:44', 'ordered'),
(5, 'invoice4', '2019-10-07', 'Rutembesa Elvis', '2019-10-07 14:04:44', 'pending'),
(6, 'invoice5', '2019-10-10', 'Rutembesa Elvis', '2019-10-10 00:21:03', 'pending'),
(7, 'invoice6', '2019-10-10', 'Rutembesa Elvis', '2019-10-10 09:39:13', 'pending'),
(8, 'invoice7', '2019-10-11', 'Rutembesa Elvis', '2019-10-11 00:27:31', 'pending'),
(9, 'invoice8', '2019-10-13', 'fullname', '2019-10-13 12:16:00', 'ordered'),
(10, 'invoice9', '2019-10-13', 'fullname', '2019-10-13 12:16:00', 'pending'),
(11, 'invoice10', '2019-10-13', 'fullname', '2019-10-13 21:42:47', 'pending'),
(12, 'invoice11', '2019-10-14', 'fullname', '2019-10-14 03:49:51', 'ordered'),
(13, 'invoice12', '2019-10-14', 'fullname', '2019-10-14 04:59:09', 'ordered'),
(14, 'invoice13', '2019-10-14', 'fullname', '2019-10-14 05:08:26', 'ordered'),
(15, 'invoice14', '2019-10-14', 'fullname', '2019-10-14 05:08:35', 'ordered'),
(16, 'invoice15', '2019-10-14', 'fullname', '2019-10-14 05:09:03', 'ordered'),
(17, 'invoice16', '2019-10-14', 'fullname', '2019-10-14 05:09:11', 'ordered'),
(18, 'invoice17', '2019-10-14', 'fullname', '2019-10-14 05:10:09', 'ordered'),
(19, 'invoice18', '2019-10-14', 'fullname', '2019-10-14 05:10:35', 'ordered'),
(20, 'invoice19', '2019-10-14', 'fullname', '2019-10-14 05:11:41', 'ordered'),
(21, 'invoice20', '2019-10-14', 'fullname', '2019-10-14 05:13:54', 'ordered'),
(22, 'invoice21', '2019-10-14', 'fullname', '2019-10-14 05:14:35', 'ordered'),
(23, 'invoice22', '2019-10-14', 'fullname', '2019-10-14 05:20:06', 'ordered'),
(24, 'invoice23', '2019-10-14', 'fullname', '2019-10-14 05:22:38', 'ordered'),
(25, 'invoice24', '2019-10-14', 'fullname', '2019-10-14 05:27:47', 'ordered'),
(26, 'invoice25', '2019-10-14', 'fullname', '2019-10-14 05:27:47', 'pending'),
(27, 'invoice26', '2019-10-23', 'fullname', '2019-10-23 20:53:57', 'ordered'),
(28, 'invoice27', '2019-10-23', 'fullname', '2019-10-23 20:57:02', 'ordered'),
(29, 'invoice28', '2019-10-23', 'fullname', '2019-10-23 21:02:50', 'ordered'),
(30, 'invoice29', '2019-10-23', 'fullname', '2019-10-23 21:03:24', 'ordered'),
(31, 'invoice30', '2019-10-23', 'fullname', '2019-10-23 21:04:07', 'ordered'),
(32, 'invoice31', '2019-10-23', 'fullname', '2019-10-23 21:05:25', 'ordered'),
(33, 'invoice32', '2019-10-23', 'fullname', '2019-10-23 21:05:39', 'ordered'),
(34, 'invoice33', '2019-10-23', 'fullname', '2019-10-23 21:06:44', 'ordered'),
(35, 'invoice34', '2019-10-23', 'fullname', '2019-10-23 21:08:13', 'ordered'),
(36, 'invoice35', '2019-10-23', 'fullname', '2019-10-23 21:08:13', 'pending'),
(37, 'invoice36', '2019-10-24', 'fullname', '2019-10-24 14:01:49', 'ordered'),
(38, 'invoice37', '2019-10-24', 'fullname', '2019-10-24 14:08:40', 'ordered'),
(39, 'invoice38', '2019-10-24', 'fullname', '2019-10-24 14:08:40', 'pending'),
(40, 'invoice39', '2019-10-24', 'fullname', '2019-10-24 16:48:56', 'pending'),
(41, 'invoice40', '2019-10-28', 'fullname', '2019-10-28 11:15:12', 'ordered'),
(42, 'invoice41', '2019-10-28', 'fullname', '2019-10-28 11:57:45', 'ordered'),
(43, 'invoice42', '2019-10-28', 'fullname', '2019-10-28 12:24:39', 'unpaid'),
(44, 'invoice43', '2019-10-28', 'fullname', '2019-10-28 21:22:29', 'ordered'),
(45, 'invoice44', '2019-10-28', 'fullname', '2019-10-28 21:03:29', 'unpaid'),
(46, 'invoice45', '2019-10-28', 'fullname', '2019-10-28 21:10:36', 'unpaid'),
(47, 'invoice46', '2019-10-28', 'fullname', '2019-10-28 21:15:23', 'ordered'),
(48, 'invoice47', '2019-10-28', 'fullname', '2019-10-28 21:11:46', 'pending'),
(49, 'invoice48', '2019-10-28', 'fullname', '2019-10-28 21:22:38', 'ordered'),
(50, 'invoice49', '2019-10-28', 'fullname', '2019-10-28 21:22:15', 'pending'),
(51, 'invoice50', '2019-10-28', 'fullname', '2019-10-28 21:22:29', 'pending'),
(52, 'invoice51', '2019-10-28', 'fullname', '2019-10-28 21:22:38', 'pending'),
(53, 'invoice52', '2019-10-28', 'fullname', '2019-10-28 21:49:17', 'unpaid'),
(54, 'invoice53', '2019-10-28', 'fullname', '2019-12-05 10:02:45', 'ordered'),
(55, 'invoice54', '2019-10-28', 'fullname', '2019-10-28 21:50:04', 'ordered'),
(56, 'invoice55', '2019-10-28', 'fullname', '2019-10-28 21:50:04', 'pending'),
(57, 'invoice56', '2019-12-05', 'fullname', '2019-12-05 04:10:08', 'pending'),
(58, 'invoice57', '2019-12-05', 'fullname', '2019-12-05 10:02:45', 'pending'),
(59, 'invoice58', '2019-12-06', 'fullname', '2019-12-06 08:13:43', 'pending'),
(60, 'invoice59', '2019-12-07', 'fullname', '2019-12-07 02:30:58', 'ordered'),
(61, 'invoice60', '2019-12-07', 'fullname', '2019-12-07 02:30:58', 'pending'),
(62, 'invoice61', '2019-12-07', 'fullname', '2019-12-07 14:11:54', 'ordered'),
(63, 'invoice62', '2019-12-07', 'fullname', '2019-12-07 14:14:02', 'ordered'),
(64, 'invoice63', '2019-12-07', 'fullname', '2019-12-07 14:16:13', 'ordered'),
(65, 'invoice64', '2019-12-07', 'fullname', '2019-12-07 14:19:15', 'ordered'),
(66, 'invoice65', '2019-12-07', 'fullname', '2019-12-07 14:19:57', 'ordered'),
(67, 'invoice66', '2019-12-07', 'fullname', '2019-12-07 20:40:00', 'ordered'),
(68, 'invoice67', '2019-12-07', 'fullname', '2019-12-07 20:40:25', 'ordered'),
(69, 'invoice68', '2019-12-07', 'fullname', '2019-12-07 20:54:10', 'ordered'),
(70, 'invoice69', '2019-12-07', 'fullname', '2019-12-07 20:54:10', 'pending'),
(71, 'invoice70', '2019-12-08', 'fullname', '2019-12-08 14:51:48', 'ordered'),
(72, 'invoice71', '2019-12-08', 'fullname', '2019-12-08 14:51:49', 'pending'),
(73, 'invoice72', '2019-12-08', 'fullname', '2019-12-08 16:04:35', 'pending'),
(74, 'invoice73', '2019-12-11', 'fullname', '2019-12-11 11:44:06', 'ordered'),
(75, 'invoice74', '2019-12-11', 'fullname', '2019-12-11 11:44:48', 'ordered'),
(76, 'invoice75', '2019-12-11', 'fullname', '2019-12-11 11:44:49', 'pending'),
(77, 'invoice76', '2019-12-12', 'fullname', '2019-12-12 08:19:00', 'pending'),
(78, 'invoice77', '2019-12-12', 'fullname', '2019-12-12 08:19:33', 'pending'),
(79, 'invoice78', '2019-12-12', 'fullname', '2019-12-12 15:29:41', 'pending'),
(80, 'invoice79', '2019-12-12', 'fullname', '2019-12-12 15:36:28', 'pending'),
(81, 'invoice80', '2019-12-12', 'fullname', '2019-12-12 15:58:23', 'pending'),
(82, 'invoice81', '2019-12-12', 'fullname', '2019-12-12 16:08:43', 'pending'),
(83, 'invoice82', '2019-12-12', 'fullname', '2020-02-11 22:12:12', 'ordered'),
(84, 'invoice83', '2019-12-12', 'fullname', '2019-12-12 18:46:16', 'ordered'),
(85, 'invoice84', '2019-12-12', 'fullname', '2019-12-12 18:46:17', 'pending'),
(86, 'invoice85', '2019-12-16', 'fullname', '2019-12-16 15:13:09', 'ordered'),
(87, 'invoice86', '2019-12-16', 'fullname', '2019-12-16 15:13:09', 'pending'),
(88, 'invoice87', '2019-12-17', 'fullname', '2019-12-17 00:13:08', 'ordered'),
(89, 'invoice88', '2019-12-17', 'fullname', '2019-12-17 00:13:08', 'pending'),
(90, 'invoice89', '2019-12-19', 'fullname', '2019-12-19 00:29:24', 'pending'),
(91, 'invoice90', '2019-12-19', 'fullname', '2019-12-19 01:03:54', 'inventory'),
(92, 'invoice91', '2019-12-19', 'fullname', '2019-12-19 01:03:54', 'pending'),
(93, 'invoice92', '2019-12-19', 'fullname', '2019-12-19 07:40:30', 'pending'),
(94, 'invoice93', '2019-12-19', 'fullname', '2019-12-19 08:47:06', 'unpaid'),
(95, 'invoice94', '2019-12-19', 'fullname', '2019-12-19 08:47:06', 'pending'),
(96, 'invoice95', '2019-12-19', 'fullname', '2019-12-19 09:33:52', 'pending'),
(97, 'invoice96', '2019-12-19', 'fullname', '2019-12-19 09:36:37', 'pending'),
(98, 'invoice97', '2019-12-19', 'fullname', '2019-12-19 09:39:38', 'pending'),
(99, 'invoice98', '2019-12-19', 'fullname', '2019-12-19 09:44:04', 'pending'),
(100, 'invoice99', '2019-12-19', 'fullname', '2019-12-19 09:46:35', 'pending'),
(101, 'invoice100', '2019-12-19', 'fullname', '2019-12-19 10:01:36', 'pending'),
(102, 'invoice101', '2019-12-20', 'fullname', '2019-12-20 08:21:17', 'pending'),
(103, 'Ref_Number102', '2019-12-20', 'fullname', '2019-12-20 08:39:10', 'pending'),
(104, 'Ref_Number103', '2019-12-20', 'fullname', '2019-12-20 09:16:39', 'pending'),
(105, 'Ref_Number104', '2019-12-20', 'fullname', '2019-12-20 09:17:02', 'pending'),
(106, 'Ref_Number105', '2019-12-20', 'fullname', '2019-12-20 09:17:28', 'ordered'),
(107, 'Ref_Number106', '2019-12-20', 'fullname', '2019-12-20 09:17:30', 'ordered'),
(108, 'Ref_Number107', '2019-12-20', 'fullname', '2019-12-20 09:17:31', 'ordered'),
(109, 'Ref_Number108', '2019-12-20', 'fullname', '2019-12-20 09:17:46', 'ordered'),
(110, 'Ref_Number109', '2019-12-20', 'fullname', '2019-12-20 09:17:52', 'ordered'),
(111, 'Ref_Number110', '2019-12-20', 'fullname', '2019-12-20 09:17:57', 'ordered'),
(112, 'Ref_Number111', '2019-12-20', 'fullname', '2019-12-20 11:13:01', 'ordered'),
(113, 'invoice112', '2019-12-20', 'fullname', '2019-12-20 11:13:01', 'pending'),
(114, 'Ref_Number113', '2019-12-20', 'fullname', '2019-12-20 13:34:40', 'ordered'),
(115, 'Ref_Number114', '2019-12-20', 'fullname', '2019-12-20 13:34:48', 'ordered'),
(116, 'Ref_Number115', '2019-12-20', 'fullname', '2019-12-20 13:34:57', 'ordered'),
(117, 'Ref_Number116', '2019-12-20', 'fullname', '2019-12-20 13:35:13', 'ordered'),
(118, 'Ref_Number117', '2019-12-20', 'fullname', '2019-12-20 13:39:59', 'ordered'),
(119, 'Ref_Number118', '2019-12-20', 'fullname', '2019-12-20 13:46:00', 'ordered'),
(120, 'Ref_Number119', '2019-12-20', 'fullname', '2019-12-20 13:48:32', 'ordered'),
(121, 'Ref_Number120', '2019-12-20', 'fullname', '2019-12-20 13:51:52', 'ordered'),
(122, 'Ref_Number121', '2019-12-20', 'fullname', '2019-12-20 13:51:56', 'ordered'),
(123, 'Ref_Number122', '2019-12-20', 'fullname', '2019-12-20 13:51:58', 'ordered'),
(124, 'Ref_Number123', '2019-12-20', 'fullname', '2019-12-20 13:52:13', 'ordered'),
(125, 'Ref_Number124', '2019-12-20', 'fullname', '2019-12-20 13:52:39', 'ordered'),
(126, 'Ref_Number125', '2019-12-20', 'fullname', '2019-12-20 13:53:44', 'ordered'),
(127, 'Ref_Number126', '2019-12-20', 'fullname', '2019-12-20 13:57:35', 'ordered'),
(128, 'Ref_Number127', '2019-12-20', 'fullname', '2019-12-20 13:57:36', 'pending'),
(129, 'Ref_Number128', '2019-12-20', 'fullname', '2019-12-20 15:15:02', 'pending'),
(130, 'Ref_Number129', '2020-01-31', 'fullname', '2020-01-31 11:12:32', 'pending'),
(131, 'invoice130', '2020-02-11', 'fullname', '2020-02-11 22:03:05', 'ordered'),
(132, 'invoice131', '2020-02-12', 'fullname', '2020-02-11 22:03:05', 'pending'),
(133, 'invoice132', '2020-02-12', 'fullname', '2020-02-11 22:12:12', 'pending'),
(134, 'invoice133', '2017-01-11', 'fullname', '2017-01-12 07:27:14', 'pending'),
(135, 'Ref_Number134', '2020-02-26', 'fullname', '2020-02-26 20:56:08', 'pending'),
(136, 'invoice135', '2020-02-26', 'fullname', '2020-02-26 21:28:53', 'pending'),
(137, 'invoice136', '2020-02-27', 'fullname', '2020-02-27 07:03:26', 'pending'),
(138, 'Ref_Number137', '2020-02-27', 'fullname', '2020-02-27 09:10:00', 'pending'),
(139, 'Ref_Number138', '2020-03-06', 'fullname', '2020-03-06 19:26:32', 'ordered'),
(140, 'Ref_Number139', '2020-03-06', 'fullname', '2020-03-06 19:26:32', 'pending'),
(141, 'invoice140', '2020-03-09', 'fullname', '2020-03-09 20:04:08', 'pending'),
(142, 'Ref_Number141', '2020-04-01', 'fullname', '2020-04-01 15:56:40', 'pending'),
(143, 'invoice142', '2020-04-01', 'fullname', '2020-04-01 16:46:06', 'ordered'),
(144, 'invoice143', '2020-04-01', 'fullname', '2020-04-01 16:48:07', 'ordered'),
(145, 'invoice144', '2020-04-01', 'fullname', '2020-04-01 16:50:11', 'ordered'),
(146, 'invoice145', '2020-04-01', 'fullname', '2020-04-01 16:50:11', 'pending'),
(147, 'invoice146', '2020-04-01', 'fullname', '2020-04-01 17:01:33', 'pending'),
(148, 'Ref_Number147', '2020-04-05', 'fullname', '2020-04-05 19:30:39', 'pending'),
(149, 'Ref_Number148', '2020-04-05', 'fullname', '2020-04-05 19:49:31', 'ordered'),
(150, 'Ref_Number149', '2020-04-05', 'fullname', '2020-04-05 19:49:31', 'pending'),
(151, 'Ref_Number150', '2020-04-05', 'fullname', '2020-04-05 20:17:24', 'pending'),
(152, 'Ref_Number151', '2020-04-05', 'fullname', '2020-04-05 20:25:29', 'ordered'),
(153, 'Ref_Number152', '2020-04-05', 'fullname', '2020-04-05 20:25:29', 'pending'),
(154, 'Ref_Number153', '2020-04-05', 'fullname', '2020-04-05 21:11:34', 'ordered'),
(155, 'Ref_Number154', '2020-04-05', 'fullname', '2020-04-05 21:11:34', 'pending'),
(156, 'Ref_Number155', '2020-04-05', 'fullname', '2020-04-05 21:42:06', 'ordered'),
(157, 'Ref_Number156', '2020-04-05', 'fullname', '2020-04-05 21:45:03', 'ordered'),
(158, 'Ref_Number157', '2020-04-05', 'fullname', '2020-04-05 21:45:03', 'pending'),
(159, 'Ref_Number158', '2020-04-05', 'fullname', '2020-04-05 22:04:36', 'pending'),
(160, 'Ref_Number159', '2020-04-05', 'fullname', '2020-04-05 22:06:01', 'pending'),
(161, 'invoice160', '2020-04-05', 'fullname', '2020-04-05 22:29:18', 'ordered'),
(162, 'invoice161', '2020-04-05', 'fullname', '2020-04-05 22:38:38', 'ordered'),
(163, 'invoice162', '2020-04-05', 'fullname', '2020-04-05 22:38:38', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(250) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `cost` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `unit` varchar(250) NOT NULL,
  `expired_date` varchar(250) NOT NULL,
  `taxes` varchar(250) NOT NULL,
  `stock` varchar(250) NOT NULL,
  `supplier` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `date_done` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `category` varchar(250) NOT NULL,
  `measure` varchar(250) NOT NULL,
  `lot` varchar(250) NOT NULL,
  `sdc_n` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `measurement`
--

CREATE TABLE `measurement` (
  `id` int(250) NOT NULL,
  `measure` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurement`
--

INSERT INTO `measurement` (`id`, `measure`, `done`) VALUES
(11, 'pc', '');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE `order_status` (
  `id` int(250) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item` varchar(250) NOT NULL,
  `qty` varchar(250) NOT NULL,
  `exp` varchar(250) NOT NULL,
  `cost` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `pay_type` varchar(250) NOT NULL,
  `paid` varchar(250) NOT NULL,
  `sdc` varchar(250) NOT NULL,
  `stock_status` varchar(250) NOT NULL,
  `sale_status` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `customer` varchar(250) NOT NULL,
  `date_done` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `done_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(250) NOT NULL,
  `insurance` varchar(250) NOT NULL,
  `insu_pay` varchar(250) NOT NULL,
  `invoice` varchar(250) NOT NULL,
  `paid` varchar(250) NOT NULL,
  `pay_type` varchar(250) NOT NULL,
  `status` varchar(250) NOT NULL,
  `datedone` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `done` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `insurance`, `insu_pay`, `invoice`, `paid`, `pay_type`, `status`, `datedone`, `done`) VALUES
(14, '', '', 'invoice74', '500', 'credit card', 'ordered', '2019-12-11 11:44:48', 'fullname'),
(15, '', '', 'invoice75', '500', 'credit card', 'pending', '2019-12-11 12:53:14', 'fullname'),
(16, '', '', 'invoice82', '4000', 'cash', 'ordered', '2019-12-12 17:45:22', 'fullname'),
(17, '', '', 'invoice82', '4000', 'credit card', 'ordered', '2019-12-12 17:45:22', 'fullname'),
(18, '', '', 'invoice82', '3000', 'cash', 'ordered', '2019-12-12 17:45:22', 'fullname'),
(19, '', '', 'invoice82', '500o', 'cash', 'pending', '2019-12-12 18:40:00', 'fullname'),
(20, '', '', 'invoice83', '1500', 'mobile money', 'ordered', '2019-12-12 18:46:16', 'fullname'),
(21, '', '', 'invoice83', '1000', 'cash', 'ordered', '2019-12-12 18:46:16', 'fullname'),
(22, '', '', 'invoice89', '20000', 'credit card', 'ordered', '2019-12-19 00:29:24', 'fullname'),
(23, 'RSSB', '8925', '1575', '', '', 'ordered', '2020-02-11 21:36:18', 'fullname'),
(24, 'RSSB', '8925', 'invoice130', '1575', 'mobile money', 'ordered', '2020-02-11 21:50:42', 'fullname'),
(25, 'RSSB', '8925', 'invoice130', '1575', '', 'ordered', '2020-02-11 21:53:31', 'fullname'),
(26, 'RSSB', '8925', 'invoice130', '1575', '', 'ordered', '2020-02-11 22:03:04', 'fullname'),
(27, 'RSSB', '4250', 'invoice82', '750', 'mobile money', 'ordered', '2020-02-11 22:12:12', 'fullname'),
(28, 'MMI', '60', 'invoice133', '40', 'mobile money', 'ordered', '2017-01-12 07:27:14', 'fullname'),
(29, 'UAP', '500', 'invoice144', '1000', 'cash', 'ordered', '2020-04-01 16:50:11', 'fullname'),
(30, 'UAP', '1700', 'invoice146', '1700', '', 'ordered', '2020-04-01 17:01:33', 'fullname'),
(31, 'UAP', '6000', 'invoice160', '60000', 'cash', 'ordered', '2020-04-05 22:29:17', 'fullname'),
(32, 'UAP', '6000', 'invoice160', '60000', 'cash', 'ordered', '2020-04-05 22:29:18', 'fullname'),
(33, 'UAP', '3500', 'invoice161', '3500', '', 'ordered', '2020-04-05 22:38:38', 'fullname');

-- --------------------------------------------------------

--
-- Table structure for table `pmethod`
--

CREATE TABLE `pmethod` (
  `id` int(250) NOT NULL,
  `method` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pmethod`
--

INSERT INTO `pmethod` (`id`, `method`) VALUES
(4, 'cash'),
(6, 'mobile money');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` int(250) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item` varchar(250) NOT NULL,
  `qty` varchar(250) NOT NULL,
  `cost` varchar(250) NOT NULL,
  `sdc` varchar(250) NOT NULL,
  `total` varchar(250) NOT NULL,
  `pay_type` varchar(250) NOT NULL,
  `paid` varchar(250) NOT NULL,
  `stock_status` varchar(250) NOT NULL,
  `sale_status` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `customer` varchar(250) NOT NULL,
  `date_done` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `done_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `order_id`, `barcode`, `item`, `qty`, `cost`, `sdc`, `total`, `pay_type`, `paid`, `stock_status`, `sale_status`, `done`, `customer`, `date_done`, `done_date`) VALUES
(5, 'Ref_Number119', '54366', 'Energry', '1', '4000', '', '4000', '', '', 'out', 'ordered', 'fullname', '', '2019-12-20 13:48:31', '2019-12-20'),
(6, 'Ref_Number120', '54366', 'Energry', '1', '4000', '', '4000', '', '', 'out', 'ordered', 'fullname', '', '2019-12-20 13:51:52', '2019-12-20'),
(7, 'Ref_Number125', '123654789', 'Energry', '1', '400', '', '400', '', '', 'out', 'ordered', 'fullname', '', '2019-12-20 13:53:44', '2019-12-20'),
(8, 'Ref_Number126', '123654789', 'Energry', '1', '400', '', '400', '', '', 'out', 'ordered', 'fullname', '', '2019-12-20 13:57:35', '2019-12-20'),
(9, 'Ref_Number127', '54366', 'Energry', '1', '4000', '', '4000', '', '', 'out', 'pending', 'fullname', 'super', '2019-12-20 15:14:24', '2019-12-20'),
(10, 'invoice129', '54366', 'Energry', '4', '4000', '', '16000', '', '', 'out', 'ordered', 'fullname', 'Sun', '2020-01-31 11:12:32', '2020-01-31'),
(14, 'invoice134', '', 'PARACETAMOL SP 100ML', '12', '600', '', '7200', '', '', 'out', 'ordered', 'fullname', 'Sun', '2020-02-27 09:23:51', '2020-02-26'),
(15, 'invoice137', '', 'PARACETAMOL SP 100ML', '12', '600', '', '7200', '', '', 'out', 'ordered', 'fullname', '', '2020-02-27 09:23:51', '2020-02-27'),
(16, 'invoice138', '', 'ABACOFF SP 100ML', '1', '700', '', '700', '', '', 'out', 'ordered', 'fullname', '', '2020-03-06 19:26:32', '2020-03-05'),
(17, 'invoice138', '', 'PARACETAMOL INJECTABLE 120MG', '1', '1', '', '1', '', '', 'out', 'ordered', 'fullname', '', '2020-03-06 19:26:32', '2020-03-06'),
(18, 'invoice138', '', 'PAIDOTERIN SP 100ML', '3', '4000', '', '12000', '', '', 'out', 'ordered', 'fullname', '', '2020-03-06 19:26:32', '2020-03-06'),
(19, 'invoice138', '', 'AUGMENTIN NOURISSON SP 30ML', '1', '3500', '', '3500', '', '', 'out', 'ordered', 'fullname', '', '2020-03-06 19:26:32', '2020-03-06'),
(20, 'invoice138', '', 'BRUFEN SP 100ML', '1', '5600', '', '5600', '', '', 'out', 'ordered', 'fullname', '', '2020-03-06 19:26:32', '2020-03-06'),
(24, 'invoice141', '', 'PARACETAMOL SP 60ML', '5', '500', '', '2500', '', '', 'out', 'ordered', 'fullname', '', '2020-04-01 15:56:40', '2020-04-01'),
(25, 'invoice141', '', 'PAIDOTERIN SP 100ML', '4', '4000', '', '16000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-01 15:56:40', '2020-04-01'),
(26, 'invoice141', '', 'POLYGYNAX 12 OVULE', '2', '590', '', '1180', '', '', 'out', 'ordered', 'fullname', '', '2020-04-01 15:56:40', '2020-04-01'),
(27, 'invoice147', '', 'PAIDOTERIN SP 100ML', '4', '4000', '', '16000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 19:30:39', '2020-04-05'),
(28, 'invoice147', '', 'CADISTIN SP 100ML', '5', '1000', '', '5000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 19:30:39', '2020-04-05'),
(29, 'invoice147', '', 'FLUDITEC SP 2% ENF 125ML', '2', '2800', '', '5600', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 19:30:39', '2020-04-05'),
(30, 'invoice148', '', 'PAIDOTERIN SP 100ML', '1', '4000', '', '4000', '', '', 'out', 'ordered', 'fullname', 'Rutembesa Elvis', '2020-04-05 19:42:52', '2020-04-05'),
(31, 'Ref_Number148', '', 'AUGMENTIN ENFANT SP 60ML', '4', '6000', 'SXW66', '24000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 21:53:23', '2020-04-05'),
(32, 'Ref_Number148', '', 'TERPONE SP 180ML AD', '2', '1', '', '2', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 19:49:31', '2020-04-05'),
(33, 'invoice150', '', 'ACINET SP 100ML', '4', '3000', '', '12000', '', '', 'out', 'ordered', 'fullname', 'Nyirangarama', '2020-04-05 20:17:24', '2020-04-05'),
(34, 'invoice151', '', 'ACYCLOVIR(UNIVIR) TAB 200MG 30', '1', '1', '', '1', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 20:23:58', '2020-04-05'),
(35, 'Ref_Number151', '', 'PAIDOTERIN SP 100ML', '5', '4000', '', '20000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 20:25:29', '2020-04-05'),
(36, 'Ref_Number151', '', 'AUGMENTIN ENFANT SP 60ML', '4', '6000', 'SXW66', '24000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 21:53:23', '2020-04-05'),
(37, 'Ref_Number151', '', 'POSITON 30GR CREME 1 TUBE FAES', '2', '500', '', '1000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 20:47:12', '2020-04-05'),
(38, 'Ref_Number153', '', 'CANDID MOUTHPAINT 15ML(CANDI08)', '3', '2300', '', '6900', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 21:11:34', '2020-04-05'),
(39, 'Ref_Number153', '', 'PAIDOTERIN SP 100ML', '2', '4000', '', '8000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 21:11:34', '2020-04-05'),
(40, 'Ref_Number153', '', 'SEKROL SP 15MG 100ML ENFANT', '2', '600', 'xd087', '1200', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 21:24:28', '2020-04-05'),
(41, 'invoice155', '', 'PAIDOTERIN SP 100ML', '1', '4000', '', '4000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 21:42:06', '2020-04-05'),
(42, 'invoice155', '', 'PARACETAMOL SP 100ML', '1', '600', '', '600', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 21:42:06', '2020-04-05'),
(45, 'Ref_Number156', '', 'AUGMENTIN ENFANT SP 60ML', '4', '6000', 'SXW66', '24000', '', '', 'out', 'ordered', 'fullname', '', '2020-04-05 21:53:23', '2020-04-05');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(250) NOT NULL,
  `company` varchar(250) NOT NULL,
  `taxes` varchar(250) NOT NULL,
  `logo` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `tin` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `company`, `taxes`, `logo`, `location`, `phone`, `tin`, `done`) VALUES
(1, 'Uruyuki', '18%', '', 'Nyamirambo', '+250781459147', '109123649', 'fullname');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(250) NOT NULL,
  `stock_name` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `stock_name`, `done`) VALUES
(1, 'STOCK PRENCIPAL', '');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id` int(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `tin` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `date_done` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `tin`, `phone`, `email`, `location`, `done`, `date_done`) VALUES
(3, 'Nyirangarama', '11223344556', '0787381418', 'rutembesaelvis2@gmail.com', 'Musanzee', 'fullname', '2019-10-14 02:41:10'),
(4, 'Kababa', '1088885212', '07888888888', 'kaba@gmail.com', 'gisimeti', 'fullname', '2019-12-12 15:32:39'),
(5, 'mutuzo', '10088779', '', '', '', 'fullname', '2019-12-19 09:42:11'),
(6, 'fafa', '7878', '4585454545454', 'fff', 'ff', 'fullname', '2019-12-19 10:04:43'),
(7, '', '', '', '', '', 'fullname', '2019-12-19 10:05:56'),
(8, 'Rutembesa Elvis', '11223344556', '0787381418', 'rutembesaelvis2@gmail.com', 'Nyamirambo', 'fullname', '2019-12-19 22:37:42'),
(9, 'Nyirangaramaaaaaaaaa', '11223344556', '0787381418', 'rutembesaelvis2@gmail.com', '11223344556', 'fullname', '2019-12-19 22:38:26'),
(10, 'fullnameaaaaaa', '11223344556', '0787381418', 'rutembesaelvis2@gmail.com', 'Nyamirambo', 'fullname', '2019-12-19 23:37:03'),
(11, 'bgjilnsldbnjisdnbkjnsdkbnk', '11223344556', '688967898', 'rutembesaelvis2@gmail.com', 'Nyamirambo', 'fullname', '2019-12-19 23:57:40'),
(12, 'super', '100000000', '0788888888', 'dfg@gmail.com', 'kicukiro', 'fullname', '2019-12-20 15:14:09'),
(13, 'Sun', '1010', '078883819', 'sun@gmail.com', 'Kigali', 'fullname', '2020-01-31 11:12:05'),
(14, 'Rutembesa Elvis', '888', '781459145', 'rutembesaelvis2@gmail.com', 'kgl', 'niwemahoro nicole', '2020-08-07 10:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(250) NOT NULL,
  `barcode` varchar(250) NOT NULL,
  `item_name` varchar(250) NOT NULL,
  `quantity` varchar(250) NOT NULL,
  `done` varchar(250) NOT NULL,
  `date_done` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adjust`
--
ALTER TABLE `adjust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history_log`
--
ALTER TABLE `history_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `insurances`
--
ALTER TABLE `insurances`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurement`
--
ALTER TABLE `measurement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pmethod`
--
ALTER TABLE `pmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adjust`
--
ALTER TABLE `adjust`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `history_log`
--
ALTER TABLE `history_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;
--
-- AUTO_INCREMENT for table `insurances`
--
ALTER TABLE `insurances`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `measurement`
--
ALTER TABLE `measurement`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `order_status`
--
ALTER TABLE `order_status`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `pmethod`
--
ALTER TABLE `pmethod`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
