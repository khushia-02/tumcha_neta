-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2024 at 07:19 AM
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
-- Database: `tumcha_neta`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_achievements`
--

CREATE TABLE `candidate_achievements` (
  `candidate_username` varchar(200) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `name_of_award` varchar(255) DEFAULT NULL,
  `award_ceremony_img` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_additional_information`
--

CREATE TABLE `candidate_additional_information` (
  `candidate_username` varchar(200) NOT NULL,
  `about_detail` longtext DEFAULT NULL,
  `candidate_marriage_status` varchar(200) NOT NULL,
  `spouse_name` varchar(100) DEFAULT NULL,
  `candidate_office_address` varchar(255) DEFAULT NULL,
  `candidate_office_contact` int(200) DEFAULT NULL,
  `candidate_office_email` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate_additional_information`
--

INSERT INTO `candidate_additional_information` (`candidate_username`, `about_detail`, `candidate_marriage_status`, `spouse_name`, `candidate_office_address`, `candidate_office_contact`, `candidate_office_email`) VALUES
('rinku_10', 'rtgdfg', 'married', 'Dream Wife ', 'Kya patta', 2147483647, 'adityakalkote2002@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_further_details`
--

CREATE TABLE `candidate_further_details` (
  `candidate_username` varchar(200) NOT NULL,
  `self_profession` varchar(100) DEFAULT NULL,
  `candidate_education` varchar(200) NOT NULL,
  `candidate_area_pincode` int(11) DEFAULT NULL,
  `candidate_city` varchar(100) DEFAULT NULL,
  `candidate_area_current` varchar(100) DEFAULT NULL,
  `candidate_gender` varchar(10) DEFAULT NULL,
  `candidate_dob` date DEFAULT NULL,
  `candidate_age` int(200) NOT NULL,
  `candidate_email` varchar(100) DEFAULT NULL,
  `candidate_state` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate_further_details`
--

INSERT INTO `candidate_further_details` (`candidate_username`, `self_profession`, `candidate_education`, `candidate_area_pincode`, `candidate_city`, `candidate_area_current`, `candidate_gender`, `candidate_dob`, `candidate_age`, `candidate_email`, `candidate_state`) VALUES
('rinku_10', 'Employee', 'graduate', 413517, 'Udgir', 'Pune', 'male', '2002-06-20', 21, 'rinku1@gmail.com', 'Maharashtra');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_goals`
--

CREATE TABLE `candidate_goals` (
  `candidate_username` varchar(200) NOT NULL,
  `year` int(11) DEFAULT NULL,
  `dead_line` date DEFAULT NULL,
  `information` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_party_ideologies`
--

CREATE TABLE `candidate_party_ideologies` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `party` varchar(50) NOT NULL,
  `party_name` varchar(100) DEFAULT NULL,
  `party_logo_path` varchar(255) DEFAULT NULL,
  `profile_banner_path` varchar(255) DEFAULT NULL,
  `ideologies` text DEFAULT NULL,
  `party_position` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_party_ideologies`
--

INSERT INTO `candidate_party_ideologies` (`id`, `username`, `party`, `party_name`, `party_logo_path`, `profile_banner_path`, `ideologies`, `party_position`) VALUES
(18, 'khushi', 'other', 'new', './candidate_uploads/basic.png', './candidate_uploads/banner-12.jpg', 'Aliquip ex ea consequat sed duis\r\nIrure dolor voluptate velit esse\r\nCillum dolore eu fugiat nulla pariatur\r\nExcepteur sint occaecat cupidatat non', 'intern'),
(19, 'khuh', 'congress', '', 'congress.svg', './candidate_uploads/basic.png', 'liquip ex ea consequat sed duis\r\nIrure dolor voluptate velit esse\r\nCillum dolore eu fugiat nulla pariatur\r\nExcepteur sint occaecat cupidatat non', 'intern'),
(20, 'khushi', 'bjp', '', 'bjp_logo.webp', 'Fionca/candidate_uploads/basic.png', 'dddddddd', 'intern');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_political_ideologies`
--

CREATE TABLE `candidate_political_ideologies` (
  `candidate_username` varchar(200) NOT NULL,
  `education_type` varchar(255) DEFAULT NULL,
  `education_year_of_completion` int(11) DEFAULT NULL,
  `education_institute_name` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `education_university_name` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate_political_ideologies`
--

INSERT INTO `candidate_political_ideologies` (`candidate_username`, `education_type`, `education_year_of_completion`, `education_institute_name`, `qualification`, `education_university_name`) VALUES
('atharva_15', '10th', 2020, 'LBSV', '10th', 'SPPU '),
('atharva_15', '12th', 2021, 'MUMU', '12th', 'SPPU ');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_registration`
--

CREATE TABLE `candidate_registration` (
  `candidate_username` varchar(50) NOT NULL,
  `candidate_fullname` varchar(100) NOT NULL,
  `candidate_email` varchar(200) NOT NULL,
  `candidate_contact` varchar(20) NOT NULL,
  `password_generation` varchar(255) NOT NULL,
  `candidate_profile_path` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate_registration`
--

INSERT INTO `candidate_registration` (`candidate_username`, `candidate_fullname`, `candidate_email`, `candidate_contact`, `password_generation`, `candidate_profile_path`) VALUES
('aditya_1', 'Aditya Kalkote', 'adityakalkote2002@gmail.com', '7249883174', '$2y$10$sWQtOi8vYja7G79YXDnvTOscpT75mzv1nWhgswVO6tsB2BFvRsSpe', 'candidate_uploads/7.png'),
('shravan_2', 'Shravan Nale', 'shravan1@gmail.com', '1254879632', '$2y$10$5Ho29fEFJxnP3x8QAbQ.NuY4FEVOn6xWV1kO3jQwTpu4e0xZ8Z.g.', 'candidate_uploads/2.jpeg'),
('vinay_3', 'Vinay Rane ', 'vinay1@gmail.com', '8545789658', '$2y$10$sMz79QsDCVYDNeasKJG.QuVVko1l7lvY7BZtDTtwLd2xPQIj3d8MS', 'candidate_uploads/4.png'),
('karan_4', 'Karan Singh', 'karan1@gmail.com', '8459621587', '$2y$10$JRuEQLBAYnlysn.Mp5tY8umrC4v5JVzqvbopg6DpsDLsMU6DQ9Ki2', 'candidate_uploads/5.jpeg'),
('chiragh_5', 'Chiragh Jain', 'chiragh1@gmail.com', '9561247853', '$2y$10$xXME0fl8jsJCrf40L2Wh3emy3IUqlkOcCVIEe3WvJ88DN.u30SRcu', 'candidate_uploads/6.jpeg'),
('sheetal_6', 'Sheetal Bodke', 'sheetal1@gmail.com', '5369874521', '$2y$10$q7YpWiHedj1qXJP0y99M7eWFMeNiUQz3/7dTrzaaNVOevZ3dUljb.', 'candidate_uploads/12.jpeg'),
('shanti_7', 'Shanti Rathi ', 'shanti1@gmail.com', '6213894578', '$2y$10$uNaOb.JMSKqzSuggEyprke.fCsTVFZtV3tTzYAO4GNAR96DTUSG9S', 'candidate_uploads/13.png'),
('chitra_8', 'Chitra Iyer', 'chitra1@gmail.com', '9642135896', '$2y$10$eKq/wSWy8Se17UqD7NXj5.JnvPOHoKN2/J6hSslZLa3MMsVfoNRYC', 'candidate_uploads/14.jpeg'),
('sahil_9', 'Sahil Chitole', 'sahil1@gmail.com', '5421369875', '$2y$10$ySPrpxdBOM2qY6El8x3lCuD0RcaGTLRpYpZNj5MzPteJqmZG3LoPG', 'candidate_uploads/11.jpeg'),
('rinku_10', 'Rinku Shaha', 'rinku1@gmail.com', '9547532568', '$2y$10$qSVsUbBjVxSBcvAQaB1XmODVg32XzGmBUirTGbtUvzZOZFX3s/U0.', 'candidate_uploads/9.jpeg'),
('indira_11', 'Indira Chauhan', 'indira1@gmail.com', '9545321458', '$2y$10$aPiVtOn7d0AlMUVUsVi/g.tR0GE6JFp46B8VQI0hiOJGstarNsuxy', 'candidate_uploads/17.jpeg'),
('rekha_12', 'Rekha Mishra', 'rekha1@gmail.com', '8457459658', '$2y$10$rwJ4wpUMeXlw51Gm3u/E6uc1ypnvRMhC8i2oYB7FkDJx2neS0TIRC', 'candidate_uploads/20.png'),
('soham_13', 'Soham Rane', 'soham1@gmail.com', '9654854758', '$2y$10$ZX1L3xoZDyzZGoImszxHBeX5tyKmxGx8EI3D2M5nHlRxzuq8MwFi.', 'candidate_uploads/10.png'),
('jay_14', 'Jay Rao', 'jay1@gmail.com', '3259864587', '$2y$10$r4FA5/eRCWG/9ewGlxr6VOPFlDVtjXEzRrhNINKRLAnzQSacXDBwa', 'candidate_uploads/7.png'),
('atharva_15', 'Atharva Kirloskar', 'atharva1@gmail.com', '9654285475', '$2y$10$Gc2STZWvtHQzrCue0rZdHe03uoam.QV3Y7lbMMdX74aLvPQbsKCjO', 'candidate_uploads/15.jpeg'),
('sanket_16', 'Sanket ', 'sanket1@gmail.com', '7845545696', '$2y$10$bF1Ro6cAO6L1M1629dqPeejqUhAb5b4SGfih2mymNSV38HUuN2tq6', 'candidate_uploads/7.png'),
('shubhada_17', 'Shubhada Joshi', 'joshi1@gmail.com', '8546965846', '$2y$10$6KEdqlxcwIVQtx/oRo0j0.0gxNW9yNY6nn2/GJ23/PImmlCLJoRVK', 'candidate_uploads/14.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_social_links`
--

CREATE TABLE `candidate_social_links` (
  `candidate_username` varchar(200) NOT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `whatsapp_channel_link` varchar(255) DEFAULT NULL,
  `candidate_linked_NGO` varchar(255) DEFAULT NULL,
  `additional_link` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate_social_links`
--

INSERT INTO `candidate_social_links` (`candidate_username`, `youtube`, `facebook`, `instagram`, `twitter`, `linkedin`, `whatsapp_channel_link`, `candidate_linked_NGO`, `additional_link`) VALUES
('aditya_1', 'https://youtu.be/k3ijQJjUbTs?si=DIwSWFWyvMgC3_gQ', 'https://youtu.be/k3ijQJjUbTs?si=DIwSWFWyvMgC3_gQ', 'https://youtu.be/k3ijQJjUbTs?si=DIwSWFWyvMgC3_gQ', 'https://youtu.be/k3ijQJjUbTs?si=DIwSWFWyvMgC3_gQ', 'https://www.linkedin.com/in/aditya-kalkote', 'https://youtu.be/k3ijQJjUbTs?si=DIwSWFWyvMgC3_gQ', 'https://youtu.be/k3ijQJjUbTs?si=DIwSWFWyvMgC3_gQ', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_upcoming_events`
--

CREATE TABLE `candidate_upcoming_events` (
  `candidate_username` varchar(200) NOT NULL,
  `event_title` varchar(255) DEFAULT NULL,
  `event_date_time` datetime DEFAULT NULL,
  `event_place` varchar(255) DEFAULT NULL,
  `event_startdate_time` datetime DEFAULT NULL,
  `event_enddate_time` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_video_links_path`
--

CREATE TABLE `candidate_video_links_path` (
  `candidate_username` varchar(200) NOT NULL,
  `title_of_interview` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_working_imgs`
--

CREATE TABLE `candidate_working_imgs` (
  `candidate_username` varchar(200) DEFAULT NULL,
  `img_path` varchar(200) NOT NULL,
  `img_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `candidate_working_imgs`
--

INSERT INTO `candidate_working_imgs` (`candidate_username`, `img_path`, `img_name`) VALUES
(NULL, '/candidate_uploads7.png', '7.png'),
(NULL, '/candidate_uploads2.jpeg', '2.jpeg'),
(NULL, '/candidate_uploads16.png', '16.png'),
(NULL, '/candidate_uploads15.jpeg', '15.jpeg'),
('aditya_1', '/candidate_uploads2.jpeg', '2.jpeg'),
('aditya_1', '/candidate_uploads3.jpeg', '3.jpeg'),
('aditya_1', '/candidate_uploads7.png', '7.png'),
('aditya_1', '/candidate_uploads16.png', '16.png');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_works`
--

CREATE TABLE `candidate_works` (
  `candidate_username` varchar(50) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `candidate_areas_of_workingfor` varchar(255) DEFAULT NULL,
  `details_of_working` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate_works`
--

INSERT INTO `candidate_works` (`candidate_username`, `year`, `district`, `area`, `pincode`, `candidate_areas_of_workingfor`, `details_of_working`) VALUES
(NULL, '2000', 'Dhule', 'Main Road', 90909, 'Health', 'OKOKO'),
(NULL, '2001', 'Pune', 'Shivaji Nagar', 909089, 'Revenue', 'OKOKOKOK'),
(NULL, '2002', 'Dhule', 'Main Road', 90909, 'Health', 'OKOKOKOK'),
(NULL, '2001', 'Pune', 'Shivaji Nagar', 909089, 'Education', 'OKOKOKOKOK'),
('aditya_1', '2001', 'Dhule', 'Main Road', 90909, 'Health', 'oKOKOKOKOOK'),
('aditya_1', '2002', 'Pune', 'Shivaji Nagar', 989878, 'Education', 'OKOKOOKOK');

-- --------------------------------------------------------

--
-- Table structure for table `default_party_logos`
--

CREATE TABLE `default_party_logos` (
  `party_name` varchar(50) NOT NULL,
  `logo_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `default_party_logos`
--

INSERT INTO `default_party_logos` (`party_name`, `logo_path`) VALUES
('Bhartiya Janta Party', 'party_logo/bjp_logo.webp'),
('Congress', 'party_logo/congress_logo.svg'),
('Shivsena', 'party_logo/shivsena_logo.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_party_ideologies`
--
ALTER TABLE `candidate_party_ideologies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_registration`
--
ALTER TABLE `candidate_registration`
  ADD PRIMARY KEY (`candidate_username`),
  ADD UNIQUE KEY `candidate_email` (`candidate_email`),
  ADD UNIQUE KEY `candidate_contact` (`candidate_contact`);

--
-- Indexes for table `candidate_works`
--
ALTER TABLE `candidate_works`
  ADD KEY `fk_candidate_username_candidcandidate_works` (`candidate_username`);

--
-- Indexes for table `default_party_logos`
--
ALTER TABLE `default_party_logos`
  ADD PRIMARY KEY (`party_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_party_ideologies`
--
ALTER TABLE `candidate_party_ideologies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
