-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 26, 2024 at 07:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` smallint NOT NULL,
  `namadepan` varchar(30) NOT NULL,
  `namabelakang` varchar(50) NOT NULL,
  `no_tlp` varchar(30) NOT NULL,
  `gmail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `namadepan`, `namabelakang`, `no_tlp`, `gmail`) VALUES
(1, 'Dika', 'Arnanda Putra', '+6285175328599', 'dika4kiga@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` smallint NOT NULL,
  `namafoto` varchar(30) NOT NULL,
  `link` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `namafoto`, `link`) VALUES
(1, 'orang', 'https://github.com/dikaarnnd/PemWeb-B/blob/main/Project-UTS/images/orang.png?raw=true'),
(5, 'webimg', 'https://cdn-icons-png.flaticon.com/128/1055/1055666.png'),
(6, 'dbimg', 'https://cdn-icons-png.flaticon.com/128/2906/2906274.png'),
(7, 'iotimg', 'https://cdn-icons-png.flaticon.com/128/6702/6702322.png'),
(8, 'ig', 'https://cdn-icons-png.flaticon.com/128/174/174855.png'),
(9, 'linkedin', 'https://cdn-icons-png.flaticon.com/128/174/174857.png'),
(10, 'github', 'https://cdn-icons-png.flaticon.com/128/733/733609.png'),
(11, 'html', 'https://cdn-icons-png.flaticon.com/128/174/174854.png'),
(12, 'css', 'https://cdn-icons-png.flaticon.com/128/16020/16020753.png'),
(13, 'js', 'https://cdn-icons-png.flaticon.com/128/5968/5968292.png'),
(14, 'php', 'https://cdn-icons-png.flaticon.com/128/5968/5968332.png'),
(15, 'react', 'https://cdn-icons-png.flaticon.com/128/1126/1126012.png'),
(16, 'nodejs', 'https://cdn-icons-png.flaticon.com/128/15380/15380914.png'),
(17, 'firebase', 'https://github.com/dikaarnnd/PemWeb-B/blob/main/Project-UTS/images/firebase.png?raw=true'),
(18, 'arduino', 'https://cdn-icons-png.flaticon.com/128/10288/10288082.png'),
(19, 'tailwind', 'https://github.com/dikaarnnd/PemWeb-B/blob/main/Project-UTS/images/tailwind.png?raw=true'),
(20, 'project1', 'https://elektro.uma.ac.id/wp-content/uploads/2021/02/1-1.png'),
(21, 'project2', 'https://github.com/dikaarnnd/PemWeb-B/blob/main/Project-UTS/images/logo.png?raw=true'),
(22, 'project3', 'https://github.com/dikaarnnd/PemWeb-B/blob/main/Project-UTS/images/waterdrop-LandingPage.png?raw=true'),
(23, 'wa', 'https://cdn-icons-png.flaticon.com/128/4423/4423697.png'),
(24, 'gmail', 'https://cdn-icons-png.flaticon.com/128/10829/10829119.png');

-- --------------------------------------------------------

--
-- Table structure for table `lang`
--

CREATE TABLE `lang` (
  `id` smallint NOT NULL,
  `namabhs` varchar(30) NOT NULL,
  `link` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `lang`
--

INSERT INTO `lang` (`id`, `namabhs`, `link`) VALUES
(1, 'html', 'https://www.w3schools.com/html/html_intro.asp'),
(2, 'css', 'https://developer.mozilla.org/en-US/docs/Web/CSS'),
(3, 'js', 'https://developer.mozilla.org/en-US/docs/Web/JavaScript'),
(4, 'php', 'https://www.w3schools.com/php/default.asp'),
(5, 'react', 'https://react.dev/'),
(7, 'firebase', 'https://firebase.google.com/docs?hl=id'),
(8, 'nodejs', 'https://nodejs.org/docs/latest/api/'),
(9, 'tailwind', 'https://tailwindcss.com/'),
(10, 'arduino', 'https://docs.arduino.cc/');

-- --------------------------------------------------------

--
-- Table structure for table `savedata`
--

CREATE TABLE `savedata` (
  `id` smallint NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `savedata`
--

INSERT INTO `savedata` (`id`, `name`, `email`, `description`) VALUES
(6, 'Dika Arnanda Putra', 'dika4kiga@gmail.com', 'asd'),
(7, 'Dika', 'dika.arnandaputra@student.upj.ac.id', 'pppppp');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` smallint NOT NULL,
  `skillname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `skillname`) VALUES
(1, 'Front-End Developer'),
(2, 'Back-End Developer'),
(3, 'IoT Developer'),
(4, 'Web Design'),
(5, 'Database Integration'),
(6, 'IoT');

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` smallint NOT NULL,
  `namasosmed` varchar(30) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `namasosmed`, `link`) VALUES
(1, 'ig', 'https://www.instagram.com/'),
(2, 'linkedin', 'https://www.linkedin.com/feed/'),
(3, 'github', 'https://github.com/dikaarnnd');

-- --------------------------------------------------------

--
-- Table structure for table `text`
--

CREATE TABLE `text` (
  `id` smallint NOT NULL,
  `nametext` varchar(30) NOT NULL,
  `txt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `text`
--

INSERT INTO `text` (`id`, `nametext`, `txt`) VALUES
(1, 'about', 'I am a Bachelor of Informatics graduate from Universitas Pembangunan Jaya, with expertise in Internet of Things (IoT), Front-End, and Back-End. In the world of web development, I have the ability to create interactive and responsive sites, which are not only attractive but also easy to use. In addition, I am also able to integrate web applications with databases, so as to store and manage data efficiently. On the other hand, I also develop IoT devices that can connect with web-based and mobile applications, creating innovative and functional solutions for various needs.'),
(2, 'skill', 'My programming languages consist of HTML, Javascript, Javascript frameworks such as React and React Native, and Arduino IDE to develop IoT. I mastered CSS and Tailwindcss to design an attractive UI. I also mastered NodeJS, Firebase, and PHP as Back-End.'),
(3, 'p1', 'Using Arduino to design a light brightness detection system to automatically turn on lights in a certain level of dimness.'),
(4, 'p2', 'Create a mobile-based application called Regrant to resell used goods that functions normally with chat features and maps for the Cash on Delivery transaction process.'),
(5, 'p3', 'Create a web-based application called Water Wise to record water usage with the aim of saving water and accompanied by a gamification feature as a rating of how much the user saves water in a certain period.'),
(6, 'contact2', 'If you are interested in my skills and experience, don\'t hesitate to contact me! I am ready to help you take your creative ideas to the next level and provide the best solution for your project needs. Get in touch below to start the collaboration!'),
(7, 'contact1', 'Feel free to contact me!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lang`
--
ALTER TABLE `lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `savedata`
--
ALTER TABLE `savedata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `text`
--
ALTER TABLE `text`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `lang`
--
ALTER TABLE `lang`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `savedata`
--
ALTER TABLE `savedata`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `text`
--
ALTER TABLE `text`
  MODIFY `id` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
