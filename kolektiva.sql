-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2020 at 08:55 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kolektiva`
--

-- --------------------------------------------------------

--
-- Table structure for table `campaign`
--

CREATE TABLE `campaign` (
  `id` int(11) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `category` text DEFAULT NULL,
  `eventName` varchar(225) DEFAULT NULL,
  `eventDate` date DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `imageKtp` varchar(50) DEFAULT NULL,
  `proposal` varchar(50) DEFAULT NULL,
  `instagram` text DEFAULT NULL,
  `campaigner` text DEFAULT NULL,
  `dueDate` date DEFAULT NULL,
  `venue` text DEFAULT NULL,
  `target` int(11) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `approval` int(11) DEFAULT NULL,
  `gift` int(11) DEFAULT NULL,
  `percentage` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `id_user`, `category`, `eventName`, `eventDate`, `price`, `image`, `imageKtp`, `proposal`, `instagram`, `campaigner`, `dueDate`, `venue`, `target`, `detail`, `approval`, `gift`, `percentage`) VALUES
(2, 4, 'Seminar', 'Raisa', '2020-03-05', 4532, 'okk', 'Class Diagram.jpg', '', 'arbisono_', 'Arbisono', '2020-04-10', 'Samanta Krida', 0, 'Apa itu festifore', 0, 1, 0),
(3, 1, 'Seminar', 'Isyana', '2020-03-02', 3, 'aldos.jpg', 'aldos.png', 'document(4).pdf', 'arbisono_', 'Arbisono', '2020-02-28', 'Gelora Bung Karno', 150000000, 'Ini adalah sebuah seminar', 1, 1, 0),
(4, 1, 'Seminar', 'Malang CTD', '2020-03-13', 50000, 'LOGO RE.png', 'LOGO REC.png', '20190828.pdf', 'vckyanggara', 'vicky', '2020-02-13', 'Malang', 600000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vel quam tortor. Aenean molestie lacinia justo, id interdum nunc mollis id. Aliquam erat volutpat. Phasellus nisl neque, venenatis et gravida nec, scelerisque id eros. In hac habitasse platea dictumst. Interdum et malesuada fames ac ante ipsum primis in faucibus. Aliquam vulputate, ante id pretium sodales, lacus purus eleifend nunc, eu gravida felis nibh eu felis. Duis egestas elit sapien, malesuada dignissim nisl malesuada elementum. Donec mi mi, elementum ac orci ut, commodo rutrum tortor. Duis in sem venenatis, vulputate ligula ac, semper sapien. Aliquam erat volutpat.\r\n\r\nSuspendisse felis dui, posuere et risus ut, auctor convallis ipsum. Suspendisse ipsum enim, consectetur ut rutrum nec, maximus quis dui. Morbi iaculis tempor risus ut commodo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam at suscipit eros. Fusce lobortis vestibulum sagittis. In vitae eros vitae tortor condimentum malesuada id at leo. Maecenas rhoncus vehicula mi, quis ornare erat. Nulla facilisi. Maecenas lacinia dolor at ex pretium, et accumsan felis mattis.\r\n\r\nMaecenas vehicula molestie eros, in gravida eros convallis non. Nulla feugiat dui ac velit hendrerit, vel sollicitudin massa vehicula. Nullam neque odio, varius et odio ut, sodales accumsan tortor. Maecenas euismod lectus eu velit bibendum scelerisque. Phasellus semper lacus ac libero porttitor ultrices. Aenean euismod mauris at imperdiet luctus. Duis dignissim mi vel diam vestibulum hendrerit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Proin mollis lacus vel velit viverra tempus. Nunc sed egestas enim. Cras et enim pulvinar ipsum porta sollicitudin. In eget urna turpis. Vivamus elementum et ligula at tempus. Suspendisse hendrerit, leo at placerat dignissim, mauris metus tincidunt diam, vitae hendrerit leo odio eu justo. Nullam ac turpis at nibh dapibus blandit. Sed iaculis, mauris eleifend tincidunt malesuada, tortor est efficitur libero, sit amet rutrum purus magna quis sem.\r\n\r\nIn rhoncus urna a efficitur congue. In ac sollicitudin velit. Morbi consectetur magna a velit malesuada, eu accumsan augue molestie. Proin tincidunt leo vel ipsum volutpat mattis et ut purus. Pellentesque lacus nunc, malesuada vitae libero in, vehicula luctus odio. Cras finibus nulla ac dictum aliquet. Sed ultricies enim ut risus fringilla pretium eu ultricies nibh. Suspendisse potenti. Nunc mattis lorem vel tortor efficitur, ut iaculis nisi tempor. Fusce sed vestibulum dui. Sed libero felis, suscipit in ultricies quis, egestas ut nisi. Vivamus fringilla, diam sed dictum gravida, dui orci sagittis nunc, ac bibendum neque tortor sed ligula. Mauris egestas dignissim nisi.\r\n\r\nAliquam imperdiet hendrerit tempor. Suspendisse congue eu mauris sed auctor. In fermentum lacinia dapibus. Nulla placerat dictum magna vitae pellentesque. Maecenas maximus mauris odio. Mauris et posuere lacus. Sed molestie tempus nulla, id convallis metus eleifend vitae.', 0, 1, 0),
(5, 1, 'Seminar', 'Malang CTD2', '2020-02-29', 50000, 'icon2.ico', 'logo.jpg', 'BISMILLAH.pdf', 'vckyanggara', 'vicky', '2020-02-28', 'Malang', 1350000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec maximus nec purus et gravida. Donec ac sagittis tellus. Fusce vel ex gravida, egestas felis non, porttitor ligula. Pellentesque sit amet arcu in diam bibendum scelerisque. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam convallis egestas velit, at luctus purus interdum eget. Donec ac nisl tortor. Integer aliquet eleifend dolor, et condimentum orci porttitor non. Quisque at lectus consequat, malesuada libero in, lobortis leo. Curabitur tincidunt turpis ut facilisis ultricies.\r\n\r\nQuisque id tortor a eros sollicitudin faucibus. Quisque fermentum sem non lorem mollis laoreet. Quisque in orci lectus. Integer vel mi viverra, tincidunt augue non, malesuada leo. Proin accumsan risus a nunc fringilla, vitae dignissim metus viverra. Nunc eget massa id diam pulvinar volutpat ut ut nunc. Aenean finibus non ligula sit amet convallis.\r\n\r\nPraesent eget mattis elit. Sed dictum nunc at leo placerat bibendum. Pellentesque sit amet arcu id ligula pharetra finibus. Maecenas enim dolor, dapibus sit amet magna vitae, maximus sodales nisi. In vel varius dolor. Vestibulum lobortis orci diam, molestie tempor felis volutpat eget. Nulla efficitur elit porta velit euismod luctus. Phasellus facilisis malesuada sapien, vitae pulvinar leo aliquam id. Aliquam lobortis at risus at tincidunt.\r\n\r\nUt dapibus mauris quis scelerisque porta. In hac habitasse platea dictumst. Ut vestibulum tincidunt libero. Quisque semper lacinia sem, eget viverra nisi auctor sit amet. Nam laoreet erat in mi malesuada, finibus suscipit tortor ultrices. In quis vestibulum elit. Curabitur magna eros, ornare sit amet mollis vel, varius in libero. Maecenas eget lorem sodales, iaculis enim eu, ultrices mi. Praesent pulvinar efficitur neque quis luctus. Proin et fermentum mi, eget fermentum nunc. Sed elementum imperdiet arcu, in aliquam neque. Nunc eu augue odio.\r\n\r\nProin tristique mollis massa quis luctus. Nam in sem eu mi malesuada lacinia. Curabitur laoreet quam at eleifend imperdiet. Praesent mauris est, tempor tristique placerat nec, blandit at nibh. Maecenas mi risus, cursus sed purus ut, pulvinar lacinia purus. Vestibulum tincidunt efficitur lectus, non placerat nulla fermentum sed. Vestibulum aliquet tincidunt ante eu scelerisque. Aliquam finibus dolor nec hendrerit iaculis. Vivamus consequat lacus non elit euismod, semper viverra erat vestibulum. Nam est justo, ullamcorper tincidunt porttitor sit amet, aliquam sed sem.', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'Seminar'),
(2, 'Concert');

-- --------------------------------------------------------

--
-- Table structure for table `gift`
--

CREATE TABLE `gift` (
  `id` int(11) NOT NULL,
  `id_campaign` int(11) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `package_name` varchar(50) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `gift_stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gift`
--

INSERT INTO `gift` (`id`, `id_campaign`, `image`, `price`, `package_name`, `detail`, `gift_stock`) VALUES
(1, 3, 'keripik_kentang.jpg', 3200000, 'ewq', 'qwe', 10),
(2, 3, '228791-Nick-Vujicic-Quote-Do-your-best-and-God-will-do-the-rest.jpg', 20000, '234', 'wer', 14),
(3, 3, 'logo.png', 2134, 'ads', 'asd', 32),
(4, 4, 'logo.jpg', 30000, 'Pahe1', 'No detail', 20),
(5, 5, '1Artboard 1@300x-80.jpg', 30000, 'Pahe 1', 'No detail', 45),
(6, 5, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 100);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_ticket`
--

