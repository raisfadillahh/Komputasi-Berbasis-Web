-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2024 at 04:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raisdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quote` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `title`, `description`, `quote`, `image_url`) VALUES
(1, 'About', 'UI/UX Designer & Web Developer', NULL, NULL),
(2, '4 Agustus 2004', '+62 851-5657-4827', 'Tangerang Selatan', NULL),
(3, '20', 'rais.fadillahhasani@student.upj.ac.id\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`) VALUES
(1, 'adsasd', 'rahmatnasution694@gmail.com', 'asdasd', 'asdasd', '2024-10-23 14:50:49'),
(2, 'duaempatlima', 'rahmatnasution694@gmail.com', 'asd', 'ASDASD', '2024-10-23 15:03:29'),
(3, 'rahmat', 'rahmatnasution694@gmail.com', 'asd', 'asd', '2024-10-23 15:10:23'),
(4, 'adsad', 'rahmatnasution694@gmail.com', 'asd', 'a', '2024-10-23 15:14:03');

-- --------------------------------------------------------

--
-- Table structure for table `experience`
--

CREATE TABLE `experience` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quote` text DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `experience`
--

INSERT INTO `experience` (`id`, `title`, `description`, `quote`, `start_date`, `end_date`, `company`, `image_url`) VALUES
(1, 'Experience', '', NULL, NULL, NULL, NULL, NULL),
(2, 'UKM COURT DIVISION', 'Badminton', 'The Court Division in the Badminton UKM (Student Activity Unit) is responsible for managing and organizing the court during training sessions and events. This includes ensuring proper setup, coordinating the availability of courts, and maintaining an efficient schedule for players. The division ensures that the logistics related to court use are handled smoothly, allowing training or tournaments to run without interruptions..', NULL, NULL, NULL, NULL),
(3, 'NON-ACADEMIC ACHIEVEMENT DIVISION', 'Himaforka', 'The Non-Academic Achievement Division within the Student Association (HIMA) is responsible for managing, developing, and facilitating various activities and achievements of students in non-academic fields. This division focuses on aspects that are not directly related to academic performance but are still essential in supporting the development of soft skills and students\' interests.', NULL, NULL, NULL, NULL),
(4, 'LOGISTIC DIVISION', 'Prima', 'Logistic division within PRIMA is responsible for planning and procuring logistical needs for events, managing inventory, coordinating transportation, arranging venues, providing technical support, and conducting evaluations for continuous improvement.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quote` text DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `home`
--

INSERT INTO `home` (`id`, `title`, `description`, `quote`, `image_url`) VALUES
(1, 'Rais Fadillah Hasani', 'I am a student at Universitas Pembangunan Jaya', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `quote` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `title`, `description`, `quote`, `link`, `image_url`) VALUES
(1, 'My Projects', '', NULL, NULL, NULL),
(2, 'Project UI/UX', 'Tugas mata kuliah imk', NULL, NULL, NULL),
(3, 'Pengabdian Masyarakat', 'Tugas mata kuliah pembangunan berkelanjutan', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `experience`
--
ALTER TABLE `experience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experience`
--
ALTER TABLE `experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
