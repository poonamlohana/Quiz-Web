-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2020 at 11:58 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quizdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `aid` int(250) NOT NULL,
  `answer` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`aid`, `answer`, `ans_id`) VALUES
(1, 'Hyper Text Markup Language', 1),
(2, 'Hot Mail', 1),
(3, 'How to Make Lasagna', 1),
(4, 'NOT', 1),
(5, 'Opening', 2),
(6, ' Closing', 2),
(7, 'Both', 2),
(8, 'NOT', 2),
(9, 'Opening tag has a / in front', 3),
(10, 'Closing tag has a / in front', 3),
(11, ' There is no difference', 3),
(12, 'NOT', 3),
(13, ' Break tag', 4),
(14, 'A broken one', 4),
(15, ' An opening tag', 4),
(16, 'NOT', 4),
(17, 'Opening', 5),
(18, 'Closing', 5),
(19, 'Both', 5),
(20, 'NOT', 5);

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `qid` int(250) NOT NULL,
  `question` varchar(250) NOT NULL,
  `ans_id` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`qid`, `question`, `ans_id`) VALUES
(1, ' What does HTML stand for?', 1),
(2, ' < / body > Is this an opening tag or a closing tag?', 5),
(3, ' what is the difference in an opening tag and a closing tag?', 9),
(4, ' < br/> What type of tag is this?', 13),
(5, '< body > Is this an opening tag or a closing tag?', 17);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `totalques` int(250) NOT NULL,
  `answerscorrect` int(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `totalques`, `answerscorrect`) VALUES
(48, 'munesh', 5, 0),
(49, 'munesh', 5, 2),
(50, 'Aneel', 5, 3),
(51, 'munesh', 5, 1),
(52, 'ani', 5, 3),
(53, 'new1', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'munesh', 'jhgiugh'),
(2, 'munesh', 'jhgiugh'),
(3, 'munesh', '12345'),
(4, 'root', '12345'),
(5, 'admin', '12345'),
(6, 'munesh', '12345'),
(7, 'kumar', '12345'),
(8, 'lalwani', '12345'),
(9, 'ss', '11'),
(10, 'woo', '12345'),
(11, 'raj', '12345'),
(12, 'munesh', '12345'),
(13, 'ana', 'ana'),
(14, 'munesh', '12345'),
(15, 'munesh', '12345'),
(16, 'Aneel', '12345'),
(17, 'ani', 'ani'),
(18, 'new1', 'new1'),
(19, 'new1', 'new1'),
(20, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `aid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `qid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
