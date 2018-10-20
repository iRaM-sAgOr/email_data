-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 11:02 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `python_test1`
--

-- --------------------------------------------------------

--
-- Table structure for table `email_data`
--

CREATE TABLE `email_data` (
  `mail_id` int(200) NOT NULL,
  `Ffrom` varchar(100) NOT NULL,
  `Tto` varchar(100) NOT NULL,
  `body` text NOT NULL,
  `Ccheck` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email_data`
--

INSERT INTO `email_data` (`mail_id`, `Ffrom`, `Tto`, `body`, `Ccheck`) VALUES
(11, 'sakib@cuetmail.com', 'iram@cuetmail.com', 'make some negative changes in the document', 1),
(12, 'sakib@cuetmail.com', 'sagor@cuetmail.com', 'changing is important now', 1),
(13, 'sakib@cuetmail.com', 'sagor@cuetmail.com', 'change is important', 1);

-- --------------------------------------------------------

--
-- Table structure for table `result_data`
--

CREATE TABLE `result_data` (
  `mail_id` int(100) NOT NULL,
  `Ffrom` varchar(200) NOT NULL,
  `Tto` varchar(200) NOT NULL,
  `body` text NOT NULL,
  `verdict` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result_data`
--

INSERT INTO `result_data` (`mail_id`, `Ffrom`, `Tto`, `body`, `verdict`) VALUES
(9, 'iram@cuetmail.com', 'sagor@cuetmail.com', 'conspiracy is not good', 'infected'),
(10, 'iram@cuetmail.com', 'sagor@cuetmail.com', 'kaj nai dosto conspiracy kortaci', 'infected'),
(11, 'sakib@cuetmail.com', 'iram@cuetmail.com', 'make some negative changes in the document', 'infected'),
(13, 'sakib@cuetmail.com', 'sagor@cuetmail.com', 'change is important', 'infected');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('sagor', 'sagor@cuetmail.com', 1234),
('nayan', 'shafiqulnayan@gmail.com', 123456),
('iram', 'iram@cuetmail.com', 1234),
('sakib', 'sakib@cuetmail.com', 1234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `email_data`
--
ALTER TABLE `email_data`
  ADD PRIMARY KEY (`mail_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `email_data`
--
ALTER TABLE `email_data`
  MODIFY `mail_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