CREATE TABLE `transaction_ticket` (
  `id_transaction_ticket` int(11) NOT NULL,
  `id_user_transaction_ticket` int(11) DEFAULT NULL,
  `id_campaign_transaction_ticket` int(11) DEFAULT NULL,
  `order_id_transaction_ticket` varchar(50) DEFAULT NULL,
  `status_code_transaction_ticket` int(11) DEFAULT NULL,
  `transaction_status_transaction_ticket` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullName` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phoneNumber` text DEFAULT NULL,
  `password` text DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `memberSince` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullName`, `email`, `phoneNumber`, `password`, `role`, `memberSince`) VALUES
(1, 'a a', 'a@gmail.com', '0', '0cc175b9c0f1b6a831c399e269772661', 2, 'December 15, 2019'),
(2, 'b', 'b', '0', '92eb5ffee6ae2fec3ad71c777531578f', 2, 'December 16, 2019'),
(3, 'vicky anggara', 'vanggara@gmail.com', '089098098098', 'e10adc3949ba59abbe56e057f20f883e', 2, 'December 24, 2019'),
(4, 'admin', 'admin@gmail.com', '09809879087', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'February 20, 2020');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `campaign`
--
ALTER TABLE `campaign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gift`
--
ALTER TABLE `gift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction_ticket`
--
ALTER TABLE `transaction_ticket`
  ADD PRIMARY KEY (`id_transaction_ticket`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `campaign`
--
ALTER TABLE `campaign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transaction_ticket`
--
ALTER TABLE `transaction_ticket`
  MODIFY `id_transaction_ticket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
