-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 09, 2019 at 11:30 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onetdb`
--
CREATE DATABASE IF NOT EXISTS `onetdb` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `onetdb`;

-- --------------------------------------------------------

--
-- Table structure for table `booking_table`
--

CREATE TABLE `booking_table` (
  `booking_id` int(11) NOT NULL,
  `booking_seat_no` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `booking_start_time` int(10) NOT NULL,
  `booking_finish_time` int(10) NOT NULL,
  `booking_date` datetime NOT NULL,
  `booking_endtime` datetime NOT NULL,
  `status_seat` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `booking_table`
--

INSERT INTO `booking_table` (`booking_id`, `booking_seat_no`, `booking_start_time`, `booking_finish_time`, `booking_date`, `booking_endtime`, `status_seat`, `member_id`) VALUES
(1, 'A1', 0, 0, '2019-05-09 11:28:10', '2019-05-09 11:46:10', 'b', 12),
(2, 'A2', 0, 0, '2019-05-09 11:37:47', '2019-05-09 11:55:47', 'b', 2),
(3, 'A3', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'b', 0),
(4, 'A4', 0, 0, '2019-05-09 16:06:34', '2019-05-09 16:24:34', 'b', 2),
(5, 'A5', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'a', 0),
(6, 'A6', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'a', 0),
(7, 'A7', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'b', 0),
(8, 'A8', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'a', 0),
(9, 'A9', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'a', 0),
(10, 'A10', 0, 0, '2019-05-09 10:45:41', '2019-05-09 11:03:41', 'b', 11);

-- --------------------------------------------------------

--
-- Table structure for table `card_table`
--

CREATE TABLE `card_table` (
  `card_id` int(11) NOT NULL,
  `card_username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `card_password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `typecard` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `card_img` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `card_table`
--

INSERT INTO `card_table` (`card_id`, `card_username`, `card_password`, `typecard`, `card_img`) VALUES
(8, 'C4697', '520472', '20฿', 'card1-01.jpg'),
(9, 'M1598', '986655', '50฿', 'card3-01.jpg'),
(10, 'P7848', '123456', '100฿', 'card4-01.jpg'),
(11, 'Q4545', '985678', '150฿', 'card5-01.jpg'),
(12, 'L1313', '256869', '200฿', 'card8-01.jpg'),
(13, 'N1414', '458558', '300฿', 'card7-01.jpg'),
(14, '3556', '1515', '150฿', 'card1-01.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_id` int(11) NOT NULL,
  `employee_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `employee_password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `employee_firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `employee_lastname` varchar(50) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `employee_gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `employee_birthday` date NOT NULL,
  `employee_picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `employee_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `employee_tel` int(10) NOT NULL,
  `employee_salary` int(10) NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_id`, `employee_username`, `employee_password`, `employee_firstname`, `employee_lastname`, `employee_gender`, `employee_birthday`, `employee_picture`, `employee_email`, `employee_tel`, `employee_salary`, `status`) VALUES
(2, 'employee2', '1234', 'พนักงาน2', 'พนักงาน2นะจ้า', 'ชาย', '2019-02-28', 'ble.jpg', 'test@test.com', 1234567, 20000, 'employee'),
(5, 'employee5', '1234', 'ปฏิภาณ', 'พัต', 'ชาย', '2019-05-28', 'img3.jpg', 'ัyenyen@as', 581658, 10000, 'employee');

-- --------------------------------------------------------

--
-- Table structure for table `member_table`
--

CREATE TABLE `member_table` (
  `member_id` int(11) NOT NULL,
  `member_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `member_password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `member_firstname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `member_lastname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `member_gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `member_birthday` date NOT NULL,
  `member_picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `member_email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `member_tel` int(10) NOT NULL,
  `member_time` time NOT NULL,
  `status` varchar(10) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `member_table`
--

INSERT INTO `member_table` (`member_id`, `member_username`, `member_password`, `member_firstname`, `member_lastname`, `member_gender`, `member_birthday`, `member_picture`, `member_email`, `member_tel`, `member_time`, `status`) VALUES
(1, 'member1', '1234', 'สมชาย', 'คะ', 'ชาย', '2019-02-28', 'guy.jpg', 'test@test.com', 123, '00:00:00', 'member'),
(2, 'member2', '1234', 'สมหมาย', 'นะคะ', 'ชาย', '2019-02-28', 'gamee.jpg', 'test@test.com', 123456, '00:00:00', 'member'),
(4, 'member3', '1234', 'ปฏิภาณ', 'รอดเมฆ', 'ชาย', '2019-03-01', '1915974_1174881192545422_4395743021956027960_n.jpg', 'test@test', 1234, '00:00:00', 'member'),
(6, 'iceicen', '2340', 'ณัฐชยา ', 'แสงอรุณ', 'ชาย', '1997-03-02', '555.jpg', 'icekittyza', 876302010, '00:00:00', 'member'),
(8, 'ice', '2340', 'ณัฐชยา', 'แสงอรุณ', 'ชาย', '2019-05-06', '9882.jpg', 'icekittyza', 876302010, '00:00:00', 'member'),
(12, 'nasren1', '1234', 'นัสเรน', 'สะอีดี', 'ชาย', '2019-05-10', 'img2.jpg', 'yenyen@', 81755555, '00:00:00', 'member'),
(13, 'nasren', '1234', 'ooooo', 'oooo', 'ชาย', '2019-05-17', 'img3.jpg', 'ัyenyen@as', 581658, '00:00:00', 'cencer'),
(14, 'member6', '1234', 'ooooo', 'oooo', 'ชาย', '2019-05-17', 'img3.jpg', 'ัyenyen@as', 581658, '00:00:00', 'cencer');

