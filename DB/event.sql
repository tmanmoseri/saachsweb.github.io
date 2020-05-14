-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2020 at 06:40 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uploads`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `event` (
  `id` int(10) NOT NULL,
  `file` varchar(255) NOT NULL,
  `fname` text NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `file`, `fname`, `content`) VALUES
(32, '1589364670_161012-collins-Trump-trap-tease-new_dcaqsi.jpg', 'Mogale', 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmm'),
(33, '101569-Never-Let-Them-Change-You.jpg', 'SAACHS', 'hi hi hi h ih i h kdjk jdbvdjvjjkbn jkbkb bbb \r\n ujui \r\ngu gyggiguguiguiguiugug\r\n guvgug gu ugu ugu gu gug ugugugu\r\n guguiguiguguigli\r\niguguughughu uihuihi;\r\nug;uggu\r\nu u;guggggggggggggg\r\ngugugu gugug;u ;gugugugug;.'),
(34, '3709718-Oscar-Wilde-Quote-Pessimist-One-who-when-he-has-the-choice-of-two.jpg', 'jjjjj', 'jjjjjjjjjjjjjjjjjjjjjjjjjjjj\r\njjjjjjjjjjjjjjj\r\njjjjjjjjjjjj\r\njkjn \r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\nj'),
(48, 'Quotes-About-Goodbye-012.jpg', 'llllllllllllllllllll', 'lllllllllllllllllll\r\nllllllll ll l\r\n             llllllllllllll\r\n llllllllllllll'),
(49, '2db156dcd218412ea861b1391ce1be8a.png', '111111111111111', '11111111111111111111111111\r\n111111111111111111 111111111\r\n11111111111\r\n1111111111c 111111111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
