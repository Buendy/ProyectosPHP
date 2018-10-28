-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: Oct 26, 2018 at 07:12 PM
-- Server version: 5.7.22
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tema12`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`) VALUES
(1, 'Daniel', 'Buendia', 'danielbuendia@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Juan', 'francisco', 'frajuan@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'María ', 'Lopez Abad', 'abadmaria@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'Roberto', 'Gomez', 'robert@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'Samuel', 'Ecija', 'sampukitos@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(6, 'Carlo', 'Abristqueta', 'shir-abris@hotmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(10, 'Hermenegildo', 'Smith', 'john@smith.us', 'e10adc3949ba59abbe56e057f20f883e'),
(11, 'Hermenegildo', 'Gómez Juarez', 'heri@goju.es', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
