-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 22, 2018 at 04:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `country_code_id`
--

CREATE TABLE `country_code_id` (
  `id` int(11) NOT NULL,
  `code_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country_code_id`
--

INSERT INTO `country_code_id` (`id`, `code_id`) VALUES
(2, 'AM'),
(3, 'AF'),
(4, 'BEl'),
(5, 'DEN'),
(6, 'CAN');

-- --------------------------------------------------------

--
-- Table structure for table `main_job_role_id`
--

CREATE TABLE `main_job_role_id` (
  `id` int(11) NOT NULL,
  `role` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_job_role_id`
--

INSERT INTO `main_job_role_id` (`id`, `role`) VALUES
(1, 'designer'),
(2, 'developer'),
(3, 'tester'),
(4, 'analyst'),
(5, 'coder');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `country_code_id` int(11) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `biography` varchar(100) NOT NULL,
  `main_job_role_id` int(11) DEFAULT NULL,
  `skill_Level` tinyint(4) NOT NULL,
  `picture` varchar(100) DEFAULT NULL,
  `ssc` varchar(100) NOT NULL,
  `hsc` varchar(100) NOT NULL,
  `graduation` varchar(100) NOT NULL,
  `post_graduation` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `phone`, `country_code_id`, `address`, `biography`, `main_job_role_id`, `skill_Level`, `picture`, `ssc`, `hsc`, `graduation`, `post_graduation`) VALUES
(1, 'Palash Alam', 'palash2036diu@gmail.com', 'pk53256142', 10213581, 3, 'Jatrabari', 'Can cope with any type of environment to provide best effort for my career', 1, 80, '', '4.44', '4.6', '3.42', '3.4'),
(2, 'Rakib', 'rakj@yahoo.com', '54345ghfkghf', 45354354, 3, 'dasghds', '\r\nCan cope with any type of environment to provide best effort for my career', 3, 50, '‰PNG\r\n\Z\n\0\0\0\rIHDR\0\0\0–\0\0\0–\0\0\0ßÐ\0\0\0¨PLTEþþþþû¸eB1þ‚ilL:jI5úõ³rR<hF4rSBõñ±äÜ¡z\\CÂ³ƒãÝÙdJÜÒšy\\L“{Z´¤', '5', '5', '4', '4'),
(5, '$name', '$email', '$password', 5465, 5, '$address', '$biography', 3, 5, '$picture', '0', '0', '0', '0'),
(7, 'fdfs', 'abc@gmail.com', 'dsf', 34534, 2, ' dfg', ' dfg', 1, 11, 'images.png', 'dd', 'dd', 'dd', 'dd'),
(8, 'hfg', 'abc@gmail.com', 'gfh', 567, 2, ' ghj', ' ghj', 1, 66, 'MHC_5150_PP.jpg', 'gfh', 'gfh', 'fgh', 'gfh'),
(9, 'hfg', 'abc@gmail.com', 'gfh', 567, 2, ' ghj', ' ghj', 1, 66, 'MHC_5150_PP.jpg', 'gfh', 'gfh', 'fgh', 'gfh'),
(17, 'aa', 'ghghghg@gmail.com', 'xcxc', 55555, 2, ' cvcv', ' cvc', 1, 12, 'images.png', 'ss', 'ss', 'ss', 'ss'),
(23, 'cvvc', 'abcbc@gmail.com', 'cvb', 345345, 2, ' cvb', ' cvb', 1, 44, 'images.png', 'cvb', 'cvb', 'cvb', 'cvbcv'),
(25, 'abc', 'abc@gmail.com', 'fgdf', 5654, 2, ' dfgfd', 'abc@gmail.com.txt', 1, 44, 'images.png', 'fgdf', 'dfg', 'dfg', 'dfg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `country_code_id`
--
ALTER TABLE `country_code_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_job_role_id`
--
ALTER TABLE `main_job_role_id`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_code_id` (`country_code_id`),
  ADD KEY `main_job_role_id` (`main_job_role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `country_code_id`
--
ALTER TABLE `country_code_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `main_job_role_id`
--
ALTER TABLE `main_job_role_id`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`country_code_id`) REFERENCES `country_code_id` (`id`),
  ADD CONSTRAINT `students_ibfk_2` FOREIGN KEY (`main_job_role_id`) REFERENCES `main_job_role_id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
