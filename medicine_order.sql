-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2022 at 01:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medicine_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Mobile` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('2mbili', 'last', 'bicmichum52@gmail.com', '0701048045', 'Nairobi', '202cb962ac59075b964b07152d234b'),
('jane', 'Jane', 'bicmichum52@gmail.com', '0701048045', 'Nairobi', '202cb962ac59075b964b07152d234b'),
('jeff', 'Jefferson', 'jeffery@outlook.com', '0701048045', 'Nairobi', '123'),
('jon', 'Jonnathan', 'bicmichum52@gmail.com', '0701048045', 'Nairobi', '202cb962ac59075b964b07152d234b'),
('lief', 'Lief', 'bicmichum52@gmail.com', '0701048045     ', 'Nairobi', '202cb962ac59075b964b07152d234b'),
('Tamminga', 'Tamminga', 'bicmichum52@gmail.com', '0701048045', 'Nairobi', '123'),
('Zed', 'Zed', 'zed@outlook.com', '0701048045', 'Nairobi', '202cb962ac59075b964b07152d234b');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `profession` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`username`, `fullname`, `email`, `contact`, `address`, `profession`, `password`) VALUES
('Phill', 'Dr Phill', 'drphill@outlook.com', '0701048045', 'Nairobi', 'Orthopedic', '123'),
('Phill', 'Dr Phill', 'drphill@outlook.com', '0701048045', 'Nairobi', 'Orthopedic', '123'),
('filipe', 'Filip', 'filipe@outlook', '12987654567', 'Nairobi', 'Orthopedic', '202cb962ac59075b964b07152d234b');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `D_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `S_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`D_ID`, `name`, `price`, `description`, `S_ID`, `images_path`, `options`) VALUES
(110, 'Bruffen', 100, 'Pain', 12, 'Medicine_item122.jpg', 'ENABLE'),
(111, 'Parracitamol', 10, 'Pain Killers', 12, 'Medicine_item1.jpg', 'ENABLE'),
(112, 'Codine', 300, 'Cough Syrup', 12, 'Medicine_item776.jpg', 'ENABLE'),
(113, 'Panadol', 10, 'Pain', 14, 'Medicine_item944.jpg', 'DISABLE'),
(114, 'Panadol', 20, 'Pain Killers', 14, 'Medicine_item309.jpg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('admin', 'Administrator', 'admin@outlook.com', '0701048045', 'Nairobi', 'admin'),
('Samuel', 'Sam', 'sam@outlook', '0701048045', 'Nairobi', '123');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `incoming_id` varchar(225) NOT NULL,
  `outgoing_id` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `incoming_id`, `outgoing_id`, `message`) VALUES
(1, 'Tamminga', 'Phill', 'Hello'),
(2, 'Tamminga', 'Phill', 'Any Improvements?'),
(3, 'Phill', 'Tamminga', 'Hi'),
(4, 'Phill', 'Tamminga', 'All good'),
(5, 'Tamminga', 'Phill', 'Hello'),
(6, 'lief', 'Phill', 'Greetings'),
(7, 'Zed', 'Phill', 'Wagwan'),
(8, 'Phill', 'Tamminga', 'Hi'),
(9, 'Phill', 'Tamminga', 'How are you Sir');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `D_ID` int(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `S_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `D_ID`, `status`, `name`, `price`, `quantity`, `order_date`, `username`, `S_ID`) VALUES
(87, 110, 'Pending', 'Bruffen', 100, 3, '2022-07-15', 'jeff', 12),
(88, 114, 'Pending', 'Panadol', 20, 12, '2022-07-15', 'Tamminga', 14),
(89, 110, 'Pending', 'Bruffen', 100, 1, '2022-07-15', 'Tamminga', 12),
(90, 114, 'Pending', 'Panadol', 20, 12, '2022-07-15', 'Tamminga', 14),
(91, 110, 'Pending', 'Bruffen', 100, 1, '2022-07-15', 'Tamminga', 12),
(92, 112, 'Pending', 'Codine', 300, 1, '2022-07-17', 'Tamminga', 12),
(93, 114, 'Pending', 'Panadol', 20, 1, '2022-07-17', 'Tamminga', 14),
(94, 114, 'Pending', 'Panadol', 20, 1, '2022-07-18', 'Tamminga', 14),
(95, 114, 'Pending', 'Panadol', 20, 1, '2022-07-18', 'Tamminga', 14),
(96, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(97, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(98, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(99, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(100, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(101, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(102, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(103, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(104, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(105, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(106, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(107, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(108, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(109, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(110, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(111, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(112, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(113, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14),
(114, 114, 'Pending', 'Panadol', 20, 2, '2022-07-26', 'Tamminga', 14);

-- --------------------------------------------------------

--
-- Table structure for table `stores`
--

CREATE TABLE `stores` (
  `S_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `stores`
--

INSERT INTO `stores` (`S_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(12, 'Good Life', 'goodlife@outlook.com', '0701048045', 'Nairobi, Ngong', 'admin'),
(14, 'Sam Phamarcy', 'samphamarcy@gmail.com', '0701048045', 'Nairobi, Ngong', 'Samuel');

-- --------------------------------------------------------

--
-- Table structure for table `track`
--

CREATE TABLE `track` (
  `id` int(11) NOT NULL,
  `order_Id` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `track`
--

INSERT INTO `track` (`id`, `order_Id`, `description`, `date`, `status`) VALUES
(19, 90, 'On route', '15/07/2022 15:01:17', 'On Delivery'),
(20, 87, 'Complete', '25/07/2022 14:11:28', 'Delivered'),
(21, 91, 'ON ROUTE', '25/07/2022 14:35:09', 'On Delivery'),
(22, 91, 'Still coming', '25/07/2022 14:38:05', 'On Delivery'),
(23, 91, 'Tranqillo', '25/07/2022 14:38:21', 'On Delivery');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `drugs`
--
ALTER TABLE `drugs`
  ADD PRIMARY KEY (`D_ID`,`S_ID`),
  ADD KEY `R_ID` (`S_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `D_ID` (`D_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `S_ID` (`S_ID`);

--
-- Indexes for table `stores`
--
ALTER TABLE `stores`
  ADD PRIMARY KEY (`S_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- Indexes for table `track`
--
ALTER TABLE `track`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_Id` (`order_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `drugs`
--
ALTER TABLE `drugs`
  MODIFY `D_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `stores`
--
ALTER TABLE `stores`
  MODIFY `S_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `track`
--
ALTER TABLE `track`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `drugs`
--
ALTER TABLE `drugs`
  ADD CONSTRAINT `furniture_ibfk_1` FOREIGN KEY (`S_ID`) REFERENCES `stores` (`S_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`D_ID`) REFERENCES `drugs` (`D_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`S_ID`) REFERENCES `stores` (`S_ID`);

--
-- Constraints for table `stores`
--
ALTER TABLE `stores`
  ADD CONSTRAINT `stroes_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);

--
-- Constraints for table `track`
--
ALTER TABLE `track`
  ADD CONSTRAINT `track_ibfk_1` FOREIGN KEY (`order_Id`) REFERENCES `orders` (`order_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
