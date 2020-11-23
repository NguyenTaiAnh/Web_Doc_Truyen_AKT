-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2020 at 12:26 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qltt`
--

-- --------------------------------------------------------

--
-- Table structure for table `chuongtruyen`
--

CREATE TABLE `chuongtruyen` (
  `MaChuong` char(10) NOT NULL,
  `TenChuong` varchar(25) CHARACTER SET utf8 NOT NULL,
  `MaTruyen` char(10) DEFAULT NULL,
  `TGCapNhat` datetime DEFAULT NULL,
  `NoiDung` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuongtruyen`
--

INSERT INTO `chuongtruyen` (`MaChuong`, `TenChuong`, `MaTruyen`, `TGCapNhat`, `NoiDung`) VALUES
('MC001', 'Bat Dau', 'T001', '2020-11-23 00:00:00', 'Ngay homdo, co rat nhieu chuyen xay ra, ke khong het...'),
('MC002', 'Ket Thuc', 'T001', '2020-11-23 00:00:00', 'Ngay homdo, co rat nhieu chuyen khong nen xay ra,khong nen ke...'),
('MC003', 'Bat Dau', 'T002', '2020-11-23 00:00:00', 'Sau khi hoc xong lop 7. Toi tiep tuc duoc chuyen len lop 8...'),
('MC004', 'Ket Thuc', 'T002', '2020-11-23 00:00:00', 'Sau khi hoc xong lop 8. Toi tiep tuc duoc chuyen len lop 9.Con nua~~...');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `role` char(1) NOT NULL,
  `username` char(25) DEFAULT NULL,
  `password` char(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`role`, `username`, `password`) VALUES
('1', 'admin', 'admin'),
('2', 'minhtam', '718293');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `MaTG` char(10) NOT NULL,
  `TenTG` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`MaTG`, `TenTG`) VALUES
('TG001', 'Minh Tam'),
('TG002', 'Van Khai'),
('TG003', 'Minh Khai'),
('TG004', 'Tai Anh'),
('TG005', 'Minh Anh'),
('TG006', 'Tai Khai');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `MaTL` char(10) NOT NULL,
  `TenTL` varchar(25) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`MaTL`, `TenTL`) VALUES
('TL001', 'Xuyen Khong'),
('TL002', 'Hoc Tro'),
('TL003', 'Drama'),
('TL004', 'Kinh Di');

-- --------------------------------------------------------

--
-- Table structure for table `truyentranh`
--

CREATE TABLE `truyentranh` (
  `MaTruyen` char(10) NOT NULL,
  `TenTruyen` varchar(25) CHARACTER SET utf8 NOT NULL,
  `MaTL` char(10) NOT NULL,
  `MaTG` char(10) NOT NULL,
  `NgayXB` date DEFAULT NULL,
  `MoTa` varchar(255) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truyentranh`
--

INSERT INTO `truyentranh` (`MaTruyen`, `TenTruyen`, `MaTL`, `MaTG`, `NgayXB`, `MoTa`) VALUES
('T001', 'Vu d?ng c?n kh?n', 'TL001', 'TG001', '2020-11-23', 'Noi ve cuoc doi cua Lam Dong, sinh ra va lon len tai Viet Nam, voi suc manh phi thong va long yeu dat nuoc,,,'),
('T002', 'Baby Im Here', 'TL003', 'TG002', '2020-11-22', 'Cau chuyen bat dau tu khi A va B gap nhau giai phong B101');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chuongtruyen`
--
ALTER TABLE `chuongtruyen`
  ADD PRIMARY KEY (`MaChuong`),
  ADD KEY `fk_MaTruyen` (`MaTruyen`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`role`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`MaTG`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`MaTL`);

--
-- Indexes for table `truyentranh`
--
ALTER TABLE `truyentranh`
  ADD PRIMARY KEY (`MaTruyen`),
  ADD KEY `fk_MaTL` (`MaTL`),
  ADD KEY `fk_MaTG` (`MaTG`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuongtruyen`
--
ALTER TABLE `chuongtruyen`
  ADD CONSTRAINT `fk_MaTruyen` FOREIGN KEY (`MaTruyen`) REFERENCES `truyentranh` (`MaTruyen`);

--
-- Constraints for table `truyentranh`
--
ALTER TABLE `truyentranh`
  ADD CONSTRAINT `fk_MaTG` FOREIGN KEY (`MaTG`) REFERENCES `tacgia` (`MaTG`),
  ADD CONSTRAINT `fk_MaTL` FOREIGN KEY (`MaTL`) REFERENCES `theloai` (`MaTL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
