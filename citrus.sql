-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 12:38 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citrus`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(90) COLLATE utf8_unicode_ci NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `text`, `status`) VALUES
(44, 'John', 'john@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 1),
(45, 'Marko', 'marko@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 1),
(46, 'Vladan', 'vladan@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 1),
(47, 'Ivan', 'ivan@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 1),
(49, 'Mike', 'mike99@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 0),
(50, 'Michael', 'michael@gmail.com', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. ', 0);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(225) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `title`, `image`, `description`) VALUES
(1, 'Orange', 'product_1.jpg', 'The orange, or Citrus sinensis, is the common name for the sweet orange that is the standard supermarket fruit. Two of the most well-known varieties of the orange are Valencia and Washington Navel.'),
(2, 'Leemon', 'product_2.jpg', 'One of the most popular of all citrus fruits, the lemon tree is a durable, long-lived tree that is very sensitive to cold. For this reason, it is often grown as a potted plant that is moved indoors in cold weather.'),
(3, 'Persian Lime', 'product_4.jpg', 'Technically speaking, the kumquat (Citrus japonica) is not a citrus fruit, but it is very closely related. It was separated out into its genus around 1915 and formerly classified in the genus Fortunella. '),
(4, 'Grapefruit', 'product_5.jpg', 'The grapefruit is an accidental hybrid plant that first appeared in Barbados as a cross between sweet orange (Citrus sinensis) and pomelo (C. maxima).'),
(5, 'Bitter Orange', 'product_7.jpg', 'Bitter orange may also be known as sour orange or Seville orange. Most people find the fruit too sour-tasting to eat fresh, but this is an excellent fruit for making orange marmalade.'),
(6, 'Blood Orange', 'product_8.jpg', 'The blood orange is a variety of the standard sweet orange (Citrus sinensis) known for its deep red flesh. The most common varieties are the \'Moro\', the \'Sanguinello\', and the \'Tarocco\'.'),
(7, 'Calamondin', 'product_9.jpg', 'Calamondin was developed as a cross between a sour Mandarin and a kumquat. In the U.S., this tree is used most often for ornamental purposes rather than for edible fruit. '),
(8, 'Key Lime', 'product_10.jpg', 'Key lime is a famous species of lime (Citrus aurantifolia) that is also known as Mexican lime or West Indian lime. The fruit is sweeter than the Persian lime and is well-known as the base ingredient in a key lime pie.'),
(9, 'Kumquat', 'product_12.jpg', 'Technically speaking, the kumquat (Citrus japonica) is not a citrus fruit, but it is very closely related. It was separated out into its genus around 1915 and formerly classified in the genus Fortunella.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
