-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2026 at 03:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movix_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `poster` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `rating` decimal(3,1) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre`, `year`, `poster`, `description`, `rating`, `price`) VALUES
(1, 'The Dark Knight (2008)', 'ACTION', NULL, 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_FMjpg_UX1000_.jpg', NULL, 9.0, 299.00),
(2, 'Interstellar (2014)', 'SCI-FI', NULL, 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_FMjpg_UX1000_.jpg', NULL, 8.7, 280.00),
(3, 'Inception (2010)', 'SCI-FI', NULL, 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_FMjpg_UX1000_.jpg', NULL, 8.8, 250.00),
(4, 'Oppenheimer (2023)', 'BIOGRAPHY', NULL, 'https://m.media-amazon.com/images/M/MV5BMDBmYTZjNjUtN2M1MS00MTQ2LTk2ODgtNzc2M2QyZGE5NTVjXkEyXkFqcGdeQXVyNzAwMjU2MTY@._V1_FMjpg_UX1000_.jpg', NULL, 8.9, 350.00),
(5, 'Dune: Part Two (2024)', 'SCI-FI', NULL, 'https://m.media-amazon.com/images/M/MV5BN2QyZGU4ZDctOWMzMy00NTc5LThlOGQtODhmNDI1NmY5YzAwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_FMjpg_UX1000_.jpg', NULL, 8.6, 320.00),
(6, 'Spider-Man: Across the Spider-Verse', 'ANIMATION', NULL, 'images/spiderman.jpeg', NULL, 8.7, 299.00),
(7, 'The Batman (2022)', 'ACTION', NULL, 'images/batman.jpeg', NULL, 7.8, 270.00),
(8, 'Gladiator II (2024)', 'ACTION', NULL, 'images/gladiator.jpeg', NULL, 7.4, 310.00),
(9, 'Inside Out 2 (2024)', 'ANIMATION', NULL, 'images/insideout.jpeg', NULL, 7.7, 280.00),
(10, 'Pulp Fiction (1994)', 'CRIME', NULL, 'images/pulpfiction.jpeg', NULL, 8.9, 230.00),
(11, 'The Godfather (1972)', 'DRAMA', NULL, 'images/godfather.jpeg', NULL, 9.2, 250.00),
(12, 'Avatar: The Way of Water (2022)', 'SCI-FI', NULL, 'images/avatar.jpeg', NULL, 7.6, 299.00),
(13, 'Avengers: Endgame (2019)', 'ACTION', NULL, 'https://m.media-amazon.com/images/M/MV5BMTc5MDE2ODcwNV5BMl5BanBnXkFtZTgwMzI2NzQ2NzM@._V1_FMjpg_UX1000_.jpg', NULL, 8.4, 330.00),
(14, 'Fight Club (1999)', 'DRAMA', NULL, 'images/fightclub.jpeg', NULL, 8.8, 240.00),
(15, 'The Matrix (1999)', 'SCI-FI', NULL, 'images/matrix.webp', NULL, 8.7, 260.00);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fullname`, `email`, `password`) VALUES
(1, '', 'Lhea Godines', 'lhea@gmail.com', '$2y$10$HDqyRduX9Kv5KxBRnQm4qeryv0.34aIKnVA6aoXSdtgiroOs.IUq.'),
(2, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$3dSH1mfspLcodwPQOffALe0xRhYqHKXKljPQI7PNIxGgBe3Z/qqou'),
(3, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$xl9YlN8XcSkZK.YnG7lo7ORk.LtaJKh9OqAAO49kfUOmNrR29wQJa'),
(4, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$gF/TbF3T1gOC0aM7ebmbY.M8FE096T9HP2l1Mkt97er81nHxVakym'),
(5, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$bAe.I27BG5qMAkaWF5mk1.6A69ZiL4db6y.FqbXPovcl87sD.oazq'),
(6, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$b16XgI3174fd7ZhD7SROF.qX9.QDXa2Evxao7K1G/k/pfk6iQ6/EO'),
(7, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$iCJrG55ZBN/BwBSds3VzOeoQhZoc/TG7988aoTohm4mWoqiaVsOdq'),
(8, 'Ian', NULL, 'josephiangwapo@123', '$2y$10$cnuPvWB9QMFic8a1jHpEGOaK1hj33IK.EUCjGIWDhhlurmBSX.Y3y'),
(9, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$xM/u9CRj3oRnVRe44Lo.aeJJIXr0j9o9kftyMPSeJgIO4/V2M1qCK'),
(10, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$SMMWjf8o6ovQTmFGmnhJ2OtvlCelqdu1lvXcZLu5sgxiVZlVKiCha'),
(11, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$gqXGWe2JIMT416DezRUP9uh2GOVSMIYHT8F9erf0iFSGlPCSVef1S'),
(12, 'lhea', NULL, 'lhea@gmail.com', '$2y$10$qy/cOa4pLjrlg0V3Qnq/ueqk0RZLvOA2xJsQd1CCEIQLEdXW1BG9.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
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
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
