-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 26, 2020 lúc 07:03 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `test`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activity_log`
--

CREATE TABLE `activity_log` (
  `log_id` int(11) NOT NULL,
  `fk_user_id` int(11) NOT NULL,
  `activity` int(11) DEFAULT NULL,
  `module` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `activity_log`
--

INSERT INTO `activity_log` (`log_id`, `fk_user_id`, `activity`, `module`, `created_at`) VALUES
(1, 1, 0, 'User Management', '2017-01-11 21:14:54'),
(2, 1, 0, 'User Management', '2017-01-11 21:21:55'),
(3, 1, 0, 'User Management', '2020-10-26 10:54:27'),
(4, 1, 0, 'User Management', '2020-10-26 10:54:31'),
(5, 1, 0, 'User Management', '2020-10-26 11:28:32'),
(6, 1, 0, 'User Management', '2020-10-26 11:29:34'),
(7, 1, 0, 'User Management', '2020-10-26 11:32:01'),
(8, 1, 0, 'User Management', '2020-10-26 11:58:20'),
(9, 1, 0, 'User Management', '2020-10-26 11:58:28'),
(10, 1, 0, 'User Management', '2020-10-26 11:58:50'),
(11, 1, 0, 'User Management', '2020-10-26 11:58:52'),
(12, 1, 0, 'User Management', '2020-10-26 11:58:53'),
(13, 1, 0, 'User Management', '2020-10-26 11:58:56'),
(14, 1, 0, 'User Management', '2020-10-26 11:59:09'),
(15, 1, 0, 'User Management', '2020-10-26 11:59:19'),
(16, 1, 0, 'User Management', '2020-10-26 12:00:11'),
(17, 1, 0, 'User Management', '2020-10-26 12:00:23'),
(18, 1, 0, 'User Management', '2020-10-26 12:03:22');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `role` varchar(25) NOT NULL,
  `status` tinyint(1) DEFAULT 1,
  `created_at` datetime DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `name`, `role`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin@admin.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'Admin', 'admin', 1, '2017-01-12 12:07:57', '2020-10-26 18:03:02'),
(2, 'user@gmail.com', 'f6fdffe48c908deb0f4c3bd36c032e72', 'User One', 'user', 0, '2017-01-12 04:14:51', '2020-10-26 17:59:09'),
(3, 'admin@admina.com', 'd683f4cad52bd43fb727e9455a1f6025', 'a', 'admin', 0, '2020-10-26 18:23:21', '2020-10-26 17:58:28'),
(4, 'admin@v.com', 'fd95e61aee1d4fd74bdb2fcce7242274', 'a', 'admin', 0, '2020-10-26 18:23:27', '2020-10-26 17:59:19'),
(5, 'admin@1.com', '10a6ceed7b1b2d03054419a6677a302b', 'a', 'admin', 1, '2020-10-26 18:23:36', NULL),
(6, 'admin@2.com', 'c2fa2e6a978d6fc83b636e10c5687e5f', 'a', 'admin', 0, '2020-10-26 18:24:04', '2020-10-26 17:58:56'),
(7, '3@aaaa.com', 'b9375799cc5a81d31e284763b74fead5', 'dsds', 'admin', 1, '2020-10-26 18:28:32', NULL),
(8, '2323@s.com', '4d6d90a7d5ef8d7ac2b89861548ac14f', '2323', 'admin', 1, '2020-10-26 18:29:34', NULL),
(9, 'a@ss.com', '2fe350fc55ded8a90dfcd4349acb7cf0', '2323', 'user', 1, '2020-10-26 18:32:01', NULL),
(10, 'admin@admain.com', '14e585febdfc3bbef763069eb0776dd1', 'admin@admain.com', 'User One', 0, '2020-10-26 18:47:19', '2020-10-26 17:58:50'),
(11, 'd@sd.com', '4e6ff024380d288d70c4a9a8f56a79bb', 'a', 'user', 1, '2020-10-26 18:49:13', '2020-10-26 18:00:11'),
(12, 'a@a.com', 'f6fdffe48c908deb0f4c3bd36c032e72', '1213', 'User One', 0, '2020-10-26 18:53:20', '2020-10-26 17:58:20'),
(13, 'a@a.coma', 'e762cd6b8c8200db98216bf6a3eacfa3', 'a@a.com1', 'User One', 0, '2020-10-26 18:54:26', '2020-10-26 17:58:53'),
(14, 'admin@a.com', '56651c4e3971a274e30f265262a44908', 'admi', 'user', 1, '2020-10-26 18:55:09', '2020-10-26 18:00:23'),
(15, 'dadadad@a.com', '594f803b380a41396ed63dca39503542', '232323', 'User One', 1, '2020-10-26 19:02:16', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `log_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
