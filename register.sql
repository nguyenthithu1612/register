-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 12, 2019 at 02:43 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `register`
--

-- --------------------------------------------------------

--
-- Table structure for table `token`
--

CREATE TABLE `token` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `token` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `token`
--

INSERT INTO `token` (`id`, `email`, `token`) VALUES
(6, 'linh@gmail.com', '6e2fe21bdab09fd5160fdb0a401986ff'),
(7, 'linh@gmail.com', '6e2fe21bdab09fd5160fdb0a401986ff'),
(8, 'angela@gmail.com', '34443584edcd709f9b19111bbb9efe45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL COMMENT 'id user',
  `name` varchar(20) NOT NULL COMMENT 'name user',
  `email` varchar(20) NOT NULL COMMENT 'email user',
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(5, 'nguyen thu', 'nguey@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e'),
(6, 'nguyen van duy', 'nguyenvanduy@gmail.c', 'd41d8cd98f00b204e9800998ecf8427e'),
(7, 'anna cherry', 'anna@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'linh', 'linh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'Nguyen Thi Hoa', 'nguyenthihoa@gmail.c', '202cb962ac59075b964b07152d234b70'),
(12, 'angela baby', 'angela@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `token`
--
ALTER TABLE `token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `token`
--
ALTER TABLE `token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT COMMENT 'id user', AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
