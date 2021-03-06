-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 10:35 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bk_cleanly`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--
CREATE DATABASE `bk_cleanly`;
CREATE TABLE `payment` (
  `UID` int(11) NOT NULL,
  `service` varchar(26) NOT NULL,
  `money` int(9) NOT NULL,
  `package` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`UID`, `service`, `money`, `package`) VALUES
(37, 'Dịch vụ vệ sinh nhà xưởng', 90000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `SID` int(11) NOT NULL,
  `package_in_time` int(9) NOT NULL,
  `package_in_month` int(9) NOT NULL,
  `package_in_year` int(9) NOT NULL,
  `unit` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`SID`, `package_in_time`, `package_in_month`, `package_in_year`, `unit`) VALUES
(1, 100000, 90000, 60000, 'm2'),
(3, 120000, 100000, 80000, 'ghế');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `RID` int(11) NOT NULL,
  `star_rating` int(1) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `time` varchar(20) NOT NULL,
  `SID` int(11) NOT NULL,
  `UID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`RID`, `star_rating`, `comment`, `time`, `SID`, `UID`) VALUES
(12, 5, 'vip vcl ', '07/06/2021', 1, 29),
(13, 3, 'Tạm ổn', '08/06/2021', 1, 33),
(14, 4, 'Tuyệt vời', '09/06/2021', 1, 37);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `SID` int(11) NOT NULL,
  `name` varchar(26) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `task` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`SID`, `name`, `description`, `image`, `task`) VALUES
(1, 'Dịch vụ vệ sinh nhà xưởng', 'Nhà máy, nhà xưởng là nơi làm việc của nhiều công nhân, những người chịu trách nhiệm làm ra các sản phẩm uy tín chất lượng. Tất nhiên việc vệ sinh nơi làm việc là rất cần thiết để đảm bảo cho mọi người có một môi trường làm việc trong sạch, thoáng mát và chất lượng sản phầm làm ra phải ở mức cao nhất. Nếu không có một quy trình vệ sinh đúng cách sẽ khiến môi trường làm việc bị ẩm thấp, bốc mùi ảnh hương đến chất lượng sản phẩm. \r\nVí dụ: Đối với một nhà máy chế biến thực phẩm tươi sống thì việc vệ sinh là cực kỳ cần thiết để không ảnh hưởng đến chất lượng thực phẩm. \r\nDo đó, ở đây chúng tôi BK-Cleanly cung cấp dịch vụ vệ sinh nhà máy nhà xưởng với đội ngũ nhân viên uy tín chất lượng', 'public/img/services/service6.jpg', 'Tổng vệ sinh và dọn phòng;Quét dọn;Nhặt và xử lý rác;Tẩy dầu mở;Vệ sinh tường trần;HVAC và làm sạch thông gió'),
(3, 'Vệ sinh ghế sofa', 'Hiện nay hầu như nhà nào cũng có ít nhất một chiếc sofa. Một đồ dùng không thể thiếu trong không gian phòng khác của bạn, nó tạo cảm giác dễ chịu êm ái mỗi khi bạn nghỉ ngơi trên chiếc sofa đó. Không những vậy nó còn mang lại vẻ đẹp sang trọng cho căn nhà của bạn.\r\nNhưng sau một thời gian sử dụng thì chắc chắn rằng chiếc ghế của bạn sẽ bị ố và bám đầy bụi bẩn làm mất đi vẻ đẹp chiếc ghế hơn nữa bạn sẽ cảm thấy khó chịu bởi mùi hôi. Vậy làm sao để có thể làm sạch chiếc ghế sofa mà không lo mất họa tiết, bị hỏng?\r\nVì nhu cầu trên BK-Cleanly cung cấp đến quý khách hàng dịch vụ vệ sinh ghế sofa. Dịch vụ của chúng tôi được nhiều người tin dùng và có những phẩn hồi chất lượng', 'public/img/services/service2.jpg', 'Tẩy vết bẩn bám trên ghế;Tẩy trắng;Hút bụi trong kẻ ghế;Vệ sinh gối tựa;Giặt bao gối tựa;Vệ sinh ghế phụ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UID` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `active` int(1) NOT NULL,
  `image` varchar(10000) DEFAULT NULL,
  `admin` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UID`, `first_name`, `last_name`, `address`, `phone`, `email`, `password`, `active`, `image`, `admin`) VALUES
(29, 'Đức', 'Thạch', 'Phường Phước Trung, Thành phố Bà Rịa, Tỉnh Bà Rịa ', '0947185273', 'ducthach.1403@gmail.com', '$2y$10$BXsxB7PtubUB19BVtdyZ6.hxKPH3CXT1SkPGJKm1TyLOME3NIVyvq', 1, NULL, 0),
(33, 'Thuan', 'Nguyen', 'Phường Linh Trung, Quận Thủ Đức, Thành Phố Hồ Chí Minh', '0967040272', 'johnnguyen156109@gmail.com', '$2y$10$YaboKjqvqteuBvJ.C8HSGu.Ba47LjFY21TB.7AIWuNugMFRrRGzz6', 1, 'public/img/avt/20200119083914_IMG_0770.JPG', 1),
(37, 'Nguyen', 'Peter', 'Xã Kim Long, Huyện Châu Đức, Tỉnh Bà Rịa ', '0967040272', 'hihihuhuhaha1452@gmail.com', '$2y$10$2qgi/Bh3gaDlJaYnIU9ZGunF1FC3/VT.4qx6yb54KUdf3qgCVi5NW', 1, 'public/img/avt/avatar.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`UID`,`service`,`money`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`SID`),
  ADD UNIQUE KEY `SID` (`SID`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`RID`),
  ADD KEY `SID` (`SID`),
  ADD KEY `UID` (`UID`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`SID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `RID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `SID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`);

--
-- Constraints for table `price`
--
ALTER TABLE `price`
  ADD CONSTRAINT `price_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `service` (`SID`);

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`SID`) REFERENCES `service` (`SID`),
  ADD CONSTRAINT `rating_ibfk_2` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