-- --------------------------------------------------------

--
-- Table structure for table `order_card_table`
--

CREATE TABLE `order_card_table` (
  `order_card` int(11) NOT NULL,
  `card` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `cash` int(10) NOT NULL,
  `time` int(11) NOT NULL,
  `order_username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `img_card` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img_card_success` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `datesave` date NOT NULL,
  `status_card` varchar(40) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_card_table`
--

INSERT INTO `order_card_table` (`order_card`, `card`, `price`, `cash`, `time`, `order_username`, `img_card`, `img_card_success`, `datesave`, `status_card`) VALUES
(2, 'บัตรเติมเวลาประเภท 4.25 ชั่วโมง', 50, 0, 0, '2', '59660862_1110735232383737_5645654727279509504_n.jpg', '', '2019-05-08', 'รอชำระเงิน'),
(3, 'บัตรเติมเวลาประเภท 4.25 ชั่วโมง', 50, 0, 0, '2', '59660862_1110735232383737_5645654727279509504_n.jpg', '', '2019-05-08', 'รอชำระเงิน'),
(4, 'บัตรเติมเวลาประเภท 4.25 ชั่วโมง', 50, 50, 0, '2', '59660862_1110735232383737_5645654727279509504_n.jpg', 'card3-01.jpg', '2019-03-14', 'รอชำระเงิน'),
(5, 'บัตรเติมเวลาประเภท 1.40 ชั่วโมง', 20, 20, 0, '11', 'cardsuss1.jpg', 'card1-01.jpg', '2019-02-11', 'ชำระเงินเรียบร้อยแล้ว'),
(6, 'บัตรเติมเวลาประเภท 1.40 ชั่วโมง', 20, 20, 0, '12', 'cardsuss1.jpg', 'card1-01.jpg', '2019-04-10', 'ชำระเงินเรียบร้อยแล้ว'),
(7, 'บัตรเติมเวลาประเภท 9 ชั่วโมง', 100, 100, 0, '2', '', 'card3-01.jpg', '2019-05-09', 'ชำระเงินเรียบร้อยแล้ว'),
(8, 'บัตรเติมเวลาประเภท 18.20 ชั่วโมง', 200, 100, 0, '2', '', 'card8-01.jpg', '2019-04-09', 'ชำระเงินเรียบร้อยแล้ว'),
(9, 'บัตรเติมเวลาประเภท 13.40 ชั่วโมง', 150, 100, 0, '2', '', 'card5-01.jpg', '2019-03-06', 'ชำระเงินเรียบร้อยแล้ว');

-- --------------------------------------------------------

--
-- Table structure for table `owner_table`
--

CREATE TABLE `owner_table` (
  `owner_id` int(11) NOT NULL,
  `owner_username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `owner_password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `owner_firstname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `owner_lastname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `owner_picture` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(11) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `owner_table`
--

INSERT INTO `owner_table` (`owner_id`, `owner_username`, `owner_password`, `owner_firstname`, `owner_lastname`, `owner_picture`, `status`) VALUES
(2, '3', '3', 'เจ้าของร้าน', 'อิอิ', 'owner.jpg', 'owner'),
(3, 'owner', '1234', 'เจ้าของร้าน', 'นะจ้า', 'owner.jpg', 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_table`
--
ALTER TABLE `booking_table`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `card_table`
--
ALTER TABLE `card_table`
  ADD PRIMARY KEY (`card_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `member_table`
--
ALTER TABLE `member_table`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `order_card_table`
--
ALTER TABLE `order_card_table`
  ADD PRIMARY KEY (`order_card`);

--
-- Indexes for table `owner_table`
--
ALTER TABLE `owner_table`
  ADD PRIMARY KEY (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_table`
--
ALTER TABLE `booking_table`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `card_table`
--
ALTER TABLE `card_table`
  MODIFY `card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `member_table`
--
ALTER TABLE `member_table`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_card_table`
--
ALTER TABLE `order_card_table`
  MODIFY `order_card` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `owner_table`
--
ALTER TABLE `owner_table`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
