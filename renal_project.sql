-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Sep 01, 2020 at 11:00 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renal_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

DROP TABLE IF EXISTS `admin_info`;
CREATE TABLE IF NOT EXISTS `admin_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`id`, `username`, `emailid`, `password`) VALUES
(1, 'Admin', 'admin@renalproject.org', 'renalproject@123');

-- --------------------------------------------------------

--
-- Table structure for table `articles_blogs`
--

DROP TABLE IF EXISTS `articles_blogs`;
CREATE TABLE IF NOT EXISTS `articles_blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `emailid` varchar(100) NOT NULL,
  `work_designation` varchar(100) NOT NULL,
  `profile pic` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT '../assets/article writer/blank-profile.png',
  `article_headline` varchar(5000) NOT NULL,
  `article_content` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `article_image` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `articles_blogs`
--

INSERT INTO `articles_blogs` (`id`, `name`, `emailid`, `work_designation`, `profile pic`, `article_headline`, `article_content`, `article_image`) VALUES
(1, 'Hrushikesh Das', 'dashrushikesh1121@gmail.com', 'Web Developer', '../assets/article writer/Team_PIc.jpg', 'Low-cost dialysis centre inaugurated in Borivali, Mumbai', 'Hundreds of patients in suburban Mumbai having kidney conditions will not have to travel long distances for treatment as a hemodialysis centre has been inaugurated at Mangal Murti Hospital in Borivali. Along with the centre, an intensive cardiac care unit and emergency facility will also be available. These were inaugurated by Dr Yogesh Dube and Dr Suchit Mahale. The centre, initiated by The Renal Project (TRP), will provide dialysis at affordable rates as compared to private hospital fares. The project aims at helping backward class people get access to the treatment without having to burn a hole in their pockets. “Here, patients will be able to get their dialysis done in Rs 1,250 whereas the same treatment in a private hospital costs around Rs 2,000 – Rs 2,500. The inauguration is the first step towards building a chain of dialysis centres exactly where it is needed so that ailing and ageing patients do not have to travel long distances for treatment,” said Shashank Moddhia, Founder, The Renal Project. The initiative aims at reaching out to the remotest areas and help people and communities who cannot afford high private hospital rates. Also, the initiative wants to get rid of the scenario by opening micro dialysis centres on the outskirts of Tier I and Tier II cities. “The motive is not profits but service, because that is what the sector demands and is all about. We plan to open around 100 such centres in small pockets of districts such as Palghar, Dahanu, Buldhana, Canacona (in Goa) among others across the country. The goal is to reach maximum number of people in need with the treatment in minimum rates,” Moddhia added.', '../assets/articles images/Dialysis-Center-31-e1557386240741.jpeg'),
(2, 'Hrushikesh', 'dashrushikesh1121@gmail.com', 'web developer', '../assets/article writer/blank-profile.png', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas, consequatur.', 'vgvhbjkvfvhjnjnjk', '../assets/articles images/Dialysis-Center-31-e1557386240741.jpeg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
