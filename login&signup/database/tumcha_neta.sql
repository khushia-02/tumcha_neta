-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 11:19 AM
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
-- Table structure for table `candidates_upcoming_events`
--

CREATE TABLE `candidates_upcoming_events` (
  `event_title` varchar(255) DEFAULT NULL,
  `event_date_time` datetime DEFAULT NULL,
  `event_place` varchar(255) DEFAULT NULL,
  `event_startdate_time` datetime DEFAULT NULL,
  `event_enddate_time` datetime DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_achievements`
--

CREATE TABLE `candidate_achievements` (
  `id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `name_of_award` varchar(255) DEFAULT NULL,
  `award_ceremony_img` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_additional_information`
--

CREATE TABLE `candidate_additional_information` (
  `candidate_username_available` varchar(50) DEFAULT NULL,
  `about_detail` longtext DEFAULT NULL,
  `spouse_name` varchar(100) DEFAULT NULL,
  `candidate_tagline` varchar(255) DEFAULT NULL,
  `candidate_video_path` varchar(255) DEFAULT NULL,
  `candidate_office_address` varchar(255) DEFAULT NULL,
  `candidate_party_name` varchar(100) DEFAULT NULL,
  `candidate_logo_path` varchar(255) DEFAULT NULL,
  `candidate_banner_path` varchar(255) DEFAULT NULL,
  `candidate_books_pdf_path` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_education`
--

CREATE TABLE `candidate_education` (
  `education_type` varchar(255) DEFAULT NULL,
  `education_year_of_completion` int(11) DEFAULT NULL,
  `education_institute_name` varchar(255) DEFAULT NULL,
  `qualification` varchar(255) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_further_details`
--

CREATE TABLE `candidate_further_details` (
  `candidate_username_available` varchar(50) DEFAULT NULL,
  `profile_photo_path` varchar(255) DEFAULT NULL,
  `self_profession` varchar(100) DEFAULT NULL,
  `about_candidate` varchar(255) DEFAULT NULL,
  `candidate_area_pincode` int(11) DEFAULT NULL,
  `candidate_city` varchar(100) DEFAULT NULL,
  `candidate_area_current` varchar(100) DEFAULT NULL,
  `candidate_gender` varchar(10) DEFAULT NULL,
  `candidate_dob` date DEFAULT NULL,
  `candidate_email` varchar(100) DEFAULT NULL,
  `candidate_state` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_goals`
--

CREATE TABLE `candidate_goals` (
  `year` int(11) DEFAULT NULL,
  `dead_line` date DEFAULT NULL,
  `information` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_registration`
--

CREATE TABLE `candidate_registration` (
  `candidate_username_available` varchar(50) NOT NULL,
  `candidate_fullname` varchar(100) NOT NULL,
  `email` int(40) NOT NULL,
  `candidate_contact` varchar(20) NOT NULL,
  `password_generation` varchar(255) NOT NULL,
  `code` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `candidate_registration`
--

INSERT INTO `candidate_registration` (`candidate_username_available`, `candidate_fullname`, `email`, `candidate_contact`, `password_generation`, `code`) VALUES
('khushi1a', 'Khushi Agarwal', 0, '8208726968', '$2y$12$wtEsISNdEOBI4bHMAHrxsOC.tDkzWBeAHRJ91ZGx7EmbZBaLQp9qm', '');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_social_links`
--

CREATE TABLE `candidate_social_links` (
  `youtube` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `whatsapp_channel_link` varchar(255) DEFAULT NULL,
  `candidate_linked_NGO` varchar(255) DEFAULT NULL,
  `additional_link` text DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_video_links_path`
--

CREATE TABLE `candidate_video_links_path` (
  `title_of_interview` varchar(255) DEFAULT NULL,
  `video_link` varchar(255) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_works`
--

CREATE TABLE `candidate_works` (
  `candidate_username_available` varchar(50) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `district` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `pincode` int(11) DEFAULT NULL,
  `candidate_areas_of_workingfor` varchar(255) DEFAULT NULL,
  `details_of_working` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates_upcoming_events`
--
ALTER TABLE `candidates_upcoming_events`
  ADD KEY `fk_candidates_upcoming_events` (`candidate_id`);

--
-- Indexes for table `candidate_achievements`
--
ALTER TABLE `candidate_achievements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_additional_information`
--
ALTER TABLE `candidate_additional_information`
  ADD KEY `candidate_username_available` (`candidate_username_available`);

--
-- Indexes for table `candidate_education`
--
ALTER TABLE `candidate_education`
  ADD KEY `fk_candidate_education` (`candidate_id`);

--
-- Indexes for table `candidate_further_details`
--
ALTER TABLE `candidate_further_details`
  ADD KEY `candidate_username_available` (`candidate_username_available`);

--
-- Indexes for table `candidate_registration`
--
ALTER TABLE `candidate_registration`
  ADD PRIMARY KEY (`candidate_username_available`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `candidate_contact` (`candidate_contact`);

--
-- Indexes for table `candidate_social_links`
--
ALTER TABLE `candidate_social_links`
  ADD KEY `fk_candidate_social_links` (`candidate_id`);

--
-- Indexes for table `candidate_video_links_path`
--
ALTER TABLE `candidate_video_links_path`
  ADD KEY `fk_candidate_video_links_path` (`candidate_id`);

--
-- Indexes for table `candidate_works`
--
ALTER TABLE `candidate_works`
  ADD PRIMARY KEY (`candidate_username_available`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_achievements`
--
ALTER TABLE `candidate_achievements`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
