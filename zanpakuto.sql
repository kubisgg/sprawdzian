-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 14, 2022 at 07:20 AM
-- Server version: 10.9.4-MariaDB
-- PHP Version: 8.1.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `4t_p`
--

-- --------------------------------------------------------

--
-- Table structure for table `zanpakuto`
--

CREATE TABLE `zanpakuto` (
  `id` int(11) NOT NULL,
  `imie` varchar(255) NOT NULL,
  `wybudzenie` varchar(255) NOT NULL,
  `element` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zanpakuto`
--

INSERT INTO `zanpakuto` (`id`, `imie`, `wybudzenie`, `element`) VALUES
(1, 'Hyōrinmaru', 'Wstąp na Zamarznięte Niebiosa', 2),
(2, 'Ryūjin Jakka', 'Wszelka materio świata, zamień się w popiół', 1),
(3, 'Kwieciński', 'Hehehe, yehehe, eee, puu, puu, yhyhyhy', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `zanpakuto`
--
ALTER TABLE `zanpakuto`
  ADD PRIMARY KEY (`id`),
  ADD KEY `element_zanpakuto` (`element`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zanpakuto`
--
ALTER TABLE `zanpakuto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zanpakuto`
--
ALTER TABLE `zanpakuto`
  ADD CONSTRAINT `element_zanpakuto` FOREIGN KEY (`element`) REFERENCES `elementy` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
