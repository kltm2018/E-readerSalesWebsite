-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2023 at 05:40 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doan`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MaHD` int(11) NOT NULL,
  `MaSP` int(11) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `DonGia` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhgia`
--

CREATE TABLE `danhgia` (
  `MaSP` int(11) NOT NULL,
  `MaND` varchar(10) NOT NULL,
  `SoSao` int(11) NOT NULL,
  `BinhLuan` varchar(255) NOT NULL,
  `NgayLap` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `danhgia`
--

INSERT INTO `danhgia` (`MaSP`, `MaND`, `SoSao`, `BinhLuan`, `NgayLap`) VALUES
(1, '3', 5, 'Máy mới, cấu hình mạnh, quá rẻ trong tầm giá! <3', '2023-06-15 02:46:37'),
(1, '3', 5, 'Máy mới, cấu hình mạnh, quá rẻ trong tầm giá! <3', '2023-06-15 02:46:39'),
(1, '3', 5, 'Máy mới, cấu hình mạnh, quá rẻ trong tầm giá! <3', '2023-06-15 02:46:40'),
(1, '3', 5, 'Máy mới, cấu hình mạnh, quá rẻ trong tầm giá! <3', '2023-06-15 02:46:40'),
(1, '3', 5, 'Máy mới, cấu hình mạnh, quá rẻ trong tầm giá! <3', '2023-06-15 02:46:40');

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `MaHD` int(11) NOT NULL,
  `MaND` int(11) NOT NULL,
  `NgayLap` datetime NOT NULL,
  `NguoiNhan` varchar(50) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `DiaChi` varchar(100) NOT NULL,
  `PhuongThucTT` varchar(20) NOT NULL,
  `TongTien` float NOT NULL,
  `TrangThai` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `MaKM` int(11) NOT NULL,
  `TenKM` varchar(100) NOT NULL,
  `LoaiKM` varchar(20) NOT NULL,
  `GiaTriKM` float NOT NULL,
  `NgayBD` datetime NOT NULL,
  `NgayKT` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khuyenmai`
--

