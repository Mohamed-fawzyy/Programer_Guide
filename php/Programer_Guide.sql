-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 27, 2021 at 08:11 PM
-- Server version: 5.7.34
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Programer_Guide`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_name` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_name`, `id`, `email`, `password`) VALUES
('mohamed fawzy', 1, 'mohamed@admin20.com', 'admin123'),
('salma adel', 2, 'salma@admin22.com', 'admin122');

-- --------------------------------------------------------

--
-- Table structure for table `htmlexam`
--

CREATE TABLE `htmlexam` (
  `questions` varchar(79) DEFAULT NULL,
  `answers` varchar(26) NOT NULL,
  `e_level` varchar(10) NOT NULL,
  `tt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `htmlexam`
--

INSERT INTO `htmlexam` (`questions`, `answers`, `e_level`, `tt`) VALUES
('5)HTML tags are enclosed in-', 'and', 'htmlbeg', 10),
('3)Which of the following tag is used to insert a line-break in HTML?', 'br', 'htmlbeg', 8),
('4)Which property sets the size of the font?', 'font-size', 'htmladv', 4),
('4)Which of the following tag is used for inserting the largest heading in HTML?', 'h1', 'htmlbeg', 9),
('1)How to create a hyperlink in HTML?', 'href = \"\"', 'htmlint', 11),
('2)The correct sequence of HTML tags for starting a webpage is – ', 'HTML, Head, Title, Body', 'htmlbeg', 7),
('1)What does HTML stand for?', 'Hyper Text Markup Language', 'htmlbeg', 6),
('2)How to insert an image in HTML?', 'img src = \"\"', 'htmlint', 12),
('5)what is the name of styling inside html ?', 'inbedded style', 'htmlint', 15),
('3)How to create a checkbox in HTML?', 'input type = \"checkbox\"', 'htmladv', 3),
('1)The tag used to create a new list item and also include a hyperlink', 'LI', 'htmladv', 1),
('2)What is used to create a combo box (or drop-down box)?', 'select', 'htmladv', 2),
('4)How to insert a background image in HTML?', 'table', 'htmlint', 14),
('5)The tag for the table data is', 'TD', 'htmladv', 5),
('3)Which of the following tag is used to add rows in the table?', 'tr and tr', 'htmlint', 13);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_name` varchar(30) DEFAULT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `user_ans_beg` varchar(200) DEFAULT NULL,
  `user_ans_int` varchar(200) DEFAULT NULL,
  `user_ans_adv` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_name`, `phone_number`, `email`, `password`, `user_id`, `user_ans_beg`, `user_ans_int`, `user_ans_adv`) VALUES
('mohamed', '34523', 'moh@moh.com', 'asdf', 17, 'q1)d\n            , q2)s, q3)d, q4)gfhj, q5)sf5', 'q1)iuy\n            , q2)iuy, q3)uiy, q4)iuy, q5)hjk', 'q1)bjnv\n            , q2)bn, q3)fgdh, q4)rth, q5)tr45'),
('last', '564456', 'last@isa.com', 'asdf', 18, 'q1)dfgssgh\n            , q2)uy, q3)ghj, q4)ghj, q5)ey', 'q1)erty\n            , q2)efht, q3)ert3, q4)ert, q5)yj', 'q1)fghjd\n            , q2)dfgs, q3)aewt, q4)ylr, q5)ey'),
('yasmina', '013269786', 'yas@yas.com', 'asdf', 19, 'q1)asdf\n            , q2)hfr, q3)rty, q4)fgh, q5)dfg', 'q1)fdegh\n            , q2)jfhg, q3)fd, q4)ewrt, q5)hfgds', 'q1)rty\n            , q2)ghjt, q3)ewy5, q4)67i, q5)35juy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `htmlexam`
--
ALTER TABLE `htmlexam`
  ADD PRIMARY KEY (`answers`),
  ADD UNIQUE KEY `tt` (`tt`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `htmlexam`
--
ALTER TABLE `htmlexam`
  MODIFY `tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
