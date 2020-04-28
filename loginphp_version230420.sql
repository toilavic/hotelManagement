-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 23, 2020 lúc 07:12 AM
-- Phiên bản máy phục vụ: 10.1.22-MariaDB
-- Phiên bản PHP: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `loginphp`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkin`
--

CREATE TABLE `checkin` (
  `id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `stuff_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `payment`
--

INSERT INTO `payment` (`id`, `stuff_name`, `staff_id`, `date`, `status`, `desc`) VALUES
(1, 'table', 1, '2020-04-20', 0, ''),
(5, 'Con chim2', 4, '0000-00-00', 0, 'ok'),
(6, 'Con chim23', 4, '0000-00-00', 0, 'ok'),
(7, 'Con chim23', 4, '0000-00-00', 0, 'ok'),
(8, 'Con chim23hhhhhhh', 4, '0000-00-00', 0, 'okgfhgfdhgdfhdf'),
(9, 'Con chim23hhhhhhh', 4, '0000-00-00', 0, 'okgfhgfdhgdfhdf'),
(10, 'Con chim23hhhhhhh', 4, '0000-00-00', 0, 'okgfhgfdhgdfhdf'),
(11, 'Con chim23hhhhhhh', 4, '0000-00-00', 0, 'okgfhgfdhgdfhdf'),
(12, 'Con chim23hhhhhhh', 4, '0000-00-00', 0, 'okgfhgfdhgdfhdf'),
(13, 'test', 8, '2020-12-31', 0, '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `register_tr2k`
--

CREATE TABLE `register_tr2k` (
  `id` int(10) NOT NULL,
  `username` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` tinyint(1) NOT NULL,
  `firstname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` int(11) NOT NULL,
  `hiring_date` date NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postalCode` int(11) NOT NULL,
  `fullName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `register_tr2k`
--

INSERT INTO `register_tr2k` (`id`, `username`, `password`, `type`, `firstname`, `lastname`, `telephone`, `email`, `department`, `salary`, `hiring_date`, `address`, `postalCode`, `fullName`) VALUES
(1, 'admin@test', '123456', 0, 'admin', 'test', 2, 'toilavic', '1', 20000, '0000-00-00', 'Oulu', 999, 'Vic'),
(4, 'user@test', '123456', 1, 'test', 'staff', 233232, '2323', '2323', 2200, '2000-02-02', '', 0, '0'),
(5, 't18042k@gmail.com', '123456', 1, 'Thang', 'Nguyen', 1654534768, 't18042k@gmail.com', 'd', 0, '0000-00-00', '', 0, '0'),
(6, 'test@test', '123456', 1, 'test1', '22', 233232, 'toilavic', 'deewqew', 20000, '2200-02-02', '', 0, '0'),
(7, 'newss186', '123456', 1, 'Thang', 'Nguyen', 1654534768, 't18042k@gmail.com', 'asdsa', 0, '0000-00-00', 'ADSS', 65000, 'Thang Nguyen'),
(8, 'bachelor2019', '123456', 1, 'Thang', 'Nguyen', 2147483647, 't18042k@gmail.com', 'ABC', 200, '0000-00-00', '34A 1/4 Kajaanintie Oulu Finland', 90130, 'Nguyen');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reservation`
--

CREATE TABLE `reservation` (
  `customer_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `checkin_date` varchar(50) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `reservation_date` varchar(50) NOT NULL,
  `reservation_price` float NOT NULL,
  `Status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `reservation`
--

INSERT INTO `reservation` (`customer_id`, `room_id`, `checkin_date`, `employee_id`, `reservation_date`, `reservation_price`, `Status`) VALUES
(1, 1, '4-25-2020', 1, '4-20-2020', 300, 0),
(3, 0, '4-26-2020', 2, '4-20-2020', 29, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `room`
--

CREATE TABLE `room` (
  `room_id` int(11) NOT NULL,
  `room_type` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `room`
--

INSERT INTO `room` (`room_id`, `room_type`, `desc`) VALUES
(1, 'Luxury', 'Luxury rooms with a view of the City are elegantly appointed with king beds, working desks with Bluetooth connectivity for guests to enjoy personal entertainment and spacious marble bathrooms featuring freestanding oval soaking tubs.'),
(2, 'pro', 'Audio Engineer Mac Pro Workstation, produce, edit, and mix audio. In a typical week I can be doing anything from editing and mixing feature films and documentaries to mixing music albums or producing podcasts.'),
(3, 'normal', 'simple and uncomplicated, with canisters neatly lining practical and minimal open shelves.'),
(4, 'vietnam tradition', 'Fitted with tiled flooring, air-conditioned rooms are furnished with a wardrobe, a flat-screen cable TV, minibar and seating area. The private bathroom comes with a hairdryer, shower facility and free toiletries.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(250) NOT NULL,
  `Address` text NOT NULL,
  `City` varchar(250) NOT NULL,
  `PostalCode` varchar(30) NOT NULL,
  `Country` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `tbl_customer`
--

INSERT INTO `tbl_customer` (`CustomerID`, `CustomerName`, `Address`, `City`, `PostalCode`, `Country`) VALUES
(1, 'Maria Anders', 'Obere Str. 57', 'Berlin', '12209', 'Germany'),
(2, 'Ana Trujillo', 'Avda. de la Construction 2222', 'Mexico D.F.', '5021', 'Mexico'),
(3, 'Antonio Moreno', 'Mataderos 2312', 'Mexico D.F.', '5023', 'Mexico'),
(4, 'Thomas Hardy', '120 Hanover Sq.', 'London', 'WA1 1DP', 'UK'),
(5, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(6, 'Wolski Zbyszek', 'ul. Filtrowa 68', 'Walla', '01-012', 'Poland'),
(7, 'Matti Karttunen', 'Keskuskatu 45', 'Helsinki', '21240', 'Finland'),
(8, 'Karl Jablonski', '305 - 14th Ave. S. Suite 3B', 'Seattle', '98128', 'USA'),
(9, 'Paula Parente', 'Rua do Mercado, 12', 'Resende', '08737-363', 'Brazil'),
(10, 'Pirkko Koskitalo', 'Torikatu 38', 'Oulu', '90110', 'Finland'),
(14, 'Vic', 'OAMK', 'Oulu', '90130', 'Finland'),
(15, 'Vic', 'OAMK', 'Oulu', '90130', 'Finland');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `register_tr2k`
--
ALTER TABLE `register_tr2k`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Chỉ mục cho bảng `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`room_id`);

--
-- Chỉ mục cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `checkin`
--
ALTER TABLE `checkin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT cho bảng `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT cho bảng `register_tr2k`
--
ALTER TABLE `register_tr2k`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT cho bảng `room`
--
ALTER TABLE `room`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
