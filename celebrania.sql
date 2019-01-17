-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2019 at 03:01 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `celebrania`
--

-- --------------------------------------------------------

--
-- Table structure for table `our_work`
--

CREATE TABLE `our_work` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `title` varchar(255) NOT NULL,
  `des_para` varchar(255) NOT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `our_work`
--

INSERT INTO `our_work` (`id`, `img`, `title`, `des_para`, `upload_date`) VALUES
(5, 'byp-fav.png', 'tttttttttttttttttttttttttttttttttt', 'tttttttttttttttttttttttttttttttttt', '2019-01-15'),
(6, '1.jpeg', 'loremlorem', 'loremlorem', '2019-01-15'),
(7, '2.jpeg', 'loremlorem', 'loremlorem', '2019-01-15'),
(8, '3.jpeg', 'loremlorem', 'loremlorem', '2019-01-15'),
(9, '4.jpeg', 'loremlorem', 'loremlorem', '2019-01-15'),
(10, '7.jpeg', 'loremlorem', 'loremlorem', '2019-01-15'),
(11, '8.jpeg', 'loremlorem', 'loremlorem', '2019-01-15'),
(12, '9.jpeg', 'loremlorem', 'loremlorem', '2019-01-15'),
(13, '10.jpeg', 'loremlorem', 'loremlorem', '2019-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_date` date NOT NULL,
  `rand_salt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `our_work`
--
ALTER TABLE `our_work`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `our_work`
--
ALTER TABLE `our_work`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
