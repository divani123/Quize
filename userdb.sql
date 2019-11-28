-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 06:14 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(100) NOT NULL,
  `question` varchar(100) NOT NULL,
  `answer_one` varchar(100) NOT NULL,
  `answer_two` varchar(100) NOT NULL,
  `answer_three` varchar(100) NOT NULL,
  `answer_four` varchar(100) NOT NULL,
  `correct_answer` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `answer_one`, `answer_two`, `answer_three`, `answer_four`, `correct_answer`) VALUES
(1, ' A source program is the program written in which level language?', 'English', 'High-Level', 'Symbolic', 'Machine', 'High-Level'),
(2, 'Which of the following operating systems do you choose to implement a client server network?', 'Windows 2000', 'Windows 98', 'MS DOS', 'Windows 95', 'Windows 2000'),
(3, 'Which has the maximum capacity?', 'Floppy disk', 'jaz-cartridge', 'Zip disk', 'super disk', 'jaz-cartridge'),
(4, ' Which is a non-standard version of computing language?', 'PL/1', 'ARMY', 'PROLOG', 'APL', 'ARMY'),
(5, ' A co-processor', 'is quite common in modern computers', 'is relatively easy to support in software', 'causes all processes to function equally', 'works with any application', 'is relatively easy to support in software');

-- --------------------------------------------------------

--
-- Table structure for table `registers`
--

CREATE TABLE `registers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phonenumber` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registers`
--

INSERT INTO `registers` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES
(1, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(2, 'Dishma', 'Bhashitha', 'dishma@bestjoblk.com', '1234567890', 'pass'),
(3, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(4, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(5, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(6, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(7, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(14, 'Samindi', 'Nawodya', 'samindi@bestjoblk.com', '0372235194', 'sami'),
(15, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(16, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(17, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(18, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(19, 'Divani', 'Hansi', 'divani@bestjoblk.com', '0123456789', 'password'),
(20, 'Dishma', 'Bhashitha', 'dishma@bestjoblk.com', '0372235194', 'bashi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(40) NOT NULL,
  `last_login` datetime NOT NULL,
  `is_deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `last_login`, `is_deleted`) VALUES
(1, 'Divani', 'Tharuka', 'divani@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '2019-08-28 18:32:57', 0),
(2, 'Samindi', 'Nawodya', 'samindi@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '0000-00-00 00:00:00', 0),
(3, 'Ishani', 'Udara', 'ishani@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '2019-08-15 12:07:24', 0),
(4, 'Apsara', 'Kumari', 'apsara@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '0000-00-00 00:00:00', 0),
(5, 'Achala', 'Bandara', 'achala@bestjoblk.com', '91dfd9ddb4198affc5c194cd8ce6d338fde470e2', '2019-06-05 09:29:04', 0),
(6, 'Shashini', 'Bhagya', 'shashini@bestjoblk.com', '5baa61e4c9b93f3f0682250b6cf8331b7ee68fd8', '2019-06-09 10:46:47', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registers`
--
ALTER TABLE `registers`
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
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registers`
--
ALTER TABLE `registers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
