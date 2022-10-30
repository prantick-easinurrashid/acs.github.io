-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2021 at 10:30 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse_soceity`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `phone` int(15) NOT NULL,
  `roll` int(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `club` varchar(100) NOT NULL,
  `profession` varchar(20) NOT NULL,
  `photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `pass`, `phone`, `roll`, `department`, `semester`, `club`, `profession`, `photo`) VALUES
(10, 'Tajbi', 'tbh.nishat@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1521431550, 17701090, 'CSE', '3.1', 'Photography', 'Student', '1616550856.png'),
(11, 'Easinur Rashid Prantick', 'prantick1997@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1521431446, 170204030, 'CSE', '3.2', 'Photography', 'Soceity Member', 'default-img.png'),
(12, 'Tahmid', 'abc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1521431456, 170204039, 'CSE', '3.2', 'Photography', 'Student', 'default-img.png'),
(13, 'Tasnim Hossain', 'tasnim@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1521431550, 177010999, 'Architecture', '1.1', 'Art', 'Student', '1616450532.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