INSERT INTO `khuyenmai` (`MaKM`, `TenKM`, `LoaiKM`, `GiaTriKM`, `NgayBD`, `NgayKT`) VALUES
(1, 'Không khuyến mãi', 'Nothing', 0, '2019-04-08 00:00:00', '2022-04-17 00:00:00'),
(2, 'Giảm giá', 'GiamGia', 100000, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(3, 'Giá rẻ online', 'GiaReOnline', 150000, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(4, 'Trả góp', 'TraGop', 0, '2019-05-01 00:00:00', '2019-05-31 00:00:00'),
(5, 'Mới ra mắt', 'MoiRaMat', 0, '2019-05-01 00:00:00', '2019-05-31 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `MaLSP` int(11) NOT NULL,
  `TenLSP` varchar(70) NOT NULL,
  `HinhAnh` varchar(200) NOT NULL,
  `Mota` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `loaisanpham`
--

INSERT INTO `loaisanpham` (`MaLSP`, `TenLSP`, `HinhAnh`, `Mota`) VALUES
(1, 'Haoqing', 'Haoqing.png', 'Các sản phẩm của Haoqing'),
(2, 'Onyx', 'Onyx.jpg', 'Các sản phẩm của Onyx'),
(3, 'Kindle', 'Kindle.jpg', 'Các sản phẩm đến từ Amazon Kindle'),
(4, 'Kobo', 'Kobo.png', 'Các sản phẩm của Kobo');

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `MaND` int(11) NOT NULL,
  `Ho` varchar(20) NOT NULL,
  `Ten` varchar(20) NOT NULL,
  `GioiTinh` varchar(10) NOT NULL,
  `SDT` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `TaiKhoan` varchar(100) NOT NULL,
  `MatKhau` varchar(100) NOT NULL,
  `MaQuyen` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`MaND`, `Ho`, `Ten`, `GioiTinh`, `SDT`, `Email`, `DiaChi`, `TaiKhoan`, `MatKhau`, `MaQuyen`, `TrangThai`) VALUES
(1, 'Võ Thị Quế', 'Trân', 'Nữ', '0987654321', 'xoaicute@gmail.com', '', 'xoaicute', 'e10adc3949ba59abbe56e057f20f883e', 1, 1),
(3, 'Bùi', 'Văn Hiệp', 'Nam', '', '', '', 'admin', '21232f297a57a5a743894a0e4a801fc3', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phanquyen`
--

CREATE TABLE `phanquyen` (
  `MaQuyen` int(11) NOT NULL,
  `TenQuyen` varchar(20) NOT NULL,
  `ChiTietQuyen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phanquyen`
--

INSERT INTO `phanquyen` (`MaQuyen`, `TenQuyen`, `ChiTietQuyen`) VALUES
(1, 'Customer', 'Khách hàng có tài khoản'),
(2, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `MaSP` int(11) NOT NULL,
  `MaLSP` int(11) NOT NULL,
  `TenSP` varchar(70) NOT NULL,
  `DonGia` int(11) NOT NULL,
  `SoLuong` int(10) UNSIGNED NOT NULL DEFAULT 1,
  `HinhAnh` varchar(200) NOT NULL,
  `MaKM` int(11) NOT NULL,
  `ManHinh` varchar(50) NOT NULL,
  `HDH` varchar(50) NOT NULL,
  `CamSau` varchar(50) NOT NULL,
  `CamTruoc` varchar(50) NOT NULL,
  `CPU` varchar(50) NOT NULL,
  `Ram` varchar(50) NOT NULL,
  `Rom` varchar(50) NOT NULL,
  `SDCard` varchar(50) NOT NULL,
  `Pin` varchar(50) NOT NULL,
  `SoSao` int(11) NOT NULL,
  `SoDanhGia` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`MaSP`, `MaLSP`, `TenSP`, `DonGia`, `SoLuong`, `HinhAnh`, `MaKM`, `ManHinh`, `HDH`, `CamSau`, `CamTruoc`, `CPU`, `Ram`, `Rom`, `SDCard`, `Pin`, `SoSao`, `SoDanhGia`, `TrangThai`) VALUES
(1, 1, 'MeeBook M6', 3800000, 100, 'img/products/MeebookM6.jpg', 3, '6 inches E-ink Carta HD', 'MeeOS Android 11', '', '', 'Quadcore 1.8 GHz', '3 GB', '32 GB', '256 GB', '2200 mAH', 5, 2, 1),
(2, 2, 'Boox Note 5', 14790000, 20, 'img/products/BooxNote5.jpg', 5, '10.3 inches E-ink Carta HD', 'Android 11', '', '', 'Octar Core', '4 GB', '64 GB', '', '3000 mAH', 0, 0, 1),
(3, 3, 'Kindle Paperwhite 5 Kids (11th) 8GB', 4290000, 100, 'img/products/Kindle Paperwhite 5 Kids (11th) 8GB.jpg', 2, '6.8 inches', 'Linux', '', '', '', '1 GB', '8 GB', '', '2200 mAH', 0, 0, 1),
(4, 4, 'Kobo Clara HD', 2990000, 50, 'img/products/Kobo Clara HD.jpg', 4, '6 inches', 'Linux', '', '', '', '', '8 GB', '', '3000 mAH', 0, 0, 1),
(5, 4, 'Kobo Libra 2', 5290000, 30, 'img/products/Kobo Libra 2.jpg', 3, '7 inches E-ink Carta HD', 'Linux', '', '', '1 GHz', '512 MB', '32 GB', '', '1500 mAH', 0, 0, 1),
(6, 4, 'Kobo Sage', 8490000, 20, 'img/products/Kobo Sage.jpg', 5, '8 inches', '', '', '', '1.8 GHz Quad Core', '1 GB', '32 GB', '', '1200 mAH', 0, 0, 1),
(7, 2, 'BOOX Poke 5', 4990000, 50, 'img/products/BOOX Poke 5.jpg', 5, '6 inches', 'Android 11', '', '', '4-core Qualcomm', '2 GB', '32 GB', '', '1500 mAH', 0, 0, 1),
(8, 2, 'BOOX Tab X', 22750000, 30, 'img/products/BOOX Tab X.jpg', 4, '13.3 inches', 'Android 11', '', '', '', '6 GB', '128 GB', '', '6300 mAH', 0, 0, 1),
(9, 2, 'Boox Leaf 2', 6290000, 40, 'img/products/Boox Leaf 2.png', 3, '7 inches', 'Android 11', '', '', 'Qualcomm 2.0G Quad-core (4 x Arm Cortex-A53)', '2 GB', '32 GB', '', '2000 mAH', 0, 0, 1),
(10, 2, 'Boox Nova Air C', 11390000, 20, 'img/products/Boox Nova Air C.jpg', 5, '7.8 inches', 'Android 11', '', '', '', '3 GB', '32 GB', '', '2000 mAH', 0, 0, 1),
(11, 1, 'Boox Nova Air', 9390000, 20, 'img/products/Boox Nova Air.jpg', 4, '7.8 inches', 'Android 10', '', '', 'Snapdragon 636 8x1.8 GHz', '3 GB', '32 GB', '', '2000 mAH', 0, 0, 1),
(12, 2, 'Note Air 2 Plus', 13990000, 10, 'img/products/Note Air 2 Plus.png', 2, '10.3 inches', 'Android 11', '', '', '', '4 GB', '64 GB', '', '3700 mAH', 0, 0, 1),
(13, 4, 'Kobo Libra H20', 4090000, 10, 'img/products/Kobo Libra H20.jpg', 4, '7 inches', '', '', '', '1 GHz', '', '8 GB', '', '1200 mAH', 0, 0, 1),
(14, 3, 'New Kindle (10th) 8GB', 2390000, 100, 'img/products/New Kindle (10th) 8GB.jpg', 4, '6.3 inches', '', '', '', '', '', '8 GB', '', '1500 mAH', 0, 0, 1),
(15, 3, 'Máy đọc sách New Kindle 11th 2022 (Kids) kèm cover chính hãng amazon', 3290000, 60, 'img/products/New Kindle 11th 2022.png', 2, '6.2 inches', '', '', '', '', '', '16 GB', '', '', 0, 0, 1),
(16, 3, 'Kindle Scribe 64 GB', 13090000, 20, 'img/products/Kindle Scribe 64 GB.png', 2, '10.2 inches', '', '', '', '1GHz MediaTek MT8113', '', '16 GB', '', '3000 mAH', 0, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD KEY `MaHD` (`MaHD`),
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD KEY `MaSP` (`MaSP`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MaHD`),
  ADD KEY `MaKH` (`MaND`);

--
-- Indexes for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`MaKM`);

--
-- Indexes for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`MaLSP`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`MaND`),
  ADD KEY `MaQuyen` (`MaQuyen`);

--
-- Indexes for table `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`MaQuyen`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MaSP`),
  ADD KEY `LoaiSP` (`MaLSP`),
  ADD KEY `MaKM` (`MaKM`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MaHD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `MaKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `MaLSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `MaND` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `MaQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MaSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `chitiethoadon_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiethoadon_ibfk_2` FOREIGN KEY (`MaHD`) REFERENCES `hoadon` (`MaHD`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `danhgia`
--
ALTER TABLE `danhgia`
  ADD CONSTRAINT `danhgia_ibfk_1` FOREIGN KEY (`MaSP`) REFERENCES `sanpham` (`MaSP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`MaND`) REFERENCES `nguoidung` (`MaND`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD CONSTRAINT `nguoidung_ibfk_1` FOREIGN KEY (`MaQuyen`) REFERENCES `phanquyen` (`MaQuyen`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
