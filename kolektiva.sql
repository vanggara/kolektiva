-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2020 at 03:29 AM
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
  `eventName` text DEFAULT NULL,
  `eventDate` text DEFAULT NULL,
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
  `percentage` float DEFAULT NULL,
  `approval` int(11) DEFAULT NULL,
  `gift` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign`
--

INSERT INTO `campaign` (`id`, `id_user`, `category`, `eventName`, `eventDate`, `price`, `image`, `imageKtp`, `proposal`, `instagram`, `campaigner`, `dueDate`, `venue`, `target`, `detail`, `percentage`, `approval`, `gift`) VALUES
(3, 1, 'Seminar', 'Seminar untuk apa?', '2020-12-01', 3, 'aldos.jpg', 'aldos.png', 'document(4).pdf', 'arbisono_', 'Arbisono', '2020-11-01', 'Gelora Bung Karno', 2000000, 'Ini adalah sebuah seminar', 15.4634, 1, 0),
(4, 1, 'Concert', 'JKT48', '2020-01-01', 150000, 'warkop.jpg', 'warkop.jpg', 'document(4).pdf', 'jkt48', 'naomi', '2020-08-13', 'sakri', 1200000, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, 1, 0),
(5, 1, 'Seminar', 'Malang CTD', '2020-02-29', 50000, 'warkop.jpg', 'warkop.jpg', 'Transkrip Akademik - Vicky Anggara.pdf', 'vckyanggara', 'vicky', '2020-07-24', 'Malang', 600000, 'asd', 0, 1, 1),
(8, 1, 'Seminar', 'Malang CTD2', '2020-02-29', 50000, 'warkop.jpg', 'warkop.jpg', 'Transkrip Akademik - Vicky Anggara.pdf', 'vckyanggara', 'vicky', '2020-02-28', 'Malang', 2550000, 'jhbhj', 0, 1, 1),
(9, 1, 'Seminar', 'Malang Go', '2020-03-28', 50000, 'logo.png', 'IMG20181222171611.jpg', 'Semantic Web.pdf', 'vckyanggara', 'vicky', '2020-03-26', 'Malang', 1350000, 'casd', 0, 1, 1),
(10, 1, 'Seminar', 'Hore', '2020-02-29', 50000, 'ZBrush Document.png', 'DragRace.PNG', 'pra semester 8.pdf', 'vckyanggara', 'vicky', '2020-05-02', 'Malang', 1350000, 'Ini adalah sebuah seminar', 100, 1, 0),
(13, 1, 'Seminar', 'Malang CTD', '2020-04-25', 50000, 'ZBrush Document.jpg', 'ZBrush Document.png', '402-2a2037b3-2bee-495c-a478-5aa42e254859-08042020-', 'vckyanggara', 'vicky', '2020-09-18', 'Malang', 1350000, 'a', 0, 1, 1),
(14, 1, 'Seminar', 'Hore', '2020-04-18', 50000, 'ZBrush Document1.jpg', 'ZBrush Document.jpg', '402-2a2037b3-2bee-495c-a478-5aa42e254859-08042020-', 'vckyanggara', 'vicky', '2020-06-06', 'Malang', 0, 'a', 0, 0, 0),
(15, 1, 'Seminar', 'Malang CTD', '2020-04-11', 50000, 'ZBrush Document.png', 'ZBrush Document.png', '402-2a2037b3-2bee-495c-a478-5aa42e254859-08042020-', 'vckyanggara', 's', '2020-04-24', 'Malang', 2700000, 'd', 0, 0, 0),
(16, 1, 'Seminar', 'Malang CTDsss', '2020-04-17', 50000, 'Perpus.PNG', 'DragRace.PNG', 'CV Vicky Anggara.pdf', 'vckyanggara', 'vicky', '2020-05-02', 'Malang', 1350000, 'aa', 0, 0, 1);

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
(1, 1, 'keripik_kentang.jpg', 3200000, 'ewq', 'qwe', 10),
(2, 2, 'ZBrush Document.jpg', 20000, '234', 'wer', 14),
(9, 10, '1.PNG', 80000, 'non', 'nonn', 9),
(10, 4, '2.PNG', 200000, 'coba', 'no', 2),
(11, 4, '6.PNG', 20000, 'a', 'a', 1),
(12, 5, 'keripik_kentang.jpg', 30000, 'Pahe1', 'No detail', 20),
(13, 8, 'keripik_kentang.jpg', 30000, 'Pahe1', 'No detail', 20),
(14, 8, 'keripik_kentang.jpg', 30000, 'Pahe2', 'No detail', 20),
(16, 8, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 100),
(17, 9, 'logo.png', 30000, 'paheee', 'No detail', 45),
(18, 9, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 100),
(21, 2, '1Artboard 1@300x-80.jpg', 30000, 'Pahe1', 'No detail', 45),
(22, 2, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 100),
(23, 2, '1Artboard 1@300x-80.jpg', 30000, 'Pahe3asd', 'No detail', 20),
(24, 2, '1Asset 1@400x.png', 30000, 'sdsd', 'ss', 45),
(25, 2, '1Asset 1@400x.png', 30000, 's', 's', 45),
(26, 2, '1Asset 1@400x.png', 30000, 'asas', 'asas', 20),
(27, 2, 'Class Diagram Skripsi.jpg', 30000, 'Pahe3as', 'ss', 45),
(28, 4, 'reseach area.jpg', 30000, 's', 'a', 2),
(29, 4, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 100),
(30, 2, 'menambah informasi bootcamp.jpg', 30000, 'Pahe1as', 's', 2),
(31, 2, 'mendaftar peserta bootcamp dari peserta.jpg', 30000, 'sd', 'd', 45),
(33, 3, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 96),
(34, 3, '1Asset 1@400x.png', 2134, 'ads', 'asd', 26),
(35, 3, '1Asset 1@400x.png', 2134, 'ads', 'asd', 31),
(36, 3, 'Class Diagram Skripsi.jpg', 2134, 'ads', 'asd', 32),
(37, 3, '1Asset 1@400x.png', 2134, 'ads', 'asd', 31),
(38, 3, '1Asset 1@400x.png', 2134, 'ads', 'asd', 32),
(39, 3, '1Asset 1@400x.png', 2134, 'ads', 'asd', 32),
(40, 3, 'CONTOH SEQUENCE DIAGRAM.jpeg', 2134, 'ads', 'asd', 32),
(41, 3, 'menambah sertifikat bootcamp.jpg', 2134, 'ads', 'asd', 31),
(42, 13, 'ZBrush Document.png', 30000, 'Pahe1aaaa', 'No detail', 45),
(43, 13, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 100),
(44, 15, '402-2a2037b3-2bee-495c-a478-5aa42e254859-08042020-022458.pdf', 30000, 'Pahe3', 'sad', 45),
(45, 15, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 100),
(46, 15, 'ZBrush Document1.jpg', 30000, 'ass', 'a', 45),
(47, 2, '402-2a2037b3-2bee-495c-a478-5aa42e254859-08042020-022458.pdf', 2134555, 'Pahe3', 'sad', 20),
(48, 2, 'ZBrush Document1.jpg', 30000, 'sddacafcfve rr', 'No detail', 20),
(49, 16, 'DragRace.PNG', 30000, 'Pahe1', 'No detail', 45),
(50, 16, 'keripik_kentang.jpg', 0, 'No Package', 'Enter the rupiahs as you want', 100);

-- --------------------------------------------------------

--
-- Table structure for table `transaction_gift`
--

CREATE TABLE `transaction_gift` (
  `id_transaction_gift` int(11) NOT NULL,
  `id_gift_transaction_gift` int(11) DEFAULT NULL,
  `order_id_transaction_gift` varchar(50) DEFAULT NULL,
  `status_code_transaction_gift` int(11) DEFAULT NULL,
  `transaction_status_transaction_gift` varchar(50) DEFAULT NULL,
  `id_user_transaction_gift` int(11) DEFAULT NULL,
  `total_ticket_transaction_gift` int(11) DEFAULT NULL,
  `price_transaction_gift` int(11) DEFAULT NULL,
  `total_price_transaction_gift` int(11) DEFAULT NULL,
  `id_campaign_transaction_gift` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_gift`
