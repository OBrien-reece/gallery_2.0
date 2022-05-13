-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2022 at 01:41 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gallery`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(255) NOT NULL,
  `photo_id` int(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `body` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `photo_id`, `author`, `body`) VALUES
(33, 229, 'number_3_fan', 'Ronda Jean Rousey is an American professional wrestler, actress, former judoka and mixed martial artist. She is currently signed to WWE, where she performs on the SmackDown brand and is the current SmackDown Women\'s Champion in her first reign. She is best known for her time in the Ultimate Fighting Championship.'),
(34, 230, 'rewwer', 'Zhang Weili is a Chinese mixed martial artist. She is the former Kunlun Fight strawweight champion and competes in the strawweight division of the Ultimate Fighting Championship, where she is a former UFC Women\'s Strawweight Champion. She is the first ever Chinese champion in UFC history.'),
(35, 231, 'October Forensics', 'Rose Gertrude Namajunas is an American mixed martial artist. She is signed to the Ultimate Fighting Championship, where she competes in the women\'s strawweight division and is the former two-time UFC Women\'s Strawweight Champion.'),
(36, 232, 'number_2_fan', 'Dustin Glenn Poirier is an American professional mixed martial artist. He is a former Interim UFC Lightweight Champion. As of May 9, 2022, he is #2 in the UFC lightweight rankings and #7 in the UFC men\'s pound-for-pound rankings.'),
(37, 233, 'Christian', 'Conor Anthony McGregor is an Irish professional mixed martial artist. He is a former Ultimate Fighting Championship featherweight and lightweight double-champion. He is also the former Cage Warriors featherweight and lightweight champion. As of 19 July 2021, he is ranked #9 in the UFC lightweight rankings.'),
(38, 234, 'Khabib', 'Khabib Abdulmanapovich Nurmagomedov is a Russian former professional mixed martial artist. He competed in the lightweight division of the Ultimate Fighting Championship, where he was the longest-reigning UFC Lightweight Champion, having held the title from April 2018 to March 2021'),
(39, 222, 'Audi', 'Audi AG is a German automotive manufacturer of luxury vehicles headquartered in Ingolstadt, Bavaria, Germany. As a subsidiary of its parent company, the Volkswagen Group, Audi produces vehicles in nine production facilities worldwide.');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `caption` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `filename` varchar(255) NOT NULL,
  `alternate_text` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `size` int(11) NOT NULL,
  `user_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `title`, `caption`, `description`, `filename`, `alternate_text`, `type`, `size`, `user_id`) VALUES
