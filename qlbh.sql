-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th4 03, 2024 lúc 09:35 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `qlbh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai`
--

CREATE TABLE `loai` (
  `Ma_Loai` int(11) NOT NULL,
  `Ten_Loai` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `loai`
--

INSERT INTO `loai` (`Ma_Loai`, `Ten_Loai`) VALUES
(1, 'Hoa hồng'),
(2, 'Cây cảnh'),
(3, 'Hoa leo nở hàng năm'),
(4, 'Hoa mùa'),
(5, 'Hoa cỏ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `Ma_Hoa` int(11) NOT NULL COMMENT 'Mã hoa',
  `Ten_Hoa` varchar(100) DEFAULT NULL COMMENT 'Tên hoa',
  `So_Luong` int(11) DEFAULT NULL COMMENT 'Số lượng',
  `Hinh_anh` varchar(200) DEFAULT NULL,
  `Don_Gia` decimal(10,0) DEFAULT NULL COMMENT 'Đơn giá',
  `Ma_Loai` int(11) DEFAULT NULL COMMENT 'Mã loại'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`Ma_Hoa`, `Ten_Hoa`, `So_Luong`, `Hinh_anh`, `Don_Gia`, `Ma_Loai`) VALUES
(1, 'Hoa Đỏ', 20, '1.jpg', 16, 1),
(2, 'Hoa Trắng', 15, '2.jpg', 13, 1),
(3, 'Hoa Vàng', 25, '3.jpg', 19, 1),
(4, 'Hoa Hồng', 30, '4.jpg', 20, 1),
(5, 'Hoa Cẩm Chướng', 18, '5.jpg', 17, 5),
(6, 'Hoa Lan', 22, '6.jpg', 25, 2),
(7, 'Hoa Thủy Tiên', 17, '7.jpg', 23, 3),
(8, 'Hoa Sơn Chưng', 19, '8.jpg', 29, 4),
(9, 'Hoa Violet', 21, '9.jpg', 15, 3),
(10, 'Hoa Cúc', 16, '1.jpg', 11, 5),
(11, 'Hoa Cẩm Tú Cầu', 18, '5.jpg', 18, 1),
(12, 'Hoa Hướng Dương', 25, '3.jpg', 22, 1),
(13, 'Hoa Tulip', 20, '8.jpg', 20, 1),
(14, 'Hoa Mẫu Đơn', 22, '1.jpg', 24, 1),
(15, 'Hoa Lan Hồ Điệp', 16, '7.jpg', 29, 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`Ma_Loai`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`Ma_Hoa`),
  ADD KEY `FK_SanPham_Loai` (`Ma_Loai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `loai`
--
ALTER TABLE `loai`
  MODIFY `Ma_Loai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `Ma_Hoa` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Mã hoa', AUTO_INCREMENT=16;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `FK_SanPham_Loai` FOREIGN KEY (`Ma_Loai`) REFERENCES `loai` (`Ma_Loai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
