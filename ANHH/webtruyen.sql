-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2021 at 03:00 PM
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
-- Database: `webtruyen`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `role` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `email`, `password`, `role`) VALUES
(1, 'mt@gmail.com', '1', '0'),
(2, 'a@gmail.com', '1', '2');

-- --------------------------------------------------------

--
-- Table structure for table `chuong`
--

CREATE TABLE `chuong` (
  `id_chuong` int(11) NOT NULL,
  `id_truyen` int(11) DEFAULT NULL,
  `name_chap` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `chap` int(11) DEFAULT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_cre` datetime DEFAULT NULL,
  `time_update` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chuong`
--

INSERT INTO `chuong` (`id_chuong`, `id_truyen`, `name_chap`, `chap`, `content`, `time_cre`, `time_update`) VALUES
(2, 2, 'Start', 1, 'Hello!It\'s Me,Ava Or Luci whatever you Prefer,I\'m Here to Give you a Quick Some up of what this Is\r\nSo Your Character Has Superpowers and Willing Went To this Facility to Become Superheros,What They Don\'t know Is If they Try to Escape,They Will Surely Die Without a Plan,So Look out For that!\r\nThere Is a Team of 5 In each Area,3 Teams In Total With meaning Like They Think an Avengers thing(Without One of the Greatest dieing If Course!) And They Get to Make Friends and even have ships Cause you know Me and Ships Like Duh.\r\nSo It\'s a Superhero RP Kinda Like an Au of the Movie Zoom.All Good All Cool?OK LETS MOVE ON!\r\nany questions Leave Down Below↓↓', '2021-01-02 22:48:51', '2021-01-02 22:48:51'),
(3, 3, 'Start', 1, 'Hai con chim được sinh ra', '2021-01-28 00:00:17', '2021-01-28 00:00:17'),
(4, 2, 'Diễn Biến', 2, 'Và thế là cuộc chiến dã nổ ra. Cuộc chiến giữa các vì sao', '2021-01-14 22:43:33', '2021-01-12 22:43:33'),
(5, 2, 'Hồi kết', 3, 'Tất cả đều chết', '2021-01-12 22:44:48', '2021-01-12 22:44:48');

-- --------------------------------------------------------

--
-- Table structure for table `tacgia`
--

CREATE TABLE `tacgia` (
  `id_tg` int(11) NOT NULL,
  `ten` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tacgia`
--

INSERT INTO `tacgia` (`id_tg`, `ten`) VALUES
(1, 'Trần Minh Tâm'),
(2, 'Thang Binh');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `id_tl` int(11) NOT NULL,
  `ten_tl` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `mota` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id_tl`, `ten_tl`, `mota`) VALUES
(2, 'Hư cấu', 'Main được buff 100% power :))'),
(3, 'Xuyên Không', 'Main được đưa đến nơi khác');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE `trangthai` (
  `id_tt` int(11) NOT NULL,
  `name_tt` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`id_tt`, `name_tt`) VALUES
(1, 'Truyện mới'),
(2, 'Truyện Mới Cập Nhật'),
(3, 'Truyện Đã Hoàn Thành');

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `id_truyen` int(11) NOT NULL,
  `name` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `hinhanh` text NOT NULL,
  `id_tg` int(11) DEFAULT NULL,
  `id_tl` int(11) DEFAULT NULL,
  `id_tt` int(11) NOT NULL,
  `mota` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `time_cre` datetime NOT NULL,
  `time_update` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`id_truyen`, `name`, `hinhanh`, `id_tg`, `id_tl`, `id_tt`, `mota`, `time_cre`, `time_update`) VALUES
(2, 'DEV WAR', './public/img/devwar.jpg', 1, 2, 1, 'Lịch sử loài người ngày càng hiện đại, cuộc sống vốn yên bình nay đã dần có sự bạo động thì khi các thế lực Black Hat xuất hiện. Hàng loạt cuộc tấn công dẫn đến rất nhiều sự hư hào về tài lực lẫ trí óc, tuy nhiên... Thời đại đã thay đổi, sự xuất hiện của 5 ae sieu nhan Gao :v', '2021-01-01 22:46:39', '2021-01-01 22:46:39'),
(3, 'Hai Con Chim', './public/img/haiconchim.jpg', 2, 3, 2, 'Hai con chim sẻ bán một đồng tiền. Chữ đồng tiền đây trong nguyên văn Hy-lạp là assarion, mà các học giả dịch ra là đồng một xu (penny). Như vậy, giá của con chim sẻ tính ra chỉ đáng một nửa xu Mỹ.Đã thế mà mua nhiều lại càng rẻ. “Năm con chim sẻ giá hai đồng tiền” (Luca 12:6). Vậy thì, cứ mua hai đồng tiền, tức là hai xu Mỹ chim sẻ, thì được cho không một con. Căn cứ vào giá nầy, cứ mua một đô la chim, thì được hai trăm năm chục con. Căn bản thì như vậy, chớ mua theo giá sỉ, tức là một đô la chắc chắn phải được nhiều chim hơn. Rẻ quá!Đây chắc phải là giá chim sẻ tại xứ Palestine thời xưa. Ở Việt nam chỉ thấy người ta bán chim mía chớ không thấy ai bán chim sẻ. Tuy nhiên, nói chung thì chim sẻ là loại chim xoàng. Ở quê tôi người ta nuôi sáo vì nó khôn, biết tự bay đi kiếm ăn và trở về nhà, nuôi nhồng vì biết nói, nuôi cò vì biết bắt ruồi, nuôi chim cu để đi mồi, nuôi họa mi vì hót hay, nuôi két vì bộ lông đẹp. Cũng có người nuôi cà cưỡng và quốc, mà tôi không biết là nuôi để làm gì. Dầu vậy, tôi vẫn không thấy ai nuôi chim sẻ', '2021-01-13 23:56:45', '2021-01-13 23:56:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `chuong`
--
ALTER TABLE `chuong`
  ADD PRIMARY KEY (`id_chuong`),
  ADD KEY `fk_ID_TRUYEN` (`id_truyen`);

--
-- Indexes for table `tacgia`
--
ALTER TABLE `tacgia`
  ADD PRIMARY KEY (`id_tg`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id_tl`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id_tt`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`id_truyen`),
  ADD KEY `fk_truyen_tacgia` (`id_tg`),
  ADD KEY `fk_ID_theloai` (`id_tl`),
  ADD KEY `fk_idtl_info` (`id_tt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `chuong`
--
ALTER TABLE `chuong`
  MODIFY `id_chuong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tacgia`
--
ALTER TABLE `tacgia`
  MODIFY `id_tg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id_tl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `id_truyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chuong`
--
ALTER TABLE `chuong`
  ADD CONSTRAINT `fk_ID_TRUYEN` FOREIGN KEY (`id_truyen`) REFERENCES `truyen` (`id_truyen`);

--
-- Constraints for table `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `fk_ID_theloai` FOREIGN KEY (`id_tl`) REFERENCES `theloai` (`id_tl`),
  ADD CONSTRAINT `fk_idtl_info` FOREIGN KEY (`id_tt`) REFERENCES `trangthai` (`id_tt`),
  ADD CONSTRAINT `fk_truyen_tacgia` FOREIGN KEY (`id_tg`) REFERENCES `tacgia` (`id_tg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