--

INSERT INTO `transaction_gift` (`id_transaction_gift`, `id_gift_transaction_gift`, `order_id_transaction_gift`, `status_code_transaction_gift`, `transaction_status_transaction_gift`, `id_user_transaction_gift`, `total_ticket_transaction_gift`, `price_transaction_gift`, `total_price_transaction_gift`, `id_campaign_transaction_gift`) VALUES
(36, 34, 'G-1587307599', 201, 'pending', 1, 1, 200000, 200000, 3),
(37, 20, 'G-1587307809', 201, 'pending', 1, 1, 400, 400, 10),
(38, 34, 'G-1587658723', 201, 'pending', 1, 1, 10000, 10000, 3),
(39, 37, 'G-1587660483', 201, 'pending', 1, 1, 35000, 35000, 3),
(40, 34, 'G-1587661889', 201, 'pending', 1, 1, 2134, 2134, 3),
(41, 34, 'G-1587661960', 201, 'pending', 1, 1, 2134, 2134, 3),
(42, 32, 'G-1587662020', 201, 'pending', 1, 1, 30000, 30000, 3),
(43, 32, 'G-1587662079', 201, 'pending', 1, 1, 30000, 30000, 3);

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
  `transaction_status_transaction_ticket` varchar(50) DEFAULT NULL,
  `total_tickets_transaction_ticket` int(11) DEFAULT NULL,
  `prices_transaction_ticket` int(11) DEFAULT NULL,
  `total_prices_transaction_ticket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction_ticket`
--

INSERT INTO `transaction_ticket` (`id_transaction_ticket`, `id_user_transaction_ticket`, `id_campaign_transaction_ticket`, `order_id_transaction_ticket`, `status_code_transaction_ticket`, `transaction_status_transaction_ticket`, `total_tickets_transaction_ticket`, `prices_transaction_ticket`, `total_prices_transaction_ticket`) VALUES
(5, 1, 3, 'C-1587307687', 201, 'pending', 3, 3, 9),
(6, 1, 10, 'C-1587307762', 201, 'pending', 1, 50000, 50000);

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
(1, 'a', 'a@gmail.com', '0', '0cc175b9c0f1b6a831c399e269772661', 2, 'December 15, 2019'),
(2, 'b', 'b@gmail.com', '0', '92eb5ffee6ae2fec3ad71c777531578f', 2, 'December 16, 2019'),
(4, 'arbisono', 'arbisono.haryaputra@gmail.com', '081234567890', '0cc175b9c0f1b6a831c399e269772661', 2, 'December 31, 2019'),
(5, 'admin', 'admin@gmail.com', '08908909809', '5f4dcc3b5aa765d61d8327deb882cf99', 1, 'February 11, 2020');

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
-- Indexes for table `transaction_gift`
--
ALTER TABLE `transaction_gift`
  ADD PRIMARY KEY (`id_transaction_gift`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gift`
--
ALTER TABLE `gift`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `transaction_gift`
--
ALTER TABLE `transaction_gift`
  MODIFY `id_transaction_gift` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `transaction_ticket`
--
ALTER TABLE `transaction_ticket`
  MODIFY `id_transaction_ticket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