(136, '', '', '', '_large_image_1.jpg', '', 'image/jpeg', 479843, 39),
(137, '', '', '', '_large_image_3.jpg', '', 'image/jpeg', 165053, 45),
(138, '', '', '', 'image-1 copy.jpg', '', 'image/jpeg', 328747, 45),
(139, '', '', '', '_large_image_4.jpg', '', 'image/jpeg', 554659, 45),
(140, '', '', '', 'image-1.jpg', '', 'image/jpeg', 328747, 45),
(141, '', '', '', 'images-1 copy.jpg', '', 'image/jpeg', 28947, 45),
(142, '', '', '', 'images-2 copy.jpg', '', 'image/jpeg', 18578, 45),
(143, '', '', '', 'images-3 copy.jpg', '', 'image/jpeg', 18096, 45),
(144, '', '', '', 'images-3.jpg', '', 'image/jpeg', 18096, 45),
(145, '', '', '', 'images-4 copy.jpg', '', 'image/jpeg', 23270, 45),
(146, '', '', '', 'images-4.jpg', '', 'image/jpeg', 23270, 45),
(147, '', '', '', 'images-5 copy.jpg', '', 'image/jpeg', 33192, 45),
(148, '', '', '', 'images-5.jpg', '', 'image/jpeg', 33192, 45),
(149, '', '', '', 'images-6 copy.jpg', '', 'image/jpeg', 21886, 45),
(150, '', '', '', 'images-6.jpg', '', 'image/jpeg', 21886, 45),
(151, '', '', '', 'images-7 copy.jpg', '', 'image/jpeg', 24140, 45),
(152, '', '', '', 'images-7.jpg', '', 'image/jpeg', 24140, 45),
(153, '', '', '', 'images-8 copy.jpg', '', 'image/jpeg', 20810, 45),
(154, '', '', '', 'images-8.jpg', '', 'image/jpeg', 20810, 45),
(155, '', '', '', 'images-9 copy.jpg', '', 'image/jpeg', 21108, 45),
(156, '', '', '', 'images-9.jpg', '', 'image/jpeg', 21108, 45),
(157, '', '', '', 'images-10 copy.jpg', '', 'image/jpeg', 20401, 45),
(158, '', '', '', 'images-10.jpg', '', 'image/jpeg', 20401, 45),
(159, '', '', '', 'images-11 copy.jpg', '', 'image/jpeg', 27916, 45),
(160, '', '', '', 'images-11.jpg', '', 'image/jpeg', 27916, 45),
(161, '', '', '', 'images-12 copy.jpg', '', 'image/jpeg', 18540, 45),
(162, '', '', '', 'images-12.jpg', '', 'image/jpeg', 18540, 45),
(163, '', '', '', 'images-13 copy.jpg', '', 'image/jpeg', 22082, 45),
(164, '', '', '', 'images-13.jpg', '', 'image/jpeg', 22082, 45),
(165, '', '', '', 'images-14 copy.jpg', '', 'image/jpeg', 21992, 45),
(166, '', '', '', 'images-14.jpg', '', 'image/jpeg', 21992, 45),
(167, '', '', '', 'images-15 copy.jpg', '', 'image/jpeg', 28466, 45),
(168, '', '', '', 'images-15.jpg', '', 'image/jpeg', 28466, 45),
(169, '', '', '', 'images-16 copy.jpg', '', 'image/jpeg', 21133, 45),
(170, '', '', '', 'images-16.jpg', '', 'image/jpeg', 21133, 45),
(171, '', '', '', 'images-17 copy.jpg', '', 'image/jpeg', 22792, 45),
(172, '', '', '', 'images-17.jpg', '', 'image/jpeg', 22792, 45),
(173, '', '', '', 'images-18 copy.jpg', '', 'image/jpeg', 27595, 45),
(174, '', '', '', 'images-18.jpg', '', 'image/jpeg', 27595, 45),
(175, '', '', '', 'images-19 copy.jpg', '', 'image/jpeg', 22792, 45),
(176, '', '', '', 'images-19.jpg', '', 'image/jpeg', 22792, 45),
(177, '', '', '', 'images-20 copy.jpg', '', 'image/jpeg', 22942, 45),
(178, '', '', '', 'images-20.jpg', '', 'image/jpeg', 22942, 45),
(179, '', '', '', 'images-21 copy.jpg', '', 'image/jpeg', 19957, 45),
(180, '', '', '', 'images-21.jpg', '', 'image/jpeg', 19957, 45),
(181, '', '', '', 'images-22 copy.jpg', '', 'image/jpeg', 21133, 45),
(182, '', '', '', 'images-22.jpg', '', 'image/jpeg', 21133, 45),
(183, '', '', '', 'images-23 copy.jpg', '', 'image/jpeg', 22792, 45),
(184, '', '', '', 'images-23.jpg', '', 'image/jpeg', 22792, 45),
(185, '', '', '', 'images-24 copy.jpg', '', 'image/jpeg', 29850, 45),
(186, '', '', '', 'images-24.jpg', '', 'image/jpeg', 29850, 45),
(187, '', '', '', 'images-25 copy.jpg', '', 'image/jpeg', 19363, 45),
(188, '', '', '', 'images-25.jpg', '', 'image/jpeg', 19363, 45),
(189, '', '', '', 'images-26 copy.jpg', '', 'image/jpeg', 21802, 45),
(190, '', '', '', 'images-26.jpg', '', 'image/jpeg', 21802, 45),
(191, '', '', '', 'images-27 copy.jpg', '', 'image/jpeg', 17662, 45),
(192, '', '', '', 'images-27.jpg', '', 'image/jpeg', 17662, 45),
(193, '', '', '', 'images-28 copy.jpg', '', 'image/jpeg', 17662, 45),
(194, '', '', '', 'images-28.jpg', '', 'image/jpeg', 17662, 45),
(195, '', '', '', 'images-29 copy.jpg', '', 'image/jpeg', 25493, 45),
(196, '', '', '', 'images-29.jpg', '', 'image/jpeg', 25493, 45),
(197, '', '', '', 'images-30 copy.jpg', '', 'image/jpeg', 20257, 45),
(198, '', '', '', 'images-30.jpg', '', 'image/jpeg', 20257, 45),
(199, '', '', '', 'images-31 copy.jpg', '', 'image/jpeg', 20928, 45),
(200, '', '', '', 'images-31.jpg', '', 'image/jpeg', 20928, 45),
(201, '', '', '', 'images-32 copy.jpg', '', 'image/jpeg', 22772, 45),
(202, '', '', '', 'images-32.jpg', '', 'image/jpeg', 22772, 45),
(203, '', '', '', 'images-33 copy.jpg', '', 'image/jpeg', 16855, 45),
(204, '', '', '', 'images-33.jpg', '', 'image/jpeg', 16855, 45),
(205, '', '', '', 'images-34 copy.jpg', '', 'image/jpeg', 23587, 45),
(206, '', '', '', 'images-34.jpg', '', 'image/jpeg', 23587, 45),
(207, '', '', '', 'images-35 copy.jpg', '', 'image/jpeg', 23672, 45),
(208, '', '', '', 'images-35.jpg', '', 'image/jpeg', 23672, 45),
(209, '', '', '', 'images-36.jpg', '', 'image/jpeg', 21672, 45),
(210, '', '', '', 'images-36 copy.jpg', '', 'image/jpeg', 21672, 45),
(211, '', '', '', 'images-37.jpg', '', 'image/jpeg', 20381, 45),
(212, '', '', '', 'images-37 copy.jpg', '', 'image/jpeg', 20381, 45),
(213, '', '', '', 'images-38 copy.jpg', '', 'image/jpeg', 21857, 45),
(214, '', '', '', 'images-38.jpg', '', 'image/jpeg', 21857, 45),
(215, '', '', '', 'images-39 copy.jpg', '', 'image/jpeg', 24969, 45),
(216, '', '', '', 'images-39.jpg', '', 'image/jpeg', 24969, 45),
(217, '', '', '', 'images-40 copy.jpg', '', 'image/jpeg', 24385, 45),
(218, '', '', '', 'images-40.jpg', '', 'image/jpeg', 24385, 45),
(219, '', '', '', 'images-41 copy.jpg', '', 'image/jpeg', 16296, 45),
(220, '', '', '', 'images-41.jpg', '', 'image/jpeg', 16296, 45),
(221, '', '', '', 'images-42 copy.jpg', '', 'image/jpeg', 22401, 45),
(222, '', '', '', 'images-42.jpg', '', 'image/jpeg', 22401, 45),
(223, '', '', '', 'images-43 copy.jpg', '', 'image/jpeg', 27955, 45),
(224, '', '', '', 'images-43.jpg', '', 'image/jpeg', 27955, 45),
(225, '', '', '', 'images-44 copy.jpg', '', 'image/jpeg', 29486, 45),
(226, '', '', '', 'images-44.jpg', '', 'image/jpeg', 29486, 45),
(227, '', '', '', 'images-50 copy.jpg', '', 'image/jpeg', 21652, 45),
(228, '', '', '', 'images-50.jpg', '', 'image/jpeg', 21652, 45),
(229, '', '', '', 'Ufc.jpg', '', 'image/jpeg', 108529, 46),
(230, '', '', '', 'WEILI ZHANG.png', '', 'image/png', 256765, 46),
(231, '', '', '', 'Thug Rose Namajunas  by kungfufrogmma on DeviantArt.jpg', '', 'image/jpeg', 116114, 46),
(232, '', '', '', 'Arturomariscal te ha enviado un Pin_.jpg', '', 'image/jpeg', 79048, 46),
(233, '', '', '', '9ef8f52c-178f-4e2d-96a5-2235c16314be.jpg', '', 'image/jpeg', 176474, 46),
(234, '', '', '', 'f27bf8f6-6662-43b8-80b9-78d94ffe96e7.jpg', '', 'image/jpeg', 213389, 46);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `first_name`, `last_name`, `user_image`) VALUES
(45, 'stylebender', '1', 'Israel', 'Adesanya', 'images-20.jpg'),
(46, 'rico', '1', 'Israel', 'Sanya', 'images-1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=235;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
