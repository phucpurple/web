-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 22, 2021 lúc 06:26 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `info`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `full_name`, `username`, `password`) VALUES
(1, 'le hong phuc123', 'phuc', 'phuc');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhba`
--

CREATE TABLE `tbl_danhba` (
  `id` int(10) UNSIGNED NOT NULL,
  `ho_ten` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chuc_vu` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_phone` int(10) UNSIGNED NOT NULL,
  `address_email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ma_khoa_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhba`
--

INSERT INTO `tbl_danhba` (`id`, `ho_ten`, `chuc_vu`, `number_phone`, `address_email`, `ma_khoa_id`) VALUES
(28, 'le hong phuc', 'p35', 1255, 'leph@gmail.com', 122),
(29, 'le hong phuc2', 'p20', 1255444, 'leph@gmail.com', 1222),
(30, 'le hong phuc11111', 'p3', 4294967295, 'leph@gmail', 1222);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_khoa`
--

CREATE TABLE `tbl_khoa` (
  `ma_khoa` int(10) UNSIGNED NOT NULL,
  `ten_khoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_khoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_email_khoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_khoa` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_khoa`
--

INSERT INTO `tbl_khoa` (`ma_khoa`, `ten_khoa`, `phone_khoa`, `address_email_khoa`, `address_khoa`) VALUES
(122, 'Quản Trị', '1213332', 'khoatr1', 'DH Thuỷ Lợi'),
(1222, 'Quản Trị', '1213332131', 'khoaqt@wru.vn', 'DH Thuỷ Lợi');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tbl_danhba`
--
ALTER TABLE `tbl_danhba`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ma_khoa` (`ma_khoa_id`);

--
-- Chỉ mục cho bảng `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  ADD PRIMARY KEY (`ma_khoa`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_danhba`
--
ALTER TABLE `tbl_danhba`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tbl_khoa`
--
ALTER TABLE `tbl_khoa`
  MODIFY `ma_khoa` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1224;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tbl_danhba`
--
ALTER TABLE `tbl_danhba`
  ADD CONSTRAINT `tbl_danhba_ibfk_1` FOREIGN KEY (`ma_khoa_id`) REFERENCES `tbl_khoa` (`ma_khoa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
