-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 06:26 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcustomer`
--

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phonenumber` int(10) NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `fullname`, `address`, `phonenumber`, `password`, `level`) VALUES
(93, 'Trfkkfk', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, '12334', 0),
(94, 'aaaaaaaaaaaaaa', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'asdff', 0),
(95, 'qqqqqqqqqqqqq', 'dddddd', 2147483647, 'wwwwwwwwww', 0),
(96, 'Trang Than', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'ádf', 0),
(97, 'Tradfj', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'ạnkkfdnvjk', 0),
(98, 'Trang Thanzcxgch', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'ádfgm', 0),
(99, 'Trang Thanqưefgh', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'qưerty', 0),
(100, 'ểthj', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'ádsfsdg', 0),
(101, 'TrangLKFJG', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'ẤDF', 0),
(102, 'Trang Thanmnb', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'hgfds', 0),
(103, 'jdnsfhj', 'bshjbfi', 8943298, 'jbhj', 1),
(104, 'mimi', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'jfh', 0),
(105, 'Trang kkkxkk', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'qqqqq', 0),
(107, 'dfzhhyjfdfdfd', 'dsV', 988390951, 'fdsdsd', 1),
(108, 'qewfg', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'sadassdf', 1),
(109, 'tr', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988, '12345', 0),
(110, 'Traasdfgfh', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'hhjjk', 0),
(111, 'Tra', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'SADF', 0),
(112, 'Trang ThanSDDDD', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390951, 'QASWXCDFV', 0),
(113, 'TranASDF', 'Cham - Tang Tien -Viet Yen -Bac Giang', 988390, 'SSSSS', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
