-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb15.freehostingeu.com
-- Generation Time: Oct 05, 2016 at 02:06 PM
-- Server version: 5.7.13-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2140083_users`
--

-- --------------------------------------------------------

--
-- Table structure for table `hifluence`
--

CREATE TABLE `hifluence` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(150) NOT NULL,
  `tags` varchar(2500) NOT NULL,
  `comments` varchar(2500) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hifluence`
--

INSERT INTO `hifluence` (`id`, `username`, `password`, `email`, `tags`, `comments`) VALUES
(1, 'Carsten', 'Carsten', 'carstengeerts@gmail.com', '<br><a href="#">programmer</a><br><a href="#">great</a><br><a href="#">smart</a><br><a href="#">tag</a>', 'cool guy<br>comment<br>comment2'),
(6, 'jan', 'jan', 'jan@gmail.com', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hifluence`
--
ALTER TABLE `hifluence`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hifluence`
--
ALTER TABLE `hifluence`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
